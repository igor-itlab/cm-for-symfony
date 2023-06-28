<?php

namespace AcceptcoinApi\Tests;

use App\AcceptcoinApiBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * @package AcceptcoinApi\Tests
 */
class AcceptcoinApiKernel extends Kernel
{

    /**
     * @return AcceptcoinApiBundle[]
     */
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