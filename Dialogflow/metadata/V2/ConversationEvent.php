<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_event.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class ConversationEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/dialogflow/v2/conversation_event.protogoogle.cloud.dialogflow.v2(google/cloud/dialogflow/v2/session.protogoogle/rpc/status.proto"�
ConversationEvent
conversation (	@
type (22.google.cloud.dialogflow.v2.ConversationEvent.Type(
error_status (2.google.rpc.StatusB
new_message_payload (2#.google.cloud.dialogflow.v2.MessageH `
new_recognition_result_payload (26.google.cloud.dialogflow.v2.StreamingRecognitionResultH "�
Type
TYPE_UNSPECIFIED 
CONVERSATION_STARTED
CONVERSATION_FINISHED
HUMAN_INTERVENTION_NEEDED
NEW_MESSAGE
NEW_RECOGNITION_RESULT
UNRECOVERABLE_ERRORB	
payloadB�
com.google.cloud.dialogflow.v2BConversationEventProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb�DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

