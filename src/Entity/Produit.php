<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
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
     * @Groups("post:read")
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
     * @Groups("post:read")
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
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
     * @Groups("post:read")
     */
    private $couleur;

    /**
     * @ORM\Column(type="integer")
     * @Groups("post:read")
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
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Le prix du produit est obligatoire.")
     * @Groups("post:read")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La photo du produit est obligatoire.")
     * @Groups("post:read")
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity=Commande::class, mappedBy="produit", cascade={"all"}, orphanRemoval=true)
     */
    private $commandes;

    /**
     * @ORM\OneToMany(targetEntity=Favori::class, mappedBy="produit", cascade={"all"}, orphanRemoval=true)
     */
    private $favoris;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
        $this->favoris = new ArrayCollection();
    }

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

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setProduit($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getProduit() === $this) {
                $commande->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Favori[]
     */
    public function getFavoris(): Collection
    {
        return $this->favoris;
    }

    public function addFavori(Favori $favori): self
    {
        if (!$this->favoris->contains($favori)) {
            $this->favoris[] = $favori;
            $favori->setProduit($this);
        }

        return $this;
    }

    public function removeFavori(Favori $favori): self
    {
        if ($this->favoris->removeElement($favori)) {
            // set the owning side to null (unless already changed)
            if ($favori->getProduit() === $this) {
                $favori->setProduit(null);
            }
        }

        return $this;
    }
}
