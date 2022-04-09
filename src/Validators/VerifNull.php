<?php


namespace App\Validators;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class VerifNull extends Constraint
{
    public string $message='Vous avez laisse ce champ vide';
    /**
     * @return string
     */
    public function validatedBy():string
    {
        return \get_class($this).'Validator';
    }
}