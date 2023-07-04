<?php

namespace App\Api\Mapper\Project;

use App\Response;
use App\ResponseBy;

class ProjectFee
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\ProjectFee")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }
}