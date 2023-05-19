<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * OtpExportData
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="OTP_EXPORT_DATA")
 * @ORM\Entity
 */

class OtpExportData
{
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;    
    
     /**
     * @var string
     *
     * @ORM\Column(name="emp_no", type="string", length=6, nullable=true)
     */
    private $empno;
    
     /**
     * @var string
     *
     * @ORM\Column(name="batch_date", type="string", length=10,nullable=true)
     */
    private $batchDate;
    
        /**
     * @var string
     *
     * @ORM\Column(name="payment_plan", type="string", length=1000, nullable=true)
     */
    private $paymentPlan;
    
         /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string", length=10,nullable=true)
     */
    private $amount; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=5, nullable=true)
     */
    private $currency;
    
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
     * Gets the value of empno.
     *
     * @return string
     */
    public function getEmpno()
    {
        return $this->empno;
    }

    /**
     * Sets the value of empno.
     *
     * @param string $empno the empno
     *
     * @return self
     */
    public function setEmpno($empno)
    {
        $this->empno = $empno;

        return $this;
    }
    
     /**
     * Gets the value of batchDate.
     *
     * @return \string
     */
    public function getBatchDate()
    {
        return $this->batchDate;
    }

    /**
     * Sets the value of batchDate.
     *
     * @param \string $batchDate
     *
     * @return self
     */
    public function setBatchDate($batchDate)
    {
        $this->batchDate = $batchDate;

        return $this;
    }
    
         /**
     * Gets the value of PaymentPlan.
     *
     * @return string
     */
    public function getPaymentPlan()
    {
        return $this->paymentPlan;
    }

    /**
     * Sets the value of PaymentPlan.
     *
     * @param string PaymentPlan
     *
     * @return self
     */
    public function setPaymentPlan($paymentPlan)
    {
        $this->paymentPlan = $paymentPlan;

        return $this;
    }
    
        /**
     * Gets the value of amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets the value of amount.
     *
     * @param string $amount 
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }
    
    /**
     * Gets the value of Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets the value of Currency.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }
}