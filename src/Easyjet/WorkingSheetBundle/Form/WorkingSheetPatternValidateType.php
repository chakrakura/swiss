<?php

namespace App\Easyjet\WorkingSheetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class WorkingSheetPatternValidateType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("status", ChoiceType::class, array("choices" => array(
                "Pending" => "PENDING",
                "Validated" => "VALIDATED",
                "Refused" => "REFUSED",
            )))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\WorkingSheetPattern'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'easyjet_workingsheetbundle_workingsheetValiadatepattern';
    }
}
