<?php

/**
 * Generated on Mon, 2 Jan 2023 7:23:34
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms\InputEntities;

class MotvEntity
{
}


namespace Motv\Connector\Sms\InputEntities\Sms;

class DealerEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $dealers_name;
	public bool $dealers_active;
	public ?float $dealers_credit;
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
	public ?bool $dealers_warehouse;
}

class DeviceAppleEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $device_apple_email;
	public string $device_apple_generated_id;
	public string $device_apple_identity_token;
	public string $device_apple_authorization_code;
}

class DeviceFacebookEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $device_facebook_email;
	public string $device_facebook_generated_id;
}

class DeviceGoogleEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $device_google_email;
}

class EmailEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public array $to;
	public array $cc;
	public array $bcc;
	public array $attachements;
	public string $subject;
	public string $body;
}

class MotvPortalEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $motv_portals_name;
	public int $motv_portals_dealers_id;
	public ?string $motv_portals_url;
	public int $motv_portals_motv_vendors_id;
	public string $motv_portals_portal_json_theme;
	public int $motv_portals_favicon;
	public ?int $motv_portals_config_smtp_servers_id;
	public \Motv\Connector\Sms\Enums\Sms\MotvPortalRegistrationMethodEnum $motv_portals_registration_method;
	public string $motv_portals_ios;
	public string $motv_portals_android;
	public int $motv_portals_android_image;
	public string $motv_portals_player_footer;
	public array $motv_portals_sections;
	public array $motv_portals_social_sites;
	public ?string $motv_portals_google_client_id;
	public string $motv_portal_facebook_pixel_code;
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
	public int $motv_portals_registration_template;
	public int $motv_portals_lost_password_template;
	public int $motv_portals_lost_pin_template;
	public int $motv_portals_avatar;
	public bool $motv_portals_lost_password_enabled;
	public ?string $motv_portals_portal_apple_client_id;
	public ?int $motv_portals_welcome_template;
	public ?int $motv_portals_registration_text_template;
	public bool $motv_portals_web_player_cookie;
	public array $motv_portals_users;
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

class UserEntity extends \Motv\Connector\Sms\InputEntities\ApiSupport\UserEntity
{
	public ?string $users_name;
	public ?string $users_description;
	public ?int $users_departments_id;
	public ?int $users_tickets;
	public ?int $users_dealers_id;
	public array $users_customs;
}

class WarehouseDeviceConfigCasEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $warehouse_devices_config_cas;
	public array $types;
}

class WarehouseDeviceConfigTypeEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public string $warehouse_devices_config_type;
	public bool $warehouse_devices_config_enabled;
}

class WarehouseDeviceDealerFileEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $warehouse_dealers_id;
	public string $warehouse_cas;
	public string $warehouse_type;
	public ?int $warehouse_dealers_id_to;
}

class WarehouseEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public int $warehouse_dealers_id;
	public string $warehouse_cas;
	public string $warehouse_type;
	public ?string $warehouse_value;
}

class WarehouseLogEntity extends \Motv\Connector\Sms\InputEntities\MotvEntity
{
	public ?string $warehouse_log_cas;
	public ?string $warehouse_log_smartcard_number;
	public ?string $warehouse_log_stb_number;
	public ?int $warehouse_log_count;
	public ?string $warehouse_log_type;
	public ?int $warehouse_log_dealers_id_from;
	public ?int $warehouse_log_dealers_id_to;
}


namespace Motv\Connector\Sms\InputEntities\ApiSupport;

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
