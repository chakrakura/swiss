<?php

namespace App\Easyjet\UmanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class ExternalUserForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('engagementDateCustom', DateType::class, [
            'widget' => 'single_text',
            'label' => 'Engagement date',
            'html5' => false,
            'mapped' => false,
            'required' => true,
            'format' => 'dd/MM/yyyy',
            'attr' => [
                'data-provide' => 'datepicker',
                'data-date-format' => 'dd/mm/yyyy',
            ]
        ]);
      
    }

    public function getName()
    {
        return "ExternalUser";
    }
}
