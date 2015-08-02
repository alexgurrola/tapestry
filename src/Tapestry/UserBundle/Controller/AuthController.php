<?php

namespace Tapestry\UserBundle\Controller;

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
 * Class AuthController
 *
 * This is a basic controller, for testing and such.  The output information and such will be abstracted into a set
 * of Symfony Services and each Controller will have a specific use case.  I will not be using this as an actual
 * MemberController in the future, rather, this is only for testing purposes while Entities and Resources are built,
 * organized, and filtered into Functionality Bundles.
 *
 * @package Tapestry\UserBundle\Controller
 */
class AuthController extends Controller
{

    /**
     * @Route("/Sign-In", name="login_route")
     * @Template()
     * @param Request $request
     * @return Response
     */
    public function loginAction(Request $request)
    {

        // set default output
        //$outputData = ['furl' => $furl];
        $outputData = [];

        // gather variables
        $outputType = strtolower($request->query->get('output'));

        // TODO: Access Database

        // TODO: Run other controllers, to build output

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
            $authenticationUtils = $this->get('security.authentication_utils');
            $outputData['error'] = $authenticationUtils->getLastAuthenticationError();
            $outputData['last_username'] = $authenticationUtils->getLastUsername();
            $response = $this->render('TapestryAdminBundle::page-sign-in.html.twig', $outputData);
        }

        // render data
        return $response;

    }

    /**
     * @Route("/Auth", name="login_check")
     */
    public function authAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
    }

}
