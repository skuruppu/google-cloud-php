<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/generator.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the section of summarization.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SummarizationSection</code>
 */
class SummarizationSection extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the section, for example, "situation".
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $key = '';
    /**
     * Optional. Definition of the section, for example, "what the customer needs
     * help with or has question about."
     *
     * Generated from protobuf field <code>string definition = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $definition = '';
    /**
     * Optional. Type of the summarization section.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SummarizationSection.Type type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           Optional. Name of the section, for example, "situation".
     *     @type string $definition
     *           Optional. Definition of the section, for example, "what the customer needs
     *           help with or has question about."
     *     @type int $type
     *           Optional. Type of the summarization section.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Generator::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the section, for example, "situation".
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Optional. Name of the section, for example, "situation".
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Optional. Definition of the section, for example, "what the customer needs
     * help with or has question about."
     *
     * Generated from protobuf field <code>string definition = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Optional. Definition of the section, for example, "what the customer needs
     * help with or has question about."
     *
     * Generated from protobuf field <code>string definition = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->definition = $var;

        return $this;
    }

    /**
     * Optional. Type of the summarization section.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SummarizationSection.Type type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. Type of the summarization section.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SummarizationSection.Type type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\SummarizationSection\Type::class);
        $this->type = $var;

        return $this;
    }

}

