<?php

declare(strict_types=1);

namespace Motv\Connector;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;
use Monolog\DateTimeImmutable;
use Monolog\Logger;
use Motv\Connector\Mw\Exceptions\UnknownApiException;
use Motv\Connector\Mw\InputEntities\MotvEntity;
use MotvInternal\SchemaProcessor\Enum\MotvEnum;
use MotvInternal\SchemaProcessor\SchemaProcessor;
use PHPUnit\Framework\Constraint\ArrayHasKey;

abstract class Connector {

	/** @var string */
	protected $url;

	/** @var string */
	protected $username;

	/** @var string */
	protected $secret;

	/** @var Logger */
	protected $logger;

	/** @var array */
	protected $entitiesNamespaces;

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

		$parameters = $this->prepareForRequest($parameters);
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

		if ((!is_array($responseContent) || !array_key_exists('status', $responseContent) || !array_key_exists($responseContent['status'], $this->exceptions)) && $responseContent['status'] !== 1) {
			$exceptionName = '\Motv\Connector\\' . $this->namespace . '\Exceptions\UnknownApiException';
			$this->log('error', 'Received response with unknown error', [$responseContent['response']]);

			throw new  $exceptionName($responseContent);
		} elseif ($responseContent['status'] !== 1) {
			$this->log('warning', 'Received response with exception ' . $this->exceptions[$responseContent['status']], [$responseContent['response']]);
			$exceptionName = $this->exceptions[$responseContent['status']];

			throw new $exceptionName($responseContent['response']);
		}

		$this->log('info', 'Received response with data', $responseContent);

		return is_array($responseContent['response']) ? $this->setUpFromArray($responseContent['response']) : $responseContent['response'];
	}

	/**
	 * @param array<string, mixed> $data
	 * @return mixed
	 */
	private function setUpFromArray(array $data)
	{
		if (isset($data['_class'])) {
			try {
				$className = $data['_class'];
				unset($data['_class']);

				foreach ($this->entitiesNamespaces as $entitiesNamespace) {
					try {
						new \ReflectionClass($entitiesNamespace . $className);
						$className = $entitiesNamespace . $className;

						break;
					} catch (\Throwable) {
						continue;
					}
				}

				new \ReflectionClass($className);
				$instance = new $className();

				foreach ($data as $k => $v) {
					$property = new \ReflectionProperty($className, $k);
					$typeName = $property->getType()->getName();

					try {
						new \ReflectionEnum($typeName);
						$v = ($property->getType()->getName())::from((string) $v);
					} catch (\Throwable) {
						// ignore
					}

					try {
						$reflectionClass = new \ReflectionClass($typeName);

						if ($reflectionClass->getShortName() === 'DateTimeImmutable') {
							$date = new \DateTimeImmutable();
							$date->setTimestamp(strtotime($v));
							$v = $date;
						}
					} catch (\Throwable) {
						// ignore
					}

					if (is_array($v)) {
						$v = $this->setUpFromArray($v);
					}

					$instance->$k = $v;
				}

				return $instance;
			} catch (\Throwable) {
				// ignore
			}
		} else {
			foreach ($data as $k => $v) {
				if (is_array($v)) {
					$data[$k] = $this->setUpFromArray($v);
				}
			}

			return $data;
		}
	}

	/**
	 * @param array<string, mixed> $data
	 * @return array<string, mixed>
	 */
	private function prepareForRequest(array $data): array
	{
		foreach ($data as $k => $v) {
			if ($v instanceof MotvEntity || $v instanceof \Motv\Connector\Sms\InputEntities\MotvEntity) {
				$data[$k] = $this->prepareForRequest($this->serialize($v));
			} else if (\is_array($v) || $v instanceof ArrayHasKey) {
				$data[$k] = $this->prepareForRequest((array) $v);
			} else {
				if ($v instanceof \DateTime || $v instanceof \DateTimeImmutable) {
					$data[$k] = $v->format('Y-m-d H:i:s');
				}
			}
		}

		return $data;
	}

	private function serialize($entity): array {
		$data = [];

		foreach (\get_object_vars($entity) as $k => $v) {
			$data[$k] = $v instanceof \BackedEnum ? $v->value : $v;
		}

		return $this->serializeMotvEntity($data);
	}

	private function serializeMotvEntity($data): array
	{
		if ($data instanceof MotvEntity || $data instanceof \Motv\Connector\Sms\InputEntities\MotvEntity) {
			$data = $this->serialize($data);
		}

		foreach ($data as $k => $v) {
			if (\is_array($v)) {
				$data[$k] = self::serializeMotvEntity($v);
			} elseif ($v instanceof MotvEntity || $v instanceof \Motv\Connector\Sms\InputEntities\MotvEntity) {
				$data[$k] = self::serializeMotvEntity($this->serialize($v));
			} elseif ($v instanceof \BackedEnum) {
				$data[$k] = $v->value;
			}
		}

		return $data;
	}
}