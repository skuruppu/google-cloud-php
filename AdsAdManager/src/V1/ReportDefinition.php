<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_service.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The definition of how a report should be run.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.ReportDefinition</code>
 */
class ReportDefinition extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The list of dimensions to report on. If empty, the report will
     * have no dimensions, and any metrics will be totals.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Dimension dimensions = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dimensions;
    /**
     * Required. The list of metrics to report on. If empty, the report will have
     * no metrics.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Metric metrics = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $metrics;
    /**
     * Optional. The filters for this report.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Filter filters = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filters;
    /**
     * Optional. The time zone the date range is defined in for this report.
     * Defaults to publisher's time zone if not specified. Time zone in IANA
     * format. Acceptable values depend on the report type. Publisher time zone is
     * always accepted. Use "America/Los_Angeles" for pacific time, or "Etc/UTC"
     * for UTC.
     *
     * Generated from protobuf field <code>string time_zone = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $time_zone = '';
    /**
     * Optional. The ISO 4217 currency code for this report. Defaults to publisher
     * currency code if not specified.
     *
     * Generated from protobuf field <code>string currency_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $currency_code = '';
    /**
     * Required. The primary date range of this report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.DateRange date_range = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $date_range = null;
    /**
     * Optional. The comparison date range of this report. If unspecified, the
     * report will not have any comparison metrics.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.Report.DateRange comparison_date_range = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $comparison_date_range = null;
    /**
     * Optional. Custom Dimension keys that represent CUSTOM_DIMENSION_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, custom_dimension_key_ids[0] describes
     * CUSTOM_DIMENSION_0_VALUE_ID and CUSTOM_DIMENSION_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 custom_dimension_key_ids = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $custom_dimension_key_ids;
    /**
     * Optional. Custom field IDs that represent LINE_ITEM_CUSTOM_FIELD_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, line_item_custom_field_ids[0] describes
     * LINE_ITEM_CUSTOM_FIELD_0_OPTION_ID and LINE_ITEM_CUSTOM_FIELD_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 line_item_custom_field_ids = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $line_item_custom_field_ids;
    /**
     * Optional. Custom field IDs that represent ORDER_CUSTOM_FIELD_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, order_custom_field_ids[0] describes
     * ORDER_CUSTOM_FIELD_0_OPTION_ID and ORDER_CUSTOM_FIELD_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 order_custom_field_ids = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_custom_field_ids;
    /**
     * Optional. Custom field IDs that represent CREATIVE_CUSTOM_FIELD_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, creative_custom_field_ids[0] describes
     * CREATIVE_CUSTOM_FIELD_0_OPTION_ID and CREATIVE_CUSTOM_FIELD_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 creative_custom_field_ids = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $creative_custom_field_ids;
    /**
     * Required. The type of this report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.ReportType report_type = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $report_type = 0;
    /**
     * Optional. Include a time period column to introduce comparison columns in
     * the report for each generated period. For example, set to  "QUARTERS" here
     * to have a column for each quarter present in the primary date range. If
     * "PREVIOUS PERIOD" is specified in comparison_date_range, then each quarter
     * column will also include comparison values for its relative previous
     * quarter.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.TimePeriodColumn time_period_column = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $time_period_column = 0;
    /**
     * Optional. List of flags for this report. Used to flag rows in a result set
     * based on a set of defined filters.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Flag flags = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $flags;
    /**
     * Optional. Default sorts to apply to this report.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Sort sorts = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $sorts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           Required. The list of dimensions to report on. If empty, the report will
     *           have no dimensions, and any metrics will be totals.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Required. The list of metrics to report on. If empty, the report will have
     *           no metrics.
     *     @type array<\Google\Ads\AdManager\V1\Report\Filter>|\Google\Protobuf\Internal\RepeatedField $filters
     *           Optional. The filters for this report.
     *     @type string $time_zone
     *           Optional. The time zone the date range is defined in for this report.
     *           Defaults to publisher's time zone if not specified. Time zone in IANA
     *           format. Acceptable values depend on the report type. Publisher time zone is
     *           always accepted. Use "America/Los_Angeles" for pacific time, or "Etc/UTC"
     *           for UTC.
     *     @type string $currency_code
     *           Optional. The ISO 4217 currency code for this report. Defaults to publisher
     *           currency code if not specified.
     *     @type \Google\Ads\AdManager\V1\Report\DateRange $date_range
     *           Required. The primary date range of this report.
     *     @type \Google\Ads\AdManager\V1\Report\DateRange $comparison_date_range
     *           Optional. The comparison date range of this report. If unspecified, the
     *           report will not have any comparison metrics.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $custom_dimension_key_ids
     *           Optional. Custom Dimension keys that represent CUSTOM_DIMENSION_*
     *           dimensions. The index of this repeated field corresponds to the index on
     *           each dimension. For example, custom_dimension_key_ids[0] describes
     *           CUSTOM_DIMENSION_0_VALUE_ID and CUSTOM_DIMENSION_0_VALUE.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $line_item_custom_field_ids
     *           Optional. Custom field IDs that represent LINE_ITEM_CUSTOM_FIELD_*
     *           dimensions. The index of this repeated field corresponds to the index on
     *           each dimension. For example, line_item_custom_field_ids[0] describes
     *           LINE_ITEM_CUSTOM_FIELD_0_OPTION_ID and LINE_ITEM_CUSTOM_FIELD_0_VALUE.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $order_custom_field_ids
     *           Optional. Custom field IDs that represent ORDER_CUSTOM_FIELD_*
     *           dimensions. The index of this repeated field corresponds to the index on
     *           each dimension. For example, order_custom_field_ids[0] describes
     *           ORDER_CUSTOM_FIELD_0_OPTION_ID and ORDER_CUSTOM_FIELD_0_VALUE.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $creative_custom_field_ids
     *           Optional. Custom field IDs that represent CREATIVE_CUSTOM_FIELD_*
     *           dimensions. The index of this repeated field corresponds to the index on
     *           each dimension. For example, creative_custom_field_ids[0] describes
     *           CREATIVE_CUSTOM_FIELD_0_OPTION_ID and CREATIVE_CUSTOM_FIELD_0_VALUE.
     *     @type int $report_type
     *           Required. The type of this report.
     *     @type int $time_period_column
     *           Optional. Include a time period column to introduce comparison columns in
     *           the report for each generated period. For example, set to  "QUARTERS" here
     *           to have a column for each quarter present in the primary date range. If
     *           "PREVIOUS PERIOD" is specified in comparison_date_range, then each quarter
     *           column will also include comparison values for its relative previous
     *           quarter.
     *     @type array<\Google\Ads\AdManager\V1\Report\Flag>|\Google\Protobuf\Internal\RepeatedField $flags
     *           Optional. List of flags for this report. Used to flag rows in a result set
     *           based on a set of defined filters.
     *     @type array<\Google\Ads\AdManager\V1\Report\Sort>|\Google\Protobuf\Internal\RepeatedField $sorts
     *           Optional. Default sorts to apply to this report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\ReportService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The list of dimensions to report on. If empty, the report will
     * have no dimensions, and any metrics will be totals.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Dimension dimensions = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Required. The list of dimensions to report on. If empty, the report will
     * have no dimensions, and any metrics will be totals.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Dimension dimensions = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\AdManager\V1\Report\Dimension::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * Required. The list of metrics to report on. If empty, the report will have
     * no metrics.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Metric metrics = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Required. The list of metrics to report on. If empty, the report will have
     * no metrics.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Metric metrics = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\AdManager\V1\Report\Metric::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Optional. The filters for this report.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Filter filters = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Optional. The filters for this report.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Filter filters = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Ads\AdManager\V1\Report\Filter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\AdManager\V1\Report\Filter::class);
        $this->filters = $arr;

        return $this;
    }

    /**
     * Optional. The time zone the date range is defined in for this report.
     * Defaults to publisher's time zone if not specified. Time zone in IANA
     * format. Acceptable values depend on the report type. Publisher time zone is
     * always accepted. Use "America/Los_Angeles" for pacific time, or "Etc/UTC"
     * for UTC.
     *
     * Generated from protobuf field <code>string time_zone = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Optional. The time zone the date range is defined in for this report.
     * Defaults to publisher's time zone if not specified. Time zone in IANA
     * format. Acceptable values depend on the report type. Publisher time zone is
     * always accepted. Use "America/Los_Angeles" for pacific time, or "Etc/UTC"
     * for UTC.
     *
     * Generated from protobuf field <code>string time_zone = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Optional. The ISO 4217 currency code for this report. Defaults to publisher
     * currency code if not specified.
     *
     * Generated from protobuf field <code>string currency_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Optional. The ISO 4217 currency code for this report. Defaults to publisher
     * currency code if not specified.
     *
     * Generated from protobuf field <code>string currency_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Required. The primary date range of this report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.DateRange date_range = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\AdManager\V1\Report\DateRange|null
     */
    public function getDateRange()
    {
        return $this->date_range;
    }

    public function hasDateRange()
    {
        return isset($this->date_range);
    }

    public function clearDateRange()
    {
        unset($this->date_range);
    }

    /**
     * Required. The primary date range of this report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.DateRange date_range = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\AdManager\V1\Report\DateRange $var
     * @return $this
     */
    public function setDateRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\Report\DateRange::class);
        $this->date_range = $var;

        return $this;
    }

    /**
     * Optional. The comparison date range of this report. If unspecified, the
     * report will not have any comparison metrics.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.Report.DateRange comparison_date_range = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Ads\AdManager\V1\Report\DateRange|null
     */
    public function getComparisonDateRange()
    {
        return $this->comparison_date_range;
    }

    public function hasComparisonDateRange()
    {
        return isset($this->comparison_date_range);
    }

    public function clearComparisonDateRange()
    {
        unset($this->comparison_date_range);
    }

    /**
     * Optional. The comparison date range of this report. If unspecified, the
     * report will not have any comparison metrics.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.Report.DateRange comparison_date_range = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Ads\AdManager\V1\Report\DateRange $var
     * @return $this
     */
    public function setComparisonDateRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\Report\DateRange::class);
        $this->comparison_date_range = $var;

        return $this;
    }

    /**
     * Optional. Custom Dimension keys that represent CUSTOM_DIMENSION_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, custom_dimension_key_ids[0] describes
     * CUSTOM_DIMENSION_0_VALUE_ID and CUSTOM_DIMENSION_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 custom_dimension_key_ids = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomDimensionKeyIds()
    {
        return $this->custom_dimension_key_ids;
    }

    /**
     * Optional. Custom Dimension keys that represent CUSTOM_DIMENSION_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, custom_dimension_key_ids[0] describes
     * CUSTOM_DIMENSION_0_VALUE_ID and CUSTOM_DIMENSION_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 custom_dimension_key_ids = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomDimensionKeyIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->custom_dimension_key_ids = $arr;

        return $this;
    }

    /**
     * Optional. Custom field IDs that represent LINE_ITEM_CUSTOM_FIELD_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, line_item_custom_field_ids[0] describes
     * LINE_ITEM_CUSTOM_FIELD_0_OPTION_ID and LINE_ITEM_CUSTOM_FIELD_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 line_item_custom_field_ids = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLineItemCustomFieldIds()
    {
        return $this->line_item_custom_field_ids;
    }

    /**
     * Optional. Custom field IDs that represent LINE_ITEM_CUSTOM_FIELD_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, line_item_custom_field_ids[0] describes
     * LINE_ITEM_CUSTOM_FIELD_0_OPTION_ID and LINE_ITEM_CUSTOM_FIELD_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 line_item_custom_field_ids = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLineItemCustomFieldIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->line_item_custom_field_ids = $arr;

        return $this;
    }

    /**
     * Optional. Custom field IDs that represent ORDER_CUSTOM_FIELD_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, order_custom_field_ids[0] describes
     * ORDER_CUSTOM_FIELD_0_OPTION_ID and ORDER_CUSTOM_FIELD_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 order_custom_field_ids = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderCustomFieldIds()
    {
        return $this->order_custom_field_ids;
    }

    /**
     * Optional. Custom field IDs that represent ORDER_CUSTOM_FIELD_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, order_custom_field_ids[0] describes
     * ORDER_CUSTOM_FIELD_0_OPTION_ID and ORDER_CUSTOM_FIELD_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 order_custom_field_ids = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderCustomFieldIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->order_custom_field_ids = $arr;

        return $this;
    }

    /**
     * Optional. Custom field IDs that represent CREATIVE_CUSTOM_FIELD_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, creative_custom_field_ids[0] describes
     * CREATIVE_CUSTOM_FIELD_0_OPTION_ID and CREATIVE_CUSTOM_FIELD_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 creative_custom_field_ids = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCreativeCustomFieldIds()
    {
        return $this->creative_custom_field_ids;
    }

    /**
     * Optional. Custom field IDs that represent CREATIVE_CUSTOM_FIELD_*
     * dimensions. The index of this repeated field corresponds to the index on
     * each dimension. For example, creative_custom_field_ids[0] describes
     * CREATIVE_CUSTOM_FIELD_0_OPTION_ID and CREATIVE_CUSTOM_FIELD_0_VALUE.
     *
     * Generated from protobuf field <code>repeated int64 creative_custom_field_ids = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCreativeCustomFieldIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->creative_custom_field_ids = $arr;

        return $this;
    }

    /**
     * Required. The type of this report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.ReportType report_type = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getReportType()
    {
        return $this->report_type;
    }

    /**
     * Required. The type of this report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.ReportType report_type = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setReportType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\Report\ReportType::class);
        $this->report_type = $var;

        return $this;
    }

    /**
     * Optional. Include a time period column to introduce comparison columns in
     * the report for each generated period. For example, set to  "QUARTERS" here
     * to have a column for each quarter present in the primary date range. If
     * "PREVIOUS PERIOD" is specified in comparison_date_range, then each quarter
     * column will also include comparison values for its relative previous
     * quarter.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.TimePeriodColumn time_period_column = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTimePeriodColumn()
    {
        return $this->time_period_column;
    }

    /**
     * Optional. Include a time period column to introduce comparison columns in
     * the report for each generated period. For example, set to  "QUARTERS" here
     * to have a column for each quarter present in the primary date range. If
     * "PREVIOUS PERIOD" is specified in comparison_date_range, then each quarter
     * column will also include comparison values for its relative previous
     * quarter.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.TimePeriodColumn time_period_column = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTimePeriodColumn($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\Report\TimePeriodColumn::class);
        $this->time_period_column = $var;

        return $this;
    }

    /**
     * Optional. List of flags for this report. Used to flag rows in a result set
     * based on a set of defined filters.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Flag flags = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Optional. List of flags for this report. Used to flag rows in a result set
     * based on a set of defined filters.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Flag flags = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Ads\AdManager\V1\Report\Flag>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFlags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\AdManager\V1\Report\Flag::class);
        $this->flags = $arr;

        return $this;
    }

    /**
     * Optional. Default sorts to apply to this report.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Sort sorts = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSorts()
    {
        return $this->sorts;
    }

    /**
     * Optional. Default sorts to apply to this report.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Sort sorts = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Ads\AdManager\V1\Report\Sort>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\AdManager\V1\Report\Sort::class);
        $this->sorts = $arr;

        return $this;
    }

}

