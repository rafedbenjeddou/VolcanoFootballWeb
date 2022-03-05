<?php

namespace App\Entity;

use App\Repository\BilletRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=BilletRepository::class)
 */
class Billet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Categorie is required")
     * @Assert\NotEqualTo(
     *      value = 0,
     *     message = "le prix d'un billet ne doit pas étre égale à 0 "
     * )
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Categorie is required")
     */
    private $categorie;



    /**
     * @ORM\ManyToOne(targetEntity=Matche::class, inversedBy="billets")
     */
    private $matche;




    public function getId(): ?int
    {
        return $this->id;
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

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }


    public function getMatche(): ?Matche
    {
        return $this->matche;
    }

    public function setMatche(?Matche $matche): self
    {
        $this->matche = $matche;

        return $this;
    }

   

}
