<?php
namespace App\Easyjet\HrisBundle\Classes\ProConcept;


/**
*  Class IndINterfacePerson
*/
class IndInterfacePerson
{
    private static $headerIds = null;
    private static $csvRow = null;
    private static $ociConnection = null;
    private static $insertSeqId = null;
    private static $jobTitlesArray = null;
    private static $civilStatusArray = null;

    private static $columnsError = array();

    private $empno = null;
    private $perLastName = null;
    private $perFirstName = null;
    private $empMaidenName = null;
    private $perHomestreet = null;
    private $homepostalcode = null;
    private $startDate = null;
    private $homecity = null;
    private $homestate = null;
    private $homecountry = null;
    private $perEmail = null;
    private $perHomePhone = null;
    private $perHome2Phone = null;
    private $cCivilStatus = null;
    private $empCivilStatusSince = null;
    private $empSocialSecurityno2 = null;
    private $perGender = null;
    private $perBirthDate = null;
    private $dicNationalityID = null;
    private $empBirthPlace = null;
    private $empStatus = null;
    private $dicHrmEmpTypeID = null;
    private $dicWorkregionID = null;
    private $finAccountNumber = null;
    private $finClearing = null;
    private $spouseName = null;
    private $spouseFirstName = null;
    private $spouseDicNationalityID = null;
    private $spouseGender = null;
    private $perActivityRate = null;
    private $indNbrLangue = null;

    private $costCenter;
    private $costCenterNumber;
    private $insertSeq;

    private static $ignoreError;

    private $children = array();

    private static function oci_real_escape_string($string) {
        return str_replace("'", "''", $string);
    }

    public static function connect()
    {
        require_once("/etc/auth/oracle.php");
        
        if (!self::$ociConnection) {
            self::$ociConnection = oci_connect(ORACLE_LOGIN, ORACLE_PASSWORD, ORACLE_HOST, "UTF8");
            if (!self::$ociConnection)
            {
                throw new \Exception("Oracle connexion failed ...");
            }

            $sql = "ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS'";
            $stmt = oci_parse(self::$ociConnection, $sql);
            oci_execute($stmt, OCI_NO_AUTO_COMMIT);

            try {

                $sql = "BEGIN C_EASYJET.truncate_iipv2; END;";
                $stmt = @oci_parse(self::$ociConnection, $sql);
                $return = @oci_execute($stmt, OCI_NO_AUTO_COMMIT);
                $e = oci_error($stmt);
                if (!empty($e)) {
                    throw new \Exception(sprintf("An error occured during import : %s. \nThe request was the following : \n%s", $e['message'], $sql));
                }

                $sql = "SELECT MAX(INSERT_SEQ) AS MAX_INSERT FROM " . ORACLE_INSTANCE . "IND_INTERFACE_PERSON_V2";
                $stmt = @oci_parse(self::$ociConnection, $sql);
                $return = @oci_execute($stmt, OCI_NO_AUTO_COMMIT);
                $row = oci_fetch_array($stmt);

                self::$insertSeqId = $row['MAX_INSERT'];
                self::$insertSeqId++;

                $e = oci_error($stmt);
                if (!empty($e)) {
                    throw new \Exception(sprintf("An error occured during import : %s. \nThe request was the following : \n%s", $e['message'], $sql));
                }
            } catch (\Exception $e) {
                $error = new \Exception($e->getMessage());
                @oci_rollback(self::$ociConnection);
                throw $error;
            };

        }

        return self::$ociConnection;
    }

    private static function convertDateFrToEn($dateFr)
    {
        $array = explode("/", $dateFr);
        if (count($array) != 3) {
            return "0000-00-00";
        }
        return $array[2] . "-" . $array[1] . "-" . $array[0];
    }

