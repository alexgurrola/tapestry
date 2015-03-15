<?php

namespace Vexis\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class InitController extends Controller
{
    /**
     * @Route("/{furl}")
     * @Template()
     * @param $furl
     * @return array|Response
     */
    public function indexAction($furl = null)
    {
        if ($furl == 'render') {
            return $this->render('VexisCoreBundle:Init:blog.html.twig', array('furl' => $furl));
        } elseif ($furl == 'response') {
            return new Response("<html><body>Raw Response: {$furl}</body></html>");
        } else {
            return array('furl' => $furl);
        }
    }
}
