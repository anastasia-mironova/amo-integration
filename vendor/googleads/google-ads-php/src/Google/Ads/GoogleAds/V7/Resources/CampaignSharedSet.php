<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/campaign_shared_set.proto

namespace Google\Ads\GoogleAds\V7\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CampaignSharedSets are used for managing the shared sets associated with a
 * campaign.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.resources.CampaignSharedSet</code>
 */
class CampaignSharedSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the campaign shared set.
     * Campaign shared set resource names have the form:
     * `customers/{customer_id}/campaignSharedSets/{campaign_id}~{shared_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The campaign to which the campaign shared set belongs.
     *
     * Generated from protobuf field <code>string campaign = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = null;
    /**
     * Immutable. The shared set associated with the campaign. This may be a negative keyword
     * shared set of another customer. This customer should be a manager of the
     * other customer, otherwise the campaign shared set will exist but have no
     * serving effect. Only negative keyword shared sets can be associated with
     * Shopping campaigns. Only negative placement shared sets can be associated
     * with Display mobile app campaigns.
     *
     * Generated from protobuf field <code>string shared_set = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $shared_set = null;
    /**
     * Output only. The status of this campaign shared set. Read only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.CampaignSharedSetStatusEnum.CampaignSharedSetStatus status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the campaign shared set.
     *           Campaign shared set resource names have the form:
     *           `customers/{customer_id}/campaignSharedSets/{campaign_id}~{shared_set_id}`
     *     @type string $campaign
     *           Immutable. The campaign to which the campaign shared set belongs.
     *     @type string $shared_set
     *           Immutable. The shared set associated with the campaign. This may be a negative keyword
     *           shared set of another customer. This customer should be a manager of the
     *           other customer, otherwise the campaign shared set will exist but have no
     *           serving effect. Only negative keyword shared sets can be associated with
     *           Shopping campaigns. Only negative placement shared sets can be associated
     *           with Display mobile app campaigns.
     *     @type int $status
     *           Output only. The status of this campaign shared set. Read only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Resources\CampaignSharedSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the campaign shared set.
     * Campaign shared set resource names have the form:
     * `customers/{customer_id}/campaignSharedSets/{campaign_id}~{shared_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the campaign shared set.
     * Campaign shared set resource names have the form:
     * `customers/{customer_id}/campaignSharedSets/{campaign_id}~{shared_set_id}`
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
     * Immutable. The campaign to which the campaign shared set belongs.
     *
     * Generated from protobuf field <code>string campaign = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaign()
    {
        return isset($this->campaign) ? $this->campaign : '';
    }

    public function hasCampaign()
    {
        return isset($this->campaign);
    }

    public function clearCampaign()
    {
        unset($this->campaign);
    }

    /**
     * Immutable. The campaign to which the campaign shared set belongs.
     *
     * Generated from protobuf field <code>string campaign = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Immutable. The shared set associated with the campaign. This may be a negative keyword
     * shared set of another customer. This customer should be a manager of the
     * other customer, otherwise the campaign shared set will exist but have no
     * serving effect. Only negative keyword shared sets can be associated with
     * Shopping campaigns. Only negative placement shared sets can be associated
     * with Display mobile app campaigns.
     *
     * Generated from protobuf field <code>string shared_set = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSharedSet()
    {
        return isset($this->shared_set) ? $this->shared_set : '';
    }

    public function hasSharedSet()
    {
        return isset($this->shared_set);
    }

    public function clearSharedSet()
    {
        unset($this->shared_set);
    }

    /**
     * Immutable. The shared set associated with the campaign. This may be a negative keyword
     * shared set of another customer. This customer should be a manager of the
     * other customer, otherwise the campaign shared set will exist but have no
     * serving effect. Only negative keyword shared sets can be associated with
     * Shopping campaigns. Only negative placement shared sets can be associated
     * with Display mobile app campaigns.
     *
     * Generated from protobuf field <code>string shared_set = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSharedSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->shared_set = $var;

        return $this;
    }

    /**
     * Output only. The status of this campaign shared set. Read only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.CampaignSharedSetStatusEnum.CampaignSharedSetStatus status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of this campaign shared set. Read only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.CampaignSharedSetStatusEnum.CampaignSharedSetStatus status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V7\Enums\CampaignSharedSetStatusEnum\CampaignSharedSetStatus::class);
        $this->status = $var;

        return $this;
    }

}

