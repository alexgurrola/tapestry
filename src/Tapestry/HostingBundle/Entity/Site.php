<?php

namespace Tapestry\HostingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tapestry\CoreBundle\Entity\Base;

/**
 * Class Site
 *
 * @ORM\Table(name="sites")
 * @ORM\Entity(repositoryClass="Tapestry\HostingBundle\Entity\SiteRepository")
 *
 * @package Tapestry\HostingBundle\Entity
 */
class Site extends Base
{
    // Custom Methods
}
