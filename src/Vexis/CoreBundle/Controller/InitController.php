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
     * @return array|Response
     */
    public function indexAction(Request $request, $furl = null)
    {
        //POST: $request->request->get('');

        $outputData = array('furl' => $furl);
        $outputType = strtolower($request->query->get('output'));

        if ($outputType) {
            $normalizer = new GetSetMethodNormalizer();
            if ($outputType == 'json') {
                $encoder = new JsonEncoder();
            } elseif ($outputType == 'xml') {
                $encoder = new XmlEncoder();
            } else {
                $encoder = false;
            }
            if ($encoder != false) {
                $serializer = new Serializer(array($normalizer), array($encoder));
                $serializedContent = $serializer->serialize(@$outputData ?: null, $outputType);
            } else {
                $serializedContent = "Output Type: {$outputType} is not supported.";
            }
            return new Response($serializedContent);
        }

        return $this->render('VexisCoreBundle:Init:blog.html.twig', $outputData);

    }
}
