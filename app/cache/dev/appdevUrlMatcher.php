<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // VinllaLandingBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_VinllaLandingBundle_homepage;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'VinllaLandingBundle_homepage');
            }
            return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'VinllaLandingBundle_homepage',);
        }
        not_VinllaLandingBundle_homepage:

        // VinllaLandingBundle_feature
        if ($pathinfo === '/feature') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_VinllaLandingBundle_feature;
            }
            return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::featureAction',  '_route' => 'VinllaLandingBundle_feature',);
        }
        not_VinllaLandingBundle_feature:

        // VinllaLandingBundle_download
        if ($pathinfo === '/get-vinlla') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_VinllaLandingBundle_download;
            }
            return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::downloadAction',  '_route' => 'VinllaLandingBundle_download',);
        }
        not_VinllaLandingBundle_download:

        // VinllaLandingBundle_admin_index
        if (rtrim($pathinfo, '/') === '/admin') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_VinllaLandingBundle_admin_index;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'VinllaLandingBundle_admin_index');
            }
            return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::indexAction',  '_route' => 'VinllaLandingBundle_admin_index',);
        }
        not_VinllaLandingBundle_admin_index:

        // VinllaLandingBundle_admin_feature_list
        if ($pathinfo === '/admin/feature') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_VinllaLandingBundle_admin_feature_list;
            }
            return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::feature_listAction',  '_route' => 'VinllaLandingBundle_admin_feature_list',);
        }
        not_VinllaLandingBundle_admin_feature_list:

        // VinllaLandingBundle_admin_feature_add
        if ($pathinfo === '/admin/feature-add') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_VinllaLandingBundle_admin_feature_add;
            }
            return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::feature_addAction',  '_route' => 'VinllaLandingBundle_admin_feature_add',);
        }
        not_VinllaLandingBundle_admin_feature_add:

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
