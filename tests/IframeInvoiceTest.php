<?php

namespace AcceptcoinApi\Tests;


use App\Api\AcceptcoinResource;

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
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->iframeInvoice()
            ->create($body);

        var_dump($data);
        $this->assertNotNull($data);
    }

}