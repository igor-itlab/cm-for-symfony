<?php

namespace AcceptcoinApi\Api\Response\Project;

use AcceptcoinApi\Api\Response\User\User;

/**
 * Class Project
 */
class Project
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $deleted;

    /**
     * @var bool
     */
    protected bool $active;

    /**
     * @var bool
     */
    protected bool $approved;

    /**
     * @var string
     */
    protected string $siteUrl;

    /**
     * @var bool
     */
    protected bool $isStabling;

    /**
     * @var bool
     */
    protected bool $inBodyFee;

    /**
     * @var bool
     */
    protected bool $isFixedCourse;

    /**
     * @var int
     */
    protected int $createdAt;

    /**
     * @var User
     */
    protected User $user;

    /**
     * @var ProjectSettings[]
     */
    protected array $projectSettings;

    /**
     * @return array
     */
    public function getProjectSettings(): array
    {
        return $this->projectSettings;
    }

    /**
     * @param array $projectSettings
     * @return Project
     */
    public function setProjectSettings(array $projectSettings): Project
    {
        $this->projectSettings = $projectSettings;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Project
     */
    public function setUser(User $user): Project
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return Project
     */
    public function setDeleted(bool $deleted): Project
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return Project
     */
    public function setActive(bool $active): Project
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return bool
     */
    public function isApproved(): bool
    {
        return $this->approved;
    }

    /**
     * @param bool $approved
     * @return Project
     */
    public function setApproved(bool $approved): Project
    {
        $this->approved = $approved;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteUrl(): string
    {
        return $this->siteUrl;
    }

    /**
     * @param string $siteUrl
     * @return Project
     */
    public function setSiteUrl(string $siteUrl): Project
    {
        $this->siteUrl = $siteUrl;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStabling(): bool
    {
        return $this->isStabling;
    }

    /**
     * @param bool $isStabling
     * @return Project
     */
    public function setIsStabling(bool $isStabling): Project
    {
        $this->isStabling = $isStabling;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInBodyFee(): bool
    {
        return $this->inBodyFee;
    }

    /**
     * @param bool $inBodyFee
     * @return Project
     */
    public function setInBodyFee(bool $inBodyFee): Project
    {
        $this->inBodyFee = $inBodyFee;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFixedCourse(): bool
    {
        return $this->isFixedCourse;
    }

    /**
     * @param bool $isFixedCourse
     * @return Project
     */
    public function setIsFixedCourse(bool $isFixedCourse): Project
    {
        $this->isFixedCourse = $isFixedCourse;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Project
     */
    public function setId(string $id): Project
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Project
     */
    public function setName(string $name): Project
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     * @return Project
     */
    public function setCreatedAt(int $createdAt): Project
    {
        $this->createdAt = $createdAt;

        return $this;
    }

}