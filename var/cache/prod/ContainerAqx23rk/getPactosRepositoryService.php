<?php

namespace ContainerAqx23rk;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPactosRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PactosRepository' shared autowired service.
     *
     * @return \App\Repository\PactosRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PactosRepository'] = new \App\Repository\PactosRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
