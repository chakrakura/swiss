<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applications
 *
 * @ORM\Table(name="applications")
 * @ORM\Entity(repositoryClass="App\Easyjet\UmanBundle\Repository\ApplicationsRepository")
 */
class Applications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="initiaux", type="string", length=3, nullable=false)
     */
    private $initiaux;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_base", type="text", nullable=false)
     */
    private $adresseBase;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sql", type="text", nullable=false)
     */
    private $userSql;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_sql", type="text", nullable=false)
     */
    private $pwdSql;

    /**
     * @var string
     *
     * @ORM\Column(name="base_sql", type="text", nullable=false)
     */
    private $baseSql;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_bouton", type="string", length=18, nullable=false)
     */
    private $nomBouton;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_bouton", type="string", length=7, nullable=false)
     */
    private $couleurBouton;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_principal", type="string", length=70, nullable=false)
     */
    private $lienPrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_login", type="text", nullable=false)
     */
    private $chpLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_pwd", type="text", nullable=false)
     */
    private $chpPwd;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_prenom", type="text", nullable=false)
     */
    private $chpPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_nom", type="text", nullable=false)
     */
    private $chpNom;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_email", type="text", nullable=false)
     */
    private $chpEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_tel", type="text", nullable=false)
     */
    private $chpTel;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_tel2", type="text", nullable=false)
     */
    private $chpTel2;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_type_user", type="text", nullable=false)
     */
    private $chpTypeUser;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_active", type="text", nullable=false)
     */
    private $chpActive;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_departement", type="text", nullable=false)
     */
    private $chpDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_contrat", type="string", length=60, nullable=false)
     */
    private $chpContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_sous_contrat", type="string", length=80, nullable=false)
     */
    private $chpSousContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_station", type="string", length=60, nullable=false)
     */
    private $chpStation;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_type_eftr", type="string", length=60, nullable=false)
     */
    private $chpTypeEftr;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_generation_eftr", type="string", length=50, nullable=false)
     */
    private $chpGenerationEftr;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_allow_dtime", type="string", length=200, nullable=false)
     */
    private $chpAllowDtime;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_export_cresus", type="string", length=80, nullable=false)
     */
    private $chpExportCresus;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_start_DH", type="string", length=200, nullable=false)
     */
    private $chpStartDh;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_start_BH", type="string", length=200, nullable=false)
     */
    private $chpStartBh;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_engagement_date", type="string", length=200, nullable=false)
     */
    private $chpEngagementDate;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_function", type="string", length=100, nullable=false)
     */
    private $chpFunction;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_first_emp_no", type="string", length=100, nullable=false)
     */
    private $chpFirstEmpNo;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_synchro_sage", type="string", length=200, nullable=false)
     */
    private $chpSynchroSage;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_leave_date", type="string", length=80, nullable=false)
     */
    private $chpLeaveDate;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_contract_mode", type="string", length=80, nullable=false)
     */
    private $chpContractMode;

    /**
     * @var string
     *
     * @ORM\Column(name="chp_occupation", type="string", length=200, nullable=false)
     */
    private $chpOccupation;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=30, nullable=false)
     */
    private $icon;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set initiaux
     *
     * @param string $initiaux
     * @return UmanApplications
     */
    public function setInitiaux($initiaux)
    {
        $this->initiaux = $initiaux;
    
        return $this;
    }

    /**
     * Get initiaux
     *
     * @return string 
     */
    public function getInitiaux()
    {
        return $this->initiaux;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return UmanApplications
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return UmanApplications
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set adresseBase
     *
     * @param string $adresseBase
     * @return UmanApplications
     */
    public function setAdresseBase($adresseBase)
    {
        $this->adresseBase = $adresseBase;
    
        return $this;
    }

    /**
     * Get adresseBase
     *
     * @return string 
     */
    public function getAdresseBase()
    {
        return $this->adresseBase;
    }

    /**
     * Set userSql
     *
     * @param string $userSql
     * @return UmanApplications
     */
    public function setUserSql($userSql)
    {
        $this->userSql = $userSql;
    
        return $this;
    }

    /**
     * Get userSql
     *
     * @return string 
     */
    public function getUserSql()
    {
        return $this->userSql;
    }

    /**
     * Set pwdSql
     *
     * @param string $pwdSql
     * @return UmanApplications
     */
    public function setPwdSql($pwdSql)
    {
        $this->pwdSql = $pwdSql;
    
        return $this;
    }

    /**
     * Get pwdSql
     *
     * @return string 
     */
    public function getPwdSql()
    {
        return $this->pwdSql;
    }

    /**
     * Set baseSql
     *
     * @param string $baseSql
     * @return UmanApplications
     */
    public function setBaseSql($baseSql)
    {
        $this->baseSql = $baseSql;
    
        return $this;
    }

    /**
     * Get baseSql
     *
     * @return string 
     */
    public function getBaseSql()
    {
        return $this->baseSql;
    }

    /**
     * Set nomBouton
     *
     * @param string $nomBouton
     * @return UmanApplications
     */
    public function setNomBouton($nomBouton)
    {
        $this->nomBouton = $nomBouton;
    
        return $this;
    }

    /**
     * Get nomBouton
     *
     * @return string 
     */
    public function getNomBouton()
    {
        return $this->nomBouton;
    }

    /**
     * Set couleurBouton
     *
     * @param string $couleurBouton
     * @return UmanApplications
     */
    public function setCouleurBouton($couleurBouton)
    {
        $this->couleurBouton = $couleurBouton;
    
        return $this;
    }

    /**
     * Get couleurBouton
     *
     * @return string 
     */
    public function getCouleurBouton()
    {
        return $this->couleurBouton;
    }

    /**
     * Set lienPrincipal
     *
     * @param string $lienPrincipal
     * @return UmanApplications
     */
    public function setLienPrincipal($lienPrincipal)
    {
        $this->lienPrincipal = $lienPrincipal;
    
        return $this;
    }

    /**
     * Get lienPrincipal
     *
     * @return string 
     */
    public function getLienPrincipal()
    {
        return $this->lienPrincipal;
    }

    /**
     * Set chpLogin
     *
     * @param string $chpLogin
     * @return UmanApplications
     */
    public function setChpLogin($chpLogin)
    {
        $this->chpLogin = $chpLogin;
    
        return $this;
    }

    /**
     * Get chpLogin
     *
     * @return string 
     */
    public function getChpLogin()
    {
        return $this->chpLogin;
    }

    /**
     * Set chpPwd
     *
     * @param string $chpPwd
     * @return UmanApplications
     */
    public function setChpPwd($chpPwd)
    {
        $this->chpPwd = $chpPwd;
    
        return $this;
    }

    /**
     * Get chpPwd
     *
     * @return string 
     */
    public function getChpPwd()
    {
        return $this->chpPwd;
    }

    /**
     * Set chpPrenom
     *
     * @param string $chpPrenom
     * @return UmanApplications
     */
    public function setChpPrenom($chpPrenom)
    {
        $this->chpPrenom = $chpPrenom;
    
        return $this;
    }

    /**
     * Get chpPrenom
     *
     * @return string 
     */
    public function getChpPrenom()
    {
        return $this->chpPrenom;
    }

    /**
     * Set chpNom
     *
     * @param string $chpNom
     * @return UmanApplications
     */
    public function setChpNom($chpNom)
    {
        $this->chpNom = $chpNom;
    
        return $this;
    }

    /**
     * Get chpNom
     *
     * @return string 
     */
    public function getChpNom()
    {
        return $this->chpNom;
    }

    /**
     * Set chpEmail
     *
     * @param string $chpEmail
     * @return UmanApplications
     */
    public function setChpEmail($chpEmail)
    {
        $this->chpEmail = $chpEmail;
    
        return $this;
    }

    /**
     * Get chpEmail
     *
     * @return string 
     */
    public function getChpEmail()
    {
        return $this->chpEmail;
    }

    /**
     * Set chpTel
     *
     * @param string $chpTel
     * @return UmanApplications
     */
    public function setChpTel($chpTel)
    {
        $this->chpTel = $chpTel;
    
        return $this;
    }

    /**
     * Get chpTel
     *
     * @return string 
     */
    public function getChpTel()
    {
        return $this->chpTel;
    }

    /**
     * Set chpTel2
     *
     * @param string $chpTel2
     * @return UmanApplications
     */
    public function setChpTel2($chpTel2)
    {
        $this->chpTel2 = $chpTel2;
    
        return $this;
    }

    /**
     * Get chpTel2
     *
     * @return string 
     */
    public function getChpTel2()
    {
        return $this->chpTel2;
    }

    /**
     * Set chpTypeUser
     *
     * @param string $chpTypeUser
     * @return UmanApplications
     */
    public function setChpTypeUser($chpTypeUser)
    {
        $this->chpTypeUser = $chpTypeUser;
    
        return $this;
    }

    /**
     * Get chpTypeUser
     *
     * @return string 
     */
    public function getChpTypeUser()
    {
        return $this->chpTypeUser;
    }

    /**
     * Set chpActive
     *
     * @param string $chpActive
     * @return UmanApplications
     */
    public function setChpActive($chpActive)
    {
        $this->chpActive = $chpActive;
    
        return $this;
    }

    /**
     * Get chpActive
     *
     * @return string 
     */
    public function getChpActive()
    {
        return $this->chpActive;
    }

    /**
     * Set chpDepartement
     *
     * @param string $chpDepartement
     * @return UmanApplications
     */
    public function setChpDepartement($chpDepartement)
    {
        $this->chpDepartement = $chpDepartement;
    
        return $this;
    }

    /**
     * Get chpDepartement
     *
     * @return string 
     */
    public function getChpDepartement()
    {
        return $this->chpDepartement;
    }

    /**
     * Set chpContrat
     *
     * @param string $chpContrat
     * @return UmanApplications
     */
    public function setChpContrat($chpContrat)
    {
        $this->chpContrat = $chpContrat;
    
        return $this;
    }

    /**
     * Get chpContrat
     *
     * @return string 
     */
    public function getChpContrat()
    {
        return $this->chpContrat;
    }

    /**
     * Set chpSousContrat
     *
     * @param string $chpSousContrat
     * @return UmanApplications
     */
    public function setChpSousContrat($chpSousContrat)
    {
        $this->chpSousContrat = $chpSousContrat;
    
        return $this;
    }

    /**
     * Get chpSousContrat
     *
     * @return string 
     */
    public function getChpSousContrat()
    {
        return $this->chpSousContrat;
    }

    /**
     * Set chpStation
     *
     * @param string $chpStation
     * @return UmanApplications
     */
    public function setChpStation($chpStation)
    {
        $this->chpStation = $chpStation;
    
        return $this;
    }

    /**
     * Get chpStation
     *
     * @return string 
     */
    public function getChpStation()
    {
        return $this->chpStation;
    }

    /**
     * Set chpTypeEftr
     *
     * @param string $chpTypeEftr
     * @return UmanApplications
     */
    public function setChpTypeEftr($chpTypeEftr)
    {
        $this->chpTypeEftr = $chpTypeEftr;
    
        return $this;
    }

    /**
     * Get chpTypeEftr
     *
     * @return string 
     */
    public function getChpTypeEftr()
    {
        return $this->chpTypeEftr;
    }

    /**
     * Set chpGenerationEftr
     *
     * @param string $chpGenerationEftr
     * @return UmanApplications
     */
    public function setChpGenerationEftr($chpGenerationEftr)
    {
        $this->chpGenerationEftr = $chpGenerationEftr;
    
        return $this;
    }

    /**
     * Get chpGenerationEftr
     *
     * @return string 
     */
    public function getChpGenerationEftr()
    {
        return $this->chpGenerationEftr;
    }

    /**
     * Set chpAllowDtime
     *
     * @param string $chpAllowDtime
     * @return UmanApplications
     */
    public function setChpAllowDtime($chpAllowDtime)
    {
        $this->chpAllowDtime = $chpAllowDtime;
    
        return $this;
    }

    /**
     * Get chpAllowDtime
     *
     * @return string 
     */
    public function getChpAllowDtime()
    {
        return $this->chpAllowDtime;
    }

    /**
     * Set chpExportCresus
     *
     * @param string $chpExportCresus
     * @return UmanApplications
     */
    public function setChpExportCresus($chpExportCresus)
    {
        $this->chpExportCresus = $chpExportCresus;
    
        return $this;
    }

    /**
     * Get chpExportCresus
     *
     * @return string 
     */
    public function getChpExportCresus()
    {
        return $this->chpExportCresus;
    }

    /**
     * Set chpStartDh
     *
     * @param string $chpStartDh
     * @return UmanApplications
     */
    public function setChpStartDh($chpStartDh)
    {
        $this->chpStartDh = $chpStartDh;
    
        return $this;
    }

    /**
     * Get chpStartDh
     *
     * @return string 
     */
    public function getChpStartDh()
    {
        return $this->chpStartDh;
    }

    /**
     * Set chpStartBh
     *
     * @param string $chpStartBh
     * @return UmanApplications
     */
    public function setChpStartBh($chpStartBh)
    {
        $this->chpStartBh = $chpStartBh;
    
        return $this;
    }

    /**
     * Get chpStartBh
     *
     * @return string 
     */
    public function getChpStartBh()
    {
        return $this->chpStartBh;
    }

    /**
     * Set chpEngagementDate
     *
     * @param string $chpEngagementDate
     * @return UmanApplications
     */
    public function setChpEngagementDate($chpEngagementDate)
    {
        $this->chpEngagementDate = $chpEngagementDate;
    
        return $this;
    }

    /**
     * Get chpEngagementDate
     *
     * @return string 
     */
    public function getChpEngagementDate()
    {
        return $this->chpEngagementDate;
    }

    /**
     * Set chpFunction
     *
     * @param string $chpFunction
     * @return UmanApplications
     */
    public function setChpFunction($chpFunction)
    {
        $this->chpFunction = $chpFunction;
    
        return $this;
    }

    /**
     * Get chpFunction
     *
     * @return string 
     */
    public function getChpFunction()
    {
        return $this->chpFunction;
    }

    /**
     * Set chpFirstEmpNo
     *
     * @param string $chpFirstEmpNo
     * @return UmanApplications
     */
    public function setChpFirstEmpNo($chpFirstEmpNo)
    {
        $this->chpFirstEmpNo = $chpFirstEmpNo;
    
        return $this;
    }

    /**
     * Get chpFirstEmpNo
     *
     * @return string 
     */
    public function getChpFirstEmpNo()
    {
        return $this->chpFirstEmpNo;
    }

    /**
     * Set chpSynchroSage
     *
     * @param string $chpSynchroSage
     * @return UmanApplications
     */
    public function setChpSynchroSage($chpSynchroSage)
    {
        $this->chpSynchroSage = $chpSynchroSage;
    
        return $this;
    }

    /**
     * Get chpSynchroSage
     *
     * @return string 
     */
    public function getChpSynchroSage()
    {
        return $this->chpSynchroSage;
    }

    /**
     * Set chpLeaveDate
     *
     * @param string $chpLeaveDate
     * @return UmanApplications
     */
    public function setChpLeaveDate($chpLeaveDate)
    {
        $this->chpLeaveDate = $chpLeaveDate;
    
        return $this;
    }

    /**
     * Get chpLeaveDate
     *
     * @return string 
     */
    public function getChpLeaveDate()
    {
        return $this->chpLeaveDate;
    }

    /**
     * Set chpContractMode
     *
     * @param string $chpContractMode
     * @return UmanApplications
     */
    public function setChpContractMode($chpContractMode)
    {
        $this->chpContractMode = $chpContractMode;
    
        return $this;
    }

    /**
     * Get chpContractMode
     *
     * @return string 
     */
    public function getChpContractMode()
    {
        return $this->chpContractMode;
    }

    /**
     * Set chpOccupation
     *
     * @param string $chpOccupation
     * @return UmanApplications
     */
    public function setChpOccupation($chpOccupation)
    {
        $this->chpOccupation = $chpOccupation;
    
        return $this;
    }

    /**
     * Get chpOccupation
     *
     * @return string 
     */
    public function getChpOccupation()
    {
        return $this->chpOccupation;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return UmanApplications
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    
        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }
}