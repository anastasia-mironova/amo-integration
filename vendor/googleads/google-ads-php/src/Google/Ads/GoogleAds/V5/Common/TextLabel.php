<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/text_label.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A type of label displaying text on a colored background.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.TextLabel</code>
 */
class TextLabel extends \Google\Protobuf\Internal\Message
{
    /**
     * Background color of the label in RGB format. This string must match the
     * regular expression '^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$'.
     * Note: The background color may not be visible for manager accounts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue background_color = 1;</code>
     */
    protected $background_color = null;
    /**
     * A short description of the label. The length must be no more than 200
     * characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $background_color
     *           Background color of the label in RGB format. This string must match the
     *           regular expression '^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$'.
     *           Note: The background color may not be visible for manager accounts.
     *     @type \Google\Protobuf\StringValue $description
     *           A short description of the label. The length must be no more than 200
     *           characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Common\TextLabel::initOnce();
        parent::__construct($data);
    }

    /**
     * Background color of the label in RGB format. This string must match the
     * regular expression '^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$'.
     * Note: The background color may not be visible for manager accounts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue background_color = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBackgroundColor()
    {
        return isset($this->background_color) ? $this->background_color : null;
    }

    public function hasBackgroundColor()
    {
        return isset($this->background_color);
    }

    public function clearBackgroundColor()
    {
        unset($this->background_color);
    }

    /**
     * Returns the unboxed value from <code>getBackgroundColor()</code>

     * Background color of the label in RGB format. This string must match the
     * regular expression '^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$'.
     * Note: The background color may not be visible for manager accounts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue background_color = 1;</code>
     * @return string|null
     */
    public function getBackgroundColorUnwrapped()
    {
        return $this->readWrapperValue("background_color");
    }

    /**
     * Background color of the label in RGB format. This string must match the
     * regular expression '^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$'.
     * Note: The background color may not be visible for manager accounts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue background_color = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBackgroundColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->background_color = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Background color of the label in RGB format. This string must match the
     * regular expression '^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$'.
     * Note: The background color may not be visible for manager accounts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue background_color = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setBackgroundColorUnwrapped($var)
    {
        $this->writeWrapperValue("background_color", $var);
        return $this;}

    /**
     * A short description of the label. The length must be no more than 200
     * characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : null;
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * A short description of the label. The length must be no more than 200
     * characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return string|null
     */
    public function getDescriptionUnwrapped()
    {
        return $this->readWrapperValue("description");
    }

    /**
     * A short description of the label. The length must be no more than 200
     * characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A short description of the label. The length must be no more than 200
     * characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionUnwrapped($var)
    {
        $this->writeWrapperValue("description", $var);
        return $this;}

}

