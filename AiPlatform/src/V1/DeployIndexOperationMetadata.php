<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_endpoint_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Runtime operation information for
 * [IndexEndpointService.DeployIndex][google.cloud.aiplatform.v1.IndexEndpointService.DeployIndex].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeployIndexOperationMetadata</code>
 */
class DeployIndexOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The operation generic information.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     */
    protected $generic_metadata = null;
    /**
     * The unique index id specified by user
     *
     * Generated from protobuf field <code>string deployed_index_id = 2;</code>
     */
    protected $deployed_index_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $generic_metadata
     *           The operation generic information.
     *     @type string $deployed_index_id
     *           The unique index id specified by user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexEndpointService::initOnce();
        parent::__construct($data);
    }

    /**
     * The operation generic information.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\GenericOperationMetadata|null
     */
    public function getGenericMetadata()
    {
        return $this->generic_metadata;
    }

    public function hasGenericMetadata()
    {
        return isset($this->generic_metadata);
    }

    public function clearGenericMetadata()
    {
        unset($this->generic_metadata);
    }

    /**
     * The operation generic information.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $var
     * @return $this
     */
    public function setGenericMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GenericOperationMetadata::class);
        $this->generic_metadata = $var;

        return $this;
    }

    /**
     * The unique index id specified by user
     *
     * Generated from protobuf field <code>string deployed_index_id = 2;</code>
     * @return string
     */
    public function getDeployedIndexId()
    {
        return $this->deployed_index_id;
    }

    /**
     * The unique index id specified by user
     *
     * Generated from protobuf field <code>string deployed_index_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDeployedIndexId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployed_index_id = $var;

        return $this;
    }

}

