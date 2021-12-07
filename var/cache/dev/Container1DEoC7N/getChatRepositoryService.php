<?php

namespace Container1DEoC7N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChatRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ChatRepository' shared autowired service.
     *
     * @return \App\Repository\ChatRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ChatRepository.php';

        return $container->privates['App\\Repository\\ChatRepository'] = new \App\Repository\ChatRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
