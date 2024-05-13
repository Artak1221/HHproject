<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_SidebarMenuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.sidebar_menu' service.
     *
     * @return \Knp\Menu\MenuItem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'ItemInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'MenuItem.php';

        $container->factories['service_container']['sonata.admin.sidebar_menu'] = function () use ($container) {
            $a = ($container->privates['sonata.admin.menu_builder'] ?? $container->load('getSonata_Admin_MenuBuilderService'));

            if (isset($container->privates['sonata.admin.sidebar_menu'])) {
                return $container->privates['sonata.admin.sidebar_menu'];
            }

            return $a->createSidebarMenu();
        };

        return $container->factories['service_container']['sonata.admin.sidebar_menu']();
    }
}
