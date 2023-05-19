<?php

namespace App\Easyjet\SfsuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfsuRow
 *
 * @ORM\Table(name="SFSU_FILE_AUTHORIZED_EMAIL")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */

class SfsuFileAuthorizedEmail   
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
     * @var SfsuFile $file Concerned file
     * @ORM\ManyToOne(targetEntity="SfsuFile")
     * @ORM\JoinColumn(name="sfsu_file_id", referencedColumnName="id")
     */
    private $file;


    public function __construct($email = null, \App\Easyjet\SfsuBundle\Entity\SfsuFile $file=null)
    {
        $this->file = $file;
        $this->emailAddress = $email;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getEmailAddress() {
        return $this->emailAddress;
    }

    public function getFile() {
        return $this->file;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setEmailAddress($emailAddress) {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function setFile(SfsuFile $file) {
        $this->file = $file;
        return $this;
    }
}