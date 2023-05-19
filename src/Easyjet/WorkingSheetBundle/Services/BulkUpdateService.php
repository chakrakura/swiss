<?php

namespace App\Easyjet\WorkingSheetBundle\Services;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use DateTime;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class BulkUpdateService
{
    /**
     *
     * @var \Doctrine\ORM\EntityManager 
     */
    private $entityManger;
    
    /**
     * Cache the list of bank hollidays
     * @var array
     */
    private $bankHollidaysList = array();
    
    
    public function __construct(ManagerRegistry $doctrine) {
        $this->entityManger = $doctrine->getManager();
    }
    
    private function getStringValue(\PhpOffice\PhpSpreadsheet\Cell\Cell $cell) {
        $cellValue = $cell->getValue();
        $dateInt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($cellValue); 
        $dateInt  -= date("Z", $dateInt);
        $cellValue = new \DateTime(date("c", $dateInt));
        return $cellValue;
    }
    
    public function importExcelSheet(UploadedFile $excelSheet) {
        date_default_timezone_set('Europe/Paris');

        $fileTarget = $excelSheet->getPathname();
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($fileTarget);
        $reader->setReadDataOnly(true);
        $objXLS =  $reader->load($fileTarget);
        
        if ($objXLS->getSheet(0)->getCell("A1")->getCalculatedValue() !== "Employee number") 
        {
            throw new Exception("Wrong ExcelSheet ! The field 'a1' does not contain the proper column name");
        }
        if ($objXLS->getSheet(0)->getCell("B1")->getCalculatedValue() !== "Date") 
        {
            throw new Exception("Wrong ExcelSheet ! The field 'b1' does not contain the proper column name");
        }
        if ($objXLS->getSheet(0)->getCell("C1")->getCalculatedValue() !== "Morning from") 
        {
            throw new Exception("Wrong ExcelSheet ! The field 'c1' does not contain the proper column name");
        }
        if ($objXLS->getSheet(0)->getCell("D1")->getCalculatedValue() !== "Morning to") 
        {
            throw new Exception("Wrong ExcelSheet ! The field 'd1' does not contain the proper column name");
        }
        if ($objXLS->getSheet(0)->getCell("E1")->getCalculatedValue() !== "Afternoon from") 
        {
            throw new Exception("Wrong ExcelSheet ! The field 'e1' does not contain the proper column name");
        }
        if ($objXLS->getSheet(0)->getCell("F1")->getCalculatedValue() !== "Afternoon to") 
        {
            throw new Exception("Wrong ExcelSheet ! The field 'f1' does not contain the proper column name");
        }
        if ($objXLS->getSheet(0)->getCell("G1")->getCalculatedValue() !== "Bank Holiday (Y/N)") 
        {
            throw new Exception("Wrong ExcelSheet ! The field 'g1' does not contain the proper column name");
        }
        if ($objXLS->getSheet(0)->getCell("H1")->getCalculatedValue() !== "Justified absence (Y/N)") 
        {
            throw new Exception("Wrong ExcelSheet ! The field 'h1' does not contain the proper column name");
        }
        
        $em = $this->entityManger;
        $em->getConnection()->beginTransaction();
        
        $sql = "INSERT INTO WORKING_SHEET_ACTUAL_WORK (worked_by_user_id, working_date, morning_from, morning_to, afternoon_from, afternoon_to, is_holliday, is_bank_holliday)"
                    . "VALUES ("
                    . ":workedByUserId,"
                    . ":workingDate,"
                    . ":morningFrom,"
                    . ":morningTo,"
                    . ":afternoonFrom,"
                    . ":afternoonTo,"
                    . ":isHolliday,"
                    . ":isBankHolliday)";
        $stmt = $em->getConnection()->prepare($sql);
        
        $sqlDelete = "DELETE FROM WORKING_SHEET_ACTUAL_WORK WHERE working_date = :date AND worked_by_user_id = :workedByUserId";
        $stmtDelete = $em->getConnection()->prepare($sqlDelete);
        
        $sqlUser = "SELECT id_user FROM users WHERE log_user=:logUser";
        $stmtUser = $em->getConnection()->prepare($sqlUser);
        
        $row = 2;
        do {
            $empno = str_pad($objXLS->getSheet(0)->getCell("A$row")->getCalculatedValue(), 6, "0", STR_PAD_LEFT);
            if ($empno === "000000") {
                break;
            }
            // Get the user ID of the current employee
            $result = $stmtUser->executeQuery(array(
                "logUser" => $empno
            ));
            
            $userData = $result->fetchAllAssociative();
            if (empty($userData)) {
                throw new Exception(sprintf("THe user with the employee number '%s' does not exist!", $empno));
            }
            $userId = $userData[0]["id_user"];
            $date = self::getStringValue($objXLS->getSheet(0)->getCell("B$row"));
            $morningFrom = $this->getStringValue($objXLS->getSheet(0)->getCell("C$row"));
            $morningTo = $this->getStringValue($objXLS->getSheet(0)->getCell("D$row"));
            $afternoonFrom = $this->getStringValue($objXLS->getSheet(0)->getCell("E$row"));
            $afternoonTo = $this->getStringValue($objXLS->getSheet(0)->getCell("F$row"));
            $isBankHoliday = $objXLS->getSheet(0)->getCell("G$row");
            $justifiedAbsence = $objXLS->getSheet(0)->getCell("H$row");
            
            if($isBankHoliday=='N'){
                $isBankHoliday = 0; 
            }else{
                $isBankHoliday = 1;
            }

            if($justifiedAbsence=='N'){
                $justifiedAbsence = 0.0;
            }else{
                $justifiedAbsence = 1.0;
            }
            
            $stmtDelete->execute(array(
                ":date" => $date->format("Y-m-d"),
                ":workedByUserId" => $userId
            ));
            $stmt->execute(array(
                ":workedByUserId" => $userId,
                ":workingDate" => $date->format("Y-m-d"),
                ":morningFrom" => $date->format("Y-m-d").' '.$morningFrom->format("H:i:s"),
                ":morningTo" => $date->format("Y-m-d").' '.$morningTo->format("H:i:s"),
                ":afternoonFrom" => $date->format("Y-m-d").' '.$afternoonFrom->format("H:i:s"),
                ":afternoonTo" => $date->format("Y-m-d").' '.$afternoonTo->format("H:i:s"),
                ":isHolliday" => $justifiedAbsence,
                ":isBankHolliday" => $isBankHoliday
            ));
            
            $row++;
        } while(true);
        
        $em->commit();
    }
}
