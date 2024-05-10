<?php

namespace ContainerBDiIjOe;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubclasesType2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\SubclasesType2' shared autowired service.
     *
     * @return \App\Form\SubclasesType2
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SubclasesType2.php';

        return $container->privates['App\\Form\\SubclasesType2'] = new \App\Form\SubclasesType2(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}