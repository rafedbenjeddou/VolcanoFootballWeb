<?php

namespace App\Entity;

use App\Repository\StadeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=StadeRepository::class)
 * @UniqueEntity("nom")
 */
class Stade
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Adresse est obligatoire")
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Capacite est obligatoire")
     */
    private $capacite;

    /**
     * @ORM\Column(type="date")
     */
    private $dateouverture;

    /**
     * @ORM\OneToMany(targetEntity=Kiosque::class, mappedBy="stade" , cascade={"all"}, orphanRemoval=true)
     */
    private $kiosque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity=Evenement::class, mappedBy="stade", cascade={"all"}, orphanRemoval=true)
     */
    private $evenements;



    public function __construct()
    {
        $this->kiosque = new ArrayCollection();
        $this->evenements = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
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

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getDateouverture(): ?\DateTimeInterface
    {
        return $this->dateouverture;
    }

    public function setDateouverture(\DateTimeInterface $dateouverture): self
    {
        $this->dateouverture = $dateouverture;

        return $this;
    }
    /**
     * @return Collection|Kiosque[]
     */
    public function getKiosque(): Collection
    {
        return $this->kiosque;
    }


    public function addKiosque(Kiosque $kiosque): self
    {
        if (!$this->kiosque->contains($kiosque)) {
            $this->kiosque[] = $kiosque;
            $kiosque->setStade($this);
        }

        return $this;
    }

    public function removeKiosque(Kiosque $kiosque): self
    {
        if ($this->kiosque->removeElement($kiosque)) {
            // set the owning side to null (unless already changed)
            if ($kiosque->getStade() === $this) {
                $kiosque->setStade(null);
            }
        }

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }


    public function _toString(): string
    {
        return $this;
    }

    /**
     * @return Collection|Evenement[]
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
            $evenement->setStade($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getStade() === $this) {
                $evenement->setStade(null);
            }
        }

        return $this;
    }


}
