<?php

/**
 * Generated on Thu, 30 Jul 2020 11:13:54
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Mw;

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

/**
 * Parent class exception
 */
class ApiExternalException extends ApiException
{
	protected $code = -1;
}

/**
 * Unknown error has ocurred, please contact moTV.eu team for resolution
 */
class UnknownErrorException extends ApiException
{
	protected $code = 0;
}

/**
 * Success
 */
class SuccessException extends ApiException
{
	protected $code = 1;
}

/**
 * Missing right for given action / method
 */
class UnathorizedException extends ApiException
{
	protected $code = 3;
}

/**
 * Unknown modul used
 */
class UnknownModuleException extends ApiException
{
	protected $code = 4;
}

/**
 * Unknown method
 */
class UnknownMethodException extends ApiException
{
	protected $code = 5;
}

/**
 * Missing parameter, further information about missing parameter is in response
 */
class MissingParameterException extends ApiException
{
	protected $code = 6;
}

/**
 * Invalid request data - invalid JSON
 */
class InvalidRequestDataException extends ApiException
{
	protected $code = 7;
}

/**
 * Application has ran out of available memory, please contact moTV.eu team for resolution
 */
class ApplicationMemoryLimitException extends ApiException
{
	protected $code = 8;
}

/**
 * Unknown right
 */
class UndefinedRightException extends ApiException
{
	protected $code = 9;
}

/**
 * Incorrect parameter type (method that accepts integer has been given string instead)
 */
class ParameterWrongTypeException extends ApiException
{
	protected $code = 10;
}

/**
 * Database error, please try again. In case the issue persist, please contact moTV.eu team for resolution
 */
class DatabaseErrorTryAgainException extends ApiException
{
	protected $code = 11;
}

/**
 * Invalid parameter value
 */
class InvalidParameterValueException extends ApiException
{
	protected $code = 12;
}

/**
 * Redis error, please try again. In case the issue persist, please contact moTV.eu team for resolution
 */
class RedisErrorTryAgainException extends ApiException
{
	protected $code = 13;
}

/**
 * Invalid authorization header format, see the documentation for how the header should look like
 */
class LoginIncorrectHeaderFormatException extends ApiException
{
	protected $code = 20;
}

/**
 * Incorrect combination of username or password
 */
class LoginIncorrectUsernamePasswordException extends ApiException
{
	protected $code = 21;
}

/**
 * User is in deactivated state
 */
class LoginInactiveUserException extends ApiException
{
	protected $code = 22;
}

/**
 * Role is in deactivated state
 */
class LoginInactiveRoleException extends ApiException
{
	protected $code = 23;
}

/**
 * The authorization token has expired, please calculate a new one
 */
class LoginTokenExpiredException extends ApiException
{
	protected $code = 24;
}

/**
 * The language passed in header is unknown. ISO 639 language codes are supported
 */
class LanguageUnknownException extends ApiException
{
	protected $code = 25;
}

/**
 * This exception can be used for various statuses, the end customer application should just show the error received in the response part
 */
class GeneralException extends ApiException
{
	protected $code = 26;
}

/**
 * One (or more) of the required headers is missing
 */
class MissingHeaderException extends ApiException
{
	protected $code = 27;
}

/**
 * Missing right for given action / method (internal only)
 */
class UnathorizedInternalException extends ApiException
{
	protected $code = 28;
}

/**
 * Database exception occurred during the query execution
 */
class DatabaseSelectionException extends ApiException
{
	protected $code = 29;
}

/**
 * Failed to obtain data from given directory
 */
class ScanDirFailedException extends ApiException
{
	protected $code = 50;
}

/**
 * Unknown customer
 */
class CustomerUnknownException extends ApiException
{
	protected $code = 100;
}

/**
 * Too many customers were found, please limit the search criteria by narrowing them down
 */
class CustomerTooManyFoundException extends ApiException
{
	protected $code = 101;
}

/**
 * Duplicate login, please choose another one
 */
class CustomerDuplicateLoginException extends ApiException
{
	protected $code = 102;
}

/**
 * Incorrect combination of customer's login and password
 */
class CustomerIncorrectLoginPasswordException extends ApiException
{
	protected $code = 103;
}

/**
 * Customer is not logged in and the method requires authentication
 */
class CustomerNotLoggedInException extends ApiException
{
	protected $code = 104;
}

/**
 * Invalid customer authorization header, please check the documentation for how the header should look like.
 */
class CustomerInvalidAuthorizationHeaderException extends ApiException
{
	protected $code = 105;
}

/**
 * Unknown customer's QR code
 */
