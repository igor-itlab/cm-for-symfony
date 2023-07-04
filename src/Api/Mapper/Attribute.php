<?php

namespace App\Api\Mapper;

use App\Mapper;
use App\Response;
use App\ResponseBy;

class Attribute extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Attribute")
     */
    public function getAttributesBalances(Response $response): array
    {
        return $response->getResponseContent();
    }
}