<?php

namespace AcceptcoinApi\Tests;

use App\Api\AcceptcoinResource;

class BatchesTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->batches()
            ->getAll();

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testGetById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->batches()
            ->getById("15ce94f0-2cd8-43b6-923a-c52ad25537d2");

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testCreate()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->batches()
            ->create(
                "955325",
                "c70154c6-554d-4c0c-b5b8-6fb31d2e47e4",
                [
                    [
                        "amount" => "200",
                        "attributes" => [
                            [
                                "name" => "wallet",
                                "value" => "TAvS3PurE4TGXrytw9dJnEgmSj3F9KfVYP"
                            ],
                            [
                                "name" => "amountInUSDT",
                                "value" => "0"
                            ],
                        ],
                        "currency" => "TRX",
                        "note" => "Note",
                        "paymentSystem" => "TRX",
                        "projectPaymentMethods" => "275"
                    ],
                    [
                        "amount" => "200",
                        "attributes" => [
                            [
                                "name" => "wallet",
                                "value" => "TAvS3PurE4TGXrytw9dJnEgmSj3F9KfVYP"
                            ],
                            [
                                "name" => "amountInUSDT",
                                "value" => "0"
                            ],
                        ],
                        "currency" => "TRX",
                        "note" => "Note",
                        "paymentSystem" => "TRX",
                        "projectPaymentMethods" => "275"
                    ]
                ],
                275
            );

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testStart()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->batches()
            ->start("15ce94f0-2cd8-43b6-923a-c52ad25537d2", "666823", "1");

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testCancel()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->batches()
            ->cancel("3f1c0c1b-4d3d-466f-9501-5f20d0206e59", "282455");

        print_r($data);
        $this->assertNotNull($data);
    }
}