<?php

namespace ContainerQUL8iUk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheeseListingSetOwnerListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Doctrine\CheeseListingSetOwnerListener' shared autowired service.
     *
     * @return \App\Doctrine\CheeseListingSetOwnerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Doctrine/CheeseListingSetOwnerListener.php';

        return $container->privates['App\\Doctrine\\CheeseListingSetOwnerListener'] = new \App\Doctrine\CheeseListingSetOwnerListener(($container->privates['security.helper'] ?? $container->getSecurity_HelperService()));
    }
}