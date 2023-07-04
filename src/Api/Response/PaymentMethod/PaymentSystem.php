<?php

namespace App\Api\Response\PaymentMethod;

class PaymentSystem
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $subName;

    /**
     * @var string
     */
    protected string $tag;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var PaymentMethod[]
     */
    protected array $paymentMethods;

    /**
     * @return string
     */
    public function getSubName(): string
    {
        return $this->subName;
    }

    /**
     * @param string $subName
     * @return PaymentSystem
     */
    public function setSubName(string $subName): PaymentSystem
    {
        $this->subName = $subName;
        return $this;
    }

    /**
     * @return array
     */
    public function getPaymentMethods(): array
    {
        return $this->paymentMethods;
    }

    /**
     * @param array $paymentMethods
     */
    public function setPaymentMethods(array $paymentMethods): void
    {
        $this->paymentMethods = $paymentMethods;
    }

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
}