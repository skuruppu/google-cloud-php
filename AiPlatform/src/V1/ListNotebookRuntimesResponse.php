<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/notebook_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [NotebookService.ListNotebookRuntimes][google.cloud.aiplatform.v1.NotebookService.ListNotebookRuntimes].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListNotebookRuntimesResponse</code>
 */
class ListNotebookRuntimesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of NotebookRuntimes in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NotebookRuntime notebook_runtimes = 1;</code>
     */
    private $notebook_runtimes;
    /**
     * A token to retrieve next page of results.
     * Pass to
     * [ListNotebookRuntimesRequest.page_token][google.cloud.aiplatform.v1.ListNotebookRuntimesRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\NotebookRuntime>|\Google\Protobuf\Internal\RepeatedField $notebook_runtimes
     *           List of NotebookRuntimes in the requested page.
     *     @type string $next_page_token
     *           A token to retrieve next page of results.
     *           Pass to
     *           [ListNotebookRuntimesRequest.page_token][google.cloud.aiplatform.v1.ListNotebookRuntimesRequest.page_token]
     *           to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NotebookService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of NotebookRuntimes in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NotebookRuntime notebook_runtimes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotebookRuntimes()
    {
        return $this->notebook_runtimes;
    }

    /**
     * List of NotebookRuntimes in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NotebookRuntime notebook_runtimes = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\NotebookRuntime>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotebookRuntimes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\NotebookRuntime::class);
        $this->notebook_runtimes = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to
     * [ListNotebookRuntimesRequest.page_token][google.cloud.aiplatform.v1.ListNotebookRuntimesRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to
     * [ListNotebookRuntimesRequest.page_token][google.cloud.aiplatform.v1.ListNotebookRuntimesRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

