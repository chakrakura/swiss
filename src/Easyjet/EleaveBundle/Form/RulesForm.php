<?php

namespace App\Easyjet\EleaveBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;


/**
 * Description of EleaveRules
 
 */
class RulesForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {

            $form = $event->getForm();

            $form->add(
                'cabinCrew',
                ChoiceType::class,
                [
                    'label' => "Cabin Crew",
                    'expanded' => true,
                    'multiple' => false,
                    'choices' => [
                        'Yes' => true,
                        'No' => false,
                    ],

                    'data' =>  $event->getData()->getCabinCrew(),
                ]
            );

            $form->add(
                'flightCrew',
                ChoiceType::class,
                [
                    'label' => "Flight Crew",
                    'expanded' => true,
                    'multiple' => false,
                    'choices' => [
                        'Yes' => true,
                        'No' => false,
                    ],

                    'data' => $event->getData()->getFlightCrew()
                ]
            );

            $form->add(
                'display',
                ChoiceType::class,
                [
                    'expanded' => true,
                    'multiple' => false,
                    'choices' => [
                        'Yes' => true,
                        'No' => false,
                    ],
                    'data' => $event->getData()->getDisplay()
                ]
            );
        });

        $builder
            ->add('text', TextareaType::class, array("label" => "Rule", 'attr' => array('style' => 'height: 150px'), "required" => true));
    }

    public function getName()
    {
        return "Rules";
    }
}
