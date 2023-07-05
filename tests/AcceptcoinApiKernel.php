<?php

namespace AcceptcoinApi\Tests;

use AcceptcoinApi\AcceptcoinApiBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AcceptcoinApiKernel extends Kernel
{
    public function registerBundles(): array
    {
        return [
            new AcceptcoinApiBundle()
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        // TODO: Implement registerContainerConfiguration() method.
    }
}