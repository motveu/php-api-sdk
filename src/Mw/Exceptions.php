<?php

/**
 * Generated on Mon, 2 Jan 2023 7:53:41
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Mw\Exceptions;

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


namespace Motv\Connector\Mw\Exceptions\ApiSupport;

/**
 * Parent class exception
 */
class ApiExternalException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = -1;
}

/**
 * Missing right for given action / method
 */
class UnathorizedException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3;
}

/**
 * Unknown modul used
 */
class UnknownModuleException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4;
}

/**
 * Unknown method
 */
class UnknownMethodException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 5;
}

/**
 * Missing parameter, further information about missing parameter is in response
 */
class MissingParameterException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 6;
}

/**
 * Invalid request data - invalid JSON
 */
class InvalidRequestDataException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 7;
}

/**
 * Unknown right
 */
class UndefinedRightException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 9;
}

/**
 * Incorrect parameter type (for example, method that accepts integer has been given string instead)
 */
class ParameterWrongTypeException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 10;
}

/**
 * Database error, please try again. In case the issue persist, please contact moTV.eu team for resolution
 */
class DatabaseErrorTryAgainException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 11;
}

/**
 * `users_login` and `users_password` is required for creating user
 */
class InvalidLoginAndPasswordException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 14;
}

/**
 * Invalid authorization header format, see the documentation for how the header should look like
 */
class LoginIncorrectHeaderFormatException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 20;
}

/**
 * Incorrect combination of username or password
 */
class LoginIncorrectUsernamePasswordException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 21;
}

/**
 * User is in deactivated state
 */
class LoginInactiveUserException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 22;
}

/**
 * Role is in deactivated state
 */
class LoginInactiveRoleException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 23;
}

/**
 * The authorization token has expired, please calculate a new one
 */
class LoginTokenExpiredException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 24;
}

/**
 * Missing right for given action / method (internal only)
 */
class UnathorizedInternalException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 28;
}

/**
 * Database exception occurred during the query execution
 */
class DatabaseSelectionException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 29;
}

/**
 * Where selection parse exception
 */
class WhereSelectionParseException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 30;
}

/**
 * Unknown role
 */
class RoleUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1100;
}

/**
 * Duplicate role's name
 */
class RoleDuplicateNameException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1101;
}

/**
 * Unknown user
 */
class UserUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1800;
}

/**
 * Duplicate user email
 */
class UserDuplicateEmailException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1801;
}

/**
 * Given entity not found
 */
class DocumentationEntityNotFoundException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4400;
}

/**
 * Documentation unknown api name exception
 */
class DocumentationUnknownApiNameException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4401;
}

/**
 * Given enum not found
 */
class DocumentationEnumNotFoundException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4402;
}

/**
 * Given model not found
 */
class DocumentationModelNotFoundException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4403;
}


namespace Motv\Connector\Mw\Exceptions\Mw;

/**
 * Unknown error has ocurred, please contact moTV.eu team for resolution
 */
class UnknownErrorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 0;
}

/**
 * Application has ran out of available memory, please contact moTV.eu team for resolution
 */
class ApplicationMemoryLimitException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 8;
}

/**
 * Invalid parameter value
 */
class InvalidParameterValueException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 12;
}

/**
 * Redis error, please try again. In case the issue persist, please contact moTV.eu team for resolution
 */
class RedisErrorTryAgainException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 13;
}

/**
 * The language passed in header is unknown. ISO 639 language codes are supported
 */
class LanguageUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 25;
}

/**
 * This exception can be used for various statuses, the end customer application should just show the error received in the response part
 */
class GeneralException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 26;
}

/**
 * One (or more) of the required headers is missing
 */
class MissingHeaderException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 27;
}

/**
 * Failed to obtain data from given directory
 */
class ScanDirFailedException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 50;
}

/**
 * Unknown customer
 */
class CustomerUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 100;
}

/**
 * Too many customers were found, please limit the search criteria by narrowing them down
 */
class CustomerTooManyFoundException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 101;
}

/**
 * Duplicate login, please choose another one
 */
class CustomerDuplicateLoginException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 102;
}

/**
 * Incorrect combination of customer's login and password
 */
