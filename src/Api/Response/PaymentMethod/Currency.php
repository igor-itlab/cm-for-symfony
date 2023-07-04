<?php

namespace App\Api\Response\PaymentMethod;

class Currency
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $asset;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Currency
     */
    public function setId(int $id): Currency
    {
        $this->id = $id;
        return $this;
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
     * @return Currency
     */
    public function setAsset(string $asset): Currency
    {
        $this->asset = $asset;
        return $this;
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
     * @return Currency
     */
    public function setName(string $name): Currency
    {
        $this->name = $name;
        return $this;
    }
}