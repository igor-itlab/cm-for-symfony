<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\Api\AcceptcoinResource;

class TransactionTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->transaction()
            ->getAll();

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testGetById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->transaction()
            ->getById("248cdd12-dd80-4283-b882-637a114d77b4");

        print_r($data);
        $this->assertNotNull($data);
    }

    public function testRetryCallback()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->transaction()
            ->retryCallback("248cdd12-dd80-4283-b882-637a114d77b4");

        print_r($data);
        $this->assertNotNull($data);
    }
}