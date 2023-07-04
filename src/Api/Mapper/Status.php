<?php

namespace AcceptcoinApi\Api\Mapper;

use AcceptcoinApi\Mapper;
use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class Status extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Status")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Status")
     */
    public function getById(Response $response): array
    {
        return $response->getResponseContent();
    }
}