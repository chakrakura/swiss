<?php

namespace App\Easyjet\HrisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
/**
 * Description of Notifications
 *
 * @author Vikrant Tyagi <vikrant.tyagi@easyjet.com>
 */
class CosmicRadiationReportForm extends AbstractType {
    
     public function __construct() {
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("tmpFile", FileType::class, array("label" => "Upload CSV File", "required" => true, "data_class" => null,'constraints' => array(
                    new File(array(
                        'maxSize' => '5M',
                        'mimeTypes' => array('text/comma-separated-values', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.ms-excel', 'application/vnd.msexcel', 'text/plain'),
                        'mimeTypesMessage' => 'Please upload a valid CSV',
                    ))
                )));
    }
    
    
    public function getName() {
        return "CosmicRadiationReportForm";
    }

   
}