<?php

namespace App\Easyjet\UmanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ApplicationsEditForm extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('initiaux', TextType::class, array("label" => "Initials", "required" => true));
        $builder->add('nom', TextType::class, array("label" => "App name", "required" => true));
        $builder->add('description', TextareaType::class, array("label" => "Description", "empty_data" => "", "required" => false));
      

    }

    public function getName()
    {
        return "Applications Edit";
    }
}
