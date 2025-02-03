<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/intent.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Intents.GetIntent][google.cloud.dialogflow.cx.v3.Intents.GetIntent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.GetIntentRequest</code>
 */
class GetIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the intent.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/intents/<IntentID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The language to retrieve the intent for. The following fields are language
     * dependent:
     * *   `Intent.training_phrases.parts.text`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     */
    protected $language_code = '';

    /**
     * @param string $name Required. The name of the intent.
     *                     Format:
     *                     `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/intents/<IntentID>`. Please see
     *                     {@see IntentsClient::intentName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\GetIntentRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the intent.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/intents/<IntentID>`.
     *     @type string $language_code
     *           The language to retrieve the intent for. The following fields are language
     *           dependent:
     *           *   `Intent.training_phrases.parts.text`
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the intent.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/intents/<IntentID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the intent.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/intents/<IntentID>`.
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
     * The language to retrieve the intent for. The following fields are language
     * dependent:
     * *   `Intent.training_phrases.parts.text`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The language to retrieve the intent for. The following fields are language
     * dependent:
     * *   `Intent.training_phrases.parts.text`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

