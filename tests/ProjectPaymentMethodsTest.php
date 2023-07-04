<?php

namespace AcceptcoinApi\Tests;

use App\Api\AcceptcoinResource;

class ProjectPaymentMethodsTest extends AcceptcoinApiTest
{

    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->projectPaymentMethod()
            ->getAll();

        $this->assertNotNull($data);
    }

    public function testGetById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->projectPaymentMethod()
            ->getById(324);

        $this->assertNotNull($data);
    }

    public function testCreate()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->projectPaymentMethod()
            ->create("785c4bf8-e804-4ed0-880b-797d1853d88c", 445);

        $this->assertNotNull($data);
    }

    public function testUpdate()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->projectPaymentMethod()
            ->update(450, false);

        $this->assertNotNull($data);
    }

    public function testGetAttributesById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->projectPaymentMethod()
            ->getAttributesById(450);

        $this->assertNotNull($data);
    }
}