<?php

namespace ContainerJyK98ox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompteControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\CompteController' shared autowired service.
     *
     * @return \App\Controller\CompteController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CompteController'] = $instance = new \App\Controller\CompteController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\CompteController', $container));

        return $instance;
    }
}
