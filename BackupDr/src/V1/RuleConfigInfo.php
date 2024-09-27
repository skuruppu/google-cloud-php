<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupplanassociation.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for rules config info.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.RuleConfigInfo</code>
 */
class RuleConfigInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Output Only.
     * Backup Rule id fetched from backup plan.
     *
     * Generated from protobuf field <code>string rule_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $rule_id = '';
    /**
     * Output only. The last backup state for rule.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.RuleConfigInfo.LastBackupState last_backup_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_backup_state = 0;
    /**
     * Output only. Output Only.
     * google.rpc.Status object to store the last backup error.
     *
     * Generated from protobuf field <code>.google.rpc.Status last_backup_error = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_backup_error = null;
    /**
     * Output only. The point in time when the last successful backup was captured
     * from the source.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_successful_backup_consistency_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_successful_backup_consistency_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rule_id
     *           Output only. Output Only.
     *           Backup Rule id fetched from backup plan.
     *     @type int $last_backup_state
     *           Output only. The last backup state for rule.
     *     @type \Google\Rpc\Status $last_backup_error
     *           Output only. Output Only.
     *           google.rpc.Status object to store the last backup error.
     *     @type \Google\Protobuf\Timestamp $last_successful_backup_consistency_time
     *           Output only. The point in time when the last successful backup was captured
     *           from the source.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupplanassociation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Output Only.
     * Backup Rule id fetched from backup plan.
     *
     * Generated from protobuf field <code>string rule_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRuleId()
    {
        return $this->rule_id;
    }

    /**
     * Output only. Output Only.
     * Backup Rule id fetched from backup plan.
     *
     * Generated from protobuf field <code>string rule_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->rule_id = $var;

        return $this;
    }

    /**
     * Output only. The last backup state for rule.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.RuleConfigInfo.LastBackupState last_backup_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLastBackupState()
    {
        return $this->last_backup_state;
    }

    /**
     * Output only. The last backup state for rule.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.RuleConfigInfo.LastBackupState last_backup_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLastBackupState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\RuleConfigInfo\LastBackupState::class);
        $this->last_backup_state = $var;

        return $this;
    }

    /**
     * Output only. Output Only.
     * google.rpc.Status object to store the last backup error.
     *
     * Generated from protobuf field <code>.google.rpc.Status last_backup_error = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getLastBackupError()
    {
        return $this->last_backup_error;
    }

    public function hasLastBackupError()
    {
        return isset($this->last_backup_error);
    }

    public function clearLastBackupError()
    {
        unset($this->last_backup_error);
    }

    /**
     * Output only. Output Only.
     * google.rpc.Status object to store the last backup error.
     *
     * Generated from protobuf field <code>.google.rpc.Status last_backup_error = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setLastBackupError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->last_backup_error = $var;

        return $this;
    }

    /**
     * Output only. The point in time when the last successful backup was captured
     * from the source.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_successful_backup_consistency_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastSuccessfulBackupConsistencyTime()
    {
        return $this->last_successful_backup_consistency_time;
    }

    public function hasLastSuccessfulBackupConsistencyTime()
    {
        return isset($this->last_successful_backup_consistency_time);
    }

    public function clearLastSuccessfulBackupConsistencyTime()
    {
        unset($this->last_successful_backup_consistency_time);
    }

    /**
     * Output only. The point in time when the last successful backup was captured
     * from the source.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_successful_backup_consistency_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastSuccessfulBackupConsistencyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_successful_backup_consistency_time = $var;

        return $this;
    }

}

