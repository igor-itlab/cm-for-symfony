<?php

namespace AcceptcoinApi\Tests;

use App\AcceptcoinApi;
use PHPUnit\Framework\TestCase;


class AcceptcoinApiTest extends TestCase
{
    const SECRET = "-xW-LeFQqzi8u9ldziBG8SCpjYMsP-780WmnmzenuGs";
    const PROEJCT_ID = "785c4bf8-e804-4ed0-880b-797d1853d88c";

    protected AcceptcoinApi $acceptcoinApiClient;

    public function setUp(): void
    {
        $this->acceptcoinApiClient = new AcceptcoinApi();
    }

    public function testAcceptcoinApiObjectCreation()
    {
        $this->assertInstanceOf(AcceptcoinApi::class, $this->acceptcoinApiClient);
    }
}