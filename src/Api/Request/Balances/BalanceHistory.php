<?php

namespace AcceptcoinApi\Api\Request\Balances;

use AcceptcoinApi\Api\AcceptcoinRequest;
use AcceptcoinApi\Services\Method;

class BalanceHistory extends AcceptcoinRequest
{

    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria=null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/balance-histories');

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
            ->setPath("api/balance-histories/$id");

        return $this->send();
    }
}