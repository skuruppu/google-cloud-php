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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/confidentialcomputing/v1/service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ConfidentialComputing\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ConfidentialComputing\V1\Challenge;
use Google\Cloud\ConfidentialComputing\V1\ConfidentialSpaceInfo;
use Google\Cloud\ConfidentialComputing\V1\CreateChallengeRequest;
use Google\Cloud\ConfidentialComputing\V1\GcpCredentials;
use Google\Cloud\ConfidentialComputing\V1\TokenOptions;
use Google\Cloud\ConfidentialComputing\V1\TpmAttestation;
use Google\Cloud\ConfidentialComputing\V1\VerifyAttestationRequest;
use Google\Cloud\ConfidentialComputing\V1\VerifyAttestationResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;

/**
 * Service Description: Service describing handlers for resources
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $confidentialComputingClient = new ConfidentialComputingClient();
 * try {
 *     $formattedParent = $confidentialComputingClient->locationName('[PROJECT]', '[LOCATION]');
 *     $challenge = new Challenge();
 *     $response = $confidentialComputingClient->createChallenge($formattedParent, $challenge);
 * } finally {
 *     $confidentialComputingClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @deprecated Please use the new service client {@see \Google\Cloud\ConfidentialComputing\V1\Client\ConfidentialComputingClient}.
 */
class ConfidentialComputingGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.confidentialcomputing.v1.ConfidentialComputing';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    const SERVICE_ADDRESS = 'confidentialcomputing.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'confidentialcomputing.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $challengeNameTemplate;

    private static $locationNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ .
                '/../resources/confidential_computing_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../resources/confidential_computing_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ .
                '/../resources/confidential_computing_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/confidential_computing_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getChallengeNameTemplate()
    {
        if (self::$challengeNameTemplate == null) {
            self::$challengeNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/challenges/{uuid}'
            );
        }

        return self::$challengeNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}'
            );
        }

        return self::$locationNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'challenge' => self::getChallengeNameTemplate(),
                'location' => self::getLocationNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a challenge
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $uuid
     *
     * @return string The formatted challenge resource.
     */
    public static function challengeName($project, $location, $uuid)
    {
        return self::getChallengeNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'uuid' => $uuid,
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
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - challenge: projects/{project}/locations/{location}/challenges/{uuid}
     * - location: projects/{project}/locations/{location}
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
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException(
                    "Template name $template does not exist"
                );
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException(
            "Input did not match any known format. Input: $formattedName"
        );
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'confidentialcomputing.googleapis.com:443'.
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
    }

    /**
     * Creates a new Challenge in a given project and location.
     *
     * Sample code:
     * ```
     * $confidentialComputingClient = new ConfidentialComputingClient();
     * try {
     *     $formattedParent = $confidentialComputingClient->locationName('[PROJECT]', '[LOCATION]');
     *     $challenge = new Challenge();
     *     $response = $confidentialComputingClient->createChallenge($formattedParent, $challenge);
     * } finally {
     *     $confidentialComputingClient->close();
     * }
     * ```
     *
     * @param string    $parent       Required. The resource name of the location where the Challenge will be
     *                                used, in the format `projects/&#42;/locations/*`.
     * @param Challenge $challenge    Required. The Challenge to be created. Currently this field can be empty as
     *                                all the Challenge fields are set by the server.
     * @param array     $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ConfidentialComputing\V1\Challenge
     *
     * @throws ApiException if the remote call fails
     */
    public function createChallenge(
        $parent,
        $challenge,
        array $optionalArgs = []
    ) {
        $request = new CreateChallengeRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setChallenge($challenge);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'CreateChallenge',
            Challenge::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Verifies the provided attestation info, returning a signed OIDC token.
     *
     * Sample code:
     * ```
     * $confidentialComputingClient = new ConfidentialComputingClient();
     * try {
     *     $formattedChallenge = $confidentialComputingClient->challengeName('[PROJECT]', '[LOCATION]', '[UUID]');
     *     $tpmAttestation = new TpmAttestation();
     *     $response = $confidentialComputingClient->verifyAttestation($formattedChallenge, $tpmAttestation);
     * } finally {
     *     $confidentialComputingClient->close();
     * }
     * ```
     *
     * @param string         $challenge      Required. The name of the Challenge whose nonce was used to generate the
     *                                       attestation, in the format `projects/&#42;/locations/&#42;/challenges/*`. The
     *                                       provided Challenge will be consumed, and cannot be used again.
     * @param TpmAttestation $tpmAttestation Required. The TPM-specific data provided by the attesting platform, used to
     *                                       populate any of the claims regarding platform state.
     * @param array          $optionalArgs   {
     *     Optional.
     *
     *     @type GcpCredentials $gcpCredentials
     *           Optional. Credentials used to populate the "emails" claim in the
     *           claims_token.
     *     @type ConfidentialSpaceInfo $confidentialSpaceInfo
     *           Optional. Optional information related to the Confidential Space TEE.
     *     @type TokenOptions $tokenOptions
     *           Optional. A collection of optional, workload-specified claims that modify
     *           the token output.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ConfidentialComputing\V1\VerifyAttestationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function verifyAttestation(
        $challenge,
        $tpmAttestation,
        array $optionalArgs = []
    ) {
        $request = new VerifyAttestationRequest();
        $requestParamHeaders = [];
        $request->setChallenge($challenge);
        $request->setTpmAttestation($tpmAttestation);
        $requestParamHeaders['challenge'] = $challenge;
        if (isset($optionalArgs['gcpCredentials'])) {
            $request->setGcpCredentials($optionalArgs['gcpCredentials']);
        }

        if (isset($optionalArgs['confidentialSpaceInfo'])) {
            $request->setConfidentialSpaceInfo(
                $optionalArgs['confidentialSpaceInfo']
            );
        }

        if (isset($optionalArgs['tokenOptions'])) {
            $request->setTokenOptions($optionalArgs['tokenOptions']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'VerifyAttestation',
            VerifyAttestationResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets information about a location.
     *
     * Sample code:
     * ```
     * $confidentialComputingClient = new ConfidentialComputingClient();
     * try {
     *     $response = $confidentialComputingClient->getLocation();
     * } finally {
     *     $confidentialComputingClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Resource name for the location.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Location\Location
     *
     * @throws ApiException if the remote call fails
     */
    public function getLocation(array $optionalArgs = [])
    {
        $request = new GetLocationRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetLocation',
            Location::class,
            $optionalArgs,
            $request,
            Call::UNARY_CALL,
            'google.cloud.location.Locations'
        )->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * Sample code:
     * ```
     * $confidentialComputingClient = new ConfidentialComputingClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $confidentialComputingClient->listLocations();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $confidentialComputingClient->listLocations();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $confidentialComputingClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           The resource that owns the locations collection, if applicable.
     *     @type string $filter
     *           The standard list filter.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listLocations(array $optionalArgs = [])
    {
        $request = new ListLocationsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListLocations',
            $optionalArgs,
            ListLocationsResponse::class,
            $request,
            'google.cloud.location.Locations'
        );
    }
}
