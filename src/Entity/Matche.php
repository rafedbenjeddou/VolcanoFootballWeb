<?php

namespace App\Entity;

use App\Repository\MatcheRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank(message="IdEquipe 2 is required")
     */
    private $idEquipe1;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="IdEquipe 2 is required")
     */
    private $IdEquipe2;

    /**
     * @ORM\Column(type="string", length=255)
     * *@Assert\Length(
     *    min = 4,
     *     max =20,
     *     minMessage = "Le nom d'un article doit comporter au moins {{ limit }} caractéres",
     *      minMessage = "Le nom d'un article doit comporter au plus {{ limit }} caractéres"
     *     )
     */
    private $NomArbitre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Tour is required")
     */
    private $tour;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Id Stade is required")
     */
    private $IdStade;

    /**
     * @ORM\Column(type="date")
     *  @Assert\NotBlank(message="Date Stade is required")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity=Billet::class, mappedBy="matche")
     */
    private $billets;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *    min = 10,
     *     max =50,
     *     minMessage = "Le nom d'un article doit comporter au moins {{ limit }} caractéres",
     *      minMessage = "Le nom d'un article doit comporter au plus {{ limit }} caractéres"
     *     )
     */
    private $NomMatche;

    /**
     * @ORM\Column(type="time")
     *  @Assert\NotBlank(message="time is required")
     */
    private $time;

    public function __construct()
    {
        $this->billets = new ArrayCollection();
    }

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Billet[]
     */
    public function getBillets(): Collection
    {
        return $this->billets;
    }

    public function addBillet(Billet $billet): self
    {
        if (!$this->billets->contains($billet)) {
            $this->billets[] = $billet;
            $billet->setMatche($this);
        }

        return $this;
    }

    public function removeBillet(Billet $billet): self
    {
        if ($this->billets->removeElement($billet)) {
            // set the owning side to null (unless already changed)
            if ($billet->getMatche() === $this) {
                $billet->setMatche(null);
            }
        }

        return $this;
    }

    public function getNomMatche(): ?string
    {
        return $this->NomMatche;
    }

    public function setNomMatche(string $NomMatche): self
    {
        $this->NomMatche = $NomMatche;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }
}
