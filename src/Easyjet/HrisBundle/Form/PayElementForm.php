<?php

namespace App\Easyjet\HrisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;
use \Easyjet\CemBundle\Entity\CemMileageClaimRate;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Easyjet\HrisBundle\Form\PayElementSoftRuleType;

/**
 * Description of Notifications
 *
 * @author Gilles Hemmerlé <giloux@gmail.com>
 */
class PayElementForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('payElement', TextType::class, array(
                "label" => "Pay element", 
                "required" => true
                )
            )
            ->add('mandatory', ChoiceType::class, array(
                'choices' => array("Yes" => true, "No" => false),
                'expanded' => true,
                "label" => "Mandatory", 
                "required" => true
                )
            );

            $builder->add('softRules', CollectionType::class, array(
                'entry_type' => PayElementSoftRuleType::class,
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false
            ));

    }
    
    public function getName() {
        return "PayElementForm";
    }
}
