<?php

namespace ContainerYzeBZ3t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WGbNoR3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wGbNoR3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wGbNoR3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\ClientController::index' => ['privates', '.service_locator..XbHHm9.App\\Controller\\ClientController::index()', 'getClientControllerindexService', true],
            'App\\Controller\\ClientController::searchByTelephone' => ['privates', '.service_locator..XbHHm9.App\\Controller\\ClientController::searchByTelephone()', 'getClientControllersearchByTelephoneService', true],
            'App\\Controller\\ClientController::create' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ClientController::create()', 'getClientControllercreateService', true],
            'App\\Controller\\UsersController::index' => ['privates', '.service_locator.OgKtQNk.App\\Controller\\UsersController::index()', 'getUsersControllerindexService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\ClientController:index' => ['privates', '.service_locator..XbHHm9.App\\Controller\\ClientController::index()', 'getClientControllerindexService', true],
            'App\\Controller\\ClientController:searchByTelephone' => ['privates', '.service_locator..XbHHm9.App\\Controller\\ClientController::searchByTelephone()', 'getClientControllersearchByTelephoneService', true],
            'App\\Controller\\ClientController:create' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ClientController::create()', 'getClientControllercreateService', true],
            'App\\Controller\\UsersController:index' => ['privates', '.service_locator.OgKtQNk.App\\Controller\\UsersController::index()', 'getUsersControllerindexService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\ClientController::index' => '?',
            'App\\Controller\\ClientController::searchByTelephone' => '?',
            'App\\Controller\\ClientController::create' => '?',
            'App\\Controller\\UsersController::index' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\ClientController:index' => '?',
            'App\\Controller\\ClientController:searchByTelephone' => '?',
            'App\\Controller\\ClientController:create' => '?',
            'App\\Controller\\UsersController:index' => '?',
        ]);
    }
}
