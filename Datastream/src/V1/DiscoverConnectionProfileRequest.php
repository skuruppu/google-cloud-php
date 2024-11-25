<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'discover' ConnectionProfile request.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.DiscoverConnectionProfileRequest</code>
 */
class DiscoverConnectionProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the connection profile type. Must be in
     * the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    protected $target;
    protected $hierarchy;
    protected $data_object;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the connection profile type. Must be in
     *           the format `projects/&#42;&#47;locations/&#42;`.
     *     @type \Google\Cloud\Datastream\V1\ConnectionProfile $connection_profile
     *           An ad-hoc connection profile configuration.
     *     @type string $connection_profile_name
     *           A reference to an existing connection profile.
     *     @type bool $full_hierarchy
     *           Whether to retrieve the full hierarchy of data objects (TRUE) or only the
     *           current level (FALSE).
     *     @type int $hierarchy_depth
     *           The number of hierarchy levels below the current level to be retrieved.
     *     @type \Google\Cloud\Datastream\V1\OracleRdbms $oracle_rdbms
     *           Oracle RDBMS to enrich with child data objects and metadata.
     *     @type \Google\Cloud\Datastream\V1\MysqlRdbms $mysql_rdbms
     *           MySQL RDBMS to enrich with child data objects and metadata.
     *     @type \Google\Cloud\Datastream\V1\PostgresqlRdbms $postgresql_rdbms
     *           PostgreSQL RDBMS to enrich with child data objects and metadata.
     *     @type \Google\Cloud\Datastream\V1\SqlServerRdbms $sql_server_rdbms
     *           SQLServer RDBMS to enrich with child data objects and metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\Datastream::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the connection profile type. Must be in
     * the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the connection profile type. Must be in
     * the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * An ad-hoc connection profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ConnectionProfile connection_profile = 200;</code>
     * @return \Google\Cloud\Datastream\V1\ConnectionProfile|null
     */
    public function getConnectionProfile()
    {
        return $this->readOneof(200);
    }

    public function hasConnectionProfile()
    {
        return $this->hasOneof(200);
    }

    /**
     * An ad-hoc connection profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ConnectionProfile connection_profile = 200;</code>
     * @param \Google\Cloud\Datastream\V1\ConnectionProfile $var
     * @return $this
     */
    public function setConnectionProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\ConnectionProfile::class);
        $this->writeOneof(200, $var);

        return $this;
    }

    /**
     * A reference to an existing connection profile.
     *
     * Generated from protobuf field <code>string connection_profile_name = 201;</code>
     * @return string
     */
    public function getConnectionProfileName()
    {
        return $this->readOneof(201);
    }

    public function hasConnectionProfileName()
    {
        return $this->hasOneof(201);
    }

    /**
     * A reference to an existing connection profile.
     *
     * Generated from protobuf field <code>string connection_profile_name = 201;</code>
     * @param string $var
     * @return $this
     */
    public function setConnectionProfileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(201, $var);

        return $this;
    }

    /**
     * Whether to retrieve the full hierarchy of data objects (TRUE) or only the
     * current level (FALSE).
     *
     * Generated from protobuf field <code>bool full_hierarchy = 3;</code>
     * @return bool
     */
    public function getFullHierarchy()
    {
        return $this->readOneof(3);
    }

    public function hasFullHierarchy()
    {
        return $this->hasOneof(3);
    }

    /**
     * Whether to retrieve the full hierarchy of data objects (TRUE) or only the
     * current level (FALSE).
     *
     * Generated from protobuf field <code>bool full_hierarchy = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFullHierarchy($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The number of hierarchy levels below the current level to be retrieved.
     *
     * Generated from protobuf field <code>int32 hierarchy_depth = 4;</code>
     * @return int
     */
    public function getHierarchyDepth()
    {
        return $this->readOneof(4);
    }

    public function hasHierarchyDepth()
    {
        return $this->hasOneof(4);
    }

    /**
     * The number of hierarchy levels below the current level to be retrieved.
     *
     * Generated from protobuf field <code>int32 hierarchy_depth = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setHierarchyDepth($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Oracle RDBMS to enrich with child data objects and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleRdbms oracle_rdbms = 100;</code>
     * @return \Google\Cloud\Datastream\V1\OracleRdbms|null
     */
    public function getOracleRdbms()
    {
        return $this->readOneof(100);
    }

    public function hasOracleRdbms()
    {
        return $this->hasOneof(100);
    }

    /**
     * Oracle RDBMS to enrich with child data objects and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleRdbms oracle_rdbms = 100;</code>
     * @param \Google\Cloud\Datastream\V1\OracleRdbms $var
     * @return $this
     */
    public function setOracleRdbms($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\OracleRdbms::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * MySQL RDBMS to enrich with child data objects and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlRdbms mysql_rdbms = 101;</code>
     * @return \Google\Cloud\Datastream\V1\MysqlRdbms|null
     */
    public function getMysqlRdbms()
    {
        return $this->readOneof(101);
    }

    public function hasMysqlRdbms()
    {
        return $this->hasOneof(101);
    }

    /**
     * MySQL RDBMS to enrich with child data objects and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlRdbms mysql_rdbms = 101;</code>
     * @param \Google\Cloud\Datastream\V1\MysqlRdbms $var
     * @return $this
     */
    public function setMysqlRdbms($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\MysqlRdbms::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * PostgreSQL RDBMS to enrich with child data objects and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlRdbms postgresql_rdbms = 102;</code>
     * @return \Google\Cloud\Datastream\V1\PostgresqlRdbms|null
     */
    public function getPostgresqlRdbms()
    {
        return $this->readOneof(102);
    }

    public function hasPostgresqlRdbms()
    {
        return $this->hasOneof(102);
    }

    /**
     * PostgreSQL RDBMS to enrich with child data objects and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlRdbms postgresql_rdbms = 102;</code>
     * @param \Google\Cloud\Datastream\V1\PostgresqlRdbms $var
     * @return $this
     */
    public function setPostgresqlRdbms($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\PostgresqlRdbms::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * SQLServer RDBMS to enrich with child data objects and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SqlServerRdbms sql_server_rdbms = 103;</code>
     * @return \Google\Cloud\Datastream\V1\SqlServerRdbms|null
     */
    public function getSqlServerRdbms()
    {
        return $this->readOneof(103);
    }

    public function hasSqlServerRdbms()
    {
        return $this->hasOneof(103);
    }

    /**
     * SQLServer RDBMS to enrich with child data objects and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SqlServerRdbms sql_server_rdbms = 103;</code>
     * @param \Google\Cloud\Datastream\V1\SqlServerRdbms $var
     * @return $this
     */
    public function setSqlServerRdbms($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\SqlServerRdbms::class);
        $this->writeOneof(103, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

    /**
     * @return string
     */
    public function getHierarchy()
    {
        return $this->whichOneof("hierarchy");
    }

    /**
     * @return string
     */
    public function getDataObject()
    {
        return $this->whichOneof("data_object");
    }

}

