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
 * https://github.com/googleapis/googleapis/blob/master/google/ads/admanager/v1/custom_targeting_value_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Ads\AdManager\V1\Client;

use Google\Ads\AdManager\V1\CustomTargetingValue;
use Google\Ads\AdManager\V1\GetCustomTargetingValueRequest;
use Google\Ads\AdManager\V1\ListCustomTargetingValuesRequest;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Provides methods for handling `CustomTargetingValue` objects.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<CustomTargetingValue> getCustomTargetingValueAsync(GetCustomTargetingValueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listCustomTargetingValuesAsync(ListCustomTargetingValuesRequest $request, array $optionalArgs = [])
 */
final class CustomTargetingValueServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.ads.admanager.v1.CustomTargetingValueService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'admanager.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'admanager.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/custom_targeting_value_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/custom_targeting_value_service_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ . '/../resources/custom_targeting_value_service_rest_client_config.php',
                ],
            ],
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
        return ['rest'];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * custom_targeting_key resource.
     *
     * @param string $networkCode
     * @param string $customTargetingKey
     *
     * @return string The formatted custom_targeting_key resource.
     */
    public static function customTargetingKeyName(string $networkCode, string $customTargetingKey): string
    {
        return self::getPathTemplate('customTargetingKey')->render([
            'network_code' => $networkCode,
            'custom_targeting_key' => $customTargetingKey,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * custom_targeting_value resource.
     *
     * @param string $networkCode
     * @param string $customTargetingKey
     * @param string $customTargetingValue
     *
     * @return string The formatted custom_targeting_value resource.
     */
    public static function customTargetingValueName(
        string $networkCode,
        string $customTargetingKey,
        string $customTargetingValue
    ): string {
        return self::getPathTemplate('customTargetingValue')->render([
            'network_code' => $networkCode,
            'custom_targeting_key' => $customTargetingKey,
            'custom_targeting_value' => $customTargetingValue,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - customTargetingKey: networks/{network_code}/customTargetingKeys/{custom_targeting_key}
     * - customTargetingValue: networks/{network_code}/customTargetingKeys/{custom_targeting_key}/customTargetingValues/{custom_targeting_value}
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
     *           as "<uri>:<port>". Default 'admanager.googleapis.com:443'.
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
     * API to retrieve a `CustomTargetingValue` object.
     *
     * The async variant is
     * {@see CustomTargetingValueServiceClient::getCustomTargetingValueAsync()} .
     *
     * @example samples/V1/CustomTargetingValueServiceClient/get_custom_targeting_value.php
     *
     * @param GetCustomTargetingValueRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return CustomTargetingValue
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getCustomTargetingValue(
        GetCustomTargetingValueRequest $request,
        array $callOptions = []
    ): CustomTargetingValue {
        return $this->startApiCall('GetCustomTargetingValue', $request, $callOptions)->wait();
    }

    /**
     * API to retrieve a list of `CustomTargetingValue` objects.
     *
     * The async variant is
     * {@see CustomTargetingValueServiceClient::listCustomTargetingValuesAsync()} .
     *
     * @example samples/V1/CustomTargetingValueServiceClient/list_custom_targeting_values.php
     *
     * @param ListCustomTargetingValuesRequest $request     A request to house fields associated with the call.
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
    public function listCustomTargetingValues(
        ListCustomTargetingValuesRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListCustomTargetingValues', $request, $callOptions);
    }
}
