<?php

namespace App\Easyjet\UmanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class StationsForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('iataCode', TextType::class,array("label" => "IATA Code", "required" => true));
        $builder->add('country', TextType::class, array("label" => "Country", "required" => true));
        $builder->add('stationPhone', TextType::class, array("label" => "Telephone", "required" => true));
        $builder->add('airportName', TextType::class, array("label" => "Airport", "required" => true));
        $builder->add('cityName', TextType::class, array("label" => "Town", "required" => true));
        $builder->add('comments', TextareaType::class, array("label" => "Comment", "required" => false));
          
    }

    public function getName()
    {
        return "Stations";
    }
}
