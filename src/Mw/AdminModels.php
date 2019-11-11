<?php

/**
 * Generated on Fri, 8 Nov 2019 19:06:34
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Mw;

class AdvertHomepage
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\AdvertHomepageUnknownException
	 */
	public function delete(int $advertHomepageId): void
	{
		$this->connector->call("AdvertHomepage", "delete", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\AdvertHomepageUnknownException
	 */
	public function getData(int $advertHomepageId): array
	{
		return $this->connector->call("AdvertHomepage", "getData", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("AdvertHomepage", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\AdvertHomepageUnknownException
	 */
	public function update(int $advertHomepageId, array $data): int
	{
		return $this->connector->call("AdvertHomepage", "update", get_defined_vars());
	}
}

class App
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\AppUnknownException
	 */
	public function getData(int $appsId): array
	{
		return $this->connector->call("App", "getData", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("App", "getPairs", get_defined_vars());
	}


	public function getSubscribedApps(int $customersId): array
	{
		return $this->connector->call("App", "getSubscribedApps", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("App", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\AppUnknownException
	 */
	public function update(int $appsId, array $data): int
	{
		return $this->connector->call("App", "update", get_defined_vars());
	}
}

class Backup
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getBackupDirInfo(): array
	{
		return $this->connector->call("Backup", "getBackupDirInfo", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\SystemBackupUnknownFileException
	 */
	public function getBackupFile(string $name): string
	{
		return $this->connector->call("Backup", "getBackupFile", get_defined_vars());
	}
}

class Channel
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function changeChannelsStatus(array $ids, bool $status): void
	{
		$this->connector->call("Channel", "changeChannelsStatus", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelAudioDuplicateRoleException
	 * @throws \Motv\Mw\ChannelAudioInvalidRoleException
	 * @throws \Motv\Mw\ChannelDuplicateBindIpPortCombinationException
	 * @throws \Motv\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws \Motv\Mw\ChannelSubtitleInvalidRoleException
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\EpgUnknownEpgException
	 * @throws \Motv\Mw\TemplateUnknownException
	 */
	public function copyChannel(int $id, string $name): int
	{
		return $this->connector->call("Channel", "copyChannel", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\TemplateUnknownException
	 */
	public function delete(int $channelsId): void
	{
		$this->connector->call("Channel", "delete", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 */
	public function deleteMulticast(int $channelsMulticastId): void
	{
		$this->connector->call("Channel", "deleteMulticast", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\TemplateUnknownException
	 */
	public function deleteUnicast(int $channelsUnicastId): void
	{
		$this->connector->call("Channel", "deleteUnicast", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelFfprobeSaveFirstException
	 * @throws \Motv\Mw\TranscoderUnknownException
	 * @throws \Motv\Mw\TranscoderUnableToContactException
	 */
	public function ffprobe(int $transcodersId, string $type, ?int $channelsUnicastId = null, ?string $url = null): array
	{
		return $this->connector->call("Channel", "ffprobe", get_defined_vars());
	}


	public function getChannelEpgPairs(): array
	{
		return $this->connector->call("Channel", "getChannelEpgPairs", get_defined_vars());
	}


	public function getChannelNamesByUnicast(): array
	{
		return $this->connector->call("Channel", "getChannelNamesByUnicast", get_defined_vars());
	}


	public function getCurrentlyWatchedChannels(): array
	{
		return $this->connector->call("Channel", "getCurrentlyWatchedChannels", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 */
	public function getData(int $channelsId): array
	{
		return $this->connector->call("Channel", "getData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 * @throws \Motv\Mw\SystemCommandFailedException
	 */
	public function getEventLogData(int $generatorId): array
	{
		return $this->connector->call("Channel", "getEventLogData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 */
	public function getGenerator(int $generatorId): array
	{
		return $this->connector->call("Channel", "getGenerator", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\PackageUnknownException
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function getLockedChannels(
		int $profilesId,
		string $devicesType,
		?string $type = null,
		?bool $whitelisting = true,
		?bool $mcastOnly = false,
		?bool $bcastOnly = false
	): array {
		return $this->connector->call("Channel", "getLockedChannels", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 */
	public function getMulticast(int $channelsMulticastId): array
	{
		return $this->connector->call("Channel", "getMulticast", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("Channel", "getPairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelStreamUnavailableException
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\ChannelUnknownStreamTypeException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\MarlinUnableToRetrieveLicenseException
	 * @throws \Motv\Mw\PackageUnknownException
	 * @throws \Motv\Mw\ProfileUnknownException
	 * @throws \Motv\Mw\TemplateUnknownException
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 */
	public function getStreamUrl(
		int $profilesId,
		int $channelsId,
		string $type,
		?int $timestamp = null,
		?bool $mcast = false,
		?bool $bcast = false,
		?bool $allowedMulticast = false,
		?bool $allowedUnicast = false,
		?bool $allowedBroadcast = false,
		?array $preferredEdgesIds = [],
		?array $nonpreferredEdgesIds = []
	): array {
		return $this->connector->call("Channel", "getStreamUrl", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\PackageUnknownException
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function getSubscribedChannels(
		int $profilesId,
		?string $type = null,
		?bool $whitelisting = true,
		?bool $mcastOnly = false,
		?bool $bcastOnly = false,
		?string $devicesType = null,
		?bool $isForRecommendations = false,
		?bool $useCache = true
	): array {
		return $this->connector->call("Channel", "getSubscribedChannels", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\TemplateUnknownException
	 */
	public function getUnicast(int $channelsUnicastId): array
	{
		return $this->connector->call("Channel", "getUnicast", get_defined_vars());
	}


	public function getUnicastMosaicPairs(): array
	{
		return $this->connector->call("Channel", "getUnicastMosaicPairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelImportErrorException
	 */
	public function importChannelsFromXlsx(string $file): array
	{
		return $this->connector->call("Channel", "importChannelsFromXlsx", get_defined_vars());
	}


	public function recordedEventSelection(
		array $columns,
		?array $where = [],
		?array $orderBy = [],
		?int $page = null,
		?int $pageLimit = null,
		?int $channelsId = null
	): array {
		return $this->connector->call("Channel", "recordedEventSelection", get_defined_vars());
	}


	public function selection(
		array $columns,
		?array $where = [],
		?array $orderBy = [],
		?int $page = null,
		?int $pageLimit = null,
		?int $vendorsId = null,
		?array $edgesIds = null
	): array {
		return $this->connector->call("Channel", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\EpgUnknownEpgException
	 */
	public function update(int $channelsId, array $data, ?bool $generateNoEpg = false): int
	{
		return $this->connector->call("Channel", "update", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelAudioDuplicateRoleException
	 * @throws \Motv\Mw\ChannelAudioInvalidRoleException
	 * @throws \Motv\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws \Motv\Mw\ChannelSubtitleInvalidRoleException
	 * @throws \Motv\Mw\ChannelUnknownException
	 */
	public function updateMulticast(int $channelsId, int $channelsMulticastId, array $data): int
	{
		return $this->connector->call("Channel", "updateMulticast", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelAudioDuplicateRoleException
	 * @throws \Motv\Mw\ChannelAudioInvalidRoleException
	 * @throws \Motv\Mw\ChannelDuplicateBindIpPortCombinationException
	 * @throws \Motv\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws \Motv\Mw\ChannelSubtitleInvalidRoleException
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\TemplateUnknownException
	 */
	public function updateUnicast(int $channelsId, int $channelsUnicastId, array $data): int
	{
		return $this->connector->call("Channel", "updateUnicast", get_defined_vars());
	}
}

class ChannelCategory
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\ChannelCategoryUnknownException
	 */
	public function getData(int $channelsCategoriesId): array
	{
		return $this->connector->call("ChannelCategory", "getData", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("ChannelCategory", "getPairs", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("ChannelCategory", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelCategoryUnknownException
	 */
	public function update(int $channelsCategoriesId, array $data): int
	{
		return $this->connector->call("ChannelCategory", "update", get_defined_vars());
	}
}

class Config
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 */
	public function get(string $key)
	{
		return $this->connector->call("Config", "get", get_defined_vars());
	}


	public function getData(?bool $includePredefined = true): array
	{
		return $this->connector->call("Config", "getData", get_defined_vars());
	}


	public function update(array $data): array
	{
		return $this->connector->call("Config", "update", get_defined_vars());
	}
}

class Country
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getPairs(): array
	{
		return $this->connector->call("Country", "getPairs", get_defined_vars());
	}


	public function getPairsByCode(): array
	{
		return $this->connector->call("Country", "getPairsByCode", get_defined_vars());
	}
}

class Customer
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\CustomerDuplicateMacException
	 * @throws \Motv\Mw\CustomerUnknownException
	 */
	public function addMacAddress(int $customersId, string $macAddress): void
	{
		$this->connector->call("Customer", "addMacAddress", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\CustomerUnknownException
	 * @throws \Motv\Mw\CustomerUnknownQrException
	 */
	public function assignQRCode(int $code, int $customersId): void
	{
		$this->connector->call("Customer", "assignQRCode", get_defined_vars());
	}


	public function delete(int $customersId): void
	{
		$this->connector->call("Customer", "delete", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\CustomerUnknownException
	 */
	public function getData(int $customersId): array
	{
		return $this->connector->call("Customer", "getData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\CustomerIncorrectLoginPasswordException
	 * @throws \Motv\Mw\CustomerUnknownException
	 */
	public function getDataByLogin(string $login): array
	{
		return $this->connector->call("Customer", "getDataByLogin", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\CustomerUnknownException
	 */
	public function getMacAddresses(int $customersId): array
	{
		return $this->connector->call("Customer", "getMacAddresses", get_defined_vars());
	}


	public function getUsageHistory(int $customersId): array
	{
		return $this->connector->call("Customer", "getUsageHistory", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\CustomerDuplicateLoginException
	 * @throws \Motv\Mw\CustomerLicenseLimitExceededException
	 * @throws \Motv\Mw\CustomerPasswordFormatInvalidException
	 * @throws \Motv\Mw\CustomerUnknownException
	 * @throws \Motv\Mw\InvalidParameterValueException
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\ImageInvalidBase64Exception
	 * @throws \Motv\Mw\ProfileDuplicateNameException
	 * @throws \Motv\Mw\ProfileInvalidBirthdayException
	 * @throws \Motv\Mw\ProfileInvalidPinException
	 * @throws \Motv\Mw\ProfileUnknownException
	 * @throws \Motv\Mw\VendorUnknownException
	 */
	public function register(array $data): int
	{
		return $this->connector->call("Customer", "register", get_defined_vars());
	}


	public function removeAllMacAddresses(int $customersId): void
	{
		$this->connector->call("Customer", "removeAllMacAddresses", get_defined_vars());
	}


	public function removeMacAddress(int $customersMacAddressId): void
	{
		$this->connector->call("Customer", "removeMacAddress", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\CustomerTooManyFoundException
	 */
	public function search(
		?int $customersId = null,
		?string $customersLogin = null,
		?int $customersVendorsId = null,
		?string $wild = null,
		?int $limit = null
	): array {
		return $this->connector->call("Customer", "search", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\CustomerDuplicateLoginException
	 * @throws \Motv\Mw\CustomerPasswordFormatInvalidException
	 * @throws \Motv\Mw\CustomerUnknownException
	 */
	public function update(int $customersId, array $data): int
	{
		return $this->connector->call("Customer", "update", get_defined_vars());
	}
}

class Device
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function addDevice(
		int $customersId,
		int $profilesId,
		string $devicesType,
		string $devicesIdentification,
		string $devicesHash
	): int {
		return $this->connector->call("Device", "addDevice", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\DeviceUnknownException
	 */
	public function getData(int $devicesId): array
	{
		return $this->connector->call("Device", "getData", get_defined_vars());
	}


	public function getDevices(int $customersId): array
	{
		return $this->connector->call("Device", "getDevices", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\DeviceUnknownException
	 */
	public function removeDevice(int $devicesId): void
	{
		$this->connector->call("Device", "removeDevice", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Device", "selection", get_defined_vars());
	}
}

class Documentation
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getAdminApi(): array
	{
		return $this->connector->call("Documentation", "getAdminApi", get_defined_vars());
	}


	public function getErrorCodes(): array
	{
		return $this->connector->call("Documentation", "getErrorCodes", get_defined_vars());
	}


	public function getPublicApi(): array
	{
		return $this->connector->call("Documentation", "getPublicApi", get_defined_vars());
	}
}

class Drm
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getDrms(): array
	{
		return $this->connector->call("Drm", "getDrms", get_defined_vars());
	}
}

class Edge
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\EdgeInactiveException
	 * @throws \Motv\Mw\EdgeUnknownException
	 */
	public function getActiveEdge(int $edgesId): array
	{
		return $this->connector->call("Edge", "getActiveEdge", get_defined_vars());
	}


	public function getAllEdges(): array
	{
		return $this->connector->call("Edge", "getAllEdges", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EdgeUnknownException
	 */
	public function getData(int $edgesId): array
	{
		return $this->connector->call("Edge", "getData", get_defined_vars());
	}


	public function getEdgesByChannelUnicast(int $channelsUnicastId): array
	{
		return $this->connector->call("Edge", "getEdgesByChannelUnicast", get_defined_vars());
	}


	public function getEdgesByVod(int $vodsId): array
	{
		return $this->connector->call("Edge", "getEdgesByVod", get_defined_vars());
	}


	public function getEdgesStorages(): array
	{
		return $this->connector->call("Edge", "getEdgesStorages", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("Edge", "getPairs", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Edge", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EdgeUnknownException
	 */
	public function update(int $edgesId, array $data): int
	{
		return $this->connector->call("Edge", "update", get_defined_vars());
	}
}

class Epg
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function eventsSelection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Epg", "eventsSelection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownEpgException
	 */
	public function getData(int $channelsId): array
	{
		return $this->connector->call("Epg", "getData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 */
	public function getEvent(int $epgEventsId): array
	{
		return $this->connector->call("Epg", "getEvent", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("Epg", "getPairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\InvalidParameterValueException
	 */
	public function getUpdatedEvents(
		int $profilesId,
		int $timestamp,
		?array $channels = null,
		$from = null,
		$to = null,
		?array $ids = null
	): array {
		return $this->connector->call("Epg", "getUpdatedEvents", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\EpgInsertErrorException
	 * @throws \Motv\Mw\EpgUnknownEpgException
	 * @throws \Motv\Mw\EpgXmlMissingAttributeException
	 * @throws \Motv\Mw\EpgXmlMissingTagException
	 * @throws \Motv\Mw\EpgXmlSetErrorException
	 */
	public function processEpg(int $channelsId, string $content): void
	{
		$this->connector->call("Epg", "processEpg", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\EpgInsertErrorException
	 * @throws \Motv\Mw\EpgUnknownEpgException
	 * @throws \Motv\Mw\EpgXmlMissingAttributeException
	 * @throws \Motv\Mw\EpgXmlMissingTagException
	 * @throws \Motv\Mw\EpgXmlSetErrorException
	 */
	public function processEpgFolders(array $ids): void
	{
		$this->connector->call("Epg", "processEpgFolders", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\EpgInsertErrorException
	 * @throws \Motv\Mw\EpgUnknownEpgException
	 * @throws \Motv\Mw\EpgXmlMissingAttributeException
	 * @throws \Motv\Mw\EpgXmlMissingTagException
	 * @throws \Motv\Mw\EpgXmlSetErrorException
	 */
	public function processFilesFolder(int $channelsId): void
	{
		$this->connector->call("Epg", "processFilesFolder", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\EpgInsertErrorException
	 * @throws \Motv\Mw\EpgUnknownEpgException
	 * @throws \Motv\Mw\EpgXmlMissingAttributeException
	 * @throws \Motv\Mw\EpgXmlMissingTagException
	 * @throws \Motv\Mw\EpgXmlSetErrorException
	 */
	public function processFolder(string $path): void
	{
		$this->connector->call("Epg", "processFolder", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 */
	public function setRecordedEventTime(int $epgEventsId, int $second): void
	{
		$this->connector->call("Epg", "setRecordedEventTime", get_defined_vars());
	}
}

class EpgPlaylist
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getActivePairs(): array
	{
		return $this->connector->call("EpgPlaylist", "getActivePairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownPlaylistException
	 */
	public function getData(int $epgPlaylistsId, ?bool $includeEventVodInfo = false): array
	{
		return $this->connector->call("EpgPlaylist", "getData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 */
	public function getEventPlaylists(int $epgEventsId): array
	{
		return $this->connector->call("EpgPlaylist", "getEventPlaylists", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("EpgPlaylist", "getPairs", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("EpgPlaylist", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownPlaylistException
	 */
	public function update(int $epgPlaylistsId, array $data): int
	{
		return $this->connector->call("EpgPlaylist", "update", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownPlaylistException
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 */
	public function updateEventPlaylists(int $epgEventsId, array $epgPlaylistsIds): void
	{
		$this->connector->call("EpgPlaylist", "updateEventPlaylists", get_defined_vars());
	}
}

class EpgRating
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getAll(): array
	{
		return $this->connector->call("EpgRating", "getAll", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownRatingException
	 */
	public function getData(int $epgRatingId): array
	{
		return $this->connector->call("EpgRating", "getData", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("EpgRating", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownRatingException
	 */
	public function update(int $epgRatingId, array $data): int
	{
		return $this->connector->call("EpgRating", "update", get_defined_vars());
	}
}

class IpRange
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\IpRangeUnknownException
	 */
	public function getData(int $ipRangesId): array
	{
		return $this->connector->call("IpRange", "getData", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("IpRange", "getPairs", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("IpRange", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\IpRangeUnknownException
	 */
	public function update(int $ipRangesId, array $data): int
	{
		return $this->connector->call("IpRange", "update", get_defined_vars());
	}
}

class Logger
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Logger", "selection", get_defined_vars());
	}
}

class Monitoring
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function clearAllLogs(): void
	{
		$this->connector->call("Monitoring", "clearAllLogs", get_defined_vars());
	}


	public function clearLogs(int $channelsUnicastId): void
	{
		$this->connector->call("Monitoring", "clearLogs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\TemplateUnknownException
	 */
	public function getChannelMonitoringData(array $channels, array $options, ?int $page = 1): array
	{
		return $this->connector->call("Monitoring", "getChannelMonitoringData", get_defined_vars());
	}


	public function showEventLog(int $channelsLogId): array
	{
		return $this->connector->call("Monitoring", "showEventLog", get_defined_vars());
	}


	public function showEventLogDataByGenerator(int $generatorId): array
	{
		return $this->connector->call("Monitoring", "showEventLogDataByGenerator", get_defined_vars());
	}
}

class Ota
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\OtaUnknownVersionException
	 */
	public function activateOtaVersion(int $otaVersionsId): int
	{
		return $this->connector->call("Ota", "activateOtaVersion", get_defined_vars());
	}


	public function devicesSelection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Ota", "devicesSelection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\OtaUnknownDeviceException
	 */
	public function getDevice(int $otaDevicesId): array
	{
		return $this->connector->call("Ota", "getDevice", get_defined_vars());
	}


	public function getLastVersion(int $otaDevicesId, ?bool $active = false): array
	{
		return $this->connector->call("Ota", "getLastVersion", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\OtaUnknownVersionException
	 */
	public function getVersion(int $otaVersionsId): array
	{
		return $this->connector->call("Ota", "getVersion", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\OtaUnknownVersionException
	 */
	public function latest(string $name): array
	{
		return $this->connector->call("Ota", "latest", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\OtaUnknownDeviceException
	 */
	public function updateDevice(int $otaDevicesId, array $data): int
	{
		return $this->connector->call("Ota", "updateDevice", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\OtaUnknownVersionException
	 */
	public function updateVersion(int $otaVersionsId, array $data): int
	{
		return $this->connector->call("Ota", "updateVersion", get_defined_vars());
	}


	public function versionsSelection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Ota", "versionsSelection", get_defined_vars());
	}
}

class Package
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\PackageUnknownException
	 */
	public function copyPackage(int $packagesId, string $name): int
	{
		return $this->connector->call("Package", "copyPackage", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\PackageUnknownException
	 */
	public function getData(int $packagesId): array
	{
		return $this->connector->call("Package", "getData", get_defined_vars());
	}


	public function getPairs(?bool $packagesActive = null): array
	{
		return $this->connector->call("Package", "getPairs", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Package", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\PackageUnknownException
	 */
	public function update(int $packagesId, array $data): int
	{
		return $this->connector->call("Package", "update", get_defined_vars());
	}
}

class Person
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getActorsPairs(): array
	{
		return $this->connector->call("Person", "getActorsPairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\PersonUnknownPersonException
	 */
	public function getData(int $personsId): array
	{
		return $this->connector->call("Person", "getData", get_defined_vars());
	}


	public function getDirectorsPairs(): array
	{
		return $this->connector->call("Person", "getDirectorsPairs", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("Person", "getPairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\PersonUnknownPersonException
	 */
	public function getPersonVods(int $personsId, int $profilesId, string $devicesType): array
	{
		return $this->connector->call("Person", "getPersonVods", get_defined_vars());
	}


	public function searchPersons(string $search): array
	{
		return $this->connector->call("Person", "searchPersons", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Person", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\PersonUnknownPersonException
	 */
	public function update(int $personsId, array $data): int
	{
		return $this->connector->call("Person", "update", get_defined_vars());
	}
}

class Profile
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\ProfileCannotDeleteException
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function delete(int $profilesId): void
	{
		$this->connector->call("Profile", "delete", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function getChannelOrder(int $profilesId): array
	{
		return $this->connector->call("Profile", "getChannelOrder", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function getChannelWhitelisting(int $profilesId): array
	{
		return $this->connector->call("Profile", "getChannelWhitelisting", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function getData(int $profilesId): array
	{
		return $this->connector->call("Profile", "getData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function getImage(int $profilesId): \Nette\Application\Responses\FileResponse
	{
		return $this->connector->call("Profile", "getImage", get_defined_vars());
	}


	public function getProfilePairs(int $customersId): array
	{
		return $this->connector->call("Profile", "getProfilePairs", get_defined_vars());
	}


	public function getProfiles(int $customersId): array
	{
		return $this->connector->call("Profile", "getProfiles", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function resetChannelOrder(int $profilesId, string $type): void
	{
		$this->connector->call("Profile", "resetChannelOrder", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\ImageInvalidBase64Exception
	 * @throws \Motv\Mw\ProfileDuplicateNameException
	 * @throws \Motv\Mw\ProfileInvalidBirthdayException
	 * @throws \Motv\Mw\ProfileInvalidPinException
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function update(int $profilesId, array $data): int
	{
		return $this->connector->call("Profile", "update", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function updateChannelOrder(int $profilesId, string $type, array $channels): void
	{
		$this->connector->call("Profile", "updateChannelOrder", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function updateChannelWhitelisting(int $profilesId, array $channels): void
	{
		$this->connector->call("Profile", "updateChannelWhitelisting", get_defined_vars());
	}
}

class Recording
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\ChannelUnathorizedException
	 * @throws \Motv\Mw\ChannelUnknownException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\CustomerUnknownException
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 * @throws \Motv\Mw\PackageUnknownException
	 * @throws \Motv\Mw\ProfileUnknownException
	 * @throws \Motv\Mw\RecordingExceededLengthException
	 */
	public function addRecording(int $profilesId, int $epgEventsId): array
	{
		return $this->connector->call("Recording", "addRecording", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ChannelAgeRestrictionException
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 * @throws \Motv\Mw\ProfileUnknownException
	 * @throws \Motv\Mw\RecordingUnknownException
	 */
	public function getData(int $epgEventsId, int $profilesId): array
	{
		return $this->connector->call("Recording", "getData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\CustomerUnknownException
	 */
	public function getRecordingsByCustomer(int $customersId, ?string $devicesType = null, ?int $recordingsId = null, ?int $profilesId = null): array
	{
		return $this->connector->call("Recording", "getRecordingsByCustomer", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ProfileUnknownException
	 */
	public function getRecordingsByProfile(int $profilesId, ?string $devicesType = null, ?int $recordingsId = null): array
	{
		return $this->connector->call("Recording", "getRecordingsByProfile", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 * @throws \Motv\Mw\ProfileUnknownException
	 * @throws \Motv\Mw\RecordingUnknownException
	 */
	public function removeRecording(int $profilesId, int $epgEventsId, ?bool $expired = false): void
	{
		$this->connector->call("Recording", "removeRecording", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Recording", "selection", get_defined_vars());
	}
}

class Right
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getAllRightsRoles(): array
	{
		return $this->connector->call("Right", "getAllRightsRoles", get_defined_vars());
	}


	public function getPermissions(): array
	{
		return $this->connector->call("Right", "getPermissions", get_defined_vars());
	}


	public function update(array $data): void
	{
		$this->connector->call("Right", "update", get_defined_vars());
	}
}

class Role
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\RoleUnknownException
	 */
	public function getData(int $rolesId): array
	{
		return $this->connector->call("Role", "getData", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("Role", "getPairs", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Role", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\RoleDuplicateNameException
	 * @throws \Motv\Mw\RoleUnknownException
	 */
	public function update(int $rolesId, array $data): int
	{
		return $this->connector->call("Role", "update", get_defined_vars());
	}
}

class Search
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\SearchTooShortException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\PackageUnknownException
	 * @throws \Motv\Mw\ProfileUnknownException
	 * @throws \Motv\Mw\VodCategoryUnknownException
	 */
	public function search(
		int $profilesId,
		string $devicesType,
		string $search,
		?string $genre = null,
		?int $vodsCategoriesId = null,
		?int $vodsGenresId = null,
		?bool $includeChannels = true,
		?bool $includeEvents = true,
		?bool $includeVods = true,
		?bool $includeVodsCategories = true,
		?bool $includePersons = true
	): array {
		return $this->connector->call("Search", "search", get_defined_vars());
	}
}

class Statistic
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\StatisticsUnknownStatisticException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 */
	public function exportStatistics(array $ids): string
	{
		return $this->connector->call("Statistic", "exportStatistics", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\StatisticsUnknownStatisticException
	 */
	public function getData(int $statisticsId): array
	{
		return $this->connector->call("Statistic", "getData", get_defined_vars());
	}


	public function getPairs(?bool $returnSorted = false): array
	{
		return $this->connector->call("Statistic", "getPairs", get_defined_vars());
	}


	public function getRoleHomepageStatistics(?int $rolesId = null): array
	{
		return $this->connector->call("Statistic", "getRoleHomepageStatistics", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\StatisticsUnknownStatisticException
	 * @throws \Motv\Mw\TemplateErrorFillingException
	 */
	public function getStatisticData(int $statisticsId, ?array $filters = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Statistic", "getStatisticData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\StatisticsCannotEditPredefinedException
	 * @throws \Motv\Mw\StatisticsQueryErrorException
	 * @throws \Motv\Mw\StatisticsUnknownStatisticException
	 * @throws \Motv\Mw\TemplateErrorFillingException
	 */
	public function importStatistics(string $neon): array
	{
		return $this->connector->call("Statistic", "importStatistics", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Statistic", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\StatisticsCannotEditPredefinedException
	 * @throws \Motv\Mw\StatisticsQueryErrorException
	 * @throws \Motv\Mw\StatisticsUnknownStatisticException
	 * @throws \Motv\Mw\TemplateErrorFillingException
	 */
	public function update(int $statisticsId, ?array $data = []): int
	{
		return $this->connector->call("Statistic", "update", get_defined_vars());
	}


	public function updateRoleHomepageStatistics(int $rolesId, array $data): void
	{
		$this->connector->call("Statistic", "updateRoleHomepageStatistics", get_defined_vars());
	}
}

class Subscription
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\CustomerUnknownException
	 * @throws \Motv\Mw\DeviceUnknownException
	 * @throws \Motv\Mw\EpgUnknownEpgEventException
	 * @throws \Motv\Mw\PackageUnknownException
	 * @throws \Motv\Mw\ProfileUnknownException
	 * @throws \Motv\Mw\RecordingUnknownException
	 */
	public function cancelPackage(int $customersId, int $packagesId): void
	{
		$this->connector->call("Subscription", "cancelPackage", get_defined_vars());
	}


	public function getPackageSubscriptions(int $customersId, ?string $devicesType = null): array
	{
		return $this->connector->call("Subscription", "getPackageSubscriptions", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\CustomerUnknownException
	 * @throws \Motv\Mw\PackageNotActiveException
	 * @throws \Motv\Mw\PackageUnknownException
	 */
	public function subscribePackage(int $customersId, int $packagesId): void
	{
		$this->connector->call("Subscription", "subscribePackage", get_defined_vars());
	}
}

class Template
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\TemplateCannotEditPredefinedException
	 * @throws \Motv\Mw\TemplateDuplicateNameException
	 * @throws \Motv\Mw\TemplateErrorFillingException
	 * @throws \Motv\Mw\TemplateUnknownException
	 * @throws \Motv\Mw\TemplateUsedException
	 */
	public function copyTemplate(int $templatesId, string $name): int
	{
		return $this->connector->call("Template", "copyTemplate", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TemplateUnknownException
	 * @throws \Motv\Mw\TemplateUsedException
	 */
	public function deleteTemplate(int $templatesId): void
	{
		$this->connector->call("Template", "deleteTemplate", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\TemplateUnknownException
	 */
	public function exportTemplates(array $ids): string
	{
		return $this->connector->call("Template", "exportTemplates", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TemplateUnknownException
	 */
	public function getData(int $templatesId): array
	{
		return $this->connector->call("Template", "getData", get_defined_vars());
	}


	public function getPairs(?string $type = null, ?bool $active = true): array
	{
		return $this->connector->call("Template", "getPairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TemplateCannotEditPredefinedException
	 * @throws \Motv\Mw\TemplateDuplicateNameException
	 * @throws \Motv\Mw\TemplateErrorFillingException
	 * @throws \Motv\Mw\TemplateUnknownException
	 * @throws \Motv\Mw\TemplateUsedException
	 */
	public function importTemplates(string $neon): array
	{
		return $this->connector->call("Template", "importTemplates", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Template", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TemplateCannotEditPredefinedException
	 * @throws \Motv\Mw\TemplateDuplicateNameException
	 * @throws \Motv\Mw\TemplateErrorFillingException
	 * @throws \Motv\Mw\TemplateUnknownException
	 * @throws \Motv\Mw\TemplateUsedException
	 */
	public function update(int $templatesId, array $data): int
	{
		return $this->connector->call("Template", "update", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TemplateUnknownException
	 */
	public function updatePredefined(int $templatesId, array $data): int
	{
		return $this->connector->call("Template", "updatePredefined", get_defined_vars());
	}
}

class Transcoder
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\TranscoderUnknownStreamRecordingException
	 */
	public function deleteStreamRecording(int $streamRecordingsId): void
	{
		$this->connector->call("Transcoder", "deleteStreamRecording", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderNotDownloadableStreamRecordingException
	 * @throws \Motv\Mw\TranscoderUnknownStreamRecordingException
	 */
	public function downloadStreamRecording(int $streamRecordingsId): array
	{
		return $this->connector->call("Transcoder", "downloadStreamRecording", get_defined_vars());
	}


	public function ffprobe(string $path): string
	{
		return $this->connector->call("Transcoder", "ffprobe", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderUnknownException
	 */
	public function getData(int $transcodersId): array
	{
		return $this->connector->call("Transcoder", "getData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderUnknownException
	 */
	public function getDataByName(string $transcodersName): array
	{
		return $this->connector->call("Transcoder", "getDataByName", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("Transcoder", "getPairs", get_defined_vars());
	}


	public function getSystemTranscodingOptions(): array
	{
		return $this->connector->call("Transcoder", "getSystemTranscodingOptions", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderUnknownException
	 */
	public function getTranscodingOptions(): array
	{
		return $this->connector->call("Transcoder", "getTranscodingOptions", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\SystemCommandFailedException
	 */
	public function gracefulRestart(): void
	{
		$this->connector->call("Transcoder", "gracefulRestart", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderUnknownException
	 * @throws \Motv\Mw\TranscoderUnableToContactException
	 */
	public function gracefulRestartTranscoder(string $transcoder): void
	{
		$this->connector->call("Transcoder", "gracefulRestartTranscoder", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderUnknownException
	 */
	public function newStreamRecording(array $data): int
	{
		return $this->connector->call("Transcoder", "newStreamRecording", get_defined_vars());
	}


	public function restartChannel(int $channelsUnicastId): void
	{
		$this->connector->call("Transcoder", "restartChannel", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderUnknownException
	 * @throws \Motv\Mw\TranscoderUnableToContactException
	 */
	public function restartChannelUnicastTranscoder(string $transcoder, int $channelsUnicastId): void
	{
		$this->connector->call("Transcoder", "restartChannelUnicastTranscoder", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderUnknownException
	 */
	public function saveSystemUsage(): array
	{
		return $this->connector->call("Transcoder", "saveSystemUsage", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Transcoder", "selection", get_defined_vars());
	}


	public function streamRecordingsSelection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Transcoder", "streamRecordingsSelection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderDuplicateNameException
	 * @throws \Motv\Mw\TranscoderUnknownException
	 */
	public function update(int $transcodersId, array $data): int
	{
		return $this->connector->call("Transcoder", "update", get_defined_vars());
	}
}

class User
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\LoginInactiveRoleException
	 * @throws \Motv\Mw\LoginInactiveUserException
	 * @throws \Motv\Mw\LoginIncorrectHeaderFormatException
	 * @throws \Motv\Mw\LoginIncorrectUsernamePasswordException
	 * @throws \Motv\Mw\LoginTokenExpiredException
	 */
	public function checkLogin(string $header): array
	{
		return $this->connector->call("User", "checkLogin", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\UnathorizedException
	 * @throws \Motv\Mw\UserUnknownException
	 */
	public function getData(int $usersId): array
	{
		return $this->connector->call("User", "getData", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("User", "getPairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\LoginInactiveRoleException
	 * @throws \Motv\Mw\LoginInactiveUserException
	 * @throws \Motv\Mw\LoginIncorrectUsernamePasswordException
	 */
	public function login(string $email, string $password): array
	{
		return $this->connector->call("User", "login", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("User", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\UnathorizedException
	 * @throws \Motv\Mw\UserDuplicateEmailException
	 * @throws \Motv\Mw\UserUnknownException
	 */
	public function update(int $usersId, array $data): int
	{
		return $this->connector->call("User", "update", get_defined_vars());
	}
}

class Vendor
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getAvailablePairs(): array
	{
		return $this->connector->call("Vendor", "getAvailablePairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VendorUnknownException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 */
	public function getData(int $vendorsId): array
	{
		return $this->connector->call("Vendor", "getData", get_defined_vars());
	}


	public function getHomepage(int $vendorsId): array
	{
		return $this->connector->call("Vendor", "getHomepage", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\UnathorizedException
	 */
	public function getLicenseStatistics(): array
	{
		return $this->connector->call("Vendor", "getLicenseStatistics", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("Vendor", "getPairs", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Vendor", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VendorUnknownException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 */
	public function update(int $vendorsId, array $data): int
	{
		return $this->connector->call("Vendor", "update", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VendorUnknownException
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 */
	public function updateHomepage(int $vendorsId, array $data): void
	{
		$this->connector->call("Vendor", "updateHomepage", get_defined_vars());
	}
}

class Vod
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\SystemCommandFailedException
	 * @throws \Motv\Mw\TranscoderUnableToContactException
	 * @throws \Motv\Mw\TranscoderUnknownException
	 * @throws \Motv\Mw\VodAudioInvalidRoleException
	 * @throws \Motv\Mw\VodFileErrorException
	 * @throws \Motv\Mw\VodSubtitleInvalidRoleException
	 * @throws \Motv\Mw\VodSubtitleVttException
	 * @throws \Motv\Mw\VodUnathorizedException
	 * @throws \Motv\Mw\VodUnknownException
	 */
	public function copyVod(int $vodsId, string $name): int
	{
		return $this->connector->call("Vod", "copyVod", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VodUnathorizedException
	 * @throws \Motv\Mw\VodUnknownException
	 */
	public function delete(int $vodsId): void
	{
		$this->connector->call("Vod", "delete", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VodUnathorizedException
	 * @throws \Motv\Mw\VodUnknownException
	 */
	public function downloadSubtitles(int $vodsId, string $subtitles): string
	{
		return $this->connector->call("Vod", "downloadSubtitles", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\TranscoderUnableToContactException
	 * @throws \Motv\Mw\TranscoderUnknownException
	 * @throws \Motv\Mw\VodUnathorizedException
	 * @throws \Motv\Mw\VodUnknownException
	 */
	public function ffprobe(int $vodsId): array
	{
		return $this->connector->call("Vod", "ffprobe", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VodUnathorizedException
	 * @throws \Motv\Mw\VodUnknownException
	 */
	public function getData(int $vodsId, ?int $profilesId = null, ?string $devicesType = null): array
	{
		return $this->connector->call("Vod", "getData", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("Vod", "getPairs", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ScanDirFailedException
	 */
	public function getVodDirInfo(): array
	{
		return $this->connector->call("Vod", "getVodDirInfo", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VodUnathorizedException
	 * @throws \Motv\Mw\VodUnknownException
	 */
	public function getVodLogData(int $vodsId): array
	{
		return $this->connector->call("Vod", "getVodLogData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\SystemCommandFailedException
	 * @throws \Motv\Mw\TranscoderUnableToContactException
	 * @throws \Motv\Mw\TranscoderUnknownException
	 * @throws \Motv\Mw\VodAudioInvalidRoleException
	 * @throws \Motv\Mw\VodFileErrorException
	 * @throws \Motv\Mw\VodSubtitleInvalidRoleException
	 * @throws \Motv\Mw\VodSubtitleVttException
	 * @throws \Motv\Mw\VodUnathorizedException
	 * @throws \Motv\Mw\VodUnknownException
	 */
	public function guessVodVideoAudioSubtitle(int $vodsId): void
	{
		$this->connector->call("Vod", "guessVodVideoAudioSubtitle", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("Vod", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VodCannotTranscodeException
	 * @throws \Motv\Mw\VodUnathorizedException
	 * @throws \Motv\Mw\VodUnknownException
	 */
	public function transcode(int $vodsId): void
	{
		$this->connector->call("Vod", "transcode", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\ConfigUnknownValueException
	 * @throws \Motv\Mw\SystemCommandFailedException
	 * @throws \Motv\Mw\TranscoderUnableToContactException
	 * @throws \Motv\Mw\TranscoderUnknownException
	 * @throws \Motv\Mw\VodAudioInvalidRoleException
	 * @throws \Motv\Mw\VodFileErrorException
	 * @throws \Motv\Mw\VodSubtitleInvalidRoleException
	 * @throws \Motv\Mw\VodSubtitleVttException
	 * @throws \Motv\Mw\VodUnathorizedException
	 * @throws \Motv\Mw\VodUnknownException
	 */
	public function update(int $vodsId, array $data): int
	{
		return $this->connector->call("Vod", "update", get_defined_vars());
	}
}

class VodCategory
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\VodCategoryUnknownException
	 */
	public function getData(int $vodsCategoriesId): array
	{
		return $this->connector->call("VodCategory", "getData", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("VodCategory", "getPairs", get_defined_vars());
	}


	public function getSortedData(): array
	{
		return $this->connector->call("VodCategory", "getSortedData", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VodCategoryUnknownException
	 */
	public function getVodCategories(
		int $profilesId,
		string $devicesType,
		?int $vodsCategoriesId = null,
		?string $search = null,
		?bool $rootCategoryIfNotSpecified = false
	): array {
		return $this->connector->call("VodCategory", "getVodCategories", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("VodCategory", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VodCategoryUnknownException
	 * @throws \Motv\Mw\VodCategoryCircularReferenceException
	 */
	public function update(int $vodsCategoriesId, array $data): int
	{
		return $this->connector->call("VodCategory", "update", get_defined_vars());
	}
}

class VodGenre
{
	/** @var \Motv\Mw\AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws \Motv\Mw\VodUnknownGenreException
	 */
	public function getData(int $vodsGenresId): array
	{
		return $this->connector->call("VodGenre", "getData", get_defined_vars());
	}


	public function getPairs(): array
	{
		return $this->connector->call("VodGenre", "getPairs", get_defined_vars());
	}


	public function selection(array $columns, ?array $where = [], ?array $orderBy = [], ?int $page = null, ?int $pageLimit = null): array
	{
		return $this->connector->call("VodGenre", "selection", get_defined_vars());
	}


	/**
	 * @throws \Motv\Mw\VodUnknownGenreException
	 */
	public function update(int $vodsGenresId, array $data): int
	{
		return $this->connector->call("VodGenre", "update", get_defined_vars());
	}
}
