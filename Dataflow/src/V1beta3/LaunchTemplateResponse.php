<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/templates.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to the request to launch a template.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.LaunchTemplateResponse</code>
 */
class LaunchTemplateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The job that was launched, if the request was not a dry run and
     * the job was successfully launched.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.Job job = 1;</code>
     */
    protected $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataflow\V1beta3\Job $job
     *           The job that was launched, if the request was not a dry run and
     *           the job was successfully launched.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Templates::initOnce();
        parent::__construct($data);
    }

    /**
     * The job that was launched, if the request was not a dry run and
     * the job was successfully launched.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.Job job = 1;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\Job|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * The job that was launched, if the request was not a dry run and
     * the job was successfully launched.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.Job job = 1;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\Job::class);
        $this->job = $var;

        return $this;
    }

}

