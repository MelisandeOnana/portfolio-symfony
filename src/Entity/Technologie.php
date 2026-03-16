<?php

namespace App\Entity;

use App\Repository\TechnologieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TechnologieRepository::class)]
#[ORM\Table(name: 'technologie')]
class Technologie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_technologie')]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $certificationsPdf = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $categorie = null;

    #[ORM\Column(type: 'boolean')]
    private $certified = false;

    /**
     * @var Collection<int, Projet>
     */
    #[ORM\ManyToMany(targetEntity: Projet::class, mappedBy: 'technologies')]
    private Collection $projets;

    /**
     * @var string|null
     */
    private ?string $certificationPdf = null;

    public function __construct()
    {
        $this->projets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    // ...
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getCertificationsPdf(): ?array
    {
        return $this->certificationsPdf;
    }

    public function setCertificationsPdf(?array $certificationsPdf): static
    {
        $this->certificationsPdf = $certificationsPdf;

        return $this;
    }

    public function addCertificationPdf(string $filename, string $title = null): static
    {
        if ($this->certificationsPdf === null) {
            $this->certificationsPdf = [];
        }

        $this->certificationsPdf[] = [
            'filename' => $filename,
            'title' => $title ?? 'Certification ' . (count($this->certificationsPdf) + 1),
            'uploaded_at' => (new \DateTime())->format('Y-m-d H:i:s')
        ];

        return $this;
    }

    public function removeCertificationPdf(int $index): static
    {
        if (isset($this->certificationsPdf[$index])) {
            unset($this->certificationsPdf[$index]);
            $this->certificationsPdf = array_values($this->certificationsPdf); // Réindexer
        }

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCertificationPdf(): ?string
    {
        return $this->certificationPdf;
    }

    public function setCertificationPdf(?string $certificationPdf): self
    {
        $this->certificationPdf = $certificationPdf;

        return $this;
    }

    public function isCertified(): bool
    {
        return $this->certified;
    }

    public function setCertified(bool $certified): self
    {
        $this->certified = $certified;

        return $this;
    }

    /**
     * @return Collection<int, Projet>
     */
    public function getProjets(): Collection
    {
        return $this->projets;
    }

    public function addProjet(Projet $projet): static
    {
        if (!$this->projets->contains($projet)) {
            $this->projets->add($projet);
            $projet->addTechnologie($this);
        }

        return $this;
    }

    public function removeProjet(Projet $projet): static
    {
        if ($this->projets->removeElement($projet)) {
            $projet->removeTechnologie($this);
        }

        return $this;
    }
}
