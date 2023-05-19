<?php

namespace App\Easyjet\SfsuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfsuRow
 *
 * @ORM\Table(name="SFSU_FILE_LOG")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */

class SfsuFileLog
{
    /**
     * @var int $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string $emailAddress
     *
     * @ORM\Column(name="email_address", type="string", length=200, nullable=true)
     */
    private $emailAddress;

    /**
     * @var string $ip
     *
     * @ORM\Column(name="IP", type="string", length=16, nullable=true)
     */
    private $ip;


    /**
     * @var string $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users $user User who made the action
     * @ORM\ManyToOne(targetEntity="App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     */
    private $user;

    /**
     * @var SfsuFile $file Concerned file
     * @ORM\ManyToOne(targetEntity="SfsuFile")
     * @ORM\JoinColumn(name="file_id", referencedColumnName="id")
     */
    private $file;

    /**
     * @var string $action
     *
     * @ORM\Column(name="action", type="string")
     */
    private $action;

    public function __construct($label, \App\Easyjet\UmanBundle\Entity\Users $user=null)
    {
        $this->action = $label;
        $this->date = new \DateTime;
        $this->user = $user;
        $this->ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1';
    }

    public function setLocal()
    {
        $this->ip = "localhost";
        $this->emailAddress = "swissinside@easyjet.com";
    }


    /**
     * Gets the value of id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param int $id $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of date.
     *
     * @return string $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the value of date.
     *
     * @param string $date $date the date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets the value of user.
     *
     * @return \App\Easyjet\UmanBundle\Entity\Users $user User who made the action
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the value of user.
     *
     * @param \App\Easyjet\UmanBundle\Entity\Users $user User who made the action $user the user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Gets the value of file.
     *
     * @return SfsuFile $file Concerned file
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets the value of file.
     *
     * @param SfsuFile $file Concerned file $file the file
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Gets the value of action.
     *
     * @return string $action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets the value of action.
     *
     * @param string $action $action the action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Gets the value of emailAddress.
     *
     * @return string $emailAddress
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets the value of emailAddress.
     *
     * @param string $emailAddress $emailAddress the email address
     *
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Gets the value of ip.
     *
     * @return string $ip
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Sets the value of ip.
     *
     * @param string $ip $ip the ip
     *
     * @return self
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

}