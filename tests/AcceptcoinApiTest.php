<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\AcceptcoinApi;
use PHPUnit\Framework\TestCase;


class AcceptcoinApiTest extends TestCase
{
    const SECRET = "-xW-LeFQqzi8u9ldziBG8SCpjYMsP-780WmnmzenuGs";
    const PROEJCT_ID = "785c4bf8-e804-4ed0-880b-797d1853d88c";

    protected AcceptcoinApi $acceptcoinApiClient;

    /**
     * @param string|null $name
     * @param array $data
     * @param $dataName
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $test = new AcceptcoinApiKernel('test', true);

        $test->boot();
        $container = $test->getContainer();
        $this->acceptcoinApiClient = $container->get('acceptcoin.api');

        $this->assertInstanceOf(AcceptcoinApi::class, $this->acceptcoinApiClient);
    }
}