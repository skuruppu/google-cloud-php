<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/sessions.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for manifest generation.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.ManifestOptions</code>
 */
class ManifestOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * If specified, the output manifest will only return renditions matching the
     * specified filters.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.RenditionFilter include_renditions = 1;</code>
     */
    private $include_renditions;
    /**
     * If specified, the output manifest will orders the video and muxed
     * renditions by bitrate according to the ordering policy.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.ManifestOptions.OrderPolicy bitrate_order = 2;</code>
     */
    protected $bitrate_order = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Video\Stitcher\V1\RenditionFilter>|\Google\Protobuf\Internal\RepeatedField $include_renditions
     *           If specified, the output manifest will only return renditions matching the
     *           specified filters.
     *     @type int $bitrate_order
     *           If specified, the output manifest will orders the video and muxed
     *           renditions by bitrate according to the ordering policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Sessions::initOnce();
        parent::__construct($data);
    }

    /**
     * If specified, the output manifest will only return renditions matching the
     * specified filters.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.RenditionFilter include_renditions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeRenditions()
    {
        return $this->include_renditions;
    }

    /**
     * If specified, the output manifest will only return renditions matching the
     * specified filters.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.RenditionFilter include_renditions = 1;</code>
     * @param array<\Google\Cloud\Video\Stitcher\V1\RenditionFilter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeRenditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Stitcher\V1\RenditionFilter::class);
        $this->include_renditions = $arr;

        return $this;
    }

    /**
     * If specified, the output manifest will orders the video and muxed
     * renditions by bitrate according to the ordering policy.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.ManifestOptions.OrderPolicy bitrate_order = 2;</code>
     * @return int
     */
    public function getBitrateOrder()
    {
        return $this->bitrate_order;
    }

    /**
     * If specified, the output manifest will orders the video and muxed
     * renditions by bitrate according to the ordering policy.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.ManifestOptions.OrderPolicy bitrate_order = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBitrateOrder($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Stitcher\V1\ManifestOptions\OrderPolicy::class);
        $this->bitrate_order = $var;

        return $this;
    }

}

