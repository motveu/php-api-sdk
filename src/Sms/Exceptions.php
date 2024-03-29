<?php

/**
 * Generated on Thu, 4 Jan 2024 7:52:30
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms\Exceptions;

class ApiException extends \Exception implements \Throwable
{
	protected $code;
	protected $response;


	public function getResponse()
	{
		return $this->response;
	}


	public function getResponseMessage()
	{
		if (\is_array($this->response)) {
		    return json_encode($this->response);
		}

		return (string) $this->response;
	}


	public function __construct($response)
	{
		$this->response = $response;
		parent::__construct($this->getResponseMessage(), $this->code);
	}
}

class UnknownApiException extends ApiException
{
}


namespace Motv\Connector\Sms\Exceptions\Sms;

/**
 * Unknown precalculation
 */
class ReportPrecalculationUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = -4;
}

/**
 * Unknown error has ocurred, please contact Jacon team for resolution
 */
class UnknownErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 0;
}

/**
 * Application memory limit exception
 */
class ApplicationMemoryLimitException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 8;
}

/**
 * Invalid parameter value
 */
class InvalidParameterValueException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12;
}

/**
 * Database error exception
 */
class DatabaseErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 15;
}

/**
 * Not logged in exception
 */
class NotLoggedInException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 25;
}

/**
 * Login inactive dealer exception
 */
class LoginInactiveDealerException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 27;
}

/**
 * Gallery unknown image exception
 */
class GalleryUnknownImageException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 40;
}

/**
 * Gallery image file not found exception
 */
class GalleryImageFileNotFoundException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 41;
}

/**
 * Dealer unknown dealer exception
 */
class DealerUnknownDealerException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 60;
}

/**
 * Dealer name not unique exception
 */
class DealerNameNotUniqueException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 61;
}

/**
 * Dealer not enough credit to deduct exception
 */
class DealerNotEnoughCreditToDeductException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 62;
}

/**
 * Dealer not enough credit to add exception
 */
class DealerNotEnoughCreditToAddException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 63;
}

/**
 * Dealer cannot have infinite credit exception
 */
class DealerCannotHaveInfiniteCreditException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 64;
}

/**
 * Dealer cannot view any card exception
 */
class DealerCannotViewAnyCardException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 65;
}

/**
 * Dealer circular parent exception
 */
class DealerCircularParentException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 66;
}

/**
 * Role same parent exception
 */
class RoleSameParentException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 72;
}

/**
 * Role circular parent exception
 */
class RoleCircularParentException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 73;
}

/**
 * Category unknown category exception
 */
class CategoryUnknownCategoryException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 80;
}

/**
 * Customer unknown customer exception
 */
class CustomerUnknownCustomerException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 100;
}

/**
 * Customer unknown file exception
 */
class CustomerUnknownFileException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 101;
}

/**
 * Customer wild search criteria exception
 */
class CustomerWildSearchCriteriaException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 102;
}

/**
 * Customer search too many exception
 */
class CustomerSearchTooManyException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 103;
}

/**
 * Customer update validation error exception
 */
class CustomerUpdateValidationErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 104;
}

/**
 * Customer unknown contact exception
 */
class CustomerUnknownContactException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 105;
}

/**
 * Customer unknown address exception
 */
class CustomerUnknownAddressException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 106;
}

/**
 * Customer unknown note exception
 */
class CustomerUnknownNoteException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 107;
}

/**
 * Customer note missing right exception
 */
class CustomerNoteMissingRightException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 108;
}

/**
 * Customer too many addresses found exception
 */
class CustomerTooManyAddressesFoundException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 109;
}

/**
 * Report unknown report exception
 */
class ReportUnknownReportException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 200;
}

/**
 * Report query error exception
 */
class ReportQueryErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 201;
}

/**
 * Report unknown report file exception
 */
class ReportUnknownReportFileException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 202;
}

/**
 * Report file not found exception
 */
class ReportFileNotFoundException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 203;
}

/**
 * Report not authorized exception
 */
class ReportNotAuthorizedException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 204;
}

/**
 * Request unknown request exception
 */
class RequestUnknownRequestException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 220;
}

/**
 * Invoice unknown invoice exception
 */
class InvoiceUnknownInvoiceException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 250;
}

/**
 * Invoice already cancelled exception
 */
class InvoiceAlreadyCancelledException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 251;
}

/**
 * Invoice cannot be reverted exception
 */
class InvoiceCannotBeRevertedException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 252;
}

/**
 * Product unknown product exception
 */
class ProductUnknownProductException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 260;
}

/**
 * Product initial price has to be higher then 0 exception
 */
class ProductInitPriceHasToBeHigherThenZeroException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 261;
}

/**
 * Product for selfcare subscription cannot have length in minutes exception
 */
class ProductForRenewingCannotHaveLengthInMinutesException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 262;
}

