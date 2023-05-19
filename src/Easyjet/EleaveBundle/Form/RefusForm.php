<?php

namespace App\Easyjet\EleaveBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Description of EleaveRefus
 *
 */
class RefusForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', TextareaType::class, array("label" => "Reason", "required" => true));
    }

    public function getName()
    {
        return "Refuses";
    }
}
