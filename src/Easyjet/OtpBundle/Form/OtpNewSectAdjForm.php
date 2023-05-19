<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Description of OtpNewSectAdj
 */
class OtpNewSectAdjForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('concernedDate', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date of event',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd/mm/yyyy',
                ]
            ])
            ->add("message", TextareaType::class, [
                "label" => "Your message", 
                "required" => true]);
    }

    public function getName()
    {
        return "OtpNewSectAdjForm";
    }
}
