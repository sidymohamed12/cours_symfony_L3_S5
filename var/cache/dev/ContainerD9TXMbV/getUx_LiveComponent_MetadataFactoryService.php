<?php

namespace ContainerD9TXMbV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_MetadataFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.metadata_factory' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Metadata\LiveComponentMetadataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Metadata/LiveComponentMetadataFactory.php';

        $a = ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService'));

        if (isset($container->privates['ux.live_component.metadata_factory'])) {
            return $container->privates['ux.live_component.metadata_factory'];
        }
        $b = ($container->privates['property_info'] ?? self::getPropertyInfoService($container));

        if (isset($container->privates['ux.live_component.metadata_factory'])) {
            return $container->privates['ux.live_component.metadata_factory'];
        }

        return $container->privates['ux.live_component.metadata_factory'] = new \Symfony\UX\LiveComponent\Metadata\LiveComponentMetadataFactory($a, $b);
    }
}
