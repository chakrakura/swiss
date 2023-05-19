<?php

namespace App\Easyjet\UmanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType; 


class TypesUsersForm extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('type', TextType::class, array("label" => "Type", "required" => true));
        $builder->add('commentaire', TextType::class, array("label" => "Comment", "required" => true));
        $builder->add('valeur', TextType::class, array("label" => "Value", "required" => false));
        $builder->add('adGroup', TextareaType::class, array("label" => "Ad group Dn", "required" => false));
        $builder->add('canManageRights', CheckboxType::class, array('label' => "Can manage rights", "required" => false)); 
    }

    public function getName()
    {
        return "Applications";
    }
}
