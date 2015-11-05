<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'User\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'User\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'User\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/users')) {
                // users
                if (rtrim($pathinfo, '/') === '/admin/users') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'users');
                    }

                    return array (  '_controller' => 'User\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'users',);
                }

                // user_show
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'User\\UserBundle\\Controller\\UserController::showAction',));
                }

                // user_new
                if ($pathinfo === '/admin/users/new') {
                    return array (  '_controller' => 'User\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_membre
                if ($pathinfo === '/admin/users/membre') {
                    return array (  '_controller' => 'User\\UserBundle\\Controller\\UserController::membreAction',  '_route' => 'user_membre',);
                }

                // user_create
                if ($pathinfo === '/admin/users/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'User\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_edit
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'User\\UserBundle\\Controller\\UserController::editAction',));
                }

                // user_update
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'User\\UserBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'User\\UserBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

            // add_users
            if ($pathinfo === '/admin/addUser') {
                return array (  '_controller' => 'User\\UserBundle\\Controller\\RegistrationController::newUserAction',  '_route' => 'add_users',);
            }

            // view_users
            if (0 === strpos($pathinfo, '/admin/update') && preg_match('#^/admin/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_users')), array (  '_controller' => 'User\\UserBundle\\Controller\\RegistrationController::editAction',));
            }

            // delete_users
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_users')), array (  '_controller' => 'User\\UserBundle\\Controller\\RegistrationController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'User\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'User\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'User\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'User\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        // front_office_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_office_homepage');
            }

            return array (  '_controller' => 'Front\\OfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_office_homepage',);
        }

        // front_office_index
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'Front\\OfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_office_index',);
        }

        // front_office_event
        if ($pathinfo === '/event') {
            return array (  '_controller' => 'Front\\OfficeBundle\\Controller\\EventController::eventAction',  '_route' => 'front_office_event',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/activite')) {
                // activite
                if (rtrim($pathinfo, '/') === '/admin/activite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'activite');
                    }

                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ActiviteController::indexAction',  '_route' => 'activite',);
                }

                // activite_show
                if (preg_match('#^/admin/activite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_show')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ActiviteController::showAction',));
                }

                // activite_new
                if ($pathinfo === '/admin/activite/new') {
                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ActiviteController::newAction',  '_route' => 'activite_new',);
                }

                // activite_create
                if ($pathinfo === '/admin/activite/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_activite_create;
                    }

                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ActiviteController::createAction',  '_route' => 'activite_create',);
                }
                not_activite_create:

                // activite_edit
                if (preg_match('#^/admin/activite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_edit')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ActiviteController::editAction',));
                }

                // activite_update
                if (preg_match('#^/admin/activite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_activite_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_update')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ActiviteController::updateAction',));
                }
                not_activite_update:

                // activite_delete
                if (preg_match('#^/admin/activite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_activite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_delete')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ActiviteController::deleteAction',));
                }
                not_activite_delete:

            }

            if (0 === strpos($pathinfo, '/admin/structure')) {
                // structure
                if (rtrim($pathinfo, '/') === '/admin/structure') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'structure');
                    }

                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\StructureController::indexAction',  '_route' => 'structure',);
                }

                // structure_show
                if (preg_match('#^/admin/structure/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_show')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\StructureController::showAction',));
                }

                // structure_new
                if ($pathinfo === '/admin/structure/new') {
                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\StructureController::newAction',  '_route' => 'structure_new',);
                }

                // structure_create
                if ($pathinfo === '/admin/structure/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_structure_create;
                    }

                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\StructureController::createAction',  '_route' => 'structure_create',);
                }
                not_structure_create:

                // structure_edit
                if (preg_match('#^/admin/structure/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_edit')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\StructureController::editAction',));
                }

                // structure_update
                if (preg_match('#^/admin/structure/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_structure_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_update')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\StructureController::updateAction',));
                }
                not_structure_update:

                // structure_delete
                if (preg_match('#^/admin/structure/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_structure_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_delete')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\StructureController::deleteAction',));
                }
                not_structure_delete:

            }

            if (0 === strpos($pathinfo, '/admin/pays')) {
                // pays
                if (rtrim($pathinfo, '/') === '/admin/pays') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pays');
                    }

                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\PaysController::indexAction',  '_route' => 'pays',);
                }

                // pays_show
                if (preg_match('#^/admin/pays/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_show')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\PaysController::showAction',));
                }

                // pays_new
                if ($pathinfo === '/admin/pays/new') {
                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\PaysController::newAction',  '_route' => 'pays_new',);
                }

                // pays_create
                if ($pathinfo === '/admin/pays/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pays_create;
                    }

                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\PaysController::createAction',  '_route' => 'pays_create',);
                }
                not_pays_create:

                // pays_edit
                if (preg_match('#^/admin/pays/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_edit')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\PaysController::editAction',));
                }

                // pays_update
                if (preg_match('#^/admin/pays/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pays_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_update')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\PaysController::updateAction',));
                }
                not_pays_update:

                // pays_delete
                if (preg_match('#^/admin/pays/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_pays_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_delete')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\PaysController::deleteAction',));
                }
                not_pays_delete:

            }

            if (0 === strpos($pathinfo, '/admin/artistes')) {
                // artistes
                if (rtrim($pathinfo, '/') === '/admin/artistes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'artistes');
                    }

                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ArtistesController::indexAction',  '_route' => 'artistes',);
                }

                // artistes_show
                if (preg_match('#^/admin/artistes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'artistes_show')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ArtistesController::showAction',));
                }

                // artistes_new
                if ($pathinfo === '/admin/artistes/new') {
                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ArtistesController::newAction',  '_route' => 'artistes_new',);
                }

                // artistes_create
                if ($pathinfo === '/admin/artistes/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_artistes_create;
                    }

                    return array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ArtistesController::createAction',  '_route' => 'artistes_create',);
                }
                not_artistes_create:

                // artistes_edit
                if (preg_match('#^/admin/artistes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'artistes_edit')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ArtistesController::editAction',));
                }

                // artistes_update
                if (preg_match('#^/admin/artistes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_artistes_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'artistes_update')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ArtistesController::updateAction',));
                }
                not_artistes_update:

                // artistes_delete
                if (preg_match('#^/admin/artistes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_artistes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'artistes_delete')), array (  '_controller' => 'Back\\OfficeBundle\\Controller\\ArtistesController::deleteAction',));
                }
                not_artistes_delete:

            }

            // back_office_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'back_office_homepage');
                }

                return array (  '_controller' => 'BackOfficeBundle:Default:index',  '_route' => 'back_office_homepage',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
