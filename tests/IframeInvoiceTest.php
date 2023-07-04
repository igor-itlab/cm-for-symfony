<?php

namespace AcceptcoinApi\Tests;


use AcceptcoinApi\Api\AcceptcoinResource;
use AcceptcoinApi\Api\Response\Invoice\IframeInvoice;

class IframeInvoiceTest extends AcceptcoinApiTest
{

    public function testCreate()
    {
        /** @var IframeInvoice $data */
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->iframeInvoice()
            ->create(
                "200",
                "adsadasdadsad",
                "https://dev7.itlab-studio.com",
                "https://dev7.itlab-studio.com123"
            )
            ->first();

        print_r($data->getLink());
        $this->assertNotNull($data);
    }

}