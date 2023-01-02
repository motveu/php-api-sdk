<?php

declare(strict_types = 1);

namespace unit;

use Motv\Connector\Mw\Exceptions\Mw\ReportUnknownReportException;
use Motv\Connector\Mw\Exceptions\Mw\VodUnknownException;
use Motv\Connector\Mw\VodUpload;
use Nette\Neon\Neon;
use Tests\unit\ConnectorBaseTest;

class VodUploadTest extends ConnectorBaseTest
{

	private VodUpload $vodUpload;

	protected function setUp(): void
	{
		$config = Neon::decode(file_get_contents('tests/config.local.neon'));
		exec('rm -Rf ' . __DIR__ . '/../../temp');
		@mkdir(__DIR__ . '/../../temp', 0777, true);
		$this->vodUpload = new VodUpload($config['mw']['url'], $config['mw']['username'], $config['mw']['secret'], $config['mw']['urlStorage'], __DIR__ . '/../../temp');
	}

	public function testVodUpload(): void
	{
		$this->vodUpload->uploadVodFile(2499, __DIR__ . '/../_data/test.mp4');

		$this->assertException(function (): void {
			$this->vodUpload->uploadVodFile(2499, 'XXXXX');
		}, \Exception::class);

		$this->assertException(function (): void {
			$this->vodUpload->uploadVodFile(-1, __DIR__ . '/../_data/test.mp4');
		}, VodUnknownException::class);
	}
}
