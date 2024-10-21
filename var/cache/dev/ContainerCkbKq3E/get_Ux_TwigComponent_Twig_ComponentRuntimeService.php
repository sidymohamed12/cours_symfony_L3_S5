<?php

namespace ContainerCkbKq3E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Ux_TwigComponent_Twig_ComponentRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux.twig_component.twig.component_runtime' shared service.
     *
     * @return \Symfony\UX\TwigComponent\Twig\ComponentRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/Twig/ComponentRuntime.php';

        $a = ($container->privates['ux.twig_component.component_renderer'] ?? $container->load('getUx_TwigComponent_ComponentRendererService'));

        if (isset($container->privates['.ux.twig_component.twig.component_runtime'])) {
            return $container->privates['.ux.twig_component.twig.component_runtime'];
        }

        return $container->privates['.ux.twig_component.twig.component_runtime'] = new \Symfony\UX\TwigComponent\Twig\ComponentRuntime($a);
    }
}
