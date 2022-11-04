<?php

/**
 * Generated on Fri, 4 Nov 2022 9:41:42
 * Part moTV.eu SDK integration kit
 */

declare(strict_types=1);

namespace Motv\Connector\Mw\Entities\Mw;

class AdvertCampaignEntity
{
	public int $campaigns_id;
	public string $campaigns_name;
	public int $campaigns_active;
	public \DateTimeImmutable $campaigns_from;
	public \DateTimeImmutable $campaigns_to;
	public int $campaigns_all_packages;
	public int $campaigns_ssai;
	public array $campaigns_packages;
	public array $sections;
}

class AdvertCampaignSectionEntity
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
	public array $units;
}

class AdvertHomepageEntity
{
	public int $advert_homepage_id;
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
	public \Motv\Connector\Mw\Enums\Mw\AdvertHomepageActionTypeEnum $advert_homepage_action_type;
	public string $advert_homepage_action;
	public ?string $image;
	public ?string $video;
	public ?string $image_startup;
	public int $advert_homepage_show_vod;
	public array $advert_homepage_devices;
	public ?int $advert_homepage_video_loop;
	public ?int $advert_homepage_video_sound_on;
	public ?int $advert_homepage_video_label_words_id;
	public string $advert_homepage_video_label;
}

class AdvertUnitEntity
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
	public int $units_all_packages;
	public ?int $units_limit_impressions;
	public ?int $units_limit_complete;
	public ?int $units_limit_clicks;
	public ?int $units_limit_profile;
	public ?\Motv\Connector\Mw\Enums\Mw\AdvertUnitLimitationDurationEnum $units_limit_profile_duration;
	public ?int $units_limit_profile_amount;
	public ?\Motv\Connector\Mw\Enums\Mw\AdvertTrackingEnum $units_limit_profile_type;
	public int $units_impressions;
	public int $units_clicks;
	public int $units_complete;
	public ?string $units_admob_id;
	public ?string $units_vast_url;
	public array $units_channels;
	public array $units_packages;
	public array $units_devices;
	public array $units_positions;
	public ?int $units_image_width;
	public ?int $units_image_height;
}

class AppEntity
{
	public int $apps_id;
	public string $apps_name;
	public string $apps_package;
	public int $apps_active;
}

class AppManagerEntity
{
	public int $app_manager_id;
	public string $app_manager_version;
	public string $app_manager_package;
	public int $app_manager_vendors_id;
	public \Motv\Connector\Mw\Enums\Mw\DeviceEnum $app_manager_device;
	public ?string $image;
	public array $files;
	public array $stores;
}

class AppManagerStoreEntity
{
	public int $app_manager_stores_id;
	public int $app_manager_stores_app_manager_id;
	public ?\Motv\Connector\Mw\Enums\Mw\FilesLauncherEnum $app_manager_stores_launcher;
	public string $app_manager_stores_store_id;
}

class BackupEntity
{
	public bool $enabled;
	public string $name;
	public bool $aws;
}

class CandidatesCategoriesEntity
{
	public int $candidates_categories_count;
	public string $candidates_categories_title;
	public string $candidates_categories_desc;
	public array $candidates_categories_genres;
}

class CategoryEntity
{
	public int $categories_id;
	public string $categories_name;
	public int $categories_active;
	public array $genres;
	public array $vods;
	public ?string $categories_description;
	public ?string $categories_regex;
	public string $categories_image;
	public int $categories_image_width;
	public int $categories_image_height;
	public ?string $categories_image_widescreen;
	public ?int $categories_image_widescreen_width;
	public ?int $categories_image_widescreen_height;
	public ?RecommendationCardEntity $follow;
	public ?int $order;
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

class ChannelCategoryEntity
{
	public int $channels_categories_id;
	public string $channels_categories_name;
	public ?string $channels_categories_description;
	public ?string $channels_categories_image;
	public int $channels_categories_active;
	public int $channels_categories_order;
	public ?int $order;
	public array $channels;
}

class ChannelEntity
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
	public array $channels_broadcast;
	public array $channels_multicast;
	public array $channels_unicast;
	public array $channels_channels_categories;
	public array $channels_packages;
	public array $channels_packages_locked;
	public array $channels_devices;
}

