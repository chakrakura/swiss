<?php

namespace App\Easyjet\HrisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\File;

class UploadUserImportForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userImportFile', FileType::Class, array(
            "constraints" => array(
                new NotBlank(),
                new File(array(
                    'maxSize' => '5M'
                )),
            )
        ));
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
    }

    public function getName()
    {
        return 'UploadUserImport';
    }
}
