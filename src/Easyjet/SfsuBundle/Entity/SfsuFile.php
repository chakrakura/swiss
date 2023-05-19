<?php

namespace App\Easyjet\SfsuBundle\Entity;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Part\DataPart;


use Doctrine\ORM\Mapping as ORM;

/**
 * SfsuRow
 *
 * @ORM\Table(name="SFSU_FILE")
 * @ORM\Entity(repositoryClass="App\Easyjet\SfsuBundle\Repository\SfsuFileRepository");
 * @ORM\HasLifecycleCallbacks
 * 
 */

class SfsuFile
{
    public static $allowedExtensions  = array(
        ".aif",
        ".cda",
        ".mid",
        ".midi",
        ".mp3",
        ".mpa",
        ".ogg",
        ".wav",
        ".wma",
        ".wpl",
        ".7z",
        ".arj",
        ".deb",
        ".pkg",
        ".rar",
        ".rpm",
        ".tar.gz",
        ".z",
        ".zip",
        ".bin",
        ".dmg",
        ".iso",
        ".toast",
        ".vcd",
        ".csv",
        ".dat",
        ".db",
        ".dbf",
        ".log",
        ".mdb",
        ".sav",
        ".sql",
        ".tar",
        ".xml",
        ".fnt",
        ".fon",
        ".otf",
        ".ttf",
        ".ai",
        ".bmp",
        ".gif",
        ".ico",
        ".jpeg",
        ".jpg",
        ".png",
        ".ps",
        ".psd",
        ".svg",
        ".tif",
        ".tiff",
        ".cfm",
        ".cgi",
        ".css",
        ".htm",
        ".html",
        ".part",
        ".rss",
        ".xhtml",
        ".key",
        ".odp",
        ".pps",
        ".ppt",
        ".pptx",
        ".ods",
        ".xlr",
        ".xls",
        ".xlsx",
        ".3g2",
        ".3gp",
        ".avi",
        ".flv",
        ".h264",
        ".m4v",
        ".mkv",
        ".mov",
        ".mp4",
        ".mpg",
        ".mpeg",
        ".rm",
        ".swf",
        ".vob",
        ".wmv",
        ".doc",
        ".docx",
        ".odt",
        ".pdf",
        ".rtf",
        ".tex",
        ".txt",
        ".wks",
        ".wps",
        ".wpd"
    );
    
    /**
     *
     * @var array Repernsent the list of allowed MimeTpye to be uploaded
     */
    
    public static  $allowedMimeTypeArr = array(
        "video/3gpp2",
        "video/3gpp",
        "application/x-7z-compressed",
        "application/postscript",
        "audio/x-aiff",
        "video/x-msvideo",
        "image/bmp",
        "text/css",
        "text/csv",
        "application/x-debian-package",
        "application/x-apple-diskimage",
        "application/msword",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        "video/x-flv",
        "image/gif",
        "video/h264",
        "text/html",
        "image/x-icon",
        "application/x-iso9660-image",
        "image/jpeg",
        "video/x-m4v",
        "application/x-msaccess",
        "audio/midi",
        "video/x-matroska",
        "video/mp4",
        "video/mpeg",
        "audio/mpeg",
        "application/vnd.oasis.opendocument.presentation",
        "application/vnd.oasis.opendocument.spreadsheet",
        "application/vnd.oasis.opendocument.text",
        "audio/ogg",
        "font/otf",
        "application/pdf",
        "image/png",
        "application/vnd.ms-powerpoint",
        "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "image/vnd.adobe.photoshop",
        "application/x-rar-compressed",
        "application/vnd.rn-realmedia",
        "application/rss+xml",
        "application/rtf",
        "application/x-sql",
        "image/svg+xml",
        "application/x-shockwave-flash",
        "application/x-tar",
        "application/x-tex",
        "image/tiff",
        "font/ttf",
        "text/plain",
        "application/x-cdlink",
        "video/x-ms-vob",
        "audio/x-wav",
        "audio/x-ms-wma",
        "video/x-ms-wmv",
        "application/vnd.wordperfect",
        "application/vnd.ms-wpl",
        "application/vnd.ms-works",
        "application/xhtml+xml",
        "application/vnd.ms-excel",
        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        "application/xml",
        "application/zip"
    );
    
