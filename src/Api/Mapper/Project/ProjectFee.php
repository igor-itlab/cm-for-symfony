<?php

namespace AcceptcoinApi\Api\Mapper\Project;

use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

class ProjectFee
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\ProjectFee")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }
}