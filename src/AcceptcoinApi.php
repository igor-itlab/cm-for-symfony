<?php

namespace AcceptcoinApi;

use AcceptcoinApi\Api\AcceptcoinResource;
use Doctrine\Common\Annotations\AnnotationReader;
use ReflectionClass;

class AcceptcoinApi
{
    /**
     * @var AnnotationReader
     */
    private $reader;

    /**
     * @var ApiResource
     */
    private ApiResource $resource;

    public function __construct()
    {
        $this->reader = new AnnotationReader();
    }

    /**
     * @param ApiResource $apiResource
     * @return ApiResource|AcceptcoinResource
     */
    public function attachedResource(ApiResource $apiResource): ApiResource
    {
        $this->resource = $apiResource;
        $apiResource->setAcceptcoinApi($this);

        return $this->resource;
    }

    public function send(RequestBuilderInterface $requestBuilder)
    {

        $response = $requestBuilder->send();

        if ($this->checkStatusCode($response->getStatusCode())) {

            return new ErrorResponse($response);
        }

        return $this->responseMapping($response);
    }

    /**
     * @param Response $response
     * @return Response
     */
    private function responseMapping(Response $response)
    {
        $annotation = $this->reader->getClassAnnotation(
            new ReflectionClass($this->resource->getCurrentRequest()),
            MappedBy::class
        );
        if (!$annotation) {
            return $response;
        }
        /**
         * @var Mapper $mapperInstance
         */
        $mapperInstance = new $annotation->value($this->resource);

        return $mapperInstance->mapped($response);
    }

    /**
     * @param $code
     * @return bool
     */
    protected function checkStatusCode($code): bool
    {
        return (300 <= $code);
    }
}