<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_FieldDescriptionFactory_OrmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.field_description_factory.orm' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\FieldDescription\FieldDescriptionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FieldDescription'.\DIRECTORY_SEPARATOR.'FieldDescriptionFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-orm-admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FieldDescription'.\DIRECTORY_SEPARATOR.'FieldDescriptionFactory.php';

        return $container->privates['sonata.admin.field_description_factory.orm'] = new \Sonata\DoctrineORMAdminBundle\FieldDescription\FieldDescriptionFactory(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
