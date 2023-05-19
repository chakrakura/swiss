<?php

namespace App\Easyjet\SwissinsideCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Easyjet\SwissinsideCoreBundle\Repository\DashboardSupportFormRepository")
 * @ORM\Table(name="dashboard_support_form")
 */
class DashboardSupportForm
{
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="App\Easyjet\SwissinsideCoreBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     */
    protected $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="confirmation_date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @param \App\Easyjet\SwissinsideCoreBundle\Entity\User $user
     */
    public function __construct($user)
    {
        $this->date = new \DateTime();
        $this->setUser($user);
    }

    /**
     * @return \Easyjet\SwissinsideCoreBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \App\Easyjet\SwissinsideCoreBundle\Entity\User $user
     *
     * @return \App\Easyjet\SwissinsideCoreBundle\Entity\DashboardSupportForm
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
     * @return \App\Easyjet\SwissinsideCoreBundle\Entity\DashboardSupportForm
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }
}
