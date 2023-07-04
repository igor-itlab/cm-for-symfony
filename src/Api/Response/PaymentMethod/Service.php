<?php

namespace AcceptcoinApi\Api\Response\PaymentMethod;

class Service
{
    /**
     * @var string
     */
    protected string $title;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}