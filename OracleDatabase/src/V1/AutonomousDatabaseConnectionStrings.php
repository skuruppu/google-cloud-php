<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/autonomous_database.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The connection string used to connect to the Autonomous Database.
 * https://docs.oracle.com/en-us/iaas/api/#/en/database/20160918/datatypes/AutonomousDatabaseConnectionStrings
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.AutonomousDatabaseConnectionStrings</code>
 */
class AutonomousDatabaseConnectionStrings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Returns all connection strings that can be used to connect to
     * the Autonomous Database.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.AllConnectionStrings all_connection_strings = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $all_connection_strings = null;
    /**
     * Output only. The database service provides the least level of resources to
     * each SQL statement, but supports the most number of concurrent SQL
     * statements.
     *
     * Generated from protobuf field <code>string dedicated = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $dedicated = '';
    /**
     * Output only. The database service provides the highest level of resources
     * to each SQL statement.
     *
     * Generated from protobuf field <code>string high = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $high = '';
    /**
     * Output only. The database service provides the least level of resources to
     * each SQL statement.
     *
     * Generated from protobuf field <code>string low = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $low = '';
    /**
     * Output only. The database service provides a lower level of resources to
     * each SQL statement.
     *
     * Generated from protobuf field <code>string medium = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $medium = '';
    /**
     * Output only. A list of connection string profiles to allow clients to
     * group, filter, and select values based on the structured metadata.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oracledatabase.v1.DatabaseConnectionStringProfile profiles = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $profiles;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OracleDatabase\V1\AllConnectionStrings $all_connection_strings
     *           Output only. Returns all connection strings that can be used to connect to
     *           the Autonomous Database.
     *     @type string $dedicated
     *           Output only. The database service provides the least level of resources to
     *           each SQL statement, but supports the most number of concurrent SQL
     *           statements.
     *     @type string $high
     *           Output only. The database service provides the highest level of resources
     *           to each SQL statement.
     *     @type string $low
     *           Output only. The database service provides the least level of resources to
     *           each SQL statement.
     *     @type string $medium
     *           Output only. The database service provides a lower level of resources to
     *           each SQL statement.
     *     @type array<\Google\Cloud\OracleDatabase\V1\DatabaseConnectionStringProfile>|\Google\Protobuf\Internal\RepeatedField $profiles
     *           Output only. A list of connection string profiles to allow clients to
     *           group, filter, and select values based on the structured metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\AutonomousDatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Returns all connection strings that can be used to connect to
     * the Autonomous Database.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.AllConnectionStrings all_connection_strings = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\OracleDatabase\V1\AllConnectionStrings|null
     */
    public function getAllConnectionStrings()
    {
        return $this->all_connection_strings;
    }

    public function hasAllConnectionStrings()
    {
        return isset($this->all_connection_strings);
    }

    public function clearAllConnectionStrings()
    {
        unset($this->all_connection_strings);
    }

    /**
     * Output only. Returns all connection strings that can be used to connect to
     * the Autonomous Database.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.AllConnectionStrings all_connection_strings = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\OracleDatabase\V1\AllConnectionStrings $var
     * @return $this
     */
    public function setAllConnectionStrings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OracleDatabase\V1\AllConnectionStrings::class);
        $this->all_connection_strings = $var;

        return $this;
    }

    /**
     * Output only. The database service provides the least level of resources to
     * each SQL statement, but supports the most number of concurrent SQL
     * statements.
     *
     * Generated from protobuf field <code>string dedicated = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDedicated()
    {
        return $this->dedicated;
    }

    /**
     * Output only. The database service provides the least level of resources to
     * each SQL statement, but supports the most number of concurrent SQL
     * statements.
     *
     * Generated from protobuf field <code>string dedicated = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDedicated($var)
    {
        GPBUtil::checkString($var, True);
        $this->dedicated = $var;

        return $this;
    }

    /**
     * Output only. The database service provides the highest level of resources
     * to each SQL statement.
     *
     * Generated from protobuf field <code>string high = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Output only. The database service provides the highest level of resources
     * to each SQL statement.
     *
     * Generated from protobuf field <code>string high = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setHigh($var)
    {
        GPBUtil::checkString($var, True);
        $this->high = $var;

        return $this;
    }

    /**
     * Output only. The database service provides the least level of resources to
     * each SQL statement.
     *
     * Generated from protobuf field <code>string low = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Output only. The database service provides the least level of resources to
     * each SQL statement.
     *
     * Generated from protobuf field <code>string low = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLow($var)
    {
        GPBUtil::checkString($var, True);
        $this->low = $var;

        return $this;
    }

    /**
     * Output only. The database service provides a lower level of resources to
     * each SQL statement.
     *
     * Generated from protobuf field <code>string medium = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Output only. The database service provides a lower level of resources to
     * each SQL statement.
     *
     * Generated from protobuf field <code>string medium = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMedium($var)
    {
        GPBUtil::checkString($var, True);
        $this->medium = $var;

        return $this;
    }

    /**
     * Output only. A list of connection string profiles to allow clients to
     * group, filter, and select values based on the structured metadata.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oracledatabase.v1.DatabaseConnectionStringProfile profiles = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Output only. A list of connection string profiles to allow clients to
     * group, filter, and select values based on the structured metadata.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oracledatabase.v1.DatabaseConnectionStringProfile profiles = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\OracleDatabase\V1\DatabaseConnectionStringProfile>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProfiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OracleDatabase\V1\DatabaseConnectionStringProfile::class);
        $this->profiles = $arr;

        return $this;
    }

}

