<?php

namespace ContainerAqx23rk;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubrazasType2Service extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\SubrazasType2' shared autowired service.
     *
     * @return \App\Form\SubrazasType2
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\SubrazasType2'] = new \App\Form\SubrazasType2(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
