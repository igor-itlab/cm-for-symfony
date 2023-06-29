<?php

namespace App\Api\Response\Project;

class ProjectSettings
{
    /**
     * @var int
     */
    protected int $string;

    /**
     * @var Settings[]
     */
    protected array $settings;

    /**
     * @var string
     */
    protected string $value;

    /**
     * @return int
     */
    public function getString(): int
    {
        return $this->string;
    }

    /**
     * @param int $string
     */
    public function setString(int $string): void
    {
        $this->string = $string;
    }

    /**
     * @return array
     */
    public function getSettings(): array
    {
        return $this->settings;
    }

    /**
     * @param array $settings
     */
    public function setSettings(array $settings): void
    {
        $this->settings = $settings;
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
}