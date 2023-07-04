<?php

namespace AcceptcoinApi\Api;

use AcceptcoinApi\ApiResource;
use AcceptcoinApi\Request;
use AcceptcoinApi\RequestBuilderInterface;
use AcceptcoinApi\Security\SecurityManager;

class AcceptcoinRequest extends Request
{
    private const DOMAIN = "https://acceptcoin.io";

    /**
     * @var SecurityManager
     */
    protected SecurityManager $securityManager;

    /**
     * @param ApiResource $resource
     */
    public function __construct(ApiResource $resource)
    {
        $this->securityManager = new SecurityManager();
        parent::__construct($resource);
    }

    /**
     * @return RequestBuilderInterface
     */
    public function createRequestBuilder(): RequestBuilderInterface
    {
        return parent::createRequestBuilder()
            ->setDomain(self::DOMAIN)
            ->mergeHeaders([
                'Accept' => "application/json",
                'Content-Type' => "application/json",
                'Authorization' => "JWS-AUTH-TOKEN " .
                    $this->securityManager->getJwtToken(
                        $this->resource->getProjectId(),
                        $this->resource->getSecret()
                    )
            ]);
    }

}