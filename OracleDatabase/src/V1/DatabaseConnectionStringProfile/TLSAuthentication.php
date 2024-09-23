<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/autonomous_database.proto

namespace Google\Cloud\OracleDatabase\V1\DatabaseConnectionStringProfile;

use UnexpectedValueException;

/**
 * This field indicates the TLS authentication type of the connection.
 *
 * Protobuf type <code>google.cloud.oracledatabase.v1.DatabaseConnectionStringProfile.TLSAuthentication</code>
 */
class TLSAuthentication
{
    /**
     * Default unspecified value.
     *
     * Generated from protobuf enum <code>TLS_AUTHENTICATION_UNSPECIFIED = 0;</code>
     */
    const TLS_AUTHENTICATION_UNSPECIFIED = 0;
    /**
     * Server
     *
     * Generated from protobuf enum <code>SERVER = 1;</code>
     */
    const SERVER = 1;
    /**
     * Mutual
     *
     * Generated from protobuf enum <code>MUTUAL = 2;</code>
     */
    const MUTUAL = 2;

    private static $valueToName = [
        self::TLS_AUTHENTICATION_UNSPECIFIED => 'TLS_AUTHENTICATION_UNSPECIFIED',
        self::SERVER => 'SERVER',
        self::MUTUAL => 'MUTUAL',
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


