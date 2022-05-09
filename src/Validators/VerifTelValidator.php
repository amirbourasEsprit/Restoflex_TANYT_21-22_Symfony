<?php


namespace App\Validators;

use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class VerifTelValidator
 * @package App\Validators
 * @param mixed $value;
 * @param Constraint $constraint
 */
class VerifTelValidator extends ConstraintValidator
{ public ?bool $verification=null;


    public function validate($value,Constraint $constraint):void
    {

        $arrays = array("1", "0", "8", "6");


        if(!is_numeric($value)||(strlen($value)!=8)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{string}}', $value)
                ->addViolation();
            $verification=true;
        }

    foreach ($arrays as $array )
    {
     if((substr($value,0,1)===$array)&&($this->verification==false))
        {

            $this->context->buildViolation($constraint->message)
                ->setParameter('{{string}}',$value)
                ->addViolation()

            ;

        }


        }}

}