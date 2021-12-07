<?php

namespace ContainerJyK98ox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChatControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ChatController' shared autowired service.
     *
     * @return \App\Controller\ChatController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ChatController'] = $instance = new \App\Controller\ChatController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\ChatController', $container));

        return $instance;
    }
}
