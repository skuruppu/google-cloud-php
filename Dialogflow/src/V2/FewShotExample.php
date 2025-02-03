<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/generator.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Providing examples in the generator (i.e. building a few-shot generator)
 * helps convey the desired format of the LLM response.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.FewShotExample</code>
 */
class FewShotExample extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Conversation transcripts.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ConversationContext conversation_context = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $conversation_context = null;
    /**
     * Optional. Key is the placeholder field name in input, value is the value of
     * the placeholder. E.g. instruction contains "&#64;price", and ingested data has
     * <"price", "10">
     *
     * Generated from protobuf field <code>map<string, string> extra_info = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $extra_info;
    /**
     * Required. Example output of the model.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GeneratorSuggestion output = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $output = null;
    protected $instruction_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\ConversationContext $conversation_context
     *           Optional. Conversation transcripts.
     *     @type array|\Google\Protobuf\Internal\MapField $extra_info
     *           Optional. Key is the placeholder field name in input, value is the value of
     *           the placeholder. E.g. instruction contains "&#64;price", and ingested data has
     *           <"price", "10">
     *     @type \Google\Cloud\Dialogflow\V2\SummarizationSectionList $summarization_section_list
     *           Summarization sections.
     *     @type \Google\Cloud\Dialogflow\V2\GeneratorSuggestion $output
     *           Required. Example output of the model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Generator::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Conversation transcripts.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ConversationContext conversation_context = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\ConversationContext|null
     */
    public function getConversationContext()
    {
        return $this->conversation_context;
    }

    public function hasConversationContext()
    {
        return isset($this->conversation_context);
    }

    public function clearConversationContext()
    {
        unset($this->conversation_context);
    }

    /**
     * Optional. Conversation transcripts.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ConversationContext conversation_context = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\ConversationContext $var
     * @return $this
     */
    public function setConversationContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\ConversationContext::class);
        $this->conversation_context = $var;

        return $this;
    }

    /**
     * Optional. Key is the placeholder field name in input, value is the value of
     * the placeholder. E.g. instruction contains "&#64;price", and ingested data has
     * <"price", "10">
     *
     * Generated from protobuf field <code>map<string, string> extra_info = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getExtraInfo()
    {
        return $this->extra_info;
    }

    /**
     * Optional. Key is the placeholder field name in input, value is the value of
     * the placeholder. E.g. instruction contains "&#64;price", and ingested data has
     * <"price", "10">
     *
     * Generated from protobuf field <code>map<string, string> extra_info = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setExtraInfo($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->extra_info = $arr;

        return $this;
    }

    /**
     * Summarization sections.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SummarizationSectionList summarization_section_list = 6;</code>
     * @return \Google\Cloud\Dialogflow\V2\SummarizationSectionList|null
     */
    public function getSummarizationSectionList()
    {
        return $this->readOneof(6);
    }

    public function hasSummarizationSectionList()
    {
        return $this->hasOneof(6);
    }

    /**
     * Summarization sections.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SummarizationSectionList summarization_section_list = 6;</code>
     * @param \Google\Cloud\Dialogflow\V2\SummarizationSectionList $var
     * @return $this
     */
    public function setSummarizationSectionList($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\SummarizationSectionList::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Required. Example output of the model.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GeneratorSuggestion output = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\GeneratorSuggestion|null
     */
    public function getOutput()
    {
        return $this->output;
    }

    public function hasOutput()
    {
        return isset($this->output);
    }

    public function clearOutput()
    {
        unset($this->output);
    }

    /**
     * Required. Example output of the model.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GeneratorSuggestion output = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\GeneratorSuggestion $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\GeneratorSuggestion::class);
        $this->output = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getInstructionList()
    {
        return $this->whichOneof("instruction_list");
    }

}

