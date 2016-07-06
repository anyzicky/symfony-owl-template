<?php

namespace Owl\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        //get slides
        $slides = $em->getRepository('OwlSiteBundle:Slider')
                     ->getSlides();

        //get services
        $services = $em->getRepository('OwlSiteBundle:Service')
                       ->getServices();

        return $this->render('@OwlSite/Page/index.html.twig', array(
            'slides' => $slides,
            'services' => $services
        ));
    }
}
