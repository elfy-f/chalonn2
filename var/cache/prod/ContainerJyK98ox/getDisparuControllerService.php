<?php

namespace ContainerJyK98ox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDisparuControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\DisparuController' shared autowired service.
     *
     * @return \App\Controller\DisparuController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\DisparuController'] = $instance = new \App\Controller\DisparuController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\DisparuController', $container));

        return $instance;
    }
}
