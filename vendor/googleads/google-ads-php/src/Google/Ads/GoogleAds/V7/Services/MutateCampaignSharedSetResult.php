<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/services/campaign_shared_set_service.proto

namespace Google\Ads\GoogleAds\V7\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the campaign shared set mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.services.MutateCampaignSharedSetResult</code>
 */
class MutateCampaignSharedSetResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The mutated campaign shared set with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.CampaignSharedSet campaign_shared_set = 2;</code>
     */
    protected $campaign_shared_set = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V7\Resources\CampaignSharedSet $campaign_shared_set
     *           The mutated campaign shared set with only mutable fields after mutate. The
     *           field will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Services\CampaignSharedSetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
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
     * The mutated campaign shared set with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.CampaignSharedSet campaign_shared_set = 2;</code>
     * @return \Google\Ads\GoogleAds\V7\Resources\CampaignSharedSet|null
     */
    public function getCampaignSharedSet()
    {
        return isset($this->campaign_shared_set) ? $this->campaign_shared_set : null;
    }

    public function hasCampaignSharedSet()
    {
        return isset($this->campaign_shared_set);
    }

    public function clearCampaignSharedSet()
    {
        unset($this->campaign_shared_set);
    }

    /**
     * The mutated campaign shared set with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.CampaignSharedSet campaign_shared_set = 2;</code>
     * @param \Google\Ads\GoogleAds\V7\Resources\CampaignSharedSet $var
     * @return $this
     */
    public function setCampaignSharedSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V7\Resources\CampaignSharedSet::class);
        $this->campaign_shared_set = $var;

        return $this;
    }

}

