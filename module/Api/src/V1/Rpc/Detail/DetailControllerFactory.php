<?php

declare(strict_types=1);

namespace Api\V1\Rpc\Detail;

use Laminas\ServiceManager\ServiceManager;

class DetailControllerFactory
{
    public function __invoke(ServiceManager $services): object
    {
        return new DetailController(
            $services->get('Config')
        );
    }
}
