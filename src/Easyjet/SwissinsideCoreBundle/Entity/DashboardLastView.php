<?php

namespace App\Easyjet\SwissinsideCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Easyjet\SwissinsideCoreBundle\Repository\DashboardLastViewRepository")
 * @ORM\Table(name="dashboard_last_view")
 */
class DashboardLastView
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \App\Easyjet\SwissinsideCoreBundle\Entity\User Concerned user
     * @ORM\ManyToOne(targetEntity="App\Easyjet\SwissinsideCoreBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    public function __construct()
    {
        $this->date = \DateTime::createFromFormat('d/m/Y', '01/01/2000');
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \App\Easyjet\SwissinsideCoreBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \App\Easyjet\SwissinsideCoreBundle\Entity\User $user
     *
     * @return \App\Easyjet\SwissinsideCoreBundle\Entity\DashboardYourselfDataConfirmed
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     *
     * @return \App\Easyjet\SwissinsideCoreBundle\Entity\DashboardYourselfDataConfirmed
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }
}
