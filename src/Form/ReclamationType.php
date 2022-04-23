<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\TypeReclamation;
use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            ->add('destinataire', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'nom'
            ])
            ->add('description')
            ->add('dateReclamation')
            ->add('idTypeReclamation', EntityType::class, [
                'class' => TypeReclamation::class,
                'choice_label' => 'nomTypeReclamation',
            ])
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class
        ]);
    }

}
