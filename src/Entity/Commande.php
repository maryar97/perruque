<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datecom = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $totalcom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descpcom = null;

    #[ORM\Column]
    private ?int $idpaiement = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datepaiement = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descppaiement = null;

    #[ORM\Column(length: 100)]
    private ?string $modepaiement = null;

    #[ORM\Column]
    private ?int $idfacture = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $facturedate = null;

    #[ORM\Column]
    private ?float $facturetotalttc = null;

    #[ORM\Column]
    private ?float $facturetotaltva = null;

    #[ORM\Column]
    private ?float $facturetotalht = null;


    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $Users = null;

    #[ORM\ManyToOne(inversedBy: 'Commande')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Livraison $livraison = null;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatecom(): ?\DateTimeInterface
    {
        return $this->datecom;
    }

    public function setDatecom(\DateTimeInterface $datecom): self
    {
        $this->datecom = $datecom;

        return $this;
    }

    public function getTotalcom(): ?string
    {
        return $this->totalcom;
    }

    public function setTotalcom(string $totalcom): self
    {
        $this->totalcom = $totalcom;

        return $this;
    }

    public function getDescpcom(): ?string
    {
        return $this->descpcom;
    }

    public function setDescpcom(string $descpcom): self
    {
        $this->descpcom = $descpcom;

        return $this;
    }

    public function getIdpaiement(): ?int
    {
        return $this->idpaiement;
    }

    public function setIdpaiement(int $idpaiement): self
    {
        $this->idpaiement = $idpaiement;

        return $this;
    }

    public function getDatepaiement(): ?\DateTimeInterface
    {
        return $this->datepaiement;
    }

    public function setDatepaiement(\DateTimeInterface $datepaiement): self
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    public function getDescppaiement(): ?string
    {
        return $this->descppaiement;
    }

    public function setDescppaiement(string $descppaiement): self
    {
        $this->descppaiement = $descppaiement;

        return $this;
    }

    public function getModepaiement(): ?string
    {
        return $this->modepaiement;
    }

    public function setModepaiement(string $modepaiement): self
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }

    public function getIdfacture(): ?int
    {
        return $this->idfacture;
    }

    public function setIdfacture(int $idfacture): self
    {
        $this->idfacture = $idfacture;

        return $this;
    }

    public function getFacturedate(): ?\DateTimeInterface
    {
        return $this->facturedate;
    }

    public function setFacturedate(\DateTimeInterface $facturedate): self
    {
        $this->facturedate = $facturedate;

        return $this;
    }

    public function getFacturetotalttc(): ?float
    {
        return $this->facturetotalttc;
    }

    public function setFacturetotalttc(float $facturetotalttc): self
    {
        $this->facturetotalttc = $facturetotalttc;

        return $this;
    }

    public function getFacturetotaltva(): ?float
    {
        return $this->facturetotaltva;
    }

    public function setFacturetotaltva(float $facturetotaltva): self
    {
        $this->facturetotaltva = $facturetotaltva;

        return $this;
    }

    public function getFacturetotalht(): ?float
    {
        return $this->facturetotalht;
    }

    public function setFacturetotalht(float $facturetotalht): self
    {
        $this->facturetotalht = $facturetotalht;

        return $this;
    }


    public function getUsers(): ?Users
    {
        return $this->Users;
    }

    public function setUsers(?Users $Users): self
    {
        $this->Users = $Users;

        return $this;
    }

    public function getLivraison(): ?Livraison
    {
        return $this->livraison;
    }

    public function setLivraison(?Livraison $livraison): self
    {
        $this->livraison = $livraison;

        return $this;
    }
}
