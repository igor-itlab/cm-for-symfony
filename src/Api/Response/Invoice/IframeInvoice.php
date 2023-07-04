<?php

namespace AcceptcoinApi\Api\Response\Invoice;

class IframeInvoice extends Invoice
{
    private string $callBackUrl;

    private string $link;

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

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

}