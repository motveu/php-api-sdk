<?php

/**
 * Generated on Thu, 4 Jan 2024 6:52:33
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Mw;

class Advert
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array{rows: Entities\Mw\AdvertCampaignEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\CampaignUnknownException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function campaignSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Advert", "campaignSelection", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getAllUnitsByCustomer(Entities\Mw\ProfileEntity $profile): array
	{
		return $this->connector->call("Advert", "getAllUnitsByCustomer", get_defined_vars());
	}


	/**
	 * @return array<int>
	 */
	public function getAllUnitsByDevice(InputEntities\Mw\CustomerDeviceEntity $device): array
	{
		return $this->connector->call("Advert", "getAllUnitsByDevice", get_defined_vars());
	}


	/**
	 * @return array<int>
	 */
	public function getAllUnitsByPosition(Enums\Mw\AdvertUnitPositionEnum $positionsType): array
	{
		return $this->connector->call("Advert", "getAllUnitsByPosition", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getAvailableCampaignsForCustomerPairs(Entities\Mw\ProfileEntity $profile): array
	{
		return $this->connector->call("Advert", "getAvailableCampaignsForCustomerPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CampaignUnknownException
	 */
	public function getCampaign(int $campaignsId): Entities\Mw\AdvertCampaignEntity
	{
		return $this->connector->call("Advert", "getCampaign", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getCampaignPairs(): array
	{
		return $this->connector->call("Advert", "getCampaignPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CampaignUnknownSectionException
	 */
	public function getCampaignSection(int $campaignsSectionsId): Entities\Mw\AdvertCampaignSectionEntity
	{
		return $this->connector->call("Advert", "getCampaignSection", get_defined_vars());
	}


	/**
	 * @return array{url: string, width: int, height: int, bitrate: int}[]|null
	 */
	public function getTranscodedUnitMetadata(Entities\Mw\AdvertUnitEntity $unit): ?array
	{
		return $this->connector->call("Advert", "getTranscodedUnitMetadata", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AdvertUnknownUnitException
	 */
	public function getUnit(int $unitsId): Entities\Mw\AdvertUnitEntity
	{
		return $this->connector->call("Advert", "getUnit", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Mw\AdvertUnknownUnitException
	 */
	public function getUnitCampaignPairs(int $unitsId): array
	{
		return $this->connector->call("Advert", "getUnitCampaignPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @param array<Enums\Mw\AdvertUnitTypeEnum> $types
	 */
	public function getUnitPairs(?array $types = null): array
	{
		return $this->connector->call("Advert", "getUnitPairs", get_defined_vars());
	}


	/**
	 * @return array{unitsId: int, token: string}
	 * @throws Exceptions\Mw\AdvertUnknownUnitException
	 */
	public function getUploadToken(int $unitsId): array
	{
		return $this->connector->call("Advert", "getUploadToken", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CampaignUnknownException
	 * @throws Exceptions\Mw\CampaignUnknownSectionException
	 */
	public function removeCampaignSection(int $campaignsSectionsId): void
	{
		$this->connector->call("Advert", "removeCampaignSection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\AdvertUnitEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\AdvertUnknownUnitException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function unitSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Advert", "unitSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CampaignUnknownException
	 */
	public function updateCampaign(?int $campaignsId, InputEntities\Mw\AdvertCampaignEntity $data): int
	{
		return $this->connector->call("Advert", "updateCampaign", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CampaignUnknownException
	 * @throws Exceptions\Mw\CampaignUnknownSectionException
	 */
	public function updateCampaignSection(
		int $campaignsId,
		?int $campaignsSectionsId,
		InputEntities\Mw\AdvertCampaignSectionEntity $data,
	): int
	{
		return $this->connector->call("Advert", "updateCampaignSection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AdvertUnknownUnitException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateUnit(?int $unitsId, InputEntities\Mw\AdvertUnitEntity $data): int
	{
		return $this->connector->call("Advert", "updateUnit", get_defined_vars());
	}
}

class AdvertHomepage
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\AdvertHomepageUnknownException
	 */
	public function delete(int $advertHomepageId): string
	{
		return $this->connector->call("AdvertHomepage", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AdvertHomepageUnknownException
	 * @throws Exceptions\Mw\WordUnknownException
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 * @throws Exceptions\Mw\AdvertHomepageCannotChangeTypeException
	 */
	public function duplicate(int $advertHomepageId): int
	{
		return $this->connector->call("AdvertHomepage", "duplicate", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getAvailableImagesPairs(): array
	{
		return $this->connector->call("AdvertHomepage", "getAvailableImagesPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getAvailablePairs(): array
	{
		return $this->connector->call("AdvertHomepage", "getAvailablePairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AdvertHomepageUnknownException
	 */
	public function getData(int $advertHomepageId, string $language = 'en'): Entities\Mw\AdvertHomepageEntity
	{
		return $this->connector->call("AdvertHomepage", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("AdvertHomepage", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\AdvertHomepageEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
		string $language = 'en',
	): array
	{
		return $this->connector->call("AdvertHomepage", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AdvertHomepageUnknownException
	 * @throws Exceptions\Mw\WordUnknownException
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 * @throws Exceptions\Mw\AdvertHomepageCannotChangeTypeException
	 */
	public function update(?int $advertHomepageId, InputEntities\Mw\AdvertHomepageEntity $data): int
	{
		return $this->connector->call("AdvertHomepage", "update", get_defined_vars());
	}
}

class App
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\AppUnknownException
	 */
	public function delete(int $appsId): void
	{
		$this->connector->call("App", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppUnknownException
	 */
	public function getData(int $appsId): Entities\Mw\AppEntity
	{
		return $this->connector->call("App", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("App", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getSubscribedApps(int $customersId): array
	{
		return $this->connector->call("App", "getSubscribedApps", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\AppEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("App", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppUnknownException
	 */
	public function update(?int $appsId, InputEntities\Mw\AppEntity $data): int
	{
		return $this->connector->call("App", "update", get_defined_vars());
	}
}

class AppManager
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 * @throws Exceptions\Mw\VendorRightException
	 */
	public function createIfNotExists(InputEntities\Mw\AppManagerEntity $data): int
	{
		return $this->connector->call("AppManager", "createIfNotExists", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 */
	public function delete(int $appManagerId): void
	{
		$this->connector->call("AppManager", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function deleteFile(int $filesId, bool $saveLog = true): void
	{
		$this->connector->call("AppManager", "deleteFile", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\FileNotFoundException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 */
	public function download(int $filesId): string
	{
		return $this->connector->call("AppManager", "download", get_defined_vars());
	}


	/**
	 * @return array<int,array<string,array<string,array{updatesBehind: int, lastVersion: Entities\Mw\FileManagerVersionEntity|null}>>>
	 */
	public function getActualVersions(): array
	{
		return $this->connector->call("AppManager", "getActualVersions", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\FileManagerVersionEntity>
	 * @throws Exceptions\Mw\VendorRightException
	 */
	public function getActualVersionsFromVendorDevicePackage(
		int $vendorsId,
		Enums\Mw\DeviceEnum $device,
		string $package,
	): array
	{
		return $this->connector->call("AppManager", "getActualVersionsFromVendorDevicePackage", get_defined_vars());
	}


	/**
	 * @return array<string,array{app: Entities\Mw\AppManagerEntity, latestFiles: Entities\Mw\FileManagerVersionEntity[]}[]>
	 */
	public function getAppsByVendors(): array
	{
		return $this->connector->call("AppManager", "getAppsByVendors", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\FileNotFoundException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 * @throws Exceptions\Mw\FileMustBeChangelogException
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 */
	public function getChangeLogContent(int $filesId): string
	{
		return $this->connector->call("AppManager", "getChangeLogContent", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 */
	public function getData(int $appManagerId): Entities\Mw\AppManagerEntity
	{
		return $this->connector->call("AppManager", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getFileData(int $filesId): Entities\Mw\FileManagerEntity
	{
		return $this->connector->call("AppManager", "getFileData", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\FileManagerEntity>
	 */
	public function getFiles(int $appManagerId): array
	{
		return $this->connector->call("AppManager", "getFiles", get_defined_vars());
	}


	/**
	 * @return array<string,array{appManagerId: int, files: Entities\Mw\FileManagerEntity[]}>
	 * @throws Exceptions\Mw\VendorRightException
	 */
	public function getFilesByVersionsFromVendorDevicePackage(
		int $vendorsId,
		Enums\Mw\DeviceEnum $device,
		string $package,
	): array
	{
		return $this->connector->call("AppManager", "getFilesByVersionsFromVendorDevicePackage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 * @throws Exceptions\Mw\VendorUnknownException
	 * @throws Exceptions\Mw\TemplateErrorFillingException
	 */
	public function getInstructionsBody(int $appManagerId, ?string $emailAddress = null): string
	{
		return $this->connector->call("AppManager", "getInstructionsBody", get_defined_vars());
	}


	public function getPendingFilesCount(): int
	{
		return $this->connector->call("AppManager", "getPendingFilesCount", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\AppManagerStoreEntity>
	 */
	public function getStores(int $appManagerId): array
	{
		return $this->connector->call("AppManager", "getStores", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\AppManagerEntity[], row_count: int}
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("AppManager", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 * @throws Exceptions\Mw\VendorUnknownException
	 * @throws Exceptions\Mw\TemplateErrorFillingException
	 */
	public function sendNotifications(int $appManagerId, bool $isTest = false): void
	{
		$this->connector->call("AppManager", "sendNotifications", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 * @throws Exceptions\Mw\VendorRightException
	 */
	public function update(?int $appManagerId, InputEntities\Mw\AppManagerEntity $data): int
	{
		return $this->connector->call("AppManager", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function upload(int $appManagerId, InputEntities\Mw\FileManagerEntity $data): int
	{
		return $this->connector->call("AppManager", "upload", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\AppManagerUnknownException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function uploadChangelog(int $appManagerId, InputEntities\Mw\FileManagerChangelogEntity $data): int
	{
		return $this->connector->call("AppManager", "uploadChangelog", get_defined_vars());
	}
}

class Backup
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array<int>
	 */
	public function getBackupDirInfo(): array
	{
		return $this->connector->call("Backup", "getBackupDirInfo", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\SystemBackupUnknownFileException
	 */
	public function getBackupFile(string $name): string
	{
		return $this->connector->call("Backup", "getBackupFile", get_defined_vars());
	}
}

class Category
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 * @throws Exceptions\Mw\CategoryIsNotEmptyException
	 */
	public function delete(int $categoriesId): void
	{
		$this->connector->call("Category", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 */
	public function getData(int $categoriesId): Entities\Mw\CategoryEntity
	{
		return $this->connector->call("Category", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 */
	public function getDataPrivate(int $categoriesId): Entities\Mw\CategoryPrivateEntity
	{
		return $this->connector->call("Category", "getDataPrivate", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Category", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\CategoryPrivateEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Category", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CategoryDuplicateNameException
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function update(?int $categoriesId, InputEntities\Mw\CategoryEntity $data): int
	{
		return $this->connector->call("Category", "update", get_defined_vars());
	}
}

class Channel
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\ChannelCannotDeleteException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function delete(int $channelsId): void
	{
		$this->connector->call("Channel", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function deleteBroadcast(int $channelsBroadcastId): void
	{
		$this->connector->call("Channel", "deleteBroadcast", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function deleteMulticast(int $channelsMulticastId): void
	{
		$this->connector->call("Channel", "deleteMulticast", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelCannotDeleteException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function deleteUnicast(int $channelsUnicastId): void
	{
		$this->connector->call("Channel", "deleteUnicast", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\EpgUnknownEpgException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @throws Exceptions\Mw\ChannelAudioInvalidRoleException
	 * @throws Exceptions\Mw\ChannelDuplicateBindIpPortCombinationException
	 * @throws Exceptions\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\UnknownErrorException
	 * @throws Exceptions\Mw\ChannelAudioDuplicateRoleException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function duplicate(int $channelsId): int
	{
		return $this->connector->call("Channel", "duplicate", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function duplicateBroadcast(int $channelsBroadcastId, ?int $channelsId = null): int
	{
		return $this->connector->call("Channel", "duplicateBroadcast", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelAudioDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelAudioInvalidRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 */
	public function duplicateMulticast(int $channelsMulticastId, ?int $channelsId = null): int
	{
		return $this->connector->call("Channel", "duplicateMulticast", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelAudioDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelAudioInvalidRoleException
	 * @throws Exceptions\Mw\ChannelDuplicateBindIpPortCombinationException
	 * @throws Exceptions\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\UnknownErrorException
	 */
	public function duplicateUnicast(int $channelsUnicastId, ?int $channelsId = null): int
	{
		return $this->connector->call("Channel", "duplicateUnicast", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\DvbRegionEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function dvbRegionSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Channel", "dvbRegionSelection", get_defined_vars());
	}


	/**
	 * @return array{raw: string, programs: array{programId: string, programName: string, programProvider: string, streams: array<string,array{mapping: string, pid: string, language: string, type: string, data: string}[]>}[]}
	 * @throws Exceptions\Mw\ChannelFfprobeSaveFirstException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 */
	public function ffprobe(
		int $transcodersId,
		Enums\Mw\ChannelInputTypeEnum $type,
		?int $channelsUnicastId = null,
		?string $url = null,
	): array
	{
		return $this->connector->call("Channel", "ffprobe", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getActivePairs(): array
	{
		return $this->connector->call("Channel", "getActivePairs", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\MonitoringChannelStatusEntity>
	 */
	public function getAllChannelMonitoringData(?int $transcodersId = null): array
	{
		return $this->connector->call("Channel", "getAllChannelMonitoringData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function getBroadcast(int $channelsBroadcastId): Entities\Mw\ChannelsBroadcastEntity
	{
		return $this->connector->call("Channel", "getBroadcast", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getBroadcastVendorPairs(): array
	{
		return $this->connector->call("Channel", "getBroadcastVendorPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getChannelNamesByUnicast(): array
	{
		return $this->connector->call("Channel", "getChannelNamesByUnicast", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\HomepageChannelAlertEntity>
	 */
	public function getChannelsAlerts(): array
	{
		return $this->connector->call("Channel", "getChannelsAlerts", get_defined_vars());
	}


	public function getChannelUnicastMonitoringData(int $channelsUnicastId): Entities\Mw\MonitoringChannelStatusEntity
	{
		return $this->connector->call("Channel", "getChannelUnicastMonitoringData", get_defined_vars());
	}


	/**
	 * @return array<int,array<string,int>>
	 */
	public function getCurrentlyWatchedChannels(): array
	{
		return $this->connector->call("Channel", "getCurrentlyWatchedChannels", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function getData(int $channelsId): Entities\Mw\ChannelEntity
	{
		return $this->connector->call("Channel", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\DvbRegionUnknownException
	 */
	public function getDvbRegion(int $dvbRegionsId): Entities\Mw\DvbRegionEntity
	{
		return $this->connector->call("Channel", "getDvbRegion", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getDvbRegionPairs(?string $dvbRegionsNetwork = null): array
	{
		return $this->connector->call("Channel", "getDvbRegionPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\SystemCommandFailedException
	 */
	public function getEventLogData(int $generatorId): array
	{
		return $this->connector->call("Channel", "getEventLogData", get_defined_vars());
	}


	/**
	 * @return array{epg_events_id: int, epg_events_title: string, epg_events_start: \DateTimeImmutable, epg_events_end: \DateTimeImmutable, channels_unicast_id: int, generator_drm: Enums\Mw\TemplateEncryptionEnum[]}
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 */
	public function getGenerator(int $generatorId): array
	{
		return $this->connector->call("Channel", "getGenerator", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\SubscribedChannelInternalEntity>
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getLockedChannels(
		int $profilesId,
		InputEntities\Mw\CustomerDeviceEntity $device,
		?Enums\Mw\ChannelTypeEnum $type = null,
		bool $whitelisting = true,
		bool $mcastOnly = false,
		bool $bcastOnly = false,
	): array
	{
		return $this->connector->call("Channel", "getLockedChannels", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function getMulticast(int $channelsMulticastId): Entities\Mw\ChannelMulticastEntity
	{
		return $this->connector->call("Channel", "getMulticast", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getMulticastVendorPairs(): array
	{
		return $this->connector->call("Channel", "getMulticastVendorPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Channel", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\RemoteChannelEntity>
	 */
	public function getRemoteChannels(): array
	{
		return $this->connector->call("Channel", "getRemoteChannels", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelStreamUnavailableException
	 * @throws Exceptions\Mw\ChannelUnathorizedException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\DeviceUnknownException
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 * @throws Exceptions\Mw\VendorUnknownException
	 * @param array<int[]> $preferredEdgesStoragesIds
	 * @param array<int[]> $nonpreferredEdgesStoragesIds
	 */
	public function getStreamUrl(
		int $profilesId,
		InputEntities\Mw\CustomerDeviceEntity $device,
		int $channelsId,
		?Enums\Mw\ChannelManifestTypeEnum $type = null,
		?int $timestamp = null,
		bool $mcast = false,
		bool $bcast = false,
		bool $allowedMulticast = false,
		bool $allowedUnicast = false,
		bool $allowedBroadcast = false,
		array $preferredEdgesStoragesIds = [],
		array $nonpreferredEdgesStoragesIds = [],
		bool $bb8Ready = false,
		string $language = 'en',
		?int $devicesId = null,
	): Entities\Mw\StreamUrlEntity
	{
		return $this->connector->call("Channel", "getStreamUrl", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelStreamUnavailableException
	 * @throws Exceptions\Mw\ChannelUnathorizedException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\DeviceUnknownException
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 * @throws Exceptions\Mw\VendorUnknownException
	 * @param array<int[]> $preferredEdgesStoragesIds
	 * @param array<int[]> $nonpreferredEdgesStoragesIds
	 */
	public function getStreamUrlV3(
		int $profilesId,
		InputEntities\Mw\CustomerDeviceEntity $device,
		int $channelsId,
		?Enums\Mw\ChannelManifestTypeEnum $type,
		?int $timestamp = null,
		bool $mcast = false,
		bool $bcast = false,
		bool $allowedMulticast = false,
		bool $allowedUnicast = false,
		bool $allowedBroadcast = false,
		array $preferredEdgesStoragesIds = [],
		array $nonpreferredEdgesStoragesIds = [],
		bool $bb8Ready = false,
		string $language = 'en',
		?int $devicesId = null,
	): Entities\Mw\StreamUrlV2Entity
	{
		return $this->connector->call("Channel", "getStreamUrlV3", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\SubscribedChannelInternalEntity>
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getSubscribedChannels(
		int $profilesId,
		?InputEntities\Mw\CustomerDeviceEntity $device,
		?Enums\Mw\ChannelTypeEnum $type = null,
		bool $whitelisting = true,
		bool $mcastOnly = false,
		bool $bcastOnly = false,
		bool $locked = false,
	): array
	{
		return $this->connector->call("Channel", "getSubscribedChannels", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\SubscribedChannelLiteEntity>
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getSubscribedChannelsLite(
		int $profilesId,
		InputEntities\Mw\CustomerDeviceEntity $device,
		bool $mcastOnly = false,
		bool $bcastOnly = false,
		bool $locked = false,
	): array
	{
		return $this->connector->call("Channel", "getSubscribedChannelsLite", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function getUnicast(int $channelsUnicastId, string $language = 'en'): Entities\Mw\ChannelUnicastEntity
	{
		return $this->connector->call("Channel", "getUnicast", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getUnicastMosaicPairs(): array
	{
		return $this->connector->call("Channel", "getUnicastMosaicPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getUnicastVendorPairs(): array
	{
		return $this->connector->call("Channel", "getUnicastVendorPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<string[]> $columns
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function recordedEventSelection(
		array $columns,
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
		?int $channelsId = null,
	): array
	{
		return $this->connector->call("Channel", "recordedEventSelection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\ChannelEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Channel", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\EpgUnknownEpgException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function update(?int $channelsId, InputEntities\Mw\ChannelEntity $data, bool $generateNoEpg = false): int
	{
		return $this->connector->call("Channel", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function updateBroadcast(
		int $channelsId,
		?int $channelsBroadcastId,
		InputEntities\Mw\ChannelBroadcastEntity $data,
	): int
	{
		return $this->connector->call("Channel", "updateBroadcast", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\DvbRegionUnknownException
	 */
	public function updateDvbRegion(?int $dvbRegionsId, InputEntities\Mw\DvbRegionEntity $data): int
	{
		return $this->connector->call("Channel", "updateDvbRegion", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelAudioDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelAudioInvalidRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 */
	public function updateMulticast(
		int $channelsId,
		?int $channelsMulticastId,
		InputEntities\Mw\ChannelMulticastEntity $data,
	): int
	{
		return $this->connector->call("Channel", "updateMulticast", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelAudioDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelAudioInvalidRoleException
	 * @throws Exceptions\Mw\ChannelDuplicateBindIpPortCombinationException
	 * @throws Exceptions\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\UnknownErrorException
	 */
	public function updateUnicastHttp(
		int $channelsId,
		?int $channelsUnicastId,
		InputEntities\Mw\ChannelUnicastHttpEntity $data,
	): int
	{
		return $this->connector->call("Channel", "updateUnicastHttp", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelAudioDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelAudioInvalidRoleException
	 * @throws Exceptions\Mw\ChannelDuplicateBindIpPortCombinationException
	 * @throws Exceptions\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\UnknownErrorException
	 */
	public function updateUnicastMozaic(
		int $channelsId,
		?int $channelsUnicastId,
		InputEntities\Mw\ChannelUnicastMozaicEntity $data,
	): int
	{
		return $this->connector->call("Channel", "updateUnicastMozaic", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelAudioDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelAudioInvalidRoleException
	 * @throws Exceptions\Mw\ChannelDuplicateBindIpPortCombinationException
	 * @throws Exceptions\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\UnknownErrorException
	 */
	public function updateUnicastRegular(
		int $channelsId,
		?int $channelsUnicastId,
		InputEntities\Mw\ChannelUnicastRegularEntity $data,
	): int
	{
		return $this->connector->call("Channel", "updateUnicastRegular", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelAudioDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelAudioInvalidRoleException
	 * @throws Exceptions\Mw\ChannelDuplicateBindIpPortCombinationException
	 * @throws Exceptions\Mw\ChannelSubtitleDuplicateRoleException
	 * @throws Exceptions\Mw\ChannelSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\UnknownErrorException
	 */
	public function updateUnicastRemote(
		int $channelsId,
		?int $channelsUnicastId,
		InputEntities\Mw\ChannelUnicastRemoteEntity $data,
	): int
	{
		return $this->connector->call("Channel", "updateUnicastRemote", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\StorageUnknownException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 */
	public function uploadUnicastInputFile(
		int $storagesId,
		string $directory,
		string $filename,
		?string $content = null,
	): void
	{
		$this->connector->call("Channel", "uploadUnicastInputFile", get_defined_vars());
	}
}

class ChannelCategory
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 */
	public function getData(int $channelsCategoriesId): Entities\Mw\ChannelCategoryEntity
	{
		return $this->connector->call("ChannelCategory", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("ChannelCategory", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\ChannelCategoryEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("ChannelCategory", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function update(?int $channelsCategoriesId, InputEntities\Mw\ChannelCategoryEntity $data): int
	{
		return $this->connector->call("ChannelCategory", "update", get_defined_vars());
	}
}

class Config
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getConfigGrafanaNotificationMattermost(): string
	{
		return $this->connector->call("Config", "getConfigGrafanaNotificationMattermost", get_defined_vars());
	}


	public function getConfigLicenseCount(): int
	{
		return $this->connector->call("Config", "getConfigLicenseCount", get_defined_vars());
	}


	public function getConfigMwName(): string
	{
		return $this->connector->call("Config", "getConfigMwName", get_defined_vars());
	}


	public function getConfigRecognitionDataRetentionDays(): int
	{
		return $this->connector->call("Config", "getConfigRecognitionDataRetentionDays", get_defined_vars());
	}


	public function getConfigRecommendationEngineEnabled(): bool
	{
		return $this->connector->call("Config", "getConfigRecommendationEngineEnabled", get_defined_vars());
	}


	/**
	 * @return array<scalar|Enums\MotvEnum>
	 */
	public function getData(bool $includePredefined = true): array
	{
		return $this->connector->call("Config", "getData", get_defined_vars());
	}


	public function getGitlabLoginAppId(): string
	{
		return $this->connector->call("Config", "getGitlabLoginAppId", get_defined_vars());
	}


	public function getGitlabLoginAppSecret(): string
	{
		return $this->connector->call("Config", "getGitlabLoginAppSecret", get_defined_vars());
	}


	public function getHomepageSearchDataParsed(): bool
	{
		return $this->connector->call("Config", "getHomepageSearchDataParsed", get_defined_vars());
	}


	public function getPreferCenc(): bool
	{
		return $this->connector->call("Config", "getPreferCenc", get_defined_vars());
	}


	public function getPublicUrl(): string
	{
		return $this->connector->call("Config", "getPublicUrl", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RemoteMwUnknownException
	 */
	public function getRemoteMw(int $remoteMwId): Entities\Mw\RemoteMwEntity
	{
		return $this->connector->call("Config", "getRemoteMw", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getRemoteMwPairs(): array
	{
		return $this->connector->call("Config", "getRemoteMwPairs", get_defined_vars());
	}


	public function getRequiresOtp(): bool
	{
		return $this->connector->call("Config", "getRequiresOtp", get_defined_vars());
	}


	/**
	 * @return array<mixed>
	 */
	public function getSettings(): array
	{
		return $this->connector->call("Config", "getSettings", get_defined_vars());
	}


	public function getSystemExpiration(): ?\DateTimeImmutable
	{
		return $this->connector->call("Config", "getSystemExpiration", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\RemoteMwEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function remoteMwSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Config", "remoteMwSelection", get_defined_vars());
	}


	/**
	 * @return array<scalar|Enums\MotvEnum>
	 * @param array<string,scalar|Enums\MotvEnum> $data $data
	 */
	public function update(array $data): array
	{
		return $this->connector->call("Config", "update", get_defined_vars());
	}


	public function updateRemoteMw(?int $remoteMwId, InputEntities\Mw\RemoteMwEntity $data): int
	{
		return $this->connector->call("Config", "updateRemoteMw", get_defined_vars());
	}
}

class Country
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Country", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairsByCode(): array
	{
		return $this->connector->call("Country", "getPairsByCode", get_defined_vars());
	}
}

class Customer
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\CustomerDuplicateMacException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 */
	public function addMacAddress(int $customersId, string $macAddress): void
	{
		$this->connector->call("Customer", "addMacAddress", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CustomerQrCodeVendorException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\CustomerUnknownQrException
	 */
	public function assignQRCode(int $code, int $customersId, int $vendorsId): void
	{
		$this->connector->call("Customer", "assignQRCode", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CustomerUnknownException
	 */
	public function delete(int $customersId): void
	{
		$this->connector->call("Customer", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CustomerUnknownException
	 */
	public function getCustomerByToken(string $token): Entities\Mw\CustomerEntity
	{
		return $this->connector->call("Customer", "getCustomerByToken", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CustomerUnknownException
	 */
	public function getData(
		int $customersId,
		?Enums\Mw\LoggerEventsEnum $loginLoggerType = null,
	): Entities\Mw\CustomerEntity
	{
		return $this->connector->call("Customer", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CustomerIncorrectLoginPasswordException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 */
	public function getDataByLogin(string $login, int $vendorsId): Entities\Mw\CustomerEntity
	{
		return $this->connector->call("Customer", "getDataByLogin", get_defined_vars());
	}


	/**
	 * @return array{customers_mac_id: int, customers_mac_mac: string, customers_mac_last_used: \DateTimeImmutable|null}[]
	 * @throws Exceptions\Mw\CustomerUnknownException
	 */
	public function getMacAddresses(int $customersId): array
	{
		return $this->connector->call("Customer", "getMacAddresses", get_defined_vars());
	}


	public function getUsageHistory(int $customersId): array
	{
		return $this->connector->call("Customer", "getUsageHistory", get_defined_vars());
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
	 * @return array{customers_id: int, customers_login: string, customers_vendors_id: int}[]
	 * @throws Exceptions\Mw\CustomerTooManyFoundException
	 */
	public function search(
		?int $customersId = null,
		?string $customersLogin = null,
		?string $customersMac = null,
		?int $customersVendorsId = null,
		?string $wild = null,
		?int $limit = null,
	): array
	{
		return $this->connector->call("Customer", "search", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CustomerDuplicateLoginException
	 * @throws Exceptions\Mw\CustomerPasswordFormatInvalidException
	 * @throws Exceptions\Mw\CustomerPasswordSameAsLoginException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 */
	public function update(int $customersId, InputEntities\Mw\CustomerEntity $data): int
	{
		return $this->connector->call("Customer", "update", get_defined_vars());
	}
}

class Detector
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\DetectorUnknownException
	 */
	public function getData(int $detectorsId): Entities\Mw\DetectorEntity
	{
		return $this->connector->call("Detector", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Detector", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\DetectorEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Detector", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\DetectorUnknownException
	 * @throws Exceptions\Mw\DetectorDuplicateNameException
	 */
	public function update(?int $detectorsId, InputEntities\Mw\DetectorEntity $data): int
	{
		return $this->connector->call("Detector", "update", get_defined_vars());
	}
}

class Device
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\DeviceUnknownException
	 */
	public function getData(int $devicesId, ?Entities\Mw\ProfileEntity $profile = null): Entities\Mw\DeviceEntity
	{
		return $this->connector->call("Device", "getData", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\DeviceEntity>
	 */
	public function getDevices(int $customersId): array
	{
		return $this->connector->call("Device", "getDevices", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\DeviceUnknownException
	 */
	public function removeDevice(int $devicesId): void
	{
		$this->connector->call("Device", "removeDevice", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\DeviceEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\DeviceUnknownException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Device", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\DeviceUnknownException
	 */
	public function update(
		int $devicesId,
		?int $devicesDvbCRegionsId = null,
		?int $devicesDvbSRegionsId = null,
		?int $devicesDvbTRegionsId = null,
		?int $devicesDvbT2RegionsId = null,
	): int
	{
		return $this->connector->call("Device", "update", get_defined_vars());
	}
}

class Documentation
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array<Entities\ApiSupport\DocumentationApiEntity>
	 * @throws Exceptions\ApiSupport\DocumentationUnknownApiNameException
	 */
	public function getAdminApi(): array
	{
		return $this->connector->call("Documentation", "getAdminApi", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\ApiSupport\DocumentationUnknownApiNameException
	 */
	public function getAdminApiClasses(): array
	{
		return $this->connector->call("Documentation", "getAdminApiClasses", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DocumentationModelNotFoundException
	 * @throws Exceptions\ApiSupport\DocumentationUnknownApiNameException
	 * @throws Exceptions\ApiSupport\DocumentationEntityNotFoundException
	 */
	public function getAdminApiModel(string $type): Entities\ApiSupport\DocumentationApiEntity
	{
		return $this->connector->call("Documentation", "getAdminApiModel", get_defined_vars());
	}


	/**
	 * @return array<string,array<string,string>>
	 */
	public function getDatabaseStructure(): array
	{
		return $this->connector->call("Documentation", "getDatabaseStructure", get_defined_vars());
	}


	/**
	 * @return array<Entities\ApiSupport\DocumentationEntityEntity>
	 * @throws Exceptions\ApiSupport\DocumentationEntityNotFoundException
	 */
	public function getEntities(): array
	{
		return $this->connector->call("Documentation", "getEntities", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DocumentationEntityNotFoundException
	 */
	public function getEntity(string $type, bool $input = false): Entities\ApiSupport\DocumentationEntityEntity
	{
		return $this->connector->call("Documentation", "getEntity", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DocumentationEnumNotFoundException
	 */
	public function getEnum(string $type): Entities\ApiSupport\DocumentationEnumEntity
	{
		return $this->connector->call("Documentation", "getEnum", get_defined_vars());
	}


	/**
	 * @return array<Entities\ApiSupport\DocumentationEnumEntity>
	 */
	public function getEnums(): array
	{
		return $this->connector->call("Documentation", "getEnums", get_defined_vars());
	}


	/**
	 * @return array<Entities\ApiSupport\ErrorCodeEntity>
	 */
	public function getErrorCodes(): array
	{
		return $this->connector->call("Documentation", "getErrorCodes", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\ApiSupport\DocumentationEntityNotFoundException
	 */
	public function getExtendedEntities(string $type, bool $input = false): array
	{
		return $this->connector->call("Documentation", "getExtendedEntities", get_defined_vars());
	}


	/**
	 * @return array<Entities\ApiSupport\DocumentationEntityEntity>
	 * @throws Exceptions\ApiSupport\DocumentationEntityNotFoundException
	 */
	public function getInputEntities(): array
	{
		return $this->connector->call("Documentation", "getInputEntities", get_defined_vars());
	}


	/**
	 * @return array<Entities\ApiSupport\DocumentationApiEntity>
	 * @throws Exceptions\ApiSupport\DocumentationUnknownApiNameException
	 */
	public function getPublicApi(): array
	{
		return $this->connector->call("Documentation", "getPublicApi", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\ApiSupport\DocumentationUnknownApiNameException
	 */
	public function getPublicApiClasses(): array
	{
		return $this->connector->call("Documentation", "getPublicApiClasses", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DocumentationModelNotFoundException
	 * @throws Exceptions\ApiSupport\DocumentationUnknownApiNameException
	 * @throws Exceptions\ApiSupport\DocumentationEntityNotFoundException
	 */
	public function getPublicApiModel(string $type): Entities\ApiSupport\DocumentationApiEntity
	{
		return $this->connector->call("Documentation", "getPublicApiModel", get_defined_vars());
	}


	/**
	 * @return array<Entities\ApiSupport\DocumentationEntityEntity[]|Entities\ApiSupport\DocumentationEnumEntity[]|Entities\ApiSupport\DocumentationApiEntity[]|array<int,Entities\ApiSupport\ErrorCodeEntity>|array{model: string, method: Entities\ApiSupport\DocumentationMethodEntity}[]>
	 * @throws Exceptions\ApiSupport\DocumentationEntityNotFoundException
	 * @throws Exceptions\ApiSupport\DocumentationUnknownApiNameException
	 */
	public function search(string $key): array
	{
		return $this->connector->call("Documentation", "search", get_defined_vars());
	}
}

class Drm
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array{com.widevine.alpha: string, com.apple.fps.1_0: string, com.apple.fps: string, roku?: string}
	 */
	public function getDrms(
		?InputEntities\Mw\CustomerDeviceEntity $device = null,
		?Entities\Mw\ProfileEntity $profile = null,
	): array
	{
		return $this->connector->call("Drm", "getDrms", get_defined_vars());
	}


	public function getFairPlayCertificateUrl(): string
	{
		return $this->connector->call("Drm", "getFairPlayCertificateUrl", get_defined_vars());
	}
}

class Edge
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\EdgeInactiveException
	 * @throws Exceptions\Mw\EdgeUnknownException
	 */
	public function getActiveEdge(int $edgesId): Entities\Mw\EdgeEntity
	{
		return $this->connector->call("Edge", "getActiveEdge", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\EdgeStorageEntity>
	 */
	public function getActiveEdgesStorages(
		?Entities\Mw\ProfileEntity $profile = null,
		?InputEntities\Mw\CustomerDeviceEntity $customerDeviceEntity = null,
	): array
	{
		return $this->connector->call("Edge", "getActiveEdgesStorages", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EdgeUnknownException
	 */
	public function getData(int $edgesId): Entities\Mw\EdgeEntity
	{
		return $this->connector->call("Edge", "getData", get_defined_vars());
	}


	/**
	 * @return array{edges_id: int, edges_url: string, storages_edge_mount: string, channels_unicast_directory: string, drm: Enums\Mw\TemplateEncryptionEnum[]}[]
	 */
	public function getEdgesByChannelUnicast(int $channelsUnicastId, Enums\Mw\ContentTypeEnum $contentType): array
	{
		return $this->connector->call("Edge", "getEdgesByChannelUnicast", get_defined_vars());
	}


	/**
	 * @return array{edges_storages_checked: ?\DateTimeImmutable, edges_storages_available: int|null, edges_url: string, storages_name: string}[]
	 */
	public function getEdgesStorages(): array
	{
		return $this->connector->call("Edge", "getEdgesStorages", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @param array<int[]> $packages
	 */
	public function getEdgesStoragesByPackages(array $packages): array
	{
		return $this->connector->call("Edge", "getEdgesStoragesByPackages", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Edge", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\EdgeEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Edge", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EdgeUnknownException
	 * @throws Exceptions\Mw\EdgeDuplicateNameException
	 */
	public function update(?int $edgesId, InputEntities\Mw\EdgeEntity $data): int
	{
		return $this->connector->call("Edge", "update", get_defined_vars());
	}
}

class Epg
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownEpgException
	 */
	public function getData(int $channelsId): Entities\Mw\EpgChannelEntity
	{
		return $this->connector->call("Epg", "getData", get_defined_vars());
	}


	/**
	 * @return array<bool>
	 */
	public function getEpgAvailabilityPerChannel(): array
	{
		return $this->connector->call("Epg", "getEpgAvailabilityPerChannel", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getEpgEventsPair(): array
	{
		return $this->connector->call("Epg", "getEpgEventsPair", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 */
	public function getEvent(int $epgEventsId): Entities\Mw\EpgEventInternalEntity
	{
		return $this->connector->call("Epg", "getEvent", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 */
	public function getEventMetadata(int $epgEventsId): Entities\Mw\EpgEventMetadataEntity
	{
		return $this->connector->call("Epg", "getEventMetadata", get_defined_vars());
	}


	/**
	 * @return array<mixed>
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 */
	public function getEventSegments(int $generatorId): array
	{
		return $this->connector->call("Epg", "getEventSegments", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Epg", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\RecommendationCardEventEntity>
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @param array<int[]> $channels
	 * @param array<int[]> $ids
	 */
	public function getUpdatedEvents(
		?int $profilesId,
		int $timestamp,
		?array $channels = null,
		$from = null,
		$to = null,
		?array $ids = null,
	): array
	{
		return $this->connector->call("Epg", "getUpdatedEvents", get_defined_vars());
	}


	public function processAsyncEpg(int $channelsId, string $content): void
	{
		$this->connector->call("Epg", "processAsyncEpg", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgInsertErrorException
	 * @throws Exceptions\Mw\EpgUnknownEpgException
	 * @throws Exceptions\Mw\EpgXmlMissingAttributeException
	 * @throws Exceptions\Mw\EpgXmlMissingTagException
	 * @throws Exceptions\Mw\EpgXmlSetErrorException
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function processEpg(int $channelsId, string $content, bool $pastEvents = false): void
	{
		$this->connector->call("Epg", "processEpg", get_defined_vars());
	}


	/**
	 * @return array{id: int, text: string}[]
	 */
	public function search(string $search): array
	{
		return $this->connector->call("Epg", "search", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 */
	public function setRecordedEventTime(int $epgEventsId, int $second): void
	{
		$this->connector->call("Epg", "setRecordedEventTime", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateEventMetadata(int $epgEventsId, InputEntities\Mw\EpgEventMetadataEntity $data): void
	{
		$this->connector->call("Epg", "updateEventMetadata", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function uploadEpgImage(int $epgEventsId, string $content, int $width, int $height): void
	{
		$this->connector->call("Epg", "uploadEpgImage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function uploadEpgImageWidescreen(int $epgEventsId, string $content, int $width, int $height): void
	{
		$this->connector->call("Epg", "uploadEpgImageWidescreen", get_defined_vars());
	}
}

class EpgPlaylist
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownPlaylistException
	 * @throws Exceptions\Mw\ChannelCategoryUnknownException
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\GenreUnknownException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 * @param array<int[]> $items
	 */
	public function addItemsToPlaylist(int $epgPlaylistsId, array $items, Enums\Mw\PlaylistItemTypeEnum $type): void
	{
		$this->connector->call("EpgPlaylist", "addItemsToPlaylist", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownPlaylistException
	 */
	public function getData(int $epgPlaylistsId, bool $includeItemsInfo = false): Entities\Mw\EpgPlaylistEntity
	{
		return $this->connector->call("EpgPlaylist", "getData", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 */
	public function getEventPlaylists(int $epgEventsId): array
	{
		return $this->connector->call("EpgPlaylist", "getEventPlaylists", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(?bool $active = null): array
	{
		return $this->connector->call("EpgPlaylist", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\EpgPlaylistEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\EpgUnknownPlaylistException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("EpgPlaylist", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownPlaylistException
	 */
	public function update(?int $epgPlaylistsId, InputEntities\Mw\EpgPlaylistEntity $data): int
	{
		return $this->connector->call("EpgPlaylist", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownPlaylistException
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @param array<int[]> $epgPlaylistsIds
	 */
	public function updateEventPlaylists(int $epgEventsId, array $epgPlaylistsIds): void
	{
		$this->connector->call("EpgPlaylist", "updateEventPlaylists", get_defined_vars());
	}
}

class EpgRating
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownRatingException
	 */
	public function delete(int $epgRatingId): void
	{
		$this->connector->call("EpgRating", "delete", get_defined_vars());
	}


	/**
	 * @return array<string|null>
	 */
	public function getAll(): array
	{
		return $this->connector->call("EpgRating", "getAll", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownRatingException
	 */
	public function getData(int $epgRatingId): Entities\Mw\EpgRatingEntity
	{
		return $this->connector->call("EpgRating", "getData", get_defined_vars());
	}


	/**
	 * @return array{name: string|null, year: int}[]
	 */
	public function getOptions(): array
	{
		return $this->connector->call("EpgRating", "getOptions", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\EpgRatingEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("EpgRating", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownRatingException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function update(?int $epgRatingId, InputEntities\Mw\EpgRatingEntity $data): int
	{
		return $this->connector->call("EpgRating", "update", get_defined_vars());
	}
}

class Genre
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\GenreIsNotEmptyException
	 * @throws Exceptions\Mw\GenreUnknownException
	 */
	public function delete(int $genresId): void
	{
		$this->connector->call("Genre", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\GenreUnknownException
	 */
	public function getData(int $genresId): Entities\Mw\GenreEntity
	{
		return $this->connector->call("Genre", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Genre", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\GenreEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Genre", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\GenreDuplicateNameException
	 * @throws Exceptions\Mw\GenreUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function update(?int $genresId, InputEntities\Mw\GenreEntity $data): int
	{
		return $this->connector->call("Genre", "update", get_defined_vars());
	}
}

class IpRange
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\IpRangeUnknownException
	 * @throws Exceptions\Mw\IpRangeCannotBeDeletedException
	 */
	public function delete(int $ipRangesId): void
	{
		$this->connector->call("IpRange", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\IpRangeUnknownException
	 */
	public function getData(int $ipRangesId): Entities\Mw\IpRangeEntity
	{
		return $this->connector->call("IpRange", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("IpRange", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\IpRangeEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("IpRange", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\IpRangeUnknownException
	 */
	public function update(?int $ipRangesId, InputEntities\Mw\IpRangeEntity $data): int
	{
		return $this->connector->call("IpRange", "update", get_defined_vars());
	}
}

class Logger
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array{rows: Entities\Mw\LoggerEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Logger", "selection", get_defined_vars());
	}
}

class Messaging
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array<string>
	 */
	public function getAllTopics(): array
	{
		return $this->connector->call("Messaging", "getAllTopics", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\PushMessageSendException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function sendCustomerMessage(
		int $customersId,
		InputEntities\Mw\MessagingEntity $options,
		?int $profilesId = null,
		?int $devicesId = null,
	): void
	{
		$this->connector->call("Messaging", "sendCustomerMessage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\PushMessageSendException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function sendTopicMessage(string $topic, InputEntities\Mw\MessagingEntity $options): void
	{
		$this->connector->call("Messaging", "sendTopicMessage", get_defined_vars());
	}
}

class Monitoring
{
	/** @var AdminConnector */
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
	 * @return array{channel: Entities\Mw\ChannelUnicastEntity|null, monitoring: array<int,array<int,array<int,Entities\Mw\MonitoringDataEntity[]>>>, count: int}
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @param array<int[]> $channels
	 * @param array<Enums\Mw\MonitoringEventChannelEnum> $options
	 */
	public function getChannelMonitoringData(array $channels, ?array $options = null, int $page = 1): array
	{
		return $this->connector->call("Monitoring", "getChannelMonitoringData", get_defined_vars());
	}


	/**
	 * @return array<int>
	 */
	public function getChannelUnicastStatuses(): array
	{
		return $this->connector->call("Monitoring", "getChannelUnicastStatuses", get_defined_vars());
	}


	/**
	 * @return array{success: int, failure: int, interval: string} Returns the count of successfull and failed widevine requests from last 1 minute.
	 */
	public function getWidevineRequestSuccessFailureCounts(): array
	{
		return $this->connector->call("Monitoring", "getWidevineRequestSuccessFailureCounts", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function showEventLog(int $channelsLogId): array
	{
		return $this->connector->call("Monitoring", "showEventLog", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function showEventLogDataByGenerator(int $generatorId): array
	{
		return $this->connector->call("Monitoring", "showEventLogDataByGenerator", get_defined_vars());
	}
}

class Onboarding
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\OnboardingUnknownException
	 */
	public function delete(int $onboardingId): void
	{
		$this->connector->call("Onboarding", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\OnboardingUnknownException
	 */
	public function getData(int $onboardingId, string $language = 'en'): Entities\Mw\OnboardingEntity
	{
		return $this->connector->call("Onboarding", "getData", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\OnboardingEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
		string $language = 'en',
	): array
	{
		return $this->connector->call("Onboarding", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\OnboardingUnknownException
	 * @throws Exceptions\Mw\WordUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function update(?int $onboardingId, InputEntities\Mw\OnboardingEntity $data): int
	{
		return $this->connector->call("Onboarding", "update", get_defined_vars());
	}
}

class Ota
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\OtaUnknownVersionException
	 */
	public function activateOtaVersion(int $otaVersionsId): int
	{
		return $this->connector->call("Ota", "activateOtaVersion", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\OtaDeviceEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\OtaUnknownDeviceException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function devicesSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Ota", "devicesSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\OtaUnknownDeviceException
	 */
	public function getDevice(int $otaDevicesId): Entities\Mw\OtaDeviceEntity
	{
		return $this->connector->call("Ota", "getDevice", get_defined_vars());
	}


	public function getLastVersion(int $otaDevicesId, bool $active = false): ?Entities\Mw\OtaVersionEntity
	{
		return $this->connector->call("Ota", "getLastVersion", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\OtaUnknownVersionException
	 */
	public function getVersion(int $otaVersionsId): Entities\Mw\OtaVersionEntity
	{
		return $this->connector->call("Ota", "getVersion", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\OtaUnknownDeviceException
	 * @throws Exceptions\Mw\OtaUnknownVersionException
	 */
	public function latest(string $name): Entities\Mw\OtaLatestVersionEntity
	{
		return $this->connector->call("Ota", "latest", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\OtaUnknownDeviceException
	 * @throws Exceptions\Mw\OtaUnknownVersionException
	 */
	public function latestById(int $id): Entities\Mw\OtaLatestVersionEntity
	{
		return $this->connector->call("Ota", "latestById", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\OtaUnknownDeviceException
	 */
	public function updateDevice(?int $otaDevicesId, InputEntities\Mw\OtaDeviceEntity $data): int
	{
		return $this->connector->call("Ota", "updateDevice", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\OtaUnknownVersionException
	 * @throws Exceptions\Mw\OtaBadVersionException
	 */
	public function updateVersion(?int $otaVersionsId, InputEntities\Mw\OtaVersionEntity $data): int
	{
		return $this->connector->call("Ota", "updateVersion", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\OtaVersionEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\OtaUnknownVersionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function versionsSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Ota", "versionsSelection", get_defined_vars());
	}
}

class Package
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\PackageUnknownException
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\PackageRecordingLengthShorterThanCatchupException
	 * @throws Exceptions\Mw\ExternalVodCannotBeLockedVodException
	 * @throws Exceptions\Mw\VodGroupUnknownException
	 */
	public function copyPackage(int $packagesId, string $name): int
	{
		return $this->connector->call("Package", "copyPackage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\PackageUnknownException
	 */
	public function getData(int $packagesId): Entities\Mw\PackageEntity
	{
		return $this->connector->call("Package", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(?bool $packagesActive = null): array
	{
		return $this->connector->call("Package", "getPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\PackageUnknownException
	 * @throws Exceptions\Mw\PackageCannotBeRemovedException
	 */
	public function remove(int $packagesId): void
	{
		$this->connector->call("Package", "remove", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\PackageEntity[], row_count: int}
	 * @throws Exceptions\Mw\PackageUnknownException
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Package", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ExternalVodCannotBeLockedVodException
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\PackageRecordingLengthShorterThanCatchupException
	 * @throws Exceptions\Mw\PackageUnknownException
	 * @throws Exceptions\Mw\VodGroupUnknownException
	 */
	public function update(?int $packagesId, InputEntities\Mw\PackageEntity $data): int
	{
		return $this->connector->call("Package", "update", get_defined_vars());
	}
}

class Person
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\PersonUnknownPersonException
	 */
	public function getData(int $personsId): Entities\Mw\PersonEntity
	{
		return $this->connector->call("Person", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(?Enums\Mw\PersonEnum $type = null): array
	{
		return $this->connector->call("Person", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @param array<string[]> $options
	 */
	public function parseAllowedPersons(array $options, Enums\Mw\PersonEnum $type): array
	{
		return $this->connector->call("Person", "parseAllowedPersons", get_defined_vars());
	}


	/**
	 * @return array{id: int, text: string}[]
	 */
	public function search(Enums\Mw\PersonEnum $type, string $search): array
	{
		return $this->connector->call("Person", "search", get_defined_vars());
	}


	/**
	 * @return array{id: string, text: string}[]
	 */
	public function searchForHomepageRow(Enums\Mw\PersonEnum $type, string $search): array
	{
		return $this->connector->call("Person", "searchForHomepageRow", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\PersonEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Person", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\PersonDuplicateNameException
	 * @throws Exceptions\Mw\PersonUnknownPersonException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function update(?int $personsId, InputEntities\Mw\PersonEntity $data): int
	{
		return $this->connector->call("Person", "update", get_defined_vars());
	}
}

class Poll
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\PollUnknownException
	 */
	public function getData(int $pollsId): Entities\Mw\PollEntity
	{
		return $this->connector->call("Poll", "getData", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\PollEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Poll", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\PollUnknownException
	 */
	public function update(?int $pollsId, InputEntities\Mw\PollEntity $data): int
	{
		return $this->connector->call("Poll", "update", get_defined_vars());
	}
}

class Profile
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\ProfileCannotDeleteException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function delete(int $profilesId, ?int $updatersProfilesId = null): void
	{
		$this->connector->call("Profile", "delete", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getChannelWhitelisting(int $profilesId): array
	{
		return $this->connector->call("Profile", "getChannelWhitelisting", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getData(int $profilesId): Entities\Mw\ProfileEntity
	{
		return $this->connector->call("Profile", "getData", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getFavoriteChannels(int $profilesId): array
	{
		return $this->connector->call("Profile", "getFavoriteChannels", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getImage(int $profilesId, bool $sendHeaders = true): \Nette\Application\Responses\FileResponse
	{
		return $this->connector->call("Profile", "getImage", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getProfilePairs(int $customersId): array
	{
		return $this->connector->call("Profile", "getProfilePairs", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\ProfileEntity>
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getProfiles(int $customersId): array
	{
		return $this->connector->call("Profile", "getProfiles", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function resetChannelOrder(int $profilesId, ?string $type = null): void
	{
		$this->connector->call("Profile", "resetChannelOrder", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\ProfileDuplicateNameException
	 * @throws Exceptions\Mw\ProfileInvalidBirthdayException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function update(
		?int $profilesId,
		InputEntities\Mw\ProfileEntity $data,
		bool $isRegistration = false,
		?int $updatersProfilesId = null,
	): int
	{
		return $this->connector->call("Profile", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 * @param array<int[]> $channels
	 */
	public function updateChannelOrder(int $profilesId, string $type, array $channels): void
	{
		$this->connector->call("Profile", "updateChannelOrder", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 * @param array<int[]> $channels
	 */
	public function updateChannelWhitelisting(int $profilesId, array $channels): void
	{
		$this->connector->call("Profile", "updateChannelWhitelisting", get_defined_vars());
	}
}

class Recognition
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 * @throws Exceptions\Mw\RecognitionProgramSegmentDuplictyException
	 */
	public function addProgramSegment(
		int $recognitionModelsChannelsId,
		\DateTimeImmutable $start,
		\DateTimeImmutable $end,
	): void
	{
		$this->connector->call("Recognition", "addProgramSegment", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\DetectorUnknownException
	 * @throws Exceptions\Mw\RecognitionApiException
	 * @throws Exceptions\Mw\RecognitionUnknownFollowedAdvertSegmentException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 */
	public function deleteRecogitionSavedTemplate(int $recognitionSavedTemplatesId): void
	{
		$this->connector->call("Recognition", "deleteRecogitionSavedTemplate", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\RecognitionSavedTemplateEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function followedAdvertSegmentsSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Recognition", "followedAdvertSegmentsSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\DetectorUnknownException
	 * @throws Exceptions\Mw\RecognitionApiException
	 * @throws Exceptions\Mw\RecognitionSavedTemplateDuplicateException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 * @throws Exceptions\Mw\RecognitionUnknownFollowedAdvertSegmentException
	 */
	public function followRecogitionSavedTemplate(InputEntities\Mw\RecognitionSavedTemplateExtendedEntity $data): int
	{
		return $this->connector->call("Recognition", "followRecogitionSavedTemplate", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\TimelineSegmentEntity>
	 * @throws Exceptions\Mw\DetectorUnknownException
	 * @throws Exceptions\Mw\RecognitionApiException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 */
	public function getAdvertSegments(int $recognitionModelsChannelsId, string $dateFrom, string $dateTo): array
	{
		return $this->connector->call("Recognition", "getAdvertSegments", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RecognitionUnknownFollowedAdvertSegmentException
	 */
	public function getFollowedAdvertSegment(
		int $recognitionSavedTemplatesId,
	): Entities\Mw\RecognitionSavedTemplateEntity
	{
		return $this->connector->call("Recognition", "getFollowedAdvertSegment", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 */
	public function getLatestProgramSegment(int $recognitionModelsChannelsId): ?Entities\Mw\EpgEventSegmentEntity
	{
		return $this->connector->call("Recognition", "getLatestProgramSegment", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\RecognitionSavedTemplateResultsEntity>
	 * @throws Exceptions\Mw\DetectorUnknownException
	 * @throws Exceptions\Mw\RecognitionApiException
	 * @throws Exceptions\Mw\RecognitionUnknownFollowedAdvertSegmentException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 */
	public function getListResultsForSegment(int $recognitionSavedTemplatesId): array
	{
		return $this->connector->call("Recognition", "getListResultsForSegment", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 */
	public function getModel(int $recognitionModelsId): Entities\Mw\RecognitionModelEntity
	{
		return $this->connector->call("Recognition", "getModel", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 */
	public function getModelChannel(int $recognitionModelsChannelsId): Entities\Mw\RecognitionModelChannelEntity
	{
		return $this->connector->call("Recognition", "getModelChannel", get_defined_vars());
	}


	/**
	 * @return array<int>
	 */
	public function getModelChannelPairsIdActive(): array
	{
		return $this->connector->call("Recognition", "getModelChannelPairsIdActive", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getModelChannelPairsIdChannel(): array
	{
		return $this->connector->call("Recognition", "getModelChannelPairsIdChannel", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getModelPairs(): array
	{
		return $this->connector->call("Recognition", "getModelPairs", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\RecognitionModelEntity>
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 */
	public function getRecognitionSettings(): array
	{
		return $this->connector->call("Recognition", "getRecognitionSettings", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\RecognitionModelEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function modelSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Recognition", "modelSelection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\EpgEventSegmentEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function programSegmentSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Recognition", "programSegmentSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 */
	public function removeModelChannel(int $recognitionModelsChannelsId): void
	{
		$this->connector->call("Recognition", "removeModelChannel", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 * @throws Exceptions\Mw\RecognitionUnknownProgramSegmentException
	 */
	public function removeProgramSegment(
		int $recognitionModelsChannelsId,
		\DateTimeImmutable $start,
		\DateTimeImmutable $end,
	): void
	{
		$this->connector->call("Recognition", "removeProgramSegment", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 */
	public function updateModel(?int $recognitionModelsId, InputEntities\Mw\RecognitionModelEntity $data): int
	{
		return $this->connector->call("Recognition", "updateModel", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 */
	public function updateModelChannel(
		?int $recognitionModelsChannelsId,
		InputEntities\Mw\RecognitionModelChannelEntity $data,
	): int
	{
		return $this->connector->call("Recognition", "updateModelChannel", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\RecognitionProgramSegmentDuplictyException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 * @throws Exceptions\Mw\RecognitionUnknownProgramSegmentException
	 */
	public function updateProgramSegment(
		int $recognitionModelsChannelsId,
		\DateTimeImmutable $start,
		\DateTimeImmutable $end,
		\DateTimeImmutable $newEnd,
	): void
	{
		$this->connector->call("Recognition", "updateProgramSegment", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\DetectorUnknownException
	 * @throws Exceptions\Mw\RecognitionApiException
	 * @throws Exceptions\Mw\RecognitionUnknownFollowedAdvertSegmentException
	 * @throws Exceptions\Mw\RecognitionUnknownModelChannelException
	 * @throws Exceptions\Mw\RecognitionUnknownModelException
	 */
	public function updateRecogitionSavedTemplate(
		int $recognitionSavedTemplatesId,
		InputEntities\Mw\RecognitionSavedTemplateEntity $data,
	): void
	{
		$this->connector->call("Recognition", "updateRecogitionSavedTemplate", get_defined_vars());
	}
}

class Recording
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\ChannelUnathorizedException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 * @throws Exceptions\Mw\RecordingExceededLengthException
	 * @throws Exceptions\Mw\RecordingUnknownException
	 */
	public function addRecording(
		int $profilesId,
		InputEntities\Mw\CustomerDeviceEntity $device,
		int $epgEventsId,
	): Entities\Mw\RecommendationCardRecordingEntity
	{
		return $this->connector->call("Recording", "addRecording", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ProfileUnknownException
	 * @throws Exceptions\Mw\RecordingUnknownException
	 */
	public function getData(
		int $epgEventsId,
		int $profilesId,
		InputEntities\Mw\CustomerDeviceEntity $device,
	): Entities\Mw\RecommendationCardRecordingEntity
	{
		return $this->connector->call("Recording", "getData", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\RecommendationCardRecordingEntity>
	 * @throws Exceptions\Mw\CustomerUnknownException
	 */
	public function getRecordingsByCustomer(int $customersId): array
	{
		return $this->connector->call("Recording", "getRecordingsByCustomer", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\RecommendationRowEntity>
	 * @throws Exceptions\Mw\ProfileUnknownException
	 */
	public function getRecordingsByProfile(
		int $profilesId,
		?InputEntities\Mw\CustomerDeviceEntity $device = null,
		string $language = 'en',
	): array
	{
		return $this->connector->call("Recording", "getRecordingsByProfile", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\EpgUnknownEpgEventException
	 * @throws Exceptions\Mw\ProfileUnknownException
	 * @throws Exceptions\Mw\RecordingUnknownException
	 */
	public function removeRecording(int $profilesId, int $epgEventsId, bool $expired = false): void
	{
		$this->connector->call("Recording", "removeRecording", get_defined_vars());
	}
}

class Report
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\ReportUnknownReportException
	 * @param array<int[]> $ids
	 */
	public function exportReports(array $ids): string
	{
		return $this->connector->call("Report", "exportReports", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ReportUnknownReportException
	 */
	public function getData(int $reportsId): Entities\Mw\ReportEntity
	{
		return $this->connector->call("Report", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Report", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Mw\ReportQueryErrorException
	 * @throws Exceptions\Mw\ReportUnknownReportException
	 * @throws Exceptions\Mw\TemplateErrorFillingException
	 */
	public function importReports(string $neon): array
	{
		return $this->connector->call("Report", "importReports", get_defined_vars());
	}


	/**
	 * @return array{rows: array, row_count: int}
	 * @throws Exceptions\Mw\ReportQueryErrorException
	 * @throws Exceptions\Mw\ReportUnknownReportException
	 * @throws Exceptions\Mw\TemplateErrorFillingException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function reportSelection(
		int $reportsId,
		?array $where = null,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Report", "reportSelection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\ReportEntity[], row_count: int}
	 * @throws Exceptions\Mw\ReportUnknownReportException
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Report", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ReportQueryErrorException
	 * @throws Exceptions\Mw\ReportUnknownReportException
	 * @throws Exceptions\Mw\TemplateErrorFillingException
	 */
	public function update(?int $reportsId, InputEntities\Mw\ReportEntity $data): int
	{
		return $this->connector->call("Report", "update", get_defined_vars());
	}
}

class ReportSchedule
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\ReportScheduleUnknownException
	 */
	public function buildQuery(int $reportSchedulesId, array $query = []): string
	{
		return $this->connector->call("ReportSchedule", "buildQuery", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ReportScheduleUnknownException
	 */
	public function createBackgroundJobForRunSchedule(int $reportSchedulesId): void
	{
		$this->connector->call("ReportSchedule", "createBackgroundJobForRunSchedule", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ReportScheduleUnknownException
	 */
	public function delete(int $reportSchedulesId): void
	{
		$this->connector->call("ReportSchedule", "delete", get_defined_vars());
	}


	/**
	 * @return array{filename: string, content: string}
	 * @throws Exceptions\Mw\ReportScheduleAttachementUnknownException
	 */
	public function downloadReport(int $reportSchedulesAttachementsId): array
	{
		return $this->connector->call("ReportSchedule", "downloadReport", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getDashboardPairs(): array
	{
		return $this->connector->call("ReportSchedule", "getDashboardPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\ReportScheduleUnknownException
	 */
	public function getData(int $reportSchedulesId): Entities\Mw\ReportScheduleEntity
	{
		return $this->connector->call("ReportSchedule", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("ReportSchedule", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\ReportScheduleAttachementEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function historySelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("ReportSchedule", "historySelection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\ReportScheduleEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("ReportSchedule", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\ReportScheduleUnknownException
	 */
	public function update(?int $reportSchedulesId, InputEntities\Mw\ReportScheduleEntity $data): int
	{
		return $this->connector->call("ReportSchedule", "update", get_defined_vars());
	}
}

class Right
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array<Entities\Mw\RightsRoleEntity>
	 */
	public function getAllRightsRoles(bool $returnAll = false): array
	{
		return $this->connector->call("Right", "getAllRightsRoles", get_defined_vars());
	}


	/**
	 * @return array<int,string[]>
	 */
	public function getPermissions(): array
	{
		return $this->connector->call("Right", "getPermissions", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @param array<InputEntities\Mw\RightEntity> $data
	 */
	public function update(array $data): void
	{
		$this->connector->call("Right", "update", get_defined_vars());
	}
}

class Subscription
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\PackageUnknownException
	 */
	public function cancelPackage(int $customersId, int $packagesId): void
	{
		$this->connector->call("Subscription", "cancelPackage", get_defined_vars());
	}


	public function getHomepage(Entities\Mw\ProfileEntity $profile): ?Entities\Mw\HomepageEntity
	{
		return $this->connector->call("Subscription", "getHomepage", get_defined_vars());
	}


	/**
	 * @return array{packages_id: int, packages_name: string, packages_recording_length: int, packages_device_count: int}[]
	 * @param array<int[]> $packages
	 */
	public function getPackagesBySubscribedPackage(array $packages): array
	{
		return $this->connector->call("Subscription", "getPackagesBySubscribedPackage", get_defined_vars());
	}


	/**
	 * @return array{packages_id: int, packages_name: string, packages_recording_length: int, packages_device_count: int, subscriptions_from: \DateTimeImmutable}[]
	 */
	public function getPackageSubscriptions(int $customersId, ?Enums\Mw\DeviceEnum $devicesType = null): array
	{
		return $this->connector->call("Subscription", "getPackageSubscriptions", get_defined_vars());
	}


	/**
	 * @return array<\DateTimeImmutable>
	 * @throws Exceptions\Mw\CustomerUnknownException
	 */
	public function getTvods(int $customersId): array
	{
		return $this->connector->call("Subscription", "getTvods", get_defined_vars());
	}


	public function hasSimilarEventsVods(Entities\Mw\ProfileEntity $profile): bool
	{
		return $this->connector->call("Subscription", "hasSimilarEventsVods", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\PackageNotActiveException
	 * @throws Exceptions\Mw\PackageUnknownException
	 */
	public function subscribePackage(int $customersId, int $packagesId): void
	{
		$this->connector->call("Subscription", "subscribePackage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\VodUnknownException
	 */
	public function subscribeTvod(int $customersId, int $vodsId, int $seconds): void
	{
		$this->connector->call("Subscription", "subscribeTvod", get_defined_vars());
	}
}

class Template
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\TemplateDuplicateNameException
	 * @throws Exceptions\Mw\TemplateErrorFillingException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @throws Exceptions\Mw\TemplateUsedException
	 */
	public function copyTemplate(int $templatesId, string $name): int
	{
		return $this->connector->call("Template", "copyTemplate", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @throws Exceptions\Mw\TemplateUsedException
	 */
	public function deleteTemplate(int $templatesId): void
	{
		$this->connector->call("Template", "deleteTemplate", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TemplateUnknownException
	 */
	public function getData(int $templatesId, string $language = 'en'): Entities\Mw\TemplateEntity
	{
		return $this->connector->call("Template", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(?Enums\Mw\TemplateTypeEnum $type = null, ?bool $active = true): array
	{
		return $this->connector->call("Template", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\TemplateEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
		string $language = 'en',
	): array
	{
		return $this->connector->call("Template", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TemplateDuplicateNameException
	 * @throws Exceptions\Mw\TemplateErrorFillingException
	 * @throws Exceptions\Mw\TemplateUnknownException
	 * @throws Exceptions\Mw\TemplateUsedException
	 */
	public function update(?int $templatesId, InputEntities\Mw\TemplateEntity $data): int
	{
		return $this->connector->call("Template", "update", get_defined_vars());
	}
}

class Transcoder
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\PublicMulticastUnknownException
	 */
	public function deletePublicMulticast(int $publicMulticastId): void
	{
		$this->connector->call("Transcoder", "deletePublicMulticast", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderUnknownStreamRecordingException
	 */
	public function deleteStreamRecording(int $streamRecordingsId): void
	{
		$this->connector->call("Transcoder", "deleteStreamRecording", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderNotDownloadableStreamRecordingException
	 * @throws Exceptions\Mw\TranscoderUnknownStreamRecordingException
	 */
	public function downloadStreamRecording(int $streamRecordingsId): string
	{
		return $this->connector->call("Transcoder", "downloadStreamRecording", get_defined_vars());
	}


	public function ffprobe(string $path): string
	{
		return $this->connector->call("Transcoder", "ffprobe", get_defined_vars());
	}


	/**
	 * @return array<Entities\Mw\TranscoderEntity>
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 */
	public function getAllTranscodersUsage(): array
	{
		return $this->connector->call("Transcoder", "getAllTranscodersUsage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 */
	public function getData(int $transcodersId): Entities\Mw\TranscoderEntity
	{
		return $this->connector->call("Transcoder", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 */
	public function getDataByName(string $transcodersName): Entities\Mw\TranscoderEntity
	{
		return $this->connector->call("Transcoder", "getDataByName", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Transcoder", "getPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\PublicMulticastUnknownException
	 */
	public function getPublicMulticast(int $publicMulticastId): Entities\Mw\PublicMulticastEntity
	{
		return $this->connector->call("Transcoder", "getPublicMulticast", get_defined_vars());
	}


	/**
	 * @return array{description: string, pid: int, stderr_logfile: string, stop: int, logfile: string, exitstatus: int, spawnerr: string, now: int, group: string, name: string, statename: string, start: int, state: int, stdout_logfile: string}[]
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 */
	public function getSupervisorProcesses(): array
	{
		return $this->connector->call("Transcoder", "getSupervisorProcesses", get_defined_vars());
	}


	/**
	 * @return array<string,array<string,string>>
	 */
	public function getSystemTranscodingOptions(?int $transcodersId = null, ?int $transcodingGpu = null): array
	{
		return $this->connector->call("Transcoder", "getSystemTranscodingOptions", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 */
	public function newStreamRecording(InputEntities\Mw\StreamRecordingEntity $data): int
	{
		return $this->connector->call("Transcoder", "newStreamRecording", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\PublicMulticastEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function publicMulticastSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Transcoder", "publicMulticastSelection", get_defined_vars());
	}


	public function restartChannel(int $channelsUnicastId): void
	{
		$this->connector->call("Transcoder", "restartChannel", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 */
	public function restartChannelUnicastTranscoder(string $transcoder, int $channelsUnicastId): void
	{
		$this->connector->call("Transcoder", "restartChannelUnicastTranscoder", get_defined_vars());
	}


	/**
	 * @return array{time: string, nvidia: array{gpu: string, memory: string, encoder: string, decoder: string}[], cpu: string, ram: string, cpu_load: string, transcoding: array{unicast_channels: int, gpu_decoders: int, gpu_encoders: int, gpu_encoders_h264: int, gpu_encoders_hevc: int, cpu_decoders: int, deinterlacing: int, live_bandwidth: int, recording_bandwidth: int}}
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 */
	public function saveSystemUsage(): array
	{
		return $this->connector->call("Transcoder", "saveSystemUsage", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\TranscoderEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Transcoder", "selection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\StreamRecordingEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function streamRecordingsSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Transcoder", "streamRecordingsSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 */
	public function supervisorProcessCommand(string $group, string $process, string $command): void
	{
		$this->connector->call("Transcoder", "supervisorProcessCommand", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\Mw\SystemSupervisorErrorException
	 * @throws Exceptions\Mw\SystemSupervisorUnknownProcessException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 */
	public function supervisorShowLog(string $group, string $process, string $type): array
	{
		return $this->connector->call("Transcoder", "supervisorShowLog", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderDuplicateNameException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 */
	public function update(?int $transcodersId, InputEntities\Mw\TranscoderEntity $data): int
	{
		return $this->connector->call("Transcoder", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\PublicMulticastUnknownException
	 */
	public function updatePublicMulticast(?int $publicMulticastId, InputEntities\Mw\PublicMulticastEntity $data): int
	{
		return $this->connector->call("Transcoder", "updatePublicMulticast", get_defined_vars());
	}
}

class Translator
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\LanguageUnknownException
	 */
	public function exportTranslations(Enums\Mw\TranslationsFormatEnum $format, ?string $language = null): string
	{
		return $this->connector->call("Translator", "exportTranslations", get_defined_vars());
	}


	/**
	 * @return array<string|null>
	 * @throws Exceptions\Mw\LanguageUnknownException
	 */
	public function exportTranslationsAsSimpleObject(string $language): array
	{
		return $this->connector->call("Translator", "exportTranslationsAsSimpleObject", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getEnabledLanguages(): array
	{
		return $this->connector->call("Translator", "getEnabledLanguages", get_defined_vars());
	}


	public function getEntityWord(string $entity, int $entityId): ?Entities\Mw\WordEntity
	{
		return $this->connector->call("Translator", "getEntityWord", get_defined_vars());
	}


	public function getLanguageByCode(string $code): string
	{
		return $this->connector->call("Translator", "getLanguageByCode", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getLanguagePairs(): array
	{
		return $this->connector->call("Translator", "getLanguagePairs", get_defined_vars());
	}


	/**
	 * @return array{words_id: int, words_text: string, translations_text: ?string, words_note: string}[]
	 * @throws Exceptions\Mw\LanguageUnknownException
	 */
	public function getTranslations(string $language): array
	{
		return $this->connector->call("Translator", "getTranslations", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\WordUnknownException
	 */
	public function getWord(?int $wordsId = null, ?string $wordsText = null): Entities\Mw\WordEntity
	{
		return $this->connector->call("Translator", "getWord", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getWordPairs(): array
	{
		return $this->connector->call("Translator", "getWordPairs", get_defined_vars());
	}


	/**
	 * @param array<string[]> $languages
	 */
	public function saveLanguages(array $languages): void
	{
		$this->connector->call("Translator", "saveLanguages", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\WordUnknownException
	 */
	public function translate(
		?int $wordsId,
		?string $wordsText,
		string $language,
		string $fallbackLanguage = 'en',
	): string
	{
		return $this->connector->call("Translator", "translate", get_defined_vars());
	}


	public function translateEntity(string $entity, int $entityId, string $language, string $fallbackText): string
	{
		return $this->connector->call("Translator", "translateEntity", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\LanguageUnknownException
	 * @param array<InputEntities\Mw\TranslationEntity> $translations
	 */
	public function updateTranslations(string $language, array $translations): void
	{
		$this->connector->call("Translator", "updateTranslations", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\LanguageUnknownException
	 * @throws Exceptions\Mw\WordDuplicateException
	 * @throws Exceptions\Mw\WordUnknownException
	 * @param array<string[]> $translations
	 */
	public function updateWord(
		?int $wordsId,
		InputEntities\Mw\WordEntity $data,
		?array $translations = null,
		bool $updateTranslatorTimestamp = true,
		?string $entity = null,
		?int $entityId = null,
	): int
	{
		return $this->connector->call("Translator", "updateWord", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\WordEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\WordUnknownException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function wordSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Translator", "wordSelection", get_defined_vars());
	}
}

class User
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\ApiSupport\LoginInactiveRoleException
	 * @throws Exceptions\ApiSupport\LoginInactiveUserException
	 * @throws Exceptions\ApiSupport\LoginIncorrectHeaderFormatException
	 * @throws Exceptions\ApiSupport\LoginIncorrectUsernamePasswordException
	 * @throws Exceptions\ApiSupport\LoginTokenExpiredException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 */
	public function checkLogin(string $header): Entities\ApiSupport\UserEntity
	{
		return $this->connector->call("User", "checkLogin", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function getData(int $usersId): Entities\ApiSupport\UserEntity
	{
		return $this->connector->call("User", "getData", get_defined_vars());
	}


	/**
	 * @return array<string|null>
	 */
	public function getImagePairs(): array
	{
		return $this->connector->call("User", "getImagePairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("User", "getPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\GeneralException
	 * @throws Exceptions\ApiSupport\LoginInactiveRoleException
	 * @throws Exceptions\ApiSupport\LoginInactiveUserException
	 * @throws Exceptions\ApiSupport\LoginIncorrectUsernamePasswordException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 */
	public function login(string $email, string $password): Entities\ApiSupport\UserEntity
	{
		return $this->connector->call("User", "login", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 */
	public function resetOtp(int $usersId): void
	{
		$this->connector->call("User", "resetOtp", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\ApiSupport\UserEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("User", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\ApiSupport\UserDuplicateEmailException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 * @throws Exceptions\ApiSupport\InvalidLoginAndPasswordException
	 */
	public function update(?int $usersId, InputEntities\ApiSupport\UserEntity $data): int
	{
		return $this->connector->call("User", "update", get_defined_vars());
	}
}

class Vendor
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array{rows: Entities\Mw\VendorAvatarEntity[], row_count: int}
	 * @throws Exceptions\Mw\VendorUnknownAvatarException
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function avatarSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Vendor", "avatarSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VendorUnknownAvatarException
	 */
	public function deleteAvatar(int $vendorsAvatarsId): void
	{
		$this->connector->call("Vendor", "deleteAvatar", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getAvailablePairs(): array
	{
		return $this->connector->call("Vendor", "getAvailablePairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VendorUnknownAvatarException
	 */
	public function getAvatar(int $vendorsAvatarsId): Entities\Mw\VendorAvatarEntity
	{
		return $this->connector->call("Vendor", "getAvatar", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VendorUnknownException
	 */
	public function getData(int $vendorsId): Entities\Mw\VendorEntity
	{
		return $this->connector->call("Vendor", "getData", get_defined_vars());
	}


	public function getDistributedLicensesCount(): int
	{
		return $this->connector->call("Vendor", "getDistributedLicensesCount", get_defined_vars());
	}


	/**
	 * @return array{vendors_name: string, license_count: int, license_infite: int, license_limitation: int}[]
	 */
	public function getLicenseStatistics(): array
	{
		return $this->connector->call("Vendor", "getLicenseStatistics", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Vendor", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPortalUrls(): array
	{
		return $this->connector->call("Vendor", "getPortalUrls", get_defined_vars());
	}


	/**
	 * @return array<int,string[]>
	 */
	public function getPortalUrlsByVendor(): array
	{
		return $this->connector->call("Vendor", "getPortalUrlsByVendor", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VendorUnknownException
	 */
	public function getPublicData(int $vendorsId): Entities\Mw\VendorPublicEntity
	{
		return $this->connector->call("Vendor", "getPublicData", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Mw\VendorUnknownException
	 */
	public function getVendorChannelsOrdering(int $vendorsId): array
	{
		return $this->connector->call("Vendor", "getVendorChannelsOrdering", get_defined_vars());
	}


	/**
	 * @return array<Enums\Mw\ChannelBroadcastTypeEnum>
	 * @throws Exceptions\Mw\VendorUnknownException
	 */
	public function getVendorDvbNetworks(int $vendorsId): array
	{
		return $this->connector->call("Vendor", "getVendorDvbNetworks", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\VendorEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\VendorUnknownException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Vendor", "selection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\VendorChannelOrderEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selectionVendorChannelsOrdering(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Vendor", "selectionVendorChannelsOrdering", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VendorLicensesExceededException
	 * @throws Exceptions\Mw\VendorUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function update(?int $vendorsId, InputEntities\Mw\VendorEntity $data): int
	{
		return $this->connector->call("Vendor", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VendorUnknownAvatarException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateAvatar(?int $vendorsAvatarsId, InputEntities\Mw\VendorAvatarEntity $data): int
	{
		return $this->connector->call("Vendor", "updateAvatar", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VendorUnknownException
	 * @throws Exceptions\Mw\ChannelUnknownException
	 */
	public function updateVendorChannelsOrder(int $vendorsId, int $channelsId, ?int $order): void
	{
		$this->connector->call("Vendor", "updateVendorChannelsOrder", get_defined_vars());
	}
}

class VendorApp
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\VendorUnknownException
	 */
	public function changeSectionStatus(
		int $vendorsId,
		Enums\Mw\VendorAppSectionEnum $section,
		Enums\Mw\VendorAppSectionStatusEnum $newStatus,
		bool $saveLog = true,
	): void
	{
		$this->connector->call("VendorApp", "changeSectionStatus", get_defined_vars());
	}


	public function getData(int $vendorsId, Enums\Mw\VendorAppSectionEnum $section): ?Entities\Mw\VendorAppParentEntity
	{
		return $this->connector->call("VendorApp", "getData", get_defined_vars());
	}


	public function getLastRevision(int $vendorsId): ?int
	{
		return $this->connector->call("VendorApp", "getLastRevision", get_defined_vars());
	}


	public function removeSection(int $vendorsId, Enums\Mw\VendorAppSectionEnum $section): void
	{
		$this->connector->call("VendorApp", "removeSection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\VendorAppStatusLogEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("VendorApp", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VendorUnknownException
	 */
	public function sendRequestsForApps(int $vendorsId): void
	{
		$this->connector->call("VendorApp", "sendRequestsForApps", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\CustomerIncorrectLoginPasswordException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateSectionAndroid(int $vendorsId, InputEntities\Mw\VendorAppAndroidEntity $data): int
	{
		return $this->connector->call("VendorApp", "updateSectionAndroid", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\CustomerIncorrectLoginPasswordException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateSectionAndroidTV(int $vendorsId, InputEntities\Mw\VendorAppAndroidTVEntity $data): int
	{
		return $this->connector->call("VendorApp", "updateSectionAndroidTV", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\CustomerIncorrectLoginPasswordException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateSectionGeneral(int $vendorsId, InputEntities\Mw\VendorAppGeneralEntity $data): int
	{
		return $this->connector->call("VendorApp", "updateSectionGeneral", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\CustomerIncorrectLoginPasswordException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateSectionIOS(int $vendorsId, InputEntities\Mw\VendorAppIOSEntity $data): int
	{
		return $this->connector->call("VendorApp", "updateSectionIOS", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\CustomerIncorrectLoginPasswordException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateSectionRoku(int $vendorsId, InputEntities\Mw\VendorAppRokuEntity $data): int
	{
		return $this->connector->call("VendorApp", "updateSectionRoku", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\CustomerIncorrectLoginPasswordException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateSectionSamsungLg(int $vendorsId, InputEntities\Mw\VendorAppSamsungLgEntity $data): int
	{
		return $this->connector->call("VendorApp", "updateSectionSamsungLg", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\InvalidParameterValueException
	 * @throws Exceptions\Mw\CustomerIncorrectLoginPasswordException
	 * @throws Exceptions\Mw\CustomerUnknownException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 */
	public function updateSectionTVOS(int $vendorsId, InputEntities\Mw\VendorAppTVOSEntity $data): int
	{
		return $this->connector->call("VendorApp", "updateSectionTVOS", get_defined_vars());
	}
}

class Vod
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Mw\SystemCommandFailedException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Mw\UnknownErrorException
	 * @throws Exceptions\Mw\VodAudioInvalidRoleException
	 * @throws Exceptions\Mw\VodCannotChangeTransoderException
	 * @throws Exceptions\Mw\VodFileErrorException
	 * @throws Exceptions\Mw\VodSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\VodSubtitleVttException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 * @throws Exceptions\Mw\StorageUnknownException
	 * @throws Exceptions\Mw\VodMinimumAgeRestrictionException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 * @throws Exceptions\Mw\ExternalVodCannotBeLockedVodException
	 * @throws Exceptions\Mw\VodGroupUnknownException
	 */
	public function copyVod(int $vodsId): int
	{
		return $this->connector->call("Vod", "copyVod", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VodUnknownException
	 */
	public function delete(int $vodsId): void
	{
		$this->connector->call("Vod", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VodUnknownException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 */
	public function deleteMetadata(int $vodsId): void
	{
		$this->connector->call("Vod", "deleteMetadata", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 */
	public function downloadSubtitles(int $vodsId, string $subtitles): string
	{
		return $this->connector->call("Vod", "downloadSubtitles", get_defined_vars());
	}


	/**
	 * @return array{raw: string, duration: string, bitrate: string, streams: array<string,array{mapping: string, language: string, type: string, data: string}[]>}
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 */
	public function ffprobe(int $vodsId): array
	{
		return $this->connector->call("Vod", "ffprobe", get_defined_vars());
	}


	/**
	 * @return array<int>
	 */
	public function getAvailableVodsIds(
		int $profilesId,
		InputEntities\Mw\CustomerDeviceEntity $device,
		bool $whitelisting,
	): array
	{
		return $this->connector->call("Vod", "getAvailableVodsIds", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 */
	public function getData(
		int $vodsId,
		?int $profilesId = null,
		?InputEntities\Mw\CustomerDeviceEntity $device = null,
		bool $useCache = true,
	): Entities\Mw\VodEntity
	{
		return $this->connector->call("Vod", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 */
	public function getDataV2(
		int $vodsId,
		?int $profilesId = null,
		?InputEntities\Mw\CustomerDeviceEntity $device = null,
	): Entities\Mw\RecommendationCardEntity
	{
		return $this->connector->call("Vod", "getDataV2", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(?bool $external = null): array
	{
		return $this->connector->call("Vod", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairsWithIds(): array
	{
		return $this->connector->call("Vod", "getPairsWithIds", get_defined_vars());
	}


	/**
	 * @return array<int>
	 */
	public function getPurchasableTvods(): array
	{
		return $this->connector->call("Vod", "getPurchasableTvods", get_defined_vars());
	}


	/**
	 * @return array<int>
	 */
	public function getTrailerEdgesStorages(int $transcodersId): array
	{
		return $this->connector->call("Vod", "getTrailerEdgesStorages", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 * @throws Exceptions\Mw\StorageUnknownException
	 */
	public function getUploadToken(int $vodsId, bool $isTrailer = false): Entities\Mw\VodUploadTokenEntity
	{
		return $this->connector->call("Vod", "getUploadToken", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 */
	public function getVodLogData(int $vodsId): array
	{
		return $this->connector->call("Vod", "getVodLogData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\SystemCommandFailedException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Mw\UnknownErrorException
	 * @throws Exceptions\Mw\VodAudioInvalidRoleException
	 * @throws Exceptions\Mw\VodCannotChangeTransoderException
	 * @throws Exceptions\Mw\VodFileErrorException
	 * @throws Exceptions\Mw\VodSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\VodSubtitleVttException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 * @throws Exceptions\Mw\StorageUnknownException
	 * @throws Exceptions\Mw\VodMinimumAgeRestrictionException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 * @throws Exceptions\Mw\ExternalVodCannotBeLockedVodException
	 * @throws Exceptions\Mw\VodGroupUnknownException
	 */
	public function guessVodVideoAudioSubtitle(int $vodsId): void
	{
		$this->connector->call("Vod", "guessVodVideoAudioSubtitle", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\UnknownErrorException
	 * @throws Exceptions\Mw\VodYoutubeImportException
	 */
	public function importYoutube(string $youtubeId): int
	{
		return $this->connector->call("Vod", "importYoutube", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Mw\VodEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 * @param array<InputEntities\ApiSupport\WhereEntity> $where
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $pageLimit = null,
	): array
	{
		return $this->connector->call("Vod", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 */
	public function startTrailerTranscoding(int $vodsId): void
	{
		$this->connector->call("Vod", "startTrailerTranscoding", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\VodCannotTranscodeException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 */
	public function transcode(int $vodsId, bool $force = false): void
	{
		$this->connector->call("Vod", "transcode", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Mw\SystemCommandFailedException
	 * @throws Exceptions\Mw\SystemFailedToUploadFileException
	 * @throws Exceptions\Mw\TranscoderUnableToContactException
	 * @throws Exceptions\Mw\TranscoderUnknownException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Mw\UnknownErrorException
	 * @throws Exceptions\Mw\VodAudioInvalidRoleException
	 * @throws Exceptions\Mw\VodCannotChangeTransoderException
	 * @throws Exceptions\Mw\VodFileErrorException
	 * @throws Exceptions\Mw\VodSubtitleInvalidRoleException
	 * @throws Exceptions\Mw\VodSubtitleVttException
	 * @throws Exceptions\Mw\VodUnathorizedException
	 * @throws Exceptions\Mw\VodUnknownException
	 * @throws Exceptions\Mw\StorageUnknownException
	 * @throws Exceptions\Mw\VodMinimumAgeRestrictionException
	 * @throws Exceptions\Mw\ImageInvalidBase64Exception
	 * @throws Exceptions\Mw\ExternalVodCannotBeLockedVodException
	 * @throws Exceptions\Mw\VodGroupUnknownException
	 */
	public function update(?int $vodsId, InputEntities\Mw\VodEntity $data): int
	{
		return $this->connector->call("Vod", "update", get_defined_vars());
	}
}
