<?php

declare(strict_types=1);

namespace Api\V1\Rpc\Grid;

use Laminas\ServiceManager\ServiceManager;

class GridControllerFactory
{
    public function __invoke(ServiceManager $services): object
    {
        return new GridController(
            $services->get('Config')
        );
    }
}
