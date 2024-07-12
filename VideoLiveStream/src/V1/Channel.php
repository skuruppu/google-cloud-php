<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Channel resource represents the processor that does a user-defined
 * "streaming" operation, which includes getting an input stream through an
 * input, transcoding it to multiple renditions, and publishing output live
 * streams in certain formats (for example, HLS or DASH) to the specified
 * location.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.Channel</code>
 */
class Channel extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the channel, in the form of:
     * `projects/{project}/locations/{location}/channels/{channelId}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * User-defined key/value metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * A list of input attachments that this channel uses.
     * One channel can have multiple inputs as the input sources. Only one
     * input can be selected as the input source at one time.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.InputAttachment input_attachments = 16;</code>
     */
    private $input_attachments;
    /**
     * Output only. The
     * [InputAttachment.key][google.cloud.video.livestream.v1.InputAttachment.key]
     * that serves as the current input source. The first input in the
     * [input_attachments][google.cloud.video.livestream.v1.Channel.input_attachments]
     * is the initial input source.
     *
     * Generated from protobuf field <code>string active_input = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $active_input = '';
    /**
     * Required. Information about the output (that is, the Cloud Storage bucket
     * to store the generated live stream).
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Channel.Output output = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $output = null;
    /**
     * List of elementary streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.ElementaryStream elementary_streams = 10;</code>
     */
    private $elementary_streams;
    /**
     * List of multiplexing settings for output streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.MuxStream mux_streams = 11;</code>
     */
    private $mux_streams;
    /**
     * List of output manifests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.Manifest manifests = 12;</code>
     */
    private $manifests;
    /**
     * List of output sprite sheets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.SpriteSheet sprite_sheets = 13;</code>
     */
    private $sprite_sheets;
    /**
     * Output only. State of the streaming operation.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Channel.StreamingState streaming_state = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $streaming_state = 0;
    /**
     * Output only. A description of the reason for the streaming error. This
     * property is always present when
     * [streaming_state][google.cloud.video.livestream.v1.Channel.streaming_state]
     * is
     * [STREAMING_ERROR][google.cloud.video.livestream.v1.Channel.StreamingState.STREAMING_ERROR].
     *
     * Generated from protobuf field <code>.google.rpc.Status streaming_error = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $streaming_error = null;
    /**
     * Configuration of platform logs for this channel.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.LogConfig log_config = 19;</code>
     */
    protected $log_config = null;
    /**
     * Configuration of timecode for this channel.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.TimecodeConfig timecode_config = 21;</code>
     */
    protected $timecode_config = null;
    /**
     * Encryption configurations for this channel. Each configuration has an ID
     * which is referred to by each MuxStream to indicate which configuration is
     * used for that output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.Encryption encryptions = 24;</code>
     */
    private $encryptions;
    /**
     * The configuration for input sources defined in
     * [input_attachments][google.cloud.video.livestream.v1.Channel.input_attachments].
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.InputConfig input_config = 25;</code>
     */
    protected $input_config = null;
    /**
     * Optional. Configuration for retention of output files for this channel.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.RetentionConfig retention_config = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $retention_config = null;
    /**
     * Optional. List of static overlay images. Those images display over the
     * output content for the whole duration of the live stream.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.StaticOverlay static_overlays = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $static_overlays;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the channel, in the form of:
     *           `projects/{project}/locations/{location}/channels/{channelId}`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The update time.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           User-defined key/value metadata.
     *     @type array<\Google\Cloud\Video\LiveStream\V1\InputAttachment>|\Google\Protobuf\Internal\RepeatedField $input_attachments
     *           A list of input attachments that this channel uses.
     *           One channel can have multiple inputs as the input sources. Only one
     *           input can be selected as the input source at one time.
     *     @type string $active_input
     *           Output only. The
     *           [InputAttachment.key][google.cloud.video.livestream.v1.InputAttachment.key]
     *           that serves as the current input source. The first input in the
     *           [input_attachments][google.cloud.video.livestream.v1.Channel.input_attachments]
     *           is the initial input source.
     *     @type \Google\Cloud\Video\LiveStream\V1\Channel\Output $output
     *           Required. Information about the output (that is, the Cloud Storage bucket
     *           to store the generated live stream).
     *     @type array<\Google\Cloud\Video\LiveStream\V1\ElementaryStream>|\Google\Protobuf\Internal\RepeatedField $elementary_streams
     *           List of elementary streams.
     *     @type array<\Google\Cloud\Video\LiveStream\V1\MuxStream>|\Google\Protobuf\Internal\RepeatedField $mux_streams
     *           List of multiplexing settings for output streams.
     *     @type array<\Google\Cloud\Video\LiveStream\V1\Manifest>|\Google\Protobuf\Internal\RepeatedField $manifests
     *           List of output manifests.
     *     @type array<\Google\Cloud\Video\LiveStream\V1\SpriteSheet>|\Google\Protobuf\Internal\RepeatedField $sprite_sheets
     *           List of output sprite sheets.
     *     @type int $streaming_state
     *           Output only. State of the streaming operation.
     *     @type \Google\Rpc\Status $streaming_error
     *           Output only. A description of the reason for the streaming error. This
     *           property is always present when
     *           [streaming_state][google.cloud.video.livestream.v1.Channel.streaming_state]
     *           is
     *           [STREAMING_ERROR][google.cloud.video.livestream.v1.Channel.StreamingState.STREAMING_ERROR].
     *     @type \Google\Cloud\Video\LiveStream\V1\LogConfig $log_config
     *           Configuration of platform logs for this channel.
     *     @type \Google\Cloud\Video\LiveStream\V1\TimecodeConfig $timecode_config
     *           Configuration of timecode for this channel.
     *     @type array<\Google\Cloud\Video\LiveStream\V1\Encryption>|\Google\Protobuf\Internal\RepeatedField $encryptions
     *           Encryption configurations for this channel. Each configuration has an ID
     *           which is referred to by each MuxStream to indicate which configuration is
     *           used for that output.
     *     @type \Google\Cloud\Video\LiveStream\V1\InputConfig $input_config
     *           The configuration for input sources defined in
     *           [input_attachments][google.cloud.video.livestream.v1.Channel.input_attachments].
     *     @type \Google\Cloud\Video\LiveStream\V1\RetentionConfig $retention_config
     *           Optional. Configuration for retention of output files for this channel.
     *     @type array<\Google\Cloud\Video\LiveStream\V1\StaticOverlay>|\Google\Protobuf\Internal\RepeatedField $static_overlays
     *           Optional. List of static overlay images. Those images display over the
     *           output content for the whole duration of the live stream.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the channel, in the form of:
     * `projects/{project}/locations/{location}/channels/{channelId}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the channel, in the form of:
     * `projects/{project}/locations/{location}/channels/{channelId}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * A list of input attachments that this channel uses.
     * One channel can have multiple inputs as the input sources. Only one
     * input can be selected as the input source at one time.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.InputAttachment input_attachments = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputAttachments()
    {
        return $this->input_attachments;
    }

    /**
     * A list of input attachments that this channel uses.
     * One channel can have multiple inputs as the input sources. Only one
     * input can be selected as the input source at one time.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.InputAttachment input_attachments = 16;</code>
     * @param array<\Google\Cloud\Video\LiveStream\V1\InputAttachment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputAttachments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\LiveStream\V1\InputAttachment::class);
        $this->input_attachments = $arr;

        return $this;
    }

    /**
     * Output only. The
     * [InputAttachment.key][google.cloud.video.livestream.v1.InputAttachment.key]
     * that serves as the current input source. The first input in the
     * [input_attachments][google.cloud.video.livestream.v1.Channel.input_attachments]
     * is the initial input source.
     *
     * Generated from protobuf field <code>string active_input = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getActiveInput()
    {
        return $this->active_input;
    }

    /**
     * Output only. The
     * [InputAttachment.key][google.cloud.video.livestream.v1.InputAttachment.key]
     * that serves as the current input source. The first input in the
     * [input_attachments][google.cloud.video.livestream.v1.Channel.input_attachments]
     * is the initial input source.
     *
     * Generated from protobuf field <code>string active_input = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setActiveInput($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_input = $var;

        return $this;
    }

    /**
     * Required. Information about the output (that is, the Cloud Storage bucket
     * to store the generated live stream).
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Channel.Output output = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Video\LiveStream\V1\Channel\Output|null
     */
    public function getOutput()
    {
        return $this->output;
    }

    public function hasOutput()
    {
        return isset($this->output);
    }

    public function clearOutput()
    {
        unset($this->output);
    }

    /**
     * Required. Information about the output (that is, the Cloud Storage bucket
     * to store the generated live stream).
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Channel.Output output = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Video\LiveStream\V1\Channel\Output $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\Channel\Output::class);
        $this->output = $var;

        return $this;
    }

    /**
     * List of elementary streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.ElementaryStream elementary_streams = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getElementaryStreams()
    {
        return $this->elementary_streams;
    }

    /**
     * List of elementary streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.ElementaryStream elementary_streams = 10;</code>
     * @param array<\Google\Cloud\Video\LiveStream\V1\ElementaryStream>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setElementaryStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\LiveStream\V1\ElementaryStream::class);
        $this->elementary_streams = $arr;

        return $this;
    }

    /**
     * List of multiplexing settings for output streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.MuxStream mux_streams = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMuxStreams()
    {
        return $this->mux_streams;
    }

    /**
     * List of multiplexing settings for output streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.MuxStream mux_streams = 11;</code>
     * @param array<\Google\Cloud\Video\LiveStream\V1\MuxStream>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMuxStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\LiveStream\V1\MuxStream::class);
        $this->mux_streams = $arr;

        return $this;
    }

    /**
     * List of output manifests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.Manifest manifests = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getManifests()
    {
        return $this->manifests;
    }

    /**
     * List of output manifests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.Manifest manifests = 12;</code>
     * @param array<\Google\Cloud\Video\LiveStream\V1\Manifest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setManifests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\LiveStream\V1\Manifest::class);
        $this->manifests = $arr;

        return $this;
    }

    /**
     * List of output sprite sheets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.SpriteSheet sprite_sheets = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpriteSheets()
    {
        return $this->sprite_sheets;
    }

    /**
     * List of output sprite sheets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.SpriteSheet sprite_sheets = 13;</code>
     * @param array<\Google\Cloud\Video\LiveStream\V1\SpriteSheet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpriteSheets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\LiveStream\V1\SpriteSheet::class);
        $this->sprite_sheets = $arr;

        return $this;
    }

    /**
     * Output only. State of the streaming operation.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Channel.StreamingState streaming_state = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStreamingState()
    {
        return $this->streaming_state;
    }

    /**
     * Output only. State of the streaming operation.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Channel.StreamingState streaming_state = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStreamingState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\LiveStream\V1\Channel\StreamingState::class);
        $this->streaming_state = $var;

        return $this;
    }

    /**
     * Output only. A description of the reason for the streaming error. This
     * property is always present when
     * [streaming_state][google.cloud.video.livestream.v1.Channel.streaming_state]
     * is
     * [STREAMING_ERROR][google.cloud.video.livestream.v1.Channel.StreamingState.STREAMING_ERROR].
     *
     * Generated from protobuf field <code>.google.rpc.Status streaming_error = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStreamingError()
    {
        return $this->streaming_error;
    }

    public function hasStreamingError()
    {
        return isset($this->streaming_error);
    }

    public function clearStreamingError()
    {
        unset($this->streaming_error);
    }

    /**
     * Output only. A description of the reason for the streaming error. This
     * property is always present when
     * [streaming_state][google.cloud.video.livestream.v1.Channel.streaming_state]
     * is
     * [STREAMING_ERROR][google.cloud.video.livestream.v1.Channel.StreamingState.STREAMING_ERROR].
     *
     * Generated from protobuf field <code>.google.rpc.Status streaming_error = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStreamingError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->streaming_error = $var;

        return $this;
    }

    /**
     * Configuration of platform logs for this channel.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.LogConfig log_config = 19;</code>
     * @return \Google\Cloud\Video\LiveStream\V1\LogConfig|null
     */
    public function getLogConfig()
    {
        return $this->log_config;
    }

    public function hasLogConfig()
    {
        return isset($this->log_config);
    }

    public function clearLogConfig()
    {
        unset($this->log_config);
    }

    /**
     * Configuration of platform logs for this channel.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.LogConfig log_config = 19;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\LogConfig $var
     * @return $this
     */
    public function setLogConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\LogConfig::class);
        $this->log_config = $var;

        return $this;
    }

    /**
     * Configuration of timecode for this channel.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.TimecodeConfig timecode_config = 21;</code>
     * @return \Google\Cloud\Video\LiveStream\V1\TimecodeConfig|null
     */
    public function getTimecodeConfig()
    {
        return $this->timecode_config;
    }

    public function hasTimecodeConfig()
    {
        return isset($this->timecode_config);
    }

    public function clearTimecodeConfig()
    {
        unset($this->timecode_config);
    }

    /**
     * Configuration of timecode for this channel.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.TimecodeConfig timecode_config = 21;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\TimecodeConfig $var
     * @return $this
     */
    public function setTimecodeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\TimecodeConfig::class);
        $this->timecode_config = $var;

        return $this;
    }

    /**
     * Encryption configurations for this channel. Each configuration has an ID
     * which is referred to by each MuxStream to indicate which configuration is
     * used for that output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.Encryption encryptions = 24;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEncryptions()
    {
        return $this->encryptions;
    }

    /**
     * Encryption configurations for this channel. Each configuration has an ID
     * which is referred to by each MuxStream to indicate which configuration is
     * used for that output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.Encryption encryptions = 24;</code>
     * @param array<\Google\Cloud\Video\LiveStream\V1\Encryption>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEncryptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\LiveStream\V1\Encryption::class);
        $this->encryptions = $arr;

        return $this;
    }

    /**
     * The configuration for input sources defined in
     * [input_attachments][google.cloud.video.livestream.v1.Channel.input_attachments].
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.InputConfig input_config = 25;</code>
     * @return \Google\Cloud\Video\LiveStream\V1\InputConfig|null
     */
    public function getInputConfig()
    {
        return $this->input_config;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * The configuration for input sources defined in
     * [input_attachments][google.cloud.video.livestream.v1.Channel.input_attachments].
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.InputConfig input_config = 25;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\InputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\InputConfig::class);
        $this->input_config = $var;

        return $this;
    }

    /**
     * Optional. Configuration for retention of output files for this channel.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.RetentionConfig retention_config = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Video\LiveStream\V1\RetentionConfig|null
     */
    public function getRetentionConfig()
    {
        return $this->retention_config;
    }

    public function hasRetentionConfig()
    {
        return isset($this->retention_config);
    }

    public function clearRetentionConfig()
    {
        unset($this->retention_config);
    }

    /**
     * Optional. Configuration for retention of output files for this channel.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.RetentionConfig retention_config = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Video\LiveStream\V1\RetentionConfig $var
     * @return $this
     */
    public function setRetentionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\RetentionConfig::class);
        $this->retention_config = $var;

        return $this;
    }

    /**
     * Optional. List of static overlay images. Those images display over the
     * output content for the whole duration of the live stream.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.StaticOverlay static_overlays = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStaticOverlays()
    {
        return $this->static_overlays;
    }

    /**
     * Optional. List of static overlay images. Those images display over the
     * output content for the whole duration of the live stream.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.StaticOverlay static_overlays = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Video\LiveStream\V1\StaticOverlay>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStaticOverlays($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\LiveStream\V1\StaticOverlay::class);
        $this->static_overlays = $arr;

        return $this;
    }

}

