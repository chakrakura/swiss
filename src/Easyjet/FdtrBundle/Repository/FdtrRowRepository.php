<?php

namespace App\Easyjet\FdtrBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class FdtrRowRepository extends EntityRepository
{
    public function dbalCreateRow(\Doctrine\DBAL\Connection $dbalConnexion, $rowArrayRepresentation) {
        $dbalConnexion->insert("fdtr_row", array(
            "fdtr_monthly_report_id" => $rowArrayRepresentation['monthly_report_id'],
            "concerned_date" => $rowArrayRepresentation['concerned_date']->format("Y-m-d"),
            "duty_time_begin" => $rowArrayRepresentation['duty_time_begin']->format("Y-m-d H:i"),
            "duty_time_end" => $rowArrayRepresentation['duty_time_end']->format("Y-m-d H:i"),
            "duty_duration_minutes" => $rowArrayRepresentation['duty_duration_minutes'],
            "block_time_duration_decimal" => $rowArrayRepresentation['block_time_duration_decimal']
        ));

        $rowId = $dbalConnexion->lastInsertId();
        
        if (!count($rowArrayRepresentation['columns'])) {
            return;
        }

        $sql = "INSERT INTO fdtr_column (fdtr_row_id, column_order, column_name, column_value) VALUES ";
        $qPart = array_fill(0, count($rowArrayRepresentation['columns']), "(?, ?, ?, ?)");
        $sql .=  implode(",",$qPart);
        $stmt = $dbalConnexion->prepare($sql);
        $i = 1;
        $order = 0;

        foreach ($rowArrayRepresentation['columns'] as $column) {
            $stmt -> bindValue($i++, $rowId);
            $stmt -> bindValue($i++, ++$order);
            $stmt -> bindValue($i++, $column['column_name']);
            $stmt -> bindValue($i++, $column['column_value']);
        } 
        $stmt->execute();
    }
    
}