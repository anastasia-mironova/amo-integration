<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/services/hotel_performance_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Services;

class HotelPerformanceViewService
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
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v7/resources/hotel_performance_view.proto!google.ads.googleads.v7.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
HotelPerformanceViewL
resource_name (	B5�A�A/
-googleads.googleapis.com/HotelPerformanceView:`�A]
-googleads.googleapis.com/HotelPerformanceView,customers/{customer_id}/hotelPerformanceViewB�
%com.google.ads.googleads.v7.resourcesBHotelPerformanceViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v7/resources;resources�GAA�!Google.Ads.GoogleAds.V7.Resources�!Google\\Ads\\GoogleAds\\V7\\Resources�%Google::Ads::GoogleAds::V7::Resourcesbproto3
�
Egoogle/ads/googleads/v7/services/hotel_performance_view_service.proto google.ads.googleads.v7.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"n
GetHotelPerformanceViewRequestL
resource_name (	B5�A�A/
-googleads.googleapis.com/HotelPerformanceView2�
HotelPerformanceViewService�
GetHotelPerformanceView@.google.ads.googleads.v7.services.GetHotelPerformanceViewRequest7.google.ads.googleads.v7.resources.HotelPerformanceView"L���64/v7/{resource_name=customers/*/hotelPerformanceView}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v7.servicesB HotelPerformanceViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v7/services;services�GAA� Google.Ads.GoogleAds.V7.Services� Google\\Ads\\GoogleAds\\V7\\Services�$Google::Ads::GoogleAds::V7::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

