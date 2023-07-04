<?php

namespace App\Api\Request;

use App\Api\AcceptcoinRequest;
use App\Services\Method;

class Attribute extends AcceptcoinRequest
{
    /**
     * @param string $balanceId
     * @param string $transactionType
     * @param string $projectId
     * @return mixed
     */
    public function getAttributesBalances(string $balanceId, string $transactionType, string $projectId): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/balances-attributes")
            ->setQueryParams([
                'balanceId' => $balanceId,
                'transactionType' => $transactionType,
                'projectId' => $projectId
            ]);

        return $this->send();
    }
}