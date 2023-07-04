<?php

namespace App\Api\Mapper\Project;


use App\Mapper;
use App\Response;
use App\ResponseBy;

/**
 * @package AcceptcoinApi/Api/Mapper
 */
class Project extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\Project")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\Project")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\Project")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\Project")
     */
    public function update(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\Project")
     */
    public function addTrustedIpAddresses(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\Project")
     */
    public function delete(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="App\Api\Response\Project\Project")
     */
    public function getProjectsByBalance(Response $response): array
    {
        return $response->getResponseContent();

    }
}