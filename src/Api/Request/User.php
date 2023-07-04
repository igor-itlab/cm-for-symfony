<?php

namespace App\Api\Request;

use App\Api\AcceptcoinRequest;
use App\Services\Method;

class User extends AcceptcoinRequest
{

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/users/$id");

        return $this->send();
    }

    /**
     * @param string $id
     * @param array $data
     * @return mixed
     */
    public function update(string $id, array $data): mixed
    {
        $this->getRequestBuilder()
            ->setMethod(Method::PUT())
            ->setPath("api/users/$id")
            ->setBody($data);

        return $this->send();
    }
}