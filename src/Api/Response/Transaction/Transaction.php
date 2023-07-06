<?php

namespace AcceptcoinApi\Api\Response\Transaction;

use AcceptcoinApi\Api\Response\PaymentMethod\FlowData;
use AcceptcoinApi\Api\Response\Project\ProjectPaymentMethods;
use AcceptcoinApi\Api\Response\Status;

class Transaction
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $referenceId;

    /**
     * @var string
     */
    protected string $amount;

    /**
     * @var string
     */
    protected string $amountInUSDT;

    /**
     * @var string
     */
    protected string $processedAmountInUSDT;

    /**
     * @var string
     */
    protected string $processedAmount;

    /**
     * @var string
     */
    protected string $note;

    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var array
     */
    protected array $flowData;

    /**
     * @var ProjectPaymentMethods
     */
    protected ProjectPaymentMethods $projectPaymentMethods;

    /**
     * @var bool
     */
    protected bool $isPublic;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var int
     */
    protected int $createdAt;

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
    public function getReferenceId(): string
    {
        return $this->referenceId;
    }

    /**
     * @param string $referenceId
     */
    public function setReferenceId(string $referenceId): void
    {
        $this->referenceId = $referenceId;
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
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->note = $note;
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
     * @return ProjectPaymentMethods
     */
    public function getProjectPaymentMethods(): ProjectPaymentMethods
    {
        return $this->projectPaymentMethods;
    }

    /**
     * @param ProjectPaymentMethods $projectPaymentMethods
     */
    public function setProjectPaymentMethods(ProjectPaymentMethods $projectPaymentMethods): void
    {
        $this->projectPaymentMethods = $projectPaymentMethods;
    }

    /**
     * @return bool
     */
    public function isPublic(): bool
    {
        return $this->isPublic;
    }

    /**
     * @param bool $isPublic
     */
    public function setIsPublic(bool $isPublic): void
    {
        $this->isPublic = $isPublic;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
     * @return array
     */
    public function getFlowData(): array
    {
        return $this->flowData;
    }

    /**
     * @param array $flowData
     */
    public function setFlowData(array $flowData): void
    {
        $this->flowData = $flowData;
    }

    /**
     * @return string
     */
    public function getAmountInUSDT(): string
    {
        return $this->amountInUSDT;
    }

    /**
     * @return string
     */
    public function getProcessedAmountInUSDT(): string
    {
        return $this->processedAmountInUSDT;
    }

    /**
     * @param string $amountInUSDT
     */
    public function setAmountInUSDT(string $amountInUSDT): void
    {
        $this->amountInUSDT = $amountInUSDT;
    }

    /**
     * @param string $processedAmountInUSDT
     */
    public function setProcessedAmountInUSDT(string $processedAmountInUSDT): void
    {
        $this->processedAmountInUSDT = $processedAmountInUSDT;
    }
}