<?php

namespace App\Api\Mapper\PaymentMethod;

use App\Response;
use App\ResponseBy;

class ProjectPaymentMethods
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\ProjectPaymentMethods")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\ProjectPaymentMethods")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\ProjectPaymentMethods")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\ProjectPaymentMethods")
     */
    public function update(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Attribute")
     */
    public function getAttributesById(Response $response): array
    {
        return $response->getResponseContent();
    }

}