<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Action_DashboardService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.action.dashboard' shared service.
     *
     * @return \Sonata\AdminBundle\Action\DashboardAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'DashboardAction.php';

        return $container->services['sonata.admin.action.dashboard'] = new \Sonata\AdminBundle\Action\DashboardAction($container->parameters['sonata.admin.configuration.dashboard_blocks'], ($container->privates['sonata.admin.global_template_registry'] ?? $container->getSonata_Admin_GlobalTemplateRegistryService()), ($container->privates['twig'] ?? $container->getTwigService()));
    }
}
