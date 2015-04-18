<?php

namespace Vexis\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * Articles can vary greatly in their length, usually consisting of anywhere between 500 and 2,000+ words.
 * Articles are more formal in their construction, and are detailed, informative, and fact-based.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Vexis\CoreBundle\Entity\ArticleRepository")
 */
class Article
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

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
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Article
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
