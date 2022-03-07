<?php

namespace App\Entity;

use App\Repository\KiosqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=KiosqueRepository::class)
 */
class Kiosque
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")

     */
    private $id;



    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le nom est obligatoire.")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=Stade::class, inversedBy="kiosque")
     */
    private $stade;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity=ReservationKiosque::class, mappedBy="kiosque")
     */
    private $reservationKiosques;

    public function __construct()
    {
        $this->reservationKiosques = new ArrayCollection();
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

    public function getStade(): ?Stade
    {
        return $this->stade;
    }

    public function setStade(?Stade $stade): self
    {
        $this->stade = $stade;

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
     * @return Collection|ReservationKiosque[]
     */
    public function getReservationKiosques(): Collection
    {
        return $this->reservationKiosques;
    }

    public function addReservationKiosque(ReservationKiosque $reservationKiosque): self
    {
        if (!$this->reservationKiosques->contains($reservationKiosque)) {
            $this->reservationKiosques[] = $reservationKiosque;
            $reservationKiosque->setKiosque($this);
        }

        return $this;
    }

    public function removeReservationKiosque(ReservationKiosque $reservationKiosque): self
    {
        if ($this->reservationKiosques->removeElement($reservationKiosque)) {
            // set the owning side to null (unless already changed)
            if ($reservationKiosque->getKiosque() === $this) {
                $reservationKiosque->setKiosque(null);
            }
        }

        return $this;
    }
}
