<?php

namespace Request;


/**
 * Class Project
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Project")
 */
class Project
{

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id)
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/projects/$id");

        return $this->send();
    }
}