<?php

namespace App\Easyjet\WorkingSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkingSheetPattern
 *
 * @ORM\Table(name="WORKING_SHEET_PATTERN")
 * @ORM\Entity(repositoryClass="\App\Easyjet\WorkingSheetBundle\Repository\WorkingSheetPatternRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class WorkingSheetPattern
{
    const STATUS_PENDING = "PENDING";
    const STATUS_VALIDATED = "VALIDATED";
    const STATUS_REFUSED = "REFUSED";

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = false;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", nullable=false)
     */
    private $status = self::STATUS_PENDING;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="monday_morning_from", type="time", nullable=true)
     */
    private $mondayMorningFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="monday_morning_to", type="time", nullable=true)
     */
    private $mondayMorningTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="monday_afternoon_from", type="time", nullable=true)
     */
    private $mondayAfternoonFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="monday_afternoon_to", type="time", nullable=true)
     */
    private $mondayAfternoonTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tuesday_morning_from", type="time", nullable=true)
     */
    private $tuesdayMorningFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tuesday_morning_to", type="time", nullable=true)
     */
    private $tuesdayMorningTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tuesday_afternoon_from", type="time", nullable=true)
     */
    private $tuesdayAfternoonFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tuesday_afternoon_to", type="time", nullable=true)
     */
    private $tuesdayAfternoonTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wednesday_morning_from", type="time", nullable=true)
     */
    private $wednesdayMorningFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wednesday_morning_to", type="time", nullable=true)
     */
    private $wednesdayMorningTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wednesday_afternoon_from", type="time", nullable=true)
     */
    private $wednesdayAfternoonFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wednesday_afternoon_to", type="time", nullable=true)
     */
    private $wednesdayAfternoonTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thursday_morning_from", type="time", nullable=true)
     */
    private $thursdayMorningFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thursday_morning_to", type="time", nullable=true)
     */
    private $thursdayMorningTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thursday_afternoon_from", type="time", nullable=true)
     */
    private $thursdayAfternoonFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thursday_afternoon_to", type="time", nullable=true)
     */
    private $thursdayAfternoonTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="friday_morning_from", type="time", nullable=true)
     */
    private $fridayMorningFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="friday_morning_to", type="time", nullable=true)
     */
    private $fridayMorningTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="friday_afternoon_from", type="time", nullable=true)
     */
    private $fridayAfternoonFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="friday_afternoon_to", type="time", nullable=true)
     */
    private $fridayAfternoonTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saturday_morning_from", type="time", nullable=true)
     */
    private $saturdayMorningFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saturday_morning_to", type="time", nullable=true)
     */
    private $saturdayMorningTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saturday_afternoon_from", type="time", nullable=true)
     */
    private $saturdayAfternoonFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saturday_afternoon_to", type="time", nullable=true)
     */
    private $saturdayAfternoonTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sunday_morning_from", type="time", nullable=true)
     */
    private $sundayMorningFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sunday_morning_to", type="time", nullable=true)
     */
    private $sundayMorningTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sunday_afternoon_from", type="time", nullable=true)
     */
    private $sundayAfternoonFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sunday_afternoon_to", type="time", nullable=true)
     */
    private $sundayAfternoonTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_changed_by_user_id", referencedColumnName="id_user")
     * })
     */
    private $statusChangedByUser;

    /**
     * @var \App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pattern_for_user_id", referencedColumnName="id_user")
     * })
     */
    private $patternForUser;
    
    public function __construct(\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $for) {
        $this->patternForUser = $for;
        $this->createdAt = new \DateTime;
    }
    
    public function getActive() {
        return $this->active;
    }

    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getMondayMorningFrom() {
        return $this->mondayMorningFrom;
    }

    public function getMondayMorningTo() {
        return $this->mondayMorningTo;
    }

    public function getMondayAfternoonFrom() {
        return $this->mondayAfternoonFrom;
    }

    public function getMondayAfternoonTo() {
        return $this->mondayAfternoonTo;
    }

    public function getTuesdayMorningFrom() {
        return $this->tuesdayMorningFrom;
    }

    public function getTuesdayMorningTo() {
        return $this->tuesdayMorningTo;
    }

    public function getTuesdayAfternoonFrom() {
        return $this->tuesdayAfternoonFrom;
    }

    public function getTuesdayAfternoonTo() {
        return $this->tuesdayAfternoonTo;
    }

    public function getWednesdayMorningFrom() {
        return $this->wednesdayMorningFrom;
    }

    public function getWednesdayMorningTo() {
        return $this->wednesdayMorningTo;
    }

    public function getWednesdayAfternoonFrom() {
        return $this->wednesdayAfternoonFrom;
    }

    public function getWednesdayAfternoonTo() {
        return $this->wednesdayAfternoonTo;
    }

    public function getThursdayMorningFrom() {
        return $this->thursdayMorningFrom;
    }

    public function getThursdayMorningTo() {
        return $this->thursdayMorningTo;
    }

    public function getThursdayAfternoonFrom() {
        return $this->thursdayAfternoonFrom;
    }

    public function getThursdayAfternoonTo() {
        return $this->thursdayAfternoonTo;
    }

    public function getFridayMorningFrom() {
        return $this->fridayMorningFrom;
    }

    public function getFridayMorningTo() {
        return $this->fridayMorningTo;
    }

    public function getFridayAfternoonFrom() {
        return $this->fridayAfternoonFrom;
    }

    public function getFridayAfternoonTo() {
        return $this->fridayAfternoonTo;
    }

    public function getSaturdayMorningFrom() {
        return $this->saturdayMorningFrom;
    }

    public function getSaturdayMorningTo() {
        return $this->saturdayMorningTo;
    }

    public function getSaturdayAfternoonFrom() {
        return $this->saturdayAfternoonFrom;
    }

    public function getSaturdayAfternoonTo() {
        return $this->saturdayAfternoonTo;
    }

    public function getSundayMorningFrom() {
        return $this->sundayMorningFrom;
    }

    public function getSundayMorningTo() {
        return $this->sundayMorningTo;
    }

    public function getSundayAfternoonFrom() {
        return $this->sundayAfternoonFrom;
    }

    public function getSundayAfternoonTo() {
        return $this->sundayAfternoonTo;
    }

    public function getId() {
        return $this->id;
    }

    public function getStatusChangedByUser() {
        return $this->statusChangedByUser;
    }

    public function getPatternForUser() {
        return $this->patternForUser;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
        return $this;
    }


    public function setMondayMorningFrom(\DateTime $mondayMorningFrom = null) {
        $this->mondayMorningFrom = $mondayMorningFrom;
        return $this;
    }

    public function setMondayMorningTo(\DateTime $mondayMorningTo = null) {
        $this->mondayMorningTo = $mondayMorningTo;
        return $this;
    }

    public function setMondayAfternoonFrom(\DateTime $mondayAfternoonFrom = null) {
        $this->mondayAfternoonFrom = $mondayAfternoonFrom;
        return $this;
    }

    public function setMondayAfternoonTo(\DateTime $mondayAfternoonTo = null) {
        $this->mondayAfternoonTo = $mondayAfternoonTo;
        return $this;
    }

    public function setTuesdayMorningFrom(\DateTime $tuesdayMorningFrom = null) {
        $this->tuesdayMorningFrom = $tuesdayMorningFrom;
        return $this;
    }

    public function setTuesdayMorningTo(\DateTime $tuesdayMorningTo = null) {
        $this->tuesdayMorningTo = $tuesdayMorningTo;
        return $this;
    }

    public function setTuesdayAfternoonFrom(\DateTime $tuesdayAfternoonFrom = null) {
        $this->tuesdayAfternoonFrom = $tuesdayAfternoonFrom;
        return $this;
    }

    public function setTuesdayAfternoonTo(\DateTime $tuesdayAfternoonTo = null) {
        $this->tuesdayAfternoonTo = $tuesdayAfternoonTo;
        return $this;
    }

    public function setWednesdayMorningFrom(\DateTime $wednesdayMorningFrom = null) {
        $this->wednesdayMorningFrom = $wednesdayMorningFrom;
        return $this;
    }

    public function setWednesdayMorningTo(\DateTime $wednesdayMorningTo = null) {
        $this->wednesdayMorningTo = $wednesdayMorningTo;
        return $this;
    }

    public function setWednesdayAfternoonFrom(\DateTime $wednesdayAfternoonFrom = null) {
        $this->wednesdayAfternoonFrom = $wednesdayAfternoonFrom;
        return $this;
    }

    public function setWednesdayAfternoonTo(\DateTime $wednesdayAfternoonTo = null) {
        $this->wednesdayAfternoonTo = $wednesdayAfternoonTo;
        return $this;
    }

    public function setThursdayMorningFrom(\DateTime $thursdayMorningFrom = null) {
        $this->thursdayMorningFrom = $thursdayMorningFrom;
        return $this;
    }

    public function setThursdayMorningTo(\DateTime $thursdayMorningTo = null) {
        $this->thursdayMorningTo = $thursdayMorningTo;
        return $this;
    }

    public function setThursdayAfternoonFrom(\DateTime $thursdayAfternoonFrom = null) {
        $this->thursdayAfternoonFrom = $thursdayAfternoonFrom;
        return $this;
    }

    public function setThursdayAfternoonTo(\DateTime $thursdayAfternoonTo = null) {
        $this->thursdayAfternoonTo = $thursdayAfternoonTo;
        return $this;
    }

    public function setFridayMorningFrom(\DateTime $fridayMorningFrom = null) {
        $this->fridayMorningFrom = $fridayMorningFrom;
        return $this;
    }

    public function setFridayMorningTo(\DateTime $fridayMorningTo = null) {
        $this->fridayMorningTo = $fridayMorningTo;
        return $this;
    }

    public function setFridayAfternoonFrom(\DateTime $fridayAfternoonFrom = null) {
        $this->fridayAfternoonFrom = $fridayAfternoonFrom;
        return $this;
    }

    public function setFridayAfternoonTo(\DateTime $fridayAfternoonTo = null) {
        $this->fridayAfternoonTo = $fridayAfternoonTo;
        return $this;
    }

    public function setSaturdayMorningFrom(\DateTime $saturdayMorningFrom = null) {
        $this->saturdayMorningFrom = $saturdayMorningFrom;
        return $this;
    }

    public function setSaturdayMorningTo(\DateTime $saturdayMorningTo = null) {
        $this->saturdayMorningTo = $saturdayMorningTo;
        return $this;
    }

    public function setSaturdayAfternoonFrom(\DateTime $saturdayAfternoonFrom = null) {
        $this->saturdayAfternoonFrom = $saturdayAfternoonFrom;
        return $this;
    }

    public function setSaturdayAfternoonTo(\DateTime $saturdayAfternoonTo = null) {
        $this->saturdayAfternoonTo = $saturdayAfternoonTo;
        return $this;
    }

    public function setSundayMorningFrom(\DateTime $sundayMorningFrom = null) {
        $this->sundayMorningFrom = $sundayMorningFrom;
        return $this;
    }

    public function setSundayMorningTo(\DateTime $sundayMorningTo = null) {
        $this->sundayMorningTo = $sundayMorningTo;
        return $this;
    }

    public function setSundayAfternoonFrom(\DateTime $sundayAfternoonFrom = null) {
        $this->sundayAfternoonFrom = $sundayAfternoonFrom;
        return $this;
    }

    public function setSundayAfternoonTo(\DateTime $sundayAfternoonTo = null) {
        $this->sundayAfternoonTo = $sundayAfternoonTo;
        return $this;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setStatusChangedByUser(\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $statusChangedByUser) {
        $this->statusChangedByUser = $statusChangedByUser;
        return $this;
    }

    public function setPatternForUser(\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $patternForUser) {
        $this->patternForUser = $patternForUser;
        return $this;
    }
    
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    
    public function getWeeklyHours() {
        $time = 0;
        if ($this->getmondayMorningFrom() && $this->getmondayMorningTo()) {
            $diff = $this->getmondayMorningTo()->diff($this->getmondayMorningFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }   
        
        if ($this->getmondayafternoonFrom() && $this->getmondayAfternoonTo()){
            $diff = $this->getmondayAfternoonTo()->diff($this->getmondayAfternoonFrom(), true);
            $time += $diff->h * 60 + $diff->i;

        }
        
        if ($this->getTuesdayMorningFrom() && $this->getTuesdayMorningTo()) {
            $diff = $this->getTuesdayMorningTo()->diff($this->getTuesdayMorningFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getTuesdayAfternoonFrom() && $this->getTuesdayAfternoonTo()) {
            $diff = $this->getTuesdayAfternoonTo()->diff($this->getmondayAfternoonFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getwednesdayMorningFrom() && $this->getwednesdayMorningTo()) {
            $diff = $this->getwednesdayMorningTo()->diff($this->getwednesdayMorningFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getwednesdayAfternoonFrom() && $this->getwednesdayAfternoonTo()) {
            $diff = $this->getwednesdayAfternoonTo()->diff($this->getwednesdayAfternoonFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getthursdayMorningFrom() && $this->getthursdayMorningTo()) {
            $diff = $this->getthursdayMorningTo()->diff($this->getthursdayMorningFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getthursdayAfternoonFrom() && $this->getthursdayAfternoonTo()) {
            $diff = $this->getthursdayAfternoonTo()->diff($this->getthursdayAfternoonFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getfridayMorningFrom() && $this->getfridayMorningTo()) {
            $diff = $this->getfridayMorningTo()->diff($this->getfridayMorningFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getfridayAfternoonFrom() && $this->getfridayAfternoonTo()) {
            $diff = $this->getfridayAfternoonTo()->diff($this->getfridayAfternoonFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getsaturdayMorningFrom() && $this->getsaturdayMorningTo()) {
            $diff = $this->getsaturdayMorningTo()->diff($this->getsaturdayMorningFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getsaturdayAfternoonFrom() && $this->getsaturdayAfternoonTo()) {
            $diff = $this->getsaturdayAfternoonTo()->diff($this->getsaturdayAfternoonFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getsundayMorningFrom() && $this->getsundayMorningTo()) {
            $diff = $this->getsundayMorningTo()->diff($this->getsundayMorningFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getsundayAfternoonFrom() && $this->getsundayAfternoonTo()) {
            $diff = $this->getsundayAfternoonTo()->diff($this->getsundayAfternoonFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        
        return (int)($time / 60) . " hours and " . (int)($time % 60) . " minutes";
    }

}
