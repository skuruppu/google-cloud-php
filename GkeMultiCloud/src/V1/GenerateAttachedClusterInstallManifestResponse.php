<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/attached_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * `AttachedClusters.GenerateAttachedClusterInstallManifest` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.GenerateAttachedClusterInstallManifestResponse</code>
 */
class GenerateAttachedClusterInstallManifestResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A set of Kubernetes resources (in YAML format) to be applied
     * to the cluster to be attached.
     *
     * Generated from protobuf field <code>string manifest = 1;</code>
     */
    protected $manifest = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $manifest
     *           A set of Kubernetes resources (in YAML format) to be applied
     *           to the cluster to be attached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AttachedService::initOnce();
        parent::__construct($data);
    }

    /**
     * A set of Kubernetes resources (in YAML format) to be applied
     * to the cluster to be attached.
     *
     * Generated from protobuf field <code>string manifest = 1;</code>
     * @return string
     */
    public function getManifest()
    {
        return $this->manifest;
    }

    /**
     * A set of Kubernetes resources (in YAML format) to be applied
     * to the cluster to be attached.
     *
     * Generated from protobuf field <code>string manifest = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setManifest($var)
    {
        GPBUtil::checkString($var, True);
        $this->manifest = $var;

        return $this;
    }

}

