<?php

namespace App\Api\Request;

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
}