<?php

namespace App\Entity;

use App\Repository\ChevalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="boolean", nullable=true)
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
     * @ORM\Column(type="boolean", nullable=true)
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

    /**
     * @ORM\ManyToOne(targetEntity=Affixe::class, inversedBy="chevaux")
     */
    private $affixe;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateDeces;

    /**
     * @ORM\ManyToOne(targetEntity=Cheval::class, inversedBy="estMereDe")
     */
    private $mere;

    /**
     * @ORM\OneToMany(targetEntity=Cheval::class, mappedBy="mere")
     */
    private $estMereDe;

    /**
     * @ORM\ManyToOne(targetEntity=Cheval::class, inversedBy="estPereDe")
     */
    private $pere;

    /**
     * @ORM\OneToMany(targetEntity=Cheval::class, mappedBy="pere")
     */
    private $estPereDe;

    /**
     * @ORM\ManyToOne(targetEntity=Reproduction::class, inversedBy="poulain")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reproduction;

    public function __construct()
    {
        $this->estMereDe = new ArrayCollection();
        $this->estPereDe = new ArrayCollection();
    }

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

    public function getAffixe(): ?Affixe
    {
        return $this->affixe;
    }

    public function setAffixe(?Affixe $affixe): self
    {
        $this->affixe = $affixe;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getDateDeces(): ?\DateTimeInterface
    {
        return $this->dateDeces;
    }

    public function setDateDeces(?\DateTimeInterface $dateDeces): self
    {
        $this->dateDeces = $dateDeces;

        return $this;
    }

    public function getMere(): ?self
    {
        return $this->mere;
    }

    public function setMere(?self $mere): self
    {
        $this->mere = $mere;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getEstMereDe(): Collection
    {
        return $this->estMereDe;
    }

    public function addEstMereDe(self $estMereDe): self
    {
        if (!$this->estMereDe->contains($estMereDe)) {
            $this->estMereDe[] = $estMereDe;
            $estMereDe->setMere($this);
        }

        return $this;
    }

    public function removeEstMereDe(self $estMereDe): self
    {
        if ($this->estMereDe->removeElement($estMereDe)) {
            // set the owning side to null (unless already changed)
            if ($estMereDe->getMere() === $this) {
                $estMereDe->setMere(null);
            }
        }

        return $this;
    }

    public function getPere(): ?self
    {
        return $this->pere;
    }

    public function setPere(?self $pere): self
    {
        $this->pere = $pere;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getEstPereDe(): Collection
    {
        return $this->estPereDe;
    }

    public function addEstPereDe(self $estPereDe): self
    {
        if (!$this->estPereDe->contains($estPereDe)) {
            $this->estPereDe[] = $estPereDe;
            $estPereDe->setPere($this);
        }

        return $this;
    }

    public function removeEstPereDe(self $estPereDe): self
    {
        if ($this->estPereDe->removeElement($estPereDe)) {
            // set the owning side to null (unless already changed)
            if ($estPereDe->getPere() === $this) {
                $estPereDe->setPere(null);
            }
        }

        return $this;
    }

    public function getReproduction(): ?Reproduction
    {
        return $this->reproduction;
    }

    public function setReproduction(?Reproduction $reproduction): self
    {
        $this->reproduction = $reproduction;

        return $this;
    }
}
