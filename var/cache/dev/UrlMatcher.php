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
        '/conge' => [[['_route' => 'app_conge', '_controller' => 'App\\Controller\\CongeController::index'], null, null, null, false, false, null]],
        '/Ajouter/Conge' => [[['_route' => 'AjouterConge', '_controller' => 'App\\Controller\\CongeController::AjouterConge'], null, null, null, false, false, null]],
        '/Afficher/Conge' => [[['_route' => 'AfficherConge', '_controller' => 'App\\Controller\\CongeController::AfficherConge'], null, null, null, false, false, null]],
        '/AfficherAdmin/Conge' => [[['_route' => 'AfficheAdmin', '_controller' => 'App\\Controller\\CongeController::AfficherAdminConge'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/type/conge' => [[['_route' => 'app_type_conge', '_controller' => 'App\\Controller\\TypeCongeController::index'], null, null, null, false, false, null]],
        '/Ajouter/TypeConge' => [[['_route' => 'AjouterTypeConge', '_controller' => 'App\\Controller\\TypeCongeController::AjouterTypeConge'], null, null, null, false, false, null]],
        '/Afficher/TypeConge' => [[['_route' => 'AfficherTypeConge', '_controller' => 'App\\Controller\\TypeCongeController::AfficherTypeConge'], null, null, null, false, false, null]],
        '/conge/api' => [[['_route' => 'app_conge_api', '_controller' => 'App\\Controller\\api\\CongeApiController::index'], null, null, null, false, false, null]],
        '/congedisplay' => [[['_route' => 'displayCong', '_controller' => 'App\\Controller\\api\\CongeApiController::displayConge'], null, null, null, false, false, null]],
        '/addConge' => [[['_route' => 'addConge', '_controller' => 'App\\Controller\\api\\CongeApiController::ajouterCongeAction'], null, null, null, false, false, null]],
        '/deleteConge' => [[['_route' => 'deleteConge', '_controller' => 'App\\Controller\\api\\CongeApiController::deleteCongeAction'], null, null, null, false, false, null]],
        '/updateConge' => [[['_route' => 'updateConge', '_controller' => 'App\\Controller\\api\\CongeApiController::modifierConge'], null, null, null, false, false, null]],
        '/typeconge/api' => [[['_route' => 'app_typeconge_api', '_controller' => 'App\\Controller\\api\\TypeCongeApiController::index'], null, null, null, false, false, null]],
        '/typecongedisplay' => [[['_route' => 'displayTypeConge', '_controller' => 'App\\Controller\\api\\TypeCongeApiController::displayConge'], null, null, null, false, false, null]],
        '/addTypeConge' => [[['_route' => 'addTypeConge', '_controller' => 'App\\Controller\\api\\TypeCongeApiController::ajouterTypeCongeAction'], null, null, null, false, false, null]],
        '/deleteTypeConge' => [[['_route' => 'deleteTypeConge', '_controller' => 'App\\Controller\\api\\TypeCongeApiController::deleteTypeCongeAction'], null, null, null, false, false, null]],
        '/updateTypeConge' => [[['_route' => 'updateTypeConge', '_controller' => 'App\\Controller\\api\\TypeCongeApiController::modifierTypeConge'], null, null, null, false, false, null]],
        '/restaurant' => [[['_route' => 'app_restaurant', '_controller' => 'App\\Controller\\restaurant\\AjoutRestaurantController::index'], null, null, null, false, false, null]],
        '/ajout/restaurant' => [[['_route' => 'app_ajout_restaurant', '_controller' => 'App\\Controller\\restaurant\\AjoutRestaurantController::ajouter'], null, null, null, false, false, null]],
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
                .'|/Modifier/(?'
                    .'|Conge/([^/]++)(*:196)'
                    .'|TypeConge/([^/]++)(*:222)'
                .')'
                .'|/Supprimer/(?'
                    .'|Conge/([^/]++)(*:259)'
                    .'|TypeConge/([^/]++)(*:285)'
                .')'
                .'|/Accepter/Conge/([^/]++)(*:318)'
                .'|/Refuserr/Conge/([^/]++)(*:350)'
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
        196 => [[['_route' => 'ModifierConge', '_controller' => 'App\\Controller\\CongeController::ModifierConge'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'ModifierTypeConge', '_controller' => 'App\\Controller\\TypeCongeController::ModifierTypeConge'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'SupprimerConge', '_controller' => 'App\\Controller\\CongeController::SupprimerConge'], ['id'], null, null, false, true, null]],
        285 => [[['_route' => 'SupprimerTypeConge', '_controller' => 'App\\Controller\\TypeCongeController::SupprimerTypeConge'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'AccepterConge', '_controller' => 'App\\Controller\\CongeController::AccepterConge'], ['id'], null, null, false, true, null]],
        350 => [
            [['_route' => 'RefuserConge', '_controller' => 'App\\Controller\\CongeController::RefuserConge'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
