<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



/**
 * Description of Notifications
 */
class OtpImportRowForm extends AbstractType {


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("sectN", null, array("label" => "Secteur N", "required" => false))
            ->add("sectS", null, array("label" => "Secteur S", "required" => false))
            ->add("sectM", null, array("label" => "Secteur M", "required" => false))
            ->add("sectL", null, array("label" => "Secteur L", "required" => false))
            ->add("sectXL", null, array("label" => "Secteur XL", "required" => false))
            ->add("sectManualTaxedChf", null, array("label" => "Manuel taxed (chf)", "required" => false))
            ->add("sectManualNotTaxedChf", null, array("label" => "Manuel not taxed (chf)", "required" => false));

    }
    
    public function getName() {
        return "OtpImportRowForm";
    }    

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        
    }


}
