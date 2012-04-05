<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // VinllaLandingBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'VinllaLandingBundle_homepage');
            }
            return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'VinllaLandingBundle_homepage',);
        }

        // VinllaBlogBundle_homepage
        if (rtrim($pathinfo, '/') === '/blog') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'VinllaBlogBundle_homepage');
            }
            return array (  '_controller' => 'Vinlla\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'VinllaBlogBundle_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
