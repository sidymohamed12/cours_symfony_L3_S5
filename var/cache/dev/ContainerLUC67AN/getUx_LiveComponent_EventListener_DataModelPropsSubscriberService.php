<?php

namespace ContainerLUC67AN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_EventListener_DataModelPropsSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.event_listener.data_model_props_subscriber' shared service.
     *
     * @return \Symfony\UX\LiveComponent\EventListener\DataModelPropsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/EventListener/DataModelPropsSubscriber.php';

        return $container->privates['ux.live_component.event_listener.data_model_props_subscriber'] = new \Symfony\UX\LiveComponent\EventListener\DataModelPropsSubscriber(($container->privates['ux.twig_component.live_component_stack'] ?? $container->load('getUx_TwigComponent_LiveComponentStackService')), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));
    }
}
