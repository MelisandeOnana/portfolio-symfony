<?php

namespace App\Entity;

use App\Repository\ProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjetRepository::class)]
#[ORM\Table(name: 'projet')]
class Projet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_projet')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column]
    private ?bool $visible = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lien = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $documents = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $githubLinks = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $typeProjet = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $etat = null;

    /**
     * @var Collection<int, ProjetImage>
     */
    #[ORM\OneToMany(targetEntity: ProjetImage::class, mappedBy: 'projet', orphanRemoval: true)]
    private Collection $projetImages;

    /**
     * @var Collection<int, Technologie>
     */
    #[ORM\ManyToMany(targetEntity: Technologie::class, inversedBy: 'projets')]
    #[ORM\JoinTable(
        name: 'projet_technologie',
        joinColumns: [new ORM\JoinColumn(name: 'id_projet', referencedColumnName: 'id_projet')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'id_technologie', referencedColumnName: 'id_technologie')]
    )]
    private Collection $technologies;

    public function __construct()
    {
        $this->projetImages = new ArrayCollection();
        $this->technologies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function isVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): static
    {
        $this->lien = $lien;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getDocuments(): ?string
    {
        return $this->documents;
    }

    public function setDocuments(?string $documents): static
    {
        $this->documents = $documents;

        return $this;
    }

    public function getGithubLinks(): ?string
    {
        return $this->githubLinks;
    }

    public function setGithubLinks(?string $githubLinks): static
    {
        $this->githubLinks = $githubLinks;

        return $this;
    }

    public function getTypeProjet(): ?string
    {
        return $this->typeProjet;
    }

    public function setTypeProjet(?string $typeProjet): static
    {
        $this->typeProjet = $typeProjet;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }
    
    /**
     * @return Collection<int, ProjetImage>
     */
    public function getProjetImages(): Collection
    {
        return $this->projetImages;
    }

    public function addProjetImage(ProjetImage $projetImage): static
    {
        if (!$this->projetImages->contains($projetImage)) {
            $this->projetImages->add($projetImage);
            $projetImage->setProjet($this);
        }

        return $this;
    }

    public function removeProjetImage(ProjetImage $projetImage): static
    {
        if ($this->projetImages->removeElement($projetImage)) {
            // set the owning side to null (unless already changed)
            if ($projetImage->getProjet() === $this) {
                $projetImage->setProjet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Technologie>
     */
    public function getTechnologies(): Collection
    {
        return $this->technologies;
    }

    public function addTechnology(Technologie $technology): static
    {
        if (!$this->technologies->contains($technology)) {
            $this->technologies->add($technology);
        }

        return $this;
    }

    public function removeTechnology(Technologie $technology): static
    {
        $this->technologies->removeElement($technology);

        return $this;
    }
}
