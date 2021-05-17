<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/services/merchant_center_link_service.proto

namespace Google\Ads\GoogleAds\V7\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single update on a Merchant Center link.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.services.MerchantCenterLinkOperation</code>
 */
class MerchantCenterLinkOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    protected $update_mask = null;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           FieldMask that determines which resource fields are modified in an update.
     *     @type \Google\Ads\GoogleAds\V7\Resources\MerchantCenterLink $update
     *           Update operation: The merchant center link is expected to have a valid
     *           resource name.
     *     @type string $remove
     *           Remove operation: A resource name for the removed merchant center link is
     *           expected, in this format:
     *           `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Services\MerchantCenterLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Update operation: The merchant center link is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.MerchantCenterLink update = 1;</code>
     * @return \Google\Ads\GoogleAds\V7\Resources\MerchantCenterLink|null
     */
    public function getUpdate()
    {
        return $this->readOneof(1);
    }

    public function hasUpdate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Update operation: The merchant center link is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.MerchantCenterLink update = 1;</code>
     * @param \Google\Ads\GoogleAds\V7\Resources\MerchantCenterLink $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V7\Resources\MerchantCenterLink::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed merchant center link is
     * expected, in this format:
     * `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     *
     * Generated from protobuf field <code>string remove = 2;</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(2);
    }

    public function hasRemove()
    {
        return $this->hasOneof(2);
    }

    /**
     * Remove operation: A resource name for the removed merchant center link is
     * expected, in this format:
     * `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     *
     * Generated from protobuf field <code>string remove = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

