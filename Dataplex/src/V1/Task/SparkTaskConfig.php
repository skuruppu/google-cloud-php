<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/tasks.proto

namespace Google\Cloud\Dataplex\V1\Task;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User-specified config for running a Spark task.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Task.SparkTaskConfig</code>
 */
class SparkTaskConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Cloud Storage URIs of files to be placed in the working
     * directory of each executor.
     *
     * Generated from protobuf field <code>repeated string file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $file_uris;
    /**
     * Optional. Cloud Storage URIs of archives to be extracted into the working
     * directory of each executor. Supported file types: .jar, .tar, .tar.gz,
     * .tgz, and .zip.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $archive_uris;
    /**
     * Optional. Infrastructure specification for the execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.InfrastructureSpec infrastructure_spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $infrastructure_spec = null;
    protected $driver;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $main_jar_file_uri
     *           The Cloud Storage URI of the jar file that contains the main class.
     *           The execution args are passed in as a sequence of named process
     *           arguments (`--key=value`).
     *     @type string $main_class
     *           The name of the driver's main class. The jar file that contains the
     *           class must be in the default CLASSPATH or specified in
     *           `jar_file_uris`.
     *           The execution args are passed in as a sequence of named process
     *           arguments (`--key=value`).
     *     @type string $python_script_file
     *           The Gcloud Storage URI of the main Python file to use as the driver.
     *           Must be a .py file. The execution args are passed in as a sequence of
     *           named process arguments (`--key=value`).
     *     @type string $sql_script_file
     *           A reference to a query file. This should be the Cloud Storage URI of
     *           the query file. The execution args are used to declare a set of script
     *           variables (`set key="value";`).
     *     @type string $sql_script
     *           The query text.
     *           The execution args are used to declare a set of script variables
     *           (`set key="value";`).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $file_uris
     *           Optional. Cloud Storage URIs of files to be placed in the working
     *           directory of each executor.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $archive_uris
     *           Optional. Cloud Storage URIs of archives to be extracted into the working
     *           directory of each executor. Supported file types: .jar, .tar, .tar.gz,
     *           .tgz, and .zip.
     *     @type \Google\Cloud\Dataplex\V1\Task\InfrastructureSpec $infrastructure_spec
     *           Optional. Infrastructure specification for the execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * The Cloud Storage URI of the jar file that contains the main class.
     * The execution args are passed in as a sequence of named process
     * arguments (`--key=value`).
     *
     * Generated from protobuf field <code>string main_jar_file_uri = 100;</code>
     * @return string
     */
    public function getMainJarFileUri()
    {
        return $this->readOneof(100);
    }

    public function hasMainJarFileUri()
    {
        return $this->hasOneof(100);
    }

    /**
     * The Cloud Storage URI of the jar file that contains the main class.
     * The execution args are passed in as a sequence of named process
     * arguments (`--key=value`).
     *
     * Generated from protobuf field <code>string main_jar_file_uri = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setMainJarFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * The name of the driver's main class. The jar file that contains the
     * class must be in the default CLASSPATH or specified in
     * `jar_file_uris`.
     * The execution args are passed in as a sequence of named process
     * arguments (`--key=value`).
     *
     * Generated from protobuf field <code>string main_class = 101;</code>
     * @return string
     */
    public function getMainClass()
    {
        return $this->readOneof(101);
    }

    public function hasMainClass()
    {
        return $this->hasOneof(101);
    }

    /**
     * The name of the driver's main class. The jar file that contains the
     * class must be in the default CLASSPATH or specified in
     * `jar_file_uris`.
     * The execution args are passed in as a sequence of named process
     * arguments (`--key=value`).
     *
     * Generated from protobuf field <code>string main_class = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setMainClass($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * The Gcloud Storage URI of the main Python file to use as the driver.
     * Must be a .py file. The execution args are passed in as a sequence of
     * named process arguments (`--key=value`).
     *
     * Generated from protobuf field <code>string python_script_file = 102;</code>
     * @return string
     */
    public function getPythonScriptFile()
    {
        return $this->readOneof(102);
    }

    public function hasPythonScriptFile()
    {
        return $this->hasOneof(102);
    }

    /**
     * The Gcloud Storage URI of the main Python file to use as the driver.
     * Must be a .py file. The execution args are passed in as a sequence of
     * named process arguments (`--key=value`).
     *
     * Generated from protobuf field <code>string python_script_file = 102;</code>
     * @param string $var
     * @return $this
     */
    public function setPythonScriptFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * A reference to a query file. This should be the Cloud Storage URI of
     * the query file. The execution args are used to declare a set of script
     * variables (`set key="value";`).
     *
     * Generated from protobuf field <code>string sql_script_file = 104;</code>
     * @return string
     */
    public function getSqlScriptFile()
    {
        return $this->readOneof(104);
    }

    public function hasSqlScriptFile()
    {
        return $this->hasOneof(104);
    }

    /**
     * A reference to a query file. This should be the Cloud Storage URI of
     * the query file. The execution args are used to declare a set of script
     * variables (`set key="value";`).
     *
     * Generated from protobuf field <code>string sql_script_file = 104;</code>
     * @param string $var
     * @return $this
     */
    public function setSqlScriptFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(104, $var);

        return $this;
    }

    /**
     * The query text.
     * The execution args are used to declare a set of script variables
     * (`set key="value";`).
     *
     * Generated from protobuf field <code>string sql_script = 105;</code>
     * @return string
     */
    public function getSqlScript()
    {
        return $this->readOneof(105);
    }

    public function hasSqlScript()
    {
        return $this->hasOneof(105);
    }

    /**
     * The query text.
     * The execution args are used to declare a set of script variables
     * (`set key="value";`).
     *
     * Generated from protobuf field <code>string sql_script = 105;</code>
     * @param string $var
     * @return $this
     */
    public function setSqlScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(105, $var);

        return $this;
    }

    /**
     * Optional. Cloud Storage URIs of files to be placed in the working
     * directory of each executor.
     *
     * Generated from protobuf field <code>repeated string file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileUris()
    {
        return $this->file_uris;
    }

    /**
     * Optional. Cloud Storage URIs of files to be placed in the working
     * directory of each executor.
     *
     * Generated from protobuf field <code>repeated string file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->file_uris = $arr;

        return $this;
    }

    /**
     * Optional. Cloud Storage URIs of archives to be extracted into the working
     * directory of each executor. Supported file types: .jar, .tar, .tar.gz,
     * .tgz, and .zip.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArchiveUris()
    {
        return $this->archive_uris;
    }

    /**
     * Optional. Cloud Storage URIs of archives to be extracted into the working
     * directory of each executor. Supported file types: .jar, .tar, .tar.gz,
     * .tgz, and .zip.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArchiveUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->archive_uris = $arr;

        return $this;
    }

    /**
     * Optional. Infrastructure specification for the execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.InfrastructureSpec infrastructure_spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\Task\InfrastructureSpec|null
     */
    public function getInfrastructureSpec()
    {
        return $this->infrastructure_spec;
    }

    public function hasInfrastructureSpec()
    {
        return isset($this->infrastructure_spec);
    }

    public function clearInfrastructureSpec()
    {
        unset($this->infrastructure_spec);
    }

    /**
     * Optional. Infrastructure specification for the execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task.InfrastructureSpec infrastructure_spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\Task\InfrastructureSpec $var
     * @return $this
     */
    public function setInfrastructureSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Task\InfrastructureSpec::class);
        $this->infrastructure_spec = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDriver()
    {
        return $this->whichOneof("driver");
    }

}


