<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for GlobalOrganizationOperations.Delete. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.DeleteGlobalOrganizationOperationRequest</code>
 */
class DeleteGlobalOrganizationOperationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the Operations resource to delete, or its unique numeric identifier.
     *
     * Generated from protobuf field <code>string operation = 52090215 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $operation = '';
    /**
     * Parent ID for this request.
     *
     * Generated from protobuf field <code>optional string parent_id = 459714768;</code>
     */
    private $parent_id = null;

    /**
     * @param string $operation Name of the Operations resource to delete, or its unique numeric identifier.
     *
     * @return \Google\Cloud\Compute\V1\DeleteGlobalOrganizationOperationRequest
     *
     * @experimental
     */
    public static function build(string $operation): self
    {
        return (new self())
            ->setOperation($operation);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $operation
     *           Name of the Operations resource to delete, or its unique numeric identifier.
     *     @type string $parent_id
     *           Parent ID for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the Operations resource to delete, or its unique numeric identifier.
     *
     * Generated from protobuf field <code>string operation = 52090215 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Name of the Operations resource to delete, or its unique numeric identifier.
     *
     * Generated from protobuf field <code>string operation = 52090215 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation = $var;

        return $this;
    }

    /**
     * Parent ID for this request.
     *
     * Generated from protobuf field <code>optional string parent_id = 459714768;</code>
     * @return string
     */
    public function getParentId()
    {
        return isset($this->parent_id) ? $this->parent_id : '';
    }

    public function hasParentId()
    {
        return isset($this->parent_id);
    }

    public function clearParentId()
    {
        unset($this->parent_id);
    }

    /**
     * Parent ID for this request.
     *
     * Generated from protobuf field <code>optional string parent_id = 459714768;</code>
     * @param string $var
     * @return $this
     */
    public function setParentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_id = $var;

        return $this;
    }

}

