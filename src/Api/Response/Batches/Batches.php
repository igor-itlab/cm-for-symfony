<?php

namespace AcceptcoinApi\Api\Response\Batches;

use AcceptcoinApi\Api\Response\Project\Project;
use AcceptcoinApi\Api\Response\Status;

class Batches
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
     * @var Status
     */
    protected Status $status;

    /**
     * @var Project
     */
    protected Project $project;

    /**
     * @var int
     */
    protected int $createdAt;

    /**
     * @var int
     */
    protected int $startDate;

    /**
     * @var string
     */
    protected string $amount;

    /**
     * @var string
     */
    protected string $processedAmount;

    /**
     * @var int
     */
    protected int $countOfAll;

    /**
     * @var int
     */
    protected int $countOfProcessed;

    /**
     * @var int
     */
    protected int $countOfPending;

    /**
     * @var int
     */
    protected int $countOfFailed;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt(int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * @param int $startDate
     */
    public function setStartDate(int $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param Status $status
     */
    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getProcessedAmount(): string
    {
        return $this->processedAmount;
    }

    /**
     * @param string $processedAmount
     */
    public function setProcessedAmount(string $processedAmount): void
    {
        $this->processedAmount = $processedAmount;
    }

    /**
     * @return int
     */
    public function getCountOfAll(): int
    {
        return $this->countOfAll;
    }

    /**
     * @param int $countOfAll
     */
    public function setCountOfAll(int $countOfAll): void
    {
        $this->countOfAll = $countOfAll;
    }

    /**
     * @return int
     */
    public function getCountOfProcessed(): int
    {
        return $this->countOfProcessed;
    }

    /**
     * @param int $countOfProcessed
     */
    public function setCountOfProcessed(int $countOfProcessed): void
    {
        $this->countOfProcessed = $countOfProcessed;
    }

    /**
     * @return int
     */
    public function getCountOfPending(): int
    {
        return $this->countOfPending;
    }

    /**
     * @param int $countOfPending
     */
    public function setCountOfPending(int $countOfPending): void
    {
        $this->countOfPending = $countOfPending;
    }

    /**
     * @return int
     */
    public function getCountOfFailed(): int
    {
        return $this->countOfFailed;
    }

    /**
     * @param int $countOfFailed
     */
    public function setCountOfFailed(int $countOfFailed): void
    {
        $this->countOfFailed = $countOfFailed;
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
}