class CustomerUnknownQrException extends ApiException
{
	protected $code = 106;
}

/**
 * Customer's password is not strong enough
 */
class CustomerPasswordFormatInvalidException extends ApiException
{
	protected $code = 107;
}

/**
 * Customer license count exceeded
 */
class CustomerLicenseLimitExceededException extends ApiException
{
	protected $code = 108;
}

/**
 * Duplicate customer MAC address
 */
class CustomerDuplicateMacException extends ApiException
{
	protected $code = 109;
}

/**
 * Unknown customer MAC address
 */
class CustomerUnknownMacException extends ApiException
{
	protected $code = 110;
}

/**
 * The login with MAC is disabled for customer's vendor
 */
class CustomerMacLoginDisabledException extends ApiException
{
	protected $code = 111;
}

/**
 * Unknown profile
 */
class ProfileUnknownException extends ApiException
{
	protected $code = 200;
}

/**
 * Given profile cannot be deleted
 */
class ProfileCannotDeleteException extends ApiException
{
	protected $code = 201;
}

/**
 * Duplicate profile's name, please choose another one
 */
class ProfileDuplicateNameException extends ApiException
{
	protected $code = 202;
}

/**
 * Invalid date format of profile's birthday
 */
class ProfileInvalidBirthdayException extends ApiException
{
	protected $code = 203;
}

/**
 * Invalid PIN format - needs to be either empty string or 4 digit number
 */
class ProfileInvalidPinException extends ApiException
{
	protected $code = 204;
}

/**
 * Unknown channel category
 */
class ChannelCategoryUnknownException extends ApiException
{
	protected $code = 300;
}

/**
 * Unknown transcoder
 */
class TranscoderUnknownException extends ApiException
{
	protected $code = 400;
}

/**
 * Duplicate transcoder's name
 */
class TranscoderDuplicateNameException extends ApiException
{
	protected $code = 401;
}

/**
 * Unable to contact transcoder via transcoder's API
 */
class TranscoderUnableToContactException extends ApiException
{
	protected $code = 402;
}

/**
 * Unknown stream recording
 */
class TranscoderUnknownStreamRecordingException extends ApiException
{
	protected $code = 403;
}

/**
 * Given stream recording cannot be downloaded because it did not succeed
 */
class TranscoderNotDownloadableStreamRecordingException extends ApiException
{
	protected $code = 404;
}

/**
 * Unknown VOD category
 */
class CategoryUnknownException extends ApiException
{
	protected $code = 500;
}

/**
 * Duplicate category name
 */
class CategoryDuplicateNameException extends ApiException
{
	protected $code = 502;
}

/**
 * Unknown package
 */
class PackageUnknownException extends ApiException
{
	protected $code = 600;
}

/**
 * Package not active
 */
class PackageNotActiveException extends ApiException
{
	protected $code = 601;
}

/**
 * Unknown configuration value
 */
class ConfigUnknownValueException extends ApiException
{
	protected $code = 700;
}

/**
 * Unknown EPG
 */
class EpgUnknownEpgException extends ApiException
{
	protected $code = 800;
}

/**
 * Missing XML tag in provided XMLTV while parsing EPG data
 */
class EpgXmlMissingTagException extends ApiException
{
	protected $code = 801;
}

/**
 * Missing XML attribute in provided XMLTV while parsing EPG data
 */
class EpgXmlMissingAttributeException extends ApiException
{
	protected $code = 802;
}

/**
 * Unable to parse date from provided XMLTV while parsing EPG data
 */
class EpgXmlDateParseErrorException extends ApiException
{
	protected $code = 803;
}

/**
 * Unable to parse provided XMLTV while parsing EPG data
 */
class EpgXmlSetErrorException extends ApiException
{
	protected $code = 804;
}

/**
 * Unknown error while saving EPG data, please contact moTV.eu team for resolution
 */
class EpgInsertErrorException extends ApiException
{
	protected $code = 805;
}

/**
 * Unknown EPG event
 */
class EpgUnknownEpgEventException extends ApiException
{
	protected $code = 806;
}

/**
 * Unknown EPG rating
 */
class EpgUnknownRatingException extends ApiException
{
	protected $code = 807;
}

/**
 * Unknown EPG playlist
 */
class EpgUnknownPlaylistException extends ApiException
{
	protected $code = 808;
}

/**
 * Unknown channel
 */
class ChannelUnknownException extends ApiException
{
	protected $code = 900;
}

/**
 * Stream for given channel is not available (might be because the multicast input is broken or the channel has just been restarted or some other reason)
 */
