<?php

namespace App\Easyjet\EpayslipBundle\Repository;;

use Doctrine\ORM\EntityRepository;
use Fpdf\Fpdf;
use App\Easyjet\SwissinsideCoreBundle\Classes\TimeFormat;

/**
 * Repository for payslips
 */
class PayslipRepository extends EntityRepository
{

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param boolean $isAdmin
     * @param int $idUser
     * @return array Datatable formatted array
     */
    public function ePayslipDatatableResults(\Symfony\Component\HttpFoundation\Request $request, $isAdmin, $idUser)
    {
      ini_set('memory_limit', '-1');

        $dateFrom = \DateTime::createFromFormat("d/m/Y", $request->get("epaySlipFrom"));
        $dateFrom->setTime(0, 0, 0);

        $dateTo = \DateTime::createFromFormat("d/m/Y", $request->get("epaySlipTo"));
        $dateTo->setTime(0, 0, 0);
    
        $paySlipQueryBuilder = $this->getEntityManager()->createQueryBuilder();

        $paySlipQueryBuilder->select("p")
            ->from("EasyjetEpayslipBundle:Payslip", "p")
            ->join("p.paySlipUser", "u")
            ->where("p.from >= :dateFrom")
            ->andWhere("p.from <= :dateTo")
            ->setParameters(['dateFrom' => $dateFrom, 'dateTo' => $dateTo]);

        if (!$isAdmin) {
            $paySlipQueryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }
        if ($request->get("selectedUser")) {
            $paySlipQueryBuilder
                ->andWhere("(u.logUser like :selectedUser or u.prenomUser like :selectedUser or u.nomUser like :selectedUser)")
                ->setParameter("selectedUser", "%" . $request->get("selectedUser") . "%");
        }

        $paySlipQueryBuilder->select("p")->addSelect("u")->groupBy('p.id');

        $paySlipResults = $paySlipQueryBuilder->getQuery()->getResult();

        $totalPayslips =  $result = [];
     
        foreach ($paySlipResults as $paySlip) {
            $from =  $paySlip->getFrom()->format("d/m/Y");
            $log  = $paySlip->getPaySlipUser()->getLogUser();
            $totalPayslips[$log][$from]['form'] = $paySlip->getFrom()->format("d/m/Y");
            $totalPayslips[$log][$from]['to'] = $paySlip->getTo()->format("d/m/Y");
            $totalPayslips[$log][$from]['nom'] = $paySlip->getPaySlipUser()->getNomUser();
            $totalPayslips[$log][$from]['payslip_id'] = $paySlip->getId();
            $totalPayslips[$log][$from]['prenom'] = $paySlip->getPaySlipUser()->getPrenomUser();
            $totalPayslips[$log][$from]['has_payslip'] = true;
        }

        if ($isAdmin) {
            $ccReportSumQueryBuilder = $this->getEntityManager()->createQueryBuilder();
            $ccReportCount  = $ccReportSumQueryBuilder
                    ->select('SUM(cc.montantCcChf) as totalMontantCcChf')
                    ->from("EasyjetEpayslipBundle:CcReport", "cc")
                    ->join("cc.ccReportUser", "u")
                    ->where("cc.begin >= :dateFrom")
                    ->andWhere("cc.begin <= :dateFrom")
                    ->setParameters(['dateFrom' => $dateFrom])
                    ->getQuery()
                    ->getOneOrNullResult();
        }        
      
        $ccReportQueryBuilder = $this->getEntityManager()->createQueryBuilder();
        $ccReportQueryBuilder->select("cc")
            ->from("EasyjetEpayslipBundle:CcReport", "cc")
            ->join("cc.ccReportUser", "u")
            ->where("cc.begin >= :dateFrom")
            ->andWhere("cc.begin <= :dateTo")
            ->setParameters(['dateFrom' => $dateFrom, 'dateTo' => $dateTo]);
    
        if (!$isAdmin) {
            $ccReportQueryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }
        if ($request->get("selectedUser")) {
            $ccReportQueryBuilder
                ->andWhere("(u.logUser like :selectedUser or u.prenomUser like :selectedUser or u.nomUser like :selectedUser)")
                ->setParameter("selectedUser", "%" . $request->get("selectedUser") . "%");
        }

        $ccReportQueryBuilder->select("cc")->addSelect("u")->groupBy('cc.id');

        $ccReportResults = $ccReportQueryBuilder->getQuery()->getResult();


        foreach ($ccReportResults as $ccReportResult) {
            $from =  $ccReportResult->getBegin()->format("d/m/Y");
            $log = $ccReportResult->getCcReportUser()->getLogUser();
            $totalPayslips[$log][$from]['form'] = $ccReportResult->getBegin()->format("d/m/Y");
            $totalPayslips[$log][$from]['to'] = $ccReportResult->getEnd()->format("d/m/Y");
            $totalPayslips[$log][$from]['nom'] = $ccReportResult->getCcReportUser()->getNomUser();
            $totalPayslips[$log][$from]['prenom'] = $ccReportResult->getCcReportUser()->getPrenomUser();
            $totalPayslips[$log][$from]['cc_report_id'] = $ccReportResult->getId();
            $totalPayslips[$log][$from]['has_cc_report'] = true;
        }
      
        if (is_array($totalPayslips)) {
            foreach ($totalPayslips as $payslips) {
                foreach ($payslips as $data) {
                    if (is_array($data)) {
                        $result[] = [
                            'nom'    => $data['nom'],
                            'prenom' => $data['prenom'],
                            'from' => $data['form'],
                            'to' => $data['to'],
                            'cc_report_id' => isset($data['cc_report_id']) ? $data['cc_report_id'] : '',
                            'payslip_id' => isset($data['payslip_id']) ? $data['payslip_id'] : '',
                        ];
                    }
                }
            }
        }
        $dataset = array(
            "echo" => 1,
            "totalrecords" => count($result),
            "totaldisplayrecords" => count($result),
            'totalGgccChf' => isset($ccReportCount) && isset($ccReportCount['totalMontantCcChf']) ? round($ccReportCount['totalMontantCcChf'], 2) . " CHF" : '',
            "data" => $result,
        );

        return json_encode($dataset);
    }

