<?php

namespace App\Easyjet\EpayslipBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CcReport
 *
 * @ORM\Table(name="epayslip_cc_report")
 * @ORM\Entity
 */
class CcReport
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
     * @ORM\Column(name="begin", type="date", nullable=false)
     */
    private $begin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="date", nullable=false)
     */
    private $end;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_cc", type="decimal", nullable=false)
     */
    private $montantCc;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_cc_chf", type="decimal", nullable=false)
     */
    private $montantCcChf;

    /**
     * @var string
     *
     * @ORM\Column(name="contrat", type="string", length=80, nullable=false)
     */
    private $contrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cloture_payroll", type="date", nullable=false)
     */
    private $cloturePayroll;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validation", type="date", nullable=false)
     */
    private $dateValidation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $ccReportUser;

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return CcReport
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
     * Set begin
     *
     * @param \DateTime $begin
     * @return CcReport
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return \DateTime 
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return CcReport
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set montantCc
     *
     * @param float $montantCc
     * @return CcReport
     */
    public function setMontantCc($montantCc)
    {
        $this->montantCc = $montantCc;

        return $this;
    }

    /**
     * Get montantCc
     *
     * @return float 
     */
    public function getMontantCc()
    {
        return $this->montantCc;
    }

    /**
     * Set montantCcChf
     *
     * @param float $montantCcChf
     * @return CcReport
     */
    public function setMontantCcChf($montantCcChf)
    {
        $this->montantCcChf = $montantCcChf;

        return $this;
    }

    /**
     * Get montantCcChf
     *
     * @return float 
     */
    public function getMontantCcChf()
    {
        return $this->montantCcChf;
    }

    /**
     * Set contrat
     *
     * @param string $contrat
     * @return CcReport
     */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return string 
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set cloturePayroll
     *
     * @param \DateTime $cloturePayroll
     * @return CcReport
     */
    public function setCloturePayroll($cloturePayroll)
    {
        $this->cloturePayroll = $cloturePayroll;

        return $this;
    }

    /**
     * Get cloturePayroll
     *
     * @return \DateTime 
     */
    public function getCloturePayroll()
    {
        return $this->cloturePayroll;
    }

    /**
     * Set dateValidation
     *
     * @param \DateTime $dateValidation
     * @return CcReport
     */
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    /**
     * Get dateValidation
     *
     * @return \DateTime 
     */
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * Set incentiveGbp
     *
     * @param float $incentiveGbp
     * @return CcReport
     */
    public function setIncentiveGbp($incentiveGbp)
    {
        $this->incentiveGbp = $incentiveGbp;

        return $this;
    }

    /**
     * Get incentiveGbp
     *
     * @return float 
     */
    public function getIncentiveGbp()
    {
        return $this->incentiveGbp;
    }

    /**
     * Set grandTotalGbp
     *
     * @param float $grandTotalGbp
     * @return CcReport
     */
    public function setGrandTotalGbp($grandTotalGbp)
    {
        $this->grandTotalGbp = $grandTotalGbp;

        return $this;
    }

    /**
     * Get grandTotalGbp
     *
     * @return float 
     */
    public function getGrandTotalGbp()
    {
        return $this->grandTotalGbp;
    }

    /**
     * Set totalComPayGbp
     *
     * @param float $totalComPayGbp
     * @return CcReport
     */
    public function setTotalComPayGbp($totalComPayGbp)
    {
        $this->totalComPayGbp = $totalComPayGbp;

        return $this;
    }

    /**
     * Get totalComPayGbp
     *
     * @return float 
     */
    public function getTotalComPayGbp()
    {
        return $this->totalComPayGbp;
    }

    /**
     * Set totCommPay
     *
     * @param float $totCommPay
     * @return CcReport
     */
    public function setTotCommPay($totCommPay)
    {
        $this->totCommPay = $totCommPay;

        return $this;
    }

    /**
     * Get totCommPay
     *
     * @return float 
     */
    public function getTotCommPay()
    {
        return $this->totCommPay;
    }

    /**
     * Set totBaseIncentivePay
     *
     * @param float $totBaseIncentivePay
     * @return CcReport
     */
    public function setTotBaseIncentivePay($totBaseIncentivePay)
    {
        $this->totBaseIncentivePay = $totBaseIncentivePay;

        return $this;
    }

    /**
     * Get totBaseIncentivePay
     *
     * @return float 
     */
    public function getTotBaseIncentivePay()
    {
        return $this->totBaseIncentivePay;
    }

    /**
     * Set totGrandTotalPay
     *
     * @param float $totGrandTotalPay
     * @return CcReport
     */
    public function setTotGrandTotalPay($totGrandTotalPay)
    {
        $this->totGrandTotalPay = $totGrandTotalPay;

        return $this;
    }

    /**
     * Get totGrandTotalPay
     *
     * @return float 
     */
    public function getTotGrandTotalPay()
    {
        return $this->totGrandTotalPay;
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
     * Gets the ccReportUser.
     *
     * @return User
     */
    public function getCcReportUser()
    {
        return $this->ccReportUser;
    }

    /**
     * Sets the ccReportUser.
     *
     * @param \App\Easyjet\UmanBundle\Entity\Users $ccReportUser the paySlipUser
     *
     * @return self
     */
    public function setCcReportUser(\App\Easyjet\UmanBundle\Entity\Users $ccReportUser)
    {
        $this->ccReportUser = $ccReportUser;

        return $this;
    }
}
