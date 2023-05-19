<?php

namespace App\Easyjet\FdtrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FdtrRow
 *
 * @ORM\Table(name="fdtr_external_dtime")
 * @ORM\Entity(repositoryClass="App\Easyjet\FdtrBundle\Repository\FdtrExternalDtimeRepository")
 */

class FdtrExternalDtime
{
    const STATUS_PENDING =  "pending";
    const STATUS_VALIDATED =  "validated";
    const STATUS_REJECTED =  "rejected";
    
    /** 
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="FdtrMonthlyReport")
     * @ORM\JoinColumn(name="fdtr_monthly_report_id", referencedColumnName="id")
     */
    private $monthlyReport;

    /**
     * @var string
     *
     * @ORM\Column(name="file_target", type="string", length=120, nullable=true)
     */
    private $fileTarget;

    /**
     * @var int
     *
     * @ORM\Column(name="duration_minutes", type="integer", nullable=true)
     */
    private $durationMinutes;

    
    private $durationMinutesFormatted;

    /**
     * @var FdtrExternalDtimeReason
     *
     * @ORM\ManyToOne(targetEntity="FdtrExternalDtimeReason")
     * @ORM\JoinColumn(name="reason", referencedColumnName="id")
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", length=20, nullable=true)
     */
    private $status;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $tmpFile;


    public function __construct(FdtrMonthlyReport $monthlyReport)
    {
        $this->monthlyReport = $monthlyReport;
        $this->status = self::STATUS_PENDING;
    }


    /**
     * Gets the value of monthlyReport.
     *
     * @return mixed
     */
    public function getMonthlyReport()
    {
        return $this->monthlyReport;
    }

    /**
     * Sets the value of monthlyReport.
     *
     * @param mixed $monthlyReport the monthly report
     *
     * @return self
     */
    public function setMonthlyReport($monthlyReport)
    {
        $this->monthlyReport = $monthlyReport;

        return $this;
    }

    /**
     * Gets the value of fileTarget.
     *
     * @return string
     */
    public function getFileTarget()
    {
        return $this->fileTarget;
    }

    /**
     * Sets the value of fileTarget.
     *
     * @param string $fileTarget the file target
     *
     * @return self
     */
    public function setFileTarget($fileTarget)
    {
        $this->fileTarget = $fileTarget;

        return $this;
    }

    /**
     * Gets the value of durationMinutes.
     *
     * @return int
     */
    public function getDurationMinutes()
    {

        return $this->durationMinutes;
    }

    /**
     * Sets the value of durationMinutes.
     *
     * @param int $durationMinutes the duration minutes
     *
     * @return self
     */
    public function setDurationMinutes($durationMinutes)
    {
        $this->durationMinutes = $durationMinutes;

        return $this;
    }

    /**
     * Gets the value of durationMinutesFormatted.
     *
     * @return string
     */
    public function getDurationMinutesFormatted()
    {
        $hours = (int)($this->durationMinutes / 60);
        $minutes = (int)($this->durationMinutes % 60);

        return str_pad($hours, 2, "0", STR_PAD_LEFT) . ":"  . str_pad($minutes, 2, "0", STR_PAD_LEFT) ;
    }

    public function setDurationMinutesFormatted($time)
    {
        if (!preg_match("/^[0-9]+:[0-9]{2}$/", $time)) {
            $this->durationMinutes = -1;
        } else {
            list($hours, $minutes) = explode(":", $time);
            $this->durationMinutes = ($hours*60) + $minutes;
        }
        
    }
    

    /**
     * Gets the value of reason.
     *
     * @return App\Entity\FdtrExternalDtimeReason
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets the value of reason.
     *
     * @param App\Entity\FdtrExternalDtimeReason $reason the reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Gets the value of comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the value of comment.
     *
     * @param string $comment the comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }


    /**
     * Gets the value of status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the value of status.
     *
     * @param string $status the status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }



    /**
     * Gets the value of tmpFile.
     *
     * @return mixed
     */
    public function getTmpFile()
    {
        return $this->tmpFile;
    }

    /**
     * Sets the value of tmpFile.
     *
     * @param mixed $tmpFile the tmp file
     *
     * @return self
     */
    public function setTmpFile($tmpFile)
    {
        $this->tmpFile = $tmpFile;

        return $this;
    }

    /**
     * Upload the tmp file if any
     * @param  string $folder Storage folder
     * @return self
     */
    public function upload($folder)
    {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->tmpFile) {
            return;
        }

        $initialFile = explode(".", $this->tmpFile->getClientOriginalName());
        $extension = strtolower($initialFile[count($initialFile) - 1]);

        do {
            $storageFilename = "dtime-" . uniqid() . "." . $extension;
        } while(is_file($folder . "/" . $storageFilename));

        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité

        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé
        $this->tmpFile->move($folder, $storageFilename);

        // définit la propriété « path » comme étant le nom de fichier où vous
        // avez stocké le fichier
        $this->fileTarget = $storageFilename;

        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->tmpFile = null;

        return $this;
    }
}
