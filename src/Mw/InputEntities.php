<?php

/**
 * Generated on Mon, 18 Sep 2023 14:06:45
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Mw\InputEntities;

class MotvEntity
{
}


namespace Motv\Connector\Mw\InputEntities\Mw;

class AdvertCampaignEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $campaigns_name;
	public bool $campaigns_active;

	/** @var \DateTimeImmutable|string */
	public $campaigns_from;

	/** @var \DateTimeImmutable|string */
	public $campaigns_to;
	public bool $campaigns_all_packages;
	public ?bool $campaigns_ssai;
	public array $campaigns_packages;
}

class AdvertCampaignSectionEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $campaigns_sections_name;
	public int $campaigns_sections_chance;
	public bool $campaigns_sections_allow_skip;
	public \Motv\Connector\Mw\Enums\Mw\AdvertUnitPositionEnum $campaigns_sections_position;
	public ?int $campaigns_sections_order;
	public ?\Motv\Connector\Mw\Enums\Mw\AdvertMidrollEnum $campaigns_sections_midroll_type;
	public ?int $campaigns_sections_midroll_position;
	public ?int $campaigns_sections_midroll_repeats;
	public bool $campaigns_sections_all_units;
	public array $units;
}

class AdvertHomepageEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public array $advert_homepage_vendors;
	public string $advert_homepage_name;
	public string $advert_homepage_internal_name;
	public \Motv\Connector\Mw\Enums\Mw\AdvertHomepageContentTypeEnum $advert_homepage_type;
	public int $advert_homepage_order;
	public bool $advert_homepage_active;

	/** @var \DateTimeImmutable|string */
	public $advert_homepage_from;

	/** @var \DateTimeImmutable|string */
	public $advert_homepage_to;
	public \Motv\Connector\Mw\Enums\Mw\AdvertHomepageActionTypeEnum $advert_homepage_action_type;
	public string $advert_homepage_action;
	public ?string $image;
	public ?string $video;
	public ?string $image_startup;
	public int $advert_homepage_show_vod;
	public ?array $advert_homepage_devices;
	public ?bool $advert_homepage_video_loop;
	public ?bool $advert_homepage_video_sound_on;
	public ?int $advert_homepage_video_label_words_id;
}

class AdvertUnitEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $units_name;
	public \Motv\Connector\Mw\Enums\Mw\AdvertUnitTypeEnum $units_type;
	public ?string $file;
	public ?string $file_extension;
	public bool $units_active;

	/** @var \DateTimeImmutable|string */
	public $units_from;

	/** @var \DateTimeImmutable|string */
	public $units_to;
	public int $units_weight;
	public ?string $units_url;
	public ?int $units_skip_after;
	public array $units_positions;
	public bool $units_all_channels;
	public array $units_channels;
	public array $units_devices;
	public bool $units_all_packages;
	public array $units_packages;
	public ?int $units_limit_impressions;
	public ?int $units_limit_complete;
	public ?int $units_limit_clicks;
	public bool $units_limit_profile;
	public ?\Motv\Connector\Mw\Enums\Mw\AdvertTrackingEnum $units_limit_profile_type;
	public ?\Motv\Connector\Mw\Enums\Mw\AdvertUnitLimitationDurationEnum $units_limit_profile_duration;
	public ?int $units_limit_profile_amount;
	public ?string $units_admob_id;
	public ?string $units_vast_url;
	public ?string $units_custom_impression_url;
	public bool $units_1st_screen_click_enable;
	public ?string $units_1st_screen_click_image;
}

class AnsibleEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $ansible_cors;
	public bool $ansible_wildcard_cors;
	public string $ansible_project_name;
	public string $ansible_dns_clientname;
	public string $ansible_timezone;
	public string $ansible_service_dns_ip;
	public string $ansible_extra;
	public string $ansible_haproxy_cluster;
	public string $ansible_dnsmasq_cluster;
}

class AppAnalyticsEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $contentId;
	public ?\Motv\Connector\Mw\Enums\Mw\AppAnalyticsSelectionTypeEnum $selectionType;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineCardAssetTypeEnum $contentType;
	public ?\Motv\Connector\Mw\Enums\Mw\RecommendationEngineHomepageLayoutEnum $rowType;
	public ?int $rowId;

	/** @var \DateTimeImmutable|string */
	public $time;
	public string $devicesIdentification;
	public string $devicesHash;
	public ?string $packageName;
	public ?string $searchTerm;
}

class AppEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $apps_name;
	public string $apps_package;
	public bool $apps_active;
}

class AppManagerEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $app_manager_version;
	public string $app_manager_package;
	public int $app_manager_vendors_id;
	public \Motv\Connector\Mw\Enums\Mw\DeviceEnum $app_manager_device;
	public ?array $stores;
}

class AppManagerStoreEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?\Motv\Connector\Mw\Enums\Mw\FilesLauncherEnum $app_manager_stores_launcher;
	public string $app_manager_stores_store_id;
}

class CategoryEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $categories_name;
	public bool $categories_active;
	public ?string $image;
	public ?string $image_widescreen;
	public ?array $genres;
	public ?string $categories_description;
	public ?string $categories_regex;
	public ?array $vods;
}

class ChannelAudioEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $channels_audio_role;
	public string $channels_audio_label;
	public string $channels_audio_pid;
	public bool $channels_audio_default;
	public ?int $channels_audio_level;
	public ?\Motv\Connector\Mw\Enums\Mw\AudioChannelEnum $channels_audio_channel;
	public int $channels_audio_order;
}

class ChannelBroadcastEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $channels_broadcast_active;
	public array $channels_broadcast_vendors;
	public int $channels_broadcast_dvb_regions_id;
	public \Motv\Connector\Mw\Enums\Mw\ChannelBroadcastTypeEnum $channels_broadcast_type;
	public int $channels_broadcast_original_network_id;
	public int $channels_broadcast_transport_stream_id;
	public int $channels_broadcast_service_id;
	public ?int $channels_broadcast_modulation;
	public ?int $channels_broadcast_frequency;
	public ?int $channels_broadcast_symbol_rate;
	public ?int $channels_broadcast_bandwidth;
	public ?int $channels_broadcast_plp;
	public string $channels_broadcast_default_audio;
	public ?string $channels_broadcast_default_subtitle;
	public ?string $channels_broadcast_note;
}

class ChannelCategoryEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $channels_categories_name;
	public bool $channels_categories_active;
	public int $channels_categories_order;
	public ?string $channels_categories_description;
	public ?string $image;
	public array $channels;
}

class ChannelEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $channels_name;
	public ?bool $channels_remote;
	public \Motv\Connector\Mw\Enums\Mw\ChannelTypeEnum $channels_type;
	public bool $channels_active;
	public ?string $image;
	public ?string $image_widescreen;
	public ?int $channels_order;
	public int $channels_rating;
	public bool $channels_forced_pin;
	public array $channels_channels_categories;
	public bool $channels_restart_on_fail;
	public bool $channels_notify_on_fail;
	public ?string $channels_note;
	public ?array $channels_packages;
	public ?array $channels_packages_locked;
	public ?bool $channels_offline_playback;
	public ?bool $channels_package_override_enabled;
	public ?int $channels_allowed_timeshit;
	public ?int $channels_recording_expiration;
	public ?bool $channels_enabled_multicast;
	public ?bool $channels_enabled_unicast;
	public ?bool $channels_enabled_broadcast;
	public ?array $channels_devices;
	public \Motv\Connector\Mw\Enums\Mw\ChannelEpgImageEnum $channels_epg_image;
	public ?string $epg_image;
	public bool $channels_epg_screenshot;
	public bool $channels_include_in_recommendations;
	public ?bool $channels_avsync_check;
	public ?string $channels_avsync_setup;
}

class ChannelMulticastEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public bool $channels_multicast_active;
	public int $channels_multicast_transcoders_id;
	public ?string $channels_multicast_input;
	public ?int $channels_multicast_templates_id;
	public ?string $channels_multicast_service_id;
	public string $channels_multicast_output;
	public bool $channels_multicast_interlaced;
	public bool $channels_multicast_access_unit_delimiters;
	public ?string $channels_multicast_video_pid;
	public array $channels_multicast_vendors;
	public array $channels_audio;
	public array $channels_subtitle;
	public ?string $channels_multicast_note;
}

class ChannelSubtitleEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $channels_subtitle_pid;
	public string $channels_subtitle_label;
	public string $channels_subtitle_language;
	public bool $channels_subtitle_default;
	public int $channels_subtitle_order;
}

class ChannelUnicastEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public bool $channels_unicast_active;
	public array $channels_unicast_vendors;
	public int $channels_unicast_transcoders_id;
	public int $channels_unicast_live_templates_id;
	public bool $channels_unicast_experimental_catchup;
	public ?string $channels_unicast_note;
}

class ChannelUnicastHttpEntity extends ChannelUnicastEntity
{
	public \Motv\Connector\Mw\Enums\Mw\ChannelSourceTypeEnum $channels_unicast_type;
	public \Motv\Connector\Mw\Enums\Mw\ChannelInputTypeEnum $channels_unicast_input_type;
	public string $channels_unicast_input_url;
}

class ChannelUnicastMozaicEntity extends ChannelUnicastEntity
{
	public \Motv\Connector\Mw\Enums\Mw\ChannelSourceTypeEnum $channels_unicast_type;
	public ?string $channels_unicast_bind_multicast_ip;
	public ?int $channels_unicast_bind_multicast_port;
	public int $channels_unicast_transcoding_gpu;
	public ?int $channels_unicast_recording_templates_id;
	public int $channels_unicast_mozaic_size;
	public array $channels_mozaic;
}

