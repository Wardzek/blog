<?php

namespace ContainerWdiUOe2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ja1C_MwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ja1C.mw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ja1C.mw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'level' => ['privates', '.errored..service_locator.ja1C.mw.App\\Entity\\Level', NULL, 'Cannot autowire service ".service_locator.ja1C.mw": it references class "App\\Entity\\Level" but no such service exists.'],
            'levelRepository' => ['privates', 'App\\Repository\\LevelRepository', 'getLevelRepositoryService', true],
            'repo' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'level' => 'App\\Entity\\Level',
            'levelRepository' => 'App\\Repository\\LevelRepository',
            'repo' => 'App\\Repository\\PostRepository',
        ]);
    }
}