/**
 * Bouquet unknown bouquet exception
 */
class BouquetUnknownBouquetException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 270;
}

/**
 * Group unknown group exception
 */
class GroupUnknownGroupException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 280;
}

/**
 * Template unknown template exception
 */
class TemplateUnknownTemplateException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 290;
}

/**
 * Template error filling exception
 */
class TemplateErrorFillingException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 291;
}

/**
 * Ticket unknown ticket exception
 */
class TicketUnknownTicketException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 300;
}

/**
 * Ticket status error exception
 */
class TicketStatusErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 301;
}

/**
 * Ticket unknown ticket file exception
 */
class TicketUnknownTicketFileException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 302;
}

/**
 * Ticket category unknown ticket category exception
 */
class TicketCategoryUnknownTicketCategoryException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 310;
}

/**
 * Ticket category circular parent exception
 */
class TicketCategoryCircularParentException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 311;
}

/**
 * Ticket department unknown ticket department exception
 */
class TicketDepartmentUnknownTicketDepartmentException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 320;
}

/**
 * Tickets unknown ticket status exception
 */
class TicketsUnknownTicketStatusException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 325;
}

/**
 * Ticket priority unknown ticket priority exception
 */
class TicketPriorityUnknownTicketPriorityException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 330;
}

/**
 * Group action unknown group action exception
 */
class GroupActionUnknownGroupActionException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 360;
}

/**
 * Group action not authorized exception
 */
class GroupActionNotAuthorizedException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 361;
}

/**
 * Group action translate error exception
 */
class GroupActionTranslateErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 362;
}

/**
 * Only one from Group action or Group action predefined has to be filled exception
 */
class OnlyOneFromGroupActionOrGroupActionPredefinedHasToBeFilledException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 363;
}

/**
 * Group action or Group action predefined has to be filled exception
 */
class GroupActionOrGroupActionPredefinedHasToBeFilledException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 364;
}

/**
 * Schedule unknown schedule exception
 */
class ScheduleUnknownScheduleException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 380;
}

/**
 * Schedule token not set exception
 */
class ScheduleTokenNotSetException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 382;
}

/**
 * Invoice not enough credit dealer exception
 */
class InvoiceNotEnoughCreditDealerException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 400;
}

/**
 * Invoice select product exception
 */
class InvoiceSelectProductException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 401;
}

/**
 * Invoice not enough credit customer exception
 */
class InvoiceNotEnoughCreditCustomerException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 403;
}

/**
 * Invoice product not allowed exception
 */
class InvoiceProductNotAllowedException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 404;
}

/**
 * Multiple currencies are not allowed on one invoice exception
 */
class MultipleCurrenciesAreNotAllowedOnOneInvoiceException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 405;
}

/**
 * Config unknown value exception
 */
class ConfigUnknownValueException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 420;
}

/**
 * Config unknown smtp server exception
 */
class ConfigUnknownSmtpServerException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 421;
}

/**
 * Config unknown imap server exception
 */
class ConfigUnknownImapServerException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 422;
}

/**
 * Log unknown log exception
 */
class LogUnknownLogException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 430;
}

/**
 * Log unknown log template exception
 */
class LogUnknownLogTemplateException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 431;
}

/**
 * System rabbitmq error exception
 */
class SystemRabbitmqErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 454;
}

/**
 * System supervisor not enabled exception
 */
class SystemSupervisorNotEnabledException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 455;
}

/**
 * System backup not enabled exception
 */
class SystemBackupNotEnabledException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 456;
}

/**
 * System backup not found exception
 */
class SystemBackupNotFoundException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 457;
}

/**
 * System supervisor failed exception
 */
class SystemSupervisorFailedException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 458;
}

/**
 * Transfer device error exception
 */
class TransferDeviceErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 475;
}

/**
 * Device unknown device exception
 */
class DeviceUnknownDeviceException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 480;
}

/**
 * Device incompatible product exception
 */
class DeviceIncompatibleProductException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 481;
}

/**
 * Device no device found exception
 */
class DeviceNoDeviceFoundException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 482;
}

/**
 * Device too many devices found exception
 */
class DeviceTooManyDevicesFoundException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 483;
}

/**
 * Device incompatible device exception
 */
class DeviceIncompatibleDeviceException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 484;
}

/**
 * Subscription unknown subscription exception
 */
class SubscriptionUnknownSubscriptionException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 500;
}

/**
 * Subscription unknown suspension exception
 */
class SubscriptionUnknownSuspensionException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 501;
}

/**
 * Subscription cannot suspend exception
 */
class SubscriptionCannotSuspendException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 502;
}

/**
 * Subscription cannot be cancelled (already cancelled)
 */
class SubscriptionCannotCancelException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 503;
}

/**
 * Sale error exception
 */
class SaleErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 520;
}

