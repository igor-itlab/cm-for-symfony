<?php

namespace AcceptcoinApi\Api\Mapper\PaymentMethod;

use AcceptcoinApi\Mapper;
use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class PaymentMethod extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\PaymentMethod\PaymentMethod")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\PaymentMethod\PaymentMethod")
     */
    public function getProjectPaymentMethods(Response $response): array
    {
        return $response->getResponseContent();
    }
}