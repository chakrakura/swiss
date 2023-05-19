<?php

namespace App\Easyjet\SfsuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\OptionsResolver\OptionsResolver;

class SfsuFileMailForm extends AbstractType
{

    private $files;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->files = $options['files'];

        $builder
            ->add('subject', null, array(
                "label" => "Subject",
                "required" => true,
                "data" =>  $this->generateSubject(),
                "attr" => array(
                    "placeholder" => "Please find your file attached",
                )
            ))
            ->add('recipient', null, array("label" => "Mail addresses", "required" => true, "attr" => array(
                "placeholder" => "contact@email.com, contact2@email.com"
            )))
            ->add('mailContent', TextareaType::class, array(
                "label" => "Mail content",
                "required" => true,
                "data" => "Hello,\n\nWe've uploaded a file we want to share with you.\n\nHere’s the link to access it.\n\nKind regards",
                "attr" => array(
                    "placeholder" => "Write the mail body here"
                )
            ));

        if (count($this->files) > 1) {
            $builder->add('zipFilename', null, array("label" => "Zip filename", "required" => false, "attr" => array(
                "placeholder" => "My files"
            )));
        }
    }

    protected function generateSubject()
    {
        $filenames = [];
        foreach ($this->files as $currentFile) {
            $filenames[] = $currentFile->getOriginalFilename();
        }
        return sprintf('%s "%s" available for download', count($filenames) > 1 ? "Files" : "File", implode(", ", $filenames));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'files' => [],
        ]);
    }

    public function getName()
    {
        return "SfsuFileMailForm";
    }
}
