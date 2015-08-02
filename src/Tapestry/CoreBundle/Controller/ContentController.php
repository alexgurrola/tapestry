<?php

namespace Tapestry\CoreBundle\Controller;

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
 * Class ContentController
 *
 * This is a basic controller, for testing and such.  The output information and such will be abstracted into a set
 * of Symfony Services and each Controller will have a specific use case.  I will not be using this as an actual
 * ContentController in the future, rather, this is only for testing purposes while Entities and Resources are built,
 * organized, and filtered into Functionality Bundles.
 *
 * @package Tapestry\CoreBundle\Controller
 */
class ContentController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {

        // set default output
        //$outputData = ['furl' => $furl];
        $outputData = [];

        // gather variables
        $outputType = strtolower($request->query->get('output'));

        // TODO: Access Database

        // TODO: Run other controllers, to build output

        // Encode a hardcoded password
        if (false) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('TapestryUserBundle:User')->find(2);
            $encoder = $this->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, 'password');
            $user->setPassword($encoded);
            $em->persist($user);
            $em->flush();
        }

        // serialize data, if necessary
        if ($outputType) {
            $normalizer = new GetSetMethodNormalizer();
            $encoder = ($outputType == 'xml') ? new XmlEncoder() : new JsonEncoder();
            $serializer = new Serializer([$normalizer], [$encoder]);
            $serializedContent = $serializer->serialize(@$outputData ?: null, $outputType);
            $response = new Response($serializedContent);
            $response->headers->set('Content-Type', ($outputType == 'xml') ? 'application/xml' : 'application/json');
        }

        // render template, if necessary
        if (!isset($response)) {
            $response = $this->render('TapestryBlogBundle:blog.html.twig', $outputData);
        }

        // render data
        return $response;

    }
}
