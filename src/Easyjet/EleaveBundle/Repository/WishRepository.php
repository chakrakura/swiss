<?php

namespace App\Easyjet\EleaveBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Easyjet\EleaveBundle\Entity\Wish;
use App\Easyjet\SwissinsideCoreBundle\Classes\TimeFormat;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * @extends ServiceEntityRepository<Wish>
 *
 * @method Wish|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wish|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wish[]    findAll()
 * @method Wish[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class WishRepository extends ServiceEntityRepository
{

    const WISH_TYPE_CABIN = "CABIN";
    const WISH_TYPE_OFFICE = "OFFICE";

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wish::class);
    }

    public function add(Wish $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * 
     * @param type $wishType
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param isAdmin $isAdmin
     * @param \Easyjet\UmanBundle\Entity\Users $idUser
     * @return array
     */
    public function wishesDatatableResults($wishType, \Symfony\Component\HttpFoundation\Request $request, $isAdmin, $idUser)
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $queryBuilder
            ->select("COUNT(w)")
            ->from("App\Easyjet\EleaveBundle\Entity\Wish", "w")
            ->join("w.user", "u")
            ->leftJoin("u.typeEftr", "te");


        $from = $request->get("from");
        $to = $request->get("to");
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $from)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $from);
            $from = $datetime->format("Y-m-d");
        } else {
            $from = "2000-01-01";
        }
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $to)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $to);
            $to = $datetime->format("Y-m-d");
        } else {
            $to = "2900-01-01";
        }

        $queryBuilder->where(
            "(((:from <= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End <= :to) OR (:from >= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End >= :to) OR (:from >= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End <= :to) OR (:from <= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End >= :to)) OR
                        ((:from <= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End <= :to) OR (:from >= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End >= :to) OR (:from >= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End <= :to) OR (:from <= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End >= :to)) OR
                        ((:from <= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End <= :to) OR (:from >= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End >= :to) OR (:from >= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End <= :to) OR (:from <= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End >= :to)))"
        );
        $queryBuilder
            ->setParameter("from", $from)
            ->setParameter("to", $to);

        switch ($wishType) {
            case self::WISH_TYPE_CABIN:
                $queryBuilder->andWhere("w.requestType = 0");
                break;
            case self::WISH_TYPE_OFFICE:
                $queryBuilder->andWhere("w.requestType = 1");
                break;
        }

        if ($request->get("id_station")) {
            $queryBuilder->andWhere("u.idStation=:idStation")->setParameter("idStation", $request->get("id_station"));
        }
        if ($request->get("sSearch")) {
            $queryBuilder
                ->andWhere("(u.logUser like :query or u.prenomUser like :query or u.nomUser like :query)")
                ->setParameter("query", "%" . $request->get("sSearch") . "%");
        }

        if ($request->get("eleaveUser")) {
            $queryBuilder->andWhere("(u.nomUser like :eleaveUser or u.prenomUser like :eleaveUser or u.logUser like :eleaveUser)")->setParameter("eleaveUser", $request->get("eleaveUser"));
        }

        if ($request->get("choice1_leave_preference")) {
            $queryBuilder->andWhere("w.choice1LeavePreference IN(:choice1LeavePreference)")->setParameter("choice1LeavePreference", $request->get("choice1_leave_preference"));
        }

        if ($request->get("contracts")) {
            $contracts = $request->get("contracts"); //explode(",", $request->get("contracts"));
            $queryBuilder->andWhere("te.id IN(:contracts)")->setParameter("contracts", $contracts);
        }
        if ($request->get("state") !== null && $request->get("state") != "all") {
            $queryBuilder->andWhere("w.state=:state")->setParameter("state", $request->get("state"));
        }

        if (!$isAdmin) {
            $queryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }

        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();

        $queryBuilder->select("w")
            ->addSelect("u");



        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);

        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("te.type");
        $fieldsList->addField("w.requestDate");
        $fieldsList->addField("");
        $fieldsList->addField("");
        $fieldsList->addField("w.state");
        $fieldsList->addField("w.choice1LeavePreference");
        $fieldsList->addField("");
        $fieldsList->addField("");
        $fieldsList->addField("");
        $fieldsList->addField("");


        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {

            $limitDate = \DateTime::createFromFormat("d/m/Y", "01/01/1990");
            if ($currentResult->getChoice1Accepted() > $limitDate) {
                $selectedFrom = $currentResult->getChoice1Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice1End()->format("d/m/Y");
            } elseif ($currentResult->getChoice2Accepted() > $limitDate) {
                $selectedFrom = $currentResult->getChoice2Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice2End()->format("d/m/Y");
            } elseif ($currentResult->getChoice3Accepted() > $limitDate) {
                $selectedFrom = $currentResult->getChoice3Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice3End()->format("d/m/Y");
            } else {
                $selectedFrom = $currentResult->getChoice1Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice1End()->format("d/m/Y");
            }

            $output->addRow(array(
                $currentResult->getUser()->__toString() . " (" . $currentResult->getUser()->getWorkRatioPercent() . ")",
                $currentResult->getUser()->getIdTypeEftr() ? $currentResult->getUser()->getTypeEftr()->getType() : $currentResult->getUser()->getIdTypeEftr(),
                $currentResult->getRequestDate()->format("d/m/Y"),
                $currentResult->getCommentUser(),
                "",
                $currentResult->getState(),
                $currentResult->getChoice1LeavePreference(),
                $currentResult->getId(),
                $isAdmin || $currentResult->getState() == 0  ? 1 : 0,
                $selectedFrom,
                $selectedTo
            ));
        }

        return $output->output();
    }

    /** 
     * @param type $wishType
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param isAdmin $isAdmin
     * @param \Easyjet\UmanBundle\Entity\Users $idUser
     * @return array
     */
    public function wishesToCsv($wishType, \Symfony\Component\HttpFoundation\Request $request, $isAdmin, $idUser)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("COUNT(w)")
            ->from("App\Easyjet\EleaveBundle\Entity\Wish", "w")
            ->join("w.user", "u")
            ->leftJoin("u.typeEftr", "te");


        switch ($wishType) {
            case self::WISH_TYPE_CABIN:
                $queryBuilder->andWhere("w.requestType = 0");
                break;
            case self::WISH_TYPE_OFFICE:
                $queryBuilder->andWhere("w.requestType = 1");
                break;
        }


        $from = $request->get("from");
        $to = $request->get("to");
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $from)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $from);
            $from = $datetime->format("Y-m-d");
        } else {
            $from = "2000-01-01";
        }
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $to)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $to);
            $to = $datetime->format("Y-m-d");
        } else {
            $to = "2900-01-01";
        }

        $queryBuilder->where(
            "(((:from <= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End <= :to) OR (:from >= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End >= :to) OR (:from >= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End <= :to) OR (:from <= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End >= :to)) OR
                ((:from <= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End <= :to) OR (:from >= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End >= :to) OR (:from >= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End <= :to) OR (:from <= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End >= :to)) OR
                ((:from <= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End <= :to) OR (:from >= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End >= :to) OR (:from >= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End <= :to) OR (:from <= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End >= :to)))"
        );
        $queryBuilder
            ->setParameter("from", $from)
            ->setParameter("to", $to);

        if ($request->get("sSearch")) {
            $queryBuilder
                ->andWhere("(u.logUser like :query or u.prenomUser like :query or u.nomUser like :query)")
                ->setParameter("query", "%" . $request->get("sSearch") . "%");
        }
        if ($request->get("id_station")) {
            $queryBuilder->andWhere("u.idStation=:idStation")->setParameter("idStation", $request->get("id_station"));
        }

        if ($request->get("eleaveUser")) {
            $queryBuilder->andWhere("(u.nomUser like :eleaveUser or u.prenomUser like :eleaveUser or u.logUser like :eleaveUser)")->setParameter("eleaveUser", $request->get("eleaveUser"));
        }

        if ($request->get("state") !== null && $request->get("state") != "all") {
            $queryBuilder->andWhere("w.state=:state")->setParameter("state", $request->get("state"));
        }

        if ($request->get("choice1_leave_preference")) {
            $queryBuilder->andWhere("w.choice1LeavePreference IN(:choice1LeavePreference)")->setParameter("choice1LeavePreference", $request->get("choice1_leave_preference"));
        }

        if ($request->get("contracts")) {
            $contracts = $request->get("contracts"); //explode(",", $request->get("contracts"));
            $queryBuilder->andWhere("te.id IN(:contracts)")->setParameter("contracts", $contracts);
        }

        if (!$isAdmin) {
            $queryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }

        $queryBuilder->select("w")
            ->addSelect("u");
        $results = $queryBuilder->getQuery()->getResult();
        $output = "";

        ob_start();
        $hCsv = fopen('php://output', "r+");
        $headers = array(
            "Request ID",
            "Staff",
            "Name",
            "Surname",
            "Base",
            "Contract",
            "Choice preference",
            "Date of request",
            "First Choice (from)",
            "First Choice (to)",
            "Second choice (from)",
            "Second choice (to)",
            "Third choice (from)",
            "Third choice (to)",
            "Status",
            "Comment",
            "Choice accepted"
        );
        fputcsv($hCsv, $headers);

        $allStations = $this->getEntityManager()->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->findAll();
        $stationsArray = array();
        foreach ($allStations as $station) {
            $stationsArray[$station->getIdStation()] = $station->getIataCode();
        }

        foreach ($results as $currentResult) {
            $choosen = null;
            if ($currentResult->getChoice1Accepted()->format("y") != -1) {
                $choosen = 1;
            } elseif ($currentResult->getChoice2Accepted()->format("y") != -1) {
                $choosen = 2;
            } elseif ($currentResult->getChoice3Accepted()->format("y") != -1) {
                $choosen = 3;
            }

            $status = "";
            switch ($currentResult->getState()) {
                case 1:
                    $status = "Refused";
                    break;
                case 2:
                    $status = "Accepted";
                    break;
                default:
                    $status = "Pending";
                    break;
            }

            $line = array(
                $currentResult->getId(),
                $currentResult->getUser()->getLogUser(),
                $currentResult->getUser()->getPrenomUser(),
                $currentResult->getUser()->getNomUser(),
                $currentResult->getUser()->getIdStation() ? $stationsArray[$currentResult->getUser()->getIdStation()] : '',
                $currentResult->getChoice1LeavePreference(),
                $currentResult->getUser()->getIdTypeEftr() ? $currentResult->getUser()->getTypeEftr()->getType() : $currentResult->getUser()->getIdTypeEftr(),
                $currentResult->getRequestDate()->format("y") != -1 ? $currentResult->getRequestDate()->format("d/m/Y") : "",
                $currentResult->getChoice1Start()->format("y") != -1 ? $currentResult->getChoice1Start()->format("d/m/Y") : "",
                $currentResult->getChoice1End()->format("y") != -1 ? $currentResult->getChoice1End()->format("d/m/Y") : "",
                $currentResult->getChoice2Start()->format("y") != -1 ? $currentResult->getChoice2Start()->format("d/m/Y") : "",
                $currentResult->getChoice2End()->format("y") != -1 ? $currentResult->getChoice2End()->format("d/m/Y") : "",
                $currentResult->getChoice3Start()->format("y") != -1 ? $currentResult->getChoice3Start()->format("d/m/Y") : "",
                $currentResult->getChoice3End()->format("y") != -1 ? $currentResult->getChoice3End()->format("d/m/Y") : "",
                $status,
                $currentResult->getCommentUser(),
                $choosen
            );

            fputcsv($hCsv, $line);
        }

        fclose($hCsv);
        $csvContent = utf8_decode(ob_get_clean());
        return $csvContent;
    }


    /**
     * 
     * @param type $wishType
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Easyjet\UmanBundle\Entity\Users $idUser
     * @param isRostering $isRostering
     * @param isEcAdmin $isEcAdmin
     * @return array
     */
    public function ecWishesDatatableResults(\Symfony\Component\HttpFoundation\Request $request, $idUser, $isRostering = false, $isEcAdmin = false)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("COUNT(w)")
            ->from("App\Easyjet\EleaveBundle\Entity\Wish", "w")
            ->leftJoin("w.user", "u")
            ->leftJoin("u.typeEftr", "te");

        $from = $request->get("from");
        $to = $request->get("to");
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $from)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $from);
            $from = $datetime->format("Y-m-d");
        } else {
            $from = "2000-01-01";
        }
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $to)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $to);
            $to = $datetime->format("Y-m-d");
        } else {
            $to = "2900-01-01";
        }

        $queryBuilder->where(
            "(((:from <= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End <= :to) OR (:from >= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End >= :to) OR (:from >= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End <= :to) OR (:from <= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End >= :to)) OR
                ((:from <= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End <= :to) OR (:from >= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End >= :to) OR (:from >= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End <= :to) OR (:from <= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End >= :to)) OR
                ((:from <= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End <= :to) OR (:from >= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End >= :to) OR (:from >= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End <= :to) OR (:from <= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End >= :to)))"
        );
        $queryBuilder
            ->setParameter("from", $from)
            ->setParameter("to", $to);

        if ($request->get("sSearch")) {
            $queryBuilder->andWhere("(u.nomUser like :query or u.prenomUser like :query or u.logUser like :query)")
                ->setParameter("query", "%" . $request->get("sSearch") . "%");
        }

        $queryBuilder->andWhere("w.requestType = 2");

        if ($request->get("id_station")) {
            $queryBuilder->andWhere("u.idStation=:idStation")->setParameter("idStation", $request->get("id_station"));
        }

        if ($request->get("state") !== null && $request->get("state") != "all") {
            $queryBuilder->andWhere("w.state=:state")->setParameter("state", $request->get("state"));
        }

        if (!$isRostering && !$isEcAdmin) {
            $queryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();

        $queryBuilder->select("w")
            ->addSelect("u");

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);

        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("te.type");
        $fieldsList->addField("w.requestDate");
        $fieldsList->addField("");
        $fieldsList->addField("");
        $fieldsList->addField("w.state");
        $fieldsList->addField("w.choice1LeavePreference");
        $fieldsList->addField("");
        $fieldsList->addField("");
        $fieldsList->addField("");
        $fieldsList->addField("");



        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {

            $limitDate = \DateTime::createFromFormat("d/m/Y", "01/01/1990");
            if ($currentResult->getChoice1Accepted() > $limitDate) {
                $selectedFrom = $currentResult->getChoice1Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice1End()->format("d/m/Y");
            } elseif ($currentResult->getChoice2Accepted() > $limitDate) {
                $selectedFrom = $currentResult->getChoice2Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice2End()->format("d/m/Y");
            } elseif ($currentResult->getChoice3Accepted() > $limitDate) {
                $selectedFrom = $currentResult->getChoice3Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice3End()->format("d/m/Y");
            } else {
                $selectedFrom = $currentResult->getChoice1Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice1End()->format("d/m/Y");
            }

            $output->addRow(array(
                $currentResult->getUser()->__toString() . " (" . $currentResult->getUser()->getWorkRatioPercent() . ")",
                $currentResult->getUser()->getIdTypeEftr() ? $currentResult->getUser()->getTypeEftr()->getType() : $currentResult->getUser()->getIdTypeEftr(),
                $currentResult->getRequestDate()->format("d/m/Y"),
                $currentResult->getCommentUser(),
                "",
                $currentResult->getState(),
                $currentResult->getChoice1LeavePreference(),
                $currentResult->getId(),
                $currentResult->getUser()->getIdUser() == $idUser && $currentResult->getState() == 0 ? 1 : 0,
                $selectedFrom,
                $selectedTo
            ));
        }

        return $output->output();
    }


    /**
     * 
     * @param type $wishType
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Easyjet\UmanBundle\Entity\Users $idUser
     * @param isLineManager $isLineManager
     * @param isOfficeAdmin $isOfficeAdmin
     * @return array
     */
    public function officeWishesDatatableResults($wishType, \Symfony\Component\HttpFoundation\Request $request, $idUser, $isLineManager, $isOfficeAdmin)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("COUNT(w)")
            ->from("App\Easyjet\EleaveBundle\Entity\Wish", "w")
            ->join("w.user", "u")
            ->leftJoin("u.typeEftr", "te");

        $from = $request->get("from");
        $to = $request->get("to");
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $from)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $from);
            $from = $datetime->format("Y-m-d");
        } else {
            $from = "2000-01-01";
        }
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $to)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $to);
            $to = $datetime->format("Y-m-d");
        } else {
            $to = "2900-01-01";
        }

        $queryBuilder->where(
            "(((:from <= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End <= :to) OR (:from >= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End >= :to) OR (:from >= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End <= :to) OR (:from <= w.choice1Start AND w.choice1Start <= :to AND w.choice1End >= :from AND w.choice1End >= :to)) OR
                        ((:from <= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End <= :to) OR (:from >= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End >= :to) OR (:from >= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End <= :to) OR (:from <= w.choice2Start AND w.choice2Start <= :to AND w.choice2End >= :from AND w.choice2End >= :to)) OR
                        ((:from <= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End <= :to) OR (:from >= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End >= :to) OR (:from >= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End <= :to) OR (:from <= w.choice3Start AND w.choice3Start <= :to AND w.choice3End >= :from AND w.choice3End >= :to)))"
        );
        $queryBuilder
            ->setParameter("from", $from)
            ->setParameter("to", $to);

        switch ($wishType) {
            case self::WISH_TYPE_CABIN:
                $queryBuilder->andWhere("w.requestType = 0");
                break;
            case self::WISH_TYPE_OFFICE:
                $queryBuilder->andWhere("w.requestType = 1");
                break;
        }
        if ($request->get("sSearch")) {
            $queryBuilder
                ->andWhere("(u.logUser like :query or u.prenomUser like :query or u.nomUser like :query)")
                ->setParameter("query", "%" . $request->get("sSearch") . "%");
        }

        if ($request->get("id_station")) {
            $queryBuilder->andWhere("u.idStation=:idStation")->setParameter("idStation", $request->get("id_station"));
        }

        if ($request->get("state") !== null && $request->get("state") != "all") {
            $queryBuilder->andWhere("w.state=:state")->setParameter("state", $request->get("state"));
        }

        if ($request->get("contracts")) {
            $contracts = $request->get("contracts"); //explode(",", $request->get("contracts"));
            $queryBuilder->andWhere("te.id IN(:contracts)")->setParameter("contracts", $contracts);
        }

        if (!$isLineManager && !$isOfficeAdmin) {
            $queryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }

        if ($isLineManager) {
            $queryBuilder->andWhere('(u.idLineManager=:idUser or u.idUser=:idUser)')->setParameter("idUser", $idUser);
        }
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();

        $queryBuilder->select("w")
            ->addSelect("u");

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);

        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("te.type");
        $fieldsList->addField("w.requestDate");
        $fieldsList->addField("");
        $fieldsList->addField("");
        $fieldsList->addField("w.state");


        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {

            $limitDate = \DateTime::createFromFormat("d/m/Y", "01/01/1990");
            if ($currentResult->getChoice1Accepted() > $limitDate) {
                $selectedFrom = $currentResult->getChoice1Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice1End()->format("d/m/Y");
            } elseif ($currentResult->getChoice2Accepted() > $limitDate) {
                $selectedFrom = $currentResult->getChoice2Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice2End()->format("d/m/Y");
            } elseif ($currentResult->getChoice3Accepted() > $limitDate) {
                $selectedFrom = $currentResult->getChoice3Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice3End()->format("d/m/Y");
            } else {
                $selectedFrom = $currentResult->getChoice1Start()->format("d/m/Y");
                $selectedTo = $currentResult->getChoice1End()->format("d/m/Y");
            }

            $output->addRow(array(
                $currentResult->getUser()->__toString(),
                $currentResult->getUser()->getIdTypeEftr() ? $currentResult->getUser()->getTypeEftr()->getType() : $currentResult->getUser()->getIdTypeEftr(),
                $currentResult->getRequestDate()->format("d/m/Y"),
                $currentResult->getCommentUser(),
                "",
                $currentResult->getState(),
                $currentResult->getId(),
                $currentResult->getUser()->getIdUser() == $idUser && $currentResult->getState() == 0 ? 1 : 0,
                $selectedFrom,
                $selectedTo
            ));
        }

        return $output->output();
    }


    /**
     * 
     * @param int $userId
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array
     */
    public function checkUserExistingLeaves(\Symfony\Component\HttpFoundation\Request $request, $userId)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $results =  $queryBuilder
            ->select("COUNT(w)")
            ->from("App\Easyjet\EleaveBundle\Entity\Wish", "w")
            ->where("w.user=:idUser")->setParameter("idUser", $userId)
            ->andWhere("w.state!=1")
            ->andWhere("w.choice1Start=:choice1Start")->setParameter("choice1Start", \DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice1_start'))))
            ->andWhere("w.choice1End=:choice1End")->setParameter("choice1End", \DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice1_end'))))
            ->andWhere("w.choice1LeavePreference=:choice1LeavePreference")->setParameter("choice1LeavePreference", $request->request->get('choice1_leave_preference'))
            ->getQuery()->getSingleScalarResult();
        return  $results;
    }

    /**
     * 
     * @param int $id
     * @return array
     */
    public function getWishData($id, $isAdmin,  $userId)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("w")
            ->addSelect("u")
            ->from("App\Easyjet\EleaveBundle\Entity\Wish", "w")
            ->join("w.user", "u")
            ->where("w.id=:id")->setParameter("id", $id);

        if (!$isAdmin) {
            $queryBuilder->andWhere("w.user=:idUser")->setParameter("idUser", $userId);
        }
        $result =  $queryBuilder->getQuery()->getOneOrNullResult();
        return  $result;
    }

    /**
     * @return array
     */
    public function updateWishData($file)
    {
        if (($handle = fopen($file->getRealPath(), "r")) !== FALSE) {

            $header = fgetcsv($handle, 1000, ",", "'");
            $str_request_id = '';

            $queryBuilder = $this->getEntityManager()->createQueryBuilder();

            while (($data = fgetcsv($handle, 1000, ",", "'")) !== FALSE) { // Check opening the file is OK!

                $requestId = $data[0];
                $state = $data[5];

                if ($state == '') {
                    $str_request_id .= $requestId . ", ";
                    $state = 0;
                }
                $refus = $state == 1 ? $data[6] : 0;

                $choiceAccepted = $data[11];
                $choice1Accepted = "0000-00-00";
                $choice2Accepted = "0000-00-00";
                $choice3Accepted = "0000-00-00";
                $totalLeaveDayDue = "0.00";
                $totalLeaveDayConfirmed = "0.00";
                $totalLeaveDayTaken = "0.00";
                $remainingLeave = "0.00";

                $datetime = $time = new \DateTime();
                $currentDate = $datetime->format("Y-m-d");

                if ($state == 2 && $choiceAccepted != '') {
                    if ($choiceAccepted == 1) {
                        $choice1Accepted =  \DateTime::createFromFormat('Y-m-d', $currentDate);
                    } else if ($choiceAccepted == 2) {
                        $choice2Accepted =  \DateTime::createFromFormat('Y-m-d', $currentDate);
                    } else if ($choiceAccepted == 3) {
                        $choice3Accepted =  \DateTime::createFromFormat('Y-m-d', $currentDate);
                    }

                    $totalLeaveDayDue =  isset($data[7]) ? $data[7] : "0.00";
                    $totalLeaveDayConfirmed =  isset($data[8]) ? $data[8] : "0.00";
                    $totalLeaveDayTaken =  isset($data[9]) ? $data[9] : "0.00";
                    $remainingLeave =  isset($data[10]) ? $data[10] : "0.00";
                } else if ($state == 2 && $choiceAccepted == '') {
                    $str_request_id .= $requestId . ", ";
                }


                $query = $queryBuilder->update('App\Easyjet\EleaveBundle\Entity\Wish', 'w')
                    ->set('w.state', ':state')
                    ->set('w.motifRefus', ':motifRefus')
                    ->set('w.choice1Accepted', ':choice1Accepted')
                    ->set('w.choice2Accepted', ':choice2Accepted')
                    ->set('w.choice3Accepted', ':choice3Accepted')
                    ->set('w.totalLeaveDayDue', ':totalLeaveDayDue')
                    ->set('w.totalLeaveDayConfirmed', ':totalLeaveDayConfirmed')
                    ->set('w.totalLeaveDayTaken', ':totalLeaveDayTaken')
                    ->set('w.remainingLeave', ':remainingLeave')

                    ->where('w.id = :requestId')
                    ->setParameter('state', $state)
                    ->setParameter('motifRefus', $refus)
                    ->setParameter('choice1Accepted', $choice1Accepted)
                    ->setParameter('choice2Accepted', $choice2Accepted)
                    ->setParameter('choice3Accepted', $choice3Accepted)
                    ->setParameter('totalLeaveDayDue', $totalLeaveDayDue)
                    ->setParameter('totalLeaveDayConfirmed', $totalLeaveDayConfirmed)
                    ->setParameter('totalLeaveDayTaken', $totalLeaveDayTaken)
                    ->setParameter('remainingLeave', $remainingLeave)
                    ->setParameter('requestId', $requestId)
                    ->getQuery();
                $query->execute();
            }
        }
        fclose($handle);
        if ($str_request_id) {
            $str_request_id = rtrim($str_request_id, ", ");
            return $str_request_id;
        } else
            return true;
    }

    /**
     * @return array
     */
    public function mailData($file)
    {

        if (($handle = fopen($file->getRealPath(), "r")) !== FALSE) {

            $header = fgetcsv($handle, 1000, ",", "'");
            $mailArrayResult = array();

            while (($data = fgetcsv($handle, 1000, ",", "'")) !== FALSE) {
                $requestId = $data[0];
                $state = $data[5];
                $queryBuilder = $this->getEntityManager()->createQueryBuilder();
                if ($state == 1 || $state == 2) {
                    $wishResult = $queryBuilder
                        ->select('u.emailUser', 'u.nomUser', 'u.prenomUser', 'r.label', 'w.id', 'w.totalLeaveDayDue', 'w.totalLeaveDayConfirmed', 'w.totalLeaveDayTaken', 'w.remainingLeave', 'w.remainingRequest', 'w.state', 'w.choice1Start', 'w.choice1End', 'w.choice1Accepted', 'w.choice2Start', 'w.choice2End', 'w.choice2Accepted', 'w.choice3Start', 'w.choice3End', 'w.choice3Accepted')
                        ->from('App\Easyjet\EleaveBundle\Entity\Wish', 'w')
                        ->leftJoin("w.user", "u")
                        ->leftJoin('App\Easyjet\EleaveBundle\Entity\Refus', 'r', 'WITH', 'w.motifRefus = r.id')
                        ->where('w.id = :requestId')
                        ->setParameter('requestId', $requestId)
                        ->getQuery()
                        ->getResult();

                    array_push($mailArrayResult, $wishResult);
                }
            }
        }
        fclose($handle);
        return $mailArrayResult;
    }

    /**
     * 
     * @param int $id
     * @return array
     */
    public function getOfficeWishData($id, $isOfficeAdmin, $isLineManager, $userId)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("w")
            ->addSelect("u")
            ->from("App\Easyjet\EleaveBundle\Entity\Wish", "w")
            ->join("w.user", "u")
            ->where("w.id=:id")->setParameter("id", $id);

        if (!$isOfficeAdmin && !$isLineManager) {
            $queryBuilder->andWhere("w.user=:idUser")->setParameter("idUser", $userId);
        }
        $result =  $queryBuilder->getQuery()->getOneOrNullResult();
        return  $result;
    }

    /**
     * 
     * @param int $id
     * @return array
     */
    public function getEcWishData($id, $isRostering, $isRessourceGroupAdmin, $userId)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("w")
            ->addSelect("u")
            ->from("App\Easyjet\EleaveBundle\Entity\Wish", "w")
            ->join("w.user", "u")
            ->where("w.id=:id")->setParameter("id", $id);

        if (!$isRostering && !$isRessourceGroupAdmin) {
            // $queryBuilder->andWhere("w.user=:idUser")->setParameter("idUser", $userId);
        }
        $result =  $queryBuilder->getQuery()->getOneOrNullResult();
        return  $result;
    }


    /**
     * Generation of the csv file if the user has launched a download
     * @param int $idUser
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array
     */
    public function wishesCsvResults(\Symfony\Component\HttpFoundation\Request $request, $idUser)
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $queryBuilder
            ->select("w")
            ->addSelect("u")
            ->from("App\Easyjet\EleaveBundle\Entity\Wish", "w")
            ->join("w.user", "u")
            ->join("u.typeEftr", "te")
            ->where("te.employeeType = 1");

        $from = $request->get("from");
        $to   = $request->get("to");
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $from)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $from);
            $from = $datetime->format("Y-m-d");
        }
        if (preg_match("#[0-9]{2}/[0-9]{2}/[0-9]{4}#", $to)) {
            $datetime = \DateTime::createFromFormat("d/m/Y", $to);
            $to = $datetime->format("Y-m-d");
        }


        if ($from) {
            $queryBuilder->andWhere("(w.choice1Start >= :from OR w.choice2Start >= :from OR w.choice3Start >= :from)");
            $queryBuilder->setParameter("from", $from);
        }
        if ($to) {
            $queryBuilder->andWhere("(w.choice1Start <= :to OR w.choice2Start <= :to OR w.choice3Start <= :to)");
            $queryBuilder->setParameter("to", $to);
        }

        if ($request->get("user")) {
            $queryBuilder->andWhere("(u.logUser like :query)")
                ->setParameter("query", "%" . $request->get("user") . "%");
        }

        $results = $queryBuilder->orderBy('u.nomUser')->addOrderBy('u.prenomUser')->addOrderBy('w.requestDate')->getQuery()->getResult();

        $lastUser = 0;
        $first = true;
        $remainingLeave = 0;

        ob_start();
        $hCsv = fopen('php://output', "r+");

        foreach ($results as $result) {

            if ($result->getUser()->getIdUser() != $lastUser) {
                $x = 1;
                $lastUser = $result->getUser()->getIdUser();
                if (!$first) {
                    echo "Last known sold :$remainingLeave;\n\n";
                    echo "--------------------;\n";
                }
                echo $result->getUser()->getnomUser() . " " . $result->getUser()->getPreNomUser() . ";\n\n\n";
                $first = false;
            }

            $remainingLeave = $result->getRemainingLeave();

            echo "Request $x;\n\n";
            $x++;

            $choice1Start = $result->getChoice1Start()->format('Y-m-d') == "-0001-11-30" ? "" :  TimeFormat::convertDateIntoFrance($result->getChoice1Start()->format('Y-m-d'));
            $choice2Start = $result->getChoice2Start()->format('Y-m-d') == "-0001-11-30" ? "" :  TimeFormat::convertDateIntoFrance($result->getChoice2Start()->format('Y-m-d'));
            $choice3Start = $result->getChoice3Start()->format('Y-m-d') == "-0001-11-30" ? "" :  TimeFormat::convertDateIntoFrance($result->getChoice3Start()->format('Y-m-d'));
            $choice1End =   $result->getChoice1End()->format('Y-m-d')   == "-0001-11-30" ? "" :  TimeFormat::convertDateIntoFrance($result->getChoice1End()->format('Y-m-d'));
            $choice2End =   $result->getChoice2End()->format('Y-m-d')   == "-0001-11-30" ? "" :  TimeFormat::convertDateIntoFrance($result->getChoice2End()->format('Y-m-d'));
            $choice3End =   $result->getChoice3End()->format('Y-m-d')   == "-0001-11-30" ? "" :  TimeFormat::convertDateIntoFrance($result->getChoice3End()->format('Y-m-d'));
            echo "Choice 1;" . ($choice1Start) . ";" . ($choice1End) . ";" . ($result->getChoice1Accepted()->format('Y-m-d') == "-0001-11-30" ? "R" : "A") . ";\n";
            echo "Choice 2;" . ($choice2Start) . ";" . ($choice2End) . ";" . ($result->getChoice2Accepted()->format('Y-m-d') == "-0001-11-30" ? "R" : "A") . ";\n";
            echo "Choice 3;" . ($choice3Start) . ";" . ($choice3End) . ";" . ($result->getChoice3Accepted()->format('Y-m-d') == "-0001-11-30" ? "R" : "A") . ";\n\n\n";
        }
        echo "Last known sold :$remainingLeave;\n\n";
        fclose($hCsv);
        $csvContent = utf8_decode(ob_get_clean());
        return $csvContent;
    }

    /**
     * 
     * @param empno $empno
     * @param remainingLeaveDays $remainingLeaveDays
     * @param workRatio $workRatio
     * @return array
     */
    public function setRemainingDays($empno, $remainingLeaveDays, $workRatio)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->update('App\Easyjet\UmanBundle\Entity\Users',  'u')
            ->set('u.remainingDays', ':remainingLeaveDays')
            ->set('u.workRatioPercent', ':workRatio')
            ->where('u.logUser = :empno')
            ->setParameter("empno", $empno)
            ->setParameter("remainingLeaveDays", $remainingLeaveDays)
            ->setParameter("workRatio", $workRatio)
            ->getQuery()->execute();
    }

    /**
     * Return a  Users Array
     * @return array associative array
     */
    public function getUsers(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getEntityManager();
        header('Content-Type: text/xml;charset=utf-8');
        echo (("<?xml version='1.0' encoding='UTF-8' ?><options>"));
        $sql = "SELECT users.* 
            FROM users 
            LEFT JOIN types_eftr ON types_eftr.id=users.id_type_eftr
            WHERE 
                active_user = 1 AND  
                types_eftr.employee_type = 1";

        if ($request->get("debut")) {
            $sql .=  " AND log_user LIKE '%" . $request->get("debut") . "%' OR nom_user LIKE '%" . $request->get("debut") . "%'";
        }
        $sql .=  " LIMIT 10";

        $stmt = $em->getConnection()->prepare($sql);
        $result = $stmt->executeQuery()->fetchAllAssociative();

        foreach ($result  as $res) {
            echo "<option>" . (html_entity_decode($res['log_user'] . " (" . $res['nom_user'] . " " . $res['prenom_user'])) . ")</option>";
        }
        echo ("</options>");
        exit;
    }
}
