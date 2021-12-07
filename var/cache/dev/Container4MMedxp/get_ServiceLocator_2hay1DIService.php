<?php

namespace Container4MMedxp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2hay1DIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2hay1DI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2hay1DI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blogpost' => ['privates', '.errored..service_locator.2hay1DI.App\\Entity\\Blogpost', NULL, 'Cannot autowire service ".service_locator.2hay1DI": it references class "App\\Entity\\Blogpost" but no such service exists.'],
            'commentaireRepository' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService', true],
            'commentaireService' => ['privates', 'App\\Service\\CommentaireService', 'getCommentaireServiceService', true],
        ], [
            'blogpost' => 'App\\Entity\\Blogpost',
            'commentaireRepository' => 'App\\Repository\\CommentaireRepository',
            'commentaireService' => 'App\\Service\\CommentaireService',
        ]);
    }
}
