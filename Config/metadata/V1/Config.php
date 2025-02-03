<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace GPBMetadata\Google\Cloud\Config\V1;

class Config
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/cloud/config/v1/config.protogoogle.cloud.config.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/field_info.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�

DeploymentI
terraform_blueprint (2*.google.cloud.config.v1.TerraformBlueprintH 
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A>
labels (2..google.cloud.config.v1.Deployment.LabelsEntry<
state (2(.google.cloud.config.v1.Deployment.StateB�A
latest_revision (	B�A
state_detail	 (	B�AE

error_code
 (2,.google.cloud.config.v1.Deployment.ErrorCodeB�AA
delete_results (2$.google.cloud.config.v1.ApplyResultsB�A
delete_build (	B�A
delete_logs (	B�A>
	tf_errors (2&.google.cloud.config.v1.TerraformErrorB�A

error_logs (	B�A&
artifacts_gcs_bucket (	B�AH�G
service_account (	B)�A�A#
!iam.googleapis.com/ServiceAccountH�&
import_existing_resources (H�F
worker_pool (	B,�A�A&
$cloudbuild.googleapis.com/WorkerPoolH�E

lock_state (2,.google.cloud.config.v1.Deployment.LockStateB�A\'
tf_version_constraint (	B�AH�

tf_version (	B�AF
quota_validation (2\'.google.cloud.config.v1.QuotaValidationB�AM
annotations (23.google.cloud.config.v1.Deployment.AnnotationsEntryB�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"|
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
UPDATING
DELETING

FAILED
	SUSPENDED
DELETED"�
	ErrorCode
ERROR_CODE_UNSPECIFIED 
REVISION_FAILED!
CLOUD_BUILD_PERMISSION_DENIED
DELETE_BUILD_API_FAILED
DELETE_BUILD_RUN_FAILED%
!BUCKET_CREATION_PERMISSION_DENIED
BUCKET_CREATION_FAILED"�
	LockState
LOCK_STATE_UNSPECIFIED 

LOCKED
UNLOCKED
LOCKING
	UNLOCKING
LOCK_FAILED
UNLOCK_FAILED:g�Ad
 config.googleapis.com/Deployment@projects/{project}/locations/{location}/deployments/{deployment}B
	blueprintB
_artifacts_gcs_bucketB
_service_accountB
_import_existing_resourcesB
_worker_poolB
_tf_version_constraint"�
TerraformBlueprint

gcs_source (	H 7

git_source (2!.google.cloud.config.v1.GitSourceH Q
input_values (2;.google.cloud.config.v1.TerraformBlueprint.InputValuesEntry]
InputValuesEntry
key (	8
value (2).google.cloud.config.v1.TerraformVariable:8B
source"@
TerraformVariable+
input_value (2.google.protobuf.Value"�
ApplyResults
content (	
	artifacts (	B
outputs (21.google.cloud.config.v1.ApplyResults.OutputsEntryW
OutputsEntry
key (	6
value (2\'.google.cloud.config.v1.TerraformOutput:8"K
TerraformOutput
	sensitive (%
value (2.google.protobuf.Value"�
ListDeploymentsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListDeploymentsResponse7
deployments (2".google.cloud.config.v1.Deployment
next_page_token (	
unreachable (	"N
GetDeploymentRequest6
name (	B(�A�A"
 config.googleapis.com/Deployment"�
ListRevisionsRequest8
parent (	B(�A�A"
 config.googleapis.com/Deployment
	page_size (

page_token (	
filter (	
order_by (	"z
ListRevisionsResponse3
	revisions (2 .google.cloud.config.v1.Revision
next_page_token (	
unreachable (	"J
GetRevisionRequest4
name (	B&�A�A 
config.googleapis.com/Revision"�
CreateDeploymentRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
deployment_id (	B�A;

deployment (2".google.cloud.config.v1.DeploymentB�A

request_id (	B�A"�
UpdateDeploymentRequest4
update_mask (2.google.protobuf.FieldMaskB�A;

deployment (2".google.cloud.config.v1.DeploymentB�A

request_id (	B�A"�
DeleteDeploymentRequest6
name (	B(�A�A"
 config.googleapis.com/Deployment

request_id (	B�A
force (B�AX
delete_policy (2<.google.cloud.config.v1.DeleteDeploymentRequest.DeletePolicyB�A"F
DeletePolicy
DELETE_POLICY_UNSPECIFIED 

DELETE
ABANDON"�
OperationMetadataW
deployment_metadata (23.google.cloud.config.v1.DeploymentOperationMetadataB�AH Q
preview_metadata	 (20.google.cloud.config.v1.PreviewOperationMetadataB�AH 4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�AB
resource_metadata"�
RevisionN
terraform_blueprint (2*.google.cloud.config.v1.TerraformBlueprintB�AH 
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A<
action (2\'.google.cloud.config.v1.Revision.ActionB�A:
state (2&.google.cloud.config.v1.Revision.StateB�A@
apply_results (2$.google.cloud.config.v1.ApplyResultsB�A
state_detail (	B�AC

error_code	 (2*.google.cloud.config.v1.Revision.ErrorCodeB�A
build
 (	B�A
logs (	B�A>
	tf_errors (2&.google.cloud.config.v1.TerraformErrorB�A

error_logs (	B�AB
service_account (	B)�A�A#
!iam.googleapis.com/ServiceAccount&
import_existing_resources (B�AA
worker_pool (	B,�A�A&
$cloudbuild.googleapis.com/WorkerPool"
tf_version_constraint (	B�A

tf_version (	B�A%
quota_validation_results (	B�AF
quota_validation (2\'.google.cloud.config.v1.QuotaValidationB�A"D
Action
ACTION_UNSPECIFIED 

CREATE

UPDATE

DELETE"E
State
STATE_UNSPECIFIED 
APPLYING
APPLIED

FAILED"�
	ErrorCode
ERROR_CODE_UNSPECIFIED !
CLOUD_BUILD_PERMISSION_DENIED
APPLY_BUILD_API_FAILED
APPLY_BUILD_RUN_FAILED
QUOTA_VALIDATION_FAILED:z�Aw
config.googleapis.com/RevisionUprojects/{project}/locations/{location}/deployments/{deployment}/revisions/{revision}B
	blueprint"�
TerraformError
resource_address (	
http_response_code (
error_description (	!
error (2.google.rpc.Status"v
	GitSource
repo (	B�AH �
	directory (	B�AH�
ref (	B�AH�B
_repoB

_directoryB
_ref"�
DeploymentOperationMetadataP
step (2B.google.cloud.config.v1.DeploymentOperationMetadata.DeploymentStep;
apply_results (2$.google.cloud.config.v1.ApplyResults
build (	B�A
logs (	B�A"�
DeploymentStep
DEPLOYMENT_STEP_UNSPECIFIED 
PREPARING_STORAGE_BUCKET
DOWNLOADING_BLUEPRINT
RUNNING_TF_INIT
RUNNING_TF_PLAN
RUNNING_TF_APPLY
RUNNING_TF_DESTROY
RUNNING_TF_VALIDATE
UNLOCKING_DEPLOYMENT
	SUCCEEDED	

FAILED

VALIDATING_REPOSITORY
RUNNING_QUOTA_VALIDATION"�
Resource
name (	B�AJ
terraform_info (2-.google.cloud.config.v1.ResourceTerraformInfoB�AH

cai_assets (2/.google.cloud.config.v1.Resource.CaiAssetsEntryB�A<
intent (2\'.google.cloud.config.v1.Resource.IntentB�A:
state (2&.google.cloud.config.v1.Resource.StateB�AY
CaiAssetsEntry
key (	6
value (2\'.google.cloud.config.v1.ResourceCAIInfo:8"a
Intent
INTENT_UNSPECIFIED 

CREATE

UPDATE

DELETE
RECREATE
	UNCHANGED"X
State
STATE_UNSPECIFIED 
PLANNED
IN_PROGRESS

RECONCILED

FAILED:��A�
config.googleapis.com/Resourcejprojects/{project}/locations/{location}/deployments/{deployment}/revisions/{revision}/resources/{resource}"B
ResourceTerraformInfo
address (	
type (	

id (	"-
ResourceCAIInfo
full_resource_name (	"J
GetResourceRequest4
name (	B&�A�A 
config.googleapis.com/Resource"�
ListResourcesRequest6
parent (	B&�A�A 
config.googleapis.com/Revision
	page_size (

page_token (	
filter (	
order_by (	"z
ListResourcesResponse3
	resources (2 .google.cloud.config.v1.Resource
next_page_token (	
unreachable (	"$
	Statefile

signed_uri (	B�A"p
 ExportDeploymentStatefileRequest8
parent (	B(�A�A"
 config.googleapis.com/Deployment
draft (B�A"X
ExportRevisionStatefileRequest6
parent (	B&�A�A 
config.googleapis.com/Revision"�
ImportStatefileRequest8
parent (	B(�A�A"
 config.googleapis.com/Deployment
lock_id (B�A

skip_draft (B�A"f
DeleteStatefileRequest6
name (	B(�A�A"
 config.googleapis.com/Deployment
lock_id (B�A"O
LockDeploymentRequest6
name (	B(�A�A"
 config.googleapis.com/Deployment"g
UnlockDeploymentRequest6
name (	B(�A�A"
 config.googleapis.com/Deployment
lock_id (B�A"O
ExportLockInfoRequest6
name (	B(�A�A"
 config.googleapis.com/Deployment"�
LockInfo
lock_id (
	operation (	
info (	
who (	
version (	/
create_time (2.google.protobuf.Timestamp"�
PreviewI
terraform_blueprint (2*.google.cloud.config.v1.TerraformBlueprintH 
name (	B�A4
create_time (2.google.protobuf.TimestampB�A@
labels (2+.google.cloud.config.v1.Preview.LabelsEntryB�A9
state (2%.google.cloud.config.v1.Preview.StateB�A<

deployment (	B(�A�A"
 config.googleapis.com/DeploymentF
preview_mode (2+.google.cloud.config.v1.Preview.PreviewModeB�AB
service_account (	B)�A�A#
!iam.googleapis.com/ServiceAccount&
artifacts_gcs_bucket (	B�AH�F
worker_pool	 (	B,�A�A&
$cloudbuild.googleapis.com/WorkerPoolH�B

error_code
 (2).google.cloud.config.v1.Preview.ErrorCodeB�A-
error_status (2.google.rpc.StatusB�A
build (	B�A>
	tf_errors (2&.google.cloud.config.v1.TerraformErrorB�A

error_logs (	B�AH
preview_artifacts (2(.google.cloud.config.v1.PreviewArtifactsB�A
logs (	B�A

tf_version (	B�A\'
tf_version_constraint (	B�AH�J
annotations (20.google.cloud.config.v1.Preview.AnnotationsEntryB�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"{
State
STATE_UNSPECIFIED 
CREATING
	SUCCEEDED
APPLYING	
STALE
DELETING

FAILED
DELETED"D
PreviewMode
PREVIEW_MODE_UNSPECIFIED 
DEFAULT

DELETE"�
	ErrorCode
ERROR_CODE_UNSPECIFIED !
CLOUD_BUILD_PERMISSION_DENIED%
!BUCKET_CREATION_PERMISSION_DENIED
BUCKET_CREATION_FAILED"
DEPLOYMENT_LOCK_ACQUIRE_FAILED
PREVIEW_BUILD_API_FAILED
PREVIEW_BUILD_RUN_FAILED:q�An
config.googleapis.com/Preview:projects/{project}/locations/{location}/previews/{preview}*previews2previewB
	blueprintB
_artifacts_gcs_bucketB
_worker_poolB
_tf_version_constraint"�
PreviewOperationMetadataJ
step (2<.google.cloud.config.v1.PreviewOperationMetadata.PreviewStepC
preview_artifacts (2(.google.cloud.config.v1.PreviewArtifacts
logs (	B�A
build (	B�A"�
PreviewStep
PREVIEW_STEP_UNSPECIFIED 
PREPARING_STORAGE_BUCKET
DOWNLOADING_BLUEPRINT
RUNNING_TF_INIT
RUNNING_TF_PLAN
FETCHING_DEPLOYMENT
LOCKING_DEPLOYMENT
UNLOCKING_DEPLOYMENT
	SUCCEEDED

FAILED	
VALIDATING_REPOSITORY
"@
PreviewArtifacts
content (	B�A
	artifacts (	B�A"�
CreatePreviewRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location

preview_id (	B�A5
preview (2.google.cloud.config.v1.PreviewB�A

request_id (	B�A���"H
GetPreviewRequest3
name (	B%�A�A
config.googleapis.com/Preview"�
ListPreviewsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"w
ListPreviewsResponse1
previews (2.google.cloud.config.v1.Preview
next_page_token (	
unreachable (	"l
DeletePreviewRequest3
name (	B%�A�A
config.googleapis.com/Preview

request_id (	B�A���"S
ExportPreviewResultRequest5
parent (	B%�A�A
config.googleapis.com/Preview"Y
ExportPreviewResultResponse:
result (2%.google.cloud.config.v1.PreviewResultB�A"M
PreviewResult
binary_signed_uri (	B�A
json_signed_uri (	B�A"Z
GetTerraformVersionRequest<
name (	B.�A�A(
&config.googleapis.com/TerraformVersion"�
ListTerraformVersionsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListTerraformVersionsResponseD
terraform_versions (2(.google.cloud.config.v1.TerraformVersion
next_page_token (	
unreachable (	"�
TerraformVersion
name (	B�AB
state (2..google.cloud.config.v1.TerraformVersion.StateB�A5
support_time (2.google.protobuf.TimestampB�A<
deprecate_time (2.google.protobuf.TimestampB�AH �;
obsolete_time (2.google.protobuf.TimestampB�AH�"H
State
STATE_UNSPECIFIED 

ACTIVE

DEPRECATED
OBSOLETE:��A�
&config.googleapis.com/TerraformVersionMprojects/{project}/locations/{location}/terraformVersions/{terraform_version}*terraformVersions2terraformVersionB
_deprecate_timeB
_obsolete_time*N
QuotaValidation 
QUOTA_VALIDATION_UNSPECIFIED 
ENABLED
ENFORCED2�#
Config�
ListDeployments..google.cloud.config.v1.ListDeploymentsRequest/.google.cloud.config.v1.ListDeploymentsResponse"@�Aparent���1//v1/{parent=projects/*/locations/*}/deployments�
GetDeployment,.google.cloud.config.v1.GetDeploymentRequest".google.cloud.config.v1.Deployment">�Aname���1//v1/{name=projects/*/locations/*/deployments/*}�
CreateDeployment/.google.cloud.config.v1.CreateDeploymentRequest.google.longrunning.Operation"��A

DeploymentOperationMetadata�Aparent,deployment,deployment_id���="//v1/{parent=projects/*/locations/*}/deployments:
deployment�
UpdateDeployment/.google.cloud.config.v1.UpdateDeploymentRequest.google.longrunning.Operation"��A

DeploymentOperationMetadata�Adeployment,update_mask���H2:/v1/{deployment.name=projects/*/locations/*/deployments/*}:
deployment�
DeleteDeployment/.google.cloud.config.v1.DeleteDeploymentRequest.google.longrunning.Operation"`�A

DeploymentOperationMetadata�Aname���1*//v1/{name=projects/*/locations/*/deployments/*}�
ListRevisions,.google.cloud.config.v1.ListRevisionsRequest-.google.cloud.config.v1.ListRevisionsResponse"L�Aparent���=;/v1/{parent=projects/*/locations/*/deployments/*}/revisions�
GetRevision*.google.cloud.config.v1.GetRevisionRequest .google.cloud.config.v1.Revision"J�Aname���=;/v1/{name=projects/*/locations/*/deployments/*/revisions/*}�
GetResource*.google.cloud.config.v1.GetResourceRequest .google.cloud.config.v1.Resource"V�Aname���IG/v1/{name=projects/*/locations/*/deployments/*/revisions/*/resources/*}�
ListResources,.google.cloud.config.v1.ListResourcesRequest-.google.cloud.config.v1.ListResourcesResponse"X�Aparent���IG/v1/{parent=projects/*/locations/*/deployments/*/revisions/*}/resources�
ExportDeploymentStatefile8.google.cloud.config.v1.ExportDeploymentStatefileRequest!.google.cloud.config.v1.Statefile"H���B"=/v1/{parent=projects/*/locations/*/deployments/*}:exportState:*�
ExportRevisionStatefile6.google.cloud.config.v1.ExportRevisionStatefileRequest!.google.cloud.config.v1.Statefile"T���N"I/v1/{parent=projects/*/locations/*/deployments/*/revisions/*}:exportState:*�
ImportStatefile..google.cloud.config.v1.ImportStatefileRequest!.google.cloud.config.v1.Statefile"Y�Aparent,lock_id���B"=/v1/{parent=projects/*/locations/*/deployments/*}:importState:*�
DeleteStatefile..google.cloud.config.v1.DeleteStatefileRequest.google.protobuf.Empty"M�Aname���@";/v1/{name=projects/*/locations/*/deployments/*}:deleteState:*�
LockDeployment-.google.cloud.config.v1.LockDeploymentRequest.google.longrunning.Operation"h�A

DeploymentOperationMetadata�Aname���9"4/v1/{name=projects/*/locations/*/deployments/*}:lock:*�
UnlockDeployment/.google.cloud.config.v1.UnlockDeploymentRequest.google.longrunning.Operation"r�A

DeploymentOperationMetadata�Aname,lock_id���;"6/v1/{name=projects/*/locations/*/deployments/*}:unlock:*�
ExportLockInfo-.google.cloud.config.v1.ExportLockInfoRequest .google.cloud.config.v1.LockInfo"I�Aname���<:/v1/{name=projects/*/locations/*/deployments/*}:exportLock�
CreatePreview,.google.cloud.config.v1.CreatePreviewRequest.google.longrunning.Operation"m�A
PreviewOperationMetadata�Aparent,preview���7",/v1/{parent=projects/*/locations/*}/previews:preview�

GetPreview).google.cloud.config.v1.GetPreviewRequest.google.cloud.config.v1.Preview";�Aname���.,/v1/{name=projects/*/locations/*/previews/*}�
ListPreviews+.google.cloud.config.v1.ListPreviewsRequest,.google.cloud.config.v1.ListPreviewsResponse"=�Aparent���.,/v1/{parent=projects/*/locations/*}/previews�
DeletePreview,.google.cloud.config.v1.DeletePreviewRequest.google.longrunning.Operation"Z�A
PreviewOperationMetadata�Aname���.*,/v1/{name=projects/*/locations/*/previews/*}�
ExportPreviewResult2.google.cloud.config.v1.ExportPreviewResultRequest3.google.cloud.config.v1.ExportPreviewResultResponse"@���:"5/v1/{parent=projects/*/locations/*/previews/*}:export:*�
ListTerraformVersions4.google.cloud.config.v1.ListTerraformVersionsRequest5.google.cloud.config.v1.ListTerraformVersionsResponse"F�Aparent���75/v1/{parent=projects/*/locations/*}/terraformVersions�
GetTerraformVersion2.google.cloud.config.v1.GetTerraformVersionRequest(.google.cloud.config.v1.TerraformVersion"D�Aname���75/v1/{name=projects/*/locations/*/terraformVersions/*}I�Aconfig.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.config.v1BConfigProtoPZ2cloud.google.com/go/config/apiv1/configpb;configpb�Google.Cloud.Config.V1�Google\\Cloud\\Config\\V1� Google::Cloud::ConfigService::V1�AY
!iam.googleapis.com/ServiceAccount4projects/{project}/serviceAccounts/{service_account}�Ai
$cloudbuild.googleapis.com/WorkerPoolAprojects/{project}/locations/{location}/workerPools/{worker_pool}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

