<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\Api\AcceptcoinResource;

class StatusTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->status()
            ->getAll();

        $this->assertNotNull($data);
    }

    public function testGetById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->status()
            ->getById(1);

        $this->assertNotNull($data);
    }
}