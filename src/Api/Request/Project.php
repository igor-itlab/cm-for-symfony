<?php

namespace App\Api\Request;


use App\MappedBy;
use App\Services\Method;
use App\Api\AcceptcoinRequest;

/**
 * Class Project
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="App\Api\Mapper\Project")
 */
class Project extends AcceptcoinRequest
{

    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null): mixed
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath('api/projects');

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
            ->setPath("api/projects/$id");

        return $this->send();
    }

    /**
     * @param array $body
     * @return mixed
     */
    public function create(array $body): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath('/api/projects')
            ->setBody($body);

        return $this->send();
    }
}