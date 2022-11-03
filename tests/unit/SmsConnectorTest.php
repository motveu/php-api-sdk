<?php

declare(strict_types = 1);

namespace Tests\unit;

use Motv\Connector\Sms\Entities\Sms\DealerEntity;
use Motv\Connector\Sms\Exceptions\Sms\CustomerUnknownCustomerException;

class SmsConnectorTest extends SmsConnector
{

	public function testPairsConnector(): void
	{
		$this->assertIsArray($this->connector->Bouquet()->getPairs());
		$this->assertIsArray($this->connector->Category()->getPairs());
		$this->assertIsArray($this->connector->CustomValue()->getPairs());
		$this->assertIsArray($this->connector->Dealer()->getPairs());
		$this->assertIsArray($this->connector->Gallery()->getPairs());
		$this->assertIsArray($this->connector->Graph()->getPairs());
		$this->assertIsArray($this->connector->Imap()->getPairs());
		$this->assertIsArray($this->connector->Product()->getPairs());
		$this->assertIsArray($this->connector->ProductGroup()->getPairs());
		$this->assertIsArray($this->connector->Report()->getPairs());
		$this->assertIsArray($this->connector->Right()->getPairs());
		$this->assertIsArray($this->connector->Role()->getPairs());
		$this->assertIsArray($this->connector->Smtp()->getPairs());
		$this->assertIsArray($this->connector->Template()->getPairs());
		$this->assertIsArray($this->connector->TicketCategory()->getPairs());
		$this->assertIsArray($this->connector->TicketDepartment()->getPairs());
		$this->assertIsArray($this->connector->TicketNotificationsConfig()->getPairs());
		$this->assertIsArray($this->connector->TicketPriority()->getPairs());
		$this->assertIsArray($this->connector->User()->getPairs());
	}

	public function testAssertExceptions(): void
	{
		$this->assertException(function (): void {
			$this->connector->Customer()->getData(-1);
		}, CustomerUnknownCustomerException::class);
	}

	public function testGetDataConnector(): void
	{
		$dealer = $this->connector->Dealer()->getData(1);
		$this->assertInstanceOf(DealerEntity::class, $dealer);
	}

	public function testSelectionConnector(): void
	{
		$selection = $this->connector->Dealer()->selection();
		$this->assertIsArray($selection);
		$this->assertArrayHasKey('rows', $selection);
		$this->assertArrayHasKey('row_count', $selection);
		$this->assertIsInt($selection['row_count']);
		$this->assertIsArray($selection['rows']);

		$dealer = $this->connector->Dealer()->getData(1);
		$this->assertInstanceOf(DealerEntity::class, $dealer);

		$selection = $this->connector->Dealer()->selection(['dealers_id' => 1]);
		$this->assertIsArray($selection);
		$this->assertArrayHasKey('rows', $selection);
		$this->assertArrayHasKey('row_count', $selection);
		$this->assertIsInt($selection['row_count']);
		$this->assertEquals(1, $selection['row_count']);
		$dealer2 = $selection['rows'][0];
		$this->assertInstanceOf(DealerEntity::class, $dealer2);

		$this->assertEquals($dealer->dealers_id, $dealer2->dealers_id);
		$this->assertEquals($dealer->dealers_name, $dealer2->dealers_name);
		$this->assertEquals($dealer->dealers_any_card, $dealer2->dealers_any_card);
	}

}
