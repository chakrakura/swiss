<?php

namespace App\Easyjet\SwissinsideCoreBundle\Repository;

use App\Easyjet\SwissinsideCoreBundle\Entity\Users;
use Doctrine\ORM\EntityRepository;
use Exception;

/**
 * Users repository.
 */
class UsersRepository extends EntityRepository
{
    public function getAllExternalUsers(\Doctrine\DBAL\Connection $dbalConnexion)
    {
        $sql = 'SELECT id_user, log_user, prenom_user, nom_user
        FROM  `users`
        WHERE log_user REGEXP (\'^external-\')
        AND REPLACE( log_user,  "external-", "" ) NOT IN (
            SELECT log_user
            FROM users
        )';
        $stmt = $dbalConnexion->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * Duplicate the external account to an internal account for the passed user.
     *
     * @param Users                  $user          User to set as internal employee
     * @param DoctrineDBALConnection $dbalConnexion Connexion in order to make quicker queries
     *
     * @throws Exception If the use is not an external account
     * @throws Exception If the internal account
     */
    public function setUserAsInternal(Users $user, \Doctrine\DBAL\Connection $dbalConnexion)
    {
        // Throw the error if non external account
        if (!preg_match('/^external-/', $user->getLogUser())) {
            throw new \Exception(sprintf("The employee '%s' is not an external account", $user->getLogUser()));
        }

        // Get the final login to assign to the user
        $login = preg_replace('/^external-/', '', $user->getLogUser());

        // Search if the linked internal account already exists
        $sql = 'SELECT id_user
                FROM  `users`
                WHERE log_user = :log_user';

        $stmt = $dbalConnexion->prepare($sql);
        $stmt->bindValue(':log_user', $login);
        $stmt->execute();
        $existingUser = $stmt->fetchAll();

        // If the internal account does not exist yet, proceed...
        if (!$existingUser) {
            // Duplicate the user
            $newUser = clone $user;
            $newUser->setLogUser($login);

            // Set the employee type
            $entityManager = $this->getEntityManager('uman');
            $typeEftr = $entityManager->getRepository('@EasyjetSwissinsideCore:TypesEftr')->find($user->getTypeEftr());
            $user->setTypeEmploye($typeEftr->getEmployeeType());

            // Determin wether the user is an employee or a third party
            if (preg_match('/^[0-9]{6}$/', $login)) {
                $newUser->setManuel(0)->setExternal(0);
            } else {
                $newUser->setManuel(1)->setExternal(0);
            }

            // Persisting the new object
            $entityManager->detach($newUser);
            $entityManager->persist($newUser);
            $entityManager->flush();
        } else {
            throw new Exception(sprintf("The user '%s' does already exist in the database", $login));
        }
    }

    public function findActiveEmployees()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('u')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where('u.manuel=0 and u.active=1')
            ->orderBy('u.lastname', 'ASC')
            ->addOrderBy('u.firstname', 'ASC');

        return $queryBuilder->getQuery()->getResult();
    }

    public function findActiveUsers()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('u')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where('u.active=1')
            ->orderBy('u.lastname', 'ASC')
            ->addOrderBy('u.firstname', 'ASC');

        return $queryBuilder->getQuery()->getResult();
    }

    public function findUserAddableToRostering()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $expr = $queryBuilder->expr();
        $queryBuilder->select('u')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where('u.active=1')
            ->andWhere($expr->notIn('u', 'SELECT rtu.idUser FROM EasyjetSwissinsideCoreBundle:RosteringTeam rt  LEFT JOIN rt.user rtu'))
            ->orderBy('u.lastname', 'ASC')
            ->addOrderBy('u.firstname', 'ASC');

