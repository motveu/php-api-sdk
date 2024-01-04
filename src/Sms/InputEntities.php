<?php

/**
 * Generated on Thu, 4 Jan 2024 7:31:08
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms\InputEntities;

class MotvEntity
{
}


namespace Motv\Connector\Sms\InputEntities\ApiSupport;

class ApiCallEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $url;
	public string $method;

	/** @var array<mixed> */
	public array $data;
	public array $headers;
	public ?string $response;
	public ?float $time;
}

class RoleEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $roles_name;
	public bool $roles_active;
}

class UserEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public ?string $users_email;
	public ?string $users_password;
	public ?int $users_roles_id;
	public ?bool $users_active;
	public ?string $users_image;
}

class WhereEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $column;
	public \Motv\Connector\Sms\Enums\ApiSupport\WhereTypeEnum $type;
	public \Motv\Connector\Sms\Enums\ApiSupport\WhereValueTypeEnum $valueType;
	public $value;
}


namespace Motv\Connector\Sms\InputEntities\Sms;

class BouquetEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $bouquets_name;
	public string $bouquets_conax_id;
	public bool $bouquets_is_active;
	public ?string $bouquets_detail;
	public \Motv\Connector\Sms\Enums\Sms\DeviceEnum $bouquets_network;
}

class CsvXlsColumnEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $date_start;
	public ?int $date_end;
	public bool $date_end_next;
	public ?int $start;
	public ?int $end;
	public bool $end_next;
	public ?int $duration;
	public int $title;
	public ?int $sub_title;
	public ?int $description;
	public ?int $rating;
	public ?int $category;
	public ?int $episode_num;
}

class DealerEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $dealers_name;
	public bool $dealers_active;
	public ?bool $dealers_infinite_credit;
	public ?bool $dealers_any_card;
	public ?int $dealers_dealers_id;
	public ?string $dealers_codename;
	public ?string $dealers_phone;
	public ?string $dealers_address;
	public ?string $dealers_hours;
	public ?string $dealers_lat;
	public ?string $dealers_long;
	public ?string $dealers_email;
	public ?float $dealers_commission;
	public ?string $dealers_image;
}

class DeviceAppleEntity extends DeviceEntity
{
	public ?int $device_apple_viewers_id;
	public string $device_apple_email;
	public string $device_apple_generated_id;
	public string $device_apple_identity_token;
	public string $device_apple_authorization_code;
}

class DeviceEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
}

class DeviceFacebookEntity extends DeviceEntity
{
	public ?int $device_facebook_viewers_id;
	public string $device_facebook_email;
	public string $device_facebook_generated_id;
}

class DeviceGoogleEntity extends DeviceEntity
{
	public ?int $device_google_viewers_id;
	public string $device_google_email;
}

class DeviceIrdetoEntity extends DeviceEntity
{
	public ?int $device_irdeto_viewers_id;
	public int $device_irdeto_serial;
	public ?string $device_irdeto_note;
}

class DeviceMotvEntity extends DeviceEntity
{
	public ?int $device_motv_viewers_id;
	public ?string $device_motv_login;
	public ?int $device_motv_motv_portals_id;
	public ?int $device_motv_motv_id;
	public ?int $device_motv_profiles_id;
	public ?string $device_motv_password;
	public ?string $device_motv_name;
	public ?string $device_motv_pin;
	public ?string $device_motv_birthday;
	public ?string $device_motv_image;
	public ?array $device_motv_mac;
	public ?bool $device_motv_social_registration_completed;
}

class EmailEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	/** @var array<string> */
	public array $to;

	/** @var array<string> */
	public array $cc;

	/** @var array<string> */
	public array $bcc;

	/** @var array<string> */
	public array $attachements;
	public string $subject;
	public string $body;
}

class EpgEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public ?int $epg_tv_number;
	public string $epg_name;
	public string $epg_dirname;
	public \Motv\Connector\Sms\Enums\Sms\EpgSourceEnum $epg_source;
	public \Motv\Connector\Sms\Enums\Sms\EpgFormatEnum $epg_format;
	public float $epg_timeshift;
	public \Motv\Connector\Sms\Enums\Sms\EpgFrequencyCheckEnum $epg_frequency_check;
	public ?\Motv\Connector\Sms\Enums\Sms\EpgDelimiterEnum $epg_delimeter;
	public ?string $epg_sheet_index;
	public bool $epg_dayfirst;
	public ?string $epg_imap_server;
	public ?string $epg_imap_username;
	public ?string $epg_imap_password;
	public ?string $epg_ftp_server;
	public ?string $epg_ftp_username;
	public ?string $epg_ftp_password;
	public ?string $epg_ftp_folder;
	public ?string $epg_ftp_file_name;
	public ?string $epg_http_address;
	public ?int $epg_http_days;
	public ?string $epg_data_starts;
	public bool $epg_active;
	public ?string $epg_xml_tag;
	public ?string $epg_xml_channel_id;
	public ?string $epg_xml_channel_tag;
	public ?string $epg_xml_custom_xpath;
	public ?bool $epg_http_date;
	public ?\Motv\Connector\Sms\Enums\Sms\EpgDatetimeFormatEnum $epg_duration_format;
	public ?string $epg_webgrab_config;
	public ?int $epg_webgrab_days;
	public ?bool $epg_http_zip_archive;
	public ?string $epg_http_filename;
	public ?string $epg_http_username;
	public ?string $epg_http_password;
	public bool $epg_disregard_date_tz;
	public ?array $epg_mw_channels_ids;
}

class EpgEventEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	/** @var \DateTimeImmutable|string */
	public $epg_events_start;

	/** @var \DateTimeImmutable|string */
	public $epg_events_end;
	public string $epg_events_title;
	public ?string $epg_events_subtitle;
	public ?string $epg_events_category;
	public ?string $epg_events_desc;
	public ?string $epg_events_rating;
	public ?string $epg_events_episode_num;
}

class EpgEventsImageEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $epg_events_images_epg_events_title;
	public int $epg_events_images_epg_id;
	public ?string $epg_events_images_name;
}

class EpgInserterConfigEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $epg_inserters_config_epg_inserters_id;
	public string $epg_inserters_config_encoding;
	public string $epg_inserters_config_datadays;
	public string $epg_inserters_config_language;
	public string $epg_inserters_config_languageparental;
	public string $epg_inserters_config_holetitle;
}

class EpgInserterEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $epg_inserters_name;
}

class EpgNetworkConfigEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public ?string $epg_networks_config_language;
	public ?string $epg_networks_config_provider;
	public ?string $epg_networks_config_episode_label;
	public ?string $epg_networks_config_rating_label;
	public ?string $epg_networks_config_context_label;
	public ?string $epg_networks_config_packet_count;
	public ?string $epg_networks_config_bitrates_actual;
	public ?string $epg_networks_config_bitrates_other;
	public ?string $epg_networks_config_bitrates_actual_scheduled;
	public ?string $epg_networks_config_bitrates_other_scheduled;
	public ?string $epg_networks_config_ip_target;
	public ?string $epg_networks_config_net_interface;
}

class EpgNetworkEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $epg_networks_name;
	public int $epg_networks_epg_inserters_id;
}

class EpgSwDownloadBoxEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $epg_sw_download_boxes_epg_sw_download_manufacturers_id;
	public string $epg_sw_download_boxes_name;
	public ?string $epg_sw_download_folder_name;
	public ?string $epg_sw_download_boxes_path;
	public ?string $epg_sw_download_boxes_description;
	public bool $create_path;
}

class EpgSwDownloadBoxesReleaseEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $epg_sw_download_box_releases_box_id;
	public ?string $epg_sw_download_box_releases_description;
	public ?string $epg_sw_download_box_releases_path;
	public string $epg_sw_download_box_releases_name;
	public ?string $epg_sw_download_folder_name;
	public bool $create_path;
}

class EpgSwDownloadEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $epg_sw_download_name;
	public bool $epg_sw_download_enabled;
	public ?string $epg_sw_download_path;
	public string $epg_sw_download_ip;
	public int $epg_sw_download_port;
	public ?int $epg_sw_download_speed;
	public ?string $epg_sw_download_pid;
	public ?int $epg_sw_download_epg_sw_download_box_release_id;
	public ?string $epg_sw_download_playout_address;
	public ?string $epg_sw_download_server_name;
	public string $epg_sw_download_ts_packet_per_udp;
	public ?string $epg_sw_download_status;
	public ?int $epg_sw_download_cycle_time;
	public ?int $epg_sw_download_file_size;
	public ?int $epg_sw_download_epg_sw_download_boxes_id;
	public ?int $epg_sw_download_epg_sw_download_manufacturer_id;
	public ?string $epg_sw_download_ip_target;
}

class EpgSwDownloadFileEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $name;
	public string $content;
}

class EpgSwDownloadManufacturerEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $epg_sw_download_manufacturers_name;
	public ?string $epg_sw_download_manufacturers_description;
	public ?string $epg_sw_download_manufacturers_path;
	public ?string $epg_sw_download_folder_name;
	public bool $create_path;
}

class GroupActionEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $group_action_name;
	public \Motv\Connector\Sms\Enums\Sms\GroupActionTypeEnum $group_action_type;
	public string $group_action_query;
	public bool $group_action_file;

	/** @var array<int> */
	public array $group_action_roles;
}

class GroupsInvoiceEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $groups_invoices_mtext;
	public string $groups_invoices_name;
	public string $groups_invoices_text;
}

class ImapEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $config_imap_servers_name;
	public string $config_imap_servers_host;
	public bool $config_imap_servers_active;
	public int $config_imap_servers_port;
	public string $config_imap_servers_login;
	public string $config_imap_servers_password;
	public ?string $config_imap_servers_description;
	public \Motv\Connector\Sms\Enums\Sms\SmtpSecureTypeEnum $config_imap_servers_secure;
}

class LogEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $log_int_parameter1;
	public ?int $log_int_parameter2;
	public ?int $log_viewers_id;
	public ?string $log_string_parameter1;
	public ?string $log_string_parameter2;
	public ?string $log_string_parameter3;
	public ?string $log_text_parameter;
}

class MotvPortalEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $motv_portals_name;
	public int $motv_portals_dealers_id;
	public ?string $motv_portals_url;
	public int $motv_portals_motv_vendors_id;
	public int $motv_portals_favicon;
	public ?int $motv_portals_config_smtp_servers_id;
	public \Motv\Connector\Sms\Enums\Sms\MotvPortalRegistrationMethodEnum $motv_portals_registration_method;
	public string $motv_portals_ios;
	public string $motv_portals_android;
	public int $motv_portals_android_image;
	public array $motv_portals_sections;

	/** @var array<\Motv\Connector\Sms\Enums\Sms\MotvPortalSocialSiteEnum> */
	public array $motv_portals_social_sites;
	public ?string $motv_portals_google_client_id;
	public ?string $motv_portal_facebook_pixel_code;
	public ?string $motv_portals_facebook_client_id;
	public ?string $motv_portals_facebook_secret;
	public bool $motv_portals_registration_enabled;
	public \Motv\Connector\Sms\Enums\Sms\MotvPortalIOSRegistrationEnabledEnum $motv_portals_ios_registration_enabled;
	public bool $motv_portals_account_update_enabled;
	public ?string $motv_portals_custom_registration_close;
	public ?string $motv_portals_custom_registration_open;
	public ?string $motv_portals_custom_lost_password_close;
	public ?string $motv_portals_custom_lost_password_open;
	public ?string $motv_portals_custom_purchase_close;
	public ?string $motv_portals_custom_purchase_open;
	public string $motv_portals_google_analytics;
	public ?string $motv_portals_google_gtm;
	public ?string $motv_portals_section_homepage_url;
	public ?string $motv_portals_section_apps_url;
	public ?string $motv_portals_section_live_url;
	public ?string $motv_portals_section_radio_url;
	public ?string $motv_portals_section_recordings_url;
	public ?string $motv_portals_section_vod_url;
	public ?string $motv_portals_terms_url;
	public ?string $motv_portals_privacy_url;
	public ?string $motv_portals_contact_url;
	public int $motv_portals_registration_template;
	public int $motv_portals_lost_password_template;
	public int $motv_portals_lost_pin_template;
	public int $motv_portals_avatar;
	public bool $motv_portals_lost_password_enabled;
	public ?string $motv_portals_portal_apple_client_id;
	public ?int $motv_portals_welcome_template;
	public ?int $motv_portals_registration_text_template;
	public bool $motv_portals_web_player_cookie;
	public bool $motv_portals_show_subscription_section;

	/** @var array<int> */
	public array $motv_portals_users;
}

class MotvPortalPageEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $motv_portals_pages_motv_portal_id;
	public string $motv_portals_pages_url_name;
	public ?string $motv_portals_pages_description;
	public string $motv_portals_pages_content;
	public string $motv_portals_pages_title;
	public ?\Motv\Connector\Sms\Enums\Sms\PortalPageTypeEnum $motv_portals_pages_type;
	public ?string $motv_portals_pages_language;
}

class PaymentGatewayEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $payment_gateways_internal_name;
	public \Motv\Connector\Sms\Enums\Sms\PaymentGatewaysEnum $payment_gateways_type;
	public bool $payment_gateways_active;
	public string $payment_gateways_url;
	public string $payment_gateways_merchant_number;
	public ?string $payment_gateways_api_key;
	public ?string $payment_gateways_private_key;
	public ?string $payment_gateways_private_key_extension;
	public ?string $payment_gateways_private_key_password;
	public ?string $payment_gateways_public_key;
	public ?string $payment_gateways_public_key_extension;
	public ?string $payment_gateways_wsdl;
	public ?string $payment_gateways_wsdl_extension;
	public ?string $payment_gateways_provider;
	public ?string $payment_gateways_note;
}

class ProductEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $products_name;
	public ?int $products_bouquets_id;
	public ?int $products_unit_length;
	public ?\Motv\Connector\Sms\Enums\Sms\TimeUnitEnum $products_unit;
	public float $products_price;
	public ?float $products_init_payment_price;
	public ?int $products_hp_id;
	public bool $products_is_active;
	public int $products_products_groups_id;
	public bool $products_free_prepay;
	public float $products_price_retail;
	public \Motv\Connector\Sms\Enums\Sms\ProductTypeEnum $products_type;
	public \Motv\Connector\Sms\Enums\Sms\ProductPaymentTypeEnum $products_payment_type;
	public float $products_tax;
	public ?\Motv\Connector\Sms\Enums\Sms\SelfcareProductTypeEnum $products_selfcare_product_type;
	public ?array $products_devices;

	/** @var array<int> */
	public array $products_categories;
	public ?string $products_currencies_code;
}

class ProductsGroupEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $products_groups_name;
	public ?int $products_groups_groups_invoices_id;
	public bool $products_groups_open;
}

class ReportColumnEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $reports_columns_name;
	public \Motv\Connector\Sms\Enums\Sms\ReportFilterEnum $reports_columns_filter;
	public \Motv\Connector\Sms\Enums\Sms\ReportColumnTypeEnum $reports_columns_type;
}

class ReportEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $reports_name;
	public string $reports_query;

	/** @var array<int> */
	public array $reports_roles;

	/** @var array<ReportColumnEntity> */
	public array $reports_columns;

	/** @var array<ReportLinkEntity> */
	public array $reports_links;
}

class ReportLinkEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $reports_links_column_name;
	public \Motv\Connector\Sms\Enums\Sms\ReportLinkEnum $reports_links_link;
}

class ReportPrecalculationEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $reports_precalculations_name;
	public bool $reports_precalculations_generate;
	public string $reports_precalculations_query;
	public ?string $reports_precalculations_index;
}

class RequestsEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $request_type;
	public ?int $request_smartcard_id;
	public ?string $request_box_number;

	/** @var \DateTimeImmutable|string|null */
	public $request_subscribe_from;

	/** @var \DateTimeImmutable|string|null */
	public $request_subscribe_to;
	public ?int $request_viewer_id;
	public ?int $request_bouquet_id;
	public bool $request_in_process;
	public bool $request_processed;
	public ?int $request_viewers_bouquets_id;
	public bool $request_filestatus;
	public ?int $request_request_batch_id;
	public bool $request_batchable;

	/** @var \DateTimeImmutable|string|null */
	public $request_processed_time;

	/** @var \DateTimeImmutable|string */
	public $request_created_time;
	public \Motv\Connector\Sms\Enums\Sms\DeviceEnum $request_cas;
	public ?string $request_data;
	public ?int $requests_id;
	public int $queue_priority;
}

class SalesInvoiceEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	/** @var array<SalesInvoiceProductEntity> */
	public array $products;
	public ?float $invoice_discount;
	public ?string $invoice_remark;
	public ?string $parameters;
	public ?string $remark;
	public ?int $print_copies;
	public ?string $email;
}

class SalesInvoiceProductEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $products_id;
	public ?int $quantity;
	public ?string $serial;

	/** @var \DateTimeImmutable|string|null */
	public $from;

	/** @var \DateTimeImmutable|string|null */
	public $to;
	public ?float $price_retail;
}

class ScheduleEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $schedule_name;
	public bool $schedule_active;
	public bool $schedule_recurrence;
	public ?int $schedule_repeat;
	public \Motv\Connector\Sms\Enums\Sms\ScheduleRepeatUnitsEnum $schedule_repeat_unit;

	/** @var \DateTimeImmutable|string */
	public $schedule_start;

	/** @var \DateTimeImmutable|string */
	public $schedule_end;
	public int $schedule_group_action_id;
	public string $schedule_data;
}

class ServiceEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $services_transponders_id;
	public ?int $services_service_id;
	public string $services_name;
	public ?int $services_lcn_id;
	public bool $services_epg_status;
	public \Motv\Connector\Sms\Enums\Sms\ServiceEpgSourceEnum $services_epg_source;
	public int $services_epg_id;
}

class SmtpServerEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $config_smtp_servers_name;
	public bool $config_smtp_servers_active;
	public ?int $config_smtp_servers_port;
	public \Motv\Connector\Sms\Enums\Sms\SmtpSecureTypeEnum $config_smtp_servers_secure;
	public string $config_smtp_servers_host;
	public string $config_smtp_servers_login;
	public string $config_smtp_servers_password;
	public ?string $config_smtp_servers_address_from;
	public string $config_smtp_servers_description;
}

class TicketEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $tickets_creation_users_id;
	public int $tickets_viewers_id;
	public string $tickets_note;

	/** @var \DateTimeImmutable|string */
	public $tickets_creation_time;

	/** @var \DateTimeImmutable|string|null */
	public $tickets_close_time;
	public ?int $tickets_status;
	public ?int $tickets_departments_id;
	public ?int $tickets_responsible_users_id;

	/** @var \DateTimeImmutable|string|null */
	public $tickets_departments_change_time;
	public bool $tickets_notifications_sent;
	public bool $tickets_visited;
	public ?int $tickets_tickets_priorities_id;
	public ?int $tickets_tickets_categories_id;
	public ?int $tickets_action;
	public ?string $tickets_action_parameters;
}

class TicketsCategoryEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $tickets_categories_name;
	public int $tickets_categories_departments_id;
	public ?int $tickets_categories_days;
	public ?int $tickets_categories_tickets_categories_id;
}

class TicketsDepartmentEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $departments_name;
	public ?array $users_id;
}

class TicketsNotificationEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $ticket_notifications_actions_gui_template;
	public string $ticket_notifications_actions_email_template;
	public bool $ticket_notifications_gui;
	public bool $ticket_notifications_email;
	public bool $ticket_notifications_notify_responsible_users;
	public bool $ticket_notifications_notify_departments;
	public string $ticket_notifications_glyphicon;
	public string $ticket_notifications_color;
	public ?string $ticket_notifications_email_subject;
}

class TicketsPriorityEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $tickets_priorities_name;
}

class TicketsStatusEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $tickets_statuses_name;
	public bool $tickets_statuses_open;
	public bool $tickets_statuses_closed;
	public string $tickets_statuses_color;
}

class TransponderEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $transponders_name;
	public int $transponders_tsid;
	public int $transponders_onid;
	public bool $transponders_stream_epg;
	public string $transponders_broadcast_ip;
	public int $transponders_broadcast_port;
	public bool $transponders_epg_status;
	public int $transponders_epg_bandwidth;
	public ?int $transponders_epg_networks_id;
	public ?string $transponders_bitrates_other_scheduled;
	public ?string $transponders_language;
	public ?string $transponders_provider;
	public ?string $transponders_episode_label;
	public ?string $transponders_rating_label;
	public ?string $transponders_context_label;
	public ?string $transponders_packet_count;
	public ?string $transponders_bitrates_actual;
	public ?string $transponders_bitrates_other;
	public ?string $transponders_bitrates_actual_scheduled;
	public ?string $transponders_ip_target;
	public ?string $transponders_net_interface;
	public ?array $transponders_services_actual_ids;
	public ?array $transponders_services_other_ids;
}

class UserEntity extends \Motv\Connector\Sms\InputEntities\ApiSupport\UserEntity
{
	public ?string $users_name;
	public ?string $users_description;
	public ?int $users_departments_id;
	public ?int $users_tickets;
	public ?int $users_dealers_id;
	public array $users_customs;
}

class XmlColumnEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $date_start_name;
	public ?string $date_start_attribute;
	public ?string $date_end_name;
	public ?string $date_end_attribute;
	public ?string $start_name;
	public ?string $start_attribute;
	public ?string $end_name;
	public ?string $end_attribute;
	public ?string $duration_name;
	public ?string $duration_attribute;
	public string $title_name;
	public ?string $title_attribute;
	public ?string $sub_title_name;
	public ?string $sub_title_attribute;
	public ?string $description_name;
	public ?string $description_attribute;
	public ?string $rating_name;
	public ?string $rating_attribute;
	public ?string $category_name;
	public ?string $category_attribute;
	public ?string $episode_num_name;
	public ?string $episode_num_attribute;
	public ?string $icon_name;
	public ?string $icon_attribute;
	public ?string $actors_name;
	public ?string $actors_attribute;
	public ?string $director_name;
	public ?string $director_attribute;
	public ?array $other_data;
}

class XmlColumnOtherDataEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $other_data_name;
	public string $other_data_tag;
	public ?string $other_data_attribute;
}
