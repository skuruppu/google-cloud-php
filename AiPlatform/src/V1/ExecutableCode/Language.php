<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tool.proto

namespace Google\Cloud\AIPlatform\V1\ExecutableCode;

use UnexpectedValueException;

/**
 * Supported programming languages for the generated code.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.ExecutableCode.Language</code>
 */
class Language
{
    /**
     * Unspecified language. This value should not be used.
     *
     * Generated from protobuf enum <code>LANGUAGE_UNSPECIFIED = 0;</code>
     */
    const LANGUAGE_UNSPECIFIED = 0;
    /**
     * Python >= 3.10, with numpy and simpy available.
     *
     * Generated from protobuf enum <code>PYTHON = 1;</code>
     */
    const PYTHON = 1;

    private static $valueToName = [
        self::LANGUAGE_UNSPECIFIED => 'LANGUAGE_UNSPECIFIED',
        self::PYTHON => 'PYTHON',
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


