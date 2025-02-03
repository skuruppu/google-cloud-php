<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/replication.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EstablishPeeringRequest establishes cluster and svm peerings between the
 * source and the destination replications.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.EstablishPeeringRequest</code>
 */
class EstablishPeeringRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the replication, in the format of
     * projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. Name of the user's local source cluster to be peered with the
     * destination cluster.
     *
     * Generated from protobuf field <code>string peer_cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $peer_cluster_name = '';
    /**
     * Required. Name of the user's local source vserver svm to be peered with the
     * destination vserver svm.
     *
     * Generated from protobuf field <code>string peer_svm_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $peer_svm_name = '';
    /**
     * Optional. List of IPv4 ip addresses to be used for peering.
     *
     * Generated from protobuf field <code>repeated string peer_ip_addresses = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $peer_ip_addresses;
    /**
     * Required. Name of the user's local source volume to be peered with the
     * destination volume.
     *
     * Generated from protobuf field <code>string peer_volume_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $peer_volume_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the replication, in the format of
     *           projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}.
     *     @type string $peer_cluster_name
     *           Required. Name of the user's local source cluster to be peered with the
     *           destination cluster.
     *     @type string $peer_svm_name
     *           Required. Name of the user's local source vserver svm to be peered with the
     *           destination vserver svm.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $peer_ip_addresses
     *           Optional. List of IPv4 ip addresses to be used for peering.
     *     @type string $peer_volume_name
     *           Required. Name of the user's local source volume to be peered with the
     *           destination volume.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Replication::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the replication, in the format of
     * projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the replication, in the format of
     * projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Name of the user's local source cluster to be peered with the
     * destination cluster.
     *
     * Generated from protobuf field <code>string peer_cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPeerClusterName()
    {
        return $this->peer_cluster_name;
    }

    /**
     * Required. Name of the user's local source cluster to be peered with the
     * destination cluster.
     *
     * Generated from protobuf field <code>string peer_cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPeerClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_cluster_name = $var;

        return $this;
    }

    /**
     * Required. Name of the user's local source vserver svm to be peered with the
     * destination vserver svm.
     *
     * Generated from protobuf field <code>string peer_svm_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPeerSvmName()
    {
        return $this->peer_svm_name;
    }

    /**
     * Required. Name of the user's local source vserver svm to be peered with the
     * destination vserver svm.
     *
     * Generated from protobuf field <code>string peer_svm_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPeerSvmName($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_svm_name = $var;

        return $this;
    }

    /**
     * Optional. List of IPv4 ip addresses to be used for peering.
     *
     * Generated from protobuf field <code>repeated string peer_ip_addresses = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeerIpAddresses()
    {
        return $this->peer_ip_addresses;
    }

    /**
     * Optional. List of IPv4 ip addresses to be used for peering.
     *
     * Generated from protobuf field <code>repeated string peer_ip_addresses = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeerIpAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->peer_ip_addresses = $arr;

        return $this;
    }

    /**
     * Required. Name of the user's local source volume to be peered with the
     * destination volume.
     *
     * Generated from protobuf field <code>string peer_volume_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPeerVolumeName()
    {
        return $this->peer_volume_name;
    }

    /**
     * Required. Name of the user's local source volume to be peered with the
     * destination volume.
     *
     * Generated from protobuf field <code>string peer_volume_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPeerVolumeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_volume_name = $var;

        return $this;
    }

}

