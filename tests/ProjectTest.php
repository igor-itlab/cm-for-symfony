<?php

namespace AcceptcoinApi\Tests;


use App\Api\AcceptcoinResource;

class ProjectTest extends AcceptcoinApiTest
{

    public function testGetById()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->project()
            ->getById(self::PROEJCT_ID);

        var_dump($data);
        $this->assertNotNull($data);
    }

}