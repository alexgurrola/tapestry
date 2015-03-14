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
     * @param null $furl
     * @return array
     */
    public function indexAction($furl = null)
    {
        //return array('furl' => $furl);
        return $this->render('Default/index.html.twig');
    }
}
