<?php

namespace App\Entity;

use App\Repository\MatcheRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MatcheRepository::class)
 */
class Matche
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
    private $idEquipe1;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdEquipe2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomArbitre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tour;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdStade;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEquipe1(): ?int
    {
        return $this->idEquipe1;
    }

    public function setIdEquipe1(int $idEquipe1): self
    {
        $this->idEquipe1 = $idEquipe1;

        return $this;
    }

    public function getIdEquipe2(): ?int
    {
        return $this->IdEquipe2;
    }

    public function setIdEquipe2(int $IdEquipe2): self
    {
        $this->IdEquipe2 = $IdEquipe2;

        return $this;
    }

    public function getNomArbitre(): ?string
    {
        return $this->NomArbitre;
    }

    public function setNomArbitre(string $NomArbitre): self
    {
        $this->NomArbitre = $NomArbitre;

        return $this;
    }

    public function getTour(): ?string
    {
        return $this->tour;
    }

    public function setTour(string $tour): self
    {
        $this->tour = $tour;

        return $this;
    }

    public function getIdStade(): ?int
    {
        return $this->IdStade;
    }

    public function setIdStade(int $IdStade): self
    {
        $this->IdStade = $IdStade;

        return $this;
    }
}
