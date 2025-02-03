<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_data.proto

namespace Google\Cloud\AIPlatform\V1\RagEmbeddingModelConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config representing a model hosted on Vertex Prediction Endpoint.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RagEmbeddingModelConfig.VertexPredictionEndpoint</code>
 */
class VertexPredictionEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The endpoint resource name.
     * Format:
     * `projects/{project}/locations/{location}/publishers/{publisher}/models/{model}`
     * or
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $endpoint = '';
    /**
     * Output only. The resource name of the model that is deployed on the
     * endpoint. Present only when the endpoint is not a publisher model.
     * Pattern:
     * `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string model = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $model = '';
    /**
     * Output only. Version ID of the model that is deployed on the endpoint.
     * Present only when the endpoint is not a publisher model.
     *
     * Generated from protobuf field <code>string model_version_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $model_version_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           Required. The endpoint resource name.
     *           Format:
     *           `projects/{project}/locations/{location}/publishers/{publisher}/models/{model}`
     *           or
     *           `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *     @type string $model
     *           Output only. The resource name of the model that is deployed on the
     *           endpoint. Present only when the endpoint is not a publisher model.
     *           Pattern:
     *           `projects/{project}/locations/{location}/models/{model}`
     *     @type string $model_version_id
     *           Output only. Version ID of the model that is deployed on the endpoint.
     *           Present only when the endpoint is not a publisher model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagData::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The endpoint resource name.
     * Format:
     * `projects/{project}/locations/{location}/publishers/{publisher}/models/{model}`
     * or
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Required. The endpoint resource name.
     * Format:
     * `projects/{project}/locations/{location}/publishers/{publisher}/models/{model}`
     * or
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the model that is deployed on the
     * endpoint. Present only when the endpoint is not a publisher model.
     * Pattern:
     * `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string model = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Output only. The resource name of the model that is deployed on the
     * endpoint. Present only when the endpoint is not a publisher model.
     * Pattern:
     * `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string model = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Version ID of the model that is deployed on the endpoint.
     * Present only when the endpoint is not a publisher model.
     *
     * Generated from protobuf field <code>string model_version_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getModelVersionId()
    {
        return $this->model_version_id;
    }

    /**
     * Output only. Version ID of the model that is deployed on the endpoint.
     * Present only when the endpoint is not a publisher model.
     *
     * Generated from protobuf field <code>string model_version_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version_id = $var;

        return $this;
    }

}