class ChannelInternalEntity
{
	public int $channels_id;
	public string $channels_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelTypeEnum $channels_type;
	public int $channels_order;
	public int $channels_rating;
	public int $channels_forced_pin;
	public array $channels_categories;
	public string $channels_logo;
	public ?string $channels_logo_widescreen;
	public int $channels_number;
	public int $channels_recording_length;
	public int $channels_live_length;
	public array $channels_multicast;
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
	public ?string $channels_multicast_bind_multicast;
	public int $channels_multicast_interlaced;
	public int $channels_multicast_access_unit_delimiters;
	public ?string $channels_multicast_video_pid;
	public $storages_live_path;
	public array $channels_multicast_vendors;
	public array $channels_audio;
	public array $channels_subtitle;
	public ?TemplateEntity $template;
}

class ChannelMulticastUnicastEntity
{
}

class ChannelsBroadcastEntity
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
	public array $channels_broadcast_vendors;
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
	public $storages_live_path;
	public int $channels_restart_on_fail;
	public int $channels_notify_on_fail;
	public string $channels_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelTypeEnum $channels_type;
	public ?\DateTimeImmutable $channels_checked;
	public \Motv\Connector\Mw\Enums\Mw\MonitoringChannelStateEnum $channels_available;
	public ?int $channels_live_time;
	public ?int $channels_mpd_drift;
	public ?int $channels_mpd_gap;
	public ?int $channels_warning;
	public ?int $channels_error;
	public ?int $channels_thumbnail_time;
	public array $channels_unicast_vendors;
	public array $channels_audio;
	public array $channels_subtitle;
	public string $channels_unicast_url;
	public string $channels_unicast_thumbnail_url;
	public ?TemplateEntity $template_live;
	public ?TemplateEntity $template_recording;
	public array $channels_mozaic;
	public ?int $channels_unicast_remote_channels_id;
	public ?int $channels_unicast_remote_mw_id;
}

class ChannelUnicastInternalEntity
{
	public int $channels_unicast_id;
	public \Motv\Connector\Mw\Enums\Mw\ChannelSourceTypeEnum $channels_unicast_type;
	public ?string $channels_unicast_input_url;
	public array $channels_unicast_live_edges_storages;
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

class ChannelVodAudioSubtitleEntityAbstract
{
}

class ContinueWatchingEntity
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

class CustomerEntity
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
	public int $customers_locked;
	public array $profiles;
	public ?bool $customers_recommendation_engine_enabled;
	public array $customers_recording_by_profile;
}

class CustomerQrCodeEntity
{
	public int $login_qr_id;
	public string $login_qr_code;
	public ?string $login_qr_token;
	public \DateTimeImmutable $login_qr_requested;
	public ?int $login_qr_vendors_id;
}

class DetectorEntity
{
	public int $detectors_id;
	public string $detectors_name;
	public int $detectors_active;
	public string $detectors_url;
}

class DeviceEntity
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
}

class DrmKeyEntity
{
	public \Motv\Connector\Mw\Enums\Mw\DrmTypeEnum $drm_keys_motv_type;
	public int $drm_keys_motv_id;
	public \Motv\Connector\Mw\Enums\Mw\ProfileSDLabelEnum $drm_keys_label;
	public string $drm_keys_key_id;
	public string $drm_keys_key;
	public string $drm_keys_iv;
}

class DvbRegionEntity
{
	public int $dvb_regions_id;
	public string $dvb_regions_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelBroadcastTypeEnum $dvb_regions_dvb_network;
}

class EdgeEntity
{
	public int $edges_id;
	public string $edges_url;
	public int $edges_active;
	public array $edges_storages;
}

class EpgChannelEntity
{
	public string $channels_epg_custom_image;
	public string $channels_name;
	public int $channels_id;
	public ?int $channels_rating;
}

class EpgEventEntity
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

class EpgEventInternalEntity
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

class EpgEventSegmentEntity
{
	public int $recognition_models_channels_id;
	public \DateTimeImmutable $epg_events_segments_start;
	public \DateTimeImmutable $epg_events_segments_end;
}

class EpgPlaylistEntity
{
	public int $epg_playlists_id;
	public string $epg_playlists_name;
	public int $epg_playlists_active;
	public \DateTimeImmutable $epg_playlists_created;
	public array $items;
}

class EpgRatingEntity
{
	public int $epg_rating_id;
	public ?string $epg_rating_name;
	public int $epg_rating_from;
	public int $epg_rating_to;
	public string $epg_rating_image;
}

class FileManagerEntity
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
}

class FileManagerLatestFileEntity
{
	public string $version;
	public \Motv\Connector\Mw\Enums\Mw\DeviceEnum $device;
	public ?\Motv\Connector\Mw\Enums\Mw\FilesLauncherEnum $launcher;
}

