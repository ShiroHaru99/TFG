<?php

namespace App\Entity;

use App\Repository\HabilidadesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabilidadesRepository::class)]
class Habilidades
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 200)]
    private ?string $Descripción = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    #[ORM\Column(length: 255)]
    private ?string $Origen_ID = null;

    public function __construct()
    {
        $this->origen_id_clase = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDescripción(): ?string
    {
        return $this->Descripción;
    }

    public function setDescripción(string $Descripción): static
    {
        $this->Descripción = $Descripción;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->Autor;
    }

    public function setAutor(string $Autor): static
    {
        $this->Autor = $Autor;

        return $this;
    }

    public function isValidado(): ?bool
    {
        return $this->Validado;
    }

    public function setValidado(bool $Validado): static
    {
        $this->Validado = $Validado;

        return $this;
    }

    public function getOrigenID(): ?string
    {
        return $this->Origen_ID;
    }

    public function setOrigenID(string $Origen_ID): static
    {
        $this->Origen_ID = $Origen_ID;

        return $this;
    }
}
