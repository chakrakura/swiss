<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


/**
 * Description of Disruptions
 */
class DisruptionsForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("montantCabin", TextType::class, array("label" => "Cabin value", "required" => true))
            ->add("montantPilot", TextType::class, array("label" => "Pilot value", "required" => true))
            ->add('dateEffectivite', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd/mm/yyyy',
                ]
            ]);
    }

    public function getName()
    {
        return "Disruptions";
    }
}
