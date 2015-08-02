<?php

namespace Tapestry\ForumBundle\Entity\Categories;

use Doctrine\ORM\Mapping as ORM;
use Tapestry\CoreBundle\Entity\Base;

/**
 * Thread
 *
 * @ORM\Table(name="threads")
 * @ORM\Entity(repositoryClass="Tapestry\ForumBundle\Entity\Categories\ThreadRepository")
 */
class Thread extends Base
{
    // Custom Methods
}
