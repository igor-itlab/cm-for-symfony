<?php

namespace AcceptcoinApi\Api\Mapper;

use AcceptcoinApi\Mapper;
use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class Attribute extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Attribute")
     */
    public function getAttributesBalances(Response $response): array
    {
        return $response->getResponseContent();
    }
}