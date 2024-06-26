<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Cache_Handler_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.block.cache.handler.default' shared service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler
     *
     * @deprecated Since sonata-project/block-bundle 4.11: The "sonata.block.cache.handler.default" service is deprecated since sonata-project/block-bundle 4.11 and will be removed in 5.0.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('sonata-project/block-bundle', '4.11', 'The "sonata.block.cache.handler.default" service is deprecated since sonata-project/block-bundle 4.11 and will be removed in 5.0.');

        return $container->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }
}
