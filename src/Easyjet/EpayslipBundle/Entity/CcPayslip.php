<?php

namespace App\Easyjet\EpayslipBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CcPayslip
 *
 * @ORM\Table(name="epayslip_cc_payslip")
 * @ORM\Entity
 */
class CcPayslip
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="period_start", type="date", nullable=false)
     */
    private $periodStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="period_end", type="date", nullable=false)
     */
    private $periodEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="flight_number", type="string", length=50, nullable=false)
     */
    private $flightNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="flight_date", type="date", nullable=false)
     */
    private $flightDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="barset_number", type="integer", nullable=false)
     */
    private $barsetNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="cash_bag_nb", type="integer", nullable=false)
     */
    private $cashBagNb;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_crews", type="integer", nullable=false)
     */
    private $nbCrews;

    /**
     * @var float
     *
     * @ORM\Column(name="transfer_sales", type="decimal", nullable=false)
     */
    private $transferSales;

    /**
     * @var float
     *
     * @ORM\Column(name="epos_shop_sales", type="decimal", nullable=false)
     */
    private $eposShopSales;

    /**
     * @var float
     *
     * @ORM\Column(name="cash_ex_tr_sales", type="decimal", nullable=false)
     */
    private $cashExTrSales;

    /**
     * @var float
     *
     * @ORM\Column(name="trans_gross_com", type="decimal", nullable=false)
     */
    private $transGrossCom;

    /**
     * @var float
     *
     * @ORM\Column(name="cash_gross_com", type="decimal", nullable=false)
     */
    private $cashGrossCom;

    /**
     * @var float
     *
     * @ORM\Column(name="discr_crew", type="decimal", nullable=false)
     */
    private $discrCrew;

    /**
     * @var float
     *
     * @ORM\Column(name="tot_comm_gbp", type="decimal", nullable=false)
     */
    private $totCommGbp;

    /**
     * @var float
     *
     * @ORM\Column(name="tot_comm_eur", type="decimal", nullable=false)
     */
    private $totCommEur;

    /**
     * @var float
     *
     * @ORM\Column(name="tot_comm_chf", type="decimal", nullable=false)
     */
    private $totCommChf;

    /**
     * @var float
     *
     * @ORM\Column(name="gbp_euro_exchange_rate", type="decimal", nullable=false)
     */
    private $gbpEuroExchangeRate;

    /**
     * @var float
     *
     * @ORM\Column(name="euro_chf_exchange_rate", type="decimal", nullable=false)
     */
    private $euroChfExchangeRate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_report", type="integer", nullable=false)
     */
    private $idReport;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return CcPayslip
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set periodStart
     *
     * @param \DateTime $periodStart
     * @return CcPayslip
     */
    public function setPeriodStart($periodStart)
    {
        $this->periodStart = $periodStart;

        return $this;
    }

    /**
     * Get periodStart
     *
     * @return \DateTime 
     */
    public function getPeriodStart()
    {
        return $this->periodStart;
    }

    /**
     * Set periodEnd
     *
     * @param \DateTime $periodEnd
     * @return CcPayslip
     */
    public function setPeriodEnd($periodEnd)
    {
        $this->periodEnd = $periodEnd;

        return $this;
    }

    /**
     * Get periodEnd
     *
     * @return \DateTime 
     */
    public function getPeriodEnd()
    {
        return $this->periodEnd;
    }

    /**
     * Set flightNumber
     *
     * @param string $flightNumber
     * @return CcPayslip
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Get flightNumber
     *
     * @return string 
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Set flightDate
     *
     * @param \DateTime $flightDate
     * @return CcPayslip
     */
    public function setFlightDate($flightDate)
    {
        $this->flightDate = $flightDate;

        return $this;
    }

    /**
     * Get flightDate
     *
     * @return \DateTime 
     */
    public function getFlightDate()
    {
        return $this->flightDate;
    }

    /**
     * Set barsetNumber
     *
     * @param integer $barsetNumber
     * @return CcPayslip
     */
    public function setBarsetNumber($barsetNumber)
    {
        $this->barsetNumber = $barsetNumber;

        return $this;
    }

    /**
     * Get barsetNumber
     *
     * @return integer 
     */
    public function getBarsetNumber()
    {
        return $this->barsetNumber;
    }

    /**
     * Set cashBagNb
     *
     * @param integer $cashBagNb
     * @return CcPayslip
     */
    public function setCashBagNb($cashBagNb)
    {
        $this->cashBagNb = $cashBagNb;

        return $this;
    }

    /**
     * Get cashBagNb
     *
     * @return integer 
     */
    public function getCashBagNb()
    {
        return $this->cashBagNb;
    }

    /**
     * Set nbCrews
     *
     * @param boolean $nbCrews
     * @return CcPayslip
     */
    public function setNbCrews($nbCrews)
    {
        $this->nbCrews = $nbCrews;

        return $this;
    }

    /**
     * Get nbCrews
     *
     * @return boolean 
     */
    public function getNbCrews()
    {
        return $this->nbCrews;
    }

    /**
     * Set transferSales
     *
     * @param float $transferSales
     * @return CcPayslip
     */
    public function setTransferSales($transferSales)
    {
        $this->transferSales = $transferSales;

        return $this;
    }

    /**
     * Get transferSales
     *
     * @return float 
     */
    public function getTransferSales()
    {
        return $this->transferSales;
    }



    /**
     * Set eposShopSales
     *
     * @param float $eposShopSales
     * @return CcPayslip
     */
    public function setEposShopSales($eposShopSales)
    {
        $this->eposShopSales = $eposShopSales;

        return $this;
    }

    /**
     * Get eposShopSales
     *
     * @return float 
     */
    public function getEposShopSales()
    {
        return $this->eposShopSales;
    }

    /**
     * Set cashExTrSales
     *
     * @param float $cashExTrSales
     * @return CcPayslip
     */
    public function setCashExTrSales($cashExTrSales)
    {
        $this->cashExTrSales = $cashExTrSales;

        return $this;
    }

    /**
     * Get cashExTrSales
     *
     * @return float 
     */
    public function getCashExTrSales()
    {
        return $this->cashExTrSales;
    }

    /**
     * Set transGrossCom
     *
     * @param float $transGrossCom
     * @return CcPayslip
     */
    public function setTransGrossCom($transGrossCom)
    {
        $this->transGrossCom = $transGrossCom;

        return $this;
    }

    /**
     * Get transGrossCom
     *
     * @return float 
     */
    public function getTransGrossCom()
    {
        return $this->transGrossCom;
    }

    /**
     * Set cashGrossCom
     *
     * @param float $cashGrossCom
     * @return CcPayslip
     */
    public function setCashGrossCom($cashGrossCom)
    {
        $this->cashGrossCom = $cashGrossCom;

        return $this;
    }

    /**
     * Get cashGrossCom
     *
     * @return float 
     */
    public function getCashGrossCom()
    {
        return $this->cashGrossCom;
    }

    /**
     * Set discrCrew
     *
     * @param float $discrCrew
     * @return CcPayslip
     */
    public function setDiscrCrew($discrCrew)
    {
        $this->discrCrew = $discrCrew;

        return $this;
    }

    /**
     * Get discrCrew
     *
     * @return float 
     */
    public function getDiscrCrew()
    {
        return $this->discrCrew;
    }

    /**
     * Set totCommGbp
     *
     * @param float $totCommGbp
     * @return CcPayslip
     */
    public function setTotCommGbp($totCommGbp)
    {
        $this->totCommGbp = $totCommGbp;

        return $this;
    }

    /**
     * Get totCommGbp
     *
     * @return float 
     */
    public function getTotCommGbp()
    {
        return $this->totCommGbp;
    }

    /**
     * Set totCommEur
     *
     * @param float $totCommEur
     * @return CcPayslip
     */
    public function setTotCommEur($totCommEur)
    {
        $this->totCommEur = $totCommEur;

        return $this;
    }

    /**
     * Get totCommEur
     *
     * @return float 
     */
    public function getTotCommEur()
    {
        return $this->totCommEur;
    }

    /**
     * Set totCommChf
     *
     * @param float $totCommChf
     * @return CcPayslip
     */
    public function setTotCommChf($totCommChf)
    {
        $this->totCommChf = $totCommChf;

        return $this;
    }

    /**
     * Get totCommChf
     *
     * @return float 
     */
    public function getTotCommChf()
    {
        return $this->totCommChf;
    }

    /**
     * Set gbpEuroExchangeRate
     *
     * @param float $gbpEuroExchangeRate
     * @return CcPayslip
     */
    public function setGbpEuroExchangeRate($gbpEuroExchangeRate)
    {
        $this->gbpEuroExchangeRate = $gbpEuroExchangeRate;

        return $this;
    }

    /**
     * Get gbpEuroExchangeRate
     *
     * @return float 
     */
    public function getGbpEuroExchangeRate()
    {
        return $this->gbpEuroExchangeRate;
    }

    /**
     * Set euroChfExchangeRate
     *
     * @param float $euroChfExchangeRate
     * @return CcPayslip
     */
    public function setEuroChfExchangeRate($euroChfExchangeRate)
    {
        $this->euroChfExchangeRate = $euroChfExchangeRate;

        return $this;
    }

    /**
     * Get euroChfExchangeRate
     *
     * @return float 
     */
    public function getEuroChfExchangeRate()
    {
        return $this->euroChfExchangeRate;
    }

    /**
     * Set idReport
     *
     * @param integer $idReport
     * @return CcPayslip
     */
    public function setIdReport($idReport)
    {
        $this->idReport = $idReport;

        return $this;
    }

    /**
     * Get idReport
     *
     * @return integer 
     */
    public function getIdReport()
    {
        return $this->idReport;
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
}
