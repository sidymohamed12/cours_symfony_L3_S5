<?php

namespace ContainerLUC67AN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_QueryStringInitializerSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.query_string_initializer_subscriber' shared service.
     *
     * @return \Symfony\UX\LiveComponent\EventListener\QueryStringInitializeSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/EventListener/QueryStringInitializeSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Util/QueryStringPropsExtractor.php';

        return $container->privates['ux.live_component.query_string_initializer_subscriber'] = new \Symfony\UX\LiveComponent\EventListener\QueryStringInitializeSubscriber(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['ux.live_component.metadata_factory'] ?? $container->load('getUx_LiveComponent_MetadataFactoryService')), new \Symfony\UX\LiveComponent\Util\QueryStringPropsExtractor(($container->privates['ux.live_component.component_hydrator'] ?? $container->load('getUx_LiveComponent_ComponentHydratorService'))), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));
    }
}
