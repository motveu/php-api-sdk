<?php

/**
 * Generated on Wed, 9 Sep 2026 10:01:24
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms\Enums;

interface MotvEnum
{
}


namespace Motv\Connector\Sms\Enums\Sms;

enum CategoriesTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case NONE = 'none';
	case SINGLE = 'single';
	case DYNAMIC = 'dynamic';
}

enum CustomerFieldTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case STATIC_TEXT = 'static_text';
	case TEXT = 'text';
	case EMAIL = 'email';
	case PHONE = 'phone';
	case SELECT = 'select';
	case CHECKBOX = 'checkbox';
	case DATE = 'date';
	case RADIO = 'radio';
	case PASSWORD = 'password';
	case NUMBER = 'number';
	case FLOAT = 'float';
}

enum DelimiterEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case COMMA = ',';
	case SEMICOLONS = ';';
}

enum DeviceEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case ABV = 'abv';
	case APPLE = 'apple';
	case CARDLESS_CRYPTOGUARD = 'cardless_cryptoguard';
	case CARDLESS_VERIMATRIX = 'cardless_verimatrix';
	case FACEBOOK = 'facebook';
	case FOX = 'fox';
	case GOOGLE = 'google';
	case IRDETO = 'irdeto';
	case MOTV = 'motv';
	case PAIRED_CONAX = 'paired_conax';
	case PAIRED_CRYPTOGUARD = 'paired_cryptoguard';
	case PAIRED_NSTV = 'paired_nstv';
	case PAIRED_SAFEVIEW = 'paired_safeview';
	case SAFEVIEW_OTT = 'safeview_ott';
	case SMARTLABS = 'smartlabs';
	case NONE = 'none';
	case BEENIUS = 'beenius';
	case PAIRED_KINGVON = 'paired_kingvon';
	case MODERN_TV = 'modern_tv';
	case MODEM = 'modem';
	case PAIRED_GOSPELL = 'paired_gospell';
	case CTI = 'cti';
	case REX = 'rex';
	case CORPUS = 'corpus';
	case TIVO = 'tivo';
	case MTN = 'mtn';
}

enum EpgColumnTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case DATE_START = 'date_start';
	case DATE_END = 'date_end';
	case DATE_END_NEXT = 'date_end_next';
	case START = 'start';
	case END = 'end';
	case END_NEXT = 'end_next';
	case DURATION = 'duration';
	case TITLE = 'title';
	case SUB_TITLE = 'sub_title';
	case DESCRIPTION = 'description';
	case RATING = 'rating';
	case CATEGORY = 'category';
	case EPISODE_NUM = 'episode_num';
	case ICON = 'icon';
	case ACTORS = 'actors';
	case DIRECTOR = 'director';
}

enum EpgDatetimeFormatEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case HH_MM_SS = 'hh:mm:ss';
	case HH_MM = 'hh:mm';
	case MM_SS = 'mm:ss';
	case MINUTES = 'minutes';
	case SECONDS = 'seconds';
	case HOURS = 'hours';
}

enum EpgFormatEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case XLS = 'xlsx';
	case CSV = 'csv';
	case XML = 'xml';
}

enum EpgFrequencyCheckEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case NEVER = 'never';
	case H6 = '6h';
}

enum EpgSourceEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case EMAIL = '1';
	case FTP = '2';
	case HTTP = '3';
	case WEB_GRAB = '4';
	case SFTP = '5';
}

enum GroupActionPredefinedEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case MOTV_NOTIFICATION_SINGLE = 'motv_notification_single';
	case MOTV_OSD_SINGLE = 'motv_osd_single';
	case CRYPTOGUARD_PAIR = 'cryptoguard_pair';
	case CRYPTOGUARD_UNPAIR = 'cryptoguard_unpair';
	case CRYPTOGUARD_MESSAGE = 'cryptoguard_message';
	case CRYPTOGUARD_FORCE_MESSAGE = 'cryptoguard_forcedmessage';
	case CRYPTOGUARD_FINGERPRINT = 'cryptoguard_fingerprint';
	case CRYPTOGUARD_SIGNAL = 'cryptoguard_signal';
	case CRYPTOGUARD_BLACKLIST = 'cryptoguard_blacklist';
	case CARDLESS_CRYPTOGUARD_MESSAGE = 'cardless_cryptoguard_message';
	case CARDLESS_CRYPTOGUARD_FINGERPRINT = 'cardless_cryptoguard_fingerprint';
	case CARDLESS_CRYPTOGUARD_BLACKLIST = 'cardless_cryptoguard_blacklist';
}

enum GroupActionTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case TICKETS_PRIORITY_CHANGE = 'tickets_priority_change';
	case IRDETO_MESSAGE = 'irdeto_message';
	case DOCSIS_RESTART = 'docsis_restart';
	case REPORTS_GENERATION = 'reports_generation';
	case SEND_EMAIL = 'send_email';
	case SERVICE_STOP = 'service_stop';
	case SERVICE_START = 'service_start';
	case PRODUCT_START = 'product_start';
	case PRODUCT_STOP = 'product_stop';
	case MOTV_NOTIFICATION = 'motv_notification';
	case MOTV_OSD = 'motv_osd';
	case MOTV_OSD_TOPIC = 'motv_osd_topic';
	case PSM_GSM = 'psm_gsm';
	case CRYPTOGUARD_PAIR = 'cryptoguard_pair';
	case CRYPTOGUARD_UNPAIR = 'cryptoguard_unpair';
	case CRYPTOGUARD_MESSAGE = 'cryptoguard_message';
	case CRYPTOGUARD_FINGERPRINT = 'cryptoguard_fingerprint';
	case CRYPTOGUARD_SIGNAL = 'cryptoguard_signal';
	case CRYPTOGUARD_FORCEDMESSAGE = 'cryptoguard_forcedmessage';
	case CRYPTOGUARD_BLACKLIST = 'cryptoguard_blacklist';
	case CARDLESS_CRYPTOGUARD_MESSAGE = 'cardless_cryptoguard_message';
	case CARDLESS_CRYPTOGUARD_FINGERPRINT = 'cardless_cryptoguard_fingerprint';
	case CARDLESS_CRYPTOGUARD_BLACKLIST = 'cardless_cryptoguard_blacklist';
}

enum InitPaymentTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case TRIAL = 'trial';
	case INITIAL = 'initial';
}

enum InvoiceStateEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case UNPAID = 'unpaid';
	case CANCELLED = 'cancelled';
	case SAVED = 'saved';
	case PAID = 'paid';
}

enum InvoiceTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case POSTPAID = 'postpaid';
	case RECEIPT = 'receipt';
	case PREPAID = 'prepaid';
	case CONTRACT = 'contract';
}

enum MotvDeviceEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
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
	case TITANOS = 'titanos';
	case VIDAA = 'vidaa';
}

enum MotvPortalIOSRegistrationEnabledEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case ENABLED = 'enabled';
	case DISABLED = 'disabled';
	case WEB = 'web';
}

enum MotvPortalRegistrationMethodEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case NONE = 'none';
	case EMAIL = 'email';
	case GSM = 'gsm';
}

enum MotvPortalSectionEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case NOTIFICATIONS = 'notifications';
	case HOMEPAGE = 'homepage';
	case LIVE = 'live';
	case RADIO = 'radio';
	case VOD = 'vod';
	case RECORDINGS = 'recordings';
	case APPS = 'apps';
	case DOWNLOADS = 'downloads';
	case MY_LIST = 'my_list';
	case CATCHUP = 'catchup';
	case BOOKS = 'books';
	case NEWS = 'news';
	case PODCASTS = 'podcasts';
}

enum MotvPortalSocialSiteEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case FACEBOOK = 'facebook';
	case GOOGLE = 'google';
	case APPLE = 'apple';
}

enum MotvRegistrationFormLabelSectionEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case MOTV = 'motv';
	case GENERAL = 'general';
	case CONTACT = 'contact';
	case ADDRESS = 'address';
	case ADDRESS_TYPES = 'address types';
	case LOGIN = 'login';
	case PASSWORD = 'password';
	case PASSWORD_REPEAT = 'password repeat';
	case PIN = 'pin';
	case FORM_SECTION_CUSTOMER = 'form section customer';
	case FORM_SECTION_CONTACT = 'form section contact';
	case FORM_SECTION_ADDRESS_FORM_LAYOUT = 'form section addressFormLayout';
}

enum MotvRegistrationFormOptionEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case DEALERS = 'dealers';
	case CUSTOM = 'custom';
}

enum MotvRegistrationFormPaternEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case EMAIL = 'email';
	case NUMBER = '\d+';
	case CUSTOM = 'custom';
}

enum MotvRegistrationFormSectionEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case CUSTOMER = 'customer';
	case CONTACT = 'contact';
	case ADDRESS_FORM_LAYOUT = 'addressFormLayout';
}

enum MotvRegistrationFormUniqueEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case CUSTOMER = 'customer';
	case SYSTEM = 'system';
	case NONE = 'none';
}

enum MotvRegistrationSocialRegistrationCompletionEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case NOTHING = 'nothing';
	case SHOW_DIALOG = 'show dialog';
	case SHOW_REGISTRATION_FORM = 'show registration form';
}

enum PaymentGatewaysEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case GP_WEBPAY = 'gpwebpay';
	case NGENIUS = 'ngenius';
	case TEST_GATEWAY = 'test_gateway';
	case PAYPAL = 'paypal';
	case AREEBA = 'areeba';
	case DPO = 'dpo';
	case MTN = 'mtn';
	case AIRTEL = 'airtel';
	case GDE = 'gde';
	case STRIPE = 'stripe';
	case FLUTTERWAVE = 'flutterwave';
}

enum PortalPageTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case PRIVACY_POLICY = 'privacy policy';
	case TERMS_OF_USE = 'terms of use';
	case GDPR = 'gdpr';
	case MTN_CONSENT = 'mtn consent';
}

enum ProductContentTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case TVOD = 'tvod';
	case PRODUCT = 'product';
}

enum ProductPaymentTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case PREPAID = 'prepaid';
	case POSTPAID = 'postpaid';
}

enum ProductTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case HARDWARE = 'hardware';
	case SERVICE = 'service';
}

enum ReportColumnTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case COLUMN = 'column';
	case SEARCH = 'search';
}

enum ReportFileExtensionEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case PDF = 'pdf';
	case XLSX = 'xlsx';
	case CSV = 'csv';
	case INLINE = 'inline';
}

enum ReportFilterEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case TEXT = 'text';
	case DATE = 'date';
	case USERS = 'select_users';
	case BOUQUETS = 'select_bouquets';
	case PRODUCTS = 'select_products';
	case DEALERS = 'select_dealers';
	case CATEGORIES = 'select_categories';
	case TICKETS_STATUSES = 'select_ticket_statuses';
}

enum ReportLinkEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case CUSTOMER = 'customer';
	case TICKET = 'ticket';
}

enum RequestTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case CANCELLATION = '6';
	case PIN_RESET = '7';
	case MESSAGE = '8';
	case PAIR = '9';
	case SUBSCRIPTION = '11';
	case RENEWAL = '12';
	case FINGERPRINT = '13';
	case UPDATE_CREDIT = '14';
	case FORCE_TUNE = '15';
	case REFRESH_RIGHTS = '16';
	case FINGERPRING_ADVANCE = '18';
	case MESSAGE_ADVANCED = '19';
	case BROADCAST_MESSAGE_ADVANCED = '20';
	case CABLE_BROADCAST_MESSAGE = '21';
	case SATELITE_BROADCAST_MESSAGE = '22';
	case FULL_SYNCHRONIZATION = '23';
	case BLACKLIST = '24';
	case CREATE_SMC = '25';
	case CREATE_STB = '26';
	case CREATE_OTT_ACCOUNT = '27';
	case UPDATE_OTT_ACCOUNT = '28';
	case OTT_CLICKS = '29';
	case REFRESH_OTT_CLICKS = '30';
	case OTT_SESSION_RESET = '31';
	case CREATE_MODERNTV_ACCOUNT = '50';
	case UPDATE_MODERNTV_ACCOUNT = '51';
	case USER_MESSAGE = '800';
	case KV_ECM_FINGERPRINT = '801';
	case KINVON_UNPAIR = '802';
	case CRYPTOGARD_UNPAIR = '900';
	case SIGNAL = '901';
	case CRYPTOGARD_FORCED_MESSAGE = '902';
	case BEENIUS_CREATE_SUBSCRIBE = '1000';
	case BEENIUS_GET_PROFILE = '1001';
	case BEENIUS_CHANGE_PASSWORD = '1002';
	case BEENIUS_DELETE_CUSTOMER = '1003';
	case REX_CREATE_ACCOUNT = '1100';
	case VOD_SUBSCRIBE = '1101';
	case VOD_CANCEL = '1102';
	case MOTV_CREATE_CUSTOMER = '1300';
	case MOTV_UPDATE_CUSTOMER = '1301';
	case MOTV_DELETE_CUSTOMER = '1302';
	case MOTV_NOTIFICATION = '1303';
	case MOTV_OSD = '1304';
	case MOTV_TOPIC_NOTIFICATION = '1305';
	case MOTV_TOPIC_OSD = '1306';
	case CUSTOM_COMMAND = '1400';
	case SMARTLABS_CREATE_CUSTOMER = '1600';
	case SMARTLABS_UPDATE_CUSTOMER = '1601';
	case SMARTLABS_DELETE_CUSTOMER = '1602';
	case SMARTLABS_CHANGE_PRODUCT_OFFER = '1603';
}

enum ResponseStatusEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case OK = 'OK';
	case ERROR = 'ERROR';
}

enum RoleDeviceActionEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case VIEW = 'view';
	case ADD = 'add';
	case EDIT = 'edit';
	case REMOVE = 'remove';
	case CANCEL = 'cancel';
	case SUSPEND = 'suspend';
	case RESUME = 'resume';
	case UPDATE_DURATION = 'update_duration';
}

enum SelfcareLockedContentTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case VOD = 'vod';
	case CHANNEL = 'channel';
}

enum SelfcareLogStageEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case CREATE_PAYMENT = 'create payment';
	case CREATE_PAYMENT_RESPONSE = 'create payment response';
	case PROCESS_PAYMENT = 'process payment';
	case PROCESS_PAYMENT_RESPONSE = 'process payment response';
	case RENEW_PAYMENT = 'renew payment';
	case RENEW_PAYMENT_RESPONSE = 'renew payment response';
	case CALLBACK = 'callback';
	case CALLBACK_RESPONSE = 'callback response';
	case RENEW_CALLBACK = 'renew callback';
	case RENEW_CALLBACK_RESPONSE = 'renew callback response';
	case CANCEL_SUBSCRIPTION = 'cancel subscription';
	case CANCEL_SUBSCRIPTION_RESPONSE = 'cancel subscription response';
	case STRIPE_WEBHOOK = 'stripe webhook';
}

enum SelfcareOrderStatusEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case PENDING = 'pending';
	case SUCCESS = 'success';
	case FAILED = 'failed';
	case COMPLETED = 'completed';
}

enum SelfcarePaymentTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case ONE_TIME = 'one-time';
	case RECURRING = 'recurring';
	case RENEW = 'renew';
}

enum SelfcareProductOrderingEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case ALPHABET = 'alphabet';
	case PRICE_ASCENDING = 'price_ascending';
	case PRICE_DESCENDING = 'price_descending';
}

enum SelfcareProductTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case DISABLED = 'disabled';
	case ONE_TIME_PRODUCT = 'one time';
	case SUBSCRIPTIONS_PRODUCT = 'subscription';
	case SUBSCRIPTIONS_WITH_INIT_PAYMENT_PRODUCT = 'subscription with initial payment';
}

enum ServiceEpgSourceEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case XMLTV = 'xmltv';
}

enum SmtpSecureTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case NONE = 'none';
	case SSL = 'ssl';
	case TLS = 'tls';
}

enum SubscriptionStateEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case SUBSCRIBED = '1';
	case FUTURE = '2';
	case PENDING = '3';
	case SUSPENDED = '4';
	case CANCELLED = '5';
	case PAST = '6';
}

enum TimeUnitEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case MINUTES = 'minutes';
	case HOURS = 'hours';
	case DAYS = 'days';
	case MONTHS = 'months';
	case YEARS = 'years';
}

enum TvModeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case TV_MODE_STANDARD = 'tv_mode_standard';
	case TV_MODE_SIMPLE = 'tv_mode_simple';
	case TV_MODE_ZAPPER = 'tv_mode_zapper';
}

enum TvodsBundleDiscountTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case WITHOUT_DISCOUNT = 'without_discount';
	case PROPORTIONAL_DISCOUNT = 'proportional_discount';
}


namespace Motv\Connector\Sms\Enums\ApiSupport;

enum WhereTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
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

enum WhereValueTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
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
