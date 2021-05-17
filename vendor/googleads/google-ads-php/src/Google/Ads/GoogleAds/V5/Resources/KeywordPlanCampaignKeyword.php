<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/keyword_plan_campaign_keyword.proto

namespace Google\Ads\GoogleAds\V5\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Keyword Plan Campaign keyword.
 * Only negative keywords are supported for Campaign Keyword.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.resources.KeywordPlanCampaignKeyword</code>
 */
class KeywordPlanCampaignKeyword extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the Keyword Plan Campaign keyword.
     * KeywordPlanCampaignKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $keyword_plan_campaign = null;
    /**
     * Output only. The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     */
    protected $text = null;
    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     */
    protected $match_type = 0;
    /**
     * Immutable. If true, the keyword is negative.
     * Must be set to true. Only negative campaign keywords are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue negative = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $negative = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the Keyword Plan Campaign keyword.
     *           KeywordPlanCampaignKeyword resource names have the form:
     *           `customers/{customer_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
     *     @type \Google\Protobuf\StringValue $keyword_plan_campaign
     *           The Keyword Plan campaign to which this negative keyword belongs.
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. The ID of the Keyword Plan negative keyword.
     *     @type \Google\Protobuf\StringValue $text
     *           The keyword text.
     *     @type int $match_type
     *           The keyword match type.
     *     @type \Google\Protobuf\BoolValue $negative
     *           Immutable. If true, the keyword is negative.
     *           Must be set to true. Only negative campaign keywords are supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Resources\KeywordPlanCampaignKeyword::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the Keyword Plan Campaign keyword.
     * KeywordPlanCampaignKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the Keyword Plan Campaign keyword.
     * KeywordPlanCampaignKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanCampaignKeywords/{kp_campaign_keyword_id}`
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
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getKeywordPlanCampaign()
    {
        return isset($this->keyword_plan_campaign) ? $this->keyword_plan_campaign : null;
    }

    public function hasKeywordPlanCampaign()
    {
        return isset($this->keyword_plan_campaign);
    }

    public function clearKeywordPlanCampaign()
    {
        unset($this->keyword_plan_campaign);
    }

    /**
     * Returns the unboxed value from <code>getKeywordPlanCampaign()</code>

     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2 [(.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getKeywordPlanCampaignUnwrapped()
    {
        return $this->readWrapperValue("keyword_plan_campaign");
    }

    /**
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2 [(.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setKeywordPlanCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->keyword_plan_campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2 [(.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setKeywordPlanCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("keyword_plan_campaign", $var);
        return $this;}

    /**
     * Output only. The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : null;
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * Returns the unboxed value from <code>getText()</code>

     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @return string|null
     */
    public function getTextUnwrapped()
    {
        return $this->readWrapperValue("text");
    }

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextUnwrapped($var)
    {
        $this->writeWrapperValue("text", $var);
        return $this;}

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     * @return int
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\KeywordMatchTypeEnum\KeywordMatchType::class);
        $this->match_type = $var;

        return $this;
    }

    /**
     * Immutable. If true, the keyword is negative.
     * Must be set to true. Only negative campaign keywords are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue negative = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getNegative()
    {
        return isset($this->negative) ? $this->negative : null;
    }

    public function hasNegative()
    {
        return isset($this->negative);
    }

    public function clearNegative()
    {
        unset($this->negative);
    }

    /**
     * Returns the unboxed value from <code>getNegative()</code>

     * Immutable. If true, the keyword is negative.
     * Must be set to true. Only negative campaign keywords are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue negative = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool|null
     */
    public function getNegativeUnwrapped()
    {
        return $this->readWrapperValue("negative");
    }

    /**
     * Immutable. If true, the keyword is negative.
     * Must be set to true. Only negative campaign keywords are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue negative = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setNegative($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->negative = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Immutable. If true, the keyword is negative.
     * Must be set to true. Only negative campaign keywords are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue negative = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setNegativeUnwrapped($var)
    {
        $this->writeWrapperValue("negative", $var);
        return $this;}

}

