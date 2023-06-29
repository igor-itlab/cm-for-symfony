<?php

namespace AcceptcoinApi\Tests;


use App\Api\AcceptcoinResource;
use App\Api\Response\Invoice\IframeInvoice;

class IframeInvoiceTest extends AcceptcoinApiTest
{

    public function testCreate()
    {
        $body = [
            "amount" => "200",
            "referenceId" => "adsadasdadsad",
            "returnUrl" => "https://dev7.itlab-studio.com",
            "callBackUrl" => "tesssst"
        ];

        /** @var IframeInvoice $data */
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->iframeInvoice()
            ->create($body)
            ->first();

        print_r($data->getLink());
        $this->assertNotNull($data);
    }

}