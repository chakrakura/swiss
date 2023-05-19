<?php

namespace App\Easyjet\WorkingSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use DateTime;
use DateInterval;

/**
 * WorkingSheetActualWork
 *
 * @ORM\Table(name="WORKING_SHEET_ACTUAL_WORK")
 * @ORM\Entity(repositoryClass="\App\Easyjet\WorkingSheetBundle\Repository\WorkingSheetActualWorkRepository")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity(
 *  fields={"workingDate", "workedByUser"},
 *  message="You already have this date in your working history. Try to search and edit it in the working history instead or setup another date"
 * )
 */
class WorkingSheetActualWork
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="working_date", type="date", nullable=false)
     */
    private $workingDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="morning_from", type="datetime", nullable=true)
     */
    private $morningFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="morning_to", type="datetime", nullable=true)
     */
    private $morningTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="afternoon_from", type="datetime", nullable=true)
     */
    private $afternoonFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="afternoon_to", type="datetime", nullable=true)
     */
    private $afternoonTo;

    /**
     * @var float
     *
     * @ORM\Column(name="is_holliday", type="decimal", scale=1, nullable=false)
     */
    private $isHolliday;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_bank_holliday", type="boolean", nullable=false)
     */
    private $isBankHolliday;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var WorkingSheetUsers
     *
     * @ORM\ManyToOne(targetEntity="WorkingSheetUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="worked_by_user_id", referencedColumnName="id_user")
     * })
     */
    private $workedByUser;
    
    public function __construct(WorkingSheetUsers $for) {
        $this->workingDate = new \DateTime;
        $this->workedByUser = $for;
    }

    public function getWorkingDate() {
        return $this->workingDate;
    }

    public function getMorningFrom() {
        return $this->morningFrom;
    }

    public function getMorningTo() {
        return $this->morningTo;
    }

    public function getAfternoonFrom() {
        return $this->afternoonFrom;
    }

    public function getAfternoonTo() {
        return $this->afternoonTo;
    }

    public function getIsHolliday() {
        return (float)$this->isHolliday;
    }

    public function getIsBankHolliday() {
        return $this->isBankHolliday;
    }

    public function getId() {
        return $this->id;
    }

    public function getWorkedByUser() {
        return $this->workedByUser;
    }

    public function setWorkingDate(\DateTime $workingDate = null) {
        $this->workingDate = $workingDate;
        return $this;
    }

    public function setMorningFrom(\DateTime $morningFrom = null) {
        $this->morningFrom = $morningFrom;
        return $this;
    }

    public function setMorningTo(\DateTime $morningTo = null) {
        $this->morningTo = $morningTo;
        return $this;
    }

    public function setAfternoonFrom(\DateTime $afternoonFrom = null) {
        $this->afternoonFrom = $afternoonFrom;
        return $this;
    }

    public function setAfternoonTo(\DateTime $afternoonTo = null) {
        $this->afternoonTo = $afternoonTo;
        return $this;
    }

    public function setIsHolliday($isHolliday) {
        $this->isHolliday = $isHolliday;
        return $this;
    }

    public function setIsBankHolliday($isBankHolliday) {
        $this->isBankHolliday = $isBankHolliday;
        return $this;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setWorkedByUser(WorkingSheetUsers $workedByUser) {
        $this->workedByUser = $workedByUser;
        return $this;
    }
    
    public function getNumberOfMinutesWorked() {
        $time = 0;
        if ($this->getMorningFrom() && $this->getMorningTo()) {
            $diff = $this->getMorningTo()->diff($this->getMorningFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        
        if ($this->getAfternoonFrom() && $this->getAfternoonTo()) {
            $diff = $this->getAfternoonTo()->diff($this->getAfternoonFrom(), true);
            $time += $diff->h * 60 + $diff->i;
        }
        return $time;
    }
    
    public function isLocked() {
        $now = new DateTime();
        $lockedAt = clone $now;
        $lockedAt->modify('-15 day');
         
        return $this->workingDate->format("Y-m-d") < $lockedAt->format("Y-m-d");
    }
    
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function prePersistUpdate() {
        
        if (!$this->morningFrom || !$this->morningTo) {
            $this->morningFrom = null;
            $this->morningTo = null;
        }
        
        if (!$this->afternoonFrom || !$this->afternoonTo) {
            $this->afternoonFrom = null;
            $this->afternoonTo = null;
        }
        
        if ($this->morningFrom) {
            $this->morningFrom->setDate($this->workingDate->format("Y"), $this->workingDate->format("m"), $this->workingDate->format("d"));
        }
        
        if ($this->morningTo) {
            $this->morningTo->setDate($this->workingDate->format("Y"), $this->workingDate->format("m"), $this->workingDate->format("d"));
        }
        
        if ($this->afternoonFrom) {
            $this->afternoonFrom->setDate($this->workingDate->format("Y"), $this->workingDate->format("m"), $this->workingDate->format("d"));
        }
        
        if ($this->afternoonTo) {
            $this->afternoonTo->setDate($this->workingDate->format("Y"), $this->workingDate->format("m"), $this->workingDate->format("d"));
        }
        
        if ($this->morningTo && $this->morningFrom && $this->morningTo < $this->morningFrom) {
            $this->morningTo->add(new \DateInterval("P1D"));
        }
        
        if ($this->afternoonTo && $this->afternoonFrom && $this->afternoonTo < $this->afternoonFrom) {
            $this->afternoonTo->add(new \DateInterval("P1D"));
        }
        
    }
    
}
