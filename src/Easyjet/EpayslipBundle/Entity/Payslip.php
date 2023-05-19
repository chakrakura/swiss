<?php

namespace App\Easyjet\EpayslipBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EpayslipPayslip
 *
 * @ORM\Table(name="epayslip_payslip")
 * @ORM\Entity(repositoryClass="App\Easyjet\EpayslipBundle\Repository\PayslipRepository")
 */
class Payslip
{
    /**
     * @var string
     *
     * @ORM\Column(name="month", type="string", length=20, nullable=false)
     */
    private $month;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=20, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $paySlipUser;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="npa", type="string", length=10, nullable=false)
     */
    private $npa;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=200, nullable=false)
     */
    private $groupName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="from", type="date", nullable=false)
     */
    private $from;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to", type="date", nullable=false)
     */
    private $to;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="import_date", type="date", nullable=false)
     */
    private $importDate;

    /**
     * @var float
     *
     * @ORM\Column(name="net_salary", type="decimal", nullable=false)
     */
    private $netSalary;

    /**
     * @var float
     *
     * @ORM\Column(name="brut_salary", type="decimal", nullable=false)
     */
    private $brutSalary;

    /**
     * @var string
     *
     * @ORM\Column(name="avs_number", type="string", length=50, nullable=false)
     */
    private $avsNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="account_number", type="string", length=50, nullable=false)
     */
    private $accountNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=200, nullable=false)
     */
    private $jobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;

    /**
     * @var float
     *
     * @ORM\Column(name="total_deductions", type="decimal", nullable=false)
     */
    private $totalDeductions;

    /**
     * @var float
     *
     * @ORM\Column(name="total_indemnites", type="decimal", nullable=false)
     */
    private $totalIndemnites;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name", type="string", length=50, nullable=false)
     */
    private $bankName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set month
     *
     * @param string $month
     * @return Payslip
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string 
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Payslip
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Payslip
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
     * Set name
     *
     * @param string $name
     * @return Payslip
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Payslip
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set npa
     *
     * @param string $npa
     * @return Payslip
     */
    public function setNpa($npa)
    {
        $this->npa = $npa;

        return $this;
    }

    /**
     * Get npa
     *
     * @return string 
     */
    public function getNpa()
    {
        return $this->npa;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Payslip
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     * @return Payslip
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set from
     *
     * @param \DateTime $from
     * @return Payslip
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return \DateTime 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param \DateTime $to
     * @return Payslip
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return \DateTime 
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set importDate
     *
     * @param \DateTime $importDate
     * @return Payslip
     */
    public function setImportDate($importDate)
    {
        $this->importDate = $importDate;

        return $this;
    }

    /**
     * Get importDate
     *
     * @return \DateTime 
     */
    public function getImportDate()
    {
        return $this->importDate;
    }

    /**
     * Set netSalary
     *
     * @param float $netSalary
     * @return Payslip
     */
    public function setNetSalary($netSalary)
    {
        $this->netSalary = $netSalary;

        return $this;
    }

    /**
     * Get netSalary
     *
     * @return float 
     */
    public function getNetSalary()
    {
        return $this->netSalary;
    }

    /**
     * Set brutSalary
     *
     * @param float $brutSalary
     * @return Payslip
     */
    public function setBrutSalary($brutSalary)
    {
        $this->brutSalary = $brutSalary;

        return $this;
    }

    /**
     * Get brutSalary
     *
     * @return float 
     */
    public function getBrutSalary()
    {
        return $this->brutSalary;
    }

    /**
     * Set avsNumber
     *
     * @param string $avsNumber
     * @return Payslip
     */
    public function setAvsNumber($avsNumber)
    {
        $this->avsNumber = $avsNumber;

        return $this;
    }

    /**
     * Get avsNumber
     *
     * @return string 
     */
    public function getAvsNumber()
    {
        return $this->avsNumber;
    }

    /**
     * Set accountNumber
     *
     * @param string $accountNumber
     * @return Payslip
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string 
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     * @return Payslip
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Payslip
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set totalDeductions
     *
     * @param float $totalDeductions
     * @return Payslip
     */
    public function setTotalDeductions($totalDeductions)
    {
        $this->totalDeductions = $totalDeductions;

        return $this;
    }

    /**
     * Get totalDeductions
     *
     * @return float 
     */
    public function getTotalDeductions()
    {
        return $this->totalDeductions;
    }

    /**
     * Set totalIndemnites
     *
     * @param float $totalIndemnites
     * @return Payslip
     */
    public function setTotalIndemnites($totalIndemnites)
    {
        $this->totalIndemnites = $totalIndemnites;

        return $this;
    }

    /**
     * Get totalIndemnites
     *
     * @return float 
     */
    public function getTotalIndemnites()
    {
        return $this->totalIndemnites;
    }

    /**
     * Set bankName
     *
     * @param string $bankName
     * @return Payslip
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName
     *
     * @return string 
     */
    public function getBankName()
    {
        return $this->bankName;
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
     * Gets the user.
     *
     * @return User
     */
    public function getPaySlipUser()
    {
        return $this->paySlipUser;
    }

    /**
     * Sets the user.
     *
     * @param User $paySlipUser the paySlipUser
     *
     * @return self
     */
    public function setPaySlipUser(\App\Easyjet\UmanBundle\Entity\Users $paySlipUser)
    {
        $this->paySlipUser = $paySlipUser;

        return $this;
    }
}
