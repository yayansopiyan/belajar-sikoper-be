<?php

declare(strict_types=1);

return [
    'api-tools-content-negotiation' => [
        'selectors' => [],
    ],
    'db'                            => [
        'adapters' => [
            'dummy' => [],
        ],
    ],
    'router'                        => [
        'routes' => [
            'oauth' => [
                'options' => [
                    'spec'  => '%oauth%',
                    'regex' => '(?P<oauth>(/oauth))',
                ],
                'type'    => 'regex',
            ],
        ],
    ],
    'api-tools-mvc-auth'            => [
        'authentication' => [
            'map' => [
                'Api\\V1' => 'oauth2_mongo',
            ],
        ],
    ],
];
