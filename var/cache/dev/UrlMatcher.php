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
        '/fourniiseur/api' => [[['_route' => 'app_fourniiseur_api', '_controller' => 'App\\Controller\\FourniiseurApiController::index'], null, null, null, false, false, null]],
        '/fournisseurdisplay' => [[['_route' => 'displayFr', '_controller' => 'App\\Controller\\FourniiseurApiController::displayFpurnisseur'], null, null, null, false, false, null]],
        '/addFRS' => [[['_route' => 'addfrs', '_controller' => 'App\\Controller\\FourniiseurApiController::ajouterFournisseurAction'], null, null, null, false, false, null]],
        '/deleteFRS' => [[['_route' => 'deletefrs', '_controller' => 'App\\Controller\\FourniiseurApiController::deleteFournisseurAction'], null, null, null, false, false, null]],
        '/updateFRS' => [[['_route' => 'updatefrs', '_controller' => 'App\\Controller\\FourniiseurApiController::modifierFournisseur'], null, null, null, false, false, null]],
        '/AfficheFournisseur' => [[['_route' => 'Afournisseur', '_controller' => 'App\\Controller\\FournisseurController::Affiche'], null, null, null, false, false, null]],
        '/AjouterFournisseur' => [[['_route' => 'Ajfournisseur', '_controller' => 'App\\Controller\\FournisseurController::FunctionName'], null, null, null, false, false, null]],
        '/Fournisseur/TriA' => [[['_route' => 'tri', '_controller' => 'App\\Controller\\FournisseurController::OrderByNomA'], null, null, null, false, false, null]],
        '/landing/page' => [[['_route' => 'app_landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\SecurityController::deconnexion'], null, null, null, false, false, null]],
        '/stock' => [[['_route' => 'app_stock', '_controller' => 'App\\Controller\\StockController::index'], null, null, null, false, false, null]],
        '/afficherStock' => [[['_route' => 'AStock', '_controller' => 'App\\Controller\\StockController::afficher'], null, null, null, false, false, null]],
        '/ajstock' => [[['_route' => 'Ajstock', '_controller' => 'App\\Controller\\StockController::Add'], null, null, null, false, false, null]],
        '/excel/export' => [[['_route' => 'export', '_controller' => 'App\\Controller\\StockController::export'], null, null, null, false, false, null]],
        '/s/stock_stat' => [[['_route' => 'stock_stat', '_controller' => 'App\\Controller\\StockController::Stock_stat'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/restaurant' => [[['_route' => 'app_restaurant', '_controller' => 'App\\Controller\\restaurant\\AjoutRestaurantController::index'], null, null, null, false, false, null]],
        '/ajout/restaurant' => [[['_route' => 'app_ajout_restaurant', '_controller' => 'App\\Controller\\restaurant\\AjoutRestaurantController::ajouter'], null, null, null, false, false, null]],
        '/role' => [[['_route' => 'role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::listerRole'], null, null, null, false, false, null]],
        '/ajout/role' => [[['_route' => 'ajout_role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::AjouterRole'], null, null, null, false, false, null]],
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
                .'|/S(?'
                    .'|upprimer(?'
                        .'|Founriseur/([^/]++)(*:204)'
                        .'|Stock/([^/]++)(*:226)'
                    .')'
                    .'|how(?'
                        .'|One/([^/]++)(*:253)'
                        .'|S/([^/]++)(*:271)'
                    .')'
                .')'
                .'|/Modifier(?'
                    .'|Fournisseur/([^/]++)(*:313)'
                    .'|Stock/([^/]++)(*:335)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:380)'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:416)'
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
        204 => [[['_route' => 'Sfournisseur', '_controller' => 'App\\Controller\\FournisseurController::Supprimer'], ['idFournisseur'], null, null, false, true, null]],
        226 => [[['_route' => 'Sstock', '_controller' => 'App\\Controller\\StockController::Supprimer'], ['idStock'], null, null, false, true, null]],
        253 => [[['_route' => 'showf', '_controller' => 'App\\Controller\\FournisseurController::showOne'], ['idFournisseur'], null, null, false, true, null]],
        271 => [[['_route' => 'show', '_controller' => 'App\\Controller\\StockController::showOne'], ['idStock'], null, null, false, true, null]],
        313 => [[['_route' => 'Ufournisseur', '_controller' => 'App\\Controller\\FournisseurController::Update'], ['idFournisseur'], null, null, false, true, null]],
        335 => [[['_route' => 'Ustock', '_controller' => 'App\\Controller\\StockController::UpdateS'], ['idStock'], null, null, false, true, null]],
        380 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        416 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
