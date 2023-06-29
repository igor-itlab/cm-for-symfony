<?php

namespace App\Api\Request\PaymentMethod;

use App\Api\AcceptcoinRequest;
use App\Services\Method;

class PaymentMethod extends AcceptcoinRequest
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


}