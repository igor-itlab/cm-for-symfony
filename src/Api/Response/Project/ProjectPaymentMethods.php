<?php

namespace AcceptcoinApi\Api\Response\Project;

use AcceptcoinApi\Api\Response\PaymentMethod\PaymentMethod;

class ProjectPaymentMethods
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var Project
     */
    protected Project  $project;

    /**
     * @var PaymentMethod
     */
    protected PaymentMethod  $paymentMethod;

    /**
     * @var float
     */
    protected float $exchangePercent;

    /**
     * @var int
     */
    protected int $createdAt;

    /**
     * @var string
     */
    protected string $fullPercent;

    /**
     * @var string
     */
    protected string $fullConstant;

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
     * @return PaymentMethod
     */
    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    /**
     * @param PaymentMethod $paymentMethod
     */
    public function setPaymentMethod(PaymentMethod $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return float
     */
    public function getExchangePercent(): float
    {
        return $this->exchangePercent;
    }

    /**
     * @param float $exchangePercent
     */
    public function setExchangePercent(float $exchangePercent): void
    {
        $this->exchangePercent = $exchangePercent;
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
     * @return string
     */
    public function getFullPercent(): string
    {
        return $this->fullPercent;
    }

    /**
     * @param string $fullPercent
     */
    public function setFullPercent(string $fullPercent): void
    {
        $this->fullPercent = $fullPercent;
    }

    /**
     * @return string
     */
    public function getFullConstant(): string
    {
        return $this->fullConstant;
    }

    /**
     * @param string $fullConstant
     */
    public function setFullConstant(string $fullConstant): void
    {
        $this->fullConstant = $fullConstant;
    }
}