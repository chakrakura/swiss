<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * OtpImportRowComment
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="OTP_IMPORT_ROW_COMMENT")
 * @ORM\Entity
 */
class OtpImportRowComment
{
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date", type="datetime", nullable=false)
     */
    private $postDate;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="posted_by", referencedColumnName="id_user")
     * })
     */
    private $postedBy;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="concerned_date", type="date", nullable=true)
     */
    private $concernedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", nullable=false)
     */
    private $message;

    /**
     * @var \App\Easyjet\OtpBundle\Entity\OtpImportRow
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpImportRow",inversedBy="comments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="import_row_id", referencedColumnName="id")
     * })
     */
    private $row;

    /**
     * @var \App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest",inversedBy="comments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sect_adj_claims_request_id", referencedColumnName="id")
     * })
     */
    private $sectorAdujstment;
    

    public function __construct(\App\Easyjet\UmanBundle\Entity\Users $postedBy, \App\Easyjet\OtpBundle\Entity\OtpImportRow $row = null, \App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest $sectorAdjustment = null, $message = "")
    {
        $this->postedBy = $postedBy;
        $this->message = $message;
        $this->postDate = new \DateTime();
        $this->row = $row;
        $this->sectorAdujstment  = $sectorAdjustment;
    }

    function getConcernedDate() {
        return $this->concernedDate;
    }

    function setConcernedDate(\DateTime $concernedDate) {
        $this->concernedDate = $concernedDate;
        return $this;
    }

    
    /**
     * Gets the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param integer $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of postDate.
     *
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Sets the value of postDate.
     *
     * @param \DateTime $postDate the post date
     *
     * @return self
     */
    public function setPostDate(\DateTime $postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Gets the }).
     *
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function getPostedBy()
    {
        return $this->postedBy;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\UmanBundle\Entity\Users $postedBy the posted by
     *
     * @return self
     */
    public function setPostedBy(\App\Easyjet\UmanBundle\Entity\Users $postedBy)
    {
        $this->postedBy = $postedBy;

        return $this;
    }

    /**
     * Gets the value of message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the value of message.
     *
     * @param string $message the message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Gets the }).
     *
     * @return \App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest
     */
    public function getSectorAdujstment()
    {
        return $this->sectorAdujstment;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest $sectorAdujstment the sector adujstment
     *
     * @return self
     */
    public function setSectorAdujstment(\App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest $sectorAdujstment)
    {
        $this->sectorAdujstment = $sectorAdujstment;

        return $this;
    }
}
