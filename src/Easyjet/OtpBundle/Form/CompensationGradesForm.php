<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Easyjet\UmanBundle\Entity\TypesEftr;

/**
 * Description of CompensationGrades
 */
class CompensationGradesForm extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("label", null, array("label" => "Compensation grade", "required" => true))
            ->add("ignored")
            ->add('typeEftr', EntityType::class, array(
                "class" => TypesEftr::class, "required" => false,
                'placeholder' => 'Select a contract'
            ));
    }

    public function getName()
    {
        return "CompensationGrades";
    }
}
