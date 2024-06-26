<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Twig_Flashmessage_ManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.twig.flashmessage.manager' shared service.
     *
     * @return \Sonata\Twig\FlashMessage\FlashManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'twig-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FlashMessage'.\DIRECTORY_SEPARATOR.'FlashManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'twig-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FlashMessage'.\DIRECTORY_SEPARATOR.'FlashManager.php';

        return $container->services['sonata.twig.flashmessage.manager'] = new \Sonata\Twig\FlashMessage\FlashManager(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ['success' => [0 => 'success', 1 => 'sonata_flash_success', 2 => 'sonata_user_success'], 'warning' => [0 => 'warning', 1 => 'sonata_flash_info'], 'danger' => [0 => 'error', 1 => 'sonata_flash_error', 2 => 'sonata_user_error']], ['success' => 'success', 'warning' => 'warning', 'danger' => 'danger']);
    }
}
