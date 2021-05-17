<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/enums/app_payment_model_type.proto

namespace Google\Ads\GoogleAds\V5\Enums\AppPaymentModelTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible app payment models.
 *
 * Protobuf type <code>google.ads.googleads.v5.enums.AppPaymentModelTypeEnum.AppPaymentModelType</code>
 */
class AppPaymentModelType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Represents paid-for apps.
     *
     * Generated from protobuf enum <code>PAID = 30;</code>
     */
    const PAID = 30;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PAID => 'PAID',
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
class_alias(AppPaymentModelType::class, \Google\Ads\GoogleAds\V5\Enums\AppPaymentModelTypeEnum_AppPaymentModelType::class);

