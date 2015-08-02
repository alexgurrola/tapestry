<?php

namespace Tapestry\HostingBundle\Entity\Core;

use Doctrine\ORM\Mapping as ORM;
use Tapestry\CoreBundle\Entity\Base;

/**
 * Site
 *
 * @ORM\Table(name="sites")
 * @ORM\Entity(repositoryClass="Tapestry\HostingBundle\Entity\Core\SiteRepository")
 */
class Site extends Base
{
    // Custom Methods
}
