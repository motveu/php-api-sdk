<?php

/**
 * Generated on Thu, 30 Jul 2020 15:40:17
 * Part moTV.eu SDK integration kit
 */

namespace Motv\Sms;

class Connector extends \Motv\Connector
{
    protected $exceptions = '{"0":"UnknownErrorException","1":"SuccessException","3":"UnathorizedException","4":"UnknownModuleException","5":"UnknownMethodException","6":"MissingParameterException","7":"InvalidRequestDataException","8":"ApplicationMemoryLimitException","9":"DatabaseErrorException","10":"ParameterWrongTypeException","20":"UnknownTokenException","21":"LoginIncorrectUsernamePasswordException","22":"LoginInactiveUserException","23":"LoginInactiveRoleException","24":"LoginInactiveDealerException","25":"NotLoggedInException","26":"AuthHeaderFormatException","27":"AuthHeaderExpiredException","40":"GalleryUnknownImageException","41":"GalleryImageFileNotFoundException","50":"UserUnknownUserException","51":"UserNameNotUniqueException","60":"DealerUnknownDealerException","61":"DealerNameNotUniqueException","62":"DealerNotEnoughCreditToDeductException","63":"DealerNotEnoughCreditToAddException","64":"DealerCannotHaveInfiniteCreditException","65":"DealerCannotViewAnyCardException","66":"DealerCircularParentException","67":"DealerCannotUseWarehousingException","70":"RoleUnknownRoleException","71":"RoleDuplicateNameException","72":"RoleSameParentException","73":"RoleCircularParentException","80":"CategoryUnknownCategoryException","100":"CustomerUnknownCustomerException","101":"CustomerUnknownFileException","102":"CustomerWildSearchCriteriaException","103":"CustomerSearchTooManyException","104":"CustomerUpdateValidationErrorException","105":"CustomerUnknownContactException","106":"CustomerUnknownAddressException","107":"CustomerUnknownNoteException","108":"CustomerNoteMissingRightException","200":"ReportUnknownReportException","201":"ReportQueryErrorException","202":"ReportUnknownReportFileException","203":"ReportFileNotFoundException","204":"ReportNotAuthorizedException","205":"ReportPivotErrorException","12800":"QueryPlaygroundNotAuthorizedException","12801":"QueryPlaygroundSqlErrorException","210":"GraphUnknownGraphException","211":"GraphQueryErrorException","220":"RequestUnknownRequestException","230":"ImportCustomersUnknownBatchException","231":"ImportCustomersFileNotFoundException","232":"ImportCustomersNoColumnsFoundException","233":"ImportCustomersMixedUniqueParametersException","234":"ImportCustomersNotEnoughParameterException","235":"ImportCustomersCustomerValidationErrorException","236":"ImportCustomersGeneralErrorException","250":"InvoiceUnknownInvoiceException","251":"InvoiceAlreadyCancelledException","252":"InvoiceCannotBeRevertedException","260":"ProductUnknownProductException","270":"BouquetUnknownBouquetException","280":"GroupUnknownGroupException","290":"TemplateUnknownTemplateException","291":"TemplateErrorFillingException","300":"TicketUnknownTicketException","301":"TicketStatusErrorException","310":"TicketCategoryUnknownTicketCategoryException","311":"TicketCategoryCircularParentException","320":"TicketDepartmentUnknownTicketDepartmentException","330":"TicketPriorityUnknownTicketPriorityException","325":"TicketsUnknownTicketStatusException","550":"TicketNotificationsUknownNotificationException","551":"TicketNotificationsEmailErrorException","552":"TicketNotificationsMultipleEmailsAddressesException","340":"PaymentUnknownPaymentException","350":"CustomValueUnknownCustomValueException","351":"CustomValueQueryErrorException","360":"GroupActionUnknownGroupActionException","361":"GroupActionNotAuthorizedException","362":"GroupActionTranslateErrorException","370":"PaymentMethodUnknownPaymentMethodException","380":"ScheduleUnknownScheduleException","382":"ScheduleTokenNotSetException","400":"InvoiceNotEnoughCreditDealerException","401":"InvoiceSelectProductException","402":"InvoiceOutOfStockException","403":"InvoiceNotEnoughCreditCustomerException","404":"InvoiceProductNotAllowedException","420":"ConfigUnknownValueException","421":"ConfigUnknownSmtpServerException","422":"ConfigUnknownImapServerException","430":"LogUnknownLogException","431":"LogUnknownLogTemplateException","440":"VoucherUnknownVoucherException","441":"VoucherUsedAlreadyBySameCustomerException","442":"VoucherUsedAlreadyByDifferentCustomerException","443":"VoucherBatchNotActiveException","444":"VoucherBatchExpiredException","450":"SystemUnknownSystemException","451":"SystemUnknownCommandException","452":"SystemCommandErrorException","453":"SystemCommandExceededException","454":"SystemRabbitmqErrorException","455":"SystemSupervisorNotEnabledException","456":"SystemBackupNotEnabledException","457":"SystemBackupNotFoundException","458":"SystemSupervisorFailedException","475":"TransferDeviceErrorException","480":"DeviceUnknownDeviceException","481":"DeviceIncompatibleProductException","482":"DeviceNoDeviceFoundException","483":"DeviceTooManyDevicesFoundException","484":"DeviceIncompatibleDeviceException","500":"SubscriptionUnknownSubscriptionException","501":"SubscriptionUnknownSuspensionException","502":"SubscriptionCannotSuspendException","520":"SaleErrorException","600":"UserNotificationsUnknownNotificationException","10000":"GoldyImportTooManyDevicesException","10001":"GoldyImportCustomersNotAllColumnsException","10002":"GoldyImportCardlessNotFoundException","10003":"GoldyImportCustomersUnknownCustomerException","11000":"SafeviewDuplicateSmartcardException","11001":"SafeviewDuplicateSettopboxException","11002":"SafeviewOttUnknownSettopboxException","11003":"SafeviewOttRegistrationErrorException","11200":"BeeniusRegistrationErrorException","11201":"BeeniusRegistrationDuplicateEmailException","11202":"BeeniusRegistrationDuplicatePhoneException","11500":"ConaxDuplicateSmartcardException","11501":"ConaxDuplicateSettopboxException","12300":"ModemDuplicateIpException","1500":"EpgUnknownEpgException","1501":"EpgUnsupportedDateFormatException","1502":"EpgUnsupportedFileException","1503":"EpgSetExceptionException","1504":"EpgXmlFatalErrorException","1505":"EpgBadFileException","1506":"EpgExcelErrorException","1507":"EpgInsertErrorException","1508":"EpgUnknownEventException","1509":"EpgUnknownServiceException","1510":"EpgUnknownTransponderException","1511":"EpgUnkownSwDownloadException","1512":"EpgLiveUnknownCategoryException","1513":"EpgLiveUnknownTeamException","1514":"EpgLiveUnknownTournamentException","1515":"EpgLiveUknownEventException","1516":"EpgUknownFeaturedEventException","1517":"EpgUknonwEventImageException","1518":"EpgUnknownInserterException","1519":"EpgUnknownNetworkException","1520":"EpgSwDownloadErrorException","1521":"EpgFtpErrorException","1522":"EpgConfigMissingValueException","1523":"EpgXmltvDirException","1524":"EpgAutoprocessExceptionException","1530":"WarehouseParseErrorException","1531":"WarehouseUnsupportedFileException","1532":"WarehouseDuplicateValueException","1533":"WarehouseUnknownDeviceException","1534":"WarehouseDeviceErrorException","1700":"WarehousePairedSafeviewErrorException","1701":"WarehouseSafeviewOttErrorException","1702":"WarehousePairedConaxErrorException","1703":"WarehouseCardlessVerimatrixErrorException","1704":"WarehousePairedKingvonErrorException","1705":"WarehousePairedCryptoguardErrorException","1706":"WarehousePairedNstvErrorException","1550":"AppMessageUnknowMessageException","1551":"AppMessageUnknowBannerException","1600":"SelfcareIncorrectLoginException","1601":"SelfcareDuplicateEmailException","1602":"SelfcareDuplicateLoginException","12000":"NstvDuplicateSmartcardException","12001":"NstvDuplicateSettopboxException","12002":"NstvUnknownSmartcardException","12100":"KingvonDuplicateSmartcardException","12101":"KingvonDuplicateSettopboxException","12102":"KingvonInvalidSmartcardException","13200":"CryptoguardDuplicateSmartcardException","13201":"CryptoguardDuplicateSettopboxException","13202":"CardlessCryptoguardDuplicateSmartcardException","13203":"CryptoguardInvalidSmartcardException","12150":"GospellDuplicateSmartcardException","12151":"GospellDuplicateSettopboxException","12152":"GospellInvalidSmartcardException","12153":"GospellInvalidSettopboxException","12170":"CtiDuplicateSmartcardException","12200":"CorpusRegistrationErrorException","12250":"CardlessVerimatrixDuplicateSmartcardException","12400":"ModernTvAccountCreateFailedException","12401":"ModernTvUnknownDeviceException","16500":"FacebookUnknownResponseException","16501":"FacebookUnknownTokenException","16000":"GoogleUnknownTokenException","16001":"GoogleUnknownLoginException","16100":"TivoDuplicateSmartcardException","16101":"TivoDuplicateMacException","16102":"TivoRegistrationErrorException","12500":"MedianetSaleErrorException","12501":"MedianetDowngradeErrorException","12502":"MedianetCancelAddonFirstException","12503":"MedianetDealerNotEnoughCreditException","12504":"MedianetImportErrorException","12505":"MedianetNotAllowedCustomerRechargeException","12506":"MedianetAccountNotFoundException","12507":"MedianetUnavailableCategoryException","12508":"MedianetUnknownCasImportBatchException","12509":"MedianetNoDeviceException","12510":"MedianetCustomerPoleAssignedException","12511":"MedinaetPolesUknownAccessoryException","12513":"MedianetTicketsUknownServiceException","12514":"MedianetUknownInternalAmpException","12515":"MedianetDuplicateInternalAmpIdException","12516":"MedianetOoredooUnknownCustomerException","12517":"MedianetTicketingUnavailableCategoryException","12518":"MedianetTicketingUnavailableIslandException","12519":"MedianetTicketingUnavailableServiceException","12520":"MedianetTicketingUnavailableDepartmentException","12521":"MedianetTicketingUnknownSubcategoryException","12522":"MedianetTicketingSubcategoryErrorException","12523":"MedianetFiberDistributionUknownSubboxException","12524":"MedianetFiberDistributionUknownBoxException","12525":"MedianetFiberBuildingUknownBoxException","12526":"MedianetOoredooIncorrectParameterException","12527":"MedianetFiberUnknownPressenceException","12528":"MedianetCannotCancelSuspendedException","15239":"MedianetBillpayErrorException","15240":"MedianetOoredooSmsErrorException","12600":"MedianetSelfcareDuplicateEmailException","12601":"MedianetSelfcareIncorrectLoginException","12602":"MedianetSelfcareIncorrectAccNicException","12603":"MedianetSelfcareAccAssignedDifferentException","12604":"MedianetSelfcareAccAssignedSameException","12605":"MedianetSelfcareUnknownAccountException","12606":"MedianetSelfcareAccountNotAssignedException","12607":"MedianetSelfcareUnknownOrderException","12608":"MedianetSelfcareUnknownReceiptException","12609":"MedianetSelfcareWrongAreaException","12610":"MedianetSelfcareOrderAlreadyProcessedException","12611":"MedianetSelfcareFailedEmailException","12612":"MedianetSelfcareIncorrectCodeException","12613":"MedianetSelfcareCodeExpiredException","12650":"MedianetFoxRegistrationErrorException","12670":"MedianetOpenmitvRegistrationErrorException","12700":"MedianetSelfcareUnknownDealerException","12900":"AlbayanHashNotFoundException","12901":"AlbayanHashProcessedAlreadyException","12902":"AlbayanEmailUsedException","12903":"AlbayanUnknownEmailException","12904":"AlbayanUnknownOrderException","13000":"PsmUnknownOrderException","13001":"PsmOrderAlreadyProcessedException","13002":"PsmOoredooFailException","14000":"MotvAccountDuplicateLoginException","14001":"MotvIncorrectUsernamePasswordException","14002":"MotvUnavailableDeviceException","14003":"MotvUnknownRegistrationTokenException","14004":"MotvUnknownLoginException","14005":"MotvUnknownLostPasswordTokenException","14006":"MotvValidationErrorException","14007":"MotvUnknownPortalException","14008":"MotvInvalidPasswordFormatException","14009":"MotvDuplicateUserPortalAccessException","14010":"MotvInvalidPinFormatException","14011":"MotvUnknownErrorException","14012":"MotvUnknownDeviceException","14013":"MotvUnknownErrorTryAgainException","15000":"CreolinkUnknownOrderException","15001":"CreolinkNetworkIssueException","16502":"FacebookUknownLoginException","16600":"AbvDuplicateSmartcardException"}';

