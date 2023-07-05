<?php

namespace AcceptcoinApi;


use AcceptcoinApi\DependencyInjection\AcceptcoinApiExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcceptcoinApiBundle extends Bundle
{
    /**
     * @return AcceptcoinApiExtension
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new AcceptcoinApiExtension();
        }

        return $this->extension;
    }
}