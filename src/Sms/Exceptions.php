<?php

/**
 * Generated on Fri, 22 Nov 2019 13:48:24
 * Part moTV.eu SDK integration kit
 */

namespace Motv\Sms;

class ApiException extends \Exception implements \Throwable
{
	protected $code;

	protected $response;


	public function getResponse()
	{
		return $this->response;
	}


	public function __construct($response)
	{
		parent::__construct('', $this->code);
				$this->response = $response;
	}
}

class UnknownApiException extends ApiException
{
}

class UnknownErrorException extends ApiException
{
	protected $code = 0;


}

class SuccessException extends ApiException
{
	protected $code = 1;


}

class UnathorizedException extends ApiException
{
	protected $code = 3;


}

class UnknownModuleException extends ApiException
{
	protected $code = 4;


}

class UnknownMethodException extends ApiException
{
	protected $code = 5;


}

class MissingParameterException extends ApiException
{
	protected $code = 6;


}

class InvalidRequestDataException extends ApiException
{
	protected $code = 7;


}

class ApplicationMemoryLimitException extends ApiException
{
	protected $code = 8;


}

class DatabaseErrorException extends ApiException
{
	protected $code = 9;


}

class ParameterWrongTypeException extends ApiException
{
	protected $code = 10;


}

class UnknownTokenException extends ApiException
{
	protected $code = 20;


}

class LoginIncorrectUsernamePasswordException extends ApiException
{
	protected $code = 21;


}

class LoginInactiveUserException extends ApiException
{
	protected $code = 22;


}

class LoginInactiveRoleException extends ApiException
{
	protected $code = 23;


}

class LoginInactiveDealerException extends ApiException
{
	protected $code = 24;


}

class NotLoggedInException extends ApiException
{
	protected $code = 25;


}

class AuthHeaderFormatException extends ApiException
{
	protected $code = 26;


}

class AuthHeaderExpiredException extends ApiException
{
	protected $code = 27;


}

class GalleryUnknownImageException extends ApiException
{
	protected $code = 40;


}

class GalleryImageFileNotFoundException extends ApiException
{
	protected $code = 41;


}

class UserUnknownUserException extends ApiException
{
	protected $code = 50;


}

class UserNameNotUniqueException extends ApiException
{
	protected $code = 51;


}

class DealerUnknownDealerException extends ApiException
{
	protected $code = 60;


}

class DealerNameNotUniqueException extends ApiException
{
	protected $code = 61;


}

class DealerNotEnoughCreditToDeductException extends ApiException
{
	protected $code = 62;


}

class DealerNotEnoughCreditToAddException extends ApiException
{
	protected $code = 63;


}

class DealerCannotHaveInfiniteCreditException extends ApiException
{
	protected $code = 64;


}

class DealerCannotViewAnyCardException extends ApiException
{
	protected $code = 65;


}

class DealerCircularParentException extends ApiException
{
	protected $code = 66;


}

class DealerCannotUseWarehousingException extends ApiException
{
	protected $code = 67;


}

class RoleUnknownRoleException extends ApiException
{
	protected $code = 70;


}

class RoleDuplicateNameException extends ApiException
{
	protected $code = 71;


}

class RoleSameParentException extends ApiException
{
	protected $code = 72;


}

class RoleCircularParentException extends ApiException
{
	protected $code = 73;


}

class CategoryUnknownCategoryException extends ApiException
{
	protected $code = 80;


}

class CustomerUnknownCustomerException extends ApiException
{
	protected $code = 100;


}

class CustomerUnknownFileException extends ApiException
{
	protected $code = 101;


}

class CustomerWildSearchCriteriaException extends ApiException
{
	protected $code = 102;


}

class CustomerSearchTooManyException extends ApiException
{
	protected $code = 103;


}

class CustomerUpdateValidationErrorException extends ApiException
{
	protected $code = 104;


}

class CustomerUnknownContactException extends ApiException
{
	protected $code = 105;


}

class CustomerUnknownAddressException extends ApiException
{
	protected $code = 106;


}

class CustomerUnknownNoteException extends ApiException
{
	protected $code = 107;


}

class CustomerNoteMissingRightException extends ApiException
{
	protected $code = 108;


}

class ReportUnknownReportException extends ApiException
{
	protected $code = 200;


}

class ReportQueryErrorException extends ApiException
{
	protected $code = 201;


}

