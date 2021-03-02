<?php

namespace App\Entity;

use App\Repository\RobeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=RobeRepository::class)
 */
class Robe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\ManyToOne(targetEntity=Couleur::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $criniere;

    /**
     * @ORM\ManyToOne(targetEntity=Couleur::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $corps;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getCriniere(): ?Couleur
    {
        return $this->criniere;
    }

    public function setCriniere(?Couleur $criniere): self
    {
        $this->criniere = $criniere;

        return $this;
    }

    public function getCorps(): ?Couleur
    {
        return $this->corps;
    }

    public function setCorps(?Couleur $corps): self
    {
        $this->corps = $corps;

        return $this;
    }

}
