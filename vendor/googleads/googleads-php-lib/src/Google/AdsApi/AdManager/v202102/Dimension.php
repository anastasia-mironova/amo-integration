<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Dimension
{
    const MONTH_AND_YEAR = 'MONTH_AND_YEAR';
    const WEEK = 'WEEK';
    const DATE = 'DATE';
    const DAY = 'DAY';
    const HOUR = 'HOUR';
    const LINE_ITEM_ID = 'LINE_ITEM_ID';
    const LINE_ITEM_NAME = 'LINE_ITEM_NAME';
    const LINE_ITEM_TYPE = 'LINE_ITEM_TYPE';
    const ORDER_ID = 'ORDER_ID';
    const ORDER_NAME = 'ORDER_NAME';
    const ORDER_DELIVERY_STATUS = 'ORDER_DELIVERY_STATUS';
    const ADVERTISER_ID = 'ADVERTISER_ID';
    const ADVERTISER_NAME = 'ADVERTISER_NAME';
    const AD_NETWORK_ID = 'AD_NETWORK_ID';
    const AD_NETWORK_NAME = 'AD_NETWORK_NAME';
    const SALESPERSON_ID = 'SALESPERSON_ID';
    const SALESPERSON_NAME = 'SALESPERSON_NAME';
    const CREATIVE_ID = 'CREATIVE_ID';
    const CREATIVE_NAME = 'CREATIVE_NAME';
    const CREATIVE_TYPE = 'CREATIVE_TYPE';
    const CREATIVE_BILLING_TYPE = 'CREATIVE_BILLING_TYPE';
    const CUSTOM_EVENT_ID = 'CUSTOM_EVENT_ID';
    const CUSTOM_EVENT_NAME = 'CUSTOM_EVENT_NAME';
    const CUSTOM_EVENT_TYPE = 'CUSTOM_EVENT_TYPE';
    const CREATIVE_SIZE = 'CREATIVE_SIZE';
    const AD_UNIT_ID = 'AD_UNIT_ID';
    const AD_UNIT_NAME = 'AD_UNIT_NAME';
    const PARENT_AD_UNIT_ID = 'PARENT_AD_UNIT_ID';
    const PARENT_AD_UNIT_NAME = 'PARENT_AD_UNIT_NAME';
    const PLACEMENT_ID = 'PLACEMENT_ID';
    const PLACEMENT_NAME = 'PLACEMENT_NAME';
    const PLACEMENT_STATUS = 'PLACEMENT_STATUS';
    const TARGETING = 'TARGETING';
    const BROWSER_NAME = 'BROWSER_NAME';
    const DEVICE_CATEGORY_ID = 'DEVICE_CATEGORY_ID';
    const DEVICE_CATEGORY_NAME = 'DEVICE_CATEGORY_NAME';
    const COUNTRY_CRITERIA_ID = 'COUNTRY_CRITERIA_ID';
    const COUNTRY_NAME = 'COUNTRY_NAME';
    const REGION_CRITERIA_ID = 'REGION_CRITERIA_ID';
    const REGION_NAME = 'REGION_NAME';
    const CITY_CRITERIA_ID = 'CITY_CRITERIA_ID';
    const CITY_NAME = 'CITY_NAME';
    const METRO_CRITERIA_ID = 'METRO_CRITERIA_ID';
    const METRO_NAME = 'METRO_NAME';
    const POSTAL_CODE_CRITERIA_ID = 'POSTAL_CODE_CRITERIA_ID';
    const POSTAL_CODE = 'POSTAL_CODE';
    const CUSTOM_TARGETING_VALUE_ID = 'CUSTOM_TARGETING_VALUE_ID';
    const CUSTOM_CRITERIA = 'CUSTOM_CRITERIA';
    const ACTIVITY_ID = 'ACTIVITY_ID';
    const ACTIVITY_NAME = 'ACTIVITY_NAME';
    const ACTIVITY_GROUP_ID = 'ACTIVITY_GROUP_ID';
    const ACTIVITY_GROUP_NAME = 'ACTIVITY_GROUP_NAME';
    const CONTENT_ID = 'CONTENT_ID';
    const CONTENT_NAME = 'CONTENT_NAME';
    const CONTENT_BUNDLE_ID = 'CONTENT_BUNDLE_ID';
    const CONTENT_BUNDLE_NAME = 'CONTENT_BUNDLE_NAME';
    const VIDEO_METADATA_KEY_ID = 'VIDEO_METADATA_KEY_ID';
    const VIDEO_METADATA_KEY_NAME = 'VIDEO_METADATA_KEY_NAME';
    const CMS_METADATA = 'CMS_METADATA';
    const VIDEO_FALLBACK_POSITION = 'VIDEO_FALLBACK_POSITION';
    const POSITION_OF_POD = 'POSITION_OF_POD';
    const POSITION_IN_POD = 'POSITION_IN_POD';
    const CUSTOM_SPOT_ID = 'CUSTOM_SPOT_ID';
    const CUSTOM_SPOT_NAME = 'CUSTOM_SPOT_NAME';
    const VIDEO_REDIRECT_THIRD_PARTY = 'VIDEO_REDIRECT_THIRD_PARTY';
    const VIDEO_BREAK_TYPE = 'VIDEO_BREAK_TYPE';
    const VIDEO_BREAK_TYPE_NAME = 'VIDEO_BREAK_TYPE_NAME';
    const VIDEO_VAST_VERSION = 'VIDEO_VAST_VERSION';
    const VIDEO_AD_REQUEST_DURATION_ID = 'VIDEO_AD_REQUEST_DURATION_ID';
    const VIDEO_AD_REQUEST_DURATION = 'VIDEO_AD_REQUEST_DURATION';
    const VIDEO_PLACEMENT_NAME = 'VIDEO_PLACEMENT_NAME';
    const PARTNER_MANAGEMENT_PARTNER_ID = 'PARTNER_MANAGEMENT_PARTNER_ID';
    const PARTNER_MANAGEMENT_PARTNER_NAME = 'PARTNER_MANAGEMENT_PARTNER_NAME';
    const PARTNER_MANAGEMENT_PARTNER_LABEL_ID = 'PARTNER_MANAGEMENT_PARTNER_LABEL_ID';
    const PARTNER_MANAGEMENT_PARTNER_LABEL_NAME = 'PARTNER_MANAGEMENT_PARTNER_LABEL_NAME';
    const PARTNER_MANAGEMENT_ASSIGNMENT_ID = 'PARTNER_MANAGEMENT_ASSIGNMENT_ID';
    const PARTNER_MANAGEMENT_ASSIGNMENT_NAME = 'PARTNER_MANAGEMENT_ASSIGNMENT_NAME';
    const GRP_DEMOGRAPHICS = 'GRP_DEMOGRAPHICS';
    const AD_REQUEST_AD_UNIT_SIZES = 'AD_REQUEST_AD_UNIT_SIZES';
    const AD_REQUEST_CUSTOM_CRITERIA = 'AD_REQUEST_CUSTOM_CRITERIA';
    const IS_FIRST_LOOK_DEAL = 'IS_FIRST_LOOK_DEAL';
    const YIELD_GROUP_ID = 'YIELD_GROUP_ID';
    const YIELD_GROUP_NAME = 'YIELD_GROUP_NAME';
    const YIELD_PARTNER = 'YIELD_PARTNER';
    const YIELD_PARTNER_TAG = 'YIELD_PARTNER_TAG';
    const CLASSIFIED_ADVERTISER_ID = 'CLASSIFIED_ADVERTISER_ID';
    const CLASSIFIED_ADVERTISER_NAME = 'CLASSIFIED_ADVERTISER_NAME';
    const CLASSIFIED_BRAND_ID = 'CLASSIFIED_BRAND_ID';
    const CLASSIFIED_BRAND_NAME = 'CLASSIFIED_BRAND_NAME';
    const MEDIATION_TYPE = 'MEDIATION_TYPE';
    const NATIVE_TEMPLATE_ID = 'NATIVE_TEMPLATE_ID';
    const NATIVE_TEMPLATE_NAME = 'NATIVE_TEMPLATE_NAME';
    const NATIVE_STYLE_ID = 'NATIVE_STYLE_ID';
    const NATIVE_STYLE_NAME = 'NATIVE_STYLE_NAME';
    const CHILD_NETWORK_CODE = 'CHILD_NETWORK_CODE';
    const MOBILE_APP_RESOLVED_ID = 'MOBILE_APP_RESOLVED_ID';
    const MOBILE_APP_NAME = 'MOBILE_APP_NAME';
    const MOBILE_DEVICE_NAME = 'MOBILE_DEVICE_NAME';
    const MOBILE_INVENTORY_TYPE = 'MOBILE_INVENTORY_TYPE';
    const REQUEST_TYPE = 'REQUEST_TYPE';
    const AD_UNIT_STATUS = 'AD_UNIT_STATUS';
    const MASTER_COMPANION_CREATIVE_ID = 'MASTER_COMPANION_CREATIVE_ID';
    const MASTER_COMPANION_CREATIVE_NAME = 'MASTER_COMPANION_CREATIVE_NAME';
    const AUDIENCE_SEGMENT_ID = 'AUDIENCE_SEGMENT_ID';
    const AUDIENCE_SEGMENT_NAME = 'AUDIENCE_SEGMENT_NAME';
    const AUDIENCE_SEGMENT_DATA_PROVIDER_NAME = 'AUDIENCE_SEGMENT_DATA_PROVIDER_NAME';
    const AD_EXCHANGE_INVENTORY_SIZE = 'AD_EXCHANGE_INVENTORY_SIZE';
    const AD_EXCHANGE_INVENTORY_SIZE_CODE = 'AD_EXCHANGE_INVENTORY_SIZE_CODE';
    const AD_EXCHANGE_DEVICE_CATEGORY = 'AD_EXCHANGE_DEVICE_CATEGORY';
    const AD_EXCHANGE_PRICING_RULE_ID = 'AD_EXCHANGE_PRICING_RULE_ID';
    const AD_EXCHANGE_PRICING_RULE_NAME = 'AD_EXCHANGE_PRICING_RULE_NAME';
    const AD_EXCHANGE_TAG_NAME = 'AD_EXCHANGE_TAG_NAME';
    const AD_EXCHANGE_URL = 'AD_EXCHANGE_URL';
    const AD_EXCHANGE_WEB_PROPERTY_CODE = 'AD_EXCHANGE_WEB_PROPERTY_CODE';
    const AD_EXCHANGE_CREATIVE_SIZES = 'AD_EXCHANGE_CREATIVE_SIZES';
    const AD_EXCHANGE_AD_TYPE = 'AD_EXCHANGE_AD_TYPE';
    const AD_EXCHANGE_CHANNEL_NAME = 'AD_EXCHANGE_CHANNEL_NAME';
    const AD_EXCHANGE_PRODUCT_NAME = 'AD_EXCHANGE_PRODUCT_NAME';
    const AD_EXCHANGE_PRODUCT_CODE = 'AD_EXCHANGE_PRODUCT_CODE';
    const AD_EXCHANGE_SITE_NAME = 'AD_EXCHANGE_SITE_NAME';
    const AD_EXCHANGE_REQUEST_SOURCES = 'AD_EXCHANGE_REQUEST_SOURCES';
    const AD_EXCHANGE_ADVERTISER_NAME = 'AD_EXCHANGE_ADVERTISER_NAME';
    const AD_EXCHANGE_BRAND_NAME = 'AD_EXCHANGE_BRAND_NAME';
    const AD_EXCHANGE_AGENCY = 'AD_EXCHANGE_AGENCY';
    const AD_EXCHANGE_BID_TYPE_CODE = 'AD_EXCHANGE_BID_TYPE_CODE';
    const AD_EXCHANGE_BRANDING_TYPE_CODE = 'AD_EXCHANGE_BRANDING_TYPE_CODE';
    const AD_EXCHANGE_BRANDING_TYPE = 'AD_EXCHANGE_BRANDING_TYPE';
    const AD_EXCHANGE_BUYER_NETWORK_NAME = 'AD_EXCHANGE_BUYER_NETWORK_NAME';
    const AD_EXCHANGE_BUYER_NETWORK_ID = 'AD_EXCHANGE_BUYER_NETWORK_ID';
    const AD_EXCHANGE_CUSTOM_CHANNEL_CODE = 'AD_EXCHANGE_CUSTOM_CHANNEL_CODE';
    const AD_EXCHANGE_CUSTOM_CHANNEL_ID = 'AD_EXCHANGE_CUSTOM_CHANNEL_ID';
    const AD_EXCHANGE_DATE = 'AD_EXCHANGE_DATE';
    const AD_EXCHANGE_DEAL_ID = 'AD_EXCHANGE_DEAL_ID';
    const AD_EXCHANGE_DEAL_NAME = 'AD_EXCHANGE_DEAL_NAME';
    const AD_EXCHANGE_TRANSACTION_TYPE = 'AD_EXCHANGE_TRANSACTION_TYPE';
    const AD_EXCHANGE_DSP_BUYER_NETWORK_NAME = 'AD_EXCHANGE_DSP_BUYER_NETWORK_NAME';
    const AD_EXCHANGE_EXPANSION_TYPE = 'AD_EXCHANGE_EXPANSION_TYPE';
    const AD_EXCHANGE_COUNTRY_CODE = 'AD_EXCHANGE_COUNTRY_CODE';
    const AD_EXCHANGE_COUNTRY_NAME = 'AD_EXCHANGE_COUNTRY_NAME';
    const AD_EXCHANGE_DFP_AD_UNIT_ID = 'AD_EXCHANGE_DFP_AD_UNIT_ID';
    const AD_EXCHANGE_DFP_AD_UNIT = 'AD_EXCHANGE_DFP_AD_UNIT';
    const AD_EXCHANGE_INVENTORY_OWNERSHIP = 'AD_EXCHANGE_INVENTORY_OWNERSHIP';
    const AD_EXCHANGE_ADVERTISER_DOMAIN = 'AD_EXCHANGE_ADVERTISER_DOMAIN';
    const AD_EXCHANGE_DFP_MOBILE_APP_NAME = 'AD_EXCHANGE_DFP_MOBILE_APP_NAME';
    const AD_EXCHANGE_MOBILE_APP_RESOLVED_ID = 'AD_EXCHANGE_MOBILE_APP_RESOLVED_ID';
    const AD_EXCHANGE_MOBILE_CARRIER_NAME = 'AD_EXCHANGE_MOBILE_CARRIER_NAME';
    const AD_EXCHANGE_MOBILE_DEVICE_NAME = 'AD_EXCHANGE_MOBILE_DEVICE_NAME';
    const AD_EXCHANGE_MOBILE_INVENTORY_TYPE = 'AD_EXCHANGE_MOBILE_INVENTORY_TYPE';
    const AD_EXCHANGE_MONTH = 'AD_EXCHANGE_MONTH';
    const AD_EXCHANGE_NETWORK_PARTNER_NAME = 'AD_EXCHANGE_NETWORK_PARTNER_NAME';
    const AD_EXCHANGE_OPERATING_SYSTEM = 'AD_EXCHANGE_OPERATING_SYSTEM';
    const AD_EXCHANGE_OPTIMIZATION_TYPE = 'AD_EXCHANGE_OPTIMIZATION_TYPE';
    const AD_EXCHANGE_TAG_CODE = 'AD_EXCHANGE_TAG_CODE';
    const AD_EXCHANGE_TARGETING_TYPE_CODE = 'AD_EXCHANGE_TARGETING_TYPE_CODE';
    const AD_EXCHANGE_TARGETING_TYPE = 'AD_EXCHANGE_TARGETING_TYPE';
    const AD_EXCHANGE_TRANSACTION_TYPE_CODE = 'AD_EXCHANGE_TRANSACTION_TYPE_CODE';
    const AD_EXCHANGE_URL_ID = 'AD_EXCHANGE_URL_ID';
    const AD_EXCHANGE_USER_BANDWIDTH_NAME = 'AD_EXCHANGE_USER_BANDWIDTH_NAME';
    const AD_EXCHANGE_VIDEO_AD_DURATION = 'AD_EXCHANGE_VIDEO_AD_DURATION';
    const AD_EXCHANGE_VIDEO_AD_DURATION_RAW = 'AD_EXCHANGE_VIDEO_AD_DURATION_RAW';
    const AD_EXCHANGE_VIDEO_AD_TYPE = 'AD_EXCHANGE_VIDEO_AD_TYPE';
    const AD_EXCHANGE_WEEK = 'AD_EXCHANGE_WEEK';
    const AD_EXCHANGE_AD_LOCATION = 'AD_EXCHANGE_AD_LOCATION';
    const AD_EXCHANGE_ADVERTISER_VERTICAL = 'AD_EXCHANGE_ADVERTISER_VERTICAL';
    const NIELSEN_SEGMENT = 'NIELSEN_SEGMENT';
    const NIELSEN_DEMOGRAPHICS = 'NIELSEN_DEMOGRAPHICS';
    const NIELSEN_RESTATEMENT_DATE = 'NIELSEN_RESTATEMENT_DATE';
    const NIELSEN_DEVICE_ID = 'NIELSEN_DEVICE_ID';
    const NIELSEN_DEVICE_NAME = 'NIELSEN_DEVICE_NAME';
    const PROGRAMMATIC_BUYER_ID = 'PROGRAMMATIC_BUYER_ID';
    const PROGRAMMATIC_BUYER_NAME = 'PROGRAMMATIC_BUYER_NAME';
    const REQUESTED_AD_SIZES = 'REQUESTED_AD_SIZES';
    const CREATIVE_SIZE_DELIVERED = 'CREATIVE_SIZE_DELIVERED';
    const PROGRAMMATIC_CHANNEL_ID = 'PROGRAMMATIC_CHANNEL_ID';
    const PROGRAMMATIC_CHANNEL_NAME = 'PROGRAMMATIC_CHANNEL_NAME';
    const CLASSIFIED_YIELD_PARTNER_NAME = 'CLASSIFIED_YIELD_PARTNER_NAME';
    const DP_DATE = 'DP_DATE';
    const DP_WEEK = 'DP_WEEK';
    const DP_MONTH_YEAR = 'DP_MONTH_YEAR';
    const DP_COUNTRY_CRITERIA_ID = 'DP_COUNTRY_CRITERIA_ID';
    const DP_COUNTRY_NAME = 'DP_COUNTRY_NAME';
    const DP_INVENTORY_TYPE = 'DP_INVENTORY_TYPE';
    const DP_CREATIVE_SIZE = 'DP_CREATIVE_SIZE';
    const DP_BRAND_NAME = 'DP_BRAND_NAME';
    const DP_ADVERTISER_NAME = 'DP_ADVERTISER_NAME';
    const DP_ADX_BUYER_NETWORK_NAME = 'DP_ADX_BUYER_NETWORK_NAME';
    const DP_MOBILE_DEVICE_NAME = 'DP_MOBILE_DEVICE_NAME';
    const DP_DEVICE_CATEGORY_NAME = 'DP_DEVICE_CATEGORY_NAME';
    const DP_TAG_ID = 'DP_TAG_ID';
    const DP_DEAL_ID = 'DP_DEAL_ID';
    const DP_APP_ID = 'DP_APP_ID';
    const CUSTOM_DIMENSION = 'CUSTOM_DIMENSION';
    const DEMAND_CHANNEL_ID = 'DEMAND_CHANNEL_ID';
    const DEMAND_CHANNEL_NAME = 'DEMAND_CHANNEL_NAME';
    const DOMAIN = 'DOMAIN';
    const UNIFIED_PRICING_RULE_ID = 'UNIFIED_PRICING_RULE_ID';
    const UNIFIED_PRICING_RULE_NAME = 'UNIFIED_PRICING_RULE_NAME';


}
