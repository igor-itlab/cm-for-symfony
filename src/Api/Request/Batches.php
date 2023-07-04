<?php

namespace App\Api\Request;

use App\Api\AcceptcoinRequest;
use App\Services\Method;

class Batches extends AcceptcoinRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/batches');

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
            ->setPath("api/batches/$id");

        return $this->send();
    }

    /**
     * @param string $name
     * @param string $projectId
     * @param array $payouts
     * @param string $projectPaymentMethodsId
     * @return mixed
     */
    public function create(
        string $name,
        string $projectId,
        array  $payouts,
        string $projectPaymentMethodsId
    ): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath('api/batches')
            ->setBody([
                'name' => $name,
                'project' => $projectId,
                'payouts' => $payouts,
                'projectPaymentMethod' => $projectPaymentMethodsId
            ]);

        return $this->send();
    }

    /**
     * @param string $id
     * @param string $twoFa
     * @param string $amount
     * @return mixed
     */
    public function start(string $id, string $twoFa, string $amount): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::PUT())
            ->setPath("api/start-batches/$id")
            ->setBody(['twoFa' => $twoFa, 'amount' => $amount]);

        return $this->send();
    }

    /**
     * @param string $id
     * @param string $twoFa
     * @return mixed
     */
    public function cancel(string $id, string $twoFa): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::PUT())
            ->setPath("api/cancel-batches/$id")
            ->setBody(['twoFa' => $twoFa]);

        return $this->send();
    }


}