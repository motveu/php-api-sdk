<?php

/**
 * Generated on Fri, 24 Apr 2020 14:00:08
 * Part moTV.eu SDK integration kit
 */

namespace Motv\Sms;

class Batch
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function downloadBatch(int $batch_id): string
    {
        return $this->connector->call("Batch", "downloadBatch", get_defined_vars());
    }


    public function generateBatch(int $products_id, int $amount, string $expire_date, string $description)
    {
        $this->connector->call("Batch", "generateBatch", get_defined_vars());
    }


    public function lockBatch(int $batch_id)
    {
        $this->connector->call("Batch", "lockBatch", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Batch", "selection", get_defined_vars());
    }


    public function unlockBatch(int $batch_id)
    {
        $this->connector->call("Batch", "unlockBatch", get_defined_vars());
    }
}

class Bouquet
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $bouquets_id): array
    {
        return $this->connector->call("Bouquet", "getData", get_defined_vars());
    }


    public function getNetworkPairs(): array
    {
        return $this->connector->call("Bouquet", "getNetworkPairs", get_defined_vars());
    }


    public function getNetworkTypePairs(): array
    {
        return $this->connector->call("Bouquet", "getNetworkTypePairs", get_defined_vars());
    }


    public function getNetworkTypes(): array
    {
        return $this->connector->call("Bouquet", "getNetworkTypes", get_defined_vars());
    }


    public function getPairs(int $network = null): array
    {
        return $this->connector->call("Bouquet", "getPairs", get_defined_vars());
    }


    public function getPairsByServiceId(int $network = null): array
    {
        return $this->connector->call("Bouquet", "getPairsByServiceId", get_defined_vars());
    }


    public function getPairsWithServiceId(int $network = null): array
    {
        return $this->connector->call("Bouquet", "getPairsWithServiceId", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Bouquet", "selection", get_defined_vars());
    }


    public function update(int $bouquets_id, array $data): int
    {
        return $this->connector->call("Bouquet", "update", get_defined_vars());
    }
}

class Category
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getCustomerCategories(int $viewers_id, string $device_type = null, int $device_id = null): array
    {
        return $this->connector->call("Category", "getCustomerCategories", get_defined_vars());
    }


    public function getData(int $categories_id): array
    {
        return $this->connector->call("Category", "getData", get_defined_vars());
    }


    public function getEditableCategoriesPairs(): array
    {
        return $this->connector->call("Category", "getEditableCategoriesPairs", get_defined_vars());
    }


    public function getEditableCategoriesPairsLimitedByDealer(): array
    {
        return $this->connector->call("Category", "getEditableCategoriesPairsLimitedByDealer", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("Category", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Category", "selection", get_defined_vars());
    }


    public function update(int $categories_id, array $data): int
    {
        return $this->connector->call("Category", "update", get_defined_vars());
    }
}

class Config
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
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


    public function isSmsMotvOnly(): bool
    {
        return $this->connector->call("Config", "isSmsMotvOnly", get_defined_vars());
    }


    public function update(array $data)
    {
        $this->connector->call("Config", "update", get_defined_vars());
    }
}

class CustomValue
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getCustomValueData(int $custom_values_id)
    {
        return $this->connector->call("CustomValue", "getCustomValueData", get_defined_vars());
    }


    public function getData(int $custom_values_id): array
    {
        return $this->connector->call("CustomValue", "getData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("CustomValue", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("CustomValue", "selection", get_defined_vars());
    }


    public function update(int $custom_values_id, array $data): int
    {
        return $this->connector->call("CustomValue", "update", get_defined_vars());
    }
}

class Custom_Cico
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function cancelSubscription(int $viewers_id)
    {
        $this->connector->call("Custom_Cico", "cancelSubscription", get_defined_vars());
    }


    public function confirmOrder(int $orders_id)
    {
        $this->connector->call("Custom_Cico", "confirmOrder", get_defined_vars());
    }


    public function getAvailableProduct(int $viewers_id): array
    {
        return $this->connector->call("Custom_Cico", "getAvailableProduct", get_defined_vars());
    }


    public function getOrderUrl(int $viewers_id, string $redirect_url): string
    {
        return $this->connector->call("Custom_Cico", "getOrderUrl", get_defined_vars());
    }


    public function getSubscriptionStatus(int $viewers_id): array
    {
        return $this->connector->call("Custom_Cico", "getSubscriptionStatus", get_defined_vars());
    }
}

class Custom_Motv
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }
}

class Customer
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function addCredit(
        int $viewers_id,
        float $credit,
        string $remark,
        array $data = [],
        bool $log = true,
        array $forceInvoice = null
    ): int {
        return $this->connector->call("Customer", "addCredit", get_defined_vars());
    }


    public function attachFile(int $viewers_id, string $name, string $content): int
    {
        return $this->connector->call("Customer", "attachFile", get_defined_vars());
    }


    public function customerExists(int $viewers_id): bool
    {
        return $this->connector->call("Customer", "customerExists", get_defined_vars());
    }


    public function deductCredit(int $viewers_id, float $credit, string $remark, array $data): int
    {
        return $this->connector->call("Customer", "deductCredit", get_defined_vars());
    }


    public function deleteCustomer(int $viewers_id)
    {
        $this->connector->call("Customer", "deleteCustomer", get_defined_vars());
    }


    public function deleteCustomerAddress(int $viewers_address_id)
    {
        $this->connector->call("Customer", "deleteCustomerAddress", get_defined_vars());
    }


    public function deleteCustomerContact(int $viewers_contact_id)
    {
        $this->connector->call("Customer", "deleteCustomerContact", get_defined_vars());
    }


    public function deleteCustomerFile(int $files_id)
    {
        $this->connector->call("Customer", "deleteCustomerFile", get_defined_vars());
    }


    public function deleteCustomerNote(int $viewers_note_id)
    {
        $this->connector->call("Customer", "deleteCustomerNote", get_defined_vars());
    }


    public function downloadCustomerFile(int $files_id): array
    {
        return $this->connector->call("Customer", "downloadCustomerFile", get_defined_vars());
    }


    public function findCustomerForSales(array $search): array
    {
        return $this->connector->call("Customer", "findCustomerForSales", get_defined_vars());
    }


    public function getBillingPeriod(int $viewers_id): array
    {
        return $this->connector->call("Customer", "getBillingPeriod", get_defined_vars());
    }


    public function getCustomerAddress(int $viewers_address_id): array
    {
        return $this->connector->call("Customer", "getCustomerAddress", get_defined_vars());
    }


    public function getCustomerAddresses(int $viewers_id): array
    {
        return $this->connector->call("Customer", "getCustomerAddresses", get_defined_vars());
    }


    public function getCustomerConfig(string $language = null, bool $system = false): array
    {
        return $this->connector->call("Customer", "getCustomerConfig", get_defined_vars());
    }


    public function getCustomerContacts(int $viewers_id): array
    {
        return $this->connector->call("Customer", "getCustomerContacts", get_defined_vars());
    }


    public function getCustomerDevices(int $viewers_id): array
    {
        return $this->connector->call("Customer", "getCustomerDevices", get_defined_vars());
    }


    public function getCustomerFiles(int $viewers_id): array
    {
        return $this->connector->call("Customer", "getCustomerFiles", get_defined_vars());
    }


    public function getCustomerNote(int $viewers_note_id): array
    {
        return $this->connector->call("Customer", "getCustomerNote", get_defined_vars());
    }


    public function getData(int $viewers_id): array
    {
        return $this->connector->call("Customer", "getData", get_defined_vars());
    }


    public function noteSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Customer", "noteSelection", get_defined_vars());
    }


    public function transferDevice(string $device_type, int $device_id, array $data): int
    {
        return $this->connector->call("Customer", "transferDevice", get_defined_vars());
    }


    public function update(int $viewers_id, array $data): int
    {
        return $this->connector->call("Customer", "update", get_defined_vars());
    }


    public function updateAddress(int $viewers_id, int $viewers_address_id, array $data)
    {
        $this->connector->call("Customer", "updateAddress", get_defined_vars());
    }


    public function updateContact(int $viewers_id, int $viewers_contact_id, array $data)
    {
        $this->connector->call("Customer", "updateContact", get_defined_vars());
    }


    public function updateCustomerNote(int $viewers_note_id, array $data): int
    {
        return $this->connector->call("Customer", "updateCustomerNote", get_defined_vars());
    }
}

