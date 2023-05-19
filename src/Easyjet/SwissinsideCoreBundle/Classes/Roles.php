<?php
namespace App\Easyjet\SwissinsideCoreBundle\Classes;
/**
 * The Roles class generate all users roles from the old uman rights database
 *
 * @author Gilles Hemmerlé <giloux@gmail.com>
 */
class Roles {
    private static $roles;
    private static $swissinsideRightsList;
    private static $basesToUpdate;

    /**
     *
     * @param \Easyjet\SwissinsideCoreBundle\Entity\User $user
     * @param  \Doctrine\ORM\EntityManager $em Entity manager
     */
    public static function getForUser($user, \Doctrine\ORM\EntityManager $em) {

        if (!$user) {
            return array();
        }

        if(!isset(self::$roles[$user->getId()])) {

            $rsm = new \Doctrine\ORM\Query\ResultSetMapping;
            $rsm->addScalarResult("type", "type");
            $rsm->addScalarResult("nom", "nom");
            $rsm->addScalarResult("base_sql", "base_sql");

           $sql = "
                SELECT types_users.type, applications.nom
                FROM `types_users`
                INNER JOIN applications ON applications .id=types_users.id_appli
                WHERE types_users.id IN(SELECT id_type_user FROM assoc_droits_users WHERE id_user=:id_user)";

            try {
                $query = $em->createNativeQuery($sql, $rsm)
                   ->setParameter("id_user", $user->getId());

                $results = $query->getResult();
                foreach ($results as $currentRight) {
                    $user->addRole("ROLE_" . str_replace(" ", "_", strtoupper($currentRight['nom'])) . '_' . str_replace(" ", "_", strtoupper($currentRight['type'])));
                }
            }
            catch(\Exception $e) {
                die($e->getMessage());
            }

        }
       // echo "<pre>";print_r( $user->getRoles())
        //return self::$roles[$user->getId()];
    }

    private static function getSwissinsideLinkedRight($em, $namedRight = null)
    {

        if (!self::$swissinsideRightsList) {

            self::$swissinsideRightsList = array();
            self::$basesToUpdate = array();

            $rsm = new \Doctrine\ORM\Query\ResultSetMapping;
            $rsm->addScalarResult("ad_group", "ldap_group_name");
            $rsm->addScalarResult("id", "id_right");
            $rsm->addScalarResult("id_appli", "id_appli");
            $rsm->addScalarResult("valeur", "right_value");
            $rsm->addScalarResult("base_sql", "base_sql");
            $rsm->addScalarResult("chp_type_user", "chp_type_user");
            $rsm->addScalarResult("chp_login", "chp_login");
            $rsm->addScalarResult("chp_pwd", "chp_pwd");
            $rsm->addScalarResult("chp_active", "chp_active");
            $rsm->addScalarResult("initiaux", "initiaux");
            $rsm->addScalarResult("role_name", "role_name");
            $rsm->addScalarResult("app_name", "app_name");
            $rsm->addScalarResult("type_user", "type_user");

            $sql = "SELECT
                        REPLACE( UPPER( CONCAT( 'ROLE_', applications.nom COLLATE utf8_general_ci,  '_', types_users.type ) ) ,  ' ',  '_' ) AS role_name,
                        types_users.*,
                        applications.base_sql,
                        chp_type_user,
                        chp_login,
                        chp_pwd,
                        chp_active,
                        initiaux,
                        applications.nom as app_name,
                        types_users.type as type_user
                    FROM types_users
                    JOIN applications ON applications.id = types_users.id_appli
                    ";

            try {
                $query = $em->createNativeQuery($sql, $rsm);
                $results = $query->getResult();

                foreach ($results as $currentRow) {
                    if ($currentRow['ldap_group_name']) {
                        self::$swissinsideRightsList[$currentRow['ldap_group_name']] =  $currentRow;
                    }


                    list($table, $accesField) = explode(".", $currentRow['chp_type_user']);
                    list($table, $loginField) = explode(".", $currentRow['chp_login']);

                    $activeField = "";
                    if (preg_match("/[a-z_]+\.[a-z_]+/", $currentRow['chp_active'])) {
                        list($table, $activeField) = explode(".", $currentRow['chp_active']);
                    }

                    $passwordField = "";
                    if (preg_match("/[a-z_]+\.[a-z_]+/", $currentRow['chp_pwd'])) {
                        list($table, $passwordField) = explode(".", $currentRow['chp_pwd']);
                    }

                    self::$basesToUpdate[$currentRow['initiaux']] = array(
                        "base_sql" => $currentRow['base_sql'],
                        "table" => $table,
                        "rightField" => $accesField,
                        "loginField" => $loginField,
                        "rightValue" => $currentRow['right_value'],
                        "passwordField" => $passwordField,
                        "activeField" => $activeField,
                    );
                }
            }
            catch(\Exception $e) {
                die($e->getMessage());
            }
        }

        return isset(self::$swissinsideRightsList[$namedRight]) ? self::$swissinsideRightsList[$namedRight] : false;
    }

    public static function findInSessionByRightId($rightId)
    {
        if (empty($_SESSION['AD_MANAGEABLE_GROUPS'])) {
            return array();
        }

        foreach ($_SESSION['AD_MANAGEABLE_GROUPS'] as $key => $currentRight) {
            if ($currentRight['id_right'] == $rightId) {
                return $currentRight;
            }
        }

        return array();
    }

