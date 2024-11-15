<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1\BulkUploadFeedbackLabelsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Google Cloud Storage Object details to get the feedback label file from.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.BulkUploadFeedbackLabelsRequest.GcsSource</code>
 */
class GcsSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. File format which will be ingested.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.BulkUploadFeedbackLabelsRequest.GcsSource.Format format = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $format = 0;
    /**
     * Required. The Google Cloud Storage URI of the file to import.
     * Format: `gs://bucket_name/object_name`
     *
     * Generated from protobuf field <code>string object_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $object_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $format
     *           Required. File format which will be ingested.
     *     @type string $object_uri
     *           Required. The Google Cloud Storage URI of the file to import.
     *           Format: `gs://bucket_name/object_name`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. File format which will be ingested.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.BulkUploadFeedbackLabelsRequest.GcsSource.Format format = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Required. File format which will be ingested.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.BulkUploadFeedbackLabelsRequest.GcsSource.Format format = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\BulkUploadFeedbackLabelsRequest\GcsSource\Format::class);
        $this->format = $var;

        return $this;
    }

    /**
     * Required. The Google Cloud Storage URI of the file to import.
     * Format: `gs://bucket_name/object_name`
     *
     * Generated from protobuf field <code>string object_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getObjectUri()
    {
        return $this->object_uri;
    }

    /**
     * Required. The Google Cloud Storage URI of the file to import.
     * Format: `gs://bucket_name/object_name`
     *
     * Generated from protobuf field <code>string object_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setObjectUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->object_uri = $var;

        return $this;
    }

}


