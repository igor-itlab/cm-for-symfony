<?php

namespace App\Api\Request\Invoice;

use App\Api\AcceptcoinRequest;
use App\MappedBy;
use App\Services\Method;

/**
 * Class IframeInvoice
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="App\Api\Mapper\Invoice\IframeInvoice")
 */
class IframeInvoice extends AcceptcoinRequest
{

    /**
     * @param array $body
     * @return mixed
     */
    public function create(array $body): mixed
    {
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