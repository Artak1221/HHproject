<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_HelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.helper' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\AdminHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'AdminHelper.php';

        return $container->privates['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper(($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()));
    }
}
