<?php

namespace ContainerKBzYDnX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_DatetimeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.datetime' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.datetime'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver(new \Symfony\Component\Clock\Clock());
    }
}
