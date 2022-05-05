<?php


namespace App\Validators;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class VerifNullValidator
 * @package App\Validators
 * @param mixed $value;
 * @param Constraint $constraint
 */
class VerifNullValidator extends ConstraintValidator
{
    public function validate($value,Constraint $constraint):void
    {

        if($value===null){
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{string}}',$value)
                ->addViolation()

            ;
        }
    }
}