class CustomerIncorrectLoginPasswordException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 103;
}

/**
 * Customer is not logged in and the method requires authentication
 */
class CustomerNotLoggedInException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 104;
}

/**
 * Invalid customer authorization header, please check the documentation for how the header should look like.
 */
class CustomerInvalidAuthorizationHeaderException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 105;
}

/**
 * Unknown QR code
 */
class CustomerUnknownQrException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 106;
}

/**
 * Customer's password is not strong enough
 */
class CustomerPasswordFormatInvalidException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 107;
}

/**
 * Customer license count exceeded
 */
class CustomerLicenseLimitExceededException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 108;
}

/**
 * Duplicate customer MAC address
 */
class CustomerDuplicateMacException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 109;
}

/**
 * Unknown customer MAC address
 */
class CustomerUnknownMacException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 110;
}

/**
 * The login with MAC is disabled for customer's vendor
 */
class CustomerMacLoginDisabledException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 111;
}

/**
 * Customer's password cannot be same as his login
 */
class CustomerPasswordSameAsLoginException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 112;
}

/**
 * The QR code has been requested via another vendor application
 */
class CustomerQrCodeVendorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 113;
}

/**
 * Customer is locked - read only state and forbidden access to certain resources (eg device list)
 */
class CustomerLockedException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 114;
}

/**
 * Unknown profile
 */
class ProfileUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 200;
}

/**
 * This profile cannot be deleted
 */
class ProfileCannotDeleteException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 201;
}

/**
 * Duplicate profile's name, please choose another one
 */
class ProfileDuplicateNameException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 202;
}

/**
 * Invalid date format of profile's birthday
 */
class ProfileInvalidBirthdayException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 203;
}

/**
 * Unknown channel category
 */
class ChannelCategoryUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 300;
}

/**
 * Unknown transcoder
 */
class TranscoderUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 400;
}

/**
 * Duplicate transcoder's name
 */
class TranscoderDuplicateNameException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 401;
}

/**
 * Unable to contact transcoder via transcoder's API
 */
class TranscoderUnableToContactException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 402;
}

/**
 * Unknown stream recording
 */
class TranscoderUnknownStreamRecordingException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 403;
}

/**
 * Given stream recording cannot be downloaded because it did not succeed
 */
class TranscoderNotDownloadableStreamRecordingException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 404;
}

/**
 * Unknown category
 */
class CategoryUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 500;
}

/**
 * Duplicate category name
 */
class CategoryDuplicateNameException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 502;
}

/**
 * Category is not empty
 */
class CategoryIsNotEmptyException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 503;
}

/**
 * Unknown package
 */
class PackageUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 600;
}

/**
 * Package not active
 */
class PackageNotActiveException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 601;
}

/**
 * Package can not be removed.
 */
class PackageCannotBeRemovedException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 602;
}

/**
 * Unknown configuration value
 */
class ConfigUnknownValueException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 700;
}

/**
 * Unknown EPG
 */
class EpgUnknownEpgException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 800;
}

/**
 * Missing XML tag in provided XMLTV while parsing EPG data
 */
class EpgXmlMissingTagException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 801;
}

/**
 * Missing XML attribute in provided XMLTV while parsing EPG data
 */
class EpgXmlMissingAttributeException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 802;
}

/**
 * Unable to parse date from provided XMLTV while parsing EPG data
 */
class EpgXmlDateParseErrorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 803;
}

/**
 * Unable to parse provided XMLTV while parsing EPG data
 */
class EpgXmlSetErrorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 804;
}

/**
 * Unknown error while saving EPG data, please contact moTV.eu team for resolution
 */
class EpgInsertErrorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 805;
}

/**
 * Unknown EPG event
 */
class EpgUnknownEpgEventException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 806;
}

/**
 * Unknown EPG rating
 */
class EpgUnknownRatingException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 807;
}

/**
 * Unknown EPG playlist
 */
class EpgUnknownPlaylistException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 808;
}

/**
 * Unknown channel
 */
class ChannelUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 900;
}

/**
 * Stream for given channel is not available (might be because the multicast input is broken or the channel has just been restarted or some other reason)
 */