class ChannelStreamUnavailableException extends ApiException
{
	protected $code = 902;
}

/**
 * Given profile and given device is not authorized for requested channel stream (probably not purchased channel or channel not active)
 */
class ChannelUnathorizedException extends ApiException
{
	protected $code = 903;
}

/**
 * Unknown channel stream type (must be either `dash` or `hls`)
 */
class ChannelUnknownStreamTypeException extends ApiException
{
	protected $code = 904;
}

/**
 * Duplicate bind multicast IP and port combination
 */
class ChannelDuplicateBindIpPortCombinationException extends ApiException
{
	protected $code = 905;
}

/**
 * Duplicate output multicast IP and port combination
 */
class ChannelDuplicateOutputIpPortCombinationException extends ApiException
{
	protected $code = 906;
}

/**
 * Invalid channel audio role - must follow the ISO639 specification. It is possible to use ISO639 code followed by dash and any note, such as `eng-2`, `eng-test`
 */
class ChannelAudioInvalidRoleException extends ApiException
{
	protected $code = 907;
}

/**
 * Error while importing channels
 */
class ChannelImportErrorException extends ApiException
{
	protected $code = 908;
}

/**
 * Invalid channel subtitle role - must follow the ISO639 specification. It is possible to use ISO639 code followed by dash and any note, such as `eng-2`, `eng-test`
 */
class ChannelSubtitleInvalidRoleException extends ApiException
{
	protected $code = 909;
}

/**
 * Given profile is not authorized to request given channel stream due to age restrictions
 */
class ChannelAgeRestrictionException extends ApiException
{
	protected $code = 910;
}

/**
 * Given profile is not authorized to request given channel stream due to geoblock restrictions
 */
class ChannelGeoblockRestrictionException extends ApiException
{
	protected $code = 911;
}

/**
 * Duplicate channel's audio role
 */
class ChannelAudioDuplicateRoleException extends ApiException
{
	protected $code = 912;
}

/**
 * Duplicate channel's subtitle role
 */
class ChannelSubtitleDuplicateRoleException extends ApiException
{
	protected $code = 913;
}

/**
 * Given profile is not authorized to request given channel stream due to IP range restrictions
 */
class ChannelIpRangeRestrictionException extends ApiException
{
	protected $code = 914;
}

/**
 * In order to ffprobe static file, save the unicast first
 */
class ChannelFfprobeSaveFirstException extends ApiException
{
	protected $code = 915;
}

/**
 * Unknown VOD
 */
class VodUnknownException extends ApiException
{
	protected $code = 1000;
}

/**
 * Given profile and given device is not authorized for requested VOD stream (probably not purchased or VOD not active)
 */
class VodUnathorizedException extends ApiException
{
	protected $code = 1001;
}

/**
 * Unknown VOD stream type (must be either `dash` or `hls`)
 */
class VodUnknownStreamTypeException extends ApiException
{
	protected $code = 1002;
}

/**
 * Error while uploading VOD file
 */
class VodFileErrorException extends ApiException
{
	protected $code = 1003;
}

/**
 * VOD cannot be transcoded (for example the file is not uploaded yet)
 */
class VodCannotTranscodeException extends ApiException
{
	protected $code = 1004;
}

/**
 * Invalid VTT VOD subtitle file
 */
class VodSubtitleVttException extends ApiException
{
	protected $code = 1005;
}

/**
 * Invalid VOD audio role - must follow the ISO639 specification. It is possible to use ISO639 code followed by dash and any note, such as `eng-2`, `eng-test`
 */
class VodAudioInvalidRoleException extends ApiException
{
	protected $code = 1006;
}

/**
 * Invalid VOD subtiel role - must follow the ISO639 specification. It is possible to use ISO639 code followed by dash and any note, such as `eng-2`, `eng-test`
 */
class VodSubtitleInvalidRoleException extends ApiException
{
	protected $code = 1007;
}

/**
 * Unknown genre
 */
class GenreUnknownException extends ApiException
{
	protected $code = 1050;
}

/**
 * Duplicate genre name
 */
class GenreDuplicateNameException extends ApiException
{
	protected $code = 1051;
}

/**
 * Unknown role
 */
class RoleUnknownException extends ApiException
{
	protected $code = 1100;
}

/**
 * Duplicate role's name
 */
class RoleDuplicateNameException extends ApiException
{
	protected $code = 1101;
}

/**
 * Unknown revision
 */
class RevisionUnknownRevisionException extends ApiException
{
	protected $code = 1200;
}

/**
 * Unknown revision detail
 */
