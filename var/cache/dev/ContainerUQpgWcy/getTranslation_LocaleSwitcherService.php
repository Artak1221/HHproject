<?php

namespace ContainerUQpgWcy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_LocaleSwitcherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.locale_switcher' shared service.
     *
     * @return \Symfony\Component\Translation\LocaleSwitcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'LocaleSwitcher.php';

        return $container->privates['translation.locale_switcher'] = new \Symfony\Component\Translation\LocaleSwitcher('en', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en'));
            yield 1 => ($container->privates['translator.default'] ?? $container->getTranslator_DefaultService());
            yield 2 => ($container->privates['sonata.form.type.date_picker'] ?? $container->load('getSonata_Form_Type_DatePickerService'));
            yield 3 => ($container->privates['sonata.form.type.datetime_picker'] ?? $container->load('getSonata_Form_Type_DatetimePickerService'));
        }, 4), ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService()));
    }
}