/**
 * Ticket notifications unknown notification exception
 */
class TicketNotificationsUnknownNotificationException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 550;
}

/**
 * Ticket notifications email error exception
 */
class TicketNotificationsEmailErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 551;
}

/**
 * User notifications unknown notification exception
 */
class UserNotificationsUnknownNotificationException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 600;
}

/**
 * Epg unknown epg exception
 */
class EpgUnknownEpgException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1500;
}

/**
 * Epg unsupported date format exception
 */
class EpgUnsupportedDateFormatException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1501;
}

/**
 * Epg unsupported file exception
 */
class EpgUnsupportedFileException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1502;
}

/**
 * Epg set exception exception
 */
class EpgSetExceptionException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1503;
}

/**
 * Epg xml fatal error exception
 */
class EpgXmlFatalErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1504;
}

/**
 * Epg bad file exception
 */
class EpgBadFileException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1505;
}

/**
 * Epg excel error exception
 */
class EpgExcelErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1506;
}

/**
 * Epg insert error exception
 */
class EpgInsertErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1507;
}

/**
 * Epg unknown event exception
 */
class EpgUnknownEventException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1508;
}

/**
 * Epg unknown service exception
 */
class EpgUnknownServiceException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1509;
}

/**
 * Epg unknown transponder exception
 */
class EpgUnknownTransponderException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1510;
}

/**
 * Epg unknown sw download exception
 */
class EpgUnknownSwDownloadException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1511;
}

/**
 * Epg unknown column exception
 */
class EpgUnknownColumnException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1512;
}

/**
 * Epg unknown event image exception
 */
class EpgUnknownEventImageException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1517;
}

/**
 * Epg unknown inserter exception
 */
class EpgUnknownInserterException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1518;
}

/**
 * Epg unknown network exception
 */
class EpgUnknownNetworkException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1519;
}

/**
 * Epg sw download error exception
 */
class EpgSwDownloadErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1520;
}

/**
 * Epg config missing value exception
 */
class EpgConfigMissingValueException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1522;
}

/**
 * Epg unknown category exception
 */
class EpgUnknownCategoryException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1524;
}

/**
 * Zone unknown exception
 */
class ZoneUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12529;
}

/**
 * Blocks unknown exception
 */
class BlocksUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12530;
}

/**
 * Amplifire unknown exception
 */
class AmplifireUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12531;
}

/**
 * Node unknown exception
 */
class NodeUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12532;
}

/**
 * Ticket follow up unknown exception
 */
class TicketFollowUpUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12533;
}

/**
 * Tickets comment unknown exception
 */
class TicketsCommentUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12534;
}

/**
 * Pricing plan unknown exception
 */
class PricingPlanUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12535;
}

/**
 * Session limit unknown exception
 */
class SessionLimitUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12536;
}

/**
 * Device limit unknown exception
 */
class DeviceLimitUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 12537;
}

/**
 * Psm unknown order exception
 */
class PsmUnknownOrderException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 13000;
}

/**
 * Psm order already processed exception
 */
class PsmOrderAlreadyProcessedException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 13001;
}

/**
 * Psm ooredoo fail exception
 */
class PsmOoredooFailException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 13002;
}

/**
 * Motv account duplicate login exception
 */
class MotvAccountDuplicateLoginException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14000;
}

/**
 * Motv incorrect username password exception
 */
class MotvIncorrectUsernamePasswordException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14001;
}

/**
 * Motv unknown registration token exception
 */
class MotvUnknownRegistrationTokenException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14003;
}

/**
 * Motv unknown login exception
 */
class MotvUnknownLoginException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14004;
}

/**
 * Motv unknown lost password token exception
 */
class MotvUnknownLostPasswordTokenException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14005;
}

/**
 * Motv validation error exception
 */
class MotvValidationErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14006;
}

/**
 * Motv unknown portal exception
 */
class MotvUnknownPortalException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14007;
}

/**
 * Motv invalid password format exception
 */
class MotvInvalidPasswordFormatException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14008;
}

/**
 * Motv duplicate user portal access exception
 */
class MotvDuplicateUserPortalAccessException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14009;
}

/**
 * Motv invalid pin format exception
 */
class MotvInvalidPinFormatException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14010;
}

/**
 * Motv unknown error exception
 */
class MotvUnknownErrorException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14011;
}

/**
 * Motv unknown device exception
 */
class MotvUnknownDeviceException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14012;
}

/**
 * Motv unknown error try again exception
 */
class MotvUnknownErrorTryAgainException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14013;
}

/**
 * Google unknown token exception
 */
class GoogleUnknownTokenException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 16000;
}

/**
 * Google unknown login exception
 */
class GoogleUnknownLoginException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 16001;
}

/**
 * Google unknown device exception
 */
class DeviceGoogleUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 16002;
}

