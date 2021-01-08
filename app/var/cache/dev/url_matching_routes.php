<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/cart/([^/]++)(?'
                    .'|(*:59)'
                    .'|/product(*:74)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [[['_route' => 'app_cart_getcart', '_controller' => 'App\\Controller\\CartController::getCart'], ['uid'], ['GET' => 0], null, false, true, null]],
        74 => [
            [['_route' => 'app_cart_addproduct', '_controller' => 'App\\Controller\\CartController::addProduct'], ['uid'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
