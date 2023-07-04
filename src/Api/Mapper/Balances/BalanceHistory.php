<?php

namespace App\Api\Mapper\Balances;

use App\Response;
use App\ResponseBy;

class BalanceHistory
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Balances\BalanceHistory")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Balances\BalanceHistory")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}