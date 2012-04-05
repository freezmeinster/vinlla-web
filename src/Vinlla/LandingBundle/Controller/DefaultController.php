<?php

namespace Vinlla\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('VinllaLandingBundle:Default:index.html.twig');
    }
	public function featureAction()
    {
        return $this->render('VinllaLandingBundle:Default:feature.html.twig');
    }
	public function downloadAction()
    {
        return $this->render('VinllaLandingBundle:Default:download.html.twig');
    }
}
