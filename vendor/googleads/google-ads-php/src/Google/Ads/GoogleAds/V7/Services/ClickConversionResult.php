<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/services/conversion_upload_service.proto

namespace Google\Ads\GoogleAds\V7\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifying information for a successfully processed ClickConversion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.services.ClickConversionResult</code>
 */
class ClickConversionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>string gclid = 4;</code>
     */
    protected $gclid = null;
    /**
     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>string conversion_action = 5;</code>
     */
    protected $conversion_action = null;
    /**
     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     *
     * Generated from protobuf field <code>string conversion_date_time = 6;</code>
     */
    protected $conversion_date_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gclid
     *           The Google Click ID (gclid) associated with this conversion.
     *     @type string $conversion_action
     *           Resource name of the conversion action associated with this conversion.
     *     @type string $conversion_date_time
     *           The date time at which the conversion occurred. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Services\ConversionUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>string gclid = 4;</code>
     * @return string
     */
    public function getGclid()
    {
        return isset($this->gclid) ? $this->gclid : '';
    }

    public function hasGclid()
    {
        return isset($this->gclid);
    }

    public function clearGclid()
    {
        unset($this->gclid);
    }

    /**
     * The Google Click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>string gclid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGclid($var)
    {
        GPBUtil::checkString($var, True);
        $this->gclid = $var;

        return $this;
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>string conversion_action = 5;</code>
     * @return string
     */
    public function getConversionAction()
    {
        return isset($this->conversion_action) ? $this->conversion_action : '';
    }

    public function hasConversionAction()
    {
        return isset($this->conversion_action);
    }

    public function clearConversionAction()
    {
        unset($this->conversion_action);
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>string conversion_action = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_action = $var;

        return $this;
    }

    /**
     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     *
     * Generated from protobuf field <code>string conversion_date_time = 6;</code>
     * @return string
     */
    public function getConversionDateTime()
    {
        return isset($this->conversion_date_time) ? $this->conversion_date_time : '';
    }

    public function hasConversionDateTime()
    {
        return isset($this->conversion_date_time);
    }

    public function clearConversionDateTime()
    {
        unset($this->conversion_date_time);
    }

    /**
     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     *
     * Generated from protobuf field <code>string conversion_date_time = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_date_time = $var;

        return $this;
    }

}

