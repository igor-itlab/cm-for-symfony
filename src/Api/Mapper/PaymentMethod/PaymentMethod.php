<?php

namespace App\Api\Mapper\PaymentMethod;

use App\Mapper;
use App\Response;
use App\ResponseBy;

class PaymentMethod extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\PaymentMethod\PaymentMethod")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\PaymentMethod\PaymentMethod")
     */
    public function getProjectPaymentMethods(Response $response): array
    {
        return $response->getResponseContent();
    }
}