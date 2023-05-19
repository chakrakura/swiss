<?php

namespace App\Easyjet\UmanBundle\Repository;

use Doctrine\ORM\EntityRepository;


/**
 * Users repository
 */
class UsersRepository extends EntityRepository
{
    
    /**
     * Return a External Users Array
     * @return array associative array
     */
    public function getAllExternalUsers()
    {
        $em = $this->getEntityManager();

        $sql = 'SELECT id_user, log_user, prenom_user, nom_user
                FROM  `users`
                WHERE log_user REGEXP (\'^external-\')
                AND REPLACE( log_user,  "external-", "" ) NOT IN (
                    SELECT log_user
                    FROM users
                )';

        $stmt = $em->getConnection()->prepare($sql);
        $result = $stmt->executeQuery()->fetchAllAssociative();
        return $result;
    }

    /**
     * Return a Employee Users Array
     * @return array associative array
     */
    public function getAllEmployeeUsers()
    {
        $em = $this->getEntityManager();

        $sql = "SELECT id_user, log_user, prenom_user, nom_user
                FROM  `users`
                WHERE active_user = 1  AND manuel = 0 AND log_user!=''
                ORDER BY nom_user, prenom_user";

        $stmt = $em->getConnection()->prepare($sql);
        $result = $stmt->executeQuery()->fetchAllAssociative();
        return $result;
    }

    /**
     * Return a Third party Users Array
     * @return array associative array
     */
    public function getAllThirdPartyUsers()
    {
        $em = $this->getEntityManager();

        $sql = "SELECT id_user, log_user, prenom_user, nom_user
                FROM  `users`
                WHERE active_user = 1  AND manuel = 1 AND external=0";

        $stmt = $em->getConnection()->prepare($sql);
        $result = $stmt->executeQuery()->fetchAllAssociative();
        return $result;
    }

    public function getUserApplications($idUser)
    {
        $em = $this->getEntityManager();

        $sql = "SELECT applications.*
        FROM applications, assoc_droits_users, types_users
        WHERE assoc_droits_users.id_type_user=types_users.id AND assoc_droits_users.id_user='" . $idUser . "'
          AND types_users.id_appli=applications.id
          AND can_manage_rights=1
        GROUP BY applications.id" ;

        $stmt = $em->getConnection()->prepare($sql);
        $result = $stmt->executeQuery()->fetchAllAssociative();
      
        return $result;
    }


    /**
     * Duplicate the external account to an internal account for the passed user
     * @param User  $user  User to set as internal employee
     * @throws Exception If the use is not an external account
     * @throws Exception If the internal account
     */
    public function setUserAsInternal( $user)
    {
       
        // Get the final login to assign to the user
        $login = preg_replace('/^external-/', '', $user->getLogUser());

        $em = $this->getEntityManager();

        // Search if the linked internal account already exists
        $sql = 'SELECT id_user
                FROM  `users`
                WHERE log_user = :log_user';

        $stmt = $em->getConnection()->prepare($sql);
        $stmt->bindValue(":log_user", $login);
        $existingUser = $stmt->executeQuery()->fetchAllAssociative();
       
        // If the internal account does not exist yet, proceed...
        if (!$existingUser) {
            // Duplicate the user
            $newUser = clone $user;
            $newUser->setLogUser($login);
            // Set the employee type
            $typeEftr = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesEftr")->find($user->getTypeEftr());
            $user->setTypeEmploye($typeEftr->getEmployeeType());
         
            // Determin wether the user is an employee or a third party
            if (preg_match('/^[0-9]{6}$/', $login)) {
                $newUser->setManuel(0)->setExternal(0);
            } else {
                $newUser->setManuel(1)->setExternal(0);
            }
            // Persisting the new object
            $em->detach($newUser);
            $em->persist($newUser);
            $em->flush();
        } else {
            throw new \Exception(sprintf("The user '%s' does already exist in the database", $login));
        }
    }


   /**
     * Get the list of users not there in Rostering table
     * @return Array of Users List
     */
    public function findUserAddableToRostering()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $expr = $queryBuilder->expr();
      
        $queryBuilder->select("u")
            ->from("EasyjetUmanBundle:Users", "u")
            ->where("u.activeUser=1")
            ->andWhere($expr->notIn("u", "SELECT rtu.idUser FROM App\Easyjet\UmanBundle\Entity\RosteringTeam rt  LEFT JOIN rt.user rtu"))
            ->orderBy("u.nomUser", "ASC")
            ->addOrderBy("u.prenomUser", "ASC");

        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * 
     * @param idUser $idUser
     * @return boolean
     */
    public function isRostering($idUser)
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $expr = $queryBuilder->expr();

        $queryBuilder->select("COUNT(u)")
            ->from("EasyjetUmanBundle:Users", "u")
            ->where('u.idUser = :idUser')
            ->andWhere($expr->In("u", "SELECT rtu.idUser FROM App\Easyjet\UmanBundle\Entity\RosteringTeam rt LEFT JOIN rt.user rtu"))
            ->setParameter("idUser", $idUser);
        $result =  $queryBuilder->getQuery()->getSingleScalarResult();

        return $result > 0;
    }

    /**
     * 
     * @param idUser $idUser
     * @return boolean
     */
    function isRosteringAdmin($idUser)
    {
        $em = $this->getEntityManager();
        $sql = "SELECT rostering_team.is_admin 
                FROM rostering_team WHERE rostering_team.id_user 
                IN(SELECT id_user FROM users WHERE log_user='" . $idUser . "')";

        $stmt = $em->getConnection()->prepare($sql);
        $data = $stmt->executeQuery()->fetchAssociative();
        return ($data && ($data['is_admin'] == 1));
    }

    /**
     * Return a user data
     * @param int $idUser
     * @return array user data
     */
    public function getUserData($idUser)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $result = $queryBuilder->select("u")
            ->addSelect("te")
            ->from("EasyjetUmanBundle:Users", "u")
            ->leftJoin("u.typeEftr", "te")
            ->where('u.idUser = :idUser')
            ->setParameter('idUser', $idUser)
            ->getQuery()->getOneOrNullResult();
        return    $result;
    }
   
    /**
     * Update users table id_type_eftr column 0 with null
     * @return boolean 
     */
    public function fixTypesEftrProblems() {
        $em = $this->getEntityManager();
        $sql = "UPDATE users 
                SET id_type_eftr = null 
                WHERE  id_type_eftr = 0" ;

        $stmt = $em->getConnection()->prepare($sql);
        $stmt->executeQuery();
    }
}
