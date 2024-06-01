<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Hechizos extends \App\Entity\Hechizos implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'Componentes' => [parent::class, 'Componentes', null],
        "\0".parent::class."\0".'Descripcion' => [parent::class, 'Descripcion', null],
        "\0".parent::class."\0".'Duracion' => [parent::class, 'Duracion', null],
        "\0".parent::class."\0".'Escuela' => [parent::class, 'Escuela', null],
        "\0".parent::class."\0".'Nivel' => [parent::class, 'Nivel', null],
        "\0".parent::class."\0".'Nombre' => [parent::class, 'Nombre', null],
        "\0".parent::class."\0".'Rango' => [parent::class, 'Rango', null],
        "\0".parent::class."\0".'TiempoDeEjecucion' => [parent::class, 'TiempoDeEjecucion', null],
        "\0".parent::class."\0".'Validado' => [parent::class, 'Validado', null],
        "\0".parent::class."\0".'Zona_Efecto' => [parent::class, 'Zona_Efecto', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'img' => [parent::class, 'img', null],
        'Autor' => [parent::class, 'Autor', null],
        'Componentes' => [parent::class, 'Componentes', null],
        'Descripcion' => [parent::class, 'Descripcion', null],
        'Duracion' => [parent::class, 'Duracion', null],
        'Escuela' => [parent::class, 'Escuela', null],
        'Nivel' => [parent::class, 'Nivel', null],
        'Nombre' => [parent::class, 'Nombre', null],
        'Rango' => [parent::class, 'Rango', null],
        'TiempoDeEjecucion' => [parent::class, 'TiempoDeEjecucion', null],
        'Validado' => [parent::class, 'Validado', null],
        'Zona_Efecto' => [parent::class, 'Zona_Efecto', null],
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
