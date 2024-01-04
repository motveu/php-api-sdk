<?php

/**
 * Generated on Wed, 3 Jan 2024 13:39:31
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms;

class Bouquet
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 */
	public function getData(int $bouquets_id): Entities\Sms\BouquetEntity
	{
		return $this->connector->call("Bouquet", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getNetworkPairs(): array
	{
		return $this->connector->call("Bouquet", "getNetworkPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getNetworkTypes(): array
	{
		return $this->connector->call("Bouquet", "getNetworkTypes", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(?Enums\Sms\DeviceEnum $network = null): array
	{
		return $this->connector->call("Bouquet", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairsByServiceId(?Enums\Sms\DeviceEnum $network = null): array
	{
		return $this->connector->call("Bouquet", "getPairsByServiceId", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairsWithServiceId(?Enums\Sms\DeviceEnum $network = null): array
	{
		return $this->connector->call("Bouquet", "getPairsWithServiceId", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\BouquetEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Bouquet", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 */
	public function update(?int $bouquets_id, InputEntities\Sms\BouquetEntity $data): int
	{
		return $this->connector->call("Bouquet", "update", get_defined_vars());
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
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function getCustomerCategories(
		int $viewers_id,
		?Enums\Sms\DeviceEnum $device_type = null,
		?int $device_id = null,
	): array
	{
		return $this->connector->call("Category", "getCustomerCategories", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CategoryUnknownCategoryException
	 */
	public function getData(int $categories_id): array
	{
		return $this->connector->call("Category", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getEditableCategoriesPairs(): array
	{
		return $this->connector->call("Category", "getEditableCategoriesPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getEditableCategoriesPairsLimitedByDealer(): array
	{
		return $this->connector->call("Category", "getEditableCategoriesPairsLimitedByDealer", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Category", "getPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $columns,
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Category", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CategoryUnknownCategoryException
	 */
	public function update(?int $categories_id, array $data): int
	{
		return $this->connector->call("Category", "update", get_defined_vars());
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


	public function get(string $key)
	{
		return $this->connector->call("Config", "get", get_defined_vars());
	}


	public function getConfig(bool $forceReload = false, bool $includePredefined = true): array
	{
		return $this->connector->call("Config", "getConfig", get_defined_vars());
	}


	public function getDefaultCurrency(): string
	{
		return $this->connector->call("Config", "getDefaultCurrency", get_defined_vars());
	}


	public function getRequiresOtp(): bool
	{
		return $this->connector->call("Config", "getRequiresOtp", get_defined_vars());
	}


	public function isSelfcareAllowed(): bool
	{
		return $this->connector->call("Config", "isSelfcareAllowed", get_defined_vars());
	}


	public function isSmsMotvOnly(): bool
	{
		return $this->connector->call("Config", "isSmsMotvOnly", get_defined_vars());
	}


	public function update(array $data): void
	{
		$this->connector->call("Config", "update", get_defined_vars());
	}
}

class Custom_Cico
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
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
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function addCredit(
		int $viewers_id,
		float $credit,
		string $remark,
		array $data = [],
		bool $log = true,
		?array $forceInvoice = null,
		?string $currenciesCode = null,
	): int
	{
		return $this->connector->call("Customer", "addCredit", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function attachFile(int $viewers_id, string $name, string $content): int
	{
		return $this->connector->call("Customer", "attachFile", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function customerExists(int $viewers_id): bool
	{
		return $this->connector->call("Customer", "customerExists", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function deductCredit(
		int $viewers_id,
		float $credit,
		string $remark,
		array $data,
		?string $currenciesCode = null,
	): int
	{
		return $this->connector->call("Customer", "deductCredit", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function deleteCustomer(int $viewers_id): void
	{
		$this->connector->call("Customer", "deleteCustomer", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function deleteCustomerAddress(int $viewers_address_id): void
	{
		$this->connector->call("Customer", "deleteCustomerAddress", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function deleteCustomerContact(int $viewers_contact_id): void
	{
		$this->connector->call("Customer", "deleteCustomerContact", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownFileException
	 */
	public function deleteCustomerFile(int $files_id): void
	{
		$this->connector->call("Customer", "deleteCustomerFile", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownNoteException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function deleteCustomerNote(int $viewers_note_id): void
	{
		$this->connector->call("Customer", "deleteCustomerNote", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUnknownFileException
	 */
	public function downloadCustomerFile(int $files_id): array
	{
		return $this->connector->call("Customer", "downloadCustomerFile", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerSearchTooManyException
	 * @throws Exceptions\Sms\CustomerWildSearchCriteriaException
	 * @throws Exceptions\Sms\NotLoggedInException
	 */
	public function findCustomerForSales(array $search): array
	{
		return $this->connector->call("Customer", "findCustomerForSales", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getBillingPeriod(int $viewers_id): ?array
	{
		return $this->connector->call("Customer", "getBillingPeriod", get_defined_vars());
	}


	public function getCustomerAddress(int $viewers_address_id): array
	{
		return $this->connector->call("Customer", "getCustomerAddress", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getCustomerAddresses(int $viewers_id): array
	{
		return $this->connector->call("Customer", "getCustomerAddresses", get_defined_vars());
	}


	public function getCustomerConfig(?string $language = null, bool $system = false): array
	{
		return $this->connector->call("Customer", "getCustomerConfig", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getCustomerContacts(int $viewers_id): array
	{
		return $this->connector->call("Customer", "getCustomerContacts", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\DeviceEntity>
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getCustomerDevices(int $viewers_id): array
	{
		return $this->connector->call("Customer", "getCustomerDevices", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getCustomerFiles(int $viewers_id): array
	{
		return $this->connector->call("Customer", "getCustomerFiles", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownNoteException
	 */
	public function getCustomerNote(int $viewers_note_id): array
	{
		return $this->connector->call("Customer", "getCustomerNote", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getData(int $viewers_id): array
	{
		return $this->connector->call("Customer", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getDataV2(int $viewers_id): Entities\Sms\CustomerEntity
	{
		return $this->connector->call("Customer", "getDataV2", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function noteSelection(
		array $columns,
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Customer", "noteSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TransferDeviceErrorException
	 */
	public function transferDevice(string $device_type, int $device_id, array $data): int
	{
		return $this->connector->call("Customer", "transferDevice", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function update(?int $viewers_id, array $data): int
	{
		return $this->connector->call("Customer", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function updateAddress(int $viewers_id, ?int $viewers_address_id, array $data): void
	{
		$this->connector->call("Customer", "updateAddress", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function updateContact(int $viewers_id, ?int $viewers_contact_id, array $data): void
	{
		$this->connector->call("Customer", "updateContact", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerNoteMissingRightException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUnknownNoteException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function updateCustomerNote(?int $viewers_note_id, array $data): int
	{
		return $this->connector->call("Customer", "updateCustomerNote", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function _deleteCustomerContact(int $viewers_contact_id): void
	{
		$this->connector->call("Customer", "_deleteCustomerContact", get_defined_vars());
	}
}

class CustomerRevision
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getCustomerHistory(int $viewers_id): array
	{
		return $this->connector->call("CustomerRevision", "getCustomerHistory", get_defined_vars());
	}
}

class Dealer
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\DealerNotEnoughCreditToAddException
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 */
	public function addCredit(
		int $dealers_id,
		float $credit,
		string $note,
		array $data = [],
		?string $currenciesCode = null,
	): ?int
	{
		return $this->connector->call("Dealer", "addCredit", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DealerNotEnoughCreditToDeductException
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 */
	public function deductCredit(int $dealers_id, float $credit, string $note, ?string $currenciesCode = null): ?int
	{
		return $this->connector->call("Dealer", "deductCredit", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getAllPairs(): array
	{
		return $this->connector->call("Dealer", "getAllPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 */
	public function getData(int $dealers_id): Entities\Sms\DealerEntity
	{
		return $this->connector->call("Dealer", "getData", get_defined_vars());
	}


	/**
	 * @return array<mixed>
	 */
	public function getDataForOrgchart(): array
	{
		return $this->connector->call("Dealer", "getDataForOrgchart", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 */
	public function getDealerImage(int $dealers_id): ?string
	{
		return $this->connector->call("Dealer", "getDealerImage", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(bool $includeSelf = true): array
	{
		return $this->connector->call("Dealer", "getPairs", get_defined_vars());
	}


	public function isUnique(?int $dealers_id, string $dealers_name): bool
	{
		return $this->connector->call("Dealer", "isUnique", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 * @param array<int[]> $data
	 */
	public function saveWhitelistedCategories(int $dealers_id, array $data): void
	{
		$this->connector->call("Dealer", "saveWhitelistedCategories", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 * @param array<int[]> $data
	 */
	public function saveWhitelistedPortals(int $dealers_id, array $data): void
	{
		$this->connector->call("Dealer", "saveWhitelistedPortals", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 * @param array<int[]> $data
	 */
	public function saveWhitelistedProducts(int $dealers_id, array $data): void
	{
		$this->connector->call("Dealer", "saveWhitelistedProducts", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\DealerEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Dealer", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DealerCannotHaveInfiniteCreditException
	 * @throws Exceptions\Sms\DealerCannotViewAnyCardException
	 * @throws Exceptions\Sms\DealerCircularParentException
	 * @throws Exceptions\Sms\DealerNameNotUniqueException
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 */
	public function update(?int $dealers_id, InputEntities\Sms\DealerEntity $data): int
	{
		return $this->connector->call("Dealer", "update", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 */
	public function whitelistedCategories(int $dealers_id): array
	{
		return $this->connector->call("Dealer", "whitelistedCategories", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 */
	public function whitelistedPortals(int $dealers_id): array
	{
		return $this->connector->call("Dealer", "whitelistedPortals", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 */
	public function whitelistedProducts(int $dealers_id): array
	{
		return $this->connector->call("Dealer", "whitelistedProducts", get_defined_vars());
	}
}

class Devices_Facebook
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\DeviceFacebookUnknownException
	 */
	public function getData(int $device_id): Entities\Sms\DeviceFacebookEntity
	{
		return $this->connector->call("Devices.Facebook", "getData", get_defined_vars());
	}


	/**
	 * @return array<mixed>
	 * @throws Exceptions\Sms\FacebookUnknownLoginException
	 */
	public function login(array $data): array
	{
		return $this->connector->call("Devices.Facebook", "login", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\FacebookUnknownLoginException
	 * @throws Exceptions\Sms\FacebookUnknownResponseException
	 */
	public function register(int $motvPortalsId, string $token)
	{
		return $this->connector->call("Devices.Facebook", "register", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\DeviceFacebookUnknownException
	 */
	public function update(int $viewers_id, ?int $device_id, InputEntities\Sms\DeviceFacebookEntity $data): int
	{
		return $this->connector->call("Devices.Facebook", "update", get_defined_vars());
	}
}

class Devices_Google
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\DeviceGoogleUnknownException
	 */
	public function getData(int $device_id): Entities\Sms\DeviceGoogleEntity
	{
		return $this->connector->call("Devices.Google", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\GoogleUnknownLoginException
	 */
	public function login(array $payload)
	{
		return $this->connector->call("Devices.Google", "login", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\GoogleUnknownLoginException
	 * @throws Exceptions\Sms\GoogleUnknownTokenException
	 */
	public function register(int $motvPortalsId, string $clientId, string $token)
	{
		return $this->connector->call("Devices.Google", "register", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\DeviceGoogleUnknownException
	 */
	public function update(?int $viewers_id, ?int $device_id, InputEntities\Sms\DeviceGoogleEntity $data): int
	{
		return $this->connector->call("Devices.Google", "update", get_defined_vars());
	}
}

class Devices_Motv
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\MotvAccountDuplicateLoginException
	 * @throws Exceptions\Sms\MotvInvalidPasswordFormatException
	 * @throws Exceptions\Sms\MotvInvalidPinFormatException
	 * @throws Exceptions\Sms\MotvUnknownDeviceException
	 * @throws Exceptions\Sms\MotvUnknownErrorException
	 * @throws Exceptions\Sms\MotvUnknownLostPasswordTokenException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\ApiSupport\DatabaseErrorTryAgainException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\MotvValidationErrorException
	 */
	public function apiChangePassword(
		string $password,
		?string $token = null,
		?string $login = null,
		?string $code = null,
	): void
	{
		$this->connector->call("Devices.Motv", "apiChangePassword", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\MotvAccountDuplicateLoginException
	 * @throws Exceptions\Sms\MotvInvalidPasswordFormatException
	 * @throws Exceptions\Sms\MotvInvalidPinFormatException
	 * @throws Exceptions\Sms\MotvUnknownDeviceException
	 * @throws Exceptions\Sms\MotvUnknownErrorException
	 * @throws Exceptions\Sms\MotvUnknownLostPasswordTokenException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\ApiSupport\DatabaseErrorTryAgainException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\MotvValidationErrorException
	 */
	public function apiChangePin($pin, ?string $token = null, ?string $login = null, $code = null): array
	{
		return $this->connector->call("Devices.Motv", "apiChangePin", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\MotvUnknownRegistrationTokenException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function apiConfirmRegistration(?string $token = null, $code = null, bool $social = false): void
	{
		$this->connector->call("Devices.Motv", "apiConfirmRegistration", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function apiDelete(string $customers_token, int $profiles_id): void
	{
		$this->connector->call("Devices.Motv", "apiDelete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\MotvAccountDuplicateLoginException
	 * @throws Exceptions\Sms\MotvInvalidPasswordFormatException
	 * @throws Exceptions\Sms\MotvInvalidPinFormatException
	 * @throws Exceptions\Sms\MotvUnknownDeviceException
	 * @throws Exceptions\Sms\MotvUnknownErrorException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\ApiSupport\DatabaseErrorTryAgainException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\MotvValidationErrorException
	 */
	public function apiForceChangePassword(string $customers_token, string $password): void
	{
		$this->connector->call("Devices.Motv", "apiForceChangePassword", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function apiGetCustomer(string $customers_token, int $profiles_id): array
	{
		return $this->connector->call("Devices.Motv", "apiGetCustomer", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\SubscriptionEntity>
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function apiGetCustomerSubscriptionInfo(string $customers_token, int $profiles_id): array
	{
		return $this->connector->call("Devices.Motv", "apiGetCustomerSubscriptionInfo", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\MotvDuplicateUserPortalAccessException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function apiGetDataByLogin(string $login): Entities\Sms\SmsMotvCombinedEntity
	{
		return $this->connector->call("Devices.Motv", "apiGetDataByLogin", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\MotvDuplicateUserPortalAccessException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function apiLogin(string $login, string $password): Entities\Sms\SmsMotvCombinedEntity
	{
		return $this->connector->call("Devices.Motv", "apiLogin", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 */
	public function apiLoginV2(string $login, string $password, int $vendors_id): Entities\Sms\SmsMotvCombinedEntity
	{
		return $this->connector->call("Devices.Motv", "apiLoginV2", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\MotvAccountDuplicateLoginException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\MotvUnknownRegistrationTokenException
	 * @throws Exceptions\Sms\MotvValidationErrorException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 * @throws Exceptions\Sms\UnknownErrorException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function apiLoginWithDevice(
		int $vendors_id,
		string $devices_hash,
		array $customerData = [],
	): Entities\Sms\SmsMotvCombinedEntity
	{
		return $this->connector->call("Devices.Motv", "apiLoginWithDevice", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function apiLoginWithMac(int $vendors_id, string $mac_address): Entities\Sms\SmsMotvCombinedEntity
	{
		return $this->connector->call("Devices.Motv", "apiLoginWithMac", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function apiLoginWithToken(string $token): Entities\Sms\SmsMotvCombinedEntity
	{
		return $this->connector->call("Devices.Motv", "apiLoginWithToken", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\MotvAccountDuplicateLoginException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\MotvUnknownRegistrationTokenException
	 * @throws Exceptions\Sms\MotvValidationErrorException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\NotLoggedInException
	 */
	public function apiRegister(int $portalId, array $data, bool $social = false): int
	{
		return $this->connector->call("Devices.Motv", "apiRegister", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\MotvAccountDuplicateLoginException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\MotvUnknownRegistrationTokenException
	 * @throws Exceptions\Sms\MotvValidationErrorException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\ApiSupport\MissingParameterException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\NotLoggedInException
	 */
	public function apiRegisterV2(string $language, int $portalId, array $data, bool $social = false): int
	{
		return $this->connector->call("Devices.Motv", "apiRegisterV2", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\MotvUnknownLoginException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 */
	public function apiRequestNewPassword(string $login, ?int $vendors_id = null): void
	{
		$this->connector->call("Devices.Motv", "apiRequestNewPassword", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\MotvUnknownLoginException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 */
	public function apiRequestNewPin(string $login, ?int $vendors_id = null): void
	{
		$this->connector->call("Devices.Motv", "apiRequestNewPin", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function apiUpdateCustomer(string $customers_token, int $profiles_id, array $data): int
	{
		return $this->connector->call("Devices.Motv", "apiUpdateCustomer", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\ApiSupport\MissingParameterException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function apiUpdateCustomerV2(string $language, string $customers_token, array $data): int
	{
		return $this->connector->call("Devices.Motv", "apiUpdateCustomerV2", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\MotvUnknownDeviceException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function delete(int $device_id): void
	{
		$this->connector->call("Devices.Motv", "delete", get_defined_vars());
	}


	public function finishSocialRegistration(
		?int $device_motv_id = null,
		?string $customers_token = null,
		?int $profiles_id = null,
	): void
	{
		$this->connector->call("Devices.Motv", "finishSocialRegistration", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getCustomerSubscriptionInfo(string $customers_token): array
	{
		return $this->connector->call("Devices.Motv", "getCustomerSubscriptionInfo", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvUnknownDeviceException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function getData(int $device_id): Entities\Sms\DeviceMotvEntity
	{
		return $this->connector->call("Devices.Motv", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getEnabledLanguages(): array
	{
		return $this->connector->call("Devices.Motv", "getEnabledLanguages", get_defined_vars());
	}


	/**
	 * @return array<mixed>
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getMotvCustomer(int $device_motv_motv_id): array
	{
		return $this->connector->call("Devices.Motv", "getMotvCustomer", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\MotvRegistrationSectionEntity>
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getMotvCustomerConfig(string $language, int $portals_id, ?string $customers_token = null): array
	{
		return $this->connector->call("Devices.Motv", "getMotvCustomerConfig", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getPackages(): array
	{
		return $this->connector->call("Devices.Motv", "getPackages", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 */
	public function getPortal(int $motvPortalsId): Entities\Sms\MotvPortalEntity
	{
		return $this->connector->call("Devices.Motv", "getPortal", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvUnknownPageException
	 */
	public function getPortalPage(int $motv_portals_pages_id): Entities\Sms\MotvPortalPageEntity
	{
		return $this->connector->call("Devices.Motv", "getPortalPage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvUnknownPageException
	 */
	public function getPortalPageByName(
		int $motv_portals_pages_motv_portal_id,
		string $name,
	): Entities\Sms\MotvPortalPageEntity
	{
		return $this->connector->call("Devices.Motv", "getPortalPageByName", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvUnknownPageException
	 */
	public function getPortalPageByTypeAndLanguage(
		int $motvPortalId,
		Enums\Sms\PortalPageTypeEnum $type,
		string $language,
	): Entities\Sms\MotvPortalPageEntity
	{
		return $this->connector->call("Devices.Motv", "getPortalPageByTypeAndLanguage", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPortalPairs(): array
	{
		return $this->connector->call("Devices.Motv", "getPortalPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 */
	public function getPortalPrivate(int $motvPortalsId): Entities\Sms\MotvPortalPrivateEntity
	{
		return $this->connector->call("Devices.Motv", "getPortalPrivate", get_defined_vars());
	}


	/**
	 * @return array<int,string[]>
	 */
	public function getPortalsUsers(): array
	{
		return $this->connector->call("Devices.Motv", "getPortalsUsers", get_defined_vars());
	}


	/**
	 * @return array{portal: int, name: string, vendor: int, api: string, mw: string}[]
	 */
	public function getProviderData(): array
	{
		return $this->connector->call("Devices.Motv", "getProviderData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getVendors(): array
	{
		return $this->connector->call("Devices.Motv", "getVendors", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getWhitelistedPortalPairs(): array
	{
		return $this->connector->call("Devices.Motv", "getWhitelistedPortalPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\MotvPortalPageEntity[], row_count: int}
	 * @throws Exceptions\Sms\MotvUnknownPageException
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function pageSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Devices.Motv", "pageSelection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\MotvPortalEntity[], row_count: int}
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function portalsSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Devices.Motv", "portalsSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\ApiSupport\DatabaseErrorTryAgainException
	 * @throws Exceptions\Sms\MotvAccountDuplicateLoginException
	 * @throws Exceptions\Sms\MotvInvalidPasswordFormatException
	 * @throws Exceptions\Sms\MotvInvalidPinFormatException
	 * @throws Exceptions\Sms\MotvUnknownDeviceException
	 * @throws Exceptions\Sms\MotvUnknownErrorException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\MotvValidationErrorException
	 */
	public function update(?int $viewers_id, ?int $device_id, InputEntities\Sms\DeviceMotvEntity $data): int
	{
		return $this->connector->call("Devices.Motv", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\MotvDuplicateUserPortalAccessException
	 * @throws Exceptions\Sms\MotvUnknownPortalException
	 */
	public function updatePortal(?int $motvPortalsId, InputEntities\Sms\MotvPortalEntity $data): int
	{
		return $this->connector->call("Devices.Motv", "updatePortal", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvUnknownPageException
	 */
	public function updatePortalPage(?int $motv_portals_pages_id, InputEntities\Sms\MotvPortalPageEntity $data): int
	{
		return $this->connector->call("Devices.Motv", "updatePortalPage", get_defined_vars());
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
	 * @throws Exceptions\Sms\EpgExcelErrorException
	 * @throws Exceptions\Sms\EpgInsertErrorException
	 * @throws Exceptions\Sms\EpgSetExceptionException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgUnsupportedFileException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 * @throws Exceptions\Sms\EpgXmlFatalErrorException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function autoProccessAll(): void
	{
		$this->connector->call("Epg", "autoProccessAll", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgLogEntity>
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function autoProccessWebGrab(?int $epg_id = null): array
	{
		return $this->connector->call("Epg", "autoProccessWebGrab", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgLogEntity>
	 * @throws Exceptions\Sms\EpgExcelErrorException
	 * @throws Exceptions\Sms\EpgInsertErrorException
	 * @throws Exceptions\Sms\EpgSetExceptionException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgUnsupportedFileException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 * @throws Exceptions\Sms\EpgXmlFatalErrorException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function autoProcessFtp(?int $epg_id = null, ?\DateTimeImmutable $ftpDate = null): array
	{
		return $this->connector->call("Epg", "autoProcessFtp", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgLogEntity>
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgExcelErrorException
	 * @throws Exceptions\Sms\EpgInsertErrorException
	 * @throws Exceptions\Sms\EpgSetExceptionException
	 * @throws Exceptions\Sms\EpgUnsupportedFileException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 * @throws Exceptions\Sms\EpgXmlFatalErrorException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function autoProcessHttp(?int $epg_id = null, ?\DateTimeImmutable $httpDate = null): array
	{
		return $this->connector->call("Epg", "autoProcessHttp", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgLogEntity>
	 * @throws Exceptions\Sms\EpgExcelErrorException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgUnsupportedFileException
	 * @throws Exceptions\Sms\EpgSetExceptionException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 * @throws Exceptions\Sms\EpgXmlFatalErrorException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function autoProcessImap(?int $epg_id = null): array
	{
		return $this->connector->call("Epg", "autoProcessImap", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function categoriesFetchPairs(): array
	{
		return $this->connector->call("Epg", "categoriesFetchPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgCategoryEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function categoriesSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "categoriesSelection", get_defined_vars());
	}


	public function checkForUpdates(int $epg_id, ?string $date = null): void
	{
		$this->connector->call("Epg", "checkForUpdates", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function copyEpgSettings(int $epg_id, string $name): int
	{
		return $this->connector->call("Epg", "copyEpgSettings", get_defined_vars());
	}


	public function createSwDownloadFolder(string $path, string $name): void
	{
		$this->connector->call("Epg", "createSwDownloadFolder", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function delete(int $epgId): void
	{
		$this->connector->call("Epg", "delete", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEventException
	 */
	public function deleteEpgEvent(int $epg_event_id): void
	{
		$this->connector->call("Epg", "deleteEpgEvent", get_defined_vars());
	}


	public function deleteEpgEvents(int $epg_id, string $start_date, string $end_date): void
	{
		$this->connector->call("Epg", "deleteEpgEvents", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function deleteEpgImage(int $epg_id): void
	{
		$this->connector->call("Epg", "deleteEpgImage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function downloadXmltv(int $epg_id): ?string
	{
		return $this->connector->call("Epg", "downloadXmltv", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownCategoryException
	 */
	public function editCategory(?int $epg_category_id, string $epg_category_name): int
	{
		return $this->connector->call("Epg", "editCategory", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgConfigMissingValueException
	 * @throws Exceptions\Sms\EpgUnknownNetworkException
	 */
	public function editEpgNetwork(?int $epg_networks_id, InputEntities\Sms\EpgNetworkEntity $data): int
	{
		return $this->connector->call("Epg", "editEpgNetwork", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgEventsImageEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function epgEventsImagesSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "epgEventsImagesSelection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgInserterEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function epgInsertersSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "epgInsertersSelection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgNetworkEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function epgNetworksSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "epgNetworksSelection", get_defined_vars());
	}


	public function exportEpgSettings(): void
	{
		$this->connector->call("Epg", "exportEpgSettings", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function fetchPairs(): array
	{
		return $this->connector->call("Epg", "fetchPairs", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgEntity>
	 */
	public function getAll(?Enums\Sms\EpgSourceEnum $source = null): array
	{
		return $this->connector->call("Epg", "getAll", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgEventDataExpandedEntity>
	 * @throws Exceptions\Sms\InvalidParameterValueException
	 */
	public function getAllEvents(string $from, string $to, ?int $epg_id = null): array
	{
		return $this->connector->call("Epg", "getAllEvents", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getAllImages(): array
	{
		return $this->connector->call("Epg", "getAllImages", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getCategories(): array
	{
		return $this->connector->call("Epg", "getCategories", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownCategoryException
	 */
	public function getCategory(int $epg_category_id): Entities\Sms\EpgCategoryEntity
	{
		return $this->connector->call("Epg", "getCategory", get_defined_vars());
	}


	/**
	 * @return array{data: Entities\Sms\EpgEventsImageEntity, image?: string}
	 * @throws Exceptions\Sms\EpgUnknownEventException
	 */
	public function getChannelEventsImage(int $epg_events_images_id): array
	{
		return $this->connector->call("Epg", "getChannelEventsImage", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function getChannelEventsTitle(int $epg_id): array
	{
		return $this->connector->call("Epg", "getChannelEventsTitle", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgColumnEntity>
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function getCsvXlsColumns(int $epg_id): array
	{
		return $this->connector->call("Epg", "getCsvXlsColumns", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function getData(int $epg_id): Entities\Sms\EpgEntity
	{
		return $this->connector->call("Epg", "getData", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgEventEntity>
	 * @throws Exceptions\Sms\EpgSetExceptionException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 */
	public function getDataFromCsv(int $epg_id, string $file): array
	{
		return $this->connector->call("Epg", "getDataFromCsv", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgEventEntity>
	 * @throws Exceptions\Sms\EpgExcelErrorException
	 * @throws Exceptions\Sms\EpgSetExceptionException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 */
	public function getDataFromXls(int $epg_id, string $file): array
	{
		return $this->connector->call("Epg", "getDataFromXls", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgEventEntity>
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 * @throws Exceptions\Sms\EpgXmlFatalErrorException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function getDataFromXml(int $epg_id, string $file): array
	{
		return $this->connector->call("Epg", "getDataFromXml", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function getDefaultChannelImage(int $epg_id): ?string
	{
		return $this->connector->call("Epg", "getDefaultChannelImage", get_defined_vars());
	}


	/**
	 * @return array<int>
	 */
	public function getEpgCategories(int $epg_id): array
	{
		return $this->connector->call("Epg", "getEpgCategories", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getEpgGlobalConfig(): array
	{
		return $this->connector->call("Epg", "getEpgGlobalConfig", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function getEpgImage(int $epg_id): ?string
	{
		return $this->connector->call("Epg", "getEpgImage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownInserterException
	 */
	public function getEpgInserter(int $epg_inserters_id): Entities\Sms\EpgInserterEntity
	{
		return $this->connector->call("Epg", "getEpgInserter", get_defined_vars());
	}


	public function getEpgInserterConfig(
		int $epg_inserters_config_epg_inserters_id,
	): ?Entities\Sms\EpgInserterConfigEntity
	{
		return $this->connector->call("Epg", "getEpgInserterConfig", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getEpgInsertersPairs(): array
	{
		return $this->connector->call("Epg", "getEpgInsertersPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownNetworkException
	 */
	public function getEpgNetwork(int $epg_networks_id): Entities\Sms\EpgNetworkEntity
	{
		return $this->connector->call("Epg", "getEpgNetwork", get_defined_vars());
	}


	public function getEpgNetworkConfig(int $epg_networks_id): ?Entities\Sms\EpgNetworkConfigEntity
	{
		return $this->connector->call("Epg", "getEpgNetworkConfig", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getEpgNetworksPairs(): array
	{
		return $this->connector->call("Epg", "getEpgNetworksPairs", get_defined_vars());
	}


	/**
	 * @return array<int,int[]>
	 */
	public function getEpgsCategories(): array
	{
		return $this->connector->call("Epg", "getEpgsCategories", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgSwDownloadErrorException
	 * @throws Exceptions\Sms\EpgUnknownSwDownloadException
	 */
	public function getEpgSwDownload(int $epg_sw_download_id): Entities\Sms\EpgSwDownloadEntity
	{
		return $this->connector->call("Epg", "getEpgSwDownload", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEventException
	 */
	public function getEvent(int $epg_event_id): Entities\Sms\EpgEventDataEntity
	{
		return $this->connector->call("Epg", "getEvent", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgEventDataEntity>
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function getEvents(int $epg_id): array
	{
		return $this->connector->call("Epg", "getEvents", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgEventDataExpandedEntity>
	 * @throws Exceptions\Sms\InvalidParameterValueException
	 * @param array<int[]> $channelsIdArr
	 */
	public function getEventsForTimeline(array $channelsIdArr, string $start, string $end): array
	{
		return $this->connector->call("Epg", "getEventsForTimeline", get_defined_vars());
	}


	/**
	 * @return array{upcomingEvents: array{count: int, lastEvent: Entities\Sms\EpgEventDataExpandedEntity|null}, currentEvent: Entities\Sms\EpgEventDataExpandedEntity|null}
	 */
	public function getEventsInfo(int $epgId): array
	{
		return $this->connector->call("Epg", "getEventsInfo", get_defined_vars());
	}


	public function getFile(int $epg_file_id): ?string
	{
		return $this->connector->call("Epg", "getFile", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgFileEntity>
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function getFilesInfo(int $epg_id): array
	{
		return $this->connector->call("Epg", "getFilesInfo", get_defined_vars());
	}


	/**
	 * @return array<string>
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getMwChannelEpgPairs(): array
	{
		return $this->connector->call("Epg", "getMwChannelEpgPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownServiceException
	 */
	public function getServiceData(int $services_id): Entities\Sms\ServiceEntity
	{
		return $this->connector->call("Epg", "getServiceData", get_defined_vars());
	}


	public function getServiceDataForValidation(
		int $services_transponders_id,
		int $services_service_id,
		?int $services_lcn_id,
		int $services_id,
	): ?Entities\Sms\ServiceEntity
	{
		return $this->connector->call("Epg", "getServiceDataForValidation", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getServicesPairs(): array
	{
		return $this->connector->call("Epg", "getServicesPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgSwDownloadErrorException
	 */
	public function getSwDownloadBox(int $epg_sw_download_boxes_id): Entities\Sms\EpgSwDownloadBoxEntity
	{
		return $this->connector->call("Epg", "getSwDownloadBox", get_defined_vars());
	}


	/**
	 * @return array<mixed>
	 */
	public function getSwDownloadFolders(): array
	{
		return $this->connector->call("Epg", "getSwDownloadFolders", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgSwDownloadErrorException
	 */
	public function getSwDownloadManufacturer(
		int $epg_sw_download_manufacturers_id,
	): Entities\Sms\EpgSwDownloadManufacturerEntity
	{
		return $this->connector->call("Epg", "getSwDownloadManufacturer", get_defined_vars());
	}


	public function getSwDownloadPath(): ?string
	{
		return $this->connector->call("Epg", "getSwDownloadPath", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgSwDownloadErrorException
	 */
	public function getSwDownloadRelease(
		int $epg_sw_download_box_realeses_id,
	): Entities\Sms\EpgSwDownloadBoxesReleaseEntity
	{
		return $this->connector->call("Epg", "getSwDownloadRelease", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getSwDownloadSubdirectories(?string $path, bool $fullPath = false): array
	{
		return $this->connector->call("Epg", "getSwDownloadSubdirectories", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownTransponderException
	 */
	public function getTransponderData(int $transponders_id): Entities\Sms\TransponderEntity
	{
		return $this->connector->call("Epg", "getTransponderData", get_defined_vars());
	}


	public function getTransponderDataForIdValidation(
		int $transponders_tsid,
		int $transpoders_onid,
		int $transponders_id,
	): ?Entities\Sms\TransponderEntity
	{
		return $this->connector->call("Epg", "getTransponderDataForIdValidation", get_defined_vars());
	}


	/**
	 * @return array{actual: int[], other: int[]}
	 * @throws Exceptions\Sms\EpgUnknownTransponderException
	 */
	public function getTransponderServices(int $transponders_id): array
	{
		return $this->connector->call("Epg", "getTransponderServices", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgColumnEntity>
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function getXmlColumns(int $epg_id): array
	{
		return $this->connector->call("Epg", "getXmlColumns", get_defined_vars());
	}


	/**
	 * @return Entities\Sms\EpgLogEntity[][]
	 * @throws Exceptions\Sms\EpgExcelErrorException
	 * @throws Exceptions\Sms\EpgInsertErrorException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgUnsupportedFileException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 * @throws Exceptions\Sms\EpgXmlFatalErrorException
	 * @param array<int[]> $ids
	 */
	public function groupManualChecker(array $ids): array
	{
		return $this->connector->call("Epg", "groupManualChecker", get_defined_vars());
	}


	/**
	 * @param array<int[]> $epg_categories_ids
	 */
	public function insertEpgCategories(int $epg_id, array $epg_categories_ids): void
	{
		$this->connector->call("Epg", "insertEpgCategories", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgChangeLogEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function logSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "logSelection", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\EpgLogEntity>
	 * @throws Exceptions\Sms\EpgExcelErrorException
	 * @throws Exceptions\Sms\EpgInsertErrorException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgUnsupportedFileException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 * @throws Exceptions\Sms\EpgXmlFatalErrorException
	 */
	public function manualChecker(int $epg_id, ?string $date = null): array
	{
		return $this->connector->call("Epg", "manualChecker", get_defined_vars());
	}


	public function refreshData(array $ids): void
	{
		$this->connector->call("Epg", "refreshData", get_defined_vars());
	}


	public function refreshMcast(): void
	{
		$this->connector->call("Epg", "refreshMcast", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgExcelErrorException
	 * @throws Exceptions\Sms\EpgInsertErrorException
	 * @throws Exceptions\Sms\EpgSetExceptionException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgUnsupportedFileException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 * @throws Exceptions\Sms\EpgXmlFatalErrorException
	 */
	public function saveEpgFile(string $file, string $name, int $epgId, bool $sendToMw): int
	{
		return $this->connector->call("Epg", "saveEpgFile", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function saveEpgImage(int $epg_id, string $name, string $file): void
	{
		$this->connector->call("Epg", "saveEpgImage", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function sendToMw(int $epgId): void
	{
		$this->connector->call("Epg", "sendToMw", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgServerLogEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function serverLogSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "serverLogSelection", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\ServiceEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function servicesSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "servicesSelection", get_defined_vars());
	}


	/**
	 * @return array<string,array<int,string>>
	 */
	public function swDownloadBoxesByManufacturers(): array
	{
		return $this->connector->call("Epg", "swDownloadBoxesByManufacturers", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function swDownloadBoxesPairs(): array
	{
		return $this->connector->call("Epg", "swDownloadBoxesPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgSwDownloadBoxEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function swDownloadBoxesSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "swDownloadBoxesSelection", get_defined_vars());
	}


	/**
	 * @return array<string,array<int,string>>
	 */
	public function swDownloadBoxRealeasesByBox(): array
	{
		return $this->connector->call("Epg", "swDownloadBoxRealeasesByBox", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgSwDownloadBoxesReleaseEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function swDownloadBoxRealesesSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "swDownloadBoxRealesesSelection", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function swDownloadManufacturersPairs(): array
	{
		return $this->connector->call("Epg", "swDownloadManufacturersPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgSwDownloadManufacturerEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function swDownloadManufacturersSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "swDownloadManufacturersSelection", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function swDownloadReleasesPairs(): array
	{
		return $this->connector->call("Epg", "swDownloadReleasesPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\EpgSwDownloadEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function swDownloadSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "swDownloadSelection", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function transpondersFetchPairs(): array
	{
		return $this->connector->call("Epg", "transpondersFetchPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\TransponderSelectionEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function transpondersSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Epg", "transpondersSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\InvalidParameterValueException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function update(?int $epgId, InputEntities\Sms\EpgEntity $data): int
	{
		return $this->connector->call("Epg", "update", get_defined_vars());
	}


	public function updateChannelEventsImage(
		?int $epg_events_images_id,
		InputEntities\Sms\EpgEventsImageEntity $data,
		?string $image = null,
	): int
	{
		return $this->connector->call("Epg", "updateChannelEventsImage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function updateCsvXlsColumns(int $epg_id, InputEntities\Sms\CsvXlsColumnEntity $data): void
	{
		$this->connector->call("Epg", "updateCsvXlsColumns", get_defined_vars());
	}


	/**
	 * @param array<string[]> $data
	 */
	public function updateEpgGlobalConfig(array $data): void
	{
		$this->connector->call("Epg", "updateEpgGlobalConfig", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownInserterException
	 */
	public function updateEpgInserter(?int $epg_inserters_id, InputEntities\Sms\EpgInserterEntity $data): int
	{
		return $this->connector->call("Epg", "updateEpgInserter", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownInserterException
	 */
	public function updateEpgInserterConfig(InputEntities\Sms\EpgInserterConfigEntity $data): void
	{
		$this->connector->call("Epg", "updateEpgInserterConfig", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgConfigMissingValueException
	 */
	public function updateEpgNetworkConfig(int $epg_networks_id, InputEntities\Sms\EpgNetworkConfigEntity $data): void
	{
		$this->connector->call("Epg", "updateEpgNetworkConfig", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgSwDownloadErrorException
	 * @throws Exceptions\Sms\EpgUnknownSwDownloadException
	 */
	public function updateEpgSwDownload(?int $epg_sw_download_id, InputEntities\Sms\EpgSwDownloadEntity $data): int
	{
		return $this->connector->call("Epg", "updateEpgSwDownload", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEventException
	 */
	public function updateEvent(int $epg_event_id, InputEntities\Sms\EpgEventEntity $data): int
	{
		return $this->connector->call("Epg", "updateEvent", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgConfigMissingValueException
	 * @throws Exceptions\Sms\EpgUnknownServiceException
	 */
	public function updateServices(?int $services_id, InputEntities\Sms\ServiceEntity $data): int
	{
		return $this->connector->call("Epg", "updateServices", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgSwDownloadErrorException
	 */
	public function updateSwDownloadBox(
		?int $epg_sw_download_boxes_id,
		InputEntities\Sms\EpgSwDownloadBoxEntity $data,
	): int
	{
		return $this->connector->call("Epg", "updateSwDownloadBox", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgSwDownloadErrorException
	 */
	public function updateSwDownloadManufacturer(
		?int $epg_sw_download_manufacturers_id,
		InputEntities\Sms\EpgSwDownloadManufacturerEntity $data,
	): int
	{
		return $this->connector->call("Epg", "updateSwDownloadManufacturer", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgSwDownloadErrorException
	 */
	public function updateSwDownloadRelease(
		?int $epg_sw_download_box_realeses_id,
		InputEntities\Sms\EpgSwDownloadBoxesReleaseEntity $data,
	): int
	{
		return $this->connector->call("Epg", "updateSwDownloadRelease", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgConfigMissingValueException
	 * @throws Exceptions\Sms\EpgUnknownTransponderException
	 */
	public function updateTransponders(?int $transponders_id, InputEntities\Sms\TransponderEntity $data): int
	{
		return $this->connector->call("Epg", "updateTransponders", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function updateXmlColumns(int $epg_id, InputEntities\Sms\XmlColumnEntity $data): int
	{
		return $this->connector->call("Epg", "updateXmlColumns", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 */
	public function uploadDefaultChannelImage(int $epg_id, string $imageName, string $image): void
	{
		$this->connector->call("Epg", "uploadDefaultChannelImage", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgExcelErrorException
	 * @throws Exceptions\Sms\EpgInsertErrorException
	 * @throws Exceptions\Sms\EpgSetExceptionException
	 * @throws Exceptions\Sms\EpgUnknownEpgException
	 * @throws Exceptions\Sms\EpgUnsupportedFileException
	 * @throws Exceptions\Sms\EpgUnsupportedDateFormatException
	 * @throws Exceptions\Sms\EpgXmlFatalErrorException
	 */
	public function uploadEpgFile(string $file, string $name, int $epgId): void
	{
		$this->connector->call("Epg", "uploadEpgFile", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\EpgSwDownloadErrorException
	 * @param array<InputEntities\Sms\EpgSwDownloadFileEntity> $files
	 */
	public function uploadSwDownloadFiles(string $path, array $files): void
	{
		$this->connector->call("Epg", "uploadSwDownloadFiles", get_defined_vars());
	}
}

class EpgServer
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\EpgConfigMissingValueException
	 */
	public function exportNetworkConfig(): void
	{
		$this->connector->call("EpgServer", "exportNetworkConfig", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function logSelection(
		array $columns,
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("EpgServer", "logSelection", get_defined_vars());
	}
}

class Gallery
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\GalleryUnknownImageException
	 */
	public function deleteConfigImage(int $config_images_id): void
	{
		$this->connector->call("Gallery", "deleteConfigImage", get_defined_vars());
	}


	public function getImage(int $images_id): array
	{
		return $this->connector->call("Gallery", "getImage", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Gallery", "getPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $columns,
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Gallery", "selection", get_defined_vars());
	}


	public function uploadImage(?int $imagesId, string $image, string $name): int
	{
		return $this->connector->call("Gallery", "uploadImage", get_defined_vars());
	}
}

class GroupAction
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\GroupActionUnknownGroupActionException
	 */
	public function getData(int $group_action_id): Entities\Sms\GroupActionEntity
	{
		return $this->connector->call("GroupAction", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\GroupActionNotAuthorizedException
	 * @throws Exceptions\Sms\GroupActionTranslateErrorException
	 * @throws Exceptions\Sms\GroupActionUnknownGroupActionException
	 * @throws Exceptions\Sms\OnlyOneFromGroupActionOrGroupActionPredefinedHasToBeFilledException
	 * @throws Exceptions\Sms\OnlyOneFromGroupActionOrGroupActionPredefinedHasToBeFilledException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function run(
		?int $group_action_id = null,
		?Enums\Sms\GroupActionPredefinedEnum $group_action_predefined = null,
		array $data = [],
		?string $content = null,
		bool $checkGroupOwnership = true,
	): void
	{
		$this->connector->call("GroupAction", "run", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\GroupActionEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\GroupActionUnknownGroupActionException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("GroupAction", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\GroupActionUnknownGroupActionException
	 */
	public function update(?int $group_action_id, InputEntities\Sms\GroupActionEntity $data): int
	{
		return $this->connector->call("GroupAction", "update", get_defined_vars());
	}
}

class Imap
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownImapServerException
	 */
	public function getData(int $config_imap_servers_id): Entities\Sms\ImapEntity
	{
		return $this->connector->call("Imap", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(bool $active = false): array
	{
		return $this->connector->call("Imap", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\ImapEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Imap", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownImapServerException
	 */
	public function update(?int $config_imap_servers_id, InputEntities\Sms\ImapEntity $data): int
	{
		return $this->connector->call("Imap", "update", get_defined_vars());
	}
}

class Integration
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\DeviceNoDeviceFoundException
	 * @throws Exceptions\Sms\DeviceTooManyDevicesFoundException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function activateMotvTvod(int $viewers_id, int $vods_id, int $seconds): void
	{
		$this->connector->call("Integration", "activateMotvTvod", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DeviceNoDeviceFoundException
	 * @throws Exceptions\Sms\DeviceTooManyDevicesFoundException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\SubscriptionCannotCancelException
	 * @throws Exceptions\Sms\SubscriptionUnknownSubscriptionException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function cancel(int $viewers_id, int $products_id): void
	{
		$this->connector->call("Integration", "cancel", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function createMotvCustomer(
		string $login,
		string $password,
		?string $profileName = null,
		?string $pin = null,
		?int $portals_id = null,
		?string $birthday = null,
		?string $email = null,
		?string $phone = null,
		?string $firstname = null,
		?string $lastname = null,
		?string $note = null,
		?array $macAdresses = null,
		array $additionalCustomerData = [],
	): int
	{
		return $this->connector->call("Integration", "createMotvCustomer", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getAvailableMotvTvods(): array
	{
		return $this->connector->call("Integration", "getAvailableMotvTvods", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DeviceNoDeviceFoundException
	 * @throws Exceptions\Sms\DeviceTooManyDevicesFoundException
	 * @throws Exceptions\ApiSupport\InvalidRequestDataException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function motvPushNotification(
		int $viewers_id,
		string $priority,
		string $title,
		?string $subtitle = null,
		?string $message = null,
		?string $link = null,
	): void
	{
		$this->connector->call("Integration", "motvPushNotification", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DeviceNoDeviceFoundException
	 * @throws Exceptions\Sms\DeviceTooManyDevicesFoundException
	 * @throws Exceptions\ApiSupport\InvalidRequestDataException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 * @throws Exceptions\Sms\DeviceIncompatibleProductException
	 * @throws Exceptions\Sms\DeviceUnknownDeviceException
	 * @throws Exceptions\Sms\InvoiceNotEnoughCreditCustomerException
	 * @throws Exceptions\Sms\InvoiceNotEnoughCreditDealerException
	 * @throws Exceptions\Sms\InvoiceProductNotAllowedException
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\MultipleCurrenciesAreNotAllowedOnOneInvoiceException
	 */
	public function subscribe(int $viewers_id, int $products_id): int
	{
		return $this->connector->call("Integration", "subscribe", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerTooManyAddressesFoundException
	 * @throws Exceptions\Sms\DeviceIncompatibleDeviceException
	 * @throws Exceptions\Sms\DeviceNoDeviceFoundException
	 * @throws Exceptions\Sms\DeviceTooManyDevicesFoundException
	 * @throws Exceptions\Sms\CustomerUnknownAddressException
	 * @throws Exceptions\Sms\CustomerUnknownContactException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\CustomerUpdateValidationErrorException
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function updateMotvCustomer(
		int $viewers_id,
		?string $login = null,
		?string $password = null,
		?string $profileName = null,
		?string $pin = null,
		?string $birthday = null,
		?string $email = null,
		?string $phone = null,
		?string $firstname = null,
		?string $lastname = null,
		?string $note = null,
		?array $macAdresses = null,
		array $additionalCustomerData = [],
		?int $portals_id = null,
	): int
	{
		return $this->connector->call("Integration", "updateMotvCustomer", get_defined_vars());
	}
}

class Invoice
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\InvoiceAlreadyCancelledException
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 */
	public function cancelInvoice(int $invoice_id, ?string $note = null): void
	{
		$this->connector->call("Invoice", "cancelInvoice", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 */
	public function collectInvoice(int $viewers_id, int $invoice_id): int
	{
		return $this->connector->call("Invoice", "collectInvoice", get_defined_vars());
	}


	public function getBillingHistory(int $viewers_id): array
	{
		return $this->connector->call("Invoice", "getBillingHistory", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 */
	public function getData(int $invoice_id): array
	{
		return $this->connector->call("Invoice", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 */
	public function getPrintableBillingHistory(int $viewers_id, int $template, bool $mpos = false): string
	{
		return $this->connector->call("Invoice", "getPrintableBillingHistory", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\InvoiceCannotBeRevertedException
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 */
	public function revertInvoice(int $invoice_id, string $remark = ''): void
	{
		$this->connector->call("Invoice", "revertInvoice", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\InvoiceCannotBeRevertedException
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 */
	public function revertReceipt(int $invoice_id, string $remark = ''): void
	{
		$this->connector->call("Invoice", "revertReceipt", get_defined_vars());
	}


	/**
	 * @return array{rows: array, row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $columns,
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Invoice", "selection", get_defined_vars());
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
	 * @return array<string>
	 */
	public function getAllLogTypes(): array
	{
		return $this->connector->call("Logger", "getAllLogTypes", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\LogReceiptTemplateEntity>
	 */
	public function getLogReceipts(): array
	{
		return $this->connector->call("Logger", "getLogReceipts", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\LogUnknownLogException
	 * @throws Exceptions\Sms\LogUnknownLogTemplateException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 */
	public function printLog(int $log_id): string
	{
		return $this->connector->call("Logger", "printLog", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @param array<string,int|null> $logReceipts $logReceipts
	 */
	public function saveLogReceipts(array $logReceipts): void
	{
		$this->connector->call("Logger", "saveLogReceipts", get_defined_vars());
	}
}

class Product
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
	public function getActivePairs(): array
	{
		return $this->connector->call("Product", "getActivePairs", get_defined_vars());
	}


	public function getActiveProducts(): array
	{
		return $this->connector->call("Product", "getActiveProducts", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 */
	public function getData(int $products_id): Entities\Sms\ProductEntity
	{
		return $this->connector->call("Product", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Product", "getPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPostpaidPairs(): array
	{
		return $this->connector->call("Product", "getPostpaidPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\ProductEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Product", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\CategoryUnknownCategoryException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\ProductForRenewingCannotHaveLengthInMinutesException
	 * @throws Exceptions\Sms\ProductInitPriceHasToBeHigherThenZeroException
	 */
	public function update(?int $products_id, InputEntities\Sms\ProductEntity $data): int
	{
		return $this->connector->call("Product", "update", get_defined_vars());
	}
}

class ProductGroup
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 */
	public function getData(int $products_groups_id): Entities\Sms\ProductsGroupEntity
	{
		return $this->connector->call("ProductGroup", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("ProductGroup", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\ProductsGroupEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("ProductGroup", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 */
	public function update(?int $products_groups_id, InputEntities\Sms\ProductsGroupEntity $data): int
	{
		return $this->connector->call("ProductGroup", "update", get_defined_vars());
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
	 * @throws Exceptions\Sms\ReportFileNotFoundException
	 * @throws Exceptions\Sms\ReportUnknownReportFileException
	 */
	public function downloadReportFile(int $report_files_id): Entities\Sms\ReportFileEntity
	{
		return $this->connector->call("Report", "downloadReportFile", get_defined_vars());
	}


	/**
	 * @return array<string,array<string,string>>
	 */
	public function getAllColumns(): array
	{
		return $this->connector->call("Report", "getAllColumns", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ReportUnknownReportException
	 */
	public function getData(int $reports_id): Entities\Sms\ReportEntity
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
	 * @throws Exceptions\Sms\ReportPrecalculationUnknownException
	 */
	public function getPrecalculationData(int $reports_precalculations_id): Entities\Sms\ReportPrecalculationEntity
	{
		return $this->connector->call("Report", "getPrecalculationData", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\ReportFileEntity>
	 * @throws Exceptions\Sms\ReportUnknownReportException
	 */
	public function getReportFiles(int $reports_id): array
	{
		return $this->connector->call("Report", "getReportFiles", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getTablesNames(): array
	{
		return $this->connector->call("Report", "getTablesNames", get_defined_vars());
	}


	/**
	 * @return array<string,array<string|int,scalar>>
	 * @throws Exceptions\Sms\ReportUnknownReportException
	 */
	public function getTranslatedReportColumns(int $reports_id): array
	{
		return $this->connector->call("Report", "getTranslatedReportColumns", get_defined_vars());
	}


	/**
	 * @return array{data: array, info: string}
	 * @throws Exceptions\Sms\ReportQueryErrorException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function playgroundQueryExecute(string $query): array
	{
		return $this->connector->call("Report", "playgroundQueryExecute", get_defined_vars());
	}


	public function precalculateReports(
		?int $reports_precalculations_id = null,
		?\Symfony\Component\Console\Output\OutputInterface $consoleOutput = null,
	): void
	{
		$this->connector->call("Report", "precalculateReports", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\ReportPrecalculationEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function precalculationSelection(
		array $columns = [],
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Report", "precalculationSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ReportPrecalculationUnknownException
	 */
	public function removePrecalculatedReport(int $reports_precalculations_id): void
	{
		$this->connector->call("Report", "removePrecalculatedReport", get_defined_vars());
	}


	/**
	 * @return array{row_count: int, rows: array}
	 * @throws Exceptions\Sms\ReportNotAuthorizedException
	 * @throws Exceptions\Sms\ReportQueryErrorException
	 * @throws Exceptions\Sms\ReportUnknownReportException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function reportSelection(
		int $reports_id,
		array $columns = [],
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
		bool $isExport = false,
	): array
	{
		return $this->connector->call("Report", "reportSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ReportPrecalculationUnknownException
	 */
	public function runPrecalculatedReport(int $reports_precalculations_id): void
	{
		$this->connector->call("Report", "runPrecalculatedReport", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\ReportEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $columns,
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Report", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ReportQueryErrorException
	 * @throws Exceptions\Sms\ReportUnknownReportException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\ApiSupport\RoleUnknownException
	 */
	public function update(?int $reportsId, InputEntities\Sms\ReportEntity $data): int
	{
		return $this->connector->call("Report", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ReportQueryErrorException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\ReportPrecalculationUnknownException
	 */
	public function updatePrecalculation(
		?int $reports_precalculations_id,
		InputEntities\Sms\ReportPrecalculationEntity $data,
	): int
	{
		return $this->connector->call("Report", "updatePrecalculation", get_defined_vars());
	}
}

class Request
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
	public function getRequestTypes(): array
	{
		return $this->connector->call("Request", "getRequestTypes", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $columns,
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Request", "selection", get_defined_vars());
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


	public function getAllRightsRoles(): array
	{
		return $this->connector->call("Right", "getAllRightsRoles", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Right", "getPairs", get_defined_vars());
	}


	public function getPermissions(): array
	{
		return $this->connector->call("Right", "getPermissions", get_defined_vars());
	}


	public function getRolesRights(): array
	{
		return $this->connector->call("Right", "getRolesRights", get_defined_vars());
	}


	public function update(array $data): void
	{
		$this->connector->call("Right", "update", get_defined_vars());
	}
}

class Role
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	public function getAllowedRoles(bool $includeSelf = false): array
	{
		return $this->connector->call("Role", "getAllowedRoles", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getAllPairs(): array
	{
		return $this->connector->call("Role", "getAllPairs", get_defined_vars());
	}


	public function getAllRolesDevices(): array
	{
		return $this->connector->call("Role", "getAllRolesDevices", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\RoleUnknownException
	 */
	public function getData(int $roles_id): array
	{
		return $this->connector->call("Role", "getData", get_defined_vars());
	}


	/**
	 * @return array<mixed>
	 */
	public function getDataForOrgChart(): array
	{
		return $this->connector->call("Role", "getDataForOrgChart", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Role", "getPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\RoleUnknownException
	 */
	public function getRolesDevices(int $roles_id): array
	{
		return $this->connector->call("Role", "getRolesDevices", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $columns,
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Role", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\RoleCircularParentException
	 * @throws Exceptions\ApiSupport\RoleDuplicateNameException
	 * @throws Exceptions\Sms\RoleSameParentException
	 * @throws Exceptions\ApiSupport\RoleUnknownException
	 */
	public function update(?int $roles_id, array $data): int
	{
		return $this->connector->call("Role", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\RoleUnknownException
	 */
	public function updateRolesDevices(int $roles_id, array $devices): void
	{
		$this->connector->call("Role", "updateRolesDevices", get_defined_vars());
	}
}

class Sales
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array<Entities\Sms\SalesProductEntity>
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getAllowedProductsForCustomer(
		int $viewers_id,
		?Enums\Sms\DeviceEnum $device_type = null,
		?int $device_id = null,
		bool $forSelfcare = false,
	): array
	{
		return $this->connector->call("Sales", "getAllowedProductsForCustomer", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\ApiSupport\InvalidRequestDataException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getInvoiceTemplate(?int $invoice_number = null, ?int $invoice_id = null, bool $mpos = false): string
	{
		return $this->connector->call("Sales", "getInvoiceTemplate", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\ApiSupport\InvalidRequestDataException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function printAllInvoices(array $columns, array $where): array
	{
		return $this->connector->call("Sales", "printAllInvoices", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 * @throws Exceptions\Sms\DeviceIncompatibleProductException
	 * @throws Exceptions\Sms\DeviceUnknownDeviceException
	 * @throws Exceptions\Sms\InvoiceNotEnoughCreditCustomerException
	 * @throws Exceptions\Sms\InvoiceNotEnoughCreditDealerException
	 * @throws Exceptions\Sms\InvoiceProductNotAllowedException
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\ApiSupport\InvalidRequestDataException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\MultipleCurrenciesAreNotAllowedOnOneInvoiceException
	 * @param array{0: Enums\Sms\DeviceEnum, 1: int}[] $devices $devices
	 */
	public function saveInvoice(
		int $viewers_id,
		array $devices,
		InputEntities\Sms\SalesInvoiceEntity $invoice_data,
		bool $mpos = false,
		bool $return_templates = true,
	): array
	{
		return $this->connector->call("Sales", "saveInvoice", get_defined_vars());
	}
}

class Schedule
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\ScheduleUnknownScheduleException
	 */
	public function getData(int $schedule_id): Entities\Sms\ScheduleEntity
	{
		return $this->connector->call("Schedule", "getData", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\ScheduleEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\ScheduleUnknownScheduleException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Schedule", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\GroupActionUnknownGroupActionException
	 * @throws Exceptions\Sms\ScheduleTokenNotSetException
	 * @throws Exceptions\Sms\ScheduleUnknownScheduleException
	 */
	public function update(?int $schedule_id, InputEntities\Sms\ScheduleEntity $data): int
	{
		return $this->connector->call("Schedule", "update", get_defined_vars());
	}
}

class Selfcare
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\SelfcareOrderUnknownException
	 * @throws Exceptions\Sms\SelfcareSubscriptionUnknownException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\Sms\SelfcarePaymentGatewayUnknownException
	 * @throws Exceptions\Sms\SelfcareOrderFailException
	 */
	public function cancelSubscription(int $subscriptionsId): void
	{
		$this->connector->call("Selfcare", "cancelSubscription", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\SelfcareOrderUnknownException
	 * @throws Exceptions\Sms\SelfcareSubscriptionUnknownException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\Sms\SelfcareOrderFailException
	 * @throws Exceptions\Sms\SelfcarePaymentGatewayUnknownException
	 */
	public function cancelSubscriptionFromSelfcare(string $customers_token, int $subscriptionsId): void
	{
		$this->connector->call("Selfcare", "cancelSubscriptionFromSelfcare", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\SelfcareOrderUnknownException
	 * @throws Exceptions\Sms\SelfcarePaymentGatewayUnknownException
	 * @throws Exceptions\Sms\SelfcareUnknownPaymentGatewayException
	 * @throws Exceptions\Sms\SelfcareProductNotAllowedException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\ConfigUnknownValueException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\SelfcareOrderFailException
	 * @throws Exceptions\Sms\MultipleCurrenciesAreNotAllowedOnOneInvoiceException
	 * @param array<int[]> $productsIds
	 */
	public function createOrder(
		string $customers_token,
		array $productsIds,
		int $vendorsId,
		string $language,
		int $paymentGatewaysId,
	): string
	{
		return $this->connector->call("Selfcare", "createOrder", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\SelfcareSubscriptionEntity>
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\SelfcareSubscriptionUnknownException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getActiveSubscriptions(string $customers_token): array
	{
		return $this->connector->call("Selfcare", "getActiveSubscriptions", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\SalesProductEntity>
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 */
	public function getAllowedProductsForCustomer(string $customers_token): array
	{
		return $this->connector->call("Selfcare", "getAllowedProductsForCustomer", get_defined_vars());
	}


	/**
	 * @return array<int>
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getCustomersInitPayDoneProducts(string $customers_token): array
	{
		return $this->connector->call("Selfcare", "getCustomersInitPayDoneProducts", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareOrderUnknownException
	 */
	public function getOrder(int $ordersId): Entities\Sms\SelfcareOrderEntity
	{
		return $this->connector->call("Selfcare", "getOrder", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareOrderUnknownException
	 */
	public function getOrderByReference(string $ordersReference): Entities\Sms\SelfcareOrderEntity
	{
		return $this->connector->call("Selfcare", "getOrderByReference", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Selfcare", "getPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcarePaymentGatewayUnknownException
	 */
	public function getPaymentGateway(int $paymentGatewaysId): Entities\Sms\PaymentGatewayEntity
	{
		return $this->connector->call("Selfcare", "getPaymentGateway", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\PaymentGatewayEntity>
	 * @throws Exceptions\Sms\SelfcarePaymentGatewayUnknownException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getPaymentGatewaysForProduct(int $productsId, ?string $customers_token = null): array
	{
		return $this->connector->call("Selfcare", "getPaymentGatewaysForProduct", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 */
	public function getProductData(int $products_id): Entities\Sms\ProductEntity
	{
		return $this->connector->call("Selfcare", "getProductData", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\SelfcareOrderEntity>
	 * @throws Exceptions\Sms\SelfcareOrderUnknownException
	 */
	public function getRecurringOrders(int $parentOrdersId): array
	{
		return $this->connector->call("Selfcare", "getRecurringOrders", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareSubscriptionUnknownException
	 */
	public function getSubscription(int $subscriptionsId): Entities\Sms\SelfcareSubscriptionEntity
	{
		return $this->connector->call("Selfcare", "getSubscription", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getTermsOfUse(string $customers_token, string $language): ?string
	{
		return $this->connector->call("Selfcare", "getTermsOfUse", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getVendorsData(int $vendorsId): array
	{
		return $this->connector->call("Selfcare", "getVendorsData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\MotvIncorrectUsernamePasswordException
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function getVendorsDataFromCustomersToken(string $customers_token): array
	{
		return $this->connector->call("Selfcare", "getVendorsDataFromCustomersToken", get_defined_vars());
	}


	public function isOneTimePaymentSupported(): bool
	{
		return $this->connector->call("Selfcare", "isOneTimePaymentSupported", get_defined_vars());
	}


	public function isRecurringPaymentSupported(): bool
	{
		return $this->connector->call("Selfcare", "isRecurringPaymentSupported", get_defined_vars());
	}


	public function isSelfcareAllowed(): bool
	{
		return $this->connector->call("Selfcare", "isSelfcareAllowed", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\SelfcareOrderUnknownException
	 * @throws Exceptions\Sms\SelfcarePaymentGatewayUnknownException
	 * @throws Exceptions\Sms\BouquetUnknownBouquetException
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 * @throws Exceptions\Sms\DeviceIncompatibleProductException
	 * @throws Exceptions\Sms\DeviceUnknownDeviceException
	 * @throws Exceptions\Sms\GroupUnknownGroupException
	 * @throws Exceptions\Sms\InvoiceNotEnoughCreditCustomerException
	 * @throws Exceptions\Sms\InvoiceNotEnoughCreditDealerException
	 * @throws Exceptions\Sms\InvoiceProductNotAllowedException
	 * @throws Exceptions\Sms\InvoiceUnknownInvoiceException
	 * @throws Exceptions\Sms\ProductUnknownProductException
	 * @throws Exceptions\Sms\SelfcareOrderFailException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\ApiSupport\InvalidRequestDataException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 * @throws Exceptions\Sms\MultipleCurrenciesAreNotAllowedOnOneInvoiceException
	 */
	public function processOrder(string $ordersReference): Entities\Sms\SelfcareOrderEntity
	{
		return $this->connector->call("Selfcare", "processOrder", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\SelfcareOrderEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\SelfcareOrderUnknownException
	 */
	public function selectionOrders(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Selfcare", "selectionOrders", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\PaymentGatewayEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\SelfcarePaymentGatewayUnknownException
	 */
	public function selectionPaymentGateways(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Selfcare", "selectionPaymentGateways", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\SelfcareSubscriptionEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\SelfcareSubscriptionUnknownException
	 */
	public function selectionSubscriptions(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Selfcare", "selectionSubscriptions", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcareNotAllowedException
	 * @throws Exceptions\Sms\SelfcareOrderUnknownException
	 * @throws Exceptions\Sms\SelfcarePaymentGatewayUnknownException
	 */
	public function testOrder(string $ordersReference, Enums\Sms\SelfcareOrderStatusEnum $status): void
	{
		$this->connector->call("Selfcare", "testOrder", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\MotvUnknownErrorTryAgainException
	 */
	public function translate(string $text, string $language): string
	{
		return $this->connector->call("Selfcare", "translate", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SelfcarePaymentGatewayUnknownException
	 */
	public function updatePaymentGateway(?int $paymentGatewaysId, InputEntities\Sms\PaymentGatewayEntity $data): int
	{
		return $this->connector->call("Selfcare", "updatePaymentGateway", get_defined_vars());
	}
}

class Smtp
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 */
	public function getData(int $config_smtp_servers_id): Entities\Sms\SmtpServerEntity
	{
		return $this->connector->call("Smtp", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(bool $active = false): array
	{
		return $this->connector->call("Smtp", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\SmtpServerEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Smtp", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\ConfigUnknownSmtpServerException
	 */
	public function update(?int $config_smtp_servers_id, InputEntities\Sms\SmtpServerEntity $data): int
	{
		return $this->connector->call("Smtp", "update", get_defined_vars());
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
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\SubscriptionCannotCancelException
	 * @throws Exceptions\Sms\SubscriptionUnknownSubscriptionException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function cancelSubscription(int $viewers_bouquets_id): void
	{
		$this->connector->call("Subscription", "cancelSubscription", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\SubscriptionEntity>
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 */
	public function getCustomerSubscriptionInfo(int $viewers_id, $device_id = null, array $where = []): array
	{
		return $this->connector->call("Subscription", "getCustomerSubscriptionInfo", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 * @throws Exceptions\Sms\SubscriptionUnknownSubscriptionException
	 * @throws Exceptions\Sms\NotLoggedInException
	 */
	public function getData(int $viewers_bouquets_id): Entities\Sms\SubscriptionEntity
	{
		return $this->connector->call("Subscription", "getData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\SubscriptionUnknownSubscriptionException
	 * @throws Exceptions\Sms\SubscriptionUnknownSuspensionException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function resumeSubscription(int $viewers_bouquets_id): int
	{
		return $this->connector->call("Subscription", "resumeSubscription", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\SubscriptionCannotSuspendException
	 * @throws Exceptions\Sms\SubscriptionUnknownSubscriptionException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function suspendSubscription(int $viewers_bouquets_id): int
	{
		return $this->connector->call("Subscription", "suspendSubscription", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\NotLoggedInException
	 * @throws Exceptions\Sms\SubscriptionUnknownSubscriptionException
	 * @throws Exceptions\ApiSupport\UnathorizedException
	 */
	public function update(int $viewers_bouquets_id, string $from, string $to, string $remark): void
	{
		$this->connector->call("Subscription", "update", get_defined_vars());
	}
}

class System
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\SystemBackupNotFoundException
	 */
	public function downloadBackupFile(string $file): string
	{
		return $this->connector->call("System", "downloadBackupFile", get_defined_vars());
	}


	public function getListOfBackups(): array
	{
		return $this->connector->call("System", "getListOfBackups", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SystemRabbitmqErrorException
	 */
	public function getRabbitMQQueues(): array
	{
		return $this->connector->call("System", "getRabbitMQQueues", get_defined_vars());
	}


	public function getSupervisorProcesses(): array
	{
		return $this->connector->call("System", "getSupervisorProcesses", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SystemSupervisorFailedException
	 */
	public function restartSupervisorAll(): void
	{
		$this->connector->call("System", "restartSupervisorAll", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SystemSupervisorFailedException
	 */
	public function restartSupervisorGroup(string $group): void
	{
		$this->connector->call("System", "restartSupervisorGroup", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SystemSupervisorFailedException
	 */
	public function restartSupervisorProcess(string $process): void
	{
		$this->connector->call("System", "restartSupervisorProcess", get_defined_vars());
	}


	public function showSupervisorStderrLog(string $process, int $offset = 0, int $length = 20000): array
	{
		return $this->connector->call("System", "showSupervisorStderrLog", get_defined_vars());
	}


	public function showSupervisorStdoutLog(string $process, int $offset = 0, int $length = 20000): array
	{
		return $this->connector->call("System", "showSupervisorStdoutLog", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SystemSupervisorFailedException
	 */
	public function startSupervisorAll(): void
	{
		$this->connector->call("System", "startSupervisorAll", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SystemSupervisorFailedException
	 */
	public function startSupervisorGroup(string $group): void
	{
		$this->connector->call("System", "startSupervisorGroup", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\SystemSupervisorFailedException
	 */
	public function startSupervisorProcess(string $process): void
	{
		$this->connector->call("System", "startSupervisorProcess", get_defined_vars());
	}


	public function stopSupervisorAll(): void
	{
		$this->connector->call("System", "stopSupervisorAll", get_defined_vars());
	}


	public function stopSupervisorGroup(string $group): void
	{
		$this->connector->call("System", "stopSupervisorGroup", get_defined_vars());
	}


	public function stopSupervisorProcess(string $process): void
	{
		$this->connector->call("System", "stopSupervisorProcess", get_defined_vars());
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
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 */
	public function getData(int $groups_invoices_id): Entities\Sms\GroupsInvoiceEntity
	{
		return $this->connector->call("Template", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("Template", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\GroupsInvoiceEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Template", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 */
	public function update(?int $groups_invoices_id, InputEntities\Sms\GroupsInvoiceEntity $data): int
	{
		return $this->connector->call("Template", "update", get_defined_vars());
	}
}

class Ticket
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 */
	public function addTicket(
		int $viewers_id,
		string $tickets_note,
		int $tickets_categories_id,
		?int $tickets_departments_id = null,
	): int
	{
		return $this->connector->call("Ticket", "addTicket", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketCategoryUnknownTicketCategoryException
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 */
	public function changeTicketCategory(int $tickets_id, int $tickets_categories_id): void
	{
		$this->connector->call("Ticket", "changeTicketCategory", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketDepartmentUnknownTicketDepartmentException
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 */
	public function changeTicketDepartment(int $tickets_id, int $tickets_departments_id): void
	{
		$this->connector->call("Ticket", "changeTicketDepartment", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketPriorityUnknownTicketPriorityException
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 */
	public function changeTicketPriority(int $tickets_id, int $tickets_priorities_id): void
	{
		$this->connector->call("Ticket", "changeTicketPriority", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 */
	public function changeTicketStatus(int $tickets_id, int $tickets_status): void
	{
		$this->connector->call("Ticket", "changeTicketStatus", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketStatusErrorException
	 */
	public function changeTicketStatusesStatus(int $tickets_statuses_id, string $status): void
	{
		$this->connector->call("Ticket", "changeTicketStatusesStatus", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 * @param array<int[]> $tickets_users_id
	 */
	public function changeTicketUser(int $tickets_id, array $tickets_users_id): void
	{
		$this->connector->call("Ticket", "changeTicketUser", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 */
	public function closeTicket(int $tickets_id): void
	{
		$this->connector->call("Ticket", "closeTicket", get_defined_vars());
	}


	public function getClosedTicketStatus(): ?int
	{
		return $this->connector->call("Ticket", "getClosedTicketStatus", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 */
	public function getData(int $tickets_id): Entities\Sms\TicketEntity
	{
		return $this->connector->call("Ticket", "getData", get_defined_vars());
	}


	public function getOpenTicketStatus(): ?int
	{
		return $this->connector->call("Ticket", "getOpenTicketStatus", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\CustomerUnknownCustomerException
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @throws Exceptions\Sms\TemplateUnknownTemplateException
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 */
	public function getPrintTicket(int $tickets_id): string
	{
		return $this->connector->call("Ticket", "getPrintTicket", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\TicketsCommentEntity>
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 */
	public function getTicketComments(int $tickets_id): array
	{
		return $this->connector->call("Ticket", "getTicketComments", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketUnknownTicketFileException
	 */
	public function getTicketFile(int $tickets_file_id): Entities\Sms\TicketsFileEntity
	{
		return $this->connector->call("Ticket", "getTicketFile", get_defined_vars());
	}


	/**
	 * @return array<Entities\Sms\TicketsFileEntity>
	 */
	public function getTicketFiles(int $tickets_id): array
	{
		return $this->connector->call("Ticket", "getTicketFiles", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getTicketFilesPairs(int $tickets_id): array
	{
		return $this->connector->call("Ticket", "getTicketFilesPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 */
	public function getTicketStatus(int $tickets_statuses_id): Entities\Sms\TicketsStatusEntity
	{
		return $this->connector->call("Ticket", "getTicketStatus", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 */
	public function newTicketComment(int $tickets_id, string $tickets_comment): int
	{
		return $this->connector->call("Ticket", "newTicketComment", get_defined_vars());
	}


	public function newTicketCommentFileReference(int $tickets_id, int $tickets_comments_id, int $tickets_files_id): void
	{
		$this->connector->call("Ticket", "newTicketCommentFileReference", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 */
	public function openTicket(int $tickets_id): void
	{
		$this->connector->call("Ticket", "openTicket", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\TicketEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
		bool $assigned_tickets = false,
	): array
	{
		return $this->connector->call("Ticket", "selection", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function ticketStatusesColorsFetchPairs(): array
	{
		return $this->connector->call("Ticket", "ticketStatusesColorsFetchPairs", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function ticketStatusesFetchPairs(): array
	{
		return $this->connector->call("Ticket", "ticketStatusesFetchPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\TicketsStatusEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 */
	public function ticketStatusesSelection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("Ticket", "ticketStatusesSelection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 */
	public function updateTicketStatuses(?int $tickets_statuses_id, InputEntities\Sms\TicketsStatusEntity $data): int
	{
		return $this->connector->call("Ticket", "updateTicketStatuses", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketUnknownTicketException
	 * @throws Exceptions\Sms\TicketsUnknownTicketStatusException
	 * @throws Exceptions\Sms\TicketsCommentUnknownException
	 */
	public function uploadTicketFile(array $data, string $file, ?int $usersId = null): int
	{
		return $this->connector->call("Ticket", "uploadTicketFile", get_defined_vars());
	}
}

class TicketCategory
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\TicketCategoryUnknownTicketCategoryException
	 */
	public function getData(int $tickets_categories_id): Entities\Sms\TicketsCategoryEntity
	{
		return $this->connector->call("TicketCategory", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("TicketCategory", "getPairs", get_defined_vars());
	}


	public function getSortedData(): array
	{
		return $this->connector->call("TicketCategory", "getSortedData", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\TicketCategoryUnknownTicketCategoryException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("TicketCategory", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketCategoryUnknownTicketCategoryException
	 * @throws Exceptions\Sms\TicketCategoryCircularParentException
	 */
	public function update(?int $tickets_categories_id, InputEntities\Sms\TicketsCategoryEntity $data): int
	{
		return $this->connector->call("TicketCategory", "update", get_defined_vars());
	}
}

class TicketDepartment
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\TicketDepartmentUnknownTicketDepartmentException
	 */
	public function getData(int $departments_id): Entities\Sms\TicketsDepartmentEntity
	{
		return $this->connector->call("TicketDepartment", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("TicketDepartment", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\TicketsDepartmentEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\TicketDepartmentUnknownTicketDepartmentException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("TicketDepartment", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketDepartmentUnknownTicketDepartmentException
	 */
	public function update(?int $departments_id, InputEntities\Sms\TicketsDepartmentEntity $data): int
	{
		return $this->connector->call("TicketDepartment", "update", get_defined_vars());
	}
}

class TicketNotificationsConfig
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @return array<Entities\Sms\TicketsNotificationEntity>
	 */
	public function getAllData(): array
	{
		return $this->connector->call("TicketNotificationsConfig", "getAllData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("TicketNotificationsConfig", "getPairs", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TemplateErrorFillingException
	 * @param array<InputEntities\Sms\TicketsNotificationEntity> $data
	 */
	public function update(array $data): void
	{
		$this->connector->call("TicketNotificationsConfig", "update", get_defined_vars());
	}
}

class TicketPriority
{
	/** @var AdminConnector */
	private $connector;


	public function __construct(AdminConnector $connector)
	{
		$this->connector = $connector;
	}


	/**
	 * @throws Exceptions\Sms\TicketPriorityUnknownTicketPriorityException
	 */
	public function getData(int $tickets_priorities_id): Entities\Sms\TicketsPriorityEntity
	{
		return $this->connector->call("TicketPriority", "getData", get_defined_vars());
	}


	/**
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("TicketPriority", "getPairs", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\Sms\TicketsPriorityEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\Sms\TicketPriorityUnknownTicketPriorityException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("TicketPriority", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\Sms\TicketPriorityUnknownTicketPriorityException
	 */
	public function update(?int $tickets_priorities_id, InputEntities\Sms\TicketsPriorityEntity $data): int
	{
		return $this->connector->call("TicketPriority", "update", get_defined_vars());
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
	 * @return array<string>
	 */
	public function getAllPairs(): array
	{
		return $this->connector->call("User", "getAllPairs", get_defined_vars());
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
	 * @return array<string>
	 */
	public function getPairs(): array
	{
		return $this->connector->call("User", "getPairs", get_defined_vars());
	}


	public function getPairsForTickets(bool $returnDepartment = true): array
	{
		return $this->connector->call("User", "getPairsForTickets", get_defined_vars());
	}


	public function isUnique(?int $users_id, string $users_name): bool
	{
		return $this->connector->call("User", "isUnique", get_defined_vars());
	}


	public function login(string $username, string $password): Entities\ApiSupport\UserEntity
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


	public function saveMyProfile(array $data): void
	{
		$this->connector->call("User", "saveMyProfile", get_defined_vars());
	}


	/**
	 * @return array{rows: Entities\ApiSupport\UserEntity[], row_count: int}
	 * @throws Exceptions\ApiSupport\DatabaseSelectionException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 */
	public function selection(
		array $where = [],
		?string $orderColumn = null,
		bool $orderAscending = true,
		?int $page = null,
		?int $page_limit = null,
	): array
	{
		return $this->connector->call("User", "selection", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\InvalidRequestDataException
	 * @throws Exceptions\Sms\DealerUnknownDealerException
	 * @throws Exceptions\ApiSupport\UserDuplicateEmailException
	 * @throws Exceptions\ApiSupport\InvalidLoginAndPasswordException
	 * @throws Exceptions\ApiSupport\RoleUnknownException
	 * @throws Exceptions\ApiSupport\UserUnknownException
	 */
	public function update(?int $usersId, InputEntities\ApiSupport\UserEntity $data): int
	{
		return $this->connector->call("User", "update", get_defined_vars());
	}


	/**
	 * @throws Exceptions\ApiSupport\LoginIncorrectHeaderFormatException
	 */
	public function validateToken(): array
	{
		return $this->connector->call("User", "validateToken", get_defined_vars());
	}
}
