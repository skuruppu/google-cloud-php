<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PredictionService.GenerateContent].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GenerateContentRequest</code>
 */
class GenerateContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The fully qualified name of the publisher model or tuned model
     * endpoint to use.
     * Publisher model format:
     * `projects/{project}/locations/{location}/publishers/&#42;&#47;models/&#42;`
     * Tuned model endpoint format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string model = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $model = '';
    /**
     * Required. The content of the current conversation with the model.
     * For single-turn queries, this is a single instance. For multi-turn queries,
     * this is a repeated field that contains conversation history + latest
     * request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Content contents = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $contents;
    /**
     * Optional. The user provided system instructions for the model.
     * Note: only text should be used in parts and content in each part will be in
     * a separate paragraph.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Content system_instruction = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $system_instruction = null;
    /**
     * Optional. The name of the cached content used as context to serve the
     * prediction. Note: only used in explicit caching, where users can have
     * control over caching (e.g. what content to cache) and enjoy guaranteed cost
     * savings. Format:
     * `projects/{project}/locations/{location}/cachedContents/{cachedContent}`
     *
     * Generated from protobuf field <code>string cached_content = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $cached_content = '';
    /**
     * Optional. A list of `Tools` the model may use to generate the next
     * response.
     * A `Tool` is a piece of code that enables the system to interact with
     * external systems to perform an action, or set of actions, outside of
     * knowledge and scope of the model.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tool tools = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tools;
    /**
     * Optional. Tool config. This config is shared for all tools provided in the
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ToolConfig tool_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $tool_config = null;
    /**
     * Optional. The labels with user-defined metadata for the request. It is used
     * for billing and reporting only.
     * Label keys and values can be no longer than 63 characters
     * (Unicode codepoints) and can only contain lowercase letters, numeric
     * characters, underscores, and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Per request settings for blocking unsafe content.
     * Enforced on GenerateContentResponse.candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SafetySetting safety_settings = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $safety_settings;
    /**
     * Optional. Generation config.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerationConfig generation_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $generation_config = null;

    /**
     * @param string                                $model    Required. The fully qualified name of the publisher model or tuned model
     *                                                        endpoint to use.
     *
     *                                                        Publisher model format:
     *                                                        `projects/{project}/locations/{location}/publishers/&#42;/models/*`
     *
     *                                                        Tuned model endpoint format:
     *                                                        `projects/{project}/locations/{location}/endpoints/{endpoint}`
     * @param \Google\Cloud\AIPlatform\V1\Content[] $contents Required. The content of the current conversation with the model.
     *
     *                                                        For single-turn queries, this is a single instance. For multi-turn queries,
     *                                                        this is a repeated field that contains conversation history + latest
     *                                                        request.
     *
     * @return \Google\Cloud\AIPlatform\V1\GenerateContentRequest
     *
     * @experimental
     */
    public static function build(string $model, array $contents): self
    {
        return (new self())
            ->setModel($model)
            ->setContents($contents);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $model
     *           Required. The fully qualified name of the publisher model or tuned model
     *           endpoint to use.
     *           Publisher model format:
     *           `projects/{project}/locations/{location}/publishers/&#42;&#47;models/&#42;`
     *           Tuned model endpoint format:
     *           `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *     @type array<\Google\Cloud\AIPlatform\V1\Content>|\Google\Protobuf\Internal\RepeatedField $contents
     *           Required. The content of the current conversation with the model.
     *           For single-turn queries, this is a single instance. For multi-turn queries,
     *           this is a repeated field that contains conversation history + latest
     *           request.
     *     @type \Google\Cloud\AIPlatform\V1\Content $system_instruction
     *           Optional. The user provided system instructions for the model.
     *           Note: only text should be used in parts and content in each part will be in
     *           a separate paragraph.
     *     @type string $cached_content
     *           Optional. The name of the cached content used as context to serve the
     *           prediction. Note: only used in explicit caching, where users can have
     *           control over caching (e.g. what content to cache) and enjoy guaranteed cost
     *           savings. Format:
     *           `projects/{project}/locations/{location}/cachedContents/{cachedContent}`
     *     @type array<\Google\Cloud\AIPlatform\V1\Tool>|\Google\Protobuf\Internal\RepeatedField $tools
     *           Optional. A list of `Tools` the model may use to generate the next
     *           response.
     *           A `Tool` is a piece of code that enables the system to interact with
     *           external systems to perform an action, or set of actions, outside of
     *           knowledge and scope of the model.
     *     @type \Google\Cloud\AIPlatform\V1\ToolConfig $tool_config
     *           Optional. Tool config. This config is shared for all tools provided in the
     *           request.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata for the request. It is used
     *           for billing and reporting only.
     *           Label keys and values can be no longer than 63 characters
     *           (Unicode codepoints) and can only contain lowercase letters, numeric
     *           characters, underscores, and dashes. International characters are allowed.
     *           Label values are optional. Label keys must start with a letter.
     *     @type array<\Google\Cloud\AIPlatform\V1\SafetySetting>|\Google\Protobuf\Internal\RepeatedField $safety_settings
     *           Optional. Per request settings for blocking unsafe content.
     *           Enforced on GenerateContentResponse.candidates.
     *     @type \Google\Cloud\AIPlatform\V1\GenerationConfig $generation_config
     *           Optional. Generation config.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The fully qualified name of the publisher model or tuned model
     * endpoint to use.
     * Publisher model format:
     * `projects/{project}/locations/{location}/publishers/&#42;&#47;models/&#42;`
     * Tuned model endpoint format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string model = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Required. The fully qualified name of the publisher model or tuned model
     * endpoint to use.
     * Publisher model format:
     * `projects/{project}/locations/{location}/publishers/&#42;&#47;models/&#42;`
     * Tuned model endpoint format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string model = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Required. The content of the current conversation with the model.
     * For single-turn queries, this is a single instance. For multi-turn queries,
     * this is a repeated field that contains conversation history + latest
     * request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Content contents = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Required. The content of the current conversation with the model.
     * For single-turn queries, this is a single instance. For multi-turn queries,
     * this is a repeated field that contains conversation history + latest
     * request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Content contents = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Content>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Content::class);
        $this->contents = $arr;

        return $this;
    }

    /**
     * Optional. The user provided system instructions for the model.
     * Note: only text should be used in parts and content in each part will be in
     * a separate paragraph.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Content system_instruction = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\Content|null
     */
    public function getSystemInstruction()
    {
        return $this->system_instruction;
    }

    public function hasSystemInstruction()
    {
        return isset($this->system_instruction);
    }

    public function clearSystemInstruction()
    {
        unset($this->system_instruction);
    }

    /**
     * Optional. The user provided system instructions for the model.
     * Note: only text should be used in parts and content in each part will be in
     * a separate paragraph.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Content system_instruction = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\Content $var
     * @return $this
     */
    public function setSystemInstruction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Content::class);
        $this->system_instruction = $var;

        return $this;
    }

    /**
     * Optional. The name of the cached content used as context to serve the
     * prediction. Note: only used in explicit caching, where users can have
     * control over caching (e.g. what content to cache) and enjoy guaranteed cost
     * savings. Format:
     * `projects/{project}/locations/{location}/cachedContents/{cachedContent}`
     *
     * Generated from protobuf field <code>string cached_content = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCachedContent()
    {
        return $this->cached_content;
    }

    /**
     * Optional. The name of the cached content used as context to serve the
     * prediction. Note: only used in explicit caching, where users can have
     * control over caching (e.g. what content to cache) and enjoy guaranteed cost
     * savings. Format:
     * `projects/{project}/locations/{location}/cachedContents/{cachedContent}`
     *
     * Generated from protobuf field <code>string cached_content = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCachedContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->cached_content = $var;

        return $this;
    }

    /**
     * Optional. A list of `Tools` the model may use to generate the next
     * response.
     * A `Tool` is a piece of code that enables the system to interact with
     * external systems to perform an action, or set of actions, outside of
     * knowledge and scope of the model.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tool tools = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * Optional. A list of `Tools` the model may use to generate the next
     * response.
     * A `Tool` is a piece of code that enables the system to interact with
     * external systems to perform an action, or set of actions, outside of
     * knowledge and scope of the model.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tool tools = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Tool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Tool::class);
        $this->tools = $arr;

        return $this;
    }

    /**
     * Optional. Tool config. This config is shared for all tools provided in the
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ToolConfig tool_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\ToolConfig|null
     */
    public function getToolConfig()
    {
        return $this->tool_config;
    }

    public function hasToolConfig()
    {
        return isset($this->tool_config);
    }

    public function clearToolConfig()
    {
        unset($this->tool_config);
    }

    /**
     * Optional. Tool config. This config is shared for all tools provided in the
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ToolConfig tool_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\ToolConfig $var
     * @return $this
     */
    public function setToolConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ToolConfig::class);
        $this->tool_config = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata for the request. It is used
     * for billing and reporting only.
     * Label keys and values can be no longer than 63 characters
     * (Unicode codepoints) and can only contain lowercase letters, numeric
     * characters, underscores, and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata for the request. It is used
     * for billing and reporting only.
     * Label keys and values can be no longer than 63 characters
     * (Unicode codepoints) and can only contain lowercase letters, numeric
     * characters, underscores, and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Per request settings for blocking unsafe content.
     * Enforced on GenerateContentResponse.candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SafetySetting safety_settings = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSafetySettings()
    {
        return $this->safety_settings;
    }

    /**
     * Optional. Per request settings for blocking unsafe content.
     * Enforced on GenerateContentResponse.candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SafetySetting safety_settings = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\SafetySetting>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSafetySettings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\SafetySetting::class);
        $this->safety_settings = $arr;

        return $this;
    }

    /**
     * Optional. Generation config.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerationConfig generation_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\GenerationConfig|null
     */
    public function getGenerationConfig()
    {
        return $this->generation_config;
    }

    public function hasGenerationConfig()
    {
        return isset($this->generation_config);
    }

    public function clearGenerationConfig()
    {
        unset($this->generation_config);
    }

    /**
     * Optional. Generation config.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerationConfig generation_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\GenerationConfig $var
     * @return $this
     */
    public function setGenerationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GenerationConfig::class);
        $this->generation_config = $var;

        return $this;
    }

}

