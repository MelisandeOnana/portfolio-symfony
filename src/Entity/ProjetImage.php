<?php

namespace App\Entity;

use App\Repository\ProjetImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjetImageRepository::class)]
#[ORM\Table(name: 'projet_images')]
class ProjetImage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_image')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $imagePath = null;

    #[ORM\ManyToOne(targetEntity: Projet::class, inversedBy: 'projetImages')]
    #[ORM\JoinColumn(name: 'id_projet', referencedColumnName: 'id_projet', nullable: false)]
    private ?Projet $projet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): static
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    public function getProjet(): ?Projet
    {
        return $this->projet;
    }

    public function setProjet(?Projet $projet): static
    {
        $this->projet = $projet;

        return $this;
    }
}
