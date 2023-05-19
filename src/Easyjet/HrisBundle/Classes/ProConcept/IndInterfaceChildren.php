<?php
namespace App\Easyjet\HrisBundle\Classes\ProConcept;

/**
*  Class IndInterfacePerson
*/
class IndInterfaceChildren
{
    /**
     * Parent
     * @var IndInterfacePerson
     */
    private $parent;


    private $childID = null;
    private $childName = null;
    private $childFirstName = null;
    private $childBirthDate = null;
    private $childGender = null;

    private static function oci_real_escape_string($string) {
        return str_replace("'", "''", $string);
    }

    /**
     * Persisting children
     */
    public function persist($ociConnection)
    {
        $sql = "SELECT MAX(INSERT_SEQ) AS MAX_INSERT_SEQ FROM " . ORACLE_INSTANCE . "IND_INTERFACE_CHILDREN_V2";

        $stmt = @oci_parse($ociConnection, $sql);
        $return = @oci_execute($stmt, OCI_NO_AUTO_COMMIT);
        
        $e = oci_error($stmt);
        if (!empty($e)) {
            throw new \Exception(sprintf("An error occured during import : %s. \nThe request was the following : \n%s", $e['message'], $sql));
        }

        $row = oci_fetch_array($stmt);

        $sql = "INSERT INTO " . ORACLE_INSTANCE . "IND_INTERFACE_CHILDREN_V2 (
                    CHILD_ID,
                    EMP_NUMBER,
                    NEW_EMP_NO,
                    CHILD_NAME,
                    CHILD_FIRST_NAME,
                    CHILD_BIRTH_DATE,
                    CHILD_GENDER,
                    INSERT_SEQ)
                VALUES (
                    '" . self::oci_real_escape_string($this->childID) . "',
                    '" . self::oci_real_escape_string($this->getParent()->getEmpno()) . "',
                    '" . self::oci_real_escape_string($this->getParent()->getEmpno()) . "',
                    '" . self::oci_real_escape_string($this->childName) . "',
                    '" . self::oci_real_escape_string($this->childFirstName). "',
                    " . ($this->childBirthDate == "" ? "NULL" : "'" . self::convertDateFrToEn($this->childBirthDate) . "'") . ",
                    '" . $this->childGender . "',
                    '" . ($row['MAX_INSERT_SEQ'] + 1) . "')";

        try {

            $stmt = @oci_parse($ociConnection, $sql);
            $return = @oci_execute($stmt, OCI_NO_AUTO_COMMIT);

            $e = oci_error($stmt);
            if (!empty($e)) {
                throw new \Exception(sprintf("An error occured during import : %s. \nThe request was the following : \n%s", $e['message'], $sql));
            }
        } catch (\Exception $e) {
            $error = new \Exception($e->getMessage());
            @oci_rollback($ociConnection);
            throw $error;
        };

    }

    private static function convertDateFrToEn($dateFr)
    {
        $array = explode("/", $dateFr);
        if (count($array) != 3) {
            return "0000-00-00";
        }
        return $array[2] . "-" . $array[1] . "-" . $array[0];
    }


    /**
     * Gets the Parent.
     *
     * @return IndInterfacePerson
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets the Parent.
     *
     * @param IndInterfacePerson $parent the parent
     *
     * @return self
     */
    public function setParent(IndInterfacePerson $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Gets the value of childID.
     *
     * @return mixed
     */
    public function getChildID()
    {
        return $this->childID;
    }

    /**
     * Sets the value of childID.
     *
     * @param mixed $childID the child
     *
     * @return self
     */
    public function setChildID($childID)
    {
        $this->childID = $childID;

        return $this;
    }

    /**
     * Gets the value of childName.
     *
     * @return mixed
     */
    public function getChildName()
    {
        return $this->childName;
    }

    /**
     * Sets the value of childName.
     *
     * @param mixed $childName the child name
     *
     * @return self
     */
    public function setChildName($childName)
    {
        $this->childName = $childName;

        return $this;
    }

    /**
     * Gets the value of childFirstName.
     *
     * @return mixed
     */
    public function getChildFirstName()
    {
        return $this->childFirstName;
    }

    /**
     * Sets the value of childFirstName.
     *
     * @param mixed $childFirstName the child first name
     *
     * @return self
     */
    public function setChildFirstName($childFirstName)
    {
        $this->childFirstName = $childFirstName;

        return $this;
    }

    /**
     * Gets the value of childBirthDate.
     *
     * @return mixed
     */
    public function getChildBirthDate()
    {
        return $this->childBirthDate;
    }

    /**
     * Sets the value of childBirthDate.
     *
     * @param mixed $childBirthDate the child birth date
     *
     * @return self
     */
    public function setChildBirthDate($childBirthDate)
    {
        $this->childBirthDate = $childBirthDate;

        return $this;
    }

    /**
     * Gets the value of childGender.
     *
     * @return mixed
     */
    public function getChildGender()
    {
        return $this->childGender;
    }

    /**
     * Sets the value of childGender.
     *
     * @param mixed $childGender the child gender
     *
     * @return self
     */
    public function setChildGender($childGender)
    {
        $this->childGender = $childGender;

        return $this;
    }
}
