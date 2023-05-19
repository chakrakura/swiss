<?php

namespace App\Easyjet\UmanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;



class ThirdPartyUserForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('logUser', TextType::class, array("label" => "Login", "required" => true));
        $builder->add('email_user', EmailType::class, array("label" => "E-mail", "required" => true));
        $builder->add('nomUser', TextType::class, array("label" => "Last name", "empty_data" => "", "required" => false));
        $builder->add('prenomUser', TextType::class, array("label" => "First name", "empty_data" => "", "required" => false));
        $builder->add('telUser', TextType::class, array("label" => "Telephone", "empty_data" => "", "required" => false));
        $builder->add('tel2User', TextType::class, array("label" => "Such. portable", "empty_data" => "", "required" => false));
     
    }

   

    public function getName()
    {
        return "ThirdPartyUser";
    }
}
