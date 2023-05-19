<?php

namespace App\Easyjet\SwissinsideCoreBundle\Security;

use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;

/**
 * ActiveDirectoryUserToken represents the user token for the Active directory authentication system
 *
 * @author Gilles Hemmerlé <giloux@gmail.com>
 */


class ActiveDirectoryUserToken extends AbstractToken
{
    public $empno;
    protected $error;

    protected $adObject;

    public function __construct(array $roles = array())
    {
        parent::__construct($roles);

        // Si l'utilisateur a des rôles, on le considère comme authentifié
        $this->setAuthenticated($this->empno && (count($roles) > 0));
    }

    public function getEmpno() {
        return $this->empno;
    }

    public function setEmpno($empno) {
        $this->empno = $empno;
    }

    public function getCredentials()
    {
        return '';
    }

    public function getError() {
        return $this->error;
    }

    public function setError($error) {
        $this->error = $error;
    }

    public function getAdObject() {
        return $this->adObject;
    }

    public function setAdObject($adObject) {
        $this->adObject = $adObject;
        return $this;
    }
}
