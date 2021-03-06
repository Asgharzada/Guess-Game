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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

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
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
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
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _assetic_8e77fa9
        if ($pathinfo === '/css/8e77fa9.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8e77fa9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8e77fa9',);
        }

        // _assetic_8e77fa9_0
        if ($pathinfo === '/css/8e77fa9_main_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8e77fa9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8e77fa9_0',);
        }

        // _assetic_a439842
        if ($pathinfo === '/images/guess.jpg') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a439842',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_a439842',);
        }

        // _assetic_a439842_0
        if ($pathinfo === '/images/guess_guess_1.jpg') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a439842',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_a439842_0',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
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
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // AcmeSepaBlogBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'AcmeSepaBlogBundle_homepage'));
        }

        // task
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::createAction',  '_route' => 'task',);
        }

        // Records
        if (0 === strpos($pathinfo, '/records') && preg_match('#^/records/(?P<level>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::aTopRecordsAction',)), array('_route' => 'Records'));
        }

        // lost
        if ($pathinfo === '/lost') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::lostAction',  '_route' => 'lost',);
        }

        if (0 === strpos($pathinfo, '/post_admin')) {
            // post_admin
            if (rtrim($pathinfo, '/') === '/post_admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post_admin');
                }
                return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\VisitorsController::indexAction',  '_route' => 'post_admin',);
            }

            // post_admin_show
            if (preg_match('#^/post_admin/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\VisitorsController::showAction',)), array('_route' => 'post_admin_show'));
            }

            // post_admin_new
            if ($pathinfo === '/post_admin/new') {
                return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\VisitorsController::newAction',  '_route' => 'post_admin_new',);
            }

            // post_admin_create
            if ($pathinfo === '/post_admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_admin_create;
                }
                return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\VisitorsController::createAction',  '_route' => 'post_admin_create',);
            }
            not_post_admin_create:

            // post_admin_edit
            if (preg_match('#^/post_admin/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\VisitorsController::editAction',)), array('_route' => 'post_admin_edit'));
            }

            // post_admin_update
            if (preg_match('#^/post_admin/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_admin_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\VisitorsController::updateAction',)), array('_route' => 'post_admin_update'));
            }
            not_post_admin_update:

            // post_admin_delete
            if (preg_match('#^/post_admin/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_admin_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\VisitorsController::deleteAction',)), array('_route' => 'post_admin_delete'));
            }
            not_post_admin_delete:

        }

        // Selection
        if ($pathinfo === '/3D') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::play3DAction',  '_route' => 'Selection',);
        }

        // Game1D
        if ($pathinfo === '/D1') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::D1Action',  '_route' => 'Game1D',);
        }

        // type
        if ($pathinfo === '/type') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::typeAction',  '_route' => 'type',);
        }

        // Game2D
        if ($pathinfo === '/D2') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::D2Action',  '_route' => 'Game2D',);
        }

        // Game3D
        if ($pathinfo === '/D3') {
            return array (  '_controller' => 'Acme\\SepaBlogBundle\\Controller\\DefaultController::D3Action',  '_route' => 'Game3D',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