    public static function fromEjint096($em, $csvRow, $headerIds, $ignoreError = false)
    {
        self::$ignoreError = $ignoreError;
        if (!self::$jobTitlesArray) {
            self::$jobTitlesArray = $em->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096JobTitle")->findAllAsArray();
        }

        if (!self::$civilStatusArray) {
            self::$civilStatusArray = $em->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096CivilStatus")->findAllAsArray();
        }

        self::$csvRow = $csvRow;
        self::$headerIds = $headerIds;
        $person = new self;

        printf("Parsing data from empno '%s'\n",self::getData("Employee Details Employee No"));

        $sgwiCivilStatus = self::getData("Employee Payroll Details Marital Status");

        if (!empty($sgwiCivilStatus) && !isset(self::$civilStatusArray[strtolower($sgwiCivilStatus)])) {
            throw new \Exception("Unknown civil status : $sgwiCivilStatus");
        } else {
            if (empty($sgwiCivilStatus)) {
                $sgwiCivilStatus = null;
            } else {
                // Based on the correspondances table :
                // Cnc                   -> Cnc
                // Dec                   -> Dec
                // Div                   -> Div
                // Divorced              -> Div
                // Mar                   -> Mar
                // Married               -> Mar
                // Pab                   -> Pab
                // Partnership Dissolved -> Pdi
                // Pde                   -> Pde
                // Pdi                   -> Pdi
                // Pen                   -> Pen
                // Registered Partner    -> Pen
                // Sep                   -> Sep
                // Single                -> Cel
                // Veu                   -> Veu
                // Widowed               -> Veu

                $sgwiCivilStatus = self::$civilStatusArray[strtolower($sgwiCivilStatus)];
            }
        }



        $person->setEmpno(self::getData("Employee Details Employee No"));
        $person->setPerLastName(self::getData("Employee Details Surname"));
        $person->setPerFirstName(self::getData("Employee Details Forenames"));
        $person->setEmpMaidenName(self::getData("Employee Payroll Details Maiden Name"));
        $person->setPerHomestreet(trim(self::getData("Employee Address Line 1") . " " . self::getData("Employee Address Line 2") . " " . self::getData("Employee Address Line 3")));
        $person->setHomepostalcode(self::getData("Employee Address Post/Zip Code"));
        $person->setHomecity(self::getData("Employee Address Town"));
        $person->setHomestate(self::getData("Employee Address District"));
        $person->setHomecountry(self::getData("Employee Address Country"));
        $person->setPerEmail(self::getData("Employee Details Email"));
        $person->setPerHomePhone(self::getData("Employee Payroll Details TelNumber"));
        $person->setPerHome2Phone(null);
        $person->setCivilStatus($sgwiCivilStatus);
        $person->setEmpCivilStatusSince(self::getData("Employee Payroll Details Date Of Marital Status"));
        $person->setEmpSocialSecurityno2(self::getData("Employee Payroll Details AVS/OASI Number"));
        $person->setPerGender(self::getData("Employee Details Gender"));
        $person->setPerBirthDate(self::getData("Employee Details Date Of Birth"));
        $person->setDicNationalityID(self::getData("Employee Payroll Details Nationality"));  // To be checked
        $person->setEmpBirthPlace(self::getData("Employee Payroll Details Place of Birth"));  // To be checked
        //$person->setEmpStatus(self::getData("Employee Details Employee status"));
        $person->setEmpStatus("ACT");

        $person->setStartDate(self::getData("Employee Details EPA Payroll Start Date"));

        $jobTitle = self::getData("Employee Payroll Details Job Family Category");


        $person->setDicWorkregionID(self::getData("Employee Payroll Details Place of Work")); // To be checked
        $person->setFinAccountNumber(self::getData("Bank Account Details IBAN"));
        $person->setFinClearing(self::getData("Bank Account Details Intermediary Bank Code"));
        $person->setSpouseName(self::getData("Employee Payroll Details Spouse Last Name"));
        $person->setSpouseFirstName(self::getData("Employee Payroll Details Spouse First name"));
        $person->setSpouseDicNationalityID(self::getData("Employee Payroll Details Spouse National ID"));
        $person->setSpouseGender(self::getData("Employee Payroll Details Spouse Gender"));
        $person->setPerActivityRate(self::getData("Employee Payroll Details FTE"));
        //$person->setIndNbrLangue(self::getData("Employee Payroll Details Number of languages"));
        $person->setIndNbrLangue(0);
        $person->setCostCenter(null);
        $person->setCostCenterNumber((int)self::getData("Employee Payroll Details Cost Centre"));



        if (self::getData("Employee Payroll Details Child 1 Surname")) {
            $children1 = new IndInterfaceChildren();
            $children1->setChildName(self::getData("Employee Payroll Details Child 1 Surname"));
            $children1->setChildFirstName(self::getData("Employee Payroll Details Child 1 Forename"));
            $children1->setChildBirthDate(self::getData("Employee Payroll Details Child 1 Date of Birth"));
            $children1->setChildGender(self::getData("Employee Payroll Details Child 1 Gender"));
            $children1->setChildID(self::getData("Employee Payroll Details Child 1 AVS"));
            $person->addChild($children1);
        }

        if (self::getData("Employee Payroll Details Child 2 Surname")) {
            $children2 = new IndInterfaceChildren();
            $children2->setChildName(self::getData("Employee Payroll Details Child 2 Surname"));
            $children2->setChildFirstName(self::getData("Employee Payroll Details Child 2 Forename"));
            $children2->setChildBirthDate(self::getData("Employee Payroll Details Child 2 Date of Birth"));
            $children2->setChildGender(self::getData("Employee Payroll Details Child 2 Gender"));
            $children2->setChildID(self::getData("Employee Payroll Details Child 2 AVS"));
            $person->addChild($children2);
        }

        if (self::getData("Employee Payroll Details Child 3 Surname")) {
            $children3 = new IndInterfaceChildren();
            $children3->setChildName(self::getData("Employee Payroll Details Child 3 Surname"));
            $children3->setChildFirstName(self::getData("Employee Payroll Details Child 3 Forename"));
            $children3->setChildBirthDate(self::getData("Employee Payroll Details Child 3 Date of Birth"));
            $children3->setChildGender(self::getData("Employee Payroll Details Child 3 Gender"));
            $children3->setChildID(self::getData("Employee Payroll Details Child 3 AVS"));
            $person->addChild($children3);
        }

        if (self::getData("Employee Payroll Details Child 4 Child Surname")) {
            $children4 = new IndInterfaceChildren();
            $children4->setChildName(self::getData("Employee Payroll Details Child 4 Child Surname"));
            $children4->setChildFirstName(self::getData("Employee Payroll Details Child 4 Child Forename"));
            $children4->setChildBirthDate(self::getData("Employee Payroll Details Child 4 Date of Birth"));
            $children4->setChildGender(self::getData("Employee Payroll Details Child 4 Gender"));
            $children4->setChildID(self::getData("Employee Payroll Details Child 4 AVS"));
            $person->addChild($children4);
        }

        if (self::getData("Employee Payroll Details Child 5 Surname")) {
            $children5 = new IndInterfaceChildren();
            $children5->setChildName(self::getData("Employee Payroll Details Child 5 Surname"));
            $children5->setChildFirstName(self::getData("Employee Payroll Details Child 5 Forename"));
            $children5->setChildBirthDate(self::getData("Employee Payroll Details Child 5 Date of Birth"));
            $children5->setChildGender(self::getData("Employee Payroll Details Child 5 Gender"));
            $children5->setChildID(self::getData("Employee Payroll Details Child 5 AVS"));
            $person->addChild($children5);
        }

        if (self::getData("Employee Payroll Details Child 6 Surname")) {
            $children6 = new IndInterfaceChildren();
            $children6->setChildName(self::getData("Employee Payroll Details Child 6 Surname"));
            $children6->setChildFirstName(self::getData("Employee Payroll Details Child 6 Forename"));
            $children6->setChildBirthDate(self::getData("Employee Payroll Details Child 6 Date of Birth"));
            $children6->setChildGender(self::getData("Employee Payroll Details Child 6 Gender"));
            $children6->setChildID(self::getData("Employee Payroll Details Child 6 AVS"));
            $person->addChild($children6);
        }

        if (!self::$ignoreError) {
            if (count(self::$columnsError)) {
                throw new \Exception(implode("\n", self::$columnsError));
            }
        }

        // Based on correspondance table :
        // ---------------------------------
        // NED                       -> admin
        // AMB                       -> admin
        // ELT                       -> admin
        // HMP                       -> admin
        // MP                        -> admin
        // TLS                       -> admin
        // CA                        -> admin
        // Graduate                  -> admin
        // EP                        -> admin
        // Captain                   -> pilot
        // SFO                       -> pilot
        // FO                        -> pilot
        // SO                        -> pilot
        // Cabin_Crew_Line_Trainer   -> cabin
        // Cabin_Manager             -> cabin
        // Cabin_Crew                -> cabin
        // easyJet_Management_Levels -> admin
        // Other                     -> admin
        // Cabin                     -> cabin
        // Pilot                     -> pilot

        $employeeType = empty(self::$jobTitlesArray[$jobTitle]) ? null : self::$jobTitlesArray[$jobTitle];
        $person->setDicHrmEmpTypeID($employeeType); // To be checked
        if (!$employeeType) {
            throw new \Exception(sprintf("Unable to parse employee type for employee '%s' with job title '%s'", $person->empno, $jobTitle));
        }

        return $person;
    }