class CustomerRevision
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
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
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function addCredit(int $dealers_id, float $credit, string $note, array $data = []): int
    {
        return $this->connector->call("Dealer", "addCredit", get_defined_vars());
    }


    public function deductCredit(int $dealers_id, float $credit, string $note): int
    {
        return $this->connector->call("Dealer", "deductCredit", get_defined_vars());
    }


    public function getData(int $dealers_id): array
    {
        return $this->connector->call("Dealer", "getData", get_defined_vars());
    }


    public function getDataForOrgchart(): array
    {
        return $this->connector->call("Dealer", "getDataForOrgchart", get_defined_vars());
    }


    public function getDealerImage(int $dealers_id): string
    {
        return $this->connector->call("Dealer", "getDealerImage", get_defined_vars());
    }


    public function getPairs(bool $includeSelf = true): array
    {
        return $this->connector->call("Dealer", "getPairs", get_defined_vars());
    }


    public function isUnique(int $dealers_id, string $dealers_name): bool
    {
        return $this->connector->call("Dealer", "isUnique", get_defined_vars());
    }


    public function saveWhitelistedCategories(int $dealers_id, array $data)
    {
        $this->connector->call("Dealer", "saveWhitelistedCategories", get_defined_vars());
    }


    public function saveWhitelistedPortals(int $dealers_id, array $data)
    {
        $this->connector->call("Dealer", "saveWhitelistedPortals", get_defined_vars());
    }


    public function saveWhitelistedProducts(int $dealers_id, array $data)
    {
        $this->connector->call("Dealer", "saveWhitelistedProducts", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Dealer", "selection", get_defined_vars());
    }


    public function update(int $dealers_id, array $data): int
    {
        return $this->connector->call("Dealer", "update", get_defined_vars());
    }


    public function whitelistedCategories(int $dealers_id): array
    {
        return $this->connector->call("Dealer", "whitelistedCategories", get_defined_vars());
    }


    public function whitelistedPortals(int $dealers_id): array
    {
        return $this->connector->call("Dealer", "whitelistedPortals", get_defined_vars());
    }


    public function whitelistedProducts(int $dealers_id): array
    {
        return $this->connector->call("Dealer", "whitelistedProducts", get_defined_vars());
    }
}

class Devices_Facebook
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $device_id): array
    {
        return $this->connector->call("Devices_Facebook", "getData", get_defined_vars());
    }


    public function login(string $token)
    {
        return $this->connector->call("Devices_Facebook", "login", get_defined_vars());
    }


    public function register(string $token)
    {
        return $this->connector->call("Devices_Facebook", "register", get_defined_vars());
    }


    public function update(int $viewers_id, int $device_id, array $data): int
    {
        return $this->connector->call("Devices_Facebook", "update", get_defined_vars());
    }
}

class Devices_Google
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $device_id): array
    {
        return $this->connector->call("Devices_Google", "getData", get_defined_vars());
    }


    public function login(string $token)
    {
        return $this->connector->call("Devices_Google", "login", get_defined_vars());
    }


    public function register(string $token)
    {
        return $this->connector->call("Devices_Google", "register", get_defined_vars());
    }


    public function update(int $viewers_id, int $device_id, array $data): int
    {
        return $this->connector->call("Devices_Google", "update", get_defined_vars());
    }
}

class Devices_Motv
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function apiChangePassword(string $password, string $token = null, string $login = null, string $code = null)
    {
        $this->connector->call("Devices_Motv", "apiChangePassword", get_defined_vars());
    }


    public function apiChangePin($pin, string $token = null, string $login = null, $code = null): array
    {
        return $this->connector->call("Devices_Motv", "apiChangePin", get_defined_vars());
    }


    public function apiConfirmRegistration(string $token = null, string $phone = null, $code = null, bool $social = false): array
    {
        return $this->connector->call("Devices_Motv", "apiConfirmRegistration", get_defined_vars());
    }


    public function apiGetDataByLogin(string $login): array
    {
        return $this->connector->call("Devices_Motv", "apiGetDataByLogin", get_defined_vars());
    }


    public function apiLogin(string $login, string $password): array
    {
        return $this->connector->call("Devices_Motv", "apiLogin", get_defined_vars());
    }


    public function apiLoginWithMac(int $vendors_id, string $mac_address): array
    {
        return $this->connector->call("Devices_Motv", "apiLoginWithMac", get_defined_vars());
    }


    public function apiLoginWithToken(string $token): array
    {
        return $this->connector->call("Devices_Motv", "apiLoginWithToken", get_defined_vars());
    }


    public function apiRegister(int $portalId, array $data, bool $social = false): array
    {
        return $this->connector->call("Devices_Motv", "apiRegister", get_defined_vars());
    }


    public function apiRequestNewPassword(string $login)
    {
        $this->connector->call("Devices_Motv", "apiRequestNewPassword", get_defined_vars());
    }


    public function apiRequestNewPin(string $login)
    {
        $this->connector->call("Devices_Motv", "apiRequestNewPin", get_defined_vars());
    }


    public function delete(int $device_id)
    {
        $this->connector->call("Devices_Motv", "delete", get_defined_vars());
    }


    public function finishSocialRegistration(int $device_motv_id)
    {
        $this->connector->call("Devices_Motv", "finishSocialRegistration", get_defined_vars());
    }


    public function getData(int $device_id): array
    {
        return $this->connector->call("Devices_Motv", "getData", get_defined_vars());
    }


    public function getFacebookClientId(): string
    {
        return $this->connector->call("Devices_Motv", "getFacebookClientId", get_defined_vars());
    }


    public function getFacebookClientSecret(): string
    {
        return $this->connector->call("Devices_Motv", "getFacebookClientSecret", get_defined_vars());
    }


    public function getGoogleClientId(): string
    {
        return $this->connector->call("Devices_Motv", "getGoogleClientId", get_defined_vars());
    }


    public function getGoogleClientSecret(): string
    {
        return $this->connector->call("Devices_Motv", "getGoogleClientSecret", get_defined_vars());
    }


    public function getPackages(): array
    {
        return $this->connector->call("Devices_Motv", "getPackages", get_defined_vars());
    }


    public function getPortal(int $motvPortalsId): array
    {
        return $this->connector->call("Devices_Motv", "getPortal", get_defined_vars());
    }


    public function getPortalPage(int $motv_portals_pages_id): array
    {
        return $this->connector->call("Devices_Motv", "getPortalPage", get_defined_vars());
    }


    public function getPortalPageByName(int $motv_portals_pages_motv_portal_id, string $name): array
    {
        return $this->connector->call("Devices_Motv", "getPortalPageByName", get_defined_vars());
    }


    public function getPortalPairs(): array
    {
        return $this->connector->call("Devices_Motv", "getPortalPairs", get_defined_vars());
    }


    public function getPortalsUsers(): array
    {
        return $this->connector->call("Devices_Motv", "getPortalsUsers", get_defined_vars());
    }


    public function getVendors(): array
    {
        return $this->connector->call("Devices_Motv", "getVendors", get_defined_vars());
    }


    public function getWhitelistedPortalPairs(): array
    {
        return $this->connector->call("Devices_Motv", "getWhitelistedPortalPairs", get_defined_vars());
    }


    public function pageSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Devices_Motv", "pageSelection", get_defined_vars());
    }


    public function portalsSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Devices_Motv", "portalsSelection", get_defined_vars());
    }


    public function update(int $viewers_id, int $device_id, array $data): int
    {
        return $this->connector->call("Devices_Motv", "update", get_defined_vars());
    }


    public function updatePortal(int $motvPortalsId, array $data): int
    {
        return $this->connector->call("Devices_Motv", "updatePortal", get_defined_vars());
    }


    public function updatePortalPage(int $motv_portals_pages_id, array $data): int
    {
        return $this->connector->call("Devices_Motv", "updatePortalPage", get_defined_vars());
    }
}

