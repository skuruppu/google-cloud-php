<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/v1/managed_kafka.proto

namespace Google\Cloud\ManagedKafka\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for ListTopics.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.v1.ListTopicsRequest</code>
 */
class ListTopicsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent cluster whose topics are to be listed. Structured like
     * `projects/{project}/locations/{location}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of topics to return. The service may return
     * fewer than this value. If unset or zero, all topics for the parent is
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListTopics` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListTopics` must match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent cluster whose topics are to be listed. Structured like
     *                       `projects/{project}/locations/{location}/clusters/{cluster}`. Please see
     *                       {@see ManagedKafkaClient::clusterName()} for help formatting this field.
     *
     * @return \Google\Cloud\ManagedKafka\V1\ListTopicsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent cluster whose topics are to be listed. Structured like
     *           `projects/{project}/locations/{location}/clusters/{cluster}`.
     *     @type int $page_size
     *           Optional. The maximum number of topics to return. The service may return
     *           fewer than this value. If unset or zero, all topics for the parent is
     *           returned.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListTopics` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListTopics` must match
     *           the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\V1\ManagedKafka::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent cluster whose topics are to be listed. Structured like
     * `projects/{project}/locations/{location}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent cluster whose topics are to be listed. Structured like
     * `projects/{project}/locations/{location}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of topics to return. The service may return
     * fewer than this value. If unset or zero, all topics for the parent is
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of topics to return. The service may return
     * fewer than this value. If unset or zero, all topics for the parent is
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A page token, received from a previous `ListTopics` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListTopics` must match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListTopics` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListTopics` must match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

