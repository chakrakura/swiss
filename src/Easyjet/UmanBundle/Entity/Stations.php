<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stations
 *
 * @ORM\Table(name="stations")
 * @ORM\Entity(repositoryClass="App\Easyjet\UmanBundle\Repository\StationsRepository")
 */
class Stations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_station", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStation;

    /**
     * @var string
     *
     * @ORM\Column(name="city_name", type="string", length=30, nullable=false)
     */
    private $cityName;

    /**
     * @var string
     *
     * @ORM\Column(name="airport_name", type="string", length=30, nullable=false)
     */
    private $airportName;

    /**
     * @var string
     *
     * @ORM\Column(name="iata_code", type="string", length=3, nullable=false)
     */
    private $iataCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=30, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=30, nullable=true)
     */
    private $countryCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Comments", type="text", nullable=false)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="station_phone", type="string", length=20, nullable=false)
     */
    private $stationPhone;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;



    /**
     * Get idStation
     *
     * @return integer 
     */
    public function getIdStation()
    {
        return $this->idStation;
    }

    /**
     * Set cityName
     *
     * @param string $cityName
     * @return Stations
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    
        return $this;
    }

    /**
     * Get cityName
     *
     * @return string 
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set airportName
     *
     * @param string $airportName
     * @return Stations
     */
    public function setAirportName($airportName)
    {
        $this->airportName = $airportName;
    
        return $this;
    }

    /**
     * Get airportName
     *
     * @return string 
     */
    public function getAirportName()
    {
        return $this->airportName;
    }

    /**
     * Set iataCode
     *
     * @param string $iataCode
     * @return Stations
     */
    public function setIataCode($iataCode)
    {
        $this->iataCode = $iataCode;
    
        return $this;
    }

    /**
     * Get iataCode
     *
     * @return string 
     */
    public function getIataCode()
    {
        return $this->iataCode;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Stations
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Stations
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set stationPhone
     *
     * @param string $stationPhone
     * @return Stations
     */
    public function setStationPhone($stationPhone)
    {
        $this->stationPhone = $stationPhone;
    
        return $this;
    }

    /**
     * Get stationPhone
     *
     * @return string 
     */
    public function getStationPhone()
    {
        return $this->stationPhone;
    }

    /**
     * Gets the value of countryCode.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets the value of countryCode.
     *
     * @param string $countryCode the country code
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }



    public function __toString() {
        return $this->iataCode;
    }

    

    /**
     * Gets the value of countryId.
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Sets the value of countryId.
     *
     * @param integer $countryId the country id
     *
     * @return self
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }
}