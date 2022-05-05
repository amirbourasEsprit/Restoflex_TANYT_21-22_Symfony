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
        '/landing/page' => [[['_route' => 'app_landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\SecurityController::deconnexion'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\reclamation\\ReclamationController::index'], null, null, null, false, false, null]],
        '/AfficherReclamation/reclamation' => [[['_route' => 'AfficheR', '_controller' => 'App\\Controller\\reclamation\\ReclamationController::AfficherReclamation'], null, null, null, false, false, null]],
        '/ajouter/reclamationCL' => [[['_route' => 'AjoutreclamationGCL', '_controller' => 'App\\Controller\\reclamation\\ReclamationController::AjouterRECclient'], null, null, null, false, false, null]],
        '/ajouter/reclamationFO' => [[['_route' => 'AjoutreclamationGFO', '_controller' => 'App\\Controller\\reclamation\\ReclamationController::AjouterRECfournisseur'], null, null, null, false, false, null]],
        '/stat/t/t' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\reclamation\\ReclamationController::chartAction'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/emp' => [[['_route' => 'app_reclamation_emp', '_controller' => 'App\\Controller\\reclamation\\ReclamationEmpController::index'], null, null, null, false, false, null]],
        '/ajouter/reclamationCG' => [[['_route' => 'AjoutreclamationCLG', '_controller' => 'App\\Controller\\reclamation\\ReclamationEmpController::AjouterRecG'], null, null, null, false, false, null]],
        '/AfficherReclamationC/reclamation' => [[['_route' => 'AfficheRC', '_controller' => 'App\\Controller\\reclamation\\ReclamationEmpController::AfficherReclamation'], null, null, null, false, false, null]],
        '/reclamation/f' => [[['_route' => 'app_reclamation_f', '_controller' => 'App\\Controller\\reclamation\\ReclamationFController::index'], null, null, null, false, false, null]],
        '/ajouter/reclamationFG' => [[['_route' => 'AjoutreclamationFOG', '_controller' => 'App\\Controller\\reclamation\\ReclamationFController::AjouterRecG'], null, null, null, false, false, null]],
        '/AfficherReclamationF/reclamation' => [[['_route' => 'AfficheRF', '_controller' => 'App\\Controller\\reclamation\\ReclamationFController::AfficherReclamation'], null, null, null, false, false, null]],
        '/restaurant' => [[['_route' => 'app_restaurant', '_controller' => 'App\\Controller\\restaurant\\AjoutRestaurantController::index'], null, null, null, false, false, null]],
        '/ajout/restaurant' => [[['_route' => 'app_ajout_restaurant', '_controller' => 'App\\Controller\\restaurant\\AjoutRestaurantController::ajouter'], null, null, null, false, false, null]],
        '/role' => [[['_route' => 'role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::listerRole'], null, null, null, false, false, null]],
        '/ajout/role' => [[['_route' => 'ajout_role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::AjouterRole'], null, null, null, false, false, null]],
        '/typeReclamation' => [[['_route' => 'typeReclamation', '_controller' => 'App\\Controller\\typeReclamation\\TypeRecController::index'], null, null, null, false, false, null]],
        '/AfficherTypeRec/type_rec' => [[['_route' => 'AfficheTypeR', '_controller' => 'App\\Controller\\typeReclamation\\TypeRecController::AfficherTypeRec'], null, null, null, false, false, null]],
        '/AjoutTypeRec/type_rec' => [[['_route' => 'AjoutTypeRec', '_controller' => 'App\\Controller\\typeReclamation\\TypeRecController::AjouterTypeRec'], null, null, null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::index'], null, null, null, false, false, null]],
        '/employes' => [[['_route' => 'listEmployes', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::afficher'], null, null, null, false, false, null]],
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
                .'|/([^/]++)/(?'
                    .'|AfficherReclamationRecu(*:249)'
                    .'|Editstatus(*:267)'
                .')'
                .'|/s(?'
                    .'|upp/([^/]++)(*:293)'
                    .'|how/([^/]++)(*:313)'
                .')'
                .'|/([^/]++)/AfficherReclamationRecuC(*:356)'
                .'|/suppc/([^/]++)(*:379)'
                .'|/([^/]++)/AfficherReclamationRecuF(*:421)'
                .'|/suppF/([^/]++)(*:444)'
                .'|/SupprimerTypeRec/([^/]++)(*:478)'
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
        249 => [[['_route' => 'ReclamationRecu', '_controller' => 'App\\Controller\\reclamation\\ReclamationController::AfficherReclamationRecu'], ['id'], null, null, false, false, null]],
        267 => [[['_route' => 'EditStatus', '_controller' => 'App\\Controller\\reclamation\\ReclamationController::EditStatut'], ['id'], null, null, false, false, null]],
        293 => [[['_route' => 'r', '_controller' => 'App\\Controller\\reclamation\\ReclamationController::SupprimerRec'], ['numReclamation'], null, null, false, true, null]],
        313 => [[['_route' => 'show_rec', '_controller' => 'App\\Controller\\reclamation\\ReclamationController::show'], ['numReclamation'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'ReclamationRecuC', '_controller' => 'App\\Controller\\reclamation\\ReclamationEmpController::AfficherReclamationRecu'], ['id'], null, null, false, false, null]],
        379 => [[['_route' => 'rc', '_controller' => 'App\\Controller\\reclamation\\ReclamationEmpController::SupprimerRec'], ['numReclamation'], null, null, false, true, null]],
        421 => [[['_route' => 'ReclamationRecuF', '_controller' => 'App\\Controller\\reclamation\\ReclamationFController::AfficherReclamationRecu'], ['id'], null, null, false, false, null]],
        444 => [[['_route' => 'rf', '_controller' => 'App\\Controller\\reclamation\\ReclamationFController::SupprimerRec'], ['numReclamation'], null, null, false, true, null]],
        478 => [
            [['_route' => 's', '_controller' => 'App\\Controller\\typeReclamation\\TypeRecController::SupprimerTypeRec'], ['idTypeReclamation'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
