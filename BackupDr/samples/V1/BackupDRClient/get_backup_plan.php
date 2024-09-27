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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START backupdr_v1_generated_BackupDR_GetBackupPlan_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\BackupDR\V1\BackupPlan;
use Google\Cloud\BackupDR\V1\Client\BackupDRClient;
use Google\Cloud\BackupDR\V1\GetBackupPlanRequest;

/**
 * Gets details of a single BackupPlan.
 *
 * @param string $formattedName The resource name of the `BackupPlan` to retrieve.
 *
 *                              Format: `projects/{project}/locations/{location}/backupPlans/{backup_plan}`
 *                              Please see {@see BackupDRClient::backupPlanName()} for help formatting this field.
 */
function get_backup_plan_sample(string $formattedName): void
{
    // Create a client.
    $backupDRClient = new BackupDRClient();

    // Prepare the request message.
    $request = (new GetBackupPlanRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var BackupPlan $response */
        $response = $backupDRClient->getBackupPlan($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $formattedName = BackupDRClient::backupPlanName('[PROJECT]', '[LOCATION]', '[BACKUP_PLAN]');

    get_backup_plan_sample($formattedName);
}
// [END backupdr_v1_generated_BackupDR_GetBackupPlan_sync]
