<?php

namespace App\Easyjet\EwishBundle\Entity;

use App\Easyjet\EwishBundle\Repository\FestivalPeriodDateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="ewish_festival_period_date")
 * @ORM\Entity(repositoryClass=FestivalPeriodDateRepository::class)
 */
class FestivalPeriodDate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="current_year", type="string", length="250", nullable=true)
     */
    private $currentYear;

    /**
     * @ORM\Column(name="next_year", type="string", length="250", nullable=true)
     */
    private $nextYear;

    /**
     * @ORM\Column(name="start_date", type="date")
     */
    private $startDate;

     /**
     * @ORM\Column(name="end_date", type="date")
     */
    private $endDate;

     /**
     * @ORM\Column(name="current_year_jan_date", type="date")
     */
    private $currentYearJanDate;


    /**
     * @ORM\Column(name="updated_on", type="datetime")
     */
    private $updatedOn;

   


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurrentYear(): ?string
    {
        return $this->currentYear;
    }

    public function setCurrentYear(string $currentYear): self
    {
        $this->currentYear = $currentYear;

        return $this;
    }

    public function getNextYear(): ?string
    {
        return $this->nextYear;
    }

    public function setNextYear( string $nextYear): self
    {
        $this->nextYear = $nextYear;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }
    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getCurrentYearJanDate(): ?\DateTimeInterface
    {
        return $this->currentYearJanDate;
    }

    public function setCurrentYearJanDate(?\DateTimeInterface $currentYearJanDate): self
    {
        $this->startDate = $currentYearJanDate;

        return $this;
    }
    public function getUpdatedOn(): ?\DateTimeInterface
    {
        return $this->updatedOn;
    }

    public function setUpdatedOn(?\DateTimeInterface $updatedOn): self
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }
   

   
}