class ChannelUnicastRegularEntity extends ChannelUnicastEntity
{
	public \Motv\Connector\Mw\Enums\Mw\ChannelSourceTypeEnum $channels_unicast_type;
	public ?string $channels_unicast_bind_multicast_ip;
	public ?int $channels_unicast_bind_multicast_port;
	public bool $channels_unicast_discard_corrupt;
	public bool $channels_unicast_gpu_decoding;
	public bool $channels_unicast_gpu_encoding;
	public bool $channels_unicast_deinterlacing;
	public \Motv\Connector\Mw\Enums\Mw\ChannelInputTypeEnum $channels_unicast_input_type;
	public ?string $channels_unicast_input_url;
	public ?string $channels_unicast_input_file;
	public ?string $channels_unicast_video_pid;
	public \Motv\Connector\Mw\Enums\Mw\VideoInputCodecEnum $channels_unicast_input_video_codec;
	public \Motv\Connector\Mw\Enums\Mw\ChannelSubtitleEnum $channels_unicast_subtitle_option;
	public array $channels_audio;
	public array $channels_subtitle;
	public ?int $channels_unicast_recording_templates_id;
	public int $channels_unicast_transcoding_gpu;
}

class ChannelUnicastRemoteEntity extends ChannelUnicastEntity
{
	public \Motv\Connector\Mw\Enums\Mw\ChannelSourceTypeEnum $channels_unicast_type;
	public int $channels_unicast_remote_channels_id;
	public int $channels_unicast_remote_mw_id;
	public ?int $channels_unicast_recording_templates_id;
}

class CustomerDeviceEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public \Motv\Connector\Mw\Enums\Mw\DeviceEnum $devicesType;
	public ?string $version;
	public ?float $osVersion;
	public ?\Motv\Connector\Mw\Enums\Mw\BrowserEnum $browserType;
	public string $language;
	public ?string $packageName;
}

class CustomerEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?string $customers_login;
	public ?string $customers_password;
	public ?int $customers_vendors_id;
	public ?int $customers_dvb_c_regions_id;
	public ?int $customers_dvb_s_regions_id;
	public ?int $customers_dvb_t_regions_id;
	public ?int $customers_dvb_t2_regions_id;
}

class CustomerRegisterEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $customers_login;
	public string $customers_password;
	public int $customers_vendors_id;
	public string $profiles_name;
	public ?string $profiles_pin;

	/** @var \DateTimeImmutable|string|null */
	public $profiles_birthday;
	public string $image;
}

class DetectorEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $detectors_name;
	public bool $detectors_active;
	public string $detectors_url;
}

class DrmPlaybackEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $customers_token;
	public int $profiles_id;
	public string $rawLicense;
	public ?int $edges_id;
	public CustomerDeviceEntity $device;
	public string $devices_identification;
	public string $devices_hash;
	public ?bool $preview;
	public ?int $offset;
	public ?int $timestamp;
	public ?string $audioLanguage;
	public ?string $subtitleLanguage;
	public ?int $bitrate;
	public ?bool $chromecast;
	public ?int $remoteChannelsUnicastId;
	public ?int $offlineExpiration;
	public ?bool $iosDownload;
}

class DvbRegionEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $dvb_regions_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelBroadcastTypeEnum $dvb_regions_dvb_network;
}

class EdgeEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $edges_name;
	public string $edges_url;
	public bool $edges_active;
	public array $edges_storages;
	public ?int $edges_servers_id;
	public bool $edges_proxy;
	public ?string $edges_secondary_url;
}

class EpgEventMetadataEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $epg_events_subtitle;
	public ?string $epg_events_desc;
	public ?int $epg_events_rating;
	public ?string $epg_events_episode_num;
	public ?float $epg_events_imdb_rating;
	public ?string $epg_events_imdb_id;
	public ?int $epg_events_serie_number;
	public ?int $epg_events_episode_number;
	public ?string $epg_events_icon;
	public ?string $epg_events_icon_widescreen;
	public array $epg_events_actors;
	public array $epg_events_director;
	public ?int $epg_events_categories_id;
	public array $epg_events_genres;
}

class EpgPlaylistEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?string $epg_playlists_name;
	public \Motv\Connector\Mw\Enums\Mw\PlaylistTypeEnum $epg_playlists_type;
	public ?string $epg_playlists_title;
	public ?string $epg_playlists_description;
	public bool $epg_playlists_active;
	public array $items;
}

class EpgPlaylistsItemEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?int $epg_playlists_items_epg_events_id;
	public ?int $epg_playlists_items_vods_id;
	public int $epg_playlists_items_order;
}

class EpgRatingEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?string $epg_rating_name;
	public int $epg_rating_from;
	public int $epg_rating_to;
	public ?string $epg_rating_image;
}

class FileManagerChangelogEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $content;
	public string $files_filename;
}

class FileManagerEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $content;
	public string $files_filename;
	public ?\Motv\Connector\Mw\Enums\Mw\FilesLauncherEnum $files_launcher;
	public string $files_app_id;
}

class FtpEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $ftp_name;
	public bool $ftp_active;
	public int $ftp_transcoders_id;
	public int $ftp_templates_id;
	public \Motv\Connector\Mw\Enums\Mw\FtpTypeEnum $ftp_type;
	public string $ftp_host;
	public string $ftp_folder;
	public int $ftp_port;
	public string $ftp_login;
	public string $ftp_password;
}

class FtpVodEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $id;
	public bool $tvod;

	/** @var \DateTimeImmutable|string */
	public $license_end;

	/** @var \DateTimeImmutable|string */
	public $license_start;
	public string $name;
	public ?string $subname;
	public string $description;
	public array $genres;
	public ?string $category;
	public ?int $season;
	public ?int $episode;
	public array $groups;
	public int $rating;
	public string $cover;
	public ?string $coverwide;
	public ?string $imdb_id;
	public ?float $imdb_rating;
	public ?string $origin;

	/** @var \DateTimeImmutable|string|null */
	public $released;
	public array $actors;
	public array $directors;
	public ?int $template;
	public ?string $content;
	public ?string $default_audio;
	public array $subtitles;
	public bool $deinterlacing;
}

class GenreEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $genres_name;
	public bool $genres_active;
	public int $genres_order;
	public ?string $genres_description;
	public ?bool $genres_autocreated;
	public array $vods;
}

class GrafanaAlertEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $uid;
	public string $group;
	public string $title;
	public array $labels;
	public int $relativeFrom;
	public ?string $expr;
	public string $legendFormat;
	public float $alertParam;
	public string $alertType;
	public string $alertOperator;
	public string $description;
	public bool $includeSummaryValue;
	public ?string $rawSql;
	public string $errorState;
	public string $noDataState;
	public bool $critical;
	public string $for;
}

class GrafanaCustomDashboardEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $grafana_custom_dashboards_uid;
	public string $grafana_custom_dashboards_title;
	public string $grafana_custom_dashboards_data;
	public ?string $grafana_custom_dashboards_grafana_folders_uid;
}

class GrafanaFolderEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $grafana_folders_uid;
	public string $grafana_folders_title;
}

class HomepageEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $homepages_name;
	public bool $homepages_active;
	public int $homepages_priority;
	public ?int $homepages_android_tv_startup_channels_id;
	public ?int $homepages_web_player_startup_channels_id;
	public ?int $homepages_ios_startup_channels_id;
	public ?int $homepages_android_startup_channels_id;
	public ?array $order;
	public array $vendors;
}

class HomepageRowEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?int $homepage_layout_words_id;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineHomepageLayoutEnum $homepage_layout_type;
	public ?\Motv\Connector\Mw\Enums\Mw\RecommendationEngineCardAssetTypeEnum $homepage_layout_asset;
	public string $homepage_layout_search;
	public ?int $homepage_layout_epg_playlists_id;
	public ?int $homepage_layout_catchup;
	public ?bool $homepage_layout_group_categories;
	public ?float $homepage_layout_min_score;
	public \Motv\Connector\Mw\Enums\Mw\HomepageLayoutSortEnum $homepage_layout_sort_type;
	public \Motv\Connector\Mw\Enums\Mw\HomepageLayoutContentEnum $homepage_layout_content;
	public \Motv\Connector\Mw\Enums\Mw\HomepageLayoutWatchStatusEnum $homepage_layout_watch_status;
	public ?array $homepage_layout_channels;
	public ?array $homepage_layout_advert_homepage;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineRowStyleEnum $homepage_layout_row_size;
	public ?int $homepage_layout_items_limit;
	public ?\Motv\Connector\Mw\Enums\Mw\HomepageLayoutFullsizeViewTypeEnum $homepage_layout_fullsize_view_type;
	public ?string $homepage_layout_middle_fullsize_background_image;
}

class IpRangeEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $ip_ranges_name;
	public string $ip_ranges_from;
	public string $ip_ranges_to;
}

class LoggerEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?int $log_customers_id;
	public ?int $log_int_parameter1;
	public ?int $log_int_parameter2;
	public ?string $log_text_parameter1;
	public ?string $log_string_parameter1;
	public ?string $log_string_parameter2;
}

class MessagingEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public \Motv\Connector\Mw\Enums\Mw\MessagingPushMessageEnum $type;
	public \Motv\Connector\Mw\Enums\Mw\MessagingPushMessagePriorityEnum $priority;
	public ?string $title;
	public ?string $subtitle;
	public ?string $message;
	public ?string $link;
	public ?int $channelsId;
	public ?string $image;
	public ?int $duration;
	public ?int $ttl;
	public ?int $customersId;
	public ?array $translatedTitle;
	public ?array $translatedSubtitle;
}

class OnboardingEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $onboarding_order;
	public int $onboarding_vendors_id;
	public ?string $onboarding_image_phone_portrait;
	public ?string $onboarding_image_phone_landscape;
	public ?string $onboarding_image_tablet_portrait;
	public ?string $onboarding_image_tablet_landscape;
	public ?string $onboarding_image_tv;
	public ?int $onboarding_name_words_id;
	public ?int $onboarding_text_words_id;
	public string $onboarding_internal_name;
}

class OtaDeviceEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $ota_devices_name;
	public string $ota_devices_package_name;
}

class OtaVersionEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $ota_versions_ota_devices_id;
	public ?string $ota_versions_file;
	public float $ota_versions_version;
	public ?string $ota_versions_description;
	public int $ota_versions_active;
}

class PackageEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $packages_active;
	public string $packages_name;
	public int $packages_timeshift;
	public int $packages_device_count;
	public int $packages_recording_length;
	public int $packages_recording_expiration;
	public int $packages_concurrent_device_count;
	public bool $packages_geoblock;
	public \Motv\Connector\Mw\Enums\Mw\ProfileSDEnum $packages_unicast_profile;
	public int $packages_concurrent_1st_device_count;
	public int $packages_concurrent_2nd_device_count;
	public bool $packages_enabled_multicast;
	public bool $packages_enabled_unicast;
	public bool $packages_enabled_broadcast;
	public int $packages_ip_ranges_enabled;
	public ?int $packages_include_licence;
	public ?int $packages_homepages_id;
	public ?bool $packages_show_similar;
	public array $channels_packages;
	public array $channels_packages_locked;
	public array $vods_packages_locked;
	public array $vods_groups_packages;
	public array $vods_groups_packages_locked;
	public array $vods_packages;
	public array $apps_packages;
	public array $countries_packages;
	public array $packages_devices;
	public array $packages_ip_ranges;
	public array $packages_edges;
	public bool $packages_offline_playback;
	public int $packages_offline_playback_expiration;
}

class PersonEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $persons_name;
	public \Motv\Connector\Mw\Enums\Mw\PersonEnum $persons_type;
	public ?string $persons_description;

	/** @var \DateTimeImmutable|string|null */
	public $persons_birthday;
	public ?string $image;
}

class PollEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $polls_vendors_id;

	/** @var \DateTimeImmutable|string */
	public $polls_from;

	/** @var \DateTimeImmutable|string */
	public $polls_to;
	public string $polls_question;
	public bool $polls_vods;
	public array $polls_channels;
	public array $polls_options;
}

class PortalEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $portals_vendors_id;
	public int $portals_portal_id;
	public ?string $portals_sms_url;
	public string $portals_client_name;
	public ?string $portals_container_name;
	public string $portals_languages;
	public ?string $portals_firebase;
	public ?string $portals_google_client_id;
	public ?string $portals_android_package_name;
	public ?string $portals_android_certificate;
	public ?string $portals_apple_bundle_id;
	public ?string $portals_apple_development_team;
	public bool $portals_provider;
	public bool $portals_device_autologin;
	public array $portals_urls;
	public array $portals_servers;
}

class PortalUrlEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $portals_urls_url;
	public bool $portals_urls_primary;
}

class ProfileEntity extends ProfilePublicEntity
{
	public int $profiles_customers_id;
}

class ProfilePublicEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?string $image;
	public ?string $profiles_name;

	/** @var \DateTimeImmutable|string|null */
	public $profiles_birthday;
	public ?string $profiles_pin;
	public ?bool $profiles_protect;
	public ?int $profiles_age;
	public bool $profiles_pin_enabled;
	public ?array $channels_whitelisting;
}

class ProviderEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $providers_name;
	public int $providers_vendors_id;
	public bool $providers_active;
	public string $providers_app_sms_url;
	public int $providers_app_sms_portal_id;
	public string $providers_app_mw_url;
	public int $providers_app_vendor_id;
	public string $providers_app_color;
	public ?string $providers_image;
	public bool $providers_full_screen_login_image;
}

class PublicMulticastEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
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

class RecognitionModelChannelEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $recognition_models_channels_recognition_models_id;
	public int $recognition_models_channels_channels_unicast_id;
	public bool $recognition_models_channels_active;
	public bool $recognition_models_channels_burn_advert_info;
	public bool $recognition_models_channels_mark_event_starts;
	public int $recognition_models_channels_min_ad_duration;
	public int $recognition_models_channels_max_ad_duration;
	public int $recognition_models_channels_min_program_segment_duration;
}

class RecognitionModelEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $recognition_models_name;
	public bool $recognition_models_active;
	public \Motv\Connector\Mw\Enums\Mw\RecognitionModelStatusEnum $recognition_models_status;
	public \Motv\Connector\Mw\Enums\Mw\RecognitionModelTypeEnum $recognition_models_type;
	public ?string $recognition_models_path;
	public int $recognition_models_allow_switch_to_finall_status;
	public int $recognition_models_detectors_id;
}

class RecognitionTemplateImageEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $recognition_template_images_recognition_models_id;
	public string $recognition_template_images_name;
	public ?string $image;
	public ?int $recognition_template_images_tflabel_id;
	public \Motv\Connector\Mw\Enums\Mw\RecognitionMethodEnum $recognition_template_images_method;
	public float $recognition_template_images_threshold;
	public bool $recognition_template_images_active;
}

class RemoteMwEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $remote_mw_name;
	public bool $remote_mw_active;
	public string $remote_mw_url;
	public int $remote_mw_profiles_id;
	public string $remote_mw_token;
	public array $edges;
}

class ReportEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $reports_name;
	public string $reports_label;
	public string $reports_query;
	public array $query_filters;
}

class ReportQueryFilterEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $reports_query_filters_name;
	public string $reports_query_filters_label;
	public \Motv\Connector\Mw\Enums\Mw\ReportFilterEnum $reports_query_filters_type;
	public bool $reports_query_filters_required;
	public ?string $reports_query_filters_default_value;
}

class ReportScheduleEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $report_schedules_name;
	public ?string $report_schedules_pdf_name;
	public bool $report_schedules_active;

	/** @var \DateTimeImmutable|string */
	public $report_schedules_start_date;
	public int $report_schedules_start_time;

	/** @var \DateTimeImmutable|string|null */
	public $report_schedules_end;
	public \Motv\Connector\Mw\Enums\Mw\ReportScheduleRepeatEnum $report_schedules_repeat;
	public string $report_schedules_emails;
	public string $report_schedules_dashboard;
	public ?string $report_schedules_timerange_from;
	public ?string $report_schedules_timerange_to;
	public string $report_schedules_variables;
	public bool $report_schedules_export_pdf;
	public bool $report_schedules_export_tables;
	public bool $report_schedules_export_tables_csv;
	public bool $report_schedules_hidden_params;
	public \Motv\Connector\Mw\Enums\Mw\GrafanaThemesEnum $report_schedules_theme;
	public bool $report_schedules_landscape;
}

class RightEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $roles_id;
	public int $rights_id;
}

class ServerEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $servers_name;
	public string $servers_internal_ip;
	public string $servers_public_ip;
	public string $servers_vpn_ip;
	public ?string $servers_service_dns_ip;
	public ?string $servers_extra;
	public ?float $servers_latitude;
	public ?float $servers_longitude;
	public bool $servers_external_load_balancer;
	public bool $servers_null_service_dns_ip;
	public array $servers_iptables;
}

class ServerIpRuleEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $servers_iptables_ip;
	public int $servers_iptables_port;
	public string $servers_iptables_note;
}

class StorageEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $storages_name;
	public bool $storages_active;
	public string $storages_api;
	public string $storages_edge_mount;
	public string $storages_live_path;
	public string $storages_catchup_path;
	public string $storages_vod_path;
	public array $vods_storages_storages;
	public int $storages_servers_id;
}

class StreamRecordingEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $stream_recordings_transcoders_id;
	public string $stream_recordings_ip;
	public int $stream_recordings_length;
	public string $stream_recordings_note;
}

class TemplateEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $templates_name;
	public \Motv\Connector\Mw\Enums\Mw\TemplateTypeEnum $templates_type;
	public bool $templates_active;
	public ?int $templates_duration;
	public ?string $templates_multicast_config;
	public ?string $templates_multicast_command;
	public array $profile;
}

class TemplateProfileEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?int $templates_profile_order;
	public int $templates_profile_bitrate;
	public int $templates_profile_width;
	public int $templates_profile_height;
	public \Motv\Connector\Mw\Enums\Mw\TemplateCodecEnum $templates_profile_codec;
	public array $templates_profile_encryption;
	public bool $templates_profile_recording;
	public ?int $templates_profile_label_words_id;
}

class TranscoderEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $transcoders_name;
	public int $transcoders_live_storages_id;
	public int $transcoders_catchup_storages_id;
	public int $transcoders_vod_storages_id;
	public string $transcoders_api;
	public bool $transcoders_catchup_active;
	public bool $transcoders_vod_active;
	public ?int $transcoders_detectors_id;
	public bool $transcoders_active;
	public int $transcoders_servers_id;
	public array $transcoders_routes;
	public ?string $transcoders_live_storage_mount_ip;
	public ?string $transcoders_catchup_storage_mount_ip;
	public ?string $transcoders_vod_storage_mount_ip;
}

class TranscoderRouteEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $transcoders_routes_interface;
	public string $transcoders_routes_ip;
	public string $transcoders_routes_routes;
}

class TranslationEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $words_id;
	public string $translations_text;
}

