<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Oracle SSL configuration information.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.OracleSslConfig</code>
 */
class OracleSslConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Input only. PEM-encoded certificate of the CA that signed the source
     * database server's certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $ca_certificate = '';
    /**
     * Output only. Indicates whether the ca_certificate field has been set for
     * this Connection-Profile.
     *
     * Generated from protobuf field <code>bool ca_certificate_set = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ca_certificate_set = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ca_certificate
     *           Input only. PEM-encoded certificate of the CA that signed the source
     *           database server's certificate.
     *     @type bool $ca_certificate_set
     *           Output only. Indicates whether the ca_certificate field has been set for
     *           this Connection-Profile.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Input only. PEM-encoded certificate of the CA that signed the source
     * database server's certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getCaCertificate()
    {
        return $this->ca_certificate;
    }

    /**
     * Input only. PEM-encoded certificate of the CA that signed the source
     * database server's certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCaCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->ca_certificate = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether the ca_certificate field has been set for
     * this Connection-Profile.
     *
     * Generated from protobuf field <code>bool ca_certificate_set = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getCaCertificateSet()
    {
        return $this->ca_certificate_set;
    }

    /**
     * Output only. Indicates whether the ca_certificate field has been set for
     * this Connection-Profile.
     *
     * Generated from protobuf field <code>bool ca_certificate_set = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setCaCertificateSet($var)
    {
        GPBUtil::checkBool($var);
        $this->ca_certificate_set = $var;

        return $this;
    }

}

