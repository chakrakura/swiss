<?php

namespace App\Easyjet\FdtrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FdtrRow
 *
 * @ORM\Table(name="fdtr_parameters")
 * @ORM\Entity(repositoryClass="App\Easyjet\FdtrBundle\Repository\FdtrParametersRepository")
 */

class FdtrParameters
{

    /**
     * @var string
     *
     * @ORM\Column(name="parameter_value", type="text", nullable=false)
     */
    private $parameterValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="parameter_key", type="string", length=20)
     * @ORM\Id
     */
    private $parameterKey;

    public function __construct($key, $value)
    {
        $this->parameterKey = $key;
        $this->parameterValue = $value;
    }


    /**
     * Gets the value of parameterValue.
     *
     * @return string
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }

    /**
     * Sets the value of parameterValue.
     *
     * @param string $parameterValue the parameter value
     *
     * @return self
     */
    public function setParameterValue($parameterValue)
    {
        $this->parameterValue = $parameterValue;

        return $this;
    }

    /**
     * Gets the value of parameterKey.
     *
     * @return integer
     */
    public function getParameterKey()
    {
        return $this->parameterKey;
    }

    /**
     * Sets the value of parameterKey.
     *
     * @param integer $parameterKey the parameter key
     *
     * @return self
     */
    public function setParameterKey($parameterKey)
    {
        $this->parameterKey = $parameterKey;

        return $this;
    }
}