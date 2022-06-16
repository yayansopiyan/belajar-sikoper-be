<?php

declare(strict_types=1);

namespace Api\V1\Rpc\Detail;

use Laminas\ApiTools\ApiProblem\ApiProblem;
use Laminas\ApiTools\ApiProblem\ApiProblemResponse;
use Laminas\Mvc\Controller\AbstractActionController;
use Solarium\Client;
use Solarium\Core\Client\Adapter\Curl;
use Symfony\Component\EventDispatcher\EventDispatcher;

class DetailController extends AbstractActionController
{
    protected array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return ApiProblemResponse|mixed|void
     */
    public function detailAction()
    {
        $id = $this->getEvent()->getRouteMatch()->getParam('id');

        $solrClient = new Client(new Curl(), new EventDispatcher(), $this->config['solarium']);
        $query      = $solrClient->createSelect();

        $query->addFilterQuery([
            'key'   => "id",
            'query' => "id:{$id}",
            'tag'   => 'include',
        ]);

        $result = $solrClient->execute($query);
        if ($result->getData()['response']['numFound'] === 0) {
            return new ApiProblemResponse(new ApiProblem(404, 'not found'));
        } elseif ($result->getData()['response']['numFound'] === 1) {
            return $result->getData()['response']['docs'][0];
        }
    }
}
