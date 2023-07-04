<?php

namespace AcceptcoinApi\Api\Request\Project;


use AcceptcoinApi\Api\AcceptcoinRequest;
use AcceptcoinApi\MappedBy;
use AcceptcoinApi\Services\Method;

/**
 * Class Project
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="AcceptcoinApi\Api\Mapper\Project\Project")
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
     * @param string $name
     * @param string $siteUrl
     * @return mixed
     */
    public function create(string $name, string $siteUrl): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath('api/projects')
            ->setBody([
                'name' => $name,
                'siteUrl' => $siteUrl
            ]);

        return $this->send();
    }

    /**
     * @param string $id
     * @param array $body
     * @return mixed
     */
    public function update(string $id, array $body): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::PUT())
            ->setPath("api/projects/$id")
            ->setBody($body);

        return $this->send();
    }

    /**
     * @param string $id
     * @param array $body
     * @return mixed
     */
    public function addTrustedIpAddresses(string $id, array $body): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::PUT())
            ->setPath("api/add-trusted-ip-addresses/$id")
            ->setBody($body);

        return $this->send();
    }

    /**
     * @param string $id
     * @param string $twoFa
     * @return mixed
     */
    public function delete(string $id, string $twoFa): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::PUT())
            ->setPath("api/soft-delete/$id")
            ->setBody(['twoFa' => $twoFa]);

        return $this->send();
    }

    /**
     * @param string $balanceId
     * @param string $direction
     * @return mixed
     */
    public function getProjectsByBalance(string $balanceId, string $direction): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/projects-balance")
            ->setQueryParams([
                'balanceId' => $balanceId,
                'direction' => $direction
            ]);

        return $this->send();
    }
}