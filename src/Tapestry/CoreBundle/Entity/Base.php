<?php

namespace Tapestry\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Tapestry\UserBundle\Entity\User;
use Tapestry\UserBundle\Entity\Role;

/**
 * Class Base
 *
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 * 
 * @package Tapestry\CoreBundle\Entity
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
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="Tapestry\UserBundle\Entity\User")
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
     * @ORM\ManyToOne(targetEntity="Tapestry\UserBundle\Entity\Role")
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
     * @param User $user
     * @return Resource
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
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
     * @param Role $role
     * @return Resource
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
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
