<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for creating a QaScorecardRevision.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.CreateQaScorecardRevisionRequest</code>
 */
class CreateQaScorecardRevisionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the QaScorecardRevision.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The QaScorecardRevision to create.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QaScorecardRevision qa_scorecard_revision = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $qa_scorecard_revision = null;
    /**
     * Optional. A unique ID for the new QaScorecardRevision. This ID will become
     * the final component of the QaScorecardRevision's resource name. If no ID is
     * specified, a server-generated ID will be used.
     * This value should be 4-64 characters and must match the regular
     * expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     *
     * Generated from protobuf field <code>string qa_scorecard_revision_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $qa_scorecard_revision_id = '';

    /**
     * @param string                                                     $parent                Required. The parent resource of the QaScorecardRevision. Please see
     *                                                                                          {@see ContactCenterInsightsClient::qaScorecardName()} for help formatting this field.
     * @param \Google\Cloud\ContactCenterInsights\V1\QaScorecardRevision $qaScorecardRevision   Required. The QaScorecardRevision to create.
     * @param string                                                     $qaScorecardRevisionId Optional. A unique ID for the new QaScorecardRevision. This ID will become
     *                                                                                          the final component of the QaScorecardRevision's resource name. If no ID is
     *                                                                                          specified, a server-generated ID will be used.
     *
     *                                                                                          This value should be 4-64 characters and must match the regular
     *                                                                                          expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\CreateQaScorecardRevisionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ContactCenterInsights\V1\QaScorecardRevision $qaScorecardRevision, string $qaScorecardRevisionId): self
    {
        return (new self())
            ->setParent($parent)
            ->setQaScorecardRevision($qaScorecardRevision)
            ->setQaScorecardRevisionId($qaScorecardRevisionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the QaScorecardRevision.
     *     @type \Google\Cloud\ContactCenterInsights\V1\QaScorecardRevision $qa_scorecard_revision
     *           Required. The QaScorecardRevision to create.
     *     @type string $qa_scorecard_revision_id
     *           Optional. A unique ID for the new QaScorecardRevision. This ID will become
     *           the final component of the QaScorecardRevision's resource name. If no ID is
     *           specified, a server-generated ID will be used.
     *           This value should be 4-64 characters and must match the regular
     *           expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the QaScorecardRevision.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the QaScorecardRevision.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The QaScorecardRevision to create.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QaScorecardRevision qa_scorecard_revision = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\QaScorecardRevision|null
     */
    public function getQaScorecardRevision()
    {
        return $this->qa_scorecard_revision;
    }

    public function hasQaScorecardRevision()
    {
        return isset($this->qa_scorecard_revision);
    }

    public function clearQaScorecardRevision()
    {
        unset($this->qa_scorecard_revision);
    }

    /**
     * Required. The QaScorecardRevision to create.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QaScorecardRevision qa_scorecard_revision = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\QaScorecardRevision $var
     * @return $this
     */
    public function setQaScorecardRevision($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\QaScorecardRevision::class);
        $this->qa_scorecard_revision = $var;

        return $this;
    }

    /**
     * Optional. A unique ID for the new QaScorecardRevision. This ID will become
     * the final component of the QaScorecardRevision's resource name. If no ID is
     * specified, a server-generated ID will be used.
     * This value should be 4-64 characters and must match the regular
     * expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     *
     * Generated from protobuf field <code>string qa_scorecard_revision_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQaScorecardRevisionId()
    {
        return $this->qa_scorecard_revision_id;
    }

    /**
     * Optional. A unique ID for the new QaScorecardRevision. This ID will become
     * the final component of the QaScorecardRevision's resource name. If no ID is
     * specified, a server-generated ID will be used.
     * This value should be 4-64 characters and must match the regular
     * expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     *
     * Generated from protobuf field <code>string qa_scorecard_revision_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQaScorecardRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->qa_scorecard_revision_id = $var;

        return $this;
    }

}

