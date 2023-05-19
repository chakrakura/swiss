<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



/**
 * Description of RequestsSearch
 
 */
class RequestsSearchForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $status = $options['isAdmin'] ? array("Pending") : array("Pending", "Validated", "Refused");
        if ($options['isAdmin']) {
            $builder
                ->add("user", TextType::class, array(
                    "label" => "Concerned user",
                    "required" => false,
                    'mapped' => false,
                ));
        }
        $builder
            ->add("createdFrom", DateType::class, array(
                "label" => "Creation date between",
                "required" => false,
                "widget" => "single_text",
                'html5' => false,
                'mapped' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd/mm/yyyy',
                ]
            ))
            ->add("status", ChoiceType::class, array(
                "label" => "Status",
                "required" => false,
                'mapped' => false,
                "choices" => array(
                    "Pending" => "Pending",
                    "Validated" => "Validated",
                    "Refused" => "Refused",
                ),
                "expanded" => true,
                "multiple" => true,
                'data' => $status
            ))
            ->add("createdTo", DateType::class, array(
                "label" => "and",
                "required" => false,
                "widget" => "single_text",
                'html5' => false,
                'mapped' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd/mm/yyyy',
                ]
            ))
            ->add("concernedDateFrom", DateType::class, array(
                "label" => "Concerned date between",
                "required" => false,
                "widget" => "single_text",
                'mapped' => false,
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd/mm/yyyy',
                ]
            ))
            ->add("concernedDateTo", DateType::class, array(
                "label" => "and",
                "required" => false,
                "widget" => "single_text",
                'mapped' => false,
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd/mm/yyyy',
                ]
            ))

            ->add("type", ChoiceType::class, array(
                "label" => "Type of request",
                "required" => false,
                'mapped' => false,
                "choices" => array(
                    "Disruption" => "disruption",
                    "Sector Adjustment" => "sect_adjustment"
                ),
                "expanded" => true,
                "multiple" => true
            ));
    }

    public function getName()
    {
        return "RequestSearchForm";
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'isAdmin' => false,
        ]);
    }
    public function getDefaultOptions(array $options)
    {
        return array(
            'csrf_protection' => false
        );
    }
}
