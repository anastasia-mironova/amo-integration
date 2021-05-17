<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/real_time_bidding_setting.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for Real-Time Bidding, a feature only available for campaigns
 * targeting the Ad Exchange network.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.RealTimeBiddingSetting</code>
 */
class RealTimeBiddingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the campaign is opted in to real-time bidding.
     *
     * Generated from protobuf field <code>bool opt_in = 2;</code>
     */
    protected $opt_in = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $opt_in
     *           Whether the campaign is opted in to real-time bidding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\RealTimeBiddingSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the campaign is opted in to real-time bidding.
     *
     * Generated from protobuf field <code>bool opt_in = 2;</code>
     * @return bool
     */
    public function getOptIn()
    {
        return isset($this->opt_in) ? $this->opt_in : false;
    }

    public function hasOptIn()
    {
        return isset($this->opt_in);
    }

    public function clearOptIn()
    {
        unset($this->opt_in);
    }

    /**
     * Whether the campaign is opted in to real-time bidding.
     *
     * Generated from protobuf field <code>bool opt_in = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setOptIn($var)
    {
        GPBUtil::checkBool($var);
        $this->opt_in = $var;

        return $this;
    }

}

