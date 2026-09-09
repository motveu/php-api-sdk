<?php

/**
 * Generated on Wed, 9 Sep 2026 10:01:24
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Sms\Entities;

class MotvEntity
{
}


namespace Motv\Connector\Sms\Entities\Sms;

class BlacklistedCardEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string|int|null $blacklisted_cards_smartcard_id;
	public int $blacklisted_cards_id;
}

class BouquetEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $bouquets_id;
	public string $bouquets_name;
	public string $bouquets_conax_id;
	public int $bouquets_is_active;
	public ?string $bouquets_detail;
	public \Motv\Connector\Sms\Enums\Sms\DeviceEnum $bouquets_network;
}

class CategoryEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $categories_id;
	public string $categories_name;
	public \Motv\Connector\Sms\Enums\Sms\CategoriesTypeEnum $categories_type;
	public ?string $categories_query;
	public int $categories_active;
}

class ConnectivityResultEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $name;
	public string $url;
	public bool $reachable;
	public ?int $httpCode;
	public float $durationSeconds;
	public ?string $error;
	public string $response;
}

class CountryEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $countries_code;
	public string $countries_name;
	public string $countries_dial_code;
	public int $countries_active;
	public int $countries_default;
}

class CurrencyEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $currencies_code;
	public string $currencies_name;
	public string $currencies_number;
	public int $currencies_subunits_in_unit;
	public int $currencies_active;
}

class CustomerContactEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $viewers_contact_id;
	public int $viewers_contact_viewers_id;
	public string $viewers_contact_type;
	public string $viewers_contact_content;
}

class CustomerEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $viewers_id;
	public int $viewers_vendors_id;
	public int $viewers_dealers_id;
	public array $viewers_credits;
	public array $data;

	/** @var array<DeviceEntity> */
	public array $devices;

	/** @var array<CustomerContactEntity> */
	public array $contacts;

	/** @var array<mixed> */
	public array $addresses;
}

class CustomerFieldEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $key;
	public string $label;
	public \Motv\Connector\Sms\Enums\Sms\CustomerFieldTypeEnum $type;
	public bool $optional;
	public bool $readonly;
	public int $order;
	public $value;
	public ?string $must_equal;
	public ?string $pattern;
	public ?string $patternLabel;

	/** @var array<mixed> */
	public array $options;
}

class CustomerFileEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $viewers_files_id;
	public int $viewers_files_viewers_id;
	public string $viewers_files_files_name;
	public string $viewers_files_path;
	public string $content;
}

class CustomerNoteEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $viewers_note_id;
	public string $viewers_note_text;
	public int $viewers_note_users_id;
	public string $users_name;
	public \DateTimeImmutable $viewers_note_date;
	public int $viewers_note_viewers_id;
}

class DataBundleEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $data_bundles_id;
	public string $data_bundles_internal_name;
	public ?string $data_bundles_name;
	public ?string $data_bundles_code;
}

class DealerEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $dealers_id;
	public string $dealers_name;
	public int $dealers_active;
	public array $dealers_credits;
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
}

class DeviceAppleEntity extends DeviceEntity
{
	public int $device_apple_id;
	public int $device_apple_viewers_id;
	public string $device_apple_email;
	public string $device_apple_generated_id;
	public string $device_apple_identity_token;
	public string $device_apple_authorization_code;
}

class DeviceCardlessCryptoguardEntity extends DeviceEntity
{
	public int $device_cardless_cryptoguard_id;
	public int $device_cardless_cryptoguard_viewers_id;
	public ?string $device_cardless_cryptoguard_smartcard_id;
	public ?string $device_cardless_cryptoguard_note;
	public ?int $device_cardless_cryptoguard_network;
}

class DeviceEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public \Motv\Connector\Sms\Enums\Sms\DeviceEnum $type;
}

class DeviceFacebookEntity extends DeviceEntity
{
	public int $device_facebook_id;
	public int $device_facebook_viewers_id;
	public ?string $device_facebook_email;
	public string $device_facebook_generated_id;
}

class DeviceGoogleEntity extends DeviceEntity
{
	public int $device_google_id;
	public int $device_google_viewers_id;
	public string $device_google_email;
}

class DeviceIrdetoEntity extends DeviceEntity
{
	public int $device_irdeto_id;
	public int $device_irdeto_viewers_id;
	public int $device_irdeto_serial;
	public ?string $device_irdeto_note;
}

