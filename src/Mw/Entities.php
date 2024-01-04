<?php

/**
 * Generated on Wed, 3 Jan 2024 13:24:27
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Mw\Entities;

class MotvEntity
{
}


namespace Motv\Connector\Mw\Entities\Mw;

class AdvertCampaignEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $campaigns_id;
	public string $campaigns_name;
	public int $campaigns_active;
	public \DateTimeImmutable $campaigns_from;
	public \DateTimeImmutable $campaigns_to;
	public int $campaigns_all_packages;
	public int $campaigns_ssai;

	/** @var array<int> */
	public array $campaigns_packages;

	/** @var array<AdvertCampaignSectionEntity> */
	public array $sections;
}

class AdvertCampaignSectionEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $campaigns_sections_id;
	public string $campaigns_sections_name;
	public int $campaigns_sections_chance;
	public int $campaigns_sections_campaigns_id;
	public int $campaigns_sections_allow_skip;
	public \Motv\Connector\Mw\Enums\Mw\AdvertUnitPositionEnum $campaigns_sections_position;
	public ?int $campaigns_sections_order;
	public ?\Motv\Connector\Mw\Enums\Mw\AdvertMidrollEnum $campaigns_sections_midroll_type;
	public ?int $campaigns_sections_midroll_position;
	public ?int $campaigns_sections_midroll_repeats;
	public int $campaigns_sections_all_units;

	/** @var array<AdvertUnitEntity> */
	public array $units;
}

class AdvertHomepageEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $advert_homepage_id;

	/** @var array<int> */
	public array $advert_homepage_vendors;
	public string $advert_homepage_name;
	public string $advert_homepage_internal_name;
	public \Motv\Connector\Mw\Enums\Mw\AdvertHomepageContentTypeEnum $advert_homepage_type;
	public ?int $advert_homepage_width;
	public ?int $advert_homepage_height;
	public ?int $advert_homepage_image_startup_width;
	public ?int $advert_homepage_image_startup_height;
	public int $advert_homepage_order;
	public ?string $advert_homepage_path;
	public ?string $advert_homepage_video_path;
	public ?string $advert_homepage_image_startup_path;
	public int $advert_homepage_active;
	public \DateTimeImmutable $advert_homepage_from;
	public \DateTimeImmutable $advert_homepage_to;
	public \Motv\Connector\Mw\Enums\Mw\AdvertHomepageActionTypeEnum $advert_homepage_action_type;
	public string $advert_homepage_action;
	public ?string $image;
	public ?string $video;
	public ?string $image_startup;
	public int $advert_homepage_show_vod;

	/** @var array<\Motv\Connector\Mw\Enums\Mw\DeviceEnum> */
	public array $advert_homepage_devices;
	public ?int $advert_homepage_video_loop;
	public ?int $advert_homepage_video_sound_on;
	public ?int $advert_homepage_video_label_words_id;
	public string $advert_homepage_video_label;
}

class AdvertUnitEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $units_id;
	public string $units_name;
	public int $units_active;
	public \Motv\Connector\Mw\Enums\Mw\AdvertUnitStatusEnum $units_available;
	public string $units_filename;
	public \Motv\Connector\Mw\Enums\Mw\AdvertUnitTypeEnum $units_type;
	public ?string $units_url;
	public ?int $units_skip_after;
	public ?int $units_video_duration;
	public \DateTimeImmutable $units_from;
	public \DateTimeImmutable $units_to;
	public int $units_weight;
	public int $units_all_channels;
	public ?int $units_limit_impressions;
	public ?int $units_limit_complete;
	public ?int $units_limit_clicks;
	public int $units_limit_profile;
	public ?\Motv\Connector\Mw\Enums\Mw\AdvertUnitLimitationDurationEnum $units_limit_profile_duration;
	public ?int $units_limit_profile_amount;
	public ?\Motv\Connector\Mw\Enums\Mw\AdvertTrackingEnum $units_limit_profile_type;
	public int $units_impressions;
	public int $units_clicks;
	public int $units_complete;
	public ?string $units_admob_id;
	public ?string $units_vast_url;

	/** @var array<int> */
	public array $units_channels;

	/** @var array<\Motv\Connector\Mw\Enums\Mw\DeviceEnum> */
	public array $units_devices;

	/** @var array<\Motv\Connector\Mw\Enums\Mw\AdvertUnitPositionEnum> */
	public array $units_positions;
	public ?int $units_image_width;
	public ?int $units_image_height;
	public ?string $units_custom_impression_url;
	public int $units_1st_screen_click_enable;
	public ?string $units_1st_screen_click_image;
}

class AnsibleEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $ansible_cors;
	public int $ansible_wildcard_cors;
	public string $ansible_project_name;
	public string $ansible_dns_clientname;
	public string $ansible_timezone;
	public string $ansible_service_dns_ip;
	public string $ansible_extra;

	/** @var array<int> */
	public array $ansible_haproxy_cluster;

	/** @var array<int> */
	public array $ansible_dnsmasq_cluster;
}

class AppEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $apps_id;
	public string $apps_name;
	public string $apps_package;
	public int $apps_active;
}

class AppManagerEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $app_manager_id;
	public string $app_manager_version;
	public string $app_manager_package;
	public int $app_manager_vendors_id;
	public \Motv\Connector\Mw\Enums\Mw\DeviceEnum $app_manager_device;

	/** @var array<FileManagerEntity> */
	public array $files;

	/** @var array<AppManagerStoreEntity> */
	public array $stores;
}

class AppManagerStoreEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $app_manager_stores_id;
	public int $app_manager_stores_app_manager_id;
	public ?\Motv\Connector\Mw\Enums\Mw\FilesLauncherEnum $app_manager_stores_launcher;
	public string $app_manager_stores_store_id;
}

class BackupEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public bool $enabled;
	public string $name;
	public bool $aws;
}

class CandidatesCategoriesEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $candidates_categories_count;
	public string $candidates_categories_title;
	public string $candidates_categories_desc;
	public array $candidates_categories_genres;
}

class CategoryEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $categories_id;
	public string $categories_name;
	public int $categories_active;
	public ?string $categories_description;
	public string $categories_image;
	public int $categories_image_width;
	public int $categories_image_height;
	public ?string $categories_image_widescreen;
	public ?int $categories_image_widescreen_width;
	public ?int $categories_image_widescreen_height;
	public ?RecommendationCardEntity $follow;
	public ?int $order;
}

class CategoryPrivateEntity extends CategoryEntity
{
	/** @var array<int> */
	public array $genres;

	/** @var array<int> */
	public array $vods;
	public ?string $categories_regex;
}

class ChannelAudioEntity extends ChannelVodAudioSubtitleEntityAbstract
{
	public string $channels_audio_role;
	public string $channels_audio_label;
	public string $channels_audio_pid;
	public int $channels_audio_default;
	public int $channels_audio_level;
	public \Motv\Connector\Mw\Enums\Mw\AudioChannelEnum $channels_audio_channel;
	public int $channels_audio_order;
}

class ChannelCategoryEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $channels_categories_id;
	public string $channels_categories_name;
	public ?string $channels_categories_description;
	public ?string $channels_categories_image;
	public int $channels_categories_active;
	public int $channels_categories_order;
	public ?int $order;

	/** @var array<int> */
	public array $channels;
}

class ChannelEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $channels_id;
	public int $channels_remote;
	public string $channels_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelTypeEnum $channels_type;
	public int $channels_active;
	public int $channels_order;
	public ?string $channels_logo;
	public ?string $channels_logo_widescreen;
	public int $channels_rating;
	public int $channels_forced_pin;
	public int $channels_offline_playback;
	public int $channels_restart_on_fail;
	public int $channels_notify_on_fail;
	public ?string $channels_note;
	public int $channels_package_override_enabled;
	public int $channels_enabled_multicast;
	public int $channels_enabled_unicast;
	public int $channels_enabled_broadcast;
	public ?int $channels_allowed_timeshit;
	public ?int $channels_recording_expiration;
	public \Motv\Connector\Mw\Enums\Mw\ChannelEpgImageEnum $channels_epg_image;
	public string $channels_epg_custom_image;
	public int $channels_epg_screenshot;
	public int $channels_include_in_recommendations;
	public int $channels_avsync_check;
	public ?string $channels_avsync_setup;

	/** @var array<ChannelsBroadcastEntity> */
	public array $channels_broadcast;

	/** @var array<ChannelMulticastEntity> */
	public array $channels_multicast;

	/** @var array<ChannelUnicastEntity> */
	public array $channels_unicast;

	/** @var array<int> */
	public array $channels_channels_categories;

	/** @var array<int> */
	public array $channels_packages;

	/** @var array<int> */
	public array $channels_packages_locked;

	/** @var array<\Motv\Connector\Mw\Enums\Mw\DeviceEnum> */
	public array $channels_devices;
}

class ChannelInternalEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $channels_id;
	public string $channels_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelTypeEnum $channels_type;
	public int $channels_order;
	public int $channels_rating;
	public int $channels_forced_pin;

	/** @var array<int> */
	public array $channels_categories;
	public string $channels_logo;
	public ?string $channels_logo_widescreen;
	public int $channels_number;
	public int $channels_recording_length;
	public int $channels_live_length;

	/** @var array<int> */
	public array $channels_multicast;

	/** @var array<ChannelUnicastInternalEntity> */
	public array $channels_unicast;
	public array $channels_broadcast;
	public int $channels_package_override_enabled;
	public int $channels_enabled_multicast;
	public int $channels_enabled_unicast;
	public int $channels_enabled_broadcast;
	public ?int $channels_allowed_timeshit;
}

class ChannelMulticastEntity extends ChannelMulticastUnicastEntity
{
	public int $channels_multicast_id;
	public int $channels_multicast_channels_id;
	public int $channels_multicast_active;
	public string $channels_multicast_directory;
	public int $channels_multicast_transcoders_id;
	public ?string $channels_multicast_input;
	public ?int $channels_multicast_templates_id;
	public ?string $channels_multicast_service_id;
	public string $channels_multicast_output;
	public int $channels_multicast_interlaced;
	public int $channels_multicast_access_unit_delimiters;
	public ?string $channels_multicast_video_pid;
	public string $storages_live_path;

	/** @var array<int> */
	public array $channels_multicast_vendors;

	/** @var array<ChannelAudioEntity> */
	public array $channels_audio;

	/** @var array<ChannelSubtitleEntity> */
	public array $channels_subtitle;
	public ?TemplateEntity $template;
	public ?string $channels_multicast_note;
}

class ChannelMulticastUnicastEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
}

class ChannelsBroadcastEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $channels_broadcast_id;
	public int $channels_broadcast_channels_id;
	public int $channels_broadcast_active;
	public \Motv\Connector\Mw\Enums\Mw\ChannelBroadcastTypeEnum $channels_broadcast_type;
	public int $channels_broadcast_original_network_id;
	public int $channels_broadcast_transport_stream_id;
	public int $channels_broadcast_service_id;
	public ?int $channels_broadcast_modulation;
	public ?int $channels_broadcast_frequency;
	public ?int $channels_broadcast_symbol_rate;
	public ?int $channels_broadcast_bandwidth;
	public ?int $channels_broadcast_plp;
	public ?string $channels_broadcast_default_audio;
	public ?string $channels_broadcast_default_subtitle;
	public int $channels_broadcast_dvb_regions_id;

	/** @var array<int> */
	public array $channels_broadcast_vendors;
	public ?string $channels_broadcast_note;
}

class ChannelSubtitleEntity extends ChannelVodAudioSubtitleEntityAbstract
{
	public string $channels_subtitle_pid;
	public string $channels_subtitle_label;
	public string $channels_subtitle_language;
	public int $channels_subtitle_default;
	public int $channels_subtitle_order;
}

class ChannelUnicastEntity extends ChannelMulticastUnicastEntity
{
	public int $channels_unicast_id;
	public int $channels_unicast_channels_id;
	public \Motv\Connector\Mw\Enums\Mw\ChannelSourceTypeEnum $channels_unicast_type;
	public int $channels_unicast_active;
	public string $channels_unicast_directory;
	public string $channels_unicast_live_directory;
	public ?int $channels_unicast_transcoders_id;
	public int $channels_unicast_transcoding_gpu;
	public int $channels_unicast_gpu_decoding;
	public int $channels_unicast_gpu_encoding;
	public int $channels_unicast_deinterlacing;
	public int $channels_unicast_discard_corrupt;
	public \Motv\Connector\Mw\Enums\Mw\ChannelInputTypeEnum $channels_unicast_input_type;
	public ?string $channels_unicast_input_file;
	public ?string $channels_unicast_input_url;
	public string $channels_unicast_bind_multicast_ip;
	public int $channels_unicast_bind_multicast_port;
	public ?int $channels_unicast_live_templates_id;
	public ?int $channels_unicast_recording_templates_id;
	public ?string $channels_unicast_video_pid;
	public \Motv\Connector\Mw\Enums\Mw\VideoInputCodecEnum $channels_unicast_input_video_codec;
	public ?int $channels_unicast_mozaic_size;
	public \Motv\Connector\Mw\Enums\Mw\ChannelSubtitleEnum $channels_unicast_subtitle_option;
	public string $storages_live_path;
	public int $channels_restart_on_fail;
	public int $channels_notify_on_fail;
	public string $channels_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelTypeEnum $channels_type;

	/** @var array<int> */
	public array $channels_unicast_vendors;

	/** @var array<ChannelAudioEntity> */
	public array $channels_audio;

	/** @var array<ChannelSubtitleEntity> */
	public array $channels_subtitle;
	public ?TemplateEntity $template_live;
	public ?TemplateEntity $template_recording;
	public array $channels_mozaic;
	public ?int $channels_unicast_remote_channels_id;
	public ?int $channels_unicast_remote_mw_id;
	public ?string $channels_unicast_note;
	public int $channels_unicast_experimental_catchup;
}

class ChannelUnicastInternalEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $channels_unicast_id;
	public \Motv\Connector\Mw\Enums\Mw\ChannelSourceTypeEnum $channels_unicast_type;
	public ?string $channels_unicast_input_url;

	/** @var array<int> */
	public array $channels_unicast_live_edges_storages;

	/** @var array<int> */
	public array $channels_unicast_catchup_edges_storages;
	public bool $cbcs_capable;
	public bool $cenc_capable;
	public ?array $temporary_playback_event;
}

class ChannelVodAudioSubtitleEntity extends ChannelVodAudioSubtitleEntityAbstract
{
	public string $role;
	public string $label;
	public ?string $pid;
	public int $default;
	public int $order;
}

class ChannelVodAudioSubtitleEntityAbstract extends \Motv\Connector\Mw\Entities\MotvEntity
{
}

class ContainerEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $containers_name;
	public \Motv\Connector\Mw\Enums\Mw\ContainerTypeEnum $containers_type;

	/** @var array<ContainerParameterEntity> */
	public array $parameters;
}

class ContainerParameterEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public \Motv\Connector\Mw\Enums\Mw\ContainerParameterTypeEnum $type;
	public string $value;
}

class ContinueWatchingEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public ?int $vodsId;
	public ?int $epgEventsId;
	public int $second;
	public bool $finished;
	public \DateTimeImmutable $updated;
}

class CountryEntity extends ChannelMulticastUnicastEntity
{
	public int $countries_id;
	public string $countries_code;
	public string $countries_name;
}

class CustomerEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $customers_id;
	public int $customers_vendors_id;
	public string $customers_login;
	public ?\DateTimeImmutable $customers_created;
	public ?int $customers_users_id;
	public string $customers_token;
	public int $customers_profiles_id;
	public int $customers_password_changed;
	public ?int $customers_dvb_c_regions_id;
	public ?int $customers_dvb_s_regions_id;
	public ?int $customers_dvb_t_regions_id;
	public ?int $customers_dvb_t2_regions_id;
	public int $customers_device_count;
	public int $customers_concurrent_device_count;
	public int $customers_recording_length;
	public int $customers_recording_used;
	public int $customers_autogenerated;

	/** @var array<ProfileEntity> */
	public array $profiles;
	public ?bool $customers_recommendation_engine_enabled;
	public array $customers_recording_by_profile;
}

class CustomerQrCodeEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $login_qr_id;
	public string $login_qr_code;
	public ?string $login_qr_token;
	public \DateTimeImmutable $login_qr_requested;
	public ?int $login_qr_vendors_id;
}

class DetectorEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $detectors_id;
	public string $detectors_name;
	public int $detectors_active;
	public string $detectors_url;
}

class DeviceEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $devices_id;
	public int $devices_customers_id;
	public int $devices_profiles_id;
	public string $devices_type;
	public string $devices_identification;
	public string $devices_hash;
	public ?\DateTimeImmutable $devices_used;
	public \DateTimeImmutable $devices_added;
	public ?string $devices_ip;
	public ?int $devices_dvb_c_regions_id;
	public ?int $devices_dvb_s_regions_id;
	public ?int $devices_dvb_t_regions_id;
	public ?int $devices_dvb_t2_regions_id;
	public ?string $devices_google_token;
	public ?string $devices_package_name;
}

class DrmKeyEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public \Motv\Connector\Mw\Enums\Mw\DrmTypeEnum $drm_keys_motv_type;
	public int $drm_keys_motv_id;
	public \Motv\Connector\Mw\Enums\Mw\ProfileSDLabelEnum $drm_keys_label;
	public string $drm_keys_key_id;
	public string $drm_keys_key;
	public string $drm_keys_iv;
}

class DvbRegionEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $dvb_regions_id;
	public string $dvb_regions_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelBroadcastTypeEnum $dvb_regions_dvb_network;
}

class EdgeEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $edges_id;
	public string $edges_name;
	public string $edges_url;
	public int $edges_active;

	/** @var array<int> */
	public array $edges_storages;
	public ?int $edges_servers_id;
	public int $edges_proxy;
	public ?string $edges_secondary_url;
}

class EdgeStorageEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $edges_storages_id;
	public string $storages_edge_mount;
	public string $edges_url;
	public string $edges_speed_check_url;
	public string $edges_speed_test_url;
}

class EpgChannelEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $channels_epg_custom_image;
	public string $channels_name;
	public int $channels_id;
	public ?int $channels_rating;
}

class EpgEventEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $epg_events_id;
	public \DateTimeImmutable $epg_events_start;
	public \DateTimeImmutable $epg_events_end;
	public string $epg_events_title;
	public ?string $epg_events_subtitle;
	public ?string $epg_events_categories;
	public ?string $epg_events_desc;
	public ?int $epg_events_rating;
	public ?string $epg_events_episode_num;
	public int $epg_events_generated;
	public ?string $epg_events_actors;
	public ?string $epg_events_director;
	public int $epg_events_channels_id;
	public ?float $epg_events_imdb_rating;
	public ?int $epg_events_categories_id;
	public ?string $epg_events_imdb_id;
	public ?string $epg_events_serie_name;
	public ?int $epg_events_serie_number;
	public ?int $epg_events_episode_number;
	public ?string $epg_events_released;
	public ?string $epg_events_origin;
	public string $epg_events_icon;
	public int $epg_events_icon_width;
	public int $epg_events_icon_height;
	public int $channels_id;
	public string $channels_name;
	public ?int $follow;
	public ?int $duration;
}

class EpgEventInternalEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $epg_events_id;
	public \DateTimeImmutable $epg_events_start;
	public \DateTimeImmutable $epg_events_end;
	public string $epg_events_title;
	public ?string $epg_events_subtitle;
	public ?string $epg_events_categories;
	public ?string $epg_events_desc;
	public ?int $epg_events_rating;
	public ?string $epg_events_episode_num;
	public \DateTimeImmutable $epg_events_update_time;
	public string $epg_events_filename;
	public int $epg_events_generated;
	public ?string $epg_events_actors;
	public ?string $epg_events_director;
	public int $epg_events_channels_id;
	public int $epg_events_second;
	public int $epg_events_icon_default;
	public string $epg_events_group;
	public ?float $epg_events_imdb_rating;
	public ?int $epg_events_categories_id;
	public ?string $epg_events_imdb_id;
	public ?string $epg_events_serie_name;
	public ?int $epg_events_serie_number;
	public ?int $epg_events_episode_number;
	public ?string $epg_events_released;
	public ?string $epg_events_origin;
	public int $epg_events_epg_images_id;
	public ?int $epg_events_epg_images_id_widescreen;
	public int $epg_images_id;
	public string $epg_events_icon;
	public string $epg_events_icon_hash;
	public int $epg_events_icon_width;
	public int $epg_events_icon_height;
	public ?int $epg_images_id_widescreen;
	public ?string $epg_events_icon_widescreen;
	public ?string $epg_events_icon_hash_widescreen;
	public ?int $epg_events_icon_width_widescreen;
	public ?int $epg_events_icon_height_widescreen;
	public int $channels_id;
	public string $channels_name;
	public string $epg_events_url;
	public string $epg_events_thumbnail_url;
	public ?int $follow;
	public int $epg_events_duration;
}

class EpgEventMetadataEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $epg_events_id;
	public \DateTimeImmutable $epg_events_start;
	public \DateTimeImmutable $epg_events_end;
	public string $epg_events_title;
	public int $epg_events_channels_id;
	public string $epg_events_subtitle;
	public ?string $epg_events_desc;
	public ?int $epg_events_rating;
	public ?string $epg_events_episode_num;
	public ?float $epg_events_imdb_rating;
	public ?string $epg_events_imdb_id;
	public ?int $epg_events_serie_number;
	public ?int $epg_events_episode_number;
	public string $epg_events_icon;
	public ?string $epg_events_icon_widescreen;
	public array $epg_events_actors;
	public array $epg_events_director;
	public ?int $epg_events_categories_id;

	/** @var array<int> */
	public array $epg_events_genres;
}

class EpgEventSegmentEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $recognition_models_channels_id;
	public \DateTimeImmutable $epg_events_segments_start;
	public \DateTimeImmutable $epg_events_segments_end;
}

class EpgPlaylistEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $epg_playlists_id;
	public ?string $epg_playlists_title;
	public ?string $epg_playlists_description;
	public string $epg_playlists_name;
	public int $epg_playlists_active;
	public \DateTimeImmutable $epg_playlists_created;

	/** @var array<EpgPlaylistsListItemEntity> */
	public array $items;
}

class EpgPlaylistsListItemEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $epg_playlists_items_id;
	public int $epg_playlists_items_epg_playlists_id;
	public string $title;
	public ?string $subtitle;
	public ?\DateTimeImmutable $start;
	public ?int $epg_playlists_items_vods_id;
	public ?int $epg_playlists_items_genres_id;
	public ?int $epg_playlists_items_categories_id;
	public ?int $epg_playlists_items_epg_events_id;
	public int $epg_playlists_items_order;
	public ?string $image;
}

class EpgRatingEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $epg_rating_id;
	public ?string $epg_rating_name;
	public int $epg_rating_from;
	public int $epg_rating_to;
	public string $epg_rating_image;
}

class EventsVodsListEntityList extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public ?int $vods_id;
	public ?int $epg_events_id;
}

class FileManagerEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $files_id;
	public int $files_app_manager_id;
	public string $files_path;
	public string $files_filename;
	public ?\Motv\Connector\Mw\Enums\Mw\FilesLauncherEnum $files_launcher;
	public ?string $files_app_id;
	public ?string $files_file_extension;
	public int $files_downloaded;
	public \Motv\Connector\Mw\Enums\Mw\FilesTypeEnum $files_type;
	public ?int $files_file_size;
	public \DateTimeImmutable $files_time;
	public ?string $files_extension;
}

class FileManagerLatestFileEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $version;
	public \Motv\Connector\Mw\Enums\Mw\DeviceEnum $device;
	public ?\Motv\Connector\Mw\Enums\Mw\FilesLauncherEnum $launcher;
}

class FileManagerVersionEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public ?\Motv\Connector\Mw\Enums\Mw\FilesLauncherEnum $filesLauncher;
	public string $storeVersion;
	public string $latestVersion;
	public bool $isActual;
	public \Motv\Connector\Mw\Enums\Mw\DeviceEnum $device;
}

class FtpEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $ftp_id;
	public string $ftp_name;
	public int $ftp_active;
	public int $ftp_transcoders_id;
	public int $ftp_templates_id;
	public \Motv\Connector\Mw\Enums\Mw\FtpTypeEnum $ftp_type;
	public string $ftp_host;
	public int $ftp_port;
	public string $ftp_folder;
	public string $ftp_login;
	public string $ftp_password;
	public ?\DateTimeImmutable $ftp_last_checked;
}

class FtpLogEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $ftp_log_id;
	public int $ftp_log_ftp_id;
	public \DateTimeImmutable $ftp_log_time;
	public \Motv\Connector\Mw\Enums\Mw\FtpProcessStatusEnum $ftp_log_status;
	public string $ftp_log_message;
	public ?string $ftp_log_directory;
	public ?int $ftp_log_vods_id;
}

class GenreEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $genres_id;
	public string $genres_name;
	public ?string $genres_description;
	public int $genres_order;
	public int $genres_active;

	/** @var array<int> */
	public array $vods;
	public ?string $genres_image;
	public ?int $genres_image_width;
	public ?int $genres_image_height;
	public ?string $genres_image_widescreen;
	public ?int $genres_image_widescreen_width;
	public ?int $genres_image_widescreen_height;
}

class GrafanaAlertEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $name;
	public string $link;
	public string $startsAt;
	public string $state;
}

class GrafanaCustomDashboardEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $grafana_custom_dashboards_uid;
	public string $grafana_custom_dashboards_title;
	public string $grafana_custom_dashboards_data;
	public ?GrafanaFolderEntity $grafana_folder;
}

class GrafanaFolderEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $grafana_folders_uid;
	public string $grafana_folders_title;
}

class HomepageChannelAlertEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $channel;
	public int $unicast_id;
	public ?string $transcoders_name;
	public \Motv\Connector\Mw\Enums\Mw\MonitoringChannelStateEnum $status;
	public ?int $uptime;
	public ?int $warnings;
	public ?int $errors;
}

class HomepageEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $homepages_id;
	public string $homepages_name;
	public int $homepages_active;
	public int $homepages_priority;
	public ?int $homepages_android_tv_startup_channels_id;
	public ?int $homepages_web_player_startup_channels_id;
	public ?int $homepages_ios_startup_channels_id;
	public ?int $homepages_android_startup_channels_id;
	public ?array $homepage;

	/** @var array<int> */
	public array $vendors;
}

class HomepageRowEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $homepage_layout_id;
	public int $homepage_layout_homepages_id;
	public ?int $homepage_layout_order;
	public ?int $homepage_layout_words_id;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineHomepageLayoutEnum $homepage_layout_type;
	public ?\Motv\Connector\Mw\Enums\Mw\RecommendationEngineCardAssetTypeEnum $homepage_layout_asset;
	public ?array $homepage_layout_search;
	public ?int $homepage_layout_epg_playlists_id;
	public ?int $homepage_layout_catchup;
	public ?int $homepage_layout_catchup_to;
	public int $homepage_layout_group_categories;
	public int $homepage_layout_min_score;
	public \Motv\Connector\Mw\Enums\Mw\HomepageLayoutSortEnum $homepage_layout_sort_type;
	public \Motv\Connector\Mw\Enums\Mw\HomepageLayoutContentEnum $homepage_layout_content;
	public \Motv\Connector\Mw\Enums\Mw\HomepageLayoutWatchStatusEnum $homepage_layout_watch_status;

	/** @var array<int> */
	public array $homepage_layout_channels;

	/** @var array<int> */
	public array $homepage_layout_advert_homepage;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineRowStyleEnum $homepage_layout_row_size;
	public ?int $homepage_layout_items_limit;
	public ?\Motv\Connector\Mw\Enums\Mw\HomepageLayoutFullsizeViewTypeEnum $homepage_layout_fullsize_view_type;
	public ?string $homepage_layout_middle_fullsize_background_image;
}

class IpRangeEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $ip_ranges_id;
	public string $ip_ranges_name;
	public string $ip_ranges_from;
	public string $ip_ranges_to;
}

class LoggerEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $log_id;
	public \Motv\Connector\Mw\Enums\Mw\LoggerEventsEnum $log_type;
	public \DateTimeImmutable $log_time;
	public ?int $log_users_id;
	public ?int $log_customers_id;
	public ?int $log_int_parameter1;
	public ?int $log_int_parameter2;
	public ?string $log_text_parameter1;
	public ?string $log_string_parameter1;
	public ?string $log_string_parameter2;
}

class MmccEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $mmcc_id;
	public string $mmcc_name;
	public ?int $mmcc_profiles_id;
	public ?\Motv\Connector\Mw\Enums\Mw\DeviceEnum $mmcc_devices_type;

	/** @var array<int> */
	public array $channels_unicasts;
}

class MonitoringChannelLogEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public ?string $channels_log_varchar_data_1;
	public \DateTimeImmutable $channels_log_time;
	public int $channels_log_count;
	public ?\Motv\Connector\Mw\Enums\Mw\MonitoringErrorEnum $channels_log_severity;
	public ?int $channels_log_channels_unicast_id;
	public ?\Motv\Connector\Mw\Enums\Mw\MonitoringEventChannelEnum $channels_log_type;
}

class MonitoringChannelLogExtendedEntity extends MonitoringChannelLogEntity
{
	public int $channels_log_id;
	public ?int $channels_log_int_data_1;
	public ?int $channels_log_int_data_2;
	public ?int $channels_log_int_data_3;
	public ?string $channels_log_varchar_data_2;
	public ?string $channels_log_text_data_1;
}

class MonitoringChannelStatusEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public ?\DateTimeImmutable $channels_checked;
	public \Motv\Connector\Mw\Enums\Mw\MonitoringChannelStateEnum $channels_available;
	public ?int $channels_live_time;
	public ?int $channels_mpd_drift;
	public ?int $channels_mpd_gap;
	public int $channels_warning;
	public int $channels_error;
	public ?int $channels_thumbnail_time;
	public ?int $channels_mpd_offset;
}

class MonitoringDataEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public \Motv\Connector\Mw\Enums\Mw\MonitoringEventChannelEnum $type;
	public int $id;
	public int $count;
	public string $data;
}

class MonitoringStatusEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public ?string $data;
	public ?int $live_time;
	public ?int $thumbnail_time;
	public ?int $mpd_drift;
	public ?int $mpd_gap;
	public ?int $mpd_offset;
	public ?string $ffmpeg_live_log;
	public \Motv\Connector\Mw\Enums\Mw\MonitoringChannelStateEnum $status;
	public \DateTimeImmutable $checked;
}

class MonitoringTranscoderStatusEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public bool $running;
	public ?string $ffmpeg_live_log;
	public ?int $live_time;
	public ?int $thumbnail_time;
}

class OnboardingEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $onboarding_id;
	public int $onboarding_vendors_id;
	public int $onboarding_order;
	public string $onboarding_image_phone_portrait;
	public ?string $onboarding_image_phone_landscape;
	public ?string $onboarding_image_tablet_portrait;
	public ?string $onboarding_image_tablet_landscape;
	public ?string $onboarding_image_tv;
	public ?int $onboarding_name_words_id;
	public ?int $onboarding_text_words_id;
	public string $onboarding_name;
	public string $onboarding_text;
	public string $onboarding_internal_name;
}

class OtaDeviceEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $ota_devices_id;
	public string $ota_devices_name;
	public string $ota_devices_package_name;
}

class OtaLatestVersionEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $version;
	public string $url;
	public \DateTimeImmutable $created;
	public string $hash;
	public int $size;
	public string $update_interval;
}

class OtaVersionEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $ota_versions_id;
	public int $ota_versions_ota_devices_id;
	public string $ota_versions_filename;
	public float $ota_versions_version;
	public ?string $ota_versions_description;
	public \DateTimeImmutable $ota_versions_created;
	public int $ota_versions_active;
	public ?\DateTimeImmutable $ota_version_active_since;
	public string $ota_versions_public_filename;
	public string $ota_versions_local_filename;
}

class PackageEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $packages_id;
	public int $packages_active;
	public string $packages_name;
	public int $packages_timeshift;
	public int $packages_device_count;
	public int $packages_recording_length;
	public int $packages_recording_expiration;
	public int $packages_concurrent_device_count;
	public int $packages_geoblock;
	public \Motv\Connector\Mw\Enums\Mw\ProfileSDEnum $packages_unicast_profile;
	public int $packages_concurrent_1st_device_count;
	public int $packages_concurrent_2nd_device_count;
	public int $packages_enabled_multicast;
	public int $packages_enabled_unicast;
	public int $packages_enabled_broadcast;
	public int $packages_ip_ranges_enabled;
	public int $packages_include_licence;
	public ?int $packages_homepages_id;
	public int $packages_show_similar;

	/** @var array<int> */
	public array $channels_packages;

	/** @var array<int> */
	public array $channels_packages_locked;

	/** @var array<int> */
	public array $vods_packages_locked;

	/** @var array<int> */
	public array $vods_packages;

	/** @var array<int> */
	public array $vods_groups_packages;

	/** @var array<int> */
	public array $vods_groups_packages_locked;

	/** @var array<int> */
	public array $apps_packages;

	/** @var array<int> */
	public array $countries_packages;

	/** @var array<\Motv\Connector\Mw\Enums\Mw\DeviceEnum> */
	public array $packages_devices;

	/** @var array<int> */
	public array $packages_ip_ranges;

	/** @var array<int> */
	public array $packages_edges;
	public int $packages_offline_playback;
	public int $packages_offline_playback_expiration;
}

class PersonEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $persons_id;
	public string $persons_name;
	public \Motv\Connector\Mw\Enums\Mw\PersonEnum $persons_type;
	public ?string $persons_description;
	public ?string $persons_image;
	public ?\DateTimeImmutable $persons_birthday;
}

class PipelineEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $ansible_pipelines_id;
	public \DateTimeImmutable $ansible_pipelines_created;
	public int $ansible_pipelines_users_id;
	public string $ansible_pipelines_description;
	public \Motv\Connector\Mw\Enums\Mw\PipelineStatusEnum $ansible_pipelines_status;
	public \Motv\Connector\Mw\Enums\Mw\PipelineTypeEnum $ansible_pipelines_type;
	public ?int $ansible_pipelines_entity_id;

	/** @var array<PipelineJobEntity> */
	public array $jobs;
}

class PipelineJobEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $ansible_jobs_id;
	public int $ansible_jobs_ansible_pipelines_id;
	public \Motv\Connector\Mw\Enums\Mw\AnsiblePlaybookEnum $ansible_jobs_playbook;
	public string $ansible_jobs_limit;
	public string $ansible_jobs_tags;
	public int $ansible_jobs_gitlab_id;
	public \Motv\Connector\Mw\Enums\Mw\PipelineStatusEnum $ansible_jobs_status;
}

class PollEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $polls_id;
	public int $polls_vendors_id;
	public \DateTimeImmutable $polls_from;
	public \DateTimeImmutable $polls_to;
	public string $polls_question;
	public int $polls_vods;

	/** @var array<int> */
	public array $polls_channels;

	/** @var array<PollOptionEntity> */
	public array $polls_options;
}

class PollOptionEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $polls_options_id;
	public string $polls_options_option;
}

class PortalEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $portals_id;
	public int $portals_vendors_id;
	public int $portals_portal_id;
	public ?string $portals_sms_url;
	public string $portals_container_name;
	public string $portals_client_name;

	/** @var array<string> */
	public array $portals_languages;
	public ?string $portals_firebase;
	public ?string $portals_google_client_id;
	public ?string $portals_android_package_name;
	public ?string $portals_android_certificate;
	public ?string $portals_androidtv_package_name;
	public ?string $portals_androidtv_certificate;
	public ?string $portals_apple_bundle_id;
	public ?string $portals_apple_development_team;
	public int $portals_provider;
	public int $portals_device_autologin;

	/** @var array<PortalUrlEntity> */
	public array $portals_urls;

	/** @var array<int> */
	public array $portals_servers;
}

class PortalUrlEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $portals_urls_url;
	public int $portals_urls_primary;
}

class ProfileEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $profiles_id;
	public int $profiles_customers_id;
	public string $profiles_name;
	public string $profiles_image;
	public ?\DateTimeImmutable $profiles_birthday;
	public ?string $profiles_pin;
	public \DateTimeImmutable $profiles_created;
	public int $profiles_protect;
	public ?int $profiles_age;
	public int $profiles_pin_enabled;
	public string $customers_login;
	public string $customers_token;
	public int $customers_vendors_id;
	public string $image;
	public int $profiles_login_requires_pin;
	public int $vendors_multicast_unicast_fallback;
	public int $vendors_push_reminders;
	public int $vendors_channel_list_reindex_order;
	public ?\DateTimeImmutable $profiles_used;

	/** @var array<int> */
	public array $channels_whitelisting;
}

class ProviderEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $providers_id;
	public int $providers_vendors_id;
	public string $providers_name;
	public int $providers_active;
	public string $providers_app_sms_url;
	public int $providers_app_sms_portal_id;
	public string $providers_app_mw_url;
	public int $providers_app_vendor_id;
	public string $providers_app_color;
	public string $providers_image;
	public int $providers_full_screen_login_image;
}

class ProviderExternalEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $name;
	public string $api;
	public int $portal;
	public string $mw;
	public int $vendor;
	public string $color;
	public string $image;
	public int $loginImageCenterCrop;
}

class PublicMulticastEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $public_multicast_id;
	public int $public_multicast_transcoders_id;
	public \Motv\Connector\Mw\Enums\Mw\PublicMulticastTypeEnum $public_multicast_type;
	public string $public_multicast_password;
	public ?string $public_multicast_input;
	public ?int $public_multicast_input_port;
	public ?string $public_multicast_input_origin;
	public ?string $public_multicast_mapping;
	public string $public_multicast_output;
	public string $public_multicast_note;
}

class RecognitionModelChannelEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $recognition_models_channels_id;
	public int $recognition_models_channels_recognition_models_id;
	public int $recognition_models_channels_channels_unicast_id;
	public int $recognition_models_channels_active;
	public int $recognition_models_channels_burn_advert_info;
	public int $recognition_models_channels_mark_event_starts;
	public bool $isRecognitionApiException;
	public int $recognition_models_channels_min_ad_duration;
	public int $recognition_models_channels_max_ad_duration;
	public int $recognition_models_channels_min_program_segment_duration;
}

class RecognitionModelEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $recognition_models_id;
	public string $recognition_models_name;
	public ?string $recognition_models_path;
	public int $recognition_models_active;
	public \Motv\Connector\Mw\Enums\Mw\RecognitionModelStatusEnum $recognition_models_status;
	public int $recognition_models_allow_switch_to_finall_status;
	public int $recognition_models_detectors_id;
	public string $detectors_name;
	public int $detectors_active;

	/** @var array<RecognitionModelChannelEntity> */
	public array $channels;
}

class RecognitionSavedTemplateEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $recognition_saved_templates_id;
	public \DateTimeImmutable $recognition_saved_templates_start_date;
	public \DateTimeImmutable $recognition_saved_templates_end_date;
	public string $recognition_saved_templates_template_name;
	public int $recognition_saved_templates_recognition_models_id;
	public int $recognition_saved_templates_recognition_models_channels_id;
	public string $recognition_saved_templates_api_key;
	public int $recognition_saved_templates_active;
}

class RecognitionSavedTemplateResultsEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $recognitionModelsId;
	public int $recognitionModelsChannelsId;
	public int $recognitionSavedTemplatesId;
	public \DateTimeImmutable $startDate;
	public \DateTimeImmutable $endDate;
}

class RecommendationCardChannelEntity extends RecommendationCardEntity
{
	public int $channels_id;
	public string $channels_name;
	public string $channels_logo;
	public ?string $channels_logo_widescreen;
}

class RecommendationCardEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $id;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineCardAssetTypeEnum $type;
	public ?string $title;
	public ?string $subtitle;
	public ?string $description;
	public ?int $follow;
	public ?int $duration;
	public ?int $rating;
	public ?string $released;
	public ?string $origin;
	public ?int $removable;
	public string $image;
	public int $image_width;
	public int $image_height;
	public ?string $image_widescreen;
	public ?int $image_widescreen_width;
	public ?int $image_widescreen_height;
	public ?string $name_image;
	public ?int $name_image_width;
	public ?int $name_image_height;
	public ?int $locked;
	public ?int $order;
	public string|int|null $episode;
	public ?string $genres;
	public ?string $actors;
	public ?string $directors;
	public ?float $score;
	public ?int $reminder;
	public ?int $preferred_offset;
	public ?bool $playable;
	public ?int $categories_id;
	public ?string $categories_name;
	public ?string $external_id;
	public ?string $youtube_id;
	public ?\DateTimeImmutable $expiration;
	public ?float $imdb_rating;
	public ?string $imdb_id;
	public ?int $season_number;
	public ?int $episode_number;
}

class RecommendationCardEventEntity extends RecommendationCardEntity
{
	public int $channels_id;
	public string $channels_name;
	public ?int $channels_forced_pin;
	public string $channels_logo;
	public ?string $channels_logo_widescreen;
	public \DateTimeImmutable $start;
	public \DateTimeImmutable $end;
}

class RecommendationCardImageEntity extends RecommendationCardEntity
{
	public ?string $action;
	public \Motv\Connector\Mw\Enums\Mw\AdvertHomepageActionTypeEnum $action_type;
	public ?string $admob_id;
	public ?string $video;
	public ?int $video_loop;
	public ?int $video_sound_on;
	public string $video_label;
}

class RecommendationCardRecordingEntity extends RecommendationCardEventEntity
{
	public ?\Motv\Connector\Mw\Enums\Mw\ChannelRecordingStatusEnum $generator_status;
	public ?array $generator_drm;
	public ?int $generator_thumbnails;
	public int $recordings_id;
	public \DateTimeImmutable $recordings_created;
	public int $profiles_id;
	public string $epg_events_title;
}

class RecommendationCardVodEntity extends RecommendationCardEntity
{
	public ?\DateTimeImmutable $hot_news;
	public ?\DateTimeImmutable $live_start;
}

class RecommendationCategoryEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public CategoryEntity $category;

	/** @var array<RecommendationRowEntity> */
	public array $rows;
}

class RecommendationRowEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $id;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineHomepageLayoutEnum $type;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineRowStyleEnum $style;
	public string $title;
	public ?array $data;
	public ?int $focus;
	public ?\Motv\Connector\Mw\Enums\Mw\HomepageLayoutFullsizeViewTypeEnum $type_of_view;
	public ?string $background_image;
}

class RecommendedListItemIEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
}

class RemoteChannelEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $channels_id;
	public string $channels_name;
	public string $channels_logo;
	public ?string $channels_logo_widescreen;
	public int $channels_rating;
	public int $timeshift;
	public ?int $catchup;
}

class RemoteMwEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $remote_mw_id;
	public string $remote_mw_name;
	public int $remote_mw_active;
	public string $remote_mw_url;
	public int $remote_mw_profiles_id;
	public string $remote_mw_token;

	/** @var array<int> */
	public array $edges;
}

class ReportEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $reports_id;
	public string $reports_query;
	public string $reports_name;
	public string $reports_label;

	/** @var array<ReportQueryFilterEntity> */
	public array $query_filters;
}

class ReportQueryFilterEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $reports_query_filters_id;
	public int $reports_query_filters_reports_id;
	public string $reports_query_filters_name;
	public string $reports_query_filters_label;
	public \Motv\Connector\Mw\Enums\Mw\ReportFilterEnum $reports_query_filters_type;
	public int $reports_query_filters_required;
	public ?string $reports_query_filters_default_value;
}

class ReportScheduleAttachementEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $report_schedules_attachements_id;
	public int $report_schedules_attachements_report_schedules_id;
	public \DateTimeImmutable $report_schedules_attachements_generated;
	public string $report_schedules_attachements_path;
	public \Motv\Connector\Mw\Enums\Mw\ReportScheduleAttachementTypeEnum $report_schedules_attachements_type;
	public string $report_schedules_attachements_note;
	public int $report_schedules_attachements_duration;
}

class ReportScheduleEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $report_schedules_id;
	public string $report_schedules_name;
	public ?string $report_schedules_pdf_name;
	public int $report_schedules_active;
	public \DateTimeImmutable $report_schedules_start_date;
	public int $report_schedules_start_time;
	public ?\DateTimeImmutable $report_schedules_end;
	public \Motv\Connector\Mw\Enums\Mw\ReportScheduleRepeatEnum $report_schedules_repeat;
	public string $report_schedules_emails;
	public string $report_schedules_dashboard;
	public ?string $report_schedules_timerange_from;
	public ?string $report_schedules_timerange_to;
	public string $report_schedules_variables;
	public int $report_schedules_export_pdf;
	public int $report_schedules_export_tables;
	public int $report_schedules_export_tables_csv;
	public \Motv\Connector\Mw\Enums\Mw\GrafanaThemesEnum $report_schedules_theme;
	public int $report_schedules_hidden_params;
	public int $report_schedules_landscape;
}

class RightsRoleEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $rights_name;
	public string $rights_group;
	public string $roles_name;
	public int $rights_id;
	public int $roles_id;
	public ?int $rights_roles_rights_id;
	public int $roles_sysadmin;
}

class SearchRuleEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineOperatorEnum $operator;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineCriteriaEnum $criteria;
	public int $keyword;
	public int $boost;

	/** @var array<string> */
	public array $options;
}

class ServerEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $servers_id;
	public string $servers_name;
	public string $servers_internal_ip;
	public string $servers_public_ip;
	public string $servers_vpn_ip;
	public ?string $servers_service_dns_ip;
	public ?string $servers_extra;
	public float $servers_latitude;
	public float $servers_longitude;

	/** @var array<ServerIpRuleEntity> */
	public array $servers_iptables;
	public int $servers_null_service_dns_ip;
	public int $servers_external_load_balancer;
}

class ServerIpRuleEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $servers_iptables_ip;
	public int $servers_iptables_port;
	public string $servers_iptables_note;
}

class StorageEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $storages_id;
	public string $storages_name;
	public int $storages_active;
	public string $storages_api;
	public ?string $storages_edge_mount;
	public string $storages_live_path;
	public string $storages_catchup_path;
	public string $storages_vod_path;
	public int $storages_available;
	public ?\DateTimeImmutable $storages_checked;
	public ?string $storages_data;

	/** @var array<int> */
	public array $vods_storages_storages;
	public ?int $storages_servers_id;
}

class StorageTransferEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $storages_transfers_id;
	public ?\DateTimeImmutable $storages_transfers_started;
	public ?\DateTimeImmutable $storages_transfers_finished;
	public ?int $storages_transfers_origin_storages_id;
	public int $storages_transfers_destination_storages_id;
	public \Motv\Connector\Mw\Enums\Mw\StorageTransferEnum $storages_transfers_type;
	public int $storages_transfers_type_id;
	public ?string $storages_transfers_hash;
	public ?string $storages_transfers_origin;
	public ?string $storages_transfers_path;
	public \Motv\Connector\Mw\Enums\Mw\StorageStatusEnum $storages_transfers_status;
	public string $storages_transfers_response;
}

class StreamRecordingEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $stream_recordings_id;
	public \DateTimeImmutable $stream_recordings_created;
	public int $stream_recordings_transcoders_id;
	public string $stream_recordings_ip;
	public int $stream_recordings_length;
	public ?string $stream_recordings_filename;
	public string $stream_recordings_note;
	public \Motv\Connector\Mw\Enums\Mw\StreamRecordingStatusEnum $stream_recordings_status;
	public int $stream_recordings_users_id;
}

class StreamTimeEventBreakEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public float $duration;
	public ?int $skipAfter;
	public ?string $clickUrl;
	public array $events;
	public string $adMpdUrl;
	public int $id;
	public bool $ssai;
}

class StreamTimeEventCuePointEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public bool $skipable;
	public bool $thumbnails;
	public bool $followable;
	public bool $seekable;
	public float $start;
	public float $end;
}

class StreamTimeEventsEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	/** @var array<StreamTimeEventBreakEntity> */
	public array $breaks;

	/** @var array<StreamTimeEventCuePointEntity> */
	public array $cuepoints;
	public ?array $times;
}

class StreamUrlBaseEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $id;
	public \Motv\Connector\Mw\Enums\Mw\ContentTypeEnum $type;
	public int $downloadExpiration;
	public \Motv\Connector\Mw\Enums\Mw\ChannelSourceTypeEnum $sourceType;
	public ?string $url;
	public int $offset;
	public bool $live;
	public \Motv\Connector\Mw\Enums\Mw\ChannelStreamTypeEnum $streamType;
	public \Motv\Connector\Mw\Enums\Mw\ChannelManifestTypeEnum $manifestType;
	public bool $interlaced;
	public bool $access_unit_delimiters;
	public ?int $follow;
	public ?int $edgesId;
	public bool $allowSeek;
	public bool $isPinProtected;

	/** @var array<TemplateProfileEntity> */
	public array $videoProfiles;
	public array $drms;
	public ?string $adVmap;
	public ?\Motv\Connector\Mw\Enums\Mw\ProfileSDNameEnum $allowedTracks;
	public ?array $thumbnails;
	public ?int $vendors_multicast_unicast_fallback;
	public bool $hasCeaCaptions;
	public ?ChannelsBroadcastEntity $broadcast_parameters;
	public ?int $remoteChannelsUnicastId;
	public ?\Motv\Connector\Mw\Enums\Mw\TemplateEncryptionEnum $encryptionType;
	public ?string $fairPlayCertificateUrl;
	public ?int $liveWindowDuration;
	public ?StreamTimeEventsEntity $timeEvents;
}

class StreamUrlEntity extends StreamUrlBaseEntity
{
	/** @var array<ChannelVodAudioSubtitleEntityAbstract> */
	public array $audio;

	/** @var array<ChannelVodAudioSubtitleEntityAbstract> */
	public array $subtitle;
}

class StreamUrlV2Entity extends StreamUrlBaseEntity
{
	/** @var array<ChannelVodAudioSubtitleEntity> */
	public array $audio;

	/** @var array<ChannelVodAudioSubtitleEntity> */
	public array $subtitle;
	public ?int $previewDuration;
}

class SubscribedChannelEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $channels_id;
	public string $channels_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelTypeEnum $channels_type;
	public int $channels_order;
	public int $channels_rating;
	public int $channels_forced_pin;

	/** @var array<int> */
	public array $channels_categories;
	public string $channels_logo;
	public ?string $channels_logo_widescreen;
	public int $channels_number;
	public int $channels_recording_length;
	public int $channels_live_length;
	public int $channels_locked;
	public int $customers_recording_length;
	public bool $ucast;
	public bool $mcast;
	public bool $bcast;
	public bool $allowed_recordings;
}

class SubscribedChannelInternalEntity extends ChannelInternalEntity
{
	public int $channels_locked;
	public int $customers_recording_length;
	public bool $ucast;
	public bool $mcast;
	public bool $bcast;
	public bool $allowed_recordings;
}

class SubscribedChannelLiteEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $i;
	public int $rl;
	public int $ll;
	public int $cl;
	public bool $u;
	public bool $m;
	public bool $b;
}

class SystemFeatureUsageEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $id;
	public string $name;
	public bool $status;
	public string $message;
	public bool $snoozed;
	public ?string $statusMessage;
}

class SystemSettingsCronCommandEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $name;
	public ?string $when;
	public bool $clusterUnique;
	public ?string $command;
	public string $description;
	public ?array $tags;
	public int $cooldown;
	public bool $onlyOne;
}

class SystemStatisticsEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $customer_count;
	public int $license_count;
	public int $license_limitation;
	public bool $recommendation_engine;
	public int $watching_unicast;
	public int $watching_multicast;
	public int $watching_broadcast;
	public int $watching_android;
	public int $watching_android_tv;
	public int $watching_ios;
	public int $watching_web_player;
	public int $watching_live;
	public int $watching_timeshift;
	public int $watching_catchup;
	public int $watching_recording;
	public int $watching_vod;
}

class TemplateEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $templates_id;
	public string $templates_name;
	public \Motv\Connector\Mw\Enums\Mw\TemplateTypeEnum $templates_type;
	public int $templates_active;
	public ?int $templates_duration;
	public ?string $templates_multicast_config;
	public ?string $templates_multicast_command;

	/** @var array<TemplateProfileEntity> */
	public array $profile;
}

class TemplateProfileEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public ?int $templates_profile_order;
	public int $templates_profile_bitrate;
	public int $templates_profile_width;
	public int $templates_profile_height;
	public \Motv\Connector\Mw\Enums\Mw\TemplateCodecEnum $templates_profile_codec;
	public int $templates_profile_recording;
	public ?int $templates_profile_label_words_id;
	public string $templates_profile_label;

	/** @var array<\Motv\Connector\Mw\Enums\Mw\TemplateEncryptionEnum> */
	public array $templates_profile_encryption;
}

class TimelineSegmentEntity extends ChannelMulticastUnicastEntity
{
	public int $id;
	public string $title;
	public \DateTimeImmutable $start;
	public \DateTimeImmutable $end;
	public string $images;
	public string $image;
	public float $duration;
	public ?float $block_position;
	public ?float $block_number;
	public int $count;
	public ?string $recognitionSavedTemplatesLink;
}

class TimelineSlotEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $title;

	/** @var array<RecommendationRowEntity> */
	public array $recommendations;
	public \DateTimeImmutable $from;
	public \DateTimeImmutable $to;
}

class TranscoderEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $transcoders_id;
	public int $transcoders_active;
	public string $transcoders_name;
	public int $transcoders_live_storages_id;
	public int $transcoders_catchup_storages_id;
	public int $transcoders_vod_storages_id;
	public string $transcoders_api;
	public int $transcoders_catchup_active;
	public int $transcoders_vod_active;
	public ?array $transcoders_usage;
	public ?int $transcoders_detectors_id;
	public ?int $transcoders_servers_id;

	/** @var array<TranscoderRouteEntity> */
	public array $transcoders_routes;
	public ?string $transcoders_live_storage_mount_ip;
	public ?string $transcoders_catchup_storage_mount_ip;
	public ?string $transcoders_vod_storage_mount_ip;
}

class TranscoderRouteEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $transcoders_routes_id;
	public string $transcoders_routes_interface;
	public string $transcoders_routes_ip;
	public string $transcoders_routes_routes;
}

class UserEntity extends \Motv\Connector\Mw\Entities\ApiSupport\UserEntity
{
	public ?string $gitlab_token;

	/** @var array<int> */
	public array $users_vendors;
}

class VendorAppAndroidEntity extends VendorAppParentEntity
{
	public int $vendors_apps_android_vendors_id;
	public string $vendors_apps_android_app_name;
	public ?string $vendors_apps_android_package_name;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_android_status;
	public ?string $vendors_apps_android_login_screen_image;
	public ?string $vendors_apps_android_app_icon_foreground;
	public ?string $vendors_apps_android_app_icon_background;
}

class VendorAppAndroidTVEntity extends VendorAppParentEntity
{
	public int $vendors_apps_android_tv_vendors_id;
	public string $vendors_apps_android_tv_app_name;
	public ?string $vendors_apps_android_tv_package_name;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_android_tv_status;
	public \Motv\Connector\Mw\Enums\Mw\ImageScalingEnum $vendors_apps_android_tv_background_image_scaling;
	public ?string $vendors_apps_android_tv_login_screen_image;
	public ?string $vendors_apps_android_tv_banner_image;
	public ?string $vendors_apps_android_tv_app_icon_foreground;
	public ?string $vendors_apps_android_tv_app_icon_background;
}

class VendorAppGeneralEntity extends VendorAppParentEntity
{
	public int $vendors_apps_general_vendors_id;
	public ?string $vendors_apps_general_purchase_order_number;
	public string $vendors_apps_general_color;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppGeneralStatusEnum $vendors_apps_general_general_status;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_general_status;
	public ?string $vendors_apps_general_test_login;
	public ?string $vendors_apps_general_test_password;
}

class VendorAppIOSEntity extends VendorAppParentEntity
{
	public int $vendors_apps_ios_vendors_id;
	public string $vendors_apps_ios_app_name;
	public ?string $vendors_apps_ios_package_name;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_ios_status;
	public ?string $vendors_apps_ios_login_screen_image;
	public ?string $vendors_apps_ios_app_icon;
}

class VendorAppParentEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
}

class VendorAppRokuEntity extends VendorAppParentEntity
{
	public int $vendors_apps_roku_vendors_id;
	public string $vendors_apps_roku_app_name;
	public ?string $vendors_apps_roku_app_icon;
	public ?string $vendors_apps_roku_splashcreen_image;
	public ?string $vendors_apps_roku_login_background_image;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_roku_status;
}

class VendorAppSamsungLgEntity extends VendorAppParentEntity
{
	public int $vendors_apps_samsung_lg_vendors_id;
	public string $vendors_apps_samsung_lg_app_name;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_samsung_lg_status;
	public ?string $vendors_apps_samsung_lg_app_icon;
	public string $vendors_apps_samsung_lg_lg_package_name;
	public string $vendors_apps_samsung_lg_samsung_package_id;
	public string $vendors_apps_samsung_lg_samsung_package_name;
	public int $vendors_apps_samsung_lg_portal_id;
	public ?string $vendors_apps_samsung_lg_sms_url;

	/** @var array<string> */
	public array $vendors_apps_samsung_lg_languages;
}

class VendorAppStatusLogEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $vendors_apps_statuses_log_vendors_id;
	public ?\Motv\Connector\Mw\Enums\Mw\VendorAppSectionEnum $vendors_apps_statuses_log_section;
	public ?int $vendors_apps_statuses_log_users_id;
	public \DateTimeImmutable $vendors_apps_statuses_log_date;
	public string $vendors_apps_statuses_log_new_status;
}

class VendorAppTVOSEntity extends VendorAppParentEntity
{
	public int $vendors_apps_tvos_vendors_id;
	public string $vendors_apps_tvos_app_name;
	public ?string $vendors_apps_tvos_package_name;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_tvos_status;
	public ?string $vendors_apps_tvos_login_screen_image;
	public ?string $vendors_apps_tvos_app_store_icon;
	public ?string $vendors_apps_tvos_app_icon;
	public ?string $vendors_apps_tvos_top_shelf_image;
}

class VendorAvatarEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $vendors_avatars_id;
	public int $vendors_avatars_vendors_id;
	public int $vendors_avatars_order;
	public string $vendors_avatars_image;
}

class VendorChannelOrderEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $channels_name;
	public string $channels_logo;
	public int $channels_id;
	public ?int $channels_vendors_order_order;
}

class VendorEntity extends VendorPublicEntity
{
	public int $vendors_license_count;
	public int $vendors_license_limitation;
	public int $vendors_infinite_license;
	public int $vendors_devices_per_license;
	public \Motv\Connector\Mw\Enums\Mw\VendorLicenseTypeEnum $vendors_license_type;
	public int $vendors_min_devices_per_license;
	public int $vendors_multicast_retry_fallback;
	public int $vendors_channel_list_reindex_order;
	public ?int $vendors_locked_item_words_id;
	public ?string $vendors_locked_item_image;
	public ?string $vendors_locked_item_url;
	public ?int $vendors_social_share_event_watching_words_id;
	public ?int $vendors_social_share_vod_watching_words_id;
	public ?int $vendors_social_share_event_detail_words_id;
	public ?int $vendors_social_share_vod_detail_words_id;
	public ?string $vendors_locked_item_url_close;
	public int $vendors_pin_login;
	public ?string $vendors_google_services;
	public ?int $vendors_licence_left_alert_treshold;
	public ?string $vendors_licence_left_alert_treshold_emails;

	/** @var array<int> */
	public array $vendors_channels_unicast;

