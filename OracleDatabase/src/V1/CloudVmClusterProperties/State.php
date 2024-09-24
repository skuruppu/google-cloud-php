<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/vm_cluster.proto

namespace Google\Cloud\OracleDatabase\V1\CloudVmClusterProperties;

use UnexpectedValueException;

/**
 * The various lifecycle states of the VM cluster.
 *
 * Protobuf type <code>google.cloud.oracledatabase.v1.CloudVmClusterProperties.State</code>
 */
class State
{
    /**
     * Default unspecified value.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Indicates that the resource is in provisioning state.
     *
     * Generated from protobuf enum <code>PROVISIONING = 1;</code>
     */
    const PROVISIONING = 1;
    /**
     * Indicates that the resource is in available state.
     *
     * Generated from protobuf enum <code>AVAILABLE = 2;</code>
     */
    const AVAILABLE = 2;
    /**
     * Indicates that the resource is in updating state.
     *
     * Generated from protobuf enum <code>UPDATING = 3;</code>
     */
    const UPDATING = 3;
    /**
     * Indicates that the resource is in terminating state.
     *
     * Generated from protobuf enum <code>TERMINATING = 4;</code>
     */
    const TERMINATING = 4;
    /**
     * Indicates that the resource is in terminated state.
     *
     * Generated from protobuf enum <code>TERMINATED = 5;</code>
     */
    const TERMINATED = 5;
    /**
     * Indicates that the resource is in failed state.
     *
     * Generated from protobuf enum <code>FAILED = 6;</code>
     */
    const FAILED = 6;
    /**
     * Indicates that the resource is in maintenance in progress state.
     *
     * Generated from protobuf enum <code>MAINTENANCE_IN_PROGRESS = 7;</code>
     */
    const MAINTENANCE_IN_PROGRESS = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PROVISIONING => 'PROVISIONING',
        self::AVAILABLE => 'AVAILABLE',
        self::UPDATING => 'UPDATING',
        self::TERMINATING => 'TERMINATING',
        self::TERMINATED => 'TERMINATED',
        self::FAILED => 'FAILED',
        self::MAINTENANCE_IN_PROGRESS => 'MAINTENANCE_IN_PROGRESS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


