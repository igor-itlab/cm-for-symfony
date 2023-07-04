<?php

namespace AcceptcoinApi\Api\Response\Balances;

use AcceptcoinApi\Api\Response\PaymentMethod\Currency;
use AcceptcoinApi\Api\Response\PaymentMethod\PaymentSystem;
use AcceptcoinApi\Api\Response\PaymentMethod\Service;
use AcceptcoinApi\Api\Response\User\User;

class Balances
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var User
     */
    protected User $user;

    /**
     * @var Service
     */
    protected Service $service;

    /**
     * @var Currency
     */
    protected Currency $currency;

    /**
     * @var PaymentSystem
     */
    protected PaymentSystem $paymentSystem;

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
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return Service
     */
    public function getService(): Service
    {
        return $this->service;
    }

    /**
     * @param Service $service
     */
    public function setService(Service $service): void
    {
        $this->service = $service;
    }

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     */
    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return PaymentSystem
     */
    public function getPaymentSystem(): PaymentSystem
    {
        return $this->paymentSystem;
    }

    /**
     * @param PaymentSystem $paymentSystem
     */
    public function setPaymentSystem(PaymentSystem $paymentSystem): void
    {
        $this->paymentSystem = $paymentSystem;
    }
}