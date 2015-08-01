<?php

namespace Tapestry\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//use Tapestry\CoreBundle\Entity\Core\User;
//use Tapestry\CoreBundle\Entity\Core\Role;

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
     * @ORM\ManyToOne(targetEntity="Tapestry\CoreBundle\Entity\Core\User")
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
     * @ORM\ManyToOne(targetEntity="Tapestry\CoreBundle\Entity\Core\Role")
     * @ORM\JoinColumn(name="roleId", referencedColumnName="id", nullable=true)
     */
    protected $role;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $roleId;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $world;


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
     * @param integer $roleId
     * @return Resource
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @param integer $world
     * @return Resource
     */
    public function setWorld($world)
    {
        $this->world = $world;

        return $this;
    }

    /**
     * @return bool
     */
    public function getWorld()
    {
        return $this->world;
    }

}
