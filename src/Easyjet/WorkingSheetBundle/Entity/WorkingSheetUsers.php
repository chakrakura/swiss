<?php

namespace App\Easyjet\WorkingSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Easyjet\WorkingSheetBundle\Entity\Stations;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Easyjet\WorkingSheetBundle\Repository\WorkingSheetUsersRepository")
 */
class WorkingSheetUsers
{
    const PREFERED_ADDRESS_FIRST = "first";
    const PREFERED_ADDRESS_SECOND = "second";
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var int
     *
     * @ORM\Column(name="occupation", type="integer", nullable=false)
     */
    private $occupation;
    
    /**
     * One Product has One Shipment.
     * @var \App\Easyjet\UmanBundle\Entity\Stations
     * @ORM\OneToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Stations")
     * @ORM\JoinColumn(name="id_station", referencedColumnName="id_station")
     */
    private $station;
    
    /**
     * One Product has One Shipment.
     * @var \App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers
     * @ORM\OneToOne(targetEntity="\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")
     * @ORM\JoinColumn(name="id_line_manager", referencedColumnName="id_user")
     */
    private $lineManager;
    
    /**
     * @var string
     *
     * @ORM\Column(name="log_user", type="string", length=15, nullable=false)
     */
    private $logUser;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="working_sheet_access_level", type="integer", nullable=false)
     */
    private $workingSheetAccessLevel;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=20, nullable=false)
     */
    private $prenomUser;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=40, nullable=false)
     */
    private $nomUser;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email_user", type="string", length=40, nullable=false)
     */
    private $emailUser;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="must_report_working_time", type="boolean", nullable=false)
     */
    private $mustReportWorkingTime;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    
    public function getOccupation() {
        return $this->occupation;
    }

    public function getStation() {
        return $this->station;
    }

    public function getLineManager() {
        return $this->lineManager;
    }

    public function getLogUser() {
        return $this->logUser;
    }

    public function getPrenomUser() {
        return $this->prenomUser;
    }

    public function getNomUser() {
        return $this->nomUser;
    }

    public function setOccupation($occupation) {
        $this->occupation = $occupation;
        return $this;
    }

    public function setStation(\App\Easyjet\UmanBundle\Entity\Stations $station1) {

        if ($station1 instanceof \App\Easyjet\UmanBundle\Entity\Stations) {
            $this->station = $station1->getIdStation();
        } else {
            $this->station = $station1;
        }
        return $this;
      
    }

    public function setLineManager(\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $lineManager) {
        $this->lineManager = $lineManager;
        return $this;
    }

    public function setLogUser($logUser) {
        $this->logUser = $logUser;
        return $this;
    }

    public function setPrenomUser($prenomUser) {
        $this->prenomUser = $prenomUser;
        return $this;
    }

    public function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
        return $this;
    }
    
    public function getWorkingSheetAccessLevel() {
        return $this->workingSheetAccessLevel;
    }

    public function setWorkingSheetAccessLevel($workingSheetAccessLevel) {
        $this->workingSheetAccessLevel = $workingSheetAccessLevel;
        return $this;
    }
    
    function getMustReportWorkingTime() {
        return $this->mustReportWorkingTime;
    }

    function setMustReportWorkingTime($mustReportWorkingTime) {
        $this->mustReportWorkingTime = $mustReportWorkingTime;
    }

    public function getEmailUser() {
        return $this->emailUser;
    }

    public function setEmailUser($emailUser) {
        $this->emailUser = $emailUser;
        return $this;
    }

            
    public function weeklyHoursToBeDone($simplifiedFormat = false) {
        $time = 2520 * $this->occupation / 100; // 42 hours * 60 = 2520 minutes per week
        if ($simplifiedFormat) {
            return (int)($time / 60) . "h" . str_pad((int)($time % 60), 2, "0", STR_PAD_LEFT);
        } else {
            return (int)($time / 60) . " hours and " . (int)($time % 60) . " minutes";
        }
        
    }
    
    public function __toString() {
        return $this->prenomUser . " " . $this->nomUser . " (" . $this->logUser . ")";
    }

}
