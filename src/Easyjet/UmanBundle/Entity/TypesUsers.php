<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesUsers
 *
 * @ORM\Table(name="types_users")
 * @ORM\Entity
 */
class TypesUsers
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
     * @var integer
     *
     * @ORM\Column(name="id_appli", type="integer", nullable=true)
     */
    private $idAppli;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=false)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="text", nullable=false)
     */
    private $valeur = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_manage_rights", type="boolean", nullable=false)
     */
    private $canManageRights;

    /**
     * @var string
     *
     * @ORM\Column(name="ad_group", type="string",  nullable=false)
     */
    private $adGroup;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idAppli
     *
     * @param integer $idAppli
     * @return TypesUsers
     */
    public function setIdAppli($idAppli)
    {
        $this->idAppli = $idAppli;
    
        return $this;
    }

    /**
     * Get idAppli
     *
     * @return integer 
     */
    public function getIdAppli()
    {
        return $this->idAppli;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TypesUsers
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return TypesUsers
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     * @return TypesUsers
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    
        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set canManageRights
     *
     * @param boolean $canManageRights
     * @return TypesUsers
     */
    public function setCanManageRights($canManageRights)
    {
        $this->canManageRights = $canManageRights;
    
        return $this;
    }

    /**
     * Get canManageRights
     *
     * @return boolean 
     */
    public function getCanManageRights()
    {
        return $this->canManageRights;
    }

    /**
     * Set adGroup
     *
     * @param string $adGroup
     * @return UmanTypesUsers
     */
    public function setAdGroup($adGroup)
    {
        $this->adGroup = $adGroup;
    
        return $this;
    }

    /**
     * Get adGroup
     *
     * @return string 
     */
    public function getAdGroup()
    {
        return $this->adGroup;
    }
}