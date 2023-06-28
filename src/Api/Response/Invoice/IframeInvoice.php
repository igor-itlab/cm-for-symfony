<?php

namespace App\Api\Response\Invoice;

class IframeInvoice extends Invoice
{
    private string $callBackUrl;

    /**
     * @return string
     */
    public function getCallBackUrl(): string
    {
        return $this->callBackUrl;
    }

    /**
     * @param string $callBackUrl
     */
    public function setCallBackUrl(string $callBackUrl): void
    {
        $this->callBackUrl = $callBackUrl;
    }

}