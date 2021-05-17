<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/ad_group_ad.proto

namespace Google\Ads\GoogleAds\V7\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad group ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.resources.AdGroupAd</code>
 */
class AdGroupAd extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the ad.
     * Ad group ad resource names have the form:
     * `customers/{customer_id}/adGroupAds/{ad_group_id}~{ad_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The status of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.AdGroupAdStatusEnum.AdGroupAdStatus status = 3;</code>
     */
    protected $status = 0;
    /**
     * Immutable. The ad group to which the ad belongs.
     *
     * Generated from protobuf field <code>string ad_group = 9 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group = null;
    /**
     * Immutable. The ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.Ad ad = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $ad = null;
    /**
     * Output only. Policy information for the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.AdGroupAdPolicySummary policy_summary = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $policy_summary = null;
    /**
     * Output only. Overall ad strength for this ad group ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.AdStrengthEnum.AdStrength ad_strength = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_strength = 0;
    /**
     * Output only. The resource names of labels attached to this ad group ad.
     *
     * Generated from protobuf field <code>repeated string labels = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the ad.
     *           Ad group ad resource names have the form:
     *           `customers/{customer_id}/adGroupAds/{ad_group_id}~{ad_id}`
     *     @type int $status
     *           The status of the ad.
     *     @type string $ad_group
     *           Immutable. The ad group to which the ad belongs.
     *     @type \Google\Ads\GoogleAds\V7\Resources\Ad $ad
     *           Immutable. The ad.
     *     @type \Google\Ads\GoogleAds\V7\Resources\AdGroupAdPolicySummary $policy_summary
     *           Output only. Policy information for the ad.
     *     @type int $ad_strength
     *           Output only. Overall ad strength for this ad group ad.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $labels
     *           Output only. The resource names of labels attached to this ad group ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Resources\AdGroupAd::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the ad.
     * Ad group ad resource names have the form:
     * `customers/{customer_id}/adGroupAds/{ad_group_id}~{ad_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the ad.
     * Ad group ad resource names have the form:
     * `customers/{customer_id}/adGroupAds/{ad_group_id}~{ad_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The status of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.AdGroupAdStatusEnum.AdGroupAdStatus status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.AdGroupAdStatusEnum.AdGroupAdStatus status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V7\Enums\AdGroupAdStatusEnum\AdGroupAdStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Immutable. The ad group to which the ad belongs.
     *
     * Generated from protobuf field <code>string ad_group = 9 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAdGroup()
    {
        return isset($this->ad_group) ? $this->ad_group : '';
    }

    public function hasAdGroup()
    {
        return isset($this->ad_group);
    }

    public function clearAdGroup()
    {
        unset($this->ad_group);
    }

    /**
     * Immutable. The ad group to which the ad belongs.
     *
     * Generated from protobuf field <code>string ad_group = 9 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Immutable. The ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.Ad ad = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V7\Resources\Ad|null
     */
    public function getAd()
    {
        return isset($this->ad) ? $this->ad : null;
    }

    public function hasAd()
    {
        return isset($this->ad);
    }

    public function clearAd()
    {
        unset($this->ad);
    }

    /**
     * Immutable. The ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.Ad ad = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V7\Resources\Ad $var
     * @return $this
     */
    public function setAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V7\Resources\Ad::class);
        $this->ad = $var;

        return $this;
    }

    /**
     * Output only. Policy information for the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.AdGroupAdPolicySummary policy_summary = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V7\Resources\AdGroupAdPolicySummary|null
     */
    public function getPolicySummary()
    {
        return isset($this->policy_summary) ? $this->policy_summary : null;
    }

    public function hasPolicySummary()
    {
        return isset($this->policy_summary);
    }

    public function clearPolicySummary()
    {
        unset($this->policy_summary);
    }

    /**
     * Output only. Policy information for the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.AdGroupAdPolicySummary policy_summary = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V7\Resources\AdGroupAdPolicySummary $var
     * @return $this
     */
    public function setPolicySummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V7\Resources\AdGroupAdPolicySummary::class);
        $this->policy_summary = $var;

        return $this;
    }

    /**
     * Output only. Overall ad strength for this ad group ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.AdStrengthEnum.AdStrength ad_strength = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAdStrength()
    {
        return $this->ad_strength;
    }

    /**
     * Output only. Overall ad strength for this ad group ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.AdStrengthEnum.AdStrength ad_strength = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAdStrength($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V7\Enums\AdStrengthEnum\AdStrength::class);
        $this->ad_strength = $var;

        return $this;
    }

    /**
     * Output only. The resource names of labels attached to this ad group ad.
     *
     * Generated from protobuf field <code>repeated string labels = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Output only. The resource names of labels attached to this ad group ad.
     *
     * Generated from protobuf field <code>repeated string labels = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

