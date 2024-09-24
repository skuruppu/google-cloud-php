<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Content
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Openapi::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Tool::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        $pool->internalAddGeneratedFile(
            '
�0
(google/cloud/aiplatform/v1/content.protogoogle.cloud.aiplatform.v1(google/cloud/aiplatform/v1/openapi.proto%google/cloud/aiplatform/v1/tool.protogoogle/protobuf/duration.protogoogle/type/date.proto"R
Content
role (	B�A4
parts (2 .google.cloud.aiplatform.v1.PartB�A"�
Part
text (	B�AH <
inline_data (2 .google.cloud.aiplatform.v1.BlobB�AH >
	file_data (2$.google.cloud.aiplatform.v1.FileDataB�AH F
function_call (2(.google.cloud.aiplatform.v1.FunctionCallB�AH N
function_response (2,.google.cloud.aiplatform.v1.FunctionResponseB�AH H
video_metadata (2).google.cloud.aiplatform.v1.VideoMetadataB�AHB
dataB

metadata"1
Blob
	mime_type (	B�A
data (B�A"9
FileData
	mime_type (	B�A
file_uri (	B�A"y
VideoMetadata4
start_offset (2.google.protobuf.DurationB�A2

end_offset (2.google.protobuf.DurationB�A"�

GenerationConfig
temperature (B�AH �
top_p (B�AH�
top_k (B�AH�!
candidate_count (B�AH�#
max_output_tokens (B�AH�
stop_sequences (	B�A#
response_logprobs (B�AH�
logprobs (B�AH�"
presence_penalty (B�AH�#
frequency_penalty	 (B�AH�
seed (B�AH	�
response_mime_type (	B�AE
response_schema (2".google.cloud.aiplatform.v1.SchemaB�AH
�\\
routing_config (2:.google.cloud.aiplatform.v1.GenerationConfig.RoutingConfigB�AH��
RoutingConfig_
	auto_mode (2J.google.cloud.aiplatform.v1.GenerationConfig.RoutingConfig.AutoRoutingModeH c
manual_mode (2L.google.cloud.aiplatform.v1.GenerationConfig.RoutingConfig.ManualRoutingModeH �
AutoRoutingMode�
model_routing_preference (2a.google.cloud.aiplatform.v1.GenerationConfig.RoutingConfig.AutoRoutingMode.ModelRoutingPreferenceH �"`
ModelRoutingPreference
UNKNOWN 
PRIORITIZE_QUALITY
BALANCED
PRIORITIZE_COSTB
_model_routing_preference;
ManualRoutingMode

model_name (	H �B
_model_nameB
routing_configB
_temperatureB
_top_pB
_top_kB
_candidate_countB
_max_output_tokensB
_response_logprobsB
	_logprobsB
_presence_penaltyB
_frequency_penaltyB
_seedB
_response_schemaB
_routing_config"�
SafetySetting?
category (2(.google.cloud.aiplatform.v1.HarmCategoryB�AT
	threshold (2<.google.cloud.aiplatform.v1.SafetySetting.HarmBlockThresholdB�AN
method (29.google.cloud.aiplatform.v1.SafetySetting.HarmBlockMethodB�A"�
HarmBlockThreshold$
 HARM_BLOCK_THRESHOLD_UNSPECIFIED 
BLOCK_LOW_AND_ABOVE
BLOCK_MEDIUM_AND_ABOVE
BLOCK_ONLY_HIGH

BLOCK_NONE
OFF"S
HarmBlockMethod!
HARM_BLOCK_METHOD_UNSPECIFIED 
SEVERITY
PROBABILITY"�
SafetyRating?
category (2(.google.cloud.aiplatform.v1.HarmCategoryB�AR
probability (28.google.cloud.aiplatform.v1.SafetyRating.HarmProbabilityB�A
probability_score (B�AL
severity (25.google.cloud.aiplatform.v1.SafetyRating.HarmSeverityB�A
severity_score (B�A
blocked (B�A"b
HarmProbability 
HARM_PROBABILITY_UNSPECIFIED 

NEGLIGIBLE
LOW

MEDIUM
HIGH"�
HarmSeverity
HARM_SEVERITY_UNSPECIFIED 
HARM_SEVERITY_NEGLIGIBLE
HARM_SEVERITY_LOW
HARM_SEVERITY_MEDIUM
HARM_SEVERITY_HIGH"P
CitationMetadata<
	citations (2$.google.cloud.aiplatform.v1.CitationB�A"�
Citation
start_index (B�A
	end_index (B�A
uri (	B�A
title (	B�A
license (	B�A0
publication_date (2.google.type.DateB�A"�
	Candidate
index (B�A9
content (2#.google.cloud.aiplatform.v1.ContentB�A
score (B�A
avg_logprobs	 (B�AH
logprobs_result
 (2*.google.cloud.aiplatform.v1.LogprobsResultB�AN
finish_reason (22.google.cloud.aiplatform.v1.Candidate.FinishReasonB�AE
safety_ratings (2(.google.cloud.aiplatform.v1.SafetyRatingB�A 
finish_message (	B�AH �L
citation_metadata (2,.google.cloud.aiplatform.v1.CitationMetadataB�AN
grounding_metadata (2-.google.cloud.aiplatform.v1.GroundingMetadataB�A"�
FinishReason
FINISH_REASON_UNSPECIFIED 
STOP

MAX_TOKENS

SAFETY

RECITATION	
OTHER
	BLOCKLIST
PROHIBITED_CONTENT
SPII
MALFORMED_FUNCTION_CALL	B
_finish_message"�
LogprobsResultP
top_candidates (28.google.cloud.aiplatform.v1.LogprobsResult.TopCandidatesO
chosen_candidates (24.google.cloud.aiplatform.v1.LogprobsResult.Candidate
	Candidate
token (	H �
token_id (H�
log_probability (H�B
_tokenB
	_token_idB
_log_probabilityY
TopCandidatesH

candidates (24.google.cloud.aiplatform.v1.LogprobsResult.Candidate"g
Segment

part_index (B�A
start_index (B�A
	end_index (B�A
text (	B�A"�
GroundingChunk=
web (2..google.cloud.aiplatform.v1.GroundingChunk.WebH X
retrieved_context (2;.google.cloud.aiplatform.v1.GroundingChunk.RetrievedContextH =
Web
uri (	H �
title (	H�B
_uriB
_titleJ
RetrievedContext
uri (	H �
title (	H�B
_uriB
_titleB

chunk_type"�
GroundingSupport9
segment (2#.google.cloud.aiplatform.v1.SegmentH �
grounding_chunk_indices (
confidence_scores (B

_segment"�
GroundingMetadata
web_search_queries (	B�AR
search_entry_point (2,.google.cloud.aiplatform.v1.SearchEntryPointB�AH �D
grounding_chunks (2*.google.cloud.aiplatform.v1.GroundingChunkM
grounding_supports (2,.google.cloud.aiplatform.v1.GroundingSupportB�AB
_search_entry_point"H
SearchEntryPoint
rendered_content (	B�A
sdk_blob (B�A*�
HarmCategory
HARM_CATEGORY_UNSPECIFIED 
HARM_CATEGORY_HATE_SPEECH#
HARM_CATEGORY_DANGEROUS_CONTENT
HARM_CATEGORY_HARASSMENT#
HARM_CATEGORY_SEXUALLY_EXPLICIT!
HARM_CATEGORY_CIVIC_INTEGRITYB�
com.google.cloud.aiplatform.v1BContentProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

