<?php

namespace App\Api\Mapper;

use App\Response;
use App\ResponseBy;

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