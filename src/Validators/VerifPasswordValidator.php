<?php


namespace App\Validators;

use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class VerifPasswordValidator
 * @package App\Validators
 * @param mixed $value;
 * @param Constraint $constraint
 */
class VerifPasswordValidator extends ConstraintValidator
{



    public  function check_Min($value){
        $longueur=strlen($value);
        for($i=0;$i<$longueur;$i++)
        {    $caractere=substr($value,$i,1);

            if((ord($caractere)>=97)&&(ord($caractere)<=122))
            {
                return true;

            }

        }
        return false;
    }


    public function check_Maj($value)
    {
        $longueur=strlen($value);
        for($i=0;$i<$longueur;$i++)
        {    $caractere=substr($value,$i,1);

            if((ord($caractere)>=65)&&(ord($caractere)<=90))
            {
            return true;

            }

        }
        return false;
}
    public function check_number($value){
        $longueur=strlen($value);
        for($i=0;$i<$longueur;$i++)
        {    $caractere=substr($value,$i,1);

            if(is_numeric($caractere))
            {
                return true;

            }

        }
        return false;
    }


    public function validate($value,Constraint $constraint):void
    {
        if(!$this->check_Maj($value)||!$this->check_Min($value)||!$this->check_number($value)||strlen($value)<  8) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{string}}', $value)
                ->addViolation();

        }




        }

}