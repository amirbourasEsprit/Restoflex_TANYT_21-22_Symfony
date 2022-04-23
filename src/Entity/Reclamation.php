<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validators as MyValidation;


/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id_uti_recl_fk", columns={"id_utilisateur"}), @ORM\Index(name="id_type_reclamation_FK", columns={"id_type_reclamation"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ReclamationRepository")
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire", type="string", length=255, nullable=false)
     * @Assert\Length(
     * min =4,
     * minMessage=" Entrer au moins 4 caracteres"
     * )  
     * @MyValidation\VerifNull
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\Length(
     * min =4,
     * minMessage=" Entrer au moins 4 caracteres"
     * )  
     * @MyValidation\VerifNull
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_reclamation", type="string", length=255, nullable=false) 
     */
    private $statutReclamation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reclamation", type="date", nullable=false)
     */
    private $dateReclamation;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id_utilisateur")
     * })
     */
    private $id;
    /**
     * @var \TypeReclamation
     *
     * @ORM\ManyToOne(targetEntity="TypeReclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_reclamation", referencedColumnName="id_type_reclamation", onDelete="CASCADE")
     * } )
     */
    private $idTypeReclamation;

    public function getNumReclamation(): ?int
    {
        return $this->numReclamation;
    }

    public function getDestinataire(): ?string
    {
        return $this->destinataire;
    }

    public function setDestinataire(string $destinataire): self
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStatutReclamation(): ?string
    {
        return $this->statutReclamation;
    }

    public function setStatutReclamation(string $statutReclamation): self
    {
        $this->statutReclamation = $statutReclamation;

        return $this;
    }

    public function getDateReclamation(): ?\DateTimeInterface
    {
        return $this->dateReclamation;
    }

    public function setDateReclamation(\DateTimeInterface $dateReclamation): self
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    public function getid(): ?Utilisateur
    {
        return $this->id;
        
    }

    public function setid(?Utilisateur $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdTypeReclamation(): ?TypeReclamation
    {
        return $this->idTypeReclamation;
    }

    public function setIdTypeReclamation(?TypeReclamation $idTypeReclamation): self
    {
        $this->idTypeReclamation = $idTypeReclamation;

        return $this;
    }
    public function getTypeReclamation(): ?TypeReclamation
    {
        return $this->TypeReclamation;
    }

    public function setTypeReclamation(?TypeReclamation $TypeReclamation): self
    {
        $this->TypeReclamation = $TypeReclamation;

        return $this;
    }



}
