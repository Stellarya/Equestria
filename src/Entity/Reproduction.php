<?php

namespace App\Entity;

use App\Repository\ReproductionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReproductionRepository::class)
 */
class Reproduction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Cheval::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $mere;

    /**
     * @ORM\ManyToOne(targetEntity=Cheval::class)
     */
    private $pere;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateSaillie;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateMiseBas;

    /**
     * @ORM\ManyToOne(targetEntity=Saillie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $saillie;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $chevalNe;

    /**
     * @ORM\OneToMany(targetEntity=Cheval::class, mappedBy="reproduction")
     */
    private $poulain;

    public function __construct()
    {
        $this->poulain = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMere(): ?Cheval
    {
        return $this->mere;
    }

    public function setMere(?Cheval $mere): self
    {
        $this->mere = $mere;

        return $this;
    }

    public function getPere(): ?Cheval
    {
        return $this->pere;
    }

    public function setPere(?Cheval $pere): self
    {
        $this->pere = $pere;

        return $this;
    }

    public function getDateSaillie(): ?\DateTimeInterface
    {
        return $this->dateSaillie;
    }

    public function setDateSaillie(\DateTimeInterface $dateSaillie): self
    {
        $this->dateSaillie = $dateSaillie;

        return $this;
    }

    public function getDateMiseBas(): ?\DateTimeInterface
    {
        return $this->dateMiseBas;
    }

    public function setDateMiseBas(?\DateTimeInterface $dateMiseBas): self
    {
        $this->dateMiseBas = $dateMiseBas;

        return $this;
    }

    public function getSaillie(): ?Saillie
    {
        return $this->saillie;
    }

    public function setSaillie(?Saillie $saillie): self
    {
        $this->saillie = $saillie;

        return $this;
    }

    public function getChevalNe(): ?bool
    {
        return $this->chevalNe;
    }

    public function setChevalNe(?bool $chevalNe): self
    {
        $this->chevalNe = $chevalNe;

        return $this;
    }

    /**
     * @return Collection|Cheval[]
     */
    public function getPoulain(): Collection
    {
        return $this->poulain;
    }

    public function addPoulain(Cheval $poulain): self
    {
        if (!$this->poulain->contains($poulain)) {
            $this->poulain[] = $poulain;
            $poulain->setReproduction($this);
        }

        return $this;
    }

    public function removePoulain(Cheval $poulain): self
    {
        if ($this->poulain->removeElement($poulain)) {
            // set the owning side to null (unless already changed)
            if ($poulain->getReproduction() === $this) {
                $poulain->setReproduction(null);
            }
        }

        return $this;
    }
}
