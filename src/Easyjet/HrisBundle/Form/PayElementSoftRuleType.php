<?php
 
namespace App\Easyjet\HrisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
 
class PayElementSoftRuleType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('typeOfRule');
        $builder->add('typeOfValue');
        $builder->add('value');
    }
     

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Easyjet\HrisBundle\Entity\HrisEjint096PayElementSoftRule',
        ));
    }
     
    public function getName() {
        return 'softRule';
    }
}