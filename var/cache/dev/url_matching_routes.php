<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'sonata_admin_redirect', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'sonata.admin.action.dashboard'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'sonata.admin.action.search'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/meta/list' => [[['_route' => 'admin_app_meta_list', '_controller' => 'sonata.admin.controller.crud::listAction', '_sonata_admin' => 'admin.meta', '_sonata_name' => 'admin_app_meta_list'], null, null, null, false, false, null]],
        '/admin/app/meta/create' => [[['_route' => 'admin_app_meta_create', '_controller' => 'sonata.admin.controller.crud::createAction', '_sonata_admin' => 'admin.meta', '_sonata_name' => 'admin_app_meta_create'], null, null, null, false, false, null]],
        '/admin/app/meta/batch' => [[['_route' => 'admin_app_meta_batch', '_controller' => 'sonata.admin.controller.crud::batchAction', '_sonata_admin' => 'admin.meta', '_sonata_name' => 'admin_app_meta_batch'], null, null, null, false, false, null]],
        '/admin/app/meta/export' => [[['_route' => 'admin_app_meta_export', '_controller' => 'sonata.admin.controller.crud::exportAction', '_sonata_admin' => 'admin.meta', '_sonata_name' => 'admin_app_meta_export'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:48)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:90)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:129)'
                    .'|wdt/([^/]++)(*:149)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:195)'
                            .'|router(*:209)'
                            .'|exception(?'
                                .'|(*:229)'
                                .'|\\.css(*:242)'
                            .')'
                        .')'
                        .'|(*:252)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:326)'
                    .'|app/meta/([^/]++)/(?'
                        .'|edit(*:359)'
                        .'|delete(*:373)'
                        .'|show(*:385)'
                    .')'
                .')'
                .'|/(en|ru|hy)?(*:407)'
                .'|/([^/]++)/check_form(*:435)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        90 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        129 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        149 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        209 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        229 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        242 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        252 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        326 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        359 => [[['_route' => 'admin_app_meta_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'admin.meta', '_sonata_name' => 'admin_app_meta_edit'], ['id'], null, null, false, false, null]],
        373 => [[['_route' => 'admin_app_meta_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'admin.meta', '_sonata_name' => 'admin_app_meta_delete'], ['id'], null, null, false, false, null]],
        385 => [[['_route' => 'admin_app_meta_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'admin.meta', '_sonata_name' => 'admin_app_meta_show'], ['id'], null, null, false, false, null]],
        407 => [[['_route' => 'page_home', '_locale' => 'ru', '_controller' => 'App\\Controller\\MainController::index'], ['_locale'], null, null, false, true, null]],
        435 => [
            [['_route' => 'page_form', '_controller' => 'App\\Controller\\MainController::checkForm'], ['_locale'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
