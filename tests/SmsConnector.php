<?php

declare(strict_types = 1);

namespace Tests\unit;

use Motv\Connector\Sms\AdminConnector;
use Nette\Neon\Neon;

class SmsConnector extends SuperBaseTest
{

	protected AdminConnector $connector;

	protected function setUp(): void
	{
		$config = Neon::decode(file_get_contents('tests/config.local.neon'));
		$this->connector = new AdminConnector($config['sms']['url'], $config['sms']['username'], $config['sms']['secret']);
	}

}
