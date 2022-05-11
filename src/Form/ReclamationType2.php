<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Utilisateur;
use App\Entity\TypeReclamation;
use Symfony\Component\Form\AbstractType;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReclamationType2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('destinataire', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'nom',
                'query_builder' => function (UtilisateurRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->Where('u.idRole = ?1')
                        ->setParameter(1, 1);
                }])

            ->add('description')
            ->add('dateReclamation',DateType::class, [
                'widget' => 'single_text',
            ])
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