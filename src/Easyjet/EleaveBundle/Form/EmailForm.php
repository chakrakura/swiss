<?php

namespace App\Easyjet\EleaveBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

/**
 * Description of Email

 */
class EmailForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', EmailType::class, array("label" => "Email", "required" => true));
    }

    public function getName()
    {
        return "Notifications";
    }
}
