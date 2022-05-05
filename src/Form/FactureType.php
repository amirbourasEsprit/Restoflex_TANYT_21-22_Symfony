<?php

namespace App\Form;

use App\Entity\Facture;
use App\Entity\Restaurant;
use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateFacture',DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('total',TextType::class)
            ->add('statut',  ChoiceType::class, [
                'choices' => [
                    'statut' => [
                        'Payée' => 'payée',
                        'Non payée' => 'non payée',],
                    ],
                'expanded' => true, ])
                ->add('idRest', EntityType::class, [
                    'class' => Restaurant::class,
                    'choice_label' => 'nom',
                    'multiple' => false,
                ])
                ->add('idFournisseur', EntityType::class,[
                    'class' => Fournisseur::class,
                    'choice_label' => 'nomFournisseur',
                    'multiple' => false,
                    'attr' => array(
                        'placeholder' => 'Choisir votre Fournisseur'),
                ] )
                
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
        ]);
    }
}
