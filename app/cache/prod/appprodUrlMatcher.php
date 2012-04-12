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
