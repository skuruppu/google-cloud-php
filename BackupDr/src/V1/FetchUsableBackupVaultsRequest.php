<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for fetching usable BackupVaults.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.FetchUsableBackupVaultsRequest</code>
 */
class FetchUsableBackupVaultsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location for which to retrieve backupvault stores
     * information, in the format 'projects/{project_id}/locations/{location}'. In
     * Cloud Backup and DR, locations map to Google Cloud regions, for example
     * **us-central1**.
     * To retrieve backupvault stores for all locations, use "-" for the
     * '{location}' value.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Requested page size. Server may return fewer items than
     * requested. If unspecified, server will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Filtering results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. Hint for how to order the results.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The project and location for which to retrieve backupvault stores
     *                       information, in the format 'projects/{project_id}/locations/{location}'. In
     *                       Cloud Backup and DR, locations map to Google Cloud regions, for example
     *                       **us-central1**.
     *                       To retrieve backupvault stores for all locations, use "-" for the
     *                       '{location}' value. Please see
     *                       {@see BackupDRClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\BackupDR\V1\FetchUsableBackupVaultsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project and location for which to retrieve backupvault stores
     *           information, in the format 'projects/{project_id}/locations/{location}'. In
     *           Cloud Backup and DR, locations map to Google Cloud regions, for example
     *           **us-central1**.
     *           To retrieve backupvault stores for all locations, use "-" for the
     *           '{location}' value.
     *     @type int $page_size
     *           Optional. Requested page size. Server may return fewer items than
     *           requested. If unspecified, server will pick an appropriate default.
     *     @type string $page_token
     *           Optional. A token identifying a page of results the server should return.
     *     @type string $filter
     *           Optional. Filtering results.
     *     @type string $order_by
     *           Optional. Hint for how to order the results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and location for which to retrieve backupvault stores
     * information, in the format 'projects/{project_id}/locations/{location}'. In
     * Cloud Backup and DR, locations map to Google Cloud regions, for example
     * **us-central1**.
     * To retrieve backupvault stores for all locations, use "-" for the
     * '{location}' value.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and location for which to retrieve backupvault stores
     * information, in the format 'projects/{project_id}/locations/{location}'. In
     * Cloud Backup and DR, locations map to Google Cloud regions, for example
     * **us-central1**.
     * To retrieve backupvault stores for all locations, use "-" for the
     * '{location}' value.
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
     * Optional. Requested page size. Server may return fewer items than
     * requested. If unspecified, server will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. Server may return fewer items than
     * requested. If unspecified, server will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Filtering results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filtering results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Hint for how to order the results.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Hint for how to order the results.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

