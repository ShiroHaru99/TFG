<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pactos extends \App\Entity\Pactos implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'Descripción' => [parent::class, 'Descripción', null],
        "\0".parent::class."\0".'Nombre' => [parent::class, 'Nombre', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nivel_1' => [parent::class, 'nivel_1', null],
        "\0".parent::class."\0".'nivel_2' => [parent::class, 'nivel_2', null],
        "\0".parent::class."\0".'nivel_3' => [parent::class, 'nivel_3', null],
        "\0".parent::class."\0".'nivel_4' => [parent::class, 'nivel_4', null],
        "\0".parent::class."\0".'nivel_5' => [parent::class, 'nivel_5', null],
        'Descripción' => [parent::class, 'Descripción', null],
        'Nombre' => [parent::class, 'Nombre', null],
        'id' => [parent::class, 'id', null],
        'nivel_1' => [parent::class, 'nivel_1', null],
        'nivel_2' => [parent::class, 'nivel_2', null],
        'nivel_3' => [parent::class, 'nivel_3', null],
        'nivel_4' => [parent::class, 'nivel_4', null],
        'nivel_5' => [parent::class, 'nivel_5', null],
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
