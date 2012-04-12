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

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

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

        if (0 === strpos($pathinfo, '/admin')) {
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

            // VinllaLandingBundle_admin_feature_update
            if (0 === strpos($pathinfo, '/admin/feature-update') && preg_match('#^/admin/feature\\-update/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_VinllaLandingBundle_admin_feature_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::feature_updateAction',)), array('_route' => 'VinllaLandingBundle_admin_feature_update'));
            }
            not_VinllaLandingBundle_admin_feature_update:

            // VinllaLandingBundle_admin_info_list
            if ($pathinfo === '/admin/info') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_VinllaLandingBundle_admin_info_list;
                }
                return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::info_listAction',  '_route' => 'VinllaLandingBundle_admin_info_list',);
            }
            not_VinllaLandingBundle_admin_info_list:

            // VinllaLandingBundle_admin_info_add
            if ($pathinfo === '/admin/info-add') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_VinllaLandingBundle_admin_info_add;
                }
                return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::info_addAction',  '_route' => 'VinllaLandingBundle_admin_info_add',);
            }
            not_VinllaLandingBundle_admin_info_add:

            // VinllaLandingBundle_admin_info_update
            if (0 === strpos($pathinfo, '/admin/info-update') && preg_match('#^/admin/info\\-update/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_VinllaLandingBundle_admin_info_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::info_updateAction',)), array('_route' => 'VinllaLandingBundle_admin_info_update'));
            }
            not_VinllaLandingBundle_admin_info_update:

            // VinllaLandingBundle_admin_media_list
            if ($pathinfo === '/admin/media') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_VinllaLandingBundle_admin_media_list;
                }
                return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::media_listAction',  '_route' => 'VinllaLandingBundle_admin_media_list',);
            }
            not_VinllaLandingBundle_admin_media_list:

            // VinllaLandingBundle_admin_media_add
            if ($pathinfo === '/admin/media-add') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_VinllaLandingBundle_admin_media_add;
                }
                return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\AdminController::media_addAction',  '_route' => 'VinllaLandingBundle_admin_media_add',);
            }
            not_VinllaLandingBundle_admin_media_add:

        }

        if (0 === strpos($pathinfo, '/secured')) {
            // VinllaLandingBundle_login_check
            if ($pathinfo === '/secured/login-check') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_VinllaLandingBundle_login_check;
                }
                return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'VinllaLandingBundle_login_check',);
            }
            not_VinllaLandingBundle_login_check:

            // VinllaLandingBundle_login
            if ($pathinfo === '/secured/login') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_VinllaLandingBundle_login;
                }
                return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'VinllaLandingBundle_login',);
            }
            not_VinllaLandingBundle_login:

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
        if (0 === strpos($pathinfo, '/fitur') && preg_match('#^/fitur/(?P<id>\\d+)\\.html$#xs', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_VinllaLandingBundle_feature;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::featureAction',)), array('_route' => 'VinllaLandingBundle_feature'));
        }
        not_VinllaLandingBundle_feature:

        // VinllaLandingBundle_download
        if ($pathinfo === '/unduh-vinlla.html') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_VinllaLandingBundle_download;
            }
            return array (  '_controller' => 'Vinlla\\LandingBundle\\Controller\\DefaultController::downloadAction',  '_route' => 'VinllaLandingBundle_download',);
        }
        not_VinllaLandingBundle_download:

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
