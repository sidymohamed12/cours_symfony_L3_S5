<?php

namespace ContainerLUC67AN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_BatchActionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'ux.live_component.batch_action_controller' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Controller\BatchActionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Controller/BatchActionController.php';

        return $container->services['ux.live_component.batch_action_controller'] = new \Symfony\UX\LiveComponent\Controller\BatchActionController(($container->services['http_kernel'] ?? self::getHttpKernelService($container)));
    }
}
