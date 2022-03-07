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
        '/agence' => [[['_route' => 'agence', '_controller' => 'App\\Controller\\AgenceController::index'], null, null, null, false, false, null]],
        '/artiste' => [[['_route' => 'artiste', '_controller' => 'App\\Controller\\ArtisteController::index'], null, null, null, false, false, null]],
        '/billet' => [[['_route' => 'billet', '_controller' => 'App\\Controller\\BilletController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/AfficherCommandes' => [[['_route' => 'AfficherCommandes', '_controller' => 'App\\Controller\\CommandeController::AfficherCommandes'], null, null, null, false, false, null]],
        '/AjouterCommande' => [[['_route' => 'AjouterCommande', '_controller' => 'App\\Controller\\CommandeController::AjouterCommande'], null, null, null, false, false, null]],
        '/EnrichirPanier' => [[['_route' => 'EnrichirPanier', '_controller' => 'App\\Controller\\CommandeController::EnrechirPanier'], null, null, null, false, false, null]],
        '/AjouterCommandeFront' => [[['_route' => 'AjouterCommandeFront', '_controller' => 'App\\Controller\\CommandeController::AjouterCommandeFront'], null, null, null, false, false, null]],
        '/equipe' => [[['_route' => 'equipe', '_controller' => 'App\\Controller\\EquipeController::index'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/hebergement' => [[['_route' => 'hebergement', '_controller' => 'App\\Controller\\HebergementController::index'], null, null, null, false, false, null]],
        '/joueur' => [[['_route' => 'joueur', '_controller' => 'App\\Controller\\JoueurController::index'], null, null, null, false, false, null]],
        '/kiosque' => [[['_route' => 'kiosque', '_controller' => 'App\\Controller\\KiosqueController::index'], null, null, null, false, false, null]],
        '/AfficheKiosque' => [[['_route' => 'AfficheKiosque', '_controller' => 'App\\Controller\\KiosqueController::Affiche'], null, null, null, false, false, null]],
        '/kiosque/AddKiosque' => [[['_route' => 'AddKiosque', '_controller' => 'App\\Controller\\KiosqueController::Add'], null, null, null, false, false, null]],
        '/matche' => [[['_route' => 'matche', '_controller' => 'App\\Controller\\MatcheController::index'], null, null, null, false, false, null]],
        '/AfficherProduit' => [[['_route' => 'AfficherProduit', '_controller' => 'App\\Controller\\ProduitController::AfficherProduit'], null, null, null, false, false, null]],
        '/AjouterProduit' => [[['_route' => 'AjouterProduit', '_controller' => 'App\\Controller\\ProduitController::AjouterProduit'], null, null, null, false, false, null]],
        '/AfficherProduitsFront' => [[['_route' => 'AfficherProduitsFront', '_controller' => 'App\\Controller\\ProduitController::AfficherProduitsFront'], null, null, null, false, false, null]],
        '/mesreservation' => [[['_route' => 'mesreservation', '_controller' => 'App\\Controller\\ReservationkController::Reservation'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stade' => [[['_route' => 'stade', '_controller' => 'App\\Controller\\StadeController::index'], null, null, null, false, false, null]],
        '/AfficheStade' => [[['_route' => 'AfficheStade', '_controller' => 'App\\Controller\\StadeController::Affiche'], null, null, null, false, false, null]],
        '/stade/AddStade' => [[['_route' => 'AddStade', '_controller' => 'App\\Controller\\StadeController::Add'], null, null, null, false, false, null]],
        '/AfficheUnStade' => [[['_route' => 'AfficheUnStade', '_controller' => 'App\\Controller\\StadeController::AfficheunStade'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/AfficherUsers' => [[['_route' => 'AfficherUsers', '_controller' => 'App\\Controller\\UserController::AfficherUsers'], null, null, null, false, false, null]],
        '/AjouterUser' => [[['_route' => 'AjouterUser', '_controller' => 'App\\Controller\\UserController::AjouterUser'], null, null, null, false, false, null]],
        '/inscrire' => [[['_route' => 'inscrire', '_controller' => 'App\\Controller\\UserController::Inscrire'], null, null, null, false, false, null]],
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
                .'|/Supprimer(?'
                    .'|Commande/([^/]++)(*:199)'
                    .'|DuPanier/([^/]++)(*:224)'
                    .'|Produit/([^/]++)(*:248)'
                    .'|User/([^/]++)(*:269)'
                .')'
                .'|/Modifier(?'
                    .'|Commande/([^/]++)(*:307)'
                    .'|Pro(?'
                        .'|duit/([^/]++)(*:334)'
                        .'|fil/([^/]++)(*:354)'
                    .')'
                    .'|User/([^/]++)(*:376)'
                .')'
                .'|/AjouterAuPanier/([^/]++)(*:410)'
                .'|/kiosque/(?'
                    .'|deleteKiosque/([^/]++)(*:452)'
                    .'|UpdateKiosque/([^/]++)(*:482)'
                .')'
                .'|/f(?'
                    .'|rontkiosque/([^/]++)(*:516)'
                    .'|acture/([^/]++)(*:539)'
                .')'
                .'|/rese(?'
                    .'|rvation/([^/]++)(?'
                        .'|/([^/]++)(*:584)'
                        .'|(*:592)'
                    .')'
                    .'|t\\-password/reset(?:/([^/]++))?(*:632)'
                .')'
                .'|/pay/([^/]++)/([^/]++)(*:663)'
                .'|/stade/(?'
                    .'|deleteStade/([^/]++)(*:701)'
                    .'|UpdateStade/([^/]++)(*:729)'
                .')'
                .'|/Profil(?'
                    .'|Back/([^/]++)(*:761)'
                    .'|/([^/]++)(*:778)'
                .')'
                .'|/ConfirmerCompte/([^/]++)(*:812)'
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
        199 => [[['_route' => 'SupprimerCommande', '_controller' => 'App\\Controller\\CommandeController::SupprimerCommande'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'SupprimerDuPanier', '_controller' => 'App\\Controller\\CommandeController::SupprimerDuPanier'], ['id'], null, null, false, true, null]],
        248 => [[['_route' => 'SupprimerProduit', '_controller' => 'App\\Controller\\ProduitController::SupprimerProduit'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'SupprimerUser', '_controller' => 'App\\Controller\\UserController::SupprimerUser'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'ModifierCommande', '_controller' => 'App\\Controller\\CommandeController::ModifierCommande'], ['id'], null, null, false, true, null]],
        334 => [[['_route' => 'ModifierProduit', '_controller' => 'App\\Controller\\ProduitController::ModifierProduit'], ['id'], null, null, false, true, null]],
        354 => [[['_route' => 'ModifierProfil', '_controller' => 'App\\Controller\\UserController::ModifierProfil'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'ModifierUser', '_controller' => 'App\\Controller\\UserController::ModifierUser'], ['id'], null, null, false, true, null]],
        410 => [[['_route' => 'AjouterAuPanier', '_controller' => 'App\\Controller\\CommandeController::AjouterAuPanier'], ['id'], null, null, false, true, null]],
        452 => [[['_route' => 'deleteKiosque', '_controller' => 'App\\Controller\\KiosqueController::deleteS'], ['id'], null, null, false, true, null]],
        482 => [[['_route' => 'UpdateKiosque', '_controller' => 'App\\Controller\\KiosqueController::Update'], ['id'], null, null, false, true, null]],
        516 => [[['_route' => 'frontkiosque', '_controller' => 'App\\Controller\\KiosqueController::afficher'], ['id'], null, null, false, true, null]],
        539 => [[['_route' => 'facture', '_controller' => 'App\\Controller\\ReservationkController::facture'], ['id'], null, null, false, true, null]],
        584 => [[['_route' => 'reservationk', '_controller' => 'App\\Controller\\ReservationkController::index'], ['id', 'type'], null, null, false, true, null]],
        592 => [[['_route' => 'offre', '_controller' => 'App\\Controller\\ReservationkController::TypeReservation'], ['id'], null, null, false, true, null]],
        632 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        663 => [[['_route' => 'pay', '_controller' => 'App\\Controller\\ReservationkController::pay'], ['id', 'type'], null, null, false, true, null]],
        701 => [[['_route' => 'deleteStade', '_controller' => 'App\\Controller\\StadeController::deleteS'], ['id'], null, null, false, true, null]],
        729 => [[['_route' => 'UpdateStade', '_controller' => 'App\\Controller\\StadeController::Update'], ['id'], null, null, false, true, null]],
        761 => [[['_route' => 'ProfilBack', '_controller' => 'App\\Controller\\UserController::ProfilBack'], ['id'], null, null, false, true, null]],
        778 => [[['_route' => 'Profil', '_controller' => 'App\\Controller\\UserController::Profil'], ['id'], null, null, false, true, null]],
        812 => [
            [['_route' => 'ConfirmerCompte', '_controller' => 'App\\Controller\\UserController::confirmerCompte'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