class ReportUnknownReportFileException extends ApiException
{
	protected $code = 202;


}

class ReportFileNotFoundException extends ApiException
{
	protected $code = 203;


}

class ReportNotAuthorizedException extends ApiException
{
	protected $code = 204;


}

class ReportPivotErrorException extends ApiException
{
	protected $code = 205;


}

class QueryPlaygroundNotAuthorizedException extends ApiException
{
	protected $code = 12800;


}

class QueryPlaygroundSqlErrorException extends ApiException
{
	protected $code = 12801;


}

class GraphUnknownGraphException extends ApiException
{
	protected $code = 210;


}

class GraphQueryErrorException extends ApiException
{
	protected $code = 211;


}

class RequestUnknownRequestException extends ApiException
{
	protected $code = 220;


}

class ImportCustomersUnknownBatchException extends ApiException
{
	protected $code = 230;


}

class ImportCustomersFileNotFoundException extends ApiException
{
	protected $code = 231;


}

class ImportCustomersNoColumnsFoundException extends ApiException
{
	protected $code = 232;


}

class ImportCustomersMixedUniqueParametersException extends ApiException
{
	protected $code = 233;


}

class ImportCustomersNotEnoughParameterException extends ApiException
{
	protected $code = 234;


}

class ImportCustomersCustomerValidationErrorException extends ApiException
{
	protected $code = 235;


}

class ImportCustomersGeneralErrorException extends ApiException
{
	protected $code = 236;


}

class InvoiceUnknownInvoiceException extends ApiException
{
	protected $code = 250;


}

class InvoiceAlreadyCancelledException extends ApiException
{
	protected $code = 251;


}

class InvoiceCannotBeRevertedException extends ApiException
{
	protected $code = 252;


}

class ProductUnknownProductException extends ApiException
{
	protected $code = 260;


}

class BouquetUnknownBouquetException extends ApiException
{
	protected $code = 270;


}

class GroupUnknownGroupException extends ApiException
{
	protected $code = 280;


}

class TemplateUnknownTemplateException extends ApiException
{
	protected $code = 290;


}

class TemplateErrorFillingException extends ApiException
{
	protected $code = 291;


}

class TicketUnknownTicketException extends ApiException
{
	protected $code = 300;


}

class TicketStatusErrorException extends ApiException
{
	protected $code = 301;


}

class TicketCategoryUnknownTicketCategoryException extends ApiException
{
	protected $code = 310;


}

class TicketCategoryCircularParentException extends ApiException
{
	protected $code = 311;


}

class TicketDepartmentUnknownTicketDepartmentException extends ApiException
{
	protected $code = 320;


}

class TicketPriorityUnknownTicketPriorityException extends ApiException
{
	protected $code = 330;


}

class TicketsUnknownTicketStatusException extends ApiException
{
	protected $code = 325;


}

class TicketNotificationsUknownNotificationException extends ApiException
{
	protected $code = 550;


}

class TicketNotificationsEmailErrorException extends ApiException
{
	protected $code = 551;


}

class TicketNotificationsMultipleEmailsAddressesException extends ApiException
{
	protected $code = 552;


}

class PaymentUnknownPaymentException extends ApiException
{
	protected $code = 340;


}

class CustomValueUnknownCustomValueException extends ApiException
{
	protected $code = 350;


}

class CustomValueQueryErrorException extends ApiException
{
	protected $code = 351;


}

class GroupActionUnknownGroupActionException extends ApiException
{
	protected $code = 360;


}

class GroupActionNotAuthorizedException extends ApiException
{
	protected $code = 361;


}

class GroupActionTranslateErrorException extends ApiException
{
	protected $code = 362;


}

class PaymentMethodUnknownPaymentMethodException extends ApiException
{
	protected $code = 370;


}

class ScheduleUnknownScheduleException extends ApiException
{
	protected $code = 380;


}

class ScheduleTokenNotSetException extends ApiException
{
	protected $code = 382;


}

class InvoiceNotEnoughCreditDealerException extends ApiException
{
	protected $code = 400;


}

class InvoiceSelectProductException extends ApiException
{
	protected $code = 401;


}

class InvoiceOutOfStockException extends ApiException
{
	protected $code = 402;


}

class InvoiceNotEnoughCreditCustomerException extends ApiException
{
	protected $code = 403;


}

