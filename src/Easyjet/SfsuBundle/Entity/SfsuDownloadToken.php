<?php

namespace App\Easyjet\SfsuBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

/**
 * SfsuRow
 *
 * @ORM\Table(name="SFSU_DOWNLOAD_TOKEN")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */

class SfsuDownloadToken
{
    /**
     * @var int $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string $emailAddress
     *
     * @ORM\Column(name="email_address", type="string", length=200, nullable=true)
     */
    private $emailAddress;

    /**
     * @var string $ip
     *
     * @ORM\Column(name="IP", type="string", length=16, nullable=true)
     */
    private $ip;


    /**
     * @var string $date
     *
     * @ORM\Column(name="generation_date", type="datetime")
     */
    private $generationDate;

    /**
     * @var string $expirationDatetime
     *
     * @ORM\Column(name="expiration_datetime", type="datetime")
     */
    private $expirationDatetime;

    /**
     * @var SfsuFile $file Concerned file
     * @ORM\ManyToOne(targetEntity="SfsuFile")
     * @ORM\JoinColumn(name="file_id", referencedColumnName="id")
     */
    private $file;

    /**
     * @var string $token
     *
     * @ORM\Column(name="token", type="string")
     */
    private $token;

    /**
     * @var string $requestId
     *
     * @ORM\Column(name="request_id", type="string")
     */
    private $requestId;

    /**
     * @var int $nbTries
     *
     * @ORM\Column(name="nb_tries", type="integer")
     */
    private $nbTries;

    /**
     * @var bool $used
     *
     * @ORM\Column(name="used", type="integer")
     */
    private $used;



    public function __construct(SfsuFile $file)
    {
        $this->generationDate = new \DateTime;
        $this->expirationDatetime = new \DateTime;
        $this->expirationDatetime->add(new \DateInterval('PT10M'));
        $this->file = $file;
        $this->token = strtoupper(str_replace(array('0', 'O'), array('', ''), substr(md5(uniqid()), 0, 6)));
        $this->requestId = $this->accessKey = str_replace("/", "", base64_encode(openssl_random_pseudo_bytes(30)));
        $this->nbTries = 0;
        $this->used = 0;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     * @return null
     */
    public function prePersist()
    {
        $this->ip = $_SERVER['REMOTE_ADDR'];
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
     * Gets the value of emailAddress.
     *
     * @return string $emailAddress
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets the value of emailAddress.
     *
     * @param string $emailAddress $emailAddress the email address
     *
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Gets the value of ip.
     *
     * @return string $ip
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Sets the value of ip.
     *
     * @param string $ip $ip the ip
     *
     * @return self
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Gets the value of generationDate.
     *
     * @return string $date
     */
    public function getGenerationDate()
    {
        return $this->generationDate;
    }

    /**
     * Sets the value of generationDate.
     *
     * @param string $date $generationDate the generation date
     *
     * @return self
     */
    public function setGenerationDate($generationDate)
    {
        $this->generationDate = $generationDate;

        return $this;
    }

    /**
     * Gets the value of file.
     *
     * @return SfsuFile $file Concerned file
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets the value of file.
     *
     * @param SfsuFile $file Concerned file $file the file
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Gets the value of token.
     *
     * @return string $token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets the value of token.
     *
     * @param string $token $token the token
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Gets the value of requestId.
     *
     * @return string $requestId
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets the value of requestId.
     *
     * @param string $requestId $requestId the request id
     *
     * @return self
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;

        return $this;
    }

    /**
     * Gets the value of nbTries.
     *
     * @return int $nbTries
     */
    public function getNbTries()
    {
        return $this->nbTries;
    }

    /**
     * Sets the value of nbTries.
     *
     * @param int $nbTries $nbTries the nb tries
     *
     * @return self
     */
    public function setNbTries($nbTries)
    {
        $this->nbTries = $nbTries;

        return $this;
    }

    /**
     * Gets the value of used.
     *
     * @return bool $used
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Sets the value of used.
     *
     * @param bool $used $used the used
     *
     * @return self
     */
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

    public function sendByMail($recipient, $mailer, $swissinsidePrefix)
    {

        $email = (new TemplatedEmail())
        ->subject('Your token to download your file')
        ->from('no-reply@easyjet.com')
        ->to($recipient)
        ->htmlTemplate('@EasyjetSfsu/Mail/downloadToken.html.twig')
        ->textTemplate('@EasyjetSfsu/Mail/downloadToken.txt.twig')
        ->context(array('token' => $this, 'swissinside_prefix' => $swissinsidePrefix)) ;
        
        $mailer->send($email);
       
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

    public function challengeToken()
    {
        $this->nbTries++;
        return $this->nbTries;
    }
}