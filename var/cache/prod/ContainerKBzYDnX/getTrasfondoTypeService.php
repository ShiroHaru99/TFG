<?php

namespace ContainerKBzYDnX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTrasfondoTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\TrasfondoType' shared autowired service.
     *
     * @return \App\Form\TrasfondoType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\TrasfondoType'] = new \App\Form\TrasfondoType(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
