<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/market')) {
            if (0 === strpos($pathinfo, '/market/login')) {
                // fos_user_security_login
                if ('/market/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/market/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/market/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

            if (0 === strpos($pathinfo, '/market/mon-espace/coordonnees')) {
                // fos_user_profile_show
                if ('/market/mon-espace/coordonnees' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/market/mon-espace/coordonnees/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

            }

            // fos_user_change_password
            if ('/market/mon-espace/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            if (0 === strpos($pathinfo, '/market/register')) {
                // fos_user_registration_register
                if ('/market/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/market/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/market/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/market/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/market/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/market/resetting')) {
                // fos_user_resetting_request
                if ('/market/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/market/resetting/reset') && preg_match('#^/market/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/market/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/market/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

            // lsi_market_homepage
            if ('/market' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'lsi_market_homepage');
                }

                return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::indexAction',  '_route' => 'lsi_market_homepage',);
            }

            if (0 === strpos($pathinfo, '/market/m')) {
                if (0 === strpos($pathinfo, '/market/mon')) {
                    if (0 === strpos($pathinfo, '/market/mon-espace')) {
                        // lsi_market_coordonnees_bancaires
                        if ('/market/mon-espace/coordonnees-bancaires' === $pathinfo) {
                            return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\ProfileController::coordonneesBancairesAction',  '_route' => 'lsi_market_coordonnees_bancaires',);
                        }

                        // lsi_market_a_propos
                        if ('/market/mon-espace/a-propos' === $pathinfo) {
                            return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\ProfileController::aProposAction',  '_route' => 'lsi_market_a_propos',);
                        }

                        // ls_imarket_mes_reservations
                        if ('/market/mon-espace/mes-reservations' === $pathinfo) {
                            return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::mesReservationsAction',  '_route' => 'ls_imarket_mes_reservations',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/market/monespace')) {
                        // ls_imarket_mon_espace
                        if ('/market/monespace' === $pathinfo) {
                            return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::monEspaceAction',  '_route' => 'ls_imarket_mon_espace',);
                        }

                        // ls_imarket_administre_index
                        if ('/market/monespace/index' === $pathinfo) {
                            return array (  '_controller' => 'LSIMarketBundle:Espace:administreIndex',  '_route' => 'ls_imarket_administre_index',);
                        }

                        if (0 === strpos($pathinfo, '/market/monespace/admin')) {
                            if (0 === strpos($pathinfo, '/market/monespace/admin/ajoute')) {
                                // ls_imarket_ajout_epci
                                if ('/market/monespace/admin/ajoutepci' === $pathinfo) {
                                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::ajouterEpciAction',  '_route' => 'ls_imarket_ajout_epci',);
                                }

                                // ls_imarket_ajouter_cgu
                                if ('/market/monespace/admin/ajouter-cgu' === $pathinfo) {
                                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::ajouterCguAction',  '_route' => 'ls_imarket_ajouter_cgu',);
                                }

                                // ls_imarket_ajouter_cgv
                                if ('/market/monespace/admin/ajouter-cgv' === $pathinfo) {
                                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::ajouterCgvAction',  '_route' => 'ls_imarket_ajouter_cgv',);
                                }

                            }

                            // ls_imarket_liste_epci
                            if ('/market/monespace/admin/listeepci' === $pathinfo) {
                                return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::listeEpciAction',  '_route' => 'ls_imarket_liste_epci',);
                            }

                            if (0 === strpos($pathinfo, '/market/monespace/admin/voir')) {
                                // ls_imarket_voir_epci
                                if (0 === strpos($pathinfo, '/market/monespace/admin/voirepci') && preg_match('#^/market/monespace/admin/voirepci/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_voir_epci')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::voirEpciAction',));
                                }

                                // ls_imarket_voir_cgu
                                if ('/market/monespace/admin/voir-cgu' === $pathinfo) {
                                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::voirCguAction',  '_route' => 'ls_imarket_voir_cgu',);
                                }

                                // ls_imarket_voir_cgv
                                if ('/market/monespace/admin/voir-cgv' === $pathinfo) {
                                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::voirCgvAction',  '_route' => 'ls_imarket_voir_cgv',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/market/monespace/admin/modifier')) {
                                // ls_imarket_modifier_epci
                                if (0 === strpos($pathinfo, '/market/monespace/admin/modifierepci') && preg_match('#^/market/monespace/admin/modifierepci/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_modifier_epci')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::modifierEpciAction',));
                                }

                                // ls_imarket_modifier_cgu
                                if ('/market/monespace/admin/modifier-cgu' === $pathinfo) {
                                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::modifierCguAction',  '_route' => 'ls_imarket_modifier_cgu',);
                                }

                                // ls_imarket_modifier_cgv
                                if ('/market/monespace/admin/modifier-cgv' === $pathinfo) {
                                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::modifierCgvAction',  '_route' => 'ls_imarket_modifier_cgv',);
                                }

                            }

                        }

                    }

                    // ls_imarket_mon_epci
                    if ('/market/monepci' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::monEpciAction',  '_route' => 'ls_imarket_mon_epci',);
                    }

                    // ls_imarket_accueil
                    if ('/market/monsespace/admin' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::indexAdminAction',  '_route' => 'ls_imarket_accueil',);
                    }

                }

                // ls_imarket_modifier_annonce
                if (0 === strpos($pathinfo, '/market/modifier') && preg_match('#^/market/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_modifier_annonce')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::modifierAction',));
                }

                if (0 === strpos($pathinfo, '/market/ma')) {
                    // ls_imarket_commandes_sur_mes_annonces
                    if ('/market/mairie/commandes-sur-mes-annonces' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::commandesSurMesAnnoncesAction',  '_route' => 'ls_imarket_commandes_sur_mes_annonces',);
                    }

                    // ls_imarket_mes_commandes
                    if ('/market/mairie/mes-commandes' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::mesCommandesAction',  '_route' => 'ls_imarket_mes_commandes',);
                    }

                    // ls_imarket_marche_public
                    if ('/market/marche-publics' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::marchePublicsAction',  '_route' => 'ls_imarket_marche_public',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/market/message')) {
                    // ls_imarket_traitement_msgrecu
                    if ('/market/messages/recus' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::msgRecuAction',  '_route' => 'ls_imarket_traitement_msgrecu',);
                    }

                    if (0 === strpos($pathinfo, '/market/messages/envoye')) {
                        // ls_imarket_traitement_messagerie
                        if (preg_match('#^/market/messages/envoye/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_traitement_messagerie')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::msgEnvoyerMAction',));
                        }

                        // ls_imarket_traitement_messageriea
                        if (0 === strpos($pathinfo, '/market/messages/envoye/administre') && preg_match('#^/market/messages/envoye/administre/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_traitement_messageriea')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::msgEnvoyerAAction',));
                        }

                    }

                    // ls_imarket_traitement_reponsemsg
                    if (0 === strpos($pathinfo, '/market/message/reponse') && preg_match('#^/market/message/reponse/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_traitement_reponsemsg')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::reponsemsgAction',));
                    }

                    // ls_imarket_traitement_msgenvoye
                    if ('/market/message/msgenvoye' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::msgenvoyeAction',  '_route' => 'ls_imarket_traitement_msgenvoye',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/market/offre')) {
                // ls_imarket_liste_annonce
                if ('/market/offres' === $pathinfo) {
                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::listeOffresAction',  '_route' => 'ls_imarket_liste_annonce',);
                }

                // ls_imarket_mes_annonces
                if ('/market/offreur/mes-annonces' === $pathinfo) {
                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::mesAnnoncesAction',  '_route' => 'ls_imarket_mes_annonces',);
                }

                // ls_imarket_reservations_sur_mes_annonces
                if ('/market/offreur/reservations-sur-mes-annonces' === $pathinfo) {
                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::reservationsSurMesAnnoncesAction',  '_route' => 'ls_imarket_reservations_sur_mes_annonces',);
                }

            }

            elseif (0 === strpos($pathinfo, '/market/a')) {
                if (0 === strpos($pathinfo, '/market/ajouter')) {
                    // ls_imarket_ajouter_annonce
                    if ('/market/ajouter' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::ajouterAction',  '_route' => 'ls_imarket_ajouter_annonce',);
                    }

                    // ls_imarket_ajouter_annonce2
                    if (preg_match('#^/market/ajouter/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_ajouter_annonce2')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::ajouter2Action',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/market/annonce')) {
                    // ls_imarket_voir_annonce
                    if (preg_match('#^/market/annonce/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_voir_annonce')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::voirAction',));
                    }

                    // ls_imarket_annonce_reservee
                    if ('/market/annoncereservee' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::annonceReserverAction',  '_route' => 'ls_imarket_annonce_reservee',);
                    }

                    // ls_imarket_voir_reservation
                    if (0 === strpos($pathinfo, '/market/annonce_reservee') && preg_match('#^/market/annonce_reservee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_voir_reservation')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::voirReservationAction',));
                    }

                    // ls_imarket_annonce_demarche
                    if ('/market/annonce/demarche' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::demarcheAnnonceAction',  '_route' => 'ls_imarket_annonce_demarche',);
                    }

                    // ls_imarket_annonce_recente
                    if ('/market/annonce/recente' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::derniereAnnonceAction',  '_route' => 'ls_imarket_annonce_recente',);
                    }

                }

                // ls_imarket_aide
                if ('/market/aide' === $pathinfo) {
                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::aideAction',  '_route' => 'ls_imarket_aide',);
                }

            }

            // ls_imarket_plage_annonce
            if (0 === strpos($pathinfo, '/market/plage') && preg_match('#^/market/plage/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_plage_annonce')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::disponibiliteAction',));
            }

            if (0 === strpos($pathinfo, '/market/s')) {
                // ls_imarket_supprimer_annonce
                if (0 === strpos($pathinfo, '/market/supprimer') && preg_match('#^/market/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_supprimer_annonce')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::supprimerAction',));
                }

                if (0 === strpos($pathinfo, '/market/superadmin')) {
                    // ls_imarket_superadmin
                    if ('/market/superadmin' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::superAdminAction',  '_route' => 'ls_imarket_superadmin',);
                    }

                    // ls_imarket_liste_admin
                    if ('/market/superadmin/liste-admin' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::listeAdminAction',  '_route' => 'ls_imarket_liste_admin',);
                    }

                    // ls_imarket_admin_registration
                    if ('/market/superadmin/registration' === $pathinfo) {
                        return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\AdminController::addAdminAction',  '_route' => 'ls_imarket_admin_registration',);
                    }

                }

                // ls_imarket_une_solution_complete
                if ('/market/solution _controller:' === $pathinfo) {
                    return array('_route' => 'ls_imarket_une_solution_complete');
                }

            }

            // ls_imarket_dupliquer_annonce
            if (0 === strpos($pathinfo, '/market/dupliquer') && preg_match('#^/market/dupliquer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_dupliquer_annonce')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::dupliquerAction',));
            }

            // ls_imarket_tarif_annonce
            if (0 === strpos($pathinfo, '/market/tarif') && preg_match('#^/market/tarif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_tarif_annonce')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::gestiondestarifAction',));
            }

            // ls_imarket_tchat_post
            if ('/market/tchat/post' === $pathinfo) {
                return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::envoiemessageAction',  '_route' => 'ls_imarket_tchat_post',);
            }

            if (0 === strpos($pathinfo, '/market/re')) {
                if (0 === strpos($pathinfo, '/market/res')) {
                    // ls_imarket_reserver_annonce
                    if (0 === strpos($pathinfo, '/market/reserver') && preg_match('#^/market/reserver/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_reserver_annonce')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::reserverAction',));
                    }

                    if (0 === strpos($pathinfo, '/market/reservation_')) {
                        // ls_imarket_traitement_demandeur_reservation
                        if (0 === strpos($pathinfo, '/market/reservation_demandeur') && preg_match('#^/market/reservation_demandeur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_traitement_demandeur_reservation')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::reservationdemandeurAction',));
                        }

                        // ls_imarket_traitement_demandeur_annulerreserv
                        if (0 === strpos($pathinfo, '/market/reservation_annule') && preg_match('#^/market/reservation_annule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_traitement_demandeur_annulerreserv')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::annulerReservationAction',));
                        }

                        // ls_imarket_traitement_demandeur_modifierreserv
                        if (0 === strpos($pathinfo, '/market/reservation_modifier') && preg_match('#^/market/reservation_modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_traitement_demandeur_modifierreserv')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::modifierReservationAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/market/resultat')) {
                        // ls_imarket_annonce_resultsearch
                        if ('/market/resultat' === $pathinfo) {
                            return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::resultatRechAction',  '_route' => 'ls_imarket_annonce_resultsearch',);
                        }

                        // ls_imarket_annonce_rechindex
                        if ('/market/resultatpageindex' === $pathinfo) {
                            return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::rechindexAction',  '_route' => 'ls_imarket_annonce_rechindex',);
                        }

                        // ls_imarket_annonce_rechavancee
                        if ('/market/resultat/rechercheavancee' === $pathinfo) {
                            return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::rechavanceeAction',  '_route' => 'ls_imarket_annonce_rechavancee',);
                        }

                    }

                }

                // ls_imarket_refuser_reservation
                if (0 === strpos($pathinfo, '/market/refuser_reservation') && preg_match('#^/market/refuser_reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_refuser_reservation')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::refuserAction',));
                }

                // ls_imarket_annonce_rechprincipal
                if ('/market/recherche' === $pathinfo) {
                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::rechPrincipaleAction',  '_route' => 'ls_imarket_annonce_rechprincipal',);
                }

            }

            // ls_imarket_valider_reservation
            if (0 === strpos($pathinfo, '/market/valider_reservation') && preg_match('#^/market/valider_reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ls_imarket_valider_reservation')), array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::validAction',));
            }

            // ls_imarket_engagement
            if ('/market/nosengagements' === $pathinfo) {
                return array (  '_controller' => 'LSIMarketBundle:Code:nosEngagements',  '_route' => 'ls_imarket_engagement',);
            }

            if (0 === strpos($pathinfo, '/market/con')) {
                // ls_imarket_condition_generale
                if ('/market/conditions-generales' === $pathinfo) {
                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::conditionsAction',  '_route' => 'ls_imarket_condition_generale',);
                }

                // ls_imarket_contact
                if ('/market/contact' === $pathinfo) {
                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::contactAction',  '_route' => 'ls_imarket_contact',);
                }

                // ls_imarket_un_concept_innovant
                if ('/market/concept-innovant' === $pathinfo) {
                    return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::conceptInnovantAction',  '_route' => 'ls_imarket_un_concept_innovant',);
                }

            }

            // ls_imarket_une_histoire_et_des_valeurs
            if ('/market/histoire' === $pathinfo) {
                return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::histoireAction',  '_route' => 'ls_imarket_une_histoire_et_des_valeurs',);
            }

            // ls_imarket_qui_sommes_nous
            if ('/market/qui-sommes-nous' === $pathinfo) {
                return array (  '_controller' => 'LSI\\MarketBundle\\Controller\\MarketController::quiSommesNousAction',  '_route' => 'ls_imarket_qui_sommes_nous',);
            }

        }

        // ancarebeca_full_calendar_load
        if ('/full-calendar/load' === $pathinfo) {
            return array (  '_controller' => 'AncaRebeca\\FullCalendarBundle\\Controller\\CalendarController::loadAction',  '_route' => 'ancarebeca_full_calendar_load',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
