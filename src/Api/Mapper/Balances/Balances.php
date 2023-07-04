<?php

namespace AcceptcoinApi\Api\Mapper\Balances;

use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class Balances
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Balances\Balances")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Balances\Balances")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Balances\Balances")
     */
    public function getBalanceStatistic(Response $response): array
    {
        return $response->getResponseContent();
    }
}