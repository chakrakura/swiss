<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


/**
 * Description of Notifications
 
 */
class OtpImportRowCommentForm extends AbstractType {


    public function __construct() {
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("disruptionComment", TextareaType::class, array("label" => "Your comment", "required" => true));
    }
    
    public function getName() {
        return "OtpImportRowCommentForm";
    }    

 
}
