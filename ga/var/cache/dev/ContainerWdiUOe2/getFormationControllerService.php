<?php

namespace ContainerWdiUOe2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FormationController' shared autowired service.
     *
     * @return \App\Controller\FormationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FormationController.php';

        $container->services['App\\Controller\\FormationController'] = $instance = new \App\Controller\FormationController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\FormationController', $container));

        return $instance;
    }
}
