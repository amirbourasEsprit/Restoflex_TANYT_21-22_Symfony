<?php

namespace App\Controller\API;

use DateTime;
use App\Entity\Role;
use App\Entity\Restaurant;
use App\Entity\Fournisseur;
use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UtilisateurApiController extends AbstractController
{
  /**
   * @Route("employee/signup", name="app_emp_register")
   */
  public function signupEmpAction(Request $request, UserPasswordEncoderInterface $passwordEncoder){

    $nom= $request->query->get("nom");
    $prenom= $request->query->get("prenom");
    $cin= $request->query->get("cin");
    $password= $request->query->get("password");
    $email= $request->query->get("email");
    $numTel= $request->query->get("numTel");
    $dateNaissance= $request->query->get("dateNaissance");
    $adresse= $request->query->get("adresse");
    $posteEmploye= $request->query->get("posteEmploye");
    $idRest= $request->query->get("idRest");
   
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return new Response ("email invalid");

    }
    $user = new Utilisateur();
    $user->setNom($nom);
    $user->setPrenom($prenom);
    $user->setCin($cin);
    $user->setPassword(
        $passwordEncoder->encodePassword($user, $password)
    );
    $user->setEmail($email);
    $user->setNumTel($numTel);
    $user->setAdresse($adresse);
    $user->setDateNaissance(new \DateTime($dateNaissance));
    $user->setSalaire(0);
    $user->setSoldeConge(30);
    $user->setStatusCompte('non_verifier');
    $user->setRoles(array('ROLE_EMPLOYEE'));
    $user->setPosteEmploye($posteEmploye);
    $rest=$this->getDoctrine()->getRepository(Restaurant::class)->find($idRest);
    $user->setIdRest($rest);
    $role = new Role();
    $role->setIdRole(2);
    $u = $this->getDoctrine()->getRepository(Role::class)->find($role);
    $user->setIdRole($u);
    try{
        $em=$this->getDoctrine()->getManager();
        
        $em->persist($user);
        $em->flush();
        return new JsonResponse("Account is created",200);
    }
    catch(\Exception $ex){
        return new Response ("exception".$ex->getMessage());
    }


  }
   /**
   * @Route("fournisseur/signup", name="app_four_register")
   */
  public function signupFourAction(Request $request , UserPasswordEncoderInterface $passwordEncoder){

    $nom= $request->query->get("nom");
    $prenom= $request->query->get("prenom");
    $cin= $request->query->get("cin");
    $password= $request->query->get("password");
    $email= $request->query->get("email");
    $numTel= $request->query->get("numTel");
    $dateNaissance= $request->query->get("dateNaissance");
    $adresse= $request->query->get("adresse");
    $idFournisseur= $request->query->get("idFournisseur");
    $idRest= $request->query->get("idRest");
    
    
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return new Response ("email invalid");

    }
    $user = new Utilisateur();
    $user->setNom($nom);
    $user->setPrenom($prenom);
    $user->setCin($cin);
    $user->setPassword(
        $passwordEncoder->encodePassword($user, $password)
    );
    $user->setEmail($email);
    $user->setNumTel($numTel);
    $user->setAdresse($adresse);
    $user->setDateNaissance(new \DateTime($dateNaissance));
    $user->setSalaire(0);
    $user->setSoldeConge(30);
    $user->setStatusCompte('non_verifier');
    $user->setRoles(array('ROLE_EMPLOYEE'));
    $rest=$this->getDoctrine()->getRepository(Restaurant::class)->find($idRest);
    $user->setIdRest($rest);
    $four=$this->getDoctrine()->getRepository(Fournisseur::class)->find($idFournisseur);
    $user->setIdFournisseur($four);
    $role = new Role();
    $role->setIdRole(3);
    $u = $this->getDoctrine()->getRepository(Role::class)->find($role);
    $user->setIdRole($u);
    try{
        $em=$this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return new JsonResponse("Account is created",200);
    }
    catch(\Exception $ex){
        return new Response ("exception".$ex->getMessage());
    }


  }
  /**
  * @Route("user/login", name="app__user_login")
  */
  public function singinAction(Request $request,UserPasswordEncoderInterface $encoder ,UtilisateurRepository $repository){
    $email= $request->query->get("email");
    $password= $request->query->get("password");
    $user=new Utilisateur();
    $encoded = $encoder->encodePassword($user, $password);
    //return new Response($encoded);
    $curruser = $repository->findOneBy(['email'=>$email]);
   //return new JsonResponse($curruser->getNom());
    if($curruser){
        
        if($encoded==$curruser->getPassword()){
            $serializer =new Serializer([new ObjectNormalizer()]);
            $formatted =$serializer->normalize($curruser);
            return new JsonResponse($formatted);
        }
        else{
            return new Response("password not found");
        }
    }
    else{
        return new Response("user not found");
    }
  }
  /**
   * @Route ("user/edit", name="app_edit_profile")
   */
  public function editAction(Request $request, UserPasswordEncoderInterface $passwordEncoder){

    $id= $request->get("id");
    //les champs de modification
    $nom=$request->get("nom");
    $prenom=$request->get("prenom");
    $password=$request->get("password");
    $numTel=$request->get("numTel");
    $adresse=$request->get("adresse");
    $em=$this->getDoctrine()->getManager();
    $user=$em->getRepository(Utilisateur::class)->find($id);
    if($user){
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setNumTel($numTel);
        $user->setAdresse($adresse);
        if($user->getPassword() != $password)
        {$user->setPassword(
            $passwordEncoder->encodePassword($user, $password)
        );
        }else{
            $user->setPassword($password);
        }
         try{
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new JsonResponse("Account updated",200);
        }
        catch(\Exception $ex){
            return new Response ("error to update".$ex->getMessage());
        }
    
    }
    else{
        return new Response("user not found");
    }
  }
   /**
     * @Route("user/getPasswordbyMail", name="api_forgetPasswordCheck")
     * @param MailerService $mailerService
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserRepository $UtilisateurRepository
     * @return Response
     * @throws ExceptionInterface
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    public function forgetPasswordCheck(Request $request,NormalizerInterface $normalizable,UtilisateurRepository $Repository): Response
    {   $result=false;
        $user=new Utilisateur();
        $user = $this->getDoctrine()->getRepository(Utilisateur::class)->findBy(
            ['email' =>$request->get('email')]);

        if($user)
        {
        if($user[0]->getEmail()==$request->get("email"))
        {
            $result=true;

        }}

        $jsonContent=$normalizable->normalize($result,'json',[]);
        return new Response(json_encode($jsonContent));
    }
      /**
     * @Route("/modifyPasswordUser", name="UserModifyPassword")
     * @param Request $request
     * @param NormalizerInterface $normalizable
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     * @throws ExceptionInterface
     */
    public function modifyEntPassword(Request $request,NormalizerInterface $normalizable,UserPasswordEncoderInterface $encoder): Response
    {   $User=new Utilisateur();
        $em=$this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository(Utilisateur::class)->findBy(
            ['email' =>$request->get('email')]);

        $password=$encoder->encodePassword($User,$request->get('password'));

        $user[0]->setPassword($password);
        $em->flush();
        $jsonContent=$normalizable->normalize($user,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

}

