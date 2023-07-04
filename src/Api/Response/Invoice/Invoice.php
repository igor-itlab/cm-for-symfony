<?php

namespace AcceptcoinApi\Api\Response\Invoice;

use AcceptcoinApi\Api\Response\Project\Project;

abstract class Invoice
{
    /**
     * @var string
     */
    protected string $id;
    /**
     * @var string
     */
    protected string $token;

    /**
     * @var Project
     */
    protected Project $project;

    /**
     * @var string
     */
    protected string $amount;

    /**
     * @var string|null
     */
    protected ?string $referenceId;

    /**
     * @var string
     */
    protected string $returnUrl;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }

    /**
     * @param Project $project
     */
    public function setProject(Project $project): void
    {
        $this->project = $project;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * @param string|null $referenceId
     */
    public function setReferenceId(?string $referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     */
    public function setReturnUrl(string $returnUrl): void
    {
        $this->returnUrl = $returnUrl;
    }

}