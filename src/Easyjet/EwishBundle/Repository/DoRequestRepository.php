<?php

namespace App\Easyjet\EwishBundle\Repository;

use App\Easyjet\EwishBundle\Entity\DoRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Easyjet\SwissinsideCoreBundle\Classes\TimeFormat;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * @extends ServiceEntityRepository<DoRequest>
 *
 * @method DoRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method DoRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method DoRequest[]    findAll()
 * @method DoRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoRequest::class);
    }

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param boolean $isAdmin
     * @param int $idUser
     * @return array Datatable formatted array
     */
    public function doRequestDatatableResults(\Symfony\Component\HttpFoundation\Request $request, $isAdmin, $idUser)
    {
       
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("COUNT(r)")
            ->from("EasyjetEwishBundle:DoRequest", "r")
            ->leftJoin("r.ewishUser", "u")
            ->where("u.activeUser = 1");

        $selDateFrom =  $request->get("ewishFrom");
        $selDateTo =  $request->get("ewishTo");

        if (!empty($selDateFrom) && !empty($selDateTo)) {
            $dateFrom =  TimeFormat::convertDateFranceToEnglish($selDateFrom);
            $dateTo   = TimeFormat::convertDateFranceToEnglish($selDateTo);
        } else {
            if (date("d") <= 5) {
                $nbMonths = 2;
            } else {
                $nbMonths = 3;
            }
            $month = date("m") + $nbMonths;
            $year = date("Y");

            if ($month > 12) {
                $month =  $month - 12;
                $year++;
            }

            if (strlen($month) == 1) $month = "0" . $month;

            $dateFrom = "01/" . $month . "/" . $year;
            $dateTo   = TimeFormat::daysInMonth($month, $year) . "/" . $month . "/" . $year;
            $dateFrom =  TimeFormat::convertDateFranceToEnglish($dateFrom);
            $dateTo   = TimeFormat::convertDateFranceToEnglish($dateTo);
        }

        $queryBuilder->andWhere("((r.debut >= :dateFrom  AND r.debut <= :dateTo) OR (r.fin >= :dateFrom  AND r.fin <= :dateTo) )")
            ->setParameter('dateFrom', $dateFrom)
            ->setParameter('dateTo', $dateTo);


        if (!$isAdmin) {
            $queryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }
        if ($request->get("selectedUser")) {
            $queryBuilder
                ->andWhere("(u.logUser like :selectedUser or u.prenomUser like :selectedUser or u.nomUser like :selectedUser)")
                ->setParameter("selectedUser", "%" . $request->get("selectedUser") . "%");
        }
        if ($request->get("selectedStatus") != 'all') {
            $queryBuilder
                ->andWhere("r.etat = :selectedStatus")
                ->setParameter("selectedStatus",  $request->get("selectedStatus"));
        }
        if ($request->get("selectedStation")) {
            $queryBuilder
                ->andWhere("u.idStation = :selectedStation")
                ->setParameter("selectedStation",  $request->get("selectedStation"));
        }
        if ($request->get("typesEftrIds")) {
            $queryBuilder
                ->andWhere("u.typeEftr IN (:typesEftrIds) ")
                ->setParameter("typesEftrIds",  $request->get("typesEftrIds"));
        }

        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();

        $queryBuilder->select("r")
            ->addSelect("u");

        if ($isAdmin) {
            $queryBuilder->orderBy("r.requestDate", "ASC");
        } else {
            $queryBuilder->orderBy("r.requestDate", "DESC");
        }

        $queryBuilder->groupBy('r.id');

        $output     = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        $fieldsList = new AjaxDatatableSorting();

        $fieldsList->addField("u.logUser");
        $fieldsList->addField("u.prenomUser");
        $fieldsList->addField("u.nomUser");
        $output->sortingManager($fieldsList);

        $results = $queryBuilder->getQuery()->getResult();

        foreach ($results as $currentResult) {

            $request =  TimeFormat::convertDateIntoFrance($currentResult->getDebut()->format("Y-m-d"));

            if ($currentResult->getDebut() != $currentResult->getFin()) {
                $request .= " - " . TimeFormat::convertDateIntoFrance($currentResult->getFin()->format("Y-m-d"));
            }

            $cutComment = htmlentities(TimeFormat::cutSentence($currentResult->getComment(), 100), ENT_COMPAT, "UTF-8");
            $comment = htmlentities($currentResult->getComment(), ENT_COMPAT, "UTF-8");

            if ($comment != $cutComment) {
                $comment = str_replace("\n", "<br />", $comment);
                $comment = str_replace("\r", "<br />", $comment);
                $cutComment = $cutComment;
            } else {
                $cutComment = '';
            }

            $output->addRow(array(
                $currentResult->getEwishUser() ? $currentResult->getEwishUser()->getNomUser() : '',
                $currentResult->getEwishUser() ? $currentResult->getEwishUser()->getPrenomUser() : '',
                TimeFormat::convertDateIntoFrance($currentResult->getRequestDate()->format("Y-m-d")),
                $request,
                $comment,
                $currentResult->getEtat(),
                $currentResult->getId(),
                $cutComment
            ));
        }

        return $output->output();
    }


    /**
     * Return a doRequest data by id
     * @param int $id
     * @return array doRequest data by id
     */
    public function getDoRequestById($id)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $result = $queryBuilder->select("r")
            ->addSelect("u")
            ->from("EasyjetEwishBundle:DoRequest", "r")
            ->leftjoin("r.ewishUser", "u")
            ->where('r.id = :doRequestId')
            ->setParameter('doRequestId', $id)->getQuery()->getOneOrNullResult();

        $user = $result->getEwishUser() ? $result->getEwishUser()->getLogUser() . " (" . $result->getEwishUser()->getNomUser() . " " . $result->getEwishUser()->getPrenomUser() . ")" : '';
        $date = TimeFormat::convertDateIntoFrance($result->getRequestDate()->format("Y-m-d"));
        $period = TimeFormat::convertDateIntoFrance($result->getDebut()->format("Y-m-d"));
        if ($result->getDebut()->format("Y-m-d") != $result->getFin()->format("Y-m-d")) {
            $period .= " - " . TimeFormat::convertDateIntoFrance($result->getFin()->format("Y-m-d"));
        }
        $data['user'] =  $user;
        $data['date'] =  $date;
        $data['period'] =  $period;
        $data['comment'] =  htmlentities($result->getComment(), ENT_COMPAT, "UTF-8");
        $data['selectedStatus'] =  (string) $result->getEtat();
        $data['id'] =  $result->getId();
        return $data;
    }
 

    /**
     * Return a user doRequest data
     * @param string $from
     * @param string $to
     * @param int $idUser
     * @return array user doRequest data
     */
    public function getUserDoRequestData($from, $to, $idUser)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $result = $queryBuilder->select("r")
            ->from("EasyjetEwishBundle:DoRequest", "r")
            ->where('r.idUser = :idUser')
            ->andWhere('r.debut >= :from')
            ->andWhere('r.debut <= :to')
            ->setParameters(['idUser' => $idUser, 'from' => $from, 'to' => $to])
            ->getQuery()->getResult();
        return    $result;
    }

    
    /**
     * Returns an array with the wish numbers for the past month as a parameter
     * @param string $date
     * @param int $total
     * @param int $idUser
     * @return array an array with the wish numbers for the past month as a parameter
     */
    public function getWishList($date, $total, $idUser)
    {
        list($y, $m, $d) = explode("-", $date);
        $y2 = $y;
        $m2 = $m;
        $d2 = $d;
        $total = 0;
        // We retrieve the wish list for the requested month

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $result = $queryBuilder->select("r")
            ->from("EasyjetEwishBundle:DoRequest", "r")
            ->where('r.idUser = :idUser')
            ->andWhere('MONTH(r.debut) = :from')
            ->andWhere('YEAR(r.debut) = :to')
            ->setParameters(['idUser' => $idUser, 'from' => $m, 'to' => $y])
            ->getQuery()->getResult();
     
        $wishList = [];

        foreach ($result as $res) {
            list($wishFromYear, $wishFromMonth, $wishFromDay) = explode("-", $res->getDebut()->format('Y-m-d'));
            list($wishToYear, $wishToMonth, $wishToDay) = explode("-", $res->getFin()->format('Y-m-d'));
            if ($wishFromMonth == $wishToMonth) {
                $nb = TimeFormat::numberOfDaysBetweenTwoDates($res->getDebut()->format('Y-m-d'), $res->getFin()->format('Y-m-d'));
                $wishList[] = $nb;
            } else {
                $nb = TimeFormat::numberOfDaysBetweenTwoDates($res->getDebut()->format('Y-m-d'), $wishFromYear . "-" . $wishFromMonth . "-" . TimeFormat::daysInMonth($wishFromMonth, $wishFromYear));
                $wishList[] = $nb;
            }

            $total += $nb;
        }

        // You must then retrieve the wish ends of the previous month (starting the previous month and ending the requested month)
        $m2--;
        if ($m2 == 0) {
            $m2 = 12;
            $y2--;
        }
        if (strlen($m2) == 1) {
            $m2 = "0" . $m2;
        }

        if (strlen($d2) == 1) {
            $d2 = "0" . $d2;
        }


        $result = $queryBuilder->select("r1")
            ->from("EasyjetEwishBundle:DoRequest", "r1")
            ->where('r1.idUser = :idUser')
            ->andWhere('MONTH(r1.debut) = :month2')
            ->andWhere('YEAR(r1.debut) = :year2')
            ->andWhere('MONTH(r1.fin) = :month')
            ->andWhere('YEAR(r1.fin) = :year')
            ->setParameters(['idUser' => $idUser, 'month2' => $m2, 'year2' => $y2, 'month' => $m, 'year' => $y])
            ->getQuery()->getResult();


        foreach ($result as $res) {
            $nb = TimeFormat::numberOfDaysBetweenTwoDates($y . "-" . $m . "-01", $res->getFin()->format('Y-m-d'));
            $wishList[] = $nb;
        }

        return $wishList;
    }

    /**
     * Returns an array with the wish numbers for the past month as a parameter
     * @param string $date
     * @param int $idUser
     * @return array an array with the wish numbers for the past month as a parameter
     */
    public function hasAlreadyEndYearDays($date, $idUser)
    {
        list($y, $m, $d) = explode("-", $date);
        $from = date("Y-m-d", mktime(0, 0, 0, $m, (int) $d - 20, (int) $y));
        $to = date("Y-m-d", mktime(0, 0, 0, $m, (int) $d + 20, (int) $y));
        $wishList = null;

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $results = $queryBuilder->select("r")
            ->from("EasyjetEwishBundle:DoRequest", "r")
            ->where('r.idUser = :idUser')
            ->andWhere('r.debut >= :start')
            ->andWhere('r.fin <= :end')
            ->setParameters(['idUser' => $idUser, 'start' => $from, 'end' => $to])
            ->getQuery()->getResult();

        foreach ($results as $res) {
            $nbDays = TimeFormat::numberOfDaysBetweenTwoDates($res->getDebut()->format('Y-m-d'), $res->getFin()->format('Y-m-d'));
            $wishList[] = $res->getDebut()->format('Y-m-d');
            if ($nbDays > 1) {
                list($year, $month, $day) = explode("-", $res->getDebut()->format('Y-m-d'));
                $jour2 = date("Y-m-d", mktime(0, 0, 0, (int) $month, (int) $day + 1, (int) $year));
                $jour3 = date("Y-m-d", mktime(0, 0, 0, (int) $month, (int) $day + 2, (int) $year));

                $wishList[] = $jour2;
                if ($nbDays == 3) {
                    $wishList[] = $jour3;
                }
            }
        }

        if (!$wishList) {
            return false;
        }

        return TimeFormat::inEndOfYear($wishList);
    }

    public function add(DoRequest $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DoRequest $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
