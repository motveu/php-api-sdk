<?php

/**
 * Generated on Fri, 4 Nov 2022 8:57:49
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms\Enums\Sms;

enum ScheduleRepeatUnitsEnum: string
{
	case HOURS = 'hours';
	case DAYS = 'days';
	case MONTHS = 'months';
	case YEARS = 'years';
}

enum SubscriptionStateEnum: string
{
	case SUBSCRIBED = '1';
	case FUTURE = '2';
	case PENDING = '3';
	case SUSPENDED = '4';
	case CANCELLED = '5';
	case PAST = '6';
}


namespace Motv\Connector\Sms\Enums\ApiSupport;

enum WhereTypeEnum: string
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

enum WhereValueTypeEnum: string
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
