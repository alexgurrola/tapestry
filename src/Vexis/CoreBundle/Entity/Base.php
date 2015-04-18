<?php

namespace Vexis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Vexis\CoreBundle\Entity\Core\User;
use Vexis\CoreBundle\Entity\Core\Role;

/**
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 */
class Base
{

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="time")
     */
    private $time;

    /**
     * @ORM\ManyToOne(targetEntity="Vexis\CoreBundle\Entity\Core\User")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id", nullable=true)
     */
    protected $user;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity="Vexis\CoreBundle\Entity\Core\Role")
     * @ORM\JoinColumn(name="userRoleId", referencedColumnName="id", nullable=true)
     */
    protected $userRole;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $userRoleId;

    /**
     * @ORM\ManyToOne(targetEntity="Vexis\CoreBundle\Entity\Core\User")
     * @ORM\JoinColumn(name="userWorldId", referencedColumnName="id", nullable=true)
     */
    protected $userWorld;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $userWorldId;


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \DateTime $time
     * @return Resource
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param integer $userId
     * @return Resource
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param integer $userRoleId
     * @return Resource
     */
    public function setUserRoleId($userRoleId)
    {
        $this->userRoleId = $userRoleId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getUserRoleId()
    {
        return $this->userRoleId;
    }

    /**
     * @param integer $userWorldId
     * @return Resource
     */
    public function setUserWorldId($userWorldId)
    {
        $this->userWorldId = $userWorldId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getUserWorldId()
    {
        return $this->userWorldId;
    }

}
