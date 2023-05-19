<?php

namespace App\Easyjet\FdtrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * FdtrRow
 *
 * @ORM\Table(name="fdtr_external_dtime_reason")
 * @ORM\Entity
 */

class FdtrExternalDtimeReason
{

    /** 
     * @ORM\Id
     * @ORM\Column(name="id", type="integer",  nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=200, nullable=false)
     */
    private $label;



    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
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

    public function __toString()
    {
        return $this->label;
    }
}