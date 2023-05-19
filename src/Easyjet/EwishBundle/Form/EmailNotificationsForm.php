<?php

namespace App\Easyjet\EwishBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class EmailNotificationsForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', TextareaType::class, array("label" => "eMail", "required" => true));
    }

    public function getName()
    {
        return "Notifications";
    }
}
