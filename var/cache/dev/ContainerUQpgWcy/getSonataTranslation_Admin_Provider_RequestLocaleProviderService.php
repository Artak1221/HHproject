<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonataTranslation_Admin_Provider_RequestLocaleProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata_translation.admin.provider.request_locale_provider' shared service.
     *
     * @return \Sonata\TranslationBundle\Provider\RequestLocaleProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'LocaleProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'RequestLocaleProvider.php';

        return $container->privates['sonata_translation.admin.provider.request_locale_provider'] = new \Sonata\TranslationBundle\Provider\RequestLocaleProvider(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), 'en');
    }
}
