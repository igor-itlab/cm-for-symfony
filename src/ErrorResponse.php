<?php

namespace App;

/**
 * Class ErrorResponse
 * @package Acceptcoin
 */
class ErrorResponse
{

    /**
     * @var Response
     */
    protected Response $response;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }

    /**
     * @return array
     */
    public function getResponseContent(): array
    {
        return $this->response->getResponseContent();
    }


}