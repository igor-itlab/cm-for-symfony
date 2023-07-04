<?php

namespace App\Api\Mapper;

use App\Mapper;
use App\Response;
use App\ResponseBy;

class Batches extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Batches\Batches")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Batches\Batches")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Batches\Batches")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }


    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Batches\Batches")
     */
    public function start(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Batches\Batches")
     */
    public function cancel(Response $response): array
    {
        return [$response->getResponseContent()];
    }

}