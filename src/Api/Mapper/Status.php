<?php

namespace App\Api\Mapper;

use App\Mapper;
use App\Response;
use App\ResponseBy;

class Status extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Status")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Status")
     */
    public function getById(Response $response): array
    {
        return $response->getResponseContent();
    }
}