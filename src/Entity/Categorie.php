<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

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
     * @Groups("post:read")
    */

    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_categorie", type="string", length=255, nullable=false)
     * @Groups("post:read")
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

/**
  *
  * @ORM\Table(name="categorie")
  * @ORM\Entity
  */
// class Categorie
// {
//     /**
//      * @ORM\Id
//      * @ORM\GeneratedValue
//      * @ORM\Column(type="integer")
//      */
//     private $idCategorie;

//     /**
//      * @ORM\Column(type="string", length=255)
//      */
//     private $nomCategorie;

//     /**
//      * @ORM\OneToMany(targetEntity=ProduitRestaurant::class, mappedBy="categorie")
//      */
//     private $produits;

//     public function __construct()
//     {
//         $this->produits = new ArrayCollection();
//     }

//     public function getIdCategorie(): ?int
//     {
//         return $this->getIdCategorie;
//     }

//     public function getNomCategorie(): ?string
//     {
//         return $this->getNomCategorie;
//     }

//     public function setNomCategorie(string $nom): self
//     {
//         $this->NomCategorie = $nomCategorie;

//         return $this;
//     }

//     /**
//      * @return Collection|Produits[]
//      */
//     public function getProduits(): Collection
//     {
//         return $this->Produits;
//     }

//     public function addProduits(ProduitRestauran $produits): self
//     {
//         if (!$this->produits->contains($produits)) {
//             $this->produits[] = $produits;
//             $produits->setCategorie($this);
//         }

//         return $this;
//     }

//     public function removeProduits(ProduitRestaurant $produits): self
//     {
//         if ($this->produits->removeElement($produits)) {
//             // set the owning side to null (unless already changed)
//             if ($produits->getCategorie() === $this) {
//                 $produits->setCategorie(null);
//             }
//         }

//         return $this;
//     }
//     public function __toString()
//     {
//         return(string)$this->getNomCategorie();

//     }

