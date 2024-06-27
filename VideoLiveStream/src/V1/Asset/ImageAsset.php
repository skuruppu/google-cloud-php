<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1\Asset;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Image represents an image. The supported format is JPEG.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.Asset.ImageAsset</code>
 */
class ImageAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Storage URI of the image. The format is `gs://my-bucket/my-object`.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    protected $uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Cloud Storage URI of the image. The format is `gs://my-bucket/my-object`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Storage URI of the image. The format is `gs://my-bucket/my-object`.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Cloud Storage URI of the image. The format is `gs://my-bucket/my-object`.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

}


