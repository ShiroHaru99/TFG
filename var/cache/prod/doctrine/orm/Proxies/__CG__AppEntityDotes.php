<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Dotes extends \App\Entity\Dotes implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'Autor' => [parent::class, 'Autor', null],
        "\0".parent::class."\0".'Beneficios' => [parent::class, 'Beneficios', null],
        "\0".parent::class."\0".'Descripcion' => [parent::class, 'Descripcion', null],
        "\0".parent::class."\0".'Nombre' => [parent::class, 'Nombre', null],
        "\0".parent::class."\0".'Requisitos' => [parent::class, 'Requisitos', null],
        "\0".parent::class."\0".'Validado' => [parent::class, 'Validado', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'img' => [parent::class, 'img', null],
        'Autor' => [parent::class, 'Autor', null],
        'Beneficios' => [parent::class, 'Beneficios', null],
        'Descripcion' => [parent::class, 'Descripcion', null],
        'Nombre' => [parent::class, 'Nombre', null],
        'Requisitos' => [parent::class, 'Requisitos', null],
        'Validado' => [parent::class, 'Validado', null],
        'id' => [parent::class, 'id', null],
        'img' => [parent::class, 'img', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
