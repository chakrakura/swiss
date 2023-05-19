<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\FormInterface;

/**
 * Description of Notifications
 */
class ImportFileForm extends AbstractType {

    public function __construct() {
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("otpFile", "file", array("label" => "Import file", "required" => false))
            ->add("effectiveDate", "date",  array("label" => "Payment date", "required" => false, "widget" => "single_text", 'format' => 'dd/MM/yyyy', "input" => "datetime"))
            ->add("cvpMonth", "date",  array("label" => "CVP data month", "required" => false, "widget" => "single_text", 'format' => 'dd/MM/yyyy', "input" => "datetime"));

    }
    
    public function getName() {
        return "ImportOtpFile";
    }    

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => function(FormInterface $form) {
                return array('Strict');
            }
        ));
    }


}
