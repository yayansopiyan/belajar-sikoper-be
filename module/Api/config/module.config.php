<?php

declare(strict_types=1);

use Api\V1\Rpc\Detail\DetailControllerFactory;
use Api\V1\Rpc\Grid\GridControllerFactory;

return [
    'controllers'                   => [
        'factories' => [
            'Api\\V1\\Rpc\\Grid\\Controller'   => GridControllerFactory::class,
            'Api\\V1\\Rpc\\Detail\\Controller' => DetailControllerFactory::class,
        ],
    ],
    'router'                        => [
        'routes' => [
            'api.rpc.grid'   => [
                'type'    => 'Segment',
                'options' => [
                    'route'    => '/solr/grid',
                    'defaults' => [
                        'controller' => 'Api\\V1\\Rpc\\Grid\\Controller',
                        'action'     => 'grid',
                    ],
                ],
            ],
            'api.rpc.detail' => [
                'type'    => 'Segment',
                'options' => [
                    'route'    => '/solr/detail[/:id]',
                    'defaults' => [
                        'controller' => 'Api\\V1\\Rpc\\Detail\\Controller',
                        'action'     => 'detail',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning'          => [
        'uri' => [
            0 => 'api.rpc.grid',
            1 => 'api.rpc.detail',
        ],
    ],
    'api-tools-rpc'                 => [
        'Api\\V1\\Rpc\\Grid\\Controller'   => [
            'service_name' => 'grid',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name'   => 'api.rpc.grid',
        ],
        'Api\\V1\\Rpc\\Detail\\Controller' => [
            'service_name' => 'detail',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name'   => 'api.rpc.detail',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers'            => [
            'Api\\V1\\Rpc\\Grid\\Controller'   => 'Json',
            'Api\\V1\\Rpc\\Detail\\Controller' => 'Json',
        ],
        'accept_whitelist'       => [
            'Api\\V1\\Rpc\\Grid\\Controller'   => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'Api\\V1\\Rpc\\Detail\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'Api\\V1\\Rpc\\Grid\\Controller'   => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'Api\\V1\\Rpc\\Detail\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
];
