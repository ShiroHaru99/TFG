<?php

namespace App\Entity;

use App\Repository\TrasfondoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrasfondoRepository::class)]
class Trasfondo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999)]
    private ?string $Descripción = null;

    #[ORM\Column]
    private ?bool $Origen = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Idiomas = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $ObjetosIniciales = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Competencias = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $Plano = null;

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

    public function isOrigen(): ?bool
    {
        return $this->Origen;
    }

    public function setOrigen(bool $Origen): static
    {
        $this->Origen = $Origen;

        return $this;
    }

    public function getIdiomas(): ?string
    {
        return $this->Idiomas;
    }

    public function setIdiomas(?string $Idiomas): static
    {
        $this->Idiomas = $Idiomas;

        return $this;
    }

    public function getObjetosIniciales(): ?string
    {
        return $this->ObjetosIniciales;
    }

    public function setObjetosIniciales(?string $ObjetosIniciales): static
    {
        $this->ObjetosIniciales = $ObjetosIniciales;

        return $this;
    }

    public function getCompetencias(): ?string
    {
        return $this->Competencias;
    }

    public function setCompetencias(?string $Competencias): static
    {
        $this->Competencias = $Competencias;

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

    public function getAutor(): ?string
    {
        return $this->Autor;
    }

    public function setAutor(string $Autor): static
    {
        $this->Autor = $Autor;

        return $this;
    }

    public function getPlano(): ?string
    {
        return $this->Plano;
    }

    public function setPlano(string $Plano): static
    {
        $this->Plano = $Plano;

        return $this;
    }
}
