<?php

declare(strict_types = 1);

namespace Tests\unit;

use Motv\Connector\Mw\Entities\Mw\CustomerEntity;
use Motv\Connector\Mw\Entities\Mw\PackageEntity;
use Motv\Connector\Mw\Entities\Mw\VendorEntity;
use Motv\Connector\Mw\Exceptions\ApiSupport\ParameterWrongTypeException;
use Motv\Connector\Mw\Exceptions\Mw\AdvertHomepageUnknownException;
use Motv\Connector\Mw\Exceptions\Mw\CategoryUnknownException;
use Motv\Connector\Mw\Exceptions\Mw\CustomerUnknownException;
use Motv\Connector\Mw\Exceptions\Mw\DeviceUnknownException;
use Motv\Connector\Mw\Exceptions\Mw\PackageUnknownException;
use Motv\Connector\Mw\Exceptions\Mw\ProfileUnknownException;
use Motv\Connector\Mw\Exceptions\Mw\ReportUnknownReportException;
use Motv\Connector\Mw\Exceptions\Mw\VendorUnknownException;

class MwConnectorTest extends MwConnector
{

	public function testPairsConnector(): void
	{
		$this->assertIsArray($this->connector->AdvertHomepage()->getPairs());
		$this->assertIsArray($this->connector->App()->getPairs());
		$this->assertIsArray($this->connector->Category()->getPairs());
		$this->assertIsArray($this->connector->Channel()->getPairs());
		$this->assertIsArray($this->connector->ChannelCategory()->getPairs());
		$this->assertIsArray($this->connector->Country()->getPairs());
		$this->assertIsArray($this->connector->Country()->getPairsByCode());
		$this->assertIsArray($this->connector->Detector()->getPairs());
		$this->assertIsArray($this->connector->Edge()->getPairs());
		$this->assertIsArray($this->connector->Epg()->getPairs());
		$this->assertIsArray($this->connector->EpgPlaylist()->getPairs());
		$this->assertIsArray($this->connector->Genre()->getPairs());
		$this->assertIsArray($this->connector->IpRange()->getPairs());
		$this->assertIsArray($this->connector->Package()->getPairs());
		$this->assertIsArray($this->connector->Person()->getPairs());
		$this->assertIsArray($this->connector->Report()->getPairs());
		$this->assertIsArray($this->connector->Template()->getPairs());
		$this->assertIsArray($this->connector->Transcoder()->getPairs());
		$this->assertIsArray($this->connector->User()->getPairs());
		$this->assertIsArray($this->connector->Vendor()->getPairs());
		$this->assertIsArray($this->connector->Vod()->getPairs());
	}

	public function testAssertExceptions(): void
	{
		$this->assertException(function (): void {
			$this->connector->Customer()->getData(-1);
		}, CustomerUnknownException::class);

		$this->assertException(function (): void {
			$this->connector->AdvertHomepage()->getData(-1);
		}, AdvertHomepageUnknownException::class);

		$this->assertException(function (): void {
			$this->connector->Category()->getData(-1);
		}, CategoryUnknownException::class);

		$this->assertException(function (): void {
			$this->connector->Device()->getData(-1);
		}, DeviceUnknownException::class);

		$this->assertException(function (): void {
			$this->connector->Package()->getData(-1);
		}, PackageUnknownException::class);

		$this->assertException(function (): void {
			$this->connector->Profile()->getData(-1);
		}, ProfileUnknownException::class);

		$this->assertException(function (): void {
			$this->connector->Vendor()->getData(-1);
		}, VendorUnknownException::class);

		$this->assertException(function (): void {
			$this->connector->Report()->getData(-1);
		}, ReportUnknownReportException::class);
	}

	public function testGetDataConnector(): void
	{
		$vendor = $this->connector->Vendor()->getData(1);
		$this->assertInstanceOf(VendorEntity::class, $vendor);

		$package = $this->connector->Package()->getData(1);
		$this->assertInstanceOf(PackageEntity::class, $package);

		$customer = $this->connector->Customer()->getData(104686);
		$this->assertInstanceOf(CustomerEntity::class, $customer);
	}