class Epg
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function autoProccessAll()
    {
        $this->connector->call("Epg", "autoProccessAll", get_defined_vars());
    }


    public function autoProccessWebGrab(int $epg_id = null): array
    {
        return $this->connector->call("Epg", "autoProccessWebGrab", get_defined_vars());
    }


    public function autoProcessFtp(int $epg_id = null, \DateTimeImmutable $ftpDate = null): array
    {
        return $this->connector->call("Epg", "autoProcessFtp", get_defined_vars());
    }


    public function autoProcessHttp(int $epg_id = null, \DateTimeImmutable $httpDate = null): array
    {
        return $this->connector->call("Epg", "autoProcessHttp", get_defined_vars());
    }


    public function autoProcessImap(int $epg_id = null): array
    {
        return $this->connector->call("Epg", "autoProcessImap", get_defined_vars());
    }


    public function categoriesFetchPairs(): array
    {
        return $this->connector->call("Epg", "categoriesFetchPairs", get_defined_vars());
    }


    public function categoriesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "categoriesSelection", get_defined_vars());
    }


    public function copyEpgSettings(int $epg_id, string $name): int
    {
        return $this->connector->call("Epg", "copyEpgSettings", get_defined_vars());
    }


    public function createSwDownloadFolder(string $path, string $name)
    {
        $this->connector->call("Epg", "createSwDownloadFolder", get_defined_vars());
    }


    public function deleteEpgEvents(int $epg_id, string $start_date, string $end_date)
    {
        $this->connector->call("Epg", "deleteEpgEvents", get_defined_vars());
    }


    public function deleteEpgImage(int $epg_id)
    {
        $this->connector->call("Epg", "deleteEpgImage", get_defined_vars());
    }


    public function deteleEpgEvent(int $epg_event_id)
    {
        $this->connector->call("Epg", "deteleEpgEvent", get_defined_vars());
    }


    public function editCategory(int $epg_category_id, string $epg_category_name): int
    {
        return $this->connector->call("Epg", "editCategory", get_defined_vars());
    }


    public function editEpgNetwork(int $epg_networks_id, array $data): int
    {
        return $this->connector->call("Epg", "editEpgNetwork", get_defined_vars());
    }


    public function epgEventsImagesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "epgEventsImagesSelection", get_defined_vars());
    }


    public function epgInsertersSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "epgInsertersSelection", get_defined_vars());
    }


    public function epgNetworksSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "epgNetworksSelection", get_defined_vars());
    }


    public function exportEpgSettings()
    {
        $this->connector->call("Epg", "exportEpgSettings", get_defined_vars());
    }


    public function fetchPairs(): array
    {
        return $this->connector->call("Epg", "fetchPairs", get_defined_vars());
    }


    public function generateXMLTVFiles(int $epg_id, string $date_start, string $date_end)
    {
        $this->connector->call("Epg", "generateXMLTVFiles", get_defined_vars());
    }


    public function getAll(): array
    {
        return $this->connector->call("Epg", "getAll", get_defined_vars());
    }


    public function getAllEvents(\DateTime $from, \DateTime $to, int $epg_id = null): array
    {
        return $this->connector->call("Epg", "getAllEvents", get_defined_vars());
    }


    public function getAllImages(): array
    {
        return $this->connector->call("Epg", "getAllImages", get_defined_vars());
    }


    public function getAllWithCategories(): array
    {
        return $this->connector->call("Epg", "getAllWithCategories", get_defined_vars());
    }


    public function getCategories(): array
    {
        return $this->connector->call("Epg", "getCategories", get_defined_vars());
    }


    public function getCategory(int $epg_category_id): array
    {
        return $this->connector->call("Epg", "getCategory", get_defined_vars());
    }


    public function getChannelEventsImage(int $epg_events_images_id): array
    {
        return $this->connector->call("Epg", "getChannelEventsImage", get_defined_vars());
    }


    public function getChannelEventsTitle(int $epg_id): array
    {
        return $this->connector->call("Epg", "getChannelEventsTitle", get_defined_vars());
    }


    public function getCsvXlsColumns(int $epg_id): array
    {
        return $this->connector->call("Epg", "getCsvXlsColumns", get_defined_vars());
    }


    public function getData(int $epg_id, bool $categories = false): array
    {
        return $this->connector->call("Epg", "getData", get_defined_vars());
    }


    public function getDataFromCsv(int $epg_id, string $file): array
    {
        return $this->connector->call("Epg", "getDataFromCsv", get_defined_vars());
    }


    public function getDataFromXls(int $epg_id, string $file): array
    {
        return $this->connector->call("Epg", "getDataFromXls", get_defined_vars());
    }


    public function getDataFromXml(int $epg_id, string $file): array
    {
        return $this->connector->call("Epg", "getDataFromXml", get_defined_vars());
    }


    public function getDefaultChannelImage(int $epg_id): string
    {
        return $this->connector->call("Epg", "getDefaultChannelImage", get_defined_vars());
    }


    public function getEpgCategories(int $epg_id): array
    {
        return $this->connector->call("Epg", "getEpgCategories", get_defined_vars());
    }


    public function getEpgGlobalConfig(): array
    {
        return $this->connector->call("Epg", "getEpgGlobalConfig", get_defined_vars());
    }


    public function getEpgImage(int $epg_id): string
    {
        return $this->connector->call("Epg", "getEpgImage", get_defined_vars());
    }


    public function getEpgInserter(int $epg_inserters_id): array
    {
        return $this->connector->call("Epg", "getEpgInserter", get_defined_vars());
    }


    public function getEpgInserterConfig(int $epg_inserters_config_epg_inserters_id): array
    {
        return $this->connector->call("Epg", "getEpgInserterConfig", get_defined_vars());
    }


    public function getEpgInsertersPairs(): array
    {
        return $this->connector->call("Epg", "getEpgInsertersPairs", get_defined_vars());
    }


    public function getEpgNetwork(int $epg_networks_id): array
    {
        return $this->connector->call("Epg", "getEpgNetwork", get_defined_vars());
    }


    public function getEpgNetworkConfig(int $epg_networks_id): array
    {
        return $this->connector->call("Epg", "getEpgNetworkConfig", get_defined_vars());
    }


    public function getEpgNetworksPairs(): array
    {
        return $this->connector->call("Epg", "getEpgNetworksPairs", get_defined_vars());
    }


    public function getEpgsCategories(): array
    {
        return $this->connector->call("Epg", "getEpgsCategories", get_defined_vars());
    }


    public function getEpgSwDownload(int $epg_sw_download_id): array
    {
        return $this->connector->call("Epg", "getEpgSwDownload", get_defined_vars());
    }


    public function getEvent(int $epg_event_id): array
    {
        return $this->connector->call("Epg", "getEvent", get_defined_vars());
    }


    public function getEvents(int $epg_id, string $selection = null): array
    {
        return $this->connector->call("Epg", "getEvents", get_defined_vars());
    }


    public function getEventsForTimeline(array $channelsIdArr, string $start, string $end): array
    {
        return $this->connector->call("Epg", "getEventsForTimeline", get_defined_vars());
    }


    public function getEventsInfo(int $epgId): array
    {
        return $this->connector->call("Epg", "getEventsInfo", get_defined_vars());
    }


    public function getFile(string $epg_file_id): string
    {
        return $this->connector->call("Epg", "getFile", get_defined_vars());
    }


    public function getFilesInfo(int $epg_id): array
    {
        return $this->connector->call("Epg", "getFilesInfo", get_defined_vars());
    }


    public function getMwChannelEpgPairs(): array
    {
        return $this->connector->call("Epg", "getMwChannelEpgPairs", get_defined_vars());
    }


    public function getServiceData(int $services_id): array
    {
        return $this->connector->call("Epg", "getServiceData", get_defined_vars());
    }


    public function getServiceDataForValidation(int $services_transponders_id, int $services_service_id, int $services_lcn_id, int $services_id): array
    {
        return $this->connector->call("Epg", "getServiceDataForValidation", get_defined_vars());
    }


    public function getServicesPairs(): array
    {
        return $this->connector->call("Epg", "getServicesPairs", get_defined_vars());
    }


    public function getSwDownloadBox(int $epg_sw_download_boxes_id): array
    {
        return $this->connector->call("Epg", "getSwDownloadBox", get_defined_vars());
    }


    public function getSwDownloadFolders(): array
    {
        return $this->connector->call("Epg", "getSwDownloadFolders", get_defined_vars());
    }


    public function getSwDownloadManufacturer(int $epg_sw_download_manufacturers_id): array
    {
        return $this->connector->call("Epg", "getSwDownloadManufacturer", get_defined_vars());
    }


    public function getSwDownloadPath(): string
    {
        return $this->connector->call("Epg", "getSwDownloadPath", get_defined_vars());
    }


    public function getSwDownloadRelease(int $epg_sw_download_box_realeses_id): array
    {
        return $this->connector->call("Epg", "getSwDownloadRelease", get_defined_vars());
    }


    public function getSwDownloadSubdirectories(string $path, bool $fullPath = false): array
    {
        return $this->connector->call("Epg", "getSwDownloadSubdirectories", get_defined_vars());
    }


    public function getTransponderData(int $transponders_id): array
    {
        return $this->connector->call("Epg", "getTransponderData", get_defined_vars());
    }


    public function getTransponderDataForBroadcastValidation(string $transponders_broadcast_ip, int $transponders_broadcast_port, int $transponders_id): array
    {
        return $this->connector->call("Epg", "getTransponderDataForBroadcastValidation", get_defined_vars());
    }


    public function getTransponderDataForEpgValidation(string $transponders_epg_ip, int $transponders_epg_port, int $transponders_id): array
    {
        return $this->connector->call("Epg", "getTransponderDataForEpgValidation", get_defined_vars());
    }


    public function getTransponderDataForIdValidation(int $transponders_tsid, int $transpoders_onid, int $transponders_id): array
    {
        return $this->connector->call("Epg", "getTransponderDataForIdValidation", get_defined_vars());
    }


    public function getTransponderServices(int $transponders_id): array
    {
        return $this->connector->call("Epg", "getTransponderServices", get_defined_vars());
    }


    public function getXmlColumns(int $epg_id): array
    {
        return $this->connector->call("Epg", "getXmlColumns", get_defined_vars());
    }


    public function groupGenerateXmltvFiles(array $ids, string $day)
    {
        $this->connector->call("Epg", "groupGenerateXmltvFiles", get_defined_vars());
    }


    public function groupManualChecker(array $ids): array
    {
        return $this->connector->call("Epg", "groupManualChecker", get_defined_vars());
    }


    public function insertEpgCategories(int $epg_id, array $epg_categories_ids)
    {
        $this->connector->call("Epg", "insertEpgCategories", get_defined_vars());
    }


    public function logSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "logSelection", get_defined_vars());
    }


    public function manualChecker(int $epg_id, string $date = null): array
    {
        return $this->connector->call("Epg", "manualChecker", get_defined_vars());
    }


    public function refreshData(array $ids)
    {
        $this->connector->call("Epg", "refreshData", get_defined_vars());
    }


    public function refreshMcast()
    {
        $this->connector->call("Epg", "refreshMcast", get_defined_vars());
    }


    public function saveEpgFile(string $file, string $name, int $epgId): array
    {
        return $this->connector->call("Epg", "saveEpgFile", get_defined_vars());
    }


    public function saveEpgImage(int $epg_id, string $name, string $file)
    {
        $this->connector->call("Epg", "saveEpgImage", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "selection", get_defined_vars());
    }


    public function sendToMw(int $epgId)
    {
        $this->connector->call("Epg", "sendToMw", get_defined_vars());
    }


    public function serverLogSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "serverLogSelection", get_defined_vars());
    }


    public function servicesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "servicesSelection", get_defined_vars());
    }


    public function swDownloadBoxesByManufacturers(): array
    {
        return $this->connector->call("Epg", "swDownloadBoxesByManufacturers", get_defined_vars());
    }


    public function swDownloadBoxesPairs(): array
    {
        return $this->connector->call("Epg", "swDownloadBoxesPairs", get_defined_vars());
    }


    public function swDownloadBoxesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "swDownloadBoxesSelection", get_defined_vars());
    }


    public function swDownloadBoxRealeasesByBox(): array
    {
        return $this->connector->call("Epg", "swDownloadBoxRealeasesByBox", get_defined_vars());
    }


    public function swDownloadBoxRealesesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "swDownloadBoxRealesesSelection", get_defined_vars());
    }


    public function swDownloadManufacturersPairs(): array
    {
        return $this->connector->call("Epg", "swDownloadManufacturersPairs", get_defined_vars());
    }


    public function swDownloadManufacturersSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "swDownloadManufacturersSelection", get_defined_vars());
    }


    public function swDownloadReleasesPairs(): array
    {
        return $this->connector->call("Epg", "swDownloadReleasesPairs", get_defined_vars());
    }


    public function swDownloadSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "swDownloadSelection", get_defined_vars());
    }


    public function transpondersFetchPairs(): array
    {
        return $this->connector->call("Epg", "transpondersFetchPairs", get_defined_vars());
    }


    public function transpondersSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Epg", "transpondersSelection", get_defined_vars());
    }


    public function update(int $epgId, array $data): int
    {
        return $this->connector->call("Epg", "update", get_defined_vars());
    }


    public function updateChannelEventsImage(int $epg_events_images_id, array $data, string $image): int
    {
        return $this->connector->call("Epg", "updateChannelEventsImage", get_defined_vars());
    }


    public function updateCsvXlsColumns(int $epg_id, array $data)
    {
        $this->connector->call("Epg", "updateCsvXlsColumns", get_defined_vars());
    }


    public function updateEpgGlobalConfig(array $data)
    {
        $this->connector->call("Epg", "updateEpgGlobalConfig", get_defined_vars());
    }


    public function updateEpgInserter(int $epg_inserters_id, array $data): int
    {
        return $this->connector->call("Epg", "updateEpgInserter", get_defined_vars());
    }


    public function updateEpgInserterConfig(array $data)
    {
        $this->connector->call("Epg", "updateEpgInserterConfig", get_defined_vars());
    }


    public function updateEpgNetworkConfig(int $epg_networks_id, array $data)
    {
        $this->connector->call("Epg", "updateEpgNetworkConfig", get_defined_vars());
    }


    public function updateEpgSwDownload(int $epg_sw_download_id, array $data): int
    {
        return $this->connector->call("Epg", "updateEpgSwDownload", get_defined_vars());
    }


    public function updateEvent(int $epg_event_id, array $data): int
    {
        return $this->connector->call("Epg", "updateEvent", get_defined_vars());
    }


    public function updateServices(int $services_id, array $data): int
    {
        return $this->connector->call("Epg", "updateServices", get_defined_vars());
    }


    public function updateSwDownloadBox(int $epg_sw_download_boxes_id, array $data): int
    {
        return $this->connector->call("Epg", "updateSwDownloadBox", get_defined_vars());
    }


    public function updateSwDownloadManufacturer(int $epg_sw_download_manufacturers_id, array $data): int
    {
        return $this->connector->call("Epg", "updateSwDownloadManufacturer", get_defined_vars());
    }


    public function updateSwDownloadRelease(int $epg_sw_download_box_realeses_id, array $data): int
    {
        return $this->connector->call("Epg", "updateSwDownloadRelease", get_defined_vars());
    }


    public function updateTransponders(int $transponders_id, array $data): int
    {
        return $this->connector->call("Epg", "updateTransponders", get_defined_vars());
    }


    public function updateXmlColumns(int $epg_id, array $data): int
    {
        return $this->connector->call("Epg", "updateXmlColumns", get_defined_vars());
    }


    public function uploadDefaultChannelImage(int $epg_id, string $imageName, string $image)
    {
        $this->connector->call("Epg", "uploadDefaultChannelImage", get_defined_vars());
    }


    public function uploadEpgFile(string $file, string $name, int $epgId): array
    {
        return $this->connector->call("Epg", "uploadEpgFile", get_defined_vars());
    }


    public function uploadSwDownloadFiles(string $path, array $files)
    {
        $this->connector->call("Epg", "uploadSwDownloadFiles", get_defined_vars());
    }
}

