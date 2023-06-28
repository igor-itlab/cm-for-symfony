<?php

namespace App\Api\Mapper\Invoice;

use App\Mapper;
use App\Response;
use App\ResponseBy;

class IframeInvoice extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Invoice\IframeInvoice")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}