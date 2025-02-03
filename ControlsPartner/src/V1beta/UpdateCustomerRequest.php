<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/cloudcontrolspartner/v1beta/customers.proto

namespace Google\Cloud\CloudControlsPartner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update a customer
 *
 * Generated from protobuf message <code>google.cloud.cloudcontrolspartner.v1beta.UpdateCustomerRequest</code>
 */
class UpdateCustomerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The customer to update
     * Format:
     * `organizations/{organization}/locations/{location}/customers/{customer}`
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1beta.Customer customer = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer = null;
    /**
     * Optional. The list of fields to update
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\CloudControlsPartner\V1beta\Customer $customer   Required. The customer to update
     *                                                                       Format:
     *                                                                       `organizations/{organization}/locations/{location}/customers/{customer}`
     * @param \Google\Protobuf\FieldMask                         $updateMask Optional. The list of fields to update
     *
     * @return \Google\Cloud\CloudControlsPartner\V1beta\UpdateCustomerRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\CloudControlsPartner\V1beta\Customer $customer, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setCustomer($customer)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\CloudControlsPartner\V1beta\Customer $customer
     *           Required. The customer to update
     *           Format:
     *           `organizations/{organization}/locations/{location}/customers/{customer}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The list of fields to update
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Cloudcontrolspartner\V1Beta\Customers::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The customer to update
     * Format:
     * `organizations/{organization}/locations/{location}/customers/{customer}`
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1beta.Customer customer = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudControlsPartner\V1beta\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    public function hasCustomer()
    {
        return isset($this->customer);
    }

    public function clearCustomer()
    {
        unset($this->customer);
    }

    /**
     * Required. The customer to update
     * Format:
     * `organizations/{organization}/locations/{location}/customers/{customer}`
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1beta.Customer customer = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudControlsPartner\V1beta\Customer $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudControlsPartner\V1beta\Customer::class);
        $this->customer = $var;

        return $this;
    }

    /**
     * Optional. The list of fields to update
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
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
     * Optional. The list of fields to update
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

