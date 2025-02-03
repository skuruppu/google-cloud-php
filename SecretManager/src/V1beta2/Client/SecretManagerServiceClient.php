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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/secretmanager/v1beta2/service.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\SecretManager\V1beta2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\SecretManager\V1beta2\AccessSecretVersionRequest;
use Google\Cloud\SecretManager\V1beta2\AccessSecretVersionResponse;
use Google\Cloud\SecretManager\V1beta2\AddSecretVersionRequest;
use Google\Cloud\SecretManager\V1beta2\CreateSecretRequest;
use Google\Cloud\SecretManager\V1beta2\DeleteSecretRequest;
use Google\Cloud\SecretManager\V1beta2\DestroySecretVersionRequest;
use Google\Cloud\SecretManager\V1beta2\DisableSecretVersionRequest;
use Google\Cloud\SecretManager\V1beta2\EnableSecretVersionRequest;
use Google\Cloud\SecretManager\V1beta2\GetSecretRequest;
use Google\Cloud\SecretManager\V1beta2\GetSecretVersionRequest;
use Google\Cloud\SecretManager\V1beta2\ListSecretVersionsRequest;
use Google\Cloud\SecretManager\V1beta2\ListSecretsRequest;
use Google\Cloud\SecretManager\V1beta2\Secret;
use Google\Cloud\SecretManager\V1beta2\SecretVersion;
use Google\Cloud\SecretManager\V1beta2\UpdateSecretRequest;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Secret Manager Service
 *
 * Manages secrets and operations using those secrets. Implements a REST
 * model with the following objects:
 *
 * * [Secret][google.cloud.secretmanager.v1beta2.Secret]
 * * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion]
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @experimental
 *
 * @method PromiseInterface<AccessSecretVersionResponse> accessSecretVersionAsync(AccessSecretVersionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SecretVersion> addSecretVersionAsync(AddSecretVersionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Secret> createSecretAsync(CreateSecretRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteSecretAsync(DeleteSecretRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SecretVersion> destroySecretVersionAsync(DestroySecretVersionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SecretVersion> disableSecretVersionAsync(DisableSecretVersionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SecretVersion> enableSecretVersionAsync(EnableSecretVersionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Secret> getSecretAsync(GetSecretRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SecretVersion> getSecretVersionAsync(GetSecretVersionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listSecretVersionsAsync(ListSecretVersionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listSecretsAsync(ListSecretsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestIamPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Secret> updateSecretAsync(UpdateSecretRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class SecretManagerServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.secretmanager.v1beta2.SecretManagerService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'secretmanager.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'secretmanager.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/secret_manager_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/secret_manager_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/secret_manager_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/secret_manager_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     *
     * @experimental
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     *
     * @experimental
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_secret resource.
     *
     * @param string $project
     * @param string $location
     * @param string $secret
     *
     * @return string The formatted project_location_secret resource.
     *
     * @experimental
     */
    public static function projectLocationSecretName(string $project, string $location, string $secret): string
    {
        return self::getPathTemplate('projectLocationSecret')->render([
            'project' => $project,
            'location' => $location,
            'secret' => $secret,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_secret_secret_version resource.
     *
     * @param string $project
     * @param string $location
     * @param string $secret
     * @param string $secretVersion
     *
     * @return string The formatted project_location_secret_secret_version resource.
     *
     * @experimental
     */
    public static function projectLocationSecretSecretVersionName(
        string $project,
        string $location,
        string $secret,
        string $secretVersion
    ): string {
        return self::getPathTemplate('projectLocationSecretSecretVersion')->render([
            'project' => $project,
            'location' => $location,
            'secret' => $secret,
            'secret_version' => $secretVersion,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_secret resource.
     *
     * @param string $project
     * @param string $secret
     *
     * @return string The formatted project_secret resource.
     *
     * @experimental
     */
    public static function projectSecretName(string $project, string $secret): string
    {
        return self::getPathTemplate('projectSecret')->render([
            'project' => $project,
            'secret' => $secret,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_secret_secret_version resource.
     *
     * @param string $project
     * @param string $secret
     * @param string $secretVersion
     *
     * @return string The formatted project_secret_secret_version resource.
     *
     * @experimental
     */
    public static function projectSecretSecretVersionName(
        string $project,
        string $secret,
        string $secretVersion
    ): string {
        return self::getPathTemplate('projectSecretSecretVersion')->render([
            'project' => $project,
            'secret' => $secret,
            'secret_version' => $secretVersion,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a secret
     * resource.
     *
     * @param string $project
     * @param string $secret
     *
     * @return string The formatted secret resource.
     *
     * @experimental
     */
    public static function secretName(string $project, string $secret): string
    {
        return self::getPathTemplate('secret')->render([
            'project' => $project,
            'secret' => $secret,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * secret_version resource.
     *
     * @param string $project
     * @param string $secret
     * @param string $secretVersion
     *
     * @return string The formatted secret_version resource.
     *
     * @experimental
     */
    public static function secretVersionName(string $project, string $secret, string $secretVersion): string
    {
        return self::getPathTemplate('secretVersion')->render([
            'project' => $project,
            'secret' => $secret,
            'secret_version' => $secretVersion,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a topic
     * resource.
     *
     * @param string $project
     * @param string $topic
     *
     * @return string The formatted topic resource.
     *
     * @experimental
     */
    public static function topicName(string $project, string $topic): string
    {
        return self::getPathTemplate('topic')->render([
            'project' => $project,
            'topic' => $topic,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: projects/{project}/locations/{location}
     * - project: projects/{project}
     * - projectLocationSecret: projects/{project}/locations/{location}/secrets/{secret}
     * - projectLocationSecretSecretVersion: projects/{project}/locations/{location}/secrets/{secret}/versions/{secret_version}
     * - projectSecret: projects/{project}/secrets/{secret}
     * - projectSecretSecretVersion: projects/{project}/secrets/{secret}/versions/{secret_version}
     * - secret: projects/{project}/secrets/{secret}
     * - secretVersion: projects/{project}/secrets/{secret}/versions/{secret_version}
     * - topic: projects/{project}/topics/{topic}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     *
     * @experimental
     */
    public static function parseName(string $formattedName, ?string $template = null): array
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
     *           as "<uri>:<port>". Default 'secretmanager.googleapis.com:443'.
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
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
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
     * Accesses a
     * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion]. This
     * call returns the secret data.
     *
     * `projects/&#42;/secrets/&#42;/versions/latest` is an alias to the most recently
     * created [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * The async variant is
     * {@see SecretManagerServiceClient::accessSecretVersionAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/access_secret_version.php
     *
     * @param AccessSecretVersionRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AccessSecretVersionResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function accessSecretVersion(
        AccessSecretVersionRequest $request,
        array $callOptions = []
    ): AccessSecretVersionResponse {
        return $this->startApiCall('AccessSecretVersion', $request, $callOptions)->wait();
    }

    /**
     * Creates a new
     * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion]
     * containing secret data and attaches it to an existing
     * [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * The async variant is {@see SecretManagerServiceClient::addSecretVersionAsync()}
     * .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/add_secret_version.php
     *
     * @param AddSecretVersionRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SecretVersion
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function addSecretVersion(AddSecretVersionRequest $request, array $callOptions = []): SecretVersion
    {
        return $this->startApiCall('AddSecretVersion', $request, $callOptions)->wait();
    }

    /**
     * Creates a new [Secret][google.cloud.secretmanager.v1beta2.Secret]
     * containing no
     * [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * The async variant is {@see SecretManagerServiceClient::createSecretAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/create_secret.php
     *
     * @param CreateSecretRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Secret
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function createSecret(CreateSecretRequest $request, array $callOptions = []): Secret
    {
        return $this->startApiCall('CreateSecret', $request, $callOptions)->wait();
    }

    /**
     * Deletes a [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * The async variant is {@see SecretManagerServiceClient::deleteSecretAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/delete_secret.php
     *
     * @param DeleteSecretRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function deleteSecret(DeleteSecretRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteSecret', $request, $callOptions)->wait();
    }

    /**
     * Destroys a
     * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * Sets the [state][google.cloud.secretmanager.v1beta2.SecretVersion.state] of
     * the [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion] to
     * [DESTROYED][google.cloud.secretmanager.v1beta2.SecretVersion.State.DESTROYED]
     * and irrevocably destroys the secret data.
     *
     * The async variant is
     * {@see SecretManagerServiceClient::destroySecretVersionAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/destroy_secret_version.php
     *
     * @param DestroySecretVersionRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SecretVersion
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function destroySecretVersion(DestroySecretVersionRequest $request, array $callOptions = []): SecretVersion
    {
        return $this->startApiCall('DestroySecretVersion', $request, $callOptions)->wait();
    }

    /**
     * Disables a
     * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * Sets the [state][google.cloud.secretmanager.v1beta2.SecretVersion.state] of
     * the [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion] to
     * [DISABLED][google.cloud.secretmanager.v1beta2.SecretVersion.State.DISABLED].
     *
     * The async variant is
     * {@see SecretManagerServiceClient::disableSecretVersionAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/disable_secret_version.php
     *
     * @param DisableSecretVersionRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SecretVersion
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function disableSecretVersion(DisableSecretVersionRequest $request, array $callOptions = []): SecretVersion
    {
        return $this->startApiCall('DisableSecretVersion', $request, $callOptions)->wait();
    }

    /**
     * Enables a
     * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * Sets the [state][google.cloud.secretmanager.v1beta2.SecretVersion.state] of
     * the [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion] to
     * [ENABLED][google.cloud.secretmanager.v1beta2.SecretVersion.State.ENABLED].
     *
     * The async variant is
     * {@see SecretManagerServiceClient::enableSecretVersionAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/enable_secret_version.php
     *
     * @param EnableSecretVersionRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SecretVersion
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function enableSecretVersion(EnableSecretVersionRequest $request, array $callOptions = []): SecretVersion
    {
        return $this->startApiCall('EnableSecretVersion', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a secret.
     * Returns empty policy if the secret exists and does not have a policy set.
     *
     * The async variant is {@see SecretManagerServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/get_iam_policy.php
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
     *
     * @experimental
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Gets metadata for a given
     * [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * The async variant is {@see SecretManagerServiceClient::getSecretAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/get_secret.php
     *
     * @param GetSecretRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Secret
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getSecret(GetSecretRequest $request, array $callOptions = []): Secret
    {
        return $this->startApiCall('GetSecret', $request, $callOptions)->wait();
    }

    /**
     * Gets metadata for a
     * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * `projects/&#42;/secrets/&#42;/versions/latest` is an alias to the most recently
     * created [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * The async variant is {@see SecretManagerServiceClient::getSecretVersionAsync()}
     * .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/get_secret_version.php
     *
     * @param GetSecretVersionRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SecretVersion
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getSecretVersion(GetSecretVersionRequest $request, array $callOptions = []): SecretVersion
    {
        return $this->startApiCall('GetSecretVersion', $request, $callOptions)->wait();
    }

    /**
     * Lists [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion].
     * This call does not return secret data.
     *
     * The async variant is
     * {@see SecretManagerServiceClient::listSecretVersionsAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/list_secret_versions.php
     *
     * @param ListSecretVersionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
     *
     * @experimental
     */
    public function listSecretVersions(ListSecretVersionsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListSecretVersions', $request, $callOptions);
    }

    /**
     * Lists [Secrets][google.cloud.secretmanager.v1beta2.Secret].
     *
     * The async variant is {@see SecretManagerServiceClient::listSecretsAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/list_secrets.php
     *
     * @param ListSecretsRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
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
     *
     * @experimental
     */
    public function listSecrets(ListSecretsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListSecrets', $request, $callOptions);
    }

    /**
     * Sets the access control policy on the specified secret. Replaces any
     * existing policy.
     *
     * Permissions on
     * [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion] are
     * enforced according to the policy set on the associated
     * [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * The async variant is {@see SecretManagerServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/set_iam_policy.php
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
     *
     * @experimental
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has for the specified secret.
     * If the secret does not exist, this call returns an empty set of
     * permissions, not a NOT_FOUND error.
     *
     * Note: This operation is designed to be used for building permission-aware
     * UIs and command-line tools, not for authorization checking. This operation
     * may "fail open" without warning.
     *
     * The async variant is
     * {@see SecretManagerServiceClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/test_iam_permissions.php
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
     *
     * @experimental
     */
    public function testIamPermissions(
        TestIamPermissionsRequest $request,
        array $callOptions = []
    ): TestIamPermissionsResponse {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Updates metadata of an existing
     * [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * The async variant is {@see SecretManagerServiceClient::updateSecretAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/update_secret.php
     *
     * @param UpdateSecretRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Secret
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function updateSecret(UpdateSecretRequest $request, array $callOptions = []): Secret
    {
        return $this->startApiCall('UpdateSecret', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see SecretManagerServiceClient::getLocationAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/get_location.php
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
     *
     * @experimental
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see SecretManagerServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1beta2/SecretManagerServiceClient/list_locations.php
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
     *
     * @experimental
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}