    public function addChild($children)
    {
        $this->children[] = $children;
        $children->setParent($this);
    }

    private static function getData($fieldName)
    {
        if (!isset(self::$headerIds[$fieldName])) {
            self::$columnsError[] = sprintf("The '%s' row does not exist in the current row", $fieldName);
            return '';
        }

        if (count(self::$csvRow) != count(self::$headerIds)) {
            self::$columnsError[] = sprintf("The number of column is incorrect for the current data");
            return '';
        }

        return self::$csvRow[self::$headerIds[$fieldName]];
    }

    public function setEmpno($empno)
    {
        $this->empno = $empno;
        return $this;
    }

    public function getEmpno()
    {
        return $this->empno;
    }

    public function persist()
    {
        self::connect();

        $sql = "INSERT INTO " . ORACLE_INSTANCE . "IND_INTERFACE_PERSON_V2 (
                EMP_NUMBER,
                NEW_EMP_NO,
                PER_LAST_NAME,
                PER_FIRST_NAME,
                EMP_MAIDEN_NAME,
                PER_HOMESTREET,
                HOMEPOSTALCODE,
                HOMECITY,
                HOMESTATE,
                HOMECOUNTRY,
                PER_EMAIL,
                PER_HOME_PHONE,
                PER_HOME2_PHONE,
                C_CIVIL_STATUS,
                EMP_CIVIL_STATUS_SINCE,
                EMP_SOCIAL_SECURITYNO2,
                PER_GENDER,
                PER_BIRTH_DATE,
                DIC_NATIONALITY_ID,
                EMP_BIRTH_PLACE,
                EMP_STATUS,
                DIC_HRM_EMP_TYPE_ID,
                DIC_WORKREGION_ID,
                FIN_ACCOUNT_NUMBER,
                FIN_CLEARING,
                SPOUSE_NAME,
                SPOUSE_FIRST_NAME,
                SPOUSE_DIC_NATIONALITY_ID,
                SPOUSE_GENDER,
                PER_ACTIVITY_RATE,
                IND_NBR_LANGUE,
                COSTCENTER_NUMBER,
                INSERT_SEQ)
            VALUES (
                '" . self::oci_real_escape_string($this->empno) . "',
                '" . self::oci_real_escape_string($this->empno) . "',
                '" . self::oci_real_escape_string($this->perLastName) . "',
                '" . self::oci_real_escape_string($this->perFirstName) . "',
                '" . self::oci_real_escape_string($this->empMaidenName) . "',
                '" . self::oci_real_escape_string($this->perHomestreet) . "',
                '" . self::oci_real_escape_string($this->homepostalcode) . "',
                '" . self::oci_real_escape_string($this->homecity) . "',
                '" . self::oci_real_escape_string($this->homestate) . "',
                '" . self::oci_real_escape_string($this->homecountry) . "',
                '" . self::oci_real_escape_string($this->perEmail) . "',
                '" . self::oci_real_escape_string($this->perHomePhone) . "',
                '" . self::oci_real_escape_string($this->perHome2Phone) . "',
                '" . self::oci_real_escape_string($this->cCivilStatus) . "',
                " . ($this->empCivilStatusSince == "" ? "NULL" : "'" . self::convertDateFrToEn($this->empCivilStatusSince) . "'") . ",
                '" . self::oci_real_escape_string($this->empSocialSecurityno2) . "',
                '" . self::oci_real_escape_string($this->perGender) . "',
                " . ($this->perBirthDate == "" ? "NULL" : "'" . self::convertDateFrToEn($this->perBirthDate) . "'") . ",
                '" . self::oci_real_escape_string($this->dicNationalityID) . "',
                '" . self::oci_real_escape_string($this->empBirthPlace) . "',
                '" . self::oci_real_escape_string($this->empStatus) . "',
                '" . self::oci_real_escape_string($this->dicHrmEmpTypeID) . "',
                '" . self::oci_real_escape_string($this->dicWorkregionID) . "',
                '" . self::oci_real_escape_string($this->finAccountNumber) . "',
                '" . self::oci_real_escape_string($this->finClearing) . "',
                '" . self::oci_real_escape_string($this->spouseName) . "',
                '" . self::oci_real_escape_string($this->spouseFirstName) . "',
                '" . self::oci_real_escape_string($this->spouseDicNationalityID) . "',
                '" . self::oci_real_escape_string($this->spouseGender) . "',
                '" . self::oci_real_escape_string($this->perActivityRate) . "',
                '" . self::oci_real_escape_string($this->indNbrLangue) . "',
                '" . self::oci_real_escape_string($this->costCenterNumber) . "',
                '" . (int)self::$insertSeqId . "'
            )";

