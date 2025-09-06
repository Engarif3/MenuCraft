<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/category' => [[['_route' => 'category_list', '_controller' => 'App\\Controller\\CategoryController::list'], null, null, null, false, false, null]],
        '/category/create' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\CategoryController::create'], null, null, null, false, false, null]],
        '/dishes' => [[['_route' => 'app_dishes', '_controller' => 'App\\Controller\\DishesController::index'], null, null, null, false, false, null]],
        '/dish/create' => [[['_route' => 'app_dish_create', '_controller' => 'App\\Controller\\DishesController::create'], null, null, null, false, false, null]],
        '/api/dishes' => [[['_route' => 'api_dishes', '_controller' => 'App\\Controller\\DishesController::dishes_list'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/category/(?'
                    .'|edit/([^/]++)(*:33)'
                    .'|delete/([^/]++)(*:55)'
                .')'
                .'|/dish/(?'
                    .'|(\\d+)(*:77)'
                    .'|([^/]++)/(?'
                        .'|edit(*:100)'
                        .'|delete(*:114)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], null, null, false, true, null]],
        55 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'app_dish', '_controller' => 'App\\Controller\\DishesController::dish'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'app_dish_edit', '_controller' => 'App\\Controller\\DishesController::edit'], ['id'], null, null, false, false, null]],
        114 => [
            [['_route' => 'app_dish_delete', '_controller' => 'App\\Controller\\DishesController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
