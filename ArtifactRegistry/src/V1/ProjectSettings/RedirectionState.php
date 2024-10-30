<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/settings.proto

namespace Google\Cloud\ArtifactRegistry\V1\ProjectSettings;

use UnexpectedValueException;

/**
 * The possible redirection states for legacy repositories.
 *
 * Protobuf type <code>google.devtools.artifactregistry.v1.ProjectSettings.RedirectionState</code>
 */
class RedirectionState
{
    /**
     * No redirection status has been set.
     *
     * Generated from protobuf enum <code>REDIRECTION_STATE_UNSPECIFIED = 0;</code>
     */
    const REDIRECTION_STATE_UNSPECIFIED = 0;
    /**
     * Redirection is disabled.
     *
     * Generated from protobuf enum <code>REDIRECTION_FROM_GCR_IO_DISABLED = 1;</code>
     */
    const REDIRECTION_FROM_GCR_IO_DISABLED = 1;
    /**
     * Redirection is enabled.
     *
     * Generated from protobuf enum <code>REDIRECTION_FROM_GCR_IO_ENABLED = 2;</code>
     */
    const REDIRECTION_FROM_GCR_IO_ENABLED = 2;
    /**
     * Redirection is enabled, and has been finalized so cannot be reverted.
     *
     * Generated from protobuf enum <code>REDIRECTION_FROM_GCR_IO_FINALIZED = 3 [deprecated = true];</code>
     */
    const REDIRECTION_FROM_GCR_IO_FINALIZED = 3;
    /**
     * Redirection is enabled and missing images are copied from GCR
     *
     * Generated from protobuf enum <code>REDIRECTION_FROM_GCR_IO_ENABLED_AND_COPYING = 5;</code>
     */
    const REDIRECTION_FROM_GCR_IO_ENABLED_AND_COPYING = 5;
    /**
     * Redirection is partially enabled and missing images are copied from GCR
     *
     * Generated from protobuf enum <code>REDIRECTION_FROM_GCR_IO_PARTIAL_AND_COPYING = 6;</code>
     */
    const REDIRECTION_FROM_GCR_IO_PARTIAL_AND_COPYING = 6;

    private static $valueToName = [
        self::REDIRECTION_STATE_UNSPECIFIED => 'REDIRECTION_STATE_UNSPECIFIED',
        self::REDIRECTION_FROM_GCR_IO_DISABLED => 'REDIRECTION_FROM_GCR_IO_DISABLED',
        self::REDIRECTION_FROM_GCR_IO_ENABLED => 'REDIRECTION_FROM_GCR_IO_ENABLED',
        self::REDIRECTION_FROM_GCR_IO_FINALIZED => 'REDIRECTION_FROM_GCR_IO_FINALIZED',
        self::REDIRECTION_FROM_GCR_IO_ENABLED_AND_COPYING => 'REDIRECTION_FROM_GCR_IO_ENABLED_AND_COPYING',
        self::REDIRECTION_FROM_GCR_IO_PARTIAL_AND_COPYING => 'REDIRECTION_FROM_GCR_IO_PARTIAL_AND_COPYING',
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


