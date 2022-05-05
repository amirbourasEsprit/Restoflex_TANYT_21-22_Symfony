<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/employee/signup' => [[['_route' => 'app_emp_register', '_controller' => 'App\\Controller\\API\\UtilisateurApiController::signupEmpAction'], null, null, null, false, false, null]],
        '/fournisseur/signup' => [[['_route' => 'app_four_register', '_controller' => 'App\\Controller\\API\\UtilisateurApiController::signupFourAction'], null, null, null, false, false, null]],
        '/user/login' => [[['_route' => 'app__user_login', '_controller' => 'App\\Controller\\API\\UtilisateurApiController::singinAction'], null, null, null, false, false, null]],
        '/user/edit' => [[['_route' => 'app_edit_profile', '_controller' => 'App\\Controller\\API\\UtilisateurApiController::editAction'], null, null, null, false, false, null]],
        '/landing/page' => [[['_route' => 'app_landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\SecurityController::deconnexion'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/admin/application' => [[['_route' => 'app_admin_application', '_controller' => 'App\\Controller\\adminRestoflex\\AdminApplicationController::index'], null, null, null, false, false, null]],
        '/restaurant' => [[['_route' => 'app_restaurant', '_controller' => 'App\\Controller\\restaurant\\AjoutRestaurantController::index'], null, null, null, false, false, null]],
        '/ajout/restaurant' => [[['_route' => 'app_ajout_restaurant', '_controller' => 'App\\Controller\\restaurant\\AjoutRestaurantController::ajouter'], null, null, null, false, false, null]],
        '/role' => [[['_route' => 'role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::listerRole'], null, null, null, false, false, null]],
        '/ajout/role' => [[['_route' => 'ajout_role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::ajout_role'], null, null, null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::index'], null, null, null, false, false, null]],
        '/employes' => [[['_route' => 'listEmployes', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::afficher'], null, null, null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur', '_controller' => 'App\\Controller\\utilisateur\\FournisseurController::index'], null, null, null, false, false, null]],
        '/fournisseurs' => [[['_route' => 'listFournisseurs', '_controller' => 'App\\Controller\\utilisateur\\FournisseurController::afficher'], null, null, null, false, false, null]],
        '/ajouter/employee' => [[['_route' => 'ajout_employee', '_controller' => 'App\\Controller\\utilisateur\\RegisterEmployesController::AjouterEmployee'], null, null, null, false, false, null]],
        '/register/employes' => [[['_route' => 'app_register_employes', '_controller' => 'App\\Controller\\utilisateur\\RegisterFournisseurController::index'], null, null, null, false, false, null]],
        '/ajouter/Ufournisseur' => [[['_route' => 'ajout_utilisateur_fournisseur', '_controller' => 'App\\Controller\\utilisateur\\RegisterFournisseurController::AjouterEmployee'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:205)'
                .'|/supprimer/([^/]++)(?'
                    .'|(*:235)'
                    .'|(*:243)'
                .')'
                .'|/update/([^/]++)(*:268)'
                .'|/verifier/([^/]++)(*:294)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        205 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        235 => [[['_route' => 'supprimer_role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::supprimer'], ['idRole'], null, null, false, true, null]],
        243 => [
            [['_route' => 'supprimer_utilisateur_employee', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::supprimer'], ['id'], null, null, false, true, null],
            [['_route' => 'supprimer_utilisateur_fournisseur', '_controller' => 'App\\Controller\\utilisateur\\FournisseurController::supprimer'], ['id'], null, null, false, true, null],
        ],
        268 => [[['_route' => 'update', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::update'], ['id'], null, null, false, true, null]],
        294 => [
            [['_route' => 'verifier', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::verifier'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
