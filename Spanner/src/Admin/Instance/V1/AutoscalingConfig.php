<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Autoscaling configuration for an instance.
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.AutoscalingConfig</code>
 */
class AutoscalingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Autoscaling limits for an instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.AutoscalingConfig.AutoscalingLimits autoscaling_limits = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $autoscaling_limits = null;
    /**
     * Required. The autoscaling targets for an instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.AutoscalingConfig.AutoscalingTargets autoscaling_targets = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $autoscaling_targets = null;
    /**
     * Optional. Optional asymmetric autoscaling options.
     * Replicas matching the replica selection criteria will be autoscaled
     * independently from other replicas. The autoscaler will scale the replicas
     * based on the utilization of replicas identified by the replica selection.
     * Replica selections should not overlap with each other.
     * Other replicas (those do not match any replica selection) will be
     * autoscaled together and will have the same compute capacity allocated to
     * them.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.AutoscalingConfig.AsymmetricAutoscalingOption asymmetric_autoscaling_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $asymmetric_autoscaling_options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AutoscalingLimits $autoscaling_limits
     *           Required. Autoscaling limits for an instance.
     *     @type \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AutoscalingTargets $autoscaling_targets
     *           Required. The autoscaling targets for an instance.
     *     @type array<\Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AsymmetricAutoscalingOption>|\Google\Protobuf\Internal\RepeatedField $asymmetric_autoscaling_options
     *           Optional. Optional asymmetric autoscaling options.
     *           Replicas matching the replica selection criteria will be autoscaled
     *           independently from other replicas. The autoscaler will scale the replicas
     *           based on the utilization of replicas identified by the replica selection.
     *           Replica selections should not overlap with each other.
     *           Other replicas (those do not match any replica selection) will be
     *           autoscaled together and will have the same compute capacity allocated to
     *           them.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Autoscaling limits for an instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.AutoscalingConfig.AutoscalingLimits autoscaling_limits = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AutoscalingLimits|null
     */
    public function getAutoscalingLimits()
    {
        return $this->autoscaling_limits;
    }

    public function hasAutoscalingLimits()
    {
        return isset($this->autoscaling_limits);
    }

    public function clearAutoscalingLimits()
    {
        unset($this->autoscaling_limits);
    }

    /**
     * Required. Autoscaling limits for an instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.AutoscalingConfig.AutoscalingLimits autoscaling_limits = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AutoscalingLimits $var
     * @return $this
     */
    public function setAutoscalingLimits($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AutoscalingLimits::class);
        $this->autoscaling_limits = $var;

        return $this;
    }

    /**
     * Required. The autoscaling targets for an instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.AutoscalingConfig.AutoscalingTargets autoscaling_targets = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AutoscalingTargets|null
     */
    public function getAutoscalingTargets()
    {
        return $this->autoscaling_targets;
    }

    public function hasAutoscalingTargets()
    {
        return isset($this->autoscaling_targets);
    }

    public function clearAutoscalingTargets()
    {
        unset($this->autoscaling_targets);
    }

    /**
     * Required. The autoscaling targets for an instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.AutoscalingConfig.AutoscalingTargets autoscaling_targets = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AutoscalingTargets $var
     * @return $this
     */
    public function setAutoscalingTargets($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AutoscalingTargets::class);
        $this->autoscaling_targets = $var;

        return $this;
    }

    /**
     * Optional. Optional asymmetric autoscaling options.
     * Replicas matching the replica selection criteria will be autoscaled
     * independently from other replicas. The autoscaler will scale the replicas
     * based on the utilization of replicas identified by the replica selection.
     * Replica selections should not overlap with each other.
     * Other replicas (those do not match any replica selection) will be
     * autoscaled together and will have the same compute capacity allocated to
     * them.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.AutoscalingConfig.AsymmetricAutoscalingOption asymmetric_autoscaling_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAsymmetricAutoscalingOptions()
    {
        return $this->asymmetric_autoscaling_options;
    }

    /**
     * Optional. Optional asymmetric autoscaling options.
     * Replicas matching the replica selection criteria will be autoscaled
     * independently from other replicas. The autoscaler will scale the replicas
     * based on the utilization of replicas identified by the replica selection.
     * Replica selections should not overlap with each other.
     * Other replicas (those do not match any replica selection) will be
     * autoscaled together and will have the same compute capacity allocated to
     * them.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.AutoscalingConfig.AsymmetricAutoscalingOption asymmetric_autoscaling_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AsymmetricAutoscalingOption>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAsymmetricAutoscalingOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig\AsymmetricAutoscalingOption::class);
        $this->asymmetric_autoscaling_options = $arr;

        return $this;
    }

}

