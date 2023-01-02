<?php

declare(strict_types = 1);

namespace Tests\unit;

use Motv\Connector\Mw\AdminConnector;
use Nette\Neon\Neon;

class MwConnector extends ConnectorBaseTest
{

	protected AdminConnector $connector;

	protected function setUp(): void
	{
		$config = Neon::decode(file_get_contents('tests/config.local.neon'));
		$this->connector = new AdminConnector($config['mw']['url'], $config['mw']['username'], $config['mw']['secret']);
	}

}
