<?php

namespace App;

use App\Api\AcceptcoinResource;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Collections\ArrayCollection;
use ReflectionClass;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AcceptcoinApi
{

    /**
     * @var EventDispatcherInterface|null
     */
    private $eventDispatcher;

    /**
     * @var ValidatorInterface|null
     */
    private $validator;

    /**
     * @var AnnotationReader
     */
    private $reader;

    /**
     * @var ApiResource
     */
    private ApiResource $resource;

    public function __construct(
        EventDispatcherInterface $eventDispatcher = null,
        ValidatorInterface       $validator = null
    )
    {
        $this->reader = new AnnotationReader();
        $this->eventDispatcher = $eventDispatcher;
        $this->validator = $validator;
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

            $errorResponse = new ErrorResponse($response);

//            if ($this->eventDispatcher) {
//                $this->eventDispatcher->dispatch(
//                    new RequestFailedEvent($requestBuilder, $errorResponse),
//                    ApiClientEvents::REQUEST_FAILED
//                );
//            }

            return $errorResponse;
        }

        return $this->responseMapping($response);
    }

    /**
     * @param Response $response
     * @return Response|ArrayCollection
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