class ChannelStreamUnavailableException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 902;
}

/**
 * Given profile and given device is not authorized for requested channel stream (probably not purchased channel or channel not active)
 */
class ChannelUnathorizedException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 903;
}

/**
 * Duplicate bind multicast IP and port combination
 */
class ChannelDuplicateBindIpPortCombinationException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 905;
}

/**
 * Duplicate output multicast IP and port combination
 */
class ChannelDuplicateOutputIpPortCombinationException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 906;
}

/**
 * Invalid channel audio role - must follow the ISO639 specification. It is possible to use ISO639 code followed by dash and any note, such as `eng-2`, `eng-test`
 */
class ChannelAudioInvalidRoleException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 907;
}

/**
 * Error while importing channels
 */
class ChannelImportErrorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 908;
}

/**
 * Invalid channel subtitle role - must follow the ISO639 specification. It is possible to use ISO639 code followed by dash and any note, such as `eng-2`, `eng-test`
 */
class ChannelSubtitleInvalidRoleException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 909;
}

/**
 * Given profile is not authorized to request given channel stream due to age restrictions
 */
class ChannelAgeRestrictionException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 910;
}

/**
 * Given profile is not authorized to request given channel stream due to geoblock restrictions
 */
class ChannelGeoblockRestrictionException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 911;
}

/**
 * Duplicate channel's audio role
 */
class ChannelAudioDuplicateRoleException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 912;
}

/**
 * Duplicate channel's subtitle role
 */
class ChannelSubtitleDuplicateRoleException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 913;
}

/**
 * Given profile is not authorized to request given channel stream due to IP range restrictions
 */
class ChannelIpRangeRestrictionException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 914;
}

/**
 * In order to ffprobe static file, save the unicast first
 */
class ChannelFfprobeSaveFirstException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 915;
}

/**
 * Channel cannot be deleted
 */
class ChannelCannotDeleteException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 916;
}

/**
 * Unknown VOD
 */
class VodUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1000;
}

/**
 * Given profile and given device is not authorized for requested VOD stream (probably not purchased or VOD not active)
 */
class VodUnathorizedException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1001;
}

/**
 * Error while uploading VOD file
 */
class VodFileErrorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1003;
}

/**
 * VOD cannot be transcoded (for example the file is not uploaded yet)
 */
class VodCannotTranscodeException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1004;
}

/**
 * Invalid VTT VOD subtitle file
 */
class VodSubtitleVttException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1005;
}

/**
 * Invalid VOD audio role - must follow the ISO639 specification. It is possible to use ISO639 code followed by dash and any note, such as `eng-2`, `eng-test`
 */
class VodAudioInvalidRoleException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1006;
}

/**
 * Invalid VOD subtiel role - must follow the ISO639 specification. It is possible to use ISO639 code followed by dash and any note, such as `eng-2`, `eng-test`
 */
class VodSubtitleInvalidRoleException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1007;
}

/**
 * VOD transcoder cannot be changed once the video file was uploaded
 */
class VodCannotChangeTransoderException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1008;
}

/**
 * VOD Youtube import failure
 */
class VodYoutubeImportException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1009;
}

/**
 * Minimum age restriction
 */
class VodMinimumAgeRestrictionException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1010;
}

/**
 * Failed to upload VOD flow.js chunk
 */
class VodFailedToUploadChunkException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1011;
}

/**
 * Unknown VOD group
 */
class VodGroupUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1025;
}

/**
 * Unknown genre
 */
class GenreUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1050;
}

/**
 * Duplicate genre name
 */
class GenreDuplicateNameException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1051;
}

/**
 * Genre is not empty (it is assigned to some EPG, VOD or category)
 */
class GenreIsNotEmptyException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1052;
}

/**
 * Unknown template
 */
class TemplateUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1300;
}

/**
 * Template cannot be deleted because it is in use
 */
class TemplateUsedException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1301;
}

/**
 * Duplicate template's name
 */
class TemplateDuplicateNameException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1302;
}

/**
 * Customer has exceeded allowed recording length
 */
class RecordingExceededLengthException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1400;
}

/**
 * Unknown recording
 */
class RecordingUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1401;
}

/**
 * Customer has exceeded device count attached to the customer account (for given device and / or channel)
 */
class DeviceCountExceededException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1500;
}

/**
 * Unknown device
 */
class DeviceUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1501;
}

/**
 * Customer has exceeded concurrent device count attached to the customer account (for given device and / or channel)
 */
class DeviceConcurrentCountExceededException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1502;
}

/**
 * Unknown device type
 */
class DeviceUnknownTypeException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1503;
}

/**
 * Failed to retrieve widevine provisioning
 */
class DeviceFailedToRetrieveWidevineProvisioningException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1504;
}

/**
 * Unknown person
 */
class PersonUnknownPersonException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1600;
}

/**
 * Duplicate person name
 */
class PersonDuplicateNameException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1601;
}

/**
 * Unknown report
 */
class ReportUnknownReportException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1700;
}

/**
 * Error in the report's SQL query
 */
class ReportQueryErrorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1702;
}

/**
 * Erorr while contacting transcoder managing given process
 */
class SystemSupervisorErrorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1900;
}

/**
 * Unknown backup file requested
 */
class SystemBackupUnknownFileException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1901;
}

/**
 * Unknown transcoding process
 */
class SystemSupervisorUnknownProcessException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1902;
}

/**
 * Failed system process
 */
class SystemCommandFailedException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1903;
}

/**
 * Unable to upload file to transcoder
 */
class SystemFailedToUploadFileException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1904;
}

/**
 * Unknown index of system statistics
 */
class SystemUnknownIndexSystemStatisticsException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 1905;
}

/**
 * Syntax error in template file
 */
class TemplateErrorFillingException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2000;
}

/**
 * Unknown vendor
 */
class VendorUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2100;
}

/**
 * Unknown homepage row
 */
class HomepageUnknownRowException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2101;
}

/**
 * Unknown homepage
 */
class HomepageUnknownHomepageException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2102;
}

/**
 * Duplicate homepage priority
 */
class HomepageDuplicatePriorityException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2103;
}

/**
 * Invalid homepage category selection search criteria
 */
class HomepageInvalidCategorySelectionSearchCriteriaException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2104;
}

/**
 * Your vendor is not allowed to edit this model
 */
class VendorRightException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2105;
}

/**
 * Unknown vendor avatar
 */
class VendorUnknownAvatarException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2106;
}

/**
 * Homepage can not be removed.
 */
class HomepageCannotBeRemovedException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2107;
}

/**
 * Licenses count exceeded
 */
class VendorLicensesExceededException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2150;
}

/**
 * Unknown edge
 */
class EdgeUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2200;
}

/**
 * Inactive edge - can be thrown while requesting stream from an inactive edge server
 */
class EdgeInactiveException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2201;
}

/**
 * Unknown OTA device
 */
class OtaUnknownDeviceException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2300;
}

/**
 * Unknown OTA version
 */
class OtaUnknownVersionException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2301;
}

/**
 * Bad OTA version
 */
class OtaBadVersionException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2302;
}

/**
 * Unknown homepage advert
 */
class AdvertHomepageUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2400;
}

/**
 * Unknown app
 */
class AppUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2500;
}

/**
 * Unknown content ID
 */
class DrmUnknownContentIdException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2601;
}

/**
 * Unknown customer's authorization token in DRM communication
 */
class DrmUnknownTokenException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2602;
}

/**
 * Invalid widevine request received on proxy
 */
class DrmInvalidRequestException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2603;
}

/**
 * Geolocation library not installed, please contact moTV.eu team for resolution
 */
class DrmIpCountryDatabaseErrorException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2604;
}

/**
 * DRM server returned error while trying to obtain license for playback of encrypted content
 */
class DrmUnableToGetLicenseException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2605;
}

/**
 * Unable to contact DRM server (for example widevine)
 */
class DrmUnableToContactServerException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2606;
}

/**
 * Unauthorized to retrieve key for given content
 */
class DrmUnathorizedKeyException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2607;
}

/**
 * Platform is insecure for widevine playback
 */
class WidevinePlatformInsecureException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2700;
}

/**
 * Error in Centreon configuration file
 */
