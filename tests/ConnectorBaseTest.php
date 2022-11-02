<?php

declare(strict_types = 1);

namespace Tests\unit;

use Codeception\PHPUnit\TestCase;
use Motv\Connector\Connector;
use Motv\Connector\Mw\AdminConnector;

class SuperBaseTest extends TestCase
{

	protected function assertException(
		callable $callback,
		string $expectedException,
		?int $expectedCode = null,
		?string $expectedMessage = null
	): void
	{
		$expectedException = \ltrim($expectedException, '\\');

		if (!\class_exists($expectedException) && !\interface_exists($expectedException)) {
			$this->fail(\sprintf('An exception of type "%s" does not exist.', $expectedException));
		}

		try {
			$callback();
		} catch (\Throwable $e) {
			$class = \get_class($e);
			$message = $e->getMessage();
			$code = $e->getCode();

			$errorMessage = 'Failed asserting the class of exception';

			if ($message !== '' && $code !== null) {
				$errorMessage .= \sprintf(' (message was %s, code was %d)', $message, $code);
			} elseif ($code !== null) {
				$errorMessage .= \sprintf(' (code was %d)', $code);
			}

			$errorMessage .= '.';
			$this->assertInstanceOf($expectedException, $e, $errorMessage);

			if ($expectedCode !== null) {
				$this->assertEquals($expectedCode, $code, \sprintf('Failed asserting code of thrown %s.', $class));
			}

			if ($expectedMessage !== null) {
				$this->assertStringContainsString(
					$expectedMessage,
					$message,
					\sprintf('Failed asserting the message of thrown %s.', $class),
				);
			}

			return;
		}

		$errorMessage = 'Failed asserting that exception';

		if (\strtolower($expectedException) !== 'exception') {
			$errorMessage .= \sprintf(' of type %s', $expectedException);
		}

		$errorMessage .= ' was thrown.';
		$this->fail($errorMessage);
	}
}
