<?php

namespace App\Entity;

use App\Repository\ChevalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChevalRepository::class)
 */
class Cheval
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $affixe;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPureRace;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $poids;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $taille;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isReproducteur;

    /**
     * @ORM\ManyToOne(targetEntity=Race::class, inversedBy="chevaux")
     * @ORM\JoinColumn(nullable=false)
     */
    private $race;

    /**
     * @ORM\ManyToOne(targetEntity=Robe::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $robe;

    /**
     * @ORM\ManyToOne(targetEntity=Specialite::class, inversedBy="chevaux")
     */
    private $specialite;

    /**
     * @ORM\ManyToOne(targetEntity=Sexe::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $sexe;

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

    public function getAffixe(): ?string
    {
        return $this->affixe;
    }

    public function setAffixe(?string $affixe): self
    {
        $this->affixe = $affixe;

        return $this;
    }

    public function getIsPureRace(): ?bool
    {
        return $this->isPureRace;
    }

    public function setIsPureRace(bool $isPureRace): self
    {
        $this->isPureRace = $isPureRace;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(?int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(?int $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getIsReproducteur(): ?bool
    {
        return $this->isReproducteur;
    }

    public function setIsReproducteur(bool $isReproducteur): self
    {
        $this->isReproducteur = $isReproducteur;

        return $this;
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getRobe(): ?Robe
    {
        return $this->robe;
    }

    public function setRobe(?Robe $robe): self
    {
        $this->robe = $robe;

        return $this;
    }

    public function getSpecialite(): ?Specialite
    {
        return $this->specialite;
    }

    public function setSpecialite(?Specialite $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getSexe(): ?Sexe
    {
        return $this->sexe;
    }

    public function setSexe(?Sexe $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }
}
