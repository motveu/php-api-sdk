<?php

declare(strict_types=1);

namespace Motv;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\TransferException;
use Monolog\Logger;

abstract class Connector {

	/** @var string */
	protected $url;

	/** @var string */
	protected $username;

	/** @var string */
	protected $secret;

	/** @var Logger */
	protected $logger;

	public function __construct(string $url, string $username, string $secret)
	{
		$this->url = $url;
		$this->username = $username;
		$this->secret = $secret;
		$this->exceptions = json_decode($this->exceptions, true);
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

	public function call(string $model, string $method, array $parameters)
	{
		$timestamp = time();
		$header = $this->username . ':' . $timestamp . ':' . sha1($timestamp . $this->username . $this->secret);
		$finalUrl = $this->url . '/api/' . str_replace('_', '/', $model) . '/' . $method;
		$parameters = ['data' => $parameters];

		$client = new Client();

		$this->log('info', 'Sending request to "' . $finalUrl . '" with data', $parameters);

		try {
			$response = $client->post($finalUrl, [
				'headers' => [
					$this->headerName => $header,
				],
				'body'    => json_encode($parameters),
			]);
		} catch (TransferException $e) {
			$this->log('error', 'Unable to retrieve response due to connection error', [$e->getMessage()]);

			throw $e;
		}

		$responseContent = json_decode($response->getBody()->getContents(), true);

		if (!is_array($responseContent) || !array_key_exists('status', $responseContent) || !array_key_exists($responseContent['status'], $this->exceptions)) {
			$exceptionName = '\Motv\\' . $this->namespace . '\UnknownApiException';
			$this->log('error', 'Received response with unknown error', [$responseContent['response']]);

			throw new  $exceptionName($responseContent);
		} elseif ($responseContent['status'] !== 1) {
			$this->log('warning', 'Received response with exception ' . $this->exceptions[$responseContent['status']], [$responseContent['response']]);
			$exceptionName = '\Motv\\' . $this->namespace . '\\' . $this->exceptions[$responseContent['status']];

			throw new $exceptionName($responseContent['response']);
		}

		$this->log('info', 'Received response with data', $responseContent);

		return $responseContent['response'];
	}


}