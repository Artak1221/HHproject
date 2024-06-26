<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Exception_Renderer_ThrowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.block.exception.renderer.throw' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'block-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Exception'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'RendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'block-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Exception'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'MonkeyThrowRenderer.php';

        return $container->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }
}
