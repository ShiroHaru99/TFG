<?php

namespace ContainerAqx23rk;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabilidadesType1Service extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\HabilidadesType1' shared autowired service.
     *
     * @return \App\Form\HabilidadesType1
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\HabilidadesType1'] = new \App\Form\HabilidadesType1();
    }
}