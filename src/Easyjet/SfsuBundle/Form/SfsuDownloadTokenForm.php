<?php

namespace App\Easyjet\SfsuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class SfsuDownloadTokenForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('emailAddress', null, array("label" => "Your email address", "required" => true));
    }

   
    public function getName()
    {
        return "SfsuDownloadTokenForm";
    }
}
