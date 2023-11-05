<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/task' => [[['_route' => 'app_task', '_controller' => 'App\\Controller\\TaskController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/product/([^/]++)(*:24)'
                .'|/task/(?'
                    .'|([^/]++)(*:48)'
                    .'|create(*:61)'
                    .'|([^/]++)/(?'
                        .'|update(*:86)'
                        .'|delete(*:99)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::view'], ['id'], null, null, false, true, null]],
        48 => [[['_route' => 'app_task_view', '_controller' => 'App\\Controller\\TaskController::view'], ['id'], null, null, false, true, null]],
        61 => [[['_route' => 'app_task_create', '_controller' => 'App\\Controller\\TaskController::create'], [], null, null, false, false, null]],
        86 => [[['_route' => 'app_task_update', '_controller' => 'App\\Controller\\TaskController::update'], ['id'], null, null, false, false, null]],
        99 => [
            [['_route' => 'app_task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