    /**
     * Return Payslip pdf object
     * @param boolean $isAdmin
     * @param int $cCReportId
     * @param int $idUser
     * @return object 
     */
    public function getCcReportPayslipPdf($isAdmin, $cCReportId, $idUser)
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('cc')
            ->addSelect("u")
            ->from("EasyjetEpayslipBundle:CcReport", "cc")
            ->join("cc.ccReportUser", "u")
            ->where("cc.id = :ccReportId")
            ->setParameters(['ccReportId' => $cCReportId]);

        if (!$isAdmin) {
            $queryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }

        $ccReportResult = $queryBuilder->getQuery()->getOneOrNullResult();
        $cCReportChfTotal = $ccReportResult->getMontantCcChf();
        $ccMonth =   $ccReportResult->getBegin()->format('m');
        $ccYear =   $ccReportResult->getBegin()->format('Y');

        // compute date for the report title. Date = cc_report begin - 1 month.
        $tempdate = date("d/m/Y", mktime(0, 0, 0, (int) $ccMonth - 1, 1, (int) $ccYear));
        list($tempday, $ccMonth, $ccYear) = explode("/", $tempdate);


        $pdf = new FPDF("L", 'pt', 'A4');

        $pdf->AliasNbPages();
        $pdf->AddPage();


        // Border color : Black
        $pdf->SetDrawColor(0, 0, 0);
        // Background color : White
        $pdf->SetFillColor(210, 210, 210);
        // Text color : Black
        $pdf->SetTextColor(0, 0, 0);
        // Border Width 
        $pdf->SetLineWidth(1);
        $pdf->SetFont('Helvetica', 'B', 14);
        $pdf->Cell(
            "",
            30,
            "GGCC datas for " .
                $ccReportResult->getCcReportUser()->__toString() . " - 01-" . $ccMonth . "-" . $ccYear .
                " / " . TimeFormat::daysInMonth($ccMonth, $ccYear) . "-" . $ccMonth . "-" . $ccYear
        );
        $pdf->Ln();
        $pdf->SetFont('Helvetica', 'B', 10);

        $col1 = 40;
        $col2 = 60;
        $col3 = 40;
        $col4 = 50;
        $col5 = 30;
        $col6 = 60;
        $col7 = 60;
        $col8 = 65;
        $col9 = 80;
        $col10 = 80;
        $col11 = 80;
        $col12 = 40;
        $col13 = 40;
        $col14 = 0;


