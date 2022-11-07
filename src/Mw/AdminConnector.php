<?php

/**
 * Generated on Mon, 7 Nov 2022 8:46:10
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Mw;

class AdminConnector extends \Motv\Connector\Connector
{
	/** @var string */
	protected $namespace = 'Mw';

	/** @var string */
	protected $headerName = 'Authorization-user';

	/** @var array */
	protected $entitiesNamespaces = ['Motv\Connector\Mw\Entities\Mw\\', 'Motv\Connector\Mw\Entities\ApiSupport\\'];
	protected $exceptions = '{"-1":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\ApiExternalException","0":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\UnknownErrorException","3":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\UnathorizedException","4":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\UnknownModuleException","5":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\UnknownMethodException","6":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\MissingParameterException","7":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\InvalidRequestDataException","8":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ApplicationMemoryLimitException","9":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\UndefinedRightException","10":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\ParameterWrongTypeException","11":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\DatabaseErrorTryAgainException","12":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\InvalidParameterValueException","13":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RedisErrorTryAgainException","14":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\InvalidLoginAndPasswordException","20":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\LoginIncorrectHeaderFormatException","21":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\LoginIncorrectUsernamePasswordException","22":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\LoginInactiveUserException","23":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\LoginInactiveRoleException","24":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\LoginTokenExpiredException","25":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\LanguageUnknownException","26":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\GeneralException","27":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\MissingHeaderException","28":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\UnathorizedInternalException","29":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\DatabaseSelectionException","30":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\WhereSelectionParseException","50":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ScanDirFailedException","100":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerUnknownException","101":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerTooManyFoundException","102":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerDuplicateLoginException","103":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerIncorrectLoginPasswordException","104":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerNotLoggedInException","105":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerInvalidAuthorizationHeaderException","106":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerUnknownQrException","107":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerPasswordFormatInvalidException","108":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerLicenseLimitExceededException","109":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerDuplicateMacException","110":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerUnknownMacException","111":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerMacLoginDisabledException","112":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerPasswordSameAsLoginException","113":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerQrCodeVendorException","114":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CustomerLockedException","200":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ProfileUnknownException","201":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ProfileCannotDeleteException","202":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ProfileDuplicateNameException","203":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ProfileInvalidBirthdayException","300":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelCategoryUnknownException","400":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\TranscoderUnknownException","401":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\TranscoderDuplicateNameException","402":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\TranscoderUnableToContactException","403":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\TranscoderUnknownStreamRecordingException","404":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\TranscoderNotDownloadableStreamRecordingException","500":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CategoryUnknownException","502":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CategoryDuplicateNameException","503":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CategoryIsNotEmptyException","600":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\PackageUnknownException","601":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\PackageNotActiveException","602":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\PackageCannotBeRemovedException","700":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ConfigUnknownValueException","800":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EpgUnknownEpgException","801":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EpgXmlMissingTagException","802":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EpgXmlMissingAttributeException","803":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EpgXmlDateParseErrorException","804":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EpgXmlSetErrorException","805":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EpgInsertErrorException","806":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EpgUnknownEpgEventException","807":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EpgUnknownRatingException","808":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EpgUnknownPlaylistException","900":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelUnknownException","902":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelStreamUnavailableException","903":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelUnathorizedException","905":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelDuplicateBindIpPortCombinationException","906":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelDuplicateOutputIpPortCombinationException","907":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelAudioInvalidRoleException","908":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelImportErrorException","909":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelSubtitleInvalidRoleException","910":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelAgeRestrictionException","911":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelGeoblockRestrictionException","912":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelAudioDuplicateRoleException","913":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelSubtitleDuplicateRoleException","914":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelIpRangeRestrictionException","915":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelFfprobeSaveFirstException","916":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ChannelCannotDeleteException","1000":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodUnknownException","1001":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodUnathorizedException","1003":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodFileErrorException","1004":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodCannotTranscodeException","1005":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodSubtitleVttException","1006":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodAudioInvalidRoleException","1007":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodSubtitleInvalidRoleException","1008":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodCannotChangeTransoderException","1009":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodYoutubeImportException","1010":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodMinimumAgeRestrictionException","1011":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodFailedToUploadChunkException","1025":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VodGroupUnknownException","1050":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\GenreUnknownException","1051":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\GenreDuplicateNameException","1052":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\GenreIsNotEmptyException","1100":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\RoleUnknownException","1101":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\RoleDuplicateNameException","1300":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\TemplateUnknownException","1301":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\TemplateUsedException","1302":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\TemplateDuplicateNameException","1400":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecordingExceededLengthException","1401":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecordingUnknownException","1500":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DeviceCountExceededException","1501":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DeviceUnknownException","1502":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DeviceConcurrentCountExceededException","1503":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DeviceUnknownTypeException","1504":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DeviceFailedToRetrieveWidevineProvisioningException","1600":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\PersonUnknownPersonException","1601":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\PersonDuplicateNameException","1700":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ReportUnknownReportException","1702":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ReportQueryErrorException","1703":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ReportCannotEditPredefinedException","1800":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\UserUnknownException","1801":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\UserDuplicateEmailException","1900":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\SystemSupervisorErrorException","1901":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\SystemBackupUnknownFileException","1902":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\SystemSupervisorUnknownProcessException","1903":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\SystemCommandFailedException","1904":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\SystemFailedToUploadFileException","1905":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\SystemUnknownIndexSystemStatisticsException","2000":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\TemplateErrorFillingException","2100":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VendorUnknownException","2101":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\HomepageUnknownRowException","2102":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\HomepageUnknownHomepageException","2103":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\HomepageDuplicatePriorityException","2104":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\HomepageInvalidCategorySelectionSearchCriteriaException","2105":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VendorRightException","2106":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VendorUnknownAvatarException","2107":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\HomepageCannotBeRemovedException","2150":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\VendorLicensesExceededException","2200":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EdgeUnknownException","2201":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\EdgeInactiveException","2300":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\OtaUnknownDeviceException","2301":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\OtaUnknownVersionException","2302":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\OtaBadVersionException","2400":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\AdvertHomepageUnknownException","2500":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\AppUnknownException","2601":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DrmUnknownContentIdException","2602":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DrmUnknownTokenException","2603":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DrmInvalidRequestException","2604":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DrmIpCountryDatabaseErrorException","2605":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DrmUnableToGetLicenseException","2606":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DrmUnableToContactServerException","2607":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DrmUnathorizedKeyException","2700":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\WidevinePlatformInsecureException","2800":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CentreonMissingConfigValueException","2900":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\AppManagerUnknownException","3000":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecommendationEngineDisabledException","3001":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecommendationEngineUnknownTypeException","3100":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\IpRangeUnknownException","3200":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\StorageUnknownException","3300":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\MotvReserved01Exception","3400":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\SearchTooShortException","3500":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ImageInvalidBase64Exception","3600":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\WordUnknownException","3601":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\WordDuplicateException","3700":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\FileUnknownException","3701":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\FileNotFoundException","3702":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\FileMustBeChangelogException","3800":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DvbRegionUnknownException","3900":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecognitionUnknownModelException","3901":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecognitionUnknownModelChannelException","3902":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecognitionUnknownTemplateImageException","3903":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecognitionUnknownTrainingImageException","3904":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecognitionTrainingImageDeleteException","3905":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecognitionApiException","3906":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecognitionStateAndTypeDisallowSelectLogoException","3907":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecognitionProgramSegmentDuplictyException","3908":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RecognitionUnknownProgramSegmentException","4000":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\AdvertUnknownUnitException","4002":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CampaignUnknownException","4003":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\AdvertSignatureFailureException","4004":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\CampaignUnknownSectionException","4005":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\AdvertRedirectException","4100":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ProviderUnknownException","4101":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ProviderMacDuplicateException","4102":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ProviderUnknownMacException","4200":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\PushMessageSendException","4300":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\RemoteMwUnknownException","4400":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\DocumentationEntityNotFoundException","4401":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\DocumentationUnknownApiNameException","4402":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\DocumentationEnumNotFoundException","4403":"Motv\\\Connector\\\Mw\\\Exceptions\\\ApiSupport\\\DocumentationModelNotFoundException","4500":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\OnboardingUnknownException","4600":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\SystemSettingsMissingConfigurationKeyException","4700":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\BackupMissingConfigurationKeyException","4800":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\GrafanaCustomDashboardUnknownException","4801":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\GrafanaFolderUnknownException","4900":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DetectorUnknownException","4901":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\DetectorDuplicateNameException","4950":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ReportScheduleUnknownException","4951":"Motv\\\Connector\\\Mw\\\Exceptions\\\Mw\\\ReportScheduleAttachementUnknownException"}';


	public function Advert(): Advert
	{
		return new Advert($this);
	}


	public function AdvertHomepage(): AdvertHomepage
	{
		return new AdvertHomepage($this);
	}


	public function App(): App
	{
		return new App($this);
	}


	public function AppManager(): AppManager
	{
		return new AppManager($this);
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


	public function Detector(): Detector
	{
		return new Detector($this);
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


	public function Messaging(): Messaging
	{
		return new Messaging($this);
	}


	public function Monitoring(): Monitoring
	{
		return new Monitoring($this);
	}


	public function Onboarding(): Onboarding
	{
		return new Onboarding($this);
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


	public function Recognition(): Recognition
	{
		return new Recognition($this);
	}


	public function Recording(): Recording
	{
		return new Recording($this);
	}


	public function Report(): Report
	{
		return new Report($this);
	}


	public function Right(): Right
	{
		return new Right($this);
	}


	public function Search(): Search
	{
		return new Search($this);
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


	public function Translator(): Translator
	{
		return new Translator($this);
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
