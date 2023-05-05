<?php
/*
 * Copyright 2022 Google LLC
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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START domains_v1beta1_generated_Domains_ConfigureManagementSettings_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Domains\V1beta1\DomainsClient;
use Google\Cloud\Domains\V1beta1\Registration;
use Google\Protobuf\FieldMask;
use Google\Rpc\Status;

/**
 * Updates a `Registration`'s management settings.
 *
 * @param string $formattedRegistration The name of the `Registration` whose management settings are being updated,
 *                                      in the format `projects/&#42;/locations/&#42;/registrations/*`. Please see
 *                                      {@see DomainsClient::registrationName()} for help formatting this field.
 */
function configure_management_settings_sample(string $formattedRegistration): void
{
    // Create a client.
    $domainsClient = new DomainsClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $updateMask = new FieldMask();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $domainsClient->configureManagementSettings($formattedRegistration, $updateMask);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Registration $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedRegistration = DomainsClient::registrationName(
        '[PROJECT]',
        '[LOCATION]',
        '[REGISTRATION]'
    );

    configure_management_settings_sample($formattedRegistration);
}
// [END domains_v1beta1_generated_Domains_ConfigureManagementSettings_sync]
