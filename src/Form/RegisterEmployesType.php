<?php

namespace App\Form;

use App\Entity\Restaurant;
use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegisterEmployesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('cin',TextType::class)
            ->add('password',PasswordType::class)
            ->add('email',TextType::class)
            ->add('numTel',TextType::class)
            ->add('dateNaissance',DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('adresse',TextType::class)
            ->add('posteEmploye',TextType::class)
            ->add('idrest', EntityType::class, [
                'class' => Restaurant::class,
                'choice_label' => 'nom',
                'multiple' => false,
            ])
            ->add('captcha',CaptchaType::class,[
                'invalid_message'=>'code incorrecte',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
