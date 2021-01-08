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
                .'|/cart/([^/]++)(?'
                    .'|(*:59)'
                .')'
                .'|/giveMeOne/([^/]++)(*:86)'
                .'|/takeOne/([^/]++)(*:110)'
                .'|/updateOne/([^/]++)(*:137)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [
            [['_route' => 'app_cart_getcart', '_controller' => 'App\\Controller\\CartController::getCart'], ['uid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_cart_addproduct', '_controller' => 'App\\Controller\\CartController::addProduct'], ['uid'], ['POST' => 0], null, false, true, null],
        ],
        86 => [[['_route' => 'app_getandpost_getone', '_controller' => 'App\\Controller\\GetAndPost::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        110 => [[['_route' => 'app_getandpost_takeone', '_controller' => 'App\\Controller\\GetAndPost::takeOne'], ['id'], ['POST' => 0], null, false, true, null]],
        137 => [
            [['_route' => 'app_getandpost_updateone', '_controller' => 'App\\Controller\\GetAndPost::updateOne'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
