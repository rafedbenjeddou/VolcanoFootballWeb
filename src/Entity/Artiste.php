<?php

namespace App\Entity;

use App\Repository\ArtisteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ArtisteRepository::class)
 */
class Artiste
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le nom d'artiste est obligatoire.")
     * @Assert\Length(
     * min = "3",
     * max = "10",
     * minMessage = "Le nom d'artiste doit faire au moins {{ limit }} caractères",
     * maxMessage = "Le nom d'artiste ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="L'age est obligatoire.")
     */
    private $age;

    /**
     * @ORM\ManyToOne(targetEntity=Evenement::class, inversedBy="artistes")
     */
    private $evenement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le type d'artiste est obligatoire.")
     * @Assert\Length(
     * min = "3",
     * max = "10",
     * minMessage = "Le type d'artiste doit faire au moins {{ limit }} caractères",
     * maxMessage = "Le type d'artiste ne peut pas être plus long que {{ limit }} caractères"
     * )

     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
