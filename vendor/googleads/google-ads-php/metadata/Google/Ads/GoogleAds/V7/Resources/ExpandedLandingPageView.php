<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/expanded_landing_page_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Resources;

class ExpandedLandingPageView
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
�
Bgoogle/ads/googleads/v7/resources/expanded_landing_page_view.proto!google.ads.googleads.v7.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
ExpandedLandingPageViewO
resource_name (	B8�A�A2
0googleads.googleapis.com/ExpandedLandingPageView$
expanded_final_url (	B�AH �:��A�
0googleads.googleapis.com/ExpandedLandingPageViewQcustomers/{customer_id}/expandedLandingPageViews/{expanded_final_url_fingerprint}B
_expanded_final_urlB�
%com.google.ads.googleads.v7.resourcesBExpandedLandingPageViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v7/resources;resources�GAA�!Google.Ads.GoogleAds.V7.Resources�!Google\\Ads\\GoogleAds\\V7\\Resources�%Google::Ads::GoogleAds::V7::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

