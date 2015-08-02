<?php

namespace Tapestry\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tapestry\CoreBundle\Entity\Base;

/**
 * Class Forum
 *
 * @ORM\Table(name="forums")
 * @ORM\Entity(repositoryClass="Tapestry\ForumBundle\Entity\ForumRepository")
 *
 * @package Tapestry\ForumBundle\Entity
 */
class Forum extends Base
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @param string $name
     * @return Forum
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $description
     * @return Forum
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
