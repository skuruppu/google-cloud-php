<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/common_resources.proto

namespace GPBMetadata\Google\Cloud\Gkemulticloud\V1;

class CommonResources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/gkemulticloud/v1/common_resources.protogoogle.cloud.gkemulticloud.v1google/protobuf/timestamp.proto"r
Jwk
kty (	
alg (	
use (	
kid (		
n (		
e (		
x (		
y (	
crv	 (	"^
WorkloadIdentityConfig

issuer_uri (	
workload_pool (	
identity_provider (	"3
MaxPodsConstraint
max_pods_per_node (B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
status_detail (	B�A
error_detail (	B�A
verb (	B�A#
requested_cancellation (B�A"�
	NodeTaint
key (	B�A
value (	B�AD
effect (2/.google.cloud.gkemulticloud.v1.NodeTaint.EffectB�A"Y
Effect
EFFECT_UNSPECIFIED 
NO_SCHEDULE
PREFER_NO_SCHEDULE

NO_EXECUTE"�
NodeKubeletConfig3
&insecure_kubelet_readonly_port_enabled (B�A$
cpu_manager_policy (	B�AH �
cpu_cfs_quota (B�AH�&
cpu_cfs_quota_period (	B�AH� 
pod_pids_limit (B�AH�B
_cpu_manager_policyB
_cpu_cfs_quotaB
_cpu_cfs_quota_periodB
_pod_pids_limit"6
Fleet
project (	B�A

membership (	B�A"`
LoggingConfigO
component_config (25.google.cloud.gkemulticloud.v1.LoggingComponentConfig"�
LoggingComponentConfigZ
enable_components (2?.google.cloud.gkemulticloud.v1.LoggingComponentConfig.Component"L
	Component
COMPONENT_UNSPECIFIED 
SYSTEM_COMPONENTS
	WORKLOADS"�
MonitoringConfigY
managed_prometheus_config (26.google.cloud.gkemulticloud.v1.ManagedPrometheusConfigU
cloud_monitoring_config (24.google.cloud.gkemulticloud.v1.CloudMonitoringConfig"*
ManagedPrometheusConfig
enabled ("9
CloudMonitoringConfig
enabled (H �B

_enabled"�
BinaryAuthorizationZ
evaluation_mode (2A.google.cloud.gkemulticloud.v1.BinaryAuthorization.EvaluationMode"e
EvaluationMode
EVALUATION_MODE_UNSPECIFIED 
DISABLED$
 PROJECT_SINGLETON_POLICY_ENFORCE"�
SecurityPostureConfigb
vulnerability_mode (2F.google.cloud.gkemulticloud.v1.SecurityPostureConfig.VulnerabilityMode"q
VulnerabilityMode"
VULNERABILITY_MODE_UNSPECIFIED 
VULNERABILITY_DISABLED
VULNERABILITY_ENTERPRISEB�
!com.google.cloud.gkemulticloud.v1BCommonResourcesProtoPZGcloud.google.com/go/gkemulticloud/apiv1/gkemulticloudpb;gkemulticloudpb�Google.Cloud.GkeMultiCloud.V1�Google\\Cloud\\GkeMultiCloud\\V1� Google::Cloud::GkeMultiCloud::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

