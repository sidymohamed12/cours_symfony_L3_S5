<?php

namespace ContainerCkbKq3E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientControllercreateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P.blNFL.App\Controller\ClientController::create()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.P.blNFL'] ?? $container->load('get_ServiceLocator_P_BlNFLService'));

        if (isset($container->privates['.service_locator.P.blNFL.App\\Controller\\ClientController::create()'])) {
            return $container->privates['.service_locator.P.blNFL.App\\Controller\\ClientController::create()'];
        }

        return $container->privates['.service_locator.P.blNFL.App\\Controller\\ClientController::create()'] = $a->withContext('App\\Controller\\ClientController::create()', $container);
    }
}
