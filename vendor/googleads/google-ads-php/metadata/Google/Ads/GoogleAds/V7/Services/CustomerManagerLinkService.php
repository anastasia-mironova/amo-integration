<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/services/customer_manager_link_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Services;

class CustomerManagerLinkService
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v7/enums/manager_link_status.protogoogle.ads.googleads.v7.enums"�
ManagerLinkStatusEnum"s
ManagerLinkStatus
UNSPECIFIED 
UNKNOWN

ACTIVE
INACTIVE
PENDING
REFUSED
CANCELEDB�
!com.google.ads.googleads.v7.enumsBManagerLinkStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v7/enums;enums�GAA�Google.Ads.GoogleAds.V7.Enums�Google\\Ads\\GoogleAds\\V7\\Enums�!Google::Ads::GoogleAds::V7::Enumsbproto3
�
=google/ads/googleads/v7/resources/customer_manager_link.proto!google.ads.googleads.v7.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomerManagerLinkK
resource_name (	B4�A�A.
,googleads.googleapis.com/CustomerManagerLinkH
manager_customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �!
manager_link_id (B�AH�V
status (2F.google.ads.googleads.v7.enums.ManagerLinkStatusEnum.ManagerLinkStatus:��A�
,googleads.googleapis.com/CustomerManagerLinkTcustomers/{customer_id}/customerManagerLinks/{manager_customer_id}~{manager_link_id}B
_manager_customerB
_manager_link_idB�
%com.google.ads.googleads.v7.resourcesBCustomerManagerLinkProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v7/resources;resources�GAA�!Google.Ads.GoogleAds.V7.Resources�!Google\\Ads\\GoogleAds\\V7\\Resources�%Google::Ads::GoogleAds::V7::Resourcesbproto3
�
Dgoogle/ads/googleads/v7/services/customer_manager_link_service.proto google.ads.googleads.v7.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"l
GetCustomerManagerLinkRequestK
resource_name (	B4�A�A.
,googleads.googleapis.com/CustomerManagerLink"�
 MutateCustomerManagerLinkRequest
customer_id (	B�AW

operations (2>.google.ads.googleads.v7.services.CustomerManagerLinkOperationB�A
validate_only ("�
MoveManagerLinkRequest
customer_id (	B�A+
previous_customer_manager_link (	B�A
new_manager (	B�A
validate_only ("�
CustomerManagerLinkOperation/
update_mask (2.google.protobuf.FieldMaskH
update (26.google.ads.googleads.v7.resources.CustomerManagerLinkH B
	operation"w
!MutateCustomerManagerLinkResponseR
results (2A.google.ads.googleads.v7.services.MutateCustomerManagerLinkResult"0
MoveManagerLinkResponse
resource_name (	"8
MutateCustomerManagerLinkResult
resource_name (	2�
CustomerManagerLinkService�
GetCustomerManagerLink?.google.ads.googleads.v7.services.GetCustomerManagerLinkRequest6.google.ads.googleads.v7.resources.CustomerManagerLink"N���86/v7/{resource_name=customers/*/customerManagerLinks/*}�Aresource_name�
MutateCustomerManagerLinkB.google.ads.googleads.v7.services.MutateCustomerManagerLinkRequestC.google.ads.googleads.v7.services.MutateCustomerManagerLinkResponse"]���>"9/v7/customers/{customer_id=*}/customerManagerLinks:mutate:*�Acustomer_id,operations�
MoveManagerLink8.google.ads.googleads.v7.services.MoveManagerLinkRequest9.google.ads.googleads.v7.services.MoveManagerLinkResponse"����G"B/v7/customers/{customer_id=*}/customerManagerLinks:moveManagerLink:*�A6customer_id,previous_customer_manager_link,new_managerE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v7.servicesBCustomerManagerLinkServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v7/services;services�GAA� Google.Ads.GoogleAds.V7.Services� Google\\Ads\\GoogleAds\\V7\\Services�$Google::Ads::GoogleAds::V7::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

