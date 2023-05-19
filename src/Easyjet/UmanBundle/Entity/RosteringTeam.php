<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PayrollRequest
 *
 * @ORM\Table(name="rostering_team")
 * @ORM\Entity(repositoryClass="App\Easyjet\UmanBundle\Repository\RosteringTeamRepository")
 */
class RosteringTeam
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
     * @var User Personne concerné
     * @ORM\ManyToOne(targetEntity="App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumn(name="`id_user`", referencedColumnName="id_user")
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_admin", type="integer", nullable=false)
     */
    private $isAdmin;


    /**
     * 
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    /**
     * 
     * @return Users
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * 
     * @param App\Easyjet\UmanBundle\Entity\Users $user
     * @return \App\Easyjet\UmanBundle\Entity\RosteringTeam
     */
    public function setUser(\App\Easyjet\UmanBundle\Entity\Users $user) {
        $this->user = $user;
        return $this;
    }

    /**
     * Sets the value of id.
     *
     * @param integer $id the id
     *
     * @return self
     */
    private function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Sets the value of user.
     *
     * @param Users Personne concerné $user the user
     *
     * @return self
     */
    private function _setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Gets the value of isAdmin.
     *
     * @return integer
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Sets the value of isAdmin.
     *
     * @param integer $isAdmin the is admin
     *
     * @return self
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }
}