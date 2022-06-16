<?php

declare(strict_types=1);

namespace Api;

use Laminas\ApiTools\Autoloader;
use Laminas\ApiTools\Provider\ApiToolsProviderInterface;

class Module implements ApiToolsProviderInterface
{
    public function getConfig(): array
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig(): array
    {
        return [
            Autoloader::class => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }
}
