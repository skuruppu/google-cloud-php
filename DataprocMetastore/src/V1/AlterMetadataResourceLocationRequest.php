<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore.proto

namespace Google\Cloud\Metastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DataprocMetastore.AlterMetadataResourceLocation][google.cloud.metastore.v1.DataprocMetastore.AlterMetadataResourceLocation].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1.AlterMetadataResourceLocationRequest</code>
 */
class AlterMetadataResourceLocationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative resource name of the metastore service to mutate
     * metadata, in the following format:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $service = '';
    /**
     * Required. The relative metadata resource name in the following format.
     * `databases/{database_id}`
     * or
     * `databases/{database_id}/tables/{table_id}`
     * or
     * `databases/{database_id}/tables/{table_id}/partitions/{partition_id}`
     *
     * Generated from protobuf field <code>string resource_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource_name = '';
    /**
     * Required. The new location URI for the metadata resource.
     *
     * Generated from protobuf field <code>string location_uri = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $location_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Required. The relative resource name of the metastore service to mutate
     *           metadata, in the following format:
     *           `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *     @type string $resource_name
     *           Required. The relative metadata resource name in the following format.
     *           `databases/{database_id}`
     *           or
     *           `databases/{database_id}/tables/{table_id}`
     *           or
     *           `databases/{database_id}/tables/{table_id}/partitions/{partition_id}`
     *     @type string $location_uri
     *           Required. The new location URI for the metadata resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative resource name of the metastore service to mutate
     * metadata, in the following format:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Required. The relative resource name of the metastore service to mutate
     * metadata, in the following format:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Required. The relative metadata resource name in the following format.
     * `databases/{database_id}`
     * or
     * `databases/{database_id}/tables/{table_id}`
     * or
     * `databases/{database_id}/tables/{table_id}/partitions/{partition_id}`
     *
     * Generated from protobuf field <code>string resource_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Required. The relative metadata resource name in the following format.
     * `databases/{database_id}`
     * or
     * `databases/{database_id}/tables/{table_id}`
     * or
     * `databases/{database_id}/tables/{table_id}/partitions/{partition_id}`
     *
     * Generated from protobuf field <code>string resource_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The new location URI for the metadata resource.
     *
     * Generated from protobuf field <code>string location_uri = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLocationUri()
    {
        return $this->location_uri;
    }

    /**
     * Required. The new location URI for the metadata resource.
     *
     * Generated from protobuf field <code>string location_uri = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLocationUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_uri = $var;

        return $this;
    }

}

