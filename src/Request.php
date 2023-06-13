<?php

namespace AcceptcoinApi;

abstract class Request
{
    public function __construct()
    {

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