class EpgServer
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function exportNetworkConfig()
    {
        $this->connector->call("EpgServer", "exportNetworkConfig", get_defined_vars());
    }


    public function logSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("EpgServer", "logSelection", get_defined_vars());
    }
}

class Gallery
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function deleteConfigImage(int $config_images_id)
    {
        $this->connector->call("Gallery", "deleteConfigImage", get_defined_vars());
    }


    public function getConfigImage(int $config_images_id): array
    {
        return $this->connector->call("Gallery", "getConfigImage", get_defined_vars());
    }


    public function getImage(int $images_id): array
    {
        return $this->connector->call("Gallery", "getImage", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("Gallery", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Gallery", "selection", get_defined_vars());
    }


    public function uploadImage(string $image, string $name): int
    {
        return $this->connector->call("Gallery", "uploadImage", get_defined_vars());
    }
}

class Graph
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $graph_id): array
    {
        return $this->connector->call("Graph", "getData", get_defined_vars());
    }


    public function getGraphData(int $graph_id): array
    {
        return $this->connector->call("Graph", "getGraphData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("Graph", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Graph", "selection", get_defined_vars());
    }


    public function update(int $graph_id, array $data): int
    {
        return $this->connector->call("Graph", "update", get_defined_vars());
    }
}

class GroupAction
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getAllowedGroupActions(): array
    {
        return $this->connector->call("GroupAction", "getAllowedGroupActions", get_defined_vars());
    }


    public function getData(int $group_action_id): array
    {
        return $this->connector->call("GroupAction", "getData", get_defined_vars());
    }


    public function getPredefinedData(string $group_action_predefined): array
    {
        return $this->connector->call("GroupAction", "getPredefinedData", get_defined_vars());
    }


    public function run(int $group_action_id, array $data = [], string $content = null, bool $checkGroupOwnership = true)
    {
        $this->connector->call("GroupAction", "run", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("GroupAction", "selection", get_defined_vars());
    }


    public function update(int $group_action_id, array $data): int
    {
        return $this->connector->call("GroupAction", "update", get_defined_vars());
    }
}

