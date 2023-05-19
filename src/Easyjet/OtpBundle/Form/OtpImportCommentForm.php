<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


/**
 * Description of Notifications
 
 */
class OtpImportCommentForm extends AbstractType {


    public function __construct() {
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("message", TextareaType::class, array("label" => "Comments", "required" => true));
    }
    
    public function getName() {
        return "OtpImportRowCommentForm";
    }    

 
}
