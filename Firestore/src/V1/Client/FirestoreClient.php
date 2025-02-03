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
 * https://github.com/googleapis/googleapis/blob/master/google/firestore/v1/firestore.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Firestore\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\BidiStream;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\ServerStream;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Firestore\V1\BatchGetDocumentsRequest;
use Google\Cloud\Firestore\V1\BatchWriteRequest;
use Google\Cloud\Firestore\V1\BatchWriteResponse;
use Google\Cloud\Firestore\V1\BeginTransactionRequest;
use Google\Cloud\Firestore\V1\BeginTransactionResponse;
use Google\Cloud\Firestore\V1\CommitRequest;
use Google\Cloud\Firestore\V1\CommitResponse;
use Google\Cloud\Firestore\V1\CreateDocumentRequest;
use Google\Cloud\Firestore\V1\DeleteDocumentRequest;
use Google\Cloud\Firestore\V1\Document;
use Google\Cloud\Firestore\V1\GetDocumentRequest;
use Google\Cloud\Firestore\V1\ListCollectionIdsRequest;
use Google\Cloud\Firestore\V1\ListDocumentsRequest;
use Google\Cloud\Firestore\V1\PartitionQueryRequest;
use Google\Cloud\Firestore\V1\RollbackRequest;
use Google\Cloud\Firestore\V1\RunAggregationQueryRequest;
use Google\Cloud\Firestore\V1\RunQueryRequest;
use Google\Cloud\Firestore\V1\UpdateDocumentRequest;
use Google\Cloud\Firestore\V1\Write;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: The Cloud Firestore service.
 *
 * Cloud Firestore is a fast, fully managed, serverless, cloud-native NoSQL
 * document database that simplifies storing, syncing, and querying data for
 * your mobile, web, and IoT apps at global scale. Its client libraries provide
 * live synchronization and offline support, while its security features and
 * integrations with Firebase and Google Cloud Platform accelerate building
 * truly serverless apps.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface<BatchWriteResponse> batchWriteAsync(BatchWriteRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<BeginTransactionResponse> beginTransactionAsync(BeginTransactionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<CommitResponse> commitAsync(CommitRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Document> createDocumentAsync(CreateDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteDocumentAsync(DeleteDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Document> getDocumentAsync(GetDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listCollectionIdsAsync(ListCollectionIdsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listDocumentsAsync(ListDocumentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> partitionQueryAsync(PartitionQueryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> rollbackAsync(RollbackRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Document> updateDocumentAsync(UpdateDocumentRequest $request, array $optionalArgs = [])
 */
final class FirestoreClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.firestore.v1.Firestore';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'firestore.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'firestore.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/datastore',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/firestore_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/firestore_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/firestore_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/firestore_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'firestore.googleapis.com:443'.
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
     * Gets multiple documents.
     *
     * Documents returned by this method are not guaranteed to be returned in the
     * same order that they were requested.
     *
     * @example samples/V1/FirestoreClient/batch_get_documents.php
     *
     * @param BatchGetDocumentsRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchGetDocuments(BatchGetDocumentsRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('BatchGetDocuments', $request, $callOptions);
    }

    /**
     * Applies a batch of write operations.
     *
     * The BatchWrite method does not apply the write operations atomically
     * and can apply them out of order. Method does not allow more than one write
     * per document. Each write succeeds or fails independently. See the
     * [BatchWriteResponse][google.firestore.v1.BatchWriteResponse] for the
     * success status of each write.
     *
     * If you require an atomically applied set of writes, use
     * [Commit][google.firestore.v1.Firestore.Commit] instead.
     *
     * The async variant is {@see FirestoreClient::batchWriteAsync()} .
     *
     * @example samples/V1/FirestoreClient/batch_write.php
     *
     * @param BatchWriteRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return BatchWriteResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchWrite(BatchWriteRequest $request, array $callOptions = []): BatchWriteResponse
    {
        return $this->startApiCall('BatchWrite', $request, $callOptions)->wait();
    }

    /**
     * Starts a new transaction.
     *
     * The async variant is {@see FirestoreClient::beginTransactionAsync()} .
     *
     * @example samples/V1/FirestoreClient/begin_transaction.php
     *
     * @param BeginTransactionRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return BeginTransactionResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function beginTransaction(BeginTransactionRequest $request, array $callOptions = []): BeginTransactionResponse
    {
        return $this->startApiCall('BeginTransaction', $request, $callOptions)->wait();
    }

    /**
     * Commits a transaction, while optionally updating documents.
     *
     * The async variant is {@see FirestoreClient::commitAsync()} .
     *
     * @example samples/V1/FirestoreClient/commit.php
     *
     * @param CommitRequest $request     A request to house fields associated with the call.
     * @param array         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return CommitResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function commit(CommitRequest $request, array $callOptions = []): CommitResponse
    {
        return $this->startApiCall('Commit', $request, $callOptions)->wait();
    }

    /**
     * Creates a new document.
     *
     * The async variant is {@see FirestoreClient::createDocumentAsync()} .
     *
     * @example samples/V1/FirestoreClient/create_document.php
     *
     * @param CreateDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Document
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createDocument(CreateDocumentRequest $request, array $callOptions = []): Document
    {
        return $this->startApiCall('CreateDocument', $request, $callOptions)->wait();
    }

    /**
     * Deletes a document.
     *
     * The async variant is {@see FirestoreClient::deleteDocumentAsync()} .
     *
     * @example samples/V1/FirestoreClient/delete_document.php
     *
     * @param DeleteDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function deleteDocument(DeleteDocumentRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteDocument', $request, $callOptions)->wait();
    }

    /**
     * Gets a single document.
     *
     * The async variant is {@see FirestoreClient::getDocumentAsync()} .
     *
     * @example samples/V1/FirestoreClient/get_document.php
     *
     * @param GetDocumentRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Document
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDocument(GetDocumentRequest $request, array $callOptions = []): Document
    {
        return $this->startApiCall('GetDocument', $request, $callOptions)->wait();
    }

    /**
     * Lists all the collection IDs underneath a document.
     *
     * The async variant is {@see FirestoreClient::listCollectionIdsAsync()} .
     *
     * @example samples/V1/FirestoreClient/list_collection_ids.php
     *
     * @param ListCollectionIdsRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function listCollectionIds(ListCollectionIdsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListCollectionIds', $request, $callOptions);
    }

    /**
     * Lists documents.
     *
     * The async variant is {@see FirestoreClient::listDocumentsAsync()} .
     *
     * @example samples/V1/FirestoreClient/list_documents.php
     *
     * @param ListDocumentsRequest $request     A request to house fields associated with the call.
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
    public function listDocuments(ListDocumentsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDocuments', $request, $callOptions);
    }

    /**
     * Listens to changes. This method is only available via gRPC or WebChannel
     * (not REST).
     *
     * @example samples/V1/FirestoreClient/listen.php
     *
     * @param array $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return BidiStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listen(array $callOptions = []): BidiStream
    {
        return $this->startApiCall('Listen', null, $callOptions);
    }

    /**
     * Partitions a query by returning partition cursors that can be used to run
     * the query in parallel. The returned partition cursors are split points that
     * can be used by RunQuery as starting/end points for the query results.
     *
     * The async variant is {@see FirestoreClient::partitionQueryAsync()} .
     *
     * @example samples/V1/FirestoreClient/partition_query.php
     *
     * @param PartitionQueryRequest $request     A request to house fields associated with the call.
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
    public function partitionQuery(PartitionQueryRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('PartitionQuery', $request, $callOptions);
    }

    /**
     * Rolls back a transaction.
     *
     * The async variant is {@see FirestoreClient::rollbackAsync()} .
     *
     * @example samples/V1/FirestoreClient/rollback.php
     *
     * @param RollbackRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
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
    public function rollback(RollbackRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('Rollback', $request, $callOptions)->wait();
    }

    /**
     * Runs an aggregation query.
     *
     * Rather than producing [Document][google.firestore.v1.Document] results like
     * [Firestore.RunQuery][google.firestore.v1.Firestore.RunQuery], this API
     * allows running an aggregation to produce a series of
     * [AggregationResult][google.firestore.v1.AggregationResult] server-side.
     *
     * High-Level Example:
     *
     * ```
     * -- Return the number of documents in table given a filter.
     * SELECT COUNT(*) FROM ( SELECT * FROM k where a = true );
     * ```
     *
     * @example samples/V1/FirestoreClient/run_aggregation_query.php
     *
     * @param RunAggregationQueryRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function runAggregationQuery(RunAggregationQueryRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('RunAggregationQuery', $request, $callOptions);
    }

    /**
     * Runs a query.
     *
     * @example samples/V1/FirestoreClient/run_query.php
     *
     * @param RunQueryRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return ServerStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function runQuery(RunQueryRequest $request, array $callOptions = []): ServerStream
    {
        return $this->startApiCall('RunQuery', $request, $callOptions);
    }

    /**
     * Updates or inserts a document.
     *
     * The async variant is {@see FirestoreClient::updateDocumentAsync()} .
     *
     * @example samples/V1/FirestoreClient/update_document.php
     *
     * @param UpdateDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Document
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateDocument(UpdateDocumentRequest $request, array $callOptions = []): Document
    {
        return $this->startApiCall('UpdateDocument', $request, $callOptions)->wait();
    }

    /**
     * Streams batches of document updates and deletes, in order. This method is
     * only available via gRPC or WebChannel (not REST).
     *
     * @example samples/V1/FirestoreClient/write.php
     *
     * @param array $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return BidiStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function write(array $callOptions = []): BidiStream
    {
        return $this->startApiCall('Write', null, $callOptions);
    }
}
