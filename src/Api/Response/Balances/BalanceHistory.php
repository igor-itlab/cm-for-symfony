<?php

namespace App\Api\Response\Balances;

class BalanceHistory
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var string
     */
    protected string $paymentSystem;

    /**
     * @var string
     */
    protected string $user;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var float
     */
    protected float $amountDifference;

    /**
     * @var string
     */
    protected string $operationType;

    /**
     * @var string
     */
    protected string $operationId;

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
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getPaymentSystem(): string
    {
        return $this->paymentSystem;
    }

    /**
     * @param string $paymentSystem
     */
    public function setPaymentSystem(string $paymentSystem): void
    {
        $this->paymentSystem = $paymentSystem;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getAmountDifference(): float
    {
        return $this->amountDifference;
    }

    /**
     * @param float $amountDifference
     */
    public function setAmountDifference(float $amountDifference): void
    {
        $this->amountDifference = $amountDifference;
    }

    /**
     * @return string
     */
    public function getOperationType(): string
    {
        return $this->operationType;
    }

    /**
     * @param string $operationType
     */
    public function setOperationType(string $operationType): void
    {
        $this->operationType = $operationType;
    }

    /**
     * @return string
     */
    public function getOperationId(): string
    {
        return $this->operationId;
    }

    /**
     * @param string $operationId
     */
    public function setOperationId(string $operationId): void
    {
        $this->operationId = $operationId;
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


}