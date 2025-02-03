<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Time windows within which actions are restricted. See the
 * [documentation](https://cloud.google.com/deploy/docs/deploy-policy#dates_times)
 * for more information on how to configure dates/times.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.TimeWindows</code>
 */
class TimeWindows extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The time zone in IANA format [IANA Time Zone
     * Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *
     * Generated from protobuf field <code>string time_zone = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $time_zone = '';
    /**
     * Optional. One-time windows within which actions are restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.OneTimeWindow one_time_windows = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $one_time_windows;
    /**
     * Optional. Recurring weekly windows within which actions are restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.WeeklyWindow weekly_windows = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $weekly_windows;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $time_zone
     *           Required. The time zone in IANA format [IANA Time Zone
     *           Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *     @type array<\Google\Cloud\Deploy\V1\OneTimeWindow>|\Google\Protobuf\Internal\RepeatedField $one_time_windows
     *           Optional. One-time windows within which actions are restricted.
     *     @type array<\Google\Cloud\Deploy\V1\WeeklyWindow>|\Google\Protobuf\Internal\RepeatedField $weekly_windows
     *           Optional. Recurring weekly windows within which actions are restricted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The time zone in IANA format [IANA Time Zone
     * Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *
     * Generated from protobuf field <code>string time_zone = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Required. The time zone in IANA format [IANA Time Zone
     * Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *
     * Generated from protobuf field <code>string time_zone = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Optional. One-time windows within which actions are restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.OneTimeWindow one_time_windows = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOneTimeWindows()
    {
        return $this->one_time_windows;
    }

    /**
     * Optional. One-time windows within which actions are restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.OneTimeWindow one_time_windows = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Deploy\V1\OneTimeWindow>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOneTimeWindows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\OneTimeWindow::class);
        $this->one_time_windows = $arr;

        return $this;
    }

    /**
     * Optional. Recurring weekly windows within which actions are restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.WeeklyWindow weekly_windows = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWeeklyWindows()
    {
        return $this->weekly_windows;
    }

    /**
     * Optional. Recurring weekly windows within which actions are restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.WeeklyWindow weekly_windows = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Deploy\V1\WeeklyWindow>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWeeklyWindows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\WeeklyWindow::class);
        $this->weekly_windows = $arr;

        return $this;
    }

}

