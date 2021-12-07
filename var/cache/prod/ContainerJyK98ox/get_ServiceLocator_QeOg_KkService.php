<?php

namespace ContainerJyK98ox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QeOg_KkService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.qeOg.kk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qeOg.kk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chatRepository' => ['privates', 'App\\Repository\\ChatRepository', 'getChatRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'chatRepository' => 'App\\Repository\\ChatRepository',
            'paginator' => '?',
        ]);
    }
}