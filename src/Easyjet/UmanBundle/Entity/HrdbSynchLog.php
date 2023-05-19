<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actions
 *
 * @ORM\Table(name="hrdb_synch_log")
 * @ORM\Entity(repositoryClass="App\Easyjet\UmanBundle\Repository\UmanHrdbSynchLogRepository")
 */
class HrdbSynchLog
{
    const STATUS_SUCCESS = 'success';
    const STATUS_ERROR = 'error';
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
     * @ORM\Column(name="requestor_ip", type="string", length=16, nullable=false)
     */
    private $requestorIp;

    /**
     * @var string
     *
     * @ORM\Column(name="api_url", type="string", length=1024, nullable=false)
     */
    private $apiUrl;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="request_time", type="datetime", nullable=false)
     */
    private $requestTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="xml_content", type="string", nullable=false)
     */
    private $xmlContent;

    /**
     * @var string
     *
     * @ORM\Column(name="log_content", type="text", nullable=false)
     */
    private $logContent;
    
    
    
    /**
     * @ORM\OneToMany(targetEntity="App\Easyjet\UmanBundle\Entity\HrdbSynchLogConcernedUser", mappedBy="hrdbSynchLog", cascade={"persist"})
     */
    private $concernedUsers;
    
    public function __construct() {
        $this->concernedUsers =  new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getRequestorIp() {
        return $this->requestorIp;
    }

    public function setRequestorIp($requestorIp) {
        $this->requestorIp = $requestorIp;
        return $this;
    }

    public function getApiUrl() {
        return $this->apiUrl;
    }

    public function setApiUrl($apiUrl) {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    public function getRequestTime() {
        return $this->requestTime;
    }

    public function setRequestTime(\DateTime $requestTime) {
        $this->requestTime = $requestTime;
        return $this;
    }

    public function getXmlContent() {
        return $this->xmlContent;
    }

    public function setXmlContent($xmlContent) {
        $this->xmlContent = $xmlContent;
        return $this;
    }

    public function getLogContent() {
        return $this->logContent;
    }

    public function setLogContent($logContent) {
        $this->logContent = $logContent;
        return $this;
    }

    public function addConcernedUser(HrdbSynchLogConcernedUser $concernedUser) {
        $this->concernedUsers->add($concernedUser);
        $concernedUser->setHrdbSynchLog($this);
        return $this;
    }
    
    public function getConcernedUsers() {
        return $this->concernedUsers;
    }
    /**
     * 
     * @return type
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * 
     * @param type $status
     * @return \App\Easyjet\UmanBundle\Entity\HrdbSynchLog
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    
    public function getType() {
        $return = null;
        preg_match("#type=([a-zA-Z\_]+)#", $this->apiUrl, $return);
        if(isset($return[1])) {
            return $return[1];
        }
        
        return "";
    }

}