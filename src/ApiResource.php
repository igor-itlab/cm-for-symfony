<?php


namespace App;


abstract class ApiResource
{

    /**
     * @var AcceptcoinApi
     */
    protected AcceptcoinApi $acceptcoinApi;

    /**
     * @var RequestBuilderInterface
     */
    protected RequestBuilderInterface  $requestBuilder;

    /**
     * @var Request
     */
    protected Request $currentRequest;

    /**
     * @param AcceptcoinApi $acceptcoinApi
     * @return void
     */
    public function setAcceptcoinApi(AcceptcoinApi  $acceptcoinApi): void
    {
        $this->acceptcoinApi = $acceptcoinApi;
    }

    /**
     * @return AcceptcoinApi
     */
    public function getAcceptcoinApi(): AcceptcoinApi
    {
        return $this->acceptcoinApi;
    }

    /**
     * @return RequestBuilderInterface
     */
    public function getRequestBuilder(): RequestBuilderInterface
    {
        return $this->requestBuilder;
    }

    /**
     * @param RequestBuilderInterface $requestBuilder
     */
    public function attachedRequestBuilder(RequestBuilderInterface $requestBuilder): void
    {
        $this->requestBuilder = $requestBuilder;
        $requestBuilder->setResource($this);
    }

    /**
     * @return Request
     */
    public function getCurrentRequest(): Request
    {
        return $this->currentRequest;
    }

    /**
     * @param Request $currentRequest
     */
    public function attachedRequest(Request $currentRequest): void
    {
        $this->currentRequest = $currentRequest;
    }

    public function send()
    {
        return $this->acceptcoinApi->send($this->getRequestBuilder());
    }
}