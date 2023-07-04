<?php

namespace App\Api\Mapper\Project;

use App\Response;
use App\ResponseBy;

class ProjectSettings
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\ProjectSettings")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\ProjectSettings")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\ProjectSettings")
     */
    public function delete(Response $response): array
    {
        return $response->getResponseContent();
    }
}