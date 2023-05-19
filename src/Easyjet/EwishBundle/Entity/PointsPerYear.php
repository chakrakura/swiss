<?php

namespace App\Easyjet\EwishBundle\Entity;

use App\Easyjet\EwishBundle\Repository\PointsPerYearRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PointsPerYearRepository::class)
 */
class PointsPerYear
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @ORM\Column(name="cabin_points", type="integer")
     */
    private $cabinPoints;

    /**
     * @ORM\Column(name="pilot_points", type="integer")
     */
    private $pilotPoints;

    /**
     * @ORM\Column(name="reseted", type="integer")
     */
    private $reseted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getCabinPoints(): ?int
    {
        return $this->cabinPoints;
    }

    public function setCabinPoints(int $cabinPoints): self
    {
        $this->cabinPoints = $cabinPoints;

        return $this;
    }

    public function getPilotPoints(): ?int
    {
        return $this->pilotPoints;
    }

    public function setPilotPoints(int $pilotPoints): self
    {
        $this->pilotPoints = $pilotPoints;

        return $this;
    }

    public function getReseted(): ?int
    {
        return $this->reseted;
    }

    public function setReseted(int $reseted): self
    {
        $this->reseted = $reseted;

        return $this;
    }
}
