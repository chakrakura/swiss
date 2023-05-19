<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;

/**
 * Description of SectorPay
 */
class SectorPayForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateEffectivite', DateType::class, [
            "label" => "Efficiency date",
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
        return "SectorPay";
    }
}
