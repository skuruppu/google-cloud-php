<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/grounded_generation_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Citation for the generated content.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata</code>
 */
class GroundingMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Retrieval metadata to provide an understanding in the
     * retrieval steps performed by the model. There can be multiple such
     * messages which can correspond to different parts of the retrieval. This
     * is a mechanism used to ensure transparency to our users.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata.RetrievalMetadata retrieval_metadata = 5;</code>
     */
    private $retrieval_metadata;
    /**
     * List of chunks to be attributed across all claims in the candidate.
     * These are derived from the grounding sources supplied in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.FactChunk support_chunks = 1;</code>
     */
    private $support_chunks;
    /**
     * Web search queries for the following-up web search.
     *
     * Generated from protobuf field <code>repeated string web_search_queries = 3;</code>
     */
    private $web_search_queries;
    /**
     * Google search entry for the following-up web searches.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata.SearchEntryPoint search_entry_point = 4;</code>
     */
    protected $search_entry_point = null;
    /**
     * GroundingSupport across all claims in the answer candidate.
     * An support to a fact indicates that the claim is supported by
     * the fact.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata.GroundingSupport grounding_support = 2;</code>
     */
    private $grounding_support;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\RetrievalMetadata>|\Google\Protobuf\Internal\RepeatedField $retrieval_metadata
     *           Retrieval metadata to provide an understanding in the
     *           retrieval steps performed by the model. There can be multiple such
     *           messages which can correspond to different parts of the retrieval. This
     *           is a mechanism used to ensure transparency to our users.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\FactChunk>|\Google\Protobuf\Internal\RepeatedField $support_chunks
     *           List of chunks to be attributed across all claims in the candidate.
     *           These are derived from the grounding sources supplied in the request.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $web_search_queries
     *           Web search queries for the following-up web search.
     *     @type \Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\SearchEntryPoint $search_entry_point
     *           Google search entry for the following-up web searches.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\GroundingSupport>|\Google\Protobuf\Internal\RepeatedField $grounding_support
     *           GroundingSupport across all claims in the answer candidate.
     *           An support to a fact indicates that the claim is supported by
     *           the fact.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\GroundedGenerationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Retrieval metadata to provide an understanding in the
     * retrieval steps performed by the model. There can be multiple such
     * messages which can correspond to different parts of the retrieval. This
     * is a mechanism used to ensure transparency to our users.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata.RetrievalMetadata retrieval_metadata = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRetrievalMetadata()
    {
        return $this->retrieval_metadata;
    }

    /**
     * Retrieval metadata to provide an understanding in the
     * retrieval steps performed by the model. There can be multiple such
     * messages which can correspond to different parts of the retrieval. This
     * is a mechanism used to ensure transparency to our users.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata.RetrievalMetadata retrieval_metadata = 5;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\RetrievalMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRetrievalMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\RetrievalMetadata::class);
        $this->retrieval_metadata = $arr;

        return $this;
    }

    /**
     * List of chunks to be attributed across all claims in the candidate.
     * These are derived from the grounding sources supplied in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.FactChunk support_chunks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportChunks()
    {
        return $this->support_chunks;
    }

    /**
     * List of chunks to be attributed across all claims in the candidate.
     * These are derived from the grounding sources supplied in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.FactChunk support_chunks = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\FactChunk>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportChunks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\FactChunk::class);
        $this->support_chunks = $arr;

        return $this;
    }

    /**
     * Web search queries for the following-up web search.
     *
     * Generated from protobuf field <code>repeated string web_search_queries = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWebSearchQueries()
    {
        return $this->web_search_queries;
    }

    /**
     * Web search queries for the following-up web search.
     *
     * Generated from protobuf field <code>repeated string web_search_queries = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWebSearchQueries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->web_search_queries = $arr;

        return $this;
    }

    /**
     * Google search entry for the following-up web searches.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata.SearchEntryPoint search_entry_point = 4;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\SearchEntryPoint|null
     */
    public function getSearchEntryPoint()
    {
        return $this->search_entry_point;
    }

    public function hasSearchEntryPoint()
    {
        return isset($this->search_entry_point);
    }

    public function clearSearchEntryPoint()
    {
        unset($this->search_entry_point);
    }

    /**
     * Google search entry for the following-up web searches.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata.SearchEntryPoint search_entry_point = 4;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\SearchEntryPoint $var
     * @return $this
     */
    public function setSearchEntryPoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\SearchEntryPoint::class);
        $this->search_entry_point = $var;

        return $this;
    }

    /**
     * GroundingSupport across all claims in the answer candidate.
     * An support to a fact indicates that the claim is supported by
     * the fact.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata.GroundingSupport grounding_support = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroundingSupport()
    {
        return $this->grounding_support;
    }

    /**
     * GroundingSupport across all claims in the answer candidate.
     * An support to a fact indicates that the claim is supported by
     * the fact.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GenerateGroundedContentResponse.Candidate.GroundingMetadata.GroundingSupport grounding_support = 2;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\GroundingSupport>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroundingSupport($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentResponse\Candidate\GroundingMetadata\GroundingSupport::class);
        $this->grounding_support = $arr;

        return $this;
    }

}


