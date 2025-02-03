<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/lifesciences/v2beta/workflows.proto

namespace Google\Cloud\LifeSciences\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The system resources for the pipeline run.
 * At least one zone or region must be specified or the pipeline run will fail.
 *
 * Generated from protobuf message <code>google.cloud.lifesciences.v2beta.Resources</code>
 */
class Resources extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of regions allowed for VM allocation. If set, the `zones` field
     * must not be set.
     *
     * Generated from protobuf field <code>repeated string regions = 2;</code>
     */
    private $regions;
    /**
     * The list of zones allowed for VM allocation. If set, the `regions` field
     * must not be set.
     *
     * Generated from protobuf field <code>repeated string zones = 3;</code>
     */
    private $zones;
    /**
     * The virtual machine specification.
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.VirtualMachine virtual_machine = 4;</code>
     */
    protected $virtual_machine = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $regions
     *           The list of regions allowed for VM allocation. If set, the `zones` field
     *           must not be set.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $zones
     *           The list of zones allowed for VM allocation. If set, the `regions` field
     *           must not be set.
     *     @type \Google\Cloud\LifeSciences\V2beta\VirtualMachine $virtual_machine
     *           The virtual machine specification.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Lifesciences\V2Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of regions allowed for VM allocation. If set, the `zones` field
     * must not be set.
     *
     * Generated from protobuf field <code>repeated string regions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * The list of regions allowed for VM allocation. If set, the `zones` field
     * must not be set.
     *
     * Generated from protobuf field <code>repeated string regions = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->regions = $arr;

        return $this;
    }

    /**
     * The list of zones allowed for VM allocation. If set, the `regions` field
     * must not be set.
     *
     * Generated from protobuf field <code>repeated string zones = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getZones()
    {
        return $this->zones;
    }

    /**
     * The list of zones allowed for VM allocation. If set, the `regions` field
     * must not be set.
     *
     * Generated from protobuf field <code>repeated string zones = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setZones($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->zones = $arr;

        return $this;
    }

    /**
     * The virtual machine specification.
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.VirtualMachine virtual_machine = 4;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\VirtualMachine|null
     */
    public function getVirtualMachine()
    {
        return $this->virtual_machine;
    }

    public function hasVirtualMachine()
    {
        return isset($this->virtual_machine);
    }

    public function clearVirtualMachine()
    {
        unset($this->virtual_machine);
    }

    /**
     * The virtual machine specification.
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.VirtualMachine virtual_machine = 4;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\VirtualMachine $var
     * @return $this
     */
    public function setVirtualMachine($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\VirtualMachine::class);
        $this->virtual_machine = $var;

        return $this;
    }

}