class FileManagerOldEntity
{
	public int $files_id;
	public \DateTimeImmutable $files_time;
	public int $files_users_id;
	public string $files_path;
	public string $files_filename;
	public array $files_tags;
	public string $files_description;
	public int $files_downloaded;
	public ?string $image;
}

class FileManagerVersionEntity
{
	public ?\Motv\Connector\Mw\Enums\Mw\FilesLauncherEnum $filesLauncher;
	public string $storeVersion;
	public string $latestVersion;
	public bool $isActual;
	public \Motv\Connector\Mw\Enums\Mw\DeviceEnum $device;
}

class GenreEntity
{
	public int $genres_id;
	public string $genres_name;
	public ?string $genres_description;
	public int $genres_order;
	public int $genres_active;
	public array $vods;
}

class GrafanaAlertEntity
{
	public string $name;
	public string $link;
	public string $startsAt;
	public string $state;
}

class GrafanaCustomDashboardEntity
{
	public string $grafana_custom_dashboards_uid;
	public string $grafana_custom_dashboards_title;
	public string $grafana_custom_dashboards_data;
	public ?GrafanaFolderEntity $grafana_folder;
}

class GrafanaFolderEntity
{
	public string $grafana_folders_uid;
	public string $grafana_folders_title;
}

class HomepageChannelAlertEntity
{
	public string $channel;
	public int $unicast_id;
	public ?string $transcoders_name;
	public \Motv\Connector\Mw\Enums\Mw\MonitoringChannelStateEnum $status;
	public ?int $uptime;
	public ?int $warnings;
	public ?int $errors;
}

class HomepageEntity
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
	public array $vendors;
}

class HomepageRowEntity
{
	public int $homepage_layout_id;
	public int $homepage_layout_homepages_id;
	public ?int $homepage_layout_order;
	public ?int $homepage_layout_words_id;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineHomepageLayoutEnum $homepage_layout_type;
	public ?\Motv\Connector\Mw\Enums\Mw\RecommendationEngineCartAssetTypeEnum $homepage_layout_asset;
	public ?string $homepage_layout_search;
	public ?int $homepage_layout_epg_playlists_id;
	public ?int $homepage_layout_catchup;
	public ?int $homepage_layout_catchup_to;
	public int $homepage_layout_group_categories;
	public int $homepage_layout_min_score;
	public \Motv\Connector\Mw\Enums\Mw\HomepageLayoutSortEnum $homepage_layout_sort_type;
	public \Motv\Connector\Mw\Enums\Mw\HomepageLayoutContentEnum $homepage_layout_content;
	public \Motv\Connector\Mw\Enums\Mw\HomepageLayoutWatchStatusEnum $homepage_layout_watch_status;
	public array $homepage_layout_search_parsed;
	public array $homepage_layout_channels;
	public array $homepage_layout_advert_homepage;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineRowStyleEnum $homepage_layout_row_size;
	public ?\Motv\Connector\Mw\Enums\Mw\HomepageLayoutFullsizeTypeEnum $homepage_layout_fullsize_type;
	public ?int $homepage_layout_fullsize_vods_id;
	public ?int $homepage_layout_fullsize_advert_homepage_id;
	public ?int $homepage_layout_fullsize_epgs_id;
}

class IpRangeEntity
{
	public int $ip_ranges_id;
	public string $ip_ranges_name;
	public string $ip_ranges_from;
	public string $ip_ranges_to;
}

class LoggerEntity
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

class LogoClusterEntity
{
	public int $recognition_models_id;
	public int $recognition_models_channels_id;
	public int $recognition_template_images_id;
	public int $recognition_training_detection_cluster_id;
	public string $recognition_training_images_url;
	public bool $recognition_training_image_selected;
}

class MonitoringChannelLogEntity
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

class MonitoringChannelStatusEntity
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

class MonitoringDataEntity
{
	public \Motv\Connector\Mw\Enums\Mw\MonitoringEventChannelEnum $type;
	public int $id;
	public int $count;
	public string $data;
}

class MonitoringStatusEntity
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

class MonitoringTranscoderStatusEntity
{
	public bool $running;
	public ?string $ffmpeg_live_log;
	public ?int $live_time;
	public ?int $thumbnail_time;
}

class OnboardingEntity
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

class OtaDeviceEntity
{
	public int $ota_devices_id;
	public string $ota_devices_name;
	public string $ota_devices_package_name;
}