class InvoiceProductNotAllowedException extends ApiException
{
	protected $code = 404;


}

class ConfigUnknownValueException extends ApiException
{
	protected $code = 420;


}

class ConfigUnknownSmtpServerException extends ApiException
{
	protected $code = 421;


}

class ConfigUnknownImapServerException extends ApiException
{
	protected $code = 422;


}

class LogUnknownLogException extends ApiException
{
	protected $code = 430;


}

class LogUnknownLogTemplateException extends ApiException
{
	protected $code = 431;


}

class VoucherUnknownVoucherException extends ApiException
{
	protected $code = 440;


}

class VoucherUsedAlreadyBySameCustomerException extends ApiException
{
	protected $code = 441;


}

class VoucherUsedAlreadyByDifferentCustomerException extends ApiException
{
	protected $code = 442;


}

class VoucherBatchNotActiveException extends ApiException
{
	protected $code = 443;


}

class VoucherBatchExpiredException extends ApiException
{
	protected $code = 444;


}

class SystemUnknownSystemException extends ApiException
{
	protected $code = 450;


}

class SystemUnknownCommandException extends ApiException
{
	protected $code = 451;


}

class SystemCommandErrorException extends ApiException
{
	protected $code = 452;


}

class SystemCommandExceededException extends ApiException
{
	protected $code = 453;


}

class SystemRabbitmqErrorException extends ApiException
{
	protected $code = 454;


}

class SystemSupervisorNotEnabledException extends ApiException
{
	protected $code = 455;


}

class SystemBackupNotEnabledException extends ApiException
{
	protected $code = 456;


}

class SystemBackupNotFoundException extends ApiException
{
	protected $code = 457;


}

class SystemSupervisorFailedException extends ApiException
{
	protected $code = 458;


}

class TransferDeviceErrorException extends ApiException
{
	protected $code = 475;


}

class DeviceUnknownDeviceException extends ApiException
{
	protected $code = 480;


}

class DeviceIncompatibleProductException extends ApiException
{
	protected $code = 481;


}

class DeviceNoDeviceFoundException extends ApiException
{
	protected $code = 482;


}

class DeviceTooManyDevicesFoundException extends ApiException
{
	protected $code = 483;


}

class DeviceIncompatibleDeviceException extends ApiException
{
	protected $code = 484;


}

class SubscriptionUnknownSubscriptionException extends ApiException
{
	protected $code = 500;


}

class SubscriptionUnknownSuspensionException extends ApiException
{
	protected $code = 501;


}

class SubscriptionCannotSuspendException extends ApiException
{
	protected $code = 502;


}

class SaleErrorException extends ApiException
{
	protected $code = 520;


}

class UserNotificationsUnknownNotificationException extends ApiException
{
	protected $code = 600;


}

class GoldyImportTooManyDevicesException extends ApiException
{
	protected $code = 10000;


}

class GoldyImportCustomersNotAllColumnsException extends ApiException
{
	protected $code = 10001;


}

class GoldyImportCardlessNotFoundException extends ApiException
{
	protected $code = 10002;


}

class GoldyImportCustomersUnknownCustomerException extends ApiException
{
	protected $code = 10003;


}

class SafeviewDuplicateSmartcardException extends ApiException
{
	protected $code = 11000;


}

class SafeviewDuplicateSettopboxException extends ApiException
{
	protected $code = 11001;


}

class SafeviewOttUnknownSettopboxException extends ApiException
{
	protected $code = 11002;


}

class SafeviewOttRegistrationErrorException extends ApiException
{
	protected $code = 11003;


}

class BeeniusRegistrationErrorException extends ApiException
{
	protected $code = 11200;


}

class BeeniusRegistrationDuplicateEmailException extends ApiException
{
	protected $code = 11201;


}

class BeeniusRegistrationDuplicatePhoneException extends ApiException
{
	protected $code = 11202;


}

class ConaxDuplicateSmartcardException extends ApiException
{
	protected $code = 11500;


}

class ConaxDuplicateSettopboxException extends ApiException
{
	protected $code = 11501;


}

class ModemDuplicateIpException extends ApiException
{
	protected $code = 12300;


}

class EpgUnknownEpgException extends ApiException
{
	protected $code = 1500;


}

class EpgUnsupportedDateFormatException extends ApiException
{
	protected $code = 1501;


}

