<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_categorie", type="string", length=255, nullable=false)
     */
    private $nomCategorie;

  
   

    /**
     * @ORM\OneToMany(targetEntity=ProduitRestaurant::class, mappedBy="categorie")
     */
   private $Produits;

    public function __construct()
    {
     
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nomCategorie;
    }

    public function setNomCategorie(string $nomCategorie): self
    {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }
    //  /**
    //   * @ORM\OneToMany(targetEntity=ProduitRestaurant::class, mappedBy="categorie")
    // */
    //  private $produits;

    /**
     * @return Collection<int, ProduitRestaurant>
     */
 public function getProduits(): Collection
    {
    return $this->Produits;
    }

    public function addProduit(ProduitRestaurant $produit): self
    {
        if (!$this->Produits->contains($produit)) {
           $this->Produits[] = $produit;
           $produit->setCategorie($this);
        }

       return $this;
    }

    public function removeProduit(ProduitRestaurant $produit): self
    {
        if ($this->Produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getCategorie() === $this) {
                $produit->setCategorie(null);
            }
        }

        return $this;
    }
     /**
     * @return string
     */
    public function __toString() {
    	return "idCategorie: {$this->idCategorie}";
    }


  
}
