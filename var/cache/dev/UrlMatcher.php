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
        '/AfficheB' => [[['_route' => 'AfficheBillet', '_controller' => 'App\\Controller\\BilletController::Affiche'], null, null, null, false, false, null]],
        '/AfficheUnB' => [[['_route' => 'AfficheUnBillet', '_controller' => 'App\\Controller\\BilletController::Afficheunbillet'], null, null, null, false, false, null]],
        '/billet/ajouter' => [[['_route' => 'app_billet_ajouter_billet', '_controller' => 'App\\Controller\\BilletController::Ajouter_billet'], null, null, null, false, false, null]],
        '/ReserverTicket' => [[['_route' => 'ReserverTicket', '_controller' => 'App\\Controller\\BilletController::ReserverTicket'], null, null, null, false, false, null]],
        '/equipe' => [[['_route' => 'equipe', '_controller' => 'App\\Controller\\EquipeController::index'], null, null, null, false, false, null]],
        '/AfficheE' => [[['_route' => 'AfficheEquipe', '_controller' => 'App\\Controller\\EquipeController::Affiche'], null, null, null, false, false, null]],
        '/equipe/ajouter' => [[['_route' => 'app_equipe_ajouter_equipe', '_controller' => 'App\\Controller\\EquipeController::Ajouter_equipe'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/AfficheEv' => [[['_route' => 'AfficheEvenement', '_controller' => 'App\\Controller\\EvenementController::Affiche'], null, null, null, false, false, null]],
        '/AfficheUnEv' => [[['_route' => 'AfficheUnEvenement', '_controller' => 'App\\Controller\\EvenementController::AfficheUnEvenement'], null, null, null, false, false, null]],
        '/evenement/ajouter' => [[['_route' => 'app_evenement_ajouter', '_controller' => 'App\\Controller\\EvenementController::Ajouter'], null, null, null, false, false, null]],
        '/hebergement' => [[['_route' => 'hebergement', '_controller' => 'App\\Controller\\HebergementController::index'], null, null, null, false, false, null]],
        '/joueur' => [[['_route' => 'joueur', '_controller' => 'App\\Controller\\JoueurController::index'], null, null, null, false, false, null]],
        '/AfficheJ' => [[['_route' => 'AfficheJoueur', '_controller' => 'App\\Controller\\JoueurController::Affiche'], null, null, null, false, false, null]],
        '/joueur/ajouter' => [[['_route' => 'app_joueur_ajouter_joueur', '_controller' => 'App\\Controller\\JoueurController::Ajouter_joueur'], null, null, null, false, false, null]],
        '/kiosque' => [[['_route' => 'kiosque', '_controller' => 'App\\Controller\\KiosqueController::index'], null, null, null, false, false, null]],
        '/matche' => [[['_route' => 'matche', '_controller' => 'App\\Controller\\MatcheController::index'], null, null, null, false, false, null]],
        '/AfficheM' => [[['_route' => 'AfficheMatche', '_controller' => 'App\\Controller\\MatcheController::Affiche'], null, null, null, false, false, null]],
        '/AfficheUnM' => [[['_route' => 'AfficheUnMatche', '_controller' => 'App\\Controller\\MatcheController::Afficheunmatche'], null, null, null, false, false, null]],
        '/ListeM' => [[['_route' => 'ListeM', '_controller' => 'App\\Controller\\MatcheController::ListeM'], null, ['GET' => 0], null, false, false, null]],
        '/matche/ajouter' => [[['_route' => 'app_matche_ajouter_matche', '_controller' => 'App\\Controller\\MatcheController::Ajouter_matche'], null, null, null, false, false, null]],
        '/stade' => [[['_route' => 'stade', '_controller' => 'App\\Controller\\StadeController::index'], null, null, null, false, false, null]],
        '/AfficheStade' => [[['_route' => 'AfficheStade', '_controller' => 'App\\Controller\\StadeController::Affiche'], null, null, null, false, false, null]],
        '/stade/AddStade' => [[['_route' => 'AddStade', '_controller' => 'App\\Controller\\StadeController::Add'], null, null, null, false, false, null]],
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
                .'|/delete(?'
                    .'|/([^/]++)(?'
                        .'|(*:191)'
                    .')'
                    .'|Matche/([^/]++)(*:215)'
                .')'
                .'|/update(?'
                    .'|/([^/]++)(*:243)'
                    .'|match/([^/]++)(*:265)'
                .')'
                .'|/e(?'
                    .'|quipe/update/([^/]++)(*:300)'
                    .'|venement/update/([^/]++)(*:332)'
                .')'
                .'|/joueur/update/([^/]++)(*:364)'
                .'|/ListByMatche/([^/]++)(*:394)'
                .'|/stade/(?'
                    .'|deleteStade/([^/]++)(*:432)'
                    .'|UpdateStade/([^/]++)(*:460)'
                .')'
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
        191 => [
            [['_route' => 'supprimerbillet', '_controller' => 'App\\Controller\\BilletController::Delete_billet'], ['id'], null, null, false, true, null],
            [['_route' => 'supprimer', '_controller' => 'App\\Controller\\EquipeController::Delete_joueur'], ['id'], null, null, false, true, null],
            [['_route' => 'deleteEvenement', '_controller' => 'App\\Controller\\EvenementController::Delete'], ['id'], null, null, false, true, null],
            [['_route' => 'delete', '_controller' => 'App\\Controller\\JoueurController::Delete_joueur'], ['id'], null, null, false, true, null],
        ],
        215 => [[['_route' => 'deleteMatche', '_controller' => 'App\\Controller\\MatcheController::Delete_matche'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'modifierbillet', '_controller' => 'App\\Controller\\BilletController::Update'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'modifierMatche', '_controller' => 'App\\Controller\\MatcheController::Update'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'modifier', '_controller' => 'App\\Controller\\EquipeController::Update'], ['id'], null, null, false, true, null]],
        332 => [[['_route' => 'modifierEvenement', '_controller' => 'App\\Controller\\EvenementController::Update'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'update', '_controller' => 'App\\Controller\\JoueurController::Update'], ['id'], null, null, false, true, null]],
        394 => [[['_route' => 'ListByMatche', '_controller' => 'App\\Controller\\MatcheController::ListBilletByMatche'], ['id'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'deleteStade', '_controller' => 'App\\Controller\\StadeController::deleteS'], ['id'], null, null, false, true, null]],
        460 => [
            [['_route' => 'UpdateStade', '_controller' => 'App\\Controller\\StadeController::Update'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
