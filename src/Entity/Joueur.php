<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\ORM\Mapping as ORM;

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
     */
    private $nom_joueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_joueur;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

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
}
