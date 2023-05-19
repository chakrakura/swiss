<?php

namespace App\Easyjet\SfsuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class maxFileSizeUploadForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('maxUploadFileSizeMb', null, array("label" => "Max upload filesize (MB)", "required" => true));        
    }
    
    public function getName() {
        return "maxFileSizeUploadForm";
    }    
}