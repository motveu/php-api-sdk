<?php

declare(strict_types=1);

namespace Motv\Connector;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;
use Monolog\DateTimeImmutable;
use Monolog\Logger;
use Motv\Connector\Mw\Exceptions\UnknownApiException;

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

	public function call(string $model, string $method, array $parameters, ?string $returnClass = null)
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
			$exceptionName = '\Motv\Connector\\' . $this->namespace . '\Exceptions\UnknownApiException';
			$this->log('error', 'Received response with unknown error', [$responseContent['response']]);

			throw new  $exceptionName($responseContent);
		} elseif ($responseContent['status'] !== 1) {
			$this->log('warning', 'Received response with exception ' . $this->exceptions[$responseContent['status']], [$responseContent['response']]);
			$exceptionName = $this->exceptions[$responseContent['status']];

			throw new $exceptionName($responseContent['response']);
		}

		$this->log('info', 'Received response with data', $responseContent);
		$response = $responseContent['response'];

		if ($returnClass !== null) {
			if (is_array($response)) {
				$response = $this->setUpFromArray($response, $returnClass);
			} else {
				$response = $this->setUpFromEnum($response, $returnClass);
			}
		}

		return $response;
	}

	/**
	 * @param scalar $value
	 * @return mixed
	 */
	private function setUpFromEnum($value, string $returnClass)
	{
		try {
			new \ReflectionEnum($returnClass);
			$value = ($returnClass)::from((string) $value);
		} catch (\Throwable) {
			// ignore
		}

		return $value;
	}

	/**
	 * @param array<string, mixed> $data
	 * @return mixed
	 */
	private function setUpFromArray(array $data, string $returnClass)
	{
		$instance = new $returnClass();

		foreach ($data as $k => $v) {
			$property = new \ReflectionProperty($returnClass, $k);
			$typeName = $property->getType()->getName();

			try {
				new \ReflectionEnum($typeName);
				$v = ($property->getType()->getName())::from((string) $v);
			} catch (\Throwable) {
				// ignore
			}

			try {
				$reflectionClass = new \ReflectionClass($typeName);

				if (is_array($v)) {
					$v = $this->setUpFromArray($v, $typeName);
				} else if ($reflectionClass->getShortName() === 'DateTimeImmutable') {
					$date = new \DateTimeImmutable();
					$date->setTimestamp(strtotime($v));
					$v = $date;
				}
			} catch (\Throwable) {
				// ignore
			}

			$instance->$k = $v;
		}

		return $instance;
	}

}