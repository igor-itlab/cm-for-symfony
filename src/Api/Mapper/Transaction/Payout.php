<?php

namespace App\Api\Mapper\Transaction;

use App\Response;
use App\ResponseBy;

class Payout
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Transaction\Transaction")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Transaction\Transaction")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Transaction\Transaction")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     */
    public function getPaymentAmount(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}