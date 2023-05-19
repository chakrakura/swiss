<?php

namespace App\Easyjet\SfsuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class SfsuFileForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('retentionDuration', null, array("label" => "Retention duration", "required" => true))
            ->add('deleteAfterDownload', CheckboxType::class, array("label" => "Delete file after first download", "required" => false));
    }

    public function getName()
    {
        return "SfsuFileForm";
    }
}
