<?php

namespace ContainerDpxQRNj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IqSceiR.App\Controller\ArticleController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IqSceiR.App\\Controller\\ArticleController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
        ]))->withContext('App\\Controller\\ArticleController::index()', $container);
    }
}
