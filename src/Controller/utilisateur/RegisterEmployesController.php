<?php

namespace App\Controller\utilisateur;

use App\Entity\Role;
use App\Entity\Utilisateur;
use App\Services\MaLocalisation;
use App\Form\RegisterEmployesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterEmployesController extends AbstractController
{
    private $encoder;


    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;


    }
    /**
     * @Route("/register/employes", name="app_register_employes")
     */
    public function index(): Response
    {
        return $this->render('register_employes/index.html.twig', [
            'controller_name' => 'RegisterEmployesController',
        ]);
    }
    
     /**
     * @Route("/ajouter/employee",name="ajout_employee")
     */
    public function AjouterEmployee(Request $request, MaLocalisation $maLocalisation)
    {
        $user=new Utilisateur();
        $form = $this->createForm(RegisterEmployesType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
        $role = new Role();
        $role->setIdRole(2);
        $u = $this->getDoctrine()->getRepository(Role::class)->find($role);
        $user->setIdRole($u);
        $user->setRoles(array('ROLE_EMPLOYEE'));
        $password = $form->getData()->getPassword();
        $form->getData()->setPassword($this->encoder->encodePassword($user, $password));
       // $user->setAdresse($maLocalisation->MaLocalisation());
        $em=$this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('connexion');
        }
        return $this->render('register_employes/ajout_user.html.twig', [
            'form' => $form->createView(),
        ]);

        
    }

}
