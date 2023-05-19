<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_PROCESSING_CALENDAR")
 * @UniqueEntity("paymentMonth")
 * @ORM\Entity(repositoryClass="App\Easyjet\HrisBundle\Repository\HrisProcessingCalendarRepository")
 */

class HrisProcessingCalendar
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\Type("\DateTimeInterface")
     * @Assert\NotBlank()
     * @ORM\Column(name="payment_month", type="date", nullable=false, unique=true)
     */
    private $paymentMonth;

    /**
     * @var string
     *
     * @Assert\Type("\DateTimeInterface")
     * @Assert\NotBlank()
     * @ORM\Column(name="ejint096_integration_file", type="date", nullable=false)
     */
    private $ejint096IntegrationFile;

    /**
     * @var string
     *
     * @Assert\Type("\DateTimeInterface")
     * @Assert\NotBlank()
     * @ORM\Column(name="ejint083_cem_export", type="date", nullable=false)
     */
    private $ejint083CemExport;

    /**
     * @var string
     *
     * @Assert\Type("\DateTimeInterface")
     * @ORM\Column(name="ejint200_claims_import", type="date", nullable=true)
     */
    private $ejint200ClaimsImport;

    /**
     * @var string
     *
     * @Assert\Type("\DateTimeInterface")
     * @Assert\NotBlank()
     * @ORM\Column(name="ejint201_claims_export", type="date", nullable=false)
     */
    private $ejint201ClaimsExport;

    /**
     * @var string
     *
     * @Assert\Date()     
     * @ORM\Column(name="ejint099_fdtr_import", type="date", nullable=true)
     */
    private $ejint099FdtrImport;

    /**
     * @var string
     *
     * @ORM\Column(name="ejint096_integration_file_satisfied", type="date", nullable=false)
     */
    private $ejint096IntegrationFileSatisfied;

    /**
     * @var string
     *
     * @Assert\Date()
     * @ORM\Column(name="ejint083_cem_export_satisfied", type="date", nullable=false)
     */
    private $ejint083CemExportSatisfied;


    /**
     * @var string
     *
     * @Assert\Date()
     * @ORM\Column(name="ejint200_claims_import_satisfied", type="date", nullable=false)
     */
    private $ejint200ClaimsImportSatisfied;

    /**
     * @var string
     *
     * @Assert\Date()
     * @ORM\Column(name="ejint201_claims_export_satisfied", type="date", nullable=false)
     */
    private $ejint201ClaimsExportSatisfied;
    

    /**
     * @var string
     *
     * @Assert\Date()
     * @ORM\Column(name="ejint099_fdtr_import_satisfied", type="date", nullable=false)
     */
    private $ejint099FdtrImportSatisfied;



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
     * Gets the value of paymentMonth.
     *
     * @return string
     */
    public function getPaymentMonth()
    {
        return $this->paymentMonth;
    }

    /**
     * Sets the value of paymentMonth.
     *
     * @param string $paymentMonth the payment month
     *
     * @return self
     */
    public function setPaymentMonth($paymentMonth)
    {
        $this->paymentMonth = $paymentMonth;

        return $this;
    }

    /**
     * Gets the value of ejint096IntegrationFile.
     *
     * @return string
     */
    public function getEjint096IntegrationFile()
    {
        return $this->ejint096IntegrationFile;
    }

    /**
     * Sets the value of ejint096IntegrationFile.
     *
     * @param string $ejint096IntegrationFile the ejint096 integration file
     *
     * @return self
     */
    public function setEjint096IntegrationFile($ejint096IntegrationFile)
    {
        $this->ejint096IntegrationFile = $ejint096IntegrationFile;

        return $this;
    }

    /**
     * Gets the value of ejint083CemExport.
     *
     * @return string
     */
    public function getEjint083CemExport()
    {
        return $this->ejint083CemExport;
    }

    /**
     * Sets the value of ejint083CemExport.
     *
     * @param string $ejint083CemExport the ejint083 cem export
     *
     * @return self
     */
    public function setEjint083CemExport($ejint083CemExport)
    {
        $this->ejint083CemExport = $ejint083CemExport;

        return $this;
    }


    /**
     * Gets the value of ejint099FdtrImport.
     *
     * @return string
     */
    public function getEjint099FdtrImport()
    {
        return $this->ejint099FdtrImport;
    }

    /**
     * Sets the value of ejint099FdtrImport.
     *
     * @param string $ejint099FdtrImport the ejint099 fdtr import
     *
     * @return self
     */
    public function setEjint099FdtrImport($ejint099FdtrImport)
    {
        $this->ejint099FdtrImport = $ejint099FdtrImport;

        return $this;
    }

    /**
     * Gets the value of ejint096IntegrationFileSatisfied.
     *
     * @return string
     */
    public function getEjint096IntegrationFileSatisfied()
    {
        return $this->ejint096IntegrationFileSatisfied;
    }

    /**
     * Sets the value of ejint096IntegrationFileSatisfied.
     *
     * @param string $ejint096IntegrationFileSatisfied the ejint096 integration file satisfied
     *
     * @return self
     */
    public function setEjint096IntegrationFileSatisfied($ejint096IntegrationFileSatisfied)
    {
        $this->ejint096IntegrationFileSatisfied = $ejint096IntegrationFileSatisfied;

        return $this;
    }

    /**
     * Gets the value of ejint083CemExportSatisfied.
     *
     * @return string
     */
    public function getEjint083CemExportSatisfied()
    {
        return $this->ejint083CemExportSatisfied;
    }

    /**
     * Sets the value of ejint083CemExportSatisfied.
     *
     * @param string $ejint083CemExportSatisfied the ejint083 cem export satisfied
     *
     * @return self
     */
    public function setEjint083CemExportSatisfied($ejint083CemExportSatisfied)
    {
        $this->ejint083CemExportSatisfied = $ejint083CemExportSatisfied;

        return $this;
    }


    /**
     * Gets the value of ejint099FdtrImportSatisfied.
     *
     * @return string
     */
    public function getEjint099FdtrImportSatisfied()
    {
        return $this->ejint099FdtrImportSatisfied;
    }

    /**
     * Sets the value of ejint099FdtrImportSatisfied.
     *
     * @param string $ejint099FdtrImportSatisfied the ejint099 fdtr import satisfied
     *
     * @return self
     */
    public function setEjint099FdtrImportSatisfied($ejint099FdtrImportSatisfied)
    {
        $this->ejint099FdtrImportSatisfied = $ejint099FdtrImportSatisfied;

        return $this;
    }



    /**
     * Gets the value of ejint201ClaimsExport.
     *
     * @return string
     */
    public function getEjint201ClaimsExport()
    {
        return $this->ejint201ClaimsExport;
    }

    /**
     * Sets the value of ejint201ClaimsExport.
     *
     * @param string $ejint201ClaimsExport the ejint201 claims export
     *
     * @return self
     */
    public function setEjint201ClaimsExport($ejint201ClaimsExport)
    {
        $this->ejint201ClaimsExport = $ejint201ClaimsExport;

        return $this;
    }

    /**
     * Gets the value of ejint201ClaimsExportSatisfied.
     *
     * @return string
     */
    public function getEjint201ClaimsExportSatisfied()
    {
        return $this->ejint201ClaimsExportSatisfied;
    }

    /**
     * Sets the value of ejint201ClaimsExportSatisfied.
     *
     * @param string $ejint201ClaimsExportSatisfied the ejint201 claims export satisfied
     *
     * @return self
     */
    public function setEjint201ClaimsExportSatisfied($ejint201ClaimsExportSatisfied)
    {
        $this->ejint201ClaimsExportSatisfied = $ejint201ClaimsExportSatisfied;

        return $this;
    }

    /**
     * Gets the value of ejint200ClaimsImport.
     *
     * @return string
     */
    public function getEjint200ClaimsImport()
    {
        return $this->ejint200ClaimsImport;
    }

    /**
     * Sets the value of ejint200ClaimsImport.
     *
     * @param string $ejint200ClaimsImport the ejint200 claims import
     *
     * @return self
     */
    public function setEjint200ClaimsImport($ejint200ClaimsImport)
    {
        $this->ejint200ClaimsImport = $ejint200ClaimsImport;

        return $this;
    }

    /**
     * Gets the value of ejint200ClaimsImportSatisfied.
     *
     * @return string
     */
    public function getEjint200ClaimsImportSatisfied()
    {
        return $this->ejint200ClaimsImportSatisfied;
    }

    /**
     * Sets the value of ejint200ClaimsImportSatisfied.
     *
     * @param string $ejint200ClaimsImportSatisfied the ejint200 claims import satisfied
     *
     * @return self
     */
    public function setEjint200ClaimsImportSatisfied($ejint200ClaimsImportSatisfied)
    {
        $this->ejint200ClaimsImportSatisfied = $ejint200ClaimsImportSatisfied;

        return $this;
    }
}