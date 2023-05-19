<?php

namespace App\Easyjet\FdtrBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Easyjet\FdtrBundle\Entity\FdtrExternalDtime;


class ExternalDutyForm extends AbstractType
{

    private $isAdmin;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->isAdmin =  $options['isAdmin'];

        $builder
            ->add('reason', null, array(
                "label" => "Reason", "required" => true,
                'class' => 'App\Easyjet\FdtrBundle\Entity\FdtrExternalDtimeReason',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('dr')
                        ->where('dr.id = :reasonId')
                        ->setParameter("reasonId", "2");
                },
            ))
            ->add("tmpFile", FileType::class, array("label" => "Attachment", "data_class" => null, "required" => false))
            ->add('durationMinutesFormatted', TextType::class, array("label" => "Total hours (hh:mm)", "data_class" => null, 'attr' => array('readonly' => true)))
            ->add('comment', null, array("label" => "Comment", "required" => false));
    }

    public function getName()
    {
        return "ExternalDuty";
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'isAdmin' => false,
            'constraints' => [
                new Assert\Callback([$this, 'validateEntity'])
            ]
        ]);
    }

    public function validateEntity(FdtrExternalDtime $externalDtime, ExecutionContextInterface $context): void
    {
        $requestParam = new Request($_POST);
        $submitAction = $requestParam->get('validate');

        //Validate only if submitAction is Validate, not Save as Draft
        if (!empty($submitAction)) {
            if ($externalDtime->getTmpFile() instanceof \Symfony\Component\HttpFoundation\File\UploadedFile) {
                $extension = strtolower($externalDtime->getTmpFile()->getClientOriginalExtension());
                if (!in_array($extension, array("pdf", "jpg", "jpeg", "jpe", "png", "tif", "tiff"))) {
                    $context->buildViolation("Wrong file type. (accepted extension : pdf, jpg, jpe, jpeg, png, tif, tiff)")
                        ->atPath('tmpFile')
                        ->addViolation();
                }
            }
            if ($externalDtime->getDurationMinutes() > 0 && $externalDtime->getTmpFile() == null && $externalDtime->getFileTarget() == null) {
                $context->buildViolation("The file is mandatory if you report a duty time greater than 0.")
                    ->atPath('tmpFile')
                    ->addViolation();
            }
            if (!preg_match("/[0-9]+:[0-9]{2}/", $externalDtime->getDurationMinutesFormatted())) {
                $context->buildViolation("The duration format must be hh:mm.")
                    ->atPath('durationMinutesFormatted')
                    ->addViolation();
            }
            if (!$this->isAdmin && $externalDtime->getStatus() != FdtrExternalDtime::STATUS_PENDING && $externalDtime->getStatus() != '') {
                $context->buildViolation("Please contact an administrator if you want to change a value as this month has already been treated.")
                    ->addViolation();
            }
        }
    }
}