    /** @var string */
    protected $namespace = 'Sms';

    /** @var string */
    protected $headerName = 'Authorization';


    public function Batch(): Batch
    {
        return new Batch($this);
    }


    public function Bouquet(): Bouquet
    {
        return new Bouquet($this);
    }


    public function Category(): Category
    {
        return new Category($this);
    }


    public function Config(): Config
    {
        return new Config($this);
    }


    public function CustomValue(): CustomValue
    {
        return new CustomValue($this);
    }


    public function Custom_Cico(): Custom_Cico
    {
        return new Custom_Cico($this);
    }


    public function Custom_Motv(): Custom_Motv
    {
        return new Custom_Motv($this);
    }


    public function Customer(): Customer
    {
        return new Customer($this);
    }


    public function CustomerRevision(): CustomerRevision
    {
        return new CustomerRevision($this);
    }


    public function Dealer(): Dealer
    {
        return new Dealer($this);
    }


    public function Devices_Facebook(): Devices_Facebook
    {
        return new Devices_Facebook($this);
    }


    public function Devices_Google(): Devices_Google
    {
        return new Devices_Google($this);
    }


    public function Devices_Motv(): Devices_Motv
    {
        return new Devices_Motv($this);
    }


    public function Epg(): Epg
    {
        return new Epg($this);
    }


