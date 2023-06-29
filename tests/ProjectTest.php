<?php

namespace AcceptcoinApi\Tests;


use App\Api\AcceptcoinResource;

class ProjectTest extends AcceptcoinApiTest
{

//    public function testGetById()
//    {
//        $data = $this->acceptcoinApiClient
//            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
//            ->project()
//            ->getById(self::PROEJCT_ID);
//
//        $this->assertNotNull($data);
//    }

    public function testGetProjectsByBalance()
    {
        $data = $this->acceptcoinApiClient
            ->attachedResource(new AcceptcoinResource(self::SECRET, self::PROEJCT_ID))
            ->project()
            ->get(self::PROEJCT_ID);

        $this->assertNotNull($data);
    }


}