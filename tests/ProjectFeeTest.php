<?php

namespace AcceptcoinApi\Tests;

use App\Api\AcceptcoinResource;

class ProjectFeeTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->projectFee()
            ->getAll("785c4bf8-e804-4ed0-880b-797d1853d88c");

        print_r($data);
        $this->assertNotNull($data);
    }
}