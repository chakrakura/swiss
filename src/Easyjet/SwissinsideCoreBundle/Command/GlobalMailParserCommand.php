<?php
namespace Easyjet\SwissinsideCoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Console\Input\ArrayInput;

class GlobalMailParserCommand extends ContainerAwareCommand
{
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    public static $stdinContent = null;

    protected function configure()
    {
        $this
            ->setName('easyjet:global-mail-parser')
            ->setDescription('Parse an incoming mail, received from stdin')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        self::$stdinContent = file_get_contents("php://stdin");

        if ($this->getApplication()->has('easyjet:uman-mail-parser')) {
            $command = $this->getApplication()->find('easyjet:uman-mail-parser');
            $arguments = array('command' => 'easyjet:uman-mail-parser');
            $input = new ArrayInput($arguments);
            $returnCode = $command->run($input, $output);
        }

        if ($this->getApplication()->has('easyjet:EJINT097-parse-mails')) {
            $command = $this->getApplication()->find('easyjet:EJINT097-parse-mails');
            $arguments = array('command' => 'easyjet:EJINT097-parse-mails');
            $input = new ArrayInput($arguments);
            $returnCode = $command->run($input, $output);
        }

        if ($this->getApplication()->has('easyjet:EJINT098-parse-mails')) {
            $command = $this->getApplication()->find('easyjet:EJINT098-parse-mails');
            $arguments = array('command' => 'easyjet:EJINT098-parse-mails');
            $input = new ArrayInput($arguments);
            $returnCode = $command->run($input, $output);
        }

        if ($this->getApplication()->has('qms:parse-mails')) {
            $command = $this->getApplication()->find('qms:parse-mails');
            $arguments = array('command' => 'qms:parse-mails');
            $input = new ArrayInput($arguments);
            $returnCode = $command->run($input, $output);
        }

    }
}
