<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkProfileNetworkFeatures;

use UnexpectedValueException;

/**
 * Specifies whether Packet Mirroring 1.0 is supported.
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkProfileNetworkFeatures.AllowPacketMirroring</code>
 */
class AllowPacketMirroring
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ALLOW_PACKET_MIRRORING = 0;</code>
     */
    const UNDEFINED_ALLOW_PACKET_MIRRORING = 0;
    /**
     * Generated from protobuf enum <code>PACKET_MIRRORING_ALLOWED = 92416245;</code>
     */
    const PACKET_MIRRORING_ALLOWED = 92416245;
    /**
     * Generated from protobuf enum <code>PACKET_MIRRORING_BLOCKED = 445450553;</code>
     */
    const PACKET_MIRRORING_BLOCKED = 445450553;

    private static $valueToName = [
        self::UNDEFINED_ALLOW_PACKET_MIRRORING => 'UNDEFINED_ALLOW_PACKET_MIRRORING',
        self::PACKET_MIRRORING_ALLOWED => 'PACKET_MIRRORING_ALLOWED',
        self::PACKET_MIRRORING_BLOCKED => 'PACKET_MIRRORING_BLOCKED',
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


