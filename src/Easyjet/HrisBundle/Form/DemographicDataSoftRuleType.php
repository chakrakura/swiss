<?php
 
namespace App\Easyjet\HrisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
 
class DemographicDataSoftRuleType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('typeOfRule');
        $builder->add('value');
    }
     

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Easyjet\HrisBundle\Entity\HrisEjint096DemographicDataSoftRule',
        ));
    }
     
    public function getName() {
        return 'demographicDataSoftRule';
    }
}