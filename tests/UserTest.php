<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\Api\AcceptcoinResource;

class UserTest extends AcceptcoinApiTest
{

    public function testGeById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->user()
            ->getById("322a0887-ad86-43e4-86e3-2a826ff2f034");

        $this->assertNotNull($data);
    }

    public function testUpdate()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->user()
            ->update("322a0887-ad86-43e4-86e3-2a826ff2f034", ['isNotPaid24HoursInvoicePaymentsMailSubscriber' => true]);

        $this->assertNotNull($data);
    }

}