class EpgUnsupportedFileException extends ApiException
{
	protected $code = 1502;


}

class EpgSetExceptionException extends ApiException
{
	protected $code = 1503;


}

class EpgXmlFatalErrorException extends ApiException
{
	protected $code = 1504;


}

class EpgBadFileException extends ApiException
{
	protected $code = 1505;


}

class EpgExcelErrorException extends ApiException
{
	protected $code = 1506;


}

class EpgInsertErrorException extends ApiException
{
	protected $code = 1507;


}

class EpgUnknownEventException extends ApiException
{
	protected $code = 1508;


}

class EpgUnknownServiceException extends ApiException
{
	protected $code = 1509;


}

class EpgUnknownTransponderException extends ApiException
{
	protected $code = 1510;


}

class EpgUnkownSwDownloadException extends ApiException
{
	protected $code = 1511;


}

class EpgLiveUnknownCategoryException extends ApiException
{
	protected $code = 1512;


}

class EpgLiveUnknownTeamException extends ApiException
{
	protected $code = 1513;


}

class EpgLiveUnknownTournamentException extends ApiException
{
	protected $code = 1514;


}

class EpgLiveUknownEventException extends ApiException
{
	protected $code = 1515;


}

class EpgUknownFeaturedEventException extends ApiException
{
	protected $code = 1516;


}

class EpgUknonwEventImageException extends ApiException
{
	protected $code = 1517;


}

class EpgUnknownInserterException extends ApiException
{
	protected $code = 1518;


}

class EpgUnknownNetworkException extends ApiException
{
	protected $code = 1519;


}

class EpgSwDownloadErrorException extends ApiException
{
	protected $code = 1520;


}

class EpgFtpErrorException extends ApiException
{
	protected $code = 1521;


}

class EpgConfigMissingValueException extends ApiException
{
	protected $code = 1522;


}

class EpgXmltvDirException extends ApiException
{
	protected $code = 1523;


}

class EpgAutoprocessExceptionException extends ApiException
{
	protected $code = 1524;


}

class WarehouseParseErrorException extends ApiException
{
	protected $code = 1530;


}

class WarehouseUnsupportedFileException extends ApiException
{
	protected $code = 1531;


}

class WarehouseDuplicateValueException extends ApiException
{
	protected $code = 1532;


}

class WarehouseUnknownDeviceException extends ApiException
{
	protected $code = 1533;


}

class WarehouseDeviceErrorException extends ApiException
{
	protected $code = 1534;


}

class WarehousePairedSafeviewErrorException extends ApiException
{
	protected $code = 1700;


}

class WarehouseSafeviewOttErrorException extends ApiException
{
	protected $code = 1701;


}

class WarehousePairedConaxErrorException extends ApiException
{
	protected $code = 1702;


}

class WarehouseCardlessVerimatrixErrorException extends ApiException
{
	protected $code = 1703;


}

class WarehousePairedKingvonErrorException extends ApiException
{
	protected $code = 1704;


}

class WarehousePairedCryptoguardErrorException extends ApiException
{
	protected $code = 1705;


}

class WarehousePairedNstvErrorException extends ApiException
{
	protected $code = 1706;


}

class AppMessageUnknowMessageException extends ApiException
{
	protected $code = 1550;


}

class AppMessageUnknowBannerException extends ApiException
{
	protected $code = 1551;


}

class SelfcareIncorrectLoginException extends ApiException
{
	protected $code = 1600;


}

class SelfcareDuplicateEmailException extends ApiException
{
	protected $code = 1601;


}

class SelfcareDuplicateLoginException extends ApiException
{
	protected $code = 1602;


}

class NstvDuplicateSmartcardException extends ApiException
{
	protected $code = 12000;


}

class NstvDuplicateSettopboxException extends ApiException
{
	protected $code = 12001;


}

class NstvUnknownSmartcardException extends ApiException
{
	protected $code = 12002;


}

class KingvonDuplicateSmartcardException extends ApiException
{
	protected $code = 12100;


}

class KingvonDuplicateSettopboxException extends ApiException
{
	protected $code = 12101;


}

class KingvonInvalidSmartcardException extends ApiException
{
	protected $code = 12102;


}

class CryptoguardDuplicateSmartcardException extends ApiException
{
	protected $code = 13200;


}

