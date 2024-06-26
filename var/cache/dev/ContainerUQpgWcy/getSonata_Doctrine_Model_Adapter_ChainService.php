<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Doctrine_Model_Adapter_ChainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.doctrine.model.adapter.chain' shared service.
     *
     * @return \Sonata\Doctrine\Adapter\AdapterChain
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AdapterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AdapterChain.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'DoctrineORMAdapter.php';

        $container->services['sonata.doctrine.model.adapter.chain'] = $instance = new \Sonata\Doctrine\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\Doctrine\Adapter\ORM\DoctrineORMAdapter(($container->services['doctrine'] ?? $container->getDoctrineService())));

        return $instance;
    }
}
