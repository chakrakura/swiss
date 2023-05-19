<?php

namespace App\Easyjet\SwissinsideCoreBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Easyjet\SwissinsideCoreBundle\Repository\UsersRepository")
 * @ORM\Table(name="users")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id_user")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, name="log_user")
     */
    protected $logUser;

    /**
     * @ORM\Column(type="string", length=255, name="email_user")
     */
    protected $emailUser;

    /**
     * @ORM\Column(type="string", length=255, name="pwd_user")
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=255, name="pin_number")
     */
    protected $pinNumber;

    /**
     * @var string salt
     */
    protected $salt;

    /**
     * @ORM\Column(type="boolean", name="active_user")
     */
    protected $active;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="prenom_user")
     */
    protected $firstname;
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="nom_user")
     */
    protected $lastname;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="tel_user")
     */
    protected $phone;

    /**
     * @var bool
     * @ORM\Column(type="boolean", name="manuel")
     */
    protected $thirdParty;

     /**
     * @var json
     * @ORM\Column(type="json", name="roles")
     */
    /**
     * @var array list of roles
     */
    protected $roles;

    /**
     * @var bool
     *
     * @ORM\Column(name="external", type="boolean", nullable=false)
     */
    private $external;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_consecutive_login_failures", type="integer", nullable=false)
     */
    private $nbConsecutiveLoginFailures;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="locked_until")
     */
    protected $lockedUntil;

    /**
     * @var bool
     *
     * @ORM\Column(name="acces_ok", type="integer", nullable=false)
     */
    private $accesOk;

    /**
     * @var bool
     *
     * @ORM\Column(name="admin_function", type="boolean", nullable=false)
     */
    private $adminFunction;

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
     * @var TypesEftr Typpe de contrat de l'employé
     * @ORM\ManyToOne(targetEntity="TypesEftr")
     * @ORM\JoinColumn(name="id_type_eftr", referencedColumnName="id")
     */
    private $typeEftr;

    public function getId()
    {
        return $this->id;
    }
    
    public function getIdUser()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->dateCreation = new \DateTime();
        $this->dateValidation = new \DateTime();
        $this->roles = array();
        $this->nbConsecutiveLoginFailures = 0;
        $this->lockedUntil = null;
    }

    public static function newExternal($typeEftr)
    {
        $user = new self();
        $user->initEmptyValues();
        $user->accesOk = 1;
        $user->active = 1;
        $user->adminFunction = 0;
        $user->dateCreation = new \DateTime();
        $user->dateValidation = new \DateTime();
        $user->external = 1;
        $user->thirdParty = 1;
        $user->setTypeEftr($typeEftr);
        $user->lockedUntil = null;
        
        return $user;
    }

    public function initEmptyValues()
    {
        $params = get_object_vars($this);
        foreach ($params as $key => $value) {
            if (in_array($key, array('idUser', 'dateValiditePermis', 'pays', 'canton', 'typeEftr', 'sicknessForceCertificateUpdatedBy', 'altCanton', 'altPays', 'sicknessForceCertificateFrom'))) {
                continue;
            }

            if (in_array($key, array('dateSignature', 'leaveEarlyDate', 'leaveDate', 'changeNameDate', 'passportCreationDate', 'passportValidity', 'engagementDate', 'dateNaissUser', 'etatCivilDate', 'lastTotalSalaryUpdate', 'cddEndDate', 'foundedInHrdb'))) {
                $this->{$key} = \DateTime::createFromFormat('Y-m-d', '0000-00-00');
                continue;
            }

            $this->{$key} = '';
        }
    }

    /**
     * Gets an array of roles.
     *
     * @return array An array of Role objects
     */
    public function getRoles()
    {
        $this->addRole('ROLE_SWISSINSIDE_USER');
        $this->addRole('ROLE_ALLOWED_TO_SWITCH');
        if ($this->thirdParty) {
            $this->addRole('ROLE_SWISSINSIDE_THIRD_PARTY');
        } else {
            $this->addRole('ROLE_SWISSINSIDE_EMPLOYEE');
        }

        return $this->roles;
    }

    public function addRole($role)
    {
        if (!is_array($this->roles)) {
            $this->roles = array();
        }

        if (!in_array($role, $this->roles)) {
            $this->roles[] = $role;
        }

            
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
        return $this;
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
        return $this->password;
    }

    /**
     * Gets the user password.
     *
     * @return string the password
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * Set manuel
     *
     * @param boolean $manuel
     * @return Users
     */
    public function setManuel($manuel)
    {
        $this->thirdParty = $manuel;

        return $this;
    }

    /**
     * Get manuel
     *
     * @return boolean
     */
    public function getManuel()
    {
        return $this->thirdParty;
    }

    /**
     * Gets the user salt.
     *
     * @return string the salt
     */
    public function getSalt()
    {
        return '';
    }

    /**
     * Gets the username.
     *
     * @return string the username
     */
    public function getUsername()
    {
        return $this->logUser;
    }

    /**
     * Erases the user credentials.
     */
    public function eraseCredentials()
    {
    }

    /*
     * Return access right level for old swissinside applications
     */
    public function getAccessLevel()
    {
        return $this->accesOk;
    }

    /**
     * @param int $accesOk
     */
    public function setAccessLevel($accesOk)
    {
        $this->accesOk = $accesOk;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive($active)
    {
        $this->active = (bool) $active;
    }

    public function getAuthname()
    {
        return $this->firstname.' '.$this->lastname;
    }

    public function isThirdParty()
    {
        return $this->thirdParty;
    }

    /**
     * @return bool
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * Get the value of Nb Consecutive Login Failures.
     *
     * @return int
     */
    public function getNbConsecutiveLoginFailures()
    {
        return $this->nbConsecutiveLoginFailures;
    }

    /**
     * Set the value of Nb Consecutive Login Failures.
     *
     * @param int nbConsecutiveLoginFailures
     *
     * @return self
     */
    public function setNbConsecutiveLoginFailures($nbConsecutiveLoginFailures)
    {
        $this->nbConsecutiveLoginFailures = $nbConsecutiveLoginFailures;

        return $this;
    }

    /**
     * Get the value of Locked Until.
     *
     * @return mixed
     */
    public function getLockedUntil()
    {
        return $this->lockedUntil;
    }

    /**
     * Set the value of Locked Until.
     *
     * @param \DateTime lockedUntil
     *
     * @return self
     */
    public function setLockedUntil($lockedUntil)
    {
        $this->lockedUntil = $lockedUntil;

        return $this;
    }

    public function loginFailure($antiBruteForceMaxNbAttempts, $antiBruteForceLockTime)
    {
        ++$this->nbConsecutiveLoginFailures;
        if ($this->nbConsecutiveLoginFailures >= $antiBruteForceMaxNbAttempts) {
            $this->lockedUntil = new \Datetime();
            $this->lockedUntil->add(new \DateInterval('PT'.$antiBruteForceLockTime.'M'));
        }
    }

    public function reinitLock($force = false)
    {
        if ($force || ($this->lockedUntil && $this->lockedUntil < new \DateTime())) {
            $this->lockedUntil = null;
            $this->nbConsecutiveLoginFailures = 0;
        }
    }

    /**
     * Get the value of accesOk.
     *
     * @return int
     */
    public function getAccesOk()
    {
        return $this->accesOk;
    }

    /**
     * Set the value of accesOk.
     *
     * @param int $accesOk
     *
     * @return self
     */
    public function setAccesOk($accesOk)
    {
        $this->accesOk = $accesOk;

        return $this;
    }

    /**
     * Get the value of adminFunction.
     *
     * @return bool
     */
    public function getAdminFunction()
    {
        return $this->adminFunction;
    }

    /**
     * Set the value of adminFunction.
     *
     * @param bool $adminFunction
     *
     * @return self
     */
    public function setAdminFunction($adminFunction)
    {
        $this->adminFunction = $adminFunction;

        return $this;
    }

    /**
     * Get the value of dateCreation.
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation.
     *
     * @param \DateTime $dateCreation
     *
     * @return self
     */
    public function setDateCreation(\DateTime $dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get the value of dateValidation.
     *
     * @return \DateTime
     */
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * Set the value of dateValidation.
     *
     * @param \DateTime $dateValidation
     *
     * @return self
     */
    public function setDateValidation(\DateTime $dateValidation)
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    /**
     * Get typpe de contrat de l'employé.
     *
     * @return TypesEftr
     */
    public function getTypeEftr()
    {
        return $this->typeEftr;
    }

    /**
     * Set typpe de contrat de l'employé.
     *
     * @param TypesEftr $typeEftr Typpe de contrat de l'employé
     *
     * @return self
     */
    public function setTypeEftr(TypesEftr $typeEftr)
    {
        $this->typeEftr = $typeEftr;

        return $this;
    }

    /**
     * Set the value of thirdParty.
     *
     * @param bool $thirdParty
     *
     * @return self
     */
    public function setThirdParty($thirdParty)
    {
        $this->thirdParty = $thirdParty;

        return $this;
    }


    public function __toString()
    {
        return $this->firstname.' '.$this->lastname.'('.$this->logUser.')';
    }

    /**
     * Get the value of logUser.
     */
    public function getLogUser()
    {
        return $this->logUser;
    }

    /**
     * Set the value of logUser.
     *
     * @return self
     */
    public function setLogUser($logUser)
    {
        $this->logUser = $logUser;

        return $this;
    }

    /**
     * Get the value of firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname.
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname.
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of emailUser.
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set the value of emailUser.
     *
     * @return self
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }
}
