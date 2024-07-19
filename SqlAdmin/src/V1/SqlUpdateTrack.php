<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.sql.v1.SqlUpdateTrack</code>
 */
class SqlUpdateTrack
{
    /**
     * This is an unknown maintenance timing preference.
     *
     * Generated from protobuf enum <code>SQL_UPDATE_TRACK_UNSPECIFIED = 0;</code>
     */
    const SQL_UPDATE_TRACK_UNSPECIFIED = 0;
    /**
     * For an instance with a scheduled maintenance window, this maintenance
     * timing indicates that the maintenance update is scheduled 7 to 14 days
     * after the notification is sent out. Also referred to as `Week 1` (Console)
     * and `preview` (gcloud CLI).
     *
     * Generated from protobuf enum <code>canary = 1;</code>
     */
    const canary = 1;
    /**
     * For an instance with a scheduled maintenance window, this maintenance
     * timing indicates that the maintenance update is scheduled 15 to 21 days
     * after the notification is sent out. Also referred to as `Week 2` (Console)
     * and `production` (gcloud CLI).
     *
     * Generated from protobuf enum <code>stable = 2;</code>
     */
    const stable = 2;
    /**
     * For instance with a scheduled maintenance window, this maintenance
     * timing indicates that the maintenance update is scheduled 35 to 42 days
     * after the notification is sent out.
     *
     * Generated from protobuf enum <code>week5 = 3;</code>
     */
    const week5 = 3;

    private static $valueToName = [
        self::SQL_UPDATE_TRACK_UNSPECIFIED => 'SQL_UPDATE_TRACK_UNSPECIFIED',
        self::canary => 'canary',
        self::stable => 'stable',
        self::week5 => 'week5',
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

