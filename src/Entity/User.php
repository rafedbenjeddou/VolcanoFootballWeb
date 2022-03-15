<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"username"}, message="Ce username existe déja!")
 * @UniqueEntity(fields={"email"}, message="Ce email existe déja!")
 */


class User implements UserInterface
{

    const ROLE_ADMIN = 'ROLE_ADMIN';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180)
     * @Assert\NotBlank(message="Le nom d'utilisateur est obligatoire.")
     * @Groups("post:read")
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     * @Groups("post:read")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Le mot de passe est obligatoire.")
     * @Assert\Length(
     * min = "3",
     * max = "15",
     * minMessage = "Le mot de passe doit faire au moins {{ limit }} caractères",
     * maxMessage = "Le mot de passe ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Groups("post:read")
     */

    private $password;


    /**
     * @Assert\EqualTo(propertyPath="password", message="Vous n'avez pas tapez le meme mot de passe")
     * @Groups("post:read")
     */
    public $confirmePassword;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le nom est obligatoire.")
     * @Assert\Length(
     * min = "3",
     * max = "10",
     * minMessage = "Le nom doit faire au moins {{ limit }} caractères",
     * maxMessage = "Le nom ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Groups("post:read")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le prenom est obligatoire.")
     * @Assert\Length(
     * min = "3",
     * max = "10",
     * minMessage = "Le prenom doit faire au moins {{ limit }} caractères",
     * maxMessage = "Le prenom ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Groups("post:read")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $genre;


    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="L'age est obligatoire.")
     * @Groups("post:read")
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le pays est obligatoire.")
     * @Groups("post:read")
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="L'email est obligatoire.")
     * @Assert\Email(message = "Ce e-mail n'est pas valide.")
     * @Groups("post:read")
     */
    private $email;


    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Le numéro de téléphone est obligatoire.")
     * @Assert\Length(
     * min = "5",
     * max = "30",
     * minMessage = "Le numéro de téléphone doit faire au moins {{ limit }} nombres.",
     * maxMessage = "Le numéro de téléphone ne peut pas être plus long que {{ limit }} nombres."
     * )
     * @Groups("post:read")
     */
    private $numTel;

    /**
     * @ORM\OneToMany(targetEntity=Commande::class, mappedBy="user", cascade={"all"}, orphanRemoval=true)
     */
    private $commandes;

    /**
     * @ORM\OneToMany(targetEntity=ResetPasswordRequest::class, mappedBy="user", cascade={"all"}, orphanRemoval=true)
     */
    private $reset;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled;

    /**
     * @ORM\OneToMany(targetEntity=Favori::class, mappedBy="user", cascade={"all"}, orphanRemoval=true)
     */
    private $favoris;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @ORM\OneToMany(targetEntity=ReservationKiosque::class, mappedBy="user", cascade={"all"}, orphanRemoval=true)
     */
    private $reservationKiosques;


    public function __construct()
    {
        $this->commandes = new ArrayCollection();
        $this->favoris = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

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

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
            $commande->setUser($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getUser() === $this) {
                $commande->setUser(null);
            }
        }

        return $this;
    }

    public function isAdmin(): bool
    {
        return in_array(self::ROLE_ADMIN,$this->getRoles());
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

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
            $favori->setUser($this);
        }

        return $this;
    }

    public function removeFavori(Favori $favori): self
    {
        if ($this->favoris->removeElement($favori)) {
            // set the owning side to null (unless already changed)
            if ($favori->getUser() === $this) {
                $favori->setUser(null);
            }
        }

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

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
            $reservationKiosque->setUser($this);
        }

        return $this;
    }

    public function removeReservationKiosque(ReservationKiosque $reservationKiosque): self
    {
        if ($this->reservationKiosques->removeElement($reservationKiosque)) {
            // set the owning side to null (unless already changed)
            if ($reservationKiosque->getUser() === $this) {
                $reservationKiosque->setUser(null);
            }
        }

        return $this;
    }


}
