<?php

namespace App\Api\Request\Project;

use App\Api\AcceptcoinRequest;
use App\Services\Method;

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