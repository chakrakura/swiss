<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;


/**
 * Repository for calls
 */
class SectorPayRepository extends EntityRepository
{

    /**
     * Return a Eftr data
     * @param id $id
     * @return array formatted array
     */
    public function getSectorPayData($id = null)
    {
        $queryBuilder = $this->getEntityManager()->getConnection();
        $sql = "SELECT types_eftr.*, salary, allowance
                FROM types_eftr
                LEFT JOIN eftr_dv_sector_pay_by_contract AS DV 
                ON DV.id_type_eftr=types_eftr.id 
                AND DV.DV_sector_pay_id = ?
                WHERE types_eftr.active_type = 1
                ORDER BY types_eftr.type";

        $stmt = $queryBuilder->prepare($sql);
        $stmt->bindValue(1, $id);
        $result =  $stmt->execute()->fetchAllAssociative();
        return $result;
    }

    public function getPayranks(\DateTime $batchDate)
    {
        $payRanksList = array();
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("s")
            ->from('EasyjetOtpBundle:SectorPay', 's')
            ->where("s.dateEffectivite <= :batchDate")
            ->orderBy("s.dateEffectivite", "DESC")
            ->setMaxResults(1)
            ->setParameter('batchDate', $batchDate);
        $result =  $queryBuilder->getQuery()->getOneOrNullResult();

        if ($result) {
            $sectorId = $result->getId();
            $connection = $this->getEntityManager()->getConnection();
            $sql = "SELECT types_eftr.*, salary, allowance
            FROM types_eftr
            LEFT JOIN eftr_dv_sector_pay_by_contract AS DV 
            ON DV.id_type_eftr=types_eftr.id 
            AND DV.DV_sector_pay_id = ? 
            WHERE types_eftr.active_type = 1
            ORDER BY types_eftr.type";

            $stmt = $connection->prepare($sql);
            $stmt->bindValue(1, $sectorId);
            $wholeDate =  $stmt->execute()->fetchAllAssociative();

            foreach ($wholeDate as $data) {
                $payRanksList[strtoupper($data['type'])] = array("taxable" => $data['allowance'], "non_taxable" => $data['salary']);
            }

            return $payRanksList;
        }
    }

    /**
     * Deleting eftr_dv_sector_pay_by_contract data by sector_pay_id
     * @param id $id
     * @return boolen
     */
    public function deleteSectorPayContract($id = null)
    {
        $queryBuilder = $this->getEntityManager()->getConnection()->createQueryBuilder();
        $queryBuilder
            ->delete('eftr_dv_sector_pay_by_contract')
            ->where("DV_sector_pay_id = :sectorPayId")
            ->setParameter('sectorPayId', $id)
            ->execute();
    }
}
