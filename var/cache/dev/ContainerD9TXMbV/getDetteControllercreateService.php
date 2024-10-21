<?php

namespace ContainerD9TXMbV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDetteControllercreateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dhQeSJ7.App\Controller\DetteController::create()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dhQeSJ7.App\\Controller\\DetteController::create()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'clientRepository' => 'App\\Repository\\ClientRepository',
        ]))->withContext('App\\Controller\\DetteController::create()', $container);
    }
}
