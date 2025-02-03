<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/placement_messages.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class PlacementMessages
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Admanager\V1\PlacementEnums::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/ads/admanager/v1/placement_messages.protogoogle.ads.admanager.v1google/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/timestamp.proto"�
	Placement
name (	B�A
placement_id (B�A
display_name (	B�A
description (	B�A
placement_code (	B�AQ
status (2<.google.ads.admanager.v1.PlacementStatusEnum.PlacementStatusB�AB
targeted_ad_units (	B\'�A�A!
admanager.googleapis.com/AdUnit4
update_time	 (2.google.protobuf.TimestampB�A:n�Ak
"admanager.googleapis.com/Placement.networks/{network_code}/placements/{placement}*
placements2	placementB�
com.google.ads.admanager.v1BPlacementMessagesProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

