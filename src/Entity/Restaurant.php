<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Validators as MyValidation;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Restaurant
 *
 * @ORM\Table(name="restaurant", uniqueConstraints={@ORM\UniqueConstraint(name="nom", columns={"nom"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\RestaurantRepository")
 */
class Restaurant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRest;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @MyValidation\VerifNull
     */

    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255, nullable=false)
     *  @MyValidation\VerifNull
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     *  @MyValidation\VerifNull
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     *  @MyValidation\VerifEmail
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", length=255, nullable=false)
     *  @MyValidation\VerifTel
     */
    private $numTel;

    /**
    * @ORM\OneToMany(targetEntity="App\Entity\Facture", mappedBy="restaurant")
    */
    private $factures;

    public function __construct()
    {
        $this->factures = new ArrayCollection();
    }

    public function getIdRest(): ?int
    {
        return $this->idRest;
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

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(string $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    /** 
    *@return Collection|Facture[]
    */
    public function getFactures(): Collection
    {
            return $this->factures;
    }

    public function addFacture(Facture $facture): self
    {
        if (!$this->factures->contains($facture)) {
            $this->factures[] = $facture;
            $facture->setRestaurant($this);
        }
        return $this;
    }

    public function removeFacture(Facture $facture): self
    {
        if ($this->factures->contains($facture)) {
            $this->factures->removeElement($facture);
            
            // set the owning side to null (unless already changed)
            if ($facture->getRestaurant() === $this) {
                $facture->setRestaurant(null);
            }
        }
        return $this;
    }


}
