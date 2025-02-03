<?php
/*
 * Copyright 2025 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/entity_type.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Client;

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
use Google\Cloud\Dialogflow\V2\BatchCreateEntitiesRequest;
use Google\Cloud\Dialogflow\V2\BatchDeleteEntitiesRequest;
use Google\Cloud\Dialogflow\V2\BatchDeleteEntityTypesRequest;
use Google\Cloud\Dialogflow\V2\BatchUpdateEntitiesRequest;
use Google\Cloud\Dialogflow\V2\BatchUpdateEntityTypesRequest;
use Google\Cloud\Dialogflow\V2\BatchUpdateEntityTypesResponse;
use Google\Cloud\Dialogflow\V2\CreateEntityTypeRequest;
use Google\Cloud\Dialogflow\V2\DeleteEntityTypeRequest;
use Google\Cloud\Dialogflow\V2\EntityType;
use Google\Cloud\Dialogflow\V2\EntityType\Entity;
use Google\Cloud\Dialogflow\V2\GetEntityTypeRequest;
use Google\Cloud\Dialogflow\V2\ListEntityTypesRequest;
use Google\Cloud\Dialogflow\V2\UpdateEntityTypeRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use Google\Protobuf\Struct;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Service for managing [EntityTypes][google.cloud.dialogflow.v2.EntityType].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<OperationResponse> batchCreateEntitiesAsync(BatchCreateEntitiesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> batchDeleteEntitiesAsync(BatchDeleteEntitiesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> batchDeleteEntityTypesAsync(BatchDeleteEntityTypesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> batchUpdateEntitiesAsync(BatchUpdateEntitiesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> batchUpdateEntityTypesAsync(BatchUpdateEntityTypesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<EntityType> createEntityTypeAsync(CreateEntityTypeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteEntityTypeAsync(DeleteEntityTypeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<EntityType> getEntityTypeAsync(GetEntityTypeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listEntityTypesAsync(ListEntityTypesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<EntityType> updateEntityTypeAsync(UpdateEntityTypeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class EntityTypesClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.v2.EntityTypes';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dialogflow.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/entity_types_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/entity_types_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/entity_types_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/entity_types_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a agent
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted agent resource.
     */
    public static function agentName(string $project): string
    {
        return self::getPathTemplate('agent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a entity_type
     * resource.
     *
     * @param string $project
     * @param string $entityType
     *
     * @return string The formatted entity_type resource.
     */
    public static function entityTypeName(string $project, string $entityType): string
    {
        return self::getPathTemplate('entityType')->render([
            'project' => $project,
            'entity_type' => $entityType,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_agent resource.
     *
     * @param string $project
     *
     * @return string The formatted project_agent resource.
     */
    public static function projectAgentName(string $project): string
    {
        return self::getPathTemplate('projectAgent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_entity_type resource.
     *
     * @param string $project
     * @param string $entityType
     *
     * @return string The formatted project_entity_type resource.
     */
    public static function projectEntityTypeName(string $project, string $entityType): string
    {
        return self::getPathTemplate('projectEntityType')->render([
            'project' => $project,
            'entity_type' => $entityType,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted project_location_agent resource.
     */
    public static function projectLocationAgentName(string $project, string $location): string
    {
        return self::getPathTemplate('projectLocationAgent')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_entity_type resource.
     *
     * @param string $project
     * @param string $location
     * @param string $entityType
     *
     * @return string The formatted project_location_entity_type resource.
     */
    public static function projectLocationEntityTypeName(string $project, string $location, string $entityType): string
    {
        return self::getPathTemplate('projectLocationEntityType')->render([
            'project' => $project,
            'location' => $location,
            'entity_type' => $entityType,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/agent
     * - entityType: projects/{project}/agent/entityTypes/{entity_type}
     * - projectAgent: projects/{project}/agent
     * - projectEntityType: projects/{project}/agent/entityTypes/{entity_type}
     * - projectLocationAgent: projects/{project}/locations/{location}/agent
     * - projectLocationEntityType: projects/{project}/locations/{location}/agent/entityTypes/{entity_type}
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
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
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
     * Creates multiple new entities in the specified entity type.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see EntityTypesClient::batchCreateEntitiesAsync()} .
     *
     * @example samples/V2/EntityTypesClient/batch_create_entities.php
     *
     * @param BatchCreateEntitiesRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
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
    public function batchCreateEntities(BatchCreateEntitiesRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchCreateEntities', $request, $callOptions)->wait();
    }

    /**
     * Deletes entities in the specified entity type.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see EntityTypesClient::batchDeleteEntitiesAsync()} .
     *
     * @example samples/V2/EntityTypesClient/batch_delete_entities.php
     *
     * @param BatchDeleteEntitiesRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
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
    public function batchDeleteEntities(BatchDeleteEntitiesRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchDeleteEntities', $request, $callOptions)->wait();
    }

    /**
     * Deletes entity types in the specified agent.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see EntityTypesClient::batchDeleteEntityTypesAsync()} .
     *
     * @example samples/V2/EntityTypesClient/batch_delete_entity_types.php
     *
     * @param BatchDeleteEntityTypesRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function batchDeleteEntityTypes(
        BatchDeleteEntityTypesRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('BatchDeleteEntityTypes', $request, $callOptions)->wait();
    }

    /**
     * Updates or creates multiple entities in the specified entity type. This
     * method does not affect entities in the entity type that aren't explicitly
     * specified in the request.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     *
     * The async variant is {@see EntityTypesClient::batchUpdateEntitiesAsync()} .
     *
     * @example samples/V2/EntityTypesClient/batch_update_entities.php
     *
     * @param BatchUpdateEntitiesRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
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
    public function batchUpdateEntities(BatchUpdateEntitiesRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('BatchUpdateEntities', $request, $callOptions)->wait();
    }

    /**
     * Updates/Creates multiple entity types in the specified agent.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`: An empty [Struct
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#struct)
     * - `response`:
     * [BatchUpdateEntityTypesResponse][google.cloud.dialogflow.v2.BatchUpdateEntityTypesResponse]
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see EntityTypesClient::batchUpdateEntityTypesAsync()} .
     *
     * @example samples/V2/EntityTypesClient/batch_update_entity_types.php
     *
     * @param BatchUpdateEntityTypesRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function batchUpdateEntityTypes(
        BatchUpdateEntityTypesRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('BatchUpdateEntityTypes', $request, $callOptions)->wait();
    }

    /**
     * Creates an entity type in the specified agent.
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see EntityTypesClient::createEntityTypeAsync()} .
     *
     * @example samples/V2/EntityTypesClient/create_entity_type.php
     *
     * @param CreateEntityTypeRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return EntityType
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createEntityType(CreateEntityTypeRequest $request, array $callOptions = []): EntityType
    {
        return $this->startApiCall('CreateEntityType', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified entity type.
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see EntityTypesClient::deleteEntityTypeAsync()} .
     *
     * @example samples/V2/EntityTypesClient/delete_entity_type.php
     *
     * @param DeleteEntityTypeRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
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
    public function deleteEntityType(DeleteEntityTypeRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteEntityType', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified entity type.
     *
     * The async variant is {@see EntityTypesClient::getEntityTypeAsync()} .
     *
     * @example samples/V2/EntityTypesClient/get_entity_type.php
     *
     * @param GetEntityTypeRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return EntityType
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getEntityType(GetEntityTypeRequest $request, array $callOptions = []): EntityType
    {
        return $this->startApiCall('GetEntityType', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of all entity types in the specified agent.
     *
     * The async variant is {@see EntityTypesClient::listEntityTypesAsync()} .
     *
     * @example samples/V2/EntityTypesClient/list_entity_types.php
     *
     * @param ListEntityTypesRequest $request     A request to house fields associated with the call.
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
    public function listEntityTypes(ListEntityTypesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListEntityTypes', $request, $callOptions);
    }

    /**
     * Updates the specified entity type.
     *
     * Note: You should always train an agent prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/es/docs/training).
     *
     * The async variant is {@see EntityTypesClient::updateEntityTypeAsync()} .
     *
     * @example samples/V2/EntityTypesClient/update_entity_type.php
     *
     * @param UpdateEntityTypeRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return EntityType
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateEntityType(UpdateEntityTypeRequest $request, array $callOptions = []): EntityType
    {
        return $this->startApiCall('UpdateEntityType', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see EntityTypesClient::getLocationAsync()} .
     *
     * @example samples/V2/EntityTypesClient/get_location.php
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
     * The async variant is {@see EntityTypesClient::listLocationsAsync()} .
     *
     * @example samples/V2/EntityTypesClient/list_locations.php
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
}
