<?php

namespace AcceptcoinApi\Api\Response\Project;

use AcceptcoinApi\Api\Response\PaymentMethod\PaymentMethod;

class ProjectPaymentMethods
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var Project
     */
    protected Project  $project;

    /**
     * @var PaymentMethod
     */
    protected PaymentMethod  $paymentMethod;

    /**
     * @var string
     */
    protected string $exchangePercent;

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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
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
     * @return string
     */
    public function getExchangePercent(): string
    {
        return $this->exchangePercent;
    }

    /**
     * @param string $exchangePercent
     */
    public function setExchangePercent(string $exchangePercent): void
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