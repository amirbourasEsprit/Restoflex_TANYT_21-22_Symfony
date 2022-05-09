<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use function Sodium\add;


class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomFournisseur')
            ->add('matriculeFiscale')
            ->add('domaineFournisseur')
            ->add('numTelFournisseur')
            ->add('emailFournisseur')
            ->add('adresseFournisseur')
            ->add('logo', FileType::class , [
            'label' => 'Logo',
            'mapped' => 'False',
            'required' => 'False',
            'data_class' => null, ])
       /*   ->add('imageFile', VichImageType::class , [
     'label' => 'Logo',
     'mapped' => 'False',
     'required' => 'False',
     'data_class' => null, ])*/
     /*       ->add('updatedAt')*/
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class ,
        ]);
    }
}
