<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Keyword And Url Seed
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.KeywordAndUrlSeed</code>
 */
class KeywordAndUrlSeed extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     */
    protected $url = null;
    /**
     * Requires at least one keyword.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue keywords = 2;</code>
     */
    private $keywords;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $url
     *           The URL to crawl in order to generate keyword ideas.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $keywords
     *           Requires at least one keyword.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUrl()
    {
        return isset($this->url) ? $this->url : null;
    }

    public function hasUrl()
    {
        return isset($this->url);
    }

    public function clearUrl()
    {
        unset($this->url);
    }

    /**
     * Returns the unboxed value from <code>getUrl()</code>

     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @return string|null
     */
    public function getUrlUnwrapped()
    {
        return $this->readWrapperValue("url");
    }

    /**
     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUrlUnwrapped($var)
    {
        $this->writeWrapperValue("url", $var);
        return $this;}

    /**
     * Requires at least one keyword.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue keywords = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Requires at least one keyword.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue keywords = 2;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeywords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->keywords = $arr;

        return $this;
    }

}

