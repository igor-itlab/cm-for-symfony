<?php

namespace App\Api\Mapper\Balances;

use App\Response;
use App\ResponseBy;

class Balances
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Balances\Balances")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Balances\Balances")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Balances\Balances")
     */
    public function getBalanceStatistic(Response $response): array
    {
        return $response->getResponseContent();
    }
}