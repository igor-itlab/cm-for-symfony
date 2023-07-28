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
    protected string $returnUrlSuccess;

    /**
     * @var string
     */
    protected string $returnUrlFail;

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
     * @return null|string
     */
    public function getReturnUrlSuccess(): ?string
    {
        return $this->returnUrlSuccess ?? null;
    }

    /**
     * @param null|string $returnUrlSuccess
     */
    public function setReturnUrlSuccess(?string $returnUrlSuccess): void
    {
        $this->returnUrlSuccess = $returnUrlSuccess;
    }

    /**
     * @return null|string
     */
    public function getReturnUrlFail(): ?string
    {
        return $this->returnUrlFail ?? null;
    }

    /**
     * @param null|string $returnUrlFail
     */
    public function setReturnUrlFail(?string $returnUrlFail): void
    {
        $this->returnUrlFail = $returnUrlFail;
    }

}