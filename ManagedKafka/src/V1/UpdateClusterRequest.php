<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/v1/managed_kafka.proto

namespace Google\Cloud\ManagedKafka\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for UpdateCluster.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.v1.UpdateClusterRequest</code>
 */
class UpdateClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * cluster resource by the update. The fields specified in the update_mask are
     * relative to the resource, not the full request. A field will be overwritten
     * if it is in the mask. The mask is required and a value of * will update all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The cluster to update. Its `name` field must be populated.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.Cluster cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cluster = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID to avoid duplication of requests. If a request times out or
     * fails, retrying with the same ID allows the server to recognize the
     * previous attempt. For at least 60 minutes, the server ignores duplicate
     * requests bearing the same ID.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID
     * within 60 minutes of the last request, the server checks if an original
     * operation with the same request ID was received. If so, the server ignores
     * the second request.
     * The request ID must be a valid UUID. A zero UUID is not supported
     * (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param \Google\Cloud\ManagedKafka\V1\Cluster $cluster    Required. The cluster to update. Its `name` field must be populated.
     * @param \Google\Protobuf\FieldMask            $updateMask Required. Field mask is used to specify the fields to be overwritten in the
     *                                                          cluster resource by the update. The fields specified in the update_mask are
     *                                                          relative to the resource, not the full request. A field will be overwritten
     *                                                          if it is in the mask. The mask is required and a value of * will update all
     *                                                          fields.
     *
     * @return \Google\Cloud\ManagedKafka\V1\UpdateClusterRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ManagedKafka\V1\Cluster $cluster, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setCluster($cluster)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           cluster resource by the update. The fields specified in the update_mask are
     *           relative to the resource, not the full request. A field will be overwritten
     *           if it is in the mask. The mask is required and a value of * will update all
     *           fields.
     *     @type \Google\Cloud\ManagedKafka\V1\Cluster $cluster
     *           Required. The cluster to update. Its `name` field must be populated.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID to avoid duplication of requests. If a request times out or
     *           fails, retrying with the same ID allows the server to recognize the
     *           previous attempt. For at least 60 minutes, the server ignores duplicate
     *           requests bearing the same ID.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID
     *           within 60 minutes of the last request, the server checks if an original
     *           operation with the same request ID was received. If so, the server ignores
     *           the second request.
     *           The request ID must be a valid UUID. A zero UUID is not supported
     *           (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\V1\ManagedKafka::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * cluster resource by the update. The fields specified in the update_mask are
     * relative to the resource, not the full request. A field will be overwritten
     * if it is in the mask. The mask is required and a value of * will update all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Field mask is used to specify the fields to be overwritten in the
     * cluster resource by the update. The fields specified in the update_mask are
     * relative to the resource, not the full request. A field will be overwritten
     * if it is in the mask. The mask is required and a value of * will update all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The cluster to update. Its `name` field must be populated.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.Cluster cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ManagedKafka\V1\Cluster|null
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    public function hasCluster()
    {
        return isset($this->cluster);
    }

    public function clearCluster()
    {
        unset($this->cluster);
    }

    /**
     * Required. The cluster to update. Its `name` field must be populated.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.Cluster cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ManagedKafka\V1\Cluster $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedKafka\V1\Cluster::class);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID to avoid duplication of requests. If a request times out or
     * fails, retrying with the same ID allows the server to recognize the
     * previous attempt. For at least 60 minutes, the server ignores duplicate
     * requests bearing the same ID.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID
     * within 60 minutes of the last request, the server checks if an original
     * operation with the same request ID was received. If so, the server ignores
     * the second request.
     * The request ID must be a valid UUID. A zero UUID is not supported
     * (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID to avoid duplication of requests. If a request times out or
     * fails, retrying with the same ID allows the server to recognize the
     * previous attempt. For at least 60 minutes, the server ignores duplicate
     * requests bearing the same ID.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID
     * within 60 minutes of the last request, the server checks if an original
     * operation with the same request ID was received. If so, the server ignores
     * the second request.
     * The request ID must be a valid UUID. A zero UUID is not supported
     * (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

