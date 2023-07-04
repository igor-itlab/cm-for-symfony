<?php

namespace AcceptcoinApi\Api\Request\Project;

use AcceptcoinApi\Api\AcceptcoinRequest;
use AcceptcoinApi\Services\Method;

class ProjectSettings extends AcceptcoinRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/project-settings');

        if ($criteria) {
            $rb->setQueryParams($criteria);
        }

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/project-settings/$id");

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function delete(string $id): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::DELETE())
            ->setPath("api/project-settings/$id");

        return $this->send();
    }
}