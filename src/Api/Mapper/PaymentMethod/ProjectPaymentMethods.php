<?php

namespace AcceptcoinApi\Api\Mapper\PaymentMethod;

use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class ProjectPaymentMethods
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\ProjectPaymentMethods")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\ProjectPaymentMethods")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\ProjectPaymentMethods")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\ProjectPaymentMethods")
     */
    public function update(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Attribute")
     */
    public function getAttributesById(Response $response): array
    {
        return $response->getResponseContent();
    }

}