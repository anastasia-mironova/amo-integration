<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/change_status.proto

namespace Google\Ads\GoogleAds\V5\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the status of returned resource.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.resources.ChangeStatus</code>
 */
class ChangeStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the change status.
     * Change status resource names have the form:
     * `customers/{customer_id}/changeStatus/{change_status_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_change_date_time = null;
    /**
     * Output only. Represents the type of the changed resource. This dictates what fields
     * will be set. For example, for AD_GROUP, campaign and ad_group fields will
     * be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType resource_type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $resource_type = 0;
    /**
     * Output only. The Campaign affected by this change.
     *
     * Generated from protobuf field <code>string campaign = 17 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = null;
    /**
     * Output only. The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>string ad_group = 18 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group = null;
    /**
     * Output only. Represents the status of the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ChangeStatusOperationEnum.ChangeStatusOperation resource_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $resource_status = 0;
    /**
     * Output only. The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group_ad = null;
    /**
     * Output only. The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group_criterion = null;
    /**
     * Output only. The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $campaign_criterion = null;
    /**
     * Output only. The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $feed = null;
    /**
     * Output only. The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $feed_item = null;
    /**
     * Output only. The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group_feed = null;
    /**
     * Output only. The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $campaign_feed = null;
    /**
     * Output only. The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group_bid_modifier = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the change status.
     *           Change status resource names have the form:
     *           `customers/{customer_id}/changeStatus/{change_status_id}`
     *     @type \Google\Protobuf\StringValue $last_change_date_time
     *           Output only. Time at which the most recent change has occurred on this resource.
     *     @type int $resource_type
     *           Output only. Represents the type of the changed resource. This dictates what fields
     *           will be set. For example, for AD_GROUP, campaign and ad_group fields will
     *           be set.
     *     @type string $campaign
     *           Output only. The Campaign affected by this change.
     *     @type string $ad_group
     *           Output only. The AdGroup affected by this change.
     *     @type int $resource_status
     *           Output only. Represents the status of the changed resource.
     *     @type \Google\Protobuf\StringValue $ad_group_ad
     *           Output only. The AdGroupAd affected by this change.
     *     @type \Google\Protobuf\StringValue $ad_group_criterion
     *           Output only. The AdGroupCriterion affected by this change.
     *     @type \Google\Protobuf\StringValue $campaign_criterion
     *           Output only. The CampaignCriterion affected by this change.
     *     @type \Google\Protobuf\StringValue $feed
     *           Output only. The Feed affected by this change.
     *     @type \Google\Protobuf\StringValue $feed_item
     *           Output only. The FeedItem affected by this change.
     *     @type \Google\Protobuf\StringValue $ad_group_feed
     *           Output only. The AdGroupFeed affected by this change.
     *     @type \Google\Protobuf\StringValue $campaign_feed
     *           Output only. The CampaignFeed affected by this change.
     *     @type \Google\Protobuf\StringValue $ad_group_bid_modifier
     *           Output only. The AdGroupBidModifier affected by this change.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Resources\ChangeStatus::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the change status.
     * Change status resource names have the form:
     * `customers/{customer_id}/changeStatus/{change_status_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the change status.
     * Change status resource names have the form:
     * `customers/{customer_id}/changeStatus/{change_status_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLastChangeDateTime()
    {
        return isset($this->last_change_date_time) ? $this->last_change_date_time : null;
    }

    public function hasLastChangeDateTime()
    {
        return isset($this->last_change_date_time);
    }

    public function clearLastChangeDateTime()
    {
        unset($this->last_change_date_time);
    }

    /**
     * Returns the unboxed value from <code>getLastChangeDateTime()</code>

     * Output only. Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getLastChangeDateTimeUnwrapped()
    {
        return $this->readWrapperValue("last_change_date_time");
    }

    /**
     * Output only. Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLastChangeDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->last_change_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setLastChangeDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("last_change_date_time", $var);
        return $this;}

    /**
     * Output only. Represents the type of the changed resource. This dictates what fields
     * will be set. For example, for AD_GROUP, campaign and ad_group fields will
     * be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType resource_type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Output only. Represents the type of the changed resource. This dictates what fields
     * will be set. For example, for AD_GROUP, campaign and ad_group fields will
     * be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType resource_type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\ChangeStatusResourceTypeEnum\ChangeStatusResourceType::class);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * Output only. The Campaign affected by this change.
     *
     * Generated from protobuf field <code>string campaign = 17 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The Campaign affected by this change.
     *
     * Generated from protobuf field <code>string campaign = 17 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>string ad_group = 18 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>string ad_group = 18 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Represents the status of the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ChangeStatusOperationEnum.ChangeStatusOperation resource_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getResourceStatus()
    {
        return $this->resource_status;
    }

    /**
     * Output only. Represents the status of the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ChangeStatusOperationEnum.ChangeStatusOperation resource_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setResourceStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\ChangeStatusOperationEnum\ChangeStatusOperation::class);
        $this->resource_status = $var;

        return $this;
    }

    /**
     * Output only. The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupAd()
    {
        return isset($this->ad_group_ad) ? $this->ad_group_ad : null;
    }

    public function hasAdGroupAd()
    {
        return isset($this->ad_group_ad);
    }

    public function clearAdGroupAd()
    {
        unset($this->ad_group_ad);
    }

    /**
     * Returns the unboxed value from <code>getAdGroupAd()</code>

     * Output only. The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getAdGroupAdUnwrapped()
    {
        return $this->readWrapperValue("ad_group_ad");
    }

    /**
     * Output only. The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupAdUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_ad", $var);
        return $this;}

    /**
     * Output only. The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupCriterion()
    {
        return isset($this->ad_group_criterion) ? $this->ad_group_criterion : null;
    }

    public function hasAdGroupCriterion()
    {
        return isset($this->ad_group_criterion);
    }

    public function clearAdGroupCriterion()
    {
        unset($this->ad_group_criterion);
    }

    /**
     * Returns the unboxed value from <code>getAdGroupCriterion()</code>

     * Output only. The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getAdGroupCriterionUnwrapped()
    {
        return $this->readWrapperValue("ad_group_criterion");
    }

    /**
     * Output only. The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_criterion = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupCriterionUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_criterion", $var);
        return $this;}

    /**
     * Output only. The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaignCriterion()
    {
        return isset($this->campaign_criterion) ? $this->campaign_criterion : null;
    }

    public function hasCampaignCriterion()
    {
        return isset($this->campaign_criterion);
    }

    public function clearCampaignCriterion()
    {
        unset($this->campaign_criterion);
    }

    /**
     * Returns the unboxed value from <code>getCampaignCriterion()</code>

     * Output only. The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getCampaignCriterionUnwrapped()
    {
        return $this->readWrapperValue("campaign_criterion");
    }

    /**
     * Output only. The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaignCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign_criterion = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignCriterionUnwrapped($var)
    {
        $this->writeWrapperValue("campaign_criterion", $var);
        return $this;}

    /**
     * Output only. The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeed()
    {
        return isset($this->feed) ? $this->feed : null;
    }

    public function hasFeed()
    {
        return isset($this->feed);
    }

    public function clearFeed()
    {
        unset($this->feed);
    }

    /**
     * Returns the unboxed value from <code>getFeed()</code>

     * Output only. The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getFeedUnwrapped()
    {
        return $this->readWrapperValue("feed");
    }

    /**
     * Output only. The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedUnwrapped($var)
    {
        $this->writeWrapperValue("feed", $var);
        return $this;}

    /**
     * Output only. The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeedItem()
    {
        return isset($this->feed_item) ? $this->feed_item : null;
    }

    public function hasFeedItem()
    {
        return isset($this->feed_item);
    }

    public function clearFeedItem()
    {
        unset($this->feed_item);
    }

    /**
     * Returns the unboxed value from <code>getFeedItem()</code>

     * Output only. The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getFeedItemUnwrapped()
    {
        return $this->readWrapperValue("feed_item");
    }

    /**
     * Output only. The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed_item = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedItemUnwrapped($var)
    {
        $this->writeWrapperValue("feed_item", $var);
        return $this;}

    /**
     * Output only. The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupFeed()
    {
        return isset($this->ad_group_feed) ? $this->ad_group_feed : null;
    }

    public function hasAdGroupFeed()
    {
        return isset($this->ad_group_feed);
    }

    public function clearAdGroupFeed()
    {
        unset($this->ad_group_feed);
    }

    /**
     * Returns the unboxed value from <code>getAdGroupFeed()</code>

     * Output only. The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getAdGroupFeedUnwrapped()
    {
        return $this->readWrapperValue("ad_group_feed");
    }

    /**
     * Output only. The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupFeedUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_feed", $var);
        return $this;}

    /**
     * Output only. The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaignFeed()
    {
        return isset($this->campaign_feed) ? $this->campaign_feed : null;
    }

    public function hasCampaignFeed()
    {
        return isset($this->campaign_feed);
    }

    public function clearCampaignFeed()
    {
        unset($this->campaign_feed);
    }

    /**
     * Returns the unboxed value from <code>getCampaignFeed()</code>

     * Output only. The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getCampaignFeedUnwrapped()
    {
        return $this->readWrapperValue("campaign_feed");
    }

    /**
     * Output only. The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaignFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign_feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignFeedUnwrapped($var)
    {
        $this->writeWrapperValue("campaign_feed", $var);
        return $this;}

    /**
     * Output only. The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupBidModifier()
    {
        return isset($this->ad_group_bid_modifier) ? $this->ad_group_bid_modifier : null;
    }

    public function hasAdGroupBidModifier()
    {
        return isset($this->ad_group_bid_modifier);
    }

    public function clearAdGroupBidModifier()
    {
        unset($this->ad_group_bid_modifier);
    }

    /**
     * Returns the unboxed value from <code>getAdGroupBidModifier()</code>

     * Output only. The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getAdGroupBidModifierUnwrapped()
    {
        return $this->readWrapperValue("ad_group_bid_modifier");
    }

    /**
     * Output only. The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupBidModifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_bid_modifier = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupBidModifierUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_bid_modifier", $var);
        return $this;}

}

