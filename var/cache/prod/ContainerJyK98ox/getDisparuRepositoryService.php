<?php

namespace ContainerJyK98ox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDisparuRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\DisparuRepository' shared autowired service.
     *
     * @return \App\Repository\DisparuRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\DisparuRepository'] = new \App\Repository\DisparuRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
