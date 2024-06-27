<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `AzureClusters.ListAzureNodePools` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.ListAzureNodePoolsResponse</code>
 */
class ListAzureNodePoolsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]
     * resources in the specified `AzureCluster`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureNodePool azure_node_pools = 1;</code>
     */
    private $azure_node_pools;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\GkeMultiCloud\V1\AzureNodePool>|\Google\Protobuf\Internal\RepeatedField $azure_node_pools
     *           A list of [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]
     *           resources in the specified `AzureCluster`.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]
     * resources in the specified `AzureCluster`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureNodePool azure_node_pools = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAzureNodePools()
    {
        return $this->azure_node_pools;
    }

    /**
     * A list of [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]
     * resources in the specified `AzureCluster`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureNodePool azure_node_pools = 1;</code>
     * @param array<\Google\Cloud\GkeMultiCloud\V1\AzureNodePool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAzureNodePools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeMultiCloud\V1\AzureNodePool::class);
        $this->azure_node_pools = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

