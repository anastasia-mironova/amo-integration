<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/campaign_draft_status.proto

namespace Google\Ads\GoogleAds\V7\Enums\CampaignDraftStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a campaign draft.
 *
 * Protobuf type <code>google.ads.googleads.v7.enums.CampaignDraftStatusEnum.CampaignDraftStatus</code>
 */
class CampaignDraftStatus
{
    /**
     * The status has not been specified.
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
     * Initial state of the draft, the advertiser can start adding changes with
     * no effect on serving.
     *
     * Generated from protobuf enum <code>PROPOSED = 2;</code>
     */
    const PROPOSED = 2;
    /**
     * The campaign draft is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    const REMOVED = 3;
    /**
     * Advertiser requested to promote draft's changes back into the original
     * campaign. Advertiser can poll the long running operation returned by
     * the promote action to see the status of the promotion.
     *
     * Generated from protobuf enum <code>PROMOTING = 5;</code>
     */
    const PROMOTING = 5;
    /**
     * The process to merge changes in the draft back to the original campaign
     * has completed successfully.
     *
     * Generated from protobuf enum <code>PROMOTED = 4;</code>
     */
    const PROMOTED = 4;
    /**
     * The promotion failed after it was partially applied. Promote cannot be
     * attempted again safely, so the issue must be corrected in the original
     * campaign.
     *
     * Generated from protobuf enum <code>PROMOTE_FAILED = 6;</code>
     */
    const PROMOTE_FAILED = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PROPOSED => 'PROPOSED',
        self::REMOVED => 'REMOVED',
        self::PROMOTING => 'PROMOTING',
        self::PROMOTED => 'PROMOTED',
        self::PROMOTE_FAILED => 'PROMOTE_FAILED',
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
class_alias(CampaignDraftStatus::class, \Google\Ads\GoogleAds\V7\Enums\CampaignDraftStatusEnum_CampaignDraftStatus::class);

