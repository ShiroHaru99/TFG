<?php

namespace ContainerAqx23rk;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDotesTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\DotesType' shared autowired service.
     *
     * @return \App\Form\DotesType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\DotesType'] = new \App\Form\DotesType(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
