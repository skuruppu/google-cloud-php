<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/revision_template.proto

namespace GPBMetadata\Google\Cloud\Run\V2;

class RevisionTemplate
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\VendorSettings::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/run/v2/revision_template.protogoogle.cloud.run.v2google/api/resource.proto!google/cloud/run/v2/k8s.min.proto)google/cloud/run/v2/vendor_settings.protogoogle/protobuf/duration.proto"�	
RevisionTemplate5
revision (	B#�A�A
run.googleapis.com/RevisionF
labels (21.google.cloud.run.v2.RevisionTemplate.LabelsEntryB�AP
annotations (26.google.cloud.run.v2.RevisionTemplate.AnnotationsEntryB�A:
scaling (2$.google.cloud.run.v2.RevisionScalingB�A7

vpc_access (2.google.cloud.run.v2.VpcAccessB�A/
timeout (2.google.protobuf.DurationB�A
service_account	 (	B�A2

containers
 (2.google.cloud.run.v2.Container1
volumes (2.google.cloud.run.v2.VolumeB�AM
execution_environment (2).google.cloud.run.v2.ExecutionEnvironmentB�A>
encryption_key (	B&�A#
!cloudkms.googleapis.com/CryptoKey-
 max_instance_request_concurrency (B�A;
service_mesh (2 .google.cloud.run.v2.ServiceMeshB�Aa
 encryption_key_revocation_action (22.google.cloud.run.v2.EncryptionKeyRevocationActionB�AH
 encryption_key_shutdown_duration (2.google.protobuf.DurationB�A
session_affinity (B�A"
health_check_disabled (B�A=
node_selector (2!.google.cloud.run.v2.NodeSelectorB�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8B]
com.google.cloud.run.v2BRevisionTemplateProtoPZ)cloud.google.com/go/run/apiv2/runpb;runpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

