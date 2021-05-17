<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/url_collection.proto

namespace Google\Ads\GoogleAds\V6\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Collection of urls that is tagged with a unique identifier.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.common.UrlCollection</code>
 */
class UrlCollection extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique identifier for this UrlCollection instance.
     *
     * Generated from protobuf field <code>string url_collection_id = 5;</code>
     */
    protected $url_collection_id = null;
    /**
     * A list of possible final URLs.
     *
     * Generated from protobuf field <code>repeated string final_urls = 6;</code>
     */
    private $final_urls;
    /**
     * A list of possible final mobile URLs.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 7;</code>
     */
    private $final_mobile_urls;
    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>string tracking_url_template = 8;</code>
     */
    protected $tracking_url_template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url_collection_id
     *           Unique identifier for this UrlCollection instance.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of possible final URLs.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of possible final mobile URLs.
     *     @type string $tracking_url_template
     *           URL template for constructing a tracking URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Common\UrlCollection::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier for this UrlCollection instance.
     *
     * Generated from protobuf field <code>string url_collection_id = 5;</code>
     * @return string
     */
    public function getUrlCollectionId()
    {
        return isset($this->url_collection_id) ? $this->url_collection_id : '';
    }

    public function hasUrlCollectionId()
    {
        return isset($this->url_collection_id);
    }

    public function clearUrlCollectionId()
    {
        unset($this->url_collection_id);
    }

    /**
     * Unique identifier for this UrlCollection instance.
     *
     * Generated from protobuf field <code>string url_collection_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlCollectionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_collection_id = $var;

        return $this;
    }

    /**
     * A list of possible final URLs.
     *
     * Generated from protobuf field <code>repeated string final_urls = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of possible final URLs.
     *
     * Generated from protobuf field <code>repeated string final_urls = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of possible final mobile URLs.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of possible final mobile URLs.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_mobile_urls = $arr;

        return $this;
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>string tracking_url_template = 8;</code>
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template) ? $this->tracking_url_template : '';
    }

    public function hasTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template);
    }

    public function clearTrackingUrlTemplate()
    {
        unset($this->tracking_url_template);
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>string tracking_url_template = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_url_template = $var;

        return $this;
    }

}