        $pdf->cell($col1, 15, "Flight", "LTR", 0, "C");
        $pdf->cell($col2, 15, "Flight", "LTR", 0, "C");
        $pdf->cell($col3, 15, "Barset", "LTR", 0, "C");
        $pdf->cell($col4, 15, "Cash", "LTR", 0, "C");
        $pdf->cell($col5, 15, "N°", "LTR", 0, "C");
        $pdf->cell($col6, 15, "Trans.", "LTR", 0, "C");
        $pdf->cell($col7, 15, "EPOS", "LTR", 0, "C");
        $pdf->cell($col8, 15, "Cash Excl", "LTR", 0, "C");
        $pdf->cell($col9, 15, "Transfer", "LTR", 0, "C");
        $pdf->cell($col10, 15, "Cash", "LTR", 0, "C");
        $pdf->cell($col11, 15, "Discrepancy", "LTR", 0, "C");
        $pdf->cell($col12, 15, "GBP", "LTR", 0, "C");
        $pdf->cell($col13, 15, "Ex.", "LTR", 0, "C");
        $pdf->cell($col14, 15, "CHF", "LTR", 0, "C");
        $pdf->Ln();

        $pdf->cell($col1, 15, "num", "LBR", 0, "C");
        $pdf->cell($col2, 15, "date", "LBR", 0, "C");
        $pdf->cell($col3, 15, "num", "LBR", 0, "C");
        $pdf->cell($col4, 15, "bag num", "LBR", 0, "C");
        $pdf->cell($col5, 15, "crew", "LBR", 0, "C");
        $pdf->cell($col6, 15, "Sales", "LBR", 0, "C");
        $pdf->cell($col7, 15, "Shop sales", "LBR", 0, "C");
        $pdf->cell($col8, 15, "Transf Sales", "LBR", 0, "C");
        $pdf->cell($col9, 15, "Gross Comm", "LBR", 0, "C");
        $pdf->cell($col10, 15, "Gross Comm", "LBR", 0, "C");
        $pdf->cell($col11, 15, "Per Crew", "LBR", 0, "C");
        $pdf->cell($col12, 15, "", "LBR", 0, "C");
        $pdf->cell($col13, 15, "rate", "LBR", 0, "C");
        $pdf->cell($col14, 15, "", "LBR", 0, "C");
        $pdf->Ln();

        $pdf->SetFont('Helvetica', '', 10);


        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('ccp')
            ->from("EasyjetEpayslipBundle:CcPayslip", "ccp")
            ->where("ccp.idUser = :idUser")
            ->andwhere("ccp.idReport = :idReport")
            ->setParameters(['idUser' => $ccReportResult->getIdUser(), 'idReport' => $ccReportResult->getId()])
            ->orderBy('ccp.flightDate');

        $payslips = $queryBuilder->getQuery()->getResult();


        foreach ($payslips as $payslip) {

            $eur_chf_tax_rate = $payslip->getEuroChfExchangeRate();
            $pdf->cell($col1, 15, $payslip->getFlightNumber(), "1", 0, "C");
            $pdf->cell($col2, 15, TimeFormat::convertDateIntoFrance($payslip->getFlightDate()->format('Y-m-d')), "1", 0, "C");
            $pdf->cell($col3, 15, $payslip->getBarsetNumber(), "1", 0, "C");
            $pdf->cell($col4, 15, $payslip->getCashBagNb(), "1", 0, "C");
            $pdf->cell($col5, 15, $payslip->getNbCrews(), "1", 0, "C");
            $pdf->cell($col6, 15, $payslip->getTransferSales(), "1", 0, "R");
            $pdf->cell($col7, 15, $payslip->getEposShopSales(), "1", 0, "R");
            $pdf->cell($col8, 15, $payslip->getCashExTrSales(), "1", 0, "R");
            $pdf->cell($col9, 15, $payslip->getTransGrossCom(), "1", 0, "R");
            $pdf->cell($col10, 15, $payslip->getCashGrossCom(), "1", 0, "R");
            $pdf->cell($col11, 15, $payslip->getDiscrCrew(), "1", 0, "R");
            $pdf->cell($col12, 15, $payslip->getTotCommGbp(), "1", 0, "R");
            $pdf->cell($col13, 15, $payslip->getEuroChfExchangeRate(), "1", 0, "C"); //$pdf->cell($col13, 15, $payslip['gbp_euro_exchange_rate'], "1", 0, "C");
            $pdf->cell($col14, 15, $payslip->getTotCommChf(), "1", 0, "R");  // $pdf->cell($col14, 15, $payslip['tot_comm_eur'], "1", 0, "R");
            $pdf->Ln();
        }

