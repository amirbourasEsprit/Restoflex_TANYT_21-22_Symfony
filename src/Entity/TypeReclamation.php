<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     *
     * @ORM\Column(name="id_type_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_type_reclamation", type="string", length=255, nullable=false)
     */
    private $nomTypeReclamation;

    public function getIdTypeReclamation(): ?int
    {
        return $this->idTypeReclamation;
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


}
