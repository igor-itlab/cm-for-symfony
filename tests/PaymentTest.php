<?php

namespace AcceptcoinApi\Tests;

use App\Api\AcceptcoinResource;

class PaymentTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->payment()
            ->getAll();

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testGetById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->payment()
            ->getById("248cdd12-dd80-4283-b882-637a114d77b4");

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testCreate()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->payment()
            ->create(
                "https://cryptomc.com",
                "200",
                "api test",
                'TRX',
                'TRX',
                []
            );

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testGetPaymentAmount()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->payment()
            ->getPaymentAmount(
                "200",
                "db44651e-be9e-4a33-b427-5db628005c7e",
                "785c4bf8-e804-4ed0-880b-797d1853d88c"
            );

        print_r($data);
        $this->assertNotNull($data);
    }
}