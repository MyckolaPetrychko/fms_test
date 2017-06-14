<?php

namespace FMS\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="referal")
 */
class Referal
{

    /**
     * @ORM\Column(type="string", length=6, unique=true)
     * @Assert\NotBlank()
     */
    protected $ref;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=15)
     * @Assert\NotBlank()
     */
    protected $ip;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    protected $date;

    public function __construct($ref=null)
    {
        if (!$ref) {
            $this->ref = $this->generateUUID();
        } else {
            $this->ref = $ref;
        }
        $this->date = new \DateTime(date("Y-m-d H:i:s"));
        $this->ip = $_SERVER['REMOTE_ADDR'];
    }

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    private function generateUUID($length=6) {
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }
        return $random;
    }
}