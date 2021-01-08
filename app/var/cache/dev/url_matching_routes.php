<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/giveMeAll' => [[['_route' => 'app_getandpost_getall', '_controller' => 'App\\Controller\\GetAndPost::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/takeAll' => [[['_route' => 'app_getandpost_takeall', '_controller' => 'App\\Controller\\GetAndPost::takeAll'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/giveMeOne/([^/]++)(*:61)'
                .'|/takeOne/([^/]++)(*:85)'
                .'|/updateOne/([^/]++)(*:111)'
                .'|/lucky/number/([^/]++)(*:141)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'app_getandpost_getone', '_controller' => 'App\\Controller\\GetAndPost::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        85 => [[['_route' => 'app_getandpost_takeone', '_controller' => 'App\\Controller\\GetAndPost::takeOne'], ['id'], ['POST' => 0], null, false, true, null]],
        111 => [[['_route' => 'app_getandpost_updateone', '_controller' => 'App\\Controller\\GetAndPost::updateOne'], ['id'], ['POST' => 0], null, false, true, null]],
        141 => [
            [['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\Lucky::number'], ['max'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
