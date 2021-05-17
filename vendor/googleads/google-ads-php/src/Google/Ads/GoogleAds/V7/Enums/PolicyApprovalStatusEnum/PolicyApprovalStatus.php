<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/policy_approval_status.proto

namespace Google\Ads\GoogleAds\V7\Enums\PolicyApprovalStatusEnum;

use UnexpectedValueException;

/**
 * The possible policy approval statuses. When there are several approval
 * statuses available the most severe one will be used. The order of severity
 * is DISAPPROVED, AREA_OF_INTEREST_ONLY, APPROVED_LIMITED and APPROVED.
 *
 * Protobuf type <code>google.ads.googleads.v7.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus</code>
 */
class PolicyApprovalStatus
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Will not serve.
     *
     * Generated from protobuf enum <code>DISAPPROVED = 2;</code>
     */
    const DISAPPROVED = 2;
    /**
     * Serves with restrictions.
     *
     * Generated from protobuf enum <code>APPROVED_LIMITED = 3;</code>
     */
    const APPROVED_LIMITED = 3;
    /**
     * Serves without restrictions.
     *
     * Generated from protobuf enum <code>APPROVED = 4;</code>
     */
    const APPROVED = 4;
    /**
     * Will not serve in targeted countries, but may serve for users who are
     * searching for information about the targeted countries.
     *
     * Generated from protobuf enum <code>AREA_OF_INTEREST_ONLY = 5;</code>
     */
    const AREA_OF_INTEREST_ONLY = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DISAPPROVED => 'DISAPPROVED',
        self::APPROVED_LIMITED => 'APPROVED_LIMITED',
        self::APPROVED => 'APPROVED',
        self::AREA_OF_INTEREST_ONLY => 'AREA_OF_INTEREST_ONLY',
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
class_alias(PolicyApprovalStatus::class, \Google\Ads\GoogleAds\V7\Enums\PolicyApprovalStatusEnum_PolicyApprovalStatus::class);

