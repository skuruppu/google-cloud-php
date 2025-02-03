<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Security Command Center resource that contains the configuration and
 * enablement state of a custom module, which enables Event Threat Detection to
 * write certain findings to Security Command Center.
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule</code>
 */
class EventThreatDetectionCustomModule extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the Event Threat Detection custom module,
     * in one of the following formats:
     * * `organizations/{organization}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     * * `folders/{folder}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     * * `projects/{project}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Optional. Configuration for the module. For the resident module, its
     * configuration value is defined at this level. For the inherited module, its
     * configuration value is inherited from the ancestor module.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $config = null;
    /**
     * Output only. The closest ancestor module that this module inherits the
     * enablement state from. If empty, indicates that the custom module was
     * created in the requesting parent organization, folder, or project. The
     * format is the same as the custom module's resource name.
     *
     * Generated from protobuf field <code>string ancestor_module = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ancestor_module = '';
    /**
     * Optional. The state of enablement for the module at the given level of the
     * hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule.EnablementState enablement_state = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enablement_state = 0;
    /**
     * Optional. Type for the module. For example, `CONFIGURABLE_BAD_IP`.
     *
     * Generated from protobuf field <code>string type = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = '';
    /**
     * Optional. The human-readable name of the module.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Optional. A description of the module.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. The time the module was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. The editor the module was last updated by.
     *
     * Generated from protobuf field <code>string last_editor = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_editor = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the Event Threat Detection custom module,
     *           in one of the following formats:
     *           * `organizations/{organization}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     *           * `folders/{folder}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     *           * `projects/{project}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     *     @type \Google\Protobuf\Struct $config
     *           Optional. Configuration for the module. For the resident module, its
     *           configuration value is defined at this level. For the inherited module, its
     *           configuration value is inherited from the ancestor module.
     *     @type string $ancestor_module
     *           Output only. The closest ancestor module that this module inherits the
     *           enablement state from. If empty, indicates that the custom module was
     *           created in the requesting parent organization, folder, or project. The
     *           format is the same as the custom module's resource name.
     *     @type int $enablement_state
     *           Optional. The state of enablement for the module at the given level of the
     *           hierarchy.
     *     @type string $type
     *           Optional. Type for the module. For example, `CONFIGURABLE_BAD_IP`.
     *     @type string $display_name
     *           Optional. The human-readable name of the module.
     *     @type string $description
     *           Optional. A description of the module.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time the module was last updated.
     *     @type string $last_editor
     *           Output only. The editor the module was last updated by.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the Event Threat Detection custom module,
     * in one of the following formats:
     * * `organizations/{organization}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     * * `folders/{folder}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     * * `projects/{project}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the Event Threat Detection custom module,
     * in one of the following formats:
     * * `organizations/{organization}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     * * `folders/{folder}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
     * * `projects/{project}/locations/{location}/eventThreatDetectionCustomModules/{custom_module}`
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
     * Optional. Configuration for the module. For the resident module, its
     * configuration value is defined at this level. For the inherited module, its
     * configuration value is inherited from the ancestor module.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Optional. Configuration for the module. For the resident module, its
     * configuration value is defined at this level. For the inherited module, its
     * configuration value is inherited from the ancestor module.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Output only. The closest ancestor module that this module inherits the
     * enablement state from. If empty, indicates that the custom module was
     * created in the requesting parent organization, folder, or project. The
     * format is the same as the custom module's resource name.
     *
     * Generated from protobuf field <code>string ancestor_module = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAncestorModule()
    {
        return $this->ancestor_module;
    }

    /**
     * Output only. The closest ancestor module that this module inherits the
     * enablement state from. If empty, indicates that the custom module was
     * created in the requesting parent organization, folder, or project. The
     * format is the same as the custom module's resource name.
     *
     * Generated from protobuf field <code>string ancestor_module = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAncestorModule($var)
    {
        GPBUtil::checkString($var, True);
        $this->ancestor_module = $var;

        return $this;
    }

    /**
     * Optional. The state of enablement for the module at the given level of the
     * hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule.EnablementState enablement_state = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getEnablementState()
    {
        return $this->enablement_state;
    }

    /**
     * Optional. The state of enablement for the module at the given level of the
     * hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule.EnablementState enablement_state = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setEnablementState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenterManagement\V1\EventThreatDetectionCustomModule\EnablementState::class);
        $this->enablement_state = $var;

        return $this;
    }

    /**
     * Optional. Type for the module. For example, `CONFIGURABLE_BAD_IP`.
     *
     * Generated from protobuf field <code>string type = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. Type for the module. For example, `CONFIGURABLE_BAD_IP`.
     *
     * Generated from protobuf field <code>string type = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. The human-readable name of the module.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. The human-readable name of the module.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A description of the module.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. A description of the module.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The time the module was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time the module was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The editor the module was last updated by.
     *
     * Generated from protobuf field <code>string last_editor = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLastEditor()
    {
        return $this->last_editor;
    }

    /**
     * Output only. The editor the module was last updated by.
     *
     * Generated from protobuf field <code>string last_editor = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLastEditor($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_editor = $var;

        return $this;
    }

}

