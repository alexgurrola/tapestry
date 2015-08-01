<?php

namespace Tapestry\CoreBundle\Entity\Content;

use Doctrine\ORM\Mapping as ORM;
use Tapestry\CoreBundle\Entity\Base;

/**
 * Article
 *
 * Articles can vary greatly in their length, usually consisting of anywhere between 500 and 2,000+ words.
 * Articles are more formal in their construction, and are detailed, informative, and fact-based.
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity(repositoryClass="Tapestry\CoreBundle\Entity\Content\ArticleRepository")
 */
class Article extends Base
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

}
