<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/reasoning_engine_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ReasoningEngineService.CreateReasoningEngine][google.cloud.aiplatform.v1.ReasoningEngineService.CreateReasoningEngine].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateReasoningEngineRequest</code>
 */
class CreateReasoningEngineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the ReasoningEngine
     * in. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ReasoningEngine to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ReasoningEngine reasoning_engine = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $reasoning_engine = null;

    /**
     * @param string                                      $parent          Required. The resource name of the Location to create the ReasoningEngine
     *                                                                     in. Format: `projects/{project}/locations/{location}`
     *                                                                     Please see {@see ReasoningEngineServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\ReasoningEngine $reasoningEngine Required. The ReasoningEngine to create.
     *
     * @return \Google\Cloud\AIPlatform\V1\CreateReasoningEngineRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\ReasoningEngine $reasoningEngine): self
    {
        return (new self())
            ->setParent($parent)
            ->setReasoningEngine($reasoningEngine);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the ReasoningEngine
     *           in. Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\ReasoningEngine $reasoning_engine
     *           Required. The ReasoningEngine to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ReasoningEngineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the ReasoningEngine
     * in. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to create the ReasoningEngine
     * in. Format: `projects/{project}/locations/{location}`
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
     * Required. The ReasoningEngine to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ReasoningEngine reasoning_engine = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\ReasoningEngine|null
     */
    public function getReasoningEngine()
    {
        return $this->reasoning_engine;
    }

    public function hasReasoningEngine()
    {
        return isset($this->reasoning_engine);
    }

    public function clearReasoningEngine()
    {
        unset($this->reasoning_engine);
    }

    /**
     * Required. The ReasoningEngine to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ReasoningEngine reasoning_engine = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\ReasoningEngine $var
     * @return $this
     */
    public function setReasoningEngine($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ReasoningEngine::class);
        $this->reasoning_engine = $var;

        return $this;
    }

}

