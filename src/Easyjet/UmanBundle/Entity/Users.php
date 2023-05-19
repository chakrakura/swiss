<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Easyjet\UmanBundle\Entity\Stations;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="\App\Easyjet\UmanBundle\Repository\UsersRepository")
 */
class Users
{
    const PREFERED_ADDRESS_FIRST = "first";
    const PREFERED_ADDRESS_SECOND = "second";
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=40, nullable=false)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="preferedAddress", type="string", length=12, nullable=false)
     */
    private $preferedAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_name_date", type="date", nullable=false)
     */
    private $changeNameDate;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=20, nullable=false)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_prefere_user", type="string", length=20, nullable=false)
     */
    private $prenomPrefereUser;

    /**
     * @var string
     *
     * @ORM\Column(name="personal_email_user", type="string", length=120, nullable=true)
     */
    private $personalEmailUser;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user", type="string", length=50, nullable=false)
     */
    private $emailUser;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_user", type="string", length=15, nullable=false)
     */
    private $telUser;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2_user", type="string", length=15, nullable=false)
     */
    private $tel2User;

    /**
     * @var string
     *
     * @ORM\Column(name="log_user", type="string", length=15, nullable=false)
     */
    private $logUser;

    /**
     * @var string
     *
     * @ORM\Column(name="first_emp_no", type="string", length=10, nullable=false)
     */
    private $firstEmpNo;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_user", type="string", length=100, nullable=false)
     */
    private $pwdUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_access", type="integer", nullable=false)
     */
    private $idAccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="active_user", type="smallint", nullable=false)
     */
    private $activeUser;

    /**
     * @var string
     *
     * @ORM\Column(name="leaver_type", type="string", nullable=false)
     */
    private $leaverType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="leave_date", type="date", nullable=false)
     */
    private $leaveDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="leave_early_date", type="date", nullable=false)
     */
    private $leaveEarlyDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validation", type="date", nullable=false)
     */
    private $dateValidation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_station", type="integer", nullable=false)
     */
    private $idStation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_departments", type="integer", nullable=false)
     */
    private $idDepartments;

    /**
     * @var boolean
     *
     * @ORM\Column(name="acces_ok", type="boolean", nullable=false)
     */
    private $accesOk;

    /**
     * @var boolean
     *
     * @ORM\Column(name="manuel", type="boolean", nullable=false)
     */
    private $manuel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="external", type="boolean", nullable=false)
     */
    private $external;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_contrat", type="boolean", nullable=false)
     */
    private $idContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sous_contrat", type="integer", nullable=false)
     */
    private $idSousContrat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="generation_eftr", type="boolean", nullable=false)
     */
    private $generationEftr;

    /**
     * @var integer
     *
     * @ORM\Column(name="allow_dtime_request", type="integer", nullable=false)
     */
    private $allowDtimeRequest;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_jeune_fille", type="string", length=80, nullable=true)
     */
    private $nomJeuneFille;


    /**
     * @var integer
     *
     * @ORM\Column(name="language1", type="integer", nullable=true)
     */
    private $language1;

    /**
     * @var integer
     *
     * @ORM\Column(name="language2", type="integer", nullable=true)
     */
    private $language2;

    /**
     * @var integer
     *
     * @ORM\Column(name="language3", type="integer", nullable=true)
     */
    private $language3;

    /**
     * @var integer
     *
     * @ORM\Column(name="language4", type="integer", nullable=false)
     */
    private $language4;

    /**
     * @var integer
     *
     * @ORM\Column(name="language5", type="integer", nullable=false)
     */
    private $language5;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang_renumeration", type="boolean", nullable=false)
     */
    private $langRenumeration;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="decimal", nullable=true)
     */
    private $salaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="pays_origine", type="integer", nullable=true)
     */
    private $paysOrigine;

    /**
     * @var integer
     *
     * @ORM\Column(name="canton_origine", type="integer", nullable=true)
     */
    private $cantonOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="type_permis_sejour", type="string", length=5, nullable=true)
     */
    private $typePermisSejour;

    /**
     * @var string
     *
     * @ORM\Column(name="type_permis_travail", type="string", length=5, nullable=false)
     */
    private $typePermisTravail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validite_permis", type="date", nullable=true)
     */
    private $dateValiditePermis;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_AVS", type="string", length=20, nullable=true)
     */
    private $numeroAvs;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_civil", type="string", nullable=true)
     */
    private $etatCivil;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="etat_civil_date", type="date", nullable=false)
     */
    private $etatCivilDate;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_epoux", type="string", length=80, nullable=true)
     */
    private $nomEpoux;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_epoux", type="string", length=50, nullable=false)
     */
    private $prenomEpoux;

    /**
     * @var string
     *
     * @ORM\Column(name="permis_epoux", type="string", length=5, nullable=true)
     */
    private $permisEpoux;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alloc_familiales", type="boolean", nullable=true)
     */
    private $allocFamiliales;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_banque", type="string", length=80, nullable=true)
     */
    private $nomBanque;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_banque", type="text", nullable=true)
     */
    private $adresseBanque;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_compte", type="string", length=32, nullable=true)
     */
    private $numeroCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="IBAN", type="string", length=45, nullable=false)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_clearing", type="string", length=8, nullable=true)
     */
    private $numeroClearing;

    /**
     * @var boolean
     *
     * @ORM\Column(name="parcking_necessaire", type="boolean", nullable=true)
     */
    private $parckingNecessaire;

    /**
     * @var string
     *
     * @ORM\Column(name="sex_user", type="string", nullable=false)
     */
    private $sexUser;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_user", type="string", length=30, nullable=false)
     * @Assert\NotBlank(groups={"country_not_swiss", "country_swiss"})
     * @Assert\Length(
     *      max = "30",
     *      maxMessage = "The maximum characters for this field is {{ limit }}",
     *      groups={"country_not_swiss", "country_swiss"}
     * )
     */
    private $adresseUser;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2_user", type="string", length=30, nullable=false)
     * @Assert\Length(
     *      max = "30",
     *      maxMessage = "The maximum characters for this field is {{ limit }}",
     *      groups={"country_not_swiss", "country_swiss"}
     * )
     */
    private $adresse2User;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse3_user", type="string", length=30, nullable=false)
     * @Assert\Length(
     *      max = "30",
     *      maxMessage = "The maximum characters for this field is {{ limit }}",
     *      groups={"country_not_swiss", "country_swiss"}
     * )
     */

 

    private $adresse3User;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_user", type="string", length=10, nullable=false)
     * @Assert\NotBlank(groups={"country_not_swiss", "country_swiss"})
     * @Assert\Length(
     *      max = "10",
     *      maxMessage = "The maximum characters for this field is {{ limit }}",
     *      groups={"country_not_swiss", "country_swiss"}
     * )
     */
    private $cpUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_user", type="string", length=60, nullable=false)
     * @Assert\NotBlank(groups={"country_not_swiss", "country_swiss"})
     */
    private $villeUser;

    /**
     * @var Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumn(name="pays", referencedColumnName="id")
     * @Assert\NotBlank(groups={"country_not_swiss", "country_swiss"})
     */
    private $pays;

    /**
     * @var Cantons
     *
     * @ORM\ManyToOne(targetEntity="Cantons")
     * @ORM\JoinColumn(name="canton", referencedColumnName="id")
     * @Assert\NotBlank(groups={"country_swiss"})
     */
    private $canton;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_adresse_user", type="string", length=30, nullable=false)
     * @Assert\Length(
     *      max = "30",
     *      maxMessage = "The maximum characters for this field is {{ limit }}",
     *      groups={"country_not_swiss", "country_swiss"}
     * )
     */
    private $altAdresseUser;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_adresse2_user", type="string", length=30, nullable=false)
     * @Assert\Length(
     *      max = "30",
     *      maxMessage = "The maximum characters for this field is {{ limit }}",
     *      groups={"country_not_swiss", "country_swiss"}
     * )
     */
    private $altAdresse2User;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_adresse3_user", type="string", length=30, nullable=false)
     * @Assert\Length(
     *      max = "30",
     *      maxMessage = "The maximum characters for this field is {{ limit }}",
     *      groups={"country_not_swiss", "country_swiss"}
     * )
     */
    private $altAdresse3User;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_cp", type="string", length=10, nullable=false)
     * @Assert\Length(
     *      max = "10",
     *      maxMessage = "The maximum characters for this field is {{ limit }}",
     *      groups={"country_not_swiss", "country_swiss"}
     * )
     */
    private $altCpUser;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_ville", type="string", length=60, nullable=false)
     */
    private $altVilleUser;

    /**
     * @var Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumn(name="alt_pays", referencedColumnName="id")
     */
    private $altPays;

    /**
     * @var Cantons
     *
     * @ORM\ManyToOne(targetEntity="Cantons")
     * @ORM\JoinColumn(name="alt_canton", referencedColumnName="id")
     */
    private $altCanton;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naiss_user", type="date", nullable=false)
     */
    private $dateNaissUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_employe", type="integer", nullable=false)
     */
    private $typeEmploye;

    /**
     * @var boolean
     *
     * @ORM\Column(name="besoin_permis", type="boolean", nullable=false)
     */
    private $besoinPermis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_signature", type="datetime", nullable=false)
     */
    private $dateSignature;

    /**
     * @var boolean
     *
     * @ORM\Column(name="avised", type="boolean", nullable=false)
     */
    private $avised;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="engagement_date", type="date", nullable=false)
     */
    private $engagementDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="try_time", type="boolean", nullable=false)
     */
    private $tryTime;

    /**
     * @var string
     *
     * @ORM\Column(name="bonding", type="string", nullable=false)
     */
    private $bonding;

    /**
     * @var boolean
     *
     * @ORM\Column(name="occupation", type="boolean", nullable=false)
     */
    private $occupation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entrant_tasks", type="boolean", nullable=false)
     */
    private $entrantTasks;

    /**
     * @var boolean
     *
     * @ORM\Column(name="modif_tasks", type="boolean", nullable=false)
     */
    private $modifTasks;

    /**
     * @var boolean
     *
     * @ORM\Column(name="leaver_tasks", type="boolean", nullable=false)
     */
    private $leaverTasks;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_theme", type="boolean", nullable=false)
     */
    private $idTheme;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_nationnalite", type="integer", nullable=false)
     */
    private $idNationnalite;

    /**
     * @var float
     *
     * @ORM\Column(name="salary_base", type="decimal", nullable=false)
     */
    private $salaryBase;

    /**
     * @var float
     *
     * @ORM\Column(name="3month_salary", type="decimal", nullable=false)
     */
    private $threeMonthSalary;

    /**
     * @var float
     *
     * @ORM\Column(name="sector_payment", type="decimal", nullable=false)
     */
    private $sectorPayment;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_label", type="string", length=100, nullable=false)
     */
    private $employeeLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable_name", type="string", length=100, nullable=false)
     */
    private $responsableName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_selection", type="integer", nullable=false)
     */
    private $idSelection;

    /**
     * @var string
     *
     * @ORM\Column(name="passport_number", type="string", length=28, nullable=false)
     */
    private $passportNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="passport_country", type="string", length=6, nullable=false)
     */
    private $passportCountry;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="passport_validity", type="date", nullable=false)
     */
    private $passportValidity;

    /**
     * @var string
     *
     * @ORM\Column(name="passport_place", type="string", length=50, nullable=false)
     */
    private $passportPlace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="passport_creation_date", type="date", nullable=false)
     */
    private $passportCreationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="pin_number", type="string", length=5, nullable=false)
     */
    private $pinNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="nationnalite_epoux", type="integer", nullable=false)
     */
    private $nationnaliteEpoux;

    /**
     * @var string
     *
     * @ORM\Column(name="epouse_working_permit", type="string", length=1, nullable=false)
     */
    private $epouseWorkingPermit;

    /**
     * @var float
     *
     * @ORM\Column(name="fonction_bonus", type="decimal", nullable=false)
     */
    private $fonctionBonus;

    /**
     * @var string
     *
     * @ORM\Column(name="type_fonction_bonus", type="string", nullable=false)
     */
    private $typeFonctionBonus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="capacite_travail", type="boolean", nullable=false)
     */
    private $capaciteTravail;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=200, nullable=false)
     */
    private $jobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="org_unit", type="string", length=40, nullable=false)
     */
    private $orgUnit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="export_cresus", type="boolean", nullable=false)
     */
    private $exportCresus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alfa", type="boolean", nullable=false)
     */
    private $alfa;

    /**
     * @var float
     *
     * @ORM\Column(name="start_DH", type="decimal", nullable=false)
     */
    private $startDh;

    /**
     * @var float
     *
     * @ORM\Column(name="start_BH", type="decimal", nullable=false)
     */
    private $startBh;

    /**
     * @var string
     *
     * @ORM\Column(name="place_of_birth", type="string", length=100, nullable=false)
     */
    private $placeOfBirth;

    /**
     * @var boolean
     *
     * @ORM\Column(name="must_confirm_passport", type="boolean", nullable=false)
     */
    private $mustConfirmPassport;

    /**
     * @var boolean
     *
     * @ORM\Column(name="force_civil_status_update", type="boolean", nullable=false)
     */
    private $forceCivilStatusUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_function", type="integer", nullable=false)
     */
    private $idFunction;

    /**
     * @var boolean
     *
     * @ORM\Column(name="synchro_sage", type="boolean", nullable=false)
     */
    private $synchroSage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="stafftrav_free_request", type="boolean", nullable=false)
     */
    private $stafftravFreeRequest;

    /**
     * @var string
     *
     * @ORM\Column(name="contract_mode", type="string", nullable=false)
     */
    private $contractMode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CDD_end_date", type="date", nullable=false)
     */
    private $cddEndDate;

    /**
     * @var float
     *
     * @ORM\Column(name="FL_total_salary", type="decimal", nullable=false)
     */
    private $flTotalSalary;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FL_AVS_task_created", type="boolean", nullable=false)
     */
    private $flAvsTaskCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_total_salary_update", type="date", nullable=false)
     */
    private $lastTotalSalaryUpdate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cancel_notation", type="boolean", nullable=false)
     */
    private $cancelNotation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="founded_in_hrdb", type="date", nullable=false)
     */
    private $foundedInHrdb;

    /**
     * @var string
     *
     * @ORM\Column(name="type_rating_course", type="string", nullable=false)
     */
    private $typeRatingCourse;

    /**
     * @var string
     *
     * @ORM\Column(name="distribution_group", type="string", nullable=false)
     */
    private $distributionGroup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin_function", type="boolean", nullable=false)
     */
    private $adminFunction;

    /**
     * @var boolean
     *
     * @ORM\Column(name="taxes_at_source", type="boolean", nullable=false)
     */
    private $taxesAtSource;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_line_manager", type="integer", nullable=false)
     */
    private $idLineManager;

    /**
     * @var TypesEftr Typpe de contrat de l'employé
     * @ORM\ManyToOne(targetEntity="TypesEftr")
     * @ORM\JoinColumn(name="id_type_eftr", referencedColumnName="id")
     */
    private $typeEftr;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sickness_force_certificate_from", type="date", nullable=true)
     */
    private $sicknessForceCertificateFrom;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users whose last updated the flag status
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="sickness_force_certificate_updated_by", referencedColumnName="id_user")
     */
    private $sicknessForceCertificateUpdatedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="work_ratio_percent", type="integer", nullable=true)
     */
    private $workRatioPercent;

    /**
     * @var integer
     *
     * @ORM\Column(name="remaining_days", type="integer", nullable=true)
     */
    private $remainingDays;

    /**
     * @var integer
     *
     * @ORM\Column(name="fdtr_access_level", type="integer", nullable=false)
     */
    private $fdtrAccessLevel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dtime_user_block", type="integer", nullable=false)
     */
    private $dtimeUserBlock;

   
    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_eftr", type="integer", nullable=true)
     */
    private $idTypeEftr;


    public function __construct($idUser = null)
    {
        if ($idUser !== null) {
            $this->idUser = $idUser;
        }
        $this->preferedAddress = self::PREFERED_ADDRESS_FIRST;
    }

    public static function newExternal($typeEftr)
    {
        $user = new self();
        $user->initEmptyValues();
        $user->accesOk = 1;
        $user->activeUser = 1;
        $user->adminFunction = 0;
        $user->dateCreation = new \DateTime;
        $user->dateValidation = new \DateTime;
        $user->external = 1;
        $user->manuel = 1;
        $user->setTypeEftr($typeEftr);

        return $user;
    }

    public function initEmptyValues()
    {
        $params = get_object_vars($this);
        foreach ($params as $key => $value) {
            if (in_array($key, array("idUser", "dateValiditePermis", "pays", "canton", "typeEftr", "sicknessForceCertificateUpdatedBy", "altCanton", "altPays", "sicknessForceCertificateFrom"))) {
                continue;
            }

            if (in_array($key, array("dateSignature", "leaveEarlyDate", "leaveDate", "changeNameDate", "passportCreationDate", "passportValidity", "engagementDate", "dateNaissUser", "etatCivilDate", "lastTotalSalaryUpdate", "cddEndDate", "foundedInHrdb"))) {
                $this->{$key} = \DateTime::createFromFormat("Y-m-d", "0000-00-00");
                continue;
            }

            $this->{$key} = "";
        }
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
     * Set nomUser
     *
     * @param string $nomUser
     * @return Users
     */
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    /**
     * Get nomUser
     *
     * @return string
     */
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * Set changeNameDate
     *
     * @param \DateTime $changeNameDate
     * @return Users
     */
    public function setChangeNameDate($changeNameDate)
    {
        $this->changeNameDate = $changeNameDate;

        return $this;
    }

    /**
     * Get changeNameDate
     *
     * @return \DateTime
     */
    public function getChangeNameDate()
    {
        return $this->changeNameDate;
    }

    /**
     * Set prenomUser
     *
     * @param string $prenomUser
     * @return Users
     */
    public function setPrenomUser($prenomUser)
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    /**
     * Get prenomUser
     *
     * @return string
     */
    public function getPrenomUser()
    {
        return $this->prenomUser;
    }

    /**
     * Set prenomPrefereUser
     *
     * @param string $prenomPrefereUser
     * @return Users
     */
    public function setPrenomPrefereUser($prenomPrefereUser)
    {
        $this->prenomPrefereUser = $prenomPrefereUser;

        return $this;
    }

    /**
     * Get prenomPrefereUser
     *
     * @return string
     */
    public function getPrenomPrefereUser()
    {
        return $this->prenomPrefereUser;
    }

    /**
     * Set emailUser
     *
     * @param string $emailUser
     * @return Users
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * Get emailUser
     *
     * @return string
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     *
     * @return string
     */
    public function getPersonalEmailUser()
    {
        return $this->personalEmailUser;
    }

    /**
     *
     * @param string $personalEmailUser
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setPersonalEmailUser($personalEmailUser)
    {
        $this->personalEmailUser = $personalEmailUser;
        return $this;
    }


    /**
     * Set telUser
     *
     * @param string $telUser
     * @return Users
     */
    public function setTelUser($telUser)
    {
        $this->telUser = $telUser;

        return $this;
    }

    /**
     * Get telUser
     *
     * @return string
     */
    public function getTelUser()
    {
        return $this->telUser;
    }

    /**
     * Set tel2User
     *
     * @param string $tel2User
     * @return Users
     */
    public function setTel2User($tel2User)
    {
        $this->tel2User = $tel2User;

        return $this;
    }

    /**
     * Get tel2User
     *
     * @return string
     */
    public function getTel2User()
    {
        return $this->tel2User;
    }

    /**
     * Set logUser
     *
     * @param string $logUser
     * @return Users
     */
    public function setLogUser($logUser)
    {
        $this->logUser = $logUser;

        return $this;
    }

    /**
     * Get logUser
     *
     * @return string
     */
    public function getLogUser()
    {
        return $this->logUser;
    }

    /**
     * Set firstEmpNo
     *
     * @param string $firstEmpNo
     * @return Users
     */
    public function setFirstEmpNo($firstEmpNo)
    {
        $this->firstEmpNo = $firstEmpNo;

        return $this;
    }

    /**
     * Get firstEmpNo
     *
     * @return string
     */
    public function getFirstEmpNo()
    {
        return $this->firstEmpNo;
    }

    /**
     * Set pwdUser
     *
     * @param string $pwdUser
     * @return Users
     */
    public function setPwdUser($pwdUser)
    {
        $this->pwdUser = $pwdUser;

        return $this;
    }

    /**
     * Get pwdUser
     *
     * @return string
     */
    public function getPwdUser()
    {
        return $this->pwdUser;
    }

    /**
     * Set idAccess
     *
     * @param integer $idAccess
     * @return Users
     */
    public function setIdAccess($idAccess)
    {
        $this->idAccess = $idAccess;

        return $this;
    }

    /**
     * Get idAccess
     *
     * @return integer
     */
    public function getIdAccess()
    {
        return $this->idAccess;
    }

    /**
     * Set activeUser
     *
     * @param integer $activeUser
     * @return Users
     */
    public function setActiveUser($activeUser)
    {
        $this->activeUser = $activeUser;

        return $this;
    }

    /**
     * Get activeUser
     *
     * @return integer
     */
    public function getActiveUser()
    {
        return $this->activeUser;
    }

    /**
     * Set leaverType
     *
     * @param string $leaverType
     * @return Users
     */
    public function setLeaverType($leaverType)
    {
        $this->leaverType = $leaverType;

        return $this;
    }

    /**
     * Get leaverType
     *
     * @return string
     */
    public function getLeaverType()
    {
        return $this->leaverType;
    }

    /**
     * Set leaveDate
     *
     * @param \DateTime $leaveDate
     * @return Users
     */
    public function setLeaveDate($leaveDate)
    {
        $this->leaveDate = $leaveDate;

        return $this;
    }

    /**
     * Get leaveDate
     *
     * @return \DateTime
     */
    public function getLeaveDate()
    {
        return $this->leaveDate;
    }

    /**
     * Set leaveEarlyDate
     *
     * @param \DateTime $leaveEarlyDate
     * @return Users
     */
    public function setLeaveEarlyDate($leaveEarlyDate)
    {
        $this->leaveEarlyDate = $leaveEarlyDate;

        return $this;
    }

    /**
     * Get leaveEarlyDate
     *
     * @return \DateTime
     */
    public function getLeaveEarlyDate()
    {
        return $this->leaveEarlyDate;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Users
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateValidation
     *
     * @param \DateTime $dateValidation
     * @return Users
     */
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    /**
     * Get dateValidation
     *
     * @return \DateTime
     */
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * Set idStation
     *
     * @param integer $idStation
     * @return Users
     */
    public function setIdStation($station)
    {
        if ($station instanceof Stations) {
            $this->idStation = $station->getIdStation();
        } else {
            $this->idStation = $station;
        }

        return $this;
    }

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
     * Set idDepartments
     *
     * @param integer $idDepartments
     * @return Users
     */
    public function setIdDepartments($idDepartments)
    {
        $this->idDepartments = $idDepartments;

        return $this;
    }

    /**
     * Get idDepartments
     *
     * @return integer
     */
    public function getIdDepartments()
    {
        return $this->idDepartments;
    }

    /**
     * Set accesOk
     *
     * @param boolean $accesOk
     * @return Users
     */
    public function setAccesOk($accesOk)
    {
        $this->accesOk = $accesOk;

        return $this;
    }

    /**
     * Get accesOk
     *
     * @return boolean
     */
    public function getAccesOk()
    {
        return $this->accesOk;
    }

    /**
     * Set manuel
     *
     * @param boolean $manuel
     * @return Users
     */
    public function setManuel($manuel)
    {
        $this->manuel = $manuel;

        return $this;
    }

    /**
     * Get manuel
     *
     * @return boolean
     */
    public function getManuel()
    {
        return $this->manuel;
    }

    /**
     * Set external
     *
     * @param boolean $external
     * @return Users
     */
    public function setExternal($external)
    {
        $this->external = $external;

        return $this;
    }

    /**
     * Get external
     *
     * @return boolean
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * Set idContrat
     *
     * @param boolean $idContrat
     * @return Users
     */
    public function setIdContrat($idContrat)
    {
        $this->idContrat = $idContrat;

        return $this;
    }

    /**
     * Get idContrat
     *
     * @return boolean
     */
    public function getIdContrat()
    {
        return $this->idContrat;
    }

    /**
     * Set idSousContrat
     *
     * @param integer $idSousContrat
     * @return Users
     */
    public function setIdSousContrat($idSousContrat)
    {
        $this->idSousContrat = $idSousContrat;

        return $this;
    }

    /**
     * Get idSousContrat
     *
     * @return integer
     */
    public function getIdSousContrat()
    {
        return $this->idSousContrat;
    }

   
   

    /**
     * Set generationEftr
     *
     * @param boolean $generationEftr
     * @return Users
     */
    public function setGenerationEftr($generationEftr)
    {
        $this->generationEftr = $generationEftr;

        return $this;
    }

    /**
     * Get generationEftr
     *
     * @return boolean
     */
    public function getGenerationEftr()
    {
        return $this->generationEftr;
    }

    /**
     * Set allowDtimeRequest
     *
     * @param integer $allowDtimeRequest
     * @return Users
     */
    public function setAllowDtimeRequest($allowDtimeRequest)
    {
        $this->allowDtimeRequest = $allowDtimeRequest;

        return $this;
    }

    /**
     * Get allowDtimeRequest
     *
     * @return integer
     */
    public function getAllowDtimeRequest()
    {
        return $this->allowDtimeRequest;
    }

    /**
     * Set nomJeuneFille
     *
     * @param string $nomJeuneFille
     * @return Users
     */
    public function setNomJeuneFille($nomJeuneFille)
    {
        $this->nomJeuneFille = $nomJeuneFille;

        return $this;
    }

    /**
     * Get nomJeuneFille
     *
     * @return string
     */
    public function getNomJeuneFille()
    {
        return $this->nomJeuneFille;
    }

    /**
     * Set pays
     *
     * @param integer $pays
     * @return Users
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return integer
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set canton
     *
     * @param integer $canton
     * @return Users
     */
    public function setCanton($canton)
    {
        $this->canton = $canton;

        return $this;
    }

    /**
     * Get canton
     *
     * @return integer
     */
    public function getCanton()
    {
        return $this->canton;
    }

    /**
     * Set language1
     *
     * @param integer $language1
     * @return Users
     */
    public function setLanguage1($language1)
    {
        $this->language1 = $language1;

        return $this;
    }

    /**
     * Get language1
     *
     * @return integer
     */
    public function getLanguage1()
    {
        return $this->language1;
    }

    /**
     * Set language2
     *
     * @param integer $language2
     * @return Users
     */
    public function setLanguage2($language2)
    {
        $this->language2 = $language2;

        return $this;
    }

    /**
     * Get language2
     *
     * @return integer
     */
    public function getLanguage2()
    {
        return $this->language2;
    }

    /**
     * Set language3
     *
     * @param integer $language3
     * @return Users
     */
    public function setLanguage3($language3)
    {
        $this->language3 = $language3;

        return $this;
    }

    /**
     * Get language3
     *
     * @return integer
     */
    public function getLanguage3()
    {
        return $this->language3;
    }

    /**
     * Set language4
     *
     * @param integer $language4
     * @return Users
     */
    public function setLanguage4($language4)
    {
        $this->language4 = $language4;

        return $this;
    }

    /**
     * Get language4
     *
     * @return integer
     */
    public function getLanguage4()
    {
        return $this->language4;
    }

    /**
     * Set language5
     *
     * @param integer $language5
     * @return Users
     */
    public function setLanguage5($language5)
    {
        $this->language5 = $language5;

        return $this;
    }

    /**
     * Get language5
     *
     * @return integer
     */
    public function getLanguage5()
    {
        return $this->language5;
    }

    /**
     * Set langRenumeration
     *
     * @param boolean $langRenumeration
     * @return Users
     */
    public function setLangRenumeration($langRenumeration)
    {
        $this->langRenumeration = $langRenumeration;

        return $this;
    }

    /**
     * Get langRenumeration
     *
     * @return boolean
     */
    public function getLangRenumeration()
    {
        return $this->langRenumeration;
    }

    /**
     * Set salaire
     *
     * @param float $salaire
     * @return Users
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return float
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set paysOrigine
     *
     * @param integer $paysOrigine
     * @return Users
     */
    public function setPaysOrigine($paysOrigine)
    {
        $this->paysOrigine = $paysOrigine;

        return $this;
    }

    /**
     * Get paysOrigine
     *
     * @return integer
     */
    public function getPaysOrigine()
    {
        return $this->paysOrigine;
    }

    /**
     * Set cantonOrigine
     *
     * @param integer $cantonOrigine
     * @return Users
     */
    public function setCantonOrigine($cantonOrigine)
    {
        $this->cantonOrigine = $cantonOrigine;

        return $this;
    }

    /**
     * Get cantonOrigine
     *
     * @return integer
     */
    public function getCantonOrigine()
    {
        return $this->cantonOrigine;
    }

    /**
     * Set typePermisSejour
     *
     * @param string $typePermisSejour
     * @return Users
     */
    public function setTypePermisSejour($typePermisSejour)
    {
        $this->typePermisSejour = $typePermisSejour;

        return $this;
    }

    /**
     * Get typePermisSejour
     *
     * @return string
     */
    public function getTypePermisSejour()
    {
        return $this->typePermisSejour;
    }

    /**
     * Set typePermisTravail
     *
     * @param string $typePermisTravail
     * @return Users
     */
    public function setTypePermisTravail($typePermisTravail)
    {
        $this->typePermisTravail = $typePermisTravail;

        return $this;
    }

    /**
     * Get typePermisTravail
     *
     * @return string
     */
    public function getTypePermisTravail()
    {
        return $this->typePermisTravail;
    }

    /**
     * Set dateValiditePermis
     *
     * @param \DateTime $dateValiditePermis
     * @return Users
     */
    public function setDateValiditePermis($dateValiditePermis)
    {
        $this->dateValiditePermis = $dateValiditePermis;

        return $this;
    }

    /**
     * Get dateValiditePermis
     *
     * @return \DateTime
     */
    public function getDateValiditePermis()
    {
        return $this->dateValiditePermis;
    }

    /**
     * Set numeroAvs
     *
     * @param string $numeroAvs
     * @return Users
     */
    public function setNumeroAvs($numeroAvs)
    {
        $this->numeroAvs = $numeroAvs;

        return $this;
    }

    /**
     * Get numeroAvs
     *
     * @return string
     */
    public function getNumeroAvs()
    {
        return $this->numeroAvs;
    }

    /**
     * Set etatCivil
     *
     * @param string $etatCivil
     * @return Users
     */
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * Get etatCivil
     *
     * @return string
     */
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }

    public function getEtatCivilFormatted()
    {
        switch ($this->etatCivil) {
            case "single":
                return "Single";
                break;
            case "married":
                return "Married";
                break;
            case "divorced":
                return "Divorced";
                break;
            case "separate":
                return "Separated";
                break;
            case "widowed":
                return "Widowed (veuf)";
                break;
            case "civil_partner":
                return "Civil partner (pacs)";
                break;
            case "cohabiting":
                return "Cohabiting (concubains)";
                break;
            default:
                return $this->etatCivil;
                break;
        }
    }
    /**
     * Set etatCivilDate
     *
     * @param \DateTime $etatCivilDate
     * @return Users
     */
    public function setEtatCivilDate($etatCivilDate)
    {
        $this->etatCivilDate = $etatCivilDate;

        return $this;
    }

    /**
     * Get etatCivilDate
     *
     * @return \DateTime
     */
    public function getEtatCivilDate()
    {
        return $this->etatCivilDate;
    }

    /**
     * Set nomEpoux
     *
     * @param string $nomEpoux
     * @return Users
     */
    public function setNomEpoux($nomEpoux)
    {
        $this->nomEpoux = $nomEpoux;

        return $this;
    }

    /**
     * Get nomEpoux
     *
     * @return string
     */
    public function getNomEpoux()
    {
        return $this->nomEpoux;
    }

    /**
     * Set prenomEpoux
     *
     * @param string $prenomEpoux
     * @return Users
     */
    public function setPrenomEpoux($prenomEpoux)
    {
        $this->prenomEpoux = $prenomEpoux;

        return $this;
    }

    /**
     * Get prenomEpoux
     *
     * @return string
     */
    public function getPrenomEpoux()
    {
        return $this->prenomEpoux;
    }

    /**
     * Set permisEpoux
     *
     * @param string $permisEpoux
     * @return Users
     */
    public function setPermisEpoux($permisEpoux)
    {
        $this->permisEpoux = $permisEpoux;

        return $this;
    }

    /**
     * Get permisEpoux
     *
     * @return string
     */
    public function getPermisEpoux()
    {
        return $this->permisEpoux;
    }

    /**
     * Set allocFamiliales
     *
     * @param boolean $allocFamiliales
     * @return Users
     */
    public function setAllocFamiliales($allocFamiliales)
    {
        $this->allocFamiliales = $allocFamiliales;

        return $this;
    }

    /**
     * Get allocFamiliales
     *
     * @return boolean
     */
    public function getAllocFamiliales()
    {
        return $this->allocFamiliales;
    }

    /**
     * Set nomBanque
     *
     * @param string $nomBanque
     * @return Users
     */
    public function setNomBanque($nomBanque)
    {
        $this->nomBanque = $nomBanque;

        return $this;
    }

    /**
     * Get nomBanque
     *
     * @return string
     */
    public function getNomBanque()
    {
        return $this->nomBanque;
    }

    /**
     * Set adresseBanque
     *
     * @param string $adresseBanque
     * @return Users
     */
    public function setAdresseBanque($adresseBanque)
    {
        $this->adresseBanque = $adresseBanque;

        return $this;
    }

    /**
     * Get adresseBanque
     *
     * @return string
     */
    public function getAdresseBanque()
    {
        return $this->adresseBanque;
    }

    /**
     * Set numeroCompte
     *
     * @param string $numeroCompte
     * @return Users
     */
    public function setNumeroCompte($numeroCompte)
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    /**
     * Get numeroCompte
     *
     * @return string
     */
    public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }

    /**
     * Set iban
     *
     * @param string $iban
     * @return Users
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set numeroClearing
     *
     * @param string $numeroClearing
     * @return Users
     */
    public function setNumeroClearing($numeroClearing)
    {
        $this->numeroClearing = $numeroClearing;

        return $this;
    }

    /**
     * Get numeroClearing
     *
     * @return string
     */
    public function getNumeroClearing()
    {
        return $this->numeroClearing;
    }

    /**
     * Set parckingNecessaire
     *
     * @param boolean $parckingNecessaire
     * @return Users
     */
    public function setParckingNecessaire($parckingNecessaire)
    {
        $this->parckingNecessaire = $parckingNecessaire;

        return $this;
    }

    /**
     * Get parckingNecessaire
     *
     * @return boolean
     */
    public function getParckingNecessaire()
    {
        return $this->parckingNecessaire;
    }

    /**
     * Set sexUser
     *
     * @param string $sexUser
     * @return Users
     */
    public function setSexUser($sexUser)
    {
        $this->sexUser = $sexUser;

        return $this;
    }

    /**
     * Get sexUser
     *
     * @return string
     */
    public function getSexUser()
    {
        return $this->sexUser;
    }

    /**
     * Set adresseUser
     *
     * @param string $adresseUser
     * @return Users
     */
    public function setAdresseUser($adresseUser)
    {
        $this->adresseUser = $adresseUser;

        return $this;
    }

    /**
     * Get adresseUser
     *
     * @return string
     */
    public function getAdresseUser()
    {
        return $this->adresseUser;
    }

    /**
     * Set adresse2User
     *
     * @param string $adresse2User
     * @return Users
     */
    public function setAdresse2User($adresse2User)
    {
        $this->adresse2User = $adresse2User;

        return $this;
    }

    /**
     * Get adresse2User
     *
     * @return string
     */
    public function getAdresse2User()
    {
        return $this->adresse2User;
    }

    /**
     * Set adresse3User
     *
     * @param string $adresse3User
     * @return Users
     */
    public function setAdresse3User($adresse3User)
    {
        $this->adresse3User = $adresse3User;

        return $this;
    }

    /**
     * Get adresse3User
     *
     * @return string
     */
    public function getAdresse3User()
    {
        return $this->adresse3User;
    }

    /**
     * Set cpUser
     *
     * @param string $cpUser
     * @return Users
     */
    public function setCpUser($cpUser)
    {
        $this->cpUser = $cpUser;

        return $this;
    }

    /**
     * Get cpUser
     *
     * @return string
     */
    public function getCpUser()
    {
        return $this->cpUser;
    }

    /**
     * Set villeUser
     *
     * @param string $villeUser
     * @return Users
     */
    public function setVilleUser($villeUser)
    {
        $this->villeUser = $villeUser;

        return $this;
    }

    /**
     * Get villeUser
     *
     * @return string
     */
    public function getVilleUser()
    {
        return $this->villeUser;
    }

    /**
     * Set dateNaissUser
     *
     * @param \DateTime $dateNaissUser
     * @return Users
     */
    public function setDateNaissUser($dateNaissUser)
    {
        $this->dateNaissUser = $dateNaissUser;

        return $this;
    }

    /**
     * Get dateNaissUser
     *
     * @return \DateTime
     */
    public function getDateNaissUser()
    {
        return $this->dateNaissUser;
    }

    /**
     * Set typeEmploye
     *
     * @param integer $typeEmploye
     * @return Users
     */
    public function setTypeEmploye($typeEmploye)
    {
        $this->typeEmploye = $typeEmploye;

        return $this;
    }

    /**
     * Get typeEmploye
     *
     * @return integer
     */
    public function getTypeEmploye()
    {
        return $this->typeEmploye;
    }

    /**
     * Set besoinPermis
     *
     * @param boolean $besoinPermis
     * @return Users
     */
    public function setBesoinPermis($besoinPermis)
    {
        $this->besoinPermis = $besoinPermis;

        return $this;
    }

    /**
     * Get besoinPermis
     *
     * @return boolean
     */
    public function getBesoinPermis()
    {
        return $this->besoinPermis;
    }

    /**
     * Set dateSignature
     *
     * @param \DateTime $dateSignature
     * @return Users
     */
    public function setDateSignature($dateSignature)
    {
        $this->dateSignature = $dateSignature;

        return $this;
    }

    /**
     * Get dateSignature
     *
     * @return \DateTime
     */
    public function getDateSignature()
    {
        return $this->dateSignature;
    }

    /**
     * Set avised
     *
     * @param boolean $avised
     * @return Users
     */
    public function setAvised($avised)
    {
        $this->avised = $avised;

        return $this;
    }

    /**
     * Get avised
     *
     * @return boolean
     */
    public function getAvised()
    {
        return $this->avised;
    }

    /**
     * Set engagementDate
     *
     * @param \DateTime $engagementDate
     * @return Users
     */
    public function setEngagementDate($engagementDate)
    {
        $this->engagementDate = $engagementDate;

        return $this;
    }

    /**
     * Get engagementDate
     *
     * @return \DateTime
     */
    public function getEngagementDate()
    {
        return $this->engagementDate;
    }

    /**
     * Set tryTime
     *
     * @param boolean $tryTime
     * @return Users
     */
    public function setTryTime($tryTime)
    {
        $this->tryTime = $tryTime;

        return $this;
    }

    /**
     * Get tryTime
     *
     * @return boolean
     */
    public function getTryTime()
    {
        return $this->tryTime;
    }

    /**
     * Set bonding
     *
     * @param string $bonding
     * @return Users
     */
    public function setBonding($bonding)
    {
        $this->bonding = $bonding;

        return $this;
    }

    /**
     * Get bonding
     *
     * @return string
     */
    public function getBonding()
    {
        return $this->bonding;
    }

    /**
     * Set occupation
     *
     * @param boolean $occupation
     * @return Users
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return boolean
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set entrantTasks
     *
     * @param boolean $entrantTasks
     * @return Users
     */
    public function setEntrantTasks($entrantTasks)
    {
        $this->entrantTasks = $entrantTasks;

        return $this;
    }

    /**
     * Get entrantTasks
     *
     * @return boolean
     */
    public function getEntrantTasks()
    {
        return $this->entrantTasks;
    }

    /**
     * Set modifTasks
     *
     * @param boolean $modifTasks
     * @return Users
     */
    public function setModifTasks($modifTasks)
    {
        $this->modifTasks = $modifTasks;

        return $this;
    }

    /**
     * Get modifTasks
     *
     * @return boolean
     */
    public function getModifTasks()
    {
        return $this->modifTasks;
    }

    /**
     * Set leaverTasks
     *
     * @param boolean $leaverTasks
     * @return Users
     */
    public function setLeaverTasks($leaverTasks)
    {
        $this->leaverTasks = $leaverTasks;

        return $this;
    }

    /**
     * Get leaverTasks
     *
     * @return boolean
     */
    public function getLeaverTasks()
    {
        return $this->leaverTasks;
    }

    /**
     * Set idTheme
     *
     * @param boolean $idTheme
     * @return Users
     */
    public function setIdTheme($idTheme)
    {
        $this->idTheme = $idTheme;

        return $this;
    }

    /**
     * Get idTheme
     *
     * @return boolean
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }

    /**
     * Set idNationnalite
     *
     * @param integer $idNationnalite
     * @return Users
     */
    public function setIdNationnalite($idNationnalite)
    {
        $this->idNationnalite = $idNationnalite;

        return $this;
    }

    /**
     * Get idNationnalite
     *
     * @return integer
     */
    public function getIdNationnalite()
    {
        return $this->idNationnalite;
    }

    /**
     * Set salaryBase
     *
     * @param float $salaryBase
     * @return Users
     */
    public function setSalaryBase($salaryBase)
    {
        $this->salaryBase = $salaryBase;

        return $this;
    }

    /**
     * Get salaryBase
     *
     * @return float
     */
    public function getSalaryBase()
    {
        return $this->salaryBase;
    }

    /**
     * Set threeMonthSalary
     *
     * @param float $threeMonthSalary
     * @return Users
     */
    public function setThreeMonthSalary($threeMonthSalary)
    {
        $this->threeMonthSalary = $threeMonthSalary;

        return $this;
    }

    /**
     * Get threeMonthSalary
     *
     * @return float
     */
    public function getThreeMonthSalary()
    {
        return $this->threeMonthSalary;
    }

    /**
     * Set sectorPayment
     *
     * @param float $sectorPayment
     * @return Users
     */
    public function setSectorPayment($sectorPayment)
    {
        $this->sectorPayment = $sectorPayment;

        return $this;
    }

    /**
     * Get sectorPayment
     *
     * @return float
     */
    public function getSectorPayment()
    {
        return $this->sectorPayment;
    }

    /**
     * Set employeeLabel
     *
     * @param string $employeeLabel
     * @return Users
     */
    public function setEmployeeLabel($employeeLabel)
    {
        $this->employeeLabel = $employeeLabel;

        return $this;
    }

    /**
     * Get employeeLabel
     *
     * @return string
     */
    public function getEmployeeLabel()
    {
        return $this->employeeLabel;
    }

    /**
     * Set responsableName
     *
     * @param string $responsableName
     * @return Users
     */
    public function setResponsableName($responsableName)
    {
        $this->responsableName = $responsableName;

        return $this;
    }

    /**
     * Get responsableName
     *
     * @return string
     */
    public function getResponsableName()
    {
        return $this->responsableName;
    }

    /**
     * Set idSelection
     *
     * @param integer $idSelection
     * @return Users
     */
    public function setIdSelection($idSelection)
    {
        $this->idSelection = $idSelection;

        return $this;
    }

    /**
     * Get idSelection
     *
     * @return integer
     */
    public function getIdSelection()
    {
        return $this->idSelection;
    }

    /**
     * Set passportNumber
     *
     * @param string $passportNumber
     * @return Users
     */
    public function setPassportNumber($passportNumber)
    {
        $this->passportNumber = $passportNumber;

        return $this;
    }

    /**
     * Get passportNumber
     *
     * @return string
     */
    public function getPassportNumber()
    {
        return $this->passportNumber;
    }

    /**
     * Set passportCountry
     *
     * @param string $passportCountry
     * @return Users
     */
    public function setPassportCountry($passportCountry)
    {
        $this->passportCountry = $passportCountry;

        return $this;
    }

    /**
     * Get passportCountry
     *
     * @return string
     */
    public function getPassportCountry()
    {
        return $this->passportCountry;
    }

    /**
     * Set passportValidity
     *
     * @param \DateTime $passportValidity
     * @return Users
     */
    public function setPassportValidity($passportValidity)
    {
        $this->passportValidity = $passportValidity;

        return $this;
    }

    /**
     * Get passportValidity
     *
     * @return \DateTime
     */
    public function getPassportValidity()
    {
        return $this->passportValidity;
    }

    /**
     * Set passportPlace
     *
     * @param string $passportPlace
     * @return Users
     */
    public function setPassportPlace($passportPlace)
    {
        $this->passportPlace = $passportPlace;

        return $this;
    }

    /**
     * Get passportPlace
     *
     * @return string
     */
    public function getPassportPlace()
    {
        return $this->passportPlace;
    }

    /**
     * Set passportCreationDate
     *
     * @param \DateTime $passportCreationDate
     * @return Users
     */
    public function setPassportCreationDate($passportCreationDate)
    {
        $this->passportCreationDate = $passportCreationDate;

        return $this;
    }

    /**
     * Get passportCreationDate
     *
     * @return \DateTime
     */
    public function getPassportCreationDate()
    {
        return $this->passportCreationDate;
    }

    /**
     * Set pinNumber
     *
     * @param string $pinNumber
     * @return Users
     */
    public function setPinNumber($pinNumber)
    {
        $this->pinNumber = $pinNumber;

        return $this;
    }

    /**
     * Get pinNumber
     *
     * @return string
     */
    public function getPinNumber()
    {
        return $this->pinNumber;
    }

    /**
     * Set nationnaliteEpoux
     *
     * @param integer $nationnaliteEpoux
     * @return Users
     */
    public function setNationnaliteEpoux($nationnaliteEpoux)
    {
        $this->nationnaliteEpoux = $nationnaliteEpoux;

        return $this;
    }

    /**
     * Get nationnaliteEpoux
     *
     * @return integer
     */
    public function getNationnaliteEpoux()
    {
        return $this->nationnaliteEpoux;
    }

    /**
     * Set epouseWorkingPermit
     *
     * @param string $epouseWorkingPermit
     * @return Users
     */
    public function setEpouseWorkingPermit($epouseWorkingPermit)
    {
        $this->epouseWorkingPermit = $epouseWorkingPermit;

        return $this;
    }

    /**
     * Get epouseWorkingPermit
     *
     * @return string
     */
    public function getEpouseWorkingPermit()
    {
        return $this->epouseWorkingPermit;
    }

    /**
     * Set fonctionBonus
     *
     * @param float $fonctionBonus
     * @return Users
     */
    public function setFonctionBonus($fonctionBonus)
    {
        $this->fonctionBonus = $fonctionBonus;

        return $this;
    }

    /**
     * Get fonctionBonus
     *
     * @return float
     */
    public function getFonctionBonus()
    {
        return $this->fonctionBonus;
    }

    /**
     * Set typeFonctionBonus
     *
     * @param string $typeFonctionBonus
     * @return Users
     */
    public function setTypeFonctionBonus($typeFonctionBonus)
    {
        $this->typeFonctionBonus = $typeFonctionBonus;

        return $this;
    }

    /**
     * Get typeFonctionBonus
     *
     * @return string
     */
    public function getTypeFonctionBonus()
    {
        return $this->typeFonctionBonus;
    }

    /**
     * Set capaciteTravail
     *
     * @param boolean $capaciteTravail
     * @return Users
     */
    public function setCapaciteTravail($capaciteTravail)
    {
        $this->capaciteTravail = $capaciteTravail;

        return $this;
    }

    /**
     * Get capaciteTravail
     *
     * @return boolean
     */
    public function getCapaciteTravail()
    {
        return $this->capaciteTravail;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     * @return Users
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
     * Set orgUnit
     *
     * @param string $orgUnit
     * @return Users
     */
    public function setOrgUnit($orgUnit)
    {
        $this->orgUnit = $orgUnit;

        return $this;
    }

    /**
     * Get orgUnit
     *
     * @return string
     */
    public function getOrgUnit()
    {
        return $this->orgUnit;
    }

    /**
     * Set exportCresus
     *
     * @param boolean $exportCresus
     * @return Users
     */
    public function setExportCresus($exportCresus)
    {
        $this->exportCresus = $exportCresus;

        return $this;
    }

    /**
     * Get exportCresus
     *
     * @return boolean
     */
    public function getExportCresus()
    {
        return $this->exportCresus;
    }

    /**
     * Set alfa
     *
     * @param boolean $alfa
     * @return Users
     */
    public function setAlfa($alfa)
    {
        $this->alfa = $alfa;

        return $this;
    }

    /**
     * Get alfa
     *
     * @return boolean
     */
    public function getAlfa()
    {
        return $this->alfa;
    }

    /**
     * Set startDh
     *
     * @param float $startDh
     * @return Users
     */
    public function setStartDh($startDh)
    {
        $this->startDh = $startDh;

        return $this;
    }

    /**
     * Get startDh
     *
     * @return float
     */
    public function getStartDh()
    {
        return $this->startDh;
    }

    /**
     * Set startBh
     *
     * @param float $startBh
     * @return Users
     */
    public function setStartBh($startBh)
    {
        $this->startBh = $startBh;

        return $this;
    }

    /**
     * Get startBh
     *
     * @return float
     */
    public function getStartBh()
    {
        return $this->startBh;
    }

    /**
     * Set placeOfBirth
     *
     * @param string $placeOfBirth
     * @return Users
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    /**
     * Get placeOfBirth
     *
     * @return string
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * Set mustConfirmPassport
     *
     * @param boolean $mustConfirmPassport
     * @return Users
     */
    public function setMustConfirmPassport($mustConfirmPassport)
    {
        $this->mustConfirmPassport = $mustConfirmPassport;

        return $this;
    }

    /**
     * Get mustConfirmPassport
     *
     * @return boolean
     */
    public function getMustConfirmPassport()
    {
        return $this->mustConfirmPassport;
    }

    /**
     * Set idFunction
     *
     * @param integer $idFunction
     * @return Users
     */
    public function setIdFunction($idFunction)
    {
        $this->idFunction = $idFunction;

        return $this;
    }

    /**
     * Get idFunction
     *
     * @return integer
     */
    public function getIdFunction()
    {
        return $this->idFunction;
    }

    /**
     * Set synchroSage
     *
     * @param boolean $synchroSage
     * @return Users
     */
    public function setSynchroSage($synchroSage)
    {
        $this->synchroSage = $synchroSage;

        return $this;
    }

    /**
     * Get synchroSage
     *
     * @return boolean
     */
    public function getSynchroSage()
    {
        return $this->synchroSage;
    }

    /**
     * Set stafftravFreeRequest
     *
     * @param boolean $stafftravFreeRequest
     * @return Users
     */
    public function setStafftravFreeRequest($stafftravFreeRequest)
    {
        $this->stafftravFreeRequest = $stafftravFreeRequest;

        return $this;
    }

    /**
     * Get stafftravFreeRequest
     *
     * @return boolean
     */
    public function getStafftravFreeRequest()
    {
        return $this->stafftravFreeRequest;
    }

    /**
     * Set contractMode
     *
     * @param string $contractMode
     * @return Users
     */
    public function setContractMode($contractMode)
    {
        $this->contractMode = $contractMode;

        return $this;
    }

    /**
     * Get contractMode
     *
     * @return string
     */
    public function getContractMode()
    {
        return $this->contractMode;
    }

    /**
     * Set cddEndDate
     *
     * @param \DateTime $cddEndDate
     * @return Users
     */
    public function setCddEndDate($cddEndDate)
    {
        $this->cddEndDate = $cddEndDate;

        return $this;
    }

    /**
     * Get cddEndDate
     *
     * @return \DateTime
     */
    public function getCddEndDate()
    {
        return $this->cddEndDate;
    }

    /**
     * Set flTotalSalary
     *
     * @param float $flTotalSalary
     * @return Users
     */
    public function setFlTotalSalary($flTotalSalary)
    {
        $this->flTotalSalary = $flTotalSalary;

        return $this;
    }

    /**
     * Get flTotalSalary
     *
     * @return float
     */
    public function getFlTotalSalary()
    {
        return $this->flTotalSalary;
    }

    /**
     * Set flAvsTaskCreated
     *
     * @param boolean $flAvsTaskCreated
     * @return Users
     */
    public function setFlAvsTaskCreated($flAvsTaskCreated)
    {
        $this->flAvsTaskCreated = $flAvsTaskCreated;

        return $this;
    }

    /**
     * Get flAvsTaskCreated
     *
     * @return boolean
     */
    public function getFlAvsTaskCreated()
    {
        return $this->flAvsTaskCreated;
    }

    /**
     * Set lastTotalSalaryUpdate
     *
     * @param \DateTime $lastTotalSalaryUpdate
     * @return Users
     */
    public function setLastTotalSalaryUpdate($lastTotalSalaryUpdate)
    {
        $this->lastTotalSalaryUpdate = $lastTotalSalaryUpdate;

        return $this;
    }

    /**
     * Get lastTotalSalaryUpdate
     *
     * @return \DateTime
     */
    public function getLastTotalSalaryUpdate()
    {
        return $this->lastTotalSalaryUpdate;
    }

    /**
     * Set cancelNotation
     *
     * @param boolean $cancelNotation
     * @return Users
     */
    public function setCancelNotation($cancelNotation)
    {
        $this->cancelNotation = $cancelNotation;

        return $this;
    }

    /**
     * Get cancelNotation
     *
     * @return boolean
     */
    public function getCancelNotation()
    {
        return $this->cancelNotation;
    }

    /**
     * Set foundedInHrdb
     *
     * @param \DateTime $foundedInHrdb
     * @return Users
     */
    public function setFoundedInHrdb($foundedInHrdb)
    {
        $this->foundedInHrdb = $foundedInHrdb;

        return $this;
    }

    /**
     * Get foundedInHrdb
     *
     * @return \DateTime
     */
    public function getFoundedInHrdb()
    {
        return $this->foundedInHrdb;
    }

    /**
     * Set typeRatingCourse
     *
     * @param string $typeRatingCourse
     * @return Users
     */
    public function setTypeRatingCourse($typeRatingCourse)
    {
        $this->typeRatingCourse = $typeRatingCourse;

        return $this;
    }

    /**
     * Get typeRatingCourse
     *
     * @return string
     */
    public function getTypeRatingCourse()
    {
        return $this->typeRatingCourse;
    }

    /**
     * Set distributionGroup
     *
     * @param string $distributionGroup
     * @return Users
     */
    public function setDistributionGroup($distributionGroup)
    {
        $this->distributionGroup = $distributionGroup;

        return $this;
    }

    /**
     * Get distributionGroup
     *
     * @return string
     */
    public function getDistributionGroup()
    {
        return $this->distributionGroup;
    }

    /**
     * Set adminFunction
     *
     * @param boolean $adminFunction
     * @return Users
     */
    public function setAdminFunction($adminFunction)
    {
        $this->adminFunction = $adminFunction;

        return $this;
    }

    /**
     * Get adminFunction
     *
     * @return boolean
     */
    public function getAdminFunction()
    {
        return $this->adminFunction;
    }

    /**
     * Set taxesAtSource
     *
     * @param boolean $taxesAtSource
     * @return Users
     */
    public function setTaxesAtSource($taxesAtSource)
    {
        $this->taxesAtSource = $taxesAtSource;

        return $this;
    }

    /**
     * Get taxesAtSource
     *
     * @return boolean
     */
    public function getTaxesAtSource()
    {
        return $this->taxesAtSource;
    }

    /**
     * Set idLineManager
     *
     * @param integer $idLineManager
     * @return Users
     */
    public function setIdLineManager($idLineManager)
    {
        $this->idLineManager = $idLineManager;

        return $this;
    }

    /**
     * Get idLineManager
     *
     * @return integer
     */
    public function getIdLineManager()
    {
        return $this->idLineManager;
    }

    /**
     * Renvoie le type eftr de la personne
     * @return TypesEftr
     */
    public function getTypeEftr()
    {
        return $this->typeEftr;
    }

    /**
     *
     * @param TypesEftr $typeEftr
     */
    public function setTypeEftr($typeEftr)
    {
        $this->typeEftr = $typeEftr;
    }

    public function __toString()
    {
        return $this->prenomUser . ' ' . $this->nomUser . ' (' . $this->logUser . ')';
    }


    /**
     *
     * @return type
     */
    public function getAltAdresseUser()
    {
        return $this->altAdresseUser;
    }

    /**
     *
     * @param type $altAdresseUser
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setAltAdresseUser($altAdresseUser)
    {
        $this->altAdresseUser = $altAdresseUser;
        return $this;
    }

    /**
     *
     * @return type
     */
    public function getAltAdresse2User()
    {
        return $this->altAdresse2User;
    }

    /**
     *
     * @param type $altAdresse2User
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setAltAdresse2User($altAdresse2User)
    {
        $this->altAdresse2User = $altAdresse2User;
        return $this;
    }

    /**
     *
     * @return type
     */
    public function getAltAdresse3User()
    {
        return $this->altAdresse3User;
    }

    /**
     *
     * @param type $altAdresse3User
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setAltAdresse3User($altAdresse3User)
    {
        $this->altAdresse3User = $altAdresse3User;
        return $this;
    }

    /**
     *
     * @return type
     */
    public function getAltCpUser()
    {
        return $this->altCpUser;
    }

    /**
     *
     * @param type $altCpUser
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setAltCpUser($altCpUser)
    {
        $this->altCpUser = $altCpUser;
        return $this;
    }

    /**
     *
     * @return type
     */
    public function getAltVilleUser()
    {
        return $this->altVilleUser;
    }

    /**
     *
     * @param type $altVilleUser
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setAltVilleUser($altVilleUser)
    {
        $this->altVilleUser = $altVilleUser;
        return $this;
    }

    /**
     *
     * @return type
     */
    public function getAltPays()
    {
        return $this->altPays;
    }

    /**
     *
     * @param \App\Easyjet\UmanBundle\Entity\Pays $altPays
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setAltPays($altPays)
    {
        $this->altPays = $altPays;
        return $this;
    }

    /**
     *
     * @return type
     */
    public function getAltCanton()
    {
        return $this->altCanton;
    }

    /**
     *
     * @param \App\Easyjet\UmanBundle\Entity\Cantons $altCanton
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setAltCanton($altCanton)
    {
        $this->altCanton = $altCanton;
        return $this;
    }

    /**
     *
     * @return type
     */
    public function getPreferedAddress()
    {
        return $this->preferedAddress;
    }

    /**
     * Return remaining days of sickness flag
     * @return type
     */
    public function getSicknessFlagRemainingDays()
    {
        if (!$this->getSicknessForceCertificateFrom()) {
            return 0;
        }
        return self::calculateSicknessFlagRemainingDays($this->getSicknessForceCertificateFrom());
    }

    public static function calculateSicknessFlagRemainingDays(\DateTime $date)
    {
        $nbJours = 0;
        if ($date) {
            $expiry = clone $date;
            $expiry->add(new \DateInterval('P6M'));
            $interval = $expiry->diff(new \DateTime);
            $nbJours = -1 * $interval->format("%r%a");
        }
        return $nbJours;
    }

    /**
     *
     * @param string $preferedAddress
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setPreferedAddress($preferedAddress)
    {
        $this->preferedAddress = $preferedAddress;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getSicknessForceCertificateFrom()
    {
        return $this->sicknessForceCertificateFrom;
    }

    /**
     *
     * @param \DateTime $sicknessForceCertificateFrom
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setSicknessForceCertificateFrom(\DateTime $sicknessForceCertificateFrom=null)
    {
        $this->sicknessForceCertificateFrom = $sicknessForceCertificateFrom;
        return $this;
    }

    /**
     *
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function getSicknessForceCertificateUpdatedBy()
    {
        return $this->sicknessForceCertificateUpdatedBy;
    }

    /**
     *
     * @param \App\Easyjet\UmanBundle\Entity\Users $sicknessForceCertificateUpdatedBy
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function setSicknessForceCertificateUpdatedBy(Users $sicknessForceCertificateUpdatedBy=null)
    {
        $this->sicknessForceCertificateUpdatedBy = $sicknessForceCertificateUpdatedBy;
        return $this;
    }




    /**
     * Gets the value of forceCivilStatusUpdate.
     *
     * @return boolean
     */
    public function getForceCivilStatusUpdate()
    {
        return $this->forceCivilStatusUpdate;
    }

    /**
     * Sets the value of forceCivilStatusUpdate.
     *
     * @param boolean $forceCivilStatusUpdate the force civil status update
     *
     * @return self
     */
    public function setForceCivilStatusUpdate($forceCivilStatusUpdate)
    {
        $this->forceCivilStatusUpdate = $forceCivilStatusUpdate;

        return $this;
    }

    /**
     * Gets the value of remainingDays.
     *
     * @return integer
     */
    public function getRemainingDays()
    {
        return $this->remainingDays;
    }

    /**
     * Sets the value of remainingDays.
     *
     * @param integer $remainingDays
     *
     * @return self
     */
    public function setRemainingDays($remainingDays)
    {
        $this->remainingDays = $remainingDays;

        return $this;
    }

    /**
     * Gets the value of workRatioPercent.
     *
     * @return integer
     */
    public function getWorkRatioPercent()
    {
        return $this->workRatioPercent;
    }

    /**
     * Sets the value of workRatioPercent.
     *
     * @param integer $workRatioPercent 
     *
     * @return self
     */
    public function setWorkRatioPercent($workRatioPercent)
    {
        $this->workRatioPercent = $workRatioPercent;

        return $this;
    }

    /**
     * Gets the value of fdtrAccessLevel.
     *
     * @return integer
     */
    public function getFdtrAccessLevel() {
        return $this->fdtrAccessLevel;
    }

    /**
     * Sets the value of fdtrAccessLevel.
     *
     * @param integer $fdtrAccessLevel 
     *
     * @return self
     */
    public function setFdtrAccessLevel($fdtrAccessLevel) {
        $this->fdtrAccessLevel = $fdtrAccessLevel;
        return $this;
    }

    /**
     * Set dtimeUserBlock
     *
     * @param boolean $dtimeUserBlock
     * @return Users
     */
    public function setDtimeUserBlock($dtimeUserBlock)
    {
        $this->dtimeUserBlock = $dtimeUserBlock;

        return $this;
    }

    /**
     * Get dtimeUserBlock
     *
     * @return boolean
     */
    public function getDtimeUserBlock()
    {
        return $this->dtimeUserBlock;
    }

    /**
     * Set idTypeEftr
     *
     * @param boolean $idTypeEftr
     * @return Users
     */
    public function setIdTypeEftr($idTypeEftr)
    {
        $this->idTypeEftr = $idTypeEftr;
        return $this;
    }

    /**
     * Get idTypeEftr
     *
     * @return integer
     */
    public function getIdTypeEftr()
    {
        return $this->idTypeEftr;
    }

    /**
     * Get idTypeEftr
     *
     * @return integer
     */
    public function isThirdParty()
    {
        if(preg_match("#^[0-9]{6,7}$#", $this->logUser)) {
            return false; 
        }
        
        return true;
    }

    public function isOffice() {
        if(!$this->typeEftr) return false;
        return ($this->typeEftr->getEmployeeType() == 1 && $this->typeEftr->getType() != "EC");
    }
    
    public function isEc() {
        if(!$this->typeEftr) return false;
        return ($this->typeEftr->getType() == "EC");
    }

    public function isPilot() {
        if(!$this->typeEftr) return false;
        return ($this->typeEftr->getEmployeeType() == 3);
    }
   
    
}
