<?php

namespace AcceptcoinApi\Api\Mapper\Project;


use AcceptcoinApi\Mapper;
use AcceptcoinApi\Response;
use AcceptcoinApi\ResponseBy;

/**
 * @package AcceptcoinApi/Api/Mapper
 */
class Project extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\Project")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\Project")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\Project")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\Project")
     */
    public function update(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\Project")
     */
    public function addTrustedIpAddresses(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\Project")
     */
    public function delete(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="AcceptcoinApi\Api\Response\Project\Project")
     */
    public function getProjectsByBalance(Response $response): array
    {
        return $response->getResponseContent();

    }
}