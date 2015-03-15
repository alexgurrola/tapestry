<?php

namespace Vexis\CoreBundle\Controller;

// Symfony Framework
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

// HTTP
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Serializer
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

/**
 * Class InitController
 * @package Vexis\CoreBundle\Controller
 */
class InitController extends Controller
{
    /**
     * @Route("/{furl}")
     * @Template()
     * @param Request $request
     * @param null $furl
     * @return Response
     */
    public function indexAction(Request $request, $furl = null)
    {

        // set default output
        $outputData = array('furl' => $furl);

        // gather variables
        $outputType = strtolower($request->query->get('output'));

        // TODO: Access Database

        // TODO: Run other controllers, to build output

        // serialize data, if necessary
        if ($outputType) {
            $normalizer = new GetSetMethodNormalizer();
            $encoder = ($outputType == 'xml') ? new XmlEncoder() : new JsonEncoder();
            $serializer = new Serializer(array($normalizer), array($encoder));
            $serializedContent = $serializer->serialize(@$outputData ?: null, $outputType);
            $response = new Response($serializedContent);
            $response->headers->set('Content-Type', ($outputType == 'xml') ? 'application/xml' : 'application/json');
        }

        // render template, if necessary
        if (!isset($response)) {
            $response = $this->render('VexisCoreBundle:Init:blog.html.twig', $outputData);
        }

        // render data
        return $response;

    }
}
