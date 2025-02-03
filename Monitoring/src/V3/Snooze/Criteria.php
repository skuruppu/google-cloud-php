<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/snooze.proto

namespace Google\Cloud\Monitoring\V3\Snooze;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Criteria specific to the `AlertPolicy`s that this `Snooze` applies to. The
 * `Snooze` will suppress alerts that come from one of the `AlertPolicy`s
 * whose names are supplied.
 *
 * Generated from protobuf message <code>google.monitoring.v3.Snooze.Criteria</code>
 */
class Criteria extends \Google\Protobuf\Internal\Message
{
    /**
     * The specific `AlertPolicy` names for the alert that should be snoozed.
     * The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]
     * There is a limit of 16 policies per snooze. This limit is checked during
     * snooze creation.
     * Exactly 1 alert policy is required if `filter` is specified at the same
     * time.
     *
     * Generated from protobuf field <code>repeated string policies = 1 [(.google.api.resource_reference) = {</code>
     */
    private $policies;
    /**
     * Optional. The filter string to match on Alert fields when silencing the
     * alerts. It follows the standard https://google.aip.dev/160 syntax.
     * A filter string used to apply the snooze to specific incidents
     * that have matching filter values.
     * Filters can be defined for snoozes that apply to one alerting
     * policy.
     * Filters must be a string formatted as one or more resource labels with
     * specific label values. If multiple resource labels are used, then they
     * must be connected with an AND operator. For example, the following filter
     * applies the snooze to incidents that have an instance ID of
     * `1234567890` and a zone of `us-central1-a`:
     *     resource.labels.instance_id="1234567890" AND
     *     resource.labels.zone="us-central1-a"
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $policies
     *           The specific `AlertPolicy` names for the alert that should be snoozed.
     *           The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]
     *           There is a limit of 16 policies per snooze. This limit is checked during
     *           snooze creation.
     *           Exactly 1 alert policy is required if `filter` is specified at the same
     *           time.
     *     @type string $filter
     *           Optional. The filter string to match on Alert fields when silencing the
     *           alerts. It follows the standard https://google.aip.dev/160 syntax.
     *           A filter string used to apply the snooze to specific incidents
     *           that have matching filter values.
     *           Filters can be defined for snoozes that apply to one alerting
     *           policy.
     *           Filters must be a string formatted as one or more resource labels with
     *           specific label values. If multiple resource labels are used, then they
     *           must be connected with an AND operator. For example, the following filter
     *           applies the snooze to incidents that have an instance ID of
     *           `1234567890` and a zone of `us-central1-a`:
     *               resource.labels.instance_id="1234567890" AND
     *               resource.labels.zone="us-central1-a"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Snooze::initOnce();
        parent::__construct($data);
    }

    /**
     * The specific `AlertPolicy` names for the alert that should be snoozed.
     * The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]
     * There is a limit of 16 policies per snooze. This limit is checked during
     * snooze creation.
     * Exactly 1 alert policy is required if `filter` is specified at the same
     * time.
     *
     * Generated from protobuf field <code>repeated string policies = 1 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * The specific `AlertPolicy` names for the alert that should be snoozed.
     * The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]
     * There is a limit of 16 policies per snooze. This limit is checked during
     * snooze creation.
     * Exactly 1 alert policy is required if `filter` is specified at the same
     * time.
     *
     * Generated from protobuf field <code>repeated string policies = 1 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->policies = $arr;

        return $this;
    }

    /**
     * Optional. The filter string to match on Alert fields when silencing the
     * alerts. It follows the standard https://google.aip.dev/160 syntax.
     * A filter string used to apply the snooze to specific incidents
     * that have matching filter values.
     * Filters can be defined for snoozes that apply to one alerting
     * policy.
     * Filters must be a string formatted as one or more resource labels with
     * specific label values. If multiple resource labels are used, then they
     * must be connected with an AND operator. For example, the following filter
     * applies the snooze to incidents that have an instance ID of
     * `1234567890` and a zone of `us-central1-a`:
     *     resource.labels.instance_id="1234567890" AND
     *     resource.labels.zone="us-central1-a"
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The filter string to match on Alert fields when silencing the
     * alerts. It follows the standard https://google.aip.dev/160 syntax.
     * A filter string used to apply the snooze to specific incidents
     * that have matching filter values.
     * Filters can be defined for snoozes that apply to one alerting
     * policy.
     * Filters must be a string formatted as one or more resource labels with
     * specific label values. If multiple resource labels are used, then they
     * must be connected with an AND operator. For example, the following filter
     * applies the snooze to incidents that have an instance ID of
     * `1234567890` and a zone of `us-central1-a`:
     *     resource.labels.instance_id="1234567890" AND
     *     resource.labels.zone="us-central1-a"
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}


