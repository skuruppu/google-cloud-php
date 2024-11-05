<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1/genai_tuning_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AIPlatform\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AIPlatform\V1\CancelTuningJobRequest;
use Google\Cloud\AIPlatform\V1\CreateTuningJobRequest;
use Google\Cloud\AIPlatform\V1\GetTuningJobRequest;
use Google\Cloud\AIPlatform\V1\ListTuningJobsRequest;
use Google\Cloud\AIPlatform\V1\RebaseTunedModelRequest;
use Google\Cloud\AIPlatform\V1\TuningJob;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: A service for creating and managing GenAI Tuning Jobs.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<void> cancelTuningJobAsync(CancelTuningJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TuningJob> createTuningJobAsync(CreateTuningJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TuningJob> getTuningJobAsync(GetTuningJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listTuningJobsAsync(ListTuningJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> rebaseTunedModelAsync(RebaseTunedModelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestIamPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class GenAiTuningServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.aiplatform.v1.GenAiTuningService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'aiplatform.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/gen_ai_tuning_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/gen_ai_tuning_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/gen_ai_tuning_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/gen_ai_tuning_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a context
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     * @param string $context
     *
     * @return string The formatted context resource.
     */
    public static function contextName(
        string $project,
        string $location,
        string $metadataStore,
        string $context
    ): string {
        return self::getPathTemplate('context')->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
            'context' => $context,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a endpoint
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted endpoint resource.
     */
    public static function endpointName(string $project, string $location, string $endpoint): string
    {
        return self::getPathTemplate('endpoint')->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a model
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $model
     *
     * @return string The formatted model resource.
     */
    public static function modelName(string $project, string $location, string $model): string
    {
        return self::getPathTemplate('model')->render([
            'project' => $project,
            'location' => $location,
            'model' => $model,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a pipeline_job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $pipelineJob
     *
     * @return string The formatted pipeline_job resource.
     */
    public static function pipelineJobName(string $project, string $location, string $pipelineJob): string
    {
        return self::getPathTemplate('pipelineJob')->render([
            'project' => $project,
            'location' => $location,
            'pipeline_job' => $pipelineJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_endpoint resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted project_location_endpoint resource.
     */
    public static function projectLocationEndpointName(string $project, string $location, string $endpoint): string
    {
        return self::getPathTemplate('projectLocationEndpoint')->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_publisher_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $publisher
     * @param string $model
     *
     * @return string The formatted project_location_publisher_model resource.
     */
    public static function projectLocationPublisherModelName(
        string $project,
        string $location,
        string $publisher,
        string $model
    ): string {
        return self::getPathTemplate('projectLocationPublisherModel')->render([
            'project' => $project,
            'location' => $location,
            'publisher' => $publisher,
            'model' => $model,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a tuning_job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $tuningJob
     *
     * @return string The formatted tuning_job resource.
     */
    public static function tuningJobName(string $project, string $location, string $tuningJob): string
    {
        return self::getPathTemplate('tuningJob')->render([
            'project' => $project,
            'location' => $location,
            'tuning_job' => $tuningJob,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - context: projects/{project}/locations/{location}/metadataStores/{metadata_store}/contexts/{context}
     * - endpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - location: projects/{project}/locations/{location}
     * - model: projects/{project}/locations/{location}/models/{model}
     * - pipelineJob: projects/{project}/locations/{location}/pipelineJobs/{pipeline_job}
     * - projectLocationEndpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - projectLocationPublisherModel: projects/{project}/locations/{location}/publishers/{publisher}/models/{model}
     * - tuningJob: projects/{project}/locations/{location}/tuningJobs/{tuning_job}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Cancels a TuningJob.
     * Starts asynchronous cancellation on the TuningJob. The server makes a best
     * effort to cancel the job, but success is not guaranteed. Clients can use
     * [GenAiTuningService.GetTuningJob][google.cloud.aiplatform.v1.GenAiTuningService.GetTuningJob]
     * or other methods to check whether the cancellation succeeded or whether the
     * job completed despite cancellation. On successful cancellation, the
     * TuningJob is not deleted; instead it becomes a job with a
     * [TuningJob.error][google.cloud.aiplatform.v1.TuningJob.error] value with a
     * [google.rpc.Status.code][google.rpc.Status.code] of 1, corresponding to
     * `Code.CANCELLED`, and
     * [TuningJob.state][google.cloud.aiplatform.v1.TuningJob.state] is set to
     * `CANCELLED`.
     *
     * The async variant is {@see GenAiTuningServiceClient::cancelTuningJobAsync()} .
     *
     * @example samples/V1/GenAiTuningServiceClient/cancel_tuning_job.php
     *
     * @param CancelTuningJobRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function cancelTuningJob(CancelTuningJobRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('CancelTuningJob', $request, $callOptions)->wait();
    }

    /**
     * Creates a TuningJob. A created TuningJob right away will be attempted to
     * be run.
     *
     * The async variant is {@see GenAiTuningServiceClient::createTuningJobAsync()} .
     *
     * @example samples/V1/GenAiTuningServiceClient/create_tuning_job.php
     *
     * @param CreateTuningJobRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TuningJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTuningJob(CreateTuningJobRequest $request, array $callOptions = []): TuningJob
    {
        return $this->startApiCall('CreateTuningJob', $request, $callOptions)->wait();
    }

    /**
     * Gets a TuningJob.
     *
     * The async variant is {@see GenAiTuningServiceClient::getTuningJobAsync()} .
     *
     * @example samples/V1/GenAiTuningServiceClient/get_tuning_job.php
     *
     * @param GetTuningJobRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TuningJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTuningJob(GetTuningJobRequest $request, array $callOptions = []): TuningJob
    {
        return $this->startApiCall('GetTuningJob', $request, $callOptions)->wait();
    }

    /**
     * Lists TuningJobs in a Location.
     *
     * The async variant is {@see GenAiTuningServiceClient::listTuningJobsAsync()} .
     *
     * @example samples/V1/GenAiTuningServiceClient/list_tuning_jobs.php
     *
     * @param ListTuningJobsRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listTuningJobs(ListTuningJobsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTuningJobs', $request, $callOptions);
    }

    /**
     * Rebase a TunedModel.
     * Creates a LongRunningOperation that takes a legacy Tuned GenAI model
     * Reference and creates a TuningJob based on newly available model.
     *
     * The async variant is {@see GenAiTuningServiceClient::rebaseTunedModelAsync()} .
     *
     * @example samples/V1/GenAiTuningServiceClient/rebase_tuned_model.php
     *
     * @param RebaseTunedModelRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function rebaseTunedModel(RebaseTunedModelRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RebaseTunedModel', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see GenAiTuningServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/GenAiTuningServiceClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see GenAiTuningServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/GenAiTuningServiceClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see GenAiTuningServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/GenAiTuningServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see GenAiTuningServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/GenAiTuningServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see GenAiTuningServiceClient::testIamPermissionsAsync()}
     * .
     *
     * @example samples/V1/GenAiTuningServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(
        TestIamPermissionsRequest $request,
        array $callOptions = []
    ): TestIamPermissionsResponse {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
