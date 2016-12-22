<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // admin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_homepage')), array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        // add_employee
        if ($pathinfo === '/add_employee') {
            return array (  '_controller' => 'AdminBundle\\Controller\\EmployeeInformationController::add_employeeAction',  '_route' => 'add_employee',);
        }

        // read_data
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'read_data');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\EmployeeInformationController::renderDataAction',  '_route' => 'read_data',);
        }

        // sample_twig
        if ($pathinfo === '/main') {
            return array (  '_controller' => 'AdminBundle\\Controller\\EmployeeInformationController::mainAction',  '_route' => 'sample_twig',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\EmployeeInformationController::renderDataAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
