<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Service_RssService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.block.service.rss' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'block-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Block'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'block-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Block'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'block-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Block'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'EditableBlockService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'block-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Block'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'RssBlockService.php';

        $a = ($container->privates['twig'] ?? $container->getTwigService());

        if (isset($container->services['sonata.block.service.rss'])) {
            return $container->services['sonata.block.service.rss'];
        }

        return $container->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService($a);
    }
}