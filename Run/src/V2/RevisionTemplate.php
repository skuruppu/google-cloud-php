<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/revision_template.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RevisionTemplate describes the data a revision should have when created from
 * a template.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.RevisionTemplate</code>
 */
class RevisionTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The unique name for the revision. If this field is omitted, it
     * will be automatically generated based on the Service name.
     *
     * Generated from protobuf field <code>string revision = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $revision = '';
    /**
     * Optional. Unstructured key value map that can be used to organize and
     * categorize objects. User-provided labels are shared with Google's billing
     * system, so they can be used to filter, or break down billing charges by
     * team, component, environment, state, etc. For more information, visit
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     * https://cloud.google.com/run/docs/configuring/labels.
     * <p>Cloud Run API v2 does not support labels with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system labels in v1 now have a
     * corresponding field in v2 RevisionTemplate.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Unstructured key value map that may be set by external tools to
     * store and arbitrary metadata. They are not queryable and should be
     * preserved when modifying objects.
     * <p>Cloud Run API v2 does not support annotations with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system annotations in v1 now
     * have a corresponding field in v2 RevisionTemplate.
     * <p>This field follows Kubernetes annotations' namespacing, limits, and
     * rules.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotations;
    /**
     * Optional. Scaling settings for this Revision.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.RevisionScaling scaling = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $scaling = null;
    /**
     * Optional. VPC Access configuration to use for this Revision. For more
     * information, visit
     * https://cloud.google.com/run/docs/configuring/connecting-vpc.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.VpcAccess vpc_access = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $vpc_access = null;
    /**
     * Optional. Max allowed time for an instance to respond to a request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $timeout = null;
    /**
     * Optional. Email address of the IAM service account associated with the
     * revision of the service. The service account represents the identity of the
     * running revision, and determines what permissions the revision has. If not
     * provided, the revision will use the project's default service account.
     *
     * Generated from protobuf field <code>string service_account = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service_account = '';
    /**
     * Holds the single container that defines the unit of execution for this
     * Revision.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Container containers = 10;</code>
     */
    private $containers;
    /**
     * Optional. A list of Volumes to make available to containers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Volume volumes = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $volumes;
    /**
     * Optional. The sandbox environment to host this Revision.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.ExecutionEnvironment execution_environment = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $execution_environment = 0;
    /**
     * A reference to a customer managed encryption key (CMEK) to use to encrypt
     * this container image. For more information, go to
     * https://cloud.google.com/run/docs/securing/using-cmek
     *
     * Generated from protobuf field <code>string encryption_key = 14 [(.google.api.resource_reference) = {</code>
     */
    protected $encryption_key = '';
    /**
     * Optional. Sets the maximum number of requests that each serving instance
     * can receive.
     *
     * Generated from protobuf field <code>int32 max_instance_request_concurrency = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_instance_request_concurrency = 0;
    /**
     * Optional. Enable session affinity.
     *
     * Generated from protobuf field <code>bool session_affinity = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $session_affinity = false;
    /**
     * Optional. Disables health checking containers during deployment.
     *
     * Generated from protobuf field <code>bool health_check_disabled = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $health_check_disabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $revision
     *           Optional. The unique name for the revision. If this field is omitted, it
     *           will be automatically generated based on the Service name.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Unstructured key value map that can be used to organize and
     *           categorize objects. User-provided labels are shared with Google's billing
     *           system, so they can be used to filter, or break down billing charges by
     *           team, component, environment, state, etc. For more information, visit
     *           https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     *           https://cloud.google.com/run/docs/configuring/labels.
     *           <p>Cloud Run API v2 does not support labels with `run.googleapis.com`,
     *           `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     *           namespaces, and they will be rejected. All system labels in v1 now have a
     *           corresponding field in v2 RevisionTemplate.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. Unstructured key value map that may be set by external tools to
     *           store and arbitrary metadata. They are not queryable and should be
     *           preserved when modifying objects.
     *           <p>Cloud Run API v2 does not support annotations with `run.googleapis.com`,
     *           `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     *           namespaces, and they will be rejected. All system annotations in v1 now
     *           have a corresponding field in v2 RevisionTemplate.
     *           <p>This field follows Kubernetes annotations' namespacing, limits, and
     *           rules.
     *     @type \Google\Cloud\Run\V2\RevisionScaling $scaling
     *           Optional. Scaling settings for this Revision.
     *     @type \Google\Cloud\Run\V2\VpcAccess $vpc_access
     *           Optional. VPC Access configuration to use for this Revision. For more
     *           information, visit
     *           https://cloud.google.com/run/docs/configuring/connecting-vpc.
     *     @type \Google\Protobuf\Duration $timeout
     *           Optional. Max allowed time for an instance to respond to a request.
     *     @type string $service_account
     *           Optional. Email address of the IAM service account associated with the
     *           revision of the service. The service account represents the identity of the
     *           running revision, and determines what permissions the revision has. If not
     *           provided, the revision will use the project's default service account.
     *     @type array<\Google\Cloud\Run\V2\Container>|\Google\Protobuf\Internal\RepeatedField $containers
     *           Holds the single container that defines the unit of execution for this
     *           Revision.
     *     @type array<\Google\Cloud\Run\V2\Volume>|\Google\Protobuf\Internal\RepeatedField $volumes
     *           Optional. A list of Volumes to make available to containers.
     *     @type int $execution_environment
     *           Optional. The sandbox environment to host this Revision.
     *     @type string $encryption_key
     *           A reference to a customer managed encryption key (CMEK) to use to encrypt
     *           this container image. For more information, go to
     *           https://cloud.google.com/run/docs/securing/using-cmek
     *     @type int $max_instance_request_concurrency
     *           Optional. Sets the maximum number of requests that each serving instance
     *           can receive.
     *     @type bool $session_affinity
     *           Optional. Enable session affinity.
     *     @type bool $health_check_disabled
     *           Optional. Disables health checking containers during deployment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\RevisionTemplate::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The unique name for the revision. If this field is omitted, it
     * will be automatically generated based on the Service name.
     *
     * Generated from protobuf field <code>string revision = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Optional. The unique name for the revision. If this field is omitted, it
     * will be automatically generated based on the Service name.
     *
     * Generated from protobuf field <code>string revision = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision = $var;

        return $this;
    }

    /**
     * Optional. Unstructured key value map that can be used to organize and
     * categorize objects. User-provided labels are shared with Google's billing
     * system, so they can be used to filter, or break down billing charges by
     * team, component, environment, state, etc. For more information, visit
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     * https://cloud.google.com/run/docs/configuring/labels.
     * <p>Cloud Run API v2 does not support labels with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system labels in v1 now have a
     * corresponding field in v2 RevisionTemplate.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Unstructured key value map that can be used to organize and
     * categorize objects. User-provided labels are shared with Google's billing
     * system, so they can be used to filter, or break down billing charges by
     * team, component, environment, state, etc. For more information, visit
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     * https://cloud.google.com/run/docs/configuring/labels.
     * <p>Cloud Run API v2 does not support labels with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system labels in v1 now have a
     * corresponding field in v2 RevisionTemplate.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Unstructured key value map that may be set by external tools to
     * store and arbitrary metadata. They are not queryable and should be
     * preserved when modifying objects.
     * <p>Cloud Run API v2 does not support annotations with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system annotations in v1 now
     * have a corresponding field in v2 RevisionTemplate.
     * <p>This field follows Kubernetes annotations' namespacing, limits, and
     * rules.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. Unstructured key value map that may be set by external tools to
     * store and arbitrary metadata. They are not queryable and should be
     * preserved when modifying objects.
     * <p>Cloud Run API v2 does not support annotations with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system annotations in v1 now
     * have a corresponding field in v2 RevisionTemplate.
     * <p>This field follows Kubernetes annotations' namespacing, limits, and
     * rules.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Optional. Scaling settings for this Revision.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.RevisionScaling scaling = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Run\V2\RevisionScaling|null
     */
    public function getScaling()
    {
        return $this->scaling;
    }

    public function hasScaling()
    {
        return isset($this->scaling);
    }

    public function clearScaling()
    {
        unset($this->scaling);
    }

    /**
     * Optional. Scaling settings for this Revision.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.RevisionScaling scaling = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Run\V2\RevisionScaling $var
     * @return $this
     */
    public function setScaling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Run\V2\RevisionScaling::class);
        $this->scaling = $var;

        return $this;
    }

    /**
     * Optional. VPC Access configuration to use for this Revision. For more
     * information, visit
     * https://cloud.google.com/run/docs/configuring/connecting-vpc.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.VpcAccess vpc_access = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Run\V2\VpcAccess|null
     */
    public function getVpcAccess()
    {
        return $this->vpc_access;
    }

    public function hasVpcAccess()
    {
        return isset($this->vpc_access);
    }

    public function clearVpcAccess()
    {
        unset($this->vpc_access);
    }

    /**
     * Optional. VPC Access configuration to use for this Revision. For more
     * information, visit
     * https://cloud.google.com/run/docs/configuring/connecting-vpc.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.VpcAccess vpc_access = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Run\V2\VpcAccess $var
     * @return $this
     */
    public function setVpcAccess($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Run\V2\VpcAccess::class);
        $this->vpc_access = $var;

        return $this;
    }

    /**
     * Optional. Max allowed time for an instance to respond to a request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * Optional. Max allowed time for an instance to respond to a request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;

        return $this;
    }

    /**
     * Optional. Email address of the IAM service account associated with the
     * revision of the service. The service account represents the identity of the
     * running revision, and determines what permissions the revision has. If not
     * provided, the revision will use the project's default service account.
     *
     * Generated from protobuf field <code>string service_account = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Optional. Email address of the IAM service account associated with the
     * revision of the service. The service account represents the identity of the
     * running revision, and determines what permissions the revision has. If not
     * provided, the revision will use the project's default service account.
     *
     * Generated from protobuf field <code>string service_account = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Holds the single container that defines the unit of execution for this
     * Revision.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Container containers = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContainers()
    {
        return $this->containers;
    }

    /**
     * Holds the single container that defines the unit of execution for this
     * Revision.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Container containers = 10;</code>
     * @param array<\Google\Cloud\Run\V2\Container>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContainers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Run\V2\Container::class);
        $this->containers = $arr;

        return $this;
    }

    /**
     * Optional. A list of Volumes to make available to containers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Volume volumes = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVolumes()
    {
        return $this->volumes;
    }

    /**
     * Optional. A list of Volumes to make available to containers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Volume volumes = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Run\V2\Volume>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVolumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Run\V2\Volume::class);
        $this->volumes = $arr;

        return $this;
    }

    /**
     * Optional. The sandbox environment to host this Revision.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.ExecutionEnvironment execution_environment = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getExecutionEnvironment()
    {
        return $this->execution_environment;
    }

    /**
     * Optional. The sandbox environment to host this Revision.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.ExecutionEnvironment execution_environment = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setExecutionEnvironment($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Run\V2\ExecutionEnvironment::class);
        $this->execution_environment = $var;

        return $this;
    }

    /**
     * A reference to a customer managed encryption key (CMEK) to use to encrypt
     * this container image. For more information, go to
     * https://cloud.google.com/run/docs/securing/using-cmek
     *
     * Generated from protobuf field <code>string encryption_key = 14 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->encryption_key;
    }

    /**
     * A reference to a customer managed encryption key (CMEK) to use to encrypt
     * this container image. For more information, go to
     * https://cloud.google.com/run/docs/securing/using-cmek
     *
     * Generated from protobuf field <code>string encryption_key = 14 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->encryption_key = $var;

        return $this;
    }

    /**
     * Optional. Sets the maximum number of requests that each serving instance
     * can receive.
     *
     * Generated from protobuf field <code>int32 max_instance_request_concurrency = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxInstanceRequestConcurrency()
    {
        return $this->max_instance_request_concurrency;
    }

    /**
     * Optional. Sets the maximum number of requests that each serving instance
     * can receive.
     *
     * Generated from protobuf field <code>int32 max_instance_request_concurrency = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxInstanceRequestConcurrency($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_instance_request_concurrency = $var;

        return $this;
    }

    /**
     * Optional. Enable session affinity.
     *
     * Generated from protobuf field <code>bool session_affinity = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSessionAffinity()
    {
        return $this->session_affinity;
    }

    /**
     * Optional. Enable session affinity.
     *
     * Generated from protobuf field <code>bool session_affinity = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSessionAffinity($var)
    {
        GPBUtil::checkBool($var);
        $this->session_affinity = $var;

        return $this;
    }

    /**
     * Optional. Disables health checking containers during deployment.
     *
     * Generated from protobuf field <code>bool health_check_disabled = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getHealthCheckDisabled()
    {
        return $this->health_check_disabled;
    }

    /**
     * Optional. Disables health checking containers during deployment.
     *
     * Generated from protobuf field <code>bool health_check_disabled = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setHealthCheckDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->health_check_disabled = $var;

        return $this;
    }

}

