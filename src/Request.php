<?php

namespace App;

use App\Services\HttpClientRequestBuilder;

abstract class Request
{
    protected ApiResource $resource;

    public function __construct(ApiResource $resource)
    {
        $this->resource = $resource;
        $this->resource->attachedRequestBuilder($this->createRequestBuilder());
        $this->resource->attachedRequest($this);
    }

    /**
     * @return RequestBuilderInterface
     */
    public function getRequestBuilder(): RequestBuilderInterface
    {
        return $this->resource->getRequestBuilder();
    }

    public function send()
    {
        return $this->resource->send();
    }

    /**
     * @return RequestBuilderInterface
     */
    public function createRequestBuilder(): RequestBuilderInterface
    {
        return new HttpClientRequestBuilder();
    }
}