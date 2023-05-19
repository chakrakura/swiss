<?php

namespace App\Easyjet\HrisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\File;

class CrewUserReportForm extends AbstractType {
    
     public function __construct() {
    }
    
   
    
    
    public function getName() {
        return "CrewUserReportForm";
    }

   
    
}