<?php

namespace App\Easyjet\UmanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;



class EmployeeUserForm extends AbstractType
{

   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email_user', EmailType::class, array("label" => "E-mail", "required" => true));
        $builder->add('personal_email_user', EmailType::class, array("label" => "Personal email address", "empty_data" => "", "required" => false));
    }


    public function getName()
    {
        return "EmployeeUser";
    }
}
