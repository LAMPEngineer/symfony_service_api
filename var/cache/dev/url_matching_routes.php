<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/consume/api' => [[['_route' => 'app_consume_callapi', '_controller' => 'App\\Controller\\ConsumeController::callapi'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'employee_list', '_controller' => 'App\\Controller\\EmployeeController::index'], null, null, null, false, false, null]],
        '/employees' => [[['_route' => 'get_employees', '_controller' => 'App\\Controller\\EmployeeController::getAll'], null, ['GET' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
