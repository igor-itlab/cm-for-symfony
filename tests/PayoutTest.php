<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\Api\AcceptcoinResource;

class PayoutTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->payout()
            ->getAll();

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testGetById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->payout()
            ->getById("8dbc7ac4-f971-474b-b278-bc35c4b57b7b");

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testCreate()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->payout()
            ->create(
                "https://cryptomc.com",
                "200",
                "api test payout",
                'TRX',
                'TRX',
                [
                    [
                        "name" => "wallet",
                        "value" => "TAvS3PurE4TGXrytw9dJnEgmSj3F9KfVYP"
                    ]
                ]
            );

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testGetPaymentAmount()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->payout()
            ->getPayoutAmount(
                "200",
                "db44651e-be9e-4a33-b427-5db628005c7e",
                "785c4bf8-e804-4ed0-880b-797d1853d88c"
            );

        print_r($data);
        $this->assertNotNull($data);
    }

}