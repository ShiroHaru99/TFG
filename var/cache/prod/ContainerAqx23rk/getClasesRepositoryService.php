<?php

namespace ContainerAqx23rk;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClasesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ClasesRepository' shared autowired service.
     *
     * @return \App\Repository\ClasesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ClasesRepository'] = new \App\Repository\ClasesRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
