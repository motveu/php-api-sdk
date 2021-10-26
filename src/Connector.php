<?php

declare(strict_types=1);

namespace Motv;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\TransferException;

abstract class Connector
{

    /** @var string */
    protected $url;

    /** @var string */
    protected $username;

    /** @var string */
    protected $secret;

    public function __construct(string $url, string $username, string $secret)
    {
        $this->url = $url;
        $this->username = $username;
        $this->secret = $secret;
        $this->exceptions = json_decode($this->exceptions, true);
    }

    public function call(string $model, string $method, array $parameters)
    {
        $timestamp = time();
        $header = $this->username . ':' . $timestamp . ':' . sha1($timestamp . $this->username . $this->secret);
        $finalUrl = $this->url . '/api/' . str_replace('_', '/', $model) . '/' . $method;
        $parameters = ['data' => $parameters];

        $client = new Client();

        try {
            $response = $client->post($finalUrl, [
                'headers' => [
                    $this->headerName => $header,
                ],
                'body'    => json_encode($parameters),
            ]);
        } catch (TransferException $e) {
            throw $e;
        }

        $responseContent = json_decode($response->getBody()->getContents(), true);

        if (! is_array($responseContent) || ! array_key_exists('status', $responseContent) || ! array_key_exists($responseContent['status'], $this->exceptions)) {
            $exceptionName = '\Motv\\' . $this->namespace . '\UnknownApiException';

            throw new  $exceptionName($responseContent);
        } elseif ($responseContent['status'] !== 1) {
            $exceptionName = '\Motv\\' . $this->namespace . '\\' . $this->exceptions[$responseContent['status']];

            throw new $exceptionName($responseContent['response']);
        }

        return $responseContent['response'];
    }
}
