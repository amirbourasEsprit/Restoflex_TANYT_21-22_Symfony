<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="id_prod_cmd_fk", columns={"id_produit"}), @ORM\Index(name="id_fournisseur", columns={"id_fournisseur"}), @ORM\Index(name="id_utilisateur_fk", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cmd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCmd;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
           * @Assert\Length(
     * min=1,
     * max=100,
     * minMessage = "Le titre doit comporter au moins {{ limit }} caractères",
     * maxMessage = "Le titre d'un Event doit comporter au moins {{ limit }} caractères",
     * )
     */

    private $statut = 'En Cours';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_cmd", type="date", nullable=false)
     */
    private $dateCmd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison", type="date", nullable=false)
     */
    private $dateLivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float", precision=10, scale=0, nullable=false)
      * @Assert\Length(
     * min=1,
     * max=100,
     * minMessage = "Le titre doit comporter au moins {{ limit }} caractères",
     * maxMessage = "Le titre d'un Event doit comporter au moins {{ limit }} caractères",
     * )
     * @Assert\NotBlank(message="la quantité doit etre non vide")
     */
    private $quantite;

    /**
     * @var \ProduitRestaurant
     *
     * @ORM\ManyToOne(targetEntity="ProduitRestaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit", referencedColumnName="id_pdtrest")
     * })
     */
    private $idProduit;

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fournisseur", referencedColumnName="id_fournisseur")
     * })
     */
    private $idFournisseur;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id_utilisateur")
     * })
     */
    private $id;

    public function getIdCmd(): ?int
    {
        return $this->idCmd;
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

    public function getDateCmd(): ?\DateTimeInterface
    {
        return $this->dateCmd;
    }

    public function setDateCmd(\DateTimeInterface $dateCmd): self
    {
        $this->dateCmd = $dateCmd;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): self
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    public function getQuantite(): ?float
    {
        return $this->quantite;
    }

    public function setQuantite(float $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getIdProduit(): ?ProduitRestaurant
    {
        return $this->idProduit;
    }

    public function setIdProduit(?ProduitRestaurant $idProduit): self
    {
        $this->idProduit = $idProduit;

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

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->id;
    }

    public function setIdUtilisateur(?Utilisateur $id): self
    {
        $this->id = $id;

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

}