class Imap
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $config_imap_servers_id): array
    {
        return $this->connector->call("Imap", "getData", get_defined_vars());
    }


    public function getPairs(bool $active = false): array
    {
        return $this->connector->call("Imap", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Imap", "selection", get_defined_vars());
    }


    public function update(int $config_imap_servers_id, array $data): int
    {
        return $this->connector->call("Imap", "update", get_defined_vars());
    }
}

class ImportCustomers
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function downloadImportFile(int $batch_id): array
    {
        return $this->connector->call("ImportCustomers", "downloadImportFile", get_defined_vars());
    }


    public function getBatch(int $batch_id): array
    {
        return $this->connector->call("ImportCustomers", "getBatch", get_defined_vars());
    }


    public function import(string $filename, string $content): int
    {
        return $this->connector->call("ImportCustomers", "import", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("ImportCustomers", "selection", get_defined_vars());
    }
}

class Integration
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function cancel(int $viewers_id, int $products_id)
    {
        $this->connector->call("Integration", "cancel", get_defined_vars());
    }


    public function createMotvCustomer(
        string $login,
        string $password,
        string $pin = null,
        int $portals_id = null,
        string $birthday = null,
        string $email = null,
        string $phone = null,
        string $firstname = null,
        string $lastname = null,
        string $note = null,
        array $macAdresses = null
    ): int {
        return $this->connector->call("Integration", "createMotvCustomer", get_defined_vars());
    }


    public function subscribe(int $viewers_id, int $products_id): int
    {
        return $this->connector->call("Integration", "subscribe", get_defined_vars());
    }


    public function updateMotvCustomer(
        int $viewers_id,
        string $login = null,
        string $password = null,
        string $pin = null,
        string $birthday = null,
        string $email = null,
        string $phone = null,
        string $firstname = null,
        string $lastname = null,
        string $note = null,
        array $macAdresses = null
    ): int {
        return $this->connector->call("Integration", "updateMotvCustomer", get_defined_vars());
    }
}

class Invoice
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function cancelInvoice(int $invoice_id, string $note = null)
    {
        $this->connector->call("Invoice", "cancelInvoice", get_defined_vars());
    }


    public function collectInvoice(int $viewers_id, int $invoice_id): int
    {
        return $this->connector->call("Invoice", "collectInvoice", get_defined_vars());
    }


    public function getBillingHistory(int $viewers_id): array
    {
        return $this->connector->call("Invoice", "getBillingHistory", get_defined_vars());
    }


    public function getData(int $invoice_id): array
    {
        return $this->connector->call("Invoice", "getData", get_defined_vars());
    }


    public function getPrintableBillingHistory(int $viewers_id, int $template, bool $mpos = false): string
    {
        return $this->connector->call("Invoice", "getPrintableBillingHistory", get_defined_vars());
    }


    public function revertInvoice(int $invoice_id, string $remark = '')
    {
        $this->connector->call("Invoice", "revertInvoice", get_defined_vars());
    }


    public function revertReceipt(int $invoice_id, string $remark = '')
    {
        $this->connector->call("Invoice", "revertReceipt", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Invoice", "selection", get_defined_vars());
    }
}

