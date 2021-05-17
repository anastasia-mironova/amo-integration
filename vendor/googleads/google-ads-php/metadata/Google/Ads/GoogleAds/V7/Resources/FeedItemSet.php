<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/feed_item_set.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Resources;

class FeedItemSet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Dgoogle/ads/googleads/v7/enums/feed_item_set_string_filter_type.protogoogle.ads.googleads.v7.enums"i
FeedItemSetStringFilterTypeEnum"F
FeedItemSetStringFilterType
UNSPECIFIED 
UNKNOWN	
EXACTB�
!com.google.ads.googleads.v7.enumsB FeedItemSetStringFilterTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v7/enums;enums�GAA�Google.Ads.GoogleAds.V7.Enums�Google\\Ads\\GoogleAds\\V7\\Enums�!Google::Ads::GoogleAds::V7::Enumsbproto3
�
Dgoogle/ads/googleads/v7/common/feed_item_set_filter_type_infos.protogoogle.ads.googleads.v7.commongoogle/api/annotations.proto"|
DynamicLocationSetFilter
labels (	P
business_name_filter (22.google.ads.googleads.v7.common.BusinessNameFilter"�
BusinessNameFilter
business_name (	o
filter_type (2Z.google.ads.googleads.v7.enums.FeedItemSetStringFilterTypeEnum.FeedItemSetStringFilterType"6
!DynamicAffiliateLocationSetFilter
	chain_ids (B�
"com.google.ads.googleads.v7.commonBFeedItemSetFilterTypeInfosProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v7/common;common�GAA�Google.Ads.GoogleAds.V7.Common�Google\\Ads\\GoogleAds\\V7\\Common�"Google::Ads::GoogleAds::V7::Commonbproto3
�
8google/ads/googleads/v7/enums/feed_item_set_status.protogoogle.ads.googleads.v7.enums"d
FeedItemSetStatusEnum"K
FeedItemSetStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v7.enumsBFeedItemSetStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v7/enums;enums�GAA�Google.Ads.GoogleAds.V7.Enums�Google\\Ads\\GoogleAds\\V7\\Enums�!Google::Ads::GoogleAds::V7::Enumsbproto3
�
5google/ads/googleads/v7/resources/feed_item_set.proto!google.ads.googleads.v7.resources8google/ads/googleads/v7/enums/feed_item_set_status.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
FeedItemSetC
resource_name (	B,�A�A&
$googleads.googleapis.com/FeedItemSet3
feed (	B%�A�A
googleads.googleapis.com/Feed
feed_item_set_id (B�A
display_name (	[
status (2F.google.ads.googleads.v7.enums.FeedItemSetStatusEnum.FeedItemSetStatusB�A_
dynamic_location_set_filter (28.google.ads.googleads.v7.common.DynamicLocationSetFilterH r
%dynamic_affiliate_location_set_filter (2A.google.ads.googleads.v7.common.DynamicAffiliateLocationSetFilterH :l�Ai
$googleads.googleapis.com/FeedItemSetAcustomers/{customer_id}/feedItemSets/{feed_id}~{feed_item_set_id}B
dynamic_set_filterB�
%com.google.ads.googleads.v7.resourcesBFeedItemSetProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v7/resources;resources�GAA�!Google.Ads.GoogleAds.V7.Resources�!Google\\Ads\\GoogleAds\\V7\\Resources�%Google::Ads::GoogleAds::V7::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

