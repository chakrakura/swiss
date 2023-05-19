<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * CompensationGrades
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="OTP_COMPENSATION_GRADES")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\CompensationGradesRepository")
 * @UniqueEntity(
 *     fields={"label"},
 *     errorPath="label",
 *     message="This compensation grade does already exist."
 * )
 */
class CompensationGrades
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="label", type="string", nullable=false)
     */
    private $label;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\TypesEftr
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\TypesEftr")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_eftr", referencedColumnName="id", nullable=true)
     * })
     */
    private $typeEftr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ignored", type="boolean")
     */
    private $ignored;


    public function __construct($label = null, \App\Easyjet\UmanBundle\Entity\TypesEftr $typeEftr = null)
    {
        $this->label = $label;
        $this->typeEftr = $typeEftr;
        $this->ignored = false;
    }



    /**
     * Gets the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param integer $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the value of label.
     *
     * @param string $label the label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Gets the }).
     *
     * @return \App\Easyjet\UmanBundle\Entity\TypesEftr
     */
    public function getTypeEftr()
    {
        return $this->typeEftr;
    }

    /**
     * Sets the }).
     *
     * @param \Easyjet\UmanBundle\Entity\TypesEftr $typeEftr the type eftr
     *
     * @return self
     */
    public function setTypeEftr(\App\Easyjet\UmanBundle\Entity\TypesEftr $typeEftr)
    {
        $this->typeEftr = $typeEftr;

        return $this;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     * @return null
     */
    public function prePersistUpdate()
    {
        if ($this->ignored) {
            $this->typeEftr = null;
        }

        if (!$this->typeEftr) {
            $this->ignored = true;
        }
    }

    /**
     * Gets the value of ignored.
     *
     * @return \DateTime
     */
    public function isIgnored()
    {
        return $this->ignored;
    }

    /**
     * Sets the value of ignored.
     *
     * @param boolean $ignored the ignored
     *
     * @return self
     */
    public function setIgnored($ignored)
    {
        $this->ignored = $ignored;

        return $this;
    }
}
