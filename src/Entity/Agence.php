<?php

namespace App\Entity;

use App\Repository\AgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=AgenceRepository::class)
 */
class Agence
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
     * @Groups("post:read")
     * *@Assert\Length(
     *     min = 5,
     *    max = 50,
    *minMessage = " Le nom d'un article comporter au moins {{ limit }} caractères",
    *maxMessage="Le nom d'un article doit comporter au plus {{ limit }} caractères"
     *)
     
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Nom Arbitre is required")
     * @Groups("post:read")

     *@Assert\Length(
     *     min = 5,
     *    max = 50,
    *minMessage = " Le nom d'un article comporter au moins {{ limit }} caractères",
    *maxMessage="Le nom d'un article doit comporter au plus {{ limit }} caractères"
     *)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Nom Arbitre is required")
     * @Groups("post:read")

     * *@Assert\Length(
     *     min = 5,
     *    max = 10,
    *minMessage = " Le nom d'un article comporter au moins {{ limit }} caractères",
    *maxMessage="Le nom d'un article doit comporter au plus {{ limit }} caractères"
     *)
     */
    private $numTel;

    /**
     * @ORM\OneToMany(targetEntity=Hebergement::class, mappedBy="agence",cascade={"all"},orphanRemoval=true)
     * 
     */
    private $hebergements;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoA;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NbEtoiles;

    public function __construct()
    {
        $this->hebergements = new ArrayCollection();
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(int $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * @return Collection|Hebergement[]
     */
    public function getHebergements(): Collection
    {
        return $this->hebergements;
    }

    public function addHebergement(Hebergement $hebergement): self
    {
        if (!$this->hebergements->contains($hebergement)) {
            $this->hebergements[] = $hebergement;
            $hebergement->setAgence($this);
        }

        return $this;
    }

    public function removeHebergement(Hebergement $hebergement): self
    {
        if ($this->hebergements->removeElement($hebergement)) {
            // set the owning side to null (unless already changed)
            if ($hebergement->getAgence() === $this) {
                $hebergement->setAgence(null);
            }
        }

        return $this;
    }

    public function getPhotoA(): ?string
    {
        return $this->photoA;
    }

    public function setPhotoA(?string $photoA): self
    {
        $this->photoA = $photoA;

        return $this;
    }

    public function getNbEtoiles(): ?int
    {
        return $this->NbEtoiles;
    }

    public function setNbEtoiles(?int $NbEtoiles): self
    {
        $this->NbEtoiles = $NbEtoiles;

        return $this;
    }
}
