<?php

namespace App\Api\Request\Transaction;

use App\Api\AcceptcoinRequest;
use App\Services\Method;

class Transaction extends AcceptcoinRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/transactions');

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
            ->setPath("api/transactions/$id");

        return $this->send();
    }

    /**
     * @param string $id
     * @param int $statusId
     * @return mixed
     */
    public function update(string $id, int $statusId): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::PUT())
            ->setPath("api/transactions/$id")
            ->setBody([
                'status' => "/api/statuses/$statusId"
            ]);

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function retryCallback(string $id): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/transaction/retry-callback/$id");

        return $this->send();
    }
}