        return $queryBuilder->getQuery()->getResult();
    }

    public function PilotsStatus(\Symfony\Component\HttpFoundation\Request $request, \Doctrine\DBAL\Connection $dbalConnexion)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select('COUNT(u)')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where('(u.lastname like :query or u.firstname like :query or u.logUser like :query)')
            ->andWhere("(u.leaveDate='0000-00-00' OR u.leaveDate>CURRENT_DATE()) AND u.manuel!=1 ")
            ->andWhere('(u.typeEmploye=3 or u.typeEftr=14)')
            ->andWhere("u.idUser IN(SELECT a.idUser FROM EasyjetSwissinsideCoreBundle:Actions a WHERE a.typeAction='pre_employment' or a.typeAction like 'new_pilot_%')")
            ->setParameter('query', '%'.$request->get('sSearch').'%');

        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();
        $queryBuilder->select('u, count(tl.id) AS count_remaining')
            ->leftJoin('EasyjetSwissinsideCoreBundle:Actions', 'ac', \Doctrine\ORM\Query\Expr\Join::WITH, 'ac.idUser = u.idUser')
            ->leftJoin('EasyjetSwissinsideCoreBundle:TaskList', 'tl', \Doctrine\ORM\Query\Expr\Join::WITH, "tl.idAction = ac.id and tl.idRealisateur=0 and tl.idRealisateurNa=0 and (ac.typeAction='pre_employment' or ac.typeAction like 'new_pilot_%')")
        //->andWhere("tl.idRealisateur=0 and (ac.typeAction='pre_employment' or ac.typeAction like 'new_pilot_%')")
            ->groupBy('u.idUser');

        $output = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput($request, $queryBuilder, $nbResults);

        $fieldsList = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting();
        $fieldsList->addField('u.lastname');
        $fieldsList->addField('u.firstname');

        $fieldsList->addField('u.engagementDate');

        $fieldsList->addField('count_remaining');
        $output->sortingManager($fieldsList);

        $results = $queryBuilder->getQuery()->getResult();
        // Récupération de la liste des tâches
        $sql = "SELECT IFNULL(complex_tasks.label, task_list.label) as task_list_label, actions.label as action_label, id_realisateur, id_realisateur_na
                FROM task_list
                LEFT JOIN actions ON actions.id = task_list.id_action
                LEFT JOIN complex_tasks ON CONCAT('TC-', complex_tasks.id)=task_list.label
                WHERE (actions.type_action =  'pre_employment'
                       OR actions.type_action LIKE  'new_pilot_%') AND actions.id_user=:userId
                ORDER BY task_list.id";
        $stmt = $dbalConnexion->prepare($sql);

        foreach ($results as $currentResult) {
            $currentResult = $currentResult[0];
            $stmt->bindValue('userId', $currentResult->getIdUser());
            $stmt->execute();

            $listOfTasks = array();
            $remaining = 0;
            $totalTasks = 0;

            $previousAction = '';
            $result = $stmt->fetchAll();
            foreach ($result as $currentTask) {
                ++$totalTasks;

                if (!$currentTask['id_realisateur'] && !$currentTask['id_realisateur_na']) {
                    ++$remaining;
                }

                if ($previousAction != $currentTask['action_label']) {
                    $listOfTasks[] = array('action' => $currentTask['action_label'], 'tasks_list' => array());
                }

                $listOfTasks[count($listOfTasks) - 1]['tasks_list'][] = array(
                    'label' => $currentTask['task_list_label'],
                    'done' => $currentTask['id_realisateur'] > 0 || $currentTask['id_realisateur_na'] > 0 ? 1 : 0,
                );

                $previousAction = $currentTask['action_label'];
            }

            $output->addRow(array(
                $currentResult->getLastname(),
                $currentResult->getFirstname(),
                $currentResult->getEngagementDate()->format('d/m/Y'),

                $remaining, // Nombre de taches restants
                '',
                $totalTasks,
                $listOfTasks,
            ));
        }

        return $output->output();
    }

    public function hasOpenedItTasks(\Symfony\Component\HttpFoundation\Request $request, \Doctrine\DBAL\Connection $dbalConnexion)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select('COUNT(u)')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where('(u.lastname like :query or u.firstname like :query or u.logUser like :query)')
            ->andWhere('u.manuel!=1 ')
            ->andWhere("u.idUser IN(SELECT a.idUser FROM EasyjetSwissinsideCoreBundle:Actions a WHERE a.disabledBy= 0 AND (
                    a.label = 'IT tasks validation from line manager' or
                    a.label = 'IT tasks for a new employee' or
                    a.label = 'ESP validated entrant IT tasks' or
                    a.label = 'IT tasks for base transfer' or
                    a.label = 'IT tasks for contractual changes' or
                    a.label = 'IT tasks for leavers' or
                    a.label = 'It tasks for base transfer EZS to EZY' or
                    a.label = 'It tasks for base transfer EZY to EZS' or
                    a.label = 'IT tasks for base transfer within EZS' or
                    a.label = 'ESP validated leavers IT tasks'
                    ))"
            )
            ->setParameter('query', '%'.$request->get('sSearch').'%');

        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();
        $queryBuilder->select('u, count(tl.id) AS count_remaining')
            ->leftJoin('EasyjetSwissinsideCoreBundle:Actions', 'ac', \Doctrine\ORM\Query\Expr\Join::WITH, 'ac.idUser = u.idUser')
            ->leftJoin('EasyjetSwissinsideCoreBundle:TaskList', 'tl', \Doctrine\ORM\Query\Expr\Join::WITH, "tl.idAction = ac.id and tl.idRealisateur=0 and tl.idRealisateurNa=0 and (
                            ac.label = 'IT tasks validation from line manager' or
                            ac.label = 'IT tasks for a new employee' or
                            ac.label = 'ESP validated entrant IT tasks' or
                            ac.label = 'IT tasks for base transfer' or
                            ac.label = 'IT tasks for contractual changes' or
                            ac.label = 'IT tasks for leavers' or
                            ac.label = 'It tasks for base transfer EZS to EZY' or
                            ac.label = 'It tasks for base transfer EZY to EZS' or
                            ac.label = 'IT tasks for base transfer within EZS' or
                            ac.label = 'ESP validated leavers IT tasks'
                        )"
            )
        //->andWhere("tl.idRealisateur=0 and (ac.typeAction='pre_employment' or ac.typeAction like 'new_pilot_%')")
            ->groupBy('u.idUser');

        $output = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput($request, $queryBuilder, $nbResults);

        $fieldsList = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting();
        $fieldsList->addField('u.lastname');
        $fieldsList->addField('u.firstname');

        $fieldsList->addField('u.engagementDate');

        $fieldsList->addField('count_remaining');
        $output->sortingManager($fieldsList);

        $results = $queryBuilder->getQuery()->getResult();
        // Récupération de la liste des tâches
        $sql = "SELECT IFNULL(complex_tasks.label, task_list.label) as task_list_label, actions.label as action_label, id_realisateur, id_realisateur_na, task_list.id AS task_list_id, DATE_FORMAT(task_list.reminded_at, '%d/%m/%Y') AS reminded_at
                FROM task_list
                LEFT JOIN actions ON actions.id = task_list.id_action
                LEFT JOIN complex_tasks ON CONCAT('TC-', complex_tasks.id)=task_list.label
                WHERE (
                    actions.label='IT tasks validation from line manager' or
                    actions.label = 'IT tasks for a new employee' or
                    actions.label = 'ESP validated entrant IT tasks' or
                    actions.label = 'IT tasks for base transfer' or
                    actions.label = 'IT tasks for contractual changes' or
                    actions.label = 'IT tasks for leavers' or
                    actions.label = 'It tasks for base transfer EZS to EZY' or
                    actions.label = 'It tasks for base transfer EZY to EZS' or
                    actions.label = 'IT tasks for base transfer within EZS' or
                    actions.label = 'ESP validated leavers IT tasks') AND
                    actions.id_user=:userId AND
                    actions.disabled_by=0
                ORDER BY task_list.id";
        $stmt = $dbalConnexion->prepare($sql);

        foreach ($results as $currentResult) {
            $currentResult = $currentResult[0];
            $stmt->bindValue('userId', $currentResult->getIdUser());
            $stmt->execute();

            $listOfTasks = array();
            $remaining = 0;
            $totalTasks = 0;

            $previousAction = '';
            $result = $stmt->fetchAll();
            foreach ($result as $currentTask) {
                ++$totalTasks;

                if (!$currentTask['id_realisateur'] && !$currentTask['id_realisateur_na']) {
                    ++$remaining;
                }

                if ($previousAction != $currentTask['action_label']) {
                    $listOfTasks[] = array('action' => $currentTask['action_label'], 'tasks_list' => array());
                }

                // Add responsable to the task label
                $responsablesList = $this->getEntityManager()->getRepository('EasyjetSwissinsideCoreBundle:TaskList')->responsableList(
                    $dbalConnexion,
                    $currentTask['task_list_id']
                );

                $currentTask['task_list_label'] .= ' (responsables : '.implode(',', $responsablesList).')';

                $listOfTasks[count($listOfTasks) - 1]['tasks_list'][] = array(
                    'label' => $currentTask['task_list_label'],
                    'done' => $currentTask['id_realisateur'] > 0 || $currentTask['id_realisateur_na'] > 0 ? 1 : 0,
                    'id' => $currentTask['task_list_id'],
                    'remindedAt' => $currentTask['reminded_at'],
                );

                $previousAction = $currentTask['action_label'];
            }

            $output->addRow(array(
                $currentResult->getNomUser(),
                $currentResult->getPrenomUser(),
                $currentResult->getEngagementDate()->format('d/m/Y'),

                $remaining, // Nombre de taches restants
                '',
                $totalTasks,
                $listOfTasks,
            ));
        }

        return $output->output();
    }

    public function findRecentLeaversForDocuments()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('u')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where("u.leaveDate != '0000-00-00'")
            ->andWhere('(TO_DAYS(CURRENT_DATE()) - TO_DAYS(u.leaveDate)) >=-31 AND (TO_DAYS(CURRENT_DATE()) - TO_DAYS(u.leaveDate)) <= 140');

        return $queryBuilder->getQuery()->getResult();
    }

    public function findByIds($ids)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('u')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where('u.idUser in (:ids)')
            ->setParameter('ids', $ids);

        return $queryBuilder->getQuery()->getResult();
    }

    public function itsList()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('u')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where('u.accesOk = 3')
            ->andWhere('u.active = 1');

        return $queryBuilder->getQuery()->getResult();
    }

    public function adminsList()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('u')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where('u.accesOk = 2')
            ->andWhere('u.active = 1');

        return $queryBuilder->getQuery()->getResult();
    }

    public function rosteringList()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('u')
            ->from('EasyjetSwissinsideCoreBundle:User', 'u')
            ->where('u.idUser IN(SELECT rtu.idUser FROM EasyjetSwissinsideCoreBundle:RosteringTeam as rt LEFT JOIN rt.user AS rtu)')
            ->andWhere('u.active = 1');

        return $queryBuilder->getQuery()->getResult();
    }

    public function keyedByEmpnoUsersList($dbalConnexion)
    {
        /*
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select("u")
        ->from("EasyjetSwissinsideCoreBundle:User", "u");

        $buffer = $queryBuilder->getQuery()->getResult();
        $return = array();
        foreach ($buffer as $currentUser) {
        $return[$currentUser->getLogUser()] = $currentUser->getIdUser();
        $this->getEntityManager()->detach($currentUser);
        }
        var_dump($return);
        return $return;*/
        $return = array();
        $sql = 'SELECT id_user, log_user FROM users';
        $stmt = $dbalConnexion->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $currentUser) {
            $return[$currentUser['log_user']] = $currentUser['id_user'];
        }

        return $return;
    }
}
