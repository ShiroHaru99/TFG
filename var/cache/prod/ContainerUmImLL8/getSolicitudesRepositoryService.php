<?php

namespace ContainerUmImLL8;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSolicitudesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\SolicitudesRepository' shared autowired service.
     *
     * @return \App\Repository\SolicitudesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\SolicitudesRepository'] = new \App\Repository\SolicitudesRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
