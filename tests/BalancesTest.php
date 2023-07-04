<?php

namespace AcceptcoinApi\Tests;

use App\Api\AcceptcoinResource;

class BalancesTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->balances()
            ->getAll();

        $this->assertNotNull($data);
    }

    public function testGetStatistic()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->balances()
            ->getBalanceStatistic();

        print_r($data);
        $this->assertNotNull($data);
    }
}