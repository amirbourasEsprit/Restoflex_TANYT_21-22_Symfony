<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component \Validator\Constraints as Assert;


/**
 * TypeConge
 *
 * @ORM\Table(name="type_conge")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\TypeCongeRepository")
 */
class TypeConge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_type_conge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToMany(targetEntity="Conge")
     */
    private $idTypeConge;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_type_conge", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Le Champ Nom est obligatoire")
     */
    private $nomTypeConge;

    public function getIdTypeConge(): ?int
    {
        return $this->idTypeConge;
    }

    public function getNomTypeConge(): ?string
    {
        return $this->nomTypeConge;
    }

    public function setNomTypeConge(string $nomTypeConge): self
    {
        $this->nomTypeConge = $nomTypeConge;

        return $this;
    }
    public function __toString() :string
    {
        return $this->nomTypeConge;
    }

}
