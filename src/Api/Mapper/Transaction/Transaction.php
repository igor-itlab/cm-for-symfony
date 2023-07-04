<?php

namespace AcceptcoinApi\Api\Mapper\Transaction;

use AcceptcoinApi\Mapper;
use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class Transaction extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Transaction\Transaction")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Transaction\Transaction")
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
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Transaction\Transaction")
     */
    public function update(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}