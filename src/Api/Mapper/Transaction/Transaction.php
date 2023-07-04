<?php

namespace App\Api\Mapper\Transaction;

use App\Mapper;
use App\Response;
use App\ResponseBy;

class Transaction extends Mapper
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
     */
    public function retryCallback(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Transaction\Transaction")
     */
    public function update(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}