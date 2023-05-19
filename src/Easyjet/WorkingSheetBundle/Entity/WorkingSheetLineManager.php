<?php

namespace App\Easyjet\WorkingSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkingSheetLineManager
 *
 * @ORM\Table(name="WORKING_SHEET_LINE_MANAGER")
 * @ORM\Entity
 */
class WorkingSheetLineManager
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="line_manager_user_id", referencedColumnName="id_user")
     * })
     */
    private $lineManagerUser;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;

    public function getId() {
        return $this->id;
    }

    public function getLineManagerUser() {
        return $this->lineManagerUser;
    }

    public function getUser() {
        return $this->user;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setLineManagerUser(\App\Easyjet\UmanBundle\Entity\Users $lineManagerUser) {
        $this->lineManagerUser = $lineManagerUser;
        return $this;
    }

    public function setUser(\App\Easyjet\UmanBundle\Entity\Users $user) {
        $this->user = $user;
        return $this;
    }


}
