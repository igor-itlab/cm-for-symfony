<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\Api\AcceptcoinResource;

class PaymentMethodTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->paymentMethod()
            ->getAll();

        $this->assertNotNull($data);
    }

    public function testGetProjectPaymentMethods()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->paymentMethod()
            ->getProjectPaymentMethods('785c4bf8-e804-4ed0-880b-797d1853d88c');

        print_r($data);
        $this->assertNotNull($data);
    }
}