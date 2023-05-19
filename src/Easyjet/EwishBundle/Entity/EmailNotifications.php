<?php

namespace App\Easyjet\EwishBundle\Entity;

use App\Easyjet\EwishBundle\Repository\EmailNotificationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="ewish_email")
 * @ORM\Entity(repositoryClass=EmailNotificationsRepository::class)
 */
class EmailNotifications 
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
    */
    private $id;

    /**
     * @ORM\Column(name="label", type="string", length=128 )
    */
    private $label;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }
   
}
