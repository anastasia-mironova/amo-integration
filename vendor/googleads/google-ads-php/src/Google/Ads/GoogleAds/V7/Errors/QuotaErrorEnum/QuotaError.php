<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/errors/quota_error.proto

namespace Google\Ads\GoogleAds\V7\Errors\QuotaErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible quota errors.
 *
 * Protobuf type <code>google.ads.googleads.v7.errors.QuotaErrorEnum.QuotaError</code>
 */
class QuotaError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Too many requests.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED = 2;</code>
     */
    const RESOURCE_EXHAUSTED = 2;
    /**
     * Access is prohibited.
     *
     * Generated from protobuf enum <code>ACCESS_PROHIBITED = 3;</code>
     */
    const ACCESS_PROHIBITED = 3;
    /**
     * Too many requests in a short amount of time.
     *
     * Generated from protobuf enum <code>RESOURCE_TEMPORARILY_EXHAUSTED = 4;</code>
     */
    const RESOURCE_TEMPORARILY_EXHAUSTED = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::RESOURCE_EXHAUSTED => 'RESOURCE_EXHAUSTED',
        self::ACCESS_PROHIBITED => 'ACCESS_PROHIBITED',
        self::RESOURCE_TEMPORARILY_EXHAUSTED => 'RESOURCE_TEMPORARILY_EXHAUSTED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuotaError::class, \Google\Ads\GoogleAds\V7\Errors\QuotaErrorEnum_QuotaError::class);