class OtaLatestVersionEntity
{
	public string $version;
	public string $url;
	public \DateTimeImmutable $created;
	public string $hash;
	public int $size;
	public string $update_interval;
}

class OtaVersionEntity
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

class PackageEntity
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
	public array $channels_packages;
	public array $channels_packages_locked;
	public array $vods_packages_locked;
	public array $vods_packages;
	public array $vods_groups_packages;
	public array $vods_groups_packages_locked;
	public array $apps_packages;
	public array $countries_packages;
	public array $packages_devices;
	public array $packages_ip_ranges;
	public array $packages_edges;
}

class PersonEntity
{
	public int $persons_id;
	public string $persons_name;
	public \Motv\Connector\Mw\Enums\Mw\PersonEnum $persons_type;
	public ?string $persons_description;
	public ?string $persons_image;
	public ?\DateTimeImmutable $persons_birthday;
}

class ProfileEntity
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
	public int $customers_locked;
	public string $image;
	public int $profiles_login_requires_pin;
	public int $vendors_multicast_unicast_fallback;
	public int $vendors_push_reminders;
	public ?\DateTimeImmutable $profiles_used;
	public array $channels_whitelisting;
}

class ProviderEntity
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

class ProviderExternalEntity
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

class RecognitionModelChannelEntity
{
	public int $recognition_models_channels_id;
	public int $recognition_models_channels_recognition_models_id;
	public int $recognition_models_channels_channels_unicast_id;
	public int $recognition_models_channels_active;
	public ?SelectedLogoClusterEntity $selectedLogoCluster;
	public int $recognition_models_channels_burn_advert_info;
	public int $recognition_models_channels_mark_event_starts;
	public ?array $logoClusters;
	public bool $isRecognitionApiException;
	public int $recognition_models_channels_min_ad_duration;
	public int $recognition_models_channels_max_ad_duration;
	public int $recognition_models_channels_min_program_segment_duration;
}

class RecognitionModelEntity
{
	public int $recognition_models_id;
	public string $recognition_models_name;
	public ?string $recognition_models_path;
	public int $recognition_models_active;
	public \Motv\Connector\Mw\Enums\Mw\RecognitionModelStatusEnum $recognition_models_status;
	public \Motv\Connector\Mw\Enums\Mw\RecognitionModelTypeEnum $recognition_models_type;
	public int $recognition_models_allow_switch_to_finall_status;
	public int $recognition_models_detectors_id;
	public string $detectors_name;
	public int $detectors_active;
	public array $images;
	public array $channels;
}

class RecognitionTemplateImageEntity
{
	public int $recognition_template_images_id;
	public int $recognition_template_images_recognition_models_id;
	public string $recognition_template_images_name;
	public string $recognition_template_images_image;
	public ?int $recognition_template_images_tflabel_id;
	public \Motv\Connector\Mw\Enums\Mw\RecognitionMethodEnum $recognition_template_images_method;
	public float $recognition_template_images_threshold;
	public int $recognition_template_images_active;
}

class RecognitionTrainingImageEntity
{
	public int $recognition_training_images_id;
	public int $recognition_training_images_recognition_models_id;
	public string $recognition_training_images_image;
	public string $recognition_training_images_image_original;
	public int $recognition_training_images_recognition_template_images_id;
	public string $recognition_training_images_description;
	public int $recognition_training_images_x1;
	public int $recognition_training_images_y1;
	public int $recognition_training_images_x2;
	public int $recognition_training_images_y2;
	public int $recognition_training_images_recognition_models_channels_id;
}

class RecommendationCardChannelEntity extends RecommendationCardEntity
{
	public int $channels_id;
	public string $channels_name;
	public string $channels_logo;
	public ?string $channels_logo_widescreen;
}

class RecommendationCardEntity
{
	public int $id;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineCartAssetTypeEnum $type;
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
	public ?int $locked;
	public ?int $order;
	public $episode;
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
}

class RecommendationCategoryEntity
{
	public CategoryEntity $category;
	public array $rows;
}

class RecommendationRowEntity
{
	public int $id;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineHomepageLayoutEnum $type;
	public \Motv\Connector\Mw\Enums\Mw\RecommendationEngineRowStyleEnum $style;
	public string $title;
	public ?array $data;
	public ?int $focus;
}

