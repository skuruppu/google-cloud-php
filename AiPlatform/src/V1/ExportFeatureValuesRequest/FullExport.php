<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1\ExportFeatureValuesRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes exporting all historical Feature values of all entities of the
 * EntityType between [start_time, end_time].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExportFeatureValuesRequest.FullExport</code>
 */
class FullExport extends \Google\Protobuf\Internal\Message
{
    /**
     * Excludes Feature values with feature generation timestamp before this
     * timestamp. If not set, retrieve oldest values kept in Feature Store.
     * Timestamp, if present, must not have higher than millisecond precision.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    protected $start_time = null;
    /**
     * Exports Feature values as of this timestamp. If not set,
     * retrieve values as of now. Timestamp, if present, must not have higher
     * than millisecond precision.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 1;</code>
     */
    protected $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Excludes Feature values with feature generation timestamp before this
     *           timestamp. If not set, retrieve oldest values kept in Feature Store.
     *           Timestamp, if present, must not have higher than millisecond precision.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Exports Feature values as of this timestamp. If not set,
     *           retrieve values as of now. Timestamp, if present, must not have higher
     *           than millisecond precision.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Excludes Feature values with feature generation timestamp before this
     * timestamp. If not set, retrieve oldest values kept in Feature Store.
     * Timestamp, if present, must not have higher than millisecond precision.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Excludes Feature values with feature generation timestamp before this
     * timestamp. If not set, retrieve oldest values kept in Feature Store.
     * Timestamp, if present, must not have higher than millisecond precision.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Exports Feature values as of this timestamp. If not set,
     * retrieve values as of now. Timestamp, if present, must not have higher
     * than millisecond precision.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Exports Feature values as of this timestamp. If not set,
     * retrieve values as of now. Timestamp, if present, must not have higher
     * than millisecond precision.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}


