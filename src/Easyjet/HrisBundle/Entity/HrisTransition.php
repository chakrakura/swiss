<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_TRANSITION")
 * @ORM\Entity()
 */

class HrisTransition
{
    /**
     * @var string
     *
     * @ORM\Column(name="freeze_from", type="datetime", nullable=false)
     */
    private $freezeFrom;


    /**
     * @var string
     *
     * @ORM\Column(name="freeze_to", type="datetime", nullable=false)
     */
    private $freezeTo;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     */
    private $id;

    public function __construct(\DateTime $freezeFrom, \DateTime $freezeTo) {
        $this->freezeFrom = $freezeFrom;
        $this->freezeTo = $freezeTo;
    }



    /**
     * Gets the value of freezeFrom.
     *
     * @return string
     */
    public function getFreezeFrom()
    {
        return $this->freezeFrom;
    }

    /**
     * Sets the value of freezeFrom.
     *
     * @param string $freezeFrom the freeze from
     *
     * @return self
     */
    public function setFreezeFrom($freezeFrom)
    {
        $this->freezeFrom = $freezeFrom;

        return $this;
    }

    /**
     * Gets the value of freezeTo.
     *
     * @return string
     */
    public function getFreezeTo()
    {
        return $this->freezeTo;
    }

    /**
     * Sets the value of freezeTo.
     *
     * @param string $freezeTo the freeze to
     *
     * @return self
     */
    public function setFreezeTo($freezeTo)
    {
        $this->freezeTo = $freezeTo;

        return $this;
    }

    /**
     * Gets the value of id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param string $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}