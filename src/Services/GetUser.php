<?php


namespace App\Services;


use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Security;


class GetUser extends AbstractController
{
    private $security;
    public function __construct(Security $security)
    {

        $this->security = $security;
    }

public function Get_User() :Utilisateur
{   $user=new Utilisateur();
    if($this->security->getUser())
{

    $id = $this->security->getUser()->getid();

    $entityManager = $this->getDoctrine()->getManager();
    $user = $entityManager->getRepository(Utilisateur::class)->find($id);

}
    return $user;
}


}