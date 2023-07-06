<?php

namespace AcceptcoinApi\Api\Response\PaymentMethod;

class PaymentMethod
{

    /**
     * @var int|null
     */
    protected ?int $id;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var bool
     */
    protected bool $isActivated;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $asset;

    /**
     * @var string
     */
    protected string $subName;

    /**
     * @var string
     */
    protected string $active;

    /**
     * @var string
     */
    protected string $projectPaymentMethodsId;

    /**
     * @var string
     */
    protected string $exchangePercent;

    /**
     * @var float
     */
    protected float $fullPercent;

    /**
     * @var float
     */
    protected float $fullConstant;

    /**
     * @var Currency
     */
    protected Currency $currency;

    /**
     * @var PaymentSystem
     */
    protected PaymentSystem $paymentSystem;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
     * @return bool
     */
    public function getIsActivated(): bool
    {
        return $this->isActivated;
    }

    /**
     * @param bool $isActivated
     */
    public function setIsActivated(bool $isActivated): void
    {
        $this->isActivated = $isActivated;
    }

    /**
     * @return string
     */
    public function getSubName(): string
    {
        return $this->subName;
    }

    /**
     * @param string $subName
     */
    public function setSubName(string $subName): void
    {
        $this->subName = $subName;
    }

    /**
     * @return string
     */
    public function getAsset(): string
    {
        return $this->asset;
    }

    /**
     * @param string $asset
     */
    public function setAsset(string $asset): void
    {
        $this->asset = $asset;
    }

    /**
     * @return string
     */
    public function getProjectPaymentMethodsId(): string
    {
        return $this->projectPaymentMethodsId;
    }

    /**
     * @param string $projectPaymentMethodsId
     */
    public function setProjectPaymentMethodsId(string $projectPaymentMethodsId): void
    {
        $this->projectPaymentMethodsId = $projectPaymentMethodsId;
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
     * @return float
     */
    public function getFullPercent(): float
    {
        return $this->fullPercent;
    }

    /**
     * @param float $fullPercent
     */
    public function setFullPercent(float $fullPercent): void
    {
        $this->fullPercent = $fullPercent;
    }

    /**
     * @return float
     */
    public function getFullConstant(): float
    {
        return $this->fullConstant;
    }

    /**
     * @param float $fullConstant
     */
    public function setFullConstant(float $fullConstant): void
    {
        $this->fullConstant = $fullConstant;
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