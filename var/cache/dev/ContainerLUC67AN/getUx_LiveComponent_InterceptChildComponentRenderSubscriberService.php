<?php

namespace ContainerLUC67AN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_InterceptChildComponentRenderSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.intercept_child_component_render_subscriber' shared service.
     *
     * @return \Symfony\UX\LiveComponent\EventListener\InterceptChildComponentRenderSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/EventListener/InterceptChildComponentRenderSubscriber.php';

        return $container->privates['ux.live_component.intercept_child_component_render_subscriber'] = new \Symfony\UX\LiveComponent\EventListener\InterceptChildComponentRenderSubscriber(($container->privates['ux.twig_component.live_component_stack'] ?? $container->load('getUx_TwigComponent_LiveComponentStackService')), (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Symfony\\UX\\LiveComponent\\Twig\\DeterministicTwigIdCalculator' => ['privates', 'ux.live_component.deterministic_id_calculator', 'getUx_LiveComponent_DeterministicIdCalculatorService', true],
            'Symfony\\UX\\LiveComponent\\Util\\ChildComponentPartialRenderer' => ['privates', 'ux.live_component.child_component_partial_renderer', 'getUx_LiveComponent_ChildComponentPartialRendererService', true],
        ], [
            'Symfony\\UX\\LiveComponent\\Twig\\DeterministicTwigIdCalculator' => 'Symfony\\UX\\LiveComponent\\Twig\\DeterministicTwigIdCalculator',
            'Symfony\\UX\\LiveComponent\\Util\\ChildComponentPartialRenderer' => 'Symfony\\UX\\LiveComponent\\Util\\ChildComponentPartialRenderer',
        ]))->withContext('ux.live_component.intercept_child_component_render_subscriber', $container));
    }
}
