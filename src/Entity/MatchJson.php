<?php

namespace App\Entity;

use App\Repository\MatchJsonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=MatchJsonRepository::class)
 */
class MatchJson
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *  @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *  @Groups("post:read")
     */
    private $NomMatche;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *  @Groups("post:read")
     */
    private $NomArbitre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *  @Groups("post:read")
     */
    private $Stade;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *  @Groups("post:read")
     */
    private $tour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMatche(): ?string
    {
        return $this->NomMatche;
    }

    public function setNomMatche(?string $NomMatche): self
    {
        $this->NomMatche = $NomMatche;

        return $this;
    }

    public function getNomArbitre(): ?string
    {
        return $this->NomArbitre;
    }

    public function setNomArbitre(?string $NomArbitre): self
    {
        $this->NomArbitre = $NomArbitre;

        return $this;
    }

    public function getStade(): ?string
    {
        return $this->Stade;
    }

    public function setStade(?string $Stade): self
    {
        $this->Stade = $Stade;

        return $this;
    }

    public function getTour(): ?string
    {
        return $this->tour;
    }

    public function setTour(?string $tour): self
    {
        $this->tour = $tour;

        return $this;
    }
}
