<?php

namespace App\Easyjet\FdtrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Easyjet\UmanBundle\Entity\Users;

/**
 * FdtrRow
 *
 * @ORM\Table(name="fdtr_monthly_report")
 * @ORM\Entity(repositoryClass="App\Easyjet\FdtrBundle\Repository\FdtrMonthlyReportRepository")
 * @ORM\HasLifecycleCallbacks
 */

class FdtrMonthlyReport
{
    /**
     * @var \Datetime
     *
     * @ORM\Column(name="concerned_month", type="date", nullable=false)
     */
    private $concernedMonth;

   
    /**
     * @ORM\ManyToOne(targetEntity="App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $fdtrUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="FdtrRow", mappedBy="monthlyReport", cascade={"persist"}))
     **/
    private $rows;

    /**
     * @var FdtrExternalDtime $externalDuty
     * @ORM\OneToOne(targetEntity="FdtrExternalDtime", mappedBy="monthlyReport")
     **/
    private $externalDuty;

    /**
     * @var integer
     *
     * @ORM\Column(name="duty_minutes", type="integer")
     */
    private $dutyMinutes;

    /**
     * @ORM\OneToMany(targetEntity="FdtrExternalDtimeBreakup", mappedBy="fdtrMonthlyReportId",orphanRemoval=true))
     **/
    private $externalDtimeBreakup;

    /**
     * Constructor
     */
    public function __construct(\DateTIme $month) {
        $this->concernedMonth = $month;
        $this->rows = new ArrayCollection;
        $this->externalDtimeBreakup = new ArrayCollection;
    }

   

    /**
     * Gets the value of concernedMonth.
     *
     * @return \Datetime
     */
    public function getConcernedMonth()
    {
        return $this->concernedMonth;
    }

    /**
     * Sets the value of concernedMonth.
     *
     * @param \Datetime $concernedMonth the concerned month
     *
     * @return self
     */
    public function setConcernedMonth(\Datetime $concernedMonth)
    {
        $this->concernedMonth = $concernedMonth;

        return $this;
    }


    /**
     * Gets the }).
     *
     * @return Users
     */
    public function getFdtrUser()
    {
        return $this->fdtrUser;
    }

    /**
     * Sets the }).
     *
     * @param Users $fdtrUser the user
     *
     * @return self
     */
    public function setFdtrUser(Users $fdtrUser)
    {
        $this->fdtrUser = $fdtrUser;

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
     * Gets the value of rows.
     *
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Gets the value of externalDuty.
     *
     * @return mixed
     */
    public function getExternalDuty()
    {
        return $this->externalDuty;
    }

    /**
     * Gets the value of externalDutyBreakup.
     *
     * @return mixed
     */
    public function getExternalDtimeBreakup()
    {
        return $this->externalDtimeBreakup;
    }

    public function removeExternalDtimeBreakup() {
        $this->externalDtimeBreakup->clear();
    }

    /**
     * Sets the value of externalDuty.
     *
     * @param mixed $externalDuty the external duty
     *
     * @return self
     */
    public function setExternalDuty($externalDuty)
    {
        $this->externalDuty = $externalDuty;

        return $this;
    }



    /**
     * Gets the value of dutyMinutes.
     *
     * @return integer
     */
    public function getDutyMinutes()
    {
        return $this->dutyMinutes;
    }

    /**
     * Sets the value of dutyMinutes.
     *
     * @param integer $dutyMinutes the duty minutes
     *
     * @return self
     */
    public function setDutyMinutes($dutyMinutes)
    {
        $this->dutyMinutes = $dutyMinutes;

        return $this;
    }
}