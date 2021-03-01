<?php

namespace App\Entity;

use App\Repository\AffixeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AffixeRepository::class)
 */
class Affixe
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
     * @ORM\OneToMany(targetEntity=Cheval::class, mappedBy="affixe")
     */
    private $chevaux;

    public function __construct()
    {
        $this->chevaux = new ArrayCollection();
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
            $chevaux->setAffixe($this);
        }

        return $this;
    }

    public function removeChevaux(Cheval $chevaux): self
    {
        if ($this->chevaux->removeElement($chevaux)) {
            // set the owning side to null (unless already changed)
            if ($chevaux->getAffixe() === $this) {
                $chevaux->setAffixe(null);
            }
        }

        return $this;
    }
}
