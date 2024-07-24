<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/job.proto

namespace Google\Cloud\Batch\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Cloud Batch Job description.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.Job</code>
 */
class Job extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Job name.
     * For example: "projects/123456/locations/us-central1/jobs/job01".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. A system generated unique ID for the Job.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Priority of the Job.
     * The valid value range is [0, 100). Default value is 0.
     * Higher value indicates higher priority.
     * A job with higher priority value is more likely to run earlier if all other
     * requirements are satisfied.
     *
     * Generated from protobuf field <code>int64 priority = 3;</code>
     */
    protected $priority = 0;
    /**
     * Required. TaskGroups in the Job. Only one TaskGroup is supported now.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.TaskGroup task_groups = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $task_groups;
    /**
     * Compute resource allocation for all TaskGroups in the Job.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.AllocationPolicy allocation_policy = 7;</code>
     */
    protected $allocation_policy = null;
    /**
     * Labels for the Job. Labels could be user provided or system generated.
     * For example,
     * "labels": {
     *    "department": "finance",
     *    "environment": "test"
     *  }
     * You can assign up to 64 labels.  [Google Compute Engine label
     * restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     * apply.
     * Label names that start with "goog-" or "google-" are reserved.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     */
    private $labels;
    /**
     * Output only. Job status. It is read only for users.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.JobStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = null;
    /**
     * Output only. When the Job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The last time the Job was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Log preservation policy for the Job.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.LogsPolicy logs_policy = 13;</code>
     */
    protected $logs_policy = null;
    /**
     * Notification configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.JobNotification notifications = 14;</code>
     */
    private $notifications;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Job name.
     *           For example: "projects/123456/locations/us-central1/jobs/job01".
     *     @type string $uid
     *           Output only. A system generated unique ID for the Job.
     *     @type int|string $priority
     *           Priority of the Job.
     *           The valid value range is [0, 100). Default value is 0.
     *           Higher value indicates higher priority.
     *           A job with higher priority value is more likely to run earlier if all other
     *           requirements are satisfied.
     *     @type array<\Google\Cloud\Batch\V1\TaskGroup>|\Google\Protobuf\Internal\RepeatedField $task_groups
     *           Required. TaskGroups in the Job. Only one TaskGroup is supported now.
     *     @type \Google\Cloud\Batch\V1\AllocationPolicy $allocation_policy
     *           Compute resource allocation for all TaskGroups in the Job.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels for the Job. Labels could be user provided or system generated.
     *           For example,
     *           "labels": {
     *              "department": "finance",
     *              "environment": "test"
     *            }
     *           You can assign up to 64 labels.  [Google Compute Engine label
     *           restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     *           apply.
     *           Label names that start with "goog-" or "google-" are reserved.
     *     @type \Google\Cloud\Batch\V1\JobStatus $status
     *           Output only. Job status. It is read only for users.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. When the Job was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last time the Job was updated.
     *     @type \Google\Cloud\Batch\V1\LogsPolicy $logs_policy
     *           Log preservation policy for the Job.
     *     @type array<\Google\Cloud\Batch\V1\JobNotification>|\Google\Protobuf\Internal\RepeatedField $notifications
     *           Notification configurations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Job name.
     * For example: "projects/123456/locations/us-central1/jobs/job01".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Job name.
     * For example: "projects/123456/locations/us-central1/jobs/job01".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. A system generated unique ID for the Job.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. A system generated unique ID for the Job.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Priority of the Job.
     * The valid value range is [0, 100). Default value is 0.
     * Higher value indicates higher priority.
     * A job with higher priority value is more likely to run earlier if all other
     * requirements are satisfied.
     *
     * Generated from protobuf field <code>int64 priority = 3;</code>
     * @return int|string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Priority of the Job.
     * The valid value range is [0, 100). Default value is 0.
     * Higher value indicates higher priority.
     * A job with higher priority value is more likely to run earlier if all other
     * requirements are satisfied.
     *
     * Generated from protobuf field <code>int64 priority = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt64($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Required. TaskGroups in the Job. Only one TaskGroup is supported now.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.TaskGroup task_groups = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTaskGroups()
    {
        return $this->task_groups;
    }

    /**
     * Required. TaskGroups in the Job. Only one TaskGroup is supported now.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.TaskGroup task_groups = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Batch\V1\TaskGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTaskGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Batch\V1\TaskGroup::class);
        $this->task_groups = $arr;

        return $this;
    }

    /**
     * Compute resource allocation for all TaskGroups in the Job.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.AllocationPolicy allocation_policy = 7;</code>
     * @return \Google\Cloud\Batch\V1\AllocationPolicy|null
     */
    public function getAllocationPolicy()
    {
        return $this->allocation_policy;
    }

    public function hasAllocationPolicy()
    {
        return isset($this->allocation_policy);
    }

    public function clearAllocationPolicy()
    {
        unset($this->allocation_policy);
    }

    /**
     * Compute resource allocation for all TaskGroups in the Job.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.AllocationPolicy allocation_policy = 7;</code>
     * @param \Google\Cloud\Batch\V1\AllocationPolicy $var
     * @return $this
     */
    public function setAllocationPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Batch\V1\AllocationPolicy::class);
        $this->allocation_policy = $var;

        return $this;
    }

    /**
     * Labels for the Job. Labels could be user provided or system generated.
     * For example,
     * "labels": {
     *    "department": "finance",
     *    "environment": "test"
     *  }
     * You can assign up to 64 labels.  [Google Compute Engine label
     * restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     * apply.
     * Label names that start with "goog-" or "google-" are reserved.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels for the Job. Labels could be user provided or system generated.
     * For example,
     * "labels": {
     *    "department": "finance",
     *    "environment": "test"
     *  }
     * You can assign up to 64 labels.  [Google Compute Engine label
     * restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     * apply.
     * Label names that start with "goog-" or "google-" are reserved.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. Job status. It is read only for users.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.JobStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Batch\V1\JobStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Output only. Job status. It is read only for users.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.JobStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Batch\V1\JobStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Batch\V1\JobStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. When the Job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. When the Job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last time the Job was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last time the Job was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Log preservation policy for the Job.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.LogsPolicy logs_policy = 13;</code>
     * @return \Google\Cloud\Batch\V1\LogsPolicy|null
     */
    public function getLogsPolicy()
    {
        return $this->logs_policy;
    }

    public function hasLogsPolicy()
    {
        return isset($this->logs_policy);
    }

    public function clearLogsPolicy()
    {
        unset($this->logs_policy);
    }

    /**
     * Log preservation policy for the Job.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.LogsPolicy logs_policy = 13;</code>
     * @param \Google\Cloud\Batch\V1\LogsPolicy $var
     * @return $this
     */
    public function setLogsPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Batch\V1\LogsPolicy::class);
        $this->logs_policy = $var;

        return $this;
    }

    /**
     * Notification configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.JobNotification notifications = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * Notification configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.JobNotification notifications = 14;</code>
     * @param array<\Google\Cloud\Batch\V1\JobNotification>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotifications($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Batch\V1\JobNotification::class);
        $this->notifications = $arr;

        return $this;
    }

}

