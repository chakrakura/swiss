<?php

namespace App\Easyjet\HrisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\FormInterface;

/**
 * Description of Notifications
 *
 * @author Gilles Hemmerlé <giloux@gmail.com>
 */
class ProcessingCalendarForm extends AbstractType {

    public function __construct() {
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("paymentMonth", DateType::class, array("label" => "Payment month", "required" => false, "widget" => "choice",'years'  => range(date('Y')-20, date('Y')+20), 'placeholder' => array('year' => 'Year', 'month' => 'Month', 'day' => false)))
            ->add("ejint096IntegrationFile", DateType::class, array("label" => "096 - Integration file available", "required" => false, "widget" => "single_text"))
            ->add("ejint083CemExport", DateType::class, array("label" => "083 - CEM exported", "required" => false, "widget" => "single_text"))
            ->add("ejint201ClaimsExport", DateType::class, array("label" => "201 - Claims exported", "required" => false, "widget" => "single_text"));
    }
    
    public function getName() {
        return "ProcessingCalendarForm";
    }

}
