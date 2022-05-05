<?php

namespace App\Controller\role;

use App\Entity\Role;
use App\Form\RoleType;
use App\Repository\RoleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AjoutRoleController extends AbstractController
{
    /**
     * @Route("/role", name="role")
     */
    public function listerRole(RoleRepository $repo ,Request $request)
    {   $role=new Role();
        $form = $this->createForm(RoleType::class, $role);
        $form->handleRequest($request);
        $role=$repo->findAll();
       return $this->render('role/index.html.twig',[
           "roles"=>$role,
           'form' => $form->createView(),
           
           
       ]);

    }
    /**
     * @Route("/ajout/role",name="ajout_role")
     */
    public function ajout_role(Request $request)
    {
        $role=new Role();
        $form = $this->createForm(RoleType::class, $role);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
        $em=$this->getDoctrine()->getManager();
        $em->persist($role);
        $em->flush();
        return $this->redirectToRoute('role');
        }
        return $this->render('role/ajout_role.html.twig', [
            'form' => $form->createView(),
        ]);

        
    }
    /**
    * @Route("/supprimer/{idRole}", name="supprimer_role")
    */
    public function supprimer(RoleRepository $repository, $idRole)
    {   
        $User = $repository->find($idRole);
        $em=$this->getDoctrine()->getManager();
        $em->remove($User);
        $em->flush();
        return $this->redirectToRoute('role');

    }
  
  
}
