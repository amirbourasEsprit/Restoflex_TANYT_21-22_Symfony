<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="id_role_util_fk", columns={"id_role"}), @ORM\Index(name="id_rest_util_fk", columns={"id_rest"}), @ORM\Index(name="id_four_util_fk", columns={"id_fournisseur"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", length=8, nullable=false)
     */
    private $numTel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salaire", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $salaire = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="solde_conge", type="integer", nullable=true, options={"default"="30"})
     */
    private $soldeConge = 30;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poste_employe", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $posteEmploye = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="Status_compte", type="string", length=255, nullable=false, options={"default"="'non_verifier'"})
     */
    private $statusCompte = '\'non_verifier\'';

    /**
     * @var \Role
     *
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_role", referencedColumnName="id_role")
     * })
     */
    private $idRole;

    /**
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rest", referencedColumnName="id_rest")
     * })
     */
    private $idRest;

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fournisseur", referencedColumnName="id_fournisseur")
     * })
     */
    private $idFournisseur;

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

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

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

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

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(?int $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getSoldeConge(): ?int
    {
        return $this->soldeConge;
    }

    public function setSoldeConge(?int $soldeConge): self
    {
        $this->soldeConge = $soldeConge;

        return $this;
    }

    public function getPosteEmploye(): ?string
    {
        return $this->posteEmploye;
    }

    public function setPosteEmploye(?string $posteEmploye): self
    {
        $this->posteEmploye = $posteEmploye;

        return $this;
    }

    public function getStatusCompte(): ?string
    {
        return $this->statusCompte;
    }

    public function setStatusCompte(string $statusCompte): self
    {
        $this->statusCompte = $statusCompte;

        return $this;
    }

    public function getIdRole(): ?Role
    {
        return $this->idRole;
    }

    public function setIdRole(?Role $idRole): self
    {
        $this->idRole = $idRole;

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
    /**
     * @return string
     */
    public function __toString() {
    	return "IdUtilisateur: {$this->idUtilisateur}";
    }


}