    public static function findInSessionByDn($dn)
    {
        if (isset($_SESSION['AD_MANAGEABLE_GROUPS'][$dn])) {
            return $_SESSION['AD_MANAGEABLE_GROUPS'][$dn];
        }

        return array();
    }



    private static function dropSwissinsideRights($em, $user) {
        $sql = "DELETE FROM assoc_droits_users WHERE id_user=:userId";
        $params = array(
            'userId'=>$user->getId()
        );

        try {
            $stmt = $em->getConnection()->prepare($sql);

            $stmt->execute($params);
            self::updateAllSwissinsideApplicationRights($em, $user);

        } catch (\Exception $e) {
            die($e->getMessage());
        }


    }

    private static function addSwissinsideRight($em, $user, $swissinsideRight)
    {
        $sql = "INSERT INTO assoc_droits_users (id_type_user, id_user) VALUES (:userTypeId, :userId)";
        $params = array(
            'userId' => $user->getId(),
            "userTypeId" => $swissinsideRight['id_right']
        );

        try {
            $stmt = $em->getConnection()->prepare($sql);
            $stmt->execute($params);
            self::updateAllSwissinsideApplicationRights($em, $user, $swissinsideRight);


            if ($swissinsideRight['initiaux'] == "UM") {
                $user->setAccessLevel(
                    $swissinsideRight['right_value']
                );
            }
        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }

    private static function updateAllSwissinsideApplicationRights($em, $user, $swissinsideRight=null) {
        if ($swissinsideRight === null) {
            // Suppression de tous les droits si aucune application spécifiée
            $user->setAccessLevel(0);

            foreach (self::$basesToUpdate as $currentBase) {
                $params = array(
                    'login' => $user->getUsername(),
                    "right" => 0
                );

                $sql = "UPDATE {$currentBase['base_sql']}.{$currentBase['table']}
                        SET {$currentBase['rightField']}=:right";

                if ($currentBase['activeField']) {
                    $sql .= ", {$currentBase['activeField']}=:active";
                    $params['active'] = 0;
                }

                if ($currentBase['passwordField']) {
                    $sql .= ", {$currentBase['passwordField']}=:password ";
                    $params['password'] = $user->getPassword();
                }
                        

                $sql .= " WHERE {$currentBase['loginField']}=:login";

                // echo "salve 1 - ";
                // echo $sql;
                // echo "<pre>";
                // var_dump($params);
                // echo "</pre>";
                // echo "<hr>";
                
                try {
                    $stmt = $em->getConnection()->prepare($sql);
                    $stmt->execute($params);
                } catch(\Exception $e) {
                    die($e->getMessage());
                }

            }

            // echo("updated");

        } else {
            // Sinon on met à jour le droit de l'application demandée
            $params = array(
                'login' => $user->getUsername(),
                "right" => $swissinsideRight['right_value']
            );

            $baseToUpdate = self::$basesToUpdate[$swissinsideRight['initiaux']];
            if ($swissinsideRight['initiaux'] == "UM" && $swissinsideRight['right_value'] != 0) {
                $baseToUpdate['activeField'] = "active_user";
            }


            $sql = "UPDATE {$baseToUpdate['base_sql']}.{$baseToUpdate['table']}
                        SET {$baseToUpdate['rightField']}=:right";


            if ($baseToUpdate['activeField']) {
                $sql .= ", {$baseToUpdate['activeField']}=:active";
                $params['active'] = 1;
            }

            if ($baseToUpdate['passwordField']) {
                $sql .= ", {$baseToUpdate['passwordField']}=:password ";
                $params['password'] = $user->getPassword();
            }
                    

            $sql .= " WHERE {$baseToUpdate['loginField']}=:login";

            // echo $sql;
            // echo "<pre>";
            // var_dump($params);
            // echo "</pre>";
            // echo "<hr>";
                

            try {
                $stmt = $em->getConnection()->prepare($sql);
                $stmt->execute($params);
            } catch(\Exception $e) {
                die($e->getMessage());
            } 

            //die("fin");
        }

    }

    public static function cleaningAdRights($adRights) {
        $sorted = array();
        foreach ($adRights as $role) {
            $fullRight = isset(self::$swissinsideRightsList[$role]) ? self::$swissinsideRightsList[$role] : null;

            if (!isset($sorted[$fullRight['initiaux']])) {
                $sorted[$fullRight['initiaux']] = $fullRight;
            }
            else {
                if ($sorted[$fullRight['initiaux']]['right_value'] < $fullRight['right_value']) {
                    $sorted[$fullRight['initiaux']] = $fullRight;
                }
            }
        }

        $return = array();
        foreach ($sorted as $currentItem) {
            $return[] = $currentItem['ldap_group_name'];
        }

        return $return;
    }


    public static function updateRightsFromAd($user, \Doctrine\ORM\EntityManager $em, $adRights)
    {
        // First we clean the user rights
        if ($adRights === null) {
            return;
        }

        self::getSwissinsideLinkedRight($em);
        $adRights = self::cleaningAdRights($adRights);
        self::dropSwissinsideRights($em, $user);
        // Then create the new rights
        foreach ($adRights as $role) {
            $swissinsideRight = self::getSwissinsideLinkedRight($em, $role);
            if ($swissinsideRight) {
                $user->addRole($swissinsideRight['role_name']);
                self::addSwissinsideRight($em, $user, $swissinsideRight);
            }
        }


    }

    public static function getListOfAdGroups($em)
    {
        self::getSwissinsideLinkedRight($em);
        return self::$swissinsideRightsList;
    }
}
