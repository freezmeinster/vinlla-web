<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'VinllaLandingBundle_admin_index' => true,
       'VinllaLandingBundle_admin_feature_list' => true,
       'VinllaLandingBundle_admin_feature_add' => true,
       'VinllaLandingBundle_admin_feature_update' => true,
       'VinllaLandingBundle_admin_info_list' => true,
       'VinllaLandingBundle_admin_info_add' => true,
       'VinllaLandingBundle_admin_info_update' => true,
       'VinllaLandingBundle_admin_media_list' => true,
       'VinllaLandingBundle_admin_media_add' => true,
       'VinllaLandingBundle_login_check' => true,
       'VinllaLandingBundle_login' => true,
       'VinllaLandingBundle_homepage' => true,
       'VinllaLandingBundle_feature' => true,
       'VinllaLandingBundle_download' => true,
       'VinllaBlogBundle_homepage' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getVinllaLandingBundle_admin_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/admin/',  ),));
    }

    private function getVinllaLandingBundle_admin_feature_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::feature_listAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/admin/feature',  ),));
    }

    private function getVinllaLandingBundle_admin_feature_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::feature_addAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/admin/feature-add',  ),));
    }

    private function getVinllaLandingBundle_admin_feature_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::feature_updateAction',), array (  '_method' => 'GET|POST',  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/feature-update',  ),));
    }

    private function getVinllaLandingBundle_admin_info_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::info_listAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/admin/info',  ),));
    }

    private function getVinllaLandingBundle_admin_info_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::info_addAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/admin/info-add',  ),));
    }

    private function getVinllaLandingBundle_admin_info_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::info_updateAction',), array (  '_method' => 'GET|POST',  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/info-update',  ),));
    }

    private function getVinllaLandingBundle_admin_media_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::media_listAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/admin/media',  ),));
    }

    private function getVinllaLandingBundle_admin_media_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::media_addAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/admin/media-add',  ),));
    }

    private function getVinllaLandingBundle_login_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/secured/login-check',  ),));
    }

    private function getVinllaLandingBundle_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/secured/login',  ),));
    }

    private function getVinllaLandingBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getVinllaLandingBundle_featureRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::featureAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/feature',  ),));
    }

    private function getVinllaLandingBundle_downloadRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::downloadAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/get-vinlla',  ),));
    }

    private function getVinllaBlogBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\BlogBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/',  ),));
    }
}
