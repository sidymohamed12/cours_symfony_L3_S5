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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article.index', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'client.index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client/create' => [[['_route' => 'client.create', '_controller' => 'App\\Controller\\ClientController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dette' => [[['_route' => 'dette.index', '_controller' => 'App\\Controller\\DetteController::index'], null, null, null, false, false, null]],
        '/dette/create' => [[['_route' => 'dette.create', '_controller' => 'App\\Controller\\DetteController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'users.index', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null]],
        '/user/create' => [[['_route' => 'user.create', '_controller' => 'App\\Controller\\UsersController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:78)'
                    .'|wdt/([^/]++)(*:97)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:138)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:175)'
                                .'|router(*:189)'
                                .'|exception(?'
                                    .'|(*:209)'
                                    .'|\\.css(*:222)'
                                .')'
                            .')'
                            .'|(*:232)'
                        .')'
                    .')'
                .')'
                .'|/client/show(?'
                    .'|(?:/([^/]++))?(*:272)'
                    .'|(?:/([^/]++)(?:/([^/]++))?)?(*:308)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        97 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        138 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        175 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        189 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        209 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        222 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        232 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        272 => [[['_route' => 'client.show', 'id' => null, '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        308 => [
            [['_route' => 'client.showDette', 'id' => null, 'etat' => null, '_controller' => 'App\\Controller\\ClientController::showByEtat'], ['id', 'etat'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
