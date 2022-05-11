<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validators as MyValidation;


/**
 * Fournisseur
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
     * @Groups("post:read")
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
     *  @Groups("post:read")
     */
    private $nomFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule_fiscale", type="string", length=255, nullable=false)
     *  @MyValidation\VerifNull
     *  @Groups("post:read")
     */
    private $matriculeFiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine_fournisseur", type="string", length=255, nullable=false)
     *  @MyValidation\VerifNull
     *  @Groups("post:read")
     */
    private $domaineFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel_fournisseur", type="string", length=255, nullable=false)
     *  @MyValidation\VerifTel
     *  @Groups("post:read")
     */

    private $numTelFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_fournisseur", type="string", length=255, nullable=false)
     *   @MyValidation\VerifEmail
     * @Groups("post:read")
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
     *@Groups("post:read")
     * @ORM\Column(name="logo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    //private $logo = 'NULL';
    private $logo;



    /**

     * @var File
     */
    private $imageFile;
    //contenu binaire de l'image file and it's not perssisted into the database
    //The imageFile property must define a @Vich\UploadableField annotation that configures both the "mapping" to use
    // (product_images in this case) and the entity property that stores the image name (logo in this case).




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



}
