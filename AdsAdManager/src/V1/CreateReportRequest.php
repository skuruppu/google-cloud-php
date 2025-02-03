<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_service.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request object for `CreateReport` method.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.CreateReportRequest</code>
 */
class CreateReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where this `Report` will be created.
     * Format: `networks/{network_code}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The `Report` to create.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report report = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $report = null;

    /**
     * @param string                          $parent Required. The parent resource where this `Report` will be created.
     *                                                Format: `networks/{network_code}`
     *                                                Please see {@see ReportServiceClient::networkName()} for help formatting this field.
     * @param \Google\Ads\AdManager\V1\Report $report Required. The `Report` to create.
     *
     * @return \Google\Ads\AdManager\V1\CreateReportRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Ads\AdManager\V1\Report $report): self
    {
        return (new self())
            ->setParent($parent)
            ->setReport($report);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where this `Report` will be created.
     *           Format: `networks/{network_code}`
     *     @type \Google\Ads\AdManager\V1\Report $report
     *           Required. The `Report` to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\ReportService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where this `Report` will be created.
     * Format: `networks/{network_code}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where this `Report` will be created.
     * Format: `networks/{network_code}`
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
     * Required. The `Report` to create.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report report = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\AdManager\V1\Report|null
     */
    public function getReport()
    {
        return $this->report;
    }

    public function hasReport()
    {
        return isset($this->report);
    }

    public function clearReport()
    {
        unset($this->report);
    }

    /**
     * Required. The `Report` to create.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report report = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\AdManager\V1\Report $var
     * @return $this
     */
    public function setReport($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\Report::class);
        $this->report = $var;

        return $this;
    }

}

