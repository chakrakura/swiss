<?php

namespace App\Easyjet\SfsuBundle\Classes;

use ZipArchive;
use App\Easyjet\SfsuBundle\Entity\SfsuFile;
use Doctrine\Common\Collections\ArrayCollection;

class GenerateArchiveFile {
    /**
     * @var ArrayCollection $files List of files
     */
    protected $files;

    /**
     * @var string Root target where the file are stored on the hard drive
     */
    protected $storageFolder;

    public function __construct($storageFolder) {
        $this->files = new ArrayCollection;
        $this->storageFolder = $storageFolder;
    }

    /**
     * @var $zipname The name of the zip
     * @return SfsuFile
     */
    public function createZipFile($zipname = null) {
        $zipname = preg_replace('/\.zip$/', "", $zipname);

        while (!$zipname || is_file($this->storageFolder . "/" . $zipname . ".zip")) {
            $zipname = "zip-" . uniqid();
        }

        $zipname .= ".zip";

        $hdFilename = "zip-" . uniqid();
        
        $zip = new ZipArchive();
        $zip->open($this->storageFolder . "/" . $hdFilename, ZipArchive::CREATE);

        foreach($this->files as $file) {
            /** @var SfsuFile $file */
            $target = $this->storageFolder . "/" . $file->getFilename();
            $zip->addFile($this->storageFolder . "/" . $file->getFilename(), $file->getOriginalFilename());
        }
        $zip->close();

        $file = new SfsuFile();
        $file->setFilename($hdFilename)
             ->setOriginalFilename($zipname);

        return $file;
    }

    /**
     * Get $files List of files
     *
     * @return ArrayCollection
     */ 
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Set $files List of files
     *
     * @param ArrayCollection  $files  $files List of files
     *
     * @return  self
     */ 
    public function addFile(SfsuFile $file)
    {
        $this->files->add($file);

        return $this;
    }

    /**
     * Set $files List of files
     *
     * @param array $files files List of files
     *
     * @return  self
     */ 
    public function addFiles($files){
        foreach ($files as $file) {
            $this->files->add($file);   
        }
        return $this;
    }
}