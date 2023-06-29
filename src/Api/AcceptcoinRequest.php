<?php

namespace App\Api;

use App\ApiResource;
use App\Request;
use App\RequestBuilderInterface;
use App\Security\SecurityManager;

class AcceptcoinRequest extends Request
{
    private const DOMAIN = "https://dev7.itlab-studio.com";

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