class DeviceMotvEntity extends DeviceEntity
{
	public int $device_motv_id;
	public int $device_motv_viewers_id;
	public string $device_motv_login;
	public int $device_motv_motv_portals_id;
	public ?int $device_motv_motv_id;
	public ?int $device_motv_profiles_id;
	public int $device_motv_social_registration_completed;
	public int $device_motv_autogenerated;
	public ?string $motv_portals_name;
}

class DeviceMtnEntity extends DeviceEntity
{
	public int $device_mtn_id;
	public int $device_mtn_viewers_id;
	public string $device_mtn_phone;
	public int $device_mtn_motv_portals_id;
}

class DevicePairedCryptoguardEntity extends DeviceEntity
{
	public int $device_paired_cryptoguard_id;
	public int $device_paired_cryptoguard_viewers_id;
	public ?int $device_paired_cryptoguard_smartcard_id;
	public ?int $device_paired_cryptoguard_settopbox_id;
	public ?string $device_paired_cryptoguard_note;
	public ?int $device_paired_cryptoguard_network;
}

class EpgBeeniusEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $epg_id;
	public string $epg_name;
}

class EpgCategoryEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $epg_categories_id;
	public string $epg_categories_name;
}

class EpgChangeLogEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $epg_log_id;
	public \DateTimeImmutable $epg_log_time;
	public int $epg_log_epg_id;
	public string $epg_log_type;
	public ?string $epg_log_note;
	public ?string $epg_log_column_old;
	public ?string $epg_log_column_new;
	public ?string $epg_log_column;
	public ?string $epg_log_text;
	public ?int $epg_log_users_id;
}

class EpgColumnEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $epg_columns_id;
	public int $epg_columns_epg_id;
	public string $epg_columns_type;
	public ?string $epg_columns_xml_name;
	public ?string $epg_columns_xml_atr;
	public int $epg_columns_order;
}

class EpgEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $epg_id;
	public string $epg_name;
	public string $epg_dirname;
	public \Motv\Connector\Sms\Enums\Sms\EpgSourceEnum $epg_source;
	public \Motv\Connector\Sms\Enums\Sms\EpgFormatEnum $epg_format;
	public float $epg_timeshift;
	public \Motv\Connector\Sms\Enums\Sms\EpgFrequencyCheckEnum $epg_frequency_check;
	public ?\Motv\Connector\Sms\Enums\Sms\DelimiterEnum $epg_delimeter;
	public ?string $epg_sheet_index;
	public int $epg_dayfirst;
	public ?string $epg_imap_server;
	public ?string $epg_imap_username;
	public ?string $epg_imap_password;
	public ?string $epg_ftp_server;
	public ?string $epg_ftp_username;
	public ?string $epg_ftp_password;
	public ?string $epg_ftp_folder;
	public ?string $epg_http_address;
	public ?int $epg_http_days;
	public ?string $epg_data_starts;
	public int $epg_active;
	public ?string $epg_xml_tag;
	public ?string $epg_xml_channel_id;
	public ?string $epg_xml_channel_tag;
	public ?string $epg_xml_custom_xpath;
	public \DateTimeImmutable $epg_update_time;
	public ?int $epg_http_date;
	public \Motv\Connector\Sms\Enums\Sms\EpgDatetimeFormatEnum $epg_duration_format;
	public ?string $epg_webgrab_config;
	public ?int $epg_webgrab_days;
	public ?string $epg_image;
	public ?string $epg_ftp_file_name;
	public ?int $epg_http_zip_archive;
	public ?string $epg_http_filename;
	public ?string $epg_http_username;
	public ?string $epg_http_password;
	public int $epg_disregard_date_tz;

	/** @var array<int> */
	public array $epg_mw_channels_ids;
	public ?int $epg_tv_number;
	public int $epg_status;
	public ?\DateTimeImmutable $epg_background_job_in_process;
}

class EpgEventDataEntity extends EpgEventEntity
{
	public int $epg_events_id;
	public int $epg_events_epg_file_id;
	public ?string $epg_events_other_data;
}

class EpgEventDataExpandedEntity extends EpgEventDataEntity
{
	public int $epg_id;
	public string $epg_name;
	public \DateTimeImmutable $start;
	public \DateTimeImmutable $end;
	public \Motv\Connector\Sms\Enums\Sms\EpgSourceEnum $epg_source;
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
	public ?string $epg_events_rating;
	public ?string $epg_events_episode_num;

