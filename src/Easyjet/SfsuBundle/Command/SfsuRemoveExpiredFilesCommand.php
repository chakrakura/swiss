<?php

namespace App\Easyjet\SfsuBundle\Command;

use Symfony\Component\Console\Command\Command;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class SfsuRemoveExpiredFilesCommand extends Command
{
    /**
     *
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $em;

    /**
     *
     * @var \Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface
     */
    private $params;


    public function __construct(EntityManagerInterface $em,  ParameterBagInterface $params)
    {
        $this->em = $em;
        $this->params = $params;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('easyjet:sfsu-remove-expired-files')
            ->setDescription('Remove all expired files from the server and disable them in the web interface');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $folder = $this->params->get("sfsu.storage_folder");

        $files = $this->em->getRepository('App\Easyjet\SfsuBundle\Entity\SfsuFile')->findFilesToRemove();

        foreach ($files as $file) {
            $output->writeLn("Removing file " . $file->getOriginalFilename());
            $file->deleteFrom($folder);
            $this->em->persist($file);
            $this->em->flush();
        }

        $output->writeln("<info>Complete</info>");
        return Command::SUCCESS;
    }
}
