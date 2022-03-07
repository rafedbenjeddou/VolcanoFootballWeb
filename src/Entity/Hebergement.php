<?php

namespace App\Entity;

use App\Repository\HebergementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=HebergementRepository::class)
 */
class Hebergement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *  @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Nom Arbitre is required")
     *  @Groups("post:read")

     * *@Assert\Length(
     *     min = 5,
     *    max = 50,
    *minMessage = " Le nom d'un article comporter au moins {{ limit }} caractères",
    *maxMessage="Le nom d'un article doit comporter au plus {{ limit }} caractères"
     *)
     */
    private $nomH;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups("post:read")
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Nom Arbitre is required")
     *  @Groups("post:read")

     * *@Assert\Length(
     *     min = 5,
     *    max = 50,
    *minMessage = " Le nom d'un article comporter au moins {{ limit }} caractères",
    *maxMessage="Le nom d'un article doit comporter au plus {{ limit }} caractères"
     *)
     */
    private $adresse;


    

    /**
     * @ORM\ManyToOne(targetEntity=Agence::class, inversedBy="hebergements")
     * 
     */
    private $agence;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *  @Groups("post:read")
     */
    private $photoH;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="hebergement",cascade={"all"},orphanRemoval=true)
     */
    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    


    public function getNomH(): ?string
    {
        return $this->nomH;
    }

    public function setNomH(string $nomH): self
    {
        $this->nomH = $nomH;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }



    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    public function getPhotoH()
    {
        return $this->photoH;
    }

    public function setPhotoH( $photoH): self
    {
        $this->photoH = $photoH;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setHebergement($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getHebergement() === $this) {
                $reservation->setHebergement(null);
            }
        }

        return $this;
    }
}
