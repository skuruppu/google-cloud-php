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

// [START run_v2_generated_Jobs_CreateJob_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Run\V2\ExecutionTemplate;
use Google\Cloud\Run\V2\Job;
use Google\Cloud\Run\V2\JobsClient;
use Google\Cloud\Run\V2\TaskTemplate;
use Google\Rpc\Status;

/**
 * Creates a Job.
 *
 * @param string $formattedParent The location and project in which this Job should be created.
 *                                Format: projects/{project}/locations/{location}, where {project} can be
 *                                project id or number. Please see
 *                                {@see JobsClient::locationName()} for help formatting this field.
 * @param string $jobId           The unique identifier for the Job. The name of the job becomes
 *                                {parent}/jobs/{job_id}.
 */
function create_job_sample(string $formattedParent, string $jobId): void
{
    // Create a client.
    $jobsClient = new JobsClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $jobTemplateTemplate = new TaskTemplate();
    $jobTemplate = (new ExecutionTemplate())
        ->setTemplate($jobTemplateTemplate);
    $job = (new Job())
        ->setTemplate($jobTemplate);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $jobsClient->createJob($formattedParent, $job, $jobId);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Job $result */
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
    $formattedParent = JobsClient::locationName('[PROJECT]', '[LOCATION]');
    $jobId = '[JOB_ID]';

    create_job_sample($formattedParent, $jobId);
}
// [END run_v2_generated_Jobs_CreateJob_sync]
