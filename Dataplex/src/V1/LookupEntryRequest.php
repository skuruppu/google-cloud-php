<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Lookup Entry request using permissions in the source system.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.LookupEntryRequest</code>
 */
class LookupEntryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project to which the request should be attributed in the
     * following form: `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Optional. View to control which parts of an entry the service should
     * return.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $view = 0;
    /**
     * Optional. Limits the aspects returned to the provided aspect types.
     * It only works for CUSTOM view.
     *
     * Generated from protobuf field <code>repeated string aspect_types = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $aspect_types;
    /**
     * Optional. Limits the aspects returned to those associated with the provided
     * paths within the Entry. It only works for CUSTOM view.
     *
     * Generated from protobuf field <code>repeated string paths = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $paths;
    /**
     * Required. The resource name of the Entry:
     * `projects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}`.
     *
     * Generated from protobuf field <code>string entry = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $entry = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The project to which the request should be attributed in the
     *           following form: `projects/{project}/locations/{location}`.
     *     @type int $view
     *           Optional. View to control which parts of an entry the service should
     *           return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $aspect_types
     *           Optional. Limits the aspects returned to the provided aspect types.
     *           It only works for CUSTOM view.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $paths
     *           Optional. Limits the aspects returned to those associated with the provided
     *           paths within the Entry. It only works for CUSTOM view.
     *     @type string $entry
     *           Required. The resource name of the Entry:
     *           `projects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project to which the request should be attributed in the
     * following form: `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The project to which the request should be attributed in the
     * following form: `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. View to control which parts of an entry the service should
     * return.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. View to control which parts of an entry the service should
     * return.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\EntryView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Optional. Limits the aspects returned to the provided aspect types.
     * It only works for CUSTOM view.
     *
     * Generated from protobuf field <code>repeated string aspect_types = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAspectTypes()
    {
        return $this->aspect_types;
    }

    /**
     * Optional. Limits the aspects returned to the provided aspect types.
     * It only works for CUSTOM view.
     *
     * Generated from protobuf field <code>repeated string aspect_types = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAspectTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->aspect_types = $arr;

        return $this;
    }

    /**
     * Optional. Limits the aspects returned to those associated with the provided
     * paths within the Entry. It only works for CUSTOM view.
     *
     * Generated from protobuf field <code>repeated string paths = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * Optional. Limits the aspects returned to those associated with the provided
     * paths within the Entry. It only works for CUSTOM view.
     *
     * Generated from protobuf field <code>repeated string paths = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->paths = $arr;

        return $this;
    }

    /**
     * Required. The resource name of the Entry:
     * `projects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}`.
     *
     * Generated from protobuf field <code>string entry = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Required. The resource name of the Entry:
     * `projects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}`.
     *
     * Generated from protobuf field <code>string entry = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEntry($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry = $var;

        return $this;
    }

}

