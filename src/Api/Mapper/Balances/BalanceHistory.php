<?php

namespace AcceptcoinApi\Api\Mapper\Balances;

use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class BalanceHistory
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Balances\BalanceHistory")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Balances\BalanceHistory")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}