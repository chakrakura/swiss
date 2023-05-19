<?php

namespace App\Easyjet\SfsuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfsuRow
 *
 * @ORM\Table(name="SFSU_RETENTION")
 * @ORM\Entity
 * 
 */

class SfsuRetention
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
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=120, nullable=false)
     */
    private $label;

    /**
     * @var int $nbDays
     *
     * @ORM\Column(name="nb_days", type="integer", nullable=false)
     */
    private $nbDays;

    /**
     * @var int $nbHours
     *
     * @ORM\Column(name="nb_hours", type="integer", nullable=false)
     */
    private $nbHours;

    /**
     * @var bool $default
     *
     * @ORM\Column(name="default", type="integer", nullable=false)
     */
    private $default;



    /**
     * Gets the value of nbDays.
     *
     * @return int $nbDays
     */
    public function getNbDays()
    {
        return $this->nbDays;
    }

    /**
     * Sets the value of nbDays.
     *
     * @param int $nbDays $nbDays the nb days
     *
     * @return self
     */
    public function setNbDays($nbDays)
    {
        $this->nbDays = $nbDays;

        return $this;
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
     * Gets the value of default.
     *
     * @return bool $default
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets the value of default.
     *
     * @param bool $default $default the default
     *
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Gets the value of nbHours.
     *
     * @return int $nbHours
     */
    public function getNbHours()
    {
        return $this->nbHours;
    }

    /**
     * Sets the value of nbHours.
     *
     * @param int $nbHours $nbHours the nb hours
     *
     * @return self
     */
    public function setNbHours($nbHours)
    {
        $this->nbHours = $nbHours;

        return $this;
    }

    public function __toString()
    {
        return $this->label;
    }
}