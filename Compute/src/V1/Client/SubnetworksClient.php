<?php
/*
 * Copyright 2023 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\AggregatedListSubnetworksRequest;
use Google\Cloud\Compute\V1\DeleteSubnetworkRequest;
use Google\Cloud\Compute\V1\ExpandIpCidrRangeSubnetworkRequest;
use Google\Cloud\Compute\V1\GetIamPolicySubnetworkRequest;
use Google\Cloud\Compute\V1\GetSubnetworkRequest;
use Google\Cloud\Compute\V1\InsertSubnetworkRequest;
use Google\Cloud\Compute\V1\ListSubnetworksRequest;
use Google\Cloud\Compute\V1\ListUsableSubnetworksRequest;
use Google\Cloud\Compute\V1\PatchSubnetworkRequest;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\RegionOperationsClient;
use Google\Cloud\Compute\V1\SetIamPolicySubnetworkRequest;
use Google\Cloud\Compute\V1\SetPrivateIpGoogleAccessSubnetworkRequest;
use Google\Cloud\Compute\V1\Subnetwork;
use Google\Cloud\Compute\V1\TestIamPermissionsSubnetworkRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: The Subnetworks API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface<PagedListResponse> aggregatedListAsync(AggregatedListSubnetworksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteAsync(DeleteSubnetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> expandIpCidrRangeAsync(ExpandIpCidrRangeSubnetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Subnetwork> getAsync(GetSubnetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicySubnetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> insertAsync(InsertSubnetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listAsync(ListSubnetworksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listUsableAsync(ListUsableSubnetworksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> patchAsync(PatchSubnetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicySubnetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> setPrivateIpGoogleAccessAsync(SetPrivateIpGoogleAccessSubnetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsSubnetworkRequest $request, array $optionalArgs = [])
 */