        try {

            $stmt = @oci_parse(self::$ociConnection, $sql);
            $return = @oci_execute($stmt, OCI_NO_AUTO_COMMIT);

            $e = oci_error($stmt);
            if (!empty($e)) {
                throw new \Exception(sprintf("An error occured during import : %s. \nThe request was the following : \n%s", $e['message'], $sql));
            }
        } catch (\Exception $e) {
            $error = new \Exception($e->getMessage());
            @oci_rollback(self::$ociConnection);
            throw $error;
        };


        try {
            // Insertion de la start date
            $sql = "SELECT MAX(INSERT_SEQ) AS MAX_INSERT FROM " . ORACLE_INSTANCE . "IND_INTERFACE_INOUT";
            $stmt = @oci_parse(self::$ociConnection, $sql);
            $return = @oci_execute($stmt, OCI_NO_AUTO_COMMIT);

            $e = oci_error($stmt);
            if (!empty($e)) {
                throw new \Exception(sprintf("An error occured during import : %s. \nThe request was the following : \n%s", $e['message'], $sql));
            }

            $row = oci_fetch_array($stmt);

            $sql = "SELECT MAX(INO_ID) AS MAX_INO_ID FROM " . ORACLE_INSTANCE . "IND_INTERFACE_INOUT WHERE EMP_NUMBER='" . $this->empno . "' AND NEW_EMP_NO='" . $this->empno . "'";
            $stmt = @oci_parse(self::$ociConnection, $sql);
            $return = @oci_execute($stmt, OCI_NO_AUTO_COMMIT);

            $e = oci_error($stmt);
            if (!empty($e)) {
                throw new \Exception(sprintf("An error occured during import : %s. \nThe request was the following : \n%s", $e['message'], $sql));
            }

            $row2 = oci_fetch_array($stmt);

            if (!(int) $row2['MAX_INO_ID']) {
                $sql = "SELECT MAX(INO_ID) AS MAX_INO_ID FROM " . ORACLE_INSTANCE . "IND_INTERFACE_INOUT";
                $stmt = @oci_parse(self::$ociConnection, $sql);
                $return = @oci_execute($stmt, OCI_NO_AUTO_COMMIT);

                $e = oci_error($stmt);
                if (!empty($e)) {
                    throw new \Exception(sprintf("An error occured during import : %s. \nThe request was the following : \n%s", $e['message'], $sql));
                }
                $row2 = oci_fetch_array($stmt);
                $row2['MAX_INO_ID']++;
            }

            $sql = "INSERT INTO " . ORACLE_INSTANCE . "IND_INTERFACE_INOUT (
                    INO_ID,
                    EMP_NUMBER,
                    NEW_EMP_NO,
                    INO_IN,
                    INO_OUT,
                    INSERT_SEQ)
                VALUES (
                    '" . $row2['MAX_INO_ID'] . "',
                    '" . $this->empno . "',
                    '" . $this->empno . "',
                    '" . self::convertDateFrToEn($this->startDate) . "',
                    NULL,
                    '" . ($row['MAX_INSERT'] + 1) . "')";
            $stmt = @oci_parse(self::$ociConnection, $sql);
            $return = @oci_execute($stmt, OCI_NO_AUTO_COMMIT);

