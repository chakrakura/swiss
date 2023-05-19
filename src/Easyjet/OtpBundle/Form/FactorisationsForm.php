<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Description of Factorisations
 */
class FactorisationsForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add("nVal", TextType::class, array("label" => "N", "required" => true));
        $builder->add("sVal", TextType::class, array("label" => "S", "required" => true));
        $builder->add("mVal", TextType::class, array("label" => "M", "required" => true));
        $builder->add("lVal", TextType::class, array("label" => "L", "required" => true));
        $builder->add("xlVal", TextType::class, array("label" => "XL", "required" => true));
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
    
    public function getName() {
        return "Factorisations";
    }    

    


}
