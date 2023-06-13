<?php


namespace AcceptcoinApi;

abstract class ApiResource
{

    /**
     * @var ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * @return Request
     */
    public function getCurrentRequest(): Request
    {
        return $this->currentRequest;
    }

    public function send()
    {
        return $this->apiClient->send($this->getRequestBuilder());
    }
}