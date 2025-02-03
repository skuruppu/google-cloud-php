<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A conversion event in a Google Analytics property.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ConversionEvent</code>
 */
class ConversionEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this conversion event.
     * Format: properties/{property}/conversionEvents/{conversion_event}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Immutable. The event name for this conversion event.
     * Examples: 'click', 'purchase'
     *
     * Generated from protobuf field <code>string event_name = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $event_name = '';
    /**
     * Output only. Time when this conversion event was created in the property.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. If set, this event can currently be deleted with
     * DeleteConversionEvent.
     *
     * Generated from protobuf field <code>bool deletable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $deletable = false;
    /**
     * Output only. If set to true, this conversion event refers to a custom
     * event.  If set to false, this conversion event refers to a default event in
     * GA. Default events typically have special meaning in GA. Default events are
     * usually created for you by the GA system, but in some cases can be created
     * by property admins. Custom events count towards the maximum number of
     * custom conversion events that may be created per property.
     *
     * Generated from protobuf field <code>bool custom = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $custom = false;
    /**
     * Optional. The method by which conversions will be counted across multiple
     * events within a session. If this value is not provided, it will be set to
     * `ONCE_PER_EVENT`.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ConversionEvent.ConversionCountingMethod counting_method = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $counting_method = 0;
    /**
     * Optional. Defines a default value/currency for a conversion event.
     *
     * Generated from protobuf field <code>optional .google.analytics.admin.v1alpha.ConversionEvent.DefaultConversionValue default_conversion_value = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $default_conversion_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this conversion event.
     *           Format: properties/{property}/conversionEvents/{conversion_event}
     *     @type string $event_name
     *           Immutable. The event name for this conversion event.
     *           Examples: 'click', 'purchase'
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when this conversion event was created in the property.
     *     @type bool $deletable
     *           Output only. If set, this event can currently be deleted with
     *           DeleteConversionEvent.
     *     @type bool $custom
     *           Output only. If set to true, this conversion event refers to a custom
     *           event.  If set to false, this conversion event refers to a default event in
     *           GA. Default events typically have special meaning in GA. Default events are
     *           usually created for you by the GA system, but in some cases can be created
     *           by property admins. Custom events count towards the maximum number of
     *           custom conversion events that may be created per property.
     *     @type int $counting_method
     *           Optional. The method by which conversions will be counted across multiple
     *           events within a session. If this value is not provided, it will be set to
     *           `ONCE_PER_EVENT`.
     *     @type \Google\Analytics\Admin\V1alpha\ConversionEvent\DefaultConversionValue $default_conversion_value
     *           Optional. Defines a default value/currency for a conversion event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this conversion event.
     * Format: properties/{property}/conversionEvents/{conversion_event}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this conversion event.
     * Format: properties/{property}/conversionEvents/{conversion_event}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Immutable. The event name for this conversion event.
     * Examples: 'click', 'purchase'
     *
     * Generated from protobuf field <code>string event_name = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getEventName()
    {
        return $this->event_name;
    }

    /**
     * Immutable. The event name for this conversion event.
     * Examples: 'click', 'purchase'
     *
     * Generated from protobuf field <code>string event_name = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setEventName($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_name = $var;

        return $this;
    }

    /**
     * Output only. Time when this conversion event was created in the property.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when this conversion event was created in the property.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. If set, this event can currently be deleted with
     * DeleteConversionEvent.
     *
     * Generated from protobuf field <code>bool deletable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getDeletable()
    {
        return $this->deletable;
    }

    /**
     * Output only. If set, this event can currently be deleted with
     * DeleteConversionEvent.
     *
     * Generated from protobuf field <code>bool deletable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeletable($var)
    {
        GPBUtil::checkBool($var);
        $this->deletable = $var;

        return $this;
    }

    /**
     * Output only. If set to true, this conversion event refers to a custom
     * event.  If set to false, this conversion event refers to a default event in
     * GA. Default events typically have special meaning in GA. Default events are
     * usually created for you by the GA system, but in some cases can be created
     * by property admins. Custom events count towards the maximum number of
     * custom conversion events that may be created per property.
     *
     * Generated from protobuf field <code>bool custom = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Output only. If set to true, this conversion event refers to a custom
     * event.  If set to false, this conversion event refers to a default event in
     * GA. Default events typically have special meaning in GA. Default events are
     * usually created for you by the GA system, but in some cases can be created
     * by property admins. Custom events count towards the maximum number of
     * custom conversion events that may be created per property.
     *
     * Generated from protobuf field <code>bool custom = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setCustom($var)
    {
        GPBUtil::checkBool($var);
        $this->custom = $var;

        return $this;
    }

    /**
     * Optional. The method by which conversions will be counted across multiple
     * events within a session. If this value is not provided, it will be set to
     * `ONCE_PER_EVENT`.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ConversionEvent.ConversionCountingMethod counting_method = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getCountingMethod()
    {
        return $this->counting_method;
    }

    /**
     * Optional. The method by which conversions will be counted across multiple
     * events within a session. If this value is not provided, it will be set to
     * `ONCE_PER_EVENT`.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ConversionEvent.ConversionCountingMethod counting_method = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setCountingMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1alpha\ConversionEvent\ConversionCountingMethod::class);
        $this->counting_method = $var;

        return $this;
    }

    /**
     * Optional. Defines a default value/currency for a conversion event.
     *
     * Generated from protobuf field <code>optional .google.analytics.admin.v1alpha.ConversionEvent.DefaultConversionValue default_conversion_value = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Analytics\Admin\V1alpha\ConversionEvent\DefaultConversionValue|null
     */
    public function getDefaultConversionValue()
    {
        return $this->default_conversion_value;
    }

    public function hasDefaultConversionValue()
    {
        return isset($this->default_conversion_value);
    }

    public function clearDefaultConversionValue()
    {
        unset($this->default_conversion_value);
    }

    /**
     * Optional. Defines a default value/currency for a conversion event.
     *
     * Generated from protobuf field <code>optional .google.analytics.admin.v1alpha.ConversionEvent.DefaultConversionValue default_conversion_value = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Analytics\Admin\V1alpha\ConversionEvent\DefaultConversionValue $var
     * @return $this
     */
    public function setDefaultConversionValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\ConversionEvent\DefaultConversionValue::class);
        $this->default_conversion_value = $var;

        return $this;
    }

}

