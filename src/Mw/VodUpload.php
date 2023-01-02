<?php

declare(strict_types=1);

namespace Motv\Connector\Mw;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;
use Monolog\Logger;

class VodUpload
{

	public AdminConnector $mwConnector;

	/** @var Logger */
	protected $logger = null;

	function __construct(private string $apiUrl, private string $username, private string $secret, private string $storageUrl, private string $tempPath)
	{
		$this->mwConnector = new AdminConnector($this->apiUrl, $this->username, $this->secret);
	}


	public function setLogger(Logger $logger)
	{
		$this->logger = $logger;
	}


	protected function log(string $severity, string $message, array $data = []): void
	{
		if ($this->logger === null) {
			return;
		}

		$this->logger->$severity($message, $data);
	}

	public function uploadVodFile(int $vodsId, string $filePath): void
	{
		if (!\file_exists($filePath)) {
			$this->log('error', 'File is not exists');

			throw new \Exception('File is not exists.');
		}

		$fileInfo = \pathinfo($filePath);
		$fileName = $fileInfo['filename'];
		$uploadToken = $this->mwConnector->Vod()->getUploadToken($vodsId);
		$partName = $fileName . \rand(0, 99) . 'part';
		$chunkSize = 15 * 1024 * 1024;

		\exec('split -b ' . $chunkSize . ' ' . $filePath . ' ' . $this->tempPath . '/' . $partName);

		$dir = \scandir($this->tempPath);
		$chunks = [];

		foreach ($dir as $item) {
			if (\str_contains($item, $partName)) {
				$chunks[$item] = $this->tempPath . '/' . $item;
			}
		}

		$cnt = 0;
		$client = new Client();
		$totalSize = 0;

		foreach ($chunks as $partfilePath) {
			$totalSize += filesize($partfilePath);
		}

		foreach ($chunks as $partFileName => $partfilePath) {
			$cnt++;
			$data = [
				'multipart' => [
					[
						'name' => 'localUpload',
						'contents' => 1,
					],
					[
						'name' => 'signedUploadToken',
						'contents' => $uploadToken['token'],
					],
					[
						'name' => 'flowChunkNumber',
						'contents' => $cnt,
					],
					[
						'name' => 'flowChunkSize',
						'contents' => $chunkSize,
					],
					[
						'name' => 'flowCurrentChunkSize',
						'contents' => filesize($partfilePath),
					],
					[
						'name' => 'flowTotalSize',
						'contents' => $totalSize,
					],
					[
						'name' => 'flowIdentifier',
						'contents' => $totalSize . $fileName,
					],
					[
						'name' => 'flowFilename',
						'contents' => $fileName,
					],
					[
						'name' => 'flowRelativePath',
						'contents' => $fileName,
					],
					[
						'name' => 'flowTotalChunks',
						'contents' => \count($chunks),
					],
					[
						'name'     => 'file',
						'contents' => \file_get_contents($partfilePath),
						'filename' => $partFileName,
						'Content-Type' => \mime_content_type($filePath),
					],
				],
			];
			$finalUrl = $this->storageUrl . '/api/vod/asyncVodUpload';

			$this->log('info', 'Sending request to "' . $finalUrl . '" with data', $data);

			try {
				$response = $client->post($finalUrl, $data);
			} catch (TransferException $e) {
				$this->log('error', 'Unable to retrieve response due to connection error', [$e->getMessage()]);

				throw $e;
			}

			$responseContent = json_decode($response->getBody()->getContents(), true);

			if ((!is_array($responseContent) || !array_key_exists('status', $responseContent) || !array_key_exists($responseContent['status'], $this->mwConnector->getExceptions())) && $responseContent['status'] !== 1) {
				$exceptionName = '\Motv\Connector\Mw\Exceptions\UnknownApiException';
				$this->log('error', 'Received response with unknown error', [$responseContent['response']]);

				throw new  $exceptionName($responseContent);
			} elseif ($responseContent['status'] !== 1) {
				$this->log('warning', 'Received response with exception ' . $this->mwConnector->getExceptions()[$responseContent['status']], [$responseContent['response']]);
				$exceptionName = $this->mwConnector->getExceptions()[$responseContent['status']];

				throw new $exceptionName($responseContent['response']);
			}

			$this->log('info', 'Received response with data', $responseContent);
		}
	}
}
