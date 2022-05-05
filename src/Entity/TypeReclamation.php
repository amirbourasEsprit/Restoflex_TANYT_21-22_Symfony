<?php

namespace App\Entity;

use App\Entity\TypeReclamation;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validators as MyValidation;


/**
 * TypeReclamation
 *
 * @ORM\Table(name="type_reclamation")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\TypeReclamationRepository")
 */
class TypeReclamation
{
    /**
     * @var int
     * @ORM\OneToMany(targetEntity="Reclamation")
     * @ORM\Column(name="id_type_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue
     *  
     */
    private $idTypeReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_type_reclamation", type="string", length=255, nullable=false)
     * @Assert\Length(
     * min =4,
     * minMessage=" Entrer au moins 4 caracteres"
     * )  
     * @MyValidation\VerifNull
     
     */
    private $nomTypeReclamation;

    public function getIdTypeReclamation(): ?int
    {
        return $this->idTypeReclamation;
    }
    public function setIdTypeReclamation(int $idTypeReclamation): self
    {
        $this->id_type_reclamation = $idTypeReclamation;

        return $this;
    }

    public function getNomTypeReclamation(): ?string
    {
        return $this->nomTypeReclamation;
    }

    public function setNomTypeReclamation(string $nomTypeReclamation): self
    {
        $this->nomTypeReclamation = $nomTypeReclamation;

        return $this;
    }

    public function __toString() :string
    {
        return $this->nomTypeReclamation;
    }

}
