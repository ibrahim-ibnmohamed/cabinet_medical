<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\RendezVous;
use App\Entity\Medecin;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateNaissance = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $etatCivil = null;

    #[ORM\Column(length: 255)]
    private ?string $groupeSanguin = null;

    #[ORM\Column]
    private ?int $poids = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $taille = null;

    #[ORM\Column(length: 255)]
    private ?string $profession = null;

    #[ORM\OneToMany(mappedBy: 'patient', targetEntity: RendezVous::class)]
    private Collection $rendezVous;

    #[ORM\ManyToOne]
    private ?Medecin $medecinTraitant = null;

    public function __construct()
    {
        $this->rendezVous = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): static { $this->nom = $nom; return $this; }

    public function getPrenom(): ?string { return $this->prenom; }
    public function setPrenom(string $prenom): static { $this->prenom = $prenom; return $this; }

    public function getGenre(): ?string { return $this->genre; }
    public function setGenre(string $genre): static { $this->genre = $genre; return $this; }

    public function getDateNaissance(): ?\DateTimeInterface { return $this->dateNaissance; }
    public function setDateNaissance(\DateTimeInterface $dateNaissance): static { $this->dateNaissance = $dateNaissance; return $this; }

    public function getAdresse(): ?string { return $this->adresse; }
    public function setAdresse(string $adresse): static { $this->adresse = $adresse; return $this; }

    public function getTelephone(): ?string { return $this->telephone; }
    public function setTelephone(string $telephone): static { $this->telephone = $telephone; return $this; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): static { $this->email = $email; return $this; }

    public function getEtatCivil(): ?string { return $this->etatCivil; }
    public function setEtatCivil(string $etatCivil): static { $this->etatCivil = $etatCivil; return $this; }

    public function getGroupeSanguin(): ?string { return $this->groupeSanguin; }
    public function setGroupeSanguin(string $groupeSanguin): static { $this->groupeSanguin = $groupeSanguin; return $this; }

    public function getPoids(): ?int { return $this->poids; }
    public function setPoids(int $poids): static { $this->poids = $poids; return $this; }

    public function getTaille(): ?string { return $this->taille; }
    public function setTaille(string $taille): static { $this->taille = $taille; return $this; }

    public function getProfession(): ?string { return $this->profession; }
    public function setProfession(string $profession): static { $this->profession = $profession; return $this; }

    public function getRendezVous(): Collection { return $this->rendezVous; }

    public function getMedecinTraitant(): ?Medecin
    {
        return $this->medecinTraitant;
    }

    public function setMedecinTraitant(?Medecin $medecin): static
    {
        $this->medecinTraitant = $medecin;
        return $this;
    }
}