class RemoteChannelEntity
{
	public int $channels_id;
	public string $channels_name;
	public string $channels_logo;
	public ?string $channels_logo_widescreen;
	public int $channels_rating;
	public int $timeshift;
	public ?int $catchup;
}

class RemoteMwEntity
{
	public int $remote_mw_id;
	public string $remote_mw_name;
	public int $remote_mw_active;
	public string $remote_mw_url;
	public int $remote_mw_profiles_id;
	public string $remote_mw_token;
}

class ReportEntity
{
	public int $reports_id;
	public int $reports_predefined;
	public string $reports_query;
	public string $reports_name;
	public string $reports_label;
	public array $query_filters;
}

class ReportQueryFilterEntity
{
	public int $reports_query_filters_id;
	public int $reports_query_filters_reports_id;
	public string $reports_query_filters_name;
	public string $reports_query_filters_label;
	public \Motv\Connector\Mw\Enums\Mw\ReportFilterEnum $reports_query_filters_type;
	public int $reports_query_filters_required;
	public ?string $reports_query_filters_default_value;
}

class ReportScheduleAttachementEntity
{
	public int $report_schedules_attachements_id;
	public int $report_schedules_attachements_report_schedules_id;
	public \DateTimeImmutable $report_schedules_attachements_generated;
	public string $report_schedules_attachements_path;
	public \Motv\Connector\Mw\Enums\Mw\ReportScheduleAttachementTypeEnum $report_schedules_attachements_type;
	public string $report_schedules_attachements_note;
	public int $report_schedules_attachements_duration;
}

class ReportScheduleEntity
{
	public int $report_schedules_id;
	public string $report_schedules_name;
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
}

class RightsRoleEntity
{
	public string $rights_name;
	public string $rights_group;
	public string $roles_name;
	public int $rights_id;
	public int $roles_id;
	public ?int $rights_roles_rights_id;
	public int $roles_sysadmin;
}

class SelectedLogoClusterEntity
{
	public int $recognition_models_id;
	public int $recognition_models_channels_id;
	public int $recognition_template_images_id;
	public int $recognition_training_detection_cluster_id;
}

class StorageEntity
{
	public int $storages_id;
	public string $storages_name;
	public int $storages_active;
	public ?string $storages_api;
	public ?string $storages_edge_mount;
	public string $storages_live_path;
	public int $storages_live_path_clean;
	public string $storages_catchup_path;
	public int $storages_catchup_path_clean;
	public string $storages_vod_path;
	public int $storages_available;
	public ?\DateTimeImmutable $storages_checked;
	public ?string $storages_data;
	public array $vods_storages_storages;
}

class StorageTransferEntity
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

class StreamRecordingEntity
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

class StreamTimeEventBreakEntity
{
	public float $duration;
	public ?int $skipAfter;
	public ?string $clickUrl;
	public array $events;
	public string $adMpdUrl;
	public int $id;
}

class StreamTimeEventCuePointEntity
{
	public bool $skipable;
	public bool $thumbnails;
	public bool $followable;
	public float $start;
	public float $end;
}

class StreamTimeEventsEntity
{
	public array $breaks;
	public array $cuepoints;
	public array $times;
}

class StreamUrlBaseEntity
{
	public \Motv\Connector\Mw\Enums\Mw\ContentTypeEnum $type;
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
	public array $audio;
	public array $subtitle;
}

class StreamUrlV2Entity extends StreamUrlBaseEntity
{
	public array $audio;
	public array $subtitle;
	public ?int $previewDuration;
}

class SubscribedChannelEntity
{
	public int $channels_id;
	public string $channels_name;
	public \Motv\Connector\Mw\Enums\Mw\ChannelTypeEnum $channels_type;
	public int $channels_order;
	public int $channels_rating;
	public int $channels_forced_pin;
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

class SubscribedChannelLiteEntity
{
	public int $i;
	public int $rl;
	public int $ll;
	public int $cl;
	public bool $u;
	public bool $m;
	public bool $b;
}

class SystemFeatureUsageEntity
{
	public string $id;
	public string $name;
	public bool $status;
	public string $message;
	public bool $snoozed;
	public ?string $statusMessage;
}

class SystemSettingsCronCommandEntity
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

class SystemStatisticsEntity
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

class TemplateEntity
{
	public int $templates_id;
	public string $templates_name;
	public \Motv\Connector\Mw\Enums\Mw\TemplateTypeEnum $templates_type;
	public int $templates_active;
	public ?int $templates_duration;
	public ?string $templates_multicast_config;
	public ?string $templates_multicast_command;
	public array $profile;
}

class TemplateProfileEntity
{
	public ?int $templates_profile_order;
	public int $templates_profile_bitrate;
	public int $templates_profile_width;
	public int $templates_profile_height;
	public \Motv\Connector\Mw\Enums\Mw\TemplateCodecEnum $templates_profile_codec;
	public int $templates_profile_recording;
	public ?int $templates_profile_label_words_id;
	public string $templates_profile_label;
	public array $templates_profile_encryption;
}

class TimelineSlotEntity
{
	public string $title;
	public array $recommendations;
	public \DateTimeImmutable $from;
	public \DateTimeImmutable $to;
}

class TranscoderEntity
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
}

