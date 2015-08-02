<?php

namespace Tapestry\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tapestry\CoreBundle\Entity\Base;

/**
 * Class Blog
 *
 * Blogs are usually 200 – 500 words in length, more casual, and provide a great way to personally connect with website readers.
 * Blogs provide a personal, inside point of view, and are (expected to be) updated more frequently than articles.
 *
 * @ORM\Table(name="blogs")
 * @ORM\Entity(repositoryClass="Tapestry\BlogBundle\Entity\BlogRepository")
 *
 * @package Tapestry\BlogBundle\Entity
 */
class Blog extends Base
{

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
     * Set title
     *
     * @param string $title
     * @return Blog
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
     * @return Blog
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

}