class CentreonMissingConfigValueException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2800;
}

/**
 * Unknown application
 */
class AppManagerUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 2900;
}

/**
 * Recommendation engine XROAD has been disabled
 */
class RecommendationEngineDisabledException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3000;
}

/**
 * Unknown asset type
 */
class RecommendationEngineUnknownTypeException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3001;
}

/**
 * Unknown IP range
 */
class IpRangeUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3100;
}

/**
 * Unknown storage
 */
class StorageUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3200;
}

/**
 * Reserved for internal purposes
 */
class MotvReserved01Exception extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3300;
}

/**
 * Increase the size of search criteria (minimum 2 characters)
 */
class SearchTooShortException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3400;
}

/**
 * Given string is not valid base64 encoded image
 */
class ImageInvalidBase64Exception extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3500;
}

/**
 * Unknown word
 */
class WordUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3600;
}

/**
 * Duplicate word
 */
class WordDuplicateException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3601;
}

/**
 * Unknown file
 */
class FileUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3700;
}

/**
 * File not found
 */
class FileNotFoundException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3701;
}

/**
 * File must be changelog type
 */
class FileMustBeChangelogException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3702;
}

/**
 * Unknown DVB region
 */
class DvbRegionUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3800;
}

/**
 * Unknown recognition model
 */
class RecognitionUnknownModelException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3900;
}

/**
 * Unknown recognition model channel
 */
class RecognitionUnknownModelChannelException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3901;
}

/**
 * Unknown template image
 */
class RecognitionUnknownTemplateImageException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3902;
}

/**
 * Unknown training image
 */
class RecognitionUnknownTrainingImageException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3903;
}

/**
 * Training image cannot be deleted
 */
class RecognitionTrainingImageDeleteException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3904;
}

/**
 * Recognition API exception
 */
class RecognitionApiException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3905;
}

/**
 * Recognition state and type disallow select logo
 */
class RecognitionStateAndTypeDisallowSelectLogoException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3906;
}

/**
 * Program segment duplicity
 */
class RecognitionProgramSegmentDuplictyException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3907;
}

/**
 * Unknown program segment
 */
class RecognitionUnknownProgramSegmentException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 3908;
}

/**
 * Unknown advert unit
 */
class AdvertUnknownUnitException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4000;
}

/**
 * Unknown campaign
 */
class CampaignUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4002;
}

/**
 * Advert signature failture
 */
class AdvertSignatureFailureException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4003;
}

/**
 * Unknown campaign section
 */
class CampaignUnknownSectionException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4004;
}

/**
 * Advert redirect exception (used for internal purposes only)
 */
class AdvertRedirectException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4005;
}

/**
 * Unknown provider
 */
class ProviderUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4100;
}

/**
 * Duplicate provider's MAC address
 */
class ProviderMacDuplicateException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4101;
}

/**
 * Unknown MAC
 */
class ProviderUnknownMacException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4102;
}

/**
 * Failed to send push message
 */
class PushMessageSendException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4200;
}

/**
 * Unknown remote middleware
 */
class RemoteMwUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4300;
}

/**
 * Unknown onboarding
 */
class OnboardingUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4500;
}

/**
 * Missing configuration key
 */
class SystemSettingsMissingConfigurationKeyException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4600;
}

/**
 * Missing configuration key
 */
class BackupMissingConfigurationKeyException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4700;
}

/**
 * Unknown grafana custom dashboard
 */
class GrafanaCustomDashboardUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4800;
}

/**
 * Unknown grafana folder
 */
class GrafanaFolderUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4801;
}

/**
 * Unknown detector
 */
class DetectorUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4900;
}

/**
 * Duplicate name of detector
 */
class DetectorDuplicateNameException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4901;
}

/**
 * Unknown report schedule
 */
class ReportScheduleUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4950;
}

/**
 * Unknown report schedule attachement
 */
class ReportScheduleAttachementUnknownException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 4951;
}

/**
 * Unknown vendor application section exception
 */
class VendorAppUnknownSectionException extends \Motv\Connector\Mw\Exceptions\ApiException
{
	protected $code = 5000;
}