class UserEntity extends \Motv\Connector\Mw\InputEntities\ApiSupport\UserEntity
{
	public ?array $users_vendors;
}

class VendorAppAndroidEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vendors_apps_android_app_name;
	public ?string $vendors_apps_android_package_name;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_android_status;
	public ?string $vendors_apps_android_login_screen_image;
	public ?string $vendors_apps_android_app_icon_foreground;
	public ?string $vendors_apps_android_app_icon_background;
}

class VendorAppAndroidTVEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vendors_apps_android_tv_app_name;
	public ?string $vendors_apps_android_tv_package_name;
	public \Motv\Connector\Mw\Enums\Mw\ImageScalingEnum $vendors_apps_android_tv_background_image_scaling;
	public ?string $vendors_apps_android_tv_login_screen_image;
	public ?string $vendors_apps_android_tv_banner_image;
	public ?string $vendors_apps_android_tv_app_icon_foreground;
	public ?string $vendors_apps_android_tv_app_icon_background;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_android_tv_status;
}

class VendorAppGeneralEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?string $vendors_apps_general_purchase_order_number;
	public string $vendors_apps_general_color;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppGeneralStatusEnum $vendors_apps_general_general_status;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_general_status;
	public string $vendors_apps_general_test_login;
	public string $vendors_apps_general_test_password;
}

class VendorAppIOSEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vendors_apps_ios_app_name;
	public ?string $vendors_apps_ios_package_name;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_ios_status;
	public ?string $vendors_apps_ios_login_screen_image;
	public ?string $vendors_apps_ios_app_icon;
}

class VendorAppRokuEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vendors_apps_roku_app_name;
	public ?string $vendors_apps_roku_app_icon;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_roku_status;
	public ?string $vendors_apps_roku_splashcreen_image;
	public ?string $vendors_apps_roku_login_background_image;
}

class VendorAppSamsungLgAdminEntity extends VendorAppSamsungLgEntity
{
	public int $vendors_apps_samsung_lg_portal_id;
	public ?string $vendors_apps_samsung_lg_sms_url;
	public string $vendors_apps_samsung_lg_languages;
}

class VendorAppSamsungLgEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vendors_apps_samsung_lg_app_name;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_samsung_lg_status;
	public ?string $vendors_apps_samsung_lg_app_icon;
}

class VendorAppTVOSEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vendors_apps_tvos_app_name;
	public ?string $vendors_apps_tvos_package_name;
	public \Motv\Connector\Mw\Enums\Mw\VendorAppSectionStatusEnum $vendors_apps_tvos_status;
	public ?string $vendors_apps_tvos_login_screen_image;
	public ?string $vendors_apps_tvos_app_store_icon;
	public ?string $vendors_apps_tvos_app_icon;
	public ?string $vendors_apps_tvos_top_shelf_image;
}

class VendorAvatarEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public int $vendors_avatars_vendors_id;
	public int $vendors_avatars_order;
	public ?string $image;
}

class VendorEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vendors_name;
	public int $vendors_infinite_license;
	public int $vendors_license_limitation;
	public int $vendors_qr_code;
	public int $vendors_mac_login;
	public ?string $vendors_phone;
	public int $vendors_pin_login;
	public ?string $vendors_google_services;
	public int $vendors_playback_inactivity_timeout;
	public int $vendors_buffer_for_multicast_playback_ms;
	public int $vendors_multicast_unicast_fallback;
	public \Motv\Connector\Mw\Enums\Mw\AndroidTVPlayerEnum $vendors_androidtv_player;
	public int $vendors_androidtv_player_auto;
	public int $vendors_android_tv_channel_list_number;
	public int $vendors_channel_list_reindex_order;
	public int $vendors_rcu_number_invocation_delay;
	public int $vendors_show_radio_epg_on_overview;
	public ?int $vendors_locked_item_words_id;
	public ?string $vendors_locked_item_url;
	public ?string $vendors_locked_item_url_close;
	public int $vendors_rate_app;
	public int $vendors_social_share;
	public ?int $vendors_social_share_event_watching_words_id;
	public ?int $vendors_social_share_vod_watching_words_id;
	public ?int $vendors_social_share_event_detail_words_id;
	public ?int $vendors_social_share_vod_detail_words_id;
	public ?int $vendors_devices_per_license;
	public ?int $vendors_min_devices_per_license;
	public array $vendors_dvb_networks;
	public ?int $vendors_push_reminders;
	public ?int $vendors_chromecast;
	public ?int $vendors_airplay;
	public ?string $vendors_chromecast_app;
	public ?string $vendors_player_watermark_image;
	public ?string $vendors_locked_item_image;
	public ?string $image;
	public ?array $vendors_channels_unicast;
	public ?array $vendors_channels_multicast;
	public ?array $vendors_channels_broadcast;
	public ?string $vendors_background_image_phone_portrait;
	public ?string $vendors_background_image_tablet_portrait;
	public ?string $vendors_background_image_tablet_landscape;
	public ?string $vendors_background_image_tv;
	public ?string $vendors_background_image_portal;
	public ?string $vendors_background_image_roku;
	public ?string $vendors_header_image;
	public string $vendors_deeplink_scheme;
	public ?string $vendors_chromecast_image;
	public string $vendors_chromecast_color;
	public string $vendors_accent_color;
	public string $vendors_card_background_color;
	public \Motv\Connector\Mw\Enums\Mw\VendorBackgroundTypeEnum $vendors_background_type;
	public string $vendors_background_solid_color;
	public string $vendors_background_gradient_from_color;
	public string $vendors_background_gradient_to_color;
	public \Motv\Connector\Mw\Enums\Mw\ImageScalingEnum $vendors_background_image_scaling;
	public ?\Motv\Connector\Mw\Enums\Mw\VendorLicenseTypeEnum $vendors_license_type;
	public bool $vendors_delete_customer_account;
	public ?int $vendors_licence_left_alert_treshold;
	public ?string $vendors_licence_left_alert_treshold_emails;
}

