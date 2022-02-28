<?php

namespace App\Entity;

use App\Repository\ReservationKiosqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationKiosqueRepository::class)
 */
class ReservationKiosque
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
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservationKiosques")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Kiosque::class, inversedBy="reservationKiosques")
     */
    private $kiosque;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\OneToOne(targetEntity=Facture::class, mappedBy="reservation", cascade={"persist", "remove"})
     */
    private $facture;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getKiosque(): ?Kiosque
    {
        return $this->kiosque;
    }

    public function setKiosque(?Kiosque $kiosque): self
    {
        $this->kiosque = $kiosque;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }


    public function setCreatedAt(): self
    {
        $this->created_at = new \Datetime();

        return $this;
    }

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(Facture $facture): self
    {
        // set the owning side of the relation if necessary
        if ($facture->getReservation() !== $this) {
            $facture->setReservation($this);
        }

        $this->facture = $facture;
        return $this;
    }
}
