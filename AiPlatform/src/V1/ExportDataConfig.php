<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes what part of the Dataset is to be exported, the destination of
 * the export and how to export.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExportDataConfig</code>
 */
class ExportDataConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * An expression for filtering what part of the Dataset is to be exported.
     * Only Annotations that match this filter will be exported. The filter syntax
     * is the same as in
     * [ListAnnotations][google.cloud.aiplatform.v1.DatasetService.ListAnnotations].
     *
     * Generated from protobuf field <code>string annotations_filter = 2;</code>
     */
    private $annotations_filter = '';
    /**
     * The ID of a SavedQuery (annotation set) under the Dataset specified by
     * [dataset_id][] used for filtering Annotations for training.
     * Only used for custom training data export use cases.
     * Only applicable to Datasets that have SavedQueries.
     * Only Annotations that are associated with this SavedQuery are used in
     * respectively training. When used in conjunction with
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter],
     * the Annotations used for training are filtered by both
     * [saved_query_id][google.cloud.aiplatform.v1.ExportDataConfig.saved_query_id]
     * and
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter].
     * Only one of
     * [saved_query_id][google.cloud.aiplatform.v1.ExportDataConfig.saved_query_id]
     * and
     * [annotation_schema_uri][google.cloud.aiplatform.v1.ExportDataConfig.annotation_schema_uri]
     * should be specified as both of them represent the same thing: problem type.
     *
     * Generated from protobuf field <code>string saved_query_id = 11;</code>
     */
    private $saved_query_id = '';
    /**
     * The Cloud Storage URI that points to a YAML file describing the annotation
     * schema. The schema is defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/annotation/, note that the
     * chosen schema must be consistent with
     * [metadata][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri] of the
     * Dataset specified by [dataset_id][].
     * Only used for custom training data export use cases.
     * Only applicable to Datasets that have DataItems and Annotations.
     * Only Annotations that both match this schema and belong to DataItems not
     * ignored by the split method are used in respectively training, validation
     * or test role, depending on the role of the DataItem they are on.
     * When used in conjunction with
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter],
     * the Annotations used for training are filtered by both
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter]
     * and
     * [annotation_schema_uri][google.cloud.aiplatform.v1.ExportDataConfig.annotation_schema_uri].
     *
     * Generated from protobuf field <code>string annotation_schema_uri = 12;</code>
     */
    private $annotation_schema_uri = '';
    /**
     * Indicates the usage of the exported files.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportDataConfig.ExportUse export_use = 4;</code>
     */
    private $export_use = 0;
    protected $destination;
    protected $split;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GcsDestination $gcs_destination
     *           The Google Cloud Storage location where the output is to be written to.
     *           In the given directory a new directory will be created with name:
     *           `export-data-<dataset-display-name>-<timestamp-of-export-call>` where
     *           timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format. All export
     *           output will be written into that directory. Inside that directory,
     *           annotations with the same schema will be grouped into sub directories
     *           which are named with the corresponding annotations' schema title. Inside
     *           these sub directories, a schema.yaml will be created to describe the
     *           output format.
     *     @type \Google\Cloud\AIPlatform\V1\ExportFractionSplit $fraction_split
     *           Split based on fractions defining the size of each set.
     *     @type \Google\Cloud\AIPlatform\V1\ExportFilterSplit $filter_split
     *           Split based on the provided filters for each set.
     *     @type string $annotations_filter
     *           An expression for filtering what part of the Dataset is to be exported.
     *           Only Annotations that match this filter will be exported. The filter syntax
     *           is the same as in
     *           [ListAnnotations][google.cloud.aiplatform.v1.DatasetService.ListAnnotations].
     *     @type string $saved_query_id
     *           The ID of a SavedQuery (annotation set) under the Dataset specified by
     *           [dataset_id][] used for filtering Annotations for training.
     *           Only used for custom training data export use cases.
     *           Only applicable to Datasets that have SavedQueries.
     *           Only Annotations that are associated with this SavedQuery are used in
     *           respectively training. When used in conjunction with
     *           [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter],
     *           the Annotations used for training are filtered by both
     *           [saved_query_id][google.cloud.aiplatform.v1.ExportDataConfig.saved_query_id]
     *           and
     *           [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter].
     *           Only one of
     *           [saved_query_id][google.cloud.aiplatform.v1.ExportDataConfig.saved_query_id]
     *           and
     *           [annotation_schema_uri][google.cloud.aiplatform.v1.ExportDataConfig.annotation_schema_uri]
     *           should be specified as both of them represent the same thing: problem type.
     *     @type string $annotation_schema_uri
     *           The Cloud Storage URI that points to a YAML file describing the annotation
     *           schema. The schema is defined as an OpenAPI 3.0.2 [Schema
     *           Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *           The schema files that can be used here are found in
     *           gs://google-cloud-aiplatform/schema/dataset/annotation/, note that the
     *           chosen schema must be consistent with
     *           [metadata][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri] of the
     *           Dataset specified by [dataset_id][].
     *           Only used for custom training data export use cases.
     *           Only applicable to Datasets that have DataItems and Annotations.
     *           Only Annotations that both match this schema and belong to DataItems not
     *           ignored by the split method are used in respectively training, validation
     *           or test role, depending on the role of the DataItem they are on.
     *           When used in conjunction with
     *           [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter],
     *           the Annotations used for training are filtered by both
     *           [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter]
     *           and
     *           [annotation_schema_uri][google.cloud.aiplatform.v1.ExportDataConfig.annotation_schema_uri].
     *     @type int $export_use
     *           Indicates the usage of the exported files.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Cloud Storage location where the output is to be written to.
     * In the given directory a new directory will be created with name:
     * `export-data-<dataset-display-name>-<timestamp-of-export-call>` where
     * timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format. All export
     * output will be written into that directory. Inside that directory,
     * annotations with the same schema will be grouped into sub directories
     * which are named with the corresponding annotations' schema title. Inside
     * these sub directories, a schema.yaml will be created to describe the
     * output format.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination gcs_destination = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\GcsDestination|null
     */
    public function getGcsDestination()
    {
        return $this->readOneof(1);
    }

    public function hasGcsDestination()
    {
        return $this->hasOneof(1);
    }

    /**
     * The Google Cloud Storage location where the output is to be written to.
     * In the given directory a new directory will be created with name:
     * `export-data-<dataset-display-name>-<timestamp-of-export-call>` where
     * timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format. All export
     * output will be written into that directory. Inside that directory,
     * annotations with the same schema will be grouped into sub directories
     * which are named with the corresponding annotations' schema title. Inside
     * these sub directories, a schema.yaml will be created to describe the
     * output format.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination gcs_destination = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GcsDestination::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Split based on fractions defining the size of each set.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportFractionSplit fraction_split = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\ExportFractionSplit|null
     */
    public function getFractionSplit()
    {
        return $this->readOneof(5);
    }

    public function hasFractionSplit()
    {
        return $this->hasOneof(5);
    }

    /**
     * Split based on fractions defining the size of each set.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportFractionSplit fraction_split = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\ExportFractionSplit $var
     * @return $this
     */
    public function setFractionSplit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExportFractionSplit::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Split based on the provided filters for each set.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportFilterSplit filter_split = 7;</code>
     * @return \Google\Cloud\AIPlatform\V1\ExportFilterSplit|null
     */
    public function getFilterSplit()
    {
        return $this->readOneof(7);
    }

    public function hasFilterSplit()
    {
        return $this->hasOneof(7);
    }

    /**
     * Split based on the provided filters for each set.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportFilterSplit filter_split = 7;</code>
     * @param \Google\Cloud\AIPlatform\V1\ExportFilterSplit $var
     * @return $this
     */
    public function setFilterSplit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExportFilterSplit::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * An expression for filtering what part of the Dataset is to be exported.
     * Only Annotations that match this filter will be exported. The filter syntax
     * is the same as in
     * [ListAnnotations][google.cloud.aiplatform.v1.DatasetService.ListAnnotations].
     *
     * Generated from protobuf field <code>string annotations_filter = 2;</code>
     * @return string
     */
    public function getAnnotationsFilter()
    {
        return $this->annotations_filter;
    }

    /**
     * An expression for filtering what part of the Dataset is to be exported.
     * Only Annotations that match this filter will be exported. The filter syntax
     * is the same as in
     * [ListAnnotations][google.cloud.aiplatform.v1.DatasetService.ListAnnotations].
     *
     * Generated from protobuf field <code>string annotations_filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationsFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotations_filter = $var;

        return $this;
    }

    /**
     * The ID of a SavedQuery (annotation set) under the Dataset specified by
     * [dataset_id][] used for filtering Annotations for training.
     * Only used for custom training data export use cases.
     * Only applicable to Datasets that have SavedQueries.
     * Only Annotations that are associated with this SavedQuery are used in
     * respectively training. When used in conjunction with
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter],
     * the Annotations used for training are filtered by both
     * [saved_query_id][google.cloud.aiplatform.v1.ExportDataConfig.saved_query_id]
     * and
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter].
     * Only one of
     * [saved_query_id][google.cloud.aiplatform.v1.ExportDataConfig.saved_query_id]
     * and
     * [annotation_schema_uri][google.cloud.aiplatform.v1.ExportDataConfig.annotation_schema_uri]
     * should be specified as both of them represent the same thing: problem type.
     *
     * Generated from protobuf field <code>string saved_query_id = 11;</code>
     * @return string
     */
    public function getSavedQueryId()
    {
        return $this->saved_query_id;
    }

    /**
     * The ID of a SavedQuery (annotation set) under the Dataset specified by
     * [dataset_id][] used for filtering Annotations for training.
     * Only used for custom training data export use cases.
     * Only applicable to Datasets that have SavedQueries.
     * Only Annotations that are associated with this SavedQuery are used in
     * respectively training. When used in conjunction with
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter],
     * the Annotations used for training are filtered by both
     * [saved_query_id][google.cloud.aiplatform.v1.ExportDataConfig.saved_query_id]
     * and
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter].
     * Only one of
     * [saved_query_id][google.cloud.aiplatform.v1.ExportDataConfig.saved_query_id]
     * and
     * [annotation_schema_uri][google.cloud.aiplatform.v1.ExportDataConfig.annotation_schema_uri]
     * should be specified as both of them represent the same thing: problem type.
     *
     * Generated from protobuf field <code>string saved_query_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSavedQueryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->saved_query_id = $var;

        return $this;
    }

    /**
     * The Cloud Storage URI that points to a YAML file describing the annotation
     * schema. The schema is defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/annotation/, note that the
     * chosen schema must be consistent with
     * [metadata][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri] of the
     * Dataset specified by [dataset_id][].
     * Only used for custom training data export use cases.
     * Only applicable to Datasets that have DataItems and Annotations.
     * Only Annotations that both match this schema and belong to DataItems not
     * ignored by the split method are used in respectively training, validation
     * or test role, depending on the role of the DataItem they are on.
     * When used in conjunction with
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter],
     * the Annotations used for training are filtered by both
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter]
     * and
     * [annotation_schema_uri][google.cloud.aiplatform.v1.ExportDataConfig.annotation_schema_uri].
     *
     * Generated from protobuf field <code>string annotation_schema_uri = 12;</code>
     * @return string
     */
    public function getAnnotationSchemaUri()
    {
        return $this->annotation_schema_uri;
    }

    /**
     * The Cloud Storage URI that points to a YAML file describing the annotation
     * schema. The schema is defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/annotation/, note that the
     * chosen schema must be consistent with
     * [metadata][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri] of the
     * Dataset specified by [dataset_id][].
     * Only used for custom training data export use cases.
     * Only applicable to Datasets that have DataItems and Annotations.
     * Only Annotations that both match this schema and belong to DataItems not
     * ignored by the split method are used in respectively training, validation
     * or test role, depending on the role of the DataItem they are on.
     * When used in conjunction with
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter],
     * the Annotations used for training are filtered by both
     * [annotations_filter][google.cloud.aiplatform.v1.ExportDataConfig.annotations_filter]
     * and
     * [annotation_schema_uri][google.cloud.aiplatform.v1.ExportDataConfig.annotation_schema_uri].
     *
     * Generated from protobuf field <code>string annotation_schema_uri = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationSchemaUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_schema_uri = $var;

        return $this;
    }

    /**
     * Indicates the usage of the exported files.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportDataConfig.ExportUse export_use = 4;</code>
     * @return int
     */
    public function getExportUse()
    {
        return $this->export_use;
    }

    /**
     * Indicates the usage of the exported files.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportDataConfig.ExportUse export_use = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setExportUse($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ExportDataConfig\ExportUse::class);
        $this->export_use = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

    /**
     * @return string
     */
    public function getSplit()
    {
        return $this->whichOneof("split");
    }

}

