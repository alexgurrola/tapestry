<?php

namespace Vexis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Vexis\CoreBundle\Entity\SiteRepository")
 */
class Site
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="time")
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="userGroup", type="integer")
     */
    private $userGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="userWorld", type="integer")
     */
    private $userWorld;


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
     * Set time
     *
     * @param \DateTime $time
     * @return Site
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Site
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userGroup
     *
     * @param integer $userGroup
     * @return Site
     */
    public function setUserGroup($userGroup)
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    /**
     * Get userGroup
     *
     * @return integer
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }

    /**
     * Set userWorld
     *
     * @param integer $userWorld
     * @return Site
     */
    public function setUserWorld($userWorld)
    {
        $this->userWorld = $userWorld;

        return $this;
    }

    /**
     * Get userWorld
     *
     * @return integer
     */
    public function getUserWorld()
    {
        return $this->userWorld;
    }
}
