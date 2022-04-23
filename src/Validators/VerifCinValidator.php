<?php


namespace App\Validators;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class VerifCinValidator
 * @package App\Validators
 * @param mixed $value;
 * @param Constraint $constraint
 */
class VerifCinValidator extends ConstraintValidator
{
    public function validate($value,Constraint $constraint):void
    {

        if(!is_numeric($value)||(strlen($value)!=8)){
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{string}}',$value)
                ->addViolation()

            ;
        }
    }
}