class RevisionUnknownMultiselectRowException extends ApiException
{
	protected $code = 1201;
}

/**
 * Unknown template
 */
class TemplateUnknownException extends ApiException
{
	protected $code = 1300;
}

/**
 * Template cannot be deleted because it is in use
 */
class TemplateUsedException extends ApiException
{
	protected $code = 1301;
}

/**
 * Duplicate template's name
 */
class TemplateDuplicateNameException extends ApiException
{
	protected $code = 1302;
}

/**
 * Template cannot be updated because is predefiend
 */
class TemplateCannotEditPredefinedException extends ApiException
{
	protected $code = 1303;
}

/**
 * Customer has exceeded allowed recording length
 */
class RecordingExceededLengthException extends ApiException
{
	protected $code = 1400;
}

/**
 * Unknown recording
 */
class RecordingUnknownException extends ApiException
{
	protected $code = 1401;
}

/**
 * Unknown recording stream type (must be either `dash` or `hls`)
 */
class RecordingUnknownStreamTypeException extends ApiException
{
	protected $code = 1402;
}

/**
 * Customer has exceeded device count attached to the customer account (for given device and / or channel)
 */
class DeviceCountExceededException extends ApiException
{
	protected $code = 1500;
}

/**
 * Unknown device
 */
class DeviceUnknownException extends ApiException
{
	protected $code = 1501;
}

/**
 * Customer has exceeded concurrent device count attached to the customer account (for given device and / or channel)
 */
class DeviceConcurrentCountExceededException extends ApiException
{
	protected $code = 1502;
}

/**
 * Unknown device type
 */
class DeviceUnknownTypeException extends ApiException
{
	protected $code = 1503;
}

/**
 * Failed to retrieve widevine provisioning
 */
class DeviceFailedToRetrieveWidevineProvisioningException extends ApiException
{
	protected $code = 1504;
}

/**
 * Unknown person
 */
class PersonUnknownPersonException extends ApiException
{
	protected $code = 1600;
}

/**
 * Duplicate person name
 */
class PersonDuplicateNameException extends ApiException
{
	protected $code = 1601;
}

/**
 * Unknown statistics
 */
class StatisticsUnknownStatisticException extends ApiException
{
	protected $code = 1700;
}

/**
 * Erorr in the statistic's SQL query
 */
class StatisticsQueryErrorException extends ApiException
{
	protected $code = 1702;
}

/**
 * Statistic cannot be updated because is predefiend
 */
class StatisticsCannotEditPredefinedException extends ApiException
{
	protected $code = 1703;
}

/**
 * Unknown user
 */
class UserUnknownException extends ApiException
{
	protected $code = 1800;
}

/**
 * Duplicate user email
 */
class UserDuplicateEmailException extends ApiException
{
	protected $code = 1801;
}

/**
 * Erorr while contacting transcoder managing given process
 */
class SystemSupervisorErrorException extends ApiException
{
	protected $code = 1900;
}

/**
 * Unknown backup file requested
 */
class SystemBackupUnknownFileException extends ApiException
{
	protected $code = 1901;
}

/**
 * Unknown transcoding process
 */
class SystemSupervisorUnknownProcessException extends ApiException
{
	protected $code = 1902;
}

/**
 * Failed system process
 */
class SystemCommandFailedException extends ApiException
{
	protected $code = 1903;
}

/**
 * Unable to upload file to transcoder
 */
class SystemFailedToUploadFileException extends ApiException
{
	protected $code = 1904;
}

/**
 * Syntax error in template file
 */
class TemplateErrorFillingException extends ApiException
{
	protected $code = 2000;
}

/**
 * Unknown vendor
 */
class VendorUnknownException extends ApiException
{
	protected $code = 2100;
}

/**
 * Unknown homepage row
 */
class HomepageUnknownRowException extends ApiException
{
	protected $code = 2101;
}

/**
 * Unknown homepage
 */
class HomepageUnknownHomepageException extends ApiException
{
	protected $code = 2102;
}

/**
 * Duplicate homepage priority
 */
class HomepageDuplicatePriorityException extends ApiException
{
	protected $code = 2103;
}

/**
 * Invalid homepage category selection search criteria
 */
class HomepageInvalidCategorySelectionSearchCriteriaException extends ApiException
{
	protected $code = 2104;
}

/**
 * Unknown edge
 */
class EdgeUnknownException extends ApiException
{
	protected $code = 2200;
}

/**
 * Inactive edge - can be thrown while requesting stream from an inactive edge server
 */
class EdgeInactiveException extends ApiException
{
	protected $code = 2201;
}

