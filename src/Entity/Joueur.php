<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=JoueurRepository::class)
 */
class Joueur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="name is required")
     */
    private $nom_joueur;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *    min = 4,
     *     max =20,
     *     minMessage = "Le prenom d'un joueur doit comporter au moins {{ limit }} caractéres",
     *      minMessage = "Le prenom d'un joueur doit comporter au plus {{ limit }} caractéres"
     *     )
     */
    private $prenom_joueur;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="age is required")
     */
    private $age;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="position is required")
     */
    private $position;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)

     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity=Equipe::class, inversedBy="joueurs")
     */
    private $equipe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *    min = 10,
     *     max =100,
     *     minMessage = "La description d'un joueur doit comporter au moins {{ limit }} caractéres",
     *     minMessage = "La description d'un joueur doit comporter au plus {{ limit }} caractéres"
     *     )
     */
    private $Description;


    public function getId(): ?int
    {
        return $this->id;
    }



    public function getNomJoueur(): ?string
    {
        return $this->nom_joueur;
    }

    public function setNomJoueur(string $nom_joueur): self
    {
        $this->nom_joueur = $nom_joueur;

        return $this;
    }

    public function getPrenomJoueur(): ?string
    {
        return $this->prenom_joueur;
    }

    public function setPrenomJoueur(string $prenom_joueur): self
    {
        $this->prenom_joueur = $prenom_joueur;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }
    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto( $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position): void
    {
        $this->position = $position;
    }

    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }


}
