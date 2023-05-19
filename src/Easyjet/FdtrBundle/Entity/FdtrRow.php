<?php

namespace App\Easyjet\FdtrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * FdtrRow
 *
 * @ORM\Table(name="fdtr_row")
 * @ORM\Entity(repositoryClass="App\Easyjet\FdtrBundle\Repository\FdtrRowRepository")
 * @ORM\HasLifecycleCallbacks
 */

class FdtrRow
{
    /**
     * @var \Datetime
     *
     * @ORM\Column(name="concerned_date", type="date", nullable=false)
     */
    private $concernedDate;

    /**
     * @var App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport montlyReport
     *
     * @ORM\ManyToOne(targetEntity="App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport", cascade={"all"}, inversedBy="rows")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fdtr_monthly_report_id", referencedColumnName="id")
     * })
     */
    private $monthlyReport;

    /**
     * @var \Datetime
     *
     * @ORM\Column(name="duty_time_begin", type="datetime", nullable=true)
     */
    private $dutyTimeBegin;

    /**
     * @var \Datetime
     *
     * @ORM\Column(name="duty_time_end", type="datetime", nullable=true)
     */
    private $dutyTimeEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="duty_duration_minutes", type="integer")
     */
    private $dutyDuration;


    /**
     * @var float
     *
     * @ORM\Column(name="block_time_duration_decimal", type="decimal")
     */
    private $blockTime;


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="FdtrColumn", mappedBy="fdtrRow", cascade={"all"}))
     * @ORM\OrderBy({"order" = "ASC"})
     **/
    private $columns;

    /**
     * Constructor
     */
    public function __construct() {
        $this->columns = new ArrayCollection();
    }

    public function addColumns($columns) {
        foreach ($columns as $currentColumn) {
            $currentColumn->setFdtrRow($this);
            $this->columns->add($currentColumn);
        }
    }
    /**
     * Return the list of columns
     * @return ArrayCollection List of columns
     */
    public function getColumns() {
        return $this->columns;
    }

    /**
     * Gets the value of concernedDate.
     *
     * @return \Datetime
     */
    public function getConcernedDate()
    {
        return $this->concernedDate;
    }

    /**
     * Sets the value of concernedDate.
     *
     * @param \Datetime $concernedDate the concerned date
     *
     * @return self
     */
    public function setConcernedDate(\Datetime $concernedDate)
    {
        $this->concernedDate = $concernedDate;

        return $this;
    }

    /**
     * Gets the value of dutyTimeBegin.
     *
     * @return \Datetime
     */
    public function getDutyTimeBegin()
    {
        return $this->dutyTimeBegin;
    }

    /**
     * Sets the value of dutyTimeBegin.
     *
     * @param \Datetime $dutyTimeBegin the duty time begin
     *
     * @return self
     */
    public function setDutyTimeBegin(\Datetime $dutyTimeBegin)
    {
        $this->dutyTimeBegin = $dutyTimeBegin;

        return $this;
    }

    /**
     * Gets the value of dutyTimeEnd.
     *
     * @return \Datetime
     */
    public function getDutyTimeEnd()
    {
        return $this->dutyTimeEnd;
    }

    /**
     * Sets the value of dutyTimeEnd.
     *
     * @param \Datetime $dutyTimeEnd the duty time end
     *
     * @return self
     */
    public function setDutyTimeEnd(\Datetime $dutyTimeEnd)
    {
        $this->dutyTimeEnd = $dutyTimeEnd;

        return $this;
    }

    /**
     * Gets the value of dutyDuration.
     *
     * @return integer
     */
    public function getDutyDuration()
    {
        return $this->dutyDuration;
    }

    /**
     * Sets the value of dutyDuration.
     *
     * @param integer $dutyDuration the duty duration
     *
     * @return self
     */
    public function setDutyDuration($dutyDuration)
    {
        $this->dutyDuration = $dutyDuration;

        return $this;
    }

    /**
     * Gets the value of blockTime.
     *
     * @return float
     */
    public function getBlockTime()
    {
        return $this->blockTime;
    }

    /**
     * Sets the value of blockTime.
     *
     * @param float $blockTime the block time
     *
     * @return self
     */
    public function setBlockTime($blockTime)
    {
        $this->blockTime = $blockTime;

        return $this;
    }

    /**
     * Gets the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param integer $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function PrePersist() {
        $cpt = 0;
        foreach ($this->columns as $currentColumn) {
            $currentColumn->setOrder(++$cpt);
        }
    }



    /**
     * Gets the  monthly report
     *
     * @return App\Entity\FdtrMonthlyReport
     */
    public function getMonthlyReport()
    {
        return $this->monthlyReport;
    }

    /**
     * Sets the monthly report
     *
     * @param App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport $montlyReport the montly report
     *
     * @return self
     */
    public function setMonthlyReport(\App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport $monthlyReport)
    {
        $this->monthlyReport = $monthlyReport;

        return $this;
    }
}