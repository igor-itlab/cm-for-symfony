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
     * @var string
     */
    protected string $isActivated;

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
     * @return string
     */
    public function getIsActivated(): string
    {
        return $this->isActivated;
    }

    /**
     * @param string $isActivated
     */
    public function setIsActivated(string $isActivated): void
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


}