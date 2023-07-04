<?php

namespace AcceptcoinApi\Api\Request\Project;

use AcceptcoinApi\Api\AcceptcoinRequest;
use AcceptcoinApi\Services\Method;

class ProjectFee extends AcceptcoinRequest
{
    /**
     * @param string $projectId
     * @return mixed
     */
    public function getAll(string $projectId): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/payment-fees')
            ->setQueryParams(['project.id' => $projectId]);

        return $this->send();
    }
}