            $e = oci_error($stmt);
            if (!empty($e)) {
                throw new \Exception(sprintf("An error occured during import : %s. \nThe request was the following : \n%s", $e['message'], $sql));
            }

        } catch(\Exception $e) {
            $error = new \Exception($e->getMessage());
            @oci_rollback(self::$ociConnection);
            throw $error;
        }


        foreach ($this->children as $currentChild) {
            $currentChild->persist(self::$ociConnection);
        }

        self::$insertSeqId++;
    }

    public static function commit()
    {
        oci_commit(self::$ociConnection);
    }


    /**
     * Gets the value of perLastName.
     *
     * @return mixed
     */
    public function getPerLastName()
    {
        return $this->perLastName;
    }

    /**
     * Sets the value of perLastName.
     *
     * @param mixed $perLastName the per last name
     *
     * @return self
     */
    public function setPerLastName($perLastName)
    {
        $this->perLastName = $perLastName;

        return $this;
    }

    /**
     * Gets the value of perFirstName.
     *
     * @return mixed
     */
    public function getPerFirstName()
    {
        return $this->perFirstName;
    }

    /**
     * Sets the value of perFirstName.
     *
     * @param mixed $perFirstName the per first name
     *
     * @return self
     */
    public function setPerFirstName($perFirstName)
    {
        $this->perFirstName = $perFirstName;

        return $this;
    }

    /**
     * Gets the value of empMaidenName.
     *
     * @return mixed
     */
    public function getEmpMaidenName()
    {
        return $this->empMaidenName;
    }

    /**
     * Sets the value of empMaidenName.
     *
     * @param mixed $empMaidenName the emp maiden name
     *
     * @return self
     */
    public function setEmpMaidenName($empMaidenName)
    {
        $this->empMaidenName = $empMaidenName;

        return $this;
    }

    /**
     * Gets the value of perHomestreet.
     *
     * @return mixed
     */
    public function getPerHomestreet()
    {
        return $this->perHomestreet;
    }

    /**
     * Sets the value of perHomestreet.
     *
     * @param mixed $perHomestreet the per homestreet
     *
     * @return self
     */
    public function setPerHomestreet($perHomestreet)
    {
        $this->perHomestreet = $perHomestreet;

        return $this;
    }

    /**
     * Gets the value of homepostalcode.
     *
     * @return mixed
     */
    public function getHomepostalcode()
    {
        return $this->homepostalcode;
    }

    /**
     * Sets the value of homepostalcode.
     *
     * @param mixed $homepostalcode the homepostalcode
     *
     * @return self
     */
    public function setHomepostalcode($homepostalcode)
    {
        $this->homepostalcode = $homepostalcode;

        return $this;
    }

    /**
     * Gets the value of homecity.
     *
     * @return mixed
     */
    public function getHomecity()
    {
        return $this->homecity;
    }

    /**
     * Sets the value of homecity.
     *
     * @param mixed $homecity the homecity
     *
     * @return self
     */
    public function setHomecity($homecity)
    {
        $this->homecity = $homecity;

        return $this;
    }

    /**
     * Gets the value of homestate.
     *
     * @return mixed
     */
    public function getHomestate()
    {
        return $this->homestate;
    }

    /**
     * Sets the value of homestate.
     *
     * @param mixed $homestate the homestate
     *
     * @return self
     */
    public function setHomestate($homestate)
    {
        $this->homestate = $homestate;

        return $this;
    }

    /**
     * Gets the value of homecountry.
     *
     * @return mixed
     */
    public function getHomecountry()
    {
        return $this->homecountry;
    }

    /**
     * Sets the value of homecountry.
     *
     * @param mixed $homecountry the homecountry
     *
     * @return self
     */
    public function setHomecountry($homecountry)
    {
        $this->homecountry = $homecountry;

        return $this;
    }

    /**
     * Gets the value of perEmail.
     *
     * @return mixed
     */
    public function getPerEmail()
    {
        return $this->perEmail;
    }

    /**
     * Sets the value of perEmail.
     *
     * @param mixed $perEmail the per email
     *
     * @return self
     */
    public function setPerEmail($perEmail)
    {
        $this->perEmail = $perEmail;

        return $this;
    }

    /**
     * Gets the value of perHomePhone.
     *
     * @return mixed
     */
    public function getPerHomePhone()
    {
        return $this->perHomePhone;
    }

    /**
     * Sets the value of perHomePhone.
     *
     * @param mixed $perHomePhone the per home phone
     *
     * @return self
     */
    public function setPerHomePhone($perHomePhone)
    {
        $this->perHomePhone = $perHomePhone;

        return $this;
    }

    /**
     * Gets the value of perHome2Phone.
     *
     * @return mixed
     */
    public function getPerHome2Phone()
    {
        return $this->perHome2Phone;
    }

    /**
     * Sets the value of perHome2Phone.
     *
     * @param mixed $perHome2Phone the per home2 phone
     *
     * @return self
     */
    public function setPerHome2Phone($perHome2Phone)
    {
        $this->perHome2Phone = $perHome2Phone;

        return $this;
    }

    /**
     * Gets the value of cCivilStatus.
     *
     * @return mixed
     */
    public function getCivilStatus()
    {
        return $this->cCivilStatus;
    }

    /**
     * Sets the value of cCivilStatus.
     *
     * @param mixed $cCivilStatus the c civil status
     *
     * @return self
     */
    public function setCivilStatus($cCivilStatus)
    {
        $this->cCivilStatus = $cCivilStatus;

        return $this;
    }

    /**
     * Gets the value of empCivilStatusSince.
     *
     * @return mixed
     */
    public function getEmpCivilStatusSince()
    {
        return $this->empCivilStatusSince;
    }

    /**
     * Sets the value of empCivilStatusSince.
     *
     * @param mixed $empCivilStatusSince the emp civil status since
     *
     * @return self
     */
    public function setEmpCivilStatusSince($empCivilStatusSince)
    {
        $this->empCivilStatusSince = $empCivilStatusSince;

        return $this;
    }

    /**
     * Gets the value of empSocialSecurityno2.
     *
     * @return mixed
     */
    public function getEmpSocialSecurityno2()
    {
        return $this->empSocialSecurityno2;
    }

    /**
     * Sets the value of empSocialSecurityno2.
     *
     * @param mixed $empSocialSecurityno2 the emp social securityno2
     *
     * @return self
     */
    public function setEmpSocialSecurityno2($empSocialSecurityno2)
    {

        if (strlen($empSocialSecurityno2) == 0) {
            $this->empSocialSecurityno2 = null;
            return $this;
        }

        if (strlen($empSocialSecurityno2) != 13) {
            throw new \Exception(sprintf("The '%s' AVS number is invalid", $empSocialSecurityno2));
        }

        $count = null;
        $returnValue = preg_replace('/^([0-9]{3})([0-9]{4})([0-9]{4})([0-9]{2})$/', '$1.$2.$3.$4', $empSocialSecurityno2, -1, $count);

        if (!$count) {
            $empSocialSecurityno2 = null;
        } else {
            $empSocialSecurityno2 = $returnValue;
        }
        $this->empSocialSecurityno2 = $empSocialSecurityno2;

        return $this;
    }

    /**
     * Gets the value of perGender.
     *
     * @return mixed
     */
    public function getPerGender()
    {
        return $this->perGender;
    }

    /**
     * Sets the value of perGender.
     *
     * @param mixed $perGender the per gender
     *
     * @return self
     */
    public function setPerGender($perGender)
    {
        $this->perGender = $perGender;

        return $this;
    }

    /**
     * Gets the value of perBirthDate.
     *
     * @return mixed
     */
    public function getPerBirthDate()
    {
        return $this->perBirthDate;
    }

    /**
     * Sets the value of perBirthDate.
     *
     * @param mixed $perBirthDate the per birth date
     *
     * @return self
     */
    public function setPerBirthDate($perBirthDate)
    {
        $this->perBirthDate = $perBirthDate;

        return $this;
    }

    /**
     * Gets the value of dicNationalityID.
     *
     * @return mixed
     */
    public function getDicNationalityID()
    {
        return $this->dicNationalityID;
    }

    /**
     * Sets the value of dicNationalityID.
     *
     * @param mixed $dicNationalityID the dic nationality
     *
     * @return self
     */
    public function setDicNationalityID($dicNationalityID)
    {
        $this->dicNationalityID = $dicNationalityID;

        return $this;
    }

    /**
     * Gets the value of empBirthPlace.
     *
     * @return mixed
     */
    public function getEmpBirthPlace()
    {
        return $this->empBirthPlace;
    }

    /**
     * Sets the value of empBirthPlace.
     *
     * @param mixed $empBirthPlace the emp birth place
     *
     * @return self
     */
    public function setEmpBirthPlace($empBirthPlace)
    {
        $this->empBirthPlace = $empBirthPlace;

        return $this;
    }

    /**
     * Gets the value of empStatus.
     *
     * @return mixed
     */
    public function getEmpStatus()
    {
        return $this->empStatus;
    }

    /**
     * Sets the value of empStatus.
     *
     * @param mixed $empStatus the emp status
     *
     * @return self
     */
    public function setEmpStatus($empStatus)
    {
        $this->empStatus = $empStatus;

        return $this;
    }

    /**
     * Gets the value of dicHrmEmpTypeID.
     *
     * @return mixed
     */
    public function getDicHrmEmpTypeID()
    {
        return $this->dicHrmEmpTypeID;
    }

    /**
     * Sets the value of dicHrmEmpTypeID.
     *
     * @param mixed $dicHrmEmpTypeID the dic hrm emp type
     *
     * @return self
     */
    public function setDicHrmEmpTypeID($dicHrmEmpTypeID)
    {
        $this->dicHrmEmpTypeID = $dicHrmEmpTypeID;

        return $this;
    }

    /**
     * Gets the value of dicWorkregionID.
     *
     * @return mixed
     */
    public function getDicWorkregionID()
    {
        return $this->dicWorkregionID;
    }

    /**
     * Sets the value of dicWorkregionID.
     *
     * @param mixed $dicWorkregionID the dic workregion
     *
     * @return self
     */
    public function setDicWorkregionID($dicWorkregionID)
    {
        $this->dicWorkregionID = $dicWorkregionID;

        return $this;
    }

    /**
     * Gets the value of finAccountNumber.
     *
     * @return mixed
     */
    public function getFinAccountNumber()
    {
        return $this->finAccountNumber;
    }

    /**
     * Sets the value of finAccountNumber.
     *
     * @param mixed $finAccountNumber the fin account number
     *
     * @return self
     */
    public function setFinAccountNumber($finAccountNumber)
    {
        $this->finAccountNumber = $finAccountNumber;

        return $this;
    }

    /**
     * Gets the value of finClearing.
     *
     * @return mixed
     */
    public function getFinClearing()
    {
        return $this->finClearing;
    }

    /**
     * Sets the value of finClearing.
     *
     * @param mixed $finClearing the fin clearing
     *
     * @return self
     */
    public function setFinClearing($finClearing)
    {
        $this->finClearing = $finClearing;

        return $this;
    }

    /**
     * Gets the value of spouseName.
     *
     * @return mixed
     */
    public function getSpouseName()
    {
        return $this->spouseName;
    }

    /**
     * Sets the value of spouseName.
     *
     * @param mixed $spouseName the spouse name
     *
     * @return self
     */
    public function setSpouseName($spouseName)
    {
        $this->spouseName = $spouseName;

        return $this;
    }

    /**
     * Gets the value of spouseFirstName.
     *
     * @return mixed
     */
    public function getSpouseFirstName()
    {
        return $this->spouseFirstName;
    }

    /**
     * Sets the value of spouseFirstName.
     *
     * @param mixed $spouseFirstName the spouse first name
     *
     * @return self
     */
    public function setSpouseFirstName($spouseFirstName)
    {
        $this->spouseFirstName = $spouseFirstName;

        return $this;
    }

    /**
     * Gets the value of spouseDicNationalityID.
     *
     * @return mixed
     */
    public function getSpouseDicNationalityID()
    {
        return $this->spouseDicNationalityID;
    }

    /**
     * Sets the value of spouseDicNationalityID.
     *
     * @param mixed $spouseDicNationalityID the spouse dic nationality
     *
     * @return self
     */
    public function setSpouseDicNationalityID($spouseDicNationalityID)
    {
        $this->spouseDicNationalityID = $spouseDicNationalityID;

        return $this;
    }

    /**
     * Gets the value of spouseGender.
     *
     * @return mixed
     */
    public function getSpouseGender()
    {
        return $this->spouseGender;
    }

    /**
     * Sets the value of spouseGender.
     *
     * @param mixed $spouseGender the spouse gender
     *
     * @return self
     */
    public function setSpouseGender($spouseGender)
    {
        $this->spouseGender = $spouseGender;

        return $this;
    }

    /**
     * Gets the value of perActivityRate.
     *
     * @return mixed
     */
    public function getPerActivityRate()
    {
        return $this->perActivityRate;
    }

    /**
     * Sets the value of perActivityRate.
     *
     * @param mixed $perActivityRate the per activity rate
     *
     * @return self
     */
    public function setPerActivityRate($perActivityRate)
    {
        $this->perActivityRate = $perActivityRate;

        return $this;
    }

    /**
     * Gets the value of indNbrLangue.
     *
     * @return mixed
     */
    public function getIndNbrLangue()
    {
        return $this->indNbrLangue;
    }

    /**
     * Sets the value of indNbrLangue.
     *
     * @param mixed $indNbrLangue the ind nbr langue
     *
     * @return self
     */
    public function setIndNbrLangue($indNbrLangue)
    {
        $this->indNbrLangue = $indNbrLangue;

        return $this;
    }

    /**
     * Gets the value of insertSeq.
     *
     * @return mixed
     */
    public function getInsertSeq()
    {
        return $this->insertSeq;
    }

    /**
     * Sets the value of insertSeq.
     *
     * @param mixed $insertSeq the insert seq
     *
     * @return self
     */
    public function setInsertSeq($insertSeq)
    {
        $this->insertSeq = $insertSeq;

        return $this;
    }

    /**
     * Gets the value of costCenter.
     *
     * @return mixed
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * Sets the value of costCenter.
     *
     * @param mixed $costCenter the cost center
     *
     * @return self
     */
    public function setCostCenter($costCenter)
    {
        $this->costCenter = $costCenter;

        return $this;
    }

    /**
     * Gets the value of costCenterNumber.
     *
     * @return mixed
     */
    public function getCostCenterNumber()
    {
        return $this->costCenterNumber;
    }

    /**
     * Sets the value of costCenterNumber.
     *
     * @param mixed $costCenterNumber the cost center number
     *
     * @return self
     */
    public function setCostCenterNumber($costCenterNumber)
    {
        $this->costCenterNumber = $costCenterNumber;

        return $this;
    }

    /**
     * Gets the value of startDate.
     *
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets the value of startDate.
     *
     * @param mixed $startDate the start date
     *
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }
}
