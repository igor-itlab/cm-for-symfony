<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\Api\AcceptcoinResource;

class BalanceHistoryTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->balanceHistory()
            ->getAll();

        $this->assertNotNull($data);
    }
}