<?php

namespace App\Easyjet\EwishBundle\Entity;

use App\Easyjet\EwishBundle\Repository\DoRequestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="ewish_do_request")
 * @ORM\Entity(repositoryClass=DoRequestRepository::class)
 */
class DoRequest
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="debut", type="date")
    */
    private $debut;

    /**
     * @ORM\Column(name="fin", type="date")
    */
    private $fin;

    /**
     * @ORM\Column(name="id_user", type="integer", nullable=false)
    */
    private $idUser;

    /**
     * @ORM\Column(name="comment", type="text", nullable=true)
    */
    private $comment;

    /**
     * @ORM\Column(name="etat", type="integer", nullable=true)
    */
    private $etat;

    /**
     * @ORM\Column(name="request_date", type="date")
    */
    private $requestDate;

    /**
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $ewishUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(?int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getRequestDate(): ?\DateTimeInterface
    {
        return $this->requestDate;
    }

    public function setRequestDate(\DateTimeInterface $requestDate): self
    {
        $this->requestDate = $requestDate;

        return $this;
    }

   
    public function getEwishUser()
    {
        return $this->ewishUser;
    }

    
    public function setEWishUser( $ewishUser)
    {
        $this->ewishUser = $ewishUser;

        return $this;
    }
}