class UserEntity extends \Motv\Connector\Mw\Entities\ApiSupport\UserEntity
{
	public array $users_vendors;
}

class VendorAvatarEntity
{
	public int $vendors_avatars_id;
	public int $vendors_avatars_vendors_id;
	public int $vendors_avatars_order;
	public string $vendors_avatars_image;
}

class VendorEntity extends VendorPublicEntity
{
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
	public array $vendors_channels_unicast;
	public array $vendors_channels_multicast;
	public array $vendors_channels_broadcast;
}

class VendorLockedChannelVodTextImageEntity
{
	public ?string $vendors_locked_item_image;
	public ?string $vendors_locked_item_text;
	public \Motv\Connector\Mw\Enums\Mw\VendorLockedItemTypeEnum $vendors_locked_item_type;
	public ?string $vendors_locked_item_url_close;
	public ?string $vendors_locked_item_url;
}

class VendorPublicEntity
{
	public int $vendors_android_tv_channel_list_number;
	public int $vendors_androidtv_player_auto;
	public \Motv\Connector\Mw\Enums\Mw\AndroidTVPlayerEnum $vendors_androidtv_player;
	public int $vendors_buffer_for_multicast_playback_ms;
	public array $vendors_dvb_networks;
	public int $vendors_id;
	public string $vendors_name;
	public ?string $vendors_portal_url;
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
	public ?string $vendors_background_image_phone_landscape;
	public ?string $vendors_background_image_tablet_portrait;
	public ?string $vendors_background_image_tablet_landscape;
	public ?string $vendors_background_image_tv;
	public ?string $vendors_background_image_portal;
	public ?string $vendors_background_image_roku;
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
	public ?\DateTimeImmutable $vods_transcoding_started;
	public ?\DateTimeImmutable $vods_transcoding_processed;
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
	public string $vods_thumbnail_url;
	public array $edges;
	public array $vods_packages;
	public array $vods_vods_groups;
	public array $vods_packages_locked;
	public array $vods_epg_playlists;
	public ?string $vods_transcoded_hash;
	public string $storages_vod_path;
	public int $vods_delete_metadata;
	public ?array $vods_drm;
}

class VodExternalEntity
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
	public ?string $vods_description;
	public array $vods_actors;
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
	public array $genres;
	public array $vods_audio;
	public array $vods_subtitle;
	public int $vods_locked;
	public ?int $follow;
	public ?int $order;
	public ?string $categories_name;
}

class VodGroupEntity
{
	public int $vods_groups_id;
	public string $vods_groups_name;
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

class WordEntity
{
	public int $words_id;
	public string $words_text;
	public ?string $words_note;
	public array $translations;
}


namespace Motv\Connector\Mw\Entities\ApiSupport;

class DocumentationApiEntity
{
	public string $name;
	public array $methods;
}

class DocumentationEntityEntity
{
	public string $name;
	public string $shortName;
	public bool $input;
	public ?DocumentationEntityEntity $parent;
	public array $properties;
	public array $parentProperties;
	public string $space;
}

class DocumentationEnumCaseEntity
{
	public string $name;
	public string $value;
	public string $label;
}

class DocumentationEnumEntity
{
	public string $name;
	public string $shortName;
	public array $cases;
	public string $space;
}

class DocumentationMethodEntity
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

class DocumentationParameterEntity
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

class EntityEntity
{
	public string $description;
	public ?string $subtype;
	public string $name;
	public string $type;
	public bool $nullable;
	public ?string $default;
	public ?string $return_doc;
}

class ErrorCodeEntity
{
	public int $code;
	public string $name;
	public string $description;
	public string $space;
}

class RoleEntity
{
	public int $roles_id;
	public string $roles_name;
	public int $roles_active;
	public int $roles_sysadmin;
}

class UserEntity
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