final class SubnetworksClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.compute.v1.Subnetworks';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'compute.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'compute.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/subnetworks_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/subnetworks_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/subnetworks_rest_client_config.php',
                ],
            ],
            'operationsClientClass' => RegionOperationsClient::class,
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements ClientOptionsTrait::supportedTransports. */
    private static function supportedTransports()
    {
        return [
            'rest',
        ];
    }

    /**
     * Return an RegionOperationsClient object with the same endpoint as $this.
     *
     * @return RegionOperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /** Return the default longrunning operation descriptor config. */
    private function getDefaultOperationDescriptor()
    {
        return [
            'additionalArgumentMethods' => [
                'getProject',
                'getRegion',
            ],
            'getOperationMethod' => 'get',
            'cancelOperationMethod' => null,
            'deleteOperationMethod' => 'delete',
            'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
            'operationErrorMessageMethod' => 'getHttpErrorMessage',
            'operationNameMethod' => 'getName',
            'operationStatusMethod' => 'getStatus',
            'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
            'getOperationRequest' => '\Google\Cloud\Compute\V1\GetRegionOperationRequest',
            'cancelOperationRequest' => null,
            'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteRegionOperationRequest',
        ];
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
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : $this->getDefaultOperationDescriptor();
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *           *Important*: If you accept a credential configuration (credential
     *           JSON/File/Stream) from an external source for authentication to Google Cloud
     *           Platform, you must validate it before providing it to any Google API or library.
     *           Providing an unvalidated credential configuration to Google APIs can compromise
     *           the security of your systems and data. For more information {@see
     *           https://cloud.google.com/docs/authentication/external/externally-sourced-credentials}
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
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
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
     * Retrieves an aggregated list of subnetworks. To prevent failure, Google recommends that you set the `returnPartialSuccess` parameter to `true`.
     *
     * The async variant is {@see SubnetworksClient::aggregatedListAsync()} .
     *
     * @example samples/V1/SubnetworksClient/aggregated_list.php
     *
     * @param AggregatedListSubnetworksRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
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
    public function aggregatedList(AggregatedListSubnetworksRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('AggregatedList', $request, $callOptions);
    }

    /**
     * Deletes the specified subnetwork.
     *
     * The async variant is {@see SubnetworksClient::deleteAsync()} .
     *
     * @example samples/V1/SubnetworksClient/delete.php
     *
     * @param DeleteSubnetworkRequest $request     A request to house fields associated with the call.
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
    public function delete(DeleteSubnetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Delete', $request, $callOptions)->wait();
    }

    /**
     * Expands the IP CIDR range of the subnetwork to a specified value.
     *
     * The async variant is {@see SubnetworksClient::expandIpCidrRangeAsync()} .
     *
     * @example samples/V1/SubnetworksClient/expand_ip_cidr_range.php
     *
     * @param ExpandIpCidrRangeSubnetworkRequest $request     A request to house fields associated with the call.
     * @param array                              $callOptions {
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
    public function expandIpCidrRange(ExpandIpCidrRangeSubnetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ExpandIpCidrRange', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified subnetwork.
     *
     * The async variant is {@see SubnetworksClient::getAsync()} .
     *
     * @example samples/V1/SubnetworksClient/get.php
     *
     * @param GetSubnetworkRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Subnetwork
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function get(GetSubnetworkRequest $request, array $callOptions = []): Subnetwork
    {
        return $this->startApiCall('Get', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. May be empty if no such policy or resource exists.
     *
     * The async variant is {@see SubnetworksClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/SubnetworksClient/get_iam_policy.php
     *
     * @param GetIamPolicySubnetworkRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function getIamPolicy(GetIamPolicySubnetworkRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Creates a subnetwork in the specified project using the data included in the request.
     *
     * The async variant is {@see SubnetworksClient::insertAsync()} .
     *
     * @example samples/V1/SubnetworksClient/insert.php
     *
     * @param InsertSubnetworkRequest $request     A request to house fields associated with the call.
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
    public function insert(InsertSubnetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Insert', $request, $callOptions)->wait();
    }

    /**
     * Retrieves a list of subnetworks available to the specified project.
     *
     * The async variant is {@see SubnetworksClient::listAsync()} .
     *
     * @example samples/V1/SubnetworksClient/list.php
     *
     * @param ListSubnetworksRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function list(ListSubnetworksRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('List', $request, $callOptions);
    }

    /**
     * Retrieves an aggregated list of all usable subnetworks in the project.
     *
     * The async variant is {@see SubnetworksClient::listUsableAsync()} .
     *
     * @example samples/V1/SubnetworksClient/list_usable.php
     *
     * @param ListUsableSubnetworksRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
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
    public function listUsable(ListUsableSubnetworksRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListUsable', $request, $callOptions);
    }

    /**
     * Patches the specified subnetwork with the data included in the request. Only certain fields can be updated with a patch request as indicated in the field descriptions. You must specify the current fingerprint of the subnetwork resource being patched.
     *
     * The async variant is {@see SubnetworksClient::patchAsync()} .
     *
     * @example samples/V1/SubnetworksClient/patch.php
     *
     * @param PatchSubnetworkRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function patch(PatchSubnetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Patch', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any existing policy.
     *
     * The async variant is {@see SubnetworksClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/SubnetworksClient/set_iam_policy.php
     *
     * @param SetIamPolicySubnetworkRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function setIamPolicy(SetIamPolicySubnetworkRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Set whether VMs in this subnet can access Google services without assigning external IP addresses through Private Google Access.
     *
     * The async variant is {@see SubnetworksClient::setPrivateIpGoogleAccessAsync()} .
     *
     * @example samples/V1/SubnetworksClient/set_private_ip_google_access.php
     *
     * @param SetPrivateIpGoogleAccessSubnetworkRequest $request     A request to house fields associated with the call.
     * @param array                                     $callOptions {
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
    public function setPrivateIpGoogleAccess(SetPrivateIpGoogleAccessSubnetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SetPrivateIpGoogleAccess', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     *
     * The async variant is {@see SubnetworksClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/SubnetworksClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsSubnetworkRequest $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsSubnetworkRequest $request, array $callOptions = []): TestPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
