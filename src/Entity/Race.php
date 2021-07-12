<?php

namespace App\Entity;

use App\Repository\RaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=RaceRepository::class)
 */
class Race
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
     * @ORM\OneToMany(targetEntity=Cheval::class, mappedBy="race", orphanRemoval=true)
     */
    private $chevaux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $origine;

    /**
     * @ORM\ManyToOne(targetEntity=TypeRace::class)
     */
    private $typeRace;

    /**
     * @ORM\OneToMany(targetEntity=Affixe::class, mappedBy="race")
     */
    private $affixes;

    public function __construct()
    {
        $this->chevaux = new ArrayCollection();
        $this->affixes = new ArrayCollection();
    }

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

    /**
     * @return Collection|Cheval[]
     */
    public function getChevaux(): Collection
    {
        return $this->chevaux;
    }

    public function addChevaux(Cheval $chevaux): self
    {
        if (!$this->chevaux->contains($chevaux)) {
            $this->chevaux[] = $chevaux;
            $chevaux->setRace($this);
        }

        return $this;
    }

    public function removeChevaux(Cheval $chevaux): self
    {
        if ($this->chevaux->removeElement($chevaux)) {
            // set the owning side to null (unless already changed)
            if ($chevaux->getRace() === $this) {
                $chevaux->setRace(null);
            }
        }

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(?string $origine): self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getTypeRace(): ?TypeRace
    {
        return $this->typeRace;
    }

    public function setTypeRace(?TypeRace $typeRace): self
    {
        $this->typeRace = $typeRace;

        return $this;
    }

    /**
     * @return Collection|Affixe[]
     */
    public function getAffixes(): Collection
    {
        return $this->affixes;
    }

    public function addAffix(Affixe $affix): self
    {
        if (!$this->affixes->contains($affix)) {
            $this->affixes[] = $affix;
            $affix->setRace($this);
        }

        return $this;
    }

    public function removeAffix(Affixe $affix): self
    {
        if ($this->affixes->removeElement($affix)) {
            // set the owning side to null (unless already changed)
            if ($affix->getRace() === $this) {
                $affix->setRace(null);
            }
        }

        return $this;
    }
}
