<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Twig_Flashmessage_Twig_RuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.twig.flashmessage.twig.runtime' shared service.
     *
     * @return \Sonata\Twig\Extension\FlashMessageRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'twig-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'FlashMessageRuntime.php';

        return $container->privates['sonata.twig.flashmessage.twig.runtime'] = new \Sonata\Twig\Extension\FlashMessageRuntime(($container->services['sonata.twig.flashmessage.manager'] ?? $container->load('getSonata_Twig_Flashmessage_ManagerService')));
    }
}
