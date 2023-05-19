<?php

namespace App\Easyjet\SfsuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class SfsuFileUploadForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('uploadFile', FileType::class, array("label" => "File to upload", "required" => true));
    }

    public function getName()
    {
        return "SfsuFileUploadForm";
    }
}
