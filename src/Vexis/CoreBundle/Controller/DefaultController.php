<?php

namespace Vexis\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/{furl}")
     * @Template()
     */
    public function indexAction($furl)
    {
        return array('furl' => $furl);
    }
}
