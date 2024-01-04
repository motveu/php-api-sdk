<?php

/**
 * Generated on Wed, 3 Jan 2024 13:24:27
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Mw\Enums;

interface MotvEnum
{
}


namespace Motv\Connector\Mw\Enums\Mw;

enum AdvertHomepageActionTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case NONE = 'none';
	case ENLARGE = 'enlarge';
	case URL = 'url';
}

enum AdvertHomepageContentTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case IMAGE = 'image';
	case VIDEO = 'video';
}

enum AdvertMidrollEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case BY_MINUTE = 'by_minute';
	case BY_PERCENT = 'by_percent';
}

enum AdvertTrackingEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case CLICK = 'click';
	case IMPRESSION = 'impression';
	case START = 'start';
	case FIRST_QUARTILE = 'firstQuartile';
	case MIDPOINT = 'midpoint';
	case THIRD_QUARTILE = 'thirdQuartile';
	case COMPLETE = 'complete';
	case SKIP = 'skip';
}

enum AdvertUnitLimitationDurationEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case DAY = 'day';
	case WEEK = 'week';
	case MONTH = 'month';
	case ALL = 'all';
}

enum AdvertUnitPositionEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PREROLL = 'preroll';
	case MIDROLL = 'midroll';
	case POSTROLL = 'postroll';
	case IMAGE_CARD = 'card';
	case IMAGE_CHANNEL_EPG = 'cardChannelEpg';
	case IMAGE_BOTTOM = 'cardBottom';
	case IMAGE_TOP = 'cardTop';
}

enum AdvertUnitStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case UNAVAILABLE = '0';
	case AVAILABLE = '1';
}

enum AdvertUnitTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case IMAGE = 'image';
	case VIDEO = 'video';
	case ADMOB = 'admob';
	case VAST = 'vast';
}

enum AndroidTVPlayerEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case EXOPLAYER = 'exoplayer';
	case NATIVE_PLAYER = 'native player';
}

enum AnsiblePlaybookEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PORTAL = 'deploy/portal.yml';
	case EDGE = 'deploy/edge.yml';
	case VARNISH = 'deploy/varnish.yml';
	case HAPROXY = 'deploy/haproxy.yml';
	case TRANSCODER = 'deploy/transcoder.yml';
	case BASIC_INITIALIZATION = '02_lxd_host_init.yml';
}

enum AppAnalyticsSelectionTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case DETAIL = 'detail';
	case PLAY = 'play';
}

enum AudioChannelEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case MONO = 'mono';
	case STEREO = 'stereo';
	case SURROUND = '5.1';
}

enum BrowserEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case SAFARI = 'safari';
}

enum ChannelBroadcastTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case DVB_S = 'TYPE_DVB_S';
	case DVB_C = 'TYPE_DVB_C';
	case DVB_T = 'TYPE_DVB_T';
	case DVB_T2 = 'TYPE_DVB_T2';
	case ISDB_T = 'TYPE_ISDB_T';
}

enum ChannelEpgImageEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case DEFAULT_NO_IMAGE = '0';
	case CUSTOM_NO_IMAGE = '1';
}

enum ChannelInputTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case FILE = 'file';
	case URL = 'url';
}

enum ChannelManifestFileTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case MPD = 'mpd';
	case M3U8 = 'm3u8';
}

enum ChannelManifestTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case DASH = 'dash';
	case HLS = 'hls';
}

enum ChannelRecordingStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PENDING = '0';
	case SUCCESS = '1';
	case FAILURE = '2';
}

enum ChannelSourceTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case REGULAR = 'regular';
	case HTTP = 'http';
	case REMOTE = 'remote';
}

enum ChannelStreamTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case IP = 'IP';
	case MCAST = 'MCAST';
	case BCAST = 'BCAST';
}

enum ChannelSubtitleEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case DIRECT = '0';
	case BIND = '1';
}

enum ChannelTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case CHANNEL = 'channel';
	case RADIO = 'radio';
	case MOSAIC = 'mozaic';
}

enum ContainerParameterTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case STATIC_VLAN16 = 'lxd_ip_vlan16';
	case ELASTICSEARCH_MEMORY_LIMIT = 'elasticsearch_memory_limit';
	case MYSQL_BUFFER_SIZE = 'mysql_buffer_size';
	case SMS_URL = 'sms_url';
	case MW_URL = 'mw_url';
	case VARNISH_MEMORY = 'VARNISH_MALLOC';
	case EDGE_MOUNT = 'edge_mount';
	case EDGE_URL = 'edge_url';
}

enum ContainerTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case DNSMASQ = 'dnsmasq';
	case HAPROXY = 'haproxy';
	case PROMETHEUS = 'prometheus';
	case MYSQL = 'mysql';
	case REDIS = 'redis';
	case ELASTICSEARCH = 'elasticsearch';
	case RABBITMQ = 'rabbitmq';
	case GRAFANA = 'grafana';
	case SMS = 'sms';
	case PORTAL = 'portal';
	case MIDDLEWARE = 'middleware';
	case STORAGE = 'storage';
	case TRANSCODER = 'transcoder';
	case VARNISH = 'varnish';
	case EDGE = 'edge';
	case LOKI = 'loki';
	case PMM = 'pmm';
	case DETECTOR = 'detector';
}

enum ContentTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case LIVE = 'live';
	case TIMESHIFT = 'timeshift';
	case CATCHUP = 'catchup';
	case RECORDING = 'recording';
	case VOD = 'vod';
}

enum DeviceEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case WEB_PLAYER = 'web player';
	case IOS = 'ios';
	case ANDROID = 'android';
	case ANDROID_TV = 'android tv';
	case TIZEN = 'tizen';
	case WEBOS = 'webos';
	case TVOS = 'tvos';
	case ROKU = 'roku';
	case OTA = 'ota';
	case RDK = 'rdk';
}

enum DrmTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case CHANNEL = 'channel';
	case EVENT = 'event';
	case VOD = 'vod';
}

enum EncryptionEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case WIDEVINE_DRM = 'widevine';
	case FAIRPLAY_DRM = 'fairplay';
}

enum FilesLauncherEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case AMAZON_STORE = 'amazon store';
	case GOOGLE_PLAY_STORE = 'google play store';
	case AOSP_LAUNCHER = 'aosp launcher';
	case ATV_CERTIFIED_LAUNCHER = 'atv certified launcher';
}

enum FilesTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case CHANGELOG = 'changelog';
	case APP = 'app';
}

enum FtpProcessStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case OK = '1';
	case MISSING_METADATA = '2';
	case INVALID_METADATA_JSON = '3';
	case INVALID_METADATA = '4';
	case MISSING_FILE = '5';
	case UNKNOWN_API_EXCEPTION = '6';
	case UNKNOWN_EXCEPTION = '7';
	case FTP_EXCEPTION = '8';
}

enum FtpTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case FTP = 'ftp';
	case SFTP = 'sftp';
}

enum GrafanaThemesEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case DARK = 'dark';
	case LIGHT = 'light';
}

enum HomepageLayoutContentEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case ALL = 'all';
	case ONLY_MOVIES = 'only movies';
	case ONLY_CATEGORIES = 'only categories';
	case TV = 'TV';
}

enum HomepageLayoutFullsizeTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case VOD = 'vod';
	case EPG = 'epg';
	case HOMESCREEN = 'homescreen';
	case PLAYLIST = 'playlist';
}

enum HomepageLayoutFullsizeViewTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PLAYLIST = 'playlist';
	case CAROUSEL = 'carousel';
}

enum HomepageLayoutSortEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case SCORE = 'sort score';
	case POPULARITY = 'sort popularity';
}

enum HomepageLayoutWatchStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case ALL = 'all';
	case EXCLUDE_FINISHED = 'exclude finished';
	case ONLY_FINISHED = 'only finished';
}

enum ImageScalingEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case FIT = 'fit';
	case FILL = 'fill';
}

enum ImageValidatorTransparencyEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case REQUIRED = 'required';
	case NOT_ALLOWED = 'not allowed';
	case OPTIONAL = 'optional';
}

enum ImageValidatorTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case EXACT_SIZE = 'exact size';
	case MINIMUM_EDGE_SIZE = 'minimum edge size';
	case CUSTOM = 'custom';
}

enum LoggerEventsEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PACKAGE_SUBSCRIPTION = 'package subscription';
	case TVOD_SUBSCRIPTION = 'tvod activation';
	case PACKAGE_CANCELLATION = 'package cancellation';
	case RECORDING_ADDED = 'recording added';
	case RECORDING_REMOVED = 'recording removed';
	case RECORDING_REMOVED_EXPIRED = 'recording removed (expired)';
	case DEVICE_ADDED = 'device added';
	case DEVICE_REMOVED = 'device removed';
	case CUSTOMER_SEARCH = 'customer search';
	case CUSTOMER_PASSWORD_UPDATE = 'customer password update';
	case DEVICE_BROADCAST_CHANGE = 'device broadcast update';
	case CUSTOMER_LOGIN = 'customer login';
	case CUSTOMER_QR_LOGIN = 'customer QR login';
	case CUSTOMER_MAC_LOGIN = 'customer MAC login';
	case CUSTOMER_PUSH_MESSAGE = 'customer push message';
	case TOPIC_PUSH_MESSAGE = 'topic push message';
	case PROFILE_DELETE = 'profile delete';
	case OFFLINE_CONTENT = 'offline content';
}

enum MessagingActionTopicEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case REMOVE_FROM_TOPIC = 'batchRemove';
	case ADD_TO_TOPIC = 'batchAdd';
}

enum MessagingPushMessageEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case MESSAGE = '1';
	case OSD_MESSAGE = '2';
	case RESTART = '3';
	case LOGOUT = '4';
	case CHANNEL_SWITCH = '5';
	case FIRMWARE_UPDATE = '6';
	case CLEAR_CACHE = '7';
	case FINGERPRINT = '8';
	case MY_LIST_CHANGED = '9';
	case RECORDING_CHANGED = '10';
}

enum MessagingPushMessagePriorityEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case NORMAL = 'normal';
	case HIGH = 'high';
}

enum MonitoringChannelStateEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case NOT_RUNNING = '0';
	case OK = '1';
	case MPD_NOT_FOUND = '2';
	case MPD_NOT_UPDATED = '3';
	case LIVE_FFMPEG_LOG_NOT_FOUND = '4';
	case LIVE_FFMPEG_NOT_RUNNING = '5';
	case LIVE_FFMPEG_ISSUE = '10';
	case MPD_GAPS = '11';
	case MPD_SUBTITLE_DRIFT = '12';
	case MPD_INVALID = '13';
	case MPD_EMPTY_TRACK = '14';
	case MPD_MISSING_TRACK = '15';
	case UNICAST_CONFIG_CHANGED = '16';
	case MANUAL_RESTART = '17';
	case STARTED_NOT_RUNNING = '18';
	case MPD_AV_DRIFT = '19';
	case MPD_SUBTITLE_DRIFT_FORCE_RESTART = '20';
	case AV_SYNC = '21';
}

enum MonitoringErrorEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case INFO = '0';
	case WARNING = '1';
	case ERROR = '2';
}

enum MonitoringEventChannelEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case RESTART = '1';
	case EVENT_ERROR = '2';
	case FFMPEG = '3';
	case PACKAGER = '5';
	case MPD_DRIFT = '6';
	case MPD_GAP = '7';
	case AVSYNC_CHECK = '8';
}

enum PackageOptionEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case SIMPLE = 'simple';
	case DEFAULT = 'default';
}

enum PersonEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case ACTOR = 'actor';
	case DIRECTOR = 'director';
}

enum PipelineStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PENDING = 'pending';
	case SUCCESS = 'success';
	case FAILURE = 'failure';
}

enum PipelineTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PORTAL_DEPLOY = 'portal_deploy';
	case PORTAL_UPDATE = 'portal_update';
	case TRANSCODER_CONTAINER_UPDATE = 'transcoder_container_update';
	case CORS = 'cors';
	case IPTABLES = 'iptables';
	case HAPROXY = 'haproxy';
	case PROXIES = 'proxies';
}

enum PlaylistItemTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case VOD = 'vod';
	case EPG = 'epg';
	case GENRE = 'genre';
	case CATEGORY = 'category';
}

enum PortalLanguageEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case EN = 'en';
	case CS = 'cs';
	case PT = 'pt';
	case ES = 'es';
	case MN = 'mn';
	case DE = 'de';
	case FR = 'fr';
}

enum ProfileSDEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case ONLY = '1';
	case HD = '2';
	case UHD1 = '3';
	case UHD2 = '4';
}

enum ProfileSDLabelEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case AUDIO = 'AUDIO';
	case SD = 'SD';
	case HD = 'HD';
	case UHD1 = 'UHD1';
	case UHD2 = 'UHD2';
}

enum ProfileSDNameEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case ONLY = 'SD_ONLY';
	case HD = 'SD_HD';
	case UHD1 = 'SD_UHD1';
	case UHD2 = 'SD_UHD2';
}

enum PublicMulticastTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case SEND = 'send';
	case RECEIVE = 'receive';
}

enum RecognitionMethodEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case IGNORE_BACKGROUND = 'ignore background';
	case DARK_SOLID_BACKGROUND = 'dark solid background';
	case LIGHT_SOLID_BACKGROUND = 'light solid background';
}

enum RecognitionModelStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case CREATED = '0';
	case TRAINING_SET_COLLECTION = '1';
	case TRAINING_SET_COMPLETED = '2';
	case TRAINING_SET_CONFIRMED = '3';
	case LOGO_DETECTION_TRAINED = '4';
	case FULLY_TRAINED = '5';
}

enum RecommendationEngineCardAssetTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case YOUTUBE = 'Youtube';
	case PORNHUB = 'Pornhub';
	case XVIDEOS = 'XVideos';
	case TV = 'TV';
	case RECORDING = 'Recording';
	case VOD = 'VOD';
	case CHANNEL = 'Channel';
	case PERSON = 'Person';
	case CATEGORY = 'Category';
	case GENRE = 'Genre';
	case IMAGE = 'Image';
	case VIDEO = 'Video';
	case ADMOB = 'Admob';
}

enum RecommendationEngineCriteriaEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case TITLE = 'title';
	case GENRES = 'genres';
	case SERIE_NAME = 'serieName';
	case ACTORS = 'actors';
	case DIRECTORS = 'directors';
}

enum RecommendationEngineHomepageLayoutEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PRIMETIME = 'primetime';
	case MOST_WATCHED = 'most watched';
	case CONTINUE_WATCHING = 'continue watching';
	case CONTINUE_WATCHING_CHANNELS = 'continue watching channels';
	case FAVORITE_CHANNELS = 'favorite channels';
	case CATEGORY_SELECTION = 'category selection';
	case PLAYLIST = 'playlist';
	case MY_RECORDINGS = 'my recordings';
	case MY_LIST = 'my list';
	case IMAGES = 'images';
	case SIMILAR_TO_PAST = 'similar to past';
	case RECORDING = 'recording';
	case SEARCH = 'search';
	case SIMILAR = 'similar';
	case VOD = 'vod';
	case CATEGORY = 'category';
	case POPULAR_SEARCHES = 'popular searches';
	case CHANNELS = 'channels';
}

enum RecommendationEngineOperatorEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case MUST_NOT = 'must_not';
	case SHOULD = 'should';
	case MUST = 'must';
}

enum RecommendationEngineRowStyleEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case CONDENSED = 'condensed';
	case NORMAL = 'normal';
	case SMALL_WIDE = 'small_wide';
	case NORMAL_WIDE = 'normal_wide';
	case LARGE_WIDE = 'large_wide';
	case LARGE = 'large';
	case FULL_WIDTH = 'full_width';
	case FULL_WIDTH_MIDDLE = 'full_width_middle';
}

enum ReportFilterEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case TEXT = 'text';
	case DATE = 'date';
	case PACKAGE = 'package';
	case VENDOR = 'vendor';
}

enum ReportScheduleAttachementTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case GRAFANA_DASHBOARD = 'grafana dashboard';
	case GRAFANA_EXCEL = 'grafana excel';
	case GRAFANA_CSV = 'grafana csv';
}

enum ReportScheduleRepeatEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case HOUR = 'hour';
	case DAY = 'day';
	case WEEK = 'week';
	case MONTH = 'month';
}

enum StorageStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PENDING = '0';
	case SUCCESS = '1';
	case FAILURE = '2';
}

enum StorageTransferEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case VOD_RAW = 'vod raw';
	case VOD = 'vod';
}

enum StreamRecordingStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PENDING = '0';
	case COMPLETED = '1';
	case IN_PROCESS = '2';
	case FAILED = '3';
}

enum StreamTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case UNICAST = 'unicast';
	case MULTICAST = 'multicast';
	case BROADCAST = 'broadcast';
}

enum TemplateCodecEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case H264 = 'h264';
	case HEVC = 'hevc';
}

enum TemplateEncryptionEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case CENC = 'cenc';
	case CBCS = 'cbcs';
	case CLEAR = 'clear';
}

enum TemplateTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case LIVE = 'live';
	case VOD = 'vod';
	case RECORDING = 'recording';
	case MULTICAST = 'multicast';
}

enum TranslationsFormatEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case XML = 'xml';
	case ANDROID = 'android';
	case IOS = 'ios';
	case JSON = 'json';
}

enum VendorAppGeneralStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case OPEN = 'open';
	case SEND = 'send';
}

enum VendorAppSectionEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case GENERAL = 'general';
	case ANDROID_TV = 'android_tv';
	case ANDROID = 'android';
	case IOS = 'ios';
	case TVOS = 'tvos';
	case SAMSUNG_LG = 'samsung_lg';
	case ROKU = 'roku';
}

enum VendorAppSectionStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case OPEN = 'open';
	case WAITING_FOR_APPROVAL = 'waiting for approval';
	case WORK_IN_PROGRESS = 'work in progress';
	case DONE = 'done';
}

enum VendorBackgroundTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case SOLID_COLOR = 'solid color';
	case GRADIENT = 'gradient';
}

enum VendorLicenseTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case STANDARD = 'standard';
	case ACTIVE = 'active';
}

enum VendorLockedItemTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case TEXT = 'text';
	case IMAGE = 'image';
}

enum VideoInputCodecEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case MPEG = 'mpeg2';
	case H264 = 'h264';
	case HEVC = 'hevc';
	case VP9 = 'vp9';
	case PNG = 'png';
}

enum Vod3rdPartyEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case VUBIQIUTY = 'vubiquity';
	case MOTV_FTP = 'motv_ftp';
}

enum VodExternalTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case YOUTUBE = 'youtube';
	case PORNHUB = 'pornhub';
	case XVIDEOS = 'xvideos';
}

enum VodStatusEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case CREATED = '0';
	case PENDING = '1';
	case SUCCESS = '2';
	case FAILED = '3';
}

enum VodTranscodingTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case VOD = 'vod';
	case TRAILER = 'trailer';
}

enum VodTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case STANDARD = 'standard';
	case LIVE = 'live';
}

enum WidevineRequestTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case PARSE = 'Parse request';
	case LICENSE = 'Retrieve license';
	case CERTIFICATE = 'Certificate request';
	case PROVISIONING = 'Provisioning request';
}

enum WidevineResponseTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case TIMEOUT_SUCCESS = 'OK';
	case NETWORK_ERROR_CODE = 'Network error';
	case PARSE_FAILURE_CODE = 'Failed to parse JSON';
}


namespace Motv\Connector\Mw\Enums\ApiSupport;

enum WhereTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case EQUAL = '=';
	case NOT_EQUAL = '!=';
	case SMALLER = '<';
	case BIGGER = '>';
	case SMALLER_EQUAL = '<=';
	case BIGGER_EQUAL = '>=';
	case LIKE = 'like';
	case NOT_LIKE = 'not like';
	case IS_NULL = 'is null';
	case IS_NOT_NULL = 'is not null';
	case IN = 'in';
	case NOT_IN = 'not in';
	case TEXT = 'FilterText';
	case SELECT = 'FilterSelect';
	case MULTI_SELECT = 'FilterMultiSelect';
	case DATE_RANGE = 'FilterDateRange';
	case DATETIME_RANGE = 'FilterDatetimeRange';
	case DATE = 'FilterDate';
	case DATETIME = 'FilterDatetime';
	case CHECKBOX = 'FilterCheckbox';
}

enum WhereValueTypeEnum: string implements \Motv\Connector\Mw\Enums\MotvEnum
{
	case NUMBER = '%i';
	case FLOAT = '%f';
	case TEXT = '%s';
	case DATE = '%d';
	case DATETIME = '%t';
	case BOOL = '%b';
	case IN = '%in';
	case INET6_ATON = 'INET6_ATON(?)';
}
