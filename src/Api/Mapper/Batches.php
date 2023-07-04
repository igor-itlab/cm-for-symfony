<?php

namespace AcceptcoinApi\Api\Mapper;

use AcceptcoinApi\Mapper;
use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class Batches extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Batches\Batches")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Batches\Batches")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Batches\Batches")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }


    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Batches\Batches")
     */
    public function start(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Batches\Batches")
     */
    public function cancel(Response $response): array
    {
        return [$response->getResponseContent()];
    }

}