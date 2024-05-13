<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Route_CacheWarmupService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.route.cache_warmup' shared service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCacheWarmUp
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Route'.\DIRECTORY_SEPARATOR.'RoutesCacheWarmUp.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Route'.\DIRECTORY_SEPARATOR.'RoutesCache.php';

        return $container->privates['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp(($container->privates['sonata.admin.route.cache'] ??= new \Sonata\AdminBundle\Route\RoutesCache(($container->targetDir.''.'/sonata/admin'), true)), ($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()));
    }
}
