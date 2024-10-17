<?php

namespace ContainerLUC67AN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..XbHHm9.App\Controller\ClientController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..XbHHm9.App\\Controller\\ClientController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
        ], [
            'clientRepository' => 'App\\Repository\\ClientRepository',
        ]))->withContext('App\\Controller\\ClientController::index()', $container);
    }
}
