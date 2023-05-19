<?php

namespace App\Easyjet\WorkingSheetBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class ActualWorkListener
{
    /**
     *
     * @var \Swift_Mailer
     */
    public $mailer;
    
    /**
     *
     * @var \Symfony\Bundle\TwigBundle\TwigEngine
     */
    public $templating;
    
    /**
     *
     * @var Container
     */
    private $container;
    
    public function __construct(Container $container) {
        $this->container = $container;
    }

    /**
     * 
     * @param \Swift_Mailer $mailer
     */
    public function setMailer(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
        
    }

    public function setTemplating(\Symfony\Bundle\TwigBundle\TwigEngine $templating)
    {
        $this->templating = $templating;
    }
    

    public function postUpdate(LifecycleEventArgs $args) {
        return $this->postPersist($args);
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $this->templating = $this->container->get("templating");
        $this->mailer = $this->container->get("mailer");

        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();

        if ($entity instanceof WorkingSheetActualWork) {
            $emails = array();
            
            
            // This alert is only sent for saturdays and sunday
            $weekDay = $entity->getWorkingDate()->format("N");
            if ($weekDay < 6) {
                return;
            }
            
            if ($entity->getWorkedByUser()->getLineManager()) {
                $emails[] = $entity->getWorkedByUser()->getLineManager()->getEmailUser();
            }
            
            $managers = $entityManager->getRepository("EasyjetWorkingSheetBundle:WorkingSheetUsers")->findBy(array(
                "workingSheetAccessLevel" => 3
            ));
            
            foreach ($managers as $manager) {
                if ($manager->getEmailUser()) {
                    $emails[] = $manager->getEmailUser();
                }
            }
            
            if (count($emails)) {
                $message = new \Swift_Message('An employee reported working time during the weekend');
                $message
                    ->setFrom('swissinside@easyjet.com')
                    ->setTo($emails)
                    ->setBody(
                        $this->templating->render(
                            "EasyjetWorkingSheetBundle:Mails:weekendWork.html.twig",
                            array('entity' => $entity)
                        ),
                        'text/html'
                    );
                $this->mailer->send($message);
            }
        }
    }
}