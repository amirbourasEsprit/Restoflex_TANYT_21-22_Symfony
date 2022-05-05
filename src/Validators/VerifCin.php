<?php


namespace App\Validators;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class VerifCin extends Constraint
{
    public string $message='Veuillez verifier votre Cin';
    /**
     * @return string
     */
    public function validatedBy():string
    {
        return \get_class($this).'Validator';
    }
}