        $total_chf = $cCReportChfTotal;

        $pdf->Ln(30);
        $pdf->SetFont('Helvetica', 'B', 10);
        $pdf->Cell(150, 15, "Total CHF", "B");
        $pdf->SetFont('Helvetica', '', 10);
        $pdf->Cell(90, 15, $total_chf, "B");
        $pdf->Ln();

        return $pdf->Output();
    }



    /**
     * Return Payslip pdf object
     * @param int $paySlipId
     * @param boolean $isAdmin
     * @param int $idUser
     * @return object 
     */
    public function getEpayslipReportPdf($paySlipId, $isAdmin, $idUser)
    {
       require_once "/etc/auth/oracle.php";
       ini_set('memory_limit', '-1');

        $paySlipResult  = $this->getEntityManager()->getRepository('App\Easyjet\EpayslipBundle\Entity\Payslip')->find($paySlipId);

        if (!$paySlipResult->getMonth()) {

            $queryBuilder = $this->getEntityManager()->createQueryBuilder();
            $queryBuilder->select('u')
                ->from('App\Easyjet\UmanBundle\Entity\Users', 'u')
                ->where("u.idUser = :idUser")
                ->setParameters(['idUser' => $paySlipResult->getPaySlipUser()->getIdUser()]);

            if (!$isAdmin) {
                $queryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
            }
            $userResult = $queryBuilder->getQuery()->getOneOrNullResult();

            // Connection to oracle
            $oci_conn = oci_connect(ORACLE_LOGIN, ORACLE_PASSWORD, ORACLE_HOST, "UTF8");
            if (!$oci_conn) die("Oracle connexion failed");

            // Configuration  format date
            $sql = "ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS'";
            $stmt = oci_parse($oci_conn, $sql);
            oci_execute($stmt);

            $sql = "SELECT HPS_PAYSLIP 
                    FROM " . ORACLE_INSTANCE . "V_IND_INTERFACE_PAYSLIP 
                    WHERE 
                        EMP_SECONDARY_KEY='" . $userResult->getLogUser() . "' AND
                        HPS_PAY_PERIOD>='" . $paySlipResult->getFrom()->format('Y-m-d') . "' AND
                        HPS_PAY_PERIOD<='" . $paySlipResult->getTo()->format('Y-m-d') . "'";
            $stmt = oci_parse($oci_conn, $sql);
            oci_execute($stmt);

            $salary = oci_fetch_array($stmt);
            if (!$salary) die("Unable to find the payslip");
            //Begin writing headers
            header("Pragma: public");
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            //Use the switch-generated Content-Type
            header("Content-Type: application/pdf");
            //Force the download
            $header = "Content-Disposition: inline; filename=your_payslip.pdf";
            header($header);
            header("Content-Transfer-Encoding: binary");
            die($salary['HPS_PAYSLIP']->read($salary['HPS_PAYSLIP']->size()));
        } else {

            $pdf = new FPDF("P", 'pt', 'A4');
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Helvetica', 'B', 12);

            // Border color : Black
            $pdf->SetDrawColor(0, 0, 0);
            // Background color : White
            $pdf->SetFillColor(210, 210, 210);
            // Text color : Black
            $pdf->SetTextColor(0, 0, 0);
            // Border Width 
            $pdf->SetLineWidth(1);

            $pdf->SetFont('Helvetica', 'B', 14);
            $pdf->cell(300, 25, "easyJet Switzerland S.A", "LTR", 0, "C");
            $pdf->Ln();
            $pdf->SetFont('Helvetica', 'B', 12);
            $pdf->cell(300, 15, "5, Route de l'aéroport    1215    GENEVE 15", "LBR", 0, "C");
            $pdf->Ln(-25);

            $pdf->Cell(300, 20, '');
            $pdf->Cell('', 20, "Salary Payslip", 1, 0, "C");
            $pdf->Ln();
            $pdf->Cell(300, 20, '');
            $pdf->Cell('', 20, $paySlipResult->getMonth(), 1, 0, "C");
            $pdf->Ln();

            $pdf->SetFont('Helvetica', '', 12);
            $pdf->Ln(15);

            $pdf->Cell("", 15, "Tel : (022) 717 88 20");
            $pdf->Ln();
            $pdf->Cell("", 15, "Fax : (022) 788 27 00");
            $pdf->Ln(25);

            $pdf->Ln(-20);
            $pdf->Cell(300, 15, "");
            $pdf->cell(100, 15, "GENEVE 15", 1);
            $pdf->cell("", 15, TimeFormat::convertDateIntoFrance($paySlipResult->getImportDate()->format('Y-m-d')), 1);
            $pdf->Ln(20);

            $pdf->SetFont('Helvetica', 'B', 12);
            $pdf->cell(120, 25, "Salary from  ", "LT", 0, "R");
            $pdf->SetFont('Helvetica', '', 12);
            $pdf->cell(100, 25, TimeFormat::convertDateIntoFrance($paySlipResult->getFrom()->format('Y-m-d')), "TR", 0, "L");
            $pdf->Ln();

            $pdf->SetFont('Helvetica', 'B', 12);
            $pdf->cell(120, 25, "To  ", "LB", 0, "R");
            $pdf->SetFont('Helvetica', '', 12);
            $pdf->cell(100, 25, TimeFormat::convertDateIntoFrance($paySlipResult->getTo()->format('Y-m-d')), "BR", 0, "L");
            $pdf->Ln(35);

            $pdf->cell(220, 25, $paySlipResult->getJobTitle(), "1", 0, "C");


            $pdf->Ln(-60);
            $pdf->Cell(300, 15, "");
            $pdf->Cell("", 15, $paySlipResult->getTitle(), "LTR", 0, "L");
            $pdf->Ln();
            $pdf->Cell(300, 15, "");
            $pdf->SetFont('Helvetica', 'B', 12);
            $pdf->Cell("", 15, $paySlipResult->getName(), "LR", 0, "L");
            $pdf->SetFont('Helvetica', '', 12);
            $pdf->Ln();
            $pdf->Cell(300, 15, "");
            $nbLines = $pdf->MultiCell("", 15, $paySlipResult->getAddress(), "LR", "L");
            $pdf->Cell(300, 15, "");
            $pdf->SetFont('Helvetica', 'B', 12);
            $pdf->Cell("", 15, $paySlipResult->getNpa() . " " . $paySlipResult->getCity(), "LR", 0, "L");
            $pdf->SetFont('Helvetica', '', 12);
            $pdf->Ln();
            $pdf->Cell(300, 15, "");
            $pdf->Cell("", 43 - ($nbLines * 15), "", "LBR");
            $pdf->Ln(50);



            $queryBuilder = $this->getEntityManager()->createQueryBuilder();
            $indemnites  =   $queryBuilder->select("i")
                ->from("EasyjetEpayslipBundle:IndemnitesDeductions", "i")
                ->where("i.idPayslip = :paySlipId")
                ->andWhere("i.type = 'indemnite'")
                ->orderBy("i.rubrique", "DESC")
                ->addOrderBy("i.fieldOrder", "ASC")
                ->setParameters(['paySlipId' => $paySlipId])
                ->getQuery()->getResult();

            $firstS = true;
            $firstNs = true;
            $firstIndemnite = true;
            foreach ($indemnites as $indemnite) {
                if ($firstIndemnite) {
                    $pdf->Ln(20);
                    $pdf->Cell(300, 15, "Allowances", 1, 0, "L", 1);
                    $pdf->Cell(100, 15, "Bases", 1, 0, "L", 1);
                    $pdf->Cell(80, 15, "Rate", 1, 0, "L", 1);
                    $pdf->Cell("", 15, "Values", 1, 0, "L", 1);
                    $pdf->Ln();
                    $firstIndemnite = false;
                }

                if ($firstS && $indemnite->getRubrique() == "s") {
                    $pdf->SetFont('Helvetica', 'I', 10);
                    $pdf->Cell(300, 15, "    Allowances submited to AVS", 1, 0, "L");
                    $pdf->Cell(100, 15, "", 1, 0, "L");
                    $pdf->Cell(80, 15, "", 1, 0, "L");
                    $pdf->Cell("", 15, "", 1, 0, "L");
                    $pdf->Ln();
                    $firstS = false;
                }

                if ($firstNs && $indemnite->getRubrique() == "ns") {
                    $pdf->SetFont('Helvetica', 'I', 10);
                    $pdf->Cell(300, 15, "    Allowances not submited to AVS", 1, 0, "L");
                    $pdf->Cell(100, 15, "", 1, 0, "L");
                    $pdf->Cell(80, 15, "", 1, 0, "L");
                    $pdf->Cell("", 15, "", 1, 0, "L");
                    $pdf->Ln();
                    $firstNs = false;
                }

                if ((float)$indemnite->getDeterminant() == 0) $indemnite->setDeterminant('');
                if ((float)$indemnite->getRate() == 0) $indemnite->setRate('');

                $pdf->SetFont('Helvetica', '', 12);
                $indemniteName = $indemnite->getName();


                if (preg_match("/^Sous-Total/i", $indemnite->getName())) {
                    $pdf->SetFont('Helvetica', 'BI', 12);
                    $indemniteName = "    " . $indemnite->getName();
                }
                $pdf->Cell(300, 15, $indemniteName, 1, 0, "L");
                $pdf->Cell(100, 15, $indemnite->getDeterminant(), 1, 0, "R");
                $pdf->Cell(80, 15, $indemnite->getRate(), 1, 0, "R");
                $pdf->Cell("", 15, $indemnite->getValue(), 1, 0, "R");
                $pdf->Ln();
            }

            $pdf->Cell(300, 15, "");
            $pdf->SetFont('Helvetica', 'B', 12);
            $pdf->Cell(180, 15, "Total Gross salary", 1, 0, "L");
            $pdf->Cell("", 15, $paySlipResult->getBrutSalary(), 1, 0, "R");
            $pdf->SetFont('Helvetica', '', 12);
            $pdf->Ln();


            $deductions  =   $queryBuilder->select("id")
                ->from("EasyjetEpayslipBundle:IndemnitesDeductions", "id")
                ->where("id.idPayslip = :paySlipId")
                ->andWhere("id.type = 'deduction'")
                ->orderBy("id.fieldOrder", "ASC")
                ->setParameters(['paySlipId' => $paySlipId])
                ->getQuery()->getResult();


            $firstDeduction = true;
            foreach ($deductions as $deduction) {
                if ($firstDeduction) {
                    $pdf->Ln(20);
                    $pdf->Cell(300, 15, "Deductions", 1, 0, "L", 1);
                    $pdf->Cell(100, 15, "Bases", 1, 0, "L", 1);
                    $pdf->Cell(80, 15, "Rate", 1, 0, "L", 1);
                    $pdf->Cell("", 15, "Values", 1, 0, "L", 1);
                    $pdf->Ln();
                    $firstDeduction = false;
                }

                if ((float)$deduction->getDeterminant() == 0) $deduction->setDeterminant('');
                if ((float)$deduction->getRate() == 0) $deduction->setRate('');

                $pdf->SetFont('Helvetica', '', 12);
                $pdf->Cell(300, 15, $deduction->getName(), 1, 0, "L");
                $pdf->Cell(100, 15, $deduction->getDeterminant(), 1, 0, "R");
                $pdf->Cell(80, 15, $deduction->getRate(), 1, 0, "R");
                $pdf->Cell("", 15, $deduction->getvalue(), 1, 0, "R");
                $pdf->Ln();
            }

            $pdf->Cell(300, 15, "");
            $pdf->SetFont('Helvetica', 'B', 12);
            $pdf->Cell(180, 15, "Total deductions", 1, 0, "L");
            $pdf->Cell("", 15, $paySlipResult->getTotalDeductions(), 1, 0, "R");
            $pdf->SetFont('Helvetica', '', 12);
            $pdf->Ln();


            $pdf->Ln(15);
            $pdf->MultiCell(200, 15, "Transferred to the bank account " . $paySlipResult->getBankName() . " : \n" . $paySlipResult->getAccountNumber());
            $pdf->Ln(-30);
            $pdf->Cell(300, 15, "");
            $pdf->SetFont('Helvetica', 'B', 12);
            $pdf->Cell(150, 20, "Paid Salary :", "TLB", 0, "L");
            $pdf->SetFont('Helvetica', '', 12);
            $pdf->Cell("",  20, $paySlipResult->getNetSalary(), "TRB", 0, "R");

            return  $pdf->output();
        }
    }
}
