<?php


namespace App\Validators;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class VerifTel extends Constraint
{
    public string $message='Veuillez verifier votre Numero de telephone';
    /**
     * @return string
     */
    public function validatedBy():string
    {
        return \get_class($this).'Validator';
    }
}