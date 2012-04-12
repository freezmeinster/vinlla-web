<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
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

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
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
        return array(array (  0 => 'id',), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::featureAction',), array (  '_method' => 'GET',  'id' => '\\d+',), array (  0 =>   array (    0 => 'text',    1 => '.html',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/fitur',  ),));
    }

    private function getVinllaLandingBundle_downloadRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::downloadAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/unduh-vinlla.html',  ),));
    }

    private function getVinllaBlogBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Vinlla\\BlogBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/',  ),));
    }
}
