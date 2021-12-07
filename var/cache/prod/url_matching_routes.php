<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/a-propos' => [[['_route' => 'a_propos', '_controller' => 'App\\Controller\\AProposController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/actualites' => [[['_route' => 'actualites', '_controller' => 'App\\Controller\\BlogpostController::actualites'], null, null, null, false, false, null]],
        '/adoption' => [[['_route' => 'adoption', '_controller' => 'App\\Controller\\ChatController::adoption'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'compte', '_controller' => 'App\\Controller\\CompteController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/disparu' => [[['_route' => 'disparu', '_controller' => 'App\\Controller\\DisparuController::index'], null, null, null, false, false, null]],
        '/fa' => [[['_route' => 'fa', '_controller' => 'App\\Controller\\FaController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/libre' => [[['_route' => 'libre', '_controller' => 'App\\Controller\\LibreController::index'], null, null, null, false, false, null]],
        '/mention' => [[['_route' => 'mention', '_controller' => 'App\\Controller\\MentionController::index'], null, null, null, false, false, null]],
        '/parrain' => [[['_route' => 'parrain', '_controller' => 'App\\Controller\\ParrainController::index'], null, null, null, false, false, null]],
        '/partenaire' => [[['_route' => 'partenaire', '_controller' => 'App\\Controller\\PartenaireController::index'], null, null, null, false, false, null]],
        '/chatCategorie' => [[['_route' => 'portfolio', '_controller' => 'App\\Controller\\PortfolioController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/actualites/([^/]++)(*:27)'
                .'|/chats/([^/]++)(*:49)'
                .'|/portfolio/([^/]++)(*:75)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'actualites_detail', '_controller' => 'App\\Controller\\BlogpostController::detail'], ['slug'], null, null, false, true, null]],
        49 => [[['_route' => 'chat_details', '_controller' => 'App\\Controller\\ChatController::details'], ['nom'], null, null, false, true, null]],
        75 => [
            [['_route' => 'portfolio_categorie', '_controller' => 'App\\Controller\\PortfolioController::categorie'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
