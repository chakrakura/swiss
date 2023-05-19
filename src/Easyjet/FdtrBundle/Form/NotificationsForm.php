<?php

namespace App\Easyjet\FdtrBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class NotificationsForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parameterValue', EmailType::class, array("label" => "eMails addresses", "required" => true));        
    }
    
    public function getName() {
        return "Notifications";
    }    
}
