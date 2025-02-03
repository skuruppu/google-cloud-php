<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2\SuggestConversationSummaryResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated summary for a conversation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SuggestConversationSummaryResponse.Summary</code>
 */
class Summary extends \Google\Protobuf\Internal\Message
{
    /**
     * The summary content that is concatenated into one string.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';
    /**
     * The summary content that is divided into sections. The key is the
     * section's name and the value is the section's content. There is no
     * specific format for the key or value.
     *
     * Generated from protobuf field <code>map<string, string> text_sections = 4;</code>
     */
    private $text_sections;
    /**
     * The name of the answer record. Format:
     * "projects/<Project ID>/answerRecords/<Answer Record ID>"
     *
     * Generated from protobuf field <code>string answer_record = 3 [(.google.api.resource_reference) = {</code>
     */
    protected $answer_record = '';
    /**
     * The baseline model version used to generate this summary. It is empty if
     * a baseline model was not used to generate this summary.
     *
     * Generated from protobuf field <code>string baseline_model_version = 5;</code>
     */
    protected $baseline_model_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           The summary content that is concatenated into one string.
     *     @type array|\Google\Protobuf\Internal\MapField $text_sections
     *           The summary content that is divided into sections. The key is the
     *           section's name and the value is the section's content. There is no
     *           specific format for the key or value.
     *     @type string $answer_record
     *           The name of the answer record. Format:
     *           "projects/<Project ID>/answerRecords/<Answer Record ID>"
     *     @type string $baseline_model_version
     *           The baseline model version used to generate this summary. It is empty if
     *           a baseline model was not used to generate this summary.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * The summary content that is concatenated into one string.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The summary content that is concatenated into one string.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * The summary content that is divided into sections. The key is the
     * section's name and the value is the section's content. There is no
     * specific format for the key or value.
     *
     * Generated from protobuf field <code>map<string, string> text_sections = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTextSections()
    {
        return $this->text_sections;
    }

    /**
     * The summary content that is divided into sections. The key is the
     * section's name and the value is the section's content. There is no
     * specific format for the key or value.
     *
     * Generated from protobuf field <code>map<string, string> text_sections = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTextSections($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->text_sections = $arr;

        return $this;
    }

    /**
     * The name of the answer record. Format:
     * "projects/<Project ID>/answerRecords/<Answer Record ID>"
     *
     * Generated from protobuf field <code>string answer_record = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAnswerRecord()
    {
        return $this->answer_record;
    }

    /**
     * The name of the answer record. Format:
     * "projects/<Project ID>/answerRecords/<Answer Record ID>"
     *
     * Generated from protobuf field <code>string answer_record = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerRecord($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_record = $var;

        return $this;
    }

    /**
     * The baseline model version used to generate this summary. It is empty if
     * a baseline model was not used to generate this summary.
     *
     * Generated from protobuf field <code>string baseline_model_version = 5;</code>
     * @return string
     */
    public function getBaselineModelVersion()
    {
        return $this->baseline_model_version;
    }

    /**
     * The baseline model version used to generate this summary. It is empty if
     * a baseline model was not used to generate this summary.
     *
     * Generated from protobuf field <code>string baseline_model_version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBaselineModelVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->baseline_model_version = $var;

        return $this;
    }

}