class CryptoguardDuplicateSettopboxException extends ApiException
{
	protected $code = 13201;


}

class CardlessCryptoguardDuplicateSmartcardException extends ApiException
{
	protected $code = 13202;


}

class CryptoguardInvalidSmartcardException extends ApiException
{
	protected $code = 13203;


}

class GospellDuplicateSmartcardException extends ApiException
{
	protected $code = 12150;


}

class GospellDuplicateSettopboxException extends ApiException
{
	protected $code = 12151;


}

class GospellInvalidSmartcardException extends ApiException
{
	protected $code = 12152;


}

class GospellInvalidSettopboxException extends ApiException
{
	protected $code = 12153;


}

class CtiDuplicateSmartcardException extends ApiException
{
	protected $code = 12170;


}

class CorpusRegistrationErrorException extends ApiException
{
	protected $code = 12200;


}

class CardlessVerimatrixDuplicateSmartcardException extends ApiException
{
	protected $code = 12250;


}

class ModernTvAccountCreateFailedException extends ApiException
{
	protected $code = 12400;


}

class ModernTvUnknownDeviceException extends ApiException
{
	protected $code = 12401;


}

class FacebookUnknownResponseException extends ApiException
{
	protected $code = 16500;


}

class FacebookUnknownTokenException extends ApiException
{
	protected $code = 16501;


}

class GoogleUnknownTokenException extends ApiException
{
	protected $code = 16000;


}

class GoogleUnknownLoginException extends ApiException
{
	protected $code = 16001;


}

class TivoDuplicateSmartcardException extends ApiException
{
	protected $code = 16100;


}

class TivoDuplicateMacException extends ApiException
{
	protected $code = 16101;


}

class TivoRegistrationErrorException extends ApiException
{
	protected $code = 16102;


}

class MedianetSaleErrorException extends ApiException
{
	protected $code = 12500;


}

class MedianetDowngradeErrorException extends ApiException
{
	protected $code = 12501;


}

class MedianetCancelAddonFirstException extends ApiException
{
	protected $code = 12502;


}

class MedianetDealerNotEnoughCreditException extends ApiException
{
	protected $code = 12503;


}

class MedianetImportErrorException extends ApiException
{
	protected $code = 12504;


}

class MedianetNotAllowedCustomerRechargeException extends ApiException
{
	protected $code = 12505;


}

class MedianetAccountNotFoundException extends ApiException
{
	protected $code = 12506;


}

class MedianetUnavailableCategoryException extends ApiException
{
	protected $code = 12507;


}

class MedianetUnknownCasImportBatchException extends ApiException
{
	protected $code = 12508;


}

class MedianetNoDeviceException extends ApiException
{
	protected $code = 12509;


}

class MedianetCustomerPoleAssignedException extends ApiException
{
	protected $code = 12510;


}

class MedinaetPolesUknownAccessoryException extends ApiException
{
	protected $code = 12511;


}

class MedianetTicketsUknownServiceException extends ApiException
{
	protected $code = 12513;


}

class MedianetUknownInternalAmpException extends ApiException
{
	protected $code = 12514;


}

class MedianetDuplicateInternalAmpIdException extends ApiException
{
	protected $code = 12515;


}

class MedianetOoredooUnknownCustomerException extends ApiException
{
	protected $code = 12516;


}

class MedianetTicketingUnavailableCategoryException extends ApiException
{
	protected $code = 12517;


}

class MedianetTicketingUnavailableIslandException extends ApiException
{
	protected $code = 12518;


}

class MedianetTicketingUnavailableServiceException extends ApiException
{
	protected $code = 12519;


}

class MedianetTicketingUnavailableDepartmentException extends ApiException
{
	protected $code = 12520;


}

class MedianetTicketingUnknownSubcategoryException extends ApiException
{
	protected $code = 12521;


}

class MedianetTicketingSubcategoryErrorException extends ApiException
{
	protected $code = 12522;


}

class MedianetFiberDistributionUknownSubboxException extends ApiException
{
	protected $code = 12523;


}

class MedianetFiberDistributionUknownBoxException extends ApiException
{
	protected $code = 12524;


}

class MedianetFiberBuildingUknownBoxException extends ApiException
{
	protected $code = 12525;


}

class MedianetOoredooIncorrectParameterException extends ApiException
{
	protected $code = 12526;


}

