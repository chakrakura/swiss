<?php
namespace App\Easyjet\HrisBundle\Classes\CosmicReport;
use \XMLwriter;
/**
 * @Class XmlUtils is used for opening and writing XML output into output file
 *
 * @author achoubey
 */
Class xmlFile {

    private $outputPath;

    /* setting output path for xml output file */

    public function setOutputPath($outputPath) {
        $this->outputPath = $outputPath;
    }

    /* getting the output file path */

    public function getOutputPath() {
        return $this->outputPath;
    }

    /* checking if output file exist */

    public function checkFileExist($filePath) {
        if (file_exists($filePath)) {
            return 1;
        } else {
            return 0;
        }
    }

    /* Open the XMLwriter instance and open the file and start writing file Document name and Element name */

    public function fileOpen($month, $workerCount) {
        $today = date("Y-m-d"); 
        $this->write = new XMLwriter;
        $this->write->openURI($this->outputPath);
        $this->write->startDocument('1.0', 'UTF-8');
        $this->write->startElement('dosimetry');
        $this->write->startAttribute('xmlns');
        $this->write->text('http://bag.admin.ch/dosimetry/2018/cosmic');
        $this->write->startAttribute('ds');
        $this->write->text('EZS');
        $this->write->startElement('meta');
        $this->write->startAttribute('name');
        $this->write->text('Sarah Jackson');
        $this->write->startAttribute('date');
        $this->write->text($today);
        $this->write->startElement('start');
        $this->write->text($month);
        $this->write->endElement();
        $this->write->startElement('end');
        $this->write->text($month);
        $this->write->endElement();
        $this->write->endElement();//end meta

        $this->write->startElement('service');
        $this->write->startAttribute('id');
        $this->write->text('EZS');
        $this->write->startElement('name');
        $this->write->text('eaysJet Switzerland');
        $this->write->endElement();
        $this->write->startElement('address');
        $this->write->startElement('street');
        $this->write->text('5 Route de l`Aéroport');
        $this->write->endElement();

        $this->write->startElement('zip');
        $this->write->text('1215');
        $this->write->endElement(); 
        $this->write->startElement('town');
        $this->write->text('Genève');
        $this->write->endElement(); 
        $this->write->startElement('country');
        $this->write->text('CH');
        $this->write->endElement();
        $this->write->endElement();// end address
        $this->write->startElement('contact');
        $this->write->startElement('name');
        $this->write->text('Sarah Jackson');
        $this->write->endElement();
        $this->write->startElement('phone');
        $this->write->text('+41 22 717 8832');
        $this->write->endElement();
        $this->write->startElement('email');
        $this->write->text('sarah.jackson@easyjet.com');
        $this->write->endElement();
        $this->write->endElement();//end contact
        $this->write->endElement();//end service
        $this->write->startElement('companies');
        $this->write->startAttribute('count');
        $this->write->text('1');
        $this->write->startElement('company');
        $this->write->startAttribute('id');
        $this->write->text('EZS');
        $this->write->startElement('number');
        $this->write->text('EZS');
        $this->write->endElement();
        $this->write->startElement('name');
        $this->write->text('eaysJet Switzerland');
        $this->write->endElement();
        $this->write->startElement('address');
        $this->write->startElement('street');
        $this->write->text('5 Route de l`Aéroport');
        $this->write->endElement();
        $this->write->startElement('zip');
        $this->write->text('1215');
        $this->write->endElement(); 
        $this->write->startElement('town');
        $this->write->text('Genève');
        $this->write->endElement(); 
        $this->write->startElement('country');
        $this->write->text('CH');
        $this->write->endElement();
        $this->write->endElement();// end address
        $this->write->startElement('contact');
        $this->write->startElement('name');
        $this->write->text('Sarah Jackson');
        $this->write->endElement();
        $this->write->startElement('phone');
        $this->write->text('+41 22 717 8832');
        $this->write->endElement();
        $this->write->startElement('email');
        $this->write->text('sarah.jackson@easyjet.com');
        $this->write->endElement();
        $this->write->endElement();//end contact
        $this->write->startElement('control');
        $this->write->text('BAZL');
        $this->write->endElement();
        $this->write->startElement('sector');
        $this->write->text('AVI');
        $this->write->endElement();
        $this->write->startElement('start');
        $this->write->text("2005-08-01");
        $this->write->endElement();
        $this->write->endElement();//end company
        $this->write->endElement();//end companies
        $this->write->startElement('workers');
        $this->write->startAttribute('count');
        $this->write->text($workerCount);
        
        }

        /* XMLwriter writes here the output attribute and values to XML file   */

        public function fileWrite($month, $ID, $NAME, $BASE, $AC, $POS, $MILLISV, $name, $firstName, $sex, $dob, $nation, $profession, $ssn,$date_creation,$oc) {

        $this->write->startElement('worker');
         $this->write->startAttribute('id');
        $this->write->text($ID);
        $this->write->startElement('person');
        $this->write->startElement('name');
         $this->write->text($name);
         $this->write->endElement();
         $this->write->startElement('first_names');
         $this->write->text($firstName);
         $this->write->endElement();
         if($sex != "") {
            $this->write->startElement('sex');
            $this->write->text($sex);
            $this->write->endElement();
         }
        if($dob!="" && $dob!="0000-00-00") {
            $this->write->startElement('dob');
            $this->write->text($dob);
            $this->write->endElement() ;
        }
         if($ssn!="") {
            $this->write->startElement('ssn');
            $this->write->text($ssn);
            $this->write->endElement() ;
        }
       if($nation != "") {
          $this->write->startElement('nation');
         $this->write->text($nation);
         $this->write->endElement();
       }
       if($profession != "") {
          $this->write->startElement('profession');
         $this->write->text($profession);
         $this->write->endElement();
       }
         $this->write->endElement();

        $this->write->startElement('work');
        $this->write->startAttribute('company');
        $this->write->text('EZS');
        $this->write->startElement('start');
        $this->write->text($date_creation);
        $this->write->endElement();
        
       
        if($oc !=''){
            $this->write->startElement('occupation');
            $this->write->startAttribute('code');
            $this->write->text($oc);
            $this->write->endElement();
        }
      


        $this->write->startElement('activity');
        $this->write->startAttribute('code');
        //$this->write->text($AC);
        $this->write->text("AVI");
        $this->write->endElement();



        $this->write->startElement('monitoring');

        $this->write->startElement('cosmic');


        $this->write->startElement('period');
          $this->write->text('M');
         $this->write->endElement();

          $this->write->startElement('results');
            $this->write->startElement('result');
                $this->write->startAttribute('period');
          $this->write->text($month);
         $this->write->startElement('e');
         $this->write->text($MILLISV);
          $this->write->endElement();
         $this->write->endElement();
         $this->write->endElement();
         $this->write->endElement();
         $this->write->endElement();
         $this->write->endElement();
        $this->write->endElement();//end workers
       
    }

    /* Closing the xml file after writing output */

    public function fileClose() {
		 
		 $this->write->endElement();//end cosmic radiation
        $this->write->endElement();
        $this->write->endDocument();
    }

}
