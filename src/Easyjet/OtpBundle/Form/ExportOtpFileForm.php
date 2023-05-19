<?php

namespace App\Easyjet\OtpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Easyjet\OtpBundle\Entity\OtpImportBatch;
use Doctrine\ORM\EntityRepository;


/**
 * Description of Notifications
 */
class ExportOtpFileForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('batch', EntityType::class, array(
                "class" => OtpImportBatch::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('b')
                        ->where('b.removed IS NULL')
                        ->andWhere('b.exportedAt IS NULL')
                        ->orderBy('b.effectiveDate', 'DESC');
                },

            ));
    }

    public function getName()
    {
        return "ExportOtpFileForm";
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
    }
}
