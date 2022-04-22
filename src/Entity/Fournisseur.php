<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validators as MyValidation;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Fournisseur
 * @Vich\Uploadable
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\FournisseurRepository")
 
 */
class Fournisseur
{
    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Stock" )
     
     * @ORM\Column(name="id_fournisseur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_fournisseur", type="string", length=255, nullable=false)
     * @Assert\Length( 
     * min =4,
     * minMessage=" Entrer au moins 4 caracteres"
     * )
     */
    private $nomFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule_fiscale", type="string", length=255, nullable=false)
     *  @MyValidation\VerifNull
     */
    private $matriculeFiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine_fournisseur", type="string", length=255, nullable=false)
     *  @MyValidation\VerifNull
     */
    private $domaineFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel_fournisseur", type="string", length=255, nullable=false)
     *  @MyValidation\VerifTel
     */
    private $numTelFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_fournisseur", type="string", length=255, nullable=false)
     *   @MyValidation\VerifEmail
     */
    private $emailFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_fournisseur", type="string", length=255, nullable=false)
     *  @MyValidation\VerifNull
     */
    private $adresseFournisseur;

    /**
     * @var string|null
     *
     * 
     * @ORM\Column(name="logo", type="string", length=255, nullable=true, options={"default"="NULL"})
     *  @MyValidation\VerifNull
     */
    //private $logo = 'NULL';
    private $logo;
    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;


    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $updatedAt;

    public function getIdFournisseur(): ?int
    {
        return $this->idFournisseur;
    }

    public function getNomFournisseur(): ?string
    {
        return $this->nomFournisseur;
    }

    public function setNomFournisseur(string $nomFournisseur): self
    {
        $this->nomFournisseur = $nomFournisseur;

        return $this;
    }

    public function getMatriculeFiscale(): ?string
    {
        return $this->matriculeFiscale;
    }

    public function setMatriculeFiscale(string $matriculeFiscale): self
    {
        $this->matriculeFiscale = $matriculeFiscale;

        return $this;
    }

    public function getDomaineFournisseur(): ?string
    {
        return $this->domaineFournisseur;
    }

    public function setDomaineFournisseur(string $domaineFournisseur): self
    {
        $this->domaineFournisseur = $domaineFournisseur;

        return $this;
    }

    public function getNumTelFournisseur(): ?string
    {
        return $this->numTelFournisseur;
    }

    public function setNumTelFournisseur(string $numTelFournisseur): self
    {
        $this->numTelFournisseur = $numTelFournisseur;

        return $this;
    }

    public function getEmailFournisseur(): ?string
    {
        return $this->emailFournisseur;
    }

    public function setEmailFournisseur(string $emailFournisseur): self
    {
        $this->emailFournisseur = $emailFournisseur;

        return $this;
    }

    public function getAdresseFournisseur(): ?string
    {
        return $this->adresseFournisseur;
    }

    public function setAdresseFournisseur(string $adresseFournisseur): self
    {
        $this->adresseFournisseur = $adresseFournisseur;

        return $this;
    }

    public function getLogo() /*: ?string*/
    {
        return $this->logo;
    }

    public function setLogo( /*?string*/$logo) /*: self*/
    {
        $this->logo = $logo;

        return $this;
    }
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt):\DateTimeInterface
    {
        $this->updatedAt = $updatedAt;
        return  $updatedAt;
    }

}
