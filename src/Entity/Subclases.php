<?php

namespace App\Entity;

use App\Repository\SubclasesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubclasesRepository::class)]
class Subclases
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Requisitos = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clases $clase_id = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor = null;

    #[ORM\Column]
    private ?bool $Validado = null;

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

    public function getRequisitos(): ?string
    {
        return $this->Requisitos;
    }

    public function setRequisitos(?string $Requisitos): static
    {
        $this->Requisitos = $Requisitos;

        return $this;
    }

    public function getClaseId(): ?Clases
    {
        return $this->clase_id;
    }

    public function setClaseId(?Clases $clase_id): static
    {
        $this->clase_id = $clase_id;

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
}
