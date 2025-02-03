<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Secret key is used only in legacy reCAPTCHA. It must be used in a 3rd party
 * integration with legacy reCAPTCHA.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.RetrieveLegacySecretKeyResponse</code>
 */
class RetrieveLegacySecretKeyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The secret key (also known as shared secret) authorizes communication
     * between your application backend and the reCAPTCHA Enterprise server to
     * create an assessment.
     * The secret key needs to be kept safe for security purposes.
     *
     * Generated from protobuf field <code>string legacy_secret_key = 1;</code>
     */
    protected $legacy_secret_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $legacy_secret_key
     *           The secret key (also known as shared secret) authorizes communication
     *           between your application backend and the reCAPTCHA Enterprise server to
     *           create an assessment.
     *           The secret key needs to be kept safe for security purposes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * The secret key (also known as shared secret) authorizes communication
     * between your application backend and the reCAPTCHA Enterprise server to
     * create an assessment.
     * The secret key needs to be kept safe for security purposes.
     *
     * Generated from protobuf field <code>string legacy_secret_key = 1;</code>
     * @return string
     */
    public function getLegacySecretKey()
    {
        return $this->legacy_secret_key;
    }

    /**
     * The secret key (also known as shared secret) authorizes communication
     * between your application backend and the reCAPTCHA Enterprise server to
     * create an assessment.
     * The secret key needs to be kept safe for security purposes.
     *
     * Generated from protobuf field <code>string legacy_secret_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLegacySecretKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->legacy_secret_key = $var;

        return $this;
    }

}

