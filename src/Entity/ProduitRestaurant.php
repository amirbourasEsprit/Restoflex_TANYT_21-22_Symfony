<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitRestaurant
 *
 * @ORM\Table(name="produit_restaurant", indexes={@ORM\Index(name="id_res_produit_fk", columns={"id_rest"})})
 * @ORM\Entity
 */
class ProduitRestaurant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pdtrest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPdtrest;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pdt", type="string", length=255, nullable=false)
     */
    private $nomPdt;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite_pdt", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantitePdt;

    /**
     * @var string
     *
     * @ORM\Column(name="categ", type="string", length=255, nullable=false)
     */
    private $categ;

    /**
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rest", referencedColumnName="id_rest")
     * })
     */
    private $idRest;

    public function getIdPdtrest(): ?int
    {
        return $this->idPdtrest;
    }

    public function getNomPdt(): ?string
    {
        return $this->nomPdt;
    }

    public function setNomPdt(string $nomPdt): self
    {
        $this->nomPdt = $nomPdt;

        return $this;
    }

    public function getQuantitePdt(): ?float
    {
        return $this->quantitePdt;
    }

    public function setQuantitePdt(float $quantitePdt): self
    {
        $this->quantitePdt = $quantitePdt;

        return $this;
    }

    public function getCateg(): ?string
    {
        return $this->categ;
    }

    public function setCateg(string $categ): self
    {
        $this->categ = $categ;

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


}
