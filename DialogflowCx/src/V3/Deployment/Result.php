<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/deployment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Deployment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of the deployment.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Deployment.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * Results of test cases running before the deployment.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/testCases/<TestCaseID>/results/<TestCaseResultID>`.
     *
     * Generated from protobuf field <code>repeated string deployment_test_results = 1 [(.google.api.resource_reference) = {</code>
     */
    private $deployment_test_results;
    /**
     * The name of the experiment triggered by this deployment.
     * Format:
     * projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/experiments/<ExperimentID>.
     *
     * Generated from protobuf field <code>string experiment = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $experiment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $deployment_test_results
     *           Results of test cases running before the deployment.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/testCases/<TestCaseID>/results/<TestCaseResultID>`.
     *     @type string $experiment
     *           The name of the experiment triggered by this deployment.
     *           Format:
     *           projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/experiments/<ExperimentID>.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Deployment::initOnce();
        parent::__construct($data);
    }

    /**
     * Results of test cases running before the deployment.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/testCases/<TestCaseID>/results/<TestCaseResultID>`.
     *
     * Generated from protobuf field <code>repeated string deployment_test_results = 1 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeploymentTestResults()
    {
        return $this->deployment_test_results;
    }

    /**
     * Results of test cases running before the deployment.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/testCases/<TestCaseID>/results/<TestCaseResultID>`.
     *
     * Generated from protobuf field <code>repeated string deployment_test_results = 1 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeploymentTestResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->deployment_test_results = $arr;

        return $this;
    }

    /**
     * The name of the experiment triggered by this deployment.
     * Format:
     * projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/experiments/<ExperimentID>.
     *
     * Generated from protobuf field <code>string experiment = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    /**
     * The name of the experiment triggered by this deployment.
     * Format:
     * projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/experiments/<ExperimentID>.
     *
     * Generated from protobuf field <code>string experiment = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setExperiment($var)
    {
        GPBUtil::checkString($var, True);
        $this->experiment = $var;

        return $this;
    }

}


