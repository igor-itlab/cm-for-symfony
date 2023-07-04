<?php

namespace AcceptcoinApi\Api\Mapper\Transaction;

use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class Payment
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
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Transaction\Transaction")
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