class Logger
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getAllLogTypes(): array
    {
        return $this->connector->call("Logger", "getAllLogTypes", get_defined_vars());
    }


    public function getLogReceipts(): array
    {
        return $this->connector->call("Logger", "getLogReceipts", get_defined_vars());
    }


    public function getRequestData(int $requests_id): array
    {
        return $this->connector->call("Logger", "getRequestData", get_defined_vars());
    }


    public function printLog(int $log_id): string
    {
        return $this->connector->call("Logger", "printLog", get_defined_vars());
    }


    public function saveLogReceipts(array $logReceipts)
    {
        $this->connector->call("Logger", "saveLogReceipts", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Logger", "selection", get_defined_vars());
    }
}

class Product
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getActivePairs(): array
    {
        return $this->connector->call("Product", "getActivePairs", get_defined_vars());
    }


    public function getActiveProducts(): array
    {
        return $this->connector->call("Product", "getActiveProducts", get_defined_vars());
    }


    public function getData(int $products_id): array
    {
        return $this->connector->call("Product", "getData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("Product", "getPairs", get_defined_vars());
    }


    public function getPostpaidPairs(): array
    {
        return $this->connector->call("Product", "getPostpaidPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Product", "selection", get_defined_vars());
    }


    public function update(int $products_id, array $data): int
    {
        return $this->connector->call("Product", "update", get_defined_vars());
    }
}

class ProductGroup
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $products_groups_id): array
    {
        return $this->connector->call("ProductGroup", "getData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("ProductGroup", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("ProductGroup", "selection", get_defined_vars());
    }


    public function update(int $products_groups_id, array $data): int
    {
        return $this->connector->call("ProductGroup", "update", get_defined_vars());
    }
}

class Report
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function downloadReportFile(int $report_files_id): array
    {
        return $this->connector->call("Report", "downloadReportFile", get_defined_vars());
    }


    public function getAllColumns(): array
    {
        return $this->connector->call("Report", "getAllColumns", get_defined_vars());
    }


    public function getData(int $reports_id): array
    {
        return $this->connector->call("Report", "getData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("Report", "getPairs", get_defined_vars());
    }


    public function getPrecalculationData(int $reports_precalculations_id): array
    {
        return $this->connector->call("Report", "getPrecalculationData", get_defined_vars());
    }


    public function getReportColumns(int $reports_id): array
    {
        return $this->connector->call("Report", "getReportColumns", get_defined_vars());
    }


    public function getReportFiles(int $reports_id): array
    {
        return $this->connector->call("Report", "getReportFiles", get_defined_vars());
    }


    public function getReportLinks(int $reports_id): array
    {
        return $this->connector->call("Report", "getReportLinks", get_defined_vars());
    }


    public function getTablesNames(): array
    {
        return $this->connector->call("Report", "getTablesNames", get_defined_vars());
    }


    public function getTranslatedReportColumns(int $reports_id): array
    {
        return $this->connector->call("Report", "getTranslatedReportColumns", get_defined_vars());
    }


    public function playgroundQueryExecute(string $query): array
    {
        return $this->connector->call("Report", "playgroundQueryExecute", get_defined_vars());
    }


    public function precalculateReports(
        int $reports_precalculations_id = null,
        \Symfony\Component\Console\Output\OutputInterface $consoleOutput = null
    ) {
        $this->connector->call("Report", "precalculateReports", get_defined_vars());
    }


    public function precalculationSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Report", "precalculationSelection", get_defined_vars());
    }


    public function removePrecalculatedReport(int $reports_precalculations_id)
    {
        $this->connector->call("Report", "removePrecalculatedReport", get_defined_vars());
    }


    public function reportSelection(
        int $reports_id,
        array $columns = [],
        array $where = [],
        array $order_by = [],
        int $page = null,
        int $page_limit = null
    ): array {
        return $this->connector->call("Report", "reportSelection", get_defined_vars());
    }


    public function runPrecalculatedReport(int $reports_precalculations_id)
    {
        $this->connector->call("Report", "runPrecalculatedReport", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Report", "selection", get_defined_vars());
    }


    public function update(int $reports_id, array $data): int
    {
        return $this->connector->call("Report", "update", get_defined_vars());
    }


    public function updatePrecalculation(int $reports_precalculations_id, array $data): int
    {
        return $this->connector->call("Report", "updatePrecalculation", get_defined_vars());
    }


    public function updateReportColumns(int $reports_id, array $columns)
    {
        $this->connector->call("Report", "updateReportColumns", get_defined_vars());
    }
}

class Request
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getRequestTypes(): array
    {
        return $this->connector->call("Request", "getRequestTypes", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Request", "selection", get_defined_vars());
    }
}

class Revision
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function backupUnit(string $table, int $unit_id, array $old_data, array $new_data): int
    {
        return $this->connector->call("Revision", "backupUnit", get_defined_vars());
    }


    public function getRevisionDetails(int $revisions_id): array
    {
        return $this->connector->call("Revision", "getRevisionDetails", get_defined_vars());
    }


    public function getRevisions(string $table, int $id): array
    {
        return $this->connector->call("Revision", "getRevisions", get_defined_vars());
    }
}

class Right
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getAllRightsRoles(): array
    {
        return $this->connector->call("Right", "getAllRightsRoles", get_defined_vars());
    }


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


    public function update(array $data)
    {
        $this->connector->call("Right", "update", get_defined_vars());
    }
}

class Role
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getAllowedRoles(bool $includeSelf = false): array
    {
        return $this->connector->call("Role", "getAllowedRoles", get_defined_vars());
    }


    public function getAllPairs(): array
    {
        return $this->connector->call("Role", "getAllPairs", get_defined_vars());
    }


    public function getAllRolesDevices(): array
    {
        return $this->connector->call("Role", "getAllRolesDevices", get_defined_vars());
    }


    public function getData(int $roles_id): array
    {
        return $this->connector->call("Role", "getData", get_defined_vars());
    }


    public function getDataForOrgChart(): array
    {
        return $this->connector->call("Role", "getDataForOrgChart", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("Role", "getPairs", get_defined_vars());
    }


    public function getRoleHomepageStatistics(int $roles_id): array
    {
        return $this->connector->call("Role", "getRoleHomepageStatistics", get_defined_vars());
    }


    public function getRoleHomepageStatisticsOptions(): array
    {
        return $this->connector->call("Role", "getRoleHomepageStatisticsOptions", get_defined_vars());
    }


    public function getRolesDevices(int $roles_id): array
    {
        return $this->connector->call("Role", "getRolesDevices", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Role", "selection", get_defined_vars());
    }


    public function treeSelection(int $roles_roles_id = null): array
    {
        return $this->connector->call("Role", "treeSelection", get_defined_vars());
    }


    public function update(int $roles_id, array $data): int
    {
        return $this->connector->call("Role", "update", get_defined_vars());
    }


    public function updateRoleHomepageStatistics(int $roles_id, array $data)
    {
        $this->connector->call("Role", "updateRoleHomepageStatistics", get_defined_vars());
    }


    public function updateRolesDevices(int $roles_id, array $devices)
    {
        $this->connector->call("Role", "updateRolesDevices", get_defined_vars());
    }
}

class Sales
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getAllowedProductsForCustomer(int $viewers_id, string $device_type = null, int $device_id = null): array
    {
        return $this->connector->call("Sales", "getAllowedProductsForCustomer", get_defined_vars());
    }


    public function getInvoiceTemplate(int $invoice_number = null, int $invoice_id = null, bool $mpos = false): string
    {
        return $this->connector->call("Sales", "getInvoiceTemplate", get_defined_vars());
    }


    public function printAllInvoices(array $columns, array $where): array
    {
        return $this->connector->call("Sales", "printAllInvoices", get_defined_vars());
    }


    public function saveInvoice(
        int $viewers_id,
        array $devices,
        array $invoice_data,
        bool $mpos = false,
        bool $return_templates = true,
        bool $voucher = false
    ): array {
        return $this->connector->call("Sales", "saveInvoice", get_defined_vars());
    }
}

