<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="id_rest_fk", columns={"id_rest"}), @ORM\Index(name="id_fournisseur_fk", columns={"id_fournisseur"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\FactureRepository")
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_facture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("facture")
     */
    private $numFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facture", type="date", nullable=false)
     * @Groups("facture")
     */
    private $dateFacture;

    public function __construct()
{
    $this->dateFacture = new \DateTime('@'.strtotime('now'));
}

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     * @Groups("facture")
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
     * @Groups("facture")
     */
    private $statut;

    /**
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant", inversedBy="factures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rest", referencedColumnName="id_rest")
     * })
     * @Groups("facture")
     */
    private $idRest;

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur", inversedBy="factures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fournisseur", referencedColumnName="id_fournisseur")
     * })
     * @Groups("facture")
     */
    private $idFournisseur;

    public function getNumFacture(): ?int
    {
        return $this->numFacture;
    }

    public function getDateFacture(): ?\DateTimeInterface
    {
        return $this->dateFacture;
    }

    public function setDateFacture(\DateTimeInterface $dateFacture): self
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getIdRest(): ?Restaurant
    {
        return $this->idRest;
    }

    public function setIdRest(?Restaurant $idRest): self
    {
        $this->idRest = $idRest;

        return $this;
    }

    public function getIdFournisseur(): ?Fournisseur
    {
        return $this->idFournisseur;
    }

    public function setIdFournisseur(?Fournisseur $idFournisseur): self
    {
        $this->idFournisseur = $idFournisseur;

        return $this;
    }




}
