<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/contacts' => [[['_route' => 'admin_contact_list', '_controller' => 'App\\Controller\\Admin\\ContactController::listContactRequests'], null, null, null, true, false, null]],
        '/admin/images/ajouter' => [[['_route' => 'admin_image_create', '_controller' => 'App\\Controller\\Admin\\GalerieController::addImage'], null, null, null, false, false, null]],
        '/admin/images' => [[['_route' => 'admin_image_list', '_controller' => 'App\\Controller\\Admin\\GalerieController::index'], null, null, null, false, false, null]],
        '/admin/projects' => [[['_route' => 'admin_project_list', '_controller' => 'App\\Controller\\Admin\\ProjectController::list'], null, null, null, true, false, null]],
        '/admin/projects/new' => [[['_route' => 'admin_project_create', '_controller' => 'App\\Controller\\Admin\\ProjectController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/technologies' => [[['_route' => 'admin_technology_list', '_controller' => 'App\\Controller\\Admin\\TechnologyController::listTechnologies'], null, null, null, true, false, null]],
        '/admin/technologies/new' => [[['_route' => 'admin_technology_new', '_controller' => 'App\\Controller\\Admin\\TechnologyController::createTechnology'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, true, false, null]],
        '/admin/profile/edit' => [[['_route' => 'admin_profile_edit', '_controller' => 'App\\Controller\\AdminController::editProfile'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/projects' => [[['_route' => 'project_list', '_controller' => 'App\\Controller\\HomeController::projectsx'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'skills_list', '_controller' => 'App\\Controller\\HomeController::skills'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|contacts/(?'
                        .'|(\\d+)/delete(*:41)'
                        .'|(\\d+)(*:53)'
                    .')'
                    .'|images/([^/]++)/delete(*:83)'
                    .'|proje(?'
                        .'|ts/([^/]++)/galerie(*:117)'
                        .'|cts/([^/]++)/(?'
                            .'|edit(*:145)'
                            .'|delete(*:159)'
                        .')'
                    .')'
                    .'|technologies/([^/]++)/(?'
                        .'|edit(*:198)'
                        .'|delete(*:212)'
                    .')'
                .')'
                .'|/(\\d+)(*:228)'
                .'|/(\\d+)/galerie(*:250)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'admin_contact_delete', '_controller' => 'App\\Controller\\Admin\\ContactController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        53 => [[['_route' => 'admin_contact_show', '_controller' => 'App\\Controller\\Admin\\ContactController::show'], ['id'], null, null, false, true, null]],
        83 => [[['_route' => 'admin_image_delete', '_controller' => 'App\\Controller\\Admin\\GalerieController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        117 => [[['_route' => 'admin_project_gallery', '_controller' => 'App\\Controller\\Admin\\GalerieController::galerie'], ['projetId'], null, null, false, false, null]],
        145 => [[['_route' => 'admin_project_edit', '_controller' => 'App\\Controller\\Admin\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        159 => [[['_route' => 'admin_project_delete', '_controller' => 'App\\Controller\\Admin\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        198 => [[['_route' => 'admin_technology_edit', '_controller' => 'App\\Controller\\Admin\\TechnologyController::editTechnology'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'admin_technology_delete', '_controller' => 'App\\Controller\\Admin\\TechnologyController::deleteTechnology'], ['id'], ['POST' => 0], null, false, false, null]],
        228 => [[['_route' => 'project_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
        250 => [
            [['_route' => 'project_gallery', '_controller' => 'App\\Controller\\HomeController::galerie'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
