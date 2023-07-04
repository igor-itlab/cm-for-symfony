<?php

namespace AcceptcoinApi\Api\Mapper\Project;

use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class ProjectSettings
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\ProjectSettings")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\ProjectSettings")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\ProjectSettings")
     */
    public function delete(Response $response): array
    {
        return $response->getResponseContent();
    }
}