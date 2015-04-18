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
 * Class AdminController
 *
 * This is a basic controller, for testing and such.  The output information and such will be abstracted into a set
 * of Symfony Services and each Controller will have a specific use case.  I will not be using this as an actual
 * AdminController in the future, rather, this is only for testing purposes while Entities and Resources are built,
 * organized, and filtered into Functionality Bundles.
 *
 * @package Vexis\CoreBundle\Controller
 */
class AdminController extends Controller
{
    /**
     * @Route("/Admin/{furl}")
     * @Template()
     * @param Request $request
     * @param null $furl
     * @return Response
     */
    public function indexAction(Request $request, $furl = null)
    {

        // set default output
        $outputData = ['furl' => $furl];

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
            $response = $this->render('VexisCoreBundle:Admin:dashboard.html.twig', $outputData);
        }

        // render data
        return $response;

    }
}
