<?php

/**
 * Generated on Mon, 7 Nov 2022 9:33:13
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms\Entities;

class MotvEntity
{
}


namespace Motv\Connector\Sms\Entities\Sms;

class BatchEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $batch_id;
	public string $products_name;
	public string $users_name;
	public \DateTimeImmutable $batch_requested;
	public \DateTimeImmutable $batch_expiry_date;
	public int $batch_is_active;
	public int $batch_number_requested;
	public int $batch_voucher_generated;
	public int $batch_voucher_used;
}

class DealerEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $dealers_id;
	public string $dealers_name;
	public int $dealers_active;
	public float $dealers_credit;
	public int $dealers_infinite_credit;
	public int $dealers_any_card;
	public ?int $dealers_dealers_id;
	public ?string $dealers_codename;
	public ?string $dealers_phone;
	public ?string $dealers_address;
	public ?string $dealers_hours;
	public ?string $dealers_lat;
	public ?string $dealers_long;
	public ?string $dealers_email;
	public float $dealers_commission;
	public ?string $dealers_image;
	public int $dealers_warehouse;
}

class EpgEventEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $epg_events_epg_id;
	public \DateTimeImmutable $epg_events_start;
	public \DateTimeImmutable $epg_events_end;
	public string $epg_events_title;
	public ?string $epg_events_subtitle;
	public ?string $epg_events_category;
	public ?string $epg_events_desc;
	public ?int $epg_events_rating;
	public ?string $epg_events_episode_num;
	public array $epg_events_icon;
	public ?string $epg_events_actors;
	public ?string $epg_events_director;
	public array $otherData;
}

class ScheduleEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $schedule_id;
	public string $schedule_name;
	public int $schedule_active;
	public int $schedule_recurrence;
	public ?int $schedule_repeat;
	public \Motv\Connector\Sms\Enums\Sms\ScheduleRepeatUnitsEnum $schedule_repeat_unit;
	public \DateTimeImmutable $schedule_start;
	public ?\DateTimeImmutable $schedule_end;
	public int $schedule_users_id;
	public int $schedule_group_action_id;
	public string $schedule_data;
	public ?int $schedule_viewers_id;
	public string $group_action_name;
}

class SubscriptionEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $viewers_bouquets_id;
	public int $viewers_bouquets_viewers_id;
	public \DateTimeImmutable $viewers_bouquets_active_from;
	public \DateTimeImmutable $viewers_bouquets_active_to;
	public int $viewers_bouquets_cancelled;
	public int $viewers_bouquets_subscribed;
	public $viewers_bouquets_smartcard_id;
	public int $viewers_bouquets_bouquets_id;
	public string $bouquets_name;
	public ?int $viewers_bouquets_products_id;
	public string $products_name;
	public int $products_id;
	public int $viewers_bouquets_suspended;
	public string $requests_cas_type;
	public \Motv\Connector\Sms\Enums\Sms\SubscriptionStateEnum $subscription_state;
	public ?\DateTimeImmutable $CONAX_DATE_FROM;
	public ?\DateTimeImmutable $CONAX_DATE_TO;
	public ?\DateTimeImmutable $viewers_bouquets_cancelled_on;
	public ?int $viewers_bouquets_invoice_id;
	public ?int $bouquets_is_active;
}

class TicketEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $tickets_id;
	public int $tickets_creation_users_id;
	public int $tickets_viewers_id;
	public string $tickets_note;
	public \DateTimeImmutable $tickets_creation_time;
	public ?\DateTimeImmutable $tickets_close_time;
	public ?int $tickets_status;
	public int $tickets_departments_id;
	public ?int $tickets_responsible_users_id;
	public ?\DateTimeImmutable $tickets_departments_change_time;
	public int $tickets_notifications_sent;
	public int $tickets_visited;
	public int $tickets_tickets_priorities_id;
	public int $tickets_tickets_categories_id;
	public ?int $tickets_action;
	public ?string $tickets_action_parameters;
	public ?TicketsStatusEntity $tickets_status_entity;
	public array $responsible_users;
}

class TicketsCategoryEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $tickets_categories_id;
	public string $tickets_categories_name;
	public int $tickets_categories_departments_id;
	public ?int $tickets_categories_days;
	public ?int $tickets_categories_tickets_categories_id;
	public string $departments_name;
}

class TicketsCommentEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $tickets_comments_id;
	public \DateTimeImmutable $tickets_comments_time;
	public int $tickets_comments_users_id;
	public string $tickets_comments_note;
	public int $tickets_comments_tickets_id;
	public ?string $tickets_comments_email;
	public int $users_departments_id;
	public array $references;
}

class TicketsDepartmentEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $departments_id;
	public string $departments_name;
	public array $departments_responsible_users;
}

class TicketsFileEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $tickets_files_id;
	public int $tickets_files_tickets_id;
	public string $tickets_files_file_name;
	public string $tickets_files_file_type;
	public string $tickets_files_origin_name;
	public int $tickets_files_users_id;
	public \DateTimeImmutable $tickets_files_date;
	public string $file;
}

class TicketsNotificationEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $ticket_notifications_actions_id;
	public string $ticket_notifications_actions_name;
	public string $ticket_notifications_form_name;
	public string $ticket_notifications_actions_gui_template;
	public string $ticket_notifications_actions_email_template;
	public int $ticket_notifications_gui;
	public int $ticket_notifications_email;
	public int $ticket_notifications_notify_responsible_users;
	public int $ticket_notifications_notify_departments;
	public string $ticket_notifications_template_variables;
	public string $ticket_notifications_glyphicon;
	public string $ticket_notifications_color;
	public ?string $ticket_notifications_email_subject;
}

class TicketsPriorityEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $tickets_priorities_id;
	public string $tickets_priorities_name;
}

class TicketsReferencesFileEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $tickets_comments_references_tickets_comments_id;
	public int $tickets_files_id;
	public string $tickets_files_origin_name;
}

class TicketsStatusEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $tickets_statuses_id;
	public string $tickets_statuses_name;
	public int $tickets_statuses_open;
	public int $tickets_statuses_closed;
	public string $tickets_statuses_color;
	public string $tickets_statuses_status_name;
}

class UserEntity extends \Motv\Connector\Sms\Entities\ApiSupport\UserEntity
{
	public string $users_name;
	public ?string $users_description;
	public int $users_departments_id;
	public ?int $users_tickets;
	public int $users_dealers_id;
	public ?string $users_language;
	public ?string $users_template;
	public ?string $users_homepage;
	public int $dealers_id;
	public string $dealers_name;
	public int $dealers_active;
	public int $dealers_infinite_credit;
	public int $dealers_any_card;
	public ?int $dealers_dealers_id;
	public ?int $dealers_warehouse;
	public ?string $token;
	public bool $isSuperUser;
	public ?string $departments_name;
	public array $users_customs;
}

class UsersNotificationsEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $users_notifications_id;
	public int $users_notifications_users_id;
	public ?int $users_notifications_ticket_notifications_id;
	public string $users_notifications_notification;
	public int $users_notifications_viewed;
	public string $users_notifications_type;
	public string $users_notifications_link;
	public int $users_notifications_link_id;
	public \DateTimeImmutable $users_notifications_time;
	public string $ticket_notifications_form_name;
}


namespace Motv\Connector\Sms\Entities\ApiSupport;

class DocumentationApiEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $name;
	public array $methods;
}

class DocumentationEntityEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $name;
	public string $shortName;
	public bool $input;
	public ?DocumentationEntityEntity $parent;
	public array $properties;
	public array $parentProperties;
	public string $space;
}

class DocumentationEnumCaseEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $name;
	public string $value;
	public string $label;
}

class DocumentationEnumEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $name;
	public string $shortName;
	public array $cases;
	public string $space;
}

class DocumentationMethodEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public bool $authorization;
	public string $name;
	public ?string $return_type;
	public bool $deprecated;
	public string $description;
	public ?string $return_class;
	public ?\phpDocumentor\Reflection\DocBlock\Description $return;
	public bool $return_allows_null;
	public array $right;
	public array $throws;
	public array $parameters;
	public ?string $return_doc;
	public ?string $raw_return_doc;
}

class DocumentationParameterEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $name;
	public bool $optional;
	public bool $nullable;
	public ?\phpDocumentor\Reflection\DocBlock\Description $description;
	public string $type;
	public ?string $arrayOfType;
	public $default;
	public bool $isDefault;
}

class EntityEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $description;
	public ?string $subtype;
	public string $name;
	public string $type;
	public bool $nullable;
	public ?string $default;
	public ?string $return_doc;
}

class ErrorCodeEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $code;
	public string $name;
	public string $description;
	public string $space;
}

class RoleEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $roles_id;
	public string $roles_name;
	public int $roles_active;
	public int $roles_sysadmin;
}

class UserEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $users_id;
	public string $users_email;
	public ?string $users_secret;
	public int $users_active;
	public int $users_roles_id;
	public ?string $users_password;
	public ?string $users_image;
	public string $roles_name;
	public int $roles_active;
	public int $roles_sysadmin;
	public string $login;
}
