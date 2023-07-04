<?php

namespace AcceptcoinApi\Api\Request\Balances;

use AcceptcoinApi\Api\AcceptcoinRequest;
use AcceptcoinApi\Services\Method;

class Balances extends AcceptcoinRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria=null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/balances');

        if ($criteria) {
            $rb->setQueryParams($criteria);
        }

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/balances/$id");

        return $this->send();
    }

    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getBalanceStatistic(array $criteria=null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/balances-user-statistic');

        if ($criteria) {
            $rb->setQueryParams($criteria);
        }

        return $this->send();
    }
}