	public function testSelectionConnector(): void
	{
		$selection = $this->connector->Vendor()->selection();
		$this->assertIsArray($selection);
		$this->assertArrayHasKey('rows', $selection);
		$this->assertArrayHasKey('row_count', $selection);
		$this->assertIsInt($selection['row_count']);
		$this->assertIsArray($selection['rows']);

		$vendor = $this->connector->Vendor()->getData(1);
		$this->assertInstanceOf(VendorEntity::class, $vendor);

		$selection = $this->connector->Vendor()->selection(['vendors_id' => 1]);
		$this->assertIsArray($selection);
		$this->assertArrayHasKey('rows', $selection);
		$this->assertArrayHasKey('row_count', $selection);
		$this->assertIsInt($selection['row_count']);
		$this->assertEquals(1, $selection['row_count']);
		$vendor2 = $selection['rows'][0];
		$this->assertInstanceOf(VendorEntity::class, $vendor2);

		$this->assertEquals($vendor->vendors_id, $vendor2->vendors_id);
		$this->assertEquals($vendor->vendors_background_type->value, $vendor2->vendors_background_type->value);
		$this->assertEquals($vendor->vendors_accent_color, $vendor2->vendors_accent_color);
	}

	public function testCreateAndUpdatePerson(): void
	{
		$personInputEntity = new \Motv\Connector\Mw\InputEntities\Mw\PersonEntity();
		$personInputEntity->persons_type = \Motv\Connector\Mw\Enums\Mw\PersonEnum::ACTOR;
		$personInputEntity->persons_birthday = '1990-01-01';
		// in case of date, both string and DateTime objects are accept
		$personInputEntity->persons_birthday = (new \DateTimeImmutable)->setTimestamp(strtotime('now'));
		$personInputEntity->persons_description = 'Popular actor';
		$personInputEntity->persons_name = 'John Smith' . rand(1, 100);

		// Creates new Person
		$personsId = $this->connector->Person()->update(null, $personInputEntity);

		// Gets the new person we just created
		$personEntity = $this->connector->Person()->getData($personsId);
		echo 'Actor ' . $personEntity->persons_name . ' with ID: ' . $personEntity->persons_id;
		echo PHP_EOL;

		// Let's change name of the Person
		$personInputEntity->persons_name = 'Will Smith' . rand(1, 100);

		// Updates the name
		$this->connector->Person()->update($personsId, $personInputEntity);

		// Let's double-check that the changes were actually reflected
		$personEntity = $this->connector->Person()->getData($personsId);
		echo 'Actor ' . $personEntity->persons_name . ' with ID: ' . $personEntity->persons_id;
		echo PHP_EOL;

		// Select the person by selection function
		$selectedActorEntity = $this->connector->Person()->selection(['persons_name' => 'Will Smith'])['rows'][0];
		echo 'Actor ' . $selectedActorEntity->persons_name . ' with ID: ' . $selectedActorEntity->persons_id;
		echo PHP_EOL;

		// sending invalid data will result into a neat error, for example
		$personInputEntity = new \Motv\Connector\Mw\InputEntities\Mw\PersonEntity();
		$personInputEntity->persons_name = '';
		$personInputEntity->persons_type = \Motv\Connector\Mw\Enums\Mw\PersonEnum::ACTOR;
		$personInputEntity->persons_birthday = (new \DateTimeImmutable)->setTimestamp(strtotime('now'));
		$personInputEntity->persons_description = 'Popular actor';

		try {
			// Will not create a new person because name is empty, will throw an exception instead
			$personsId = $this->connector->Person()->update(null, $personInputEntity);
		} catch (ParameterWrongTypeException $e) {
			echo $e->getResponseMessage();
			echo PHP_EOL;
		}
	}
}
