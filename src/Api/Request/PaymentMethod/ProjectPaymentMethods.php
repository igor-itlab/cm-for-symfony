<?php

namespace App\Api\Request\PaymentMethod;

use App\Api\AcceptcoinRequest;
use App\Services\Method;

class ProjectPaymentMethods extends AcceptcoinRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/project-payment-methods');

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
            ->setPath("api/project-payment-methods/$id");

        return $this->send();
    }

    /**
     * @param string $projectId
     * @param string $paymentMethodId
     * @return mixed
     */
    public function create(string $projectId, string $paymentMethodId): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath('api/project-payment-methods')
            ->setBody([
                'project' => $projectId,
                'paymentMethod' => $paymentMethodId
            ]);

        return $this->send();
    }

    /**
     * @param string $id
     * @param bool $active
     * @return mixed
     */
    public function update(string $id, bool $active): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::PUT())
            ->setPath("api/project-payment-methods/$id")
            ->setBody(['active' => $active]);

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function getAttributesById(string $id): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/project-payment-methods/$id/attributes");

        return $this->send();
    }
}