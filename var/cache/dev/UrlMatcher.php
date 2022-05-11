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
        '/user/getPasswordbyMail' => [[['_route' => 'api_forgetPasswordCheck', '_controller' => 'App\\Controller\\API\\UtilisateurApiController::forgetPasswordCheck'], null, null, null, false, false, null]],
        '/modifyPasswordUser' => [[['_route' => 'UserModifyPassword', '_controller' => 'App\\Controller\\API\\UtilisateurApiController::modifyEntPassword'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/displayCommandeFourn' => [[['_route' => 'displayCommandeFourn', '_controller' => 'App\\Controller\\CommandeController::afficherCommandeF'], null, ['GET' => 0], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/users/data/download' => [[['_route' => 'pdfdata', '_controller' => 'App\\Controller\\CommandeController::pdf'], null, null, null, false, false, null]],
        '/conge' => [[['_route' => 'app_conge', '_controller' => 'App\\Controller\\CongeController::index'], null, null, null, false, false, null]],
        '/Ajouter/Conge' => [[['_route' => 'AjouterConge', '_controller' => 'App\\Controller\\CongeController::AjouterConge'], null, null, null, false, false, null]],
        '/Afficher/Conge' => [[['_route' => 'AfficherConge', '_controller' => 'App\\Controller\\CongeController::AfficherConge'], null, null, null, false, false, null]],
        '/AfficherAdmin/Conge' => [[['_route' => 'AfficheAdmin', '_controller' => 'App\\Controller\\CongeController::AfficherAdminConge'], null, null, null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture', '_controller' => 'App\\Controller\\FactureController::index'], null, null, null, false, false, null]],
        '/displayFact' => [[['_route' => 'displayFact', '_controller' => 'App\\Controller\\FactureController::afficherFacture'], null, null, null, false, false, null]],
        '/statFact' => [[['_route' => 'statFact', '_controller' => 'App\\Controller\\FactureController::statistiqueFact'], null, null, null, false, false, null]],
        '/Search' => [[['_route' => 'Search', '_controller' => 'App\\Controller\\FactureController::rechercheByDate'], null, null, null, false, false, null]],
        '/fourniiseur/api' => [[['_route' => 'app_fourniiseur_api', '_controller' => 'App\\Controller\\FourniiseurApiController::index'], null, null, null, false, false, null]],
        '/fournisseurdisplay' => [[['_route' => 'displayFr', '_controller' => 'App\\Controller\\FourniiseurApiController::displayFpurnisseur'], null, null, null, false, false, null]],
        '/addFRS' => [[['_route' => 'addfrs', '_controller' => 'App\\Controller\\FourniiseurApiController::ajouterFournisseurAction'], null, null, null, false, false, null]],
        '/deleteFRS' => [[['_route' => 'deletefrs', '_controller' => 'App\\Controller\\FourniiseurApiController::deleteFournisseurAction'], null, null, null, false, false, null]],
        '/updateFRS' => [[['_route' => 'updatefrs', '_controller' => 'App\\Controller\\FourniiseurApiController::modifierFournisseur'], null, null, null, false, false, null]],
        '/AfficheFournisseur' => [[['_route' => 'Afournisseur', '_controller' => 'App\\Controller\\FournisseurController::Affiche'], null, null, null, false, false, null]],
        '/AjouterFournisseur' => [[['_route' => 'Ajfournisseur', '_controller' => 'App\\Controller\\FournisseurController::FunctionName'], null, null, null, false, false, null]],
        '/Fournisseur/TriA' => [[['_route' => 'tri', '_controller' => 'App\\Controller\\FournisseurController::OrderByNomA'], null, null, null, false, false, null]],
        '/landing/page' => [[['_route' => 'app_landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, null, null, false, false, null]],
        '/produit/restaurant' => [[['_route' => 'app_produit_restaurant_index', '_controller' => 'App\\Controller\\ProduitRestaurantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/restaurant/new' => [[['_route' => 'app_produit_restaurant_new', '_controller' => 'App\\Controller\\ProduitRestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationController::index'], null, null, null, false, false, null]],
        '/AfficherReclamation/reclamation' => [[['_route' => 'AfficheR', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationController::AfficherReclamation'], null, null, null, false, false, null]],
        '/ajouter/reclamationCL' => [[['_route' => 'AjoutreclamationGCL', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationController::AjouterRECclient'], null, null, null, false, false, null]],
        '/ajouter/reclamationFO' => [[['_route' => 'AjoutreclamationGFO', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationController::AjouterRECfournisseur'], null, null, null, false, false, null]],
        '/stat/t/t' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationController::chartAction'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/emp' => [[['_route' => 'app_reclamation_emp', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationEmpController::index'], null, null, null, false, false, null]],
        '/ajouter/reclamationCG' => [[['_route' => 'AjoutreclamationCLG', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationEmpController::AjouterRecG'], null, null, null, false, false, null]],
        '/AfficherReclamationC/reclamation' => [[['_route' => 'AfficheRC', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationEmpController::AfficherReclamation'], null, null, null, false, false, null]],
        '/reclamation/f' => [[['_route' => 'app_reclamation_f', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationFController::index'], null, null, null, false, false, null]],
        '/ajouter/reclamationFG' => [[['_route' => 'AjoutreclamationFOG', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationFController::AjouterRecG'], null, null, null, false, false, null]],
        '/AfficherReclamationF/reclamation' => [[['_route' => 'AfficheRF', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationFController::AfficherReclamation'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/restaurant' => [[['_route' => 'app_restaurant', '_controller' => 'App\\Controller\\RestaurantController::index'], null, null, null, false, false, null]],
        '/ajout/restaurant' => [[['_route' => 'app_ajout_restaurant', '_controller' => 'App\\Controller\\RestaurantController::ajouterRestaurant'], null, null, null, false, false, null]],
        '/displayRest' => [[['_route' => 'displayRest', '_controller' => 'App\\Controller\\RestaurantController::afficherRestaurant'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\SecurityController::deconnexion'], null, null, null, false, false, null]],
        '/stock' => [[['_route' => 'app_stock', '_controller' => 'App\\Controller\\StockController::index'], null, null, null, false, false, null]],
        '/afficherStock' => [[['_route' => 'AStock', '_controller' => 'App\\Controller\\StockController::afficher'], null, null, null, false, false, null]],
        '/ajstock' => [[['_route' => 'Ajstock', '_controller' => 'App\\Controller\\StockController::Add'], null, null, null, false, false, null]],
        '/excel/export' => [[['_route' => 'export', '_controller' => 'App\\Controller\\StockController::export'], null, null, null, false, false, null]],
        '/s/stock_stat' => [[['_route' => 'stock_stat', '_controller' => 'App\\Controller\\StockController::Stock_stat'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/type/conge' => [[['_route' => 'app_type_conge', '_controller' => 'App\\Controller\\TypeCongeController::index'], null, null, null, false, false, null]],
        '/Ajouter/TypeConge' => [[['_route' => 'AjouterTypeConge', '_controller' => 'App\\Controller\\TypeCongeController::AjouterTypeConge'], null, null, null, false, false, null]],
        '/Afficher/TypeConge' => [[['_route' => 'AfficherTypeConge', '_controller' => 'App\\Controller\\TypeCongeController::AfficherTypeConge'], null, null, null, false, false, null]],
        '/admin/application' => [[['_route' => 'app_admin_application', '_controller' => 'App\\Controller\\adminRestoflex\\AdminApplicationController::index'], null, null, null, false, false, null]],
        '/role' => [[['_route' => 'role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::listerRole'], null, null, null, false, false, null]],
        '/ajout/role' => [[['_route' => 'ajout_role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::ajout_role'], null, null, null, false, false, null]],
        '/typeReclamation' => [[['_route' => 'typeReclamation', '_controller' => 'App\\Controller\\typeReclamation\\TypeRecController::index'], null, null, null, false, false, null]],
        '/AfficherTypeRec/type_rec' => [[['_route' => 'AfficheTypeR', '_controller' => 'App\\Controller\\typeReclamation\\TypeRecController::AfficherTypeRec'], null, null, null, false, false, null]],
        '/AjoutTypeRec/type_rec' => [[['_route' => 'AjoutTypeRec', '_controller' => 'App\\Controller\\typeReclamation\\TypeRecController::AjouterTypeRec'], null, null, null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::index'], null, null, null, false, false, null]],
        '/employes' => [[['_route' => 'listEmployes', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::afficher'], null, null, null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur', '_controller' => 'App\\Controller\\utilisateur\\FournisseurController::index'], null, null, null, false, false, null]],
        '/fournisseurs' => [[['_route' => 'listFournisseursg', '_controller' => 'App\\Controller\\utilisateur\\FournisseurController::afficher'], null, null, null, false, false, null]],
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
                .'|/c(?'
                    .'|a(?'
                        .'|tegorie/([^/]++)(?'
                            .'|(*:197)'
                            .'|/edit(*:210)'
                            .'|(*:218)'
                        .')'
                        .'|lculFactT/([^/]++)(*:245)'
                    .')'
                    .'|ommande/([^/]++)(?'
                        .'|(*:273)'
                        .'|/edit(*:286)'
                        .'|(*:294)'
                    .')'
                .')'
                .'|/Modifier(?'
                    .'|/Conge/([^/]++)(*:331)'
                    .'|Fournisseur/([^/]++)(*:359)'
                .')'
                .'|/S(?'
                    .'|upprimer(?'
                        .'|/Conge/([^/]++)(*:399)'
                        .'|Founriseur/([^/]++)(*:426)'
                    .')'
                    .'|howOne/([^/]++)(*:450)'
                .')'
                .'|/Accepter/Conge/([^/]++)(*:483)'
                .'|/Refuserr/Conge/([^/]++)(*:515)'
                .'|/addFact/([^/]++)(*:540)'
                .'|/updateFact/([^/]++)(*:568)'
                .'|/de(?'
                    .'|leteFact/([^/]++)(*:599)'
                    .'|tailsFact/([^/]++)(*:625)'
                .')'
                .'|/PDFFact/([^/]++)(*:651)'
                .'|/produit/restaurant/([^/]++)(?'
                    .'|(*:690)'
                    .'|/edit(*:703)'
                    .'|(*:711)'
                .')'
                .'|/([^/]++)/(?'
                    .'|AfficherReclamationRecu(*:756)'
                    .'|Editstatus(*:774)'
                .')'
                .'|/s(?'
                    .'|upp/([^/]++)(*:800)'
                    .'|how/([^/]++)(*:820)'
                .')'
                .'|/([^/]++)/AfficherReclamationRecuC(*:863)'
                .'|/suppc/([^/]++)(*:886)'
                .'|/([^/]++)/AfficherReclamationRecuF(*:928)'
                .'|/supp(?'
                    .'|F/([^/]++)(*:954)'
                    .'|Rest/([^/]++)(*:975)'
                    .'|rimer(?'
                        .'|/([^/]++)(*:1000)'
                        .'|emp/([^/]++)(*:1021)'
                        .'|four/([^/]++)(*:1043)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1090)'
                .'|/modifRest/([^/]++)(*:1118)'
                .'|/S(?'
                    .'|upprimer(?'
                        .'|Stock/([^/]++)(*:1157)'
                        .'|/TypeConge/([^/]++)(*:1185)'
                        .'|TypeRec/([^/]++)(*:1210)'
                    .')'
                    .'|howS/([^/]++)(*:1233)'
                .')'
                .'|/Modifier(?'
                    .'|Stock/([^/]++)(*:1269)'
                    .'|/TypeConge/([^/]++)(*:1297)'
                .')'
                .'|/update/([^/]++)(*:1323)'
                .'|/verifier/([^/]++)(*:1350)'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1387)'
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
        197 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['idCategorie'], ['GET' => 0], null, false, true, null]],
        210 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['idCategorie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        218 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['idCategorie'], ['POST' => 0], null, false, true, null]],
        245 => [[['_route' => 'calcul', '_controller' => 'App\\Controller\\FactureController::calulT'], ['idCmd'], null, null, false, true, null]],
        273 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['idCmd'], ['GET' => 0], null, false, true, null]],
        286 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['idCmd'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        294 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['idCmd'], ['POST' => 0], null, false, true, null]],
        331 => [[['_route' => 'ModifierConge', '_controller' => 'App\\Controller\\CongeController::ModifierConge'], ['id'], null, null, false, true, null]],
        359 => [[['_route' => 'Ufournisseur', '_controller' => 'App\\Controller\\FournisseurController::Update'], ['idFournisseur'], null, null, false, true, null]],
        399 => [[['_route' => 'SupprimerConge', '_controller' => 'App\\Controller\\CongeController::SupprimerConge'], ['id'], null, null, false, true, null]],
        426 => [[['_route' => 'Sfournisseur', '_controller' => 'App\\Controller\\FournisseurController::Supprimer'], ['idFournisseur'], null, null, false, true, null]],
        450 => [[['_route' => 'showf', '_controller' => 'App\\Controller\\FournisseurController::showOne'], ['idFournisseur'], null, null, false, true, null]],
        483 => [[['_route' => 'AccepterConge', '_controller' => 'App\\Controller\\CongeController::AccepterConge'], ['id'], null, null, false, true, null]],
        515 => [[['_route' => 'RefuserConge', '_controller' => 'App\\Controller\\CongeController::RefuserConge'], ['id'], null, null, false, true, null]],
        540 => [[['_route' => 'addFact', '_controller' => 'App\\Controller\\FactureController::ajouterFacture'], ['idCmd'], null, null, false, true, null]],
        568 => [[['_route' => 'updateFact', '_controller' => 'App\\Controller\\FactureController::modifierFacture'], ['numFacture'], null, null, false, true, null]],
        599 => [[['_route' => 'deleteFact', '_controller' => 'App\\Controller\\FactureController::supprimerFacture'], ['numFacture'], null, null, false, true, null]],
        625 => [[['_route' => 'detailsFact', '_controller' => 'App\\Controller\\FactureController::showDetailsFact'], ['numFacture'], null, null, false, true, null]],
        651 => [[['_route' => 'PDFFact', '_controller' => 'App\\Controller\\FactureController::showPDFFact'], ['numFacture'], null, null, false, true, null]],
        690 => [[['_route' => 'app_produit_restaurant_show', '_controller' => 'App\\Controller\\ProduitRestaurantController::show'], ['idPdtrest'], ['GET' => 0], null, false, true, null]],
        703 => [[['_route' => 'app_produit_restaurant_edit', '_controller' => 'App\\Controller\\ProduitRestaurantController::edit'], ['idPdtrest'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        711 => [[['_route' => 'app_produit_restaurant_delete', '_controller' => 'App\\Controller\\ProduitRestaurantController::delete'], ['idPdtrest'], ['POST' => 0], null, false, true, null]],
        756 => [[['_route' => 'ReclamationRecu', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationController::AfficherReclamationRecu'], ['id'], null, null, false, false, null]],
        774 => [[['_route' => 'EditStatus', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationController::EditStatut'], ['id'], null, null, false, false, null]],
        800 => [[['_route' => 'r', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationController::SupprimerRec'], ['numReclamation'], null, null, false, true, null]],
        820 => [[['_route' => 'show_rec', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationController::show'], ['numReclamation'], ['GET' => 0], null, false, true, null]],
        863 => [[['_route' => 'ReclamationRecuC', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationEmpController::AfficherReclamationRecu'], ['id'], null, null, false, false, null]],
        886 => [[['_route' => 'rc', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationEmpController::SupprimerRec'], ['numReclamation'], null, null, false, true, null]],
        928 => [[['_route' => 'ReclamationRecuF', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationFController::AfficherReclamationRecu'], ['id'], null, null, false, false, null]],
        954 => [[['_route' => 'rf', '_controller' => 'App\\Controller\\ReclamationTas\\ReclamationFController::SupprimerRec'], ['numReclamation'], null, null, false, true, null]],
        975 => [[['_route' => 'suppRest', '_controller' => 'App\\Controller\\RestaurantController::supprimerRestaurant'], ['idRest'], null, null, false, true, null]],
        1000 => [[['_route' => 'supprimer_role', '_controller' => 'App\\Controller\\role\\AjoutRoleController::supprimer'], ['idRole'], null, null, false, true, null]],
        1021 => [[['_route' => 'supprimer_utilisateur_employee', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::supprimer'], ['id'], null, null, false, true, null]],
        1043 => [[['_route' => 'supprimer_utilisateur_fournisseur', '_controller' => 'App\\Controller\\utilisateur\\FournisseurController::supprimer'], ['id'], null, null, false, true, null]],
        1090 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1118 => [[['_route' => 'modifRest', '_controller' => 'App\\Controller\\RestaurantController::modifierRestaurant'], ['idRest'], null, null, false, true, null]],
        1157 => [[['_route' => 'Sstock', '_controller' => 'App\\Controller\\StockController::Supprimer'], ['idStock'], null, null, false, true, null]],
        1185 => [[['_route' => 'SupprimerTypeConge', '_controller' => 'App\\Controller\\TypeCongeController::SupprimerTypeConge'], ['id'], null, null, false, true, null]],
        1210 => [[['_route' => 's', '_controller' => 'App\\Controller\\typeReclamation\\TypeRecController::SupprimerTypeRec'], ['idTypeReclamation'], null, null, false, true, null]],
        1233 => [[['_route' => 'show', '_controller' => 'App\\Controller\\StockController::showOne'], ['idStock'], null, null, false, true, null]],
        1269 => [[['_route' => 'Ustock', '_controller' => 'App\\Controller\\StockController::UpdateS'], ['idStock'], null, null, false, true, null]],
        1297 => [[['_route' => 'ModifierTypeConge', '_controller' => 'App\\Controller\\TypeCongeController::ModifierTypeConge'], ['id'], null, null, false, true, null]],
        1323 => [[['_route' => 'update', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::update'], ['id'], null, null, false, true, null]],
        1350 => [[['_route' => 'verifier', '_controller' => 'App\\Controller\\utilisateur\\EmployeController::verifier'], ['id'], null, null, false, true, null]],
        1387 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
