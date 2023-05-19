<?php

namespace App\Easyjet\FdtrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * FdtrExternalDtimeBreakup
 *
 * @ORM\Table(name="fdtr_external_dtime_breakup")
 * @ORM\Entity(repositoryClass="App\Easyjet\FdtrBundle\Repository\FdtrExternalDtimeBreakupRepository")
 */
class FdtrExternalDtimeBreakup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="FdtrMonthlyReport" , inversedBy="externalDtimeBreakup")
     * @ORM\JoinColumn(name="fdtr_monthly_report_id", referencedColumnName="id")
     */
    private $fdtrMonthlyReportId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="concerned_date", type="date")
     */
    private $concernedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="time")
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="time")
     */
    private $endTime;


    public function __construct() {
        $this->concernedDate = new \DateTime;
    }

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
     * Set fdtrMonthlyReportId
     *
     * @param integer $fdtrMonthlyReportId
     * @return FdtrExternalDtimeBreakup
     */
    public function setFdtrMonthlyReportId($fdtrMonthlyReportId)
    {
        $this->fdtrMonthlyReportId = $fdtrMonthlyReportId;
    
        return $this;
    }

    /**
     * Get fdtrMonthlyReportId
     *
     * @return integer 
     */
    public function getFdtrMonthlyReportId()
    {
        return $this->fdtrMonthlyReportId;
    }

    /**
     * Set concernedDate
     *
     * @param \DateTime $concernedDate
     * @return FdtrExternalDtimeBreakup
     */
    public function setConcernedDate($concernedDate=null)
    {
        $this->concernedDate = $concernedDate;
    
        return $this;
    }

    /**
     * Get concernedDate
     *
     * @return \DateTime 
     */
    public function getConcernedDate()
    {
        return $this->concernedDate;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return FdtrExternalDtimeBreakup
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    
        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     * @return FdtrExternalDtimeBreakup
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    
        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
}
