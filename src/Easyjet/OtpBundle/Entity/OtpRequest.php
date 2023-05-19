<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * OtpImportBatch
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="OTP_REQUEST")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\OtpRequestRepository")
 */
class OtpRequest
{
    const STATUS_TYPE_DISRUPTION = "disruption";
    const STATUS_TYPE_SECTOR_ADJUSTMENT = "sect_adjustment";
    
    const STATUS_STATUS_PENDING = "pending";
    const STATUS_STATUS_VALIDATED = "validated";
    const STATUS_STATUS_REFUSED = "refused";
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="concerned_user", referencedColumnName="id_user")
     * })
     */
    private $concernedUser;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="concerned_date", type="date", nullable=false)
     */
    private $concernedDate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text")
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text")
     */
    private $status;
    
    
    /**
     * @var \App\Easyjet\OtpBundle\Entity\OtpDisruption
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpDisruption")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="disruption_id", referencedColumnName="id")
     * })
     */
    private $disruption;
    
     /**
     * @var \App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sect_adj_id", referencedColumnName="id")
     * })
     */
    private $sectorAdjustment;
    
    public function __construct() {
        $this->status = self::STATUS_STATUS_PENDING;
        $this->createdAt = new \DateTime;
    }
    
    function getId() {
        return $this->id;
    }

    function getConcernedUser() {
        return $this->concernedUser;
    }

    function getConcernedDate() {
        return $this->concernedDate;
    }

    function getCreatedAt() {
        return $this->createdAt;
    }

    function getType() {
        return $this->type;
    }

    function getStatus() {
        return $this->status;
    }

    function getDisruption() {
        return $this->disruption;
    }

    function getSectorAdjustment() {
        return $this->sectorAdjustment;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setConcernedUser(\App\Easyjet\UmanBundle\Entity\Users $concernedUser = null) {
        $this->concernedUser = $concernedUser;
        return $this;
    }

    function setConcernedDate(\DateTime $concernedDate) {
        $this->concernedDate = $concernedDate;
        return $this;
    }

    function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
        return $this;
    }

    function setType($type) {
        $this->type = $type;
        return $this;
    }

    function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    function setDisruption(\App\Easyjet\OtpBundle\Entity\OtpDisruption $disruption = null) {
        $this->disruption = $disruption;
        $this->type = self::STATUS_TYPE_DISRUPTION;
        return $this;
    }

    function setSectorAdjustment(\App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest $sectorAdjustment = null) {
        $this->sectorAdjustment = $sectorAdjustment;
        $this->type = self::STATUS_TYPE_SECTOR_ADJUSTMENT;
        return $this;
    }

    /**
     * @ORM\PrePersist
     */
    function prePersist() {
        $this->createdAt = new \DateTime; 
   }

}
