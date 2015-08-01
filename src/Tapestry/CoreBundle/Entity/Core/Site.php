<?php

namespace Tapestry\CoreBundle\Entity\Core;

use Doctrine\ORM\Mapping as ORM;
use Tapestry\CoreBundle\Entity\Base;

/**
 * Site
 *
 * @ORM\Table(name="sites")
 * @ORM\Entity(repositoryClass="Tapestry\CoreBundle\Entity\Core\SiteRepository")
 */
class Site extends Base
{
    // Custom Methods
}
