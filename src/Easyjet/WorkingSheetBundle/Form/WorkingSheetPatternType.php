<?php

namespace App\Easyjet\WorkingSheetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class WorkingSheetPatternType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mondayMorningFrom', TimeType::class,  array("label" => "Monday morning from", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('mondayMorningTo', TimeType::class,  array("label" => "Monday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('mondayAfternoonFrom', TimeType::class,  array("label" => "Monday afternoon from", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('mondayAfternoonTo', TimeType::class,  array("label" => "Monday afternoon to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('tuesdayMorningFrom', TimeType::class,  array("label" => "Tuesday morning from", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('tuesdayMorningTo', TimeType::class,  array("label" => "Tuesday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('tuesdayAfternoonFrom', TimeType::class,  array("label" => "Tuesday afternoon from", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('tuesdayAfternoonTo', TimeType::class,  array("label" => "Tuesday afternoon to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('wednesdayMorningFrom', TimeType::class,  array("label" => "Wednesday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('wednesdayMorningTo', TimeType::class,  array("label" => "Wednesday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('wednesdayAfternoonFrom', TimeType::class,  array("label" => "Wednesday afternoon from", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('wednesdayAfternoonTo', TimeType::class,  array("label" => "Wednesday afternoon to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('thursdayMorningFrom', TimeType::class,  array("label" => "Thursday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('thursdayMorningTo', TimeType::class,  array("label" => "Thursday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('thursdayAfternoonFrom', TimeType::class,  array("label" => "Thursday afternoon from", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('thursdayAfternoonTo', TimeType::class,  array("label" => "Thursday afternoon to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('fridayMorningFrom', TimeType::class,  array("label" => "Friday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('fridayMorningTo', TimeType::class,  array("label" => "Friday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('fridayAfternoonFrom', TimeType::class,  array("label" => "Friday afternoon from", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('fridayAfternoonTo', TimeType::class,  array("label" => "Friday afternoon to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('saturdayMorningFrom', TimeType::class,  array("label" => "Saturday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('saturdayMorningTo', TimeType::class,  array("label" => "Saturday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('saturdayAfternoonFrom', TimeType::class,  array("label" => "Saturday afternoon from", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('saturdayAfternoonTo', TimeType::class,  array("label" => "Saturday afternoon to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('sundayMorningFrom', TimeType::class,  array("label" => "Sunday morning to", "required" => false, "widget" => "single_text", "input" => "datetime", "attr" => array("disabled", "disabled")))
            ->add('sundayMorningTo', TimeType::class,  array("label" => "Sunday morning to", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('sundayAfternoonFrom', TimeType::class,  array("label" => "Sunday afternoon from", "required" => false, "widget" => "single_text", "input" => "datetime"))
            ->add('sundayAfternoonTo', TimeType::class,  array("label" => "Sunday afternoon to", "required" => false, "widget" => "single_text", "input" => "datetime"))
//            ->add('validatedByUser')
//            ->add('patternForUser')
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
        return 'easyjet_workingsheetbundle_workingsheetpattern';
    }
}
