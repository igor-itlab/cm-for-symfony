<?php

namespace AcceptcoinApi\Api\Mapper\Invoice;

use AcceptcoinApi\Mapper;
use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class IframeInvoice extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Invoice\IframeInvoice")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Invoice\IframeInvoice")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}