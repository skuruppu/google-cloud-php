<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One field of a Struct (or object) type feature value.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StructFieldValue</code>
 */
class StructFieldValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the field in the struct feature.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The value for this field.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue value = 2;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the field in the struct feature.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureValue $value
     *           The value for this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreOnlineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the field in the struct feature.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the field in the struct feature.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The value for this field.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue value = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureValue|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * The value for this field.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue value = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureValue::class);
        $this->value = $var;

        return $this;
    }

}

