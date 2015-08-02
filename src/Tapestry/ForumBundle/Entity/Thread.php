<?php

namespace Tapestry\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tapestry\CoreBundle\Entity\Base;

/**
 * Class Thread
 *
 * @ORM\Table(name="threads")
 * @ORM\Entity(repositoryClass="Tapestry\ForumBundle\Entity\ThreadRepository")
 *
 * @package Tapestry\ForumBundle\Entity
 */
class Thread extends Base
{
    // Custom Methods
}
