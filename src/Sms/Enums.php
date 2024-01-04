<?php

/**
 * Generated on Thu, 4 Jan 2024 7:52:31
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms\Enums;

interface MotvEnum
{
}


namespace Motv\Connector\Sms\Enums\Sms;

enum CustomerFieldTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case STATIC_TEXT = 'static_text';
	case TEXT = 'text';
	case PASSWORD = 'password';
	case NUMBER = 'number';
	case EMAIL = 'email';
	case SELECT = 'select';
	case CHECKBOX = 'checkbox';
	case DATE = 'date';
	case PHONE = 'phone';
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

enum EpgDelimiterEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case COMMA = ',';
	case SEMICOLONS = ';';
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
}

enum GroupActionPredefinedEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case MOTV_NOTIFICATION_SINGLE = 'motv_notification_single';
	case MOTV_OSD_SINGLE = 'motv_osd_single';
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
}

enum MotvPortalSocialSiteEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case FACEBOOK = 'facebook';
	case GOOGLE = 'google';
	case APPLE = 'apple';
}

enum PaymentGatewaysEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case GP_WEBPAY = 'gpwebpay';
	case NGENIUS = 'ngenius';
	case TEST_GATEWAY = 'test_gateway';
	case PAYPAL = 'paypal';
}

enum PortalPageTypeEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case PRIVACY_POLICY = 'privacy policy';
	case TERMS_OF_USE = 'terms of use';
	case GDPR = 'gdpr';
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

enum ScheduleRepeatUnitsEnum: string implements \Motv\Connector\Sms\Enums\MotvEnum
{
	case HOURS = 'hours';
	case DAYS = 'days';
	case MONTHS = 'months';
	case YEARS = 'years';
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
