<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Block_SearchResultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.block.search_result' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminSearchBlockService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'block-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Block'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'block-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Block'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Block'.\DIRECTORY_SEPARATOR.'AdminSearchBlockService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'SearchHandler.php';

        $a = ($container->privates['twig'] ?? $container->getTwigService());

        if (isset($container->services['sonata.admin.block.search_result'])) {
            return $container->services['sonata.admin.block.search_result'];
        }
        $b = ($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService());

        if (isset($container->services['sonata.admin.block.search_result'])) {
            return $container->services['sonata.admin.block.search_result'];
        }
        $c = new \Sonata\AdminBundle\Search\SearchHandler();
        $c->configureAdminSearch([]);

        return $container->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService($a, $b, $c, ($container->privates['sonata.admin.global_template_registry'] ?? $container->getSonata_Admin_GlobalTemplateRegistryService()), 'show', 'show');
    }
}
