<?php

namespace AcceptcoinApi\Api\Request\Invoice;

use AcceptcoinApi\Api\AcceptcoinRequest;
use AcceptcoinApi\MappedBy;
use AcceptcoinApi\Services\Method;

/**
 * Class IframeInvoice
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="AcceptcoinApi\Api\Mapper\Invoice\IframeInvoice")
 */
class IframeInvoice extends AcceptcoinRequest
{

    /**
     * @param string $amount
     * @param string $referenceId
     * @param string $callbackUrl
     * @param string|null $returnUrlSuccess
     * @param string|null $returnUrlFail
     * @return mixed
     */
    public function create(
        string $amount,
        string $referenceId,
        string $callbackUrl,
        string $returnUrlSuccess=null,
        string $returnUrlFail=null
    ): mixed
    {
        $body = [
            "amount"      => $amount,
            "referenceId" => $referenceId,
            "callBackUrl" => $callbackUrl
        ];

        if ($returnUrlSuccess) {
            $body['returnUrlSuccess'] = $returnUrlSuccess;
        }

        if ($returnUrlFail) {
            $body['returnUrlFail'] = $returnUrlFail;
        }

        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath('/api/iframe-invoices')
            ->setBody($body);

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/iframe-invoices/$id");

        return $this->send();
    }
}