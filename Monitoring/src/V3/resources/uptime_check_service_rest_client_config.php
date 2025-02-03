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
 * This file was automatically generated - do not edit!
 */

return [
    'interfaces' => [
        'google.monitoring.v3.UptimeCheckService' => [
            'CreateUptimeCheckConfig' => [
                'method' => 'post',
                'uriTemplate' => '/v3/{parent=projects/*}/uptimeCheckConfigs',
                'body' => 'uptime_check_config',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteUptimeCheckConfig' => [
                'method' => 'delete',
                'uriTemplate' => '/v3/{name=projects/*/uptimeCheckConfigs/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetUptimeCheckConfig' => [
                'method' => 'get',
                'uriTemplate' => '/v3/{name=projects/*/uptimeCheckConfigs/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListUptimeCheckConfigs' => [
                'method' => 'get',
                'uriTemplate' => '/v3/{parent=projects/*}/uptimeCheckConfigs',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListUptimeCheckIps' => [
                'method' => 'get',
                'uriTemplate' => '/v3/uptimeCheckIps',
            ],
            'UpdateUptimeCheckConfig' => [
                'method' => 'patch',
                'uriTemplate' => '/v3/{uptime_check_config.name=projects/*/uptimeCheckConfigs/*}',
                'body' => 'uptime_check_config',
                'placeholders' => [
                    'uptime_check_config.name' => [
                        'getters' => [
                            'getUptimeCheckConfig',
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'numericEnums' => true,
];
