<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
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
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\OneToOne(targetEntity=ReservationKiosque::class, inversedBy="facture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $reservation;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }


    public function setCreatedAt(): self
    {
        $this->created_at = new \Datetime();

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getReservation(): ?ReservationKiosque
    {
        return $this->reservation;
    }

    public function setReservation(ReservationKiosque $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }
}
