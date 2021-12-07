<?php

namespace Container4MMedxp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GvoIr1FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gvoIr1F' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gvoIr1F'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chat' => ['privates', '.errored..service_locator.gvoIr1F.App\\Entity\\Chat', NULL, 'Cannot autowire service ".service_locator.gvoIr1F": it references class "App\\Entity\\Chat" but no such service exists.'],
            'commentaireRepository' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService', true],
            'commentaireService' => ['privates', 'App\\Service\\CommentaireService', 'getCommentaireServiceService', true],
        ], [
            'chat' => 'App\\Entity\\Chat',
            'commentaireRepository' => 'App\\Repository\\CommentaireRepository',
            'commentaireService' => 'App\\Service\\CommentaireService',
        ]);
    }
}
