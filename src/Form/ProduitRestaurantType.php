<?php

namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\ProduitRestaurant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitRestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomPdt')
            ->add('quantitePdt')
            
            
            ->add('Categorie' , EntityType::class, array(
                'class' => 'App\Entity\Categorie',
                'choice_label' => function ($Categorie){

                    return  $Categorie->getnomCategorie() ;}
            ))

        

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProduitRestaurant::class,
        ]);
    }
    
}
