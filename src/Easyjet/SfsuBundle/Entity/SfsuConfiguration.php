<?php

namespace App\Easyjet\SfsuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfsuRow
 *
 * @ORM\Table(name="SFSU_CONFIGURATION")
 * @ORM\Entity
 * 
 */

class SfsuConfiguration
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
     * @var int $maxUploadFileSizeMb
     *
     * @ORM\Column(name="max_upload_file_size_mb", type="integer")
     */
    private $maxUploadFileSizeMb;


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
     * Gets the value of maxUploadFileSizeMb.
     *
     * @return int $nbDays
     */
    public function getMaxUploadFileSizeMb()
    {
        return $this->maxUploadFileSizeMb;
    }

    /**
     * Sets the value of maxUploadFileSizeMb.
     *
     * @param int $nbDays $maxUploadFileSizeMb the max upload file size mb
     *
     * @return self
     */
    public function setMaxUploadFileSizeMb($maxUploadFileSizeMb)
    {
        $this->maxUploadFileSizeMb = $maxUploadFileSizeMb;

        return $this;
    }
}