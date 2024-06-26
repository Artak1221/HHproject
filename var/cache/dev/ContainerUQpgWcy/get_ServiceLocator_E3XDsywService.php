<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E3XDsywService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E3XDsyw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E3XDsyw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'metaRepository' => ['privates', 'App\\Repository\\MetaRepository', 'getMetaRepositoryService', true],
        ], [
            'metaRepository' => 'App\\Repository\\MetaRepository',
        ]);
    }
}
