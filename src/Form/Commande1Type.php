<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Commande1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('statut')
            ->add('dateCmd')
            ->add('dateLivraison')
            ->add('quantite')
            ->add('idProduit' , EntityType::class, array(
                'class' => 'App\Entity\ProduitRestaurant',
                'choice_label' => function ($ProduitRestaurant){

                    return  $ProduitRestaurant->getNomPdt() ;}
            ))
            ->add('idFournisseur', EntityType::class, array(
                'class' => 'App\Entity\Fournisseur',
                'choice_label' => function ($Fournisseur){

                    return  $Fournisseur->getNomFournisseur() ;}
            ))
            ->add('idUtilisateur', EntityType::class, array(
                'class' => 'App\Entity\Utilisateur',
                'choice_label' => function ($Utilisateur){

                    return  $Utilisateur->getNom() ;}
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
