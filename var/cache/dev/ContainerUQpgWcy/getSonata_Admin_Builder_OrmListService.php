<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Builder_OrmListService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.builder.orm_list' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'BuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'ListBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-orm-admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'ListBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FieldDescription'.\DIRECTORY_SEPARATOR.'TypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FieldDescription'.\DIRECTORY_SEPARATOR.'TypeGuesserChain.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-orm-admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FieldDescription'.\DIRECTORY_SEPARATOR.'TypeGuesser.php';

        return $container->privates['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder(new \Sonata\AdminBundle\FieldDescription\TypeGuesserChain([0 => new \Sonata\DoctrineORMAdminBundle\FieldDescription\TypeGuesser()]), ['array' => '@SonataAdmin/CRUD/list_array.html.twig', 'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig', 'date' => '@SonataAdmin/CRUD/list_date.html.twig', 'time' => '@SonataAdmin/CRUD/list_time.html.twig', 'datetime' => '@SonataAdmin/CRUD/list_datetime.html.twig', 'textarea' => '@SonataAdmin/CRUD/list_string.html.twig', 'email' => '@SonataAdmin/CRUD/list_email.html.twig', 'enum' => '@SonataAdmin/CRUD/list_enum.html.twig', 'trans' => '@SonataAdmin/CRUD/list_trans.html.twig', 'string' => '@SonataAdmin/CRUD/list_string.html.twig', 'integer' => '@SonataAdmin/CRUD/list_string.html.twig', 'float' => '@SonataAdmin/CRUD/list_string.html.twig', 'identifier' => '@SonataAdmin/CRUD/list_string.html.twig', 'currency' => '@SonataAdmin/CRUD/list_currency.html.twig', 'percent' => '@SonataAdmin/CRUD/list_percent.html.twig', 'choice' => '@SonataAdmin/CRUD/list_choice.html.twig', 'url' => '@SonataAdmin/CRUD/list_url.html.twig', 'html' => '@SonataAdmin/CRUD/list_html.html.twig', 'many_to_many' => '@SonataAdmin/CRUD/Association/list_many_to_many.html.twig', 'many_to_one' => '@SonataAdmin/CRUD/Association/list_many_to_one.html.twig', 'one_to_many' => '@SonataAdmin/CRUD/Association/list_one_to_many.html.twig', 'one_to_one' => '@SonataAdmin/CRUD/Association/list_one_to_one.html.twig']);
    }
}
