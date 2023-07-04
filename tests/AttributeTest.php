<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\Api\AcceptcoinResource;

class AttributeTest extends AcceptcoinApiTest
{


    public function testGetAttributesBalances()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->attribute()
            ->getAttributesBalances(
                "db44651e-be9e-4a33-b427-5db628005c7e",
                "payout",
                "042d69cf-b5d5-4b89-94fd-e6accf640426"
            );

        $this->assertNotNull($data);
    }
}