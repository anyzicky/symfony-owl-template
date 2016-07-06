<?php

namespace Owl\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        //get slides
        $em = $this->getDoctrine()->getManager();

        $slides = $em->getRepository('OwlSiteBundle:Slider')
                     ->getSlides();

        return $this->render('@OwlSite/Page/index.html.twig', array(
            'slides' => $slides
        ));
    }
}
