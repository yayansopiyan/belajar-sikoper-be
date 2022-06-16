<?php

declare(strict_types=1);

namespace Api\V1\Rpc\Grid;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Stdlib\Parameters;
use Solarium\Client;
use Solarium\Core\Client\Adapter\Curl;
use Solarium\QueryType\Select\Result\Result;
use Symfony\Component\EventDispatcher\EventDispatcher;

class GridController extends AbstractActionController
{
    protected array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return array|void
     */
    public function gridAction()
    {
        $solrClient = new Client(new Curl(), new EventDispatcher(), $this->config['solarium']);
        $query      = $solrClient->createSelect();

        $params = $this->getEvent()->getRequest()->getQuery();
        if ($params instanceof Parameters) {
            if ($params->offsetExists('rows')) {
                $query->setRows((int) $params['rows']);
            }

            if ($params->offsetExists('start')) {
                $query->setStart((int) $params['start']);
            }

            $query->addFilterQuery([
                'key'   => "{$params['field']}",
                'query' => "{$params['field']}:{$params['value']}",
                'tag'   => 'include',
            ]);
        }

        $result = $solrClient->execute($query);
        if ($result instanceof Result) {
            return $result->getData();
        }
    }
}
