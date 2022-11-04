<?php

/**
 * Generated on Fri, 4 Nov 2022 8:57:50
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms\InputEntities\Sms;

class DealerEntity
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

class ScheduleEntity
{
	public string $schedule_name;
	public bool $schedule_active;
	public bool $schedule_recurrence;
	public ?int $schedule_repeat;
	public \Motv\Connector\Sms\Enums\Sms\ScheduleRepeatUnitsEnum $schedule_repeat_unit;
	public \DateTimeImmutable $schedule_start;
	public \DateTimeImmutable $schedule_end;
	public int $schedule_group_action_id;
	public string $schedule_data;
}

class TicketEntity
{
	public int $tickets_creation_users_id;
	public int $tickets_viewers_id;
	public string $tickets_note;
	public \DateTimeImmutable $tickets_creation_time;
	public ?\DateTimeImmutable $tickets_close_time;
	public ?int $tickets_status;
	public ?int $tickets_departments_id;
	public ?int $tickets_responsible_users_id;
	public ?\DateTimeImmutable $tickets_departments_change_time;
	public bool $tickets_notifications_sent;
	public bool $tickets_visited;
	public ?int $tickets_tickets_priorities_id;
	public ?int $tickets_tickets_categories_id;
	public ?int $tickets_action;
	public ?string $tickets_action_parameters;
}

class TicketsCategoryEntity
{
	public string $tickets_categories_name;
	public int $tickets_categories_departments_id;
	public ?int $tickets_categories_days;
	public ?int $tickets_categories_tickets_categories_id;
}

class TicketsDepartmentEntity
{
	public string $departments_name;
	public ?array $users_id;
}

class TicketsNotificationEntity
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

class TicketsPriorityEntity
{
	public string $tickets_priorities_name;
}

class TicketsStatusEntity
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


namespace Motv\Connector\Sms\InputEntities\ApiSupport;

class RoleEntity
{
	public string $roles_name;
	public bool $roles_active;
}

class UserEntity
{
	public ?string $users_email;
	public ?string $users_password;
	public ?int $users_roles_id;
	public ?bool $users_active;
	public ?string $users_image;
}

class WhereEntity
{
	public string $column;
	public \Motv\Connector\Sms\Enums\ApiSupport\WhereTypeEnum $type;
	public \Motv\Connector\Sms\Enums\ApiSupport\WhereValueTypeEnum $valueType;
	public $value;
}
