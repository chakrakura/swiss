<?php

namespace App\Easyjet\WorkingSheetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;


class WorkingSheetActualWorkType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('workingDate', DateType::class,  [
                "label" => "Working date",          
                "required" => false, 
                "widget" => "single_text"
                ])
            ->add('morningFrom', TimeType::class,  [
                "label" => "Morning (from)", 
                "required" => false, 
                "widget" => "single_text"
                ])
            ->add('morningTo', TimeType::class,  [
                "label" => "Morning (to)", 
                "required" => false, 
                "widget" => "single_text"
                ])
            ->add('afternoonFrom', TimeType::class,  [
                "label" => "Afternoon (from)", 
                "required" => false, 
                "widget" => "single_text"
                ])
            ->add('afternoonTo', TimeType::class,  [
                "label" => "Afternoon (to)", 
                "required" => false, 
                "widget" => "single_text"
                ])
            ->add('isHolliday', ChoiceType::class, [
                "label" => "Holiday day", 
                'choices' => array(
                "No" => "0",
                "Half a day" => "0.5",
                "Entire day" => "1")
                ])
            ->add('isBankHolliday', null, [
                "label" => "Justified absence"
                ])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\WorkingSheetActualWork'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'easyjet_workingsheetbundle_workingsheetactualwork';
    }
}
