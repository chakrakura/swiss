<?php

namespace App\Easyjet\WorkingSheetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class WorkingSheetSearchReportType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options 
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $years = array(); 
        for ($i = 2018; $i <= date("Y") + 1; $i++) {
            $years[$i] = $i;
        };
        
        $builder
            ->add('dateFrom', TextType::class, array("label" => "From", "required" => false, 'attr' => [
                'class' => 'form-control',
                'data-enable-datepicker' => true
            ],))
            ->add('dateTo', TextType::class,  array("label" => "To", "required" => false, 'attr' => [
                'class' => 'form-control',
                'data-enable-datepicker' => true
            ],))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            //'data_class' => 'Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'easyjet_workingsheetbundle_workingsheetreport';
    }
}