class Schedule
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $schedule_id): array
    {
        return $this->connector->call("Schedule", "getData", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Schedule", "selection", get_defined_vars());
    }


    public function update(int $schedule_id, array $data): int
    {
        return $this->connector->call("Schedule", "update", get_defined_vars());
    }
}

class Smtp
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $config_smtp_servers_id): array
    {
        return $this->connector->call("Smtp", "getData", get_defined_vars());
    }


    public function getPairs(bool $active = false): array
    {
        return $this->connector->call("Smtp", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Smtp", "selection", get_defined_vars());
    }


    public function update(int $config_smtp_servers_id, array $data): int
    {
        return $this->connector->call("Smtp", "update", get_defined_vars());
    }
}

class Subscription
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function cancelSubscription(int $viewers_bouquets_id)
    {
        $this->connector->call("Subscription", "cancelSubscription", get_defined_vars());
    }


    public function getCustomerSubscriptionInfo(int $viewers_id, $device_id = null, array $where = []): array
    {
        return $this->connector->call("Subscription", "getCustomerSubscriptionInfo", get_defined_vars());
    }


    public function getData(int $viewers_bouquets_id): array
    {
        return $this->connector->call("Subscription", "getData", get_defined_vars());
    }


    public function resumeSubscription(int $viewers_bouquets_id): int
    {
        return $this->connector->call("Subscription", "resumeSubscription", get_defined_vars());
    }


    public function suspendSubscription(int $viewers_bouquets_id): int
    {
        return $this->connector->call("Subscription", "suspendSubscription", get_defined_vars());
    }


    public function update(int $viewers_bouquets_id, string $from, string $to, string $remark)
    {
        $this->connector->call("Subscription", "update", get_defined_vars());
    }
}

class System
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function downloadBackupFile(string $file): string
    {
        return $this->connector->call("System", "downloadBackupFile", get_defined_vars());
    }


    public function getListOfBackups(): array
    {
        return $this->connector->call("System", "getListOfBackups", get_defined_vars());
    }


    public function getRabbitMQQueues(): array
    {
        return $this->connector->call("System", "getRabbitMQQueues", get_defined_vars());
    }


    public function getSupervisorProcesses(): array
    {
        return $this->connector->call("System", "getSupervisorProcesses", get_defined_vars());
    }


    public function restartSupervisorAll()
    {
        $this->connector->call("System", "restartSupervisorAll", get_defined_vars());
    }


    public function restartSupervisorGroup(string $group)
    {
        $this->connector->call("System", "restartSupervisorGroup", get_defined_vars());
    }


    public function restartSupervisorProcess(string $process)
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


    public function startSupervisorAll()
    {
        $this->connector->call("System", "startSupervisorAll", get_defined_vars());
    }


    public function startSupervisorGroup(string $group)
    {
        $this->connector->call("System", "startSupervisorGroup", get_defined_vars());
    }


    public function startSupervisorProcess(string $process)
    {
        $this->connector->call("System", "startSupervisorProcess", get_defined_vars());
    }


    public function stopSupervisorAll()
    {
        $this->connector->call("System", "stopSupervisorAll", get_defined_vars());
    }


    public function stopSupervisorGroup(string $group)
    {
        $this->connector->call("System", "stopSupervisorGroup", get_defined_vars());
    }


    public function stopSupervisorProcess(string $process)
    {
        $this->connector->call("System", "stopSupervisorProcess", get_defined_vars());
    }
}

class Template
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $groups_invoices_id): array
    {
        return $this->connector->call("Template", "getData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("Template", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Template", "selection", get_defined_vars());
    }


    public function update(int $groups_invoices_id, array $data): int
    {
        return $this->connector->call("Template", "update", get_defined_vars());
    }
}

class Ticket
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function addTicket(
        int $viewers_id,
        string $tickets_note,
        int $tickets_categories_id,
        int $tickets_departments_id = null
    ): int {
        return $this->connector->call("Ticket", "addTicket", get_defined_vars());
    }


    public function changeTicketCategory(int $tickets_id, int $tickets_categories_id)
    {
        $this->connector->call("Ticket", "changeTicketCategory", get_defined_vars());
    }


    public function changeTicketDepartment(int $tickets_id, int $tickets_departments_id)
    {
        $this->connector->call("Ticket", "changeTicketDepartment", get_defined_vars());
    }


    public function changeTicketPriority(int $tickets_id, int $tickets_priorities_id)
    {
        $this->connector->call("Ticket", "changeTicketPriority", get_defined_vars());
    }


    public function changeTicketStatus(int $tickets_id, int $tickets_status)
    {
        $this->connector->call("Ticket", "changeTicketStatus", get_defined_vars());
    }


    public function changeTicketStatusesStatus(int $tickets_statuses_id, string $status)
    {
        $this->connector->call("Ticket", "changeTicketStatusesStatus", get_defined_vars());
    }


    public function changeTicketUser(int $tickets_id, array $tickets_users_id)
    {
        $this->connector->call("Ticket", "changeTicketUser", get_defined_vars());
    }


    public function closeTicket(int $tickets_id)
    {
        $this->connector->call("Ticket", "closeTicket", get_defined_vars());
    }


    public function getClosedTicketStatus(): int
    {
        return $this->connector->call("Ticket", "getClosedTicketStatus", get_defined_vars());
    }


    public function getData(int $tickets_id): array
    {
        return $this->connector->call("Ticket", "getData", get_defined_vars());
    }


    public function getOpenTicketStatus(): int
    {
        return $this->connector->call("Ticket", "getOpenTicketStatus", get_defined_vars());
    }


    public function getPrintTicket(int $tickets_id): string
    {
        return $this->connector->call("Ticket", "getPrintTicket", get_defined_vars());
    }


    public function getTicketFile(int $tickets_file_id): array
    {
        return $this->connector->call("Ticket", "getTicketFile", get_defined_vars());
    }


    public function getTicketFiles(int $tickets_id): array
    {
        return $this->connector->call("Ticket", "getTicketFiles", get_defined_vars());
    }


    public function getTicketFilesPairs(int $tickets_id): array
    {
        return $this->connector->call("Ticket", "getTicketFilesPairs", get_defined_vars());
    }


    public function getTicketHistory(int $tickets_id): array
    {
        return $this->connector->call("Ticket", "getTicketHistory", get_defined_vars());
    }


    public function getTicketReferences(int $tickets_id): array
    {
        return $this->connector->call("Ticket", "getTicketReferences", get_defined_vars());
    }


    public function getTicketStatus(int $tickets_statuses_id): array
    {
        return $this->connector->call("Ticket", "getTicketStatus", get_defined_vars());
    }


    public function newTicketComment(int $tickets_id, string $tickets_comment): int
    {
        return $this->connector->call("Ticket", "newTicketComment", get_defined_vars());
    }


    public function newTicketCommentFileReference(int $tickets_id, int $tickets_comments_id, int $tickets_files_id)
    {
        $this->connector->call("Ticket", "newTicketCommentFileReference", get_defined_vars());
    }


    public function openTicket(int $tickets_id)
    {
        $this->connector->call("Ticket", "openTicket", get_defined_vars());
    }


    public function selection(
        array $columns,
        array $where = [],
        array $order_by = [],
        int $page = null,
        int $page_limit = null,
        bool $assigned_tickets = false,
        bool $closed_tickets = true
    ): array {
        return $this->connector->call("Ticket", "selection", get_defined_vars());
    }


    public function ticketStatusesColorsFetchPairs(): array
    {
        return $this->connector->call("Ticket", "ticketStatusesColorsFetchPairs", get_defined_vars());
    }


    public function ticketStatusesFetchPairs(): array
    {
        return $this->connector->call("Ticket", "ticketStatusesFetchPairs", get_defined_vars());
    }


    public function ticketStatusesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Ticket", "ticketStatusesSelection", get_defined_vars());
    }


    public function updateTicketStatuses(int $tickets_statuses_id, array $data): int
    {
        return $this->connector->call("Ticket", "updateTicketStatuses", get_defined_vars());
    }


    public function uploadTicketFile(array $data, string $file, int $usersId = null): int
    {
        return $this->connector->call("Ticket", "uploadTicketFile", get_defined_vars());
    }
}

