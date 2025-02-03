<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/io.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * *  For Translation:
 *         CSV file `translation.csv`, with each line in format:
 *         ML_USE,GCS_FILE_PATH
 *         GCS_FILE_PATH leads to a .TSV file which describes examples that have
 *         given ML_USE, using the following row format per line:
 *         TEXT_SNIPPET (in source language) \t TEXT_SNIPPET (in target
 *         language)
 *   *  For Tables:
 *         Output depends on whether the dataset was imported from Google Cloud
 *         Storage or BigQuery.
 *         Google Cloud Storage case:
 *           [gcs_destination][google.cloud.automl.v1p1beta.OutputConfig.gcs_destination]
 *           must be set. Exported are CSV file(s) `tables_1.csv`,
 *           `tables_2.csv`,...,`tables_N.csv` with each having as header line
 *           the table's column names, and all other lines contain values for
 *           the header columns.
 *         BigQuery case:
 *           [bigquery_destination][google.cloud.automl.v1p1beta.OutputConfig.bigquery_destination]
 *           pointing to a BigQuery project must be set. In the given project a
 *           new dataset will be created with name
 *           `export_data_<automl-dataset-display-name>_<timestamp-of-export-call>`
 *           where <automl-dataset-display-name> will be made
 *           BigQuery-dataset-name compatible (e.g. most special characters will
 *           become underscores), and timestamp will be in
 *           YYYY_MM_DDThh_mm_ss_sssZ "based on ISO-8601" format. In that
 *           dataset a new table called `primary_table` will be created, and
 *           filled with precisely the same data as this obtained on import.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.OutputConfig</code>
 */
class OutputConfig extends \Google\Protobuf\Internal\Message
{
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1\GcsDestination $gcs_destination
     *           Required. The Google Cloud Storage location where the output is to be
     *           written to. For Image Object Detection, Text Extraction, Video
     *           Classification and Tables, in the given directory a new directory will be
     *           created with name:
     *           export_data-<dataset-display-name>-<timestamp-of-export-call> where
     *           timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format. All export
     *           output will be written into that directory.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Google Cloud Storage location where the output is to be
     * written to. For Image Object Detection, Text Extraction, Video
     * Classification and Tables, in the given directory a new directory will be
     * created with name:
     * export_data-<dataset-display-name>-<timestamp-of-export-call> where
     * timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format. All export
     * output will be written into that directory.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.GcsDestination gcs_destination = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1\GcsDestination|null
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
     * Required. The Google Cloud Storage location where the output is to be
     * written to. For Image Object Detection, Text Extraction, Video
     * Classification and Tables, in the given directory a new directory will be
     * created with name:
     * export_data-<dataset-display-name>-<timestamp-of-export-call> where
     * timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format. All export
     * output will be written into that directory.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.GcsDestination gcs_destination = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\GcsDestination::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

