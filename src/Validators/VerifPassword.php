<?php


namespace App\Validators;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class VerifPassword extends Constraint
{
    public string $message='Votre Mot de passe doit contenir au minimum une lettre majuscule,miniscule et un chiifre et de longeur min 8';
    /**
     * @return string
     */
    public function validatedBy():string
    {
        return \get_class($this).'Validator';
    }
}