/**
 * Unknown OTA device
 */
class OtaUnknownDeviceException extends ApiException
{
	protected $code = 2300;
}

/**
 * Unknown OTA version
 */
class OtaUnknownVersionException extends ApiException
{
	protected $code = 2301;
}

/**
 * Unknown homepage advert
 */
class AdvertHomepageUnknownException extends ApiException
{
	protected $code = 2400;
}

/**
 * Unknown app
 */
class AppUnknownException extends ApiException
{
	protected $code = 2500;
}

/**
 * Unknown content ID - thrown by widevine proxy while checking license
 */
class DrmUnknownContentIdException extends ApiException
{
	protected $code = 2601;
}

/**
 * Unknown customer's authorization token in DRM communication
 */
class DrmUnknownTokenException extends ApiException
{
	protected $code = 2602;
}

/**
 * Invalid widevine request received on proxy
 */
class DrmInvalidRequestException extends ApiException
{
	protected $code = 2603;
}

/**
 * Geolocation library not installed, please contact moTV.eu team for resolution
 */
class DrmIpCountryDatabaseErrorException extends ApiException
{
	protected $code = 2604;
}

/**
 * DRM server returned error while trying to obtain license for playback of encrypted content
 */
class DrmUnableToGetLicenseException extends ApiException
{
	protected $code = 2605;
}

/**
 * Unable to contact DRM server (for example widevine)
 */
class DrmUnableToContactServerException extends ApiException
{
	protected $code = 2606;
}

/**
 * Platform is insecure for widevine playback
 */
class WidevinePlatformInsecureException extends ApiException
{
	protected $code = 2700;
}

/**
 * Error in Centreon configuration file
 */
class CentreonMissingConfigValueException extends ApiException
{
	protected $code = 2800;
}

/**
 * Unable to retrieve marlin's streaming token
 */
class MarlinUnableToRetrieveLicenseException extends ApiException
{
	protected $code = 2900;
}

/**
 * Recommendation engine XROAD has been disabled
 */
class RecommendationEngineDisabledException extends ApiException
{
	protected $code = 3000;
}

/**
 * Unknown asset type
 */
class RecommendationEngineUnknownTypeException extends ApiException
{
	protected $code = 3001;
}

/**
 * Unknown IP range
 */
class IpRangeUnknownException extends ApiException
{
	protected $code = 3100;
}

/**
 * Unknown storage
 */
class StorageUnknownException extends ApiException
{
	protected $code = 3200;
}

/**
 * Reserved for internal purposes
 */
class MotvReserved01Exception extends ApiException
{
	protected $code = 3300;
}

/**
 * Increase the size of search criteria (minimum 2 characters)
 */
class SearchTooShortException extends ApiException
{
	protected $code = 3400;
}

/**
 * Given string is not valid base64 encoded image
 */
class ImageInvalidBase64Exception extends ApiException
{
	protected $code = 3500;
}

/**
 * Unknown word
 */
class WordUnknownException extends ApiException
{
	protected $code = 3600;
}

/**
 * Duplicate word
 */
class WordDuplicateException extends ApiException
{
	protected $code = 3601;
}

/**
 * Unknown file
 */
class FileUnknownException extends ApiException
{
	protected $code = 3700;
}

/**
 * Unknown DVB region
 */
class DvbRegionUnknownException extends ApiException
{
	protected $code = 3800;
}

/**
 * Unknown recognition model
 */
class RecognitionUnknownModelException extends ApiException
{
	protected $code = 3900;
}

/**
 * Unknown recognition model channel
 */
class RecognitionUnknownModelChannelException extends ApiException
{
	protected $code = 3901;
}

/**
 * Unknown template image
 */
class RecognitionUnknownTemplateImageException extends ApiException
{
	protected $code = 3902;
}

/**
 * Unknown training image
 */
class RecognitionUnknownTrainingImageException extends ApiException
{
	protected $code = 3903;
}

/**
 * Training image cannot be deleted
 */
class RecognitionTrainingImageDeleteException extends ApiException
{
	protected $code = 3904;
}

/**
 * Unknown advert unit
 */
class AdvertUnknownUnitException extends ApiException
{
	protected $code = 4000;
}

/**
 * Unknown campaign
 */
class CampaignUnknownException extends ApiException
{
	protected $code = 4002;
}

/**
 * Advert signature failture
 */
class AdvertSignatureFailureException extends ApiException
{
	protected $code = 4003;
}

/**
 * Unknown campaign section
 */
class CampaignUnknownSectionException extends ApiException
{
	protected $code = 4004;
}
