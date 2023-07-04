<?php

namespace AcceptcoinApi\Api\Response;

class Status
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $value;

    /**
     * @var bool
     */
    protected bool $resolution;

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
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return bool
     */
    public function isResolution(): bool
    {
        return $this->resolution;
    }

    /**
     * @param bool $resolution
     */
    public function setResolution(bool $resolution): void
    {
        $this->resolution = $resolution;
    }

}