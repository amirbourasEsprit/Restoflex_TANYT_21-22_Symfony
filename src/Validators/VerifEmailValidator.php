<?php


namespace App\Validators;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class VerifEmailValidator
 * @package App\Validators
 * @param mixed $value;
 * @param Constraint $constraint
 */
class VerifEmailValidator extends ConstraintValidator
{
public function validate($value,Constraint $constraint):void
{

    if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
        $this->context->buildViolation($constraint->message)
            ->setParameter('{{string}}',$value)
            ->addViolation()

            ;
    }
}
}