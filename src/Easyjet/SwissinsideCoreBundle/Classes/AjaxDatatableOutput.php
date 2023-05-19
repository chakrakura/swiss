<?php

namespace App\Easyjet\SwissinsideCoreBundle\Classes;

/**
 * This class generate a fully complient datatable output
 *
 * @author Gilles Hemmerlé <giloux@gmail.com>
 */
class AjaxDatatableOutput {
    /**
     *
     * @var \Doctrine\ORM\QueryBuilder $queryBuilder Formatted doctrine request
     */
    private $queryBuilder;
    /**
     * @var int Total result without filtering
     */
    private $totalCount;
    /**
     *
     * @var \Symfony\Component\HttpFoundation\Request $request Http request
     */
    private $request;
    
    /**
     *
     * @var array Datatable output
     */
    private $output;
    
    /**
     *
     * @var AjaxDatatableSorting 
     */
    private $sortingManager;
    
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Doctrine\ORM\QueryBuilder $queryBuilderWithoutSearch
     * @param int $totalCount
     */
    public function __construct(\Symfony\Component\HttpFoundation\Request $request, \Doctrine\ORM\QueryBuilder $queryBuilderWithoutSearch, $totalCount) {
        $this->queryBuilder = $queryBuilderWithoutSearch;
        $this->totalCount = $totalCount;
        $this->request = $request;
        
        $this->output = array(
            "sEcho" => intval($this->request->get('sEcho')),
            "iTotalRecords" => $this->totalCount,
            "iTotalDisplayRecords" => $this->totalCount,
            "aaData" => array()
        );        
        
    }
    
    /**
     * 
     * @param \Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting $sorting Sorting manager
     */
    public function sortingManager(AjaxDatatableSorting $sorting) {
        $this->sortingManager = $sorting;
        
        foreach ($this->request->query as $key => $value) {
            $return = null;
            if(!preg_match('/iSortCol_([0-9]+)/', $key, $return)) continue;                     
            $searchId = $return[1];
            
            $fieldId = $this->request->get("iSortCol_" . $searchId);
            $fieldOrderDir = $this->request->get("sSortDir_" . $searchId);
            if(!$this->sortingManager->getField($fieldId)) continue;
            $this->queryBuilder->addOrderBy($this->sortingManager->getField($fieldId), $fieldOrderDir);
            
        }
        
        $this->queryBuilder
                 ->setFirstResult($this->request->get("iDisplayStart"))
                 ->setMaxResults($this->request->get("iDisplayLength"));
    }
    
    /**
     * Add a row of data to the output
     * @param array $row
     */
    public function addRow(array $row) {
        $this->output['aaData'][] = $row;
    }
    
    
    /**
     * Return the json encoded output
     * @return string Json encoded output to send to the datatable
     */
    public function output() {
        return json_encode($this->output);        
    }
}