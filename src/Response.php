<?php

namespace App;

class Response
{

    /**
     * @var int
     */
    private int $statusCode;

    /**
     * @var array
     */
    private array $responseContent;

    /**
     * @var ApiResource
     */
    private ApiResource $apiResource;

    public function __construct(
        int         $statusCode,
        array       $responseContent,
        ApiResource $apiResource
    )
    {

        $this->statusCode = $statusCode;
        $this->responseContent = $responseContent;
        $this->apiResource = $apiResource;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return Response
     */
    public function setStatusCode(int $statusCode): Response
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return array
     */
    public function getResponseContent(): array
    {
        return $this->responseContent;
    }

    /**
     * @param ApiResource $apiResource
     * @return Response
     */
    public function setApiResource(ApiResource $apiResource): Response
    {
        $this->apiResource = $apiResource;
        return $this;
    }

    /**
     * @return ApiResource
     */
    public function getApiResource(): ApiResource
    {
        return $this->apiResource;
    }

    /**
     * @param array $responseContent
     * @return Response
     */
    public function setResponseContent(array $responseContent): Response
    {
        $this->responseContent = $responseContent;
        return $this;
    }
}