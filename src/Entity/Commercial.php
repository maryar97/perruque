<?php

namespace App\Entity;

use App\Repository\CommercialRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommercialRepository::class)]
class Commercial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomcomm = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomcomm = null;

    #[ORM\Column(length: 100)]
    private ?string $mailcomm = null;

    #[ORM\Column(length: 50)]
    private ?string $tauxcomm = null;

    #[ORM\Column(length: 20)]
    private ?string $telcomm = null;

    #[ORM\OneToMany(mappedBy: 'commercial', targetEntity: Users::class)]
    private Collection $Users;

    #[ORM\OneToMany(mappedBy: 'tauxcomm', targetEntity: Users::class)]
    private Collection $users;

    public function __construct()
    {
        $this->Users = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomcomm(): ?string
    {
        return $this->nomcomm;
    }

    public function setNomcomm(string $nomcomm): self
    {
        $this->nomcomm = $nomcomm;

        return $this;
    }

    public function getPrenomcomm(): ?string
    {
        return $this->prenomcomm;
    }

    public function setPrenomcomm(string $prenomcomm): self
    {
        $this->prenomcomm = $prenomcomm;

        return $this;
    }

    public function getMailcomm(): ?string
    {
        return $this->mailcomm;
    }

    public function setMailcomm(string $mailcomm): self
    {
        $this->mailcomm = $mailcomm;

        return $this;
    }

    public function getTauxcomm(): ?float
    {
        return $this->tauxcomm;
    }

    public function setTauxcomm(float $tauxcomm): self
    {
        $this->tauxcomm = $tauxcomm;

        return $this;
    }

    public function getTelcomm(): ?string
    {
        return $this->telcomm;
    }

    public function setTelcomm(string $telcomm): self
    {
        $this->telcomm = $telcomm;

        return $this;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getUsers(): Collection
    {
        return $this->Users;
    }

    public function addUser(Users $user): self
    {
        if (!$this->Users->contains($user)) {
            $this->Users->add($user);
            $user->setCommercial($this);
        }

        return $this;
    }

    public function removeUser(Users $user): self
    {
        if ($this->Users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getCommercial() === $this) {
                $user->setCommercial(null);
            }
        }

        return $this;
    }
}
