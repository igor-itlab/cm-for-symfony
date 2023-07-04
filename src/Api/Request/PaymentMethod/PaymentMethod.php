<?php

namespace AcceptcoinApi\Api\Request\PaymentMethod;

use AcceptcoinApi\Api\AcceptcoinRequest;
use AcceptcoinApi\Services\Method;

class PaymentMethod extends AcceptcoinRequest
{
    public const CLIENT_TYPE = "payment";

    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/payment-methods');

        if ($criteria) {
            $rb->setQueryParams($criteria);
        }

        return $this->send();
    }

    /**
     * @param string $projectId
     * @param array|null $criteria
     * @return mixed
     */
    public function getProjectPaymentMethods(
        string $projectId,
        array  $criteria = null
    ): mixed
    {
        $requiredParams = [
            'projectsId' => $projectId,
            'type' => self::CLIENT_TYPE
        ];

        $criteria = $criteria ? array_merge($requiredParams, $criteria) : $requiredParams;

        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/payment-methods/projects');

        if ($criteria) {
            $rb->setQueryParams($criteria);
        }

        return $this->send();
    }


}