class VodAudioEntity extends VodAudioParentEntity
{
	public ?string $vods_audio_label;
	public string $vods_audio_pid;
	public ?int $vods_audio_level;
	public int $vods_audio_order;
}

class VodAudioParentEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vods_audio_role;
	public bool $vods_audio_default;
	public ?string $vods_audio_channel;
}

class VodEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vods_name;
	public ?string $vods_subname;

	/** @var \DateTimeImmutable|string */
	public $vods_license_start;

	/** @var \DateTimeImmutable|string */
	public $vods_license_end;
	public \Motv\Connector\Mw\Enums\Mw\VodTypeEnum $vods_type;
	public bool $vods_tvod;
	public bool $vods_active;
	public ?int $vods_categories_id;
	public int $vods_rating;
	public ?bool $vods_offline_playback;
	public string $vods_description;
	public array $vods_directors;
	public array $vods_actors;
	public array $genres;

	/** @var \DateTimeImmutable|string|null */
	public $vods_released;
	public ?string $vods_origin;
	public ?string $vods_imdb_rating;
	public ?string $vods_imdb_id;

	/** @var \DateTimeImmutable|string|null */
	public $vods_hot_news;
	public ?int $vods_next_vods_id;
	public bool $vods_series;
	public ?int $vods_season;
	public ?int $vods_episode;
	public ?array $vods_packages;
	public ?array $vods_packages_locked;
	public ?array $vods_vods_groups;
	public ?array $vods_epg_playlists;
	public ?int $vods_templates_id;
	public ?string $vods_video_mapping;
	public ?\Motv\Connector\Mw\Enums\Mw\VideoInputCodecEnum $vods_video_codec;
	public ?float $vods_video_fps;
	public ?bool $vods_deinterlacing;
	public array $vods_audio;
	public array $vods_subtitle;
	public int $vods_transcoders_id;
	public int $vods_transcoding_gpu;
	public ?string $image;
	public ?string $image_widescreen;
	public ?string $name_image;
	public ?string $vods_file;
	public ?string $vods_3rdparty_id;
	public ?\Motv\Connector\Mw\Enums\Mw\Vod3rdPartyEnum $vods_3rdparty_name;
	public ?string $vods_3rdparty_data;
	public ?string $vods_external_id;
	public ?\Motv\Connector\Mw\Enums\Mw\VodExternalTypeEnum $vods_external_type;
	public ?bool $vods_delete_metadata;
	public ?string $vods_live_input;

	/** @var \DateTimeImmutable|string|null */
	public $vods_live_start;
	public ?int $vods_live_length;
}

class VodGroupEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vods_groups_name;
	public ?array $vods;
}

class VodSubtitleEntity extends VodSubtitleParentEntity
{
	public ?string $vods_subtitle_label;
	public int $vods_subtitle_order;
	public ?string $vods_subtitle_file;
	public ?string $filename;
	public ?string $file;
}

class VodSubtitleParentEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $vods_subtitle_language;
	public bool $vods_subtitle_default;
}

class WordEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?string $words_text;
	public ?string $words_note;
}


namespace Motv\Connector\Mw\InputEntities\ApiSupport;

class RoleEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $roles_name;
	public bool $roles_active;
}

class UserEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public ?string $users_email;
	public ?string $users_password;
	public ?int $users_roles_id;
	public ?bool $users_active;
	public ?string $users_image;
}

class WhereEntity extends \Motv\Connector\Mw\InputEntities\MotvEntity
{
	public string $column;
	public \Motv\Connector\Mw\Enums\ApiSupport\WhereTypeEnum $type;
	public \Motv\Connector\Mw\Enums\ApiSupport\WhereValueTypeEnum $valueType;
	public $value;
}
