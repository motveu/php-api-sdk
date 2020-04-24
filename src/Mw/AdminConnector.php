<?php

/**
 * Generated on Fri, 24 Apr 2020 9:29:56
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Mw;

class AdminConnector extends \Motv\Connector
{
	/** @var string */
	protected $namespace = 'Mw';

	/** @var string */
	protected $headerName = 'Authorization-user';

	protected $exceptions = '{"-1":"ApiExternalException","0":"UnknownErrorException","1":"SuccessException","3":"UnathorizedException","4":"UnknownModuleException","5":"UnknownMethodException","6":"MissingParameterException","7":"InvalidRequestDataException","8":"ApplicationMemoryLimitException","9":"UndefinedRightException","10":"ParameterWrongTypeException","11":"DatabaseErrorTryAgainException","12":"InvalidParameterValueException","20":"LoginIncorrectHeaderFormatException","21":"LoginIncorrectUsernamePasswordException","22":"LoginInactiveUserException","23":"LoginInactiveRoleException","24":"LoginTokenExpiredException","25":"LanguageUnknownException","26":"GeneralException","27":"MissingHeaderException","28":"UnathorizedInternalException","50":"ScanDirFailedException","100":"CustomerUnknownException","101":"CustomerTooManyFoundException","102":"CustomerDuplicateLoginException","103":"CustomerIncorrectLoginPasswordException","104":"CustomerNotLoggedInException","105":"CustomerInvalidAuthorizationHeaderException","106":"CustomerUnknownQrException","107":"CustomerPasswordFormatInvalidException","108":"CustomerLicenseLimitExceededException","109":"CustomerDuplicateMacException","110":"CustomerUnknownMacException","111":"CustomerMacLoginDisabledException","200":"ProfileUnknownException","201":"ProfileCannotDeleteException","202":"ProfileDuplicateNameException","203":"ProfileInvalidBirthdayException","204":"ProfileInvalidPinException","300":"ChannelCategoryUnknownException","400":"TranscoderUnknownException","401":"TranscoderDuplicateNameException","402":"TranscoderUnableToContactException","403":"TranscoderUnknownStreamRecordingException","404":"TranscoderNotDownloadableStreamRecordingException","500":"CategoryUnknownException","502":"CategoryDuplicateNameException","600":"PackageUnknownException","601":"PackageNotActiveException","700":"ConfigUnknownValueException","800":"EpgUnknownEpgException","801":"EpgXmlMissingTagException","802":"EpgXmlMissingAttributeException","803":"EpgXmlDateParseErrorException","804":"EpgXmlSetErrorException","805":"EpgInsertErrorException","806":"EpgUnknownEpgEventException","807":"EpgUnknownRatingException","808":"EpgUnknownPlaylistException","900":"ChannelUnknownException","902":"ChannelStreamUnavailableException","903":"ChannelUnathorizedException","904":"ChannelUnknownStreamTypeException","905":"ChannelDuplicateBindIpPortCombinationException","906":"ChannelDuplicateOutputIpPortCombinationException","907":"ChannelAudioInvalidRoleException","908":"ChannelImportErrorException","909":"ChannelSubtitleInvalidRoleException","910":"ChannelAgeRestrictionException","911":"ChannelGeoblockRestrictionException","912":"ChannelAudioDuplicateRoleException","913":"ChannelSubtitleDuplicateRoleException","914":"ChannelIpRangeRestrictionException","915":"ChannelFfprobeSaveFirstException","1000":"VodUnknownException","1001":"VodUnathorizedException","1002":"VodUnknownStreamTypeException","1003":"VodFileErrorException","1004":"VodCannotTranscodeException","1005":"VodSubtitleVttException","1006":"VodAudioInvalidRoleException","1007":"VodSubtitleInvalidRoleException","1050":"GenreUnknownException","1051":"GenreDuplicateNameException","1100":"RoleUnknownException","1101":"RoleDuplicateNameException","1200":"RevisionUnknownRevisionException","1201":"RevisionUnknownMultiselectRowException","1300":"TemplateUnknownException","1301":"TemplateUsedException","1302":"TemplateDuplicateNameException","1303":"TemplateCannotEditPredefinedException","1400":"RecordingExceededLengthException","1401":"RecordingUnknownException","1402":"RecordingUnknownStreamTypeException","1500":"DeviceCountExceededException","1501":"DeviceUnknownException","1502":"DeviceConcurrentCountExceededException","1503":"DeviceUnknownTypeException","1504":"DeviceFailedToRetrieveWidevineProvisioningException","1600":"PersonUnknownPersonException","1601":"PersonDuplicateNameException","1700":"StatisticsUnknownStatisticException","1702":"StatisticsQueryErrorException","1703":"StatisticsCannotEditPredefinedException","1800":"UserUnknownException","1801":"UserDuplicateEmailException","1900":"SystemSupervisorErrorException","1901":"SystemBackupUnknownFileException","1902":"SystemSupervisorUnknownProcessException","1903":"SystemCommandFailedException","1904":"SystemFailedToUploadFileException","2000":"TemplateErrorFillingException","2100":"VendorUnknownException","2101":"HomepageUnknownRowException","2102":"HomepageUnknownHomepageException","2103":"HomepageDuplicatePriorityException","2104":"HomepageInvalidCategorySelectionSearchCriteriaException","2200":"EdgeUnknownException","2201":"EdgeInactiveException","2300":"OtaUnknownDeviceException","2301":"OtaUnknownVersionException","2400":"AdvertHomepageUnknownException","2500":"AppUnknownException","2601":"DrmUnknownContentIdException","2602":"DrmUnknownTokenException","2603":"DrmInvalidRequestException","2604":"DrmIpCountryDatabaseErrorException","2605":"DrmUnableToGetLicenseException","2606":"DrmUnableToContactServerException","2700":"WidevinePlatformInsecureException","2800":"CentreonMissingConfigValueException","2900":"MarlinUnableToRetrieveLicenseException","3000":"RecommendationEngineDisabledException","3001":"RecommendationEngineUnknownTypeException","3100":"IpRangeUnknownException","3200":"StorageUnknownException","3300":"MotvReserved01Exception","3400":"SearchTooShortException","3500":"ImageInvalidBase64Exception","3600":"WordUnknownException","3601":"WordDuplicateException","3700":"FileUnknownException"}';


	public function AdvertHomepage(): AdvertHomepage
	{
		return new AdvertHomepage($this);
	}


	public function App(): App
	{
		return new App($this);
	}


	public function Backup(): Backup
	{
		return new Backup($this);
	}


	public function Category(): Category
	{
		return new Category($this);
	}


	public function Channel(): Channel
	{
		return new Channel($this);
	}


	public function ChannelCategory(): ChannelCategory
	{
		return new ChannelCategory($this);
	}


	public function Config(): Config
	{
		return new Config($this);
	}


	public function Country(): Country
	{
		return new Country($this);
	}


	public function Customer(): Customer
	{
		return new Customer($this);
	}


	public function Device(): Device
	{
		return new Device($this);
	}


	public function Documentation(): Documentation
	{
		return new Documentation($this);
	}


	public function Drm(): Drm
	{
		return new Drm($this);
	}


	public function Edge(): Edge
	{
		return new Edge($this);
	}


	public function Epg(): Epg
	{
		return new Epg($this);
	}


	public function EpgPlaylist(): EpgPlaylist
	{
		return new EpgPlaylist($this);
	}


	public function EpgRating(): EpgRating
	{
		return new EpgRating($this);
	}


	public function Genre(): Genre
	{
		return new Genre($this);
	}


	public function IpRange(): IpRange
	{
		return new IpRange($this);
	}


	public function Logger(): Logger
	{
		return new Logger($this);
	}


	public function Monitoring(): Monitoring
	{
		return new Monitoring($this);
	}


	public function Ota(): Ota
	{
		return new Ota($this);
	}


	public function Package(): Package
	{
		return new Package($this);
	}


	public function Person(): Person
	{
		return new Person($this);
	}


	public function Profile(): Profile
	{
		return new Profile($this);
	}


	public function Recording(): Recording
	{
		return new Recording($this);
	}


	public function Right(): Right
	{
		return new Right($this);
	}


	public function Role(): Role
	{
		return new Role($this);
	}


	public function Search(): Search
	{
		return new Search($this);
	}


	public function Statistic(): Statistic
	{
		return new Statistic($this);
	}


	public function Subscription(): Subscription
	{
		return new Subscription($this);
	}


	public function Template(): Template
	{
		return new Template($this);
	}


	public function Transcoder(): Transcoder
	{
		return new Transcoder($this);
	}


	public function User(): User
	{
		return new User($this);
	}


	public function Vendor(): Vendor
	{
		return new Vendor($this);
	}


	public function Vod(): Vod
	{
		return new Vod($this);
	}
}