    /**
     *
     * @var array Repernsent the list of allowed extensions to be uploaded
     */
    public static $allowedExtArr = array(
        "3g2",
        "3gp",
        "7z",
        "ai",
        "aif",
        "avi",
        "bin",
        "bmp",
        "css",
        "csv",
        "deb",
        "dmg",
        "doc",
        "docx",
        "flv",
        "gif",
        "h264",
        "html",
        "ico",
        "iso",
        "jpeg",
        "m4v",
        "mdb",
        "mid",
        "mkv",
        "mp4",
        "mpeg",
        "mpga",
        "odp",
        "ods",
        "odt",
        "oga",
        "otf",
        "pdf",
        "png",
        "ppt",
        "pptx",
        "psd",
        "rar",
        "rm",
        "rss",
        "rtf",
        "sql",
        "svg",
        "swf",
        "tar",
        "tex",
        "tiff",
        "ttf",
        "txt",
        "vcd",
        "vob",
        "wav",
        "wma",
        "wmv",
        "wpd",
        "wpl",
        "wps",
        "xhtml",
        "xls",
        "xlsx",
        "xml",
        "zip",
        "eps",
        "aiff",
        "dms",
        "udeb",
        "dot",
        "htm",
        "jpg",
        "midi",
        "mk3d",
        "mp4v",
        "mpg",
        "mp2",
        "ogg",
        "pps",
        "svgz",
        "tif",
        "wks",
        "xht",
        "xlm",
        "xsl",
        "ps",
        "aifc",
        "lrf",
        "jpe",
        "kar",
        "mks",
        "mpg4",
        "mpe",
        "mp2a",
        "spx",
        "pot",
        "conf",
        "wcm",
        "xla",
        "mar",
        "rmi",
        "m1v",
        "mp3",
        "def",
        "wdb",
        "xlc",
        "so",
        "m2v",
        "m2a",
        "list",
        "xlt",
        "dist",
        "m3a",
        "log",
        "xlw",
        "distz",
        "in",
        "pkg",
        "bpk",
        "dump",
        "elc",
        "deploy"
        );
    /**
     * @var int $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string originalFilename
     *
     * @ORM\Column(name="access_key", type="string", length=120, nullable=false)
     */
    private $accessKey;

    /**
     * @var string originalFilename
     *
     * @ORM\Column(name="original_filename", type="string", length=120, nullable=false)
     */
    private $originalFilename;

    /**
     * @var string $filename
     *
     * @ORM\Column(name="filename", type="string", length=120, nullable=false)
     */
    private $filename;

    /**
     * @var string $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var string $createdAt
     *
     * @ORM\Column(name="last_download", type="datetime")
     */
    private $lastDownload;

    /**
     * @var int $nbDownloads
     *
     * @ORM\Column(name="nb_downloads", type="integer", nullable=false)
     */
    private $nbDownloads;


    /**
     * @var SfsuRetention Retention duration
     * @ORM\ManyToOne(targetEntity="SfsuRetention")
     * @ORM\JoinColumn(name="retention_duration_id", referencedColumnName="id")
     */
    private $retentionDuration;

    /**
     *
     * @ORM\Column(name="delete_after_download", type="integer", nullable=false)
     */
    private $deleteAfterDownload;

    /**
     * @var string $expirationDatetime
     *
     * @ORM\Column(name="expiration_datetime", type="datetime")
     */
    private $expirationDatetime;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection $logs Liste des champs de formulaire assignées
     * @ORM\OneToMany(targetEntity="SfsuFileLog", mappedBy="file", cascade={"persist"})
     * @ORM\OrderBy({"date" = "DESC"})
     */
    private $logs;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection $emails Liste des emails autorises pour les fichiers
     * @ORM\OneToMany(targetEntity="SfsuFileAuthorizedEmail", mappedBy="file", cascade={"all"})
   
