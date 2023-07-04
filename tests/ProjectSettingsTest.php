<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\Api\AcceptcoinResource;

class ProjectSettingsTest extends AcceptcoinApiTest
{
    public function testGetAll()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->projectSettings()
            ->getAll();

        $this->assertNotNull($data);
    }

    public function testGetById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->projectSettings()
            ->getById(112);

        $this->assertNotNull($data);
    }

    public function testDelete()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->projectSettings()
            ->delete(112);

        $this->assertNotNull($data);
    }
}