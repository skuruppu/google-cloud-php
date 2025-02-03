<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_data.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for the embedding model to use for RAG.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RagEmbeddingModelConfig</code>
 */
class RagEmbeddingModelConfig extends \Google\Protobuf\Internal\Message
{
    protected $model_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\RagEmbeddingModelConfig\VertexPredictionEndpoint $vertex_prediction_endpoint
     *           The Vertex AI Prediction Endpoint that either refers to a publisher model
     *           or an endpoint that is hosting a 1P fine-tuned text embedding model.
     *           Endpoints hosting non-1P fine-tuned text embedding models are
     *           currently not supported.
     *           This is used for dense vector search.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagData::initOnce();
        parent::__construct($data);
    }

    /**
     * The Vertex AI Prediction Endpoint that either refers to a publisher model
     * or an endpoint that is hosting a 1P fine-tuned text embedding model.
     * Endpoints hosting non-1P fine-tuned text embedding models are
     * currently not supported.
     * This is used for dense vector search.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RagEmbeddingModelConfig.VertexPredictionEndpoint vertex_prediction_endpoint = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\RagEmbeddingModelConfig\VertexPredictionEndpoint|null
     */
    public function getVertexPredictionEndpoint()
    {
        return $this->readOneof(1);
    }

    public function hasVertexPredictionEndpoint()
    {
        return $this->hasOneof(1);
    }

    /**
     * The Vertex AI Prediction Endpoint that either refers to a publisher model
     * or an endpoint that is hosting a 1P fine-tuned text embedding model.
     * Endpoints hosting non-1P fine-tuned text embedding models are
     * currently not supported.
     * This is used for dense vector search.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RagEmbeddingModelConfig.VertexPredictionEndpoint vertex_prediction_endpoint = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\RagEmbeddingModelConfig\VertexPredictionEndpoint $var
     * @return $this
     */
    public function setVertexPredictionEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\RagEmbeddingModelConfig\VertexPredictionEndpoint::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getModelConfig()
    {
        return $this->whichOneof("model_config");
    }

}

