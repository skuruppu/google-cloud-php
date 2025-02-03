<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/event_create_and_edit.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Event Edit Rule defines conditions that will trigger the creation of an
 * entirely new event based upon matched criteria of a source event. Additional
 * mutations of the parameters from the source event can be defined.
 * Unlike Event Create rules, Event Edit Rules are applied in their defined
 * order.
 * Event Edit rules can't be used to modify an event created from an Event
 * Create rule.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.EventEditRule</code>
 */
class EventEditRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Resource name for this EventEditRule resource.
     * Format:
     * properties/{property}/dataStreams/{data_stream}/eventEditRules/{event_edit_rule}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Required. The display name of this event edit rule. Maximum of 255
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Required. Conditions on the source event must match for this rule to be
     * applied. Must have at least one condition, and can have up to 10 max.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.MatchingCondition event_conditions = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $event_conditions;
    /**
     * Required. Parameter mutations define parameter behavior on the new event,
     * and are applied in order. A maximum of 20 mutations can be applied.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ParameterMutation parameter_mutations = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parameter_mutations;
    /**
     * Output only. The order for which this rule will be processed. Rules with an
     * order value lower than this will be processed before this rule, rules with
     * an order value higher than this will be processed after this rule. New
     * event edit rules will be assigned an order value at the end of the order.
     * This value does not apply to event create rules.
     *
     * Generated from protobuf field <code>int64 processing_order = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $processing_order = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Resource name for this EventEditRule resource.
     *           Format:
     *           properties/{property}/dataStreams/{data_stream}/eventEditRules/{event_edit_rule}
     *     @type string $display_name
     *           Required. The display name of this event edit rule. Maximum of 255
     *           characters.
     *     @type array<\Google\Analytics\Admin\V1alpha\MatchingCondition>|\Google\Protobuf\Internal\RepeatedField $event_conditions
     *           Required. Conditions on the source event must match for this rule to be
     *           applied. Must have at least one condition, and can have up to 10 max.
     *     @type array<\Google\Analytics\Admin\V1alpha\ParameterMutation>|\Google\Protobuf\Internal\RepeatedField $parameter_mutations
     *           Required. Parameter mutations define parameter behavior on the new event,
     *           and are applied in order. A maximum of 20 mutations can be applied.
     *     @type int|string $processing_order
     *           Output only. The order for which this rule will be processed. Rules with an
     *           order value lower than this will be processed before this rule, rules with
     *           an order value higher than this will be processed after this rule. New
     *           event edit rules will be assigned an order value at the end of the order.
     *           This value does not apply to event create rules.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\EventCreateAndEdit::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Resource name for this EventEditRule resource.
     * Format:
     * properties/{property}/dataStreams/{data_stream}/eventEditRules/{event_edit_rule}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Resource name for this EventEditRule resource.
     * Format:
     * properties/{property}/dataStreams/{data_stream}/eventEditRules/{event_edit_rule}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The display name of this event edit rule. Maximum of 255
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of this event edit rule. Maximum of 255
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. Conditions on the source event must match for this rule to be
     * applied. Must have at least one condition, and can have up to 10 max.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.MatchingCondition event_conditions = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventConditions()
    {
        return $this->event_conditions;
    }

    /**
     * Required. Conditions on the source event must match for this rule to be
     * applied. Must have at least one condition, and can have up to 10 max.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.MatchingCondition event_conditions = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Analytics\Admin\V1alpha\MatchingCondition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\MatchingCondition::class);
        $this->event_conditions = $arr;

        return $this;
    }

    /**
     * Required. Parameter mutations define parameter behavior on the new event,
     * and are applied in order. A maximum of 20 mutations can be applied.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ParameterMutation parameter_mutations = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameterMutations()
    {
        return $this->parameter_mutations;
    }

    /**
     * Required. Parameter mutations define parameter behavior on the new event,
     * and are applied in order. A maximum of 20 mutations can be applied.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ParameterMutation parameter_mutations = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Analytics\Admin\V1alpha\ParameterMutation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameterMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\ParameterMutation::class);
        $this->parameter_mutations = $arr;

        return $this;
    }

    /**
     * Output only. The order for which this rule will be processed. Rules with an
     * order value lower than this will be processed before this rule, rules with
     * an order value higher than this will be processed after this rule. New
     * event edit rules will be assigned an order value at the end of the order.
     * This value does not apply to event create rules.
     *
     * Generated from protobuf field <code>int64 processing_order = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getProcessingOrder()
    {
        return $this->processing_order;
    }

    /**
     * Output only. The order for which this rule will be processed. Rules with an
     * order value lower than this will be processed before this rule, rules with
     * an order value higher than this will be processed after this rule. New
     * event edit rules will be assigned an order value at the end of the order.
     * This value does not apply to event create rules.
     *
     * Generated from protobuf field <code>int64 processing_order = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setProcessingOrder($var)
    {
        GPBUtil::checkInt64($var);
        $this->processing_order = $var;

        return $this;
    }

}