     */
    private $emails;

    
    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users User de contrat de l'employé
     * @ORM\ManyToOne(targetEntity="App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id_user")
     */
    private $createdBy;
    
    public function __construct()
    {
        $this->createdAt = new \Datetime;
        $this->logs = new \Doctrine\Common\Collections\ArrayCollection;
       $this->emails = new \Doctrine\Common\Collections\ArrayCollection;
    }

    /**
     * @ORM\PrePersist
     */
    public function PrePersist() {
        $this->updateExpirationDate();
        $this->accessKey = str_replace("/", "", base64_encode(openssl_random_pseudo_bytes(120) . uniqid() . "9NJSH98hjfh!hsqç!uiefjksdqvj_°09UIHnkj"));
        $this->nbDownloads = 0;
    }


    private function updateExpirationDate()
    {
        $this->expirationDatetime = new \DateTime;
        $this->expirationDatetime->add(new \DateInterval('P' . $this->retentionDuration->getNbDays() . 'D'));
        $this->expirationDatetime->add(new \DateInterval('PT' . $this->retentionDuration->getNbHours() . 'H'));
    }


    /**
     * Gets the value of id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param int $id $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of createdBy.
     *
     * @return \App\Easyjet\UmanBunlde\Entity\Users User de contrat de l'employé
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets the value of createdBy.
     *
     * @param \App\Easyjet\UmanBunlde\Entity\Users User de contrat de l'employé $createdBy the created by
     *
     * @return self
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Gets the value of originalFilename.
     *
     * @return string originalFilename
     */
    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }

    /**
     * Sets the value of originalFilename.
     *
     * @param string originalFilename $originalFilename the original filename
     *
     * @return self
     */
    public function setOriginalFilename($originalFilename)
    {
        $this->originalFilename = $originalFilename;

        return $this;
    }

    /**
     * Gets the value of filename.
     *
     * @return string $filename
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets the value of filename.
     *
     * @param string $filename $filename the filename
     *
     * @return self
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Gets the value of createdAt.
     *
     * @return string $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the value of createdAt.
     *
     * @param string $createdAt $createdAt the created at
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Gets the value of retentionDuration.
     *
     * @return SfsuRetention Retention duration
     */
    public function getRetentionDuration()
    {
        return $this->retentionDuration;
    }

    /**
     * Sets the value of retentionDuration.
     *
     * @param SfsuRetention Retention duration $retentionDuration the retention duration
     *
     * @return self
     */
    public function setRetentionDuration($retentionDuration)
    {
        $this->retentionDuration = $retentionDuration;
        if ($retentionDuration) {
            $this->updateExpirationDate();
        }
        
        return $this;
    }

    /**
     * Gets the value of deleteAfterDownload.
     *
     */
    public function getDeleteAfterDownload()
    {
        return (bool)$this->deleteAfterDownload;
    }

    /**
     * Sets the value of deleteAfterDownload.
     *
     *
     * @return self
     */
    public function setDeleteAfterDownload($deleteAfterDownload)
    {
        $this->deleteAfterDownload = (bool)$deleteAfterDownload;

        return $this;
    }

    /**
     * Gets the value of expirationDatetime.
     *
     * @return string $expirationDatetime
     */
    public function getExpirationDatetime()
    {
        return $this->expirationDatetime;
    }

    /**
     * Sets the value of expirationDatetime.
     *
     * @param string $expirationDatetime $expirationDatetime the expiration datetime
     *
     * @return self
     */
    public function setExpirationDatetime($expirationDatetime)
    {
        $this->expirationDatetime = $expirationDatetime;

        return $this;
    }

    /**
     * Gets the value of logs.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection $logs Liste des champs de formulaire assignées
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Add a new log
     * @param SfsuFileLog $log Log to add to the file
     */
    public function addLog(SfsuFileLog $log)
    {
        $this->logs->add($log);
        $log->setFile($this);
    }

    /**
     * Remove all logs
     * @return null
     */
    public function clearLogs()
    {
        $this->logs->clear();
    }

    /**
     * Gets the value of nbDownloads.
     *
     * @return int $nbDownloads
     */
    public function getNbDownloads()
    {
        return $this->nbDownloads;
    }

    /**
     * Sets the value of nbDownloads.
     *
     * @param int $nbDownloads $nbDownloads the nb downloads
     *
     * @return self
     */
    public function setNbDownloads($nbDownloads)
    {
        $this->nbDownloads = $nbDownloads;

        return $this;
    }

    /**
     * Gets the value of lastDownload.
     *
     * @return string $createdAt
     */
    public function getLastDownload()
    {
        return $this->lastDownload;
    }

    /**
     * Sets the value of lastDownload.
     *
     * @param string $createdAt $lastDownload the last download
     *
     * @return self
     */
    public function setLastDownload($lastDownload)
    {
        $this->lastDownload = $lastDownload;

        return $this;
    }

    /**
     * Gets the value of accessKey.
     *
     * @return string originalFilename
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * Sets the value of accessKey.
     *
     * @param string originalFilename $accessKey the access key
     *
     * @return self
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }


    public function download()
    {
        $this->nbDownloads++;
        $this->lastDownload = new \Datetime;
    }

    public function deleteFrom($folder, $forcedBy=null)
    {
      
        try {
            if (is_file($folder . "/" . $this->filename)) {
                @unlink($folder . "/" . $this->filename);
            }

            $this->filename = null;

        } catch(\Exception $e) {
            $log = new SfsuFileLog($e->getMessage());
            $log->setLocal();
            $this->addLog($log);

            return $this;
        }
        if ($forcedBy) {
            $log = new SfsuFileLog($forcedBy ? "File removed by user" :  "File auto removed because of expiration");
            $log->setUser($forcedBy);
            $log->setEmailAddress($forcedBy->getEmailUser());
        } else {
            $log = new SfsuFileLog($forcedBy ? "File removed by user" :  "File auto removed because of expiration");
            $log->setLocal();
        }
     
        $this->addLog($log);
        return $this;
        
    }

    public function existsInFolder($folder)
    {
        return is_file($folder . "/" . $this->filename);
    }

    /**
     * Send the mail to all recipients
     * @param  array $recipientsList List of email to send the mail to
     * @param  TemplatedEmail $renderer Template engin
     * @param  MailerInterface $mailer 
     * @return 
     */
    public function sendByMail($recipientsList, $user, $subject, $content, MailerInterface $mailer, $swissinsidePrefix )
    {
       
        $recipients = array_map(function ($user) {
            return new Address($user);
        }, $recipientsList);

        $email = (new TemplatedEmail())
        ->subject($subject)
        ->from(new Address($user->getEmailUser(), $user->getNomUser() . " " . $user->getPreNomUser()))
        ->bcc(...$recipients)
        ->htmlTemplate('@EasyjetSfsu/Mail/sendDocumentUrl.html.twig')
        ->textTemplate('@EasyjetSfsu/Mail/sendDocumentUrl.txt.twig') 
        ->context(array('file' => $this, "content" => nl2br($content), 'sfsu_public_swissinside_prefix' => $swissinsidePrefix));
       return $mailer->send($email);
     
    }
    
    public function getEmails() {
        return $this->emails;
    }

    public function setEmails(\Doctrine\Common\Collections\ArrayCollection $emails) {
        $this->emails = $emails;
        return $this;
    }
    
    public function addEmail(SfsuFileAuthorizedEmail $email) {
        $email->setEmailAddress(strtolower($email->getEmailAddress()));

        foreach ($this->emails as $currentEmail) {
            if ($currentEmail->getEmailAddress() == $email->getEmailAddress()) {
                return;
            }
        }
        $email->setFile($this);
        $this->emails->add($email);
    }

    public function isEmailAuthorized($emailAddress) {
      
        $emailAddress = strtolower($emailAddress);
     
        foreach ($this->emails as $currentEmail) {
            if (strtolower($currentEmail->getEmailAddress()) == $emailAddress) {
                return true;
            }
        }
        return false;
    }
}