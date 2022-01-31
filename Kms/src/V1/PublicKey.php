<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The public key for a given [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. Obtained via
 * [GetPublicKey][google.cloud.kms.v1.KeyManagementService.GetPublicKey].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.PublicKey</code>
 */
class PublicKey extends \Google\Protobuf\Internal\Message
{
    /**
     * The public key, encoded in PEM format. For more information, see the
     * [RFC 7468](https://tools.ietf.org/html/rfc7468) sections for
     * [General Considerations](https://tools.ietf.org/html/rfc7468#section-2) and
     * [Textual Encoding of Subject Public Key Info]
     * (https://tools.ietf.org/html/rfc7468#section-13).
     *
     * Generated from protobuf field <code>string pem = 1;</code>
     */
    private $pem = '';
    /**
     * The [Algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm] associated
     * with this key.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 2;</code>
     */
    private $algorithm = 0;
    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem]. An integrity check of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] can be performed
     * by computing the CRC32C checksum of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pem_crc32c = 3;</code>
     */
    private $pem_crc32c = null;
    /**
     * The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key.
     * Provided here for verification.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    private $name = '';
    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 5;</code>
     */
    private $protection_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pem
     *           The public key, encoded in PEM format. For more information, see the
     *           [RFC 7468](https://tools.ietf.org/html/rfc7468) sections for
     *           [General Considerations](https://tools.ietf.org/html/rfc7468#section-2) and
     *           [Textual Encoding of Subject Public Key Info]
     *           (https://tools.ietf.org/html/rfc7468#section-13).
     *     @type int $algorithm
     *           The [Algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm] associated
     *           with this key.
     *     @type \Google\Protobuf\Int64Value $pem_crc32c
     *           Integrity verification field. A CRC32C checksum of the returned
     *           [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem]. An integrity check of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] can be performed
     *           by computing the CRC32C checksum of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] and
     *           comparing your results to this field. Discard the response in case of
     *           non-matching checksum values, and perform a limited number of retries. A
     *           persistent mismatch may indicate an issue in your computation of the CRC32C
     *           checksum.
     *           Note: This field is defined as int64 for reasons of compatibility across
     *           different languages. However, it is a non-negative integer, which will
     *           never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     *           that support this type.
     *           NOTE: This field is in Beta.
     *     @type string $name
     *           The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key.
     *           Provided here for verification.
     *           NOTE: This field is in Beta.
     *     @type int $protection_level
     *           The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The public key, encoded in PEM format. For more information, see the
     * [RFC 7468](https://tools.ietf.org/html/rfc7468) sections for
     * [General Considerations](https://tools.ietf.org/html/rfc7468#section-2) and
     * [Textual Encoding of Subject Public Key Info]
     * (https://tools.ietf.org/html/rfc7468#section-13).
     *
     * Generated from protobuf field <code>string pem = 1;</code>
     * @return string
     */
    public function getPem()
    {
        return $this->pem;
    }

    /**
     * The public key, encoded in PEM format. For more information, see the
     * [RFC 7468](https://tools.ietf.org/html/rfc7468) sections for
     * [General Considerations](https://tools.ietf.org/html/rfc7468#section-2) and
     * [Textual Encoding of Subject Public Key Info]
     * (https://tools.ietf.org/html/rfc7468#section-13).
     *
     * Generated from protobuf field <code>string pem = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPem($var)
    {
        GPBUtil::checkString($var, True);
        $this->pem = $var;

        return $this;
    }

    /**
     * The [Algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm] associated
     * with this key.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 2;</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * The [Algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm] associated
     * with this key.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\CryptoKeyVersion\CryptoKeyVersionAlgorithm::class);
        $this->algorithm = $var;

        return $this;
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem]. An integrity check of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] can be performed
     * by computing the CRC32C checksum of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pem_crc32c = 3;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getPemCrc32C()
    {
        return $this->pem_crc32c;
    }

    public function hasPemCrc32C()
    {
        return isset($this->pem_crc32c);
    }

    public function clearPemCrc32C()
    {
        unset($this->pem_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getPemCrc32C()</code>

     * Integrity verification field. A CRC32C checksum of the returned
     * [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem]. An integrity check of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] can be performed
     * by computing the CRC32C checksum of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pem_crc32c = 3;</code>
     * @return int|string|null
     */
    public function getPemCrc32CValue()
    {
        return $this->readWrapperValue("pem_crc32c");
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem]. An integrity check of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] can be performed
     * by computing the CRC32C checksum of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pem_crc32c = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPemCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->pem_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Integrity verification field. A CRC32C checksum of the returned
     * [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem]. An integrity check of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] can be performed
     * by computing the CRC32C checksum of [PublicKey.pem][google.cloud.kms.v1.PublicKey.pem] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pem_crc32c = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPemCrc32CValue($var)
    {
        $this->writeWrapperValue("pem_crc32c", $var);
        return $this;}

    /**
     * The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key.
     * Provided here for verification.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key.
     * Provided here for verification.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 5;</code>
     * @return int
     */
    public function getProtectionLevel()
    {
        return $this->protection_level;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setProtectionLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\ProtectionLevel::class);
        $this->protection_level = $var;

        return $this;
    }

}

