<?php

namespace AcceptcoinApi\Api\Mapper;

use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class User
{

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\User\User")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\User\User")
     */
    public function update(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}