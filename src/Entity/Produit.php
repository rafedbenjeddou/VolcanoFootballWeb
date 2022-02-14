<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le nom du produit est obligatoire.")
     * @Assert\Length(
     * min = "3",
     * max = "10",
     * minMessage = "Le nom du produit doit faire au moins {{ limit }} caractères",
     * maxMessage = "Le nom du produit ne peut pas être plus long que {{ limit }} caractères"
     * )

     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le type est obligatoire.")
     * @Assert\Length(
     * min = "3",
     * max = "10",
     * minMessage = "Le type du produit doit faire au moins {{ limit }} caractères",
     * maxMessage = "Le type du produit ne peut pas être plus long que {{ limit }} caractères"
     * )

     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $taille;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La couleur est obligatoire.")
     * @Assert\Length(
     * min = "3",
     * max = "15",
     * minMessage = "La couleur du produit doit faire au moins {{ limit }} caractères",
     * maxMessage = "La couleur du produit ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $couleur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrEtoiles;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le description du produit est obligatoire.")
     * @Assert\Length(
     * min = "5",
     * max = "50",
     * minMessage = "Le description du produit doit faire au moins {{ limit }} caractères",
     * maxMessage = "Le description du produit ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Le prix du produit est obligatoire.")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La photo du produit est obligatoire.")
     */
    private $photo;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getNbrEtoiles(): ?int
    {
        return $this->nbrEtoiles;
    }

    public function setNbrEtoiles(int $nbrEtoiles): self
    {
        $this->nbrEtoiles = $nbrEtoiles;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

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
}
