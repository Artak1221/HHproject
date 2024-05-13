<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_MenuProvider_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'knp_menu.menu_provider.lazy' shared service.
     *
     * @return \Knp\Menu\Provider\LazyProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'LazyProvider.php';

        return $container->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['sonata_admin_sidebar' => #[\Closure(name: 'sonata.admin.sidebar_menu', class: 'Knp\\Menu\\MenuItem')] function () use ($container) {
            return (isset($container->factories['service_container']['sonata.admin.sidebar_menu']) ? $container->factories['service_container']['sonata.admin.sidebar_menu']() : $container->load('getSonata_Admin_SidebarMenuService'));
        }]);
    }
}
