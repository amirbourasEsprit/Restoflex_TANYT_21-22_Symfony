<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Validators as MyValidation;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\RoleRepository")
 */
class Role
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;
  
    /**
     * @var string
     *
     * @ORM\Column(name="nom_role", type="string", length=255, nullable=false)
     * @MyValidation\VerifNull
     */
    private $nomRole;
  
    public function setIdRole(int $idRole): self
    {
        $this->idRole = $idRole;

        return $this;
    }

    public function getIdRole(): ?int
    {
        return $this->idRole;
    }

    public function getNomRole(): ?string
    {
        return $this->nomRole;
    }

    public function setNomRole(string $nomRole): self
    {
        $this->nomRole = $nomRole;

        return $this;
    }
   

      
    public function __toString(): string
    {
        return $this->idRole;
    }


}