    public function EpgServer(): EpgServer
    {
        return new EpgServer($this);
    }


    public function Gallery(): Gallery
    {
        return new Gallery($this);
    }


    public function Graph(): Graph
    {
        return new Graph($this);
    }


    public function GroupAction(): GroupAction
    {
        return new GroupAction($this);
    }


    public function Imap(): Imap
    {
        return new Imap($this);
    }


    public function ImportCustomers(): ImportCustomers
    {
        return new ImportCustomers($this);
    }


    public function Integration(): Integration
    {
        return new Integration($this);
    }


    public function Invoice(): Invoice
    {
        return new Invoice($this);
    }


    public function Logger(): Logger
    {
        return new Logger($this);
    }


    public function Product(): Product
    {
        return new Product($this);
    }


    public function ProductGroup(): ProductGroup
    {
        return new ProductGroup($this);
    }


    public function Report(): Report
    {
        return new Report($this);
    }


    public function Request(): Request
    {
        return new Request($this);
    }


    public function Revision(): Revision
    {
        return new Revision($this);
    }


    public function Right(): Right
    {
        return new Right($this);
    }


    public function Role(): Role
    {
        return new Role($this);
    }


    public function Sales(): Sales
    {
        return new Sales($this);
    }


    public function Schedule(): Schedule
    {
        return new Schedule($this);
    }


    public function Smtp(): Smtp
    {
        return new Smtp($this);
    }


    public function Subscription(): Subscription
    {
        return new Subscription($this);
    }


    public function System(): System
    {
        return new System($this);
    }


    public function Template(): Template
    {
        return new Template($this);
    }


    public function Ticket(): Ticket
    {
        return new Ticket($this);
    }


    public function TicketCategory(): TicketCategory
    {
        return new TicketCategory($this);
    }


    public function TicketDepartment(): TicketDepartment
    {
        return new TicketDepartment($this);
    }


    public function TicketNotificationsConfig(): TicketNotificationsConfig
    {
        return new TicketNotificationsConfig($this);
    }


    public function TicketPriority(): TicketPriority
    {
        return new TicketPriority($this);
    }


    public function User(): User
    {
        return new User($this);
    }


    public function Voucher(): Voucher
    {
        return new Voucher($this);
    }


    public function Warehouse(): Warehouse
    {
        return new Warehouse($this);
    }
}
