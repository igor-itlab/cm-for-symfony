<?php

use Request\Project;

class AcceptcoinResource
{
    /**
     * @var string|null
     */
    private $projectId;
    /**
     * @var string|null
     */
    private $secret;

    /**
     * @param string|null $secret
     * @param string|null $projectId
     */
    public function __construct(string $secret = null, string $projectId = null)
    {
        $this->secret = $secret;
        $this->projectId = $projectId;
    }

    /**
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @param string|null $projectId
     * @return AcceptcoinResource
     */
    public function setProjectId(string $projectId): AcceptcoinResource
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @param string|null $secret
     * @return AcceptcoinResource
     */
    public function setSecret(string $secret): AcceptcoinResource
    {
        $this->secret = $secret;
        return $this;
    }

    public function project(): Project
    {
        return new Project($this);
    }


}