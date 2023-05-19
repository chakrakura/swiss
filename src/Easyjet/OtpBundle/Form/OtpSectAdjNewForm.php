<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Description of Notifications
 
 */
class OtpSectAdjNewForm extends AbstractType {

   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("message", null, array("label" => "Your message", "required" => true))
        ;

    }
    
    public function getName() {
        return "OtpSectAdjNewForm";
    }    

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        
    }


}
