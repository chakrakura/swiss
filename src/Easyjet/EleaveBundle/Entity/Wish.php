<?php

namespace App\Easyjet\EleaveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EleaveWish
 *
 * @ORM\Table(name="eleave_wish")
 * @ORM\Entity(repositoryClass="App\Easyjet\EleaveBundle\Repository\WishRepository")
 */
class Wish
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
     * @var integer
     *
     * @ORM\Column(name="request_type", type="integer", nullable=false)
     */
    private $requestType;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="request_date", type="date", nullable=false)
     */
    private $requestDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="choice1_start", type="date", nullable=false)
     */
    private $choice1Start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="choice1_end", type="date", nullable=false)
     */
    private $choice1End;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="choice1_accepted", type="date", nullable=false)
     */
    private $choice1Accepted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="choice2_start", type="date", nullable=true)
     */
    private $choice2Start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="choice2_end", type="date", nullable=false)
     */
    private $choice2End;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="choice2_accepted", type="date", nullable=false)
     */
    private $choice2Accepted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="choice3_start", type="date", nullable=false)
     */
    private $choice3Start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="choice3_end", type="date", nullable=false)
     */
    private $choice3End;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="choice3_accepted", type="date", nullable=false)
     */
    private $choice3Accepted;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_user", type="text", nullable=false)
     */
    private $commentUser;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_admin", type="text", nullable=true)
     */
    private $commentAdmin = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="total_leave_day_due", type="decimal", nullable=false)
     */
    private $totalLeaveDayDue = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="total_leave_day_confirmed", type="decimal", nullable=false)
     */
    private $totalLeaveDayConfirmed = '';

    /**
     * @var float
     *
     * @ORM\Column(name="total_leave_day_taken", type="decimal", nullable=false)
     */
    private $totalLeaveDayTaken = '';

    /**
     * @var float
     *
     * @ORM\Column(name="remaining_leave", type="decimal", nullable=false)
     */
    private $remainingLeave = '';

    /**
     * @var float
     *
     * @ORM\Column(name="remaining_request", type="decimal", nullable=false)
     */
    private $remainingRequest = '';

     /**
     * @var integer
     *
     * @ORM\Column(name="motif_refus", type="integer", nullable=false)
     */
    private $motifRefus;

    
    /**
     * @var string
     *
     * @ORM\Column(name="choice1_leave_preference", type="text", nullable=false)
     */
    private $choice1LeavePreference = '';
    
    /**
     * @var string
     *
     * @ORM\Column(name="choice2_leave_preference", type="text", nullable=false)
     */
    private $choice2LeavePreference = 'automatic';
    
    /**
     * @var string
     *
     * @ORM\Column(name="choice3_leave_preference", type="text", nullable=false)
     */
    private $choice3LeavePreference = 'automatic';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validation_date", type="date", nullable=false)
     */
    private $validationDate;
    

    public function getChoice1LeavePreference() {
        return $this->choice1LeavePreference;
    }

    public function getChoice2LeavePreference() {
        return $this->choice2LeavePreference;
    }

    public function getChoice3LeavePreference() {
        return $this->choice3LeavePreference;
    }

    public function setChoice1LeavePreference($choice1LeavePreference) {
        $this->choice1LeavePreference = $choice1LeavePreference;
        return $this;
    }

    public function setChoice2LeavePreference($choice2LeavePreference) {
        $this->choice2LeavePreference = $choice2LeavePreference;
        return $this;
    }

    public function setChoice3LeavePreference($choice3LeavePreference) {
        $this->choice3LeavePreference = $choice3LeavePreference;
        return $this;
    }

        /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 
     * @return int
     */
    public function getRequestType() {
        return $this->requestType;
    }

    /**
     * 
     * @param int $requestType
     * @return Wish
     */
    public function setRequestType($requestType) {
        $this->requestType = $requestType;
        return $this;
    }

    
    /**
     * 
     * @return \App\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * 
     * @param \App\Easyjet\UmanBundle\Entity\Users $user
     * @return Wish
     */
    public function setUser(\App\Easyjet\UmanBundle\Entity\Users $user) {
        $this->user = $user;
        return $this;
    }

    
    /**
     * Set requestDate
     *
     * @param \DateTime $requestDate
     * @return Wish
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;
    
        return $this;
    }

    /**
     * Get requestDate
     *
     * @return \DateTime 
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Set choice1Start
     *
     * @param \DateTime $choice1Start
     * @return Wish
     */
    public function setChoice1Start($choice1Start)
    {
        $this->choice1Start = $choice1Start;
    
        return $this;
    }

    /**
     * Get choice1Start
     *
     * @return \DateTime 
     */
    public function getChoice1Start()
    {
        return $this->choice1Start;
    }

    /**
     * Set choice1End
     *
     * @param \DateTime $choice1End
     * @return Wish
     */
    public function setChoice1End($choice1End)
    {
        $this->choice1End = $choice1End;
    
        return $this;
    }

    /**
     * Get choice1End
     *
     * @return \DateTime 
     */
    public function getChoice1End()
    {
        return $this->choice1End;
    }

    /**
     * Set choice1Accepted
     *
     * @param \DateTime $choice1Accepted
     * @return Wish
     */
    public function setChoice1Accepted($choice1Accepted)
    {
        $this->choice1Accepted = $choice1Accepted;
    
        return $this;
    }

    /**
     * Get choice1Accepted
     *
     * @return \DateTime 
     */
    public function getChoice1Accepted()
    {
        return $this->choice1Accepted;
    }

    /**
     * Set choice2Accepted
     *
     * @param \DateTime $choice2Accepted
     * @return Wish
     */
    public function setChoice2Accepted($choice2Accepted)
    {
        $this->choice2Accepted = $choice2Accepted;
    
        return $this;
    }

    /**
     * Get choice2Accepted
     *
     * @return \DateTime 
     */
    public function getChoice2Accepted()
    {
        return $this->choice2Accepted;
    }

    /**
     * Set DateTime
     *
     * @param \DateTime $choice2Start
     * @return Wish
     */
    public function setChoice2Start(\DateTime  $choice2Start )
    {
        $this->choice2Start = $choice2Start;
    
        return $this;
    }

    /**
     * Get choice2Start
     *
     * @return \DateTime  
     */
    public function getChoice2Start()
    {
        return $this->choice2Start;
    }

    /**
     * Set choice2End
     *
     * @param \DateTime $choice2End
     * @return Wish
     */
    public function setChoice2End(\DateTime $choice2End = null)
    {
        $this->choice2End = $choice2End;
    
        return $this;
    }

    /**
     * Get choice2End
     *
     * @return \DateTime 
     */
    public function getChoice2End()
    {
        return $this->choice2End;
    }

    

    /**
     * Set choice3Start
     *
     * @param \DateTime $choice3Start
     * @return Wish
     */
    public function setChoice3Start($choice3Start)
    {
        $this->choice3Start = $choice3Start;
    
        return $this;
    }

    /**
     * Get choice3Start
     *
     * @return \DateTime 
     */
    public function getChoice3Start()
    {
        return $this->choice3Start;
    }

    /**
     * Set choice3End
     *
     * @param \DateTime $choice3End
     * @return Wish
     */
    public function setChoice3End($choice3End)
    {
        $this->choice3End = $choice3End;
    
        return $this;
    }

    /**
     * Get choice3End
     *
     * @return \DateTime 
     */
    public function getChoice3End()
    {
        return $this->choice3End;
    }

    /**
     * Set choice3Accepted
     *
     * @param \DateTime $choice3Accepted
     * @return Wish
     */
    public function setChoice3Accepted($choice3Accepted)
    {
        $this->choice3Accepted = $choice3Accepted;
    
        return $this;
    }

    /**
     * Get choice3Accepted
     *
     * @return \DateTime 
     */
    public function getChoice3Accepted()
    {
        return $this->choice3Accepted;
    }

    /**
     * Set validationDate
     *
     * @param \DateTime $validationDate
     * @return Wish
     */
    public function setValidationDate($validationDate = '0000-00-00')
    {
        $this->validationDate = $validationDate;
    
        return $this;
    }

    /**
     * Get validationDate
     *
     * @return \DateTime 
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Set commentUser
     *
     * @param string $commentUser
     * @return Wish
     */
    public function setCommentUser($commentUser)
    {
        $this->commentUser = $commentUser;
    
        return $this;
    }

    /**
     * Get commentUser
     *
     * @return string 
     */
    public function getCommentUser()
    {
        return $this->commentUser;
    }

    /**
     * Set commentAdmin
     *
     * @param string $commentAdmin
     * @return Wish
     */
    public function setCommentAdmin($commentAdmin)
    {
        $this->commentAdmin = $commentAdmin;
    
        return $this;
    }

    /**
     * Get commentAdmin
     *
     * @return string 
     */
    public function getCommentAdmin()
    {
        return $this->commentAdmin;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return Wish
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set totalLeaveDayDue
     *
     * @param float $totalLeaveDayDue
     * @return Wish
     */
    public function setTotalLeaveDayDue($totalLeaveDayDue)
    {
        $this->totalLeaveDayDue = $totalLeaveDayDue;
    
        return $this;
    }

    /**
     * Get totalLeaveDayDue
     *
     * @return float 
     */
    public function getTotalLeaveDayDue()
    {
        return $this->totalLeaveDayDue;
    }

    /**
     * Set totalLeaveDayConfirmed
     *
     * @param float $totalLeaveDayConfirmed
     * @return Wish
     */
    public function setTotalLeaveDayConfirmed($totalLeaveDayConfirmed)
    {
        $this->totalLeaveDayConfirmed = $totalLeaveDayConfirmed;
    
        return $this;
    }

    /**
     * Get totalLeaveDayConfirmed
     *
     * @return float 
     */
    public function getTotalLeaveDayConfirmed()
    {
        return $this->totalLeaveDayConfirmed;
    }

    /**
     * Set totalLeaveDayTaken
     *
     * @param float $totalLeaveDayTaken
     * @return Wish
     */
    public function setTotalLeaveDayTaken($totalLeaveDayTaken)
    {
        $this->totalLeaveDayTaken = $totalLeaveDayTaken;
    
        return $this;
    }

    /**
     * Get totalLeaveDayTaken
     *
     * @return float 
     */
    public function getTotalLeaveDayTaken()
    {
        return $this->totalLeaveDayTaken;
    }

    /**
     * Set remainingLeave
     *
     * @param float $remainingLeave
     * @return Wish
     */
    public function setRemainingLeave($remainingLeave)
    {
        $this->remainingLeave = $remainingLeave;
    
        return $this;
    }

    /**
     * Get remainingLeave
     *
     * @return float 
     */
    public function getRemainingLeave()
    {
        return $this->remainingLeave;
    }

    /**
     * Set remainingRequest
     *
     * @param float $remainingRequest
     * @return Wish
     */
    public function setRemainingRequest($remainingRequest)
    {
        $this->remainingRequest = $remainingRequest;
    
        return $this;
    }

    /**
     * Get remainingRequest
     *
     * @return float 
     */
    public function getRemainingRequest()
    {
        return $this->remainingRequest;
    }

    /**
     * Set motifRefus
     *
     * @param integer $motifRefus
     * @return Wish
     */
    public function setMotifRefus($motifRefus)
    {
        $this->motifRefus = $motifRefus;
    
        return $this;
    }

    /**
     * Get motifRefus
     *
     * @return Wish
     */
    public function getMotifRefus()
    {
        return $this->motifRefus;
    }

    
}