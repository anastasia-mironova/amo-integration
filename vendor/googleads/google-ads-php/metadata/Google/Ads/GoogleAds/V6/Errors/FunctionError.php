<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/function_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Errors;

class FunctionError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/ads/googleads/v6/errors/function_error.protogoogle.ads.googleads.v6.errors"�
FunctionErrorEnum"�
FunctionError
UNSPECIFIED 
UNKNOWN
INVALID_FUNCTION_FORMAT
DATA_TYPE_MISMATCH 
INVALID_CONJUNCTION_OPERANDS
INVALID_NUMBER_OF_OPERANDS
INVALID_OPERAND_TYPE
INVALID_OPERATOR 
INVALID_REQUEST_CONTEXT_TYPE)
%INVALID_FUNCTION_FOR_CALL_PLACEHOLDER	$
 INVALID_FUNCTION_FOR_PLACEHOLDER

INVALID_OPERAND"
MISSING_CONSTANT_OPERAND_VALUE"
INVALID_CONSTANT_OPERAND_VALUE
INVALID_NESTING#
MULTIPLE_FEED_IDS_NOT_SUPPORTED/
+INVALID_FUNCTION_FOR_FEED_WITH_FIXED_SCHEMA
INVALID_ATTRIBUTE_NAMEB�
"com.google.ads.googleads.v6.errorsBFunctionErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/errors;errors�GAA�Google.Ads.GoogleAds.V6.Errors�Google\\Ads\\GoogleAds\\V6\\Errors�"Google::Ads::GoogleAds::V6::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

