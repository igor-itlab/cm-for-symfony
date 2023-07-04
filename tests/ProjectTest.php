<?php

namespace AcceptcoinApi\Tests;


use AcceptcoinApi\Api\AcceptcoinResource;

class ProjectTest extends AcceptcoinApiTest
{

    public function testGetById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->project()
            ->getById(self::PROEJCT_ID);

        $this->assertNotNull($data);
    }

    public function testGetProjectsByBalance()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->project()
            ->getProjectsByBalance("11a673e6-45e9-458f-8644-a325bc340811", "payment");

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->project()
            ->getAll();

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testUpdate()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->project()
            ->update(self::PROEJCT_ID, ['isStabling' => false]);

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testCreate()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->project()
            ->create("ApiTestProject", "https://qwerty.com");

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testDelete()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->project()
            ->delete("b500683e-ddfb-4103-8f8c-8debe51875b1", "987651");

        $this->assertNotNull($data);
    }

    public function testAddTrustedIpAddresses()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->project()
            ->addTrustedIpAddresses("b500683e-ddfb-4103-8f8c-8debe51875b1", [
                'trustedIpAddresses' => [
                    [
                        'id' => 1001,
                        'value' => "123.123.123.124"
                    ]
                ]
            ]);

        print_r($data);

        $this->assertNotNull($data);
    }
}