class TicketCategory
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $tickets_categories_id): array
    {
        return $this->connector->call("TicketCategory", "getData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("TicketCategory", "getPairs", get_defined_vars());
    }


    public function getSortedData(): array
    {
        return $this->connector->call("TicketCategory", "getSortedData", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("TicketCategory", "selection", get_defined_vars());
    }


    public function update(int $tickets_categories_id, array $data): int
    {
        return $this->connector->call("TicketCategory", "update", get_defined_vars());
    }
}

class TicketDepartment
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $departments_id): array
    {
        return $this->connector->call("TicketDepartment", "getData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("TicketDepartment", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("TicketDepartment", "selection", get_defined_vars());
    }


    public function update(int $departments_id, array $data): int
    {
        return $this->connector->call("TicketDepartment", "update", get_defined_vars());
    }
}

class TicketNotificationsConfig
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getAllData(): array
    {
        return $this->connector->call("TicketNotificationsConfig", "getAllData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("TicketNotificationsConfig", "getPairs", get_defined_vars());
    }


    public function update(array $data)
    {
        $this->connector->call("TicketNotificationsConfig", "update", get_defined_vars());
    }
}

class TicketPriority
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getData(int $tickets_priorities_id): array
    {
        return $this->connector->call("TicketPriority", "getData", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("TicketPriority", "getPairs", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("TicketPriority", "selection", get_defined_vars());
    }


    public function update(int $tickets_priorities_id, array $data): int
    {
        return $this->connector->call("TicketPriority", "update", get_defined_vars());
    }
}

class User
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getAllPairs(): array
    {
        return $this->connector->call("User", "getAllPairs", get_defined_vars());
    }


    public function getData(int $users_id): array
    {
        return $this->connector->call("User", "getData", get_defined_vars());
    }


    public function getHomepageLayout(): array
    {
        return $this->connector->call("User", "getHomepageLayout", get_defined_vars());
    }


    public function getPairs(): array
    {
        return $this->connector->call("User", "getPairs", get_defined_vars());
    }


    public function getPairsForTickets(bool $returnDepartment = true): array
    {
        return $this->connector->call("User", "getPairsForTickets", get_defined_vars());
    }


    public function getUserNotifications(): array
    {
        return $this->connector->call("User", "getUserNotifications", get_defined_vars());
    }


    public function isUnique(int $users_id, string $users_name): bool
    {
        return $this->connector->call("User", "isUnique", get_defined_vars());
    }


    public function login(string $username, string $password): array
    {
        return $this->connector->call("User", "login", get_defined_vars());
    }


    public function notificationsSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("User", "notificationsSelection", get_defined_vars());
    }


    public function saveHomepageLayout(string $gridster)
    {
        $this->connector->call("User", "saveHomepageLayout", get_defined_vars());
    }


    public function saveMyProfile(array $data)
    {
        $this->connector->call("User", "saveMyProfile", get_defined_vars());
    }


    public function selection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("User", "selection", get_defined_vars());
    }


    public function update(int $users_id, array $data): int
    {
        return $this->connector->call("User", "update", get_defined_vars());
    }


    public function updateNotificationsViewStatus(array $ids)
    {
        $this->connector->call("User", "updateNotificationsViewStatus", get_defined_vars());
    }


    public function updateNotificationViewStatus(int $users_notifications_id)
    {
        $this->connector->call("User", "updateNotificationViewStatus", get_defined_vars());
    }


    public function validateToken(): array
    {
        return $this->connector->call("User", "validateToken", get_defined_vars());
    }
}

class Voucher
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function getDataByVoucherNumber(int $voucher_number = null, int $voucher_serial = null): array
    {
        return $this->connector->call("Voucher", "getDataByVoucherNumber", get_defined_vars());
    }


    public function useVoucher(int $viewers_id, string $device_type, int $device_id, int $voucher_number)
    {
        $this->connector->call("Voucher", "useVoucher", get_defined_vars());
    }
}

class Warehouse
{
    /** @var \Motv\Sms\Connector */
    private $connector;


    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }


    public function allDevicesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Warehouse", "allDevicesSelection", get_defined_vars());
    }


    public function changeDevicesDealer(array $devicesIds, int $dealerId)
    {
        $this->connector->call("Warehouse", "changeDevicesDealer", get_defined_vars());
    }


    public function changeDevicesDealerFile(string $file, array $data): array
    {
        return $this->connector->call("Warehouse", "changeDevicesDealerFile", get_defined_vars());
    }


    public function dealerDevicesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Warehouse", "dealerDevicesSelection", get_defined_vars());
    }


    public function devicesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Warehouse", "devicesSelection", get_defined_vars());
    }


    public function getCasConfig(): array
    {
        return $this->connector->call("Warehouse", "getCasConfig", get_defined_vars());
    }


    public function getCasOptions(): array
    {
        return $this->connector->call("Warehouse", "getCasOptions", get_defined_vars());
    }


    public function importWarehouseDealerDevices(array $data, string $file)
    {
        $this->connector->call("Warehouse", "importWarehouseDealerDevices", get_defined_vars());
    }


    public function logSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Warehouse", "logSelection", get_defined_vars());
    }


    public function updateCasConfig(array $data)
    {
        $this->connector->call("Warehouse", "updateCasConfig", get_defined_vars());
    }


    public function warehouseDealerDevicesSelection(array $columns, array $where = [], array $order_by = [], int $page = null, int $page_limit = null): array
    {
        return $this->connector->call("Warehouse", "warehouseDealerDevicesSelection", get_defined_vars());
    }


    public function warehouseGetAvailableDevicesCount(string $cas, string $type, int $dealersId = null): array
    {
        return $this->connector->call("Warehouse", "warehouseGetAvailableDevicesCount", get_defined_vars());
    }


    public function warehouseGetDealerDevices(int $dealerId, bool $order = false): array
    {
        return $this->connector->call("Warehouse", "warehouseGetDealerDevices", get_defined_vars());
    }
}
