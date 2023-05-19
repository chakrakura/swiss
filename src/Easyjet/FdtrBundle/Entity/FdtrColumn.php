<?php

namespace App\Easyjet\FdtrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FdtrRow
 *
 * @ORM\Table(name="fdtr_column")
 * @ORM\Entity
 */

class FdtrColumn
{
    /**
     * @var App\Easyjet\FdtrBundle\Entity\FdtrRow
     *
     * @ORM\ManyToOne(targetEntity="App\Easyjet\FdtrBundle\Entity\FdtrRow", inversedBy="columns")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fdtr_row_id", referencedColumnName="id")
     * })
     */
    private $fdtrRow;

    /**
     * @var int
     *
     * @ORM\Column(name="column_order", type="integer")
     */
    private $order;

    /**
     * @var string
     *
     * @ORM\Column(name="column_name", type="string", length=20, nullable=false)
     */
    private $columnName;

    /**
     * @var string
     *
     * @ORM\Column(name="column_value", type="string", length=250, nullable=false)
     */
    private $columnValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function __construct($columnName, $columnValue)
    {
        $this->columnName = $columnName;
        $this->columnValue = $columnValue;
    }

    

    /**
     * Gets the }).
     *
     * @return App\Easyjet\FdtrBundle\Entity\FdtrRow
     */
    public function getFdtrRow()
    {
        return $this->fdtrRow;
    }

    /**
     * Sets the }).
     *
     * @param App\Easyjet\FdtrBundle\Entity\FdtrRow $fdtrRow the fdtr row
     *
     * @return self
     */
    public function setFdtrRow(\App\Easyjet\FdtrBundle\Entity\FdtrRow $fdtrRow)
    {
        $this->fdtrRow = $fdtrRow;

        return $this;
    }

    /**
     * Gets the value of order.
     *
     * @return order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets the value of order.
     *
     * @param order $order the order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Gets the value of columnName.
     *
     * @return string
     */
    public function getColumnName()
    {
        return $this->columnName;
    }

    /**
     * Sets the value of columnName.
     *
     * @param string $columnName the column name
     *
     * @return self
     */
    public function setColumnName($columnName)
    {
        $this->columnName = $columnName;

        return $this;
    }

    /**
     * Gets the value of columnValue.
     *
     * @return string
     */
    public function getColumnValue()
    {
        return $this->columnValue;
    }

    /**
     * Sets the value of columnValue.
     *
     * @param string $columnValue the column value
     *
     * @return self
     */
    public function setColumnValue($columnValue)
    {
        $this->columnValue = $columnValue;

        return $this;
    }

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
}