	/** @var array<string> */
	public array $epg_events_icon;
	public ?string $epg_events_actors;
	public ?string $epg_events_director;
	public array $otherData;
}

class EpgEventsImageEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $epg_events_images_id;
	public string $epg_events_images_epg_events_title;
	public int $epg_events_images_epg_id;
	public ?string $epg_events_images_name;
}

class EpgFileEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $epg_files_id;
	public int $epg_files_epg_id;
	public string $epg_files_path;
	public string $epg_files_name;
	public string $epg_files_extension;
	public \DateTimeImmutable $epg_files_downloaded;
	public ?\DateTimeImmutable $epg_files_startdate;
	public int $epg_files_generated;
	public int $epg_files_active;
}

class EpgLogEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $type;
	public string $info;
	public bool $succes;
}

class GalleryImageEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $images_id;
	public string $images_type;
	public string $images_name;
	public string $content;
	public string $images_url;
	public string $images_path;
}

class GeolocationEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $country;
	public int $countriesId;
}

class GroupActionEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $group_action_id;
	public string $group_action_name;
	public \Motv\Connector\Sms\Enums\Sms\GroupActionTypeEnum $group_action_type;
	public string $group_action_query;
	public int $group_action_file;

	/** @var array<int> */
	public array $group_action_roles;
}

class GroupsInvoiceEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $groups_invoices_id;
	public string $groups_invoices_mtext;
	public string $groups_invoices_name;
	public string $groups_invoices_text;
}

class ImapEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $config_imap_servers_id;
	public string $config_imap_servers_name;
	public string $config_imap_servers_host;
	public int $config_imap_servers_active;
	public int $config_imap_servers_port;
	public string $config_imap_servers_login;
	public string $config_imap_servers_password;
	public ?string $config_imap_servers_description;
	public \Motv\Connector\Sms\Enums\Sms\SmtpSecureTypeEnum $config_imap_servers_secure;
}

class InvoiceEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $invoice_id;
	public int $invoice_viewers_id;
	public ?int $invoice_users_id;
	public \DateTimeImmutable $invoice_created_date;
	public int $invoice_number;
	public \Motv\Connector\Sms\Enums\Sms\InvoiceTypeEnum $invoice_type;
	public \Motv\Connector\Sms\Enums\Sms\InvoiceStateEnum $invoice_state;
	public float $invoice_price;
	public ?int $invoice_payment_methods_id;
	public ?string $invoice_remark;
	public ?\DateTimeImmutable $invoice_due_date;
	public ?float $invoice_due;
	public ?string $invoice_parameters;
	public ?float $invoice_price_retail;
	public ?float $invoice_discount;
	public ?string $invoice_currencies_code;

	/** @var array<string> */
	public array $sold_products;
	public ?int $dealers_id;
	public ?array $invoice_data;
}

class LogReceiptTemplateEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $log_templates_id;
	public string $log_templates_log_type;
	public int $log_templates_groups_invoices_id;
}

class MotvAccountPurchaseBannerEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public ?string $image;
	public ?string $image_tablet;
	public ?string $deep_link;
}

class MotvCustomerAcountLabelsEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public array $loginLabels;
	public array $passwordLabels;
	public array $passwordRepeatLabels;
	public array $pinLabels;
}

class MotvCustomerInfoGroupLabelsEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public array $motvSectionLabels;
	public array $generalSectionLabels;
	public array $contactSectionLabels;
	public array $addressSectionLabels;
}

class MotvPortalEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $motv_portals_id;
	public string $motv_portals_name;
	public int $motv_portals_dealers_id;
	public ?string $motv_portals_url;
	public int $motv_portals_motv_vendors_id;
	public ?int $motv_portals_config_smtp_servers_id;
	public \Motv\Connector\Sms\Enums\Sms\MotvPortalRegistrationMethodEnum $motv_portals_registration_method;
	public array $motv_portals_sections;

	/** @var array<\Motv\Connector\Sms\Enums\Sms\MotvPortalSectionEnum> */
	public array $motv_portals_sections_v2;

	/** @var array<\Motv\Connector\Sms\Enums\Sms\MotvPortalSocialSiteEnum> */
	public array $motv_portals_social_sites;
	public ?string $motv_portals_google_client_id;
	public ?string $motv_portals_facebook_client_id;
	public int $motv_portals_registration_enabled;
	public \Motv\Connector\Sms\Enums\Sms\MotvPortalIOSRegistrationEnabledEnum $motv_portals_ios_registration_enabled;
	public \Motv\Connector\Sms\Enums\Sms\MotvRegistrationSocialRegistrationCompletionEnum $device_motv_social_registration_completion;
	public int $motv_portals_account_update_enabled;
	public ?string $motv_portals_custom_registration_close;
	public ?string $motv_portals_custom_registration_open;
	public ?string $motv_portals_custom_lost_password_close;
	public ?string $motv_portals_custom_lost_password_open;
	public ?string $motv_portals_custom_purchase_close;
	public ?string $motv_portals_custom_purchase_open;
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
	public ?int $motv_portals_image;
	public ?int $motv_portals_image_tablet;
	public ?string $motv_portals_deep_link;
	public int $motv_portals_lost_password_enabled;
	public ?string $motv_portals_portal_apple_client_id;
	public ?int $motv_portals_welcome_template;
	public ?int $motv_portals_registration_text_template;
	public int $motv_portals_show_subscription_section;

	/** @var array<int> */
	public array $motv_portals_users;
	public ?int $motv_portals_test_viewers_id;
	public array $oauth2;
}

class MotvPortalPageEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $motv_portals_pages_id;
	public int $motv_portals_pages_motv_portal_id;
	public string $motv_portals_pages_url_name;
	public ?string $motv_portals_pages_description;
	public string $motv_portals_pages_content;
	public string $motv_portals_pages_title;
	public ?\Motv\Connector\Sms\Enums\Sms\PortalPageTypeEnum $motv_portals_pages_type;
	public ?string $motv_portals_pages_language;
}

class MotvPortalPrivateEntity extends MotvPortalEntity
{
	public ?SmtpServerEntity $smtp;
	public ?string $motv_portals_facebook_secret;
}

class MotvRegistrationFormAddressTypeEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $registration_form_address_types_id;
	public int $registration_form_address_types_vendors_id;
	public string $registration_form_address_types_type;
	public array $labels;
	public ?int $registration_form_address_types_max;
	public ?int $registration_form_address_types_min;
}

class MotvRegistrationFormControlEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $registration_form_controls_id;
	public int $registration_form_controls_vendors_id;
	public \Motv\Connector\Sms\Enums\Sms\MotvRegistrationFormSectionEnum $registration_form_controls_section;
	public string $registration_form_controls_column_type;
	public array $labels;
	public \Motv\Connector\Sms\Enums\Sms\CustomerFieldTypeEnum $registration_form_controls_type;
	public int $registration_form_controls_optional;
	public ?int $registration_form_controls_max;
	public ?int $registration_form_controls_min;
	public ?\Motv\Connector\Sms\Enums\Sms\MotvRegistrationFormPaternEnum $registration_form_controls_pattern;
	public ?string $registration_form_controls_custom_pattern;
	public ?array $patternLabel;
	public ?\Motv\Connector\Sms\Enums\Sms\MotvRegistrationFormOptionEnum $registration_form_controls_options;
	public ?string $registration_form_controls_custom_options;
	public \Motv\Connector\Sms\Enums\Sms\MotvRegistrationFormUniqueEnum $registration_form_controls_unique;
	public int $registration_form_controls_read_only;
	public int $registration_form_controls_order;
}

class MotvRegistrationFormEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $defaultLanguage;
	public MotvCustomerInfoGroupLabelsEntity $motvCustomerInfoGroupLabels;
	public MotvCustomerAcountLabelsEntity $motvCustomerAccountLabels;
	public array $customerColumns;
	public array $contactTypes;
	public array $addressTypes;
	public array $addressFormLayout;
	public string $addressFormat;
	public string $contactFormat;
	public int $motvLoginIsEmail;
	public int $motvRegistrationPinRequired;
	public int $motvRegistrationShowPin;
}

class MotvRegistrationSectionEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $sectionName;
	public int $order;

	/** @var array<CustomerFieldEntity> */
	public array $fields;
}

class ParentProductEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
}

class PaymentGatewayEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $payment_gateways_id;
	public string $payment_gateways_internal_name;
	public \Motv\Connector\Sms\Enums\Sms\PaymentGatewaysEnum $payment_gateways_type;
	public int $payment_gateways_active;
	public string $payment_gateways_url;
	public string $payment_gateways_merchant_number;
	public ?string $payment_gateways_api_key;
	public ?string $payment_gateways_private_key_path;
	public ?string $payment_gateways_private_key_password;
	public ?string $payment_gateways_public_key_path;
	public ?string $payment_gateways_provider;
	public ?string $payment_gateways_note;
	public ?string $payment_gateways_primary_key;
	public ?string $payment_gateways_users_id;
	public ?string $payment_gateways_gateway_key;
}

class ProductEntity extends ParentProductEntity
{
	public int $products_id;
	public string $products_name;
	public ?int $products_bouquets_id;
	public ?int $products_unit_length;
	public \Motv\Connector\Sms\Enums\Sms\TimeUnitEnum $products_unit;
	public ?int $products_hp_id;
	public int $products_is_active;
	public int $products_products_groups_id;
	public int $products_free_prepay;
	public \Motv\Connector\Sms\Enums\Sms\ProductTypeEnum $products_type;
	public \Motv\Connector\Sms\Enums\Sms\ProductPaymentTypeEnum $products_payment_type;
	public \Motv\Connector\Sms\Enums\Sms\SelfcareProductTypeEnum $products_selfcare_product_type;

	/** @var array<string> */
	public array $products_devices;

	/** @var array<int> */
	public array $products_categories;
	public ?BouquetEntity $bouquet;
	public ProductsGroupEntity $productsGroup;
	public string $products_currencies_code;
	public int $products_hide_from_customer;
	public \Motv\Connector\Sms\Enums\Sms\ProductContentTypeEnum $products_content_type;
	public ?int $products_discount;
	public ?int $products_real_discount;
	public ?\DateTimeImmutable $products_discount_from;
	public ?\DateTimeImmutable $products_discount_to;
	public array $prices;

	/** @var array<int> */
	public array $products_payment_gateways;
	public ?int $products_data_bundles_id;
	public int $products_geoblock_enabled;

	/** @var array<int> */
	public array $countries_products;
}

class ProductsGroupEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $products_groups_id;
	public string $products_groups_name;
	public int $products_groups_groups_invoices_id;
	public int $products_groups_open;
}

class ProductsPriceEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $products_prices_currencies_code;
	public float $products_prices_price_retail;
	public float $products_prices_price;
	public float $products_prices_tax;
	public ?float $products_prices_init_payment_price;
	public float $original_price;
	public float $selling_price;
	public float $original_price_retail;
	public float $selling_price_retail;
	public ?int $products_prices_trial_days;
}

class ReportColumnEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $reports_columns_id;
	public int $reports_columns_reports_id;
	public string $reports_columns_name;
	public \Motv\Connector\Sms\Enums\Sms\ReportFilterEnum $reports_columns_filter;
	public \Motv\Connector\Sms\Enums\Sms\ReportColumnTypeEnum $reports_columns_type;
}

class ReportEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $reports_id;
	public string $reports_name;
	public string $reports_query;

	/** @var array<int> */
	public array $reports_roles;

	/** @var array<ReportLinkEntity> */
	public array $reports_links;

	/** @var array<ReportColumnEntity> */
	public array $reports_columns;
}

class ReportFileEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $report_files_id;
	public int $report_files_reports_id;
	public string $report_files_filename;
	public \DateTimeImmutable $report_files_time;
	public ?string $content;
}

class ReportLinkEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $reports_links_id;
	public int $reports_links_reports_id;
	public string $reports_links_column_name;
	public \Motv\Connector\Sms\Enums\Sms\ReportLinkEnum $reports_links_link;
}

class ReportPrecalculationEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $reports_precalculations_id;
	public string $reports_precalculations_name;
	public int $reports_precalculations_generate;
	public string $reports_precalculations_query;
	public ?string $reports_precalculations_index;
	public ?\DateTimeImmutable $reports_precalculations_updated;
}

class RequestsEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $requests_id;
	public \Motv\Connector\Sms\Enums\Sms\RequestTypeEnum $request_type;
	public string|int|null $request_smartcard_id;
	public ?string $request_box_number;
	public ?\DateTimeImmutable $request_subscribe_from;
	public ?\DateTimeImmutable $request_subscribe_to;
	public ?int $request_viewer_id;
	public ?int $request_bouquet_id;
	public int $request_in_process;
	public int $request_processed;
	public ?int $request_viewers_bouquets_id;
	public int $request_filestatus;
	public ?int $request_request_batch_id;
	public int $request_batchable;
	public ?\DateTimeImmutable $request_processed_time;
	public \DateTimeImmutable $request_created_time;
	public \Motv\Connector\Sms\Enums\Sms\DeviceEnum $request_cas;
	public ?string $request_data;
	public ?string $bouquets_name;
	public ?ResponseEntity $response;
}

class ResponseEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $response_id;
	public \Motv\Connector\Sms\Enums\Sms\ResponseStatusEnum $response_status;
	public string $response_message;
	public \DateTimeImmutable $response_datetime;
}

class RightEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $rights_id;
	public string $rights_name;
	public string $rights_group;
}

class RoleDeviceEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $roles_devices_id;
	public \Motv\Connector\Sms\Enums\Sms\DeviceEnum $roles_devices_device;
	public int $roles_devices_roles_id;
	public \Motv\Connector\Sms\Enums\Sms\RoleDeviceActionEnum $roles_devices_action;
}

class RoleEntity extends \Motv\Connector\Sms\Entities\ApiSupport\RoleEntity
{
	public ?int $roles_roles_id;
}

class RolesForOrgChartEntity extends \Motv\Connector\Sms\Entities\ApiSupport\RoleEntity
{
	public RoleEntity $data;

	/** @var array<string> */
	public array $users;

	/** @var array<RolesForOrgChartEntity> */
	public array $roles;
}

class SalesProductEntity extends ProductEntity
{
	public ?\DateTimeImmutable $product_from;
	public ?\DateTimeImmutable $product_to;
}

class ScheduleEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $schedule_id;
	public string $schedule_name;
	public int $schedule_active;
	public int $schedule_recurrence;
	public ?int $schedule_repeat;
	public \Motv\Connector\Sms\Enums\Sms\TimeUnitEnum $schedule_repeat_unit;
	public \DateTimeImmutable $schedule_start;
	public ?\DateTimeImmutable $schedule_end;
	public int $schedule_users_id;
	public int $schedule_group_action_id;
	public string $schedule_data;
	public ?int $schedule_viewers_id;
	public string $group_action_name;
	public ?string $schedule_image;
}

class SelfcareLogEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $selfcare_log_id;
	public int $selfcare_log_session_id;
	public \Motv\Connector\Sms\Enums\Sms\SelfcareLogStageEnum $selfcare_log_stage;
	public ?int $selfcare_log_selfcare_orders_id;
	public ?int $selfcare_log_selfcare_orders_number;
	public ?string $selfcare_log_selfcare_orders_reference;
	public \DateTimeImmutable $selfcare_log_created;
	public ?string $selfcare_log_content;
	public ?string $selfcare_log_content_type;
	public ?string $selfcare_log_message;
	public ?int $selfcare_log_viewers_id;
	public ?int $selfcare_log_payment_gateways_id;
	public ?\Motv\Connector\Sms\Enums\Sms\PaymentGatewaysEnum $selfcare_log_payment_gateways_type;
	public ?string $device_motv_login;
}

class SelfcareLogSessionEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $selfcare_log_session_id;
	public \Motv\Connector\Sms\Enums\Sms\SelfcareLogStageEnum $selfcare_log_stage;
	public \DateTimeImmutable $selfcare_log_created;
	public ?string $device_motv_login;

	/** @var array<SelfcareLogEntity> */
	public array $logs;
}

class SelfcareOrderCheckEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $selfcare_orders_checks_id;
	public \DateTimeImmutable $selfcare_orders_checks_datetime;
	public \Motv\Connector\Sms\Enums\Sms\SelfcareOrderStatusEnum $selfcare_orders_checks_status;
	public ?string $selfcare_orders_checks_data;
}

class SelfcareOrderEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $selfcare_orders_id;
	public int $selfcare_orders_number;
	public ?string $selfcare_orders_reference;
	public string $selfcare_orders_currencies_code;
	public string $selfcare_orders_language;
	public int $selfcare_orders_viewers_id;
	public int $selfcare_orders_vendors_id;
	public float $selfcare_orders_amount;
	public float $selfcare_orders_amount_with_tax;
	public \DateTimeImmutable $selfcare_orders_created;
	public \Motv\Connector\Sms\Enums\Sms\SelfcareOrderStatusEnum $selfcare_orders_status;
	public \Motv\Connector\Sms\Enums\Sms\DeviceEnum $selfcare_orders_devices_type;
	public int $selfcare_orders_devices_id;
	public ?int $selfcare_orders_viewers_bouquets_id;
	public ?int $selfcare_orders_invoices_id;
	public ?int $selfcare_orders_receipts_id;
	public ?int $selfcare_orders_subscriptions_id;
	public \Motv\Connector\Sms\Enums\Sms\SelfcarePaymentTypeEnum $selfcare_orders_payment_type;
	public ?int $selfcare_orders_parent_selfcare_orders_id;
	public ?array $selfcare_orders_payments_data;

	/** @var array<SelfcareOrdersProductEntity> */
	public array $products;
	public ?string $selfcare_orders_payment_return_code;
	public int $selfcare_orders_payment_gateways_id;
	public ?string $selfcare_orders_session;
	public ?string $selfcare_orders_token;
	public ?string $selfcare_orders_momo_uid;
	public ?string $selfcare_orders_momo_another_phone;
	public ?string $selfcare_orders_momo_country;
	public ?string $selfcare_orders_dpo_data;
	public ?\Motv\Connector\Sms\Enums\Sms\MotvDeviceEnum $selfcare_orders_motv_devices_type;
	public ?int $selfcare_orders_data_bundles_id;
	public ?string $selfcare_orders_stripe_email;
	public ?string $selfcare_orders_stripe_customer;
	public ?string $selfcare_orders_stripe_subscription;
	public ?string $selfcare_orders_stripe_invoice;
	public ?\DateTimeImmutable $selfcare_orders_processed;
	public ?\DateTimeImmutable $selfcare_orders_stripe_from;
	public ?\DateTimeImmutable $selfcare_orders_stripe_to;
	public ?\Motv\Connector\Sms\Enums\Sms\InitPaymentTypeEnum $selfcare_orders_init_payment_type;
	public ?int $selfcare_orders_trial_days;
	public ?string $selfcare_orders_customer_email;
	public ?string $selfcare_orders_flutterwave_customer_id;
	public ?string $selfcare_orders_flutterwave_payment_method_id;
	public ?string $selfcare_orders_flutterwave_charge_id;
}

class SelfcareOrdersProductEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public ?int $selfcare_orders_products_products_id;
	public ?int $selfcare_orders_products_tvods_products_id;
	public float $selfcare_orders_products_amount;
	public float $selfcare_orders_products_amount_with_tax;
}

class SelfcareSubscriptionEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $subscriptions_id;
	public \DateTimeImmutable $subscriptions_created;
	public int $subscriptions_cancelled;
	public int $subscriptions_viewers_id;
	public int $subscriptions_selfcare_orders_id;
	public int $subscriptions_products_id;
	public int $subscriptions_renew_in_process;
	public ?\DateTimeImmutable $subscriptions_renew_last_try;
	public int $selfcare_orders_number;
	public float $selfcare_orders_amount;
	public float $selfcare_orders_amount_with_tax;
	public string $selfcare_orders_currencies_code;
	public string $products_name;
	public ?\DateTimeImmutable $prepaid_to;
}

class SmsMotvCombinedEntity extends DeviceMotvEntity
{
	public int $customers_id;
	public int $customers_vendors_id;
	public string $customers_login;
	public string $customers_token;
	public int $customers_profiles_id;
	public int $customers_recording_length;
	public int $customers_recording_used;

	/** @var array<mixed> */
	public array $profiles;
	public bool $customers_recommendation_engine_enabled;
}

class SmtpServerEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $config_smtp_servers_id;
	public string $config_smtp_servers_name;
	public int $config_smtp_servers_active;
	public ?int $config_smtp_servers_port;
	public \Motv\Connector\Sms\Enums\Sms\SmtpSecureTypeEnum $config_smtp_servers_secure;
	public string $config_smtp_servers_host;
	public ?string $config_smtp_servers_login;
	public ?string $config_smtp_servers_password;
	public ?string $config_smtp_servers_address_from;
	public string $config_smtp_servers_description;
	public string $queueName;
}

class StripeRenewEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public ?string $customersId;
	public ?string $subscriptionsId;
	public string $invoicesId;
	public \Motv\Connector\Sms\Enums\Sms\SelfcareOrderStatusEnum $status;
	public \DateTimeImmutable $from;
	public \DateTimeImmutable $to;
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
	public \Motv\Connector\Sms\Enums\Sms\DeviceEnum $bouquets_network;
	public \Motv\Connector\Sms\Enums\Sms\SubscriptionStateEnum $subscription_state;
	public ?\DateTimeImmutable $CONAX_DATE_FROM;
	public ?\DateTimeImmutable $CONAX_DATE_TO;
	public ?\DateTimeImmutable $viewers_bouquets_cancelled_on;
	public ?int $viewers_bouquets_invoice_id;
	public ?int $bouquets_is_active;
	public int $viewers_bouquets_from_selfcare;
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

	/** @var array<TicketsReferencesFileEntity> */
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

class TvodProductEntity extends ParentProductEntity
{
	public int $tvods_products_id;
	public string $tvods_products_name;
	public ?string $tvods_products_code;
	public int $tvods_products_unit_length;
	public \Motv\Connector\Sms\Enums\Sms\TimeUnitEnum $tvods_products_unit;
	public int $tvods_products_is_active;
	public int $tvods_products_products_groups_id;

	/** @var array<int> */
	public array $tvods;
	public \Motv\Connector\Sms\Enums\Sms\ProductPaymentTypeEnum $products_payment_type;
	public \Motv\Connector\Sms\Enums\Sms\ProductTypeEnum $products_type;
	public \Motv\Connector\Sms\Enums\Sms\ProductContentTypeEnum $tvods_products_content_type;
	public ProductsGroupEntity $productsGroup;
	public ?int $tvods_products_discount;
	public ?int $tvods_products_real_discount;
	public ?\DateTimeImmutable $tvods_products_discount_from;
	public ?\DateTimeImmutable $tvods_products_discount_to;
	public array $prices;

	/** @var array<int> */
	public array $tvods_products_payment_gateways;
	public int $tvods_products_geoblock_enabled;

	/** @var array<int> */
	public array $countries_tvods_products;
}

class TvodProductExtendedEntity extends TvodProductEntity
{
	/** @var array<mixed> */
	public array $tvodsEntities;
}

class TvodsSubscriptionEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $motv_tvods_id;
	public int $motv_tvods_viewers_id;
	public \DateTimeImmutable $motv_tvods_active_from;
	public \DateTimeImmutable $motv_tvods_active_to;
	public int $motv_tvods_device_motv_id;
	public ?int $motv_tvods_id_vods_id;
	public ?int $motv_tvods_tvods_products_id;
	public ?int $motv_tvods_invoice_id;
	public ?int $viewers_bouquets_products_id;
	public int $motv_tvods_duration;
	public ?string $tvods_products_name;
	public \Motv\Connector\Sms\Enums\Sms\SubscriptionStateEnum $subscription_state;
}

class UserEntity extends \Motv\Connector\Sms\Entities\ApiSupport\UserEntity
{
	public string $users_name;
	public ?string $users_description;
	public int $users_departments_id;
	public int $users_tickets;
	public int $users_dealers_id;
	public ?string $users_language;
	public ?string $users_template;
	public int $dealers_id;
	public string $dealers_name;
	public int $dealers_active;
	public int $dealers_infinite_credit;
	public int $dealers_any_card;
	public ?int $dealers_dealers_id;
	public ?string $token;
	public bool $isSuperUser;
	public ?string $departments_name;
	public array $dealers_credits;
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

class VendorEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public int $vendors_id;
	public string $vendors_name;
	public int $vendors_default;
}


namespace Motv\Connector\Sms\Entities\ApiSupport;

class DocumentationApiEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $className;
	public string $name;

	/** @var array<DocumentationMethodEntity> */
	public array $methods;
}

class DocumentationEntityEntity extends \Motv\Connector\Sms\Entities\MotvEntity
{
	public string $name;
	public string $shortName;
	public bool $input;
	public ?self $parent;

	/** @var array<EntityEntity> */
	public array $properties;

	/** @var array<EntityEntity> */
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

	/** @var array<DocumentationEnumCaseEntity> */
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
	public ?string $return_class_full;
	public ?\phpDocumentor\Reflection\DocBlock\Description $return;
	public bool $return_allows_null;

	/** @var array<string> */
	public array $right;
	public array $throws;

	/** @var array<DocumentationParameterEntity> */
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
	public ?string $type_full;
	public ?string $arrayOfType;
	public mixed $default;
	public bool $isDefault;
	public ?string $param_doc;
	public ?string $raw_param_doc;
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
	public bool $users_otp_registered;
	public ?\DateTimeImmutable $users_last_used;
}
