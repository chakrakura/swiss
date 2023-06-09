<?php
namespace App\Easyjet\HrisBundle\Classes\CrewUser;
/**
 * Description of Classes
 * 
 * @Class CsvResponse is used to Generate CSV file

 * @author Anirudh Choubey
 */
use Symfony\Component\HttpFoundation\Response;
class CsvResponse extends Response
{
    protected $data;
    protected $filename = 'export.csv';
    public function __construct($data = array(), $status = 200, $headers = array())
    {
       
        parent::__construct('', $status, $headers);
           
        $this->setData($data,$headers);
    }
    public function setData(array $data, array $headers)
    {
         $output = fopen('php://temp', 'r+');
        fputcsv($output, $headers);
       
        foreach ($data as $row) {
            fputcsv($output, $row);
        }
        rewind($output);
        $this->data = '';
        while ($line = fgets($output)) {
            $this->data .= $line;
        }
        $this->data .= fgets($output);
       
        return $this->update();
    }
    public function getFilename()
    {
        return $this->filename;
    }
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this->update();
    }
    protected function update()
    {
        $this->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $this->filename));
        if (!$this->headers->has('Content-Type')) {
            $this->headers->set('Content-Type', 'text/csv');
        }
        return $this->setContent($this->data);
    }
}