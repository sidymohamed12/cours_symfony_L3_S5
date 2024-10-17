<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'ux_live_component' => [['_live_component', '_live_action'], ['_live_action' => 'get'], [], [['variable', '/', '[^/]++', '_live_action', true], ['variable', '/', '[^/]++', '_live_component', true], ['text', '/_components']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'article.index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], [], []],
    'client.index' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/client']], [], [], []],
    'client.create' => [[], ['_controller' => 'App\\Controller\\ClientController::create'], [], [['text', '/client/create']], [], [], []],
    'client.show' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client/show']], [], [], []],
    'client.showDette' => [['id', 'etat'], ['id' => null, 'etat' => null, '_controller' => 'App\\Controller\\ClientController::showByEtat'], [], [['variable', '/', '[^/]++', 'etat', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/client/show']], [], [], []],
    'dette.index' => [[], ['_controller' => 'App\\Controller\\DetteController::index'], [], [['text', '/dette']], [], [], []],
    'users.index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users']], [], [], []],
    'user.create' => [[], ['_controller' => 'App\\Controller\\UsersController::create'], [], [['text', '/user/create']], [], [], []],
    'App\Controller\ArticleController::index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], [], []],
    'App\Controller\ClientController::index' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/client']], [], [], []],
    'App\Controller\ClientController::create' => [[], ['_controller' => 'App\\Controller\\ClientController::create'], [], [['text', '/client/create']], [], [], []],
    'App\Controller\ClientController::show' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client/show']], [], [], []],
    'App\Controller\ClientController::showByEtat' => [['id', 'etat'], ['id' => null, 'etat' => null, '_controller' => 'App\\Controller\\ClientController::showByEtat'], [], [['variable', '/', '[^/]++', 'etat', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/client/show']], [], [], []],
    'App\Controller\DetteController::index' => [[], ['_controller' => 'App\\Controller\\DetteController::index'], [], [['text', '/dette']], [], [], []],
    'App\Controller\UsersController::index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users']], [], [], []],
    'App\Controller\UsersController::create' => [[], ['_controller' => 'App\\Controller\\UsersController::create'], [], [['text', '/user/create']], [], [], []],
];
