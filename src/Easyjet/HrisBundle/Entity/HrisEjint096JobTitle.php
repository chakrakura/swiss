<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_JOB_TITLE")
 * @ORM\Entity(repositoryClass="App\Easyjet\HrisBundle\Repository\HrisEjint096JobTitleRepository")
 */

class HrisEjint096JobTitle
{
    /**
     * @var string
     *
     * @ORM\Column(name="job_code", type="string", length=100, nullable=false)
     * @ORM\Id
     */
    private $jobCode;


    /**
     * @var string
     *
     * @ORM\Column(name="employee_type", type="string", length=100, nullable=false)
     */
    private $employeeType;



    /**
     * Gets the value of jobCode.
     *
     * @return string
     */
    public function getJobCode()
    {
        return $this->jobCode;
    }

    /**
     * Sets the value of jobCode.
     *
     * @param string $jobCode the job code
     *
     * @return self
     */
    public function setJobCode($jobCode)
    {
        $this->jobCode = $jobCode;

        return $this;
    }

    /**
     * Gets the value of employeeType.
     *
     * @return string
     */
    public function getEmployeeType()
    {
        return $this->employeeType;
    }

    /**
     * Sets the value of employeeType.
     *
     * @param string $employeeType the employee type
     *
     * @return self
     */
    public function setEmployeeType($employeeType)
    {
        $this->employeeType = $employeeType;

        return $this;
    }
}