<?php

namespace ContainerJyK98ox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFaTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\FaType' shared autowired service.
     *
     * @return \App\Form\FaType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\FaType'] = new \App\Form\FaType();
    }
}