class MedianetFiberUnknownPressenceException extends ApiException
{
	protected $code = 12527;


}

class MedianetCannotCancelSuspendedException extends ApiException
{
	protected $code = 12528;


}

class MedianetBillpayErrorException extends ApiException
{
	protected $code = 15239;


}

class MedianetOoredooSmsErrorException extends ApiException
{
	protected $code = 15240;


}

class MedianetSelfcareDuplicateEmailException extends ApiException
{
	protected $code = 12600;


}

class MedianetSelfcareIncorrectLoginException extends ApiException
{
	protected $code = 12601;


}

class MedianetSelfcareIncorrectAccNicException extends ApiException
{
	protected $code = 12602;


}

class MedianetSelfcareAccAssignedDifferentException extends ApiException
{
	protected $code = 12603;


}

class MedianetSelfcareAccAssignedSameException extends ApiException
{
	protected $code = 12604;


}

class MedianetSelfcareUnknownAccountException extends ApiException
{
	protected $code = 12605;


}

class MedianetSelfcareAccountNotAssignedException extends ApiException
{
	protected $code = 12606;


}

class MedianetSelfcareUnknownOrderException extends ApiException
{
	protected $code = 12607;


}

class MedianetSelfcareUnknownReceiptException extends ApiException
{
	protected $code = 12608;


}

class MedianetSelfcareWrongAreaException extends ApiException
{
	protected $code = 12609;


}

class MedianetSelfcareOrderAlreadyProcessedException extends ApiException
{
	protected $code = 12610;


}

class MedianetSelfcareFailedEmailException extends ApiException
{
	protected $code = 12611;


}

class MedianetSelfcareIncorrectCodeException extends ApiException
{
	protected $code = 12612;


}

class MedianetSelfcareCodeExpiredException extends ApiException
{
	protected $code = 12613;


}

class MedianetFoxRegistrationErrorException extends ApiException
{
	protected $code = 12650;


}

class MedianetOpenmitvRegistrationErrorException extends ApiException
{
	protected $code = 12670;


}

class MedianetSelfcareUnknownDealerException extends ApiException
{
	protected $code = 12700;


}

class AlbayanHashNotFoundException extends ApiException
{
	protected $code = 12900;


}

class AlbayanHashProcessedAlreadyException extends ApiException
{
	protected $code = 12901;


}

class AlbayanEmailUsedException extends ApiException
{
	protected $code = 12902;


}

class AlbayanUnknownEmailException extends ApiException
{
	protected $code = 12903;


}

class AlbayanUnknownOrderException extends ApiException
{
	protected $code = 12904;


}

class PsmUnknownOrderException extends ApiException
{
	protected $code = 13000;


}

class PsmOrderAlreadyProcessedException extends ApiException
{
	protected $code = 13001;


}

class PsmOoredooFailException extends ApiException
{
	protected $code = 13002;


}

class MotvAccountDuplicateLoginException extends ApiException
{
	protected $code = 14000;


}

class MotvIncorrectUsernamePasswordException extends ApiException
{
	protected $code = 14001;


}

class MotvUnavailableDeviceException extends ApiException
{
	protected $code = 14002;


}

class MotvUnknownRegistrationTokenException extends ApiException
{
	protected $code = 14003;


}

class MotvUnknownLoginException extends ApiException
{
	protected $code = 14004;


}

class MotvUnknownLostPasswordTokenException extends ApiException
{
	protected $code = 14005;


}

class MotvValidationErrorException extends ApiException
{
	protected $code = 14006;


}

class MotvUnknownPortalException extends ApiException
{
	protected $code = 14007;


}

class MotvInvalidPasswordFormatException extends ApiException
{
	protected $code = 14008;


}

class MotvDuplicateUserPortalAccessException extends ApiException
{
	protected $code = 14009;


}

class MotvInvalidPinFormatException extends ApiException
{
	protected $code = 14010;


}

class MotvUnknownErrorException extends ApiException
{
	protected $code = 14011;


}

class CreolinkUnknownOrderException extends ApiException
{
	protected $code = 15000;


}

class CreolinkNetworkIssueException extends ApiException
{
	protected $code = 15001;


}

class FacebookUknownLoginException extends ApiException
{
	protected $code = 16502;


}

class AbvDuplicateSmartcardException extends ApiException
{
	protected $code = 16600;


}
