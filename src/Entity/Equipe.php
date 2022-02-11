<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EquipeRepository::class)
 */
class Equipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Name is required")
     */
    private $nom_equipe;

    /**
     * @ORM\Column(type="date")
     *
     */
    private $date_creation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $drapeau_equipe;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Name trainer is required")
     */
    private $nom_entreneur;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Joueur", mappedBy="equipe")
     */
    private $joueur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEquipe(): ?string
    {
        return $this->nom_equipe;
    }

    public function setNomEquipe(string $nom_equipe): self
    {
        $this->nom_equipe = $nom_equipe;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getDrapeauEquipe(): ?string
    {
        return $this->drapeau_equipe;
    }

    public function setDrapeauEquipe(?string $drapeau_equipe): self
    {
        $this->drapeau_equipe = $drapeau_equipe;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomEntreneur()
    {
        return $this->nom_entreneur;
    }

    public function setNomEntreneur($nom_entreneur): void
    {
        $this->nom_entreneur = $nom_entreneur;
    }
    public function __construct()
    {
        $this->joueur = new ArrayCollection();
    }
    /**
     * @return mixed
     */
    public function getJoueur()
    {
        return $this->joueur;
    }


}
