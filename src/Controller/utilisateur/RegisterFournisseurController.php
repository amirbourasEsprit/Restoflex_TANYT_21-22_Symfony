<?php

namespace App\Controller\utilisateur;

use App\Entity\Role;
use App\Entity\Utilisateur;
use App\Services\MaLocalisation;
use App\Form\RegisterFournisseurType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterFournisseurController extends AbstractController
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
     * @Route("/ajouter/Ufournisseur",name="ajout_utilisateur_fournisseur")
     */
    public function AjouterEmployee(Request $request, MaLocalisation $maLocalisation)
    {
        $user=new Utilisateur();
        $form = $this->createForm(RegisterFournisseurType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
        $role = new Role();
        $role->setIdRole(3);
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
        return $this->render('register_fournisseur/ajout_user.html.twig', [
            'form' => $form->createView(),
        ]);

        
    }
}
