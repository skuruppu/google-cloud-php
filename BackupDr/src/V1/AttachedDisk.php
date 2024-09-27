<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault_gce.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An instance-attached disk resource.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.AttachedDisk</code>
 */
class AttachedDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Specifies the parameters to initialize this disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.InitializeParams initialize_params = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $initialize_params = null;
    /**
     * Optional. This is used as an identifier for the disks. This is the unique
     * name has to provided to modify disk parameters like disk_name and
     * replica_zones (in case of RePDs)
     *
     * Generated from protobuf field <code>optional string device_name = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $device_name = null;
    /**
     * Optional. Type of the resource.
     *
     * Generated from protobuf field <code>optional string kind = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $kind = null;
    /**
     * Specifies the type of the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskType disk_type_deprecated = 6 [deprecated = true];</code>
     * @deprecated
     */
    protected $disk_type_deprecated = null;
    /**
     * Optional. The mode in which to attach this disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskMode mode = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $mode = null;
    /**
     * Optional. Specifies a valid partial or full URL to an existing Persistent
     * Disk resource.
     *
     * Generated from protobuf field <code>optional string source = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $source = null;
    /**
     * Optional. A zero-based index to this disk, where 0 is reserved for the
     * boot disk.
     *
     * Generated from protobuf field <code>optional int64 index = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $index = null;
    /**
     * Optional. Indicates that this is a boot disk. The virtual machine will use
     * the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>optional bool boot = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $boot = null;
    /**
     * Optional. Specifies whether the disk will be auto-deleted when the instance
     * is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>optional bool auto_delete = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $auto_delete = null;
    /**
     * Optional. Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string license = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $license;
    /**
     * Optional. Specifies the disk interface to use for attaching this disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskInterface disk_interface = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $disk_interface = null;
    /**
     * Optional. A list of features to enable on the guest operating system.
     * Applicable only for bootable images.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.GuestOsFeature guest_os_feature = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $guest_os_feature;
    /**
     * Optional. Encrypts or decrypts a disk using a customer-supplied
     * encryption key.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.CustomerEncryptionKey disk_encryption_key = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $disk_encryption_key = null;
    /**
     * Optional. The size of the disk in GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $disk_size_gb = null;
    /**
     * Optional. Output only. The state of the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskSavedState saved_state = 17 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $saved_state = null;
    /**
     * Optional. Output only. The URI of the disk type resource. For example:
     * projects/project/zones/zone/diskTypes/pd-standard or pd-ssd
     *
     * Generated from protobuf field <code>optional string disk_type = 18 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $disk_type = null;
    /**
     * Optional. Specifies the type of the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskType type = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BackupDR\V1\AttachedDisk\InitializeParams $initialize_params
     *           Optional. Specifies the parameters to initialize this disk.
     *     @type string $device_name
     *           Optional. This is used as an identifier for the disks. This is the unique
     *           name has to provided to modify disk parameters like disk_name and
     *           replica_zones (in case of RePDs)
     *     @type string $kind
     *           Optional. Type of the resource.
     *     @type int $disk_type_deprecated
     *           Specifies the type of the disk.
     *     @type int $mode
     *           Optional. The mode in which to attach this disk.
     *     @type string $source
     *           Optional. Specifies a valid partial or full URL to an existing Persistent
     *           Disk resource.
     *     @type int|string $index
     *           Optional. A zero-based index to this disk, where 0 is reserved for the
     *           boot disk.
     *     @type bool $boot
     *           Optional. Indicates that this is a boot disk. The virtual machine will use
     *           the first partition of the disk for its root filesystem.
     *     @type bool $auto_delete
     *           Optional. Specifies whether the disk will be auto-deleted when the instance
     *           is deleted (but not when the disk is detached from the instance).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $license
     *           Optional. Any valid publicly visible licenses.
     *     @type int $disk_interface
     *           Optional. Specifies the disk interface to use for attaching this disk.
     *     @type array<\Google\Cloud\BackupDR\V1\GuestOsFeature>|\Google\Protobuf\Internal\RepeatedField $guest_os_feature
     *           Optional. A list of features to enable on the guest operating system.
     *           Applicable only for bootable images.
     *     @type \Google\Cloud\BackupDR\V1\CustomerEncryptionKey $disk_encryption_key
     *           Optional. Encrypts or decrypts a disk using a customer-supplied
     *           encryption key.
     *     @type int|string $disk_size_gb
     *           Optional. The size of the disk in GB.
     *     @type int $saved_state
     *           Optional. Output only. The state of the disk.
     *     @type string $disk_type
     *           Optional. Output only. The URI of the disk type resource. For example:
     *           projects/project/zones/zone/diskTypes/pd-standard or pd-ssd
     *     @type int $type
     *           Optional. Specifies the type of the disk.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\BackupvaultGce::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Specifies the parameters to initialize this disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.InitializeParams initialize_params = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BackupDR\V1\AttachedDisk\InitializeParams|null
     */
    public function getInitializeParams()
    {
        return $this->initialize_params;
    }

    public function hasInitializeParams()
    {
        return isset($this->initialize_params);
    }

    public function clearInitializeParams()
    {
        unset($this->initialize_params);
    }

    /**
     * Optional. Specifies the parameters to initialize this disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.InitializeParams initialize_params = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BackupDR\V1\AttachedDisk\InitializeParams $var
     * @return $this
     */
    public function setInitializeParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\AttachedDisk\InitializeParams::class);
        $this->initialize_params = $var;

        return $this;
    }

    /**
     * Optional. This is used as an identifier for the disks. This is the unique
     * name has to provided to modify disk parameters like disk_name and
     * replica_zones (in case of RePDs)
     *
     * Generated from protobuf field <code>optional string device_name = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDeviceName()
    {
        return isset($this->device_name) ? $this->device_name : '';
    }

    public function hasDeviceName()
    {
        return isset($this->device_name);
    }

    public function clearDeviceName()
    {
        unset($this->device_name);
    }

    /**
     * Optional. This is used as an identifier for the disks. This is the unique
     * name has to provided to modify disk parameters like disk_name and
     * replica_zones (in case of RePDs)
     *
     * Generated from protobuf field <code>optional string device_name = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_name = $var;

        return $this;
    }

    /**
     * Optional. Type of the resource.
     *
     * Generated from protobuf field <code>optional string kind = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * Optional. Type of the resource.
     *
     * Generated from protobuf field <code>optional string kind = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Specifies the type of the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskType disk_type_deprecated = 6 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getDiskTypeDeprecated()
    {
        @trigger_error('disk_type_deprecated is deprecated.', E_USER_DEPRECATED);
        return isset($this->disk_type_deprecated) ? $this->disk_type_deprecated : 0;
    }

    public function hasDiskTypeDeprecated()
    {
        @trigger_error('disk_type_deprecated is deprecated.', E_USER_DEPRECATED);
        return isset($this->disk_type_deprecated);
    }

    public function clearDiskTypeDeprecated()
    {
        @trigger_error('disk_type_deprecated is deprecated.', E_USER_DEPRECATED);
        unset($this->disk_type_deprecated);
    }

    /**
     * Specifies the type of the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskType disk_type_deprecated = 6 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setDiskTypeDeprecated($var)
    {
        @trigger_error('disk_type_deprecated is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\AttachedDisk\DiskType::class);
        $this->disk_type_deprecated = $var;

        return $this;
    }

    /**
     * Optional. The mode in which to attach this disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskMode mode = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMode()
    {
        return isset($this->mode) ? $this->mode : 0;
    }

    public function hasMode()
    {
        return isset($this->mode);
    }

    public function clearMode()
    {
        unset($this->mode);
    }

    /**
     * Optional. The mode in which to attach this disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskMode mode = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\AttachedDisk\DiskMode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * Optional. Specifies a valid partial or full URL to an existing Persistent
     * Disk resource.
     *
     * Generated from protobuf field <code>optional string source = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSource()
    {
        return isset($this->source) ? $this->source : '';
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * Optional. Specifies a valid partial or full URL to an existing Persistent
     * Disk resource.
     *
     * Generated from protobuf field <code>optional string source = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Optional. A zero-based index to this disk, where 0 is reserved for the
     * boot disk.
     *
     * Generated from protobuf field <code>optional int64 index = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getIndex()
    {
        return isset($this->index) ? $this->index : 0;
    }

    public function hasIndex()
    {
        return isset($this->index);
    }

    public function clearIndex()
    {
        unset($this->index);
    }

    /**
     * Optional. A zero-based index to this disk, where 0 is reserved for the
     * boot disk.
     *
     * Generated from protobuf field <code>optional int64 index = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Optional. Indicates that this is a boot disk. The virtual machine will use
     * the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>optional bool boot = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getBoot()
    {
        return isset($this->boot) ? $this->boot : false;
    }

    public function hasBoot()
    {
        return isset($this->boot);
    }

    public function clearBoot()
    {
        unset($this->boot);
    }

    /**
     * Optional. Indicates that this is a boot disk. The virtual machine will use
     * the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>optional bool boot = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setBoot($var)
    {
        GPBUtil::checkBool($var);
        $this->boot = $var;

        return $this;
    }

    /**
     * Optional. Specifies whether the disk will be auto-deleted when the instance
     * is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>optional bool auto_delete = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAutoDelete()
    {
        return isset($this->auto_delete) ? $this->auto_delete : false;
    }

    public function hasAutoDelete()
    {
        return isset($this->auto_delete);
    }

    public function clearAutoDelete()
    {
        unset($this->auto_delete);
    }

    /**
     * Optional. Specifies whether the disk will be auto-deleted when the instance
     * is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>optional bool auto_delete = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoDelete($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_delete = $var;

        return $this;
    }

    /**
     * Optional. Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string license = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Optional. Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string license = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLicense($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->license = $arr;

        return $this;
    }

    /**
     * Optional. Specifies the disk interface to use for attaching this disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskInterface disk_interface = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getDiskInterface()
    {
        return isset($this->disk_interface) ? $this->disk_interface : 0;
    }

    public function hasDiskInterface()
    {
        return isset($this->disk_interface);
    }

    public function clearDiskInterface()
    {
        unset($this->disk_interface);
    }

    /**
     * Optional. Specifies the disk interface to use for attaching this disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskInterface disk_interface = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setDiskInterface($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\AttachedDisk\DiskInterface::class);
        $this->disk_interface = $var;

        return $this;
    }

    /**
     * Optional. A list of features to enable on the guest operating system.
     * Applicable only for bootable images.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.GuestOsFeature guest_os_feature = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGuestOsFeature()
    {
        return $this->guest_os_feature;
    }

    /**
     * Optional. A list of features to enable on the guest operating system.
     * Applicable only for bootable images.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.GuestOsFeature guest_os_feature = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\BackupDR\V1\GuestOsFeature>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGuestOsFeature($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BackupDR\V1\GuestOsFeature::class);
        $this->guest_os_feature = $arr;

        return $this;
    }

    /**
     * Optional. Encrypts or decrypts a disk using a customer-supplied
     * encryption key.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.CustomerEncryptionKey disk_encryption_key = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BackupDR\V1\CustomerEncryptionKey|null
     */
    public function getDiskEncryptionKey()
    {
        return $this->disk_encryption_key;
    }

    public function hasDiskEncryptionKey()
    {
        return isset($this->disk_encryption_key);
    }

    public function clearDiskEncryptionKey()
    {
        unset($this->disk_encryption_key);
    }

    /**
     * Optional. Encrypts or decrypts a disk using a customer-supplied
     * encryption key.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.CustomerEncryptionKey disk_encryption_key = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BackupDR\V1\CustomerEncryptionKey $var
     * @return $this
     */
    public function setDiskEncryptionKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\CustomerEncryptionKey::class);
        $this->disk_encryption_key = $var;

        return $this;
    }

    /**
     * Optional. The size of the disk in GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getDiskSizeGb()
    {
        return isset($this->disk_size_gb) ? $this->disk_size_gb : 0;
    }

    public function hasDiskSizeGb()
    {
        return isset($this->disk_size_gb);
    }

    public function clearDiskSizeGb()
    {
        unset($this->disk_size_gb);
    }

    /**
     * Optional. The size of the disk in GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_size_gb = $var;

        return $this;
    }

    /**
     * Optional. Output only. The state of the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskSavedState saved_state = 17 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSavedState()
    {
        return isset($this->saved_state) ? $this->saved_state : 0;
    }

    public function hasSavedState()
    {
        return isset($this->saved_state);
    }

    public function clearSavedState()
    {
        unset($this->saved_state);
    }

    /**
     * Optional. Output only. The state of the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskSavedState saved_state = 17 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSavedState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\AttachedDisk\DiskSavedState::class);
        $this->saved_state = $var;

        return $this;
    }

    /**
     * Optional. Output only. The URI of the disk type resource. For example:
     * projects/project/zones/zone/diskTypes/pd-standard or pd-ssd
     *
     * Generated from protobuf field <code>optional string disk_type = 18 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDiskType()
    {
        return isset($this->disk_type) ? $this->disk_type : '';
    }

    public function hasDiskType()
    {
        return isset($this->disk_type);
    }

    public function clearDiskType()
    {
        unset($this->disk_type);
    }

    /**
     * Optional. Output only. The URI of the disk type resource. For example:
     * projects/project/zones/zone/diskTypes/pd-standard or pd-ssd
     *
     * Generated from protobuf field <code>optional string disk_type = 18 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDiskType($var)
    {
        GPBUtil::checkString($var, True);
        $this->disk_type = $var;

        return $this;
    }

    /**
     * Optional. Specifies the type of the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskType type = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : 0;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Optional. Specifies the type of the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.AttachedDisk.DiskType type = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\AttachedDisk\DiskType::class);
        $this->type = $var;

        return $this;
    }

}