/**
 * Motv unknown page exception
 */
class MotvUnknownPageException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 16501;
}

/**
 * Facebook unknown response exception
 */
class FacebookUnknownResponseException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 17500;
}

/**
 * Facebook unknown login exception
 */
class FacebookUnknownLoginException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 17502;
}

/**
 * Facebook unknown device exception
 */
class DeviceFacebookUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 17503;
}

/**
 * Irdeto duplicate serial exception
 */
class IrdetoDuplicateSerialException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 18000;
}

/**
 * Apple unknown login exception
 */
class AppleUnknownLoginException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 19000;
}

/**
 * Apple registration missing email exception
 */
class AppleRegistrationMissingEmailException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 19001;
}

/**
 * Apple registration fail identity token decode exception
 */
class AppleRegistrationFailIdentityTokenDecodeException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 19002;
}

/**
 * Apple unknown device exception
 */
class DeviceAppleUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 19003;
}

/**
 * Digicel exception
 */
class DigicelException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20000;
}

/**
 * GUI exception
 */
class GuiException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20100;
}

/**
 * Request generator cancellation stop exception
 */
class RequestGeneratorCancellationStopException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20200;
}

/**
 * Tree exception
 */
class TreeException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20300;
}

/**
 * Country unknown exception
 */
class CountryUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20500;
}

/**
 * Selfcare order unknown exception
 */
class SelfcareOrderUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20600;
}

/**
 * Selfcare order fail exception
 */
class SelfcareOrderFailException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20601;
}

/**
 * Selfcare not allowed exception
 */
class SelfcareNotAllowedException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20602;
}

/**
 * Selfcare unknown payment gateway
 */
class SelfcareUnknownPaymentGatewayException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20603;
}

/**
 * Selfcare payment gateway unknown exception
 */
class SelfcarePaymentGatewayUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20604;
}

/**
 * Selfcare subscription unknown exception
 */
class SelfcareSubscriptionUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20605;
}

/**
 * Selfcare not allowed product exception
 */
class SelfcareProductNotAllowedException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20606;
}

/**
 * Currency unknown exception
 */
class CurrencyUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20700;
}


namespace Motv\Connector\Sms\Exceptions\ApiSupport;

/**
 * Parent class exception
 */
class ApiExternalException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = -1;
}

/**
 * Missing right for given action / method
 */
class UnathorizedException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 3;
}

/**
 * Unknown modul used
 */
class UnknownModuleException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 4;
}

/**
 * Unknown method
 */
class UnknownMethodException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 5;
}

/**
 * Missing parameter, further information about missing parameter is in response
 */
class MissingParameterException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 6;
}

/**
 * Invalid request data - invalid JSON
 */
class InvalidRequestDataException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 7;
}

/**
 * Unknown right
 */
class UndefinedRightException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 9;
}

/**
 * Incorrect parameter type (for example, method that accepts integer has been given string instead)
 */
class ParameterWrongTypeException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 10;
}

/**
 * Database error, please try again. In case the issue persist, please contact moTV.eu team for resolution
 */
class DatabaseErrorTryAgainException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 11;
}

/**
 * `users_login` and `users_password` is required for creating user
 */
class InvalidLoginAndPasswordException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 14;
}

/**
 * Invalid authorization header format, see the documentation for how the header should look like
 */
class LoginIncorrectHeaderFormatException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 20;
}

/**
 * Incorrect combination of username or password
 */
class LoginIncorrectUsernamePasswordException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 21;
}

/**
 * User is in deactivated state
 */
class LoginInactiveUserException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 22;
}

/**
 * Role is in deactivated state
 */
class LoginInactiveRoleException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 23;
}

/**
 * The authorization token has expired, please calculate a new one
 */
class LoginTokenExpiredException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 24;
}

/**
 * Missing right for given action / method (internal only)
 */
class UnathorizedInternalException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 28;
}

/**
 * Database exception occurred during the query execution
 */
class DatabaseSelectionException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 29;
}

/**
 * Where selection parse exception
 */
class WhereSelectionParseException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 30;
}

/**
 * Unknown role
 */
class RoleUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1100;
}

/**
 * Duplicate role's name
 */
class RoleDuplicateNameException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1101;
}

/**
 * Unknown user
 */
class UserUnknownException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1800;
}

/**
 * Duplicate user email
 */
class UserDuplicateEmailException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 1801;
}

/**
 * Given entity not found
 */
class DocumentationEntityNotFoundException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 4400;
}

/**
 * Documentation unknown api name exception
 */
class DocumentationUnknownApiNameException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 4401;
}

/**
 * Given enum not found
 */
class DocumentationEnumNotFoundException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 4402;
}

/**
 * Given model not found
 */
class DocumentationModelNotFoundException extends \Motv\Connector\Sms\Exceptions\ApiException
{
	protected $code = 4403;
}
