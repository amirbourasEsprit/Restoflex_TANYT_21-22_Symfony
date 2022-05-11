<?php


namespace App\Validators;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class VerifEmail extends Constraint
{
public string $message='Veuillez verifier votre adresse Email';
/**
 * @return string
 */
public function validatedBy():string
{
    return \get_class($this).'Validator';
}
}