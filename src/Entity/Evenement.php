<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idMatch;

    /**
     * @ORM\Column(type="integer")
     */
    private $idArtiste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomMatch;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomEvent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMatch(): ?int
    {
        return $this->idMatch;
    }

    public function setIdMatch(int $idMatch): self
    {
        $this->idMatch = $idMatch;

        return $this;
    }

    public function getIdArtiste(): ?int
    {
        return $this->idArtiste;
    }

    public function setIdArtiste(int $idArtiste): self
    {
        $this->idArtiste = $idArtiste;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getNomMatch(): ?string
    {
        return $this->nomMatch;
    }

    public function setNomMatch(string $nomMatch): self
    {
        $this->nomMatch = $nomMatch;

        return $this;
    }

    public function getNomEvent(): ?string
    {
        return $this->NomEvent;
    }

    public function setNomEvent(string $NomEvent): self
    {
        $this->NomEvent = $NomEvent;

        return $this;
    }
}
