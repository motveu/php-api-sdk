<?php

/**
 * Generated on Fri, 4 Nov 2022 10:51:49
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms;

class AdminConnector extends \Motv\Connector\Connector
{
	/** @var string */
	protected $namespace = 'Sms';

	/** @var string */
	protected $headerName = 'Authorization';

	/** @var array */
	protected $entitiesNamespaces = ['Motv\Connector\Sms\Entities\Sms\\', 'Motv\Connector\Sms\Entities\ApiSupport\\'];
	protected $exceptions = '{"-1":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\ApiExternalException","0":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\UnknownErrorException","3":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\UnathorizedException","4":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\UnknownModuleException","5":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\UnknownMethodException","6":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\MissingParameterException","7":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\InvalidRequestDataException","8":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ApplicationMemoryLimitException","9":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\UndefinedRightException","10":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\ParameterWrongTypeException","11":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\DatabaseErrorTryAgainException","14":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\InvalidLoginAndPasswordException","15":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DatabaseErrorException","20":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\LoginIncorrectHeaderFormatException","21":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\LoginIncorrectUsernamePasswordException","22":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\LoginInactiveUserException","23":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\LoginInactiveRoleException","24":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\LoginTokenExpiredException","25":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\NotLoggedInException","27":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\LoginInactiveDealerException","28":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\UnathorizedInternalException","29":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\DatabaseSelectionException","30":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\WhereSelectionParseException","40":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GalleryUnknownImageException","41":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GalleryImageFileNotFoundException","60":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DealerUnknownDealerException","61":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DealerNameNotUniqueException","62":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DealerNotEnoughCreditToDeductException","63":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DealerNotEnoughCreditToAddException","64":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DealerCannotHaveInfiniteCreditException","65":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DealerCannotViewAnyCardException","66":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DealerCircularParentException","67":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DealerCannotUseWarehousingException","72":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\RoleSameParentException","73":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\RoleCircularParentException","80":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CategoryUnknownCategoryException","100":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerUnknownCustomerException","101":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerUnknownFileException","102":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerWildSearchCriteriaException","103":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerSearchTooManyException","104":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerUpdateValidationErrorException","105":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerUnknownContactException","106":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerUnknownAddressException","107":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerUnknownNoteException","108":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerNoteMissingRightException","109":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomerTooManyAddressesFoundException","200":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ReportUnknownReportException","201":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ReportQueryErrorException","202":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ReportUnknownReportFileException","203":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ReportFileNotFoundException","204":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ReportNotAuthorizedException","205":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ReportPivotErrorException","210":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GraphUnknownGraphException","211":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GraphQueryErrorException","220":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\RequestUnknownRequestException","230":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ImportCustomersUnknownBatchException","231":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ImportCustomersFileNotFoundException","232":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ImportCustomersNoColumnsFoundException","233":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ImportCustomersMixedUniqueParametersException","234":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ImportCustomersNotEnoughParameterException","235":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ImportCustomersCustomerValidationErrorException","236":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ImportCustomersGeneralErrorException","250":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\InvoiceUnknownInvoiceException","251":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\InvoiceAlreadyCancelledException","252":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\InvoiceCannotBeRevertedException","260":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ProductUnknownProductException","270":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\BouquetUnknownBouquetException","280":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GroupUnknownGroupException","290":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TemplateUnknownTemplateException","291":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TemplateErrorFillingException","300":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketUnknownTicketException","301":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketStatusErrorException","302":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketUnknownTicketFileException","310":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketCategoryUnknownTicketCategoryException","311":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketCategoryCircularParentException","320":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketDepartmentUnknownTicketDepartmentException","325":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketsUnknownTicketStatusException","330":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketPriorityUnknownTicketPriorityException","350":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomValueUnknownCustomValueException","351":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CustomValueQueryErrorException","360":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GroupActionUnknownGroupActionException","361":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GroupActionNotAuthorizedException","362":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GroupActionTranslateErrorException","380":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ScheduleUnknownScheduleException","382":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ScheduleTokenNotSetException","400":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\InvoiceNotEnoughCreditDealerException","401":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\InvoiceSelectProductException","403":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\InvoiceNotEnoughCreditCustomerException","404":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\InvoiceProductNotAllowedException","421":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ConfigUnknownSmtpServerException","422":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ConfigUnknownImapServerException","430":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\LogUnknownLogException","431":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\LogUnknownLogTemplateException","440":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\VoucherUnknownVoucherException","441":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\VoucherUsedAlreadyBySameCustomerException","442":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\VoucherUsedAlreadyByDifferentCustomerException","443":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\VoucherBatchNotActiveException","444":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\VoucherBatchExpiredException","454":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SystemRabbitmqErrorException","455":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SystemSupervisorNotEnabledException","456":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SystemBackupNotEnabledException","457":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SystemBackupNotFoundException","458":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SystemSupervisorFailedException","475":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TransferDeviceErrorException","480":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DeviceUnknownDeviceException","481":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DeviceIncompatibleProductException","482":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DeviceNoDeviceFoundException","483":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DeviceTooManyDevicesFoundException","484":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DeviceIncompatibleDeviceException","500":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SubscriptionUnknownSubscriptionException","501":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SubscriptionUnknownSuspensionException","502":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SubscriptionCannotSuspendException","503":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SubscriptionCannotCancelException","520":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SaleErrorException","550":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketNotificationsUnknownNotificationException","551":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketNotificationsEmailErrorException","600":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\UserNotificationsUnknownNotificationException","1100":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\RoleUnknownException","1101":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\RoleDuplicateNameException","1500":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnknownEpgException","1501":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnsupportedDateFormatException","1502":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnsupportedFileException","1503":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgSetExceptionException","1504":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgXmlFatalErrorException","1505":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgBadFileException","1506":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgExcelErrorException","1507":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgInsertErrorException","1508":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnknownEventException","1509":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnknownServiceException","1510":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnknownTransponderException","1511":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnknownSwDownloadException","1517":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnknownEventImageException","1518":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnknownInserterException","1519":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgUnknownNetworkException","1520":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgSwDownloadErrorException","1521":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgFtpErrorException","1522":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgConfigMissingValueException","1523":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\EpgXmltvDirException","1530":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehouseParseErrorException","1531":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehouseUnsupportedFileException","1532":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehouseDuplicateValueException","1533":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehouseUnknownDeviceException","1534":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehouseDeviceErrorException","1700":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehousePairedSafeviewErrorException","1701":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehouseSafeviewOttErrorException","1702":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehousePairedConaxErrorException","1703":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehouseCardlessVerimatrixErrorException","1704":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehousePairedKingvonErrorException","1705":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehousePairedCryptoguardErrorException","1706":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehousePairedNstvErrorException","1707":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\WarehouseIrdetoErrorException","1800":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\UserUnknownException","1801":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\UserDuplicateEmailException","4400":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\DocumentationEntityNotFoundException","4401":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\DocumentationUnknownApiNameException","4402":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\DocumentationEnumNotFoundException","4403":"Motv\\\Connector\\\Sms\\\Exceptions\\\ApiSupport\\\DocumentationModelNotFoundException","10001":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GoldyImportCustomersNotAllColumnsException","11000":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SafeviewDuplicateSmartcardException","11001":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SafeviewDuplicateSettopboxException","11002":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SafeviewOttUnknownSettopboxException","11003":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SafeviewOttRegistrationErrorException","11500":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ConaxDuplicateSmartcardException","11501":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ConaxDuplicateSettopboxException","12000":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\NstvDuplicateSmartcardException","12002":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\NstvUnknownSmartcardException","12100":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\KingvonDuplicateSmartcardException","12101":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\KingvonDuplicateSettopboxException","12150":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GospellDuplicateSmartcardException","12151":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GospellDuplicateSettopboxException","12152":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GospellInvalidSmartcardException","12153":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GospellInvalidSettopboxException","12200":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CorpusRegistrationErrorException","12250":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CardlessVerimatrixDuplicateSmartcardException","12500":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetSaleErrorException","12501":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetDowngradeErrorException","12502":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetCancelAddonFirstException","12503":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetDealerNotEnoughCreditException","12504":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetImportErrorException","12505":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetNotAllowedCustomerRechargeException","12506":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetAccountNotFoundException","12507":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetUnavailableCategoryException","12508":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetUnknownCasImportBatchException","12509":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetNoDeviceException","12510":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetCustomerPoleAssignedException","12511":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetPolesUnknownAccessoryException","12513":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetTicketsUnknownServiceException","12514":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetUnknownInternalAmpException","12515":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetDuplicateInternalAmpIdException","12516":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetOoredooUnknownCustomerException","12517":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetTicketingUnavailableCategoryException","12518":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetTicketingUnavailableIslandException","12519":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetTicketingUnavailableServiceException","12520":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetTicketingUnavailableDepartmentException","12521":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetTicketingUnknownSubcategoryException","12522":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetTicketingSubcategoryErrorException","12523":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetFiberDistributionUnknownSubboxException","12524":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetFiberDistributionUnknownBoxException","12525":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetFiberBuildingUnknownBoxException","12526":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetOoredooIncorrectParameterException","12527":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetFiberUnknownPressenceException","12528":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetCannotCancelSuspendedException","12529":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\ZoneUnknownException","12530":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\BlocksUnknownException","12531":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\AmplifireUnknownException","12532":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\NodeUnknownException","12533":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketFollowUpUnknownException","12534":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TicketsCommentUnknownException","12535":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\PricingPlanUnknownException","12536":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SessionLimitUnknownException","12537":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DeviceLimitUnknownException","12600":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetSelfcareDuplicateEmailException","12601":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetSelfcareIncorrectLoginException","12605":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetSelfcareUnknownAccountException","12606":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetSelfcareAccountNotAssignedException","12607":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetSelfcareUnknownOrderException","12610":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetSelfcareOrderAlreadyProcessedException","12650":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetFoxRegistrationErrorException","12670":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetOpenmitvRegistrationErrorException","12700":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetSelfcareUnknownDealerException","12800":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\QueryPlaygroundNotAuthorizedException","12801":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\QueryPlaygroundSqlErrorException","13000":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\PsmUnknownOrderException","13001":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\PsmOrderAlreadyProcessedException","13002":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\PsmOoredooFailException","13200":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CryptoguardDuplicateSmartcardException","13201":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CryptoguardDuplicateSettopboxException","13202":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CardlessCryptoguardDuplicateSmartcardException","13203":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CryptoguardInvalidSmartcardException","14000":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvAccountDuplicateLoginException","14001":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvIncorrectUsernamePasswordException","14003":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvUnknownRegistrationTokenException","14004":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvUnknownLoginException","14005":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvUnknownLostPasswordTokenException","14006":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvValidationErrorException","14007":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvUnknownPortalException","14008":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvInvalidPasswordFormatException","14009":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvDuplicateUserPortalAccessException","14010":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvInvalidPinFormatException","14011":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvUnknownErrorException","14012":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvUnknownDeviceException","14013":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvUnknownErrorTryAgainException","15000":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CreolinkUnknownOrderException","15001":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\CreolinkNetworkIssueException","15239":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetBillpayErrorException","15240":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MedianetOoredooSmsErrorException","16000":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GoogleUnknownTokenException","16001":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GoogleUnknownLoginException","16100":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TivoDuplicateSmartcardException","16101":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TivoDuplicateMacException","16102":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TivoRegistrationErrorException","16501":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\MotvUnknownPageException","16600":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\AbvDuplicateSmartcardException","16700":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SmartlabsCreateErrorException","16701":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\SmartlabsUpdateErrorException","17500":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\FacebookUnknownResponseException","17502":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\FacebookUnknownLoginException","18000":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\IrdetoDuplicateSerialException","19000":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\AppleUnknownLoginException","19001":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\AppleRegistrationMissingEmailException","19002":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\AppleRegistrationFailIdentityTokenDecodeException","20000":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\DigicelException","20100":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\GuiException","20200":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\RequestGeneratorCancellationStopException","20300":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\TreeException","20400":"Motv\\\Connector\\\Sms\\\Exceptions\\\Sms\\\BatchUnknownException"}';


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


	public function Devices_Apple(): Devices_Apple
	{
		return new Devices_Apple($this);
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
