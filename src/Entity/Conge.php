<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conge
 *
 * @ORM\Table(name="conge", indexes={@ORM\Index(name="id_conge_fk", columns={"id_type_conge"}), @ORM\Index(name="id_utilisateur_cong_fk", columns={"id_utilisateur"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CongeRepository")
 */
class Conge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_conge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConge;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb", type="date", nullable=false)
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="solde_restant", type="integer", nullable=false, options={"default"="30"})
     */
    private $soldeRestant = 30;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false, options={"default"="'en cours'"})
     */
    private $etat = '\'en cours\'';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id_utilisateur")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \TypeConge
     *
     * @ORM\ManyToOne(targetEntity="TypeConge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_conge", referencedColumnName="id_type_conge")
     * })
     */
    private $idTypeConge;

    public function getIdConge(): ?int
    {
        return $this->idConge;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setDateDeb(\DateTimeInterface $dateDeb): self
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getSoldeRestant(): ?int
    {
        return $this->soldeRestant;
    }

    public function setSoldeRestant(int $soldeRestant): self
    {
        $this->soldeRestant = $soldeRestant;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getIdTypeConge(): ?TypeConge
    {
        return $this->idTypeConge;
    }

    public function setIdTypeConge(?TypeConge $idTypeConge): self
    {
        $this->idTypeConge = $idTypeConge;

        return $this;
    }


}