	/** @var array<int> */
	public array $vendors_channels_multicast;

	/** @var array<int> */
	public array $vendors_channels_broadcast;
	public ?string $vendors_new_application_emails;
}

class VendorLockedChannelVodTextImageEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public ?string $vendors_locked_item_image;
	public ?string $vendors_locked_item_text;
	public \Motv\Connector\Mw\Enums\Mw\VendorLockedItemTypeEnum $vendors_locked_item_type;
	public ?string $vendors_locked_item_url_close;
	public ?string $vendors_locked_item_url;
}

class VendorPublicEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $vendors_android_tv_channel_list_number;
	public int $vendors_androidtv_player_auto;
	public \Motv\Connector\Mw\Enums\Mw\AndroidTVPlayerEnum $vendors_androidtv_player;
	public int $vendors_buffer_for_multicast_playback_ms;

	/** @var array<\Motv\Connector\Mw\Enums\Mw\ChannelBroadcastTypeEnum> */
	public array $vendors_dvb_networks;
	public int $vendors_id;
	public string $vendors_name;
	public int $vendors_mac_login;
	public int $vendors_multicast_unicast_fallback;
	public string $vendors_outage_image;
	public ?string $vendors_phone;
	public int $vendors_playback_inactivity_timeout;
	public ?string $vendors_player_watermark_image;
	public int $vendors_qr_code;
	public int $vendors_rate_app;
	public int $vendors_social_share;
	public int $vendors_rcu_number_invocation_delay;
	public ?bool $vendors_recommendation_engine_enabled;
	public int $vendors_chromecast;
	public int $vendors_airplay;
	public string $vendors_chromecast_app;
	public int $vendors_show_radio_epg_on_overview;
	public int $vendors_push_reminders;
	public ?int $vendors_login_force_change_password;
	public ?string $vendors_background_image_phone_portrait;
	public ?string $vendors_background_image_tablet_portrait;
	public ?string $vendors_background_image_tablet_landscape;
	public ?string $vendors_background_image_tv;
	public ?string $vendors_background_image_portal;
	public ?string $vendors_deeplink_scheme;
	public ?string $vendors_chromecast_image;
	public string $vendors_chromecast_color;
	public string $vendors_accent_color;
	public string $vendors_card_background_color;
	public \Motv\Connector\Mw\Enums\Mw\VendorBackgroundTypeEnum $vendors_background_type;
	public string $vendors_background_solid_color;
	public string $vendors_background_gradient_from_color;
	public string $vendors_background_gradient_to_color;
	public \Motv\Connector\Mw\Enums\Mw\ImageScalingEnum $vendors_background_image_scaling;
	public string $customer_password_validation_regex;
	public ?string $vendors_header_image;
	public int $vendors_delete_customer_account;
	public ?string $vendors_portal_url;
}

class VodAudioEntity extends ChannelVodAudioSubtitleEntityAbstract
{
	public string $vods_audio_role;
	public string $vods_audio_label;
	public string $vods_audio_pid;
	public int $vods_audio_default;
	public int $vods_audio_level;
	public \Motv\Connector\Mw\Enums\Mw\AudioChannelEnum $vods_audio_channel;
	public int $vods_audio_order;
}

class VodEntity extends VodExternalEntity
{
	public int $vods_active;
	public string $vods_directory;
	public ?string $vods_filename;
	public int $vods_transcoders_id;
	public \Motv\Connector\Mw\Enums\Mw\VodTypeEnum $vods_type;
	public int $vods_templates_id;
	public \Motv\Connector\Mw\Enums\Mw\VodStatusEnum $vods_status;
	public ?string $vods_video_mapping;
	public ?\Motv\Connector\Mw\Enums\Mw\VideoInputCodecEnum $vods_video_codec;
	public ?float $vods_video_fps;
	public int $vods_transcoding_gpu;
	public ?int $vods_deinterlacing;
	public int $vods_thumbnails;
	public \DateTimeImmutable $vods_license_start;
	public \DateTimeImmutable $vods_license_end;
	public ?string $vods_3rdparty_id;
	public ?string $vods_3rdparty_data;
	public ?\Motv\Connector\Mw\Enums\Mw\Vod3rdPartyEnum $vods_3rdparty_name;
	public int $vods_tvod;
	public string $vods_url;
	public ?string $vods_trailer_url;
	public string $vods_thumbnail_url;

	/** @var array<int> */
	public array $edges;

	/** @var array<int> */
	public array $vods_packages;

	/** @var array<int> */
	public array $vods_vods_groups;

	/** @var array<int> */
	public array $vods_packages_locked;

	/** @var array<int> */
	public array $vods_epg_playlists;
	public ?string $vods_transcoded_hash;
	public string $storages_vod_path;
	public int $vods_delete_metadata;
	public ?array $vods_drm;
	public int $vods_offline_playback;
	public ?string $vods_live_input;
	public ?\DateTimeImmutable $vods_live_start;
	public ?int $vods_live_length;
	public int $vods_has_trailer;
}

class VodExternalEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $vods_id;
	public string $vods_name;
	public ?string $vods_subname;
	public string $vods_image;
	public int $vods_image_width;
	public int $vods_image_height;
	public ?string $vods_image_widescreen;
	public ?int $vods_image_widescreen_width;
	public ?int $vods_image_widescreen_height;
	public ?string $vods_name_image;
	public ?int $vods_name_image_width;
	public ?int $vods_name_image_height;
	public ?string $vods_description;

	/** @var array<PersonEntity> */
	public array $vods_actors;

	/** @var array<PersonEntity> */
	public array $vods_directors;
	public ?\DateTimeImmutable $vods_released;
	public int $vods_rating;
	public ?int $vods_next_vods_id;
	public ?int $vods_duration;
	public int $vods_series;
	public ?int $vods_season;
	public ?int $vods_episode;
	public ?string $vods_imdb_id;
	public ?float $vods_imdb_rating;
	public ?\DateTimeImmutable $vods_hot_news;
	public ?string $vods_origin;
	public ?int $vods_categories_id;
	public ?string $vods_external_id;
	public ?\Motv\Connector\Mw\Enums\Mw\VodExternalTypeEnum $vods_external_type;

	/** @var array<GenreEntity> */
	public array $genres;

	/** @var array<VodAudioEntity> */
	public array $vods_audio;

	/** @var array<VodSubtitleEntity> */
	public array $vods_subtitle;
	public int $vods_locked;
	public ?int $follow;
	public ?int $order;
	public ?string $categories_name;
}

class VodGroupEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $vods_groups_id;
	public string $vods_groups_name;

	/** @var array<int> */
	public array $vods;
}

class VodSubtitleEntity extends ChannelVodAudioSubtitleEntityAbstract
{
	public string $vods_subtitle_language;
	public string $vods_subtitle_label;
	public string $vods_subtitle_file;
	public int $vods_subtitle_default;
	public int $vods_subtitle_order;
}

class VodUploadTokenEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $uploadDirectory;
	public int $storagesId;
	public string $storagesApi;
	public string $transcodersApi;
	public int $vodsId;
	public string $vodsFilename;
	public string $token;
	public bool $isTrailer;
}

class WordEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $words_id;
	public string $words_text;
	public ?string $words_note;
	public array $translations;
}


namespace Motv\Connector\Mw\Entities\ApiSupport;

class DocumentationApiEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $className;
	public string $name;

	/** @var array<DocumentationMethodEntity> */
	public array $methods;
}

class DocumentationEntityEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $name;
	public string $shortName;
	public bool $input;
	public ?DocumentationEntityEntity $parent;

	/** @var array<EntityEntity> */
	public array $properties;

	/** @var array<EntityEntity> */
	public array $parentProperties;
	public string $space;
}

class DocumentationEnumCaseEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $name;
	public string $value;
	public string $label;
}

class DocumentationEnumEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $name;
	public string $shortName;

	/** @var array<DocumentationEnumCaseEntity> */
	public array $cases;
	public string $space;
}

class DocumentationMethodEntity extends \Motv\Connector\Mw\Entities\MotvEntity
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

class DocumentationParameterEntity extends \Motv\Connector\Mw\Entities\MotvEntity
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

class EntityEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public string $description;
	public ?string $subtype;
	public string $name;
	public string $type;
	public bool $nullable;
	public ?string $default;
	public ?string $return_doc;
}

class ErrorCodeEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $code;
	public string $name;
	public string $description;
	public string $space;
}

class RoleEntity extends \Motv\Connector\Mw\Entities\MotvEntity
{
	public int $roles_id;
	public string $roles_name;
	public int $roles_active;
	public int $roles_sysadmin;
}

class UserEntity extends \Motv\Connector\Mw\Entities\MotvEntity
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
