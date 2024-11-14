<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2\SearchKnowledgeRequest\SearchConfig\BoostSpecs\BoostSpec\ConditionBoostSpec\BoostControlSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The control points used to define the curve. The curve defined
 * through these control points can only be monotonically increasing
 * or decreasing(constant values are acceptable).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SearchKnowledgeRequest.SearchConfig.BoostSpecs.BoostSpec.ConditionBoostSpec.BoostControlSpec.ControlPoint</code